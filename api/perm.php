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
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы повышения квалификации по депиляции</div>
<h2>Курсы повышения квалификации по депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 900 ₽</span> <span class="rating-count"><del>19 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> - Успейте записаться пока действуют акции!</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Перми</strong> — идеальный вариант для специалистов, желающих освоить новые техники депиляции.</p>
<p>Программа обучает использованию полимерных восков и созданию идеальной процедуры для различных зон.</p>
<p>За <span class="price-highlight">16 ак. часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и профессионалам, желающим расширить свои навыки и клиентскую базу.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>2</strong> дня</span>
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
<td>Теория депиляции, безопасность процедур</td>
</tr>
<tr>
<td>📈 Продвинутые техники</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с полимерными восками, скоростные техники</td>
</tr>
<tr>
<td>🎨 Специфика работы</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Удаление вросших волосков, работа с клиентами</td>
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
<li>🧘 Ускорять процедуру депиляции</li>
<li>🌟 Работать с вросшими волосками</li>
<li>👥 Подбирать индивидуальный подход к клиентам</li>
<li>📈 Продвигать свои услуги на рынке</li>
<li>💬 Успокаивать клиентов перед процедурой</li>
<li>🔧 Использовать современные техники депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 400 ₽</span> <span class="rating-count"><del>19 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> для новых студентов</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы интегративной нутрициологии»</strong> в <strong>Пермь</strong> — идеальный выбор для тех, кто хочет глубже понять питание и его влияние на здоровье.</p>
<p>Программа охватывает основы питания, составления рационов и анализа физиологических потребностей.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит для начинающих и тех, кто хочет расширить свои знания в области нутрициологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>0</strong> процедур</span>
<span><strong>6 недель</strong></span>
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
<td>🔰 Основы</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Принципы питания, биохимия пищевых веществ</td>
</tr>
<tr>
<td>📈 Работа с клиентами</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Консультирование, анализ данных клиента</td>
</tr>
<tr>
<td>🎨 Специфика диет</td>
<td><span class="price-highlight">12 ч / 5 уроков</span></td>
<td>Специальные диеты для разных категорий, составление индивидуальных программ</td>
</tr>
<tr>
<td>📊 Практика</td>
<td><span class="price-highlight">12 ч / 5 уроков</span></td>
<td>Работа с моделями, практическое применение знаний</td>
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
<li>🏋️‍♀️ Выстраивать рацион питания для разных категорий клиентов</li>
<li>🧘‍♂️ Анализировать и оценивать потребности в макро- и микронутриентах</li>
<li>👥 Консультировать по вопросам питания и здорового образа жизни</li>
<li>📈 Разрабатывать индивидуальные программы питания</li>
<li>🔍 П проводить диагностику нарушения пищевого поведения</li>
<li>🍽️ Осуществлять практическое применение знаний на реальных клиентах</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (6 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период учебных предложений</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Основы нутрициологии»</strong> в <strong>Перми</strong> — это отличный старт для тех, кто хочет научиться осознанно питаться и поддерживать здоровье с помощью грамотного рациона.</p>
<p>Программа охватывает основы питания, витаминозависимости и коррекции веса с применением различных диет.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">документ о завершении курса</span>.</p>
<p>Курс подойдет как начинающим нутрициологам, так и тем, кто хочет повысить свою квалификацию в области здоровья и питания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Принципы здорового питания, классификация продуктов</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Типы витаминов, их потребность, источники</td>
</tr>
<tr>
<td>🎓 Диеты и гормоны</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Типы диет, детокс, коррекция веса</td>
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
<li>🥗 Оценивать состав пищи и её ценность</li>
<li>📈 Определять потребности в витаминах и минералах</li>
<li>📊 Разрабатывать индивидуальные планы питания</li>
<li>🍽️ Консультировать клиентов по диетам и образу жизни</li>
<li>📝 Составлять рацион с учетом назначения</li>
<li>🤝 Работать с реальными клиентами и проводить консультации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 600 ₽</span> <span class="rating-count"><del>51 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при записи</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-nutriciolog" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Нутрициолог" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Нутрициолог»</strong> в <strong>Перми</strong> — идеальный вариант для тех, кто хочет освоить востребованную профессию и улучшить здоровье свое и своих близких.</p>
<p>Программа включает в себя изучение основ питания, витаминов, минералов, а также навыков консультации и формирования индивидуальных рационов.</p>
<p>За <span class="price-highlight">36 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для желающих стать профессионалами, так и для заботящихся о своем здоровье.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
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
<td>🔰 Основы нутрициологии</td>
<td><span class="price-highlight">24 ч / 12 уроков</span></td>
<td>Наука о питании, витамины, минералы, корректировка рациона</td>
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
<li>📊 Консультировать клиентов по вопросам питания</li>
<li>🍏 Составлять индивидуальные рационы питания</li>
<li>📋 Корректировать рацион для клиентов с избыточным весом</li>
<li>🥗 Обеспечивать правильное питание для беременных и кормящих женщин</li>
<li>🏋️ Составлять рацион для спортсменов</li>
<li>📉 Расчитать суточную потребность в БЖУ</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер шугаринга" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер шугаринга</div>
<h2>Курс шугаринга</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1-2 дня)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">7 900 ₽/мес.</span> (до 1 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 900 ₽</span> <span class="rating-count"><del>13 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций.</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Шугаринг»</strong> в <strong>Перми</strong> — идеальный старт для тех, кто хочет овладеть востребованной профессией в beauty-сфере.</p>
<p>Программа включает изучение нескольких техник работы с сахарной пастой и уходу за кожей.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для новичков, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>8</strong> процедур</span>
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
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Техника шугаринга, безопасность, инструменты</td>
</tr>
<tr>
<td>📈 Уход за кожей</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Уход за кожей после процедуры</td>
</tr>
<tr>
<td>🎨 Депиляция бикини</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Техника депиляции в зоне бикини</td>
</tr>
<tr>
<td>🧰 Работа с клиентами</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Коммуникация с клиентами, решение конфликтов</td>
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
<li>💪 Проводить сахарную депиляцию</li>
<li>🧖‍♀️ Узнавать тонкости работы с различными зонами</li>
<li>🚀 Стартовать карьеру мастера шугаринга</li>
<li>📅 Эффективно общаться с клиентами</li>
<li>🧴 Заботиться о коже после процедур</li>
<li>💼 Создавать собственный клиентский поток</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы дерматологии и анатомии лица" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы дерматологии и анатомии лица</div>
<h2>Курсы дерматологии и анатомии лица</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 ак. часа</span> (1 неделя)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 000 ₽</span> <span class="rating-count"><del>3 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в академии.</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы дерматологии и анатомии лица»</strong> в <strong>Перми</strong> — идеальный выбор для тех, кто хочет освоить современные техники косметологии.</p>
<p>Программа включает изучение анатомии лица и шеи, а также основы дерматологии и санитарные нормы.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как начинающим косметологам, так и тем, кто хочет улучшить свои знания в области дерматологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>2</strong> ак. часа</span>
<span><strong>1</strong> урок</span>
<span><strong>1</strong> процедура</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Анатомия лица и шелковая структура кожи</td>
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
<li>✔️ Организовывать рабочее место косметолога</li>
<li>✔️ Понимать типы кожи и их особенности</li>
<li>✔️ Строение анатомии лица и шеи</li>
<li>✔️ Осуществлять уход и рекомендации по дерматологии</li>
<li>✔️ Применять методы анти-aging процедур</li>
<li>✔️ Соблюдать санитарные требования в работе</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 300 ₽/в мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">47 400 ₽</span> <span class="rating-count"><del>79 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> актуально в течение определенного периода.</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Перми</strong> — идеальный выбор для начинающих мастеров и тех, кто хочет повысить свою квалификацию в beauty-индустрии.</p>
<p>В программе обучения представлены востребованные техники по уходу за лицом и телом, включая массаж, депиляцию и косметические процедуры.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеален для новичков и профессионалов, стремящихся развивать свою карьеру в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> уроков</span>
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
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела</td>
</tr>
<tr>
<td>🧰 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Методы депиляции, работа с клиентами</td>
</tr>
<tr>
<td>🌸 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический, пластический, массаж по жаке</td>
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
<li>✅ Выполнять косметические и аппаратные процедуры</li>
<li>💆 Проводить массаж лица и тела</li>
<li>📅 Организовывать свою работу с клиентами</li>
<li>✨ Оказывать услуги по депиляции</li>
<li>🌟 Создавать индивидуальные программы ухода за кожей</li>
<li>🎓 Получить диплом о квалификации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Косметология SPA" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Косметология SPA</div>
<h2>Косметология SPA</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 600 ₽</span> <span class="rating-count"><del>12 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на ограниченное время.</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметология SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Перми</strong> — это идеальный выбор для тех, кто хочет научиться корректировать фигуру и омолаживать кожу с помощью обертываний и SPA-процедур.</p>
<p>Вы освоите техники пилинга, обертывания и ароматерапии.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подходит для начинающих косметологов, а также для тех, кто хочет расширить свои навыки и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>10</strong> ак. часов</span> <span><strong>2</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>1 день</strong></span>
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
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Методы эксфолиации и скрабирования</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Технология горячих и холодных обертываний</td>
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
<li>💆 Владеть техниками SPA-процедур</li>
<li>🌸 Проводить обертывания и пилинги тела</li>
<li>🧘 Создавать расслабляющую атмосферу с помощью ароматерапии</li>
<li>📅 Составлять программы по уходу за кожей тела</li>
<li>💼 Расширять спектр своих услуг</li>
<li>👥 Привлекать новых клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (2–3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 100 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 100 ₽</span> <span class="rating-count"><del>30 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в ограниченный период времени.</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Аппаратная косметология" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Аппаратная косметология»</strong> в <strong>Перми</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты и освоить современные техники.</p>
<p>Программа включает дарсонвализацию, микротоки, лазерную биоревитализацию и другие популярные процедуры.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">документ о квалификации</span>.</p>
<p>Курс подходит для начинающих и тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>11</strong> уроков</span>
<span><strong>7</strong> процедур</span>
<span><strong>2–3 месяца</strong></span>
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
<td>🔰 Основы</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Основные концепции, дарсонвализация, аппаратные пилинги</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>RF-лифтинг, кавитация, микротоковая терапия</td>
</tr>
<tr>
<td>🎨 Практика</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Практика на реальных клиентах, работа с аппаратами</td>
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
<li>💼 Выполнять процедуры аппаратного пилинга</li>
<li>🏋️ Корректировать фигуру с помощью RF-лифтинга и кавитации</li>
<li>✨ Проводить уходовые процедуры с применением лазерной биоревитализации</li>
<li>🖋️ Работать с аппаратом Дарсонваль</li>
<li>🔬 Проводить УЗ-процедуры и микротоковую терапию</li>
<li>📋 Получить диплом о квалификации косметолога</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 700 ₽</span> <span class="rating-count"><del>11 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> - выгодное предложение на данный момент.</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Этика и психология общения с клиентом в косметологии»</strong> в <strong>Перми</strong> — это уникальная возможность для косметологов повысить лояльность клиентов и увеличить свои продажи.</p>
<p>Программа охватывает изучение психотипов клиентов и методы их привлечения, а также правила профессиональной этики.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практическое обучение и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как начинающим специалистам, так и опытным косметологам, стремящимся улучшить свои навыки коммуникации.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Коммуникация, профессиональный имидж косметолога</td>
</tr>
<tr>
<td>📊 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы этики, общение во время процедур</td>
</tr>
<tr>
<td>💼 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование корпоративной этики</td>
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
<li>🗣️ Эффективно общаться с клиентами</li>
<li>🤝 Выстраивать доверительные отношения с клиентами</li>
<li>🔍 Выявлять потребности клиентов</li>
<li>📈 Увеличивать продажи своих услуг</li>
<li>👥 Работать с различными психотипами клиентов</li>
<li>👩‍💼 Повышать свой авторитет среди коллег</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес. на 6 месяцев</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 700 ₽</span> <span class="rating-count"><del>37 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Перми</strong> — идеальный старт для начинающих мастеров в индустрии красоты.</p>
<p>Программа охватывает навыки восковой депиляции и шугаринга, включая скоростные техники.</p>
<p>За <span class="price-highlight">38 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию и начать зарабатывать в кратчайшие сроки.</p>
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
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, первая процедура</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, первая процедура бикини</td>
</tr>
<tr>
<td>🎨 Квалификация</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
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
<li>💼 Проводить депиляцию воском на разных зонах</li>
<li>🍯 Работать с сахарной пастой в различных техниках</li>
<li>🧼 Соблюдать правила гигиены и безопасности на приеме</li>
<li>💬 Консультировать клиента по процедуре и уходу</li>
<li>🎯 Индивидуальный подход к каждому клиенту</li>
<li>📋 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс мужской депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс мужской депиляции</div>
<h2>Курс мужской депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">20 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 200 ₽</span> <span class="rating-count"><del>13 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в любое время.</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991234567">+7 (499) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/kursy-muzhskoy-depilyacii" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/kursy-muzhskoy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс мужской депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс мужской депиляции»</strong> в <strong>Перми</strong> — возможность освоить проверенные техники депиляции для мужчин и привлечь новую клиентскую аудиторию.</p>
<p>Студенты изучат специфику работы с клиентами-мужчинами, основные техники мужской депиляции и постпроцедурный уход.</p>
<p>За <span class="price-highlight">20 академических часов</span> слушатели получают обширную практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам в индустрии, так и практикующим специалистам, желающим расширить свои услуги.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>20</strong> ак. часов</span>
<span><strong>5</strong> уроков</span>
<span><strong>3</strong> процедур</span>
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
<td>🔰 Основы</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Специфика мужской депиляции, подготовка кожи</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Депиляция грудной клетки и подмышек</td>
</tr>
<tr>
<td>🎨 Деликатные зоны</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техника работы с мужским бикини, уход после процедуры</td>
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
<li>🧑‍🤝‍🧑 Работать с клиентами-мужчинами</li>
<li>🪄 Подготавливать кожу к депиляции</li>
<li>✨ Выполнять мужскую депиляцию в различных зонах</li>
<li>🧴 Ухаживать за кожей после депиляции</li>
<li>🔐 Соблюдать технику безопасности и санитарные нормы</li>
<li>📋 Получить диплом специалиста по мужской депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/kursy-muzhskoy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Перми</strong> — отличная возможность для косметологов углубить свои знания и навыки в коррекции гиперпигментации и пилингах.</p>
<p>Программа охватывает техники ферулового массажа и сочетания процедур с учетом сезонности и фототипа кожи.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих специалистов, так и для тех, кто хочет обновить свои знания и повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> процедуры</span>
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
<td>🔰 Гиперпигментация</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Причины, механизмы, диагностика</td>
</tr>
<tr>
<td>📈 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетание пилингов и ретиноидов</td>
</tr>
<tr>
<td>💆 Феруловый массаж</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Техника выполнения процедуры</td>
</tr>
<tr>
<td>🚀 Комплексный подход</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание индивидуальных протоколов коррекции</td>
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
<li>🎯 Подбирать процедуры с учетом сезонности и фототипа кожи</li>
<li>🧰 Комбинировать пилинги, ретиноиды и массаж для стойкого результата</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Привлекать больше клиентов с безопасными и эффективными процедурами</li>
<li>📜 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 900 ₽</span> <span class="rating-count"><del>11 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в привлекательный период</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Перми</strong> — идеальный старт для тех, кто хочет стать мастером депиляции и освоить базовые техники работы с воском.</p>
<p>В программе обучения акцент на индивидуальный подход к каждому клиенту и депиляцию популярных зон.</p>
<p>За <span class="price-highlight">2 ак. часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию и начать работать мастером депиляции.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Основы восковой депиляции, подготовка кожи</td>
</tr>
<tr>
<td>📈 Технологии</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Техника шпательной и бандажной депиляции</td>
</tr>
<tr>
<td>🎯 Практика</td>
<td><span class="price-highlight">4 ч / 4 урока</span></td>
<td>Отработка депиляции бикини, подмышек и голеней</td>
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
<li>🎉 Овладевать техникой восковой депиляции</li>
<li>🔍 Подбирать воск в зависимости от обрабатываемой зоны</li>
<li>👐 Работать с различными зонами депиляции</li>
<li>💬 Общаться эффективно с клиентами</li>
<li>🧴 Ухаживать за кожей после процедуры</li>
<li>📅 Готовиться к работе мастером депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 200 ₽</span> <span class="rating-count"><del>25 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период активных акций</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/upkeep" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Перми</strong> — идеальный старт для всех, кто хочет стать профессиональным косметологом-эстетистом.</p>
<p>Программа охватывает практические техники по уходу за кожей, включая очищение, пилинги и карбокситерапию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практическую работу на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет углубить свои знания и навыки в косметологии.</p>
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
<td><span class="price-highlight">45 ч / 8 уроков</span></td>
<td>Строение кожи, диагностика, очищение</td>
</tr>
<tr>
<td>📈 Углубленный</td>
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>Пилинги, маски, карбокситерапия</td>
</tr>
<tr>
<td>🎨 Практика на клиентах</td>
<td><span class="price-highlight">41 ч / 8 уроков</span></td>
<td>Комплексные программы ухода</td>
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
<li>💆‍♀️ Выполнять чистки и пилинги кожи</li>
<li>🧴 Подбирать уходовую косметику для клиентов</li>
<li>🌟 Разрабатывать комплексные программы ухода</li>
<li>💼 Работать с реальными моделями</li>
<li>🎓 Получать сертификаты и дипломы подтверждающие квалификацию</li>
<li>💰 Начинать карьеру косметолога-эстетиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">95 ак. часов</span> (1-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 300 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">38 700 ₽</span> <span class="rating-count"><del>64 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в ограниченный период акций</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за телом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за телом»</strong> в <strong>Перми</strong> — идеальный старт для начинающих мастеров в индустрии красоты.</p>
<p>Программа охватывает различные техники: массаж, обертывания, пилинги и депиляцию.</p>
<p>За <span class="price-highlight">95 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит не только новичкам, но и тем, кто хочет расширить спектр своих услуг и повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>95</strong> ак. часов</span>
<span><strong>20</strong> уроков</span>
<span><strong>7</strong> процедур</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски, эстетическая косметология</td>
</tr>
<tr>
<td>📈 SPA и ароматерапия</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Пилинг, обертывания, ароматерапия</td>
</tr>
<tr>
<td>🎯 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника депиляции, работа с клиентами</td>
</tr>
<tr>
<td>💆 Массаж</td>
<td><span class="price-highlight">32 ч / 6 уроков</span></td>
<td>Классический массаж, массаж спины и шейно-воротниковой зоны</td>
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
<li>💆 Проводить массажи тела</li>
<li>🌿 Выполнять обертывания и пилинги</li>
<li>🪄 Осуществлять депиляцию с использованием различных техник</li>
<li>📊 Составлять персонализированные программы ухода за телом</li>
<li>💼 Разрабатывать эффективные стратегии для привлечения клиентов</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">123 ак. часа</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 400 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">47 900 ₽</span> <span class="rating-count"><del>79 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> сейчас доступны выгодные условия обучения.</p>
<p><strong>📍 Адрес:</strong> г. Пермь, ул. 25 Октября, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73422482331">+7 (342) 248-23-31</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://perm.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">perm.ecolespb.ru</a></p>
</div>
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Перми</strong> — идеальный старт для начинающих специалистов в beauty-индустрии.</p>
<p>Программа включает в себя обучение популярным косметологическим процедурам, от диагностики кожи до массажей и аппаратной косметологии.</p>
<p>За <span class="price-highlight">123 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию и расширить спектр услуг.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часов</span>
<span><strong>24</strong> уроков</span>
<span><strong>10</strong> процедур</span>
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
<td>Строение кожи; Маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия; УЗ-процедуры</td>
</tr>
<tr>
<td>🎨 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический; Пластический массаж</td>
</tr>
<tr>
<td>🌟 Окрашивание бровей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Архитектура бровей; Окрашивание</td>
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
<li>💆‍♀️ Проводить косметический массаж лица</li>
<li>🧪 Осуществлять чистку и уход за кожей</li>
<li>🎯 Выполнять аппаратные процедуры</li>
<li>🌿 Окрашивать и оформлять брови</li>
<li>📋 Разрабатывать индивидуальные программы ухода</li>
<li>📝 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://perm.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a>
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