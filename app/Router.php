<?php

declare(strict_types=1);

namespace App;

class Router
{
    /** @var array<string, list<array{pattern: string, regex: string, handler: callable}>> */
    private array $routes = [];

    public function get(string $path, callable $handler): void
    {
        $this->add('GET', $path, $handler);
    }

    public function post(string $path, callable $handler): void
    {
        $this->add('POST', $path, $handler);
    }

    private function add(string $method, string $path, callable $handler): void
    {
        $normalized = $this->normalize($path);
        $regex = preg_replace('#\{([a-zA-Z_]+)\}#', '(?P<$1>[^/]+)', $normalized) ?? $normalized;
        $this->routes[$method][] = [
            'pattern' => $normalized,
            'regex' => '#^' . $regex . '$#',
            'handler' => $handler,
        ];
    }

    public function dispatch(string $method, string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';
        $path = $this->normalize($path);

        foreach ($this->routes[$method] ?? [] as $route) {
            if ($route['pattern'] === $path) {
                $route['handler']();
                return;
            }
            if (preg_match($route['regex'], $path, $matches)) {
                $params = array_filter(
                    $matches,
                    static fn ($k) => !is_int($k),
                    ARRAY_FILTER_USE_KEY,
                );
                $route['handler'](...array_values($params));
                return;
            }
        }

        http_response_code(404);
        echo View::render('errors/404', ['path' => $path]);
    }

    private function normalize(string $path): string
    {
        $path = '/' . trim($path, '/');
        return $path === '/' ? '/' : rtrim($path, '/');
    }
}
