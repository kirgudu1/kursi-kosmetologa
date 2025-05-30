<?php
include "meta.php"; // Подключаем файл с мета-информацией
$page = basename($_SERVER['PHP_SELF']);
$title = $meta_tags[$page]['title'] ?? "По умолчанию";
$description = $meta_tags[$page]['description'] ?? "Описание по умолчанию";
$h1 = $meta_tags[$page]['h1'] ?? $title; // Если H1 не указан, используем Title
$content = $meta_tags[$page]['content'] ?? ""; // Первый абзац после H1
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css?v=<?= rand(1000, 9999) ?>">

<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($description) ?>">
	
	

</head>
<body>

<!-- Подключаем верхнее меню -->
<?php include 'header.php'; ?>



<?php
// Собираем список ТОП-доставок, чтобы sidebar.php использовал его
$sushiBlocks = [];
$rank = 1;

// Ищем все блоки с ТОП-доставками на странице
foreach (glob("*.php") as $filename) {
    if ($filename !== "sidebar.php" && $filename !== "header.php" && $filename !== "footer.php") {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML(file_get_contents($filename));
        $xpath = new DOMXPath($dom);
        $nodes = $xpath->query('//div[contains(@class, "sushi-ranking")]');

        foreach ($nodes as $node) {
            $titleNode = $xpath->query('.//h2', $node);
            $title = $titleNode->length > 0 ? $titleNode->item(0)->nodeValue : "Без названия";
            $sushiBlocks[] = $title;
            $rank++;
        }
    }
}
?>

<!-- Подключаем боковое меню -->
<?php include 'sidebar.php'; ?>



	
	

    <!-- Основной контент -->
	
	    <div class="content">
   <div class="sushi-block">
   
   <!-- ======== МОЙ КОНТЕНТ НАЧАЛО ======== -->
	
<!-- ======== Заголовок страницы города ======== -->
<div class="city-header">
<h1><?= htmlspecialchars($h1) ?></h1>
<?php if (!empty($content)): ?>
    <p><?= nl2br(htmlspecialchars($content)) ?></p>
<?php endif; ?>
</div>
<!-- ======== Конец заголовка страницы города ======== -->
	<?php include 'rating-info.php'; ?>
<!--startblok-->
<!-- Главная карточка "Курсы дерматологии и анатомии лица" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы дерматологии и анатомии лица</div>
<h2>Курсы дерматологии и анатомии лица</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (1–2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 100 ₽/мес.</span> (4 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 900 ₽</span> <span class="rating-count"><del>10 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">30%</span> в акции для новых студентов</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы дерматологии и анатомии лица»</strong> в <strong>Челябинске</strong> — для всех, кто хочет овладеть профессией косметолога и получить глубокие знания в области дерматологии.</p>
<p>Вы изучите анатомию лица и шеи, типы кожи, а также основные аспекты ухода за кожей.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет углубить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>40</strong> ак. часов</span> <span><strong>8</strong> уроков</span> <span><strong>4</strong> процедур</span> <span><strong>1–2</strong> месяца</span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Строение кожи и ее функции, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Анатомия лица и шеи, кожные заболевания</td>
</tr>
<tr>
<td>🎨 Уход за кожей</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Anti-age процедуры и уход по возрасту</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>🧴 Организовывать рабочее место косметолога</li>
<li>🧐 Разбираться в типах кожи</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>🎯 Оценивать состояние кожи и рекомендовать уходовые процедуры</li>
<li>📋 Оформлять косметологический кабинет согласно санитарным нормам</li>
<li>📜 Получать диплом специалиста в области дерматологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс аппаратной косметологии</div>
<h2>Курс аппаратной косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (на 3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 200 ₽</span> <span class="rating-count"><del>23 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Челябинске</strong> — идеальный выбор для желающих начать карьеру в индустрии красоты.</p>
<p>Программа включает обучающие занятия по современным технологиям аппаратной косметологии, включая дарсонвализацию, микротоки, лазерную биоревитализацию и другие.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет усовершенствовать свои навыки в области красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>11</strong> уроков</span>
<span><strong>6</strong> процедур</span>
<span><strong>3 месяца</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Техника безопасности, дарсонвализация, основы микротоковой терапии</td>
</tr>
<tr>
<td>📈 Продвинутые технологии</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Лазерная биоревитализация, RF-лифтинг, кавитация</td>
</tr>
<tr>
<td>🎨 Аппаратные пилинги</td>
<td><span class="price-highlight">10 ч / 4 урока</span></td>
<td>Гидропилинг, газожидкостный пилинг, УЗ-пилинг</td>
</tr>
<tr>
<td>💼 Практика на клиентах</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Отработка навыков на моделях</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💆‍♀️ Выполнять аппаратные процедуры восстановления кожи</li>
<li>⚙️ Использовать косметологические аппараты</li>
<li>💡 Проводить пилинги и омолаживающие процедуры</li>
<li>📊 Провести профессиональную диагностику состояния кожи</li>
<li>🌟 Корректировать фигуру с помощью аппаратных методик</li>
<li>🏆 Получить сертификат об окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс шугаринга</div>
<h2>Курс шугаринга</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1-2 дня)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 500 ₽</span> <span class="rating-count"><del>17 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период распродаж</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, ул. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Челябинске</strong> — идеальный выбор для начинающих и опытных мастеров, кто хочет освоить популярную технику депиляции.</p>
<p>Вы изучите три техники работы с сахарной пастой, а также научитесь избегать распространенных ошибок.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для личной практики, так и для старта карьеры в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> процедуры</span>
<span><strong>1-2</strong> дня</span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техника шугаринга, подготовка моделей</td>
</tr>
<tr>
<td>📈 Депиляция зон</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Работа с подмышками, голенями, бикини</td>
</tr>
<tr>
<td>🎓 Работа с клиентами</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Коммуникация с клиентами, конфликтные ситуации</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>📏 Выполнять шугаринг разных зон</li>
<li>🧴 Подбирать косметику для процедур</li>
<li>😊 Обеспечивать комфорт клиенту во время процедуры</li>
<li>🛡️ Учитывать противопоказания и уход после процедуры</li>
<li>🔧 Работать с различными типами кожи</li>
<li>💼 Создавать собственную клиентскую базу</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс эстетической косметологии</div>
<h2>Курс эстетической косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">26 600 ₽</span> <span class="rating-count"><del>44 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Челябинске</strong> — отличная возможность для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Программа охватывает диагностику и лечение кожи, а также выполнение популярных косметологических процедур.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс даст вам возможность быстро выйти на рынок и начинать зарабатывать.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>10</strong> процедур</span>
<span><strong>2 месяца</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Способы ухода, чистки кожи</td>
</tr>
<tr>
<td>🎨 Процедуры по уходу</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Маски и пилинги</td>
</tr>
<tr>
<td>💆 Практика на клиенте</td>
<td><span class="price-highlight">20 ч / 3 урока</span></td>
<td>Карбокситерапия, чистка лица</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💡 Выполнять процедуры по уходу за кожей</li>
<li>🎯 Осуществлять диагностику кожи и подбирать уход</li>
<li>💆 Выполнять механическую чистку лица</li>
<li>🌿 Проводить процедуры карбокситерапии</li>
<li>📚 Знать профессиональные косметические средства</li>
<li>📋 Получить диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс этики и психологии общения с клиентом в косметологии</div>
<h2>Курс этики и психологии общения с клиентом в косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 500 ₽</span> <span class="rating-count"><del>10 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при оформлении заявки.</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Челябинске</strong> — идеальный выбор для косметологов, желающих улучшить взаимодействие с клиентами.</p>
<p>Программа охватывает психологию общения, этические нормы и корпоративную культуру в косметологии.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит для начинающих и опытных специалистов, улучшая их профессиональные качества и увеличивая количество постоянных клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>4</strong> урока</span>
<span><strong>0</strong> процедур</span>
<span><strong>1 день</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этапы грамотной коммуникации, создание профессионального имиджа</td>
</tr>
<tr>
<td>📜 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Основные принципы профессиональной этики, общение во время процедуры</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры и инструменты для ее формирования</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов и типы клиентов</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💬 Выстраивать положительные взаимоотношения с клиентами</li>
<li>🧩 Находить подход к любому типу клиента</li>
<li>📈 Повышать свои продажи через понимание потребностей</li>
<li>🤝 Работать в команде, создавая положительный имидж работодателя</li>
<li>📝 Избегать ошибок в корпоративной культуре</li>
<li>📋 Получить диплом, подтверждающий вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Косметолог - эстетист (без мед. образования)</div>
<h2>Косметолог - эстетист (без мед. образования)</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 200 ₽/в мес на 9 месяцев</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">46 100 ₽</span> <span class="rating-count"><del>76 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при оформлении до конца периода специальных предложений.</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист (без мед. образования)»</strong> в <strong>Челябинске</strong> — идеальный выбор для начинающих в beauty-индустрии и опытных мастеров, стремящихся повысить свою квалификацию.</p>
<p>Программа включает изучение технологий косметических и аппаратных процедур, массажи и депиляцию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для новичков и тех, кто хочет углубить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>22</strong> процедуры</span>
<span><strong>2-3 месяца</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Эстетическая косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски, уход за кожей</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, Уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🌊 SPA-косметология</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг, обертывания</td>
</tr>
<tr>
<td>🪄 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Методы депиляции, работа с клиентами</td>
</tr>
<tr>
<td>💆 Массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический массаж, пластический массаж</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💆‍♀️ Проводить косметические процедуры по уходу за лицом</li>
<li>🔧 Выполнять аппаратные процедуры</li>
<li>🌺 Оказывать услуги массажа лица</li>
<li>🧴 Проводить депиляцию с использованием разных методов</li>
<li>🌼 Работать с реальными клиентами и строить ассортимент процедур</li>
<li>📋 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс косметологии SPA</div>
<h2>Курс косметологии SPA</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат о прохождении курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 400 ₽</span> <span class="rating-count"><del>19 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметологии SPA»</strong> в <strong>Челябинске</strong> — идеальный выбор для тех, кто хочет расширить свои навыки в индустрии красоты.</p>
<p>Программа обучает техникам коррекции фигуры и омоложения кожи с помощью обертываний и spa-процедур.</p>
<p>За <span class="price-highlight">8 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, желающих повысить квалификацию и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>8</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> процедуры</span>
<span><strong>1 день</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, классификация масел</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техники эксфолиации, скрабирование</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Технологии выполнения горячих и холодных обертываний</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💆‍♂️ Владеть техникой SPA-процедур</li>
<li>🧖‍♀️ Проводить обертывания и пилинги</li>
<li>🧴 Использовать ароматерапию в процедурах</li>
<li>📋 Составлять программы по уходу за кожей</li>
<li>📈 Повышать свою квалификацию в индустрии красоты</li>
<li>🤝 Привлекать новых клиентов в свою практику</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер по депиляции</div>
<h2>Мастер по депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (2-3 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 800 ₽</span> <span class="rating-count"><del>31 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период ограниченных акций.</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Челябинске</strong> — идеальное решение для тех, кто хочет стать специалистом в области красоты.</p>
<p>Учащиеся осваивают восковую депиляцию и шугаринг, получают навыки работы с различными типами волос.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных мастеров, желающих повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>5</strong> уроков</span>
<span><strong>9</strong> процедур</span>
<span><strong>2-3 недели</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Базовый</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Техника шугаринга, первая процедура, работа с клиентами</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Сложности в профессии, скоростные техники</td>
</tr>
<tr>
<td>🎨 Ваксация</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Бразильское бикини, полимерные воски</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💪 Проводить восковую и сахарную депиляцию</li>
<li>🌟 Работать с разными типами кожи и волос</li>
<li>✋ Освоить скоростные техники депиляции</li>
<li>📋 Консультировать клиентов по процедуре и уходу</li>
<li>🏆 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс депиляции</div>
<h2>Курс депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1-2 дня)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 400 ₽</span> <span class="rating-count"><del>19 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение.</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Челябинске</strong> — идеальный старт для тех, кто хочет получить профессию мастера депиляции.</p>
<p>Программа охватывает базовые техники работы с воском, включая подгонку под каждого клиента.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практическое обучение и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет для начинающих, желающих быстро начать карьеру в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> процедуры</span>
<span><strong>1-2</strong> дня</span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Базовый</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Введение в депиляцию, инструменты и материалы</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Восковая депиляция, техники шпательной и бандажной</td>
</tr>
<tr>
<td>🎨 Специфика работ</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Депиляция зон подмышек и бикини</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>🔍 Овладение техникой восковой депиляции</li>
<li>🛠️ Работа с разными зонами депиляции</li>
<li>📏 Подбор воска для конкретной зоны</li>
<li>🤝 Эффективная коммуникация с клиентами</li>
<li>🌟 Уход за кожей после процедуры</li>
<li>🎯 Избежание частых ошибок в работе</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы повышения квалификации по депиляции</div>
<h2>Курсы повышения квалификации по депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 дня)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 200 ₽</span> <span class="rating-count"><del>12 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в актуальный период.</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Челябинске</strong> — идеальный выбор для тех, кто хочет освоить современные техники депиляции.</p>
<p>Вы изучите быстрые и эффективные методы работы с полимерными восками и научитесь находить подход к клиентам.</p>
<p>За <span class="price-highlight">16 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как новичкам, так и тем, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>4</strong> процедур</span>
<span><strong>2 дня</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Современные техники, работа с восками</td>
</tr>
<tr>
<td>📈 Сложные участки</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Депиляция бикини, подмышек</td>
</tr>
<tr>
<td>🎨 Психология клиента</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Индивидуальный подход к клиентам</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>🚀 Быстро выполнять процедуру депиляции</li>
<li>🧐 Обрабатывать вросшие волоски и забритые участки</li>
<li>🎯 Индивидуально подходить к каждому клиенту</li>
<li>📈 Продвигать свои услуги в индустрии красоты</li>
<li>🛠️ Работать с полимерными восками</li>
<li>👩‍🏫 Создавать качественное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс повышения квалификации по всесезонным пилингам</div>
<h2>Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> до окончания акции</p>
<p><strong>📍 Адрес:</strong> г. Челябинск, пр. Ленина, д. 21В</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512202096">+7 (351) 220-20-96</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">chelyabinsk.ecolespb.ru</a></p>
</div>
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Челябинске</strong> — идеальный вариант для косметологов, желающих повысить свою квалификацию и углубить знания в области работы с гиперпигментацией.</p>
<p>Программа включает освоение безопасных и эффективных технике пилингов и ферулового массажа.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, желающих расширить свои горизонты в косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>5</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
<span><strong>1 неделя</strong></span>
</div>
<!-- Таблица -->
<div class="table-wrapper">
<table class="program-table">
<thead>
<tr>
<th>📦 Блок</th>
<th>⏱️ Часы / Уроки</th>
<th>📚 Темы</th>
</tr>
</thead>
<tbody>
<tr>
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Причины пигментации и их механизмы</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Сочетание пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>✨ Комплексный подход</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Стратегии применения средств</td>
</tr>
<tr>
<td>💆 Выполнение процедуры</td>
<td><span class="price-highlight">2 ак. часа</span></td>
<td>Техника ферулового массажа</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>🔍 Безопасно корректировать гиперпигментацию</li>
<li>🔧 Подбирать процедуры с учетом сезонов</li>
<li>👐 Проводить феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Подбирать домашний уход для профилактики рецидивов</li>
<li>🤝 Увеличивать лояльность клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://chelyabinsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->

<!-- ======== МОЙ КОНТЕНТ КОНЕЦ ======== -->
<!-- Подключаем Популярные города -->
<?php include 'popular-cities.php'; ?>



</div>






    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>



<!-- Подключаем футер -->
<?php include 'footer.php'; ?>


<!-- Подключаем внешний JavaScript -->
<script src="/scripts1.js"></script>
<script src="script_skidka.js"></script>
</body>


</body>
</html>