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
    if(isset($_REQUEST['doGo'])){
        foreach ($_REQUEST['known']as $k => $v){
            if($v) echo "Вы знаете язык $k!<br>";
            else echo "Вы не знаете язык $k.<br>";
        }
    }?>
    <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
Какие Языки программирования вы знаете?<br>
<input type="hidden" name="known[PHP]" value="0">
<input type="checkbox" name="known[PHP]" value="1"> PHP <br>

<input type="hidden" name="known[Perl]" value="0">
<input type="checkbox" name="known[Perl]" value="1">Perl<br>
<input type="submit" name="doGo" value="GO">
</form>
</body>
</html>