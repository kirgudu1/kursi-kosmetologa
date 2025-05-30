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
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс сестринского дела</div>
<h2>Курс сестринского дела</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">50 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">35 000 ₽</span> <span class="rating-count"><del>50 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">30%</span> при наличии акций</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432345678">+7 (343) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/nurse" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/nurse" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс сестринского дела»</strong> в <strong>Екатеринбурге</strong> — это идеальный выбор для тех, кто хочет овладеть сестринским делом с теоретической и практической стороны.</p>
<p>Программа охватывает основы фармакологии, физиологии и психологии общения с пациентами.</p>
<p>За <span class="price-highlight">50 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет закрепить знания и навыки в этой области.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>50</strong> ак. часов</span>
<span><strong>5</strong> уроков</span>
<span><strong>3</strong> процедуры</span>
<span><strong>3–6</strong> недель</span>
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
<td>🔰 Физиология</td>
<td><span class="price-highlight">20 ч / 2 урока</span></td>
<td>Принципы строения организма, типовые патологии</td>
</tr>
<tr>
<td>📈 Фармакология</td>
<td><span class="price-highlight">15 ч / 2 урока</span></td>
<td>Забор и хранение биологических материалов</td>
</tr>
<tr>
<td>🗣️ Психология общения</td>
<td><span class="price-highlight">15 ч / 1 урок</span></td>
<td>Оценка состояния пациента, психологическая поддержка</td>
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
<li>📋 Правильный забор биологических материалов</li>
<li>🚑 Оказание первой помощи в экстренных ситуациях</li>
<li>🗣️ Эффективное взаимодействие с пациентами</li>
<li>⏲️ Измерение жизненных показателей</li>
<li>💉 Выполнение инъекций и оказание доврачебной помощи</li>
<li>📝 Создание портфолио для дальнейшей практики</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/nurse" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 300 ₽</span> <span class="rating-count"><del>35 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+74955060000">+7 (495) 506-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Екатеринбурге</strong> — идеальный старт для желающих понять основы питания и здорового образа жизни.</p>
<p>Программа охватывает изучение нутриентов, витаминов и минералов, а также методы коррекции рациона.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как для личного развития, так и для начала карьеры нутрициолога.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>5</strong> процедур</span>
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
<td>🔰 Основы нутрициологии</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Химический состав продуктов, основные макро- и микроэлементы</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Дополнительные вещества, гипервитаминоз и гиповитаминоз</td>
</tr>
<tr>
<td>🎯 Диетология и коррекция рациона</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Виды диет, принципы здорового питания</td>
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
<li>🍏 Анализировать состав продуктов питания</li>
<li>📊 Определять потребности витаминов и минералов</li>
<li>🥗 Разрабатывать диетические программы для клиентов</li>
<li>📋 Оценивать суточные потребности в калориях</li>
<li>🧑‍⚕️ Консультировать по вопросам здорового питания</li>
<li>📑 Получать сертификаты и рекомендации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 600 ₽</span> <span class="rating-count"><del>12 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Екатеринбурге</strong> — идеальный старт для тех, кто хочет освоить профессию мастера шугаринга.</p>
<p>Программа охватывает 3 техники работы с сахарной пастой и работу с популярными зонами на профессиональной косметике.</p>
<p>За <span class="price-highlight">1-2 дня</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто хочет повысить квалификацию в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>5</strong> уроков</span>
<span><strong>2</strong> процедур</span>
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
<td>🔰 Введение в шугаринг</td>
<td><span class="price-highlight">2 ч / 1 урок</span></td>
<td>Основы работы с сахарной пастой</td>
</tr>
<tr>
<td>📈 Практические навыки</td>
<td><span class="price-highlight">6 ч / 3 урока</span></td>
<td>Депиляция различных зон</td>
</tr>
<tr>
<td>🎨 Уход за кожей</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Правила ухода после процедуры</td>
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
<li>👩‍🎓 Работать с различными зонами</li>
<li>🤝 Общаться с клиентами и находить подход</li>
<li>🧴 Ухаживать за кожей после процедуры</li>
<li>🌟 Избегать распространенных ошибок</li>
<li>📈 Начинать карьеру мастера шугаринга</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">9 800 ₽</span> <span class="rating-count"><del>16 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> сейчас, пока идет набор.</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметологии SPA»</strong> в <strong>Екатеринбурге</strong> — отличное решение для тех, кто хочет освоить практические навыки в области коррекции фигуры и омоложения кожи.</p>
<p>Программа включает обертывания иSPA-процедуры, практическое обучение на реальных клиентах, а также теоретические знания в области украшения и ухода за телом.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получают практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит для начинающих и тех, кто планирует повысить свою квалификацию.</p>
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
<td>Классификация масел, создание спа-атмосферы</td>
</tr>
<tr>
<td>📈 Пилинг тела</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Показания и противопоказания, практика пилинга</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Горячие и холодные обертывания, технологии выполнения</td>
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
<li>💆‍♀️ Проводить SPA-процедуры</li>
<li>🌸 Создавать расслабляющую атмосферу с ароматерапией</li>
<li>📋 Выполнять обертывания и пилинги тела</li>
<li>✨ Учитывать потребности клиентов</li>
<li>💪 Расширять спектр услуг и привлекать новых клиентов</li>
<li>📖 Владеть основами спа-этикета</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 700 ₽</span> <span class="rating-count"><del>12 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в определенные периоды</p>
<p><strong>📍 Адрес:</strong> Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции воском" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции воском»</strong> в <strong>Екатеринбурге</strong> — идеальный старт для тех, кто хочет стать мастером депиляции.</p>
<p>Программа охватывает базовые техники работы с воском, индивидуальный подход к клиентам и депиляцию популярных зон.</p>
<p>За <span class="price-highlight">до 12 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
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
<td>Основы восковой депиляции, правила безопасности</td>
</tr>
<tr>
<td>📚 Подбор воска</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Техники работы с разными зонами, выбор воска</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">6 ч / 4 урока</span></td>
<td>Отработка депиляции бикини, подмышек и голеней</td>
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
<li>🔍 Подбирать воск в зависимости от зоны</li>
<li>🪡 Выполнять шпатлевую и бандажную технику</li>
<li>🧑‍🤝‍🧑 Общаться с клиентами для лучшего сервиса</li>
<li>🚀 Стартовать карьеру мастера депиляции</li>
<li>🌟 Обеспечивать безопасность процедур</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 200 ₽</span> <span class="rating-count"><del>12 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение ограниченного периода.</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432123456">+7 (343) 212-34-56</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом»</strong> в <strong>Екатеринбурге</strong> — идеальный вариант для косметологов, желающих улучшить навыки общения и повысить лояльность клиентов.</p>
<p>В программе курса изучаются методы определения потребностей клиентов, формирование стабильной клиентской базы и принципы профессиональной этики.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практические навыки на реальных клиентах и <span class="price-highlight">диплом специализации</span>.</p>
<p>Этот курс подойдет тем, кто хочет развить навыки общения и повысить свою конкурентоспособность на рынке.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
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
<td>🔰 Общее взаимодействие</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Этапы общения с клиентом, создание имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основные принципы профессиональной этики</td>
</tr>
<tr>
<td>🎨 Психология общения</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
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
<li>💬 Эффективно взаимодействовать с клиентами</li>
<li>📈 Выявлять потребности клиентов</li>
<li>💪 Формировать лояльную клиентскую базу</li>
<li>🧠 Понимать психотипы клиентов</li>
<li>👍 Повышать авторитет среди коллег</li>
<li>📋 Применять основные принципы профессиональной этики</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 100 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 300 ₽</span> <span class="rating-count"><del>40 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период, когда действуют максимальные скидки</p>
<p><strong>📍 Адрес:</strong> Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Екатеринбурге</strong> — идеальный выбор для начала карьеры и освоения современных методик в области красоты.</p>
<p>Вы изучите дарсонвализацию, микротоки, лазерную биоревитализацию, УЗ-процедуры, RF-лифтинг и кавитацию.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто уже имеет опыт в косметологии.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td><span class="price-highlight">36 ч / 8 уроков</span></td>
<td>Теория косметологии, анатомия кожи, техники безопасности</td>
</tr>
<tr>
<td>📈 Аппаратные процедуры</td>
<td><span class="price-highlight">50 ч / 10 уроков</span></td>
<td>Дарсонвализация, микротоковая терапия, УЗ-процедуры</td>
</tr>
<tr>
<td>🎨 Омоложение и уход</td>
<td><span class="price-highlight">40 ч / 6 уроков</span></td>
<td>Лазерная биоревитализация, RF-лифтинг, аппаратные пилинги</td>
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
<li>💡 Проводить аппаратные процедуры омоложения</li>
<li>✨ Корректировать фигуру с помощью RF-лифтинга</li>
<li>🌊 Выполнять УЗ-пилинги и гидропилинги</li>
<li>📈 Разбираться в анатомии и физиологии кожи</li>
<li>💆‍♀️ Работать с клиентами и устраивать консультации</li>
<li>📋 Получить диплом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 900 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">23 400 ₽</span> <span class="rating-count"><del>39 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при акциях и специальных предложениях</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/upkeep" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Екатеринбурге</strong> — это ваш шаг к начинающей карьере косметолога-эстетиста, где вы получите знания и практические навыки по диагностике и лечению кожи.</p>
<p>Вы изучите различные техники, такие как чистки, пилинги, карбокситерапия и многие другие.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают глубокие знания и диплом специалиста.</p>
<p>Курс идеально подходит для тех, кто хочет работать в beauty-индустрии и начать зарабатывать сразу после обучения.</p>
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
<td><span class="price-highlight">30 ч / 10 уроков</span></td>
<td>Строение кожи, диагностика, уходовые процедуры</td>
</tr>
<tr>
<td>📈 Практика на клиентах</td>
<td><span class="price-highlight">60 ч / 12 уроков</span></td>
<td>Чистки, пилинги, карбокситерапия</td>
</tr>
<tr>
<td>🎨 Уходовая косметика</td>
<td><span class="price-highlight">36 ч / 8 уроков</span></td>
<td>Изучение профессиональной косметики, уходовые программы</td>
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
<li>💆 Выполнять процедуры по очищению и питанию кожи</li>
<li>🔍 Понимать типы и проблемы кожи клиентов</li>
<li>🛠️ Уметь предлагать комплексные уходовые решения</li>
<li>💡 Правильно подбирать уходовую косметику</li>
<li>📝 Вести документацию и подготовку клиента к процедурам</li>
<li>📜 Получить диплом специалиста по косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 400 ₽</span> <span class="rating-count"><del>14 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> при регистрации на курс.</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Екатеринбурге</strong> — идеальный выбор для специалистов, желающих улучшить свои навыки в депиляции.</p>
<p>Вы научитесь современным техникам депиляции, включая работу с полимерными восками и ускоренным методам обработки.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера</span>.</p>
<p>Курс подходит как для начинающих, так и для тех, кто хочет повысить квалификацию и расширить свой бизнес.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>8</strong> уроков</span>
<span><strong>4</strong> процедур</span>
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
<td>Типы волос, методы депиляции</td>
</tr>
<tr>
<td>📈 Техники работы с воском</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Полимерные воски, их применение</td>
</tr>
<tr>
<td>🎨 Психология клиента</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Подход к клиенту, работа с возражениями</td>
</tr>
<tr>
<td>💼 Маркетинг услуг</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Продвижение услуг и нахождение клиентов</td>
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
<li>🔍 Овладеть современными техниками депиляции</li>
<li>🧰 Работать с полимерными восками</li>
<li>🛠️ Выполнять процедуру быстро и качественно</li>
<li>😌 Обеспечивать комфорт клиентов во время процедуры</li>
<li>📈 Увеличить свою клиентскую базу</li>
<li>💡 Продвигать свои услуги с помощью эффективных методов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 400 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">57 600 ₽</span> <span class="rating-count"><del>96 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период.</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Екатеринбурге</strong> — это отличная возможность для начинающих мастеров в индустрии красоты освоить востребованную профессию.</p>
<p>Программа курса включает обучение выполнению косметических и аппаратных процедур, массажу лица, депиляции и другим навыкам.</p>
<p>За <span class="price-highlight">126 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто уже работает в сфере красоты и хочет повысить свою квалификацию.</p>
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
<td>Строение кожи, маски, комплексный уход</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, уз-процедуры, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 Косметология SPA</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тел, обертывания</td>
</tr>
<tr>
<td>💆‍♀️ Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆‍♂️ Косметический массаж лица</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Базовые элементы массажа, пластический массаж</td>
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
<li>💆‍♀️ Проводить массаж лица и SPA-процедуры</li>
<li>🧰 Выполнять аппаратные косметологические процедуры</li>
<li>🌸 Осваивать техники депиляции и ухода за кожей</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
<li>🔍 Работать с реальными клиентами и строить свои услуги</li>
<li>💼 Открывать собственные кабинеты и работать на себя</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
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
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 400 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">30 000 ₽</span> <span class="rating-count"><del>50 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432260051">+7 (343) 226-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/programm-nutriciolog" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Нутрициолог" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Нутрициолог»</strong> в <strong>Екатеринбурге</strong> — отличный выбор для желающих развить навыки в области здорового питания и освоить востребованную профессию.</p>
<p>Программа охватывает темы правильного питания, консультации клиентов и формирование рационов на основе индивидуальных потребностей.</p>
<p>За <span class="price-highlight">36 академических часов</span> слушатели получают практические навыки работы с клиентами и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как для личного использования, так и для работы в сфере здоровья и красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>3</strong> блока</span>
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
<td><span class="price-highlight">24 ч / 12 уроков</span></td>
<td>Наука о питании, Витамины, минералы и БАДы, Коррекция рациона питания</td>
</tr>
<tr>
<td>📈 Интегративная нутрициология</td>
<td><span class="price-highlight">12 ч / 6 уроков</span></td>
<td>Причины избыточного веса и ожирения, Работа с клиентом, Формирование рациона</td>
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
<li>🔍 Консультировать клиентов по вопросам питания</li>
<li>📝 Составлять индивидуальные рационы питания</li>
<li>🍽️ Подбирать сбалансированное питание для беременных и спортсменов</li>
<li>📊 Рассчитывать суточную потребность в БЖУ</li>
<li>👩‍⚕️ Применять знания о принципах здорового питания</li>
<li>🌱 Помогать клиентам с избыточным весом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span>
</span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 800 ₽</span> <span class="rating-count"><del>36 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> во время акций</p>
<p><strong>📍 Адрес:</strong> Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Екатеринбурге</strong> — это идеальный старт для начинающих в индустрии красоты.</p>
<p>Программа охватывает различные техники удаления волос, включая восковую депиляцию и шугаринг, с акцентом на индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и опытным мастерам для повышения квалификации.</p>
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
<td>Техника восковой депиляции, работа с клиентами</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Сложные техники, бразильское бикини</td>
</tr>
<tr>
<td>🧪 Шугаринг</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, работа с сахарной пастой</td>
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
<li>💇‍♀️ Проводить восковую депиляцию и шугаринг</li>
<li>🏆 Осваивать скоростные техники удаления волос</li>
<li>🤝 Индивидуально подходить к каждому клиенту</li>
<li>📈 Создавать свою клиентскую базу</li>
<li>📑 Подтверждать квалификацию дипломом специалиста</li>
<li>🧴 Соблюдать правила гигиены и безопасности</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (2 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 400 ₽</span> <span class="rating-count"><del>19 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период специальных предложений.</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432567890">+7 (343) 256-78-90</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Екатеринбурге</strong> — это уникальная возможность научиться комплексному подходу к вопросам питания и здоровья.</p>
<p>Вы изучите основы формирования рациона питания для различных групп людей и научитесь составлять практические программы.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как новичкам, так и тем, кто хочет углубить свои знания в области нутрициологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>16</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Принципы и правила питания, нутриенты</td>
</tr>
<tr>
<td>📈 Специальные группы</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Питание беременных, детей, спортсменов</td>
</tr>
<tr>
<td>🎨 Психология питания</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Диагностика нарушений пищевого поведения</td>
</tr>
<tr>
<td>📊 Практика на клиентах</td>
<td><span class="price-highlight">18 ч / 6 уроков</span></td>
<td>Работа с реальными клиентами и составление программ</td>
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
<li>🏋️‍♂️ Выстраивать рацион питания</li>
<li>💼 Консультировать клиентов</li>
<li>📈 Анализировать данные клиента</li>
<li>🔍 Выявлять физиологические потребности</li>
<li>💡 Составлять программы питания</li>
<li>🎯 Диагностировать нарушения пищевого поведения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 500 ₽/мес.</span> (до 4 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 200 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">суперскидка до 40%</span> на время акции.</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Екатеринбурге</strong> — идеальное решение для тех, кто хочет начать карьеру в области косметологии.</p>
<p>Программа включает изучение анатомии, дерматологии и организацию рабочего места для косметолога.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет улучшить свои навыки в сфере beauty.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>9</strong> процедур</span>
<span><strong>4 недели</strong></span>
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
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Строение кожи, диагностика проблем кожи</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Анатомия лица, уход по возрасту</td>
</tr>
<tr>
<td>🎨 Практика и безопасность</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Работа с оборудованием, санитарные требования</td>
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
<li>🎯 Организовывать рабочее место косметолога</li>
<li>🧴 Понимать типы кожи и их диагностику</li>
<li>🧠 Осваивать анатомию лица и шеи</li>
<li>💡 Применять anti-age процедуры</li>
<li>🛠️ Работать с клиентами на практике</li>
<li>📋 Получить диплом специалиста в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в текущий период</p>
<p><strong>📍 Адрес:</strong> г. Екатеринбург, ул. Шейнкмана, д. 9</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73432885416">+7 (343) 288-54-16</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://ekb.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">ekb.ecolespb.ru</a></p>
</div>
<a href="https://ekb.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Екатеринбурге</strong> — идеальный выбор для косметологов, желающих повысить квалификацию в области работы с гиперпигментацией.</p>
<p>Программа включает изучение ферулового массажа и безопасных методов коррекции гиперпигментации.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и опытным специалистам, желающим привлекать больше клиентов.</p>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Причины появления пигментных пятен, дифференциация</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Сочетание химических пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>💆‍♀️ Выполнение процедуры</td>
<td><span class="price-highlight">2 ч</span></td>
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
<li>💡 Безопасно корректировать гиперпигментацию</li>
<li>🧪 Подбирать процедуры в зависимости от фототипа кожи</li>
<li>📖 Составлять индивидуальные протоколы коррекции</li>
<li>🔧 Проводить феруловый массаж по авторской методике</li>
<li>🔍 Привлекать больше клиентов с помощью безопасных процедур</li>
<li>📝 Подбирать домашний уход для закрепления результатов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://ekb.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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