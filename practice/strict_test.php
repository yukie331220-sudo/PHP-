<?php
declare(strict_types=1);

// function aaa(): int {
//    echo 10;
// }

function add(int $value) :array {
  echo "addしました";
  return [10, 20, 30];
}


$result = add("10");
