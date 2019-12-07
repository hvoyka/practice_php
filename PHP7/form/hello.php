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
    if($_REQUEST['login'] == "root" && $_REQUEST['password'] == "Z10N0101"){
        echo "Доступ открыт для пользователя {$_REQUEST['login']}";
        system("rundll32.exe user32.dll, LockWorkStation");
    } else {
        echo "Доступ закрыт!";
    }
    ?>
</body>
</html>