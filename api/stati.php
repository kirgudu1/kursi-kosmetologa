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
	
	
	
<!-- Вводный абзац -->
<div class="sushi-section light-block">
  <h3>С чего всё начинается?</h3>
  <p>Мастер перманентного макияжа — звучит красиво, правда? Свободный график, благодарные клиентки, творческая работа… Но прежде чем записываться на курс и мечтать о дипломе, важно понять: <strong>а подойдёт ли мне эта профессия?</strong></p>

  <p>Чтобы не было сюрпризов вроде: «Ой, тут и писать надо?», «Я думала, всё проще…» или «Почему клиентка плачет, а я тоже», — вот <strong>7 честных пунктов</strong>, которые помогут трезво оценить, насколько вы готовы к профессии мастера ПМ.</p>

  <p>И начнём с самого главного — с <strong>ответственности</strong>. Без неё никуда!</p>
</div>
<!-- Конец вводного абзаца -->



<!-- Блок: Ответственность -->
<div class="sushi-section light-block with-image">
  <h3>1. Ответственность — ваше новое маленькое имя ☀️</h3>

  <div class="image-text-flex">
    <div class="image-column">
      <img src="/A_digital_illustration_in_soft,_warm,_pastel_color.png" alt="Мастер перманентного макияжа ведёт записи" class="responsive-image">
    </div>
    <div class="text-column">
      <p>Если вы думаете, что профессия мастера ПМ — это только «нарисовала бровки и пошла по делам» — спешим вас немного удивить. На самом деле это путь осознанности, аккуратности и любви к порядку.</p>

      <p>Ответственный мастер не просто умеет красиво красить — он ведёт клиентские карты, знает, какой пигмент использовал даже год назад, и не путает иглы <span class="emoji">😄</span>. Представьте, что к вам приходит клиентка через два года, а вы такая:</p>

      <div class="yellow-dialog">
        <span class="dialog-label">Вы:</span> «О, Марина! Тогда был тон №105, кожа — сухая, форма — “мягкая арка”. Давайте продолжим».
      </div>

      <p>Это вызывает доверие и восторг!</p>

      <p>И ещё один момент: учиться нужно у <em>опытных</em> преподавателей. Не у звезды Instagram с фильтрами и фотошопом, а у тех, кто умеет не только делать, но и объяснять. Знания — это инвестиция, и пусть она будет в правильное место.</p>

      <div class="soft-quote">
        Ответственность — это как хороший тональный: без неё можно, но с ней результат гораздо лучше.
      </div>
    </div>
  </div>
</div>
<!-- Конец блока: Ответственность -->




<!-- Блок: Честность в формате карточки-комикса -->
<div class="sushi-section honesty-comic">
  <div class="comic-image">
    <img src="/A_flat-style_digital_illustration_accompanies_a_se.png" alt="Мастер объясняет клиентке" class="responsive-image">
  </div>
  <div class="comic-text">
    <h3>2. Честность — не только с клиентом, но и с собой <span class="emoji">🟡</span></h3>

    <p>Честность в работе мастера ПМ — это не просто «не соврать». Это про прозрачность, открытость и уважение к человеку, который доверил вам своё лицо.</p>

    <div class="speech-bubble">
      <strong>Вы:</strong> «Да, брови вначале могут показаться слишком яркими. Через пару недель пигмент уляжется, и всё станет мягче. Это нормально — я рядом!»
    </div>

    <p>Такой подход экономит нервы обеим сторонам. А ещё создаёт ощущение заботы и профессионализма.</p>

    <div class="honesty-note">
      <strong>Под честностью скрывается и добросовестность.</strong><br>
      Делайте процедуру качественно с первого раза — а не «докрашу на коррекции, потому что устала».
    </div>
	
	  <p>И помните: лучше чуть больше объяснить, чем недообъяснить и получить потом тревожное сообщение в три утра 😅</p>

  </div>
</div>


<!-- Блок: Уважение к преподавателю -->
<div class="sushi-section honesty-comic">
  <div class="comic-image">
    <img src="/A_flat-style_digital_illustration_features_two_fem.png" alt="Преподаватель объясняет студентке" class="responsive-image">
  </div>
  <div class="comic-text">
    <h3>3. Уважение к преподавателю — без этого никуда 🎓</h3>

    <p>Вы пришли учиться. И, возможно, ваш преподаватель уже прошёл <em>всё</em>, что только вам предстоит: страхи, ошибки, разочарования и победы. Он делится с вами опытом, который накапливался годами, а вы получаете его за считаные дни. Это ли не магия?</p>

    <div class="speech-bubble">
      <strong>Студентка:</strong> «Спасибо вам за то, что вы так щедро делитесь опытом. Я представляю, сколько бы времени и денег ушло, чтобы дойти до этой точки самой.»
    </div>

    <p>Если вы чего-то не поняли — <strong>спросите</strong>. Это не стыдно. Гораздо хуже уйти с курса с фразой «всё ясно», когда на самом деле — не очень. Преподаватель — не угадыватель мыслей, ему нужно ваше честное участие.</p>

    <div class="honesty-note">
      <strong>Знания — это как шведский стол.</strong> Он накрыт для всех. Но только вы решаете, взять ли всё вкусное — или вежливо съесть один бутерброд и уйти голодной.
    </div>
  </div>
</div>












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