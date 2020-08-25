<?php

$prices['Pneumatiky'] = 2500;
$prices['Lahve oleje'] = 250;
$prices['Zapalovací svíčky'] = 100;

while ($element = each($prices)) {
  echo $element['key']." – ".$element['value'];
  echo "<br />";
}

?>