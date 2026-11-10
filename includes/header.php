<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Самостоятельная работа по основам серверной веб-разработки — Feedback form.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?> — Feedback form</title>
    <link rel="icon" href="assets/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="index.php" aria-label="Московский Политех — главная страница">
                <img class="brand-logo" src="assets/logo.svg" alt="Логотип Московского Политеха">
            </a>
            <div class="header-title">
                <span class="header-kicker">Основы серверной веб-разработки</span>
                <span class="header-work-title">Feedback form</span>
            </div>
            <div class="header-spacer" aria-hidden="true"></div>
        </header>
