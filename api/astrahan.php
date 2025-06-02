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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат о прохождении курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 900 ₽</span> <span class="rating-count"><del>18 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78452710020">+7 (8452) 71-00-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Астрахани</strong> — идеальный выбор для специалистов сферы красоты, желающих повысить свою квалификацию и освоить новые техники.</p>
<p>Программа охватывает современное использование полимерных восков и скоростные техники удаления волос, включая работу с трудными клиентами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет усовершенствовать свои навыки в депиляции.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>6</strong> уроков</span> <span><strong>8</strong> процедур</span> <span><strong>2 дня</strong></span>
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
<td>🔰 Базовая депиляция</td>
<td><span class="price-highlight">8 ак. ч / 3 урока</span></td>
<td>Техники депиляции, работа с вросшими волосками</td>
</tr>
<tr>
<td>📈 Продвинутые техники</td>
<td><span class="price-highlight">4 ак. ч / 2 урока</span></td>
<td>Скоростные техники, полимерные воски</td>
</tr>
<tr>
<td>🎨 Бикини и лицо</td>
<td><span class="price-highlight">4 ак. ч / 1 урок</span></td>
<td>Депиляция глубокого бикини и воски для лица</td>
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
<li>💼 Осваивать современные техники депиляции</li>
<li>⚡ Работать с полимерными восками для более быстрого удаления волосков</li>
<li>🧘 Находить индивидуальный подход к сложным клиентам</li>
<li>📣 Продвигать свои услуги в индустрии красоты</li>
<li>🪄 Успешно справляться с вросшими волосками и удалением забритых волосков</li>
<li>🌟 Создавать качественное портфолио для дальнейшей карьеры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 600 ₽</span> <span class="rating-count"><del>26 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в ходе текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79130000677">+7 (913) 0000-677</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Астрахани</strong> — идеальный старт для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Программа охватывает методы дарсонвализации, микротоков, лазерной биоревитализации, УЗ-процедур, RF-лифтинга и кавитации.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет углубить свои знания в области косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часа</span>
<span><strong>11</strong> уроков</span>
<span><strong>8</strong> процедур</span>
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
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Техника безопасности, работа с аппаратами</td>
</tr>
<tr>
<td>📈 Методики пилингов</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>УЗ, гидро- и газожидкостные пилинги</td>
</tr>
<tr>
<td>🎯 Коррекция фигуры</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Kавитация, RF-лифтинг</td>
</tr>
<tr>
<td>🌟 Омоложение кожи</td>
<td><span class="price-highlight">14 ч / 3 урока</span></td>
<td>Лазерная биоревитализация, микротоки</td>
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
<li>🏋️ Корректировать фигуру с использованием RF-терапии</li>
<li>💉 Проводить омолаживающие процедуры с лазером</li>
<li>🔧 Работать с косметологическими аппаратами</li>
<li>✨ Ухаживать за кожей, устраняя несовершенства</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">10 академических часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 500 ₽</span> <span class="rating-count"><del>17 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79130000677">+7 (913) 0000-677</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Астрахани</strong> — идеальный выбор для начинающих специалистов в области ухода за телом, желающих расширить свои навыки.</p>
<p>Программа охватывает популярные техники SPA-процедур, включая обертывания и пилинги.</p>
<p>За <span class="price-highlight">10 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подойдёт как для новичков, так и для тех, кто хочет повысить свою квалификацию и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>Создание расслабляющей атмосферы, использование эфирных масел</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Косметика для пилинга, эксфолиация</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
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
<li>💆 Владеть техникой SPA-процедур</li>
<li>🧖‍♀️ Создавать расслабляющую обстановку с помощью ароматерапии</li>
<li>🌿 Проводить обертывания и пилинги тела</li>
<li>📈 Повышать уровень профессионализма и расширять спектр услуг</li>
<li>🌟 Привлекать новых клиентов с помощью навыков ухода за телом</li>
<li>📋 Получить сертификат, подтверждающий вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1–2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат о прохождении курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 500 ₽</span> <span class="rating-count"><del>14 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79130000677">+7 (913) 0000-677</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы депиляции»</strong> в <strong>Астрахани</strong> — идеальное начало для тех, кто хочет стать мастером депиляции.</p>
<p>Программа включает изучение базовых техник восковой депиляции и индивидуального подхода к клиентам.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на реальных моделях и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки и начать карьеру мастера.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Теория восковой депиляции, безопасность, уход за кожей</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">5 ч / 2 урока</span></td>
<td>Депиляция бикини, подмышек, голеней</td>
</tr>
<tr>
<td>📈 Работа с клиентами</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Коммуникация с клиентами, отработка навыков</td>
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
<li>🎯 Овладеть техникой восковой депиляции</li>
<li>🌟 Работать с различными зонами</li>
<li>💬 Эффективно общаться с клиентами</li>
<li>🏆 Избегать распространенных ошибок в работе</li>
<li>📋 Получить сертификат, подтверждающий квалификацию</li>
<li>💵 Начать зарабатывать сразу после обучения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение, действующая в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79130000677">+7 (913) 0000-677</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://astrahan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://astrahan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Астрахани</strong> — это возможность для косметологов улучшить свои навыки в работе с гиперпигментацией.</p>
<p>В программе изучаются техники ферулового массажа, подбор процедур в зависимости от сезонности и фототипа кожи.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит для косметологов, желающих расширить свои профессиональные возможности и привлечь больше клиентов.</p>
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
<td>🔰 Теория</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Основы гиперпигментации, анализ кожных типов</td>
</tr>
<tr>
<td>📈 Пилинги</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Комбинация пилингов и ретиноидов</td>
</tr>
<tr>
<td>🎨 Практика</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Феруловый массаж: техника выполнения</td>
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
<li>💆‍♀️ Выполнять феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Привлекать и удерживать клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://astrahan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 000 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">57 900 ₽</span> <span class="rating-count"><del>96 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79130000677">+7 (913) 0000-677</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Астрахани</strong> — это идеальное решение для новичков в индустрии красоты и опытных специалистов, стремящихся повысить свою квалификацию.</p>
<p>Вы изучите профессиональные косметические и аппаратные процедуры по уходу за лицом и телом, массаж лица и депиляцию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и действующим специалистам, желающим улучшить свои навыки и начать карьеру в косметологии.</p>
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
<td>Строение кожи, Маски, Пилинги</td>
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
<td>🧰 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, Работа с клиентами</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, Пластический массаж, Массаж в методике жаке</td>
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
<li>🚀 Профессионально выполнять косметические процедуры</li>
<li>🌸 Осваивать аппаратные методики в косметологии</li>
<li>👐 Проводить различные типы массажа лица</li>
<li>💁‍♀️ Работать с реальными клиентами и вести собственный бизнес</li>
<li>💡 Повышать качество своих услуг и расширять портфолио</li>
<li>📋 Получить диплом, подтверждающий квалификацию в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 недели (38 ак. часов)</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">26 400 ₽</span> <span class="rating-count"><del>44 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих акций на обучение.</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78405430053">+7 (840) 543-00-53</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Астрахани</strong> — идеальное решение для желающих освоить искусство депиляции и начать карьеру в beauty-сфере.</p>
<p>Вы изучите восковую депиляцию и шугаринг, включая скоростные техники работы и индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подойдёт как начинающим, так и тем, кто хочет повысить свою квалификацию в разнообразных техниках депиляции.</p>
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
<td>🔰 Общее введение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, первая процедура, работа с клиентами</td>
</tr>
<tr>
<td>📈 Элементы депиляции</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, депиляция бикини, работа с клиентами</td>
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
<li>✨ Проведение процедуры депиляции воском на разных зонах</li>
<li>✨ Работа с сахарной пастой в различных техниках</li>
<li>✨ Депиляция всех частей тела, включая глубокое бикини</li>
<li>✨ Соблюдение гигиенических норм и правил безопасности</li>
<li>✨ Консультирование клиентов по процедуре и уходу</li>
<li>✨ Индивидуальный подход к каждому клиенту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">54 600 ₽</span> <span class="rating-count"><del>91 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> специальное предложение для первых записавшихся</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78001234567">+7 (800) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Астрахани</strong> — идеальный старт для тех, кто хочет стать специалистом в индустрии красоты.</p>
<p>Вы изучите популярные косметологические процедуры, техники массажа лица и аппаратной косметологии.</p>
<p>За <span class="price-highlight">123 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для начинающих, так и для действующих мастеров, желающих расширить свои навыки и повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часов</span> <span><strong>24</strong> уроков</span> <span><strong>7</strong> процедур</span> <span><strong>2-3</strong> месяца</span>
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
<td>Строение кожи, маски, пилинги</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, корректировка фигуры</td>
</tr>
<tr>
<td>🎨 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический, пластический массаж и техника Жаке</td>
</tr>
<tr>
<td>🌈 Окрашивание бровей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Архитектура бровей, окрашивание</td>
</tr>
<tr>
<td>✨ Сложная колористика</td>
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
<li>💆 Проводить косметический массаж лица в разных техниках</li>
<li>🌿 Выполнять процедуры по уходу за кожей: маски, пилинги, чистку</li>
<li>🔬 Работать с профессиональными аппаратами для косметологии</li>
<li>🎨 Оформлять и окрашивать брови с учетом цветотипа клиентов</li>
<li>📋 Подбирать комплексный уход за кожей</li>
<li>📜 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://astrahan.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span> (1-неделя)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 500 ₽</span> <span class="rating-count"><del>10 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на курс в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78452480000">+7 (8452) 480-000</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://astrahan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://astrahan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Астрахани</strong> — это идеальное решение для косметологов, желающих укрепить лояльность клиентов и увеличить объем продаж.</p>
<p>Вы изучите технику выявления потребностей клиентов и основы психологической коммуникации для построения доверительных отношений.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как для новичков, так и для опытных специалистов, стремящихся повысить свой профессиональный уровень.</p>
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
<td>Коммуникация, профессиональный имидж</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этика общения, 5 принципов профессиональной этики</td>
</tr>
<tr>
<td>🎨 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры</td>
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
<li>💬 Эффективно общаться с клиентами</li>
<li>🧰 Определять потребности клиентов</li>
<li>🎯 Управлять сложными ситуациями</li>
<li>📈 Увеличивать продажи услуг</li>
<li>🌟 Повышать свою профессиональную репутацию</li>
<li>🤝 Работать в коллективе и поддерживать корпоративную культуру</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://astrahan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 400 ₽</span> <span class="rating-count"><del>34 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79130000677">+7 (913) 0000-677</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/upkeep&sub1=https://astrahan.ecolespb.ru/cosmetology-school/upkeep" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/upkeep&sub1=https://astrahan.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Астрахани</strong> — это отличный старт для тех, кто хочет стать косметологом-эстетистом и освоить основные навыки в уходе за кожей.</p>
<p>В программе курса изучаются такие техники, как чистки, пилинги, маски, и карбокситерапия.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практические навыки на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет обновить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">16 ч / 3 урока</span></td>
<td>Строение кожи, основные процедуры</td>
</tr>
<tr>
<td>📈 Уходовые процедуры</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Механическая чистка, карбокситерапия</td>
</tr>
<tr>
<td>🎨 Практика</td>
<td><span class="price-highlight">14 ч / 3 урока</span></td>
<td>Чистки, пилинги, маски</td>
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
<li>💆 Проводить процедуры по очищению и питанию кожи</li>
<li>🧴 Составлять комплексные уходы для разных типов кожи</li>
<li>🌿 Работать с профессиональной косметикой</li>
<li>💡 Подбирать процедуры в зависимости от типа кожи и возраста клиента</li>
<li>👍 Выполнять востребованные косметологические процедуры</li>
<li>📋 Получить диплом косметолога-эстетиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/upkeep&sub1=https://astrahan.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">1 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 500 ₽</span> <span class="rating-count"><del>14 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Астрахань, пл. Карла Маркса, д. 3, корпус 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78001234567">+7 (800) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">astrahan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Астрахани</strong> — идеальный выбор для тех, кто хочет освоить востребованную профессию в beauty-индустрии.</p>
<p>Вы изучите три техники работы с сахарной пастой, научитесь избегать типичных ошибок и находить индивидуальный подход к клиентам.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как начинающим, так и тем, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>11</strong> уроков</span>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Правила безопасности, инструменты и материалы</td>
</tr>
<tr>
<td>📍 Практика на моделях</td>
<td><span class="price-highlight">6 ч / 3 урока</span></td>
<td>Первоначальная процедура, уход за кожей</td>
</tr>
<tr>
<td>🎨 Депиляция бикини</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Классическое и глубокое бикини</td>
</tr>
<tr>
<td>👥 Работа с клиентами</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Коммуникация и построение отношений с клиентами</td>
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
<li>💪 Выполнять сахарную депиляцию различных зон</li>
<li>🧰 Знать инструменты и технологии профессионального шугаринга</li>
<li>🌀 Проводить процедуру с минимальным дискомфортом для клиентов</li>
<li>🧖‍♀️ Уход за кожей после процедуры</li>
<li>📈 Работать с клиентами и их запросами</li>
<li>💵 Начать карьеру мастера шугаринга с высоким доходом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://astrahan.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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