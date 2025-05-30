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
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс аппаратной косметологии</div>
<h2>Курс аппаратной косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 000 ₽/мес.</span> (5 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">26 300 ₽</span> <span class="rating-count"><del>43 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при оформлении заявки на обучение сейчас.</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, д. 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7 (910) 098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Коврове</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты или дополнить свои знания.</p>
<p>Программа курса охватывает техники дарсонвализации, микротоков, лазерной биоревитализации, УЗ-процедур, RF-лифтинга и кавитации.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет углубить свои знания и навыки в аппаратной косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
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
<td>🔰 Основы физиотерапии</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Классификация методов, безопасность, дарсонваль</td>
</tr>
<tr>
<td>📈 УЗ-процедуры</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>УЗ-пилинг, фонофорез, УЗ-массаж</td>
</tr>
<tr>
<td>🎯 Коррекция фигуры</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Кавитация, RF-лифтинг</td>
</tr>
<tr>
<td>🌸 Аппаратные пилинги</td>
<td><span class="price-highlight">10 ч / 1 урок</span></td>
<td>Газожидкостный, гидропилинг</td>
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
<li>💆‍♀️ Выполнять аппаратные пилинги</li>
<li>⚖️ Корректировать фигуру с помощью аппаратов</li>
<li>🔬 Проводить омолаживающие процедуры</li>
<li>📋 Работать с различными косметологическими аппаратами</li>
<li>🧖‍♀️ Оказывать уходовые услуги для кожи</li>
<li>📈 Создавать портфолио для будущей карьеры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 200 ₽</span> <span class="rating-count"><del>3 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на образовательные программы</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7-910-098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Коврове</strong> — идеальный выбор для будущих косметологов, которые хотят освоить основы анатомии и дерматологии.</p>
<p>Программа охватывает основные знания о структуре кожи, её функциях, а также санитарные требования в работе косметолога.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто хочет углубить свои знания в косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>2</strong> ак. часов</span> <span><strong>2</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>1 день</strong></span>
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
<td>Анатомическое строение, факторы старения кожи</td>
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
<li>🧴 Организовывать рабочее место косметолога</li>
<li>👩‍🔬 Разбираться в типах кожи</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>✅ Знать санитарные требования</li>
<li>🗣️ Консультировать клиентов по уходу за кожей</li>
<li>💡 Изучать методы замедления старения кожи</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс депиляции воском" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс депиляции воском</div>
<h2>Курс депиляции воском</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1–2 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 400 ₽</span> <span class="rating-count"><del>17 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, д. 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7 (910) 098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции воском" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции воском»</strong> в <strong>Коврове</strong> — идеальный старт для тех, кто хочет стать мастером депиляции.</p>
<p>Программа включает в себя изучение базовых техник работы с воском, подбор индивидуального подхода к каждому клиенту.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки и получить первую работу в профессии мастера депиляции.</p>
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
<span><strong>1-2</strong> недели</span>
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
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
<td>Введение в профессию, правила работы</td>
</tr>
<tr>
<td>📈 Техники восковой депиляции</td>
<td><span class="price-highlight">4 ак. часа / 2 урока</span></td>
<td>Шпательная и бандажная техника, выбор воска</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">4 ак. часа / 3 урока</span></td>
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
<li>💪 Овладеть техникой восковой депиляции</li>
<li>🔍 Подбирать воск в зависимости от зоны</li>
<li>📏 Проводить депиляцию различных зон</li>
<li>💬 Эффективно общаться с клиентами</li>
<li>🛡️ Обеспечивать безопасность процедуры</li>
<li>📈 Запускать карьеру в профессии мастера депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">без процентная рассрочка доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 500 ₽</span> <span class="rating-count"><del>17 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в данный момент проходят акции на курс.</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74951234567">+7 (495) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс косметологии SPA»</strong> в <strong>Коврове</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты или улучшить свои навыки.</p>
<p>Вы изучите техники обертываний, пилингов и ароматерапии, что позволит вам создавать индивидуальные SPA-программы для клиентов.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как начинающим, так и опытным косметологам, желающим расширить спектр своих услуг.</p>
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
<td>🔰 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы для спа-процедур</td>
</tr>
<tr>
<td>📖 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Технологии эксфолиации и скрабирования</td>
</tr>
<tr>
<td>🎁 Обертывания</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Ваши навыки горячих и холодных обертываний</td>
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
<li>🌸 Проводить востребованные обертывания и пилинги тела</li>
<li>🌿 Создавать расслабляющую атмосферу с помощью ароматерапии</li>
<li>📋 Составлять индивидуальные программы по уходу за кожей тела</li>
<li>📈 Повысить профессионализм и расширить спектр услуг</li>
<li>🤝 Привлекать новых клиентов с новыми навыками</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 600 ₽</span> <span class="rating-count"><del>19 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, д. 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74956604004">+7 (495) 660-40-04</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Коврове</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Вы изучите три техники работы с сахарной пастой и получите максимальное количество практики на реальных клиентах.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Этот курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
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
<td>🔰 Техника шугаринга</td>
<td><span class="price-highlight">10 ч / 4 урока</span></td>
<td>Основы шугаринга, правила безопасности, инструменты</td>
</tr>
<tr>
<td>📈 Депиляция бикини</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Классическое бикини, противопоказания, подготовка клиента</td>
</tr>
<tr>
<td>🎯 Работа с клиентами</td>
<td><span class="price-highlight">8 ч / 5 уроков</span></td>
<td>Коммуникация, конфликтные ситуации, трек развития</td>
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
<li>🌟 Работать с различными зонами</li>
<li>🧰 Понимать инструментарий и техники профессиональных мастеров</li>
<li>📅 Эффективно общаться с клиентами</li>
<li>📈 Стартовать в профессии мастер шугаринга</li>
<li>💵 Зарабатывать на первых клиентах сразу после обучения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс повышения квалификации по депиляции</div>
<h2>Курс повышения квалификации по депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 600 ₽</span> <span class="rating-count"><del>19 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7-910-098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Коврове</strong> — идеальный выбор для специалистов, желающих улучшить свои навыки в области депиляции и освоить современные техники.</p>
<p>Программа охватывает работы с полимерными восками, а также быструю и качественную депиляцию на различных зонах.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, стремящихся повысить свои квалификацию и конкурентоспособность на рынке.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>8</strong> уроков</span> <span><strong>2</strong> процедуры</span> <span><strong>2 дня</strong></span>
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
<td>🔰 Сложности в профессии</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Работа с разными типами волос, тактики против вросших волосков</td>
</tr>
<tr>
<td>📈 Скоростные техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Персидская дорожка, итальянская глазурь</td>
</tr>
<tr>
<td>🎨 Бразильское бикини</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Пошаговая депиляция глубокого бикини</td>
</tr>
<tr>
<td>🧴 Полимерные воски</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Эффективная техника депиляции для быстрого удаления волос</td>
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
<li>🚀 Ускорять процедуры депиляции</li>
<li>💁‍♀️ Работать с самыми сложными клиентами</li>
<li>📈 Изучать и продвигать свои услуги</li>
<li>🧠 Понимать психологию клиента</li>
<li>✂️ Овладеть скоростными техниками удаления волос</li>
<li>🌟 Создавать качественное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">28 900 ₽</span> <span class="rating-count"><del>48 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих акций.</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, д. 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7 (910) 098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Коврове</strong> — это идеальный вариант для начинающих и тех, кто хочет повысить свою квалификацию.</p>
<p>Программа включает техники восковой депиляции и шугаринга, а также скоростные методики работы.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих мастеров, а также для тех, кто уже работает и хочет расширить свои навыки и базу клиентов.</p>
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
<td>Основы восковой депиляции, техника шугаринга</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Продвинутые техники, работа с клиентами</td>
</tr>
<tr>
<td>🎯 Специализация</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Сложные зоны, бразильское бикини</td>
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
<li>💡 Проведение депиляции разными техниками</li>
<li>🌟 Работа с восковыми и сахарными смесями</li>
<li>🔍 Индивидуальный подход к каждому клиенту</li>
<li>🧘 Соблюдение стандартов гигиены и безопасности</li>
<li>📝 Консультирование клиентов по уходу</li>
<li>📋 Получение диплома специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на курс.</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7-910-098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Коврове</strong> — это профессиональное обучение для косметологов, желающих повысить свою квалификацию в области работы с гиперпигментацией.</p>
<p>Программа включает пошаговые техники ферулового массажа и лучшие практики по коррекции гиперпигментации.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит для действующих косметологов, которые хотят расширить свои услуги и повысить клиентскую лояльность.</p>
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
<td><span class="price-highlight">1 ак. час</span></td>
<td>Причины и механизмы гиперпигментации, диагностика</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Алгоритмы подбора процедур, избежание осложнений</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Сочетание пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>💆 Выполнение процедуры</td>
<td><span class="price-highlight">3 ак. часа</span></td>
<td>Техника ферулового массажа и схемы процедур</td>
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
<li>💪 Безопасно корректировать гиперпигментацию</li>
<li>🧴 Подбирать процедуры с учетом фототипа кожи</li>
<li>⚗️ Комбинировать пилинги, ретиноиды и массаж</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🌟 Привлекать клиентов через эффективные процедуры</li>
<li>🛠️ Создавать долговременные программы для клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">43 900 ₽</span> <span class="rating-count"><del>69 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">37%</span> предложена на текущий момент.</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7 (910) 098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/upkeep" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Коврове</strong> — это идеальный выбор для тех, кто хочет получить профессию косметолога-эстетиста и развить навыки диагностики и ухода за кожей.</p>
<p>Программа включает изучение таких востребованных процедур как чистки, пилинги и карбокситерапия, а также навыки составления индивидуальных уходовых программ.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию.</p>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Строение кожи, диагностические методы</td>
</tr>
<tr>
<td>📦 Основные процедуры</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Чистки, пилинги, карбокситерапия</td>
</tr>
<tr>
<td>🎭 Косметические средства</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Типы и выбор косметики для ухода</td>
</tr>
<tr>
<td>🔍 Практика на моделях</td>
<td><span class="price-highlight">106 ч / 18 уроков</span></td>
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
<li>💆‍♀️ Выполнять процедуры по уходу за кожей</li>
<li>🧪 Проводить полное очищение и питание кожи</li>
<li>🔬 Подбирать индивидуальные программы ухода</li>
<li>📋 Осваивать методы и техники карбокситерапии</li>
<li>📖 Работать с профессиональной косметикой</li>
<li>📈 Создавать портфолио в индустрии красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 000 ₽</span> <span class="rating-count"><del>30 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> специальное предложение для новых студентов</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, д. 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74991500123">+7 (499) 150-01-23</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Коврове</strong> — прекрасный выбор для косметологов, стремящихся улучшить навыки общения с клиентами и повысить свою квалификацию.</p>
<p>Участники изучат методы формирования лояльности клиентов, выявления их потребностей и эффективной коммуникации.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практические навыки общения и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих улучшить взаимодействие с клиентами.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> процедуры</span>
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Грамотная коммуникация, создание профессионального имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Принципы профессиональной этики, работа с мнением клиента</td>
</tr>
<tr>
<td>📖 Корпоративная культура</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Формирование корпоративной культуры, взаимодействие в команде</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов, этапы консультации</td>
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
<li>👥 Устанавливать доверительные отношения с клиентами</li>
<li>🔍 Выявлять потребности клиентов</li>
<li>💬 Эффективно общаться и избегать конфликтов</li>
<li>🤝 Обеспечивать лояльность клиентов</li>
<li>🏆 Поднимать свой профессиональный авторитет</li>
<li>📈 Повышать продажи своих услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Косметолог - эстетист (без мед. образования)</div>
<h2>Косметолог - эстетист (без мед. образования)</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 150 ₽/мес.</span> (12 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">73 800 ₽</span> <span class="rating-count"><del>123 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий момент.</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, д. 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7 (910) 098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист (без мед. образования)»</strong> в <strong>Коврове</strong> — идеальный старт для начинающих специалистов и опытных мастеров красоты.</p>
<p>Вы изучите основные методы косметологии, включая массаж лица, SPA-процедуры и депиляцию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практический опыт на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как новичкам, так и тем, кто хочет обновить свои знания.</p>
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
<td>Строение кожи, маски, уход за лицом</td>
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
<td>🧰 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Стерилизация, работа с клиентами</td>
</tr>
<tr>
<td>💆 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, пластический массаж</td>
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
<li>🧼 Проводить механическую и аппаратную чистку кожи</li>
<li>💆 Причинять услуги массажа лица и тела</li>
<li>🌿 Выполнять восковую депиляцию</li>
<li>👩‍🔬 Подбирать маски и обертывания по типу кожи</li>
<li>📅 Выполнять процедуры по омоложению и увлажнению кожи</li>
<li>👥 Работать с клиентами и формировать база клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> только на ограниченное время!</p>
<p><strong>📍 Адрес:</strong> г. Ковров, ул. Комсомольская, д. 34</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79100982020">+7 (910) 098-20-20</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kovrov.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">kovrov.ecolespb.ru</a></p>
</div>
<a href="https://kovrov.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Коврове</strong> — идеальное решение для тех, кто хочет научиться осознанному питанию и поддержанию здоровья.</p>
<p>Программа включает изучение основ здорового питания, анализ продуктов и навыков консультации клиентов.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практический опыт и <span class="price-highlight">диплом</span>.</p>
<p>Идеально подходит для начинающих и тех, кто хочет сделать карьеру в нутрициологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
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
<td>🔰 Наука о питании</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Принципы здорового питания, анатомия пищеварительной системы</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классификация витаминов, источники и потребности организма</td>
</tr>
<tr>
<td>🎯 Коррекция рациона</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Способы коррекции, диеты, основы гигиены питания</td>
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
<li>🎓 Понимать состав пищи и его влияние на здоровье</li>
<li>📊 Определять потребности в витаминах и минералах</li>
<li>🍽️ Разрабатывать рацион питания для клиентов</li>
<li>📅 Проводить консультации по питанию</li>
<li>📋 Понимать принципы диет и их влияние на организм</li>
<li>💼 Начать карьеру нутрициолога с первого месяца обучения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kovrov.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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