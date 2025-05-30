import os
import csv
import re

def extract_data_from_php_files():
    script_dir = os.path.dirname(os.path.abspath(__file__))  # Путь к папке со скриптом
    output_file = os.path.join(script_dir, "таблица для метатегов.csv")
    
    data = []
    
    for filename in os.listdir(script_dir):
        if filename.endswith(".php"):  # Проверяем, является ли файл PHP-файлом
            file_path = os.path.join(script_dir, filename)
            
            with open(file_path, "r", encoding="utf-8", errors="ignore") as file:
                content = file.read()
                
                # Извлекаем город
                city_match = re.search(r"Адрес:</strong> г. \s*(\S+\s+\S+\s+\S+)", content)
                city = city_match.group(1) if city_match else "Не найдено"
                
                # Подсчет количества вхождений "<!--startblok-->"
                top_count = content.count("<!--startblok-->")
                
                # Добавляем данные в список
                data.append([filename, city, top_count])
    
    # Записываем данные в CSV
    with open(output_file, "w", newline="", encoding="utf-8") as csvfile:
        writer = csv.writer(csvfile)
        writer.writerow(["Имя файла", "Город", "Количество топов"])
        writer.writerows(data)
    
    print(f"Файл сохранен: {output_file}")

if __name__ == "__main__":
    extract_data_from_php_files()