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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (2–3 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> активная скидка на обучение</p>
<p><strong>📍 Адрес:</strong> г. Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Иркутске</strong> — отличный старт для желающих освоить востребованную профессию в индустрии красоты.</p>
<p>Программа включает восковую депиляцию и шугаринг, а также обучит скоростным техникам удаления волос.</p>
<p>За <span class="price-highlight">38 академических часов</span> вы получите практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и действующим специалистам, желающим повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span> <span><strong>5</strong> уроков</span> <span><strong>9</strong> процедур</span> <span><strong>2–3</strong> недели</span>
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
<td>Техника восковой депиляции, работа с клиентами</td>
</tr>
<tr>
<td>📈 Шугаринг</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, депиляция бикини</td>
</tr>
<tr>
<td>🎯 Повышение квалификации</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Сложности в профессии, скоростные техники</td>
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
<li>💇 Проведение процедуры восковой депиляции на разных зонах</li>
<li>🥥 Работа с сахарной пастой в разных техниках</li>
<li>🏆 Депиляция всех частей тела, включая глубокое бикини</li>
<li>📋 Соблюдение гигиенических норм на приеме</li>
<li>📞 Консультирование клиента по процедуре и уходу</li>
<li>🧑‍🤝‍🧑 Индивидуальный подход к каждому клиенту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">15 900 ₽</span> <span class="rating-count"><del>26 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">около 40%</span> на обучение в любое время.</p>
<p><strong>📍 Адрес:</strong> г. Иркутск, ул. Ленина, д. 42</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Иркутске</strong> — идеальный выбор для желающих освоить навыки омолаживания кожи и коррекции фигуры.</p>
<p>Программа включает в себя освоение обертываний и разнообразных SPA-процессов, а также методы ароматерапии.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет расширить свои профессиональные навыки.</p>
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
<td>Создание расслабляющей атмосферы, классификация масел</td>
</tr>
<tr>
<td>📦 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техники очищения и эксфолиации кожи</td>
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
<li>💆 Проводить расслабляющие SPA-процедуры</li>
<li>🧴 Создавать программы ухода за кожей</li>
<li>🕯️ Использовать ароматерапию в практике</li>
<li>🌿 Осуществлять пилинг и эксфолиацию кожи</li>
<li>🏷️ Составлять индивидуальные курсы для клиентов</li>
<li>📄 Легко общаться и консультировать клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы этики и психологии общения с клиентом в косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы этики и психологии общения с клиентом в косметологии</div>
<h2>Курсы этики и психологии общения с клиентом в косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в этот период</p>
<p><strong>📍 Адрес:</strong> г. Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы этики и психологии общения с клиентом в косметологии»</strong> в <strong>Иркутске</strong> — отличное решение для косметологов, которые хотят повысить лояльность клиентов и улучшить свои продажи.</p>
<p>Программа включает техники выявления потребностей клиентов и способы работы с различными психотипами.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику общения с клиентами и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный курс для косметологов, желающих улучшить свои навыки взаимодействия с клиентами и повысить авторитет в профессии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>4</strong> темы</span>
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этапы коммуникации, создание имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы профессиональной этики</td>
</tr>
<tr>
<td>🎨 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование успешной корпоративной культуры</td>
</tr>
<tr>
<td>🌟 Психология общения</td>
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
<li>💬 Эффективно общаться с клиентами</li>
<li>🧠 Выявлять потребности клиентов</li>
<li>🌈 Превращать непростых клиентов в лояльных</li>
<li>📈 Повышать продажи своих услуг</li>
<li>👥 Укреплять авторитет среди коллег</li>
<li>🤝 Выстраивать гармоничные отношения в коллективе</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 700 ₽</span> <span class="rating-count"><del>12 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период.</p>
<p><strong>📍 Адрес:</strong> г. Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Иркутске</strong> — подходит для начинающих и опытных мастеров, желающих улучшить свои навыки работы с сахарной пастой.</p>
<p>Программа курса включает изучение трех техник шугаринга, а также руководства по работе с популярными зонами.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на настоящих клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Идеальный выбор для старта карьеры в индустрии красоты и получения первых клиентов уже через месяц.</p>
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
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Основы шугаринга, правила безопасности</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Отработка техники на моделях, индивидуальный подход</td>
</tr>
<tr>
<td>🎨 Продвинутый</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Депиляция сложных зон, уход за кожей после процедуры</td>
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
<li>💼 Проводить шугаринг на различных зонах тела</li>
<li>🧴 Выбирать подходящую сахарную пасту для каждого клиента</li>
<li>✅ Изучать и применять правила ухода за кожей после процедуры</li>
<li>💡 Предоставлять индивидуальные рекомендации клиентам</li>
<li>🤝 Эффективно общаться и выстраивать диалог с клиентами</li>
<li>📄 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">72 ак. часа</span> (6 недель)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 400 ₽</span> <span class="rating-count"><del>9 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> во время акций и специальных предложений.</p>
<p><strong>📍 Адрес:</strong> Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Дерматология и анатомия лица»</strong> в <strong>Иркутске</strong> — идеальный выбор для будущих косметологов, стремящихся глубже понять анатомию и дерматологию.</p>
<p>Программа охватывает основные знания о строении кожи, типах кожи и санитарных требованиях, необходимые для работы косметолога.</p>
<p>За <span class="price-highlight">72 академических часа</span> слушатели получают практическое обучение и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и опытным специалистам, желающим углубить свои знания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>72</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>6</strong> процедур</span>
<span><strong>6</strong> недель</span>
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
<td><span class="price-highlight">24 ч / 4 урока</span></td>
<td>Строение кожи, типы кожи, диагностика</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">24 ч / 4 урока</span></td>
<td>Анатомия, старение кожи, уход по возрасту</td>
</tr>
<tr>
<td>🛠️ Санитарные требования</td>
<td><span class="price-highlight">24 ч / 4 урока</span></td>
<td>Обработка инструментов, организация рабочего места</td>
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
<li>🐾 Организовывать рабочее место косметолога</li>
<li>🩺 Разбираться в типах кожи и их особенностях</li>
<li>🔍 Понимать анатомию лица и шеи</li>
<li>📚 Применять основные подходы в дерматологии</li>
<li>🧪 Проводить диагностику проблем кожи</li>
<li>💼 Осваивать анти-возрастные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 700 ₽</span> <span class="rating-count"><del>14 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Иркутске</strong> — прекрасный выбор для специалистов, которые хотят улучшить свои навыки в депиляции.</p>
<p>Участники освоят современные техники депиляции, работу с полимерными восками и эффективные методы взаимодействия с клиентами.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как для опытных специалистов, так и для начинающих, желающих улучшить свои навыки и повысить квалификацию.</p>
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
<td>🔰 Введение в депиляцию</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы работы и техники безопасности</td>
</tr>
<tr>
<td>📈 Техники депиляции</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с полимерными восками, скоростные техники</td>
</tr>
<tr>
<td>🎨 Продвижение услуг</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Методы привлечения клиентов и работа с ними</td>
</tr>
<tr>
<td>🔍 Практика на клиентах</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Отработка на реальных моделях</td>
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
<li>✨ Ускорять процесс депиляции</li>
<li>🤝 Работать с клиентами с особыми потребностями</li>
<li>📈 Продвигать свои услуги в beauty-сфере</li>
<li>💡 Изучать психологию клиента</li>
<li>🧰 Осваивать новые техники депиляции</li>
<li>⚡ Устранять вросшие волоски эффективно</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">124 ак. часа</span> (2–3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 300 ₽</span> <span class="rating-count"><del>23 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при акциях на обучение</p>
<p><strong>📍 Адрес:</strong> Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Иркутске</strong> — идеальный старт для желающих освоить современные техники в сфере красоты.</p>
<p>Программа охватывает дарсонвализацию, микротоки, лазерную биоревитализацию, УЗ-процедуры и RF-лифтинг.</p>
<p>За <span class="price-highlight">124 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию и быстро выйти на рынок.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>124</strong> ак. часов</span> <span><strong>23</strong> урока</span> <span><strong>21</strong> процедура</span> <span><strong>2–3 месяца</strong></span>
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
<td>🔰 Омолаживание</td>
<td><span class="price-highlight">7 ак. часов / 2 урока</span></td>
<td>Способы омоложения, микротоки, RF-лифтинг</td>
</tr>
<tr>
<td>📉 Коррекция фигуры</td>
<td><span class="price-highlight">7 ак. часов / 2 урока</span></td>
<td>Процедуры по уменьшению объемов, борьба с целлюлитом</td>
</tr>
<tr>
<td>💧 Биоревитализация</td>
<td><span class="price-highlight">7 ак. часов / 2 урока</span></td>
<td>Глубокое увлажнение кожи, методики без инъекций</td>
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
<li>💡 Омолаживать кожу с помощью аппаратных техник</li>
<li>📏 Корректировать фигуру и устранять целлюлит</li>
<li>🌊 Проводить биоревитализацию для глубокого увлажнения</li>
<li>🔧 Использовать различные аппаратные методики</li>
<li>🤝 Работать с клиентами и отрабатывать навыки на моделях</li>
<li>📈 Создавать достойное портфолио и выходить на рынок</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip">Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 100 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 300 ₽</span> <span class="rating-count"><del>15 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на ограниченное время</p>
<p><strong>📍 Адрес:</strong> г. Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Иркутске</strong> — идеальный выбор для тех, кто хочет стать мастером в области депиляции и освоить лучшие техники работы с воском.</p>
<p>На курсе вы научитесь различным методам депиляции и получите практические навыки работы с клиентами.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свои навыки в депиляции.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Основы депиляции, технологии работы с воском</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Практика на моделях, индивидуальный подход к клиенту</td>
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
<li>💡 Овладеть техникой восковой депиляции</li>
<li>🧖 Подбирать индивидуальный подход к каждому клиенту</li>
<li>✂️ Депилировать популярные зоны: подмышки, голени, бикини</li>
<li>📑 Знать правила ухода за кожей после процедуры</li>
<li>📈 Адаптировать методику к различным типам кожи</li>
<li>🌟 Создавать комфортные условия для клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">64 ак. часов</span> (9 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 300 ₽/мес.</span> (без процентов)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">38 000 ₽</span> <span class="rating-count"><del>63 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Иркутске</strong> — идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты.</p>
<p>Программа охватывает техники диагностики, подбора косметических средств и ухода за кожей.</p>
<p>За <span class="price-highlight">64 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить свою квалификацию и начать зарабатывать сразу после обучения.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>64</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>10</strong> процедур</span>
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
<td>🔰 Базовый уход</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Диагностика кожи, подбор средств</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">26 ч / 6 уроков</span></td>
<td>Классический массаж, уходовые процедуры</td>
</tr>
<tr>
<td>🎨 Продвинутый уход</td>
<td><span class="price-highlight">26 ч / 4 урока</span></td>
<td>Механическая чистка, пилинги</td>
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
<li>💡 Диагностировать состояние кожи клиента</li>
<li>🧴 Подбирать косметические средства для различных типов кожи</li>
<li>👐 Выполнять комплексные уходовые процедуры</li>
<li>💆 Практиковать классический массаж лица</li>
<li>🧖 Осуществлять механическую чистку лица</li>
<li>🌟 Выполнять поверхностные пилинги и маски</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на курс в течение акции</p>
<p><strong>📍 Адрес:</strong> г. Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Иркутске</strong> — идеальный выбор для косметологов, которые хотят улучшить свои навыки и получить новые знания о гиперпигментации.</p>
<p>Программа охватывает методики коррекции пигментации, комбинируя пилинги, ретиноиды и феруловый массаж.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом</span>.</p>
<p>Курс поможет вам привлечь больше клиентов благодаря безопасным и эффективным процедурам.</p>
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
<td><span class="price-highlight">1 ак.час</span></td>
<td>Причины появления пигментных пятен, диагностика</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ак.час</span></td>
<td>Алгоритмы подбора процедур, методики коррекции</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак.час</span></td>
<td>Комбинация пилингов и ретиноидов, протоколы лечения</td>
</tr>
<tr>
<td>🚀 Выполнение процедуры</td>
<td><span class="price-highlight">2 ак.часа</span></td>
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
<li>💡 Корректировать гиперпигментацию безопасно</li>
<li>🔍 Подбирать процедуры с учетом фототипа кожи</li>
<li>🔧 Выполнять феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Привлекать клиентов через эффективные процедуры</li>
<li>🌿 Рекомендовать домашний уход для профилактики рецидивов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip">Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 200 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">55 000 ₽</span> <span class="rating-count"><del>91 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в будущем.</p>
<p><strong>📍 Адрес:</strong> Иркутск, ул. Горького, д. 42а</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79914341871">+7 (991) 434-18-71</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://irkutsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">irkutsk.ecolespb.ru</a></p>
</div>
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист (без мед. образования)»</strong> в <strong>Иркутске</strong> — идеальный старт для начинающих мастериц в индустрии красоты и для тех, кто хочет повысить квалификацию.</p>
<p>Программа охватывает аппаратные и ручные процедуры по уходу за лицом и телом, включая массаж и депиляцию.</p>
<p>За <span class="price-highlight">127 ак. часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто уже работает в данной области и хочет улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>127</strong> ак. часов</span> <span><strong>24</strong> урока</span> <span><strong>22</strong> процедуры</span> <span><strong>2-3</strong> месяца</span>
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
<td><span class="price-highlight">64 ч / 12 уроков</span></td>
<td>Диагностика кожи, комплексный уход, решение косметических проблем</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Омолаживание, коррекция фигуры, биоревитализация</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>💆 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический массаж, пластический массаж, массаж по Жаке</td>
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
<li>👩‍🔧 Проводить косметические и аппаратные процедуры</li>
<li>🧖‍♀️ Выполнять массаж лица и SPA-процедуры</li>
<li>✨ Устранять косметические проблемы кожи</li>
<li>🧰 Выполнять депиляцию различными способами</li>
<li>📋 Планировать и вести рабочий кабинет косметолога</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://irkutsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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