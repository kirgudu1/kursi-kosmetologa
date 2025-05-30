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
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс шугаринга</div>
<h2>Курс шугаринга</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 700 ₽</span> <span class="rating-count"><del>14 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при оплате сроком до окончания акции</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Нижнем Новгороде</strong> — идеальный старт для всех, кто хочет освоить искусство шугаринга.</p>
<p>Программа охватывает три техники работы с сахарной пастой, а также работу с популярными зонами на профессиональной косметике.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию в области депиляции.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Основы техники шугаринга, правила безопасности</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Проведение процедуры на клиентах, уход за кожей</td>
</tr>
<tr>
<td>🎓 Работа с клиентами</td>
<td><span class="price-highlight">5 ч / 3 урока</span></td>
<td>Эффективная коммуникация, решение конфликтных ситуаций</td>
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
<li>💪 Выполнять сахарную депиляцию</li>
<li>🤝 Работать с индивидуальным подходом к каждому клиенту</li>
<li>🧑‍🏫 Избегать шаблонных ошибок в процессе работы</li>
<li>👩‍🎓 Овладеть основными инструментами и технологиями шугаринга</li>
<li>🌿 Ухаживать за кожей после процедуры</li>
<li>🔍 Проводить депиляцию в популярных зонах</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 000 ₽</span> <span class="rating-count"><del>23 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций и предложений</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Нижнем Новгороде</strong> — идеальный выбор для косметологов, стремящихся повысить свою квалификацию и освоить современные техники депиляции.</p>
<p>Программа включает в себя обучение работе с полимерными восками и особенностям работы с различными типами волос.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для уже работающих мастеров, которые хотят улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>8</strong> уроков</span> <span><strong>4</strong> процедур</span> <span><strong>2 дня</strong></span>
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
<td>🔰 Введение</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Основы депиляции, подготовка клиента</td>
</tr>
<tr>
<td>📈 Работы с воском</td>
<td><span class="price-highlight">6 ч / 3 урока</span></td>
<td>Техники аппликации полимерных восков</td>
</tr>
<tr>
<td>🎨 Устранение вросших волос</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Методы удаления и профилактика</td>
</tr>
<tr>
<td>🌟 Продвижение услуг</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Методы нахождения клиентов, тренды</td>
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
<li>✨ Быстро выполнять процедуры депиляции</li>
<li>💡 Работать с полимерными восками</li>
<li>🧠 Устранять вросшие волоски</li>
<li>🤝 Находить индивидуальный подход к клиентам</li>
<li>🚀 Продвигать свои услуги на рынке</li>
<li>📈 Ориентироваться на тренды индустрии красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (4 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 500 ₽/мес.</span> (1 месяц)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 200 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">37%</span> в рамках текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Нижнем Новгороде</strong> — это фундаментальное обучение для будущих косметологов, охватывающее анатомию и основы дерматологии.</p>
<p>Слушатели изучат типы кожи, санитарные нормы и методы работы в косметологическом кабинете.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подходит для начинающих и тех, кто хочет углубить свои знания в cosmetology.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>40</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Анатомия лица, заболевания кожи, анти-эйдж процедуры</td>
</tr>
<tr>
<td>🎓 Практические занятия</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Работа с клиентами, санитарные процедуры</td>
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
<li>👩‍🎓 Организовывать рабочее место косметолога</li>
<li>🔍 Разбираться в типах кожи</li>
<li>🖼️ Понимать анатомию лица и шеи</li>
<li>🎛️ Применять основы дерматологии на практике</li>
<li>🌟 Успешно проводить анти-эйдж процедуры</li>
<li>💼 Создавать личное портфолио косметолога</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 академических часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в самые выгодные периоды.</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Нижнем Новгороде</strong> — идеален для косметологов, стремящихся улучшить свои навыки в работе с гиперпигментацией.</p>
<p>Программа охватывает феруловый массаж, комбинирование пилингов и домашний уход для закрепления результатов.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практическое руководство и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для новичков, так и для профессионалов, желающих повысить свою квалификацию.</p>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ак. час / 1 урок</span></td>
<td>Причины и механизмы гиперпигментации, диагностика</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ак. час / 1 урок</span></td>
<td>Алгоритмы подбора процедур, минимизация рисков</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак. час / 1 урок</span></td>
<td>Сочетание пилингов и ретиноидов, протоколы</td>
</tr>
<tr>
<td>💆 Выполнение процедуры</td>
<td><span class="price-highlight">2 ак. часа / 1 урок</span></td>
<td>Техника ферулового массажа, процедуры ухода</td>
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
<li>Безопасно корректировать гиперпигментацию</li>
<li>Составлять индивидуальные протоколы коррекции</li>
<li>Проводить феруловый массаж по авторской методике</li>
<li>Подбирать домашний уход для закрепления результатов</li>
<li>Привлекать больше клиентов с помощью эффективных процедур</li>
<li>Комбинировать пилинги и ретиноиды для стойкого результата</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">25 000 ₽</span> <span class="rating-count"><del>41 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в лимитированный период</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Нижнем Новгороде</strong> — отличный выбор для тех, кто хочет стать экспертом в области депиляции.</p>
<p>Вы изучите восковую депиляцию и шугаринг, овладеете скоростными техниками и сможете адаптировать процедуру под каждого клиента.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как начинающим мастерам, так и тем, кто уже работает в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>Техника шугаринга, первая процедура обработки бикини</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Сложности в профессии, бразильское бикини, полимерные воски</td>
</tr>
<tr>
<td>🎓 Практика</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Отработка на реальных клиентах, депиляция лицевой зоны</td>
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
<li>💪 Проводить восковую депиляцию на различных участках тела</li>
<li>🍬 Работать со сложными волосами с использованием шугаринга</li>
<li>🛠️ Применять скоростные техники депиляции</li>
<li>👥 Индивидуально подходить к каждому клиенту</li>
<li>📋 Консультировать клиентов по уходу за кожей</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">До 6 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на курс в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78312345678">+7 (831) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы интегративной нутрициологии»</strong> в <strong>Нижнем Новгороде</strong> — отличный выбор для тех, кто хочет глубже понять вопросы питания и здоровья.</p>
<p>Вы изучите принципы составления рациона для различных категорий клиентов, навыки консультации и подходы к анализу пищевого поведения.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как начинающим, так и профессионалам, желающим расширить свои знания в области нутрициологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>16</strong> процедур</span>
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
<td>🔰 Вводный курс</td>
<td><span class="price-highlight">12 ч / 6 уроков</span></td>
<td>Основы нутрициологии, сотрудники и клиент, этика взаимодействия</td>
</tr>
<tr>
<td>📈 Питание на здоровье</td>
<td><span class="price-highlight">10 ч / 5 уроков</span></td>
<td>Питание для беременных, детей, пожилых людей и спортсменов</td>
</tr>
<tr>
<td>🎯 Работа с клиентами</td>
<td><span class="price-highlight">16 ч / 7 уроков</span></td>
<td>Консультирование, анализ состояния и сбор анамнеза</td>
</tr>
<tr>
<td>🎓 Финальный проект</td>
<td><span class="price-highlight">10 ч / 5 уроков</span></td>
<td>Подготовка и представление дипломной работы</td>
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
<li>Разрабатывать индивидуальные рационы питания</li>
<li>Консультировать клиентов по принципам здорового питания</li>
<li>Анализировать данные о здоровье клиентов</li>
<li>Составлять программы для различных групп населения</li>
<li>Помогать в борьбе с избыточным весом и ожирением</li>
<li>Проводить обучения и мастер-классы по питанию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">304 ак. часов</span> (9 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 400 ₽/в мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">56 800 ₽</span> <span class="rating-count"><del>94 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках акций на обучение</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Нижнем Новгороде</strong> — идеальное начало для желающих сделать карьеру в сфере красоты без медицинского образования.</p>
<p>Вы изучите профессиональные техники по уходу за лицом и телом, включая массажи, депиляцию и аппаратные процедуры.</p>
<p>За <span class="price-highlight">304 академических часов</span> слушатели получают активную практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для уже работающих мастеров, желающих повысить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>304</strong> ак. часов</span>
<span><strong>28</strong> уроков</span>
<span><strong>22</strong> процедур</span>
<span><strong>9 месяцев</strong></span>
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
<td>Строение кожи, маски, косметические процедуры</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры</td>
</tr>
<tr>
<td>🎨 Dепиляция</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический и пластический массаж</td>
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
<li>💆‍♀️ Проводить различные процедуры по уходу за кожей</li>
<li>🌿 Выполнять массажи лица и тела</li>
<li>🧖‍♀️ Осуществлять аппаратные процедуры</li>
<li>🕵️‍♀️ Работать с клиентами и проводить консультации</li>
<li>✂️ Выполнять депиляцию с соблюдением техники безопасности</li>
<li>📋 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 100 ₽</span> <span class="rating-count"><del>21 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Нижнем Новгороде</strong> — это идеальный старт для тех, кто хочет стать мастером депиляции.</p>
<p>Программа охватывает базовые техники работы с воском и индивидуальный подход к клиентам.</p>
<p>За <span class="price-highlight">11 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
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
<td>🔰 Введение в депиляцию</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Теория восковой депиляции, правила безопасности</td>
</tr>
<tr>
<td>💼 Практика</td>
<td><span class="price-highlight">7 ч / 1 урок</span></td>
<td>Отработка методов депиляции на моделях</td>
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
<li>💪 Осваивать технику восковой депиляции</li>
<li>🩹 Подбирать воск для различных зон</li>
<li>🔧 Выполнять депиляцию различных зон</li>
<li>🧴 Уход за кожей после процедуры</li>
<li>🤝 Общению с клиентами для получения повторных визитов</li>
<li>📋 Получать сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">9 700 ₽ за 1 день</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 700 ₽</span> <span class="rating-count"><del>16 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметология SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Нижнем Новгороде</strong> — для профессионалов в индустрии красоты, желающих расширить свои навыки и предоставить клиентам новые услуги.</p>
<p>В программе изучаются техники обертывания, пилинги и основы ароматерапии для создания расслабляющей атмосферы.</p>
<p>За <span class="price-highlight">9 700 ₽</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет для тех, кто хочет повысить профессионализм и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>9</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> отработки</span>
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
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
<td>Создание атмосферы, классификация масел</td>
</tr>
<tr>
<td>🧖🏻‍♀️ Пилинг тела</td>
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
<td>Польза пилинга, средства для очищения</td>
</tr>
<tr>
<td>🌿 Обертывания</td>
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
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
<li>💆‍♀️ Владеть техниками SPA-процедур</li>
<li>🕯 Создавать расслабляющую атмосферу</li>
<li>🧴 Проводить профессиональные обертывания</li>
<li>🌟 Выполнять популярные пилинги</li>
<li>🎯 Разрабатывать индивидуальные программы ухода</li>
<li>⭐ Повысить свою квалификацию как специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> на курсы в ограниченный период времени.</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79500000000">+7 (950) 000-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Нижнем Новгороде</strong> — отличный вариант для желающих научиться управлять своим питанием и начать карьеру в области нутрициологии.</p>
<p>Программа охватывает основы правильного питания, витамины и минералы, принципы работы с клиентами.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практическую работу на моделях и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Подходит для начинающих и тех, кто хочет углубить свои знания о питании и здоровье.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>20</strong> процедур</span>
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
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Анатомия пищеварительной системы, принципы здорового питания</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классификация витаминов, гиповитаминоз и гипервитаминоз</td>
</tr>
<tr>
<td>🛠️ Коррекция рациона</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Диеты, детокс и гигиена питания</td>
</tr>
<tr>
<td>📊 Практика с клиентами</td>
<td><span class="price-highlight">36 ч / 6 уроков</span></td>
<td>Работа с реальными клиентами, отработка навыков</td>
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
<li>🍏 Обосновывать потребности в витаминах и минералах</li>
<li>📋 Разрабатывать грамотно сбалансированные рационы</li>
<li>💡 Определять типы пищевой зависимости</li>
<li>📊 Консультировать клиентов по вопросам питания</li>
<li>📝 Подготавливать персонализированные планы питания</li>
<li>🤝 Работать с клиентами для достижения их целей в области здоровья</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">20 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Электронный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 000 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в сезоне актуальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78312400111">+7 (831) 240-01-11</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Нижнем Новгороде</strong> — это отличная возможность для косметологов повысить уровень общения и лояльности клиентов.</p>
<p>Программа охватывает важные темы, такие как имидж косметолога, этика в общении, и корпоративная культура.</p>
<p>За <span class="price-highlight">20 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">электронный сертификат</span>.</p>
<p>Курс подойдёт как начинающим, так и опытным специалистам, желающим улучшить свои навыки взаимодействия с клиентами.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>20</strong> ак. часов</span> <span><strong>5</strong> уроков</span> <span><strong>5</strong> процедур</span> <span><strong>1–3</strong> недели</span>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Коммуникация с клиентами, создание имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Правила общения и этические нормы</td>
</tr>
<tr>
<td>🎓 Корпоративная культура</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Элементы и формирование корпоративной культуры</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Работа с психоэмоциональными проблемами клиентов</td>
</tr>
<tr>
<td>💼 Практика общения</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Первичная консультация, выявление потребностей</td>
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
<li>🔍 Выявлять потребности клиентов</li>
<li>🤝 Создавать доверительные отношения</li>
<li>📈 Увеличивать продажи услуг</li>
<li>🎯 Управлять конфликтами</li>
<li>🌟 Повышать авторитет среди коллег</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">23 800 ₽</span> <span class="rating-count"><del>39 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в определённые периоды.</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Нижнем Новгороде</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты и освоить аппаратные методики ухода за кожей.</p>
<p>Программа охватывает основные техники, такие как дарсонвализация, микротоки, лазерная биоревитализация, УЗ-процедуры и RF-лифтинг.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет углубить свои знания и навыки в аппаратной косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span> <span><strong>24</strong> урока</span> <span><strong>23</strong> процедур</span> <span><strong>2-3</strong> месяца</span>
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
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>Теории и практики о безопасности, работа с аппаратами</td>
</tr>
<tr>
<td>📈 Процедуры омоложения</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>УЗ-процедуры, микротоки, лазерная биоревитализация</td>
</tr>
<tr>
<td>🎨 Аппаратные пилинги</td>
<td><span class="price-highlight">26 ч / 4 урока</span></td>
<td>Гидропилинг, газожидкостный пилинг, УЗ-пилинги</td>
</tr>
<tr>
<td>💪 Коррекция фигуры</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>RF-лифтинг, кавитация, мануальные техники</td>
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
<li>💆 Выполнять аппаратные процедуры по уходу за лицом и телом</li>
<li>🔬 Осуществлять коррекцию фигуры при помощи современных методик</li>
<li>🔧 Управлять косметологическими аппаратами и оборудованием</li>
<li>🌟 Разрабатывать индивидуальные программы по уходу за клиентами</li>
<li>📋 Получать сертификат о завершении курса и диплом мастера красоты</li>
<li>💼 Начинать карьеру косметолога в востребованной профессии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">29 400 ₽</span> <span class="rating-count"><del>49 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> во время текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78312567890">+7 (831) 256-78-90</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-nutriciolog" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Нутрициолог" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Нутрициолог»</strong> в <strong>Нижнем Новгороде</strong> — отличный выбор для тех, кто хочет освоить востребованную профессию и научиться правильно питаться.</p>
<p>Программа охватывает основы нутрициологии, витамины, минералы, а также консультацию клиентов по вопросам питания.</p>
<p>За <span class="price-highlight">36 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для желающих освоить нутрициологию для себя, так и для тех, кто намерен работать в этой сфере.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>3</strong> блока</span>
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
<td>Наука о питании, витамины, минералы, коррекция рациона</td>
</tr>
<tr>
<td>📈 Интегративная нутрициология</td>
<td><span class="price-highlight">12 ч / 6 уроков</span></td>
<td>Причины ожирения, работа с клиентом, формирование рациона</td>
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
<li>🏆 Консультировать клиентов по вопросам питания</li>
<li>📊 Корректировать рацион для клиентов с избыточным весом</li>
<li>🥗 Составлять рацион для разных категорий (беременные, спортсмены)</li>
<li>📅 Планировать рацион на день и неделю</li>
<li>📈 Подсчитывать суточные потребности в БЖУ</li>
<li>📜 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2–3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 100 ₽</span> <span class="rating-count"><del>36 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Нижний Новгород, ул. Новая, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78314206332">+7 (831) 420-63-32</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/upkeep" target="_blank">nizniy-novgorod.ecolespb.ru</a></p>
</div>
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Нижнем Новгороде</strong> — отличный выбор для начинающих и тех, кто хочет стартовать карьеру в косметологии.</p>
<p>На курсе вы освоите диагностику и лечение кожи, а также научитесь выполнять востребованные косметологические процедуры.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практическую подготовку на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс идеально подойдет тем, кто желает начать карьеру косметолога и получать доход сразу после обучения.</p>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Строение кожи, диагностика, уходовые процедуры</td>
</tr>
<tr>
<td>🎨 Процедуры по уходу</td>
<td><span class="price-highlight">30 ч / 8 уроков</span></td>
<td>Чистки, пилинги, карбокситерапия</td>
</tr>
<tr>
<td>💼 Практика на клиентах</td>
<td><span class="price-highlight">76 ч / 11 уроков</span></td>
<td>Работа на моделях, составление индивидуальных программ</td>
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
<li>💆 Выполнять процедуры по очищению и питанию кожи</li>
<li>📋 Создавать комплексные уходовые схемы для клиентов</li>
<li>🧴 Подбирать профессиональную косметику для самостоятельного и салонного ухода</li>
<li>🌱 Понимать типы кожи и специфику уходовых процедур</li>
<li>💼 Работать с проблемной кожей и ее коррекцией</li>
<li>🎓 Получить диплом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://nizniy-novgorod.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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