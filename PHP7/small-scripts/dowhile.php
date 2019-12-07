<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $WasError = 0;
    if (isset($_REQUEST['doSubmit'])) do {
        if ($_REQUEST['reloads'] != 1+1+7) { $WasError = 1; break;}
        if ($_REQUEST['loader'] != "source") { $WasError = 1; break;}
        echo "Вы внимательный человек, поздравляем!<br>";
        exit();
    } while(0);
    if ($WasError) {
        echo "Вы ответили неверно, попробуйте еще раз.";
    }?>
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
        Число перезагрузок: <input type="text" name="reloads"><br>
        Загрузочная программа: <input type="text" name="loader"><br>
        <input type="submit" name="doSubmit" value="Ответить на вопросы">
    </form>
</body>
</html>