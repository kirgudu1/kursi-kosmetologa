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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">35 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 500 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 200 ₽</span> <span class="rating-count"><del>8 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> на обучение в этом месяце</p>
<p><strong>📍 Адрес:</strong> Санкт-Петербург, ул. Алтайская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/cosmetology" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Санкт-Петербурге</strong> — идеальный выбор для тех, кто хочет стать профессиональным косметологом и разобраться в анатомии лица и дерматологии.</p>
<p>Программа охватывает основы дерматологии, строение кожи, типы кожи и санитарные требования при организации рабочего места.</p>
<p>За <span class="price-highlight">35 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет углубить свои знания в области косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>35</strong> ак. часов</span> <span><strong>10</strong> уроков</span> <span><strong>5</strong> процедур</span> <span><strong>2 месяца</strong></span>
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
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Строение кожи, типы кожи, диагностика проблем кожи</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Анатомическое строение лица и шеи, влияние факторов на старение кожи</td>
</tr>
<tr>
<td>🎓 Практика и санитарные нормы</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Санитарные требования, организация рабочего места косметолога</td>
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
<li>🔍 ОСвойте диагностику и анализ типов кожи</li>
<li>🧑‍🎓 Получите знания о дерматологических заболеваниях и их коррекции</li>
<li>🏗️ Научитесь правильно организовывать косметологическое рабочее место</li>
<li>💡 Будете разбираться в анатомии лица и шеи</li>
<li>🕵️‍♂️ Изучите современные anti-age процедуры</li>
<li>📋 Получите диплом, подтверждающий вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 000 ₽</span> <span class="rating-count"><del>16 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс в ближайшие дни.</p>
<p><strong>📍 Адрес:</strong> Большой пр-т ПС д. 43, ул. Алтайская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Санкт-Петербурге</strong> — идеальный выбор для тех, кто хочет стать мастером депиляции.</p>
<p>Программа включает в себя изучение базовых техник восковой депиляции и индивидуального подхода к клиентам.</p>
<p>За <span class="price-highlight">1-2 дня</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Подходит для начинающих и профессионалов, желающих повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span> <span><strong>2</strong> урока</span> <span><strong>4</strong> процедуры</span> <span><strong>1-2</strong> дня</span>
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
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Теория, правила безопасности, подготовка</td>
</tr>
<tr>
<td>📦 Восковая депиляция</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техники шпательной и бандажной депиляции</td>
</tr>
<tr>
<td>📈 Работа с клиентами</td>
<td><span class="price-highlight">5 ч / 2 урока</span></td>
<td>Коммуникация, сопровождение клиента до и после процедуры</td>
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
<li>💡 Овладеть техникой восковой депиляции</li>
<li>🔍 Понимать особенности подбора воска для различных зон</li>
<li>👥 Работать с клиентами эффективно и профессионально</li>
<li>🛡️ Применять меры предосторожности во время процедур</li>
<li>📈 Увеличивать клиентскую базу и развивать карьеру</li>
<li>📋 Получать сертификат, подтверждающий вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс интегративной нутрициологии</div>
<h2>Курс интегративной нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 400 ₽</span> <span class="rating-count"><del>19 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период, когда действуют максимальные предложения.</p>
<p><strong>📍 Адрес:</strong> Санкт-Петербург, ул. Алтайская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78122345678">+7 (812) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Санкт-Петербурге</strong> — идеальный выбор для тех, кто хочет глубже понять вопросы питания и получить инструменты для работы с клиентами.</p>
<p>Программа включает изучение основ питания, составление индивидуальных планов и работу с различными группами населения.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают значительный практический опыт и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, желающих расширить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>9</strong> процедур</span>
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
<td>🔰 Основы нутрициологии</td>
<td><span class="price-highlight">12 ч / 5 уроков</span></td>
<td>Принципы питания, виды диет, основы метаболизма</td>
</tr>
<tr>
<td>📈 Питание для различных групп</td>
<td><span class="price-highlight">16 ч / 6 уроков</span></td>
<td>Питание спортсменов, беременных и детей</td>
</tr>
<tr>
<td>🎓 Практика работы с клиентами</td>
<td><span class="price-highlight">20 ч / 7 уроков</span></td>
<td>Опросы, анкетирование, анализ данных</td>
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
<li>✅ Выстраивать рацион питания</li>
<li>✅ Понимать потребности различных групп клиентов</li>
<li>✅ Консультировать по вопросам питания и здоровья</li>
<li>✅ Проводить анализ тела и составлять программы питания</li>
<li>✅ Работать с запросами клиентов и их особенностями</li>
<li>✅ Разбираться в принципах и правилах питания</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс сестринского дела</div>
<h2>Курс сестринского дела</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">192 ак. часов</span> (6 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">36 000 ₽</span> <span class="rating-count"><del>60 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на весь курс в определенные моменты года.</p>
<p><strong>📍 Адрес:</strong> Санкт-Петербург, Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78124567890">+7 (812) 456-78-90</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/nurse" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/nurse" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Сестринское дело»</strong> в <strong>Санкт-Петербурге</strong> — это возможность стать квалифицированным специалистом в области медицины и красоты.</p>
<p>Программа включает изучение работы с пациентами, первой помощи и медицинских процедур.</p>
<p>За <span class="price-highlight">192 академических часов</span> студенты получают практические навыки и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдёт как для начинающих, так и для опытных медработников, желающих повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>192</strong> ак. часов</span>
<span><strong>40</strong> уроков</span>
<span><strong>10</strong> процедур</span>
<span><strong>6 месяцев</strong></span>
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
<td>🔰 Основы медицинского сестринства</td>
<td><span class="price-highlight">50 ч / 10 уроков</span></td>
<td>Работа с пациентами, основы анатомии и физиологии</td>
</tr>
<tr>
<td>📈 Первая помощь</td>
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>Методы оказания первой помощи при различных ситуациях</td>
</tr>
<tr>
<td>🎓 Практическое сестринское дело</td>
<td><span class="price-highlight">102 ч / 20 уроков</span></td>
<td>Практика на реальных клиентах, отработка навыков</td>
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
<li>🩺 Выполнять забор анализов и работ с биоматериалами</li>
<li>👩‍⚕️ Определять заболевания по симптомам</li>
<li>💉 Применять навыки первой помощи</li>
<li>🗣️ Общаться с пациентами и оказывать психологическую поддержку</li>
<li>📋 Проводить предварительную диагностику</li>
<li>🌟 Составлять и вести документацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/nurse" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4800 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 200 ₽</span> <span class="rating-count"><del>23 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс.</p>
<p><strong>📍 Адрес:</strong> Санкт-Петербург, Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Санкт-Петербурге</strong> — идеальный выбор для тех, кто хочет усовершенствовать свои навыки в уходе за кожей и стать мастером депиляции.</p>
<p>Участники изучают современные техники депиляции, работу с полимерными восками и взаимодействие с клиентами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет повысить свою квалификацию и ускорить процесс работы с клиентами.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>6</strong> процедур</span>
<span><strong>2</strong> дня</span>
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
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники депиляции, работа с вросшими волосами</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с полимерными восками, психологический подход к клиенту</td>
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
<li>💡 Осваивать техники быстрой депиляции</li>
<li>✂️ Работать с полимерными восками</li>
<li>🧘‍♀️ Находить подход к сложным клиентам</li>
<li>📈 Продвигать свои услуги в beauty-индустрии</li>
<li>📋 Подтверждать свою квалификацию дипломом</li>
<li>👩‍🎓 Повышать свою ценность на рынке труда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/в мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 300 ₽</span> <span class="rating-count"><del>35 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период наибольших распродаж</p>
<p><strong>📍 Адрес:</strong> Санкт-Петербург, ул. Алтайская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78123123123">+7 (812) 312-31-23</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс основы нутрициологии»</strong> в <strong>Санкт-Петербурге</strong> — отличная возможность научиться правильно питаться и начать карьеру нутрициолога.</p>
<p>Программа охватывает основы питания, виды диет и принципы коррекции рациона.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как новичкам, так и тем, кто хочет расширить свои знания в области нутрициологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Принципы здорового питания, классификация пищевых веществ</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Виды витаминов, потребности в макро- и микронутриентах</td>
</tr>
<tr>
<td>🎉 Диеты и голодание</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Способы коррекции веса, правила безопасности питания</td>
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
<li>📝 Анализировать состав продуктов</li>
<li>🍏 Определять суточные потребности в калориях</li>
<li>🥗 Подбирать правильный рацион</li>
<li>📉 Корректировать вес клиентов с помощью диет</li>
<li>🔍 Применять знания о витаминах и минералах</li>
<li>👥 Работать с реальными клиентами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">1200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 200 ₽</span> <span class="rating-count"><del>12 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при оформлении заявки на обучение</p>
<p><strong>📍 Адрес:</strong> Санкт-Петербург, ул. Алтайская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78123456789">+7 (812) 345-67-89</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Санкт-Петербурге</strong> — это идеальный старт для косметологов, желающих повысить лояльность клиентов и улучшить навыки общения.</p>
<p>В программе изучаются техники работы с клиентами, выявление потребностей и принципы этики в косметологии.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам, так и опытным специалистам, стремящимся улучшить свои навыки взаимодействия с клиентами.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Грамотная коммуникация, создание имиджа</td>
</tr>
<tr>
<td>📜 Этика в косметологии</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Принципы профессиональной этики</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов</td>
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
<li>🎯 Выстраивать положительные взаимоотношения с клиентами</li>
<li>🤝 Находить подход к различным психотипам клиентов</li>
<li>🛠️ Выявлять потребности и увеличивать продажи</li>
<li>🌟 Повышать авторитет среди коллег</li>
<li>📋 Избегать ошибок в корпоративной культуре</li>
<li>💼 Создавать стабильную базу клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Нутрициолог" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Нутрициолог</div>
<h2>Нутрициолог</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 000 ₽</span> <span class="rating-count"><del>50 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в определенные периоды года</p>
<p><strong>📍 Адрес:</strong> г. Санкт-Петербург, Большой пр-т ПС, д. 43 и ул. Алтайская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78122470000">+7 (812) 247-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/programm-nutriciolog" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Нутрициолог" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Нутрициолог»</strong> в <strong>Санкт-Петербурге</strong> — идеальное решение для тех, кто хочет освоить профессиональные знания в области питания.</p>
<p>Программа охватывает основы нутрициологии и консультирование клиентов по вопросам рациона питания.</p>
<p>За <span class="price-highlight">36 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет улучшить свои навыки и начать карьеру в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span> <span><strong>18</strong> уроков</span> <span><strong>6</strong> процедур</span> <span><strong>1-3</strong> месяца</span>
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
<td>🔰 Основы нутрициологии</td>
<td><span class="price-highlight">24 ч / 12 уроков</span></td>
<td>Наука о питании, витамины, минеральные вещества, коррекция рациона</td>
</tr>
<tr>
<td>📈 Интегративная нутрициология</td>
<td><span class="price-highlight">12 ч / 6 уроков</span></td>
<td>Причины избыточного веса, работа с клиентом, формирование рациона</td>
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
<li>🤝 Консультирование клиентов по вопросам питания</li>
<li>🍏 Составление рациона правильного питания</li>
<li>⚖️ Корректировка рациона для клиентов с избыточным весом</li>
<li>🏋️‍♀️ Составление рациона для беременных и кормящих женщин</li>
<li>📊 Расчет суточной потребности в БЖУ</li>
<li>📝 Планирование рациона на день и неделю</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>5 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Санкт-Петербург, Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Санкт-Петербурге</strong> — это идеальное решение для косметологов, стремящихся улучшить свои навыки работы с гиперпигментацией.</p>
<p>Программа включает освоение ферулового массажа и изучение методов безопасной коррекции.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и опытным специалистам, желающим углубить свои знания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> уроков</span>
<span><strong>3</strong> процедур</span>
<span><strong>1</strong> неделя</span>
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
<td>🔰 Основы пилингов</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Типы гиперпигментации и их коррекция</td>
</tr>
<tr>
<td>📈 Феруловый массаж</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Пошаговая техника выполнения</td>
</tr>
<tr>
<td>🎨 Комбинированные методики</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Сочетание пилингов и ретиноидов</td>
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
<li>💡 Корректировать гиперпигментацию</li>
<li>🔍 Подбирать процедуры по фототипу кожи</li>
<li>🔗 Комбинировать пилинги и ретиноиды</li>
<li>🤲 Проводить феруловый массаж</li>
<li>📝 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Разрабатывать домашний уход для клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 200 ₽</span> <span class="rating-count"><del>15 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> наш курс активно предлагает выгодные условия обучения.</p>
<p><strong>📍 Адрес:</strong> Санкт-Петербург, Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Санкт-Петербурге</strong> — идеальный выбор для тех, кто хочет освоить востребованную профессию в beauty-индустрии.</p>
<p>Программа охватывает техники работы с сахарной пастой и особенности проведения процедуры на самых популярных зонах.</p>
<p>За <span class="price-highlight">9 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как новичкам, так и тем, кто уже имеет опыт и хочет расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>9</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> процедуры</span>
<span><strong>1-2 дня</strong></span>
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
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техника нанесения и удаления, особенности сахарной пасты</td>
</tr>
<tr>
<td>📈 Применение</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Депиляция различных зон, уход за кожей после процедуры</td>
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
<li>💡 Проводить сахарную депиляцию на различных зонах</li>
<li>🧰 Работать с профессиональной косметикой</li>
<li>🎯 Индивидуально подходить к каждому клиенту</li>
<li>📈 Избегать распространенных ошибок мастеров</li>
<li>📋 Оказывать качественный уход за кожей после процедуры</li>
<li>💰 Начать зарабатывать сразу после обучения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (18 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">64 900 ₽</span> <span class="rating-count"><del>108 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в это время.</p>
<p><strong>📍 Адрес:</strong> Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Санкт-Петербурге</strong> — это отличное решение для начинающих мастеров и тех, кто хочет повысить свои навыки в бьюти-индустрии.</p>
<p>Программа охватывает различные техники работы с лицом и телом, включая аппаратные процедуры, массаж и депиляцию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для профессионалов, желающих углубить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span> <span><strong>24</strong> урока</span> <span><strong>22</strong> процедуры</span> <span><strong>2-3</strong> месяца</span>
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
<td>Строение кожи, маски, комплексный уход</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 SPA-косметология</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🧰 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Первая процедура, депиляция бикини</td>
</tr>
<tr>
<td>🌟 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, пластический массаж</td>
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
<li>💆 Выполнять косметические процедуры по уходу за лицом</li>
<li>💉 Проводить аппаратные процедуры</li>
<li>✨ Осваивать техники массажа лица и тела</li>
<li>🌸 Осуществлять депиляцию и уходовые процедуры</li>
<li>📌 Работать с реальными клиентами на практике</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2–3 недели</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 100 ₽</span> <span class="rating-count"><del>50 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> Санкт-Петербург, Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Санкт-Петербурге</strong> — идеальный выбор для начинающих мастеров и профессионалов, желающих повысить квалификацию.</p>
<p>В программе изучаются техники восковой депиляции и шугаринга, адаптация процедур под каждого клиента.</p>
<p>За <span class="price-highlight">38 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для новичков, желающих быстро научиться востребованным методам.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
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
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Восковая депиляция, работа с клиентами</td>
</tr>
<tr>
<td>📈 Шугаринг</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, первая процедура</td>
</tr>
<tr>
<td>🎯 Повышение квалификации</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Сложности в профессии, скоростные техники</td>
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
<li>💡 Проведение процедур депиляции воском и сахарной пастой</li>
<li>✨ Работа с различными типами волос</li>
<li>👌 Индивидуальный подход к каждому клиенту</li>
<li>📋 Соблюдение правил гигиены и безопасности</li>
<li>🛠️ Качественное консультирование клиента</li>
<li>📜 Получение диплома специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">9 500 ₽ за 1 день</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 500 ₽</span> <span class="rating-count"><del>15 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Санкт-Петербург, Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Санкт-Петербурге</strong> — шанс для тех, кто хочет освоить востребованные навыки в сфере косметологии и SPA-процедур.</p>
<p>Программа включает изучение обертываний, пилингов и ароматерапии, с акцентом на практические занятия.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию и расширить спектр услуг.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>9</strong> ак. часов</span>
<span><strong>3</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td>Создание расслабляющей атмосферы</td>
</tr>
<tr>
<td>📈 Пилинг</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Технология поверхностного пилинга</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Горячие и холодные обертывания</td>
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
<li>🏖️ Проводить SPA-процедуры</li>
<li>🌸 Владеть техниками обертывания и пилинга</li>
<li>💧 Составлять программы по уходу за кожей</li>
<li>🧴 Проводить ароматерапию</li>
<li>💼 Привлекать новых клиентов</li>
<li>📋 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">28 100 ₽</span> <span class="rating-count"><del>46 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> в определенные моменты года.</p>
<p><strong>📍 Адрес:</strong> г. Санкт-Петербург, Большой пр-т ПС, д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Санкт-Петербурге</strong> — это ваш идеальный старт для карьеры в бьюти-индустрии.</p>
<p>Вы освойте множество операторных процедур, включая RF-лифтинг и лазерную биоревитализацию, а также получите навыки работы на реальных клиентах.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто желает повысить свою квалификацию в области косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
<span><strong>5</strong> процедур</span>
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
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Введение в аппаратную косметологию, техника безопасности, виды аппаратов</td>
</tr>
<tr>
<td>📈 УЗ-процедуры</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>УЗ-пилинг, УЗ-массаж, фонофорез</td>
</tr>
<tr>
<td>🎨 RF-терапия и кавитация</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Методика RF-лифтинга и кавитации</td>
</tr>
<tr>
<td>💎 Аппаратные пилинги</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Гидропилинг, газожидкостный пилинг</td>
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
<li>📈 Выполнять аппаратные пилинги</li>
<li>🔧 Проводить RF-лифтинг и кавитацию</li>
<li>🧖‍♀️ Осваивать техники УЗ-процедур</li>
<li>💉 Применять лазерную биоревитализацию</li>
<li>🪄 Работать с дарсонвалем и микротоками</li>
<li>📋 Получить диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">43 200 ₽</span> <span class="rating-count"><del>112 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период активных акций</p>
<p><strong>📍 Адрес:</strong> г. Санкт-Петербург, Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер аппаратной косметологии»</strong> в <strong>Санкт-Петербурге</strong> — идеальный старт для тех, кто хочет получить востребованную профессию в индустрии красоты.</p>
<p>Программа охватывает основные аппаратные процедуры, такие как LPG-массаж, биоревитализация и процедуры омоложения.</p>
<p>За <span class="price-highlight">94 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию и расширить свои услуги.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>94</strong> ак. часов</span>
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
<td>🌟 Эстетическая косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски, комплексный уход</td>
</tr>
<tr>
<td>💻 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>👐 Аппаратный массаж LPG</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Упругая кожа, уменьшение объемов</td>
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
<li>💼 Выполнять аппаратные процедуры по омоложению</li>
<li>🔬 Осуществлять LPG-массаж для коррекции фигуры</li>
<li>🌟 Проводить биоревитализацию и уходовые процедуры</li>
<li>🛠️ Изучать техники безопасности при проведении процедур</li>
<li>📈 Применять эффективные методы работы с клиентами</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 900 ₽</span> <span class="rating-count"><del>38 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> в период лучших предложений</p>
<p><strong>📍 Адрес:</strong> Большой пр-т ПС д. 43</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78126480083">+7 (812) 648-00-83</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ecolespb.ru/cosmetology-school/upkeep" target="_blank">ecolespb.ru</a></p>
</div>
<a href="https://ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Эстетическая косметология»</strong> в <strong>Санкт-Петербурге</strong> — это идеальный выбор для тех, кто хочет начать карьеру в beauty-индустрии.</p>
<p>Программа охватывает диагностику и лечение кожи, и включает множество востребованных косметологических процедур.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Подходит как новичкам, так и тем, кто желает повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>23</strong> процедур</span>
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
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Строение кожи, основные процедуры, уход за лицом</td>
</tr>
<tr>
<td>📈 Уходовые процедуры</td>
<td><span class="price-highlight">36 ч / 9 уроков</span></td>
<td>Чистка, пилинг, маски</td>
</tr>
<tr>
<td>🎨 Карбокситерапия</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Техника выполнения карбокситерапии</td>
</tr>
<tr>
<td>💼 Подбор средств для ухода</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Профессиональная косметика, выбор и рекомендации</td>
</tr>
<tr>
<td>🧰 Практика на клиентах</td>
<td><span class="price-highlight">30 ч / 8 уроков</span></td>
<td>Отработка всех изученных техник на реальных клиентах</td>
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
<li>💆‍♀️ Выполнять различные косметологические процедуры уходового и салонного типа</li>
<li>🧖‍♀️ Проводить диагностику кожных проблем</li>
<li>💄 Разрабатывать индивидуальные программы ухода для клиентов</li>
<li>🌟 Работать с профессиональной косметикой</li>
<li>📋 Получать диплом мастера красоты после завершения курса</li>
<li>🤝 Привлекать клиентов и наращивать свою базу моделей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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