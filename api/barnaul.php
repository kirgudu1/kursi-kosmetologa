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
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс косметологии SPA</div>
<h2>Курс косметологии SPA</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 000 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение всего учебного года</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852462035">+7 (3852) 462-035</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс косметологии SPA»</strong> в <strong>Барнауле</strong> — это идеальное обучение для тех, кто хочет освоить секреты ухода за телом и стать специалистом в области спа-процедур.</p>
<p>Вы изучите обертывания, пилинги и основы ароматерапии, что позволит вам предоставлять широкий спектр услуг клиентам.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдёт как начинающим специалистам, так и тем, кто хочет повысить свою квалификацию и привлечь новых клиентов.</p>
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
<td>💆‍♀️ Ароматерапия</td>
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, изучение масел</td>
</tr>
<tr>
<td>🛁 Пилинг тела</td>
<td><span class="price-highlight">4 ак. часа / 2 урока</span></td>
<td>Разнообразие средств для пилинга и эксфолиации</td>
</tr>
<tr>
<td>🌿 Обертывания</td>
<td><span class="price-highlight">4 ак. часа / 1 урок</span></td>
<td>Технология выполнения горячих и холодных обертываний</td>
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
<li>👩‍⚕️ Владеть техникой SPA-процедур</li>
<li>🛁 Проводить обертывания и пилинги</li>
<li>🌈 Создавать программы по уходу с учётом потребностей клиента</li>
<li>🌺 Применять ароматерапию в работе</li>
<li>💼 Расширить спектр услуг и привлекать новых клиентов</li>
<li>📋 Подтвердить квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 000 ₽</span> <span class="rating-count"><del>33 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций на обучение.</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Барнауле</strong> — отличный старт для тех, кто хочет развиваться в индустрии красоты.</p>
<p>Программа охватывает аппаратные процедуры, такие как дарсонвализация, микротоки, лазерная биоревитализация и RF-лифтинг.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начала карьеры, так и для повышения квалификации действующих косметологов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>42</strong> ак. часа</span>
<span><strong>11</strong> уроков</span>
<span><strong>7</strong> процедур</span>
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
<td>Физиотерапия, аппараты, техника безопасности</td>
</tr>
<tr>
<td>⚙️ Аппаратные процедуры</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Дарсонваль, микротоки, УЗ-процедуры</td>
</tr>
<tr>
<td>🌟 Омолаживающие процедуры</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Лазерная биоревитализация, RF-лифтинг</td>
</tr>
<tr>
<td>🔧 Уходовые процедуры</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Аппаратные пилинги, уход за лицом и телом</td>
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
<li>💡 Выполнять аппаратные пилинги</li>
<li>⚖️ Корректировать фигуру с помощью кавитации и RF-терапии</li>
<li>🔬 Работать с стоматологическими и косметологическими аппаратами</li>
<li>🌅 Проводить омолаживающие процедуры с использованием лазеров и микротоков</li>
<li>🔍 Оценивать состояние кожи и подбирать процедуры</li>
<li>📄 Получить сертификат о подтверждении квалификации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период.</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Барнауле</strong> — идеальный выбор для старт в профессии мастера шугаринга, а также для повышения квалификации.</p>
<p>Вы освоите 3 техники работы с сахарной пастой, будете проходить практику на реальных клиентах и получаете сертификат по окончании.</p>
<p>За <span class="price-highlight">11 ак. часов</span> слушатели получают практику и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как новичкам, так и тем, кто хочет улучшить свои навыки и начать зарабатывать в beauty-индустрии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span> <span><strong>6</strong> уроков</span> <span><strong>2</strong> процедур</span> <span><strong>1-2</strong> дня</span>
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
<td>Техника шугаринга, правила безопасности</td>
</tr>
<tr>
<td>📈 Практика на моделях</td>
<td><span class="price-highlight">6 ч / 3 урока</span></td>
<td>Отработка на реальных клиентах</td>
</tr>
<tr>
<td>🎨 Депиляция бикини</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Эстетика, противопоказания, подготовка клиента</td>
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
<li>💪 Выполнять сахарную депиляцию любых зон</li>
<li>🧰 Работать с инструментами для шугаринга</li>
<li>👩‍🎤 Поддерживать коммуникацию с клиентами</li>
<li>💼 Устранение распространенных ошибок</li>
<li>📋 Подготовка клиента к процедуре</li>
<li>🌸 Уход за кожей после депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение.</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Барнауле</strong> — уникальная возможность стать мастером депиляции, освоив работы с воском и индивидуальный подход к каждому клиенту.</p>
<p>Программа включает в себя отработку навыков на реальных клиентах, освоение базовых техник работы с воском, а также особенности ухода за кожей.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто хочет повысить свою квалификацию и начать зарабатывать сразу после обучения.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Основы восковой депиляции и уход за кожей</td>
</tr>
<tr>
<td>📈 Техники восковой депиляции</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Шпательная и бандажная техники</td>
</tr>
<tr>
<td>🎨 Практика</td>
<td><span class="price-highlight">5 ч / 2 урока</span></td>
<td>Отработка на моделях</td>
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
<li>🧪 Подбирать подходящий воск для разных зон</li>
<li>🚀 Работать с популярными зонами (бикини, подмышки, голени)</li>
<li>📊 Строить эффективную коммуникацию с клиентами</li>
<li>📅 Подготавливать клиентов к процедуре</li>
<li>🎉 Получать сертификат после завершения курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 490 ₽</span> <span class="rating-count"><del>5 800 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период действующих акций</p>
<p><strong>📍 Адрес:</strong> Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://barnaul.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://barnaul.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Барнауле</strong> — это идеальный выбор для косметологов, стремящихся улучшить свои навыки в коррекции гиперпигментации.</p>
<p>Программа включает в себя изучение безопасных методов работы с пилингами и ретиноидами, а также уникальную технику ферулового массажа.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для действующих косметологов, которые хотят повысить свою квалификацию и привлечь больше клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>1 неделя</strong></span>
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
<td>Причины появления пигментных пятен, механизмы формирования</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур с учетом фототипа кожи</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Сочетание химических пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>🚀 Выполнение процедуры</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Техника ферулового массажа: от подготовки кожи до финального ухода</td>
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
<li>⚡ Безопасно корректировать гиперпигментацию</li>
<li>🔍 Подбирать процедуры с учетом сезонности и фототипа кожи</li>
<li>🧴 Использовать комбинации пилингов и ретиноидов для стойкого результата</li>
<li>🤲 Проводить феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>📈 Привлекать больше клиентов через безопасные и эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://barnaul.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 700 ₽</span> <span class="rating-count"><del>14 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Барнауле</strong> — идеальный выбор для профессионалов, стремящихся освоить современные техники удаления волос и повысить качество обслуживания клиентов.</p>
<p>Программа охватывает как базовые, так и продвинутые техники с учетом работы с полимерными восками и особенностями различных зон.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет усовершенствовать свои навыки и повысить доход.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Основы депиляции, работа с восками</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Условия работы с вросшими волосами, психология клиента</td>
</tr>
<tr>
<td>🎨 Техники</td>
<td><span class="price-highlight">4 ч / 3 урока</span></td>
<td>Скоростные техники и бразильское бикини</td>
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
<li>🌟 Осваивать эффективные техники депиляции</li>
<li>🧘 Понимать психологические аспекты работы с клиентами</li>
<li>⚡ Применять скоростные методы удаления волос</li>
<li>👨‍🎓 Подготавливать клиентов к процедурам</li>
<li>📈 Продвигать свои услуги с помощью актуальных трендов</li>
<li>🛠️ Работать с полимерными восками и другими современными средствами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://barnaul.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 400 ₽</span> <span class="rating-count"><del>24 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в ограниченный период.</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Барнауле</strong> — идеальный выбор для начинающих и тех, кто хочет повысить квалификацию в индустрии красоты.</p>
<p>Программа включает обучение восковой депиляции и шугарингу, освоение скоростных техник и индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">38 ак. часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто уже работает в сфере красоты, желающим повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>🔰 Блок шугаринга</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, Депиляция бикини</td>
</tr>
<tr>
<td>📈 Блок депиляции</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Классическая восковая депиляция, Работа с клиентами</td>
</tr>
<tr>
<td>🌟 Блок повышения квалификации</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Сложные техники, Бразильское бикини, Ваксинг лица</td>
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
<li>💁‍♀️ Проведение процедуры депиляции воском и сахаром</li>
<li>🧼 Соблюдение правил гигиены и безопасности на приёме</li>
<li>🤝 Индивидуальный подход к каждому клиенту</li>
<li>📈 Консультирование клиента по процедуре и домашнему уходу</li>
<li>🛠️ Работа с различными техниками на разных зонах тела</li>
<li>📋 Подтверждение квалификации дипломом 4-го разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущей акции</p>
<p><strong>📍 Адрес:</strong> Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://barnaul.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://barnaul.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Барнауле</strong> — идеальный выбор для специалистов, желающих улучшить коммуникацию с клиентами и увеличить свою клиентскую базу.</p>
<p>Вы изучите техники грамотного общения, выявления потребностей клиентов и повышения лояльности.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для новичков, так и для опытных специалистов, стремящихся повысить свой авторитет и улучшить взаимодействие с клиентами.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>3</strong> урока</span>
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
<td>🔰 Введение в психологии общения</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Основы коммуникации, психотипы клиентов</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы профессиональной этики</td>
</tr>
<tr>
<td>🎨 Корпоративная культура</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Формирование эффективной команды</td>
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
<li>💬 Устанавливать доверительные отношения с клиентами</li>
<li>📈 Выявлять потребности клиентов</li>
<li>🤝 Работать с различными психотипами</li>
<li>📜 Соблюдать принципы профессиональной этики</li>
<li>👥 Повышать лояльность клиентов</li>
<li>🏆 Развивать свой авторитет среди коллег</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://barnaul.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 600 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">41 200 ₽</span> <span class="rating-count"><del>68 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в ближайшее время!</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за телом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за телом»</strong> в <strong>Барнауле</strong> — идеальный старт для начинающих и опытных специалистов в сфере косметологии.</p>
<p>Программа включает в себя массаж тела, обертывания, пилинги и депиляцию, что позволяет вам расширить свои навыки в индустрии красоты.</p>
<p>За <span class="price-highlight">95 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для работающих специалистов, желающих поднять свою квалификацию и увеличить доход.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>95</strong> ак. часов</span>
<span><strong>20</strong> уроков</span>
<span><strong>15</strong> процедур</span>
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
<td>📈 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🎉 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Работа с клиентами, депиляция бикини</td>
</tr>
<tr>
<td>🌟 Классический массаж</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Массаж спины, ног, рук, живота, головы</td>
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
<li>💼 Выполнять массажи всех частей тела</li>
<li>🧴 Проводить пилинги и депиляцию</li>
<li>🌸 Составлять программы по уходу за телом</li>
<li>📊 Работать с профессиональной косметикой</li>
<li>🌱 Подбирать маски и обертывания под задачи клиента</li>
<li>📈 Создавать антицеллюлитные программы</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом косметолога<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 000 ₽</span> <span class="rating-count"><del>33 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в рамках текущей акции.</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/upkeep&sub1=https://barnaul.ecolespb.ru/cosmetology-school/upkeep" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/upkeep&sub1=https://barnaul.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Барнауле</strong> — это уникальный старт для тех, кто хочет стать косметологом-эстетистом.</p>
<p>Программа охватывает диагностику кожных проблем и выполнение различных косметологических процедур, включая чистку, пилинг и карбокситерапию.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают опыт практики на моделях и <span class="price-highlight">диплом косметолога</span>.</p>
<p>Идеальный выбор для людей, стремящихся к успешной карьере в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Строение кожи, диагностика, уходовые процедуры</td>
</tr>
<tr>
<td>📈 Процедуры по уходу</td>
<td><span class="price-highlight">14 ч / 5 уроков</span></td>
<td>Чистки, пилинги, маски</td>
</tr>
<tr>
<td>🎯 Специальные техники</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Карбокситерапия, комплексный уход</td>
</tr>
<tr>
<td>📖 Практика на клиентах</td>
<td><span class="price-highlight">32 ч / 14 уроков</span></td>
<td>Практика выполнения процедур</td>
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
<li>✨ Подбирать косметику в зависимости от типа кожи</li>
<li>🔬 Диагностировать состояния кожи</li>
<li>🧖‍♀️ Работать с проблемной кожей</li>
<li>💖 Создавать комплексные программы ухода</li>
<li>📋 Подтверждать квалификацию дипломом косметолога</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/upkeep&sub1=https://barnaul.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 000 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">44 600 ₽</span> <span class="rating-count"><del>74 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист (без мед. образования)»</strong> в <strong>Барнауле</strong> — идеальный выбор для начинающих специалистов в сфере beauty.</p>
<p>Вы освоите косметические и аппаратные процедуры, массаж лица и депиляцию, а также получите практический опыт работы с клиентами.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для уже работающих специалистов, желающих улучшить свои навыки.</p>
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
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🌟 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический, пластический массаж, массаж Жаке</td>
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
<li>💖 Выполнять разные типы массажа лица</li>
<li>🧼 Осваивать технику депиляции</li>
<li>🌺 Разрабатывать корректные программы ухода за кожей</li>
<li>📞 Общаться с клиентами и вести сеансы</li>
<li>🎓 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">43 900 ₽</span> <span class="rating-count"><del>73 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Барнаул, пр-т Комсомольский, д. 80</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852560175">+7 (3852) 560-175</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">barnaul.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Барнауле</strong> — отличный выбор для начинающих мастеров и для тех, кто желает повысить квалификацию в индустрии красоты.</p>
<p>Программа включает популярные косметологические процедуры, такие как уход за кожей, косметический массаж, оформление бровей и освоение современных техник массажа.</p>
<p>За <span class="price-highlight">123 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт начинающим и опытным специалистам для расширения спектра услуг и повышения дохода.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>9</strong> процедур</span>
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
<td>Строение кожи, комплексный уход, маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры</td>
</tr>
<tr>
<td>🎭 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический, пластический массаж</td>
</tr>
<tr>
<td>🖌️ Окрашивание бровей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Архитектура бровей, окрашивание</td>
</tr>
<tr>
<td>🌈 Сложная колористика и стайлинг</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Альтернативные методы, работа с клиентом</td>
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
<li>✅ Проводить косметический массаж лица</li>
<li>✅ Выполнять маски и пилинги для различных типов кожи</li>
<li>✅ Оформлять брови и подбирать подходящие оттенки</li>
<li>✅ Работать с аппаратами для косметологических процедур</li>
<li>✅ Оказывать первую помощь в косметологии</li>
<li>✅ Создавать качественное портфолио и работать с клиентами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://barnaul.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a>
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