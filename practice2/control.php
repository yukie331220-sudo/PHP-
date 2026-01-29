<?php

$i = 1;
while ($i <= 10) {

  if ($i === 8) {
    break;
  } else if ($i % 3 === 0) {
    $i++;
    continue;
  }
  echo $i . ",";
  $i++;
}
