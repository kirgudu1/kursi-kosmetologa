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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">126 ак. часов</span> (2–3 месяца)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">2 600 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">7 600 ₽</span> <span class="rating-count"><del>12 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79999999999">+7 (999) 999-99-99</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс косметологии SPA" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс косметологии SPA»</strong> в <strong>Орске</strong> — идеальный выбор для тех, кто хочет научиться корректировать фигуру и омолаживать кожу.</p>
<p>В рамках программы вы освоите técnicas SPA-процедур, чтобы предоставить качественные услуги по уходу за телом.</p>
<p>За <span class="price-highlight">126 академических часов</span> слушатели получают практический опыт на реальных клиентах и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто хочет расширить свой спектр услуг и привлечь новых клиентов.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>126</strong> ак. часов</span>
<span><strong>24</strong> уроков</span>
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
<td>🔰 АРОМАТЕРАПИЯ</td>
<td><span class="price-highlight">3 ч / 1 урок</span></td>
<td>Создание расслабляющей атмосферы с ароматами</td>
</tr>
<tr>
<td>📈 ПИЛИНГ ТЕЛА</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Свойства и применение поверхностного пилинга</td>
</tr>
<tr>
<td>🎨 ОБЕРТЫВАНИЯ</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Технологии выполнения обертываний</td>
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
<li>✨ Проводить популярные обертывания и пилинги тела</li>
<li>🔍 Повышать уровень профессионализма в косметологии</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/kurs-cosmetology-the-body" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">8 800 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 700 ₽</span> <span class="rating-count"><del>26 500 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в период акций.</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78008008080">+7 (800) 800-80-80</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс депиляции»</strong> в <strong>Орске</strong> — это отличная возможность для начинающих и профессионалов усовершенствовать свои навыки.</p>
<p>Вы изучите техники восковой депиляции и индивидуальный подход к каждому клиенту.</p>
<p>За <span class="price-highlight">60 академических часов</span> слушатели получают практические навыки и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс идеально подходит для старта карьеры и повышения квалификации в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>60</strong> ак. часов</span>
<span><strong>12</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td><span class="price-highlight">10 ч / 3 урока</span></td>
<td>Техники восковой депиляции, подготовка к процедуре</td>
</tr>
<tr>
<td>📈 Особенности зон</td>
<td><span class="price-highlight">20 ч / 5 уроков</span></td>
<td>Депиляция подмышек, голеней, бикини</td>
</tr>
<tr>
<td>🎯 Работа с клиентами</td>
<td><span class="price-highlight">15 ч / 4 урока</span></td>
<td>Коммуникация и уход за кожей</td>
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
<li>💧 Овладеть техникой восковой депиляции</li>
<li>🔍 Подбирать воск в зависимости от зоны</li>
<li>🤝 Эффективно работать с клиентами</li>
<li>✅ Проводить процедуры безопасно и качественно</li>
<li>📊 Справляться с частыми проблемами мастера</li>
<li>🌟 Создавать качество, чтобы клиенты возвращались</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-voskom" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">21 ак. час</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">13 200 ₽</span> <span class="rating-count"><del>22 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при записи в период акций</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс аппаратной косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс аппаратной косметологии»</strong> в <strong>Орске</strong> — отличная возможность для новичков и тех, кто хочет поднять свою квалификацию в области косметологии.</p>
<p>Программа охватывает аппаратные процедуры, включая дарсонвализацию, микротоки, лазерную биоревитализацию, УЗ-процедуры и RF-лифтинг.</p>
<p>За <span class="price-highlight">21 академический час</span> слушатели получают практику на реальных клиентах и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс идеально подходит для начала карьеры в косметологии и повышения действующей квалификации.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>21</strong> ак. час</span>
<span><strong>8</strong> уроков</span>
<span><strong>11</strong> процедур</span>
<span><strong>3–7</strong> недель</span>
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
<td><span class="price-highlight">7 ак. часов / 3 урока</span></td>
<td>Основы аппаратной косметологии, дарсонвализация, микротоки</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">7 ак. часов / 3 урока</span></td>
<td>Лазерная биоревитализация, УЗ-процедуры, RF-лифтинг</td>
</tr>
<tr>
<td>🎨 Дополнительные процедуры</td>
<td><span class="price-highlight">7 ак. часов / 2 урока</span></td>
<td>Кавитация, аппаратные пилинги</td>
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
<li>🧖‍♀️ Осуществлять аппаратные процедуры для омоложения и тонизирования кожи</li>
<li>📏 Корректировать фигуру клиентов с помощью аппаратных методик</li>
<li>🔧 Работать с инновационным косметологическим оборудованием</li>
<li>✅ Обеспечивать безопасность процедур и уверенный результат</li>
<li>💼 Создавать собственное портфолио и привлекать клиентов</li>
<li>📜 Получать сертификат об окончании курса</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/kurs-hardware-cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">4 ак. часа</span></p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Сертификат специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span></span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">6 500 ₽</span> <span class="rating-count"><del>10 900 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение при ранней записи</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс этики и психологии общения с клиентом" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс этики и психологии общения с клиентом»</strong> в <strong>Орске</strong> — это идеальный выбор для косметологов, стремящихся улучшить отношения с клиентами и увеличить продажи.</p>
<p>Программа охватывает психотипы клиентов, этику общения и техники выявления потребностей.</p>
<p>За <span class="price-highlight">4 академических часа</span> слушатели получают практику и <span class="price-highlight">сертификат специалиста</span>.</p>
<p>Идеально подходит для всех, кто хочет повысить свою квалификацию и авторитет в коллективе.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>4</strong> ак. часа</span> <span><strong>4</strong> урока</span> <span><strong>0</strong> процедур</span> <span><strong>1 день</strong></span>
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
<td>👥 Имидж и психология</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Грамотная коммуникация с клиентом</td>
</tr>
<tr>
<td>📜 Этика в косметологии</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Советы по этичному общению с клиентами</td>
</tr>
<tr>
<td>🏢 Корпоративная культура</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Формирование корпоративной культуры</td>
</tr>
<tr>
<td>🗣️ Психология общения</td>
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
<li>📈 Выстраивать положительные отношения с клиентами</li>
<li>🧠 Определять психотипы клиентов</li>
<li>💬 Эффективно общаться во время процедур</li>
<li>🏆 Повышать авторитет среди коллег</li>
<li>📊 Увеличивать продажи услуг</li>
<li>👥 Превращать сложных клиентов в лояльных</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/ehtika-i-psihologiya-obshcheniya" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">50 ак. часов</span> (4–6 недель)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 000 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">24 000 ₽</span> <span class="rating-count"><del>40 000 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в преддверии нового учебного семестра.</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79001234567">+7 (900) 123-45-67</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/nurse" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/nurse" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс сестринского дела" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс сестринского дела»</strong> в <strong>Орске</strong> — это идеальный старт для желающих стать медицинскими сестрами и развить навыки в уходе за пациентами.</p>
<p>Программа включает изучение физиологии, психологии общения и оказания первой помощи, с акцентом на практику.</p>
<p>За <span class="price-highlight">50 академических часов</span> слушатели получают уникальную практику и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдёт как начинающим, так и тем, кто хочет повысить свою квалификацию в медицинском уходе.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>50</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
<span><strong>5</strong> процедур</span>
<span><strong>4–6</strong> недель</span>
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
<td>🔰 Основы физиологии</td>
<td><span class="price-highlight">20 ч / 4 урока</span></td>
<td>Изучение человеческого организма и его функций</td>
</tr>
<tr>
<td>📈 Фармакология и иммунология</td>
<td><span class="price-highlight">15 ч / 3 урока</span></td>
<td>Работа с медицинскими препаратами и анализами</td>
</tr>
<tr>
<td>🗣️ Психология общения</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Эффективное общение с пациентами и их близкими</td>
</tr>
<tr>
<td>🩹 Первая помощь</td>
<td><span class="price-highlight">5 ч / 1 урок</span></td>
<td>Оказание первой помощи в экстренных ситуациях</td>
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
<li>🩺 Диагностировать состояние пациента</li>
<li>💉 Оказывать грамотный уход</li>
<li>🚑 Оказывать первую помощь</li>
<li>📊 Работать с анализами и медицинскими препаратами</li>
<li>💬 Эффективно общаться с пациентами</li>
<li>🏥 Информировать близких о состоянии пациента</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/nurse" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">38 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом мастера красоты<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 000 ₽/мес.</span> (5 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">14 700 ₽</span> <span class="rating-count"><del>8 800 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в период максимальных предложений</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+78008008080">+7 (800) 800-80-80</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс шугаринга" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс шугаринга»</strong> в <strong>Орске</strong> — идеальный старт для всех желающих освоить профессию мастера шугаринга.</p>
<p>Программа включает 3 техники работы с сахарной пастой, а также работу с популярными зонами на профессиональной косметике.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают ценный опыт на моделях и <span class="price-highlight">диплом мастера красоты</span>.</p>
<p>Курс подойдет как для новичков, так и для тех, кто хочет улучшить свои навыки и начать зарабатывать.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>38</strong> ак. часов</span>
<span><strong>10</strong> уроков</span>
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
<td>🔰 Введение в шугаринг</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Основы техники шугаринга, правила безопасности</td>
</tr>
<tr>
<td>🎯 Практика на моделях</td>
<td><span class="price-highlight">14 ч / 4 урока</span></td>
<td>Отработка навыков на моделях, работа с различными зонами</td>
</tr>
<tr>
<td>📈 Депиляция бикини</td>
<td><span class="price-highlight">14 ч / 4 урока</span></td>
<td>Эстетические аспекты, противопоказания, подготовка клиента</td>
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
<li>🏅 Выполнять сахарную депиляцию различных зон тела</li>
<li>💼 Понять инструменты и материалы профессиональных мастеров</li>
<li>💡 Избегать распространенных ошибок в работе</li>
<li>💬 Эффективно общаться с клиентами и решать конфликты</li>
<li>📈 Стартовать карьеру мастера шугаринга с хорошими перспективами</li>
<li>📋 Получить диплом, подтверждающий квалификацию</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2 ак. часа</span> (1–2 недели)</p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">5 600 ₽</span> <span class="rating-count"><del>9 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в активно проходящих акциях</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/cosmetology" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс дерматологии и анатомии лица" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс дерматологии и анатомии лица»</strong> в <strong>Орске</strong> — это шанс стать профессионалом в сфере косметологии, освоив анатомию и дерматологию.</p>
<p>Вы изучите основы ухода за кожей, санитарные требования и освоите грамотное оформление рабочего пространства.</p>
<p>За <span class="price-highlight">2 академических часа</span> слушатели получают практические навыки и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подойдет всем, кто хочет начать карьеру в индустрии красоты и создать профессиональное портфолио.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>2</strong> ак. часа</span>
<span><strong>2</strong> урока</span>
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
<td>🔰 Введение в дерматологию</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Строение кожи, типы кожи, основные проблемы</td>
</tr>
<tr>
<td>📈 Анатомия лица и шеи</td>
<td><span class="price-highlight">1 ч / 1 урок</span></td>
<td>Анатомические структуры, старение кожи, антивозрастные процедуры</td>
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
<li>🧴 Понимать типы кожи и их проблемы</li>
<li>🧠 Изучать анатомию лица и шеи</li>
<li>🔍 Оценивать состояние кожи и рекомендации по уходу</li>
<li>🕵️‍♀️ Применять дерматологические знания в практике</li>
<li>⏳ Замедлять процесс старения кожи</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/cosmetology" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">64 ак. часа</span> (1 месяц)</p>
<p><strong>📜 Документ после обучения:</strong> <span class="diploma-tooltip"> Диплом косметолога<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 800 ₽</span> <span class="rating-count"><del>31 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> предложена в большинстве случаев</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/upkeep" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс эстетической косметологии" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс эстетической косметологии»</strong> в <strong>Орске</strong> — это уникальная возможность для начинающих и желающих освоить новую профессию в beauty-сфере.</p>
<p>Программа охватывает диагностику и лечение кожи, а также востребованные процедуры ухода.</p>
<p>За <span class="price-highlight">64 академических часа</span> слушатели получают практику на моделях и <span class="price-highlight">диплом косметолога</span>.</p>
<p>Идеально подходит для тех, кто хочет начать карьеру в индустрии красоты или улучшить свои навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>64</strong> ак. часа</span>
<span><strong>8</strong> уроков</span>
<span><strong>6</strong> процедур</span>
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
<td><span class="price-highlight">20 ч / 3 урока</span></td>
<td>Строение и состояние кожи, уходовые техники</td>
</tr>
<tr>
<td>📈 Уход за кожей</td>
<td><span class="price-highlight">12 ч / 2 урока</span></td>
<td>Механическая чистка, пилинги, маски</td>
</tr>
<tr>
<td>🎨 Практика на моделях</td>
<td><span class="price-highlight">32 ч / 3 урока</span></td>
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
<li>🔍 Понимать особенности строения и состояния кожи</li>
<li>👩‍⚕️ Работать с проблемными участками кожи</li>
<li>🧴 Выполнять косметологические процедуры</li>
<li>💡 Проводить диагностику кожи</li>
<li>📋 Консультировать клиентов по уходу</li>
<li>📂 Создавать и вести портфолио</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/upkeep" target="_blank" class="order-button">📘 На страницу курса</a>
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
<h2>Курс повышения квалификации по всесезонным пилингам</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">6 ак. часов</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">Доступна</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">3 990 ₽</span> <span class="rating-count"><del>6 700 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение в течение ограниченного времени.</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курс повышения квалификации по всесезонным пилингам при работе с гиперпигментацией" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курс повышения квалификации по всесезонным пилингам»</strong> в <strong>Орске</strong> — это идеальное решение для косметологов, стремящихся повысить свою квалификацию и эффективно работать с гиперпигментацией.</p>
<p>Вы изучите всесезонные пилинги, технику ферулового массажа и получите знания для индивидуального подбора процедур.</p>
<p>За <span class="price-highlight">6 академических часов</span> слушатели получат практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для опытных специалистов, желающих расширить свои навыки и привлечь больше клиентов.</p>
</div>
<!-- Краткое описание курса конец -->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>6</strong> ак. часов</span>
<span><strong>4</strong> урока</span>
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
<td>🔰 Основы гиперпигментации</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Причины пигментации, диагностика</td>
</tr>
<tr>
<td>📈 Тактика работы косметолога</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Подбор процедур, минимизация рисков</td>
</tr>
<tr>
<td>🎨 Пилинги и ретиноиды</td>
<td><span class="price-highlight">1 ч</span></td>
<td>Сочетание пилингов, ретиноидов</td>
</tr>
<tr>
<td>🔧 Выполнение процедуры</td>
<td><span class="price-highlight">2 ч</span></td>
<td>Феруловый массаж, практическое освоение</td>
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
<li>🔍 Безопасная коррекция гиперпигментации</li>
<li>🧪 Подбор процедур с учетом фототипа кожи</li>
<li>👩‍🔬 Комбинирование пилингов и ретиноидов</li>
<li>💆 Проведение ферулового массажа по авторской методике</li>
<li>📋 Составление индивидуальных протоколов коррекции</li>
<li>🌟 Привлечение клиентов с помощью эффективных процедур</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/povyshenie-kvalifikacii-kosmetologa" target="_blank" class="order-button">📘 На страницу курса</a>
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
<h2>Косметолог - эстетист (без мед. образования)</h2>
<div class="sushi-info">
<p><strong>🎓 Академия Эколь</strong> — <span class="price-highlight">Государственная лицензия от министерства образования</span></p>
<p><strong>⏳ Продолжительность:</strong> <span class="price-highlight">2-3 месяца</span></p>
<p><strong>📜 Документ после обучения:</strong>
<span class="diploma-tooltip"> Диплом специалиста<span class="footnote" data-tooltip="Подробнее о документах смотрите на сайте академии"> *</span> </span></p>
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">4 600 ₽/мес.</span> (менее 6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">44 600 ₽</span> <span class="rating-count"><del>74 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на обучение доступна в ограниченный период</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Косметолог - эстетист" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Косметолог - эстетист»</strong> в <strong>Орске</strong> — отличный старт для начинающих специалистов в индустрии красоты и тех, кто хочет повысить свои навыки.</p>
<p>Программа охватывает теоретические и практические знания, включая аппаратные процедуры, массаж лица, spa-процедуры и депиляцию.</p>
<p>За <span class="price-highlight">127 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для начинающих, так и для специалистов, желающих углубить свои знания и навыки.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>127</strong> ак. часов</span>
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
<td>🌿 Эстетическая косметология</td>
<td><span class="price-highlight">64 ч / 12 уроков</span></td>
<td>Оценка состояния кожи, классический массаж, поверхностные пилинги</td>
</tr>
<tr>
<td>🔧 Аппаратная косметология</td>
<td><span class="price-highlight">21 ч / 4 урока</span></td>
<td>Омолаживание, коррекция фигуры, биоревитализация</td>
</tr>
<tr>
<td>🌊 SPA-косметология</td>
<td><span class="price-highlight">10 ч / 2 урока</span></td>
<td>Ароматерапия, пилинг тела, обертывания</td>
</tr>
<tr>
<td>✂️ Депиляция</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Работа с клиентами, депиляция бикини</td>
</tr>
<tr>
<td>💆‍♀️ Косметический массаж лица</td>
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
<li>🧼 Проводить механическую и аппаратную чистку кожи</li>
<li>💆‍♀️ Исполнять различные виды массажей лица</li>
<li>💇‍♀️ Выполнять восковую депиляцию</li>
<li>🧴 Подбирать маски, пилинги и обертывания по типу кожи</li>
<li>🔧 Проводить аппаратные процедуры по омоложению и коррекции фигуры</li>
<li>📑 Получить диплом, подтверждающий квалификацию косметолога-эстетиста</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/programm-cosmetologist_esthetician" target="_blank" class="order-button">📘 На страницу курса</a>
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">В наличии</span></p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">4 900 ₽</span> <span class="rating-count"><del>8 200 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> на все курсы в данный период</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Курсы повышения квалификации по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало-->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>«Курсы повышения квалификации по депиляции»</strong> в <strong>Орске</strong> — идеальный выбор для тех, кто хочет освоить современные техники депиляции.</p>
<p>Программа включает освоение скоростных техник депиляции и работу с полимерными восками для быстрой и качественной процедуры.</p>
<p>За <span class="price-highlight">16 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">сертификат о прохождении курса</span>.</p>
<p>Курс подойдёт как новичкам, так и тем, кто хочет повысить квалификацию и начать зарабатывать в индустрии красоты.</p>
</div>
<!-- Краткое описание курса конец-->
<!-- Блок: Программа обучения (таблица) -->
<div class="sushi-section">
<h3>Программа обучения</h3>
<!-- Краткая сводка -->
<div class="program-summary">
<span><strong>16</strong> ак. часов</span>
<span><strong>6</strong> уроков</span>
<span><strong>2</strong> процедур</span>
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
<td>Современные техники депиляции, работа с вросшими волосками</td>
</tr>
<tr>
<td>📈 Скоростные техники</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Техника "Персидская дорожка" и "Итальянская глазурь"</td>
</tr>
<tr>
<td>🎨 Полимерные воски</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Работа с полимерными восками для быстрой депиляции</td>
</tr>
<tr>
<td>🧑‍🤝‍🧑 Взаимодействие с клиентом</td>
<td><span class="price-highlight">4 ч / 1 урок</span></td>
<td>Психология работы с клиентом, подготовка к процедуре</td>
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
<li>💡 Ускорять процедуру депиляции</li>
<li>🧠 Работать с вросшими волосками и удалять забритые волоски</li>
<li>🌀 Использовать скоростные техники удаления волосков</li>
<li>🤝 Подбирать индивидуальный подход к каждому клиенту</li>
<li>📊 Продвигать свои услуги в индустрии красоты</li>
<li>📈 Ориентироваться на тренды и тенденции</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/kursy-depilyacii-povishenie-kvalifikacii" target="_blank" class="order-button">📘 На страницу курса</a>
<!-- Конец кнопки: На страницу курса -->
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
<p><strong>📅 Рассрочка:</strong> <span class="price-highlight">3 100 ₽/мес.</span> (6 месяцев)</p>
<p><strong>💵 Полная стоимость:</strong> <span class="price-highlight discount-price">18 800 ₽</span> <span class="rating-count"><del>31 400 ₽</del></span></p>
<p><strong>🔥 Скидка:</strong> <span class="price-highlight">40%</span> в текущий период акций</p>
<p><strong>📍 Адрес:</strong> г. Орск, ул. Строителей, д. 33А</p>
<p><strong>📞 Телефон:</strong> <a href="tel:+79878843337">+7 (987) 884-33-37</a></p>
<p><strong>🌐 Сайт:</strong> <a href="https://orsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank">orsk.ecolespb.ru</a></p>
</div>
<a href="https://orsk.ecolespb.ru/cosmetology-school/programm-master_waxing" class="order-button" target="_blank">На страницу курса</a>
</div>
</div>
<!-- Главная карточка "Мастер по депиляции" в стиле Топ1 конец -->
<!-- Краткое описание курса начало -->
<div class="sushi-section">
<h3>О курсе</h3>
<p><strong>Курс «Мастер по депиляции»</strong> в <strong>Орске</strong> — это идеальный старт для начинающих и опытных мастеров, желающих расширить свои навыки в индустрии красоты.</p>
<p>Программа включает восковую депиляцию и шугаринг, обучая современным техникам удаления волос.</p>
<p>За <span class="price-highlight">38 академических часов</span> слушатели получают практику на моделях и <span class="price-highlight">диплом специалиста</span>.</p>
<p>Курс подходит как для новичков, так и для тех, кто уже работает и хочет повысить свою квалификацию.</p>
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
<td>🔰 Базовый</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Техника шугаринга, депиляция бикини</td>
</tr>
<tr>
<td>📈 Повышение</td>
<td><span class="price-highlight">11 ч / 2 урока</span></td>
<td>Сложности в профессии, работа с клиентами</td>
</tr>
<tr>
<td>🎓 Продвинутый</td>
<td><span class="price-highlight">16 ч / 1 урок</span></td>
<td>Скоростные техники, бразильское бикини</td>
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
<li>💇‍♀️ Проводить профессиональную депиляцию воском и шугарингом</li>
<li>🔍 Работать с любыми типами волос и разными зонами тела</li>
<li>💬 Консультировать клиентов по уходу после процедур</li>
<li>✨ Организовывать свое рабочее место и привлекать клиентов</li>
<li>📋 Подтверждать квалификацию дипломом</li>
</ul>
</div>
<!-- Конец блока: Чему вы научитесь -->
<!-- Кнопка: На страницу курса -->
<a href="https://orsk.ecolespb.ru/cosmetology-school/programm-master_waxing" target="_blank" class="order-button">📘 На страницу курса</a>
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