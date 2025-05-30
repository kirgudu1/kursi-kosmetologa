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
<!-- Главная карточка "Нутрициолог" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Нутрициолог</div>
<h2>Нутрициолог</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">29 400 ₽</span> <span class="rating-count"><del>49 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462788909">+7 (846) 278-89-09</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/programm-nutriciolog" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Нутрициолог" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Нутрициолог»</strong> в <strong>Самаре</strong> — это возможность освоить востребованную профессию нутрициолога с помощью практикующих врачей-диетологов.</p>
<p>Вы изучите техники правильного питания, научитесь составлять рацион и консультировать клиентов по вопросам диетологии.</p>
<p>За <span class="price-highlight">36 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как тем, кто хочет заботиться о собственном здоровье, так и тем, кто мечтает открыть свой бизнес в сфере питания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>3</strong> процедур</span>
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
<td>🔰 Основы нутрициологии</td>
<td><span class="price-highlight">24 ч / 12 уроков</span></td>
<td>Наука о питании, витамины, минералы и БАДы</td>
</tr>
<tr>
<td>📈 Интегративная нутрициология</td>
<td><span class="price-highlight">12 ч / 6 уроков</span></td>
<td>Причины избыточного веса, работа с клиентом</td>
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
<li>📊 Консультировать клиентов по вопросам питания</li>
<li>📋 Составлять индивидуальные рационы питания</li>
<li>🍏 Работать с клиентами с избыточным весом</li>
<li>👶 Составлять рационы для беременных и кормящих</li>
<li>🏋️‍♂️ Создавать программы питания для спортсменов</li>
<li>📝 Расчёт суточной потребности в БЖУ</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 200 ₽</span> <span class="rating-count"><del>12 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Самаре</strong> — идеальный выбор для тех, кто хочет освоить востребованную профессию в сфере красоты.</p>
<p>Программа охватывает три техники работы с сахарной пастой и основные аспекты ухода за кожей после процедуры.</p>
<p>За <span class="price-highlight">1-2 дня</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подойдет для начинающих и тех, кто хочет улучшить свои навыки в депиляции.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>14</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>3</strong> процедуры</span>
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
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Характеристики сахарной пасты, правила безопасности</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с ногами и зонами бикини</td>
</tr>
<tr>
<td>🎨 Уход за кожей</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Методы восстановления кожи после шугаринга</td>
</tr>
<tr>
<td>📈 Работа с клиентами</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Коммуникация, решение конфликтов</td>
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
<li>💫 Выполнять сахарную депиляцию на различных зонах</li>
<li>🎯 Разбираться в инструментарии и техниках профессиональных мастеров</li>
<li>🌿 Ухаживать за кожей после процедуры</li>
<li>👥 Эффективно общаться с клиентами и решать их проблемы</li>
<li>📊 Составлять индивидуальные планы для клиентов</li>
<li>💵 Начнете зарабатывать сразу после курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 600 ₽</span> <span class="rating-count"><del>12 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span>, предложение ограничено.</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Самаре</strong> — отличный старт для тех, кто хочет стать мастером депиляции.</p>
<p>Программа охватывает базовые техники депиляции воском и индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">1-2 дня</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто хочет повысить квалификацию в области косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> процедур</span>
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
<td>🔰 Введение в депиляцию</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Основы депиляции, безопасность, правила работы</td>
</tr>
<tr>
<td>📖 Техники восковой депиляции</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Шпательная и бандажная техники</td>
</tr>
<tr>
<td>💼 Практика с клиентами</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Отработка навыков на реальных моделях</td>
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
<li>💪 Овладеть техникой восковой депиляции</li>
<li>🤝 Работать с различными зонами</li>
<li>📋 Поддерживать клиентов и их потребности</li>
<li>🛠️ Владеть основами ухода за кожей</li>
<li>📝 Создавать портфолио для работы</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">8 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 000 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79160000000">+7 (916) 000-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Самаре</strong> — идеальное решение для косметологов, которые хотят улучшить свои навыки общения и повысить клиентскую лояльность.</p>
<p>Вы изучите основы этики в косметологии, психологии общения и техники выявления потребностей клиентов.</p>
<p>За <span class="price-highlight">8 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подойдёт как начинающим специалистам, так и уже опытным, стремящимся повысить свою эффективность и авторитет в коллективе.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>8</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>1 неделя</strong></span>
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
<td>🔰 Основы общения</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Этапы грамотной коммуникации с клиентом, внешний образ косметолога</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Принципы профессиональной этики, общение во время процедуры</td>
</tr>
<tr>
<td>🎨 Психология общения</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов, типы клиентов</td>
</tr>
<tr>
<td>💡 Корпоративная культура</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Формирование корпоративной культуры, работа в команде</td>
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
<li>💬 Выстраивать положительные отношения с клиентами</li>
<li>🔍 Выявлять потребности клиентов</li>
<li>🔑 Превращать сложных клиентов в лояльных</li>
<li>🧑‍🤝‍🧑 Повышать авторитет среди коллег</li>
<li>📈 Увеличивать продажи услуг</li>
<li>🎯 Разрабатывать успешные стратегии общения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">26 ак. часов</span> (1–2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 700 ₽</span> <span class="rating-count"><del>26 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в ограниченное время</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79600000000">+7 (960) 000-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Самаре</strong> — это идеальный выбор для тех, кто хочет научиться корректировать фигуру и омолаживать кожу с помощью современных SPA-процедур.</p>
<p>На программе изучаются техники обертывания, пилинги и основы ароматерапии.</p>
<p>За <span class="price-highlight">26 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и опытным специалистам, желающим расширить свои знания и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>26</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>5</strong> процедур</span>
<span><strong>1–2</strong> месяца</span>
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
<td>Создание расслабляющей атмосферы, основы эфирных масел</td>
</tr>
<tr>
<td>📦 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Поверхностный пилинг, эксфолиация, алгоритм действий</td>
</tr>
<tr>
<td>📦 Обертывания</td>
<td><span class="price-highlight">19 ч / 4 урока</span></td>
<td>Технологии выполнения обертываний, горячие и холодные обертывания</td>
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
<li>💆 Проводить SPA-процедуры с использованием ароматерапии</li>
<li>🛁 Выполнять различные техники обертываний</li>
<li>🧼 Выполнять пилинги для кожи тела</li>
<li>🌿 Составлять программы по уходу за кожей, учитывая потребности клиента</li>
<li>📈 Повышать свою квалификацию в индустрии красоты</li>
<li>🤝 Привлекать новых клиентов благодаря расширению спектра услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 400 ₽</span> <span class="rating-count"><del>35 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Самаре</strong> — идеальный старт для тех, кто хочет стать профессионалом в индустрии красоты.</p>
<p>Участники освоят восковую депиляцию и шугаринг, а также скоростные техники и индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим специалистам, так и тем, кто хочет повысить свою квалификацию.</p>
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
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, Депиляция бикини, Работа с клиентами</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Сложные техники, Бразильское бикини, Полимерные воски</td>
</tr>
<tr>
<td>🎓 Повышение квалификации</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Сложности в профессии, Скоростные техники, Ваксинг лица</td>
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
<li>💁‍♀️ Проводить восковую депиляцию на различных зонах</li>
<li>🍯 Работать со сложными волосками и индивидуальными потребностями клиентов</li>
<li>🛠️ Применять техники шугаринга</li>
<li>🌈 Соблюдать правила гигиены и безопасности</li>
<li>🤝 Консультировать клиентов по уходу</li>
<li>📄 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 100 ₽</span> <span class="rating-count"><del>36 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение акционного периода</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/upkeep" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Самаре</strong> — идеальный выбор для тех, кто хочет начать карьеру в сфере красоты и заботиться о здоровье кожи клиентов.</p>
<p>Программа включает диагностику и лечение кожи, а также обучение востребованным процедурам по уходу.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, диагностика, основные процедуры ухода</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">54 ч / 12 уроков</span></td>
<td>Чистки, пилинги, карбокситерапия</td>
</tr>
<tr>
<td>🎨 Комплексный уход</td>
<td><span class="price-highlight">30 ч / 4 урока</span></td>
<td>Составление программ и создание индивидуальных уходов</td>
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
<li>💆‍♀️ Выполнять процедуры по уходу за кожей</li>
<li>📋 Диагностировать кожные проблемы</li>
<li>🧖‍♀️ Подбирать индивидуальные уходовые программы</li>
<li>🎯 Использовать профессиональную косметику</li>
<li>📅 Проводить процедуры на реальных клиентах</li>
<li>📜 Получить диплом специалиста после прохождения курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 академических часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период распродаж</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Самаре</strong> — это отличный выбор для косметологов, желающих расширить свои знания и навыки в области коррекции гиперпигментации.</p>
<p>Программа включает изучение методов безопасного и эффективного применения пилингов, ферулового массажа и домашнего ухода.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдёт как начинающим специалистам, так и опытным косметологам, интересующимся современными методиками.</p>
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
<span><strong>1–3</strong> недели</span>
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
<td>Причины и диагностика пигментации</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Комбинация методов для коррекции</td>
</tr>
<tr>
<td>🌟 Выполнение процедуры</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
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
<li>⭐ Безопасно корректировать гиперпигментацию</li>
<li>🔍 Подбирать процедуры по фототипу кожи</li>
<li>🧑‍🏫 Проводить феруловый массаж по методике ARKADIA</li>
<li>📋 Составлять индивидуальные протоколы ухода</li>
<li>📊 Увеличивать клиентскую базу с помощью эффективных процедур</li>
<li>🌲 Предлагать домашний уход для закрепления результата</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Аппаратная косметология" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Аппаратная косметология</div>
<h2>Курс аппаратной косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">23 800 ₽</span> <span class="rating-count"><del>39 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> на обучение в активно рекламируемых периодах</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Аппаратная косметология" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Аппаратная косметология»</strong> в <strong>Самаре</strong> — идеальный выбор для начала карьеры и освоения нового ремесла в области красоты.</p>
<p>В программе изучаются техники дарсонвализации, микротоков, лазерной биоревитализации и RF-лифтинга.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">документ о квалификации</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих расширить свои знания и возможности.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> уроков</span>
<span><strong>10</strong> процедур</span>
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
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Анатомия кожи, введение в косметологию</td>
</tr>
<tr>
<td>📈 Аппаратные процедуры</td>
<td><span class="price-highlight">46 ч / 10 уроков</span></td>
<td>Микротоки, RF-лифтинг, лазерные технологии</td>
</tr>
<tr>
<td>🎨 Пилинги и уход</td>
<td><span class="price-highlight">30 ч / 8 уроков</span></td>
<td>Аппаратные пилинги, процедуры омоложения</td>
</tr>
<tr>
<td>🌟 Практика на клиентах</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Работа с моделями, отработка навыков</td>
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
<li>🎯 Осуществлять аппаратные пилинги</li>
<li>💡 Проводить RF-лифтинг и кавитацию</li>
<li>🌼 Применять методики лазерной биоревитализации</li>
<li>💆‍♀️ Выполнять микротерапию и дарсонвализацию</li>
<li>🧖‍♀️ Создавать индивидуальные программы ухода за кожей</li>
<li>📋 Получить сертификат и начать свою практику</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">1 450 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 700 ₽</span> <span class="rating-count"><del>14 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> во время массовых акций.</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Самаре</strong> — идеальный вариант для тех, кто хочет повысить свои навыки в области депиляции.</p>
<p>В программе курса рассматриваются современные техники депиляции и работа с полимерными восками, а также психология общения с клиентами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для практикующих мастеров, желающих улучшить своё мастерство.</p>
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
<td>Основные техники, работа с восками</td>
</tr>
<tr>
<td>📈 Специфика работы</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Работа с разными типами кожи</td>
</tr>
<tr>
<td>🎨 Продвижение услуг</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Психология общения, маркетинг</td>
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
<li>💼 Эффективно проводить депиляцию</li>
<li>🌿 Работать с полимерными восками</li>
<li>🧘 Успокаивать клиентов перед процедурой</li>
<li>📈 Продавать и продвигать услуги</li>
<li>🔍 Понимать особенности разных типов волос</li>
<li>👩‍🏫 Создавать своё портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> на обучение в зависимости от выбранной программы.</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79001234567">+7 (900) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс основы нутрициологии»</strong> в <strong>Самаре</strong> — идеальный выбор для тех, кто хочет научиться осознанному питанию и поддерживать здоровье с помощью правильного рациона.</p>
<p>Программа охватывает принципы нутрициологии, выбор витаминов, минералов и правильное хранение продуктов.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Курс подойдёт как для личного развития, так и для старта карьеры нутрициologa.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
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
<td>🔰 Наука о питании</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Анатомия пищеварительной системы, принципы здорового питания</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Классификация витаминов, макро- и микронутриенты</td>
</tr>
<tr>
<td>🎯 Коррекция рациона</td>
<td><span class="price-highlight">20 ч / 3 урока</span></td>
<td>Виды диет, пищевые зависимости, правила гигиены питания</td>
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
<li>🍏 Разбираться в пищевом составе продуктов</li>
<li>🏋️ Изучать потребности в витаминах и минералах</li>
<li>🍽️ Определять виды диет и их принципы</li>
<li>📝 Проводить консультации для клиентов</li>
<li>📈 Составлять грамотные рационы питания</li>
<li>📜 Получить сертификат специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">18 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом о профессиональной переподготовке<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в момент сезонных предложений.</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79228888888">+7 (922) 888-88-88</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Самаре</strong> — это идеальный старт для тех, кто хочет научиться комплексно подходить к вопросам питания и здоровья.</p>
<p>Программа охватывает принципы составления рационов питания, анализ данных клиентов и развитие личных навыков консультирования.</p>
<p>За <span class="price-highlight">18 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом о профессиональной переподготовке</span>.</p>
<p>Курс подойдёт тем, кто стремится развивать карьеру в области нутрициологии и здоровья.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>18</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td>🔰 Введение в нутрициологию</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы нутрициологии и принципы питания</td>
</tr>
<tr>
<td>📈 Работа с клиентом</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Анализ данных, диагностика нарушений</td>
</tr>
<tr>
<td>⚖ Формирование рациона</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Составление рационов для различных групп клиентов</td>
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
<li>🍏 Составлять индивидуальные программы питания</li>
<li>📊 Анализировать данные клиентов</li>
<li>👩‍⚕ Консультировать по вопросам питания различных групп</li>
<li>⚕ Диагностировать нарушения пищевого поведения</li>
<li>🥗 Определять физиологические потребности в нутриентах</li>
<li>📝 Создавать и реализовывать полезные привычки питания</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 400 ₽/мес.</span> (1 месяц)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 400 ₽</span> <span class="rating-count"><del>4 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Самаре</strong> — идеальный выбор для будущих косметологов, желающих получить практические знания в области анатомии и дерматологии.</p>
<p>Программа охватывает основы анатомии лица и шеи, а также основные санитарные нормы и требования в работе косметолога.</p>
<p>За <span class="price-highlight">24 академичных часа</span> слушатели получат практические навыки на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часа</span>
<span><strong>6</strong> уроков</span>
<span><strong>3</strong> процедур</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Строение кожи, типы кожи, процесс очищения лица</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Анатомическое строение лица, кожные заболевания</td>
</tr>
<tr>
<td>🎨 Уход за кожей по возрасту</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>anti-age процедуры, воздействия на кожу</td>
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
<li>🏥 Организовывать рабочее место косметолога</li>
<li>🧐 Разбираться в типах кожи</li>
<li>📏 Понимать анатомию лица и шеи</li>
<li>🌿 Осуществлять уход за кожей</li>
<li>📋 Применять методы коррекции кожных проблем</li>
<li>⚙️ Выполнять процедуры anti-age</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 300 ₽/мес.</span> (на 9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">56 100 ₽</span> <span class="rating-count"><del>93 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс в ближайшие сроки.</p>
<p><strong>📍 Адрес:</strong> г. Самара, ул. Карла Маркса, д. 59А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78462111187">+7 (846) 211-11-87</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://samara.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">samara.ecolespb.ru</a></p>
</div>
<a href="https://samara.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист (без мед. образования)»</strong> в <strong>Самаре</strong> — это идеальное начало карьеры для желающих стать профессиональными косметологами.</p>
<p>Программа охватывает практические навыки в косметологии, массажах, депиляции и уходе за лицом и телом.</p>
<p>За <span class="price-highlight">126 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и уже работающим мастерам для повышения квалификации и открытия новых карьерных горизонтов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span> <span><strong>28</strong> уроков</span> <span><strong>22</strong> процедур</span> <span><strong>2-3</strong> месяца</span>
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
<td><span class="price-highlight">42 ч / 12 уроков</span></td>
<td>Строение кожи, маски, комплексный уход</td>
</tr>
<tr>
<td>⚙️ Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🧖‍♀️ Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🚺 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Первая процедура, депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая методика, массаж с эффектом пластики, массаж жаке</td>
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
<li>💆‍♀️ Проводить аппаратные и косметические процедуры по уходу за лицом и телом</li>
<li>👐 Выполнять массажи лица и депиляцию разными техниками</li>
<li>🎯 Работать с реальными клиентами и выходить на рынок сразу после обучения</li>
<li>📋 Создавать портфолио работ, превращая клиентов в постоянных</li>
<li>🚀 Начать карьеру в индустрии красоты без медицинского образования</li>
<li>🕵️‍♀️ Овладеть основными навыками общения и работы в команде</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://samara.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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