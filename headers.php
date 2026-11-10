<?php
$pageTitle = 'Результат get_headers()';
$headersUrl = 'https://httpbin.org/get';
$context = stream_context_create([
    'http' => [
        'method' => 'GET',
        'timeout' => 10,
        'ignore_errors' => true,
        'header' => "User-Agent: FeedbackFormLab/1.0\r\n"
    ],
    'ssl' => [
        'verify_peer' => true,
        'verify_peer_name' => true
    ]
]);

$headers = @get_headers($headersUrl, true, $context);

if ($headers === false) {
    $headersResult = "Не удалось получить HTTP-заголовки с адреса {$headersUrl}. Проверьте подключение к интернету и настройку allow_url_fopen на сервере.";
} else {
    $headersResult = print_r($headers, true);
}

require __DIR__ . '/includes/header.php';
?>

<main class="main-content">
    <section class="content-card headers-card">
        <div class="section-heading">
            <span class="eyebrow">Серверная часть PHP</span>
            <h1>Результат работы get_headers()</h1>
            <p class="section-description">Функция получает HTTP-заголовки указанного ресурса. Запрос выполняется сервером при открытии этой страницы.</p>
        </div>

        <div class="form-field">
            <label for="headers-url">Адрес запроса</label>
            <input id="headers-url" type="text" value="<?= htmlspecialchars($headersUrl, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" readonly>
        </div>

        <div class="form-field">
            <label for="headers-result">Заголовки ответа</label>
            <textarea id="headers-result" class="headers-output" rows="16" readonly><?= htmlspecialchars($headersResult, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></textarea>
            <span class="field-hint">Данные формируются PHP-функцией get_headers() при каждом обновлении страницы.</span>
        </div>

        <div class="form-actions">
            <a class="button button-primary" href="index.php">Вернуться к форме</a>
            <a class="button button-secondary" href="headers.php">Обновить заголовки</a>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
