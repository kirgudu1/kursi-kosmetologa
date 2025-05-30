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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 500 ₽/мес.</span> (1 месяц)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 200 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">37%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Москва, ул. Новая Басманная, д. 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Москве</strong> — идеальный старт для тех, кто хочет стать профессиональным косметологом.</p>
<p>Программа охватывает анатомию лица и шеи, основы дерматологии, санитарные требования и методы работы с кожей.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для специалистов, желающих обновить знания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>8</strong> процедур</span> <span><strong>1 месяц</strong></span>
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
<td>Строение кожи, диагностика проблем, санитарные требования</td>
</tr>
<tr>
<td>📈 Анатомия лица</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Расположение мышц, старение кожи, anti-age процедуры</td>
</tr>
<tr>
<td>🎨 Уход за кожей</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Типы кожи, коррекция пигментации, возрастные особенности</td>
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
<li>🎯 Организовывать рабочее место косметолога</li>
<li>🧴 Разбираться в типах кожи</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>🔍 Оценивать состояние кожи и проводить диагностику</li>
<li>👩‍⚕️ Применять методы ухода по возрасту</li>
<li>💼 Создавать качественное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">36 ак. часов</span> (1-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 000 ₽</span> <span class="rating-count"><del>50 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Москва, ул. Новая Басманная, д. 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74952260051">+7 (495) 226-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/programm-nutriciolog" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Нутрициолог" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Нутрициолог»</strong> в <strong>Москве</strong> — это идеальное решение для тех, кто хочет освоить профессию нутрициолога и научиться заботиться о правильном питании.</p>
<p>В программе изучаются основы нутрициологии, диагностика питания и индивидуальные рекомендации для клиентов.</p>
<p>За <span class="price-highlight">36 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для личного саморазвития, так и для начала карьеры в сфере здоровья и красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>12</strong> процедур</span>
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
<td>Наука о питании, витамины, минералы, коррекция рациона</td>
</tr>
<tr>
<td>📈 Интегративная нутрициология</td>
<td><span class="price-highlight">12 ч / 6 уроков</span></td>
<td>Причины избыточного веса, работа с клиентами, формирование рациона</td>
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
<li>✨ Осваивать принципы и правила здорового питания</li>
<li>🗣️ Консультировать клиентов по вопросам питания</li>
<li>📋 Корректировать рацион для клиентов с избыточным весом</li>
<li>🍽️ Составлять рацион для беременных, кормящих и спортсменов</li>
<li>🔍 Расчитывать суточные потребности в БЖУ</li>
<li>📈 Планировать рацион на день и неделю</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (3–6 недель)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 400 ₽</span> <span class="rating-count"><del>19 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при наличии акций</p>
<p><strong>📍 Адрес:</strong> г. Москва, ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74950000000">+7 (495) 000-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Москве</strong> — идеальный уровень для специалистов, желающих углубить свои знания в области питания и здоровья.</p>
<p>Программа охватывает основные принципы формирования рациона, работу с разными категориями клиентов и диагностику нарушений пищевого поведения.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию в индустрии здоровья и красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>6</strong> процедур</span>
<span><strong>3–6</strong> недель</span>
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
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Принципы рациона, макро и микроэлементы</td>
</tr>
<tr>
<td>📈 Специфика работы с клиентами</td>
<td><span class="price-highlight">16 ч / 6 уроков</span></td>
<td>Анализ данных клиентов, индивидуальные планы</td>
</tr>
<tr>
<td>🎓 Практическое применение</td>
<td><span class="price-highlight">20 ч / 8 уроков</span></td>
<td>Работа с реальными клиентами, диагностика</td>
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
<li>📄 Формировать рацион питания</li>
<li>🔍 Анализировать физические данные клиентов</li>
<li>🧠 Работать с потребностями и записями клиентов</li>
<li>💪 Консультировать по питанию спортсменов и беременных</li>
<li>🧒 Создавать рационы для детей и пожилых</li>
<li>📊 Разрабатывать программы питания для разных категорий</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 300 ₽</span> <span class="rating-count"><del>23 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при наборе групп</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Москве</strong> — для тех, кто хочет освоить техники ухода за телом и омоложения кожи.</p>
<p>Вы изучите обертывания, SPA-процедуры и получите навыки, востребованные в beauty-индустрии.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, желающих расширить свои горизонты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>10</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
<span><strong>2</strong> процедуры</span>
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
<td>Создание расслабляющей атмосферы, сочетание эфирных масел</td>
</tr>
<tr>
<td>📦 Пилинг</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Методы эксфолиации, профессиональные средства для пилинга</td>
</tr>
<tr>
<td>💆‍♀️ Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Технология выполнения обертываний, показания и противопоказания</td>
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
<li>📚 Проводить обертывания и пилинги тела</li>
<li>🧘 Создавать атмосферу расслабления с помощью ароматерапии</li>
<li>👩‍🎓 Повысить профессионализм и расширить спектр услуг</li>
<li>📈 Привлекать новых клиентов благодаря новым навыкам</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 300 ₽</span> <span class="rating-count"><del>35 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при ограниченном предложении.</p>
<p><strong>📍 Адрес:</strong> г. Москва, ул. Новая Басманная, д. 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74951234567">+7 (495) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс основы нутрициологии»</strong> в <strong>Москве</strong> — идеальный выбор для желающих освоить нутрициологию и начать карьеру в этой сфере.</p>
<p>Программа включает изучение основ здорового питания, витаминов и минералов, а также коррекции рациона.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как для новичков, так и для тех, кто хочет углубить знания в области питания и здоровья.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Принципы здорового питания, состав пищи</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Типы витаминов, потребности организма</td>
</tr>
<tr>
<td>🧑‍🍳 Коррекция рациона</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Способы коррекции веса, диеты</td>
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
<li>🍏 Анализировать состав пищи и разбираться в его питательной ценности</li>
<li>🔬 Выявлять потребности в витаминах и минералах</li>
<li>📊 Корректировать рацион питания в зависимости от целей</li>
<li>🥗 Разрабатывать грамотные диеты для клиентов</li>
<li>💼 Оказывать консультационные услуги в области нутрициологии</li>
<li>📋 Получать сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня (7 ак. часов)</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 800 ₽</span> <span class="rating-count"><del>18 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на курс в сезонное распродажу</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3 (М. Комсомольская площадь)</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Москве</strong> — идеальный выбор для тех, кто хочет быстро освоить профессию мастера депиляции.</p>
<p>Программа включает базовые техники восковой депиляции и индивидуальный подход к клиентам.</p>
<p>За <span class="price-highlight">1-2 дня</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих и тех, кто хочет повысить свою квалификацию в beauty-индустрии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>7</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техника восковой депиляции, подбор воска</td>
</tr>
<tr>
<td>📈 Практическая отработка</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Депиляция зон подмышек, голеней, бикини</td>
</tr>
<tr>
<td>🧑‍🤝‍🧑 Работа с клиентами</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Эффективная коммуникация, уход за кожей</td>
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
<li>💼 Освоите технику восковой депиляции</li>
<li>🌟 Умение подбирать воск в зависимости от зоны</li>
<li>📋 Проведение процедуры с минимальным дискомфортом</li>
<li>🧖‍♀️ Уход за кожей до и после депиляции</li>
<li>👩‍🏫 Эффективное взаимодействие с клиентами</li>
<li>📜 Получение сертификата о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">31 600 ₽</span> <span class="rating-count"><del>52 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> от общей стоимости в специальных предложениях.</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Москве</strong> — это отличная возможность для получения востребованной профессии в сфере красоты.</p>
<p>Программа включает изучение методик, таких как RF-лифтинг, лазерная биоревитализация и аппараты для микротоков.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и тем, кто хочет повысить свою квалификацию и начать карьеру в косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> уроков</span>
<span><strong>23</strong> отработки на практике</span>
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
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Классификация аппаратных методов, техника безопасности</td>
</tr>
<tr>
<td>📈 Процедуры пилинга</td>
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>Газожидкостный, ультразвуковой, гидропилинг</td>
</tr>
<tr>
<td>🎯 Коррекция фигуры</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>RF-лифтинг, кавитация, работа с проблемными зонами</td>
</tr>
<tr>
<td>🌸 Омоложение кожи</td>
<td><span class="price-highlight">26 ч / 4 урока</span></td>
<td>Микротоки, лазерная терапия</td>
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
<li>💆 Выполнять процедуры аппаратного пилинга</li>
<li>🎯 Осуществлять коррекцию фигуры при помощи RF-терапии</li>
<li>✨ Проводить омолаживающие процедуры с использованием микротоков</li>
<li>🌺 Работать с современными косметологическими аппаратами</li>
<li>💼 Создавать качественное портфолио для своей практики</li>
<li>📜 Получить признанный диплом в бьюти-индустрии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">192 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">36 000 ₽</span> <span class="rating-count"><del>60 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> Москва, ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74951234567">+7 (495) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/nurse" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/nurse" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс сестринского дела»</strong> в <strong>Москве</strong> — отличная возможность для тех, кто хочет освоить перспективную профессию в области медицины.</p>
<p>В программе обучения изучаются теоретические и практические аспекты сестринского дела, включая забор анализов и первую доврачебную помощь.</p>
<p>За <span class="price-highlight">192 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию в области медицины.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>192</strong> ак. часа</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
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
<td>🔰 Основы физиологии</td>
<td><span class="price-highlight">50 ч / 10 уроков</span></td>
<td>Строение организма, типовые патологии</td>
</tr>
<tr>
<td>📈 Фармакология и иммунология</td>
<td><span class="price-highlight">52 ч / 10 уроков</span></td>
<td>Лекарственные вещества, способы их применения</td>
</tr>
<tr>
<td>🎭 Психология общения</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Общение с пациентом, поддержка</td>
</tr>
<tr>
<td>🔧 Практика</td>
<td><span class="price-highlight">60 ч / 10 уроков</span></td>
<td>Первая помощь, инъекции</td>
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
<li>🎯 Проводить правильный забор анализов</li>
<li>🩺 Оценивать состояние пациента и его самочувствие</li>
<li>🚑 Оказывать первую доврачебную помощь</li>
<li>💬 Общаться с пациентами и их родственниками</li>
<li>📋 Проводить транспортировку и хранение медицинских материалов</li>
<li>📄 Выдавать диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/nurse" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 600 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">58 800 ₽</span> <span class="rating-count"><del>105 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках акций на обучение</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3, 3-й Павловский пер., д. 14</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер аппаратной косметологии»</strong> в <strong>Москве</strong> — идеальное решение для тех, кто хочет освоить востребованную профессию в beauty-сфере.</p>
<p>Программа включает изучение аппаратных процедур, таких как LPG-массаж и биоревитализация, а также коррекцию фигуры.</p>
<p>За <span class="price-highlight">94 ак. часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, желающих улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>🔰 Эстетическая косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, Маски, Комплексный уход</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, Уз-процедуры, Коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Аппаратный массаж</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>LPG, Упругая кожа, Уменьшение в объемах</td>
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
<li>💆 Выполнять аппаратные процедуры для омоложения</li>
<li>🎯 Осваивать техники коррекции фигуры</li>
<li>🧖 Осваивать LPG-массаж и дезинкрустацию</li>
<li>💼 Проводить биоревитализацию и электрофорез</li>
<li>🔍 Знать техники безопасности при проведении процедур</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 900 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">34 300 ₽</span> <span class="rating-count"><del>57 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в академии</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3 (М. Комсомольская площадь)</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Москва</strong> — отличная возможность стать универсальным мастером в области депиляции.</p>
<p>В программе изучаются техники восковой депиляции и шугаринга, адаптированные под каждого клиента.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию и научиться работать с разными типами волос.</p>
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
<td>Шугаринг, восковая депиляция</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Сложные техники бразильского бикини</td>
</tr>
<tr>
<td>🎨 Практика</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Работа с клиентами, портфолио</td>
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
<li>💡 Проводить процедуры восковой и шугаринг-депиляции</li>
<li>🔍 Индивидуально подходить к каждому клиенту</li>
<li>⚡ Использовать скоростные техники удаления волос</li>
<li>📸 Создавать портфолио и собирать клиентов</li>
<li>✅ Соблюдать правила гигиены и безопасности</li>
<li>📜 Подтвердить свою квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">10 800 ₽</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 800 ₽</span> <span class="rating-count"><del>18 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в ограниченные сроки.</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3 (М. Комсомольская площадь)</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Москве</strong> — идеален для начинающих и тех, кто стремится развить карьеру в beauty-индустрии.</p>
<p>Программа включает три техники работы с сахарной пастой и удаление волос с различных зон.</p>
<p>За <span class="price-highlight">10 800 ₽</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для всех желающих освоить востребованную профессию и обеспечить доход в бьюти-сфере.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>20</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>3</strong> процедуры</span>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техника шугаринга, работы с сахарной пастой</td>
</tr>
<tr>
<td>📈 Удаление волос</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Обработка подмышек, голеней, бикини</td>
</tr>
<tr>
<td>🎨 Уход за кожей</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Характеристики кожи, послеобработки</td>
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
<li>🔧 Работать с различными техниками шугаринга</li>
<li>🛠️ Уход за кожей после процедуры</li>
<li>📊 Коммуницировать с клиентами и находить индивидуальный подход</li>
<li>📅 Организовывать рабочее место и процесс работы</li>
<li>👩‍🎓 Получить диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">17 800 ₽</span> <span class="rating-count"><del>29 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">41%</span> в данный момент доступны специальные предложения.</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Москва</strong> — отличная возможность для косметологов, желающих обновить свои навыки в области депиляции.</p>
<p>Программа охватывает современные техники депиляции и работу с полимерными восками.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат об окончании</span>.</p>
<p>Курс подойдет как начинающим, так и опытным мастерам, желающим повысить свою квалификацию и расширить свои знания.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>📌 Основы депиляции</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Психология клиента, техники общения</td>
</tr>
<tr>
<td>💡 Современные техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Текущие тренды в депиляции, полимерные воски</td>
</tr>
<tr>
<td>🔍 Работа с клиентами</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Индивидуальный подход, работа с сложными волосами</td>
</tr>
<tr>
<td>🧪 Практика на моделях</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Отработка навыков на реальных клиентах</td>
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
<li>💁 Ускорять процедуру депиляции</li>
<li>✋ Работать с вросшими волосками</li>
<li>👩‍🏫 Находить подход к любому клиенту</li>
<li>🧠 Применять эффективные técnicas общения</li>
<li>📈 Продвигать услуги в социальных сетях</li>
<li>💼 Создавать портфолио для привлечения клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 200 ₽</span> <span class="rating-count"><del>12 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период распродаж</p>
<p><strong>📍 Адрес:</strong> Москва, ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74951234567">+7 (495) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Москве</strong> — идеальный выбор для косметологов, стремящихся улучшить навыки коммуникации и повысить удовлетворенность клиентов.</p>
<p>Программа охватывает основные техники взаимодействия, необходимые для выявления потребностей клиентов и формирования доверительных отношений.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">индивидуальный сертификат</span>.</p>
<p>Подходит как для новичков, так и для опытных специалистов, желающих углубить свои знания в психологии и этике общения.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>3</strong> процедуры</span> <span><strong>1</strong> месяц</span>
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
<td>Грамотная коммуникация, создание имиджа косметолога</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Принципы профессиональной этики, взаимодействие с клиентом</td>
</tr>
<tr>
<td>🎨 Корпоративная культура</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры, формирование команды</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
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
<li>💬 Выстраивать доверительные отношения с клиентами</li>
<li>🧩 Выявлять потребности клиентов</li>
<li>🔍 Разбираться в психотипах клиентов</li>
<li>✅ Применять этичные подходы в работе</li>
<li>💼 Повышать лояльность клиентов</li>
<li>🏆 Формировать авторитет в коллективе</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (24 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">86 700 ₽</span> <span class="rating-count"><del>144 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> во время акций</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3, (М. Комсомольская площадь)</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Москве</strong> — это идеальная возможность для начинающих мастеров в индустрии красоты освоить востребованную профессию.</p>
<p>Программа курса включает как теоретические, так и практические занятия по различным косметическим процедурам.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт тем, кто хочет начать карьеру в косметологии и повысить качество своих услуг в индустрии.</p>
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
<td>🎨 SPA-косметология</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг и обертывания</td>
</tr>
<tr>
<td>🔍 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Приемы массирования, принципы пластического массажа</td>
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
<li>💆 Проводить косметические и аппаратные процедуры</li>
<li>🎯 Выполнять массаж лица и депиляцию</li>
<li>🧰 Работать с реальными клиентами</li>
<li>🌸 Проводить spa-процедуры</li>
<li>📋 Подтверждать квалификацию дипломом</li>
<li>📈 Повышать качество услуг в своем бизнесе</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Москва, ул. Новая Басманная, дом 23А, стр. 3</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Москве</strong> — это отличная возможность для косметологов улучшить свои навыки в коррекции гиперпигментации.</p>
<p>Программа охватывает техники пилингов, ретиноидной терапии и ферулового массажа.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подходит для косметологов, стремящихся привлечь больше клиентов и повышая эффективность своей практики.</p>
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
<span><strong>3–5</strong> недель</span>
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
<td>Причины гиперпигментации, методы диагностики</td>
</tr>
<tr>
<td>📈 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Сочетание пилингов и ретиноидов</td>
</tr>
<tr>
<td>🎨 Комплексный подход</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Стратегии ухода и профилактика рецидивов</td>
</tr>
<tr>
<td>🧑‍🏫 Выполнение процедуры</td>
<td><span class="price-highlight">2 ак. часа</span></td>
<td>Пошаговая техника ферулового массажа</td>
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
<li>🎯 Подбирать процедуры с учетом фототипа кожи</li>
<li>🌟 Комбинировать пилинги и ретиноиды для стойкого результата</li>
<li>👐 Проводить феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>📈 Привлекать больше клиентов через эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом косметолога<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">26 800 ₽</span> <span class="rating-count"><del>44 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период распродаж</p>
<p><strong>📍 Адрес:</strong> ул. Новая Басманная, дом 23А, стр. 3, (М. Комсомольская площадь)</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991104108">+7 (499) 110-41-08</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://moscow.ecolespb.ru/cosmetology-school/upkeep" target="_blank">moscow.ecolespb.ru</a></p>
</div>
<a href="https://moscow.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Москве</strong> — это идеальный старт для тех, кто хочет стать косметологом-эстетистом и научиться проводить комплексные процедуры.</p>
<p>Вы изучите основные техники ухода за кожей лица и тела, включая чистки, пилинги и карбокситерапию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом косметолога</span>.</p>
<p>Курс идеально подходит для новичков и тех, кто хочет повысить свою квалификацию в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span> <span><strong>24</strong> урока</span> <span><strong>10</strong> процедур</span> <span><strong>2–3</strong> месяца</span>
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
<td>Строение кожи, основные процедуры по уходу</td>
</tr>
<tr>
<td>📈 Пилинги</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Виды пилингов и их применение</td>
</tr>
<tr>
<td>🎨 Карбокситерапия</td>
<td><span class="price-highlight">14 ч / 3 урока</span></td>
<td>Техника выполнения карбокситерапии</td>
</tr>
<tr>
<td>🌟 Практика</td>
<td><span class="price-highlight">50 ч / 9 уроков</span></td>
<td>Работа на реальных клиентах</td>
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
<li>💆‍♀️ Выполнять процедуры ухода за кожей лица и тела</li>
<li>🌿 Подбирать уходовую косметику</li>
<li>🎯 Проводить пилинги и чистки</li>
<li>🌟 Осваивать карбокситерапию</li>
<li>📋 Составлять индивидуальные программы ухода</li>
<li>💼 Работать с клиентами в салоне</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://moscow.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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