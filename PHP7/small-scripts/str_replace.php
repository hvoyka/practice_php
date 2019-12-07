<?php 
$from = ["{TITLE}", "{BODY}"];
$to = [
    "Философия",
    "Представляется логичным."
];
$template =<<<MARKER

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{TITLE}</title>
</head>
<body>
{BODY}
</body>
</html>
MARKER;
echo str_replace($from, $to, $template);
?>