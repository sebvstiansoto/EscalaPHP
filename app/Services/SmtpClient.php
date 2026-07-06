<?php

declare(strict_types=1);

namespace App\Services;

/**
 * Cliente SMTP mínimo (AUTH LOGIN + STARTTLS en 587).
 */
class SmtpClient
{
    public function send(
        string $host,
        int $port,
        string $user,
        string $pass,
        string $from,
        string $to,
        string $subject,
        string $htmlBody,
        bool $tls = true,
    ): bool {
        $socket = @stream_socket_client(
            "tcp://{$host}:{$port}",
            $errno,
            $errstr,
            15,
            STREAM_CLIENT_CONNECT,
        );

        if ($socket === false) {
            return false;
        }

        stream_set_timeout($socket, 15);

        if (!$this->expect($socket, 220)) {
            fclose($socket);
            return false;
        }

        $this->cmd($socket, 'EHLO escala.local');
        if (!$this->expect($socket, 250)) {
            fclose($socket);
            return false;
        }

        if ($tls && $port === 587) {
            $this->cmd($socket, 'STARTTLS');
            if (!$this->expect($socket, 220)) {
                fclose($socket);
                return false;
            }
            if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                fclose($socket);
                return false;
            }
            $this->cmd($socket, 'EHLO escala.local');
            if (!$this->expect($socket, 250)) {
                fclose($socket);
                return false;
            }
        }

        $this->cmd($socket, 'AUTH LOGIN');
        if (!$this->expect($socket, 334)) {
            fclose($socket);
            return false;
        }
        $this->cmd($socket, base64_encode($user));
        if (!$this->expect($socket, 334)) {
            fclose($socket);
            return false;
        }
        $this->cmd($socket, base64_encode($pass));
        if (!$this->expect($socket, 235)) {
            fclose($socket);
            return false;
        }

        $this->cmd($socket, 'MAIL FROM:<' . $from . '>');
        if (!$this->expect($socket, 250)) {
            fclose($socket);
            return false;
        }
        $this->cmd($socket, 'RCPT TO:<' . $to . '>');
        if (!$this->expect($socket, 250)) {
            fclose($socket);
            return false;
        }
        $this->cmd($socket, 'DATA');
        if (!$this->expect($socket, 354)) {
            fclose($socket);
            return false;
        }

        $headers = implode("\r\n", [
            "From: {$from}",
            "To: {$to}",
            'Subject: ' . $this->encodeSubject($subject),
            'MIME-Version: 1.0',
            'Content-Type: text/html; charset=UTF-8',
            'Content-Transfer-Encoding: 8bit',
        ]);

        $message = $headers . "\r\n\r\n" . $htmlBody . "\r\n.";
        fwrite($socket, $message . "\r\n");
        if (!$this->expect($socket, 250)) {
            fclose($socket);
            return false;
        }

        $this->cmd($socket, 'QUIT');
        fclose($socket);

        return true;
    }

    /** @param resource $socket */
    private function cmd($socket, string $line): void
    {
        fwrite($socket, $line . "\r\n");
    }

    /** @param resource $socket */
    private function expect($socket, int $code): bool
    {
        $response = '';
        while (($line = fgets($socket, 512)) !== false) {
            $response .= $line;
            if (isset($line[3]) && $line[3] === ' ') {
                break;
            }
        }

        return str_starts_with($response, (string) $code);
    }

    private function encodeSubject(string $subject): string
    {
        if (preg_match('/[^\x20-\x7E]/', $subject)) {
            return '=?UTF-8?B?' . base64_encode($subject) . '?=';
        }

        return $subject;
    }
}
