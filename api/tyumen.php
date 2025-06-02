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
<!-- Главная карточка "Курсы шугаринга" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы шугаринга</div>
<h2>Курсы шугаринга</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 400 ₽</span> <span class="rating-count"><del>14 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы шугаринга»</strong> в <strong>Тюмени</strong> — идеальный выбор для тех, кто хочет освоить профессию мастера шугаринга.</p>
<p>Программа включает три техники работы с сахарной пастой и практику на реальных клиентах.</p>
<p>За <span class="price-highlight">8 академических часов</span> слушатели получают практическое обучение и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Подходит для начинающих и тех, кто хочет обновить свои знания в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>8</strong> ак. часов</span>
<span><strong>1</strong> урок</span>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техника шугаринга, безопасность, уход за кожей</td>
</tr>
<tr>
<td>🎯 Практика</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Депиляция различных зон, работа с моделями</td>
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
<li>🤔 Работать с разными зонами тела</li>
<li>🔑 Избежать шаблонных ошибок при работе</li>
<li>📋 Уход за кожей после процедуры</li>
<li>🌟 Индивидуальный подход к клиентам</li>
<li>🧑‍🎓 Получить сертификат об окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 200 ₽</span> <span class="rating-count"><del>15 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> доступна на время акций</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852345678">+7 (3852) 34-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://tumen.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://tumen.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметологии SPA»</strong> в <strong>Тюмени</strong> — отличный выбор для всех, кто хочет углубить свои знания в области ухода за кожей и овладеть новыми техниками.</p>
<p>Программа включает обучение основам ароматерапии, обертываниям и пилингам, что позволяет расширить спектр услуг косметолога.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс идеально подходит как для начинающих, так и для профессионалов, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>23</strong> процедуры</span>
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
<td>🔰 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, сочетание эфирных масел</td>
</tr>
<tr>
<td>🎨 Пилинг</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Процедуры эксфолиации и скрабирования</td>
</tr>
<tr>
<td>🌊 Обертывания</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Технология обертываний, показания и противопоказания</td>
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
<li>💆 Владеть техникой SPA-процедур</li>
<li>🌿 Знать правила спа-этикета</li>
<li>🌺 Проводить различные SPA-процедуры</li>
<li>👩‍🏫 Составлять уходовые программы для клиентов</li>
<li>🛁 Понимать показания и противопоказания к процедурам</li>
<li>📈 Расширить спектр своих услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://tumen.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 700 ₽</span> <span class="rating-count"><del>37 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://tumen.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://tumen.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Тюмени</strong> — идеальный старт для людей, желающих получить знания и навыки в сфере аппаратной косметологии.</p>
<p>Программа включает эффективные процедуры, такие как дарсонвализация, микротоки, лазерная биоревитализация и RF-лифтинг.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели проходят практику на моделях и получают <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто уже работает в индустрии и хочет улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>20</strong> процедур</span>
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
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Теория и безопасность, работа с аппаратами</td>
</tr>
<tr>
<td>📈 Дарсонвализация и микротоки</td>
<td><span class="price-highlight">24 ч / 5 уроков</span></td>
<td>Методы и показания, применение в косметологии</td>
</tr>
<tr>
<td>🎨 Лазерные процедуры</td>
<td><span class="price-highlight">24 ч / 5 уроков</span></td>
<td>Лазерная биоревитализация, омоложение</td>
</tr>
<tr>
<td>⚙️ RF-лифтинг и кавитация</td>
<td><span class="price-highlight">24 ч / 5 уроков</span></td>
<td>Коррекция фигуры, анти-эйдж процедуры</td>
</tr>
<tr>
<td>🌿 Аппаратные пилинги</td>
<td><span class="price-highlight">24 ч / 5 уроков</span></td>
<td>Газожидкостный и гидропилинг</td>
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
<li>🧖‍♀️ Выполнять процедуры аппаратного пилинга</li>
<li>✨ Корректировать фигуру с помощью RF-лифтинга и кавитации</li>
<li>💧 Проводить лазерные процедуры и омоложение кожи</li>
<li>📈 Работать с микротоками для улучшения состояния кожи</li>
<li>🔬 Применять дарсонвализацию для лечения и ухода за кожей</li>
<li>💼 Создавать портфолио и привлекать первых клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://tumen.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">8 ак. часов</span> (1 день)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 400 ₽</span> <span class="rating-count"><del>14 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции воском" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции воском»</strong> в <strong>Тюмени</strong> — идеальный выбор для начинающих мастеров, желающих овладеть практическими навыками в сфере красоты.</p>
<p>Программа курса включает в себя изучение базовых техник восковой депиляции, подбор индивидуального подхода и проведение процедур на моделях.</p>
<p>За <span class="price-highlight">8 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Курс отлично подходит как для новичков, так и для тех, кто хочет расширить свой набор услуг.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>8</strong> ак. часов</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы восковой депиляции, техника работы с воском</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Депиляция зон подмышек, голеней, бикини</td>
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
<li>🧖‍♀️ Овладеть техникой восковой депиляции</li>
<li>🧴 Правильно подбирать воск для различных зон</li>
<li>💪 Эффективно проводить процедуры на моделях</li>
<li>🌟 Обеспечивать безопасность и комфорт клиентов</li>
<li>📅 Разрабатывать индивидуальные подходы к каждому клиенту</li>
<li>📋 Получить сертификат об окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">242 ак. часа</span> (9 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">43 200 ₽</span> <span class="rating-count"><del>72 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> ограниченное время</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73822260051">+7 (3822) 260-05-1</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за телом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за телом»</strong> в <strong>Тюмени</strong> — идеальный старт для начинающих и опытных специалистов в бьюти-индустрии.</p>
<p>Программа включает обучение массажу, обертываниям, пилингам и депиляции, а также составлению индивидуальных программ ухода за телом.</p>
<p>За <span class="price-highlight">242 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для профессионалов, желающих расширить свои навыки в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>242</strong> ак. часов</span>
<span><strong>20</strong> уроков</span>
<span><strong>15</strong> процедур</span>
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
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски</td>
</tr>
<tr>
<td>💆‍♀️ Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🧖‍♂️ Депиляция</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники депиляции</td>
</tr>
<tr>
<td>💪 Классический массаж</td>
<td><span class="price-highlight">32 ч / 8 уроков</span></td>
<td>Правила массажа, массаж спины, рук и ног</td>
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
<li>💆‍♂️ Проводить массаж тела</li>
<li>🌿 Разрабатывать программы обертывания и пилинга</li>
<li>✂️ Выполнять восковую депиляцию</li>
<li>🧴 Подбирать профессиональную косметику для ухода за телом</li>
<li>📊 Создавать антицеллюлитные программы</li>
<li>👩‍🎓 Оформлять портфолио и практиковаться на моделях</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-telom&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-telom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">32 ак. часа</span> (2-3 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">26 200 ₽</span> <span class="rating-count"><del>43 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Тюмени</strong> — идеальный старт для начинающих в индустрии красоты.</p>
<p>Программа включает восковую депиляцию и шугаринг, обучая базовым и скоростным техникам удаления волос.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и работающим мастерам, желающим повысить квалификацию и увеличить доход.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>32</strong> ак. часов</span>
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
<td>🔰 Шугаринг</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техника шугаринга, депиляция зоны бикини</td>
</tr>
<tr>
<td>📈 Депиляция</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Восковая депиляция, сложности в профессии</td>
</tr>
<tr>
<td>🎓 Повышение квалификации</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Сложные волоски, скоростные техники</td>
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
<li>💇 Проведение восковой и сахарной депиляции</li>
<li>🎯 Индивидуальный подход к каждому клиенту</li>
<li>🧰 Скоростные техники удаления волос</li>
<li>🔍 Соблюдение гигиенических норм и правил безопасности</li>
<li>📋 Консультирование клиентов по процедурам</li>
<li>📜 Получение диплома, подтверждающего квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">40 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 400 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 400 ₽</span> <span class="rating-count"><del>4 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://tumen.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://tumen.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Тюмени</strong> — идеальный выбор для начинающих косметологов, желающих глубоко понять анатомию лица и принципы дерматологии.</p>
<p>Программа включает изучение типов кожи, санитарных норм и анатомических аспектах, необходимых для устроения рабочего места косметолога.</p>
<p>За <span class="price-highlight">40 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет усовершенствовать свои навыки в косметологии.</p>
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
<span><strong>2 месяца</strong></span>
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
<td>🔰 Введение в дерматологию</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Типы кожи, основные заболевания</td>
</tr>
<tr>
<td>📚 Анатомия лица</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Строение мышц и функций лица, старение кожи</td>
</tr>
<tr>
<td>🧴 Организация рабочего места</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Санитарные нормы, использование косметологических средств</td>
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
<li>🔍 Определять тип кожи и ее состояние</li>
<li>✏️ Понимать анатомические аспекты лица и шеи</li>
<li>🧽 Организовывать безопасное рабочее место косметолога</li>
<li>📏 Понимать причины старения кожи и методы борьбы с ним</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://tumen.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">9 месяцев</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 700 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">51 300 ₽</span> <span class="rating-count"><del>85 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при регистрации сейчас</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Тюмени</strong> — отличная возможность для начала карьеры в индустрии красоты, не требующая медицинского образования.</p>
<p>Программа охватывает как теоретические, так и практические аспекты косметологии, включая косметические и аппаратные процедуры, массаж лица и депиляцию.</p>
<p>За <span class="price-highlight">123 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим мастерам, так и тем, кто хочет улучшить свои навыки в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часов</span> <span><strong>24</strong> уроков</span> <span><strong>22</strong> процедур</span> <span><strong>9</strong> месяцев</span>
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
<td>Строение кожи, Маски</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, Уз-процедуры</td>
</tr>
<tr>
<td>🎨 SPA-косметология</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, Пилинг, Обертывания</td>
</tr>
<tr>
<td>💪 Депиляция</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Первая процедура, Депиляция бикини</td>
</tr>
<tr>
<td>💆 Косметический массаж</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Классическая техника, Пластический массаж</td>
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
<li>🎓 Профессионально выполнять косметические процедуры</li>
<li>💆 Проводить массаж лица и аппараты по уходу</li>
<li>🧰 Техники депиляции и безопасного удаления волос</li>
<li>🌟 Создавать индивидуальные программы ухода за кожей</li>
<li>💼 Стартовать карьеру в индустрии красоты</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс этики и психологии общения с клиентом" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс этики и психологии общения с клиентом</div>
<h2>Курс этики и психологии общения с клиентом</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 200 ₽</span> <span class="rating-count"><del>12 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при регистрации на курс</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73812255667">+7 (3812) 255-667</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://tumen.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://tumen.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом»</strong> в <strong>Тюмени</strong> — идеален для косметологов, которые хотят улучшить свои навыки общения и повысить лояльность клиентов.</p>
<p>Программа включает в себя изучение психотипов клиентов, коммуникации и этики в косметологии.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как для новичков, так и для опытных специалистов, стремящихся расширить свои компетенции.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>4</strong> процедуры</span>
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Коммуникация с клиентом, создание имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Принципы профессиональной этики</td>
</tr>
<tr>
<td>🎨 Корпоративная культура</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры и её влияние</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
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
<li>💡 Выстраивать доверительные отношения с клиентами</li>
<li>👥 Определять психотип клиентов и использовать это в работе</li>
<li>📈 Увеличивать продажи и лояльность клиентов</li>
<li>📝 Осваивать основы профессиональной этики в косметологии</li>
<li>🏆 Повышать свой авторитет среди коллег</li>
<li>🔍 Анализировать мнения клиентов о предоставляемых услугах</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://tumen.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://tumen.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://tumen.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Тюмени</strong> — идеальный выбор для косметологов, желающих расширить свои знания и навыки.</p>
<p>Программа курса включает обучающие модули по безопасной коррекции гиперпигментации и комплексному подходу в уходе за кожей.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдёт как начинающим косметологам, так и тем, кто хочет повысить квалификацию и привлечь больше клиентов.</p>
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
<td>🔰 Введение в гиперпигментацию</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Причины и типы гиперпигментации</td>
</tr>
<tr>
<td>📈 Алгоритмы процедур</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Подбор процедур и анализ анамнеза клиента</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Сочетание пилингов и ретиноидной терапии</td>
</tr>
<tr>
<td>💆‍♀️ Практика ферулового массажа</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Пошаговая техника выполнения</td>
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
<li>🧴 Безопасно корректировать гиперпигментацию</li>
<li>💡 Подбирать процедуры по фототипу кожи</li>
<li>📝 Комбинировать пилинги и ретиноиды</li>
<li>💆‍♀️ Проводить феруловый массаж по методике ARKADIA</li>
<li>📊 Составлять индивидуальные протоколы коррекции</li>
<li>🌟 Увеличивать клиентскую базу за счёт эффективных процедур</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://tumen.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 600 ₽</span> <span class="rating-count"><del>36 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">более 40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/upkeep&sub1=https://tumen.ecolespb.ru/cosmetology-school/upkeep" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/upkeep&sub1=https://tumen.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Тюмени</strong> — это практическое обучение для тех, кто хочет стать косметологом-эстетистом и освоить навыки диагностики и лечения кожи.</p>
<p>Программа охватывает выполнение востребованных косметологических процедур, как домашнего, так и салонного ухода.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет улучшить свои навыки и начать карьеру в сфере красоты.</p>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Строение кожи, уходовые процедуры</td>
</tr>
<tr>
<td>📈 Уход за кожей</td>
<td><span class="price-highlight">30 ч / 8 уроков</span></td>
<td>Чистки, пилинги, маски</td>
</tr>
<tr>
<td>🎨 Карбокситерапия</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Методы карбокситерапии и их применение</td>
</tr>
<tr>
<td>📊 Комплексный уход</td>
<td><span class="price-highlight">36 ч / 8 уроков</span></td>
<td>Составление индивидуальных программ ухода</td>
</tr>
<tr>
<td>🔧 Практика на клиентах</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Опыт работы с моделями и клиентами</td>
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
<li>❤️ Проводить процедуры по очищению и питанию кожи</li>
<li>🧴 Комплексно подбирать уход в зависимости от типа кожи</li>
<li>🔍 Разбираться в уходовой косметике и ее применении</li>
<li>💼 Работать с клиентами и составлять индивидуальные программы ухода</li>
<li>📈 Оценивать потребности клиентов и предлагать эффективные решения</li>
<li>💪 Выполнять карбокситерапию и другие современные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/upkeep&sub1=https://tumen.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">8 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом о профессиональной переподготовке<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/в мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 900 ₽</span> <span class="rating-count"><del>36 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73852285000">+7 (3852) 285-000</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://tumen.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://tumen.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс основы нутрициологии»</strong> в <strong>Тюмени</strong> — это идеальный старт для тех, кто хочет стать профессионалом в области нутрициологии и научится осознанному питанию.</p>
<p>Программа включает изучение принципов рационального питания, дефиниции витаминов и минералов, а также диетологических методов.</p>
<p>За <span class="price-highlight">8 академических часов</span> слушатели получают практические навыки работы с клиентами и <span class="price-highlight">диплом о профессиональной переподготовке</span>.</p>
<p>Подходит для начинающих и желающих повысить свою квалификацию в области здоровья и питания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>8</strong> ак. часов</span>
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
<td>🔰 Наука о питании</td>
<td><span class="price-highlight">8 ч / 4 урока</span></td>
<td>Анатомия пищеварительной системы, принципы здорового питания</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">8 ч / 4 урока</span></td>
<td>Классификация витаминов, достоверные источники питания</td>
</tr>
<tr>
<td>🎯 Коррекция рациона питания</td>
<td><span class="price-highlight">8 ч / 4 урока</span></td>
<td>Диеты, детокс, интервальное голодание</td>
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
<li>🔍 Правильно анализировать состав пищи</li>
<li>📊 Определять потребности в витаминах и минералах</li>
<li>🍽️ Складывать рацион на основе своих нужд</li>
<li>📅 Работать с реальными клиентами и их проблемами</li>
<li>🎓 Получить диплом после успешного завершения курса</li>
<li>💰 Начать зарабатывать в качестве нутрициолога</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://tumen.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">17 400 ₽</span> <span class="rating-count"><del>29 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">41%</span> в актуальный момент времени.</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Тюмени</strong> — отличный выбор для тех, кто хочет освоить современные техники депиляции и повысить профессиональную квалификацию.</p>
<p>Программа включает обучение работе с полимерными восками, скоростным техникам и взаимодействию с клиентами.</p>
<p>За <span class="price-highlight">16 ак. часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подходит как для начинающих, так и для профессионалов, стремящихся улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>4</strong> процедуры</span>
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
<td>Техники, подготовка клиента, виды восков</td>
</tr>
<tr>
<td>📈 Вросшие волоски</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Методы удаления, работа с проблемными зонами</td>
</tr>
<tr>
<td>🎨 Эстетика депиляции</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Коммуникация с клиентом, снятие стресса</td>
</tr>
<tr>
<td>🌟 Продвижение услуг</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Маркетинг, привлечение клиентов, работа в соцсетях</td>
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
<li>🔥 Ускорять процедуру депиляции</li>
<li>🎯 Работать с вросшими волосками</li>
<li>🧘 Найти индивидуальный подход к каждому клиенту</li>
<li>📈 Эффективно продвигать свои услуги</li>
<li>📚 Осваивать современные техники депиляции</li>
<li>💼 Создавать качественное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://tumen.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">123 ак. часа</span> (9 месяцев)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 700 ₽/мес.</span> (на 9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">51 300 ₽</span> <span class="rating-count"><del>85 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Тюмень, ул. Республики, д. 157/1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73452575995">+7 (3452) 575-995</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">tumen.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Тюмени</strong> — идеальный выбор для тех, кто хочет начать карьеру в косметологии без медицинского образования.</p>
<p>Вы освоите популярные косметологические процедуры от диагностики кожи до современных техник массажа лица и аппаратной косметологии.</p>
<p>За <span class="price-highlight">123 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для работающих специалистов, позволяя вам расширить спектр услуг.</p>
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
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски, уходовые процедуры</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметический массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, пластический массаж</td>
</tr>
<tr>
<td>🌿 Окрашивание бровей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Архитектура бровей, профессиональное окрашивание</td>
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
<li>💆 Выполнять косметический массаж лица</li>
<li>🌸 Подбирать и применять маски и пилинги</li>
<li>🎨 Проводить аппаратные процедуры для лица и тела</li>
<li>🌼 Оформлять и красить брови профессионально</li>
<li>💼 Работать с реальными клиентами и вести свою практику</li>
<li>📜 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://tumen.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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