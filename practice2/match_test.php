<?php
$status = 3;

$result = match($status) {
  1 => '待機中',
  2 => '処理中',
  3 => '完了',
};

echo ($result);
echo "\n";
