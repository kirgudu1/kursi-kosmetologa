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
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс повышения квалификации по всесезонным пилингам</div>
<h2>Курс повышения квалификации по всесезонным пилингам</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span> (1 день)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный период времени</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Новокузнецке</strong> — это уникальная программа для косметологов, стремящихся расширить свои знания и навыки в области коррекции гиперпигментации.</p>
<p>Программа включает изучение эффективных технологий пилинга, работы с ретиноидами и феруловым массажем.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит как для начинающих, так и для опытных косметологов, желающих повысить свою квалификацию и привлечь больше клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> процедуры</span>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Причины и механизмы гиперпигментации</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">2 ч</span></td>
<td>Сочетание пилингов и ретиноидов</td>
</tr>
<tr>
<td>🔧 Выполнение процедуры</td>
<td><span class="price-highlight">2 ч</span></td>
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
<li>📅 Подбирать процедуры с учетом сезонности</li>
<li>🧰 Комбинировать пилинги и ретиноиды</li>
<li>💆 Проводить феруловый массаж по авторской методике</li>
<li>📊 Составлять индивидуальные протоколы коррекции</li>
<li>👥 Привлекать больше клиентов с эффективными процедурами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 200 ₽</span> <span class="rating-count"><del>17 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Новокузнецке</strong> — отличный выбор для начинающих, желающих получить востребованную профессию в beauty-индустрии.</p>
<p>Вы изучите базовые техники восковой депиляции, подберёте индивидуальный подход к клиентам и отработаете навыки на реальных моделях.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный выбор для старта карьеры и общей квалификации в области косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>7</strong> уроков</span>
<span><strong>2</strong> процедур</span>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Процедура, безопасность, инструменты</td>
</tr>
<tr>
<td>📈 Техники депиляции</td>
<td><span class="price-highlight">4 ч / 3 урока</span></td>
<td>Восковая и бандажная техники</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">4 ч / 3 урока</span></td>
<td>Депиляция зон: подмышки, голени, бикини</td>
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
<li>✨ Овладевать восковой депиляцией</li>
<li>💡 Подбирать индивидуальные техники для клиентов</li>
<li>👥 Эффективно общаться с клиентами</li>
<li>🧴 Уход за кожей до и после процедуры</li>
<li>🔍 Избежать распространенных ошибок в работе</li>
<li>📅 Быстро стартовать карьеру мастера депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 000 ₽</span> <span class="rating-count"><del>35 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение по специальной акции</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73912345678">+7 (391) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Новокузнецке</strong> — это идеальный старт для тех, кто хочет стать специалистом в области красоты.</p>
<p>Вы освоите техники восковой депиляции и шугаринга, адаптируясь к потребностям клиентов.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получат практические навыки на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию.</p>
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
<td>Техника шугаринга, первая процедура, работа с клиентами</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, первая процедура, работа с клиентами</td>
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
<!-- Конец блока: Программа обучения -->
<!-- Блок: Чему вы научитесь -->
<div class="sushi-section">
<h3>Чему вы научитесь</h3>
<!-- Навыки -->
<ul class="skills-list">
<li>💼 Проведение восковой депиляции на разных зонах</li>
<li>🍯Работа с сахарной пастой в разных техниках</li>
<li>🧼 Соблюдение правил гигиены и безопасности</li>
<li>📋 Консультирование клиентов по процедуре</li>
<li>🎯 Индивидуальный подход к каждому клиенту</li>
<li>📜 Подтверждение квалификации дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 300 ₽/мес</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">56 700 ₽</span> <span class="rating-count"><del>94 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при условии записи в ближайшие сроки.</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Новокузнецке</strong> — идеальный старт для начинающих специалистов в индустрии красоты.</p>
<p>Программа охватывает обучение аппаратной косметологии, массажу лица и депиляции.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подходит как для новичков, так и для практикующих специалистов, желающих расширить свои знания.</p>
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
<td>Строение кожи, маски, комплексный уход</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🌊 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🧖‍♀️ Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, депиляция бикини</td>
</tr>
<tr>
<td>💆‍♂️ Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, пластический массаж</td>
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
<li>💆‍♀️ Проводить косметические и аппаратные процедуры</li>
<li>✍️ Выполнять массаж лица и депиляцию</li>
<li>🧴 Работать с реальными клиентами</li>
<li>🌟 Оказывать услуги по уходу за лицом и телом</li>
<li>📈 Повышать квалификацию и расширять свои навыки</li>
<li>📝 Получать диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 000 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в указанный период</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Новокузнецке</strong> — это отличная возможность для специалистов, желающих улучшить свои навыки и освоить современные техники депиляции.</p>
<p>Курс охватывает работу с полимерными восками, методы быстрого и чистого удаления волос на различных зонах</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практическое обучение и <span class="price-highlight">сертификат</span>.</p>
<p>Курс отлично подойдет как начинающим, так и тем, кто хочет повысить свою квалификацию в бьюти-индустрии.</p>
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
<td>🔰 Основы</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Техники работы с полимерными восками</td>
</tr>
<tr>
<td>📈 Проширенные техники</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Скоростные методы удаления волос</td>
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
<li>📏 Ускорять процедуру депиляции</li>
<li>🧠 Работать с вросшими волосками</li>
<li>👥 Индивидуально подходить к клиентам</li>
<li>📈 Ориентироваться на тренды в индустрии</li>
<li>📢 Продвигать свои услуги</li>
<li>📝 Создавать портфолио своих работ</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 400 ₽</span> <span class="rating-count"><del>25 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Новокузнецке</strong> — отличный старт для тех, кто хочет стать профессионалом в индустрии красоты и освоить аппаратные методики.</p>
<p>Программа включает такие процедуры, как дарсонвализация, микротоки и RF-лифтинг, что обеспечит вам актуальные навыки на рынке.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет расширить свои знания и навыки в области косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>11</strong> уроков</span>
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
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Основы аппаратной косметологии, дарсонвализация</td>
</tr>
<tr>
<td>📈 Микротоки</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Микротоковая терапия, показания и противопоказания</td>
</tr>
<tr>
<td>🎨 RF-лифтинг</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Технология RF-лифтинга и практическое применение</td>
</tr>
<tr>
<td>💧 УЗ-процедуры</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>УЗ-пилинг, аппаратные пилинги</td>
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
<li>💆 Проводить аппаратные процедуры для лица и тела</li>
<li>💧 Осваивать различные техники пилинга</li>
<li>📏 Корректировать фигуру с помощью кавитации</li>
<li>🎯 Выполнять микротоковую терапию для омоложения</li>
<li>🌟 Обеспечивать комплексный уход с использованием технологий</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (1–2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 300 ₽</span> <span class="rating-count"><del>3 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">41%</span> в условиях акций и распродаж</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Новокузнецке</strong> — идеальное обучение для будущих косметологов.</p>
<p>Программа включает основные аспекты анатомии лица и шеи, а также ключевые знания в области дерматологии.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих косметологов, желающих развивать карьеру в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>40</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Анатомия лица, старение кожи, уход по возрасту</td>
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
<li>🔍 Организовывать рабочее место косметолога</li>
<li>🧬 Разбираться в типах кожи</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>💡 Знать санитарные требования и нормы</li>
<li>📘 Применять анти-эйдж процедуры</li>
<li>🗣️ Консультировать клиентов по вопросам ухода</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 700 ₽</span> <span class="rating-count"><del>11 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Этика и психология общения с клиентом в косметологии»</strong> в <strong>Новокузнецке</strong> — отличный выбор для тех, кто хочет углубить свои знания в работе с клиентами.</p>
<p>Программа охватывает основы этики в косметологии и техники эффективного общения с клиентами.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практический опыт и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как новичкам, так и опытным специалистам, желающим повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>4</strong> урока</span>
<span><strong>0</strong> процедур</span>
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
<td>Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Коммуникация, профессиональный имидж</td>
</tr>
<tr>
<td>Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы этики, взаимодействие с клиентом</td>
</tr>
<tr>
<td>Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование культуры в коллективе</td>
</tr>
<tr>
<td>Психология общения</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Типы клиентов, этапы консультации</td>
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
<li>🎯 Выстраивать гармоничные отношения с клиентами</li>
<li>🔍 Выявлять потребности клиентов</li>
<li>🤝 Работать с различными психотипами клиентов</li>
<li>💼 Повышать авторитет среди коллег</li>
<li>👍 Применять принципы профессиональной этики</li>
<li>📈 Увеличивать продажи косметологических услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс косметологии</div>
<h2>Курс косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом косметолога<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">29 200 ₽</span> <span class="rating-count"><del>48 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология»</strong> в <strong>Новокузнецке</strong> — отличный старт для тех, кто хочет работать в индустрии красоты и научиться уходу за кожей.</p>
<p>Программа охватывает диагностику и лечение кожи, а также осуществление популярных косметологических процедур.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом косметолога</span>.</p>
<p>Подходит для начинающих и тех, кто хочет расширить свои знания в области косметологии.</p>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Строение кожи, диагностика</td>
</tr>
<tr>
<td>🧴 Уходовые процедуры</td>
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>Чистка, пилинги, маски</td>
</tr>
<tr>
<td>💉 Инъекционные техники</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Карбокситерапия, инъекции</td>
</tr>
<tr>
<td>🌟 Комплексный подход</td>
<td><span class="price-highlight">26 ч / 4 урока</span></td>
<td>Составление ухода, работа с клиентами</td>
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
<li>🔍 Диагностировать проблемы кожи</li>
<li>✨ Выполнять профессиональные чистки</li>
<li>💧 Подбирать уходовую косметику</li>
<li>🌸 Осваивать инъекционные техники</li>
<li>🗣️ Консультировать клиентов по уходу</li>
<li>📋 Получить диплом и начать карьеру</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">до 4 500 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 700 ₽</span> <span class="rating-count"><del>17 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в данный момент действуют выгодные предложения.</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79990000000">+7 (999) 000-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Новокузнецке</strong> — идеальный выбор для тех, кто хочет развить навыки в области ухода за телом и получить новые знания в косметологии.</p>
<p>Вы изучите техники SPA-процедур, такие как обертывания и ароматерапия, а также обычные и специальные пилинги.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как новичкам, так и косметологам, желающим расширить свои навыки и услуги.</p>
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
<td>🍃 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, использование эфирных масел</td>
</tr>
<tr>
<td>🧴 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Косметика для пилинга, скрабирования и эксфолиации</td>
</tr>
<tr>
<td>🌀 Обертывания</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Технологии выполнения горячих и холодных обертываний</td>
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
<li>🧘 Создавать расслабляющую обстановку с помощью ароматерапии</li>
<li>💼 Составлять индивидуальные программы ухода за кожей тела</li>
<li>🕯️ Проводить обертывания и пилинги тела</li>
<li>🤝 Расширить свой спектр услуг для привлечения новых клиентов</li>
<li>📋 Подтвердить квалификацию дипломом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера по депиляции<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 500 ₽</span> <span class="rating-count"><del>17 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Новокузнецк, ул. Тольятти, д. 5Б</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73843200051">+7 (3843) 20-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">novokuznetsk.ecolespb.ru</a></p>
</div>
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Новокузнецке</strong> — идеальный старт для новичков и профессионалов, желающих расширить свои навыки в сфере красоты.</p>
<p>Обучение охватывает три техники работы с сахарной пастой, а также популярные зоны депиляции и уход за кожей.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера по депиляции</span>.</p>
<p>Курс подходит для желающих начать карьеру мастера шугаринга и уверенно работать с клиентами.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>2</strong> процедур</span>
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
<td>Техника работы с сахарной пастой, правила безопасности</td>
</tr>
<tr>
<td>📈 Депиляция зон</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Удаление волос на подмышках, голенях, бикини</td>
</tr>
<tr>
<td>🎉 Работа с клиентами</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Эффективная коммуникация и разрешение конфликтов</td>
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
<li>💧 Проводить сахарную депиляцию безболезненно</li>
<li>🗒️ Уход за кожей после процедуры</li>
<li>📏 Работа с различными зонами тела</li>
<li>👥 Эффективно общаться с клиентами</li>
<li>⏳ Избегать распространенных ошибок мастеров</li>
<li>📈 Стартовать карьеру мастера шугаринга</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://novokuznetsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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