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
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер по депиляции</div>
<h2>Мастер по депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 недели</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/в мес. (6 месяцев)</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 900 ₽</span> <span class="rating-count"><del>36 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> – специальное предложение на обучение!</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812345678">+7 (381) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Омске</strong> — это идеальный старт для тех, кто хочет стать профессионалом в области красоты.</p>
<p>Программа включает восковую депиляцию и шугаринг, благодаря которым вы освоите важные техники удаления волос.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и действующим специалистам, желающим повысить квалификацию и быстро найти стабильный доход.</p>
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
<td>Техника шугаринга, Депиляция бикини</td>
</tr>
<tr>
<td>📈 Восковая депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, Работа с клиентами</td>
</tr>
<tr>
<td>🎓 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
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
<!-- Навыки -->
<ul class="skills-list">
<li>💼 Проводить депиляцию воском на различных зонах</li>
<li>🍯 Работать с сахарной пастой в разных техниках</li>
<li>🏖️ Депилировать все части тела, включая глубокое бикини</li>
<li>🧼 Соблюдать правила гигиены и безопасности на приеме</li>
<li>📈 Консультировать клиента по процедуре и домашнему уходу</li>
<li>🌷 Индивидуальный подход к каждому клиенту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 600 ₽</span> <span class="rating-count"><del>36 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение сейчас!</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://omsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://omsk.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Омске</strong> — это идеальный выбор для начинающих косметологов, желающих освоить навыки по уходу за кожей.</p>
<p>В программе курса изучаются техники очищения, питания и косметические процедуры для профессионалов.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс поможет освоить востребованную профессию и выйти на рынок труда с хорошими навыками.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
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
<td>🔰 Основы ухода за кожей</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Строение кожи, диагностика кожных проблем</td>
</tr>
<tr>
<td>📈 Практика очищения</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Чистки, пилинги, карбокситерапия</td>
</tr>
<tr>
<td>🎨 Уход за кожей</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Составление комплексных уходов, подбор косметики</td>
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
<li>💆 Выполнять косметические процедуры по уходу за кожей</li>
<li>🧖 Составлять индивидуальные программы ухода</li>
<li>🧴 Работать с профессиональной косметикой</li>
<li>📋 Понимать потребности клиентов по уходу</li>
<li>💡 Овладеть техниками карбокситерапии</li>
<li>🔍 Диагностировать и решать проблемы кожи</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://omsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<h2>Косметолог - эстетист (без мед. образования)</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 400 ₽/мес. на 9 месяцев</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">48 500 ₽</span> <span class="rating-count"><del>80 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> во время акции на обучение</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Омске</strong> — отличный выбор для новичков и профессионалов в beauty-индустрии.</p>
<p>Программа охватывает техники по уходу за лицом и телом, массаж лица, аппаратные процедуры и депиляцию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный курс для начинающих и тех, кто желает расширить квалификацию в сфере косметологии.</p>
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
<td>Строение кожи, Маски, Комплексный уход</td>
</tr>
<tr>
<td>⚙️ Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, Уз-процедуры, Коррекция фигуры</td>
</tr>
<tr>
<td>🏖️ Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, Пилинг тела, Обертывания</td>
</tr>
<tr>
<td>🧖‍♀️ Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, Первая процедура, Депиляция бикини</td>
</tr>
<tr>
<td>💆 Козметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, Пластическая техника, Массирование по жаке</td>
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
<li>💆‍♀️ Проводить механическую и аппаратную чистку кожи</li>
<li>💖 Выполнять восковую депиляцию</li>
<li>🌿 Подбирать маски, пилинги и обертывания под задачи клиента</li>
<li>⏳ Оказывать услуги по популярным косметологическим процедурам</li>
<li>🤝 Генерировать лояльность клиентов</li>
<li>📋 Подтвердить квалификацию дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1–2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 400 ₽</span> <span class="rating-count"><del>14 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> привлекательное предложение для желающих начать карьеру в индустрии красоты.</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Омске</strong> — идеальный старт для тех, кто хочет освоить одну из самых востребованных профессий в beauty-сфере.</p>
<p>Мы обучаем 3 техникам работы с сахарной пастой, предоставляем возможность отработки на реальных моделях, а также выдаём сертификат по окончанию курса.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто стремится улучшить свои навыки и начать успешную карьеру.</p>
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
<td>🔰 Теоретическая подготовка</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Основные техники шугаринга, правила безопасности</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">6 ч / 4 урока</span></td>
<td>Депиляция различных зон, работа с клиентами</td>
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
<li>💁‍♀️ Проводить сахарную депиляцию</li>
<li>🧰 Работать с различными зонами тела</li>
<li>🤝 Создавать индивидуальный подход к клиенту</li>
<li>🛡️ Избегать распространенных ошибок</li>
<li>📈 Стартовать карьеру мастера шугаринга</li>
<li>🎯 Ухаживать за кожей после процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы депиляции</div>
<h2>Курсы депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1-2 дня)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 200 ₽</span> <span class="rating-count"><del>15 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на ограниченный период времени</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы депиляции»</strong> в <strong>Омске</strong> — это идеальный старт для всех желающих стать мастером депиляции.</p>
<p>Программа охватывает базовые техники работы с воском и особенности подбора индивидуального подхода к клиентам.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практические навыки на моделях и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
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
<td>Основы депиляции, выбор воска</td>
</tr>
<tr>
<td>📈 Техники депиляции</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Шпательная и бандажная техники</td>
</tr>
<tr>
<td>🎨 Практика депиляции</td>
<td><span class="price-highlight">5 ч / 3 урока</span></td>
<td>Практическая отработка на моделях</td>
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
<li>💁‍♀️ Овладеть техникой восковой депиляции</li>
<li>💡 Подбирать индивидуальный подход к клиенту</li>
<li>🧴 Правильно ухаживать за кожей после процедуры</li>
<li>🔍 Осваивать сложные зоны депиляции</li>
<li>🤝 Коммуницировать с клиентами для повышения лояльности</li>
<li>📋 Получить сертификат специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://omsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://omsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Омске</strong> — предназначен для косметологов, желающих углубить свои знания в области работы с гиперпигментацией и овладеть новыми методами.</p>
<p>Программа включает техники пилинга, использование ретиноидов и ферулового массажа для достижения стойких результатов.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для новичков, так и для опытных специалистов, желающих расширить свои навыки и количество клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>1–2</strong> недели</span>
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
<td>📈 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Комбинация пилингов и ретиноидиов</td>
</tr>
<tr>
<td>🎉 Выполнение процедуры</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Техника ферулового массажа от подготовки до финала</td>
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
<li>🌟 Безопасно корректировать гиперпигментацию</li>
<li>📅 Подбирать процедуры с учетом фототипа кожи</li>
<li>💆 Уметь проводить феруловый массаж согласно методике ARKADIA</li>
<li>📜 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Привлекать больше клиентов благодаря мгновенным результатам</li>
<li>📝 Создавать домашний уход для закрепления результатов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://omsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 200 ₽</span> <span class="rating-count"><del>15 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в момент действия актуальных акций</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812560050">+7 (381) 256-00-50</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://omsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://omsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс косметологии SPA»</strong> в <strong>Омске</strong> — уникальная возможность для начинающих и опытных специалистов освоить методы коррекции фигуры и омоложения кожи с помощью SPA-процедур.</p>
<p>Программа включает изучение техник ароматерапии, обертываний и пилингов для комплексного ухода.</p>
<p>За <span class="price-highlight">126 академических часов</span> студенты получают практический опыт на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс идеально подходит для косметологов, массажистов и всех, кто хочет расширить свои возможности в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span> <span><strong>24</strong> урока</span> <span><strong>23</strong> отработки практики</span> <span><strong>2-3 месяца</strong></span>
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
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Создание атмосферы расслабления, использование эфирных масел</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 3 урока</span></td>
<td>Поверхностный пилинг, эксфолиация, средства для скрабирования</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">4 ч / 3 урока</span></td>
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
<li>💆 Проводить SPA-процедуры и обертывания</li>
<li>🌺 Владелец техники ароматерапии</li>
<li>🧖 Создавать расслабляющую атмосферу для клиентов</li>
<li>📋 Составлять индивидуальные программы по уходу за кожей</li>
<li>🔍 Повышать профессионализм и расширять спектр услуг</li>
<li>💼 Привлекать новых клиентов и развивать свою практику</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://omsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 700 ₽</span> <span class="rating-count"><del>37 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в ограниченные сроки</p>
<p><strong>📍 Адрес:</strong> Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://omsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://omsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Омске</strong> — идеальный выбор для начинающих и специалистов, желающих расширить свои навыки.</p>
<p>Вы изучите эффективные аппаратные процедуры, такие как дарсонвализация, микротоки, УЗ-процедуры и RF-лифтинг.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит для старта карьеры и увеличения дохода в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td><span class="price-highlight">30 ч / 10 уроков</span></td>
<td>Физиотерапия, работа с аппаратами, безопасность</td>
</tr>
<tr>
<td>📈 Апаратные процедуры</td>
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>УЗ-процедуры, лазерная биоревитализация</td>
</tr>
<tr>
<td>🎨 Коррекция фигуры</td>
<td><span class="price-highlight">30 ч / 5 уроков</span></td>
<td>Кавитация, RF-лифтинг, микротоки</td>
</tr>
<tr>
<td>📚 Пилинги</td>
<td><span class="price-highlight">26 ч / 1 урок</span></td>
<td>Гидропилинг, газожидкостный пилинг</td>
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
<li>💉 Выполнять аппаратные процедуры</li>
<li>🔍 Корректировать фигуру с помощью аппаратных методик</li>
<li>🌟 Проводить омолаживающие и ухаживающие процедуры</li>
<li>🧼 Работать с косметологическими аппаратами</li>
<li>🏆 Вести свою клиентскую базу в сфере косметологии</li>
<li>📜 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://omsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> ул. Масленникова, д. 28, Омск</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812453245">+7 (381) 245-32-45</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://omsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://omsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Омске</strong> — идеальное решение для косметологов, стремящихся повысить лояльность клиентов и увеличить свои продажи.</p>
<p>Программа охватывает ключевые аспекты общения с клиентами, включая выявление потребностей и управление ожиданиями.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику в общении и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих улучшить свои навыки взаимодействия с клиентами.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>6</strong> процедур</span>
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
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Грамотная коммуникация, создание профессионального имиджа</td>
</tr>
<tr>
<td>📜 Этика в косметологии</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Профессиональная этика, взаимодействие с клиентом</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры, работа в команде</td>
</tr>
<tr>
<td>🗣️ Психология общения</td>
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
<li>💬 Выстраивать гармоничные отношения с клиентами</li>
<li>🔍 Выявлять потребности клиентов</li>
<li>📈 Увеличивать продажи услуг</li>
<li>👥 Управлять сложными ситуациями</li>
<li>🏆 Повышать авторитет среди коллег</li>
<li>🤝 Эффективно работать в команде</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://omsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">35 600 ₽</span> <span class="rating-count"><del>59 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период специальных акций</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за телом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за телом»</strong> в <strong>Омске</strong> — это уникальная возможность стать специалистом в косметологии, без необходимости наличия высшего образования.</p>
<p>В программе изучаются массажи, обертывания, пилинги и депиляция, что поможет вам стать востребованным мастером в индустрии красоты.</p>
<p>За <span class="price-highlight">95</span> академических часов слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и практикующим мастерам, стремящимся расширить свои навыки и повысить доход.</p>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, комплексный уход, маски</td>
</tr>
<tr>
<td>📈 SPA Техники</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Ароматерапия, обертывания</td>
</tr>
<tr>
<td>🎉 Депиляция</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Первичная процедура депиляции</td>
</tr>
<tr>
<td>💆‍♂️ Массаж</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Правила массажа, массаж спины, живота, рук</td>
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
<li>💆 Проводить массаж различных частей тела</li>
<li>🎯 Выполнять процедуры по депиляции</li>
<li>🧴 Подбирать маски и пилинги</li>
<li>🌿 Создавать эффективные программы по уходу за телом</li>
<li>📋 Подтверждать квалификацию дипломом</li>
<li>💡 Работать с программами для антицеллюлитного ухода</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (6 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 600 ₽</span> <span class="rating-count"><del>26 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> при действующих акциях.</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812567890">+7 (381) 256-78-90</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Омске</strong> — идеальный выбор для специалистов, стремящихся освоить современные методы депиляции.</p>
<p>Программа включает техники работы с полимерными восками, что позволит научиться быстро и качественно выполнять процедуры.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто хочет повысить свою квалификацию и увеличить доход.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
<span><strong>8</strong> процедур</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Техники удаления волос, работа с полимерными восками</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Психология взаимодействия с клиентами, особенности работы с вросшими волосками</td>
</tr>
<tr>
<td>🎨 Продвинутый</td>
<td><span class="price-highlight">16 ч / 3 урока</span></td>
<td>Скоростные техники депиляции, маркетинг услуг</td>
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
<li>💁‍♀️ Овладевать современными техниками депиляции</li>
<li>💼 Работать с полимерными восками для быстрого удаления волос</li>
<li>🧠 Понимать психологию клиентов и находить к ним подход</li>
<li>📈 Продвигать свои услуги в美容 индустрии</li>
<li>✂️ Устранять вросшие волоски и справляться с трудными случаями</li>
<li>🏆 Создавать эффектное портфолио для привлечения клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://omsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">42 300 ₽</span> <span class="rating-count"><del>70 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Омске</strong> — идеальный старт для начинающих профессионалов в индустрии красоты.</p>
<p>Программа включает в себя обучение популярным косметологическим процедурам: от диагностики кожи до аппаратной косметологии и массажа лица.</p>
<p>За <span class="price-highlight">123 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих и профессионалов, желающих расширить спектр услуг.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часа</span>
<span><strong>24</strong> урока</span>
<span><strong>6</strong> процедур</span>
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
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая, пластическая техники массажа</td>
</tr>
<tr>
<td>🌈 Окрашивание бровей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Архитектура и окрашивание бровей</td>
</tr>
<tr>
<td>🎨 Стайлинг бровей</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Колористика, работа с клиентом</td>
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
<li>💧 Выполнять маски и пилинги</li>
<li>🧖‍♀️ Оформлять и окрашивать брови</li>
<li>📅 Подбирать комплексный уход за кожей</li>
<li>🔧 Осваивать аппаратные процедуры</li>
<li>📜 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://omsk.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 ак. часа</span> (1–2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2000 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 000 ₽</span> <span class="rating-count"><del>10 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">20%</span> на данном этапе продаж</p>
<p><strong>📍 Адрес:</strong> г. Омск, ул. Масленникова, д. 28</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812678197">+7 (3812) 67-81-97</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://omsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">omsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://omsk.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Омске</strong> — идеальный старт для будущих косметологов, желающих изучить анатомию и дерматологию.</p>
<p>Программа охватывает основы дерматологии, анатомию лица и шеи, а также санитарные нормы для организации рабочего места косметолога.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит для начинающих специалистов в сфере косметологии и тех, кто хочет обновить свои знания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>2</strong> ак. часа</span>
<span><strong>2</strong> урока</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Строение кожи, типы кожи, санитарные требования.</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Анатомия лица, старение кожи, уход по возрасту.</td>
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
<li>✔️ Организовывать рабочее место косметолога</li>
<li>✔️ Определять типы кожи и их потребности</li>
<li>✔️ Понимать анатомию лица и шеи</li>
<li>✔️ Применять anti-age процедуры</li>
<li>✔️ Осуществлять уход за кожей по возрасту</li>
<li>✔️ Работать с санитарными нормами в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://omsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://omsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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