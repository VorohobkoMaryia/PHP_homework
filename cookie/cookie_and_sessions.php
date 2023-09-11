<section>
    <form action="/cookie_and_sessions.php" method="post">
        <fieldset>
            <legend>Авторизация</legend>
            <p>
                <label for="login">Логин</label>
                <input type="text" name="login"/>
            </p>
            <p>
                <label for="password">Пароль</label>
                <input type="password" name="password"/>
            </p>
            <p>
                <button type="submit">Войти</button>
            </p>
        </fieldset>
    </form>
    <p>
        <a href="/page1.php">Стр1</a>
    </p>
    <p>
        <a href="/page2.php">Стр2</a>
    </p>
    <p>
        <a href="/page3.php">Стр3</a>
    </p>
</section>

<?php

setcookie("login", $_POST['login'],time()+3600);
setcookie("password", md5($_POST['password']),time()+3600);

if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}
setcookie('visit_count', $visit_count, time() + 3600);
echo "Количество посещений: $visit_count <br>";

// Получаем текущее имя страницы
$current_page = basename($_SERVER['PHP_SELF']);

// Получаем значение cookie
if (isset($_COOKIE['recent_pages'])) {
    $recent_pages = unserialize($_COOKIE['recent_pages']);
} else {
    $recent_pages = array();
}

// Добавляем текущую страницу в начало массива
array_unshift($recent_pages, $current_page);

// Удаляем дубликаты
$recent_pages = array_unique($recent_pages);

// Оставляем только первые три элемента
$recent_pages = array_slice($recent_pages, 0, 3);

// Обновляем значение cookie
setcookie('recent_pages', serialize($recent_pages), time() + 3600 * 24 * 365);

// Выводим список последних посещенных страниц
echo "Последние посещенные страницы:<br>";
foreach ($recent_pages as $page) {
    echo "<a href=\"$page\">$page</a><br>";
}
