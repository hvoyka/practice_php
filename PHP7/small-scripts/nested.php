<?php 
function father ($a)
{
    echo $a, "<br>";
    function child($b) {
        echo $b + 1, "<br>";
        return $b * $b;
    }
    return $a * $a * child($a);
}

father(10);
child(30);
?>