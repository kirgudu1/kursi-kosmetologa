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
<!-- Главная карточка "Курс депиляции" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс депиляции</div>
<h2>Курс депиляции</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 400 ₽</span> <span class="rating-count"><del>10 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс.</p>
<p><strong>📍 Адрес:</strong> Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Казани</strong> — отличный шанс освоить базовые техники работы с воском и начать карьеру в beauty-индустрии.</p>
<p>Программа включает в себя техники восковой депиляции, индивидуальный подход к каждому клиенту и отработку навыков на реальных моделях.</p>
<p>За <span class="price-highlight">1-2 дня</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Курс подойдет как для новичков, так и для тех, кто хочет улучшить свои навыки и получить дополнительный доход.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>2</strong> урока</span>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Подбор воска, правила безопасности</td>
</tr>
<tr>
<td>📈 Техники депиляции</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Шпательная и бандажная техника</td>
</tr>
<tr>
<td>🎨 Практика</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Депиляция различных зон, общение с клиентами</td>
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
<li>💇 Овладеть техникой восковой депиляции</li>
<li>🔍 Подбирать воск для разных зон</li>
<li>👥 Работать с клиентами и строить коммуникацию</li>
<li>💼 Организовывать свою работу как мастер депиляции</li>
<li>📅 Проводить процедуру на разных типах кожи</li>
<li>✅ Получать клиентов и повышать свою стоимость услуг</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы интегративной нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы интегративной нутрициологии</div>
<h2>Курсы интегративной нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (6–12 недель)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при регистрации на курс</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79012345678">+7 (901) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы интегративной нутрициологии»</strong> в <strong>Казани</strong> — идеальный выбор для тех, кто стремится стать профессионалом в области питания.</p>
<p>Вы получите знания о рациональном питании и его влиянии на здоровье, а также освоите практические навыки составления диет для различных категорий клиентов.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт тем, кто хочет работать нутрициологом или просто улучшить свои навыки в области здравоохранения и красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>10</strong> процедур</span>
<span><strong>6–12</strong> недель</span>
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
<td>🔰 Основы нутрициологии</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Принципы питания, базовые правила составления рациона</td>
</tr>
<tr>
<td>📈 Анатомия и физиология</td>
<td><span class="price-highlight">16 ч / 6 уроков</span></td>
<td>Понимание работы организма и его потребностей</td>
</tr>
<tr>
<td>💡 Психология питания</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Работа с запросами клиентов, анализ пищевого поведения</td>
</tr>
<tr>
<td>🍏 Практика питания</td>
<td><span class="price-highlight">8 ч / 4 урока</span></td>
<td>Составление индивидуальных программ питания</td>
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
<li>📊 Разрабатывать рацион питания для разных категорий клиентов</li>
<li>📋 Проводить анализ пищевого поведения</li>
<li>🔥 Определять физиологические потребности в питательных веществах</li>
<li>🌟 Работать с клиентами в индивидуальном порядке</li>
<li>👌 Консультировать по вопросам питания и образа жизни</li>
<li>📝 Создавать программы питания для специальных групп населения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">20 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступно</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 000 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">более чем 40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432456789">+7 (843) 245-67-89</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Казани</strong> — отличная возможность для косметологов, желающих повысить лояльность клиентов и узнать, как эффективно выявлять их потребности.</p>
<p>Программа обучает коммуникации с клиентами и основам профессиональной этики в косметологии.</p>
<p>За <span class="price-highlight">20 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подойдёт как начинающим специалистам, так и опытным косметологам, стремящимся повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>20</strong> ак. часов</span>
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
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Коммуникация с клиентом, создание имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Принципы профессиональной этики</td>
</tr>
<tr>
<td>🎉 Корпоративная культура</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Формирование корпоративной культуры</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Типы клиентов и первичная консультация</td>
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
<li>💬 Выстраивать положительные отношения с клиентами</li>
<li>🧩 Узнавать психотипы клиентов и выявлять потребности</li>
<li>🌟 Повышать авторитет среди коллег</li>
<li>📈 Увеличивать продажи своих услуг</li>
<li>🎯 Эффективно работать с сложными клиентами</li>
<li>🤝 Создавать комфортные условия для общения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 100 ₽</span> <span class="rating-count"><del>36 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при акциях и специальных предложениях</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/upkeep" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Казани</strong> — профессиональная подготовка для начинающих косметологов с акцентом на практические навыки.</p>
<p>Программа включает диагностику, лечение кожи и выполнение популярных косметологических процедур.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Идеальный выбор для тех, кто хочет начать карьеру в индустрии красоты и получать стабильный доход.</p>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">26 ч / 5 уроков</span></td>
<td>Строение кожи, уходовые процедуры</td>
</tr>
<tr>
<td>📈 Практические техники</td>
<td><span class="price-highlight">56 ч / 12 уроков</span></td>
<td>Чистка, пилинги, маски</td>
</tr>
<tr>
<td>🎨 Карбокситерапия</td>
<td><span class="price-highlight">44 ч / 7 уроков</span></td>
<td>Методы восстановления кожи, уходовые программы</td>
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
<li>🔬 Выполнять процедуры по уходу за кожей</li>
<li>🧴 Подбирать уходовую косметику для различных типов кожи</li>
<li>🌿 Использовать современные технологии в косметологии</li>
<li>💉 Овладевать техникой карбокситерапии</li>
<li>📋 Составлять комплексные уходовые программы</li>
<li>🗂️ Получать сертификаты об успешном прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">7 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Казани</strong> — идеальный выбор для косметологов, стремящихся улучшить свои навыки в работе с гиперпигментацией.</p>
<p>Программа включает в себя теорию и практику, знакомя слушателей с методами безопасной коррекции гиперпигментации и комбинирования процедур.</p>
<p>За <span class="price-highlight">7 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для начинающих, так и для опытных мастеров, желающих повысить свою квалификацию и привлечь больше клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>7</strong> ак. часов</span> <span><strong>3</strong> урока</span> <span><strong>3</strong> процедуры</span> <span><strong>3–5</strong> недель</span>
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
<td>Причины появления пигментных пятен, механизмы формирования</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">2 ак. часа</span></td>
<td>Алгоритмы подбора процедур с учетом фототипа кожи</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">2 ак. часа</span></td>
<td>Сочетание химических пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>🚀 Выполнение процедуры</td>
<td><span class="price-highlight">2 ак. часа</span></td>
<td>Техника ферулового массажа от подготовки до финального ухода</td>
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
<li>🔍 Подбирать процедуры с учетом фототипа кожи</li>
<li>👌 Комбинировать пилинги и феруловый массаж</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🌟 Привлекать больше клиентов благодаря эффективным процедурам</li>
<li>📈 Заниматься домашним уходом для закрепления результатов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">23 800 ₽</span> <span class="rating-count"><del>39 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Казани</strong> — идеальный выбор для тех, кто хочет начать карьеру в косметологии или улучшить свои навыки.</p>
<p>Программа охватывает методы дарсонвализации, микротоков, лазерной биоревитализации, УЗ-процедур, RF-лифтинга и кавитации.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам, так и опытным мастерам, желающим повысить свою квалификацию.</p>
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
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">30 ч / 8 уроков</span></td>
<td>Физиотерапия, дарсонвализация, микротоки</td>
</tr>
<tr>
<td>📈 УЗ-процедуры</td>
<td><span class="price-highlight">30 ч / 7 уроков</span></td>
<td>УЗ-пилинг, фонофорез, УЗ-чистка лица</td>
</tr>
<tr>
<td>🎨 Лазерная и RF-терапия</td>
<td><span class="price-highlight">30 ч / 5 уроков</span></td>
<td>Кавитация, RF-лифтинг, лазерная биоревитализация</td>
</tr>
<tr>
<td>✨ Аппаратные пилинги</td>
<td><span class="price-highlight">36 ч / 4 урока</span></td>
<td>Газожидкостный пилинг, гидропилинг</td>
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
<li>💎 Проводить аппаратные процедуры с использованием различных технологий</li>
<li>🏆 Выполнять процедуры пилинга с помощью аппаратов</li>
<li>🎯 Овладеть методами коррекции фигуры</li>
<li>✨ Освоить навыки лазерной терапии</li>
<li>📈 Проводить процедуры омоложения кожи</li>
<li>🛠️ Работать с косметологическим оборудованием</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 700 ₽</span> <span class="rating-count"><del>14 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период максимальных акций</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметологии SPA»</strong> в <strong>Казани</strong> — это уникальная программа для тех, кто хочет освоить техники по корректировке фигуры и омоложению кожи.</p>
<p>В программу входят обертывания, пилинги и спа-процедуры, а также особенности спа-этикета и индивидуальный подход к клиентам.</p>
<p>За <span class="price-highlight">8 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">документ о прохождении курса</span>.</p>
<p>Курс подходит как для начинающих, так и для практикующих специалистов, желающих расширить свои навыки и перечень услуг.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>8</strong> ак. часов</span>
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
<td>🔰 Ароматерапия</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы</td>
</tr>
<tr>
<td>📦 Пилинг тела</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Выбор косметических средств и техники</td>
</tr>
<tr>
<td>📦 Обертывания</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Технология и выполнение обертываний</td>
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
<li>🌸 Проводить обертывания и пилинги</li>
<li>🌈 Создавать персонализированные программы ухода за кожей</li>
<li>✨ Работать с клиентами и обеспечивать высокий уровень сервиса</li>
<li>🏆 Повышать свою квалификацию и востребованность на рынке</li>
<li>📝 Получать диплом мастера косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат о прохождении курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Удобные условия рассрочки</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 900 ₽</span> <span class="rating-count"><del>13 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Казани</strong> — отличный выбор для профессионалов, желающих освоить современные техники депиляции.</p>
<p>В программе изучаются работа с полимерными восками и ускоренные техники выполнения процедур.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>8</strong> процедур</span>
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
<td>Обзор техник, работа с полимерными восками</td>
</tr>
<tr>
<td>📈 Скоростные техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Персидская дорожка, итальянская глазурь</td>
</tr>
<tr>
<td>🎨 Бразильское бикини</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Пошаговая депиляция, взаимодействие с клиентом</td>
</tr>
<tr>
<td>🤔 Ваксинг лица</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Снять нежелательные волоски, противопоказания</td>
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
<li>🔥 Быстро выполнять процедуры депиляции</li>
<li>🧠 Работать с вросшими и забритыми волосками</li>
<li>🤝 Оказывать психологическую поддержку клиентам</li>
<li>📈 Эффективно продвигать свои услуги</li>
<li>📚 Изучать современные тенденции в индустрии</li>
<li>📸 Собрать портфолио работ</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 300 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">56 500 ₽</span> <span class="rating-count"><del>94 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент.</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Казани</strong> — отличный старт для начинающих мастеров в индустрии красоты.</p>
<p>Программа охватывает основные техники ухода за лицом и телом, массажи и депиляцию, а также методы аппаратной косметологии.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для новичков, так и для тех, кто уже работает в сфере красоты и хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span> <span><strong>24</strong> урока</span> <span><strong>22</strong> процедур</span> <span><strong>2-3</strong> месяца</span>
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
<td>Маски, комплексный уход</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, УЗ-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>🧰 Депиляция</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Основы депиляции, шугаринг</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж</td>
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
<li>💆‍♀️ Проводить массаж лица и уходовые процедуры</li>
<li>🌿 Выполнять аппаратные процедуры по омоложению</li>
<li>☀️ Оказывать услуги по депиляции</li>
<li>🧴 Подбирать и применять маски и пилинги</li>
<li>🎨 Создавать индивидуальные программы ухода за кожей</li>
<li>🏆 Получить диплом специалиста и начать карьеру в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки: На страницу курса -->
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 500 ₽</span> <span class="rating-count"><del>12 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент.</p>
<p><strong>📍 Адрес:</strong> Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Казани</strong> — идеальный вариант для начинающих и профессионалов, желающих освоить технику сахарной депиляции.</p>
<p>Программа включает три техники работы с сахарной пастой, обучение популярным зонам и консультацию по уходу за кожей.</p>
<p>За <span class="price-highlight">11 ак. часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит для новых мастеров и тех, кто хочет повысить свою квалификацию в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>8</strong> процедур</span>
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
<td>🔰 Основы шугаринга</td>
<td><span class="price-highlight">3 ч / 2 урока</span></td>
<td>Правила безопасности, инструменты, подготовка к процедуре</td>
</tr>
<tr>
<td>📦 Практика на моделях</td>
<td><span class="price-highlight">5 ч / 3 урока</span></td>
<td>Депиляция различных зон, работа с клиентами</td>
</tr>
<tr>
<td>💡 Уход за кожей после процедуры</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Особенности ухода, советы по уходу за кожей</td>
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
<li>🎯 Выполнять шугаринг различных зон тела</li>
<li>🛠️ Работать с сахарной пастой и инструментами</li>
<li>💬 Эффективно общаться с клиентами и решать конфликты</li>
<li>💡 Оказывать профессиональный уход за кожей</li>
<li>📜 Получать сертификат о квалификации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span> (всего 2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 400 ₽</span> <span class="rating-count"><del>4 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Казани</strong> — идеальный выбор для начинающих косметологов и специалистов, стремящихся углубить свои знания в области дерматологии.</p>
<p>Программа охватывает основные аспекты анатомии лица и шеи, типы кожи и современные дерматологические практики.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет тем, кто хочет успешно стартовать в косметологии и обеспечить качественный уход за кожей.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Строение кожи, типы кожи</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Анатомия лица и шеи, заболевания кожи</td>
</tr>
<tr>
<td>🎨 Санитарные требования</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Организация рабочего места, обработка инструментов</td>
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
<li>🔍 Определять тип кожи и ее проблемы</li>
<li>🎓 Понимать анатомию лица и шеи</li>
<li>🧼 Правильно организовывать рабочее место косметолога</li>
<li>📋 Применять дерматологические техники и процедуры</li>
<li>💼 Обеспечивать соблюдение санитарных норм</li>
<li>⏳ Осуществлять уход за кожей в зависимости от возраста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Нутрициолог" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Нутрициолог</div>
<h2>Нутрициолог</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">29 400 ₽</span> <span class="rating-count"><del>49 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> действует на ограниченный период.</p>
<p><strong>📍 Адрес:</strong> Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79999999999">+7 (999) 999-99-99</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/programm-nutriciolog" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Нутрициолог" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Нутрициолог»</strong> в <strong>Казани</strong> — идеально подходит для желающих освоить искусство правильного питания и начать карьеру в области нутрициологии.</p>
<p>Программа включает обучение у практикующих врачей-диетологов и акцент на практических навыках работы с клиентами.</p>
<p>За <span class="price-highlight">36 академических часов</span> студенты получают практический опыт и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет улучшить свои знания о питании и консультировании клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>12</strong> процедур</span>
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
<td>🔰 Основы нутрициологии</td>
<td><span class="price-highlight">24 ч / 12 уроков</span></td>
<td>Наука о питании, витамины, минералы, бады, коррекция рациона</td>
</tr>
<tr>
<td>📈 Интегративная нутрициология</td>
<td><span class="price-highlight">12 ч / 6 уроков</span></td>
<td>Причины избыточного веса, работа с клиентом, формирование рациона</td>
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
<li>💡 Консультировать клиентов по вопросам здорового питания</li>
<li>📊 Составлять индивидуальные рационы питания</li>
<li>🏃‍♀️ Разрабатывать программы питания для беременных и кормящих женщин</li>
<li>🏋️ Составлять рационы для спортсменов</li>
<li>📋 Проводить расчёт суточной потребности в БЖУ</li>
<li>📝 Создавать планы питания на день и на неделю</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">17 200 ₽</span> <span class="rating-count"><del>28 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78432160057">+7 (843) 216-00-57</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Казани</strong> — идеальный выбор для начинающих мастеров и тех, кто хочет повысить свою квалификацию.</p>
<p>Программа курса охватывает восковую депиляцию и шугаринг с использованием скоростных техник.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит всем, кто желает быстро собирать клиентскую базу и выйти на стабильный доход.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
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
<td>🔰 Базовый блок</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Общие принципы депиляции, работа с клиентами</td>
</tr>
<tr>
<td>📈 Шугаринг</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, депиляция бикини</td>
</tr>
<tr>
<td>🎨 Повышение квалификации</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
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
<li>💖 Выполнять процедуру депиляции воском</li>
<li>🧁 Работать с сахарной пастой в разных техниках</li>
<li>🌿 Обеспечивать безопасность и гигиену на приеме</li>
<li>📋 Консультировать клиентов по домашнему уходу</li>
<li>🏆 Адаптировать процедуры под индивидуальные нужды клиентов</li>
<li>🎓 Получить диплом, подтверждающий вашу квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> на обучение в определенные периоды.</p>
<p><strong>📍 Адрес:</strong> г. Казань, ул. Гаяза Исхаки, д. 8</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79876543210">+7 (987) 654-32-10</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://kazan.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">kazan.ecolespb.ru</a></p>
</div>
<a href="https://kazan.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Казани</strong> — отличный старт для тех, кто хочет работать нутрициологом и научиться осознанному питанию.</p>
<p>Программа охватывает знания о здоровом питании, выборе витаминов и минералов, а также практические навыки работы с клиентами.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику с реальными клиентами и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подойдёт как для желающих изменить своё питание, так и для старта карьеры в нутрициологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>32</strong> практических процедур</span>
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
<td>Анатомия пищеварительной системы, правила питания, калорийность продуктов</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Классификация витаминов, источники, нормы потребления</td>
</tr>
<tr>
<td>🍽️ Коррекция рациона</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Типы диет, правила безопасности питания, гигиена</td>
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
<li>🍏 Разбираться в составе пищи</li>
<li>💡 Определять потребности в витаминах и минералах</li>
<li>🗣️ Консультировать клиентов по вопросам питания</li>
<li>📅 Разрабатывать индивидуальные рационы</li>
<li>🏋️ Учитывать физическую активность клиентов при составлении рациона</li>
<li>📊 Анализировать пищевые привычки и зависимости</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://kazan.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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