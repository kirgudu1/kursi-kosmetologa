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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">10 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">12 400 ₽</span> <span class="rating-count"><del>20 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение.</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс косметологии SPA»</strong> в <strong>Мытищах</strong> — это возможность получить востребованные навыки в сфере cosmetology и улучшить свою квалификацию, чтобы привлечь больше клиентов.</p>
<p>Вы научитесь выполнять популярные техники SPA-процедур, разберётесь в правилах спа-этикета и научитесь создавать программы по уходу за кожей.</p>
<p>За <span class="price-highlight">10 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит для начинающих и тех, кто стремится повысить свою компетенцию в косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>10</strong> ак. часов</span>
<span><strong>3</strong> урока</span>
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
<td>🌿 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы, использование эфирных масел</td>
</tr>
<tr>
<td>🧖‍♀️ Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Технология проведения пилинга, подбор косметики</td>
</tr>
<tr>
<td>📃 Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Горячие и холодные обертывания, индивидуальный подход</td>
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
<li>💆 Проводить SPA-процедуры с использованием ароматерапии</li>
<li>🌸 Создавать программы по уходу за кожей с учетом нужд клиента</li>
<li>🧴 Выполнять популярные обертывания и пилинги</li>
<li>📝 Повышать профессионализм в сфере косметологии</li>
<li>👥 Работать с реальными клиентами во время практики</li>
<li>📜 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Мытищах</strong> — идеальный выбор для косметологов, стремящихся увеличить свою клиентскую базу и повысить лояльность клиентов.</p>
<p>Вы освоите психологические аспекты общения с клиентами и узнаете, как правильно выявить их потребности.</p>
<p>За <span class="price-highlight">4 академических часа</span> участники получают практику на моделях и <span class="price-highlight">диплом</span>.</p>
<p>Курс подойдет как новичкам, так и опытным специалистам, желающим укрепить свои навыки общения.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span>
<span><strong>4</strong> урока</span>
<span><strong>0</strong> процедур</span>
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этапы коммуникации, профессиональный имидж</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Принципы профессиональной этики</td>
</tr>
<tr>
<td>🎭 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование корпоративной культуры</td>
</tr>
<tr>
<td>💬 Психология общения</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов</td>
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
<li>🎯 Выстраивать отношение с клиентами</li>
<li>🔍 Выявлять потребности клиентов</li>
<li>📈 Увеличивать продажи услуг</li>
<li>👥 Разбираться в психотипах клиентов</li>
<li>👔 Повышать свой профессиональный имидж</li>
<li>👐 Работать с корпоративной культурой</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 200 ₽</span> <span class="rating-count"><del>17 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74956678899">+7 (495) 667-88-99</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Мытищах</strong> — идеальный старт для желающих стать мастером депиляции, осваивая ключевые техники работы с воском.</p>
<p>Вы изучите индивидуальный подход к каждому клиенту и научитесь безопасно проводить процедуры в самых популярных зонах.</p>
<p>За <span class="price-highlight">60 ак. часов</span> слушатели получают обширную практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>11</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td>🔰 Введение</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Теория депиляции, инструменты и материалы</td>
</tr>
<tr>
<td>📈 Восковая депиляция</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Техники обработки, шпательная и бандажная методики</td>
</tr>
<tr>
<td>🎨 Практика и уход</td>
<td><span class="price-highlight">24 ч / 3 урока</span></td>
<td>Работа с клиентами и уход за кожей после процедуры</td>
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
<li>🕴️ Овладение техникой восковой депиляции</li>
<li>📏 Подбор индивидуальных средств для различных зон</li>
<li>🙌 Безопасная и качественная работа с клиентами</li>
<li>🌟 Проведение процедур под контролем опытного наставника</li>
<li>🚀 Оптимизация своего рабочего процесса для быстрого старта карьеры</li>
<li>💼 Создание портфолио и навыки self-promotion</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при акциях на обучение</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74951234567">+7 (495) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Основы нутрициологии»</strong> в <strong>Мытищах</strong> — идеальный выбор для тех, кто хочет научиться осознанному питанию и поддерживать здоровье через грамотный рацион.</p>
<p>Программа охватывает основы нутрициологии, виды витаминов и минеральных веществ, а также методы коррекции питания.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс будет полезен как для личного развития, так и для старта карьеры нутрициолога.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
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
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Анатомия пищеварительной системы, правила здорового питания</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Классификация витаминов, гипервитаминоз, источники</td>
</tr>
<tr>
<td>🎯 Коррекция рациона</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Методы диет, основы безопасности питания, функциональные добавки</td>
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
<li>🍏 Выбирать правильные продукты для рациона</li>
<li>📊 Рассчитывать суточные потребности в питательных веществах</li>
<li>🍽️ Создавать индивидуальные диеты для клиентов</li>
<li>🧪 Определять нужды в витаминах и минералах</li>
<li>📋 Проводить консультации по питанию</li>
<li>📝 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 900 ₽</span> <span class="rating-count"><del>36 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при наличии сезонных акций</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Мытищах</strong> — замечательный выбор для тех, кто хочет освоить востребованную профессию и начать карьеру в beauty-индустрии.</p>
<p>Программа включает изучение высокотехнологичных аппаратов и популярных процедур ухода за кожей.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практические навыки работы на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для специалистов, желающих обновить свои знания и навыки.</p>
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
<td>🔰 Основы</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Теория и безопасность работы с аппаратами</td>
</tr>
<tr>
<td>📊 УЗ-процедуры</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>УЗ-пилинг, фонофорез, УЗ-массаж</td>
</tr>
<tr>
<td>🎯 Аппаратные пилинги</td>
<td><span class="price-highlight">16 ч / 3 урока</span></td>
<td>Гидропилинг, газожидкостный пилинг</td>
</tr>
<tr>
<td>💫 Коррекция фигуры</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>RF-лифтинг, кавитация</td>
</tr>
<tr>
<td>🌟 Микротоковая терапия</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Устранение морщин, улучшение тонуса</td>
</tr>
<tr>
<td>✨ Лазерные методы</td>
<td><span class="price-highlight">20 ч / 3 урока</span></td>
<td>Лазерная биоревитализация и омоложение</td>
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
<li>🔍 Выполнять аппаратные пилинги</li>
<li>🌬️ Проводить УЗ-процедуры для лица и тела</li>
<li>⚙️ Корректировать фигуру с помощью RF-терапии</li>
<li>💧 Осваивать техники микротоковой терапии</li>
<li>🧪 Использовать лазерные методы для омоложения</li>
<li>📊 Работать на различных аппаратах для процедур</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы шугаринга" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы шугаринга</div>
<h2>Курсы шугаринга</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 200 ₽</span> <span class="rating-count"><del>17 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы шугаринга»</strong> в <strong>Мытищах</strong> — отличный выбор для тех, кто хочет начать карьеру в beauty-индустрии.</p>
<p>Программа включает освоение нескольких техник сахарной депиляции и работу с популярными зонами.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет углубить свои знания и навыки в шугаринге.</p>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Правила безопасности, выбор инструментов, уход за кожей</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Депиляция подмышек, голеней и бикини</td>
</tr>
<tr>
<td>🎯 Работа с клиентами</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Эффективная коммуникация, решение конфликтов.</td>
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
<li>🧰 Работать с профессиональными инструментами</li>
<li>👩‍🏫 Понимать индивидуальный подход к клиентам</li>
<li>🧴 Ухаживать за кожей после шугаринга</li>
<li>📈 Строить карьеру мастера шугаринга</li>
<li>🤝 Привлекать и удерживать клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 недели</span> (38 ак. часов практики)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">5 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 000 ₽</span> <span class="rating-count"><del>50 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущей акции</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74957460000">+7 (495) 746-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Мытищах</strong> — идеальный выбор для начинающих и опытных специалистов, стремящихся изучить актуальные методики удаления волос.</p>
<p>Обучение включает технику восковой и сахарной депиляции, включая сложные зоны.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет повысить свою квалификацию и быстро начать зарабатывать.</p>
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
<td>🔰 Шугаринг</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, работа с клиентами</td>
</tr>
<tr>
<td>🔰 Восковая депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, обработка кожи</td>
</tr>
<tr>
<td>📈 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Сложные техники, работа с бразильским бикини</td>
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
<li>🧖 Проведение восковой и сахарной депиляции на разных зонах</li>
<li>💼 Работа с различными типами волос и клиентов</li>
<li>📏 Атестация по соблюдению гигиены и безопасности</li>
<li>🗣️ Консультирование клиентов по уходу после процедур</li>
<li>🌟 Индивидуальный подход к каждому клиенту</li>
<li>📋 Получение диплома 4-го квалификационного разряда</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (по договоренности)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">25 500 ₽</span> <span class="rating-count"><del>42 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> сейчас можно выгодно начать обучение.</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/upkeep&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/upkeep" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/upkeep&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Мытищах</strong> — отличный старт для тех, кто хочет стать косметологом-эстетистом и получить практические навыки.</p>
<p>Программа включает в себя изучение диагностики и лечения кожи, а также выполнение популярных косметологических процедур.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как для начинающих, так и для тех, кто уже работает в сфере красоты и хочет повысить свою квалификацию.</p>
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
<td>🔰 Теория и основы</td>
<td><span class="price-highlight">60 ч / 12 уроков</span></td>
<td>Строение кожи, типы коже, уходовая косметика</td>
</tr>
<tr>
<td>📈 Косметические процедуры</td>
<td><span class="price-highlight">36 ч / 8 уроков</span></td>
<td>Чистки, пилинги, маски</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">30 ч / 4 урока</span></td>
<td>Карбокситерапия, механическая чистка, комплексный уход</td>
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
<li>💆 Проводить диагностику и лечение кожи</li>
<li>🧖 Выполнять профессиональные косметические процедуры</li>
<li>🔍 Составлять индивидуальные схемы ухода</li>
<li>💰 Начинать карьеру с доходом от 60 000 ₽</li>
<li>💡 Работать с профессиональной уходовой косметикой</li>
<li>📋 Получить диплом о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/upkeep&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 000 ₽/мес.</span> (12 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">72 500 ₽</span> <span class="rating-count"><del>120 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в рамках специального предложения</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметик-эстетист по уходу за лицом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметик-эстетист по уходу за лицом»</strong> в <strong>Мытищах</strong> — отличный старт для начинающих мастеров и тех, кто хочет повысить квалификацию в сфере красоты.</p>
<p>Программа охватывает популярные косметологические процедуры и техники, включая массажи и пилинги.</p>
<p>За <span class="price-highlight">123 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подойдет как начинающим, так и тем, кто уже работает в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>123</strong> ак. часов</span> <span><strong>24</strong> урока</span> <span><strong>8</strong> процедур</span> <span><strong>2-3 месяца</strong></span>
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
<td>Блок эстетической косметологии</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, Маски, Пилинги</td>
</tr>
<tr>
<td>Блок аппаратной косметологии</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, Коррекция фигуры</td>
</tr>
<tr>
<td>Блок косметического массажа лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классическая техника, Пластический массаж, Массаж в методике Жаке</td>
</tr>
<tr>
<td>Блок коррекции и окрашивания бровей</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Архитектура бровей, Окрашивание бровей</td>
</tr>
<tr>
<td>Блок стайлинга и сложной колористики бровей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Альтернативные методы, Колористика, Работа с клиентом</td>
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
<li>💆 Проводить косметический массаж лица различных техник</li>
<li>🌱 Осуществлять уход за кожей с помощью масок и пилингов</li>
<li>🎨 Профессионально оформлять и окрашивать брови</li>
<li>📈 Работать с современными аппаратами для косметологических процедур</li>
<li>📋 Подбирать индивидуальные уходовые программы для клиентов</li>
<li>🏆 Подтвердить квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-uhod-za-licom&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-uhod-za-licom" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы дерматологии и анатомии лица" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы дерматологии и анатомии лица</div>
<h2>Курсы дерматологии и анатомии лица</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">32 ак. часа</span> (4 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 300 ₽/мес.</span> (1 месяц)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 900 ₽</span> <span class="rating-count"><del>5 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">30%</span> на обучение в данный момент.</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы дерматологии и анатомии лица»</strong> в <strong>Мытищах</strong> — отличная возможность для начинающих косметологов освоить базовые навыки в дерматологии и анатомии.</p>
<p>Программа охватывает изучение типов кожи, анатомии лица и шеи, а также санитарные нормы в косметологии.</p>
<p>За <span class="price-highlight">32 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подойдет как для начинающих, так и для профессионалов, желающих обновить свои знания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>32</strong> ак. часа</span> <span><strong>8</strong> уроков</span> <span><strong>5</strong> процедур</span> <span><strong>4 недели</strong></span>
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
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Анатомия лица, пигментация и ее коррекция</td>
</tr>
<tr>
<td>🎨 Анти-эйдж процедуры</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Процессы старения кожи, уход за кожей по возрасту</td>
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
<li>🛠️ Организовывать рабочее место косметолога</li>
<li>👩‍🔬 Разбираться в типах кожи и их особенностях</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>📉 Знать методы замедления старения кожи</li>
<li>📋 Применять санитарные нормы в косметологической практике</li>
<li>💼 Создавать портфолио работ</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 дня)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">не доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">12 500 ₽</span> <span class="rating-count"><del>20 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс.</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74952345566">+7 (495) 234-55-66</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Мытищах</strong> — для мастеров, желающих освоить современные техники депиляции и работать с полимерными восками.</p>
<p>Программа охватывает все аспекты быстрой и качественной депиляции на любых зонах, включая работу с вросшими волосками.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и опытным мастерам, стремящимся повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> отработки на практике</span>
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
<td>Теория и практика депиляции, работа с полимерными восками</td>
</tr>
<tr>
<td>📈 Удаление вросших волосков</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техники работы с вросшими волосами</td>
</tr>
<tr>
<td>🎨 Бразильское бикини</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Пошаговая депиляция глубокого бикини</td>
</tr>
<tr>
<td>💡 Ваксинг лица</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Удаление нежелательных волосков с зоны лица</td>
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
<li>🌟 Выполнять скоростные техники депиляции</li>
<li>🧠 Найти подход к любому клиенту</li>
<li>✂️ Работать с полимерными восками</li>
<li>🏆 Устойчиво удалять вросшие волоски</li>
<li>📢 Эффективно продвигать свои услуги в beauty-индустрии</li>
<li>📊 По окончании курса - полноценный диплом мастера</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> выгодное предложение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Мытищах</strong> — идеальное решение для косметологов, желающих расширить свои навыки и получить актуальные знания в области пилингов и гиперпигментации.</p>
<p>Программа включает в себя изучение безопасных методик пилингов, ретиноидов и авторских методов, таких как феруловый массаж.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом</span>.</p>
<p>Курс будет полезен как начинающим, так и опытным специалистам, желающим привлечь больше клиентов и повысить свою квалификацию.</p>
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
<td>Причины пигментации, диагностика</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетание пилингов и ретиноидов</td>
</tr>
<tr>
<td>💆 Выполнение процедуры</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
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
<li>📊 Корректировать гиперпигментацию</li>
<li>🔬 Подбирать процедуры по фототипу кожи</li>
<li>💡 Использовать феруловый массаж</li>
<li>🧪 Составлять индивидуальные протоколы</li>
<li>🏷️ Привлекать больше клиентов</li>
<li>📝 Подбирать домашний уход</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Возможно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">76 300 ₽</span> <span class="rating-count"><del>127 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при наличии акций</p>
<p><strong>📍 Адрес:</strong> г. Мытищи, ул. 3-я Крестьянская, д. 23</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79104182079">+7 (910) 418-20-79</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">mytishchi.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Мытищах</strong> — это идеальный старт для начинающих специалистов в индустрии красоты.</p>
<p>Программа охватывает техники по уходу за лицом и телом, включая массаж и аппаратные процедуры.</p>
<p>За <span class="price-highlight">126 ак. часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для специалистов, желающих углубить свои навыки.</p>
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
<td>Строение кожи, маски, пилинги</td>
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
<td>🏆 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Первая процедура, депиляция бикини</td>
</tr>
<tr>
<td>💆 Косметический массаж лица</td>
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
<li>💆 Проводить механическую и аппаратную чистку кожи</li>
<li>🎯 Осваивать три вида массажа лица</li>
<li>🧰 Выполнять восковую депиляцию</li>
<li>🎨 Подбирать маски и пилинги</li>
<li>🌸 Проводить аппаратные процедуры по омоложению</li>
<li>📋 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://mytishchi.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://mytishchi.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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