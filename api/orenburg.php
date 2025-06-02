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
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курс интегративной нутрициологии</div>
<h2>Курс интегративной нутрициологии</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">12 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">11 200 ₽</span> <span class="rating-count"><del>18 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущей акции</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://orenburg.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://orenburg.ecolespb.ru/cosmetology-school/integrativ-nutrition" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс интегративной нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс интегративной нутрициологии»</strong> в <strong>Оренбурге</strong> — это программа для тех, кто хочет научиться правильно выстраивать рацион питания для себя и своих клиентов.</p>
<p>Вы изучите современные подходы к интегративной нутрициологии, научитесь разбираться в потребностях различных категорий людей.</p>
<p>За <span class="price-highlight">12 академических часов</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как начинающим нутрициологам, так и опытным специалистам, желающим углубить свои знания.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>12</strong> ак. часов</span> <span><strong>4</strong> урока</span> <span><strong>3</strong> процедур</span> <span><strong>4</strong> недели</span>
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
<td>Основы питания</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Принципы здорового питания, макро- и микронутриенты</td>
</tr>
<tr>
<td>Специфика диет</td>
<td><span class="price-highlight">4 ч / 2 урока</span></td>
<td>Питание для спортсменов, беременных, детей и пожилых</td>
</tr>
<tr>
<td>Работа с клиентом</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Исследование потребностей и диагностика пищевого поведения</td>
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
<li>💪 Выстраивать индивидуальные планы питания</li>
<li>📊 Анализировать физическое состояние клиентов</li>
<li>📋 Консультировать по вопросам питания</li>
<li>📈 Понимать потребности различных категорий населения</li>
<li>🔍 Диагностика нарушений пищевого поведения</li>
<li>🔧 Рассчитывать суточные энергозатраты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/integrativ-nutrition&sub1=https://orenburg.ecolespb.ru/cosmetology-school/integrativ-nutrition" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки -->
<!-- Разделитель между курсами -->
<hr class="section-divider">
<!-- Конец разделителя -->
<!--endblok-->
<!--startblok-->
<!-- Главная карточка "Курсы косметологии SPA" в стиле Топ1 начало -->
<div class="sushi-ranking">
<div class="sushi-block">
<div class="rank-label">Курсы косметологии SPA</div>
<h2>Курсы косметологии SPA</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">1 день</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">8 000 ₽</span> <span class="rating-count"><del>13 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в рамках текущих акций</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы косметологии SPA»</strong> в <strong>Оренбурге</strong> — это идеальный выбор для тех, кто хочет освоить методы коррекции фигуры и омоложения кожи через обертывания и SPA-процедуры.</p>
<p>Программа включает в себя техники ароматерапии, обертывания и пилинги, с фокусом на практике на реальных клиентах.</p>
<p>За <span class="price-highlight">8 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат</span>.</p>
<p>Курс предназначен для начинающих и практикующих косметологов, желающих расширить свои навыки и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>8</strong> ак. часов</span> <span><strong>2</strong> урока</span> <span><strong>2</strong> процедуры</span> <span><strong>1 день</strong></span>
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
<td>Составление программ для ухода за кожей, правила спа-этикета</td>
</tr>
<tr>
<td>📈 Пилинг</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Свойства пилинга, базовые этапы и использование специализированных материалов</td>
</tr>
<tr>
<td>🎨 Обертывания</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
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
<li>💆 Владеть техникой SPA-процедур</li>
<li>🌿 Проводить ароматерапию</li>
<li>🔍 Создавать программы по уходу за кожей</li>
<li>🧖 Выполнять обертывания и пилинги</li>
<li>📈 Повышать профессионализм и привлекать новых клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">50 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Возможна рассрочка</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">25 000 ₽</span> <span class="rating-count"><del>40 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">37.5%</span> в ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79991234567">+7 (999) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/nurse&sub1=https://orenburg.ecolespb.ru/cosmetology-school/nurse" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/nurse&sub1=https://orenburg.ecolespb.ru/cosmetology-school/nurse" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс сестринского дела»</strong> в <strong>Оренбурге</strong> — отличный выбор для тех, кто хочет освоить профессию медицинской сестры.</p>
<p>Программа включает теоретические и практические занятия, на которых изучаются диагностика, уход за пациентами и оказание первой помощи.</p>
<p>За <span class="price-highlight">50 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Идеально подойдет для тех, кто начинает карьеру в медицинской сфере или желает повысить квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>50</strong> ак. часов</span> <span><strong>10</strong> уроков</span> <span><strong>5</strong> процедур</span> <span><strong>1.5</strong> месяца</span>
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
<td>Физиология, патологии, основы фармакологии</td>
</tr>
<tr>
<td>📈 Практическое общение</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Психология общения с пациентами</td>
</tr>
<tr>
<td>🎨 Первая помощь</td>
<td><span class="price-highlight">15 ч / 2 урока</span></td>
<td>Оказание первой помощи, навыки на практике</td>
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
<li>📊 Диагностировать состояние пациента и брать анализы</li>
<li>💬 Общаться с пациентами и их близкими</li>
<li>⏱ Оказывать первую помощь в экстренных ситуациях</li>
<li>🩺 Правильно вводить медицинские препараты</li>
<li>📈 Измерять пульс и давление</li>
<li>🛠 Разбираться в медицинских препаратах и их побочных эффектах</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/nurse&sub1=https://orenburg.ecolespb.ru/cosmetology-school/nurse" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки: На страницу курса -->
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">16 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 900 ₽</span> <span class="rating-count"><del>8 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при оформлении заявки</p>
<p><strong>📍 Адрес:</strong> Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по депиляции»</strong> в <strong>Оренбурге</strong> — идеальный выбор для косметологов, желающих освоить современные техники депиляции.</p>
<p>Программа включает обучение работе с полимерными восками и скоростным удалением волос.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных мастеров, желающих повысить свою квалификацию.</p>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Скоростные техники, работа с полимерными восками</td>
</tr>
<tr>
<td>📚 Бразильское бикини</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Пошаговая техника выполнения, противопоказания</td>
</tr>
<tr>
<td>💇 Ваксинг лица</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Удаление волосков с зоны лица, меры предосторожности</td>
</tr>
<tr>
<td>🧠 Психология общения с клиентом</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Нахождение индивидуального подхода</td>
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
<li>🧘 Выполнять депиляцию в скоростном режиме</li>
<li>🤝 Общаться с клиентами и находить подход к каждому</li>
<li>🌱 Работать с вросшими волосками и забритыми волосками</li>
<li>🎯 Продвигать свои услуги и находить клиентов</li>
<li>🎨 Проводить процедуры на разных зонах тела</li>
<li>💡 Осваивать современные техники депиляции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 900 ₽</span> <span class="rating-count"><del>9 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс в течение ограниченного времени</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://orenburg.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://orenburg.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Оренбурге</strong> — идеальный старт для тех, кто хочет стать косметологом с глубокими знаниями анатомии и дерматологии.</p>
<p>Вы изучите анатомию лица и шеи, типы кожи, а также санитарные требования к работе косметолога.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет повысить свою квалификацию в бьюти-индустрии.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часа</span>
<span><strong>4</strong> урока</span>
<span><strong>3</strong> процедуры</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Строение кожи, типы кожи, санитарные требования</td>
</tr>
<tr>
<td>📈 Основы дерматологии</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Анатомическое строение, виды кожных заболеваний</td>
</tr>
<tr>
<td>🎨 Уход за кожей </td>
<td><span class="price-highlight">8 ч / 1 урок</span></td>
<td>Anti-age процедуры, уход за кожей по возрасту</td>
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
<li>👩‍🔬 Организовывать рабочее место косметолога</li>
<li>🔍 Разбираться в типах кожи и их потребностях</li>
<li>🧠 Понимать анатомию лица и шеи</li>
<li>🧴 Осуществлять уход за кожей в зависимости от возраста</li>
<li>🎓 Получать диплом специалиста по окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/cosmetology&sub1=https://orenburg.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">24 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">10 000 ₽</span> <span class="rating-count"><del>16 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> при записи на курс</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://orenburg.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://orenburg.ecolespb.ru/cosmetology-school/nutrition-courses" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы основы нутрициологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы основы нутрициологии»</strong> в <strong>Оренбурге</strong> — это идеальный выбор для тех, кто хочет освоить нутрициологию и начать карьеру в этой востребованной сфере.</p>
<p>Программа охватывает изучение принципов здорового питания, выбор витаминов и минералов, а также основы обработки и хранения продуктов.</p>
<p>За <span class="price-highlight">24 академических часа</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">сертификат</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет улучшить свои знания о питании и начале карьеры.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>24</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
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
<td>🔰 Введение в нутрициологию</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Основы здорового питания и физиология</td>
</tr>
<tr>
<td>📈 Витамины и минералы</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классификация и функции витаминов</td>
</tr>
<tr>
<td>🎨 Коррекция рациона</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Диеты, детокс и гигиена питания</td>
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
<li>💡 Понимать состав пищи и принципы здорового питания</li>
<li>🧪 Определять потребности в витаминах и минералах</li>
<li>📅 Составлять индивидуальные планы питания для клиентов</li>
<li>📊 Работать с методами коррекции веса и пищевого поведения</li>
<li>🥗 Использовать диеты для достижения здорового образа жизни</li>
<li>📝 Подтвердить квалификацию сертификатом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/nutrition-courses&sub1=https://orenburg.ecolespb.ru/cosmetology-school/nutrition-courses" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 500 ₽/мес.</span> (9 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">31 000 ₽</span> <span class="rating-count"><del>51 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> временная акция</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://orenburg.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://orenburg.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Оренбурге</strong> — идеальный старт для начинающих специалистов в beauty-индустрии.</p>
<p>Программа включает изучение популярных косметологических процедур, массажей и аппаратной косметологии.</p>
<p>За <span class="price-highlight">127 академических часов</span> студенты получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для профессиональных мастеров, желающих повысить свою квалификацию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>127</strong> ак. часов</span>
<span><strong>24</strong> урока</span>
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
<td><span class="price-highlight">64 ч / 12 уроков</span></td>
<td>Оценка состояния кожи, комплексный уход, пилинги</td>
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
<td>💆‍♀️ Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Старт работы мастера, депиляция бикини, работа с клиентами</td>
</tr>
<tr>
<td>💆 Максимальный массаж</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Классический, пластический массаж</td>
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
<li>💆‍♀️ Проводить различные процедуры по уходу за кожей</li>
<li>🖌️ Выполнять массажи лица и тела</li>
<li>✂️ Применять техники депиляции и обработки кожи</li>
<li>🔥 Работать с аппаратной косметологией</li>
<li>📊 Разрабатывать индивидуальные программы ухода для клиентов</li>
<li>📋 Подтверждать квалификацию дипломом специалиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician&sub1=https://orenburg.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Опция рассрочки доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период акций.</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79001234567">+7 (900) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции воском" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции воском»</strong> в <strong>Оренбурге</strong> — идеальный выбор для начинающих мастеров красоты и тех, кто хочет развить свои навыки в депиляции.</p>
<p>Вы освоите основные техники восковой депиляции, включая шпательную и бандажную, а также получите знания по уходу за кожей.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит для всех, кто хочет начать карьеру в сфере красоты и освоить востребованную профессию.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
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
<td>🔰 Основы депиляции</td>
<td><span class="price-highlight">16 ч / 3 урока</span></td>
<td>Теория восковой депиляции, инструменты и материалы</td>
</tr>
<tr>
<td>🎓 Первая процедура</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Восковая депиляция: техника и безопасность</td>
</tr>
<tr>
<td>🌸 Депиляция бикини</td>
<td><span class="price-highlight">24 ч / 4 урока</span></td>
<td>Подготовка клиента и особые техники</td>
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
<li>📋 Проводить процедуру депиляции в различных зонах</li>
<li>👥 Эффективно общаться с клиентами</li>
<li>🚧 Избегать распространенных ошибок мастера</li>
<li>🏆 Строить карьеру в индустрии красоты</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">124 ак. часа</span> (2-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 500 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">16 700 ₽</span> <span class="rating-count"><del>26 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">37%</span> доступна для новых студентов</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Оренбурге</strong> — отличный старт для тех, кто хочет освоить современную косметологию.</p>
<p>Программа охватывает технологии дарсонвализации, микротоков, лазерной биоревитализации, УЗ-процедур и RF-лифтинга.</p>
<p>За <span class="price-highlight">124 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Идеальный выбор для начинающих и тех, кто хочет улучшить свои навыки в сфере красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>124</strong> ак. часов</span>
<span><strong>23</strong> урока</span>
<span><strong>21</strong> процедур</span>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">30 ч / 10 уроков</span></td>
<td>Основы аппаратной косметологии, техники безопасности</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">50 ч / 8 уроков</span></td>
<td>Дарсонвализация, микротоки, лазерная биоревитализация</td>
</tr>
<tr>
<td>🎨 Профессиональный</td>
<td><span class="price-highlight">44 ч / 5 уроков</span></td>
<td>RF-лифтинг, кавитация, аппаратные пилинги</td>
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
<li>🎯 Оценивать состояние кожи клиента и подбирать процедуры</li>
<li>🔧 Проводить аппаратные процедуры безопасно и эффективно</li>
<li>💡 Использовать современное оборудование для косметологии</li>
<li>📈 Корректировать фигуру клиентов с помощью специалистических методик</li>
<li>✏️ Создавать качественное портфолио для демонстрации навыков</li>
<li>📋 Получать сертификаты и дипломы для повышения квалификации</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 академических часов</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна рассрочка</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на текущий момент.</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://orenburg.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://orenburg.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией»</strong> в <strong>Оренбурге</strong> — идеальный выбор для косметологов, стремящихся повысить свою квалификацию и освоить новые техники работы с гиперпигментацией.</p>
<p>Программа охватывает методы ферулового массажа и комбинированного подхода к пилингам для стойких результатов.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих привлечь больше клиентов.</p>
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
<td>Причины возникновения пигментных пятен</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ак.час</span></td>
<td>Алгоритмы подбора процедур</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ак.час</span></td>
<td>Сочетание пилингов с ретиноидной терапией</td>
</tr>
<tr>
<td>✨ Выполнение процедуры</td>
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
<li>💡 Безопасная коррекция гиперпигментации</li>
<li>🔍 Подбор процедур с учетом фототипа кожи</li>
<li>🔗 Комбинирование пилингов и ретиноидов</li>
<li>🎯 Проведение ферулового массажа по авторской методике</li>
<li>📋 Составление индивидуальных протоколов коррекции</li>
<li>📈 Увеличение числа клиентов через эффективные процедуры</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa&sub1=https://orenburg.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 700 ₽/мес.</span> (3 месяца)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 900 ₽</span> <span class="rating-count"><del>23 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> - выгодные предложения актуальны на данный момент.</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73522260051">+7 (352) 226-00-51</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://orenburg.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://orenburg.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Оренбурге</strong> — идеальный старт для тех, кто хочет овладеть актуальными методами удаления волос.</p>
<p>Вы сможете освоить восковую депиляцию и шугаринг, а также скоростные техники работы с клиентами.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Подойдет как начинающим, так и уже работающим мастерам для повышения квалификации и быстрого выхода на стабильный доход.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>9</strong> процедур</span>
<span><strong>5</strong> уроков</span>
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
<td>Техника шугаринга, депиляция бикини</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Сложные техники депиляции, работа с восками</td>
</tr>
<tr>
<td>🎨 Мастера</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Работа с клиентами, скоростные техники</td>
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
<li>💪 Проводить процедуру восковой и шугаринг депиляции</li>
<li>🧼 Соблюдать правила гигиены и безопасности</li>
<li>🤝 Консультировать клиентов по процедуре и домашнему уходу</li>
<li>🌟 Индивидуально подходить к каждому клиенту</li>
<li>✨ Осваивать новые техники удаления даже самых сложных волос</li>
<li>📋 Получить диплом об окончании обучения</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/programm-master_waxing&sub1=https://orenburg.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">11 ак. часов</span> (1-2 недели)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат об окончании курса<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">600 ₽/мес.</span> (12 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Оренбурге</strong> — отличный вариант для начинающих мастеров и тех, кто хочет улучшить свои навыки в депиляции.</p>
<p>Программа включает изучение трех техник работы с сахарной пастой, работу с самыми популярными зонами и специализацию на индивидуальном подходе к клиенту.</p>
<p>За <span class="price-highlight">11 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат об окончании курса</span>.</p>
<p>Идеально подходит для старта карьеры и повышения квалификации.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>11</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>2</strong> процедуры</span>
<span><strong>1-2</strong> недели</span>
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
<td><span class="price-highlight">2h / 2 урока</span></td>
<td>Техника шугаринга, правила безопасности</td>
</tr>
<tr>
<td>📈 Продвинутый</td>
<td><span class="price-highlight">3h / 2 урока</span></td>
<td>Депиляция зон подмышек и бикини</td>
</tr>
<tr>
<td>🎓 Практика с клиентами</td>
<td><span class="price-highlight">6h / 2 урока</span></td>
<td>Работа с реальными клиентами, отработка на моделях</td>
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
<li>💡 Выполнять сахарную депиляцию</li>
<li>🛠️ Использовать профессиональные инструменты</li>
<li>🧴 Правильно ухаживать за кожей после процедуры</li>
<li>🤝 Выстраивать эффективную коммуникацию с клиентами</li>
<li>📋 Избегать распространенных ошибок мастеров</li>
<li>🎯 Создавать портфолио для привлечения клиентов</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii&sub1=https://orenburg.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Персональный сертификат<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span>
</span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 800 ₽</span> <span class="rating-count"><del>11 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">более 40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73512220000">+7 (351) 222-00-00</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://orenburg.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://orenburg.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом в косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом в косметологии»</strong> в <strong>Оренбурге</strong> — предназначен для косметологов, желающих повысить свою квалификацию и лучше понимать потребности клиентов.</p>
<p>Программа включает изучение этики общения и психологии клиентов, чтобы вы могли грамотно выявлять потребности и повышать лояльность.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получают практику и <span class="price-highlight">персональный сертификат</span>.</p>
<p>Курс подойдёт как новичкам, так и опытным специалистам, желающим укрепить свои навыки общения с клиентами.</p>
</div>
<!-- Краткое описание курса конец-->
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
<td>🔰 Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Этапы коммуникации с клиентом, создание профессионального имиджа</td>
</tr>
<tr>
<td>📈 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Профессиональная этика, общение с клиентом</td>
</tr>
<tr>
<td>🎨 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Элементы корпоративной культуры, формирование команды</td>
</tr>
<tr>
<td>🧠 Психология общения</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
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
<li>💬 Выстраивать гармоничные отношения с клиентами</li>
<li>🔍 Выявлять потребности клиентов</li>
<li>🌱 Повышать лояльность клиентов и повторные обращения</li>
<li>🎯 Общаться с различными психотипами клиентов</li>
<li>👥 Укреплять командный дух и корпоративную культуру</li>
<li>📊 Создавать личный проект в beauty-сфере</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya&sub1=https://orenburg.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">60 ак. часов</span> (1-3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 100 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 400 ₽</span> <span class="rating-count"><del>30 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в перерывах между наборами групп</p>
<p><strong>📍 Адрес:</strong> г. Оренбург, ул. Чичерина, д. 26</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+73532450454">+7 (3532) 45-04-54</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/upkeep&sub1=https://orenburg.ecolespb.ru/cosmetology-school/upkeep" target="_blank">orenburg.ecolespb.ru</a></p>
</div>
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/upkeep&sub1=https://orenburg.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Оренбурге</strong> — идеальный выбор для тех, кто хочет освоить профессию косметолога-эстетиста и получить востребованные навыки ухода за кожей.</p>
<p>Вы изучите техники диагностики и лечения кожи, а также научитесь выполнять популярные косметологические процедуры.</p>
<p>За <span class="price-highlight">60 академических часов</span> вы получите практику на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как для начинающих, так и для тех, кто хочет повысить квалификацию и начать карьеру в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>8</strong> процедур</span>
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
<td>🔰 Введение в косметологию</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Основы анатомии кожи, диагностика</td>
</tr>
<tr>
<td>📈 Уход за проблемной кожей</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Технологии лечения акне, пигментации</td>
</tr>
<tr>
<td>🎨 Пилинги и чистка</td>
<td><span class="price-highlight">12 ч / 3 урока</span></td>
<td>Техники пилингов, механическая чистка</td>
</tr>
<tr>
<td>💆‍♀️ Массаж для косметологов</td>
<td><span class="price-highlight">8 ч / 2 урока</span></td>
<td>Классический массаж, противопоказания</td>
</tr>
<tr>
<td>🌟 Маски и альгинаты</td>
<td><span class="price-highlight">6 ч / 2 урока</span></td>
<td>Выбор и применение масок, техники наложения</td>
</tr>
<tr>
<td>🧪 Практика на моделях</td>
<td><span class="price-highlight">20 ч / 2 урока</span></td>
<td>Работа с клиентами, отработка навыков</td>
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
<li>💧 Разбираться в особенностях кожи и ее состояния</li>
<li>🩺 Эффективно работать с проблемной кожей</li>
<li>🧖‍♀️ Проводить качественные пилинги и чистки</li>
<li>💆‍♂️ Выполнять классический массаж лица</li>
<li>🎭 Подбирать индивидуальные маски для клиентов</li>
<li>📑 Получить диплом и начать карьеру в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://go.avnxt.site/3b6bc242f51d5261?erid=LdtCKaoMZ&m=2&dl=https://orenburg.ecolespb.ru/cosmetology-school/upkeep&sub1=https://orenburg.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a> <!-- Конец кнопки -->
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