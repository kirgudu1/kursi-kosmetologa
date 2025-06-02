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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 000 ₽</span> <span class="rating-count"><del>3 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период максимальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://ryazan.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://ryazan.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Рязани</strong> — идеальный выбор для начинающих косметологов, желающих получить фундаментальные знания.</p>
<p>Программа охватывает основы дерматологии, анатомию лица и шеи, а также санитарные требования в работе косметолога.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет для всех, кто хочет начать карьеру в индустрии красоты и повысить свою квалификацию.</p>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Дерматология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Анатомия лица, факторы старения, уход за кожей</td>
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
<li>🔍 Разбираться в типах кожи</li>
<li>🏥 Организовывать рабочее место косметолога</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>🕵️‍♀️ Оценивать состояние кожи</li>
<li>⚙️ Применять anti-age процедуры</li>
<li>📌 Следить за санитарными нормами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://ryazan.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">10 ак. часов</span> (1 день)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Предоставляется</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 000 ₽</span> <span class="rating-count"><del>10 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Рязани</strong> — это отличный шанс для косметологов раскрыть новые навыки в области SPA-процедур и обертываний.</p>
<p>Программа охватывает техники обертываний, пилингов и ароматерапии.</p>
<p>За <span class="price-highlight">10 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс идеально подходит как для начинающих, так и для тех, кто уже работает в сфере красоты и хочет повысить квалификацию.</p>
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
<td>🔰 Основы SPA</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Типы SPA-процедур, спа-этикет</td>
</tr>
<tr>
<td>📈 Обертывания</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Горячие и холодные обертывания</td>
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
<li>💆 Проводить эффективные SPA-процедуры</li>
<li>🌺 Осваивать техники ароматерапии</li>
<li>🔍 Составлять индивидуальные программы ухода за кожей</li>
<li>🌊 Выполнять различные виды обертываний</li>
<li>📝 Применять правила спа-этики</li>
<li>💼 Увеличить клиентскую базу и повысить доход</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 000 ₽</span> <span class="rating-count"><del>40 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период актуальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://ryazan.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://ryazan.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Рязани</strong> — идеальный выбор для начинающих мастеров и специалистов, желающих повысить квалификацию.</p>
<p>Программа охватывает восковую депиляцию и шугаринг, что позволяет освоить востребованные техники удаления волос.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подходит как для новичков, так и для опытных специалистов, желающих увеличить свою клиентскую базу.</p>
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
<td>Техника шугаринга, первая процедура, работа с клиентами</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Сложности в профессии, скоростные техники</td>
</tr>
<tr>
<td>🎨 Специальные техники</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Бразильское бикини, полимерные воски, ваксинг лица</td>
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
<li>💁‍♀️ Проведение процедуры депиляции воском на разных зонах</li>
<li>👩‍🏫 Работа с сахарной пастой в различных техниках</li>
<li>🌸 Депиляция всех частей тела, включая глубокое бикини</li>
<li>🧼 Соблюдение правил гигиены и безопасности на приеме</li>
<li>📋 Консультирование клиента по процедуре и домашнему уходу</li>
<li>✨ Индивидуальный подход к каждому клиенту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://ryazan.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (2 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 000 ₽</span> <span class="rating-count"><del>10 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912475318">+7 (4912) 475-318</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://ryazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://ryazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Рязани</strong> — идеальное решение для косметологов, стремящихся улучшить взаимодействие с клиентами и увеличить уровень продаж.</p>
<p>Программа курса включает изучение психологии общения, этику в косметологии и техники эффективной коммуникации.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как для начинающих специалистов, так и для опытных, желающих повысить свои навыки в клиентском сервисе.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>0</strong> процедур</span>
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
<td>🔰 Коммуникация</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Грамотная коммуникация с клиентом</td>
</tr>
<tr>
<td>📈 Этика</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Принципы профессиональной этики в косметологии</td>
</tr>
<tr>
<td>🎨 Психология</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов и методы работы с ними</td>
</tr>
<tr>
<td>🤝 Корпоративная культура</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры и командная работа</td>
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
<li>🎯 Выстраивать доверительные отношения с клиентами</li>
<li>🧠 Определять психотипы клиентов и выявлять их потребности</li>
<li>📈 Увеличивать продажи своих услуг через грамотную коммуникацию</li>
<li>🏆 Повышать авторитет среди коллег и клиентов</li>
<li>📋 Понимать и применять основы корпоративной культуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://ryazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2–3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 200 ₽</span> <span class="rating-count"><del>33 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение, когда действуют специальные предложения</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/upkeep&sub1=https://ryazan.ecolespb.ru/cosmetology-school/upkeep" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/upkeep&sub1=https://ryazan.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы эстетической косметологии»</strong> в <strong>Рязани</strong> — отличный старт для тех, кто хочет стать косметологом-эстетистом и получить необходимые навыки в диагностике и лечении кожи.</p>
<p>Вы освоите как домашний, так и салонный уход, а также выполнение востребованных косметологических процедур.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет повысить свои квалификации в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>23</strong> отработки на практике</span>
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
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Строение кожи, основные процедуры по уходу</td>
</tr>
<tr>
<td>📋 Практика на моделях</td>
<td><span class="price-highlight">40 ч / 10 уроков</span></td>
<td>Чистки, пилинги, маски, карбокситерапия</td>
</tr>
<tr>
<td>🎓 Углубанные техники</td>
<td><span class="price-highlight">56 ч / 8 уроков</span></td>
<td>Косметология лица, тела и профессиональные вещества</td>
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
<li>🌟 Составлять комплексные программы ухода</li>
<li>🧴 Разбираться в профессиональной уходовой косметике</li>
<li>📈 Работать с проблемной кожей</li>
<li>🎯 Осваивать карбокситерапию</li>
<li>💡 Решать частые проблемы кожи</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/upkeep&sub1=https://ryazan.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы аппаратной косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы аппаратной косметологии</div>
<h2>Курсы аппаратной косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 700 ₽</span> <span class="rating-count"><del>26 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период максимальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы аппаратной косметологии»</strong> в <strong>Рязани</strong> — идеальный старт для тех, кто хочет стать профессионалом в индустрии красоты.</p>
<p>Программа охватывает аппаратные методы, такие как дарсонвализация, микротоки, лазерная биоревитализация и другие.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как для начинающих, так и для специалистов, стремящихся повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>10</strong> процедур</span>
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
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>Классификация методов, техники защиты, дарсонвализация</td>
</tr>
<tr>
<td>📈 Лазерные процедуры</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Лазерная биоревитализация, показания и противопоказания</td>
</tr>
<tr>
<td>🎨 Коррекция фигуры</td>
<td><span class="price-highlight">24 ч / 5 уроков</span></td>
<td>RF-лифтинг, кавитация, мануальные методики</td>
</tr>
<tr>
<td>📚 Аппаратные пилинги</td>
<td><span class="price-highlight">32 ч / 5 уроков</span></td>
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
<li>💢 Выполнять аппаратный пилинг на клиентках</li>
<li>🧖‍♀️ Осваивать дарсонвализацию и микротоки</li>
<li>⚖️ Корректировать фигуру с помощью RF-лифтинга</li>
<li>🌟 Проводить лазерную биоревитализацию</li>
<li>✨ Работать с аппаратами для ухода за кожей</li>
<li>🔍 Анализировать индивидуальные потребности клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 дня)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">можно оформить</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 900 ₽</span> <span class="rating-count"><del>14 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Рязани</strong> — идеальный вариант для специалистов, желающих повысить свою квалификацию и освоить новые техники работы.</p>
<p>В программе изучаются современные методы депиляции, включая работу с полимерными восками и психологические аспекты работы с клиентами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получат практические навыки на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдёт как новичкам, так и опытным специалистам, стремящимся улучшить свою практику и увеличить доход.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>2</strong> дня</span>
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
<td>Техники депиляции, работа с полимерными восками</td>
</tr>
<tr>
<td>📈 Психология общения с клиентом</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Особенности взаимодействия и подготовки клиента</td>
</tr>
<tr>
<td>🎨 Продвижение услуг</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Анализ аудитории, каналы привлечения клиентов</td>
</tr>
<tr>
<td>🌟 Практика на моделях</td>
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
<li>💁‍♀️ Осваивать скоростные техники депиляции</li>
<li>🌀 Равномерно работать с разными типами волос</li>
<li>🌼 Ежедневно общаться с клиентами и находить к ним подход</li>
<li>📈 Разрабатывать стратегии продвижения своих услуг</li>
<li>🛠️ Осуществлять процедуру быстро и чисто</li>
<li>💬 Устранение вросших волосков и работа с индивидуальными клиентами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 900 ₽</span> <span class="rating-count"><del>14 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение на текущий момент</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Рязани</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Программа включает в себя базы техники работы с воском, работу с популярными зонами и индивидуальный подход к клиентам.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Подходит как для начинающих, так и для тех, кто ищет повышение квалификации.</p>
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
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Основы восковой депиляции, безопасность</td>
</tr>
<tr>
<td>📈 Практическая отработка</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Работа с моделями, выбор воска</td>
</tr>
<tr>
<td>🎨 Специальные техники</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Депиляция бикини, уход за кожей</td>
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
<li>💡 Овладеть техникой восковой депиляции</li>
<li>🎯 Уметь работать с различными зонами</li>
<li>🧰 Подбирать индивидуальные подходы к клиентам</li>
<li>🎨 Знать правила по уходу за кожей после процедуры</li>
<li>📣 Эффективно общаться с клиентами</li>
<li>📋 Получить сертификат после завершения курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1-2 дня)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 900 ₽</span> <span class="rating-count"><del>14 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий акционный период</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Рязани</strong> — это идеальный старт для тех, кто хочет войти в индустрию красоты.</p>
<p>Программа включает техники работы с сахарной пастой и применение профессиональной косметики.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет освоить новую профессию.</p>
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
<td>Техники и правила безопасности</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">5 ч / 2 урока</span></td>
<td>Отработка шугаринга подмышек и голеней</td>
</tr>
<tr>
<td>🎨 Депиляция бикини</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Депиляция классического бикини</td>
</tr>
<tr>
<td>📞 Работа с клиентами</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Коммуникация и решение конфликтов</td>
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
<li>💪 Выполнять сахарную депиляцию на различных зонах</li>
<li>📏 Работать с различными пастами на практике</li>
<li>🪄 Обеспечивать уход за кожей после процедуры</li>
<li>🙋‍♀️ Выстраивать коммуникацию с клиентами</li>
<li>🛠 Избежать распространённых ошибок в работе</li>
<li>📈 Начать карьеру в сфере красоты с высокими доходами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://ryazan.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при акционных предложениях</p>
<p><strong>📍 Адрес:</strong> г. Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://ryazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://ryazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Рязани</strong> — отличная возможность для косметологов освоить новые методы работы с гиперпигментацией.</p>
<p>Программа включает в себя основы гиперпигментации и методы корректировки с использованием пилингов и ретиноидов.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Этот курс подойдет как для начинающих, так и для опытных косметологов, желающих повысить свою квалификацию.</p>
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
<td>Причины и механизмы формирования пигментных пятен</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур и избежание осложнений</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетание пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>🌟 Выполнение процедуры</td>
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
<li>⚙️ Подбирать процедуры с учетом сезонности и фототипа кожи</li>
<li>🔗 Комбинировать пилинги, ретиноиды и феруловый массаж</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Привлекать больше клиентов за счет эффективных процедур</li>
<li>✨ Забирать навыки для практической работы на моделях</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://ryazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">19 900 ₽</span> <span class="rating-count"><del>33 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://ryazan.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://ryazan.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс основы нутрициологии»</strong> в <strong>Рязани</strong> — идеальный старт для желающих освоить навыки правильного питания и нутрициологии.</p>
<p>Программа включает изучение основ питания, диагностику потребностей в витаминах и минералах, а также практическую работу с клиентами.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получат практику и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подойдет как для личного использования, так и для начала карьеры нутрициолога.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часов</span>
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
<td>Классификация пищевых веществ, нормы потребления</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Определение потребностей, источники витаминов</td>
</tr>
<tr>
<td>🎨 Коррекция рациона</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Способы коррекции веса, подготовка рациона</td>
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
<li>📊 Разбирать состав пищи и анатомию пищеварительной системы</li>
<li>🧾 Выявлять потребности в витаминах и минералах</li>
<li>🍽️ Оценивать рацион и осуществлять коррекцию питания</li>
<li>👥 Работать с реальными клиентами</li>
<li>📄 Создавать индивидуальные планы питания</li>
<li>🏆 Подтвердить квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://ryazan.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 300 ₽/мес</span> на 9 месяцев</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">47 100 ₽</span> <span class="rating-count"><del>78 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в период максимальных акций</p>
<p><strong>📍 Адрес:</strong> Рязань, ул. Вознесенская, д. 66</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912559600">+7 (4912) 55-96-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://ryazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">ryazan.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://ryazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Рязани</strong> — идеальный старт для начинающих мастеров и тех, кто уже работает в сфере красоты.</p>
<p>Вы освоите профессиональные техники ухода за лицом и телом, включая массажи и аппаратные процедуры.</p>
<p>За <span class="price-highlight">126 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>22</strong> процедур</span>
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
<td>Строение кожи, маски, карбокситерапия</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг, обертывания</td>
</tr>
<tr>
<td>🧩 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический массаж, пластический массаж</td>
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
<li>💧 Выполнять косметические процедуры по уходу за кожей</li>
<li>✋ Проводить массажи лица и тела</li>
<li>🧖‍♀️ Осваивать аппаратные техники косметологии</li>
<li>🛠 Удалять волосы безопасными методами</li>
<li>📖 Подбирать индивидуальные маски и пилинги</li>
<li>📝 Создавать портфолио и работать с клиентами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://ryazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://ryazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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