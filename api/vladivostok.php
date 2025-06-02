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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 дня)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 200 ₽</span> <span class="rating-count"><del>22 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент.</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Красного Знамени, д. 5</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Владивостоке</strong> — идеальный выбор для косметологов, стремящихся освоить современные техники депиляции.</p>
<p>Программа обучения включает работу с полимерными восками и скоростные техники удаления волос.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Курс подходит для начинающих и профессионалов, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
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
<td>🔰 Введение в депиляцию</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы, подготовка к процедуре, работа с клиентом</td>
</tr>
<tr>
<td>🚀 Скоростные техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Персидская дорожка, итальянская глазурь</td>
</tr>
<tr>
<td>🌿 Работа с восками</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Полимерные воски, эффективность использования</td>
</tr>
<tr>
<td>🌸 Бразильское бикини</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Пошаговая техника, противопоказания</td>
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
<li>🌟 Ускорять процедуру депиляции</li>
<li>💡 Работать с вросшими волосками</li>
<li>🧠 Понимать психологию клиента</li>
<li>📈 Продвигать свои услуги</li>
<li>⚡ Применять скоростные техники удаления волос</li>
<li>🔧 Подбирать индивидуальный подход к каждому клиенту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 200 ₽</span> <span class="rating-count"><del>3 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Ленина, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Владивостоке</strong> — уникальная возможность для будущих косметологов ознакомиться с основами дерматологии и анатомией лица.</p>
<p>Программа охватывает изучение типов кожи, анатомии и санитарных норм работы косметолога.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и тем, кто хочет освежить знания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>2</strong> ак. часа</span>
<span><strong>2</strong> урока</span>
<span><strong>1</strong> процедура</span>
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
<td>🔰 Основы дерматологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Типы кожи, основы ухода за кожей</td>
</tr>
<tr>
<td>📈 Анатомия лица и шеи</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Строение и функции кожи, анатомия мышц</td>
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
<li>🔍 Определять типы кожи</li>
<li>🧼 Понимать санитарные нормы косметолога</li>
<li>🧘‍♀️ Осваивать приемы антивозрастной коррекции</li>
<li>💡 Разбираться в анатомии шеи и лица</li>
<li>📊 Организовывать рабочее место косметолога</li>
<li>💼 Подготавливать кабинет к работе</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span>
</span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 500 ₽</span> <span class="rating-count"><del>10 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в ограниченный период времени</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Приморская, д. 12</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы этики и психологии общения с клиентом в косметологии»</strong> в <strong>Владивостоке</strong> — идеальный выбор для тех, кто хочет повысить лояльность клиентов и увеличить продажи.</p>
<p>Программа охватывает техники выявления потребностей клиентов и построения гармоничных взаимоотношений.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как начинающим косметологам, так и опытным специалистам, желающим повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> процедур</span>
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Коммуникация с клиентом, создание профессионального имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Правила общения и понимания мнения клиента</td>
</tr>
<tr>
<td>🎯 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование успешной корпоративной культуры</td>
</tr>
<tr>
<td>🗣 Психология общения</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
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
<li>😌 Выстраивать положительные отношения с клиентами</li>
<li>📝 Правильно выявлять потребности клиентов</li>
<li>🌟 Превращать сложных клиентов в лояльных</li>
<li>🏆 Повышать авторитет среди коллег</li>
<li>💼 Эффективно взаимодействовать в коллективе</li>
<li>📈 Увеличивать продажи своих услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 900 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 600 ₽</span> <span class="rating-count"><del>14 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Приморская, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Владивостоке</strong> — идеальное решение для тех, кто хочет начать карьеру в beauty-индустрии.</p>
<p>Программа включает изучение техник дарсонвализации, микротоков, лазерной биоревитализации и других процедур.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получат практику на моделях и <span class="price-highlight">сертификат об окончании</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Физиотерапия, технологии и техники, безопасность</td>
</tr>
<tr>
<td>📈 Процедуры омоложения</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Лазерная биоревитализация, микротоковая терапия</td>
</tr>
<tr>
<td>🎨 Аппаратные пилинги</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Газожидкостный и гидропилинг</td>
</tr>
<tr>
<td>💪 Коррекция фигуры</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>RF-лифтинг, кавитация</td>
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
<li>📏 Справляться с проблемами коррекции фигуры</li>
<li>🔬 Использовать современные технологии для омоложения кожи</li>
<li>🧖 Работать с различными косметологическими аппаратами</li>
<li>📑 Создавать индивидуальные программы для клиентов</li>
<li>🌟 Формировать собственное портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1-2 дня)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span>
</span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 000 ₽</span> <span class="rating-count"><del>18 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Примерная, д. 1</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Владивостоке</strong> — идеальный выбор для тех, кто хочет освоить базовые техники работы с воском и стать мастером депиляции.</p>
<p>Программа охватывает основные техники восковой депиляции и особенности подбора воска в зависимости от зон.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет обновить свои знания и начать работу в индустрии красоты.</p>
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
<td>Основы восковой депиляции, правила безопасности</td>
</tr>
<tr>
<td>📂 Технологии депиляции</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Техники шпательной и бандажной депиляции</td>
</tr>
<tr>
<td>🌟 Практика на моделях</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Депиляция различных зон на реальных клиентах</td>
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
<li>🕵️‍♀️ Подбирать индивидуальный подход к клиенту</li>
<li>💁‍♀️ Овладевать техникой восковой депиляции</li>
<li>✋ Проводить процедуры депиляции в безопасной обстановке</li>
<li>📈 Развивать клиентскую базу и работать с клиентами</li>
<li>🔍 Уход за кожей до и после депиляции</li>
<li>🎓 Получать сертификат после окончания курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">10 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">17 700 ₽</span> <span class="rating-count"><del>28 300 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при текущих акциях</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Светланская, д. 10</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/upkeep&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/upkeep" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/upkeep&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Владивостоке</strong> — это практическое обучение для начинающих косметологов, желающих освоить современные методы ухода за кожей.</p>
<p>Программа охватывает косметологические процедуры, включая чистки, пилинги, маски и карбокситерапию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить квалификацию и начать карьеру в индустрии красоты.</p>
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
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Строение кожи, основные процедуры ухода</td>
</tr>
<tr>
<td>🎨 Уходовые процедуры</td>
<td><span class="price-highlight">20 ч / 10 уроков</span></td>
<td>Чистки, пилинги, маски</td>
</tr>
<tr>
<td>🌟 Карбокситерапия</td>
<td><span class="price-highlight">8 ч / 4 урока</span></td>
<td>Техника выполнения и показания</td>
</tr>
<tr>
<td>📊 Комплексный уход</td>
<td><span class="price-highlight">10 ч / 6 уроков</span></td>
<td>Составление комплексных программ ухода</td>
</tr>
<tr>
<td>🚀 Практическое применение</td>
<td><span class="price-highlight">30 ч / 2 урока</span></td>
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
<li>💧 Выполнять косметологические процедуры по уходу за кожей</li>
<li>🧪 Составлять индивидуальные программы по уходу</li>
<li>🎯 Оценивать тип кожи и подбирать соответствующие процедуры</li>
<li>💼 Работать с профессиональной косметикой</li>
<li>📋 Достигать высоких результатов при работе с клиентами</li>
<li>🌟 Формировать портфолио выполненных работ</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/upkeep&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (1 день обучения + отработка)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 000 ₽</span> <span class="rating-count"><del>18 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> предлагается на данный момент.</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Оcean, д. 15</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79322223344">+7 (932) 222-33-44</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Владивостоке</strong> — идеальный выбор для тех, кто хочет обучиться этой востребованной процедуре и начать карьеру.</p>
<p>Программа охватывает три техники работы с сахарной пастой и включает отработку на реальных моделях.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет усовершенствовать свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Техники работы с сахарной пастой</td>
</tr>
<tr>
<td>📈 Депиляция различных зон</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Подмышки, ноги, бикини</td>
</tr>
<tr>
<td>🎯 Коммуникация с клиентами</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Эффективные методы общения и решения конфликтов</td>
</tr>
<tr>
<td>🌿 Уход за кожей</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Подготовка кожи, уход после процедуры</td>
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
<li>🧑‍🎤 Выполнять сахарную депиляцию различных зон</li>
<li>🛠️ Правильно выбирать инструменты и материалы</li>
<li>🤝 Эффективно общаться с клиентами</li>
<li>🌟 Уход за кожей после процедуры</li>
<li>📝 Разрабатывать индивидуальные планы работы с клиентами</li>
<li>📋 Подтверждать квалификацию дипломом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span> (2–3 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">33 100 ₽</span> <span class="rating-count"><del>55 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период активных акций</p>
<p><strong>📍 Адрес:</strong> г. Владивосток, ул. Ленина, д. 45</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74951234567">+7 (495) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Владивостоке</strong> — отличное начало для тех, кто хочет освоить востребованные методы удаления волос.</p>
<p>В программе освойте восковую депиляцию и шугаринг, отработайте скоростные техники.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подходит как для начинающих, так и для уже работающих мастеров, стремящихся повысить квалификацию.</p>
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
<span><strong>2–3</strong> недели</span>
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
<td>Техника шугаринга, первая процедура, работа с клиентами</td>
</tr>
<tr>
<td>📈 Депиляция воском</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, первая процедура, работа с клиентами</td>
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
<li>💪 Проводить процедуру депиляции воском на разных зонах</li>
<li>🍯 Работать с сахарной пастой в различных техниках</li>
<li>🌟 Депилировать всех частей тела, включая глубокое бикини</li>
<li>🧼 Соблюдать правила гигиены и безопасности на приеме</li>
<li>🗣️ Консультировать клиента по процедуре и домашнему уходу</li>
<li>💼 Индивидуальный подход к каждому клиенту</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span>
</span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> Владивосток</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Владивостоке</strong> — это программа для косметологов, стремящихся глубже изучить техники пилингов и работу с гиперпигментацией.</p>
<p>Вы освоите методы безопасной коррекции гиперпигментации, феруловый массаж и другие актуальные подходы в косметологии.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих расширить свои навыки.</p>
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
<td>Причины и диагностика гиперпигментации</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетание методов для лучшего эффекта</td>
</tr>
<tr>
<td>✨ Выполнение процедуры</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
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
<li>📊 Безопасно корректировать гиперпигментацию</li>
<li>🔍 Подбирать процедуры с учетом фототипа кожи</li>
<li>🧴 Комбинировать пилинги и домашний уход</li>
<li>💆‍♀️ Проводить феруловый массаж по авторской методике</li>
<li>📈 Составлять индивидуальные протоколы коррекции</li>
<li>🤝 Привлекать больше клиентов через эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">28 600 ₽</span> <span class="rating-count"><del>47 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Ленина, д. 12</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005008274">+7 (800) 500-82-74</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Владивостоке</strong> — это идеальный старт для тех, кто хочет развиваться в сфере красоты и стать профессионалом.</p>
<p>В программе курса изучаются практические и теоретические навыки выполнения косметических процедур, включая массаж, депиляцию и аппаратную косметологию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для начинающих мастеров, а также для тех, кто желает расширить свои навыки в индустрии красоты.</p>
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
<td>💆 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>👐 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, пластический массаж, технология жаке</td>
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
<li>💆 Проводить механическую и аппаратную чистку кожи</li>
<li>🎯 Выполнять три вида массажа лица</li>
<li>🧰 Осваивать восковую депиляцию и безопасные техники удаления волос</li>
<li>🎨 Подбирать маски, пилинги и обертывания под задачи клиента</li>
<li>🌸 Выполнять аппаратные процедуры по омоложению и коррекции фигуры</li>
<li>📋 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 300 ₽</span> <span class="rating-count"><del>8 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">более 40%</span> на обучение с учетом акций</p>
<p><strong>📍 Адрес:</strong> Владивосток, ул. Русская, д. 12</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79101234567">+7 (910) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">vladivostok.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметология SPA»</strong> в <strong>Владивостоке</strong> — идеальный выбор для тех, кто хочет развиваться в индустрии красоты, улучшать навыки и предлагать своим клиентам уходовые процедуры.</p>
<p>В программе вы изучите SPA-техники, обертывания, ароматерапию и основы спа-этикета.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих расширить свои навыки.</p>
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
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Создание расслабляющей атмосферы, правила сочетания масел</td>
</tr>
<tr>
<td>📦 Пилинги</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Косметические продукты для пилинга, скрабирования</td>
</tr>
<tr>
<td>🎀 Обертывания</td>
<td><span class="price-highlight">4 ч / 3 урока</span></td>
<td>Выполнение горячих и холодных обертываний</td>
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
<li>👩‍🎓 Владеть техникой SPA-процедур</li>
<li>💆 Проводить обертывания и пилинги</li>
<li>🌿 Использовать ароматерапию в практике</li>
<li>📝 Составлять программы по уходу за кожей тела</li>
<li>📈 Повысить профессионализм и привлечь новых клиентов</li>
<li>✨ Создавать расслабляющую атмосферу для клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://vladivostok.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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