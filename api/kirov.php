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
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер по депиляции</div>
<h2>Мастер по депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 недели</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 500 ₽</span> <span class="rating-count"><del>35 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при ранней записи</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Примерная, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78001234567">+7 (800) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://kirov.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://kirov.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Кирове</strong> — идеальный старт для начинающих и опытных мастеров в индустрии красоты.</p>
<p>Программа охватывает восковую депиляцию и шугаринг, включая базовые и скоростные техники.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит для новичков и профессионалов, желающих повысить свою квалификацию и быстро найти клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span> <span><strong>5</strong> уроков</span> <span><strong>9</strong> процедур</span> <span><strong>2-3 недели</strong></span>
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
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Общие техники депиляции, работа с клиентами</td>
</tr>
<tr>
<td>📈 Шугаринг</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, первая процедура, бикини</td>
</tr>
<tr>
<td>🎨 Повышение квалификации</td>
<td><span class="price-highlight">11 ч / 1 урок</span></td>
<td>Сложные техники, бразильское бикини, ваксинг лица</td>
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
<li>🧖 Проведение процедуры депиляции воском на разных зонах</li>
<li>📅 Работа с сахарной пастой в мануальной, шпательной и бандажной технике</li>
<li>🌟 Депиляция всех частей тела, включая глубокое бикини</li>
<li>🧼 Соблюдение правил гигиены и безопасности на приеме</li>
<li>💬 Консультирование клиента по процедуре и домашнему уходу</li>
<li>✨ Индивидуальный подход к каждому клиенту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://kirov.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс дерматологии и анатомии лица</div>
<h2>Курс дерматологии и анатомии лица</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 300 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 900 ₽</span> <span class="rating-count"><del>6 800 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при актуальных промо-акциях</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Ленина, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74122110022">+7 (412) 211-00-22</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://kirov.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://kirov.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Кирове</strong> — идеальный старт для будущих косметологов, желающих освоить основы дерматологии и анатомии.</p>
<p>Программа включает изучение строения кожи, диагностирования проблем кожи и санитарных требований.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих и тех, кто хочет углубить свои знания в косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>40</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
<span><strong>5</strong> процедур</span>
<span><strong>3–6</strong> недель</span>
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
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Строение кожи, типы кожи, диагностика</td>
</tr>
<tr>
<td>📋 Санитарные требования</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Организация рабочего места, обработка инструментов</td>
</tr>
<tr>
<td>🩺 Анатомия лица и шеи</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Строение мышц, старение кожи, anti-age процедуры</td>
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
<li>📊 Организовывать рабочее место косметолога</li>
<li>🔍 Диагностировать и определять типы кожи</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>💼 Выполнять уходовые процедуры для разных возрастов</li>
<li>🧪 Применять anti-age процедуры</li>
<li>📜 Получать сертификаты и дипломы по окончанию курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://kirov.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 500 ₽</span> <span class="rating-count"><del>15 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение до конца месяца</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Ленина, д. 15</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://kirov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://kirov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметологии SPA»</strong> в <strong>Кирове</strong> — идеальный выбор для тех, кто хочет освоить современные техники по уходу за телом и кожей.</p>
<p>Вы изучите обертывания и SPA-процедуры, научитесь создавать комфортную обстановку для клиентов.</p>
<p>За <span class="price-highlight">10 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как новичкам, так и специалистам, желающим расширить свои навыки и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>10</strong> ак. часов</span>
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
<td>Создание расслабляющей атмосферы, использование эфирных масел</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техники поверхностного пилинга и эксфолиации</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Горячие и холодные обертывания, подбор процедур</td>
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
<li>🎯 Владеть техникой SPA-процедур</li>
<li>🧖‍♀️ Понимать основы спа-этикета</li>
<li>🍃 Проводить процедуры с использованием ароматерапии</li>
<li>💆‍♂️ Создавать индивидуальные программы по уходу за телом</li>
<li>👐 Работать с различными обертываниями и пилингами</li>
<li>📋 Подтверждать квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://kirov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 дня)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 400 ₽</span> <span class="rating-count"><del>14 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Красная, д. 12</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78322123456">+7 (8322) 12-34-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Кирове</strong> — идеален для специалистов в beauty-сфере, желающих освоить новые техники депиляции.</p>
<p>Вы изучите современные методы работы с полимерными восками и психологические аспекты взаимодействия с клиентами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит для всех, кто хочет повысить свою квалификацию и расширить клиентскую базу.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Классические и современные методы, работа с воском</td>
</tr>
<tr>
<td>📈 Работа с сложными клиентами</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Психология клиента, техники успокоения</td>
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
<li>🔍 Ускорять процедуру депиляции</li>
<li>💇 Работать с вросшими волосками</li>
<li>📈 Подбирать индивидуальный подход к каждому клиенту</li>
<li>🛠️ Осваивать скоростные техники депиляции</li>
<li>📢 Эффективно продвигать свои услуги</li>
<li>📜 Получать сертификат специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 академических часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом по окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Красной Армии, д. 15</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79112345678">+7 (911) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://kirov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://kirov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Кирове</strong> — идеальный выбор для косметологов, желающих повысить свои компетенции.</p>
<p>Курс охватывает методы коррекции гиперпигментации и сочетание различных пилингов с ретиноидной терапией.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов в области косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Причины появления пигментных пятен</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Сочетание пилингов с ретиноидами</td>
</tr>
<tr>
<td>🚀 Выполнение процедуры</td>
<td><span class="price-highlight">3 ч</span></td>
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
<li>💡 Безопасно корректировать гиперпигментацию</li>
<li>🧪 Подбирать процедуры с учетом фототипа кожи</li>
<li>🔍 Комбинировать методы для стойкого результата</li>
<li>✋ Проводить феруловый массаж</li>
<li>📝 Составлять индивидуальные протоколы коррекции</li>
<li>📈 Увеличивать лояльность клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://kirov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">38 900 ₽</span> <span class="rating-count"><del>64 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> — сейчас отличное время для записи!</p>
<p><strong>📍 Адрес:</strong> Киров, ул. Примерная, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://kirov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://kirov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Кирове</strong> — отличный выбор для тех, кто хочет начать карьеру в beauty-индустрии и получить востребованные навыки.</p>
<p>Программа включает изучение различных методов ухода за лицом и телом, включая массажи и аппаратные процедуры.</p>
<p>За <span class="price-highlight">127 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>127</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>22</strong> процедур</span>
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
<td><span class="price-highlight">64 ч / 12 уроков</span></td>
<td>Оценка состояния, комплексный уход за кожей, решение косметических проблем</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Омоложение, коррекция фигуры, биоревитализация</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🧰 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Работа с клиентами, первая процедура, депиляция бикини</td>
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
<li>💆‍♂️ Проводить механическую и аппаратную чистку кожи</li>
<li>🎯 Осваивать три вида массажа лица</li>
<li>🧰 Выполнять восковую депиляцию</li>
<li>🌿 Подбирать маски, пилинги и обертывания</li>
<li>✨ Проводить аппаратные процедуры по омоложению</li>
<li>📋 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://kirov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс основы нутрициологии</div>
<h2>Курс основы нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> Киров, ул. Нутрициологическая, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://kirov.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://kirov.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс основы нутрициологии»</strong> в <strong>Кирове</strong> — идеальный вариант для тех, кто хочет освоить профессию нутрициолога и научиться грамотно составлять рацион питания.</p>
<p>Вы изучите причины и методы корректировки образа жизни, а также различные подходы к питанию без крайностей.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки в области питания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часа</span>
<span><strong>8</strong> уроков</span>
<span><strong>3</strong> блока</span>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Понимание макро- и микроэлементов, их роль в организме</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Определение потребностей, источники витаминов</td>
</tr>
<tr>
<td>🎯 Коррекция рациона</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Методы коррекции веса, отличие диет</td>
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
<li>🔍 Анализировать состав пищи</li>
<li>🍏 Определять потребности в витаминах и минералах</li>
<li>⚖️ Организовывать рацион для клиентов</li>
<li>🔄 Работать с различными видами диет</li>
<li>🔪 Правильно готовить и хранить продукты</li>
<li>📋 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://kirov.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс депиляции воском" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс депиляции воском</div>
<h2>Курс депиляции воском</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 400 ₽</span> <span class="rating-count"><del>14 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Косметологическая, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79511223344">+7 (951) 122-33-44</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции воском" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции воском»</strong> в <strong>Кирове</strong> — идеальное решение для начинающих специалистов, желающих освоить востребованную профессию.</p>
<p>Программа охватывает техники восковой депиляции, уход за кожей и работу с клиентами.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подходит для новых мастеров и тех, кто хочет расширить свои навыки в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>2</strong> процедуры</span>
<span><strong>3–7</strong> недель</span>
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
<td>🔰 Основы восковой депиляции</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Техники работы с воском, правильная подготовка</td>
</tr>
<tr>
<td>📈 Депиляция разных зон</td>
<td><span class="price-highlight">5 ч / 3 урока</span></td>
<td>Подмышки, голени, бикини</td>
</tr>
<tr>
<td>🎓 Коммуникация с клиентами</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Этика, общение с клиентами, решение проблем</td>
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
<li>💡 Овладеть техникой восковой депиляции</li>
<li>🧴 Подбирать воск для разных зон</li>
<li>🪑 Правильно проводить процедуры на моделях</li>
<li>💬 Выстраивать отношения с клиентами</li>
<li>🚀 Запускаться в профессии мастера депиляции</li>
<li>📅 Поддерживать качество процедур и сервис</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (1-2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера шугаринга<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 000 ₽</span> <span class="rating-count"><del>18 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Ленина, д. 15</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74122223344">+7 (412) 222-33-44</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Кирове</strong> — идеальный выбор для начинающих и тех, кто хочет освоить востребованную профессию.</p>
<p>Вы изучите 3 техники работы с сахарной пастой, методику обработки популярных зон и индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера шугаринга</span>.</p>
<p>Курс поможет вам начать карьеру и быстро заработать, так как мастера депиляции очень востребованы!</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>11</strong> уроков</span>
<span><strong>10</strong> процедур</span>
<span><strong>1-2 месяца</strong></span>
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
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Правила безопасности, выбор инструментов, основы депиляции</td>
</tr>
<tr>
<td>📈 Работа с зонами</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Техника обработки подмышек, голеней, бикини</td>
</tr>
<tr>
<td>💼 Клиентский сервис</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Коммуникация с клиентами, решение конфликтов</td>
</tr>
<tr>
<td>📈 Повышение квалификации</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Современные тенденции, работа с различными типами кожи</td>
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
<li>💪 Выполнять сахарную депиляцию безболезненно</li>
<li>🧰 Понимать инструментарий и техники работы мастеров</li>
<li>🌟 Обрабатывать зоны подмышек, голени, бикини</li>
<li>👥 Эффективно работать с клиентами и решать проблемы</li>
<li>📋 Получить сертификат, подтверждающий ваши навыки</li>
<li>💵 Начать зарабатывать сразу после обучения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://kirov.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 700 ₽</span>
<span class="rating-count"><del>11 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный период.</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Ленина, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://kirov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://kirov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Кирове</strong> — идеальный выбор для специалистов, стремящихся повысить лояльность клиентов и улучшить навыки общения.</p>
<p>Вы освоите основы психологии общения и методы выявления потребностей клиентов.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит для начинающих косметологов и тех, кто хочет улучшить существующие навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>4</strong> урока</span>
<span><strong>—</strong> процедур</span>
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
<td>🗣️ Психология общения</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этапы коммуникации, работа с возражениями</td>
</tr>
<tr>
<td>📜 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы профессиональной этики</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование успешной корпоративной культуры</td>
</tr>
<tr>
<td>💬 Рабочие стратегии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Работа с психоэмоциональными проблемами клиентов</td>
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
<li>🎯 Выстраивать доверительные отношения с клиентами</li>
<li>🧠 Определять психотипы клиентов</li>
<li>📈 Увеличивать продажи косметических услуг</li>
<li>🌟 Повышать личный авторитет среди коллег</li>
<li>💡 Применять этичные стандарты в работе</li>
<li>🌐 Оформлять свои навыки в портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://kirov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">124 ак. часа</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 300 ₽</span> <span class="rating-count"><del>23 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период, когда действуют максимальные предложения.</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Примерная, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78001234567">+7 (800) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://kirov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://kirov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Кирове</strong> — отличный выбор для тех, кто хочет начать карьеру в сфере красоты или просто улучшить свои навыки.</p>
<p>Программа охватывает техники дарсонвализации, микротоков, лазерной биоревитализации и других популярных процедур.</p>
<p>За <span class="price-highlight">124 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Идеально подходит как для начинающих, так и для тех, кто уже работает и хочет расширить свои знания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>124</strong> ак. часов</span>
<span><strong>23</strong> урока</span>
<span><strong>21</strong> отработка на практике</span>
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
<td>🔰 ОМОЛОЖЕНИЕ</td>
<td><span class="price-highlight">7 ч / 4 урока</span></td>
<td>RF-лифтинг, Дарсонваль, микротоки, ультразвуковая чистка</td>
</tr>
<tr>
<td>📏 Коррекция фигуры</td>
<td><span class="price-highlight">7 ч / 4 урока</span></td>
<td>Лимфодренаж, RF-терапия</td>
</tr>
<tr>
<td>💧 Биоревитализация</td>
<td><span class="price-highlight">7 ч / 4 урока</span></td>
<td>RF-лифтинг, сжигание жировой ткани, уменьшение объемов</td>
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
<li>🔹 Делать RF-лифтинг и микротоки</li>
<li>🔹 Проводить аппаратные процедуры для омоложения кожи</li>
<li>🔹 Работать с аппаратами для коррекции фигуры</li>
<li>🔹 Осваивать методы биоревитализации и ухода за кожей</li>
<li>🔹 Создавать индивидуальные программы процедур для клиентов</li>
<li>🔹 Подтвердить квалификацию дипломом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://kirov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">64 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 900 ₽</span> <span class="rating-count"><del>41 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Киров, ул. Примерная, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/upkeep&sub1=https://kirov.ecolespb.ru/cosmetology-school/upkeep" target="_blank">kirov.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/upkeep&sub1=https://kirov.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Кирове</strong> — идеальный старт для начинающих и тех, кто хочет совершенствовать навыки в beauty-индустрии.</p>
<p>Обучение охватывает диагностику и лечение кожи, а также комплекс процедур по уходу.</p>
<p>За <span class="price-highlight">64 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Курс подходит для желающих открыть свою практику или трудоустроиться в салонах красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>64</strong> ак. часа</span>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Типы кожи, анализ состояния кожи</td>
</tr>
<tr>
<td>📚 Уходовые процедуры</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Чистка, пилинг, увлажнение</td>
</tr>
<tr>
<td>👐 Практика на клиентах</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Отработка на моделях</td>
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
<li>💉 Определять тип кожи и выявлять проблемные зоны</li>
<li>🧴 Выбирать качественные средства для ухода</li>
<li>🚿 Проводить процедуры по уходу за кожей лица</li>
<li>📝 Составлять индивидуальные программы ухода</li>
<li>💼 Работать с клиентами и собирать портфолио</li>
<li>📈 Начать карьеру косметолога и получать доход</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://kirov.ecolespb.ru/cosmetology-school/upkeep&sub1=https://kirov.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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