<section class="admin-page">
    <h1>Logs (últimas 100 líneas)</h1>
    <pre style="background:#111;color:#0f0;padding:1rem;overflow:auto;max-height:60vh;font-size:.8rem"><?php foreach ($lines as $line) echo htmlspecialchars($line); ?></pre>
</section>
