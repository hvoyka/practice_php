<?php ## Вывод дерева каталогов файловой системы
//Функция выводить имена всех подкаталогов в текущем каталоге, 
// выполняя рекурсивный обход. Параметр $level задает текущую глубину рекурсии.
//  
function printTree($level = 1) {
    // Открываем каталог и выходим в случае ошибки
    $d = @opendir(".");
    if(!$d) return;
    while (($e = readdir($d)) !== false) {
        //Игнорируем элементы .. и .
        if($e == '.' || $e == '..') continue;
        // Нам нужны только подкаталоги
        if(!@is_dir($e)) continue;
        // Печатаем пробелы, что бы сместить вывод
        for($i = 0; $i < $level; $i++) echo "  ";
        // Выводим текущий элемент
        echo "$e\n";
        //Входим в текущий каталог и печатаем его
        if(!chdir($e)) continue;
        printTree($level + 1);
        // возвращаемся назад
        chdir("..");
        // Отправляем данные в баруезр, что бы измбежать видимости зависания
        // для больших распечаток
        flush();
    }
    closedir($d);
}

// Выводим остальный текст фиксированным шрифтом
echo "<pre>";
echo "/\n";
//Входим в корневой каталог и печатаем его
chdir($_SERVER['DOCUMENT_ROOT']);
printTree();
echo "</pre>";
?>