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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 300 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 000 ₽</span> <span class="rating-count"><del>13 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">34%</span> на ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79916556006">+7 (991) 655-60-06</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Люберцах</strong> — это отличная возможность для будущих косметологов получить базовые навыки и знания.</p>
<p>Студенты изучат анатомию лица, основные элементы дерматологии и санитарные нормы.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получат практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для новичков и тех, кто хочет углубить свои знания в косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span> <span><strong>12</strong> уроков</span> <span><strong>6</strong> процедур</span> <span><strong>4–6</strong> недель</span>
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
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Строение кожи, типы кожи, диагностика проблем кожи лица</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">24 ч / 6 уроков</span></td>
<td>Анатомическое строение, анатомия лица, уход за кожей</td>
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
<li>🔍 Разбираться в типах кожи</li>
<li>🧼 Правильно организовывать рабочее место косметолога</li>
<li>🏋️ Понимать анатомию лица и шеи</li>
<li>⚖️ Знать санитарные требования к косметологическому кабинету</li>
<li>🧪 Осуществлять диагностические процедуры для выявления кожных заболеваний</li>
<li>💡 Участвовать в anti-age процедурах</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 недели</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 000 ₽</span> <span class="rating-count"><del>50 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период активности акций</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74955555555">+7 (495) 555-55-55</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Люберцах</strong> — идеальный старт для начинающих мастеров в индустрии красоты.</p>
<p>Программа включает восковую депиляцию и шугаринг, а также скоростные техники удаления волос.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить квалификацию и расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span> <span><strong>5</strong> уроков</span> <span><strong>9</strong> процедур</span> <span><strong>2-3</strong> недели</span>
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
<td>Восковая депиляция, работа с клиентами</td>
</tr>
<tr>
<td>📈 Шугаринг</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, первая процедура</td>
</tr>
<tr>
<td>🎓 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Сложности в профессии, скоростные техники</td>
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
<li>👌 Проводить восковую депиляцию на разных зонах</li>
<li>🍯 Работать с сахарной пастой в различных техниках</li>
<li>🔍 Депилировать все части тела, включая глубокое бикини</li>
<li>💬 Консультировать клиентов по процедуре и домашнему уходу</li>
<li>🛡️ Соблюдать правила гигиены и безопасности</li>
<li>🌈 Индивидуально подходить к каждому клиенту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы шугаринга" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы шугаринга</div>
<h2>Курсы шугаринга</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (1 день обучения + 3-7 недель практики)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 300 ₽</span> <span class="rating-count"><del>23 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение всего учебного года.</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74952260051">+7 (495) 226-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы шугаринга»</strong> в <strong>Люберцах</strong> — идеальный выбор для начинающих и тех, кто хочет развивать карьеру в beauty-индустрии.</p>
<p>Программа охватывает 3 техники работы с сахарной пастой в популярных зонах, включая бикини и подмышки.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как для начинающих, так и для опытных мастеров, желающих углубить свои знания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>13</strong> уроков</span>
<span><strong>8</strong> процедур</span>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">11 ч / 4 урока</span></td>
<td>Техники работы с сахарной пастой, безопасность, уход за кожей</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">15 ч / 6 уроков</span></td>
<td>Депиляция различных зон, отработка на моделях</td>
</tr>
<tr>
<td>🎨 Бикини и подмышки</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Депиляция бикини, уход, противопоказания</td>
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
<li>💁‍♀️ Проводить процедуры шугаринга на различных зонах</li>
<li>📐 Понимать требования к инструментам и материалам</li>
<li>✅ Работать с различными типами клиентов и ситуациями</li>
<li>🌱 Ухаживать за кожей до и после процедуры</li>
<li>🛠️ Избегать распространенных ошибок в шугаринге</li>
<li>🌟 Стартовать карьеру с высоким доходом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">12 500 ₽</span>
<span class="rating-count"><del>20 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> — получите отличную цену на обучение.</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+7XXXXXXXXXX">+7 (XXX) XXX-XX-XX</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Люберцах</strong> — идеальный выбор для тех, кто хочет освоить современные техники депиляции.</p>
<p>В программе изучение работы с полимерными восками и скоростными техниками для эффективного удаления волос.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Подходит как для начинающих, так и для тех, кто уже имеет опыт в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>8</strong> процедур</span>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Современные техники, работа с восками</td>
</tr>
<tr>
<td>📈 Работа с клиентами</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Психология клиента, индивидуальный подход</td>
</tr>
<tr>
<td>🎨 Техники удаления волос</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Удаление вросших и забритых волос, скоростные техники</td>
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
<li>💡 Современные техники депиляции</li>
<li>🧘‍♀️ Успокаивать клиентов перед процедурой</li>
<li>⚙️ Эффективное удаление вросших волосков</li>
<li>🚀 Скоростные методы работы</li>
<li>📈 Продвижение собственных услуг</li>
<li>🌟 Формирование качественного портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на данный курс</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79916556006">+7 (991) 655-60-06</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Люберцах</strong> — идеальный выбор для косметологов, стремящихся повысить свою квалификацию в области работы с гиперпигментацией.</p>
<p>В процессе обучения вы освоите современные методики пилингов и ферулового массажа, а также научитесь комбинировать процедуры для достижения лучших результатов.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих косметологов, так и для профессионалов, желающих обновить свои знания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Причины и механизмы появления пигментации</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетания пилингов и ретиноидов</td>
</tr>
<tr>
<td>🌟 Выполнение процедуры</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
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
<li>💡 Корректировать гиперпигментацию</li>
<li>🔍 Подбирать процедуры с учетом фототипа кожи</li>
<li>⚗️ Комбинировать пилинги и ретиноиды</li>
<li>✋ Проводить феруловый массаж</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>📝 Подбирать домашний уход после процедур</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 700 ₽</span> <span class="rating-count"><del>12 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, д. 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74956789000">+7 (495) 678-90-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Люберцах</strong> — идеальный старт для начинающих специалистов в области косметологии и spa-процедур.</p>
<p>Программа включает техники обертываний, пилинга тела и ароматерапии, а также обучение спа-этикету.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных косметологов, желающих расширить свои услуги.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> уроков</span>
<span><strong>23</strong> процедур</span>
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
<td>🔰 Основы ароматерапии</td>
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, сочетание эфирных масел</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">4 ак. часа / 1 урок</span></td>
<td>Техники поверхностного пилинга, скрабирования</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
<td>Горячие и холодные обертывания, показания и противопоказания</td>
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
<li>💆 Владеть техниками SPA-процедур</li>
<li>🧘🏻‍♀️ Проводить расслабляющие обертывания</li>
<li>📊 Составлять индивидуальные программы ухода за кожей</li>
<li>🌺 Применять ароматерапию в косметологии</li>
<li>✨ Повышать свой профессионализм и привлекать новых клиентов</li>
<li>📋 Получать сертификаты подтверждающие вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Косметик-эстетист по уходу за телом" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Косметик-эстетист по уходу за телом</div>
<h2>Косметик-эстетист по уходу за телом</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">52 400 ₽</span> <span class="rating-count"><del>87 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> Временной период с максимальными скидками</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74951234567">+7 (495) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за телом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за телом»</strong> в <strong>Люберцах</strong> — идеальный старт для начинающих специалистов и тех, кто хочет углубить свои знания в области косметологии.</p>
<p>Программа охватывает техники массажей, обертываний, пилингов и депиляции.</p>
<p>За <span class="price-highlight">95 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для действующих профессионалов, стремящихся расширить свои навыки и привлечь больше клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>95</strong> ак. часов</span>
<span><strong>20</strong> уроков</span>
<span><strong>15</strong> процедур</span>
<span><strong>1-3 месяца</strong></span>
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
<td>Строение кожи, Маски, Пилинги</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Ароматерапия, Пилинг тела, Обертывания</td>
</tr>
<tr>
<td>🧰 Депиляция</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Депиляция, Работа с клиентами</td>
</tr>
<tr>
<td>💆 Классический массаж</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Правила массажа, Массаж спины и шеи</td>
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
<li>🏋️ Корректировать фигуру и устранять отеки</li>
<li>🔍 Подбирать маски и пилинги под задачи клиента</li>
<li>🪄 Выполнять восковую депиляцию</li>
<li>🎯 Использовать профессиональную косметику для ухода за телом</li>
<li>✨ Составлять антицеллюлитные программы и комплексно корректировать фигуру</li>
<li>👐 Выполнять массаж всех частей тела</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в период акций</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79916556006">+7 (991) 655-60-06</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Люберцах</strong> — идеальное решение для косметологов, стремящихся повысить лояльность клиентов и увеличить продажи.</p>
<p>Программа охватывает техники общения с клиентами, психотипы и выявление потребностей.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подойдёт всем профессионалам в индустрии красоты, желающим развить навыки взаимодействия с клиентами.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часов</span>
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
<td>💬 Коммуникация</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этапы общения с клиентом</td>
</tr>
<tr>
<td>🌟 Этика</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Профессиональная этика в косметологии</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование корпоративной культуры</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов</td>
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
<li>💬 Выстраивать положительные отношения с клиентами</li>
<li>🧠 Выявлять потребности и психотипы клиентов</li>
<li>📈 Увеличивать продажи услуг</li>
<li>🌟 Повышать авторитет среди коллег</li>
<li>🤝 Работа с трудными клиентами</li>
<li>🛠️ Применять знания на практике</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Косметик-эстетист по уходу за лицом</div>
<h2>Косметик-эстетист по уходу за лицом</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">72 500 ₽</span> <span class="rating-count"><del>120 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при записи</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79916556006">+7 (991) 655-60-06</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Люберцах</strong> — это ваше идеальное начало в мире косметологии.</p>
<p>Программа включает в себя популярные техники, такие как уход за кожей, массаж, пилинги и оформление бровей.</p>
<p>За <span class="price-highlight">123 ак. часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для новичков, так и для профессионалов, желающих улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>8</strong> процедур</span>
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
<td>Строение кожи, маски, пилинги</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая, пластическая техника, массаж Жаке</td>
</tr>
<tr>
<td>🖌️ Коррекция и окрашивание бровей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Архитектура бровей, окрашивание бровей</td>
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
<li>💆 Проводить косметический массаж лица</li>
<li>🎨 Оформлять и окрашивать брови</li>
<li>✅ Выполнять пилинги и уходовые процедуры</li>
<li>💻 Работать с современными аппаратами для косметологических процедур</li>
<li>📋 Составлять индивидуальные программы ухода за кожей</li>
<li>🌟 Осваивать массажи разных техник и стилей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа (1 месяц)</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 250 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">25 500 ₽</span> <span class="rating-count"><del>42 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение.</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, д. 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79916556006">+7 (991) 655-60-06</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/upkeep" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Люберцах</strong> — идеальный вариант для новичков и тех, кто хочет углубить свои знания в сфере косметологии.</p>
<p>Программа охватывает актуальные методы диагностики и лечения кожи, а также домашний и салонный уход.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат о завершении обучения</span>.</p>
<p>Курс подходит для тех, кто хочет начать карьеру косметолога и быстро добиться первых результатов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часа</span> <span><strong>8</strong> уроков</span> <span><strong>6</strong> процедур</span> <span><strong>1 месяц</strong></span>
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
<td><span class="price-highlight">6 ч / 3 урока</span></td>
<td>Строение кожи, диагностика, типы кожи</td>
</tr>
<tr>
<td>📊 Практика уходовых процедур</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Чистки, пилинги, маски, карбокситерапия</td>
</tr>
<tr>
<td>🛠️ Механическая чистка</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Техника выполнения чистки, работа с проблемной кожей</td>
</tr>
<tr>
<td>🌱 Комплексный уход</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Комбинированные подходы к уходу, работа с разными типами кожи</td>
</tr>
<tr>
<td>📑 Дипломная работа</td>
<td><span class="price-highlight">10 ч / 1 урок</span></td>
<td>Создание портфолио, проектирование программ ухода</td>
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
<li>🔍 Анализировать и диагностировать состояние кожи</li>
<li>💆 Выполнять процедуры ухода за кожей лица</li>
<li>🌈 Работать с профессиональной косметикой</li>
<li>🧖 Создавать индивидуальные уходовые программы</li>
<li>📊 Понимать факторы старения и их коррекцию</li>
<li>📋 Подтверждать квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">76 300 ₽</span> <span class="rating-count"><del>127 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на текущий момент</p>
<p><strong>📍 Адрес:</strong> Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79916556006">+7 (991) 655-60-06</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист (без мед. образования)»</strong> в <strong>Люберцах</strong> — идеальный старт для тех, кто хочет овладеть профессией в индустрии красоты.</p>
<p>Программа включает в себя изучение косметических и аппаратных процедур, массажей и депиляции.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет повысить свои навыки и качество услуг.</p>
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
<td>Строение кожи, маски, пилинги</td>
</tr>
<tr>
<td>🔧 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🌿 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>✂️ Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Первая процедура, депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, пластический массаж, массаж в методике Жаке</td>
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
<li>Выполнять механическую и аппаратную чистку кожи</li>
<li>Овладеть тремя видами массажа лица</li>
<li>Проводить восковую депиляцию и безопасные техники удаления волос</li>
<li>Подбирать маски, пилинги и обертывания под задачи клиента</li>
<li>Выполнять аппаратные процедуры по омоложению и увлажнению кожи</li>
<li>Работать с клиентами и строить долгосрочные отношения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес. (3 месяца)</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 300 ₽</span> <span class="rating-count"><del>23 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, д. 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79916556006">+7 (991) 655-60-06</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Люберцах</strong> — это идеальный выбор для всех, кто хочет начать карьеру в индустрии красоты, освоив эффективные техники депиляции воском.</p>
<p>В программе предусмотрены различные техники, включая шпательную и бандажную, с акцентом на индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера</span>.</p>
<p>Идеально подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию и начать работать.</p>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Теория, безопасность, инструменты</td>
</tr>
<tr>
<td>📈 Техники депиляции</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Шпательная, бандажная техники</td>
</tr>
<tr>
<td>🎨 Практика и работа с клиентами</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Подготовка клиента, уход за кожей</td>
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
<li>💡 Овладевать техникой восковой депиляции</li>
<li>🌟 Эффективное взаимодействие с клиентами</li>
<li>🧴 Правила ухода за кожей после процедуры</li>
<li>🔍 Избегать распространённых ошибок начинающих</li>
<li>📈 Подбор индивидуального подхода к клиенту</li>
<li>🏆 Подготовка к работе в индустрии красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">От 3 500 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 900 ₽</span> <span class="rating-count"><del>36 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в рамках периода акций.</p>
<p><strong>📍 Адрес:</strong> г. Люберцы, ул. 3-е Почтовое Отделение, 47к2</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79916556006">+7 (991) 655-60-06</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://lyubercy.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">lyubercy.ecolespb.ru</a></p>
</div>
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Аппаратная косметология»</strong> в <strong>Люберцах</strong> — идеальное решение для начинающих специалистов и тех, кто хочет повысить квалификацию.</p>
<p>Вы изучите техники аппаратных процедур, включая дарсонвализацию, микротоки, лазерную биоревитализацию и RF-лифтинг.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для желающих обрести новую профессию, так и для тех, кто стремится расширить свои навыки.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Физиотерапия, безопасность работы с аппаратами</td>
</tr>
<tr>
<td>📈 Микротоковая терапия</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Восстановление клеточной активности, устранение морщин</td>
</tr>
<tr>
<td>🎯 Лазерная терапия</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Омоложение лица, лазерная биоревитализация</td>
</tr>
<tr>
<td>🎨 Аппаратные пилинги</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Газожидкостный пилинг, УЗ-пилинг</td>
</tr>
<tr>
<td>📈 Коррекция фигуры</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>RF-лифтинг, кавитация</td>
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
<li>💆‍♀️ Выполнять аппаратные пилинги различных типов</li>
<li>🏋️‍♀️ Корректировать фигуру с помощью RF-терапии</li>
<li>💉 Проводить лазерные процедуры для омоложения кожи</li>
<li>🔋 Использовать микротоковую терапию для улучшения состояния кожи</li>
<li>📋 Знать показания и противопоказания для процедур</li>
<li>🛠️ Работать с профессиональным косметологическим оборудованием</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://lyubercy.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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