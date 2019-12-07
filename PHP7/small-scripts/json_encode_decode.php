<?php 
$arr = [
        "employee" => "Иван Иванов",
        "phones" => [
            "916 153 2854",
            "916 643 8420"
        ]
    ];
    $json =  json_encode($arr, JSON_UNESCAPED_UNICODE);
    echo $json;
    $arr2 = json_decode($json, true);
    echo "<pre>"; print_r($arr2); echo "</pre>";
?>
