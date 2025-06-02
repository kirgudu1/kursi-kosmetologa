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
<!-- Главная карточка "Нутрициолог" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Нутрициолог</div>
<h2>Нутрициолог</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 900 ₽/в мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">29 400 ₽</span> <span class="rating-count"><del>49 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> ограниченное предложение на обучение</p>
<p><strong>📍 Адрес:</strong> г. Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78612345678">+7 (861) 234-56-78</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-nutriciolog&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-nutriciolog&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-nutriciolog" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Нутрициолог" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Нутрициолог»</strong> в <strong>Ростове-на-Дону</strong> — отличный старт для тех, кто хочет углубить свои знания в области правильного питания и помочь другим.</p>
<p>Программа охватывает основы нутрициологии, коррекцию рациона и работу с клиентами, где каждый студент научится эффективным методам консультирования.</p>
<p>За <span class="price-highlight">36 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеальный выбор для желающих начать карьеру в сфере здоровья и красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>36</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>3</strong> процедуры</span>
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
<td>Наука о питании, Витамины, минералы и БАДы, Коррекция рациона</td>
</tr>
<tr>
<td>📈 Интегративная нутрициология</td>
<td><span class="price-highlight">12 ч / 6 уроков</span></td>
<td>Причины избыточного веса, Работа с клиентом, Формирование рациона</td>
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
<li>🍽️ Консультировать клиентов по вопросам питания</li>
<li>📝 Корректировать рацион для клиентов с избыточным весом</li>
<li>🥗 Составлять рацион правильного питания</li>
<li>👶 Составлять рацион для беременных и кормящих женщин</li>
<li>🏋️ Составлять рацион для спортсменов</li>
<li>📊 Расчитывать суточную потребность в БЖУ</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-nutriciolog&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-nutriciolog" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 400 ₽</span> <span class="rating-count"><del>22 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> на ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметологии SPA»</strong> в <strong>Ростове-на-Дону</strong> — это уникальная возможность для тех, кто хочет научиться корректировать фигуру и омолаживать кожу с помощью обертываний и SPA-процедур.</p>
<p>Программа охватывает ароматерапию, пилинг тела и обертывания, что даст вам возможность повысить квалификацию и расширить спектр услуг.</p>
<p>За <span class="price-highlight">1 день</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс идеально подходит как для начинающих, так и для опытных специалистов, желающих улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>3</strong> ак. часа</span> <span><strong>2</strong> урока</span> <span><strong>5</strong> процедур</span> <span><strong>1 день</strong></span>
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
<td>🧖‍♀️ Пилинг тела</td>
<td><span class="price-highlight">4 ак. часа / 1 урок</span></td>
<td>Косметические средства, применение и противопоказания</td>
</tr>
<tr>
<td>🌿 Обертывания</td>
<td><span class="price-highlight">3 ак. часа / 1 урок</span></td>
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
<li>💆‍♀️ Владеть техникой SPA-процедур</li>
<li>📅 Создавать программы по уходу за кожей тела</li>
<li>🌟 Проводить востребованные SPA-процедуры</li>
<li>🌸 Применять ароматерапию в практике</li>
<li>📋 Работать с клиентами на высоком уровне</li>
<li>📝 Получить сертификат о прохождении курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (6–8 недель)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом нутрициолога<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках актуальных акций</p>
<p><strong>📍 Адрес:</strong> г. Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78001234567">+7 (800) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Ростове на Дону</strong> — это идеальный выбор для тех, кто хочет освоить питание с учетом индивидуальных потребностей.</p>
<p>Вы изучите, как строить рацион, а также работать с запросами клиентов на основе их данных и состояния здоровья.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом нутрициолога</span>.</p>
<p>Курс подходит как начинающим, так и тем, кто желает углубить свои знания и навыки в области нутрициологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
<span><strong>18</strong> уроков</span>
<span><strong>6</strong> процедур</span>
<span><strong>6–8</strong> недель</span>
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
<td>Принципы питания, диетология, анализ рациона</td>
</tr>
<tr>
<td>📈 Специальные диеты</td>
<td><span class="price-highlight">12 ч / 4 урока</span></td>
<td>Питание для детей, спортсменов и пожилых</td>
</tr>
<tr>
<td>🎓 Практика с клиентами</td>
<td><span class="price-highlight">24 ч / 10 уроков</span></td>
<td>Составление программ питания, анализ физ. состояния клиентов</td>
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
<li>🍏 Выстраивать индивидуальные рационы питания</li>
<li>🏋️ Разбираться в потребностях клиентов</li>
<li>📊 Анализировать данные о здоровье клиента</li>
<li>📝 Составлять программы питания для различных групп</li>
<li>💬 Консультировать по вопросам питания и диетологии</li>
<li>📋 Получить диплом нутрициолога</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 700 ₽</span> <span class="rating-count"><del>14 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период актуальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Ростове-на-Дону</strong> — это идеальный выбор для профессионалов, стремящихся освоить современные техники депиляции.</p>
<p>Программа включает в себя обучение работе с полимерными восками и скоростным техникам выполнения процедур.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто уже работает в индустрии красоты и хочет повысить квалификацию.</p>
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
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Техники депиляции, работа с полимерными восками</td>
</tr>
<tr>
<td>📈 Углубленный курс</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Работа с вросшими волосками, индивидуальный подход</td>
</tr>
<tr>
<td>🎓 Практика</td>
<td><span class="price-highlight">4 ч / 0 уроков</span></td>
<td>Практика на моделях, отработка техники</td>
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
<li>⚡ Ускорять процедуры депиляции</li>
<li>🧠 Работать с самыми сложными клиентами</li>
<li>📈 Продвигать свои услуги в beauty-сфере</li>
<li>👩‍🔬 Находить индивидуальный подход к каждому клиенту</li>
<li>🔍 Использовать современное оборудование и технику</li>
<li>🌟 Пользоваться эффективными восками для депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">14 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 000 ₽</span> <span class="rating-count"><del>11 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при раннем бронировании курсов</p>
<p><strong>📍 Адрес:</strong> Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78005553535">+7 (800) 555-35-35</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы этики и психологии общения с клиентом в косметологии»</strong> в <strong>Ростове-на-Дону</strong> — идеальное решение для косметологов, желающих улучшить качество взаимодействия с клиентами и повысить свои продажи.</p>
<p>В программе изучаются основные техники ведения общения, выявления потребностей клиентов и построения доверительных отношений.</p>
<p>За <span class="price-highlight">14 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подходит как для начинающих специалистов, так и для практикующих косметологов, стремящихся развиваться в профессии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>14</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
<span><strong>2</strong> процедур</span>
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
<td>🔰 Основы общения</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Этапы коммуникации, общий подход к клиентам</td>
</tr>
<tr>
<td>📈 Психология клиента</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Анализ психотипов, выявление потребностей</td>
</tr>
<tr>
<td>🎨 Этика в косметологии</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Профессиональные стандарты поведения, конфликтные ситуации</td>
</tr>
<tr>
<td>🌟 Корпоративная культура</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание эффективной команды, внутренние коммуникации</td>
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
<li>🔍 Выявлять потребности и ожидания клиентов</li>
<li>🌈 Строить гармоничные отношения с клиентами</li>
<li>📈 Увеличивать лояльность и повторные визиты</li>
<li>👥 Работать с различными психотипами клиентов</li>
<li>🏆 Повышать свой профессиональный авторитет</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (в режиме онлайн)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 400 ₽/мес.</span> (доступна рассрочка на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">2 400 ₽</span> <span class="rating-count"><del>4 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение всегда актуальна</p>
<p><strong>📍 Адрес:</strong> г. Ростов на Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Ростове на Дону</strong> — это шанс освоить основы косметологии и дерматологии.</p>
<p>Вы изучите анатомию лица и шеи, а также основные санитарные требования для организации рабочего места косметолога.</p>
<p>За <span class="price-highlight">48 академических часов</span> вы получите практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и тем, кто хочет расширить свои знания в области косметологии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span> <span><strong>12</strong> уроков</span> <span><strong>6</strong> процедур</span> <span><strong>3–5</strong> недель</span>
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
<td>📜 Санитарные нормы</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Санитарные требования, обработка инструментов</td>
</tr>
<tr>
<td>🏛️ Анатомия лица и шеи</td>
<td><span class="price-highlight">8 ч / 3 урока</span></td>
<td>Строение мышц, старение кожи, методы антиэйджинга</td>
</tr>
<tr>
<td>💉 Основы дерматологии</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Кожные заболевания, коррекция пигментации</td>
</tr>
<tr>
<td>🧴 Уход за кожей</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Уход за кожей по возрасту, anti-age процедуры</td>
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
<li>Анализировать типы кожи и их потребности</li>
<li>Организовывать рабочее место косметолога</li>
<li>Понимать анатомию и физиологию лица и шеи</li>
<li>Осуществлять правильный уход в зависимости от возрастных изменений</li>
<li>Работать с клиентами, соблюдая санитарные нормы</li>
<li>Создавать эффективные антиэйдж-процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">23 800 ₽</span> <span class="rating-count"><del>39 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">до 40%</span> в период специального предложения</p>
<p><strong>📍 Адрес:</strong> Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Ростове-на-Дону</strong> — идеальный выбор для новичков и тех, кто хочет усовершенствовать свои навыки в индустрии красоты.</p>
<p>Программа включает в себя обучение современным методам аппаратной косметологии, таким как лазерная биоревитализация, RF-лифтинг и дарсонвализация.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит для всех желающих стать специалистом в области эстетической косметологии и начать свою карьеру.</p>
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
<td>🔰 Основы аппаратной косметологии</td>
<td><span class="price-highlight">40 ч / 8 уроков</span></td>
<td>Введение, техники безопасности, работа с аппаратами</td>
</tr>
<tr>
<td>📈 Процедуры омоложения</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>Лазерная био-ревитализация, микротоки</td>
</tr>
<tr>
<td>🎯 Коррекция фигуры</td>
<td><span class="price-highlight">30 ч / 6 уроков</span></td>
<td>RF-лифтинг, кавитация</td>
</tr>
<tr>
<td>🎨 Аппаратные пилинги</td>
<td><span class="price-highlight">26 ч / 4 урока</span></td>
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
<li>🔍 Проводить аппаратные процедуры по уходу за лицом и телом</li>
<li>⚙️ Работать с соврем Geräten аппаратов</li>
<li>🎯 Корректировать фигуру с помощью RF-терапии</li>
<li>🌟 Выполнять различные методики пилинга</li>
<li>💼 Создавать портфолио выполненных процедур</li>
<li>📋 Получать сертификат и повышать квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">48 ак. часов</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">20 900 ₽</span> <span class="rating-count"><del>34 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в течение курса.</p>
<p><strong>📍 Адрес:</strong> Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79001234567">+7 (900) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Ростове-на-Дону</strong> — это замечательная возможность для тех, кто хочет освоить популярную профессию нутрициолога.</p>
<p>Программа охватывает основы питания, выбор продуктов, а также правила обработки и хранения еды.</p>
<p>За <span class="price-highlight">48 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет как начинающим, так и желающим повысить квалификацию в области нутрициологии.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>48</strong> ак. часов</span>
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
<td>🔰 Основы питания</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Классификация пищевых веществ, состав пищи</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Типы витаминов, макро- и микронутриенты</td>
</tr>
<tr>
<td>🎯 Коррекция рациона</td>
<td><span class="price-highlight">16 ч / 4 урока</span></td>
<td>Диеты, пищевое поведение, гигиена питания</td>
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
<li>📊 Разбираться в составе пищи</li>
<li>⚖️ Выявлять потребности в витаминах и минералах</li>
<li>🍽️ Корректировать рацион питания</li>
<li>📋 Работать с реальными клиентами</li>
<li>✍️ Создавать собственный рацион и планы питания</li>
<li>🏅 Получить диплом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">6 300 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">56 500 ₽</span> <span class="rating-count"><del>94 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих предложений</p>
<p><strong>📍 Адрес:</strong> г. Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист (без мед. образования)" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист (без мед. образования)»</strong> в <strong>Ростове-на-Дону</strong> — это идеальный старт для начинающих мастеров, которые хотят войти в индустрию красоты.</p>
<p>Программа охватывает искусство выполнения косметических процедур, массажей и депиляции, включая аппаратные методы.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как начинающим, так и тем, кто уже работает в сфере красоты и хочет расширить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>28</strong> уроков</span>
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
<td><span class="price-highlight">42 ч / 12 уроков</span></td>
<td>Маски, комплексный уход</td>
</tr>
<tr>
<td>📈 Аппаратная косметология</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Физиотерапия, коррекция фигуры</td>
</tr>
<tr>
<td>🎨 SPA-косметология</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Ароматерапия, пилинги, обертывания</td>
</tr>
<tr>
<td>🧰 Депиляция</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Восковая депиляция, работа с клиентами</td>
</tr>
<tr>
<td>💆 Косметический массаж лица</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Основные движения, моделирующий массаж</td>
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
<li>💆 Проводить массажи лица и тела</li>
<li>🧪 Выполнять аппаратные процедуры ухода за кожей</li>
<li>🌿 Делать восковую депиляцию</li>
<li>📋 Работать с клиентами и формировать портфолио</li>
<li>🤝 Подтверждать квалификацию дипломом специалиста</li>
<li>💰 Стартовать карьеру в beauty-индустрии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span> (1-2 дня)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат о прохождении курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">до 750 ₽/мес.</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 500 ₽</span> <span class="rating-count"><del>12 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Ростове-на-Дону</strong> — отличная возможность освоить востребованную профессию.</p>
<p>В программе обучения — три техники работы с сахарной пастой и работа с популярными зонами с использованием профессиональной косметики.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подходит как для тех, кто хочет начать карьеру, так и для желающих улучшить свои навыки в депиляции.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>5</strong> процедур</span>
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
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Правила безопасности, подготовка инструментов, базовые техники</td>
</tr>
<tr>
<td>📈 Работа с зонами</td>
<td><span class="price-highlight">5 ч / 3 урока</span></td>
<td>Депиляция подмышек, бикини, голеней</td>
</tr>
<tr>
<td>🎯 Работа с клиентами</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Коммуникация с клиентами, управление конфликтами, индивидуальный подход</td>
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
<li>💡 Проводить сахарную депиляцию на различных участках тела</li>
<li>🛠️ Использовать профессиональные инструменты для шугаринга</li>
<li>🌟 Избежать распространённых ошибок и работать с клиентами</li>
<li>🌼 Уход за кожей после депиляции</li>
<li>📈 Развивать свою карьеру в области шугаринга</li>
<li>👥 Создавать и поддерживать хорошую репутацию мастера</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1-2 дня</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 300 ₽</span> <span class="rating-count"><del>12 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">50%</span> в период специальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Ростове-на-Дону</strong> — идеальный старт для тех, кто хочет освоить мастерство депиляции с нуля.</p>
<p>Программа включает изучение базовых и продвинутых техник работы с воском, а также подхода к каждому клиенту.</p>
<p>За <span class="price-highlight">11 ак. часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Идеальный выбор для начинающих, желающих быстро войти в профессию и начать зарабатывать.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>4</strong> процедуры</span>
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
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Общие техники восковой депиляции, подготовка к процедуре</td>
</tr>
<tr>
<td>📈 Продвинутые техники</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Шпательная и бандажная техники, работа с чувствительными зонами</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">4 ч / 3 урока</span></td>
<td>Отработка на моделях, обратная связь от преподавателя</td>
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
<li>🧵 Овладевать техникой восковой депиляции</li>
<li>🔍 Подходить индивидуально к каждому клиенту</li>
<li>📝 Работать с различными зонами: подмышки, голени, бикини</li>
<li>💼 Создавать клиентскую базу и устанавливать отношения</li>
<li>🛠️ Использовать инструменты и понимать их назначение</li>
<li>📋 Получать сертификат мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 600 ₽/мес.</span> (на 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">21 400 ₽</span> <span class="rating-count"><del>35 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> г. Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Ростове-на-Дону</strong> — идеальный выбор для начинающих и опытных специалистов в индустрии красоты.</p>
<p>Вы освоите все техники восковой и сахарной депиляции, получите навыки работы с клиентами и сможете сразу после обучения начать приём клиентов.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для профессионалов, желающих повысить квалификацию и расширить свои карьерные возможности.</p>
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
<td>🔰 Введение в депиляцию</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Основы восковой и сахарной депиляции</td>
</tr>
<tr>
<td>📈 Базовые техники</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Методы работы с воском и сахарной пастой</td>
</tr>
<tr>
<td>🎨 Продвинутые техники</td>
<td><span class="price-highlight">16 ч / 2 урока</span></td>
<td>Сложные участки, бразильское бикини</td>
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
<li>💡 Проводить профессиональные процедуры депиляции</li>
<li>✋ Работать с воском и сахарной пастой</li>
<li>🤝 Применять индивидуальный подход к каждому клиенту</li>
<li>📈 Заработать стабильный доход сразу после обучения</li>
<li>🎓 Получить диплом, подтверждающий квалификацию</li>
<li>🌟 Запустить собственное дело или работать в салоне</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<span class="diploma-tooltip"> Диплом о повышении квалификации<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> текущая акция на обучение</p>
<p><strong>📍 Адрес:</strong> г. Ростов на Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Ростове на Дону</strong> — это идеальный выбор для косметологов, желающих расширить свои знания и навыки в области коррекции гиперпигментации. Программа включает в себя как теоретические, так и практические занятия.</p>
<p>Курс охватывает техники всесезонных пилингов и ферулового массажа, что позволяет эффективно работать с гиперпигментацией и повышать лояльность клиентов.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом о повышении квалификации</span>.</p>
<p>Идеален для косметологов, стремящихся ввести в свою практику новые эффективные методы и увеличить количество клиентов.</p>
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
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Причины и стадии гиперпигментации, дифференциация</td>
</tr>
<tr>
<td>📈 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Сочетание пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>🎨 Феруловый массаж</td>
<td><span class="price-highlight">2 ч / 2 урока</span></td>
<td>Техника выполнения и алгоритм процедуры</td>
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
<li>📈 Подбирать процедуры в зависимости от фототипа кожи</li>
<li>🧖‍♀️ Комбинировать пилинги и феруловый массаж</li>
<li>📊 Составлять индивидуальные протоколы коррекции</li>
<li>🏆 Привлекать новых клиентов через эффективные процедуры</li>
<li>✨ Реализовывать домашний уход для профилактики рецидивов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 700 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">22 100 ₽</span> <span class="rating-count"><del>36 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> Ростов-на-Дону, пер. Газетный, д. 53</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78633222037">+7 (863) 322-20-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/upkeep&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/upkeep" target="_blank">rostov-na-donu.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/upkeep&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Ростове-на-Дону</strong> — идеальное решение для желающих начать карьеру в индустрии красоты.</p>
<p>Программа включает изучение популярных косметологических процедур, а также технику диагностики и ухода за кожей.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для начинающих, так и для желающих улучшить свои навыки.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">42 ч / 8 уроков</span></td>
<td>Строение кожи, техники очищения и питания</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">36 ч / 7 уроков</span></td>
<td>Механическая чистка, пилинги, маски</td>
</tr>
<tr>
<td>🎨 Завершение</td>
<td><span class="price-highlight">48 ч / 9 уроков</span></td>
<td>Карбокситерапия, комплексные уходы, работа с клиентом</td>
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
<li>💡 Выполнять процедуры по очищению и питанию кожи</li>
<li>🎯 Составлять индивидуальные программы ухода за кожей</li>
<li>🧬 Настраивать подбираемую косметику в зависимости от типа кожи</li>
<li>🌱 Осуществлять карбокситерапию для улучшения состояния кожи</li>
<li>📝 Профессионально общаться с клиентами и предлагать услуги</li>
<li>📋 Подтверждать квалификацию дипломом мастера красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://rostov-na-donu.ecolespb.ru/cosmetology-school/upkeep&sub1=https://rostov-na-donu.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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