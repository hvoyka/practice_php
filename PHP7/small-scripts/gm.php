<?php // Работа со временем по GMT
// Вычисляет timestamp в Гринвиче, который соответвует
// локальному timestamp-формату
function local12gm($localStamp = false) {
  if ($localStamp === false) $localStamp = time();
  //Получаем смещение часовой зоны в секундах
  $tzOffset = date('Z', $localStamp);
  // Вычитаем разницу - получаем время по GMT
  return $localStamp - $tzOffset;
} 
// Вычисляет локальный timestamp в Гринвиче, который
// соотвествует timestamp-формату по GTM. Можно указать
// смещение локальной зоны относительно GMT (в часах),
// тогда будет осуществлен перевод в эту зону
// (а не в текущую локальную)
function gm12local($gmStamp = false, $tzOffset = false) {
  if ($gmStamp === false) return time();
  //Получаем смещение часовой зоны в секундах
  if( $tzOffset === false)
    $tzOffset = date('Z', $gmStamp);
  else
    $tzOffset *= 60 * 60;
  // Вычитаем разницу - получаем время по GMT
  return $gmStamp + $tzOffset;
} 
?>