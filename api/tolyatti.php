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
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс эстетической косметологии</div>
<h2>Курс эстетической косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (9 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 500 ₽</span> <span class="rating-count"><del>50 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на текущий период</p>
<p><strong>📍 Адрес:</strong> Тольятти, ул. Автостроителей, д. 41а к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/upkeep" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Тольятти</strong> — идеальное решение для тех, кто хочет начать карьеру в сфере красоты и приобрести навыки косметолога-эстетиста.</p>
<p>Программа включает изучение технологий ухода за кожей, пилингов, масок и очищающих процедур.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для новичков, так и для желающих улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часа</span> <span><strong>12</strong> уроков</span> <span><strong>8</strong> процедур</span> <span><strong>9 месяцев</strong></span>
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
<td><span class="price-highlight">18 ч / 6 уроков</span></td>
<td>Строение кожи, основные техники очищения и питательные ингредиенты</td>
</tr>
<tr>
<td>📈 Пилинги</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Типы пилингов, техника выполнения</td>
</tr>
<tr>
<td>🎨 Маски</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Классификация масок, подбор для различных типов кожи</td>
</tr>
<tr>
<td>🚀 Карбокситерапия</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Методы выполнения и показания к процедуре</td>
</tr>
<tr>
<td>💡 Комплексный уход</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Составление программ ухода, работа с проблемной кожей</td>
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
<li>💆‍♀️ Выполнять процедуры по очищению и питанию кожи</li>
<li>⚙️ Подбирать косметические продукты в зависимости от типа кожи</li>
<li>🎯 Проходить занятия на моделях с реальными вариантами ухода</li>
<li>📈 Назначать эффективные процедуры для клиентов</li>
<li>🧴 Создавать индивидуальные программы ухода</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 100 ₽</span> <span class="rating-count"><del>25 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период.</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Тольятти</strong> — идеальный выбор для желающих начать карьеру в индустрии красоты или повысить свою квалификацию.</p>
<p>Программа включает изучение методов дарсонвализации, микротоков, лазерной биоревитализации и других популярных процедур.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих и уже работающих косметологов, желающих расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часа</span>
<span><strong>10</strong> уроков</span>
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
<td>🔰 Введение в аппаратную косметологию</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Основы, техника безопасности, оборудование</td>
</tr>
<tr>
<td>📈 Дарсонвализация и микротоковая терапия</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Теория и практика, показания, противопоказания</td>
</tr>
<tr>
<td>🎨 Лазерная биоревитализация и RF-лифтинг</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Технологии, практика на моделях</td>
</tr>
<tr>
<td>🔧 Аппаратные пилинги</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Газожидкостный, гидропилинг, УЗ-пилинг</td>
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
<li>🎯 Выполнять процедуры дарсонвализации и микротоковой терапии</li>
<li>💧 Проводить лазерную биоревитализацию и RF-лифтинг</li>
<li>🧖‍♀️ Использовать аппаратные методы пилинга</li>
<li>💼 Работать с реальными клиентами на практике</li>
<li>📝 Получить диплом в области аппаратной косметологии</li>
<li>📈 Начать карьеру с доходом до 70 000 рублей в месяц</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">32 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 500 ₽</span> <span class="rating-count"><del>4 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> доступно для новых студентов.</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а, к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Тольятти</strong> — идеальное решение для тех, кто хочет подробно изучить анатомию лица и получить базовые навыки дерматологии.</p>
<p>Программа включает теоретические и практические занятия, а также работу с реальными клиентами.</p>
<p>За <span class="price-highlight">32 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для начинающих, так и для профессионалов, желающих обновить знания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>32</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
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
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Строение кожи, диагностика, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Анатомическое строение, кожные заболевания, anti-age процедуры</td>
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
<li>🎓 Организовывать рабочее место косметолога</li>
<li>🔍 Разбираться в типах кожи</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>🛠️ Принимать санитарные меры в работе</li>
<li>🧖‍♀️ Работать с клиентами на практике</li>
<li>📝 Получать диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">10 ак. часов</span> (по индивидуальному расписанию)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">17 600 ₽</span> <span class="rating-count"><del>29 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Тольятти</strong> — отличный выбор для тех, кто хочет расширить свои возможности в сфере красоты.</p>
<p>Программа охватывает техники спа-процедур, ароматерапии, обертывания и пилинги.</p>
<p>За <span class="price-highlight">10 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как для начинающих, так и для профессионалов, желающих улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>10</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Введение в косметологию, спа-этикет</td>
</tr>
<tr>
<td>📈 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Классификация масел, применение</td>
</tr>
<tr>
<td>🎨 Обертывания и пилинги</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Технология выполнения, показания и противопоказания</td>
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
<li>💆 Проводить SPA-процедуры</li>
<li>🧖 Владеть техникой обертываний</li>
<li>🌿 Использовать ароматерапию для расслабления</li>
<li>🌈 Составлять индивидуальные программы по уходу</li>
<li>📋 Подтверждать квалификацию сертификатом</li>
<li>🛠️ Расширять спектр услуг в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip">Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 500 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">58 000 ₽</span> <span class="rating-count"><del>96 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период.</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а, к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер аппаратной косметологии»</strong> в <strong>Тольятти</strong> — идеальный выбор для тех, кто хочет освоить популярные аппаратные процедуры и начать карьеру в индустрии красоты.</p>
<p>Вы научитесь выполнять LPG-массаж, биоревитализацию и другие современные процедуры для коррекции фигуры и омоложения.</p>
<p>За <span class="price-highlight">94 ак. часа</span> слушатели получают практическое обучение на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для опытных специалистов, желающих расширить свои навыки и клиентскую базу.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>94</strong> ак. часов</span>
<span><strong>22</strong> урока</span>
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
<td><span class="price-highlight">42 ч / 12 уроков</span></td>
<td>Строение кожи, маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Аппаратный массаж</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Методики LPG, моделирующий массаж лица</td>
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
<li>💼 Проводить аппаратные процедуры, такие как LPG-массаж и биоревитализация</li>
<li>🧖‍♀️ Выполнять омолаживающие процедуры для лица и тела</li>
<li>🛠️ Управлять оборудованием для аппаратной косметологии</li>
<li>📈 Применять методы коррекции фигуры</li>
<li>💬 Работать с клиентами и выстраивать доверительные отношения</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 900 ₽</span> <span class="rating-count"><del>16 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение во время акций</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а, к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы шугаринга»</strong> в <strong>Тольятти</strong> — это идеальный старт для тех, кто хочет развиваться в индустрии красоты, предлагая востребованные услуги по депиляции.</p>
<p>Программа включает три техники работы с сахарной пастой и обучение депиляции самых популярных зон.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет улучшить свои навыки и начать карьеру мастера шугаринга.</p>
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
<td><span class="price-highlight">2 ак. часа / 1 урок</span></td>
<td>Правила безопасности, инструменты и материалы.</td>
</tr>
<tr>
<td>📚 Практика безболезненной процедуры</td>
<td><span class="price-highlight">3 ак. часа / 2 урока</span></td>
<td>Комбинирование пасты, уход за кожей.</td>
</tr>
<tr>
<td>🎖 Депиляция бикини</td>
<td><span class="price-highlight">3 ак. часа / 2 урока</span></td>
<td>Классические и сложные техники депиляции.</td>
</tr>
<tr>
<td>📞 Работа с клиентами</td>
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
<td>Коммуникация и решение конфликтов.</td>
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
<li>💪 Проводить сахарную депиляцию на разных зонах</li>
<li>🛠️ Работать с инструментами и материалами мастера</li>
<li>🌟 Обеспечивать уход за кожей после процедуры</li>
<li>💬 Эффективно общаться с клиентами</li>
<li>🧘 Избегать распространенных ошибок</li>
<li>🚀 Стартовать карьеру мастера шугаринга</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы этики и психологии общения с клиентом в косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы этики и психологии общения с клиентом в косметологии</div>
<h2>Курсы этики и психологии общения с клиентом в косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы этики и психологии общения с клиентом в косметологии»</strong> в <strong>Тольятти</strong> — идеальный выбор для косметологов, желающих углубить свои знания в области клиентского общения.</p>
<p>Программа включает изучение психотипов клиентов, техники коммуникации и элементы профессиональной этики.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и опытным специалистам, желающим повысить лояльность клиентов и увеличить свои продажи.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
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
<td>🔰 Коммуникация</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этапы коммуникации с клиентом</td>
</tr>
<tr>
<td>📈 Этика</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Профессиональная этика в косметологии</td>
</tr>
<tr>
<td>🔍 Психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Типы клиентов и их потребности</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Элементы формирования корпоративной культуры</td>
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
<li>🔍 Определять психотипы клиентов</li>
<li>📈 Увеличивать продажи своих услуг</li>
<li>👥 Управлять конфликтными ситуациями</li>
<li>🎓 Формировать стабильную базу клиентов</li>
<li>🏢 Работать в команде и повышать авторитет среди коллег</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 300 ₽</span> <span class="rating-count"><del>17 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Тольятти</strong> — идеальное решение для тех, кто хочет освоить современные техники депиляции и повысить свою квалификацию.</p>
<p>Вы изучите методы работы с полимерными восками, а также способы быстрой и качественной депиляции на различных зонах.</p>
<p>За <span class="price-highlight">16 академических часов</span> вы получите практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как начинающим, так и опытным мастерам, желающим углубить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>Техники депиляции, работа с полимерными восками</td>
</tr>
<tr>
<td>📈 Углублённые техники</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Работа с вросшими волосками и длинными волосами</td>
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
<li>📖 Работать с вросшими волосками</li>
<li>🧘‍♀️ Подбирать индивидуальный подход к клиентам</li>
<li>📈 Продвигать свои услуги</li>
<li>⚙️ Использовать скоростные техники депиляции</li>
<li>💼 Создавать качественное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> Тольятти, ул. Автостроителей, д. 41а к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Тольятти</strong> — великолепный выбор для специалистов, желающих улучшить свои навыки в области косметологии.</p>
<p>Курс включает в себя изучение методов коррекции гиперпигментации с применением пилингов и ретиноидов, а также авторского ферулового массажа.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получат практическое обучение и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, стремящихся повысить свою квалификацию и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> уроков</span>
<span><strong>3</strong> процедур</span>
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
<td>Причины и типы гиперпигментации</td>
</tr>
<tr>
<td>📈 Пилинги и ретиноиды</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Сочетание пилингов и ретиноидов для коррекции</td>
</tr>
<tr>
<td>🎨 Феруловый массаж</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техника выполнения ферулового массажа</td>
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
<li>🧪 Подбирать процедуры с учетом фототипа кожи</li>
<li>🔗 Комбинировать пилинги и ретиноиды</li>
<li>💆‍♀️ Проводить феруловый массаж по авторской методике</li>
<li>📝 Составлять индивидуальные протоколы процедур</li>
<li>💼 Привлекать новых клиентов через эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 200 ₽</span> <span class="rating-count"><del>33 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> без указания конкретных дат.</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а, к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73635550000">+7 (363) 555-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Тольятти</strong> — идеальный старт для тех, кто хочет освоить профессию мастера в индустрии красоты.</p>
<p>Программа включает техники восковой депиляции и шугаринга, позволяя быстро и качественно удалять волосы.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как начинающим, так и тем, кто уже работает в данной сфере и хочет повысить квалификацию.</p>
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
<td>Техника шугаринга</td>
</tr>
<tr>
<td>📈 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Первая процедура, Депиляция бикини</td>
</tr>
<tr>
<td>🎓 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Сложности в профессии, Скоростные техники</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<ul class="skills-list">
<li>🧖 Проведение процедуры депиляции воском на разных зонах</li>
<li>🍯 Работа с сахарной пастой в различных техниках</li>
<li>🌸 Депиляция всех частей тела, включая глубокое бикини</li>
<li>🛡️ Соблюдение правил гигиены и безопасности</li>
<li>🤝 Индивидуальный подход к каждому клиенту</li>
<li>🎓 Подтверждение квалификации дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 200 ₽</span> <span class="rating-count"><del>13 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в процессе максимальных акций</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Тольятти</strong> — это идеальный старт для тех, кто хочет стать мастером депиляции и получить базовые навыки работы с воском.</p>
<p>Обучение охватывает технику восковой депиляции, правила ухода за кожей и подготовки к процедуре.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдёт как для начинающих, так и для тех, кто хочет повысить квалификацию в сфере депиляции.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Теория и практика восковой депиляции</td>
</tr>
<tr>
<td>📈 Уход за кожей</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Правила ухода до и после процедуры</td>
</tr>
<tr>
<td>🎨 Депиляция зон</td>
<td><span class="price-highlight">25 ч / 5 уроков</span></td>
<td>Работа с подмышками, голенями и бикини</td>
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
<li>💼 Выполнять восковую депиляцию</li>
<li>🌟 Подбирать индивидуальный подход к каждому клиенту</li>
<li>📋 Обеспечивать безопасность процедуры</li>
<li>🧴 Проводить уход за кожей после депиляции</li>
<li>🗣️ Эффективно общаться с клиентами</li>
<li>🚀 Стартовать карьеру эталонного мастера депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 700 ₽/мес</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">59 500 ₽</span> <span class="rating-count"><del>99 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при специальном предложении</p>
<p><strong>📍 Адрес:</strong> г. Тольятти, ул. Автостроителей, д. 41а, к. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78482650043">+7 (8482) 65-00-43</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">tolyatti.ecolespb.ru</a></p>
</div>
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Тольятти</strong> — это отличная возможность для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Программа охватывает профессиональное выполнение косметических и аппаратных процедур, массаж лица, депиляцию и многое другое.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит как для начинающих, так и для тех, кто хочет повысить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>28</strong> уроков</span>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">42 ч / 12 уроков</span></td>
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
<td>🪄 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, Работа с клиентами</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический массаж, Пластический массаж</td>
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
<li>📋 Профессионально выполнять косметические и аппаратные процедуры</li>
<li>💆‍♀️ Проведение массажей лица</li>
<li>🌿 Выполнение депиляции</li>
<li>💖 Подбор косметических масок и пилингов</li>
<li>✨ Проведение SPA-процедур</li>
<li>🛠️ Работа с реальными клиентами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tolyatti.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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