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
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс интегративной нутрициологии</div>
<h2>Курс интегративной нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (4 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> действует в данный момент.</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79500000000">+7 (950) 000-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Краснодаре</strong> — отличная возможность научиться правильному питанию для клиентов с различными потребностями.</p>
<p>Программа охватывает основы нутрициологии, способы составления индивидуальных рационов и диагностику пищевого поведения.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит как для начинающих нутрициологов, так и для опытных специалистов, желающих обновить знания.</p>
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
<td>🔰 Введение в нутрициологию</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Основы нутрициологии, подходы к питанию</td>
</tr>
<tr>
<td>🏋️‍♂️ Питание для спортсменов</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Рацион для спортсменов</td>
</tr>
<tr>
<td>👶 Питание для детей и беременных</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Потребности беременных и детей, составление рационов</td>
</tr>
<tr>
<td>📊 Диагностика и консультирование</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Анализ данных клиентов, выявление потребностей</td>
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
<li>📋 Выстраивать рацион питания для разных групп клиентов</li>
<li>📈 Анализировать данные о весе, возрасте и физической активности</li>
<li>🔍 Диагностировать нарушения пищевого поведения</li>
<li>📞 Консультировать клиентов по вопросам питания</li>
<li>⚖️ Определять потребности в макро- и микронутриентах</li>
<li>📊 Рассчитывать суточные энергозатраты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 300 ₽</span> <span class="rating-count"><del>3 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> - специальное предложение для новых студентов</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Краснодаре</strong> — идеальный выбор для начинающих косметологов, желающих изучить анатомию лица и основы дерматологии.</p>
<p>Программа включает изучение типов кожи, санитарных норм и анатомического строения.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для новичков, так и для специалистов, желающих углубить свои знания в области косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>2</strong> ак. часа</span> <span><strong>2</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>2</strong> недели</span>
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
<td>🔰 Анкета кожи</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Типы кожи, диагностика, санитарные нормы</td>
</tr>
<tr>
<td>📈 Анатомия лица и шеи</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Строение лица, причины старения кожи</td>
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
<li>✅ Организовывать рабочее место косметолога</li>
<li>👩‍🔬 Разбираться в типах кожи и их характеристиках</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>🔍 Проводить диагностику состояния кожи</li>
<li>🔧 Применять санитарные требования в работе</li>
<li>⏳ Замедлять процессы старения кожи</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 100 ₽</span> <span class="rating-count"><del>10 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период проведения акций</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Краснодаре</strong> — идеальный вариант для тех, кто хочет освоить эффективные техники депиляции и повысить свою квалификацию в индустрии красоты.</p>
<p>На курсе вы научитесь работать с полимерными восками, освоите методы быстрой и чистой депиляции на различных зонах.</p>
<p>За <span class="price-highlight">16 ак. часов</span> вы получите практические навыки и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, стремящихся усовершенствовать свои навыки.</p>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Работа с вросшими и забритыми волосками</td>
</tr>
<tr>
<td>🎨 Эстетика процедуры</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Психология работы с клиентом, взаимодействие</td>
</tr>
<tr>
<td>💼 Самопродвижение</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Способы привлечения клиентов, тренды индустрии</td>
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
<li>💪 Быстрая и качественная депиляция</li>
<li>🔍 Работа с полимерными восками</li>
<li>🧘 Психология клиента и настройка на процедуру</li>
<li>🚀 Продвижение своих услуг в социальных сетях</li>
<li>💼 Индивидуальный подход к каждому клиенту</li>
<li>💡 Тонкости работы с различными типами волос</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 500 ₽</span> <span class="rating-count"><del>12 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> — выгодное предложение для новых студентов</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Краснодаре</strong> — отличная возможность освоить востребованную профессию с нуля.</p>
<p>Вы изучите техники восковой депиляции, подбор средств и особенности работы с различными зонами.</p>
<p>За <span class="price-highlight">1-2 дня</span> студенты получают практику на моделях и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>4</strong> процедуры</span>
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
<td>Основы восковой депиляции</td>
</tr>
<tr>
<td>📈 Техники работы с воском</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Шпательная и бандажная техники</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Депиляция различных зон</td>
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
<li>💇 Овладеть техникой восковой депиляции</li>
<li>🌼 Подбирать воск в зависимости от зоны</li>
<li>🧰 Проводить депиляцию подмышек, голеней и бикини</li>
<li>🗣️ Эффективно общаться с клиентами</li>
<li>✅ Избегать распространенных ошибок</li>
<li>📋 Получить сертификат специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 000 ₽/мес.</span> (на 9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">53 300 ₽</span> <span class="rating-count"><del>88 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в актуальный период.</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Краснодаре</strong> — идеальный выбор для начинающих и практикующих мастеров в индустрии красоты.</p>
<p>Программа включает изучение эстетической и аппаратной косметологии, массажей и депиляции.</p>
<p>За <span class="price-highlight">126 ак. часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет тем, кто хочет начать свою карьеру в косметологии или улучшить свои профессиональные навыки.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>Строение кожи, маски, комплексный уход</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🧖‍♀️ Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆‍♀️ Массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Косметический массаж, техника пластического массажа</td>
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
<li>💆‍♂️ Выполнять аппаратную и эстетическую косметологию</li>
<li>🌈 Проводить массажи и SPA-процедуры</li>
<li>🔍 Проводить депиляцию различных зон</li>
<li>📋 Оформлять качественное портфолио</li>
<li>💰 Начать карьеру в индустрии красоты</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (2–3 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 200 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">19 200 ₽</span> <span class="rating-count"><del>32 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Краснодаре</strong> — отличная возможность для новичков и людей с опытом в индустрии красоты освоить актуальные техники удаления волос и быстро собирать базу клиентов.</p>
<p>В программе рассматриваются классические и ускоренные методы депиляции, включая восковую депиляцию и шугаринг.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных мастеров, желающих повысить свою квалификацию и увеличить доход.</p>
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
<td>Техника шугаринга, работа с клиентами</td>
</tr>
<tr>
<td>📈 Основы</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Восковая депиляция, сложные техники</td>
</tr>
<tr>
<td>🎓 Повышение квалификации</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Скоростные техники, Бразильское бикини</td>
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
<li>📏 Проводить восковую и сахарную депиляцию на разных зонах</li>
<li>🛠️ Осваивать скоростные техники удаления волос</li>
<li>💼 Работать с различными типами клиентов</li>
<li>📋 Соблюдать правила гигиены и безопасности</li>
<li>✍️ Консультировать клиентов по процедурам и домашнему уходу</li>
<li>📜 Получить диплом специалиста, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 100 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 600 ₽</span> <span class="rating-count"><del>31 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при заказе до конца месяца.</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Краснодаре</strong> — отличный выбор для тех, кто хочет начать карьеру в сфере красоты, а также для опытных специалистов, желающих улучшить свои навыки.</p>
<p>Программа охватывает техники дарсонвализации, микротоков, лазерной биоревитализации и многое другое.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный курс для начинающих и тех, кто хочет повысить свой уровень в аппаратной косметологии.</p>
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
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Основные процедуры, оборудование, техники безопасности</td>
</tr>
<tr>
<td>📈 Дарсонваль и микротоки</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Косметология, бытовая техника, лечение кожи</td>
</tr>
<tr>
<td>🎨 Лазерные технологии</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Лазерная биоревитализация, показания, противопоказания</td>
</tr>
<tr>
<td>💆‍♀️ Пилинги</td>
<td><span class="price-highlight">14 ч / 3 урока</span></td>
<td>Гидропилинг, газожидкостный пилинг, аппараты</td>
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
<li>💆‍♀️ Проводить процедуры дарсонвализации и микротоков</li>
<li>🎯 Выполнять цифры пилинги и уходовые процедуры</li>
<li>🧰 Применять лазерные технологии для омоложения</li>
<li>📚 Работать с косметологическими аппаратами</li>
<li>🌟 Корректировать фигуру с помощью RF-лифтинга</li>
<li>✨ Оформлять диплом для дальнейшей карьеры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">Скидка до 40%</span> на обучение в зависимости от времени регистрации.</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79520000000">+7 (952) 000-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Краснодаре</strong> — это идеальное решение для тех, кто хочет овладеть навыками нутрициологии и стать востребованным специалистом.</p>
<p>Программа включает изучение принципов здорового питания, выявления потребностей в витаминах и минералах, а также основы диетологии.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит как для новичков, так и для желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>3</strong> практических занятий</span>
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
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Анатомия пищеварительной системы, принципы здорового питания</td>
</tr>
<tr>
<td>📈 Витамины, минералы и БАДы</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Классификация витаминов, гипервитаминоз</td>
</tr>
<tr>
<td>🍽️ Коррекция рациона питания</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Виды диет, основы гигиены питания</td>
</tr>
<tr>
<td>🔥 Практика на клиентах</td>
<td><span class="price-highlight">36 ч / 5 уроков</span></td>
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
<li>🍏 Понять принципы здорового питания</li>
<li>🧪 Определять потребности в витаминах и минералах</li>
<li>📏 Рассчитывать суточную потребность в калориях</li>
<li>🥗 Подбирать диеты для коррекции веса</li>
<li>📋 Осуществлять практические консультации с клиентами</li>
<li>📝 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 900 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">52 500 ₽</span> <span class="rating-count"><del>87 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках ограниченной акции</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер аппаратной косметологии»</strong> в <strong>Краснодаре</strong> — идеальный выбор для начинающих и опытных специалистов, желающих повысить свои навыки в области аппаратной косметологии.</p>
<p>Программа курса включает в себя изучение техники выполнения таких процедур, как LPG-массаж, биоревитализация и омоложение, что обеспечивает высокую востребованность на рынке.</p>
<p>За <span class="price-highlight">91 ак. час</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для специалистов, желающих расширить свои услуги и клиентскую базу.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски, комплексный уход</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Аппаратный массаж</td>
<td><span class="price-highlight">7 ч / 2 урока</span></td>
<td>Упругость кожи, техники похудения, работа с LPG-методиками</td>
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
<li>💆‍♀️ Выполнять аппаратные процедуры по омоложению</li>
<li>⚖️ Проведение коррекции фигуры</li>
<li>💧 Выполнение биоревитализации</li>
<li>🌟 Применение LPG-массажа</li>
<li>🔬 Соблюдение техники безопасности при процедурах</li>
<li>📋 Подтверждение квалификации дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Краснодаре</strong> — идеальный выбор для косметологов, которые хотят углубить свои знания в области коррекции гиперпигментации.</p>
<p>В программе изучение техник всесезонных пилингов, ретиноидной терапии и авторского ферулового массажа.</p>
<p>За <span class="price-highlight">6 часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих повысить свою квалификацию и привлечь больше клиентов.</p>
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
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Причины появления, диагностика</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетание и протоколы</td>
</tr>
<tr>
<td>💆‍♀️ Выполнение процедуры</td>
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
<li>💡 Безопасно корректировать гиперпигментацию</li>
<li>🔍 Подбирать процедуры с учетом фототипа кожи</li>
<li>🔗 Комбинировать пилинги и ретиноиды</li>
<li>👐 Проводить феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🛡️ Привлекать клиентов через эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Этика и психология общения с клиентом в косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Этика и психология общения с клиентом в косметологии</div>
<h2>Этика и психология общения с клиентом в косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span> (1 неделя)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 800 ₽</span> (первый взнос)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Этика и психология общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Этика и психология общения с клиентом в косметологии»</strong> в <strong>Краснодаре</strong> — идеальный выбор для косметологов, стремящихся повысить лояльность клиентов и свои продажи.</p>
<p>Программа включает изучение психологических аспектов общения, техники выявления потребностей клиента и способы формирования позитивных отношений.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практические навыки и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс будет полезен как начинающим, так и опытным специалистам, желающим повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часов</span>
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
<td>🔰 Основы общения</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этапы грамотной коммуникации, имидж косметолога</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Основы профессиональной этики, понимание мнения клиента</td>
</tr>
<tr>
<td>🎓 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Создание позитивной атмосферы в коллективе</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
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
<li>👥 Выстраивать гармоничные отношения с клиентами</li>
<li>🔍 Правильно выявлять потребности клиентов</li>
<li>🏆 Поднимать свой авторитет среди коллег</li>
<li>💬 Успешно общаться с различными психотипами клиентов</li>
<li>📝 Работать с отзывами клиентов для улучшения сервиса</li>
<li>📈 Увеличивать продажи своих услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">42 200 ₽</span> <span class="rating-count"><del>70 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в настоящий момент</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за телом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за телом»</strong> в <strong>Краснодаре</strong> — это идеальный старт для тех, кто хочет начать карьеру в косметологии, не имея высшего образования.</p>
<p>Программа охватывает техники массажа, обертывания, пилинги и депиляцию.</p>
<p>За <span class="price-highlight">95 ак. часов</span> слушатели получат практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как начинающим мастерам, так и тем, кто хочет расширить свои навыки в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>95</strong> ак. часов</span> <span><strong>20</strong> уроков</span> <span><strong>15</strong> процедур</span> <span><strong>1-3</strong> месяца</span>
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
<td>Строение кожи, маски, комплексный уход</td>
</tr>
<tr>
<td>📈 SPA</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🎯 Депиляция</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Первая процедура, депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆‍♂️ Массаж</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Правила массажа, проведение массажа, массаж спины</td>
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
<li>💪 Проводить массажи различных техник</li>
<li>🌿 Выполнять обертывания и пилинги под задачи клиента</li>
<li>🧖‍♀️ Осваивать различные методы депиляции</li>
<li>📋 Составлять программы по уходу за телом</li>
<li>🌟 Работать с клиентами и убирать страхи при проведении процедур</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1-2 дня)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 500 ₽</span> <span class="rating-count"><del>12 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период актуальных предложений</p>
<p><strong>📍 Адрес:</strong> Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы шугаринга»</strong> в <strong>Краснодаре</strong> — отличный выбор для тех, кто хочет освоить востребованную профессию мастера шугаринга.</p>
<p>Программа охватывает техники и навыки сахарной депиляции, работу с популярными зонами, а также индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдёт как для новичков, так и для тех, кто хочет повысить свою квалификацию и начать зарабатывать сразу после обучения.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> процедур</span>
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
<td>🔰 Введение</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Основы шугаринга, инструменты и материалы</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Отработка на моделях, работа с клиентами</td>
</tr>
<tr>
<td>🎨 Специальные техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Депиляция различных зон, уход за кожей</td>
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
<li>🔍 Работать с различными зонами</li>
<li>👌 Ухаживать за кожей после процедуры</li>
<li>📝 Эффективно общаться с клиентами</li>
<li>👌 Избежать распространённых ошибок</li>
<li>🌟 Начать карьеру мастера шугаринга</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 400 ₽</span> <span class="rating-count"><del>10 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в данный момент.</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Краснодаре</strong> — отличный выбор для тех, кто хочет освоить техники по коррекции фигуры и омоложению кожи.</p>
<p>Программа включает обертывания, пилинги и основы ароматерапии, что позволит вам предоставить клиентам широкий спектр услуг.</p>
<p>За <span class="price-highlight">10 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для новичков, так и для практикующих специалистов, желающих повысить свои квалификацию и уровень сервиса.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>10</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td>Создание расслабляющей атмосферы, классификация масел</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Составы для пилинга, скрабирования и эксфолиации</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
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
<li>💆 Проводить SPA-процедуры</li>
<li>🌿 Использовать ароматерапию в процедурах</li>
<li>🌊 Создавать программы по уходу за кожей тела</li>
<li>👐 Отрабатывать обертывания на реальных клиентах</li>
<li>📈 Повышать свой профессионализм в эстетической косметологии</li>
<li>👩‍🎓 Получить диплома специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">123 ак. часа</span> (2–3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 200 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">55 700 ₽</span> <span class="rating-count"><del>92 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках акции</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Краснодаре</strong> — идеальный старт для тех, кто хочет начать карьеру в сфере косметологии без медицинского образования.</p>
<p>Программа включает в себя популярные косметологические процедуры, от диагностики кожи и очищения до современных техник аппаратной косметологии и массажа лица.</p>
<p>За <span class="price-highlight">123 ак. часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто уже работает в beauty-сфере и хочет поднять свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>7</strong> процедур</span>
<span><strong>2–3</strong> месяца</span>
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
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Косметический массаж, техника пластического массажа</td>
</tr>
<tr>
<td>❤️ Коррекция и окрашивание бровей</td>
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
<li>💆🏻‍♀️ Проводить косметический массаж лица</li>
<li>🌟 Выполнять маски и пилинги</li>
<li>✍️ Оформлять брови и выполнять их окрашивание</li>
<li>🧴 Проводить аппаратные процедуры для кожи</li>
<li>🔎 Подбирать комплексный уход за кожей клиента</li>
<li>📄 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 100 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 500 ₽</span> <span class="rating-count"><del>40 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> в период специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Краснодар, ул. Северная, д. 490</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612035156">+7 (861) 203-51-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/upkeep&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/upkeep" target="_blank">krasnodar.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/upkeep&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Краснодаре</strong> — идеальный старт для тех, кто хочет стать профессиональным косметологом.</p>
<p>Программа охватывает диагностику кожи и выполнение востребованных процедур, таких как карбокситерапия и комплексные уходы.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию в бьюти-индустрии.</p>
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
<td><span class="price-highlight">50 ч / 10 уроков</span></td>
<td>Строение кожи, диагностика, основы ухода</td>
</tr>
<tr>
<td>📈 Процедуры по уходу</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Клинические чистки, пилинги, маски</td>
</tr>
<tr>
<td>🎨 Карбокситерапия</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Карбокситерапия и её применение</td>
</tr>
<tr>
<td>🌟 Комплексный уход</td>
<td><span class="price-highlight">30 ч / 4 урока</span></td>
<td>Индивидуальные программы ухода за кожей</td>
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
<li>💆 Выполнять процедуры очищения и питания кожи</li>
<li>📋 Разрабатывать комплексные уходы для разных типов кожи</li>
<li>💡 Знать о профессиональной косметике и её применении</li>
<li>🔬 Диагностировать кожные проблемы и предлагать решения</li>
<li>✅ Работать с реальными клиентами под руководством наставника</li>
<li>🌐 Составлять индивидуальные программы ухода</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://krasnodar.ecolespb.ru/cosmetology-school/upkeep&sub1=https://krasnodar.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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