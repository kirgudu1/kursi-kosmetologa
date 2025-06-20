<?php
function loadMetaTags($filename) {
    $meta_tags = [];

    if (!file_exists($filename)) {
        return $meta_tags; // Если файл не найден, возвращаем пустой массив
    }

    if (($handle = fopen($filename, "r")) !== false) {
        $header = fgetcsv($handle, 10000, ";"); // Читаем заголовки колонок
        while (($row = fgetcsv($handle, 10000, ";")) !== false) {
            // Проверяем, что у строки есть все нужные элементы
            if (count($row) < 7) continue;

            $page = trim($row[0] ?? "");
            $title = trim($row[1] ?? "По умолчанию");
            $description = trim($row[2] ?? "Описание по умолчанию");
            $h1 = trim($row[3] ?? "");
            $content = trim($row[4] ?? "");
            $gorod = trim($row[5] ?? "");
            $gorod_translit = trim($row[6] ?? "");

            // Убираем переводы строк из контента
            $content = str_replace(["\r", "\n"], " ", $content);

            $meta_tags[$page] = [
                "title" => $title,
                "description" => $description,
                "h1" => $h1,
                "content" => $content,
                "gorod" => $gorod,
                "gorod_translit" => $gorod_translit
            ];
        }
        fclose($handle);
    }

    return $meta_tags;
}

$meta_tags = loadMetaTags(__DIR__ . "/meta_txt.txt");

// Получение данных текущей страницы
$page = basename($_SERVER['SCRIPT_NAME']);
$current_meta = $meta_tags[$page] ?? [];
?>
