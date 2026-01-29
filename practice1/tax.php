<?php
const TAX_RATE = 0.1;

function item($price) {
  return $price + $price * TAX_RATE;
}

echo item(1000)."円";
echo "\n";
