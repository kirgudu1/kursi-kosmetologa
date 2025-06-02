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
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс косметологии SPA</div>
<h2>Курс косметологии SPA</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79876543210">+7 (987) 654-32-10</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Ижевске</strong> — идеальный выбор для всех, кто хочет освоить SPA-процедуры и повысить квалификацию в сфере красоты.</p>
<p>Программа включает обертывания, пилинги, ароматерапию и основы спа-этикета.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как новичкам, так и профессионалам для расширения спектра услуг.</p>
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
<td>🔰 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Классификация эфирных масел, создание расслабляющей атмосферы</td>
</tr>
<tr>
<td>📦 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы и применение поверхностного пилинга</td>
</tr>
<tr>
<td>🎁 Обертывания</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
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
<li>💧 Владеть техникой SPA-процедур</li>
<li>🌿 Проводить ароматерапию</li>
<li>✨ Создавать расслабляющую обстановку</li>
<li>🛁 Выполнять пилинги и обертывания</li>
<li>📈 Повышать профессионализм в индустрии красоты</li>
<li>🤝 Привлекать новых клиентов для своей практики</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span> (1 неделя)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение всего года</p>
<p><strong>📍 Адрес:</strong> Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79262233444">+7 (926) 223-34-44</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Ижевске</strong> — идеальный выбор для косметологов, желающих улучшить навыки общения с клиентами и увеличить свою клиентскую базу.</p>
<p>Программа включает изучение психотипов клиентов, методы выявления их потребностей и техники улучшения качества обслуживания.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получат практические навыки общения и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подойдёт как начинающим, так и опытным косметологам, желающим повысить свою квалификацию и авторитет среди коллег.</p>
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Коммуникация с клиентом, создание профессионального имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы профессиональной этики, работа с мнением клиента</td>
</tr>
<tr>
<td>📞 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование корпоративной культуры, эффективное взаимодействие в команде</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов, первичная консультация</td>
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
<li>💬 Выстраивать гармоничные взаимоотношения с клиентами</li>
<li>🎯 Выявлять потребности клиентов в косметологии</li>
<li>🌟 Превращать сложных клиентов в лояльных</li>
<li>📈 Повышать свои продажи и прибыль</li>
<li>🤝 Поддерживать корпоративный дух в команде</li>
<li>📋 Увеличивать авторитет среди коллег</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Рассрочка доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 100 ₽</span> <span class="rating-count"><del>11 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период актуальных предложений.</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Ижевске</strong> — идеальный вариант для начинающих мастеров в бьюти-индустрии.</p>
<p>Вы освоите 3 техники работы с сахарной пастой, включая популярные зоны и индивидуальный подход к клиентам.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получат практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>5</strong> уроков</span>
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
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Техника шугаринга, безопасность, инструментарий</td>
</tr>
<tr>
<td>📈 Практика шугаринга</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Отработка на моделях, депиляция различных зон</td>
</tr>
<tr>
<td>🎨 Уход за кожей</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Уход после процедуры, противопоказания</td>
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
<li>💡 Проводить сахарную депиляцию</li>
<li>🔍 Разбираться в инструментарии</li>
<li>✨ Ухаживать за кожей после процедуры</li>
<li>🗣️ Коммуницировать с клиентами</li>
<li>📈 Избегать распространенных ошибок</li>
<li>🏆 Получать сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (4 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Ижевске</strong> — идеальный выбор для тех, кто стремится стать профессионалом в сфере косметологии.</p>
<p>Программа охватывает базовые знания анатомии лица, принципы дерматологии и методы работы с кожей.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет углубить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>40</strong> ак. часов</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Анатомия лица, уход за кожей, anti-age процедуры</td>
</tr>
<tr>
<td>🎨 Практика и кейсы</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Практические работы, создание проектных заданий</td>
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
<li>🔍 Разбирать типы кожи и их особенности</li>
<li>🏥 Организовывать рабочее место косметолога</li>
<li>🧬 Понимать анатомию лица и шеи</li>
<li>🧰 Использовать косметологические инструменты правильно</li>
<li>⏳ Осуществлять уход за кожей по возрастным категориям</li>
<li>⚖️ Применять anti-age процедуры и техники замедления старения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 200 ₽</span> <span class="rating-count"><del>24 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период, когда желаете сэкономить.</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412334567">+7 (341) 233-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Ижевске</strong> — отличный старт для тех, кто хочет развиваться в индустрии красоты.</p>
<p>Программа охватывает техники дарсонвализации, микротоков, лазерной биоревитализации, УЗ-процедур и RF-лифтинга.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Идеальный выбор для тех, кто хочет быстро начать карьеру косметолога.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
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
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">20 ч / 6 уроков</span></td>
<td>Основы дарсонвализации, микротоки</td>
</tr>
<tr>
<td>📈 Процедуры оздоровления и омолаживания</td>
<td><span class="price-highlight">30 ч / 8 уроков</span></td>
<td>Лазерная биоревитализация, УЗ-процедуры</td>
</tr>
<tr>
<td>🎨 Коррекция фигуры</td>
<td><span class="price-highlight">25 ч / 5 уроков</span></td>
<td>RF-лифтинг, кавитация</td>
</tr>
<tr>
<td>🧰 Аппаратные пилинги</td>
<td><span class="price-highlight">25 ч / 5 уроков</span></td>
<td>Газожидкостный и гидропилинг</td>
</tr>
<tr>
<td>✨ Завершение курса и дипломная работа</td>
<td><span class="price-highlight">26 ч / 6 уроков</span></td>
<td>Итоговая аттестация, подготовка дипломного проекта</td>
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
<li>💆 Выполнять аппаратные пилинги</li>
<li>💪 Корректировать фигуру с помощью методов RF-лифтинга</li>
<li>🔬 Проводить лазерную биоревитализацию и микротоки</li>
<li>🧼 Применять УЗ-процедуры для улучшения состояния кожи</li>
<li>📑 Получить диплом, подтверждающий квалификацию</li>
<li>✨ Создавать индивидуальные косметологические программы для клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 100 ₽</span> <span class="rating-count"><del>11 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Ижевске</strong> — отличный старт для всех, кто хочет стать мастером депиляции в сфере красоты.</p>
<p>Программа охватывает техники восковой депиляции, индивидуальный подход к клиентам и правила работы в индустрии.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свои навыки и квалификацию.</p>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техника восковой депиляции и уход за кожей</td>
</tr>
<tr>
<td>📈 Работа с клиентами</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Коммуникация с клиентами и подбор индивидуального подхода</td>
</tr>
<tr>
<td>🎨 Высокие техники</td>
<td><span class="price-highlight">5 ч / 3 урока</span></td>
<td>Депиляция сложных зон: бикини и подмышки</td>
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
<li>🧑‍🎤 Овладевать техникой восковой депиляции</li>
<li>📏 Подбирать воск для разных зон</li>
<li>🧼 Уход за кожей после депиляции</li>
<li>💬 Эффективно общаться с клиентами</li>
<li>💪 Работать с моделями и реальными клиентами</li>
<li>📋 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong>
<span class="price-highlight discount-price">20 900 ₽</span>
<span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span>, что позволяет существенно экономить на обучении.</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Ижевске</strong> — отличный старт для тех, кто хочет вникнуть в азы нутрициологии и усовершенствовать свои навыки в сфере здоровья.</p>
<p>Программа включает изучение принципов здравого питания, работы с витаминами и минералами, а также основы диетологии.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдет как для личного развития, так и для начала карьеры нутрициолога.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>3</strong> процедур</span>
<span><strong>4 недели</strong></span>
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
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Основы анатомии, физиологии, правила здорового питания</td>
</tr>
<tr>
<td>📈 Витамины, минералы и БАДы</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классификация витаминов, применение БАДов</td>
</tr>
<tr>
<td>🎯 Коррекция рациона питания</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Разные виды диет, основы гигиены питания</td>
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
<li>🍎 Понимать состав пищи и принципы здорового питания</li>
<li>💊 Правильно выбирать и сочетать витамины и минералы</li>
<li>🥗 Овладеть методами коррекции рациона питания</li>
<li>📊 Разбираться в пищевых добавках и их роли в рационе</li>
<li>📝 Подготавливать индивидуальные планы питания</li>
<li>📋 Подтверждать квалификацию дипломом академии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом косметолога<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">до 6 000 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">19 300 ₽</span> <span class="rating-count"><del>32 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс.</p>
<p><strong>📍 Адрес:</strong> Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы эстетической косметологии»</strong> в <strong>Ижевске</strong> — отличный старт для тех, кто хочет стать косметологом с нуля.</p>
<p>Программа включает в себя изучение базовых и современных процедур ухода за кожей, таких как чистки и маски.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом косметолога</span>.</p>
<p>Подходит для начинающих и тех, кто хочет развиваться в beauty-индустрии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часа</span>
<span><strong>8</strong> уроков</span>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Строение кожи, диагностика</td>
</tr>
<tr>
<td>📦 Процедуры по уходу</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Чистки, маски, пилинги</td>
</tr>
<tr>
<td>🧪 Специальные техники</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Карбокситерапия, комплексный уход</td>
</tr>
<tr>
<td>📊 Практика</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Работа на моделях</td>
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
<li>🔍 Анализировать состояние кожи клиента</li>
<li>💆 Уметь выполнять чистки и пилинги</li>
<li>🌟 Применять косметические процедуры для улучшения состояния кожи</li>
<li>📋 Составлять индивидуальные программы ухода</li>
<li>🛠️ Работать с профессиональной косметикой</li>
<li>🎓 Получить диплом по окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">39 800 ₽</span> <span class="rating-count"><del>66 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс в ближайшие дни</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер аппаратной косметологии»</strong> в <strong>Ижевске</strong> — идеальный выбор для тех, кто хочет освоить востребованные аппаратные процедуры и кардинально изменить свою жизнь.</p>
<p>Программа охватывает техники коррекции фигуры, омоложения и ухода за кожей.</p>
<p>За <span class="price-highlight">91 академический час</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для действующих специалистов, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>91</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>17</strong> процедур</span>
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
<td>Строение кожи, маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Аппаратный массаж</td>
<td><span class="price-highlight">7 ч / 2 урока</span></td>
<td>LPG, уменьшение объемов</td>
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
<li>🔧 Выполнять аппаратные процедуры коррекции фигуры</li>
<li>🎯 Применять техники LPG-массажа</li>
<li>📋 Осуществлять биоревитализацию и процедуры омоложения</li>
<li>💼 Создавать успешные отношения с клиентами и строить карьеру</li>
<li>📜 Подтверждать свою квалификацию дипломом специалиста</li>
<li>🧑‍⚕️ Работать с медицинскими показаниями и техниками безопасности</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79371112233">+7 (937) 111-22-33</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы интегративной нутрициологии»</strong> в <strong>Ижевске</strong> — это уникальная возможность погрузиться в мир правильного питания и здорового образа жизни.</p>
<p>Вы узнаете, как выстраивать рацион питания, учитывая цели и особенности здоровья каждого клиента.</p>
<p>За <span class="price-highlight">4 ак. часа</span> слушатели получают практику и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто уже работает в сфере нутрициологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>3</strong> урока</span>
<span><strong>2</strong> процедуры</span>
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
<td>🔰 Введение в нутрициологию</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Основы питания, его влияние на здоровье</td>
</tr>
<tr>
<td>📈 Работа с клиентом</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сбор анамнеза, анализ запросов</td>
</tr>
<tr>
<td>🎯 Формирование рациона</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Правила составления индивидуального рациона</td>
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
<li>🍏 Оценивать рацион питания клиента</li>
<li>🏋️ Разбираться в особенностях питания различных групп населения</li>
<li>🧑‍🎓 Консультировать клиентов по вопросам питания</li>
<li>📊 Составлять индивидуальные программы питания</li>
<li>⚖️ Выявлять физиологические потребности в макро- и микронутриентах</li>
<li>💡 Понимать принципы здорового питания для разных возрастных групп</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 950 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">35 700 ₽</span> <span class="rating-count"><del>59 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс раннее.</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Ижевске</strong> — идеальный старт для начинающих специалистов в сфере красоты.</p>
<p>Программа охватывает классические и современные техники косметологии, включая массаж лица, депиляцию и аппаратные процедуры.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих мастеров, так и для опытных специалистов, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>22</strong> процедур</span>
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
<td>Строение кожи, Маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, Уз-процедуры, Коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, Пилинг тела, Обертывания</td>
</tr>
<tr>
<td>💆🏻‍♀️ Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Первая процедура, Депиляция бикини, Работа с клиентами</td>
</tr>
<tr>
<td>👐🏻 Массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника массажа, Корректирование лица, Щипковый массаж</td>
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
<li>💆🏻‍♀️ Проводить классические и аппаратные процедуры по уходу за лицом и телом</li>
<li>👩‍🔬 Выполнять массаж лица и SPA-процедуры</li>
<li>🧖🏻‍♀️ Работать с различными техниками депиляции</li>
<li>💼 Создавать портфолио и работать с реальными клиентами</li>
<li>📋 Получить диплом, подтверждающий квалификацию косметолога-эстетиста</li>
<li>🔥 Повышать качество своих услуг и развивать карьеру в индустрии красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Ижевске</strong> — идеальный выбор для косметологов, желающих углубить свои знания и навыки в коррекции гиперпигментации.</p>
<p>Программа охватывает методы безопасного использования пилингов в любое время года и индивидуальный подход к клиентам.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают опыт практической работы и <span class="price-highlight">диплом</span>.</p>
<p>Курс идеально подходит как для начинающих, так и для опытных профессионалов. Вы научитесь привлекать больше клиентов и повышать их лояльность.</p>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Причины пигментных пятен, типы гиперпигментации</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Сочетание пилингов с ретиноидами</td>
</tr>
<tr>
<td>💆 Выполнение процедуры</td>
<td><span class="price-highlight">3 ак. часа</span></td>
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
<li>💎 Безопасно корректировать гиперпигментацию</li>
<li>🧪 Подбирать процедуры с учетом сезонности</li>
<li>🌱 Комбинировать пилинги и ретиноиды</li>
<li>💆 Проводить феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🌟 Привлекать больше клиентов через эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 недели / 38 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 300 ₽</span> <span class="rating-count"><del>30 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Ижевске</strong> — идеальный выбор для начинающих и опытных мастеров, желающих освоить востребованные техники удаления волос.</p>
<p>Программа включает восковую депиляцию и шугаринг, а также скоростные техники для работы с разными типами волос.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто хочет повысить свою квалификацию и увеличить клиентскую базу.</p>
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
<td>Техника шугаринга, первая процедура, работа с клиентами</td>
</tr>
<tr>
<td>📈 Развитие</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, депиляция бикини</td>
</tr>
<tr>
<td>🎓 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Сложности в профессии, скоростные техники, бразильское бикини</td>
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
<li>💻 Осваивать восковую депиляцию и шугаринг</li>
<li>📏 Работать с различными типами волос</li>
<li>💼 Организовывать работу с клиентами</li>
<li>🪄 Применять скоростные техники</li>
<li>📋 Консультировать клиентов по уходу</li>
<li>📜 Подтверждать квалификацию дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 700 ₽</span> <span class="rating-count"><del>16 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> - специальное предложение на обучение.</p>
<p><strong>📍 Адрес:</strong> Ижевск, ул. Красная, д. 133</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73412331213">+7 (341) 233-12-13</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">izhevsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Ижевске</strong> — идеальный выбор для специалистов, желающих повысить свою квалификацию и освоить новые техники.</p>
<p>Курс включает в себя изучение современных техник депиляции, работу с полимерными восками и эффективные подходы к клиентам.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как начинающим, так и опытным специалистам, желающим улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
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
<td><span class="price-highlight">4 ак. ч / 1 урок</span></td>
<td>Общие принципы депиляции, работа с вросшими волосками</td>
</tr>
<tr>
<td>📈 Техники удаления волос</td>
<td><span class="price-highlight">6 ак. ч / 2 урока</span></td>
<td>Скоростные техники, работа с полимерными восками</td>
</tr>
<tr>
<td>🎨 Эстетика и психологические аспекты</td>
<td><span class="price-highlight">6 ак. ч / 1 урок</span></td>
<td>Индивидуальный подход к клиентам, успокоение и подготовка</td>
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
<li>🚀 Ускорять процедуру депиляции</li>
<li>🧠 Работать с самыми сложными клиентами</li>
<li>📈 Продвигать свои услуги</li>
<li>🔍 Исследовать и понимать свою аудиторию</li>
<li>💪 Овладеть скоростными техниками депиляции</li>
<li>💬 Дать психологическую поддержку клиентам</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://izhevsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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