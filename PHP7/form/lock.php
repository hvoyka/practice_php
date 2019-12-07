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
    if(!isset($_REQUEST['doGO'])) {?>
        <form action="<?=$_SERVER['SCRIPT_NAME']?>">
        Логин: <input type="text" name="login" value=""><br>
        Пароль: <input type="password" name="password" value=""><br>
        <input type="submit" name="doGO" value="Нажмите кнопку, что бы запустить сценарий!">
    </form>
    <?php } else {
        if($_REQUEST['login'] == "root" && $_REQUEST['password'] == "Z10N0101"){
            echo "Доступ открыт для пользователя {$_REQUEST['login']}";
            system("rundll32.exe user32.dll, LockWorkStation");
        } else {
            echo "Доступ закрыт!";
        }
    }?>
</body>
</html>