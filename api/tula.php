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
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы основы нутрициологии</div>
<h2>Курсы основы нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">27 800 ₽</span> <span class="rating-count"><del>46 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> при оформлении заявки.</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74914320000">+7 (491) 432-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Туле</strong> — идеальный выбор для тех, кто хочет научиться строить осознанное питание и поддерживать здоровье через грамотный рацион.</p>
<p>Вы изучите принципы и правила здорового питания, виды витаминов и минералов, а также способы коррекции веса с помощью диет.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет начать карьеру нутрициолога и сразу же получать доход.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span> <span><strong>8</strong> уроков</span> <span><strong>4</strong> блока</span> <span><strong>2 месяца</strong></span>
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
<td>Анатомия пищеварительной системы, правила здорового питания, калорийность продуктов</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классификация витаминов, гипервитаминоз, источники витаминов</td>
</tr>
<tr>
<td>🎯 Коррекция рациона</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Диеты, детокс, правила пищевой безопасности</td>
</tr>
<tr>
<td>🛠 Практика на клиентах</td>
<td><span class="price-highlight">36 ч / 2 урока</span></td>
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
<li>📊 Разбираться в составе пищи и пищевой ценности продуктов</li>
<li>🔍 Определять потребности в макро- и микронутриентах</li>
<li>🥗 Формировать сбалансированный рацион для разных категорий клиентов</li>
<li>🧘‍♀️ Работать с диетами и пищевыми добавками</li>
<li>📋 Оформить сертификат нутрициолога</li>
<li>🌟 Получить практический опыт работы с клиентами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 100 ₽</span> <span class="rating-count"><del>15 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение текущего периода акций</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74912234567">+7 (4912) 234-567</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы этики и психологии общения с клиентом в косметологии»</strong> в <strong>Туле</strong> — это отличная возможность повысить лояльность клиентов и увеличить свои продажи в сфере красоты.</p>
<p>В программе вы изучите, как находить подход к клиентам, грамотно выявлять их потребности и общаться с ними.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практическую подготовку и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подойдет как начинающим специалистам, так и тем, кто хочет углубить свои знания в общении с клиентами.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часа</span>
<span><strong>4</strong> урока</span>
<span><strong>4</strong> процедуры</span>
<span><strong>2–4</strong> недели</span>
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
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Этапы грамотной коммуникации, профессиональный имидж</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Принципы профессиональной этики, работа с клиентом</td>
</tr>
<tr>
<td>🎨 Корпоративная культура</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры, формирование команды</td>
</tr>
<tr>
<td>📚 Психология общения</td>
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Психоэмоциональные проблемы клиентов, типы клиентов</td>
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
<li>💼 Сформировать стабильную базу клиентов</li>
<li>🧠 Находить подход к любому клиенту</li>
<li>📈 Увеличивать свои продажи в косметологии</li>
<li>🤝 Выстраивать гармоничные отношения с клиентами</li>
<li>🌟 Повышать авторитет среди коллег</li>
<li>🚀 Грамотно выявлять потребности клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс интегративной нутрициологии</div>
<h2>Курс интегративной нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span> (до 3 недель)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 000 ₽</span> <span class="rating-count"><del>35 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Туле</strong> — это отличный старт для людей, заинтересованных в правильном питании и здоровье.</p>
<p>Программа охватывает основы нутрициологии, включая составление индивидуальных планов питания и здоровье клиентов с различными потребностями.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто желает усовершенствовать свои навыки в области питания.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>7</strong> процедур</span>
<span><strong>3 недели</strong></span>
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
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Принципы питания, макро- и микронутриенты</td>
</tr>
<tr>
<td>📈 Практика с клиентами</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Составление программ питания, анализ данных клиентов</td>
</tr>
<tr>
<td>🎨 Специфика питания разных групп</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Питание для спортсменов, пожилых и беременных</td>
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
<li>📊 Составлять индивидуальные планы питания для клиентов</li>
<li>🧑‍⚕️ Анализировать данные о здоровье и питании клиентов</li>
<li>🥗 Разбираться в принципах питания для разных категорий людей</li>
<li>📉 Диагностировать нарушения пищевого поведения</li>
<li>🍽️ Определять потребности в макро- и микронутриентах</li>
<li>🏅 Консультировать клиентов по вопросам питания</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 900 ₽</span> <span class="rating-count"><del>8 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Туле</strong> — идеальный старт для тех, кто хочет освоить профессию мастера шугаринга.</p>
<p>Программа охватывает три техники работы с сахарной пастой, а также работу с популярными зонами.</p>
<p>За <span class="price-highlight">1-2 дня</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Курс подходит как для начинающих, так и для специалистов, желающих повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Техника работы с сахарной пастой, правила безопасности</td>
</tr>
<tr>
<td>📈 Работа с зонами</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Депиляция подмышек, голеней, бикини</td>
</tr>
<tr>
<td>🎓 Практика на клиентах</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Отработка навыков на реальных моделях</td>
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
<li>🔍 Проводить сахарную депиляцию</li>
<li>💡 Работать с различными зонами тела</li>
<li>🥇 Понимать правила ухода за кожей после процедуры</li>
<li>🤝 Эффективно общаться с клиентами</li>
<li>🏆 Избегать распространенных ошибок мастера</li>
<li>📈 Развивать карьеру в индустрии красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">31 100 ₽</span> <span class="rating-count"><del>51 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> при скором начале курсов</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Туле</strong> — это идеальное решение для тех, кто хочет стать мастером в сфере красоты.</p>
<p>Программа охватывает популярные аппаратные техники, включая дарсонвализацию, микротоки, лазерную биоревитализацию и RF-лифтинг.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет улучшить свои навыки и начать карьеру в профессии.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, работа с аппаратом Дарсонваль</td>
</tr>
<tr>
<td>📈 Ультразвук</td>
<td><span class="price-highlight">26 ч / 5 уроков</span></td>
<td>УЗ-пилинг, фонофорез, УЗ-массаж</td>
</tr>
<tr>
<td>🎨 Коррекция фигуры</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>RF-лифтинг и кавитация</td>
</tr>
<tr>
<td>💧 Аппаратные пилинги</td>
<td><span class="price-highlight">18 ч / 4 урока</span></td>
<td>Гидропилинг, газожидкостный пилинг</td>
</tr>
<tr>
<td>✨ Лазерная терапия</td>
<td><span class="price-highlight">20 ч / 3 урока</span></td>
<td>Лазерная биоревитализация, микротоковая терапия</td>
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
<li>📋 Выполнять аппаратный пилинг</li>
<li>🏋️‍♀️ Корректировать фигуру с помощью кавитации</li>
<li>💆 Проведение омолаживающих процедур</li>
<li>🌟 Использовать косметологические аппараты</li>
<li>🐾 Работать с реальными клиентами и моделями</li>
<li>📄 Получить диплом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс сестринского дела</div>
<h2>Курс сестринского дела</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">50 ак. часов</span> (5 недель)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">27 000 ₽</span> <span class="rating-count"><del>45 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> сейчас доступна для всех студентов.</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872204040">+7 (4872) 204-040</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/nurse" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/nurse" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс сестринского дела»</strong> в <strong>Туле</strong> — идеальный выбор для тех, кто хочет стать высококвалифицированной медицинской сестрой.</p>
<p>Программа охватывает теоретические и практические основы, необходимые для работы с пациентами в медицинских учреждениях.</p>
<p>За <span class="price-highlight">50 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет улучшить свои навыки в сестринском деле.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>50</strong> ак. часов</span> <span><strong>12</strong> уроков</span> <span><strong>8</strong> процедур</span> <span><strong>5 недель</strong></span>
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
<td>🔰 Основы сестринского дела</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Физиология, патологии, первая помощь</td>
</tr>
<tr>
<td>📈 Психология общения</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Психология пациента, поддержка</td>
</tr>
<tr>
<td>📋 Практические навыки</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Уколы, работа с клиентами, оказание первой помощи</td>
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
<li>💉 Выполнять забор материалов исследований</li>
<li>⚕️ Оказывать первую помощь в экстренных ситуациях</li>
<li>🔍 Анализировать симптомы заболеваний</li>
<li>🗣️ Эффективно общаться с пациентами</li>
<li>📝 Составлять медицинские отчёты</li>
<li>💪 Оказывать психологическую поддержку пациентам</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/nurse" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 900 ₽</span> <span class="rating-count"><del>9 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс косметологии SPA»</strong> в <strong>Туле</strong> — идеальное решение для всех, кто стремится овладеть современными техниками по уходу за телом.</p>
<p>Программа охватывает обертывания, пилинги и SPA-процедуры, а также основы ароматерапии и спа-этикета.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для практикующих косметологов, желающих повысить свою квалификацию.</p>
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
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Выбор скрабов, процедура эксфолиации</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Технология горячих и холодных обертываний</td>
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
<li>🌿 Создавать программы по уходу за кожей тела</li>
<li>🧖 Проводить востребованные обертывания и пилинги</li>
<li>🏆 Применять ароматерапию в практической работе</li>
<li>🤝 Работать с клиентами, учитывая их потребности</li>
<li>📅 Повысить профессиональные навыки и привлечь новых клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">32 ак. часа</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 000 ₽</span> <span class="rating-count"><del>5 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> доступна для записавшихся на курс.</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Туле</strong> — идеальный выбор для тех, кто хочет стать косметологом и хочет получить базовые знания в дерматологии и анатомии.</p>
<p>В программе курса вы освоите анатомию лица и шеи, научитесь работать с различными типами кожи и освоите санитарные нормы.</p>
<p>За <span class="price-highlight">32 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как для начинающих, так и для тех, кто уже работает в индустрии красоты и хочет повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>32</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td>🔰 Основы косметологии</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Строение кожи, типы кожи, диагностика проблем</td>
</tr>
<tr>
<td>🧴 Основы дерматологии</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Анатомическое строение лица, кожные заболевания</td>
</tr>
<tr>
<td>💡 Практические навыки</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Очищение лица, обработка инструментов</td>
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
<li>📋 Организовывать рабочее место косметолога</li>
<li>🔬 Разбираться в типах кожи и диагностировать кожные проблемы</li>
<li>💪 Понимать анатомию лица и шеи</li>
<li>👩‍⚕ Осваивать санитарные требования в косметологии</li>
<li>🛠️ Проводить anti-age процедуры и уход за кожей</li>
<li>🌟 Создавать портфолио для соц. сетей</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">67 300 ₽</span> <span class="rating-count"><del>112 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:84872706207">8 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист (без мед. образования)»</strong> в <strong>Туле</strong> — отличный старт для новичков в сфере красоты и для тех, кто хочет повысить свою квалификацию.</p>
<p>Программа охватывает как классические, так и современные техники косметологии, включая массаж лица, депиляцию и аппаратные процедуры.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт начинающим и действующим профессионалам, стремящимся улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
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
<td>Строение кожи, Маски</td>
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
<td>🧖 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, Работа с клиентами</td>
</tr>
<tr>
<td>💆 Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический массаж, Пластический массаж, Массаж по Жаке</td>
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
<li>💆 Проводить аппаратные и ручные процедуры по уходу за кожей</li>
<li>🧖 Выполнять массаж лица и тело</li>
<li>✨ Строить индивидуальные курсы на основе потребностей клиентов</li>
<li>📜 Подтверждать квалификацию дипломом специалиста</li>
<li>💡 Работать с реальными клиентами на практике</li>
<li>📈 Оказывать услуги по SPA-процедурам и депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 900 ₽</span> <span class="rating-count"><del>8 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в данный момент</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Туле</strong> — отличный старт для тех, кто хочет освоить востребованную профессию в области косметологии.</p>
<p>Программа охватывает техники восковой депиляции, включая подбор индивидуального подхода к клиенту.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто хочет повысить квалификацию.</p>
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
<td><span class="price-highlight">6 ч / 1 урок</span></td>
<td>Техники восковой депиляции</td>
</tr>
<tr>
<td>📈 Практика</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
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
<li>🚀 Овладеть техникой восковой депиляции</li>
<li>📏 Подбирать индивидуальный подход к клиентам</li>
<li>🧴 Уход за кожей после процедуры</li>
<li>👩‍🏫 Работать с различными зонами тела</li>
<li>💼 Финансовое планирование и старт карьеры</li>
<li>🌟 Создавать портфолио для привлечения клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span> (2 дня)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 900 ₽</span> <span class="rating-count"><del>11 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в выбранный период</p>
<p><strong>📍 Адрес:</strong> Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Туле</strong> — прекрасная возможность освоить современные техники депиляции и работу с полимерными восками для специалистов.</p>
<p>Вы научитесь выполнять процедуру быстро и чисто на любой зоне, а также находить подход к клиентам с самыми сложными волосками.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для опытных мастеров, желающих улучшить свои навыки и квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
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
<td>Техники депиляции, работа с полимерными восками</td>
</tr>
<tr>
<td>📈 Продвинутые техники</td>
<td><span class="price-highlight">6 ч / 3 урока</span></td>
<td>Работа с вросшими волосами, индивидуальный подход к клиенту</td>
</tr>
<tr>
<td>🎨 Психология клиента</td>
<td><span class="price-highlight">6 ч / 3 урока</span></td>
<td>Этика общения, установление доверительных отношений</td>
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
<li>🔧 Осваивать современные техники депиляции</li>
<li>💁‍♀️ Выстраивать доверительные отношения с клиентами</li>
<li>🚀 Быстро и качественно выполнять процедуры депиляции</li>
<li>📊 Применять индивидуальный подход к каждому клиенту</li>
<li>📈 Продвигать свои услуги на рынке</li>
<li>📚 Получать практические навыки на реальных клиентах</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 300 ₽</span> <span class="rating-count"><del>22 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в настоящее время</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:8(4872)706207">8 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Туле</strong> — идеальный выбор для начинающих мастеров в индустрии красоты, а также для тех, кто хочет улучшить свои навыки.</p>
<p>Вы изучите востребованные методы восковой депиляции и шугаринга, освоите скоростные техники удаления волос на практике.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет для начинающих и специалистов, стремящихся повысить свою квалификацию и начать зарабатывать.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
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
<td>Техника шугаринга, работа с клиентами</td>
</tr>
<tr>
<td>📈 Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, первая процедура</td>
</tr>
<tr>
<td>🎓 Повышение квалификации</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Сложности в профессии, бразильское бикини</td>
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
<li>🔍 Проводить восковую депиляцию на различных зонах</li>
<li>💧 Работать с сахарной пастой различными техниками</li>
<li>🌟 Учитывать индивидуальные предпочтения клиентов</li>
<li>📋 Консультировать клиентов по уходу после процедуры</li>
<li>📂 Обеспечивать правила гигиены и безопасности</li>
<li>📜 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс повышения квалификации по всесезонным пилингам</div>
<h2>Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Да</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период максимальных акций.</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Туле</strong> — отличное решение для косметологов, желающих повысить квалификацию в работе с гиперпигментацией.</p>
<p>Вы познакомитесь с всесезонными пилингами, методикой ферулового массажа и научитесь безопасно корректировать гиперпигментацию.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как для новичков, так и для опытных специалистов, желающих расширить свои навыки и увеличить клиентскую базу.</p>
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
<span><strong>3-5</strong> недель</span>
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
<td>Причины появления пигментных пятен, диагностика</td>
</tr>
<tr>
<td>📈 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Совмещение пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>🎨 Комплексный подход</td>
<td><span class="price-highlight">1 ак. час</span></td>
<td>Тактика работы, параметры процедур</td>
</tr>
<tr>
<td>💆 Выполнение процедуры</td>
<td><span class="price-highlight">2 ак. часа</span></td>
<td>Техника ферулового массажа, схемы практики</td>
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
<li>📅 Подбирать процедуры с учетом фототипа кожи</li>
<li>💡 Комбинировать пилинги и ретиноиды</li>
<li>💆 Проводить феруловый массаж по авторской методике</li>
<li>📋 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Увеличивать лояльность клиентов через эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">42 ак. часа</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 400 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">26 000 ₽</span> <span class="rating-count"><del>43 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/upkeep" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы эстетической косметологии»</strong> в <strong>Туле</strong> — идеальное решение для тех, кто хочет начать карьеру в бьюти-индустрии и освоить востребованные навыки ухода за кожей.</p>
<p>Программа охватывает диагностику кожи, выполнение чисток, пилингов, карбокситерапию и составление комплексных ухода.</p>
<p>За <span class="price-highlight">42 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит тем, кто хочет закрепить свои знания и работать с клиентами уже по окончании обучения.</p>
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
<td>🔰 Основы</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Строение кожи, диагностика, основные процедуры</td>
</tr>
<tr>
<td>💆🏼 Уходовые процедуры</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Чистки, пилинги, маски</td>
</tr>
<tr>
<td>💧 Специальные техники</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Карбокситерапия, лазерные процедуры</td>
</tr>
<tr>
<td>🏆 Итоговая практика</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Практика на клиентах, итоговая аттестация</td>
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
<li>💆🏼 Выполнять процедуры по очищению кожи</li>
<li>🌿 Подбирать уход в зависимости от типа кожи</li>
<li>🧪 Проводить карбокситерапию для восстановления кожи</li>
<li>📊 Составлять комплексные схемы ухода за кожей</li>
<li>📜 Получение сертификата о прохождении курса</li>
<li>📅 Регистрация на практику с реальными клиентами</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Мастер аппаратной косметологии</div>
<h2>Мастер аппаратной косметологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 700 ₽/мес. на 9 месяцев</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">59 900 ₽</span> <span class="rating-count"><del>99 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> действует на ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Тула, ул. Московская, д. 17</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74872706207">+7 (4872) 70-62-07</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://tula.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank">tula.ecolespb.ru</a></p>
</div>
<a href="https://tula.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер аппаратной косметологии»</strong> в <strong>Туле</strong> — это отличная возможность для начинающих и опытных специалистов в индустрии красоты освоить востребованные аппаратные процедуры.</p>
<p>В программе обучения вы познакомитесь с технологиями ухода, коррекции фигуры и проведением LPG-массажа.</p>
<p>За <span class="price-highlight">91 ак. час</span> слушатели получают практические навыки работы на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный курс для тех, кто хочет повысить свою квалификацию и обеспечить себе успешную карьеру.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>91</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
<span><strong>17</strong> процедур</span>
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
<td>🔰 Эстетическая косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, маски, уходовые процедуры</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Аппаратный массаж</td>
<td><span class="price-highlight">7 ч / 8 уроков</span></td>
<td>LPG, упругая кожа, уменьшение объемов</td>
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
<li>💆‍♀️ Выполнять аппаратные процедуры по омоложению</li>
<li>🎯 Проводить LPG-массаж и коррекцию фигуры</li>
<li>🧰 Использовать безопасные методы удаления волос</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
<li>🔍 Осваивать техники физиотерапии и дезинкрустации</li>
<li>✨ Оказывать первую помощь в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://tula.ecolespb.ru/cosmetology-school/programm-hardware_cosmetologist" target="_blank" class="order-button">📘 На страницу курса</a>
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