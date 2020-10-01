<?php # Разбор даты
  $str = " 15-16/2020      ";
  $re = '{
    ^\s*(
      (\d+)
      \s* [[:punct:]] \s*
      (\d+)
      \s* [[:punct:]] \s*
      (\d+)
    )\s*$
  }xs';
preg_match($re, $str, $matches) or die ("Not a date: $str");

echo "Дата без пробелов: '$matches[1]' <br/>";
echo "День: $matches[2] <br/>";
echo "Месяц: $matches[3] <br/>";
echo "Год: $matches[4] <br/>";

?>