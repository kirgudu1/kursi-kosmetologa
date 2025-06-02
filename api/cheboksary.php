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
<!-- Главная карточка "Курсы дерматологии и анатомии лица" в стиле Топ1 начало -->
<div class="sushi-ranking">
  <div class="sushi-block">
    <div class="rank-label">Курсы дерматологии и анатомии лица</div>
    <h2>Курсы дерматологии и анатомии лица</h2>

    <div class="sushi-info">
      <p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
      <p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 ак. часа</span></p>
      <p> <strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span> </p>
      <p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
      <p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 600 ₽</span> <span class="rating-count"><del>9 400 ₽</del></span> </p>
      <p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при раннем бронировании</p>
      <p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
      <p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
      <p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">arhangelsk.ecolespb.ru</a></p>
    </div>

    <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
  </div>
</div>
<!-- Главная карточка "Курсы дерматологии и анатомии лица" в стиле Топ1 конец -->

<!-- Краткое описание курса начало -->
<div class="sushi-section">
  <h3>О курсе</h3>
  <p><strong>«Курсы дерматологии и анатомии лица»</strong> в <strong>Архангельске</strong> — для начинающих косметологов и специалистов, желающих углубить знания в области анатомии лица и дерматологии. Подходит тем, кто хочет освоить основы до перехода к инъекционным и аппаратным методикам.</p>
  <p>Программа охватывает анатомическое строение, типы кожи, кожные заболевания и возрастные изменения, а также включает санитарные нормы.</p>
  <p>За <span class="price-highlight">2 академических часа</span> слушатели получают практические навыки и <span class="price-highlight">персональный сертификат</span>.</p>
  <p>Идеальный выбор для тех, кто хочет начать карьеру в косметологии или систематизировать базовые знания.</p>
</div>
<!-- Краткое описание курса конец -->

<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
  <h3>Программа обучения</h3>

  <!-- Краткая сводка -->
  <div class="program-summary">
    <span><strong>2</strong> ак. часа</span>
    <span><strong>3</strong> урока</span>
    <span><strong>3</strong> процедур</span>
    <span><strong>Онлайн-формат</strong></span>
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
          <td>🔬 Введение в косметологию</td>
          <td><span class="price-highlight">1 ак. час</span></td>
          <td>Строение кожи, типы кожи, диагностика проблем, очищение, санитарные нормы</td>
        </tr>
        <tr>
          <td>🧠 Анатомия лица и шеи</td>
          <td><span class="price-highlight">0.5 ак. часа</span></td>
          <td>Мышцы лица и шеи, пигментация, возрастные изменения</td>
        </tr>
        <tr>
          <td>💡 Основы дерматологии</td>
          <td><span class="price-highlight">0.5 ак. часа</span></td>
          <td>Заболевания кожи, уход по возрасту, anti-age процедуры</td>
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
    <li>📌 Организовывать рабочее место косметолога по санитарным нормам</li>
    <li>🔍 Определять тип кожи и диагностировать проблемы</li>
    <li>🧬 Понимать строение кожи и её функции</li>
    <li>🧠 Изучать анатомию мышц лица и шеи</li>
    <li>🕒 Анализировать причины старения и методы профилактики</li>
    <li>📑 Работать с клиентами в рамках санитарных требований</li>
  </ul>
</div>
<!-- Конец блока: Чему вы научитесь -->

<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 000 ₽</span> <span class="rating-count"><del>13 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> - эта скидка актуальна прямо сейчас.</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Архангельске</strong> — идеальное решение для начинающих специалистов и тех, кто хочет повысить свою квалификацию в области депиляции.</p>
<p>Вы освоите базовые и продвинутые техники восковой депиляции и получите практические навыки работы на реальных клиентах.</p>
<p>За <span class="price-highlight">11 ак. часов</span> слушатели получают опыт работы с моделями и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет улучшить свои навыки в этой популярной сфере.</p>
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
<td>Основы восковой депиляции, взаимодействие с клиентами</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">9 ч / 1 урок</span></td>
<td>Восковая депиляция различных зон: подмышки, голени, бикини</td>
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
<li>🎀 Овладеете техникой восковой депиляции</li>
<li>🔍 Подобрать подходящий воск для каждой зоны</li>
<li>🤝 Эффективно общаться с клиентами</li>
<li>💪 Работать с разными зонами и техниками</li>
<li>📅 Проводить процедуры безопасно и качественно</li>
<li>🌟 Подготовка клиента к процедуре</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (9 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽ в месяц</span> (на 9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">32 000 ₽</span> <span class="rating-count"><del>53 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках акционных предложений</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Архангельске</strong> — это идеальный вариант для тех, кто хочет начать карьеру в индустрии красоты или улучшить свои навыки.</p>
<p>На курсе изучаются техники дарсонвализации, микротоков, лазерной биоревитализации и других популярных процедур.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для мастеров, желающих повысить уровень квалификации и дохода.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
<span><strong>11</strong> уроков</span>
<span><strong>9</strong> процедур</span>
<span><strong>9</strong> месяцев</span>
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
<td>Теория, безопасность, работа с оборудованием</td>
</tr>
<tr>
<td>📦 Процедуры пилинга</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>УЗ-пилинг, газожидкостный пилинг, гидропилинг</td>
</tr>
<tr>
<td>⚡ Коррекция фигуры</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>RF-лифтинг, кавитация, сочетание с мануальными методами</td>
</tr>
<tr>
<td>🌟 Омолаживающие процедуры</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Лазерная биоревитализация, микротоки, дарсонваль</td>
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
<li>🔧 Выполнять процедуры аппаратного пилинга</li>
<li>🏋️ Корректировать фигуру с помощью аппаратных методик</li>
<li>💆‍♀️ Проводить омолаживающие процедуры</li>
<li>📋 Работать с различными косметологическими аппаратами</li>
<li>👩‍🎓 Получить диплом специалиста в области аппаратной косметологии</li>
<li>💰 Начать зарабатывать сразу после обучения, получив первых клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 600 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 600 ₽</span> <span class="rating-count"><del>9 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках специального предложения</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Архангельске</strong> — отличный выбор для начинающих косметологов, желающих глубже понять анатомию и дерматологию.</p>
<p>Программа включает теоретические и практические занятия с акцентом на современные подходы к обучению.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный старт для тех, кто хочет работать в индустрии красоты.</p>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Строение кожи и ее функции, типы кожи.</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Анатомическое строение лица, факторы старения кожи.</td>
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
<li>🏥 Организовывать рабочее место косметолога.</li>
<li>🧴 Разбираться в типах кожи.</li>
<li>📏 Понимать анатомию лица и шеи.</li>
<li>🧪 Осуществлять уход за кожей в зависимости от возраста.</li>
<li>🔍 Проводить диагностику проблем кожи.</li>
<li>💼 Замедлять процесс старения кожи.</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы косметологии SPA" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы косметологии SPA</div>
<h2>Курсы косметологии SPA</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">10 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Элекронный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 000 ₽</span> <span class="rating-count"><del>15 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> по акциям на обучение</p>
<p><strong>📍 Адрес:</strong> Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы косметологии SPA»</strong> в <strong>Архангельске</strong> — идеально подходит для тех, кто хочет расширить свои навыки в сфере красоты.</p>
<p>Программа охватывает основные SPA-процедуры, обертывания и ароматерапию, позволяя специалистам качественно ухаживать за кожей тела.</p>
<p>За <span class="price-highlight">10 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">электронный сертификат</span>.</p>
<p>Курс подходит как для новичков, так и для профессионалов, желающих повысить свою квалификацию и привлечь новых клиентов.</p>
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
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, классификация масел</td>
</tr>
<tr>
<td>🎨 Пилинг тела</td>
<td><span class="price-highlight">4 ак. часа / 1 урок</span></td>
<td>Техника выполнения процедур пилинга и эксфолиации</td>
</tr>
<tr>
<td>🌊 Обертывания</td>
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
<li>💆 Владеть техникой SPA-процедур</li>
<li>🌺 Знать правила спа-этикета</li>
<li>🧘 Создавать расслабляющую обстановку с ароматерапией</li>
<li>🧴 Проводить обертывания и пилинги тела</li>
<li>📈 Увеличить свою клиентскую базу</li>
<li>⭐ Повысить свою квалификацию в сфере красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 000 ₽</span> <span class="rating-count"><del>30 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в Академии красоты</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Архангельске</strong> — для тех, кто хочет осознанно подходить к своему питанию и карьере в нутрициологии.</p>
<p>Программа охватывает основы нутрициологии, включая анализ состава продуктов и выбор витаминов.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как для начинающих, так и для желающих улучшить свои навыки в области нутрициологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часа</span>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Анатомия пищеварительной системы, принципы здорового питания</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Классификация, потребности, источники</td>
</tr>
<tr>
<td>🎯 Коррекция рациона</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Диеты, пищевые зависимости, безопасное питание</td>
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
<li>🎓 Понимать состав продуктов</li>
<li>🔍 Выявлять потребности в витаминах и минералах</li>
<li>📊 Подбирать рацион питания в зависимости от целей</li>
<li>📅 Разрабатывать диеты для различных типов людей</li>
<li>🥗 Проводить консультации по питанию</li>
<li>📈 Открывать свою практику нутрициолога</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при записи в текущий период</p>
<p><strong>📍 Адрес:</strong> Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Архангельске</strong> — идеальное решение для косметологов, желающих улучшить свои навыки в коррекции гиперпигментации.</p>
<p>Программа охватывает техники пилингов, ферулового массажа и ретиноидной терапии.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс позволит расширить клиентскую базу и улучшить качество предоставляемых услуг.</p>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Причины, механизмы, диагностика</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Алгоритмы, минимизация рисков</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Сочетание методов и протоколы</td>
</tr>
<tr>
<td>🚀 Выполнение процедуры</td>
<td><span class="price-highlight">2 ак. часа</span></td>
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
<li>🔍 Подбор процедур с учетом фототипа</li>
<li>⚙️ Комбинировать пилинги и феруловый массаж</li>
<li>📄 Составлять индивидуальные протоколы</li>
<li>🏆 Привлекать больше клиентов с помощью новых услуг</li>
<li>📚 Подбирать домашний уход для закрепления результатов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 000 ₽</span> <span class="rating-count"><del>36 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период.</p>
<p><strong>📍 Адрес:</strong> Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Архангельске</strong> — идеальный выбор для начинающих и профессионалов в индустрии красоты.</p>
<p>Программа охватывает восковую депиляцию и шугаринг, включая базовые и скоростные техники удаления волос.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подходит как для начинающих, так и для тех, кто хочет повысить квалификацию и быстро начать зарабатывать.</p>
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
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Первая процедура, Депиляция бикини, Работа с клиентами</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Сложности в профессии, Скоростные техники</td>
</tr>
<tr>
<td>🎨 Практика</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Бразильское бикини, Полимерные воски</td>
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
<li>🧖‍♀️ Проводить процедуры восковой депиляции на разных зонах</li>
<li>🥥 Работать с сахарной пастой в разных техниках</li>
<li>🌿 Проводить комплексную депиляцию всех частей тела</li>
<li>🔍 Соблюдать правила гигиены и безопасности на приеме</li>
<li>👩‍🏫 Консультировать клиента по процедуре и домашнему уходу</li>
<li>💼 Индивидуально подходить к каждому клиенту, даже к самым сложным</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 600 ₽</span> <span class="rating-count"><del>11 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при большой загрузке</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78122345678">+7 (812) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Этика и психология общения с клиентом в косметологии»</strong> в <strong>Архангельске</strong> — это уникальная возможность для косметологов улучшить навыки коммуникации и управления клиентскими отношениями.</p>
<p>Вы изучите основные принципы психологии общения, этику в работе и методы повышения лояльности клиентов.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдёт всем, кто хочет повысить качество обслуживания и увеличить количество постоянных клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>3</strong> процедуры</span> <span><strong>1 неделя</strong></span>
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
<td>Этапы общения с клиентом, внешний образ косметолога</td>
</tr>
<tr>
<td>📚 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы профессиональной этики, ведение общения</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры и их значение</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов, типы клиентов</td>
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
<li>💡 Выстраивать гармоничные отношения с клиентами</li>
<li>🤝 Определять психотипы и потребности клиентов</li>
<li>📈 Повышать уровень лояльности клиентов</li>
<li>🧰 Успешно решать конфликтные ситуации</li>
<li>👥 Эффективно работать в команде</li>
<li>🏆 Заработать доверие и авторитет</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (2 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 000 ₽</span> <span class="rating-count"><del>13 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на стоимость курса</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Архангельске</strong> — идеальный выбор для тех, кто хочет научиться удалению волос и начать карьеру в индустрии красоты.</p>
<p>На курсе вы освоите техники работы с сахарной пастой и сможете заниматься популярными процедурами на профессиональной косметике.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Курс подходит как для личного использования, так и для старта профессиональной деятельности.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Техника применения сахарной пасты, подготовка клиента</td>
</tr>
<tr>
<td>📈 Практика работы с моделями</td>
<td><span class="price-highlight">5 ч / 2 урока</span></td>
<td>Депиляция различных зон, работа с клиентами</td>
</tr>
<tr>
<td>🎨 Депиляция бикини</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Классический бикини, эстетика процедуры</td>
</tr>
<tr>
<td>📚 Коммуникация с клиентами</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Эффективное общение, решение конфликтных ситуаций</td>
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
<li>💡 Проводить процедуры шугаринга с комфортом для клиента</li>
<li>🧰 Работать с сахарной пастой разных жесткостей</li>
<li>📏 Депилировать различные зоны тела</li>
<li>📋 Обеспечивать правильный уход за кожей после процедур</li>
<li>👥 Устанавливать эффективную коммуникацию с клиентами</li>
<li>🎯 Управлять потенциальными конфликтами и проблемами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 дня)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 000 ₽</span> <span class="rating-count"><del>21 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Архангельске</strong> — это идеальный выбор для мастеров, стремящихся повысить свою квалификацию и освоить современные техники депиляции.</p>
<p>Программа включает обучение работой с полимерными восками, скоростным техникам и психологическим аспектам работы с клиентами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс идеально подойдёт для тех, кто хочет углубить свои знания и повысить уровень сервиса.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
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
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Техника проведения депиляции, работа с вросшими волосками</td>
</tr>
<tr>
<td>📈 Продвинутые техники</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Скоростные техники, депиляция сложных зон</td>
</tr>
<tr>
<td>🎨 Психология клиента</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Индивидуальный подход, коммуникация с клиентом</td>
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
<li>💨 Выполнять депиляцию быстро и чисто</li>
<li>🧠 Понимать психологию работы с клиентами</li>
<li>🚀 Осваивать скоростные техники депиляции</li>
<li>👩‍🏫 Работать с сложными типами волос</li>
<li>📈 Продвигать свои услуги</li>
<li>💼 Создавать качественное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 300 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">47 000 ₽</span> <span class="rating-count"><del>78 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс.</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Архангельске</strong> — идеальный старт для начинающих мастеров в индустрии красоты и опытных специалистов, желающих повысить свою квалификацию.</p>
<p>Программа включает в себя косметические и аппаратные процедуры, массажи и депиляцию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для тех, кто хочет начать карьеру в косметологии или усовершенствовать свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> уроков</span>
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
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🔧 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Работа с клиентами, первая процедура</td>
</tr>
<tr>
<td>💆🏻‍♀️ Косметический массаж лица</td>
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
<li>🎨 Выполнять аппаратные процедуры по уходу за лицом и телом</li>
<li>💆🏻‍♀️ Проводить различные виды массажа</li>
<li>🌿 Осуществлять депиляцию и другие уходовые процедуры</li>
<li>🧴 Подбирать косметические средства под потребности клиентов</li>
<li>📋 Применять современные техники ухода за кожей</li>
<li>📚 Осваивать новые методы и тренды в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">27 000 ₽</span> <span class="rating-count"><del>45 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> промоакции в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> г. Архангельск, ул. Карла Маркса, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79022866047">+7 (902) 286-60-47</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank">arhangelsk.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы эстетической косметологии»</strong> в <strong>Архангельске</strong> — идеальное решение для желающих освоить профессию косметолога-эстетиста.</p>
<p>Программа включает изучение востребованных косметологических процедур для ухода за кожей.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию и начать зарабатывать в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часов</span>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Строение кожи, типы кожи, диагностика</td>
</tr>
<tr>
<td>💧 Уходовые процедуры</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Чистки, пилинги, маски</td>
</tr>
<tr>
<td>🌟 Специальные процедуры</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Карбокситерапия, комплексные уходы</td>
</tr>
<tr>
<td>🎓 Практика на клиентах</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Отработка навыков на моделях</td>
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
<li>Диагностировать различные кожные проблемы</li>
<li>Выполнять чистки и пилинги</li>
<li>Подбирать уходовые процедуры для клиентов</li>
<li>Работать с профессиональной косметикой</li>
<li>Проведение карбокситерапии</li>
<li>Составлять комплексные уходы для кожи</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://arhangelsk.ecolespb.ru/cosmetology-school/upkeep&sub1=https://arhangelsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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