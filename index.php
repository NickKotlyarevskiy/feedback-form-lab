<?php
$pageTitle = 'Форма обратной связи';
require __DIR__ . '/includes/header.php';
?>

<main class="main-content">
    <section class="content-card">
        <div class="section-heading">
            <span class="eyebrow">Обратная связь</span>
            <h1>Расскажите, что вы думаете</h1>
            <p class="section-description">Заполните форму, чтобы отправить жалобу, предложение или благодарность.</p>
        </div>

        <form class="feedback-form" action="https://httpbin.org/post" method="POST" accept-charset="UTF-8">
            <div class="form-field">
                <label for="user-name">Имя пользователя</label>
                <input
                    id="user-name"
                    name="name"
                    type="text"
                    placeholder="Например, Иван Иванов"
                    autocomplete="name"
                    required
                >
            </div>

            <div class="form-field">
                <label for="user-email">E-mail пользователя</label>
                <input
                    id="user-email"
                    name="email"
                    type="email"
                    placeholder="name@example.com"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="form-field">
                <label for="appeal-type">Тип обращения</label>
                <select id="appeal-type" name="appeal_type" required>
                    <option value="" selected disabled>Выберите тип обращения</option>
                    <option value="Жалоба">Жалоба</option>
                    <option value="Предложение">Предложение</option>
                    <option value="Благодарность">Благодарность</option>
                </select>
            </div>

            <div class="form-field">
                <label for="appeal-message">Текст обращения</label>
                <textarea
                    id="appeal-message"
                    name="message"
                    rows="6"
                    minlength="5"
                    maxlength="3000"
                    placeholder="Напишите ваше обращение..."
                    required
                ></textarea>
                <span class="field-hint">Максимальная длина — 3000 символов.</span>
            </div>

            <fieldset class="response-options">
                <legend>Вариант ответа</legend>
                <label class="checkbox-option" for="response-sms">
                    <input id="response-sms" type="checkbox" name="response[]" value="SMS">
                    <span>SMS</span>
                </label>
                <label class="checkbox-option" for="response-email">
                    <input id="response-email" type="checkbox" name="response[]" value="E-mail">
                    <span>E-mail</span>
                </label>
            </fieldset>

            <div class="form-actions">
                <button class="button button-primary" type="submit">Отправить обращение</button>
                <button class="button button-secondary" type="button" onclick="window.location.href='headers.php'">Перейти на 2 страницу</button>
            </div>
        </form>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
