<?php
$phone = ['001', '949', '555', '0112'];
$save = serialize($phone);
echo $save . "\n";
$phone = 'bogus';
echo $phone . "\n";
$phone = unserialize($save);
echo "<pre>";
print_r($phone);
echo "</pre>";
?>