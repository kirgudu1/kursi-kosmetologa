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
<!-- Главная карточка "Курс депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс депиляции</div>
<h2>Курс депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 400 ₽</span> <span class="rating-count"><del>7 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение активного сезона.</p>
<p><strong>📍 Адрес:</strong> г. Набережные Челны, ул. Новая, д. 5</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Набережных Челнах</strong> — идеальный выбор для тех, кто хочет стать мастером депиляции и освоить все основные техники работы с воском.</p>
<p>Программа охватывает индивидуальный подход к клиентам и безопасные методы депиляции популярных зон.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Постоянный спрос на мастеров депиляции гарантирует быструю окупаемость вложений в обучение.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>8</strong> процедур</span>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Теоретические основы, работа с воском, безопасность</td>
</tr>
<tr>
<td>📋 Практика депиляции</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Работа с моделями, отработка техники</td>
</tr>
<tr>
<td>🎨 Специфика зон</td>
<td><span class="price-highlight">25 ч / 5 уроков</span></td>
<td>Депиляция бикини, голеней, подмышек</td>
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
<li>💪 Подбирать индивидуальный подход к клиентам</li>
<li>🧼 Применять безопасные методы восковой депиляции</li>
<li>📐 Проводить процедуры на различных зонах</li>
<li>🔍 Понимать особенности ухода за кожей после депиляции</li>
<li>🔧 Избегать ошибок и решать частые проблемы мастера</li>
<li>💼 Создавать клиентскую базу и развивать карьеру</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 100 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 600 ₽</span> <span class="rating-count"><del>31 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> ограниченное предложение</p>
<p><strong>📍 Адрес:</strong> г. Набережные Челны, ул. Примерная, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/upkeep&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/upkeep" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/upkeep&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Набережных Челнах</strong> — отличный шанс для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Программа охватывает диагностику и лечение кожи, домашний и салонный уход, включая современные процедуры.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто хочет улучшить свои навыки в косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Строение кожи, типы старения, уходовые процедуры</td>
</tr>
<tr>
<td>📈 Уходовые процедуры</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Чистки, пилинги, маски</td>
</tr>
<tr>
<td>🎨 Специальные техники</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Карбокситерапия, комплексные ухода</td>
</tr>
<tr>
<td>💼 Практическое занятие</td>
<td><span class="price-highlight">14 ч / 1 урок</span></td>
<td>Работа на реальных клиентах</td>
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
<li>👩‍🎓 Выполнять процедуры по уходу за кожей</li>
<li>🔍 Проводить диагностику состояния кожи</li>
<li>📋 Составлять индивидуальные программы ухода</li>
<li>💆‍♀️ Работать с профессиональной косметикой</li>
<li>💵 Начинать карьеру косметолога</li>
<li>📝 Получать доход сразу после обучения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/upkeep&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">16 200 ₽</span> <span class="rating-count"><del>27 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в данный момент времени</p>
<p><strong>📍 Адрес:</strong> г. Набережные Челны, ул. Красный Ключ, д. 12</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78772346000">+7 (877) 234-60-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Набережных Челнах</strong> — идеальный выбор для начала карьеры в бьюти-индустрии и повышения квалификации.</p>
<p>Программа включает изучение популярных аппаратных процедур, таких как дарсонвализация, микротоки, лазерная биоревитализация и RF-лифтинг.</p>
<p>За <span class="price-highlight">42 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как для начинающих, так и для опытных мастеров, желающих усовершенствовать свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>11</strong> процедур</span>
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
<td>🔰 Физиотерапия</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Основы физиотерапии, техника безопасности, аппараты</td>
</tr>
<tr>
<td>📈 УЗ-процедуры</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>УЗ-пилинг, фонофорез, УЗ-массаж</td>
</tr>
<tr>
<td>🎯 Коррекция фигуры</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Kавитация, RF-лифтинг</td>
</tr>
<tr>
<td>🎨 Микротоковая терапия</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Вернуть сияние кожи и устранить морщины</td>
</tr>
<tr>
<td>📚 Лазерная терапия</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Омоложение с помощью лазера</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения (таблица) -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💼 Выполнять аппаратные пилинги</li>
<li>🏋️‍♀️ Корректировать фигуру с помощью кавитации и RF-лифтинга</li>
<li>🔬 Работать с лазерными аппаратами</li>
<li>👐 Проводить процедуры дарсонвализации и микротоков</li>
<li>📋 Получить навыки работы с клиентами и моделями</li>
<li>🌱 Создавать свою клиентскую базу и портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс повышения квалификации по всесезонным пилингам</div>
<h2>Курс повышения квалификации по всесезонным пилингам</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный период</p>
<p><strong>📍 Адрес:</strong> г. Набережные Челны, ул. Победы, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Набережных Челнах</strong> — уникальная возможность для косметологов углубить свои знания и навыки в области пилингов для коррекции гиперпигментации.</p>
<p>В программе — изучение ферулового массажа и комбинированных методик по уходу за кожей.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и опытным косметологам, желающим повысить свою квалификацию и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> уроков</span>
<span><strong>2</strong> процедур</span>
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
<td>🔰 Гиперпигментация</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Причины и механизмы образования пигментных пятен</td>
</tr>
<tr>
<td>📈 Процедуры</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Комбинирование пилингов и ретиноидов</td>
</tr>
<tr>
<td>🎨 Феруловый массаж</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Пошаговая техника выполнения массажа</td>
</tr>
<tr>
<td>🔍 Индивидуальные протоколы</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Составление уходовых программ для клиентов</td>
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
<li>🎯 Безопасно корректировать гиперпигментацию</li>
<li>📋 Подбирать процедуры с учетом фототипа кожи</li>
<li>🔗 Комбинировать пилинги и ретиноиды для лучшего результата</li>
<li>👩‍🎓 Проводить феруловый массаж по авторской методике</li>
<li>📅 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Привлекать больше клиентов через эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1–2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период</p>
<p><strong>📍 Адрес:</strong> Набережные Челны, ул. Ленина, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Набережных Челнах</strong> — идеальный выбор для начинающих и профессионалов, желающих усовершенствовать свои навыки.</p>
<p>Участники осваивают техники работы с сахарной пастой и получают глубокие знания о процедурах депиляции.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как для старта карьеры, так и для личных нужд в уходе за собой.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Техники работы с сахарной пастой</td>
</tr>
<tr>
<td>📈 Депиляция зон</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Подмышки, голени, бикини</td>
</tr>
<tr>
<td>🎯 Работа с клиентами</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Коммуникация и решение конфликтов</td>
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
<li>💖 Выполнять процедуры шугаринга на различных зонах</li>
<li>📏 Работать с сахарной пастой различной жесткости</li>
<li>🛠️ Разбираться в инструментах для депиляции</li>
<li>🌿 Ухаживать за кожей после процедур</li>
<li>👥 Эффективно общаться с клиентами</li>
<li>🚀 Стартовать карьеру мастера шугаринга</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">7 750 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">46 500 ₽</span> <span class="rating-count"><del>77 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций на программу</p>
<p><strong>📍 Адрес:</strong> г. Набережные Челны, ул. Примерная, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Набережных Челнах</strong> — это ваш путь в мир красоты без медицинского образования.</p>
<p>Программа включает изучение профессиональных косметических и аппаратных процедур, массаж лица и депиляцию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и действующим мастерам, стремящимся повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>22</strong> процедуры</span>
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
<td>🔰 Эстетическая косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски, пилинги</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>💆 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, первая процедура, депиляция бикини</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, пластический массаж, массаж в методике жаке</td>
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
<li>💆 Проводить механическую и аппаратную чистку кожи</li>
<li>🎯 Уметь выполнять три вида массажа лица</li>
<li>🧰 Овладеть восковой депиляцией и безопасными техниками удаления волос</li>
<li>🎨 Подбирать маски, пилинги и обертывания под задачи клиента</li>
<li>🌸 Выполнять аппаратные процедуры по омоложению и коррекции фигуры</li>
<li>📋 Получить диплом и начать карьеру косметолога в салоне или на себя</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 недели</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 200 ₽</span> <span class="rating-count"><del>25 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс.</p>
<p><strong>📍 Адрес:</strong> Набережные Челны, ул. Красноармейская, д. 15</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Набережных Челнах</strong> — лучший выбор для начинающих и опытных мастеров в индустрии красоты.</p>
<p>Программа охватывает восковую депиляцию и шугаринг, включая скоростные техники и индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для мастеров, желающих повысить свою квалификацию и быстро собрать клиентскую базу.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>Техника шугаринга, депиляция бикини</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, сложные зоны</td>
</tr>
<tr>
<td>🎨 Специальные техники</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Скоростные техники, ваксинг лица</td>
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
<li>💡 Проводить процедуру депиляции воском на разных зонах</li>
<li>🎯 Работать с сахарной пастой в различных техниках</li>
<li>👌 Выполнять комплексную депиляцию для различных клиентов</li>
<li>🚀 Осваивать скоростные техники удаления волос</li>
<li>🧹 Соблюдать правила гигиены и безопасности</li>
<li>📋 Консультировать клиентов по процедуре и уходу</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс повышения квалификации по депиляции</div>
<h2>Курс повышения квалификации по депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 400 ₽</span> <span class="rating-count"><del>10 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> сейчас при записи на курс.</p>
<p><strong>📍 Адрес:</strong> г. Набережные Челны</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Набережных Челнах</strong> — идеальное решение для тех, кто хочет освоить современные техники депиляции и работать с полимерными восками.</p>
<p>На курсе слушатели изучат методы быстрой и чистой депиляции на различных зонах.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдёт как начинающим, так и практикующим специалистам для повышения квалификации и привлечения новых клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>2</strong> процедуры</span>
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
<td><span class="price-highlight">4 ак. ч / 2 урока</span></td>
<td>Основы депиляции, работа с восками</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">4 ак. ч / 2 урока</span></td>
<td>Техники удаления вросших волос, подход к клиентам</td>
</tr>
<tr>
<td>🎨 Профессиональный</td>
<td><span class="price-highlight">8 ак. ч / 2 урока</span></td>
<td>Скоростные техники, депиляция глубокого бикини</td>
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
<li>💪 Ускорять процедуру депиляции</li>
<li>🧠 Работать с вросшими волосами и забритыми волосками</li>
<li>💼 Индивидуально подходить к сложным клиентам</li>
<li>📈 Продвигать свои услуги на рынке</li>
<li>📊 Определять целевую аудиторию и привлекать клиентов</li>
<li>✅ Получать поддержку от наставников с большим опытом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">10 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 600 ₽</span> <span class="rating-count"><del>12 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Набережные Челны, ул. Красная, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">naberezhnye-chelny.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Набережных Челнах</strong> — отличный выбор для тех, кто хочет освоить техники ухода за телом и лицом.</p>
<p>Программа включает изучение обертываний, пилингов и SPA-процедур, которые востребованы в индустрии красоты.</p>
<p>За <span class="price-highlight">10 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>10</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td>💧 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, классификация масел</td>
</tr>
<tr>
<td>🧴 Пилинг тела</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техника поверхностного пилинга, скрабирование</td>
</tr>
<tr>
<td>🌿 Обертывания</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Горячие и холодные обертывания, показания и противопоказания</td>
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
<li>🌸 Создавать программу ухода за кожей тела</li>
<li>🧖 Проводить обертывания и пилинги тела</li>
<li>🏡 Организовывать расслабляющую атмосферу при процедурах</li>
<li>📈 Привлекать новых клиентов</li>
<li>🧑‍🎓 Повышать квалификацию и расширять спектр услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://naberezhnye-chelny.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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