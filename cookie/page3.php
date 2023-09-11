<p>
        <a href="/cookie_and_sessions.php">Вернуться</a>
</p>

<?php
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
?>
