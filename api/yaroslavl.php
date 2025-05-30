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
<!-- Главная карточка "Курсы мужской депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы мужской депиляции</div>
<h2>Курсы мужской депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">5 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 300 ₽</span> <span class="rating-count"><del>15 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-muzhskoy-depilyacii" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-muzhskoy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы мужской депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы мужской депиляции»</strong> в <strong>Ярославле</strong> — отличный выбор для тех, кто хочет расширить спектр своих услуг в бьюти-индустрии.</p>
<p>Вы познакомитесь с техниками выполнения мужской депиляции, особенностями работы с клиентами и правилами ухода за кожей после процедуры.</p>
<p>За <span class="price-highlight">5 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих мастеров, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>5</strong> ак. часов</span>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Специфика работы с клиентами, техники выполнения</td>
</tr>
<tr>
<td>📈 Практические навыки</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Построение общения, работа с деликатными зонами</td>
</tr>
<tr>
<td>🔍 Завершение курса</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Постпроцедурный уход, ответы на вопросы</td>
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
<li>💪 Выполнять мужскую депиляцию различных зон</li>
<li>🧴 Обеспечивать уход за кожей после процедуры</li>
<li>💬 Вести диалог с клиентами с учетом их особенностей</li>
<li>🔒 Соблюдать правила техники безопасности</li>
<li>🛠️ Избежать ошибок при проведении процедур</li>
<li>📄 Получить удостоверение о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-muzhskoy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">36 ак. часов</span> (1–2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 100 ₽/мес.</span> (12 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 500 ₽</span> <span class="rating-count"><del>4 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Ярославле</strong> — идеальный выбор для будущих косметологов, желающих освоить основные навыки в дерматологии и анатомии лица.</p>
<p>Программа охватывает анатомическое строение, диагностику проблем кожи и санитарные требования в работе косметолога.</p>
<p>За <span class="price-highlight">36 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и профессионалам, желающим углубить свои знания в области анатомии и дерматологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>3</strong> процедур</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Анатомическое строение лица и тела, кожные заболевания</td>
</tr>
<tr>
<td>🎨 Уход за кожей</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Типы уходов по возрасту, anti-age процедуры</td>
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
<li>🔍 Определять типы кожи и их особенности</li>
<li>🧼 Правильно организовывать рабочее место косметолога</li>
<li>📄 Понимать анатомию лица и шеи</li>
<li>🩺 Осуществлять диагностику и уход за кожей</li>
<li>💡 Овладеть anti-age процедурами</li>
<li>📝 Получить диплом специалиста в области косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих акций и предложений.</p>
<p><strong>📍 Адрес:</strong> Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78001234567">+7 (800) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Основы нутрициологии»</strong> в <strong>Ярославле</strong> — это идеальный старт для тех, кто хочет научиться осознанному питанию и начать карьеру нутрициолога.</p>
<p>Программа охватывает основы диетологии, нутриентный состав продуктов, а также практические навыки работы с клиентами.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию и начать карьеру в этой востребованной сфере.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>15</strong> уроков</span>
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
<td>🔰 Основы диетологии</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Принципы здорового питания, классификация пищевых веществ</td>
</tr>
<tr>
<td>🍏 Витамины и минералы</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Виды витаминов, макро- и микроэлементы</td>
</tr>
<tr>
<td>🍽️ Коррекция рациона</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Методы коррекции веса, здоровые диеты</td>
</tr>
<tr>
<td>🧑‍🍳 Практика на клиентах</td>
<td><span class="price-highlight">13 ч / 3 урока</span></td>
<td>Практическое консультирование клиентов, демонстрация навыков</td>
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
<li>📊 Анализировать пищевые рационы</li>
<li>🍎 Подбирать витамины и минералы для клиентов</li>
<li>🍽️ Консультировать клиентов по вопросам питания и диет</li>
<li>📉 Оценивать потребности в энергии и пищевых веществах</li>
<li>🥗 Разрабатывать индивидуальные планы питания</li>
<li>🤝 Работать с реальными клиентами на практике</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 500 ₽</span> <span class="rating-count"><del>30 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в акции времени</p>
<p><strong>📍 Адрес:</strong> город Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Ярославле</strong> — идеальный вариант для начинающих и опытных специалистов, желающих углубить свои знания в области аппаратной косметологии.</p>
<p>Программа охватывает методы дарсонвализации, микротоков, лазерной биоревитализации и других актуальных на данный момент техник.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит тем, кто стремится начать карьеру в индустрии красоты и хочет иметь возможность сразу же применять полученные знания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часа</span>
<span><strong>11</strong> уроков</span>
<span><strong>3</strong> процедур</span>
<span><strong>3–4</strong> недели</span>
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
<td>Основы аппаратной косметологии, дарсонвализация, микротоки</td>
</tr>
<tr>
<td>📈 УЗ-процедуры</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>УЗ-пилинг, гидропилинг, газожидкостный пилинг</td>
</tr>
<tr>
<td>🎨 Омолаживающие процедуры</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Лазерная биоревитализация, RF-лифтинг</td>
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
<li>📏 Корректировать фигуру с помощью кавитации</li>
<li>⚡ Проводить процедуры лазерной терапии для омоложения кожи</li>
<li>👩‍⚕️ Работать с аппаратами для микротоковой терапии</li>
<li>🎯 Осуществлять дарсонвализацию для улучшения состояния кожи</li>
<li>📋 Получить диплом специалиста в области аппаратной косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 100 ₽</span> <span class="rating-count"><del>13 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих обновлений акций</p>
<p><strong>📍 Адрес:</strong> Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Ярославле</strong> — идеальный выбор для начала карьеры в индустрии красоты, который подойдет как новичкам, так и тем, кто хочет освоить новые навыки.</p>
<p>Программа включает техники восковой депиляции, подбор индивидуального подхода к каждому клиенту. Вы изучите шпательную и бандажную техники.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит для людей, которые хотят активно работать в этой сфере и обеспечивать высокий доход.</p>
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
<td>🔰 Введение в депиляцию</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Стилистика и особенности выбора воска</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Обработка зон подмышек и голеней</td>
</tr>
<tr>
<td>🎨 Депиляция бикини</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Эстетические аспекты и подготовка клиента</td>
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
<li>💵 Овладение техникой восковой депиляции</li>
<li>🌟 Изучение выбора воска в зависимости от зоны</li>
<li>🧑‍🤝‍🧑 Работа с клиентами и выяснение их пожеланий</li>
<li>🧰 Подготовка кожи к депиляции</li>
<li>📝 Проведение процедуры безопасно и эффективно</li>
<li>💼 Формирование базы постоянных клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 700 ₽</span> <span class="rating-count"><del>11 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> временно доступны специальные предложения.</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005005050">+7 (800) 500-50-50</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Ярославле</strong> — идеальный выбор для косметологов, желающих повысить лояльность клиентов и увеличить объем продаж.</p>
<p>Программа включает изучение психотипов клиентов, а также эффективные способы выявления их потребностей.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получат практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для специалистов любого уровня, желающих стать более успешными в своей практике.</p>
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
<td>Коммуникация с клиентом, создание имиджа косметолога</td>
</tr>
<tr>
<td>📖 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы профессиональной этики, общение во время процедуры</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры, формирование успешной команды</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов, типы клиентов косметолога</td>
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
<li>💬 Эффективно общаться с клиентами</li>
<li>🎯 Выявлять потребности клиентов</li>
<li>🤝 Повышать лояльность клиентов</li>
<li>📈 Увеличивать продажи услуг</li>
<li>🏆 Сформировать стабильную базу клиентов</li>
<li>👥 Укреплять авторитет среди коллег</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">45 900 ₽</span> <span class="rating-count"><del>76 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущем периоде.</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Ярославле</strong> — отличный старт для начинающих мастеров в индустрии красоты.</p>
<p>Программа охватывает как косметические, так и аппаратные процедуры, массажи и депиляцию.</p>
<p>За <span class="price-highlight">125 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как новичкам, так и тем, кто хочет улучшить свои навыки и повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>125</strong> ак. часов</span>
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
<td><span class="price-highlight">9 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела</td>
</tr>
<tr>
<td>🧰 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Работа с клиентами, депиляция бикини</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Стандартный, корректирующий, лечебный массаж лица</td>
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
<li>💆‍♂️ Проводить косметические и аппаратные процедуры</li>
<li>🧖‍♀️ Выполнять массажи лица и тело</li>
<li>🌿 Осуществлять безопасную депиляцию</li>
<li>📋 Создавать индивидуальные программы ухода за кожей</li>
<li>💼 Работать на реальных клиентах</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">53 900 ₽</span> <span class="rating-count"><del>89 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение на текущий момент.</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер аппаратной косметологии»</strong> в <strong>Ярославле</strong> — идеальный старт для начинающих и профессионалов в beauty-сфере.</p>
<p>Программа включает изучение популярных аппаратных процедур для улучшения состояния кожи и коррекции фигуры без хирургического вмешательства.</p>
<p>За <span class="price-highlight">91 академический час</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и работающим косметологам, желающим повысить свою квалификацию и расширить клиентскую базу.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>91</strong> ак. часов</span>
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
<td>Строение кожи, уходовые процедуры</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Аппаратный массаж</td>
<td><span class="price-highlight">7 ч / 2 урока</span></td>
<td>Основы массажа, техника LPG</td>
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
<li>💆‍♀️ Выполнять аппаратные процедуры по омоложению</li>
<li>💪 Проведение LPG-массажа для коррекции фигуры</li>
<li>📋 Обеспечивать безопасность при выполнении процедур</li>
<li>🌺 Уметь работать с клиентами и устанавливать доверительные отношения</li>
<li>🌟 Создавать профессиональное портфолио для социальных сетей</li>
<li>📝 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 академических часа</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78001234567">+7 (800) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Ярославле</strong> — обучение для тех, кто хочет глубже понять принципы питания и здорового образа жизни.</p>
<p>Программа включает изучение методов составления рациона для клиентов с разными потребностями.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет тем, кто хочет освоить навыки консультирования по питанию и работать с индивидуальными запросами.</p>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Принципы сбалансированного питания, нутриенты</td>
</tr>
<tr>
<td>📈 Диетология</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Работа с клиентами, индивидуальный подход</td>
</tr>
<tr>
<td>🎓 Практика</td>
<td><span class="price-highlight">0 ч / 0 уроков</span></td>
<td>Работа на реальных клиентах</td>
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
<li>🔍 Выстраивать рацион питания для разных категорий клиентов</li>
<li>📝 Консультировать по вопросам питания и составления диеты</li>
<li>📊 Анализировать данные о здоровье клиентов</li>
<li>💡 Определять физиологические потребности в питательных веществах</li>
<li>📈 Работать с программами питания для спортсменов и беременных женщин</li>
<li>🔗 Диагностировать нарушения пищевого поведения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">25 900 ₽</span> <span class="rating-count"><del>43 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Ярославле</strong> — для начинающих и профессионалов в индустрии красоты, желающих освоить техники восковой депиляции и шугаринга.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и опытным мастерам, желающим расширить свои навыки и базу клиентов.</p>
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
<td>🔰 Шугаринг</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, депиляция бикини</td>
</tr>
<tr>
<td>📈 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Сложности профессии, работа с клиентами</td>
</tr>
<tr>
<td>💼 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Скоростные техники, бразильское бикини</td>
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
<li>💇 Проведение восковой депиляции разных зон</li>
<li>🧴 Работа с сахарной пастой в различных техниках</li>
<li>✋ Индивидуальный подход к клиентам</li>
<li>📊 Соблюдение гигиенических норм на приёме</li>
<li>🌟 Создание портфолио и привлечение клиентов</li>
<li>📋 Подтверждение квалификации дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 300 ₽</span> <span class="rating-count"><del>13 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в период специальных предложений.</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Ярославле</strong> — это отличная возможность повысить квалификацию и освоить новые навыки в сфере красоты.</p>
<p>Вы изучите техники SPA-процедур, правила спа-этикета и научитесь проводить востребованные процедуры для коррекции фигуры и омоложения кожи.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как начинающим, так и опытным специалистам, желающим расширить свои услуги.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span> <span><strong>24</strong> урока</span> <span><strong>23</strong> процедур</span> <span><strong>2-3 месяца</strong></span>
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
<td>🌿 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, использование эфирных масел</td>
</tr>
<tr>
<td>🧖‍♀️ Пилинг тела</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Современные косметические средства, скрабирование</td>
</tr>
<tr>
<td>🌀 Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Технология выполнения обертываний, горячие и холодные обертывания</td>
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
<li>📜 Составлять индивидуальные программы ухода за кожей</li>
<li>🤲 Выполнять обертывания и пилинги тела</li>
<li>🌸 Создавать расслабляющую обстановку с помощью ароматерапии</li>
<li>📈 Привлекать новых клиентов и расширять спектр услуг</li>
<li>🎓 Получить диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">12 900 ₽</span> <span class="rating-count"><del>21 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций с максимальными скидками.</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Ярославле</strong> — идеальный выбор для специалистов, желающих освоить современные техники депиляции.</p>
<p>Программа включает работу с полимерными восками и релевантные навыки для выполнения процедур на любых зонах.</p>
<p>За <span class="price-highlight">16 ак. часов</span> слушатели получают практическую отработку на моделях и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию и расчистить путь к успешной карьере в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>4</strong> процедуры</span>
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
<td>Техники работы с полимерными восками</td>
</tr>
<tr>
<td>📈 Продвинутые техники</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Устранение вросших волосков, работа с клиентами</td>
</tr>
<tr>
<td>🎨 Специальные процедуры</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Некоторые аспекты бразильского бикини</td>
</tr>
<tr>
<td>🌟 Практика</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Практика с реальными клиентами</td>
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
<li>✂️ Совершенствовать процедуры депиляции</li>
<li>🧠 Ремонту и корректировке вросших волосков</li>
<li>👥 Находить индивидуальный подход к каждому клиенту</li>
<li>🚀 Эффективно продвигать свои услуги</li>
<li>🌍 Ориентироваться на тренды в индустрии красоты</li>
<li>💼 Создавать качественное портфолио для привлечения клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат о прохождении курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 100 ₽</span> <span class="rating-count"><del>13 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Ярославле</strong> — идеален для начинающих мастеров и тех, кто хочет освоить популярную технику депиляции.</p>
<p>Мастера обучат вас трем основным техникам работы с сахарной пастой, а также безопасным процедурам по уходу за кожей.</p>
<p>За <span class="price-highlight">1-2 дня</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подойдёт любому желающему начать карьеру в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> отработки на практике</span>
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
<td>🔰 Введение в шугаринг</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Инструменты и материалы, безопасность проведения процедуры</td>
</tr>
<tr>
<td>📈 Техники шугаринга</td>
<td><span class="price-highlight">5 ч / 2 урока</span></td>
<td>Бандажная, мануальная, шпательная техника</td>
</tr>
<tr>
<td>🎨 Депиляция различных зон</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Подмышки, бикини, голени</td>
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
<li>💖 Выполнять сахарную депиляцию на любых участках тела</li>
<li>🤝 Находить индивидуальный подход к каждому клиенту</li>
<li>🛠️ Работать с различными техниками шугаринга</li>
<li>📅 Проводить процедуру безболезненно и эффективно</li>
<li>👩‍🎓 Получать сертификат специалиста после обучения</li>
<li>💼 Устраиваться на работу в салоны красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 990 ₽/мес.</span> (4 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Ярославле</strong> — идеальное решение для косметологов, желающих расширить свои навыки в области коррекции гиперпигментации.</p>
<p>В программе курса рассматриваются современные техники пилинга и ферулового массажа, которые позволят вам добиться стойких результатов в работе с клиентами.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практическую подготовку и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, стремящихся повысить свою квалификацию и привлечь больше клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Причины появления пигментных пятен, диагностика</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур, избежание осложнений</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетание пилингов и ретиноидов, протоколы</td>
</tr>
<tr>
<td>🔧 Исполнение процедур</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техника ферулового массажа, готовые схемы</td>
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
<li>🔗 Комбинировать пилинги, ретиноиды и массаж</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>👥 Привлекать больше клиентов через эффективные процедуры</li>
<li>💼 Создавать свои предложения по домашнему уходу</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (12 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">43 900 ₽</span> <span class="rating-count"><del>73 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение на текущий момент</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Ярославле</strong> — идеален для начинающих и опытных специалистов, желающих повысить квалификацию в индустрии красоты.</p>
<p>Обучение включает изучения популярных техник косметологии, таких как массаж лица, пилинги и оформление бровей.</p>
<p>За <span class="price-highlight">123 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит тем, кто хочет начать карьеру или расширить свои навыки в косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>7</strong> процедур</span>
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
<td>Физиотерапия, УЗ-процедуры</td>
</tr>
<tr>
<td>🎭 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Стандартный, корректирующий массаж</td>
</tr>
<tr>
<td>✍️ Окрашивание бровей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Архитектура бровей, окрашивание</td>
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
<li>💆 Выполнять косметический массаж лица</li>
<li>🎨 Подбирать и наносить маски и пилинги</li>
<li>🖌️ Оформлять и окрашивать брови</li>
<li>💖 Проводить процедуры аппаратной косметологии</li>
<li>📚 Работать с реальными клиентами и строить портфолио</li>
<li>📜 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">94 ак. часа</span> (1-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">37 300 ₽</span> <span class="rating-count"><del>62 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в ограниченные сроки</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за телом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за телом»</strong> в <strong>Ярославле</strong> — идеальный старт для тех, кто хочет стать специалистом в области косметологии.</p>
<p>Программа включает массажи, обертывания, пилинги и депиляцию, с акцентом на практику на реальных клиентах.</p>
<p>За <span class="price-highlight">94 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет повысить квалификацию и расширить спектр услуг.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>94</strong> ак. часов</span>
<span><strong>20</strong> уроков</span>
<span><strong>15</strong> процедур</span>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски, уход за телом</td>
</tr>
<tr>
<td>📈 SPA методы</td>
<td><span class="price-highlight">25 ч / 6 уроков</span></td>
<td>Ароматерапия, пилинг, обертывания</td>
</tr>
<tr>
<td>🎯 Депиляция</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Техники депиляции и работа с клиентами</td>
</tr>
<tr>
<td>💆 Массаж</td>
<td><span class="price-highlight">19 ч / 4 урока</span></td>
<td>Классический массаж, техника выполнения</td>
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
<li>🔧 Выполнять массажи различных техник</li>
<li>💧 Проводить обертывания и процедуры SPA</li>
<li>🧴 Визуально оценивать тип кожи и подбирать уход</li>
<li>📋 Работать с клиентами и составлять индивидуальные программы</li>
<li>✨ Использовать профессиональную косметику</li>
<li>📜 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 800 ₽</span> <span class="rating-count"><del>31 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Ярославль, ул. Лисицына, д. 7</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74852608605">+7 (4852) 608-605</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://yaroslavl.ecolespb.ru/cosmetology-school/upkeep" target="_blank">yaroslavl.ecolespb.ru</a></p>
</div>
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Ярославле</strong> — это идеальный выбор для тех, кто хочет стать косметологом-эстетистом и освоить современные методики ухода за кожей.</p>
<p>Программа включает обучение основным процедурам, таким как чистка, пилинг, маски и карбокситерапия.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто хочет обновить свои знания в данной области.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часа</span>
<span><strong>8</strong> уроков</span>
<span><strong>6</strong> процедур</span>
<span><strong>1.5 месяца</strong></span>
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
<td>Строение кожи, диагностика и уход</td>
</tr>
<tr>
<td>🧼 Уходовые процедуры</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Чистки, пилинги и маски</td>
</tr>
<tr>
<td>💧 Карбокситерапия</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Принципы и техники выполнения</td>
</tr>
<tr>
<td>🧴 Уходовая косметика</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Выбор и применение профессиональной косметики</td>
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
<li>👩‍🎓 Выполнять процедуры очищения и питания кожи</li>
<li>📊 Составлять комплексные программы ухода за кожей</li>
<li>🧪 Разбираться в профессиональной косметике</li>
<li>📝 Работать с клиентами и создавать индивидуальные уходы</li>
<li>🕵️‍♀️ Диагностировать проблемы кожи и предлагать решения</li>
<li>🤝 Общаться с клиентами, учитывая их потребности</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://yaroslavl.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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