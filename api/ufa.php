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
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс дерматологии и анатомии лица</div>
<h2>Курс дерматологии и анатомии лица</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 300 ₽</span> <span class="rating-count"><del>3 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение.</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Уфе</strong> — идеальный выбор для начинающих косметологов, желающих прокладывать карьеру в индустрии красоты.</p>
<p>Программа охватывает анатомию лица и шеи, основы дерматологии и санитарные требования к работе косметолога.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как для новичков, так и для тех, кто хочет углубить свои знания в области косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>2</strong> ак. часа</span>
<span><strong>2</strong> урока</span>
<span><strong>1</strong> процедура</span>
<span><strong>2</strong> недели</span>
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
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Анатомическое строение лица, уход по возрасту</td>
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
<li>📋 Организовывать рабочее место косметолога</li>
<li>🔍 Разбираться в типах кожи</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>🔬 Различать виды кожных заболеваний</li>
<li>🕒 Применять anti-age процедуры</li>
<li>🧴 Уход за кожей по возрасту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы депиляции</div>
<h2>Курсы депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 500 ₽</span> <span class="rating-count"><del>12 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на текущий период.</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы депиляции»</strong> в <strong>Уфе</strong> — отличный старт для всех, кто интересуется карьерой в индустрии красоты.</p>
<p>Программа охватывает базовые техники восковой депиляции и подход к каждому клиенту.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как для начинающих, так и для тех, кто хочет улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> процедуры</span>
<span><strong>1–2</strong> дня</span>
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
<td>🔰 Введение в депиляцию</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Основы депиляции, инструменты и материалы</td>
</tr>
<tr>
<td>📚 Техники восковой депиляции</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Шпательная и бандажная техники</td>
</tr>
<tr>
<td>💼 Работа с клиентами</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Коммуникация и уход за кожей</td>
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
<li>💁‍♀️ Овладение техникой восковой депиляции</li>
<li>🌟 Подбор воска в зависимости от зоны</li>
<li>🧖‍♀️ Уход за кожей перед и после процедуры</li>
<li>🤝 Эффективная работа с клиентами</li>
<li>📈 Устранение распространенных ошибок</li>
<li>🛠️ Проведение процедур на реальных клиентах</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">до 6 месяцев</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 700 ₽</span> <span class="rating-count"><del>16 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">первоначальная стоимость снижена на 40%</span> в свободные даты.</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Уфе</strong> — идеальный выбор для тех, кто хочет освоить современные техники депиляции и улучшить свои навыки в эстетической косметологии.</p>
<p>В программе курса: работа с полимерными восками, скоростные техники и психологические аспекты общения с клиентами.</p>
<p>За <span class="price-highlight">16 ак. часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как новичкам, так и практикующим мастерам, стремящимся расширить свои возможности.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы депиляции, работа с восками</td>
</tr>
<tr>
<td>📈 Скоростные техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Скоростные техники депиляции</td>
</tr>
<tr>
<td>🎨 Психология клиента</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Работа с трудными клиентами, создание доверительной атмосферы</td>
</tr>
<tr>
<td>🌟 Продвижение</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Как правильно продвигать свои услуги</td>
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
<li>🔧 Осваивать скоростные техники депиляции</li>
<li>🧠 Понимать психологию клиента</li>
<li>📈 Продавать свои услуги</li>
<li>✍️ Работать с разными типами волос</li>
<li>💡 Методика обработки сложных участков</li>
<li>📑 Создавать портфолио для документирования работы</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 500 ₽</span>
<span class="rating-count"><del>12 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Уфе</strong> — отличный старт для тех, кто хочет овладеть навыками депиляции и начать карьеру в beauty-индустрии.</p>
<p>Программа охватывает три техники работы с сахарной пастой, включая удаление волос с различных зон тела.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих и тех, кто желает расширить свои навыки в сфере эстетики.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>🔰 Введение в шугаринг</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Теоретические аспекты, безопасность, инструменты</td>
</tr>
<tr>
<td>📈 Техника шугаринга</td>
<td><span class="price-highlight">7 ч / 1 урок</span></td>
<td>Практическая отработка, работа с моделями</td>
</tr>
<tr>
<td>🎨 Депиляция зон</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Специфика работы с зонированием</td>
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
<li>💆‍♀️ Выполнять сахарную депиляцию на различных зонах тела</li>
<li>⚙️ Использовать профессиональные инструменты и материалы</li>
<li>🎯 Разбираться в методах депиляции для клиентов с разными типами кожи</li>
<li>🔍 Избегать распространенных ошибок и находить индивидуальный подход</li>
<li>🤝 Эффективно общаться с клиентами и выстраивать доверительные отношения</li>
<li>📋 Получить сертификат и начать карьеру мастера шугаринга</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы интегративной нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы интегративной нутрициологии</div>
<h2>Курсы интегративной нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">800 ₽/мес.</span> (по запросу)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при раннем бронировании</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы интегративной нутрициологии»</strong> в <strong>Уфе</strong> — для тех, кто хочет глубже понять принципы питания и создать индивидуальные программы питания.</p>
<p>Программа включает в себя теоретические и практические занятия по составлению рационов для различных категорий клиентов.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как для новичков, так и для практикующих специалистов в области нутрициологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> процедуры</span>
<span><strong>2 недели</strong></span>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основные принципы и нутриенты</td>
</tr>
<tr>
<td>📈 Специфика питания.</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Питание для спортсменов и беременных</td>
</tr>
<tr>
<td>🎉 Индивидуальные диеты</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Составление рационов для клинических случаев</td>
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
<li>📋 Выстраивать рацион питания для разных групп населения</li>
<li>💬 Консультировать клиентов по вопросам питания</li>
<li>🧮 Анализировать данные клиентов</li>
<li>⚖️ Выявлять физиологические потребности в питательных веществах</li>
<li>📊 Рассчитывать суточные энергозатраты</li>
<li>🔍 Диагностировать нарушения пищевого поведения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией</div>
<h2>Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение на данный момент.</p>
<p><strong>📍 Адрес:</strong> Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/povyshenie-kvalifikatsii-kosmetologa" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/povyshenie-kvalifikatsii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Уфе</strong> — это идеальный старт для косметологов, желающих освоить эффективные методики работы с гиперпигментацией.</p>
<p>Программа охватывает всесезонные пилинги, феруловый массаж и индивидуальные подходы к каждому клиенту.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих повысить свою квалификацию и привлечь больше клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>1 неделя</strong></span>
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
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Причины пигментации, методы диагностики</td>
</tr>
<tr>
<td>🔁 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур, избежание ошибок</td>
</tr>
<tr>
<td>🌿 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетание пилингов и ретиноидов</td>
</tr>
<tr>
<td>🎯 Выполнение процедуры</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Пошаговая техника ферулового массажа</td>
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
<li>📈 Безопасно корректировать гиперпигментацию</li>
<li>🏆 Подбирать процедуры с учетом сезонности и фототипа</li>
<li>❤️ Проводить феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🛡️ Подбирать домашний уход для закрепления результатов</li>
<li>🤝 Привлекать больше клиентов с помощью эффективных процедур</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/povyshenie-kvalifikatsii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 100 ₽ в мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 300 ₽</span> <span class="rating-count"><del>30 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при наличии актуальных предложений</p>
<p><strong>📍 Адрес:</strong> Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Уфе</strong> — это отличный старт для тех, кто хочет освоить необходимые техники депиляции.</p>
<p>Программа включает восковую депиляцию и шугаринг, что позволяет создать индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и уже работающим мастерам в индустрии красоты.</p>
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
<span><strong>2-3</strong> недели</span>
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
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, первая процедура, депиляция бикини</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, первая процедура, работа с клиентами</td>
</tr>
<tr>
<td>🔝 Завершение</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Сложности в профессии, скоростные техники, бразильское бикини, полимерные воски</td>
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
<li>🚀 Проводить процедуры восковой депиляции на разных зонах</li>
<li>🧁 Работать с сахарной пастой в мануальной, шпательной и бандажной технике</li>
<li>🌟 Выполнять депиляцию всех частей тела, включая глубокое бикини</li>
<li>💧 Соблюдать правила гигиены и безопасности на приеме</li>
<li>🤝 Консультировать клиента по процедуре и домашнему уходу</li>
<li>👥 Формировать индивидуальный подход даже к самым сложным клиентам</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">10 ак. часов</span> (1 день)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 400 ₽</span> <span class="rating-count"><del>14 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметологии SPA»</strong> в <strong>Уфе</strong> — отличная возможность для специалистов в сфере красоты повысить квалификацию и расширить спектр услуг.</p>
<p>Программа охватывает техники обертываний и СПА-процедур, а также основы ароматерапии.</p>
<p>За <span class="price-highlight">10 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и опытным специалистам, стремящимся обновить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>10</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> отработки на практике</span>
<span><strong>1</strong> день</span>
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
<td>Создание расслабляющей атмосферы и использование эфирных масел</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы пилинга и наиболее эффективные средства</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Технологии выполнения обертываний и подбор процедур</td>
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
<li>💆 Владеть техникой SPA-процедур</li>
<li>🌸 Проводить эффективные обертывания и пилинги</li>
<li>🍃 Создавать расслабляющую атмосферу с помощью ароматерапии</li>
<li>📋 Составлять программы по уходу за кожей</li>
<li>🧴 Повышать профессионализм и спектр услуг</li>
<li>🤝 Привлекать новых клиентов с новыми навыками</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер аппаратной косметологии</div>
<h2>Мастер аппаратной косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span>
</span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 800 ₽/мес. на 9 месяцев</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">52 000 ₽</span> <span class="rating-count"><del>86 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в данный момент по акции.</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер аппаратной косметологии»</strong> в <strong>Уфе</strong> — отличная возможность для желающих освоить востребованную профессию в beauty-индустрии.</p>
<p>В программе обучения предусмотрены популярные аппаратные процедуры, включая коррекцию фигуры и LPG-массаж.</p>
<p>За <span class="price-highlight">91 ак. час</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для практикующих мастеров, стремящихся улучшить качество своих услуг.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>91</strong> ак. час</span>
<span><strong>18</strong> уроков</span>
<span><strong>17</strong> процедур</span>
<span><strong>1-3</strong> месяца</span>
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
<td>Строение кожи, Маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, Уз-процедуры, Коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Аппаратный массаж</td>
<td><span class="price-highlight">7 ч / 2 урока</span></td>
<td>LPG, Упругая кожа, Уменьшение объемов</td>
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
<li>💆 Проведение аппаратных процедур по омоложению</li>
<li>📏 Коррекция фигуры с использованием LPG-технологий</li>
<li>🧪 Безопасные техники удаления волос</li>
<li>⚕️ Применение физиотерапии в косметологии</li>
<li>🛠️ Умение работать с современным оборудованием</li>
<li>📋 Оформление профессионального портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 900 ₽</span> <span class="rating-count"><del>38 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Аппаратная косметология»</strong> в <strong>Уфе</strong> — идеальный вариант для тех, кто хочет начать карьеру в индустрии красоты и освоить современные методы ухода за кожей.</p>
<p>Программа включает изучение дарсонвализации, микротоков, лазерной биоревитализации, УЗ-процедур и RF-лифтинга.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто желает дополнить свои навыки и стать востребованным специалистом.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> уроков</span>
<span><strong>23</strong> отработки на практике</span>
<span><strong>2-3</strong> месяца</span>
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
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>Классификация методов, безопасность, работа с аппаратами</td>
</tr>
<tr>
<td>📈 УЗ-процедуры</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>УЗ-пилинг, фонофорез, УЗ-чистка лица</td>
</tr>
<tr>
<td>🎯 Коррекция фигуры</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Кавитация и RF-лифтинг</td>
</tr>
<tr>
<td>🌸 Омолаживающие процедуры</td>
<td><span class="price-highlight">26 ч / 4 урока</span></td>
<td>Лазерная терапия, микротоковая терапия</td>
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
<li>💆‍♀️ Выполнять аппаратные процедуры для ухода за кожей</li>
<li>📏 Корректировать фигуру с помощью RF и кавитации</li>
<li>🔬 Проводить УЗ-пилинг и другие процедуры физиотерапии</li>
<li>🌟 Обладать навыками работы с косметологическими аппаратами</li>
<li>📖 Формировать портфолио и сертификат мастера</li>
<li>💰 Начинать карьеру и получать доход сразу после обучения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы основы нутрициологии</div>
<h2>Курсы основы нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> временные предложения по большому числу курсов.</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472722782">+7 (347) 272-27-82</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Уфе</strong> — это программа для тех, кто хочет освоить актуальную профессию нутрициолога и научиться правильно питаться.</p>
<p>В программе изучаются принципы здорового питания, выбор продуктов и витаминов для поддержания здоровья.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Это идеальная возможность для старта карьеры в эпоху здорового образа жизни.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>3</strong> процедуры</span>
<span><strong>4–6</strong> недель</span>
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
<td>🔰 Наука о питании</td>
<td><span class="price-highlight">20 ч / 3 урока</span></td>
<td>Анатомия и физиология пищеварительной системы, правила здорового питания</td>
</tr>
<tr>
<td>📈 Витамины, минералы и БАДы</td>
<td><span class="price-highlight">20 ч / 3 урока</span></td>
<td>Классификация витаминов, гиповитаминозы, пищевые источники</td>
</tr>
<tr>
<td>🍽️ Коррекция рациона</td>
<td><span class="price-highlight">20 ч / 2 урока</span></td>
<td>Диеты, детокс, основы гигиены питания</td>
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
<li>🏋️‍♂️ Разбираться в составе пищи и правилах здорового питания</li>
<li>🧑‍⚕️ Определять потребности в витаминах и минералах</li>
<li>🥗 Корректировать рацион питания для достижения целей</li>
<li>🥙 Выбирать продукты с учётом местных особенностей</li>
<li>📊 Работать с реальными клиентами и проводить консультации</li>
<li>✅ Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 500 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79140000000">+7 (914) 000-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Уфе</strong> — идеальный выбор для специалистов, стремящихся повысить лояльность клиентов и увеличить свои продажи.</p>
<p>Вы научитесь выстраивать гармоничные отношения с клиентами и выявлять их потребности через психологические аспекты общения.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику в реальных ситуациях и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как начинающим, так и опытным специалистам в косметологии, желающим углубить свои знания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> процедуры</span>
<span><strong>1–2</strong> недели</span>
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
<td>🔰 Коммуникация с клиентом</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Этапы общения, выявление потребностей</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Правила общения, ошибки в общении</td>
</tr>
<tr>
<td>🎨 Психология клиентов</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Психотипы клиентов, работа с трудными клиентами</td>
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
<li>💬 Выстраивать доверительные отношения с клиентами</li>
<li>🔍 Выявлять потребности и ожидания клиентов</li>
<li>🔑 Работать с разными психотипами клиентов</li>
<li>📈 Повышать лояльность клиентов</li>
<li>🤝 Избегать ошибок в общении и этике</li>
<li>📋 Подтверждать квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Косметолог - эстетист</div>
<h2>Косметолог - эстетист</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 100 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">54 300 ₽</span> <span class="rating-count"><del>90 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> временно доступна</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Уфе</strong> — это идеальный выбор для начинающих мастеров в сфере красоты.</p>
<p>Программа включает все основные косметические и аппаратные процедуры, а также технике массажа и депиляции.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как начинающим, так и уже работающим специалистам, желающим повысить квалификацию.</p>
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
<td>Строение кожи, маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела</td>
</tr>
<tr>
<td>🧖 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, щипковый массаж</td>
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
<li>💆 Проводить эстетические и аппаратные процедуры</li>
<li>🌺 Выполнять массаж лица и депиляцию</li>
<li>🌱 Подбирать индивидуальные уходовые средства</li>
<li>🛠️ Осваивать новые техники косметологии</li>
<li>👩‍🏫 Работать с реальными клиентами</li>
<li>📄 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы эстетической косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы эстетической косметологии</div>
<h2>Курсы эстетической косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 900 ₽</span> <span class="rating-count"><del>41 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих предложений.</p>
<p><strong>📍 Адрес:</strong> г. Уфа, ул. Чернышевского, д. 104</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73472001112">+7 (347) 200-11-12</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ufa.ecolespb.ru/cosmetology-school/upkeep" target="_blank">ufa.ecolespb.ru</a></p>
</div>
<a href="https://ufa.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы эстетической косметологии»</strong> в <strong>Уфе</strong> — это идеальный старт для желающих начать карьеру в beauty-сфере.</p>
<p>Программа курса включает методы диагностики кожи, уходовые процедуры и уход за клиентами.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет усовершенствовать свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>10</strong> процедур</span>
<span><strong>1 месяц</strong></span>
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
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Строение кожи, диагностика кожи</td>
</tr>
<tr>
<td>💆 Уходовые процедуры</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Чистки, маски, пилинги</td>
</tr>
<tr>
<td>🌟 Специальные техники</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Карбокситерапия, механическая чистка</td>
</tr>
<tr>
<td>📦 Комплексный уход</td>
<td><span class="price-highlight">12 ч / 5 уроков</span></td>
<td>Составление программ ухода</td>
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
<li>💧 Выполнять базовые уходовые процедуры для кожи</li>
<li>🔍 Проводить диагностику и индивидуальные консультации</li>
<li>💆 Работать с проблемной кожей и выполнять чистки</li>
<li>🚀 Осваивать карбокситерапию и другие новые техники</li>
<li>📋 Составлять эффективные программы ухода для клиентов</li>
<li>🏆 Получать диплом и начать карьеру косметолога</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ufa.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки: На страницу курса -->
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