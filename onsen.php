<?php

// var_dump($argv);
// echo $argv[0];
// echo "\n";
// echo $argv[1];

// 引数チェック

if(count($argv) != 2) {
  echo "引数不正";
  exit(1);
}

// 引数が問題なければ
if (!is_numeric($argv[1])) {
  echo "引数は数字にしてください";
  exit(1);
}

echo "処理終了";
// string -> int
$test = $argv[1];
$loop_count = intval($argv[1]);

echo "\n";
echo gettype($test);
echo "\n";
echo gettype($loop_count);

for($i= 0; $i < $loop_count; $i++) 
// if ($arg == null || $argv >== 2 || $argv:) {
//   echo "引数不正";
// }

// echo $argv[];

// function getHtmlContents(): string {
//   $baseUrl = "https://www.jalan.net/jalan/doc/etc/onsenranking/onsenranking_index.html#onsen_top";
//   $html = @file_get_contents($baseUrl);
//   if (!$html) return "";
//   return $html;
// }

// function getOnsenLinks(string $html) {
//   libxml_use_internal_errors(true);
//   $dom = new DOMDocument();
//   $html = file_get_contents("https://www.jalan.net/jalan/doc/etc/onsenranking/onsenranking_index.html#onsen_top");
//   @$dom->loadHTML('<?xml encoding="UTF-8">' . $html);
//   $xpath = new DOMXPath($dom);

// echo $xpath->query('//title')->item(0)->nodeValue;
// echo $xpath->query('//ul[@class="listInfoGuide"]//a')->item(0)->nodeValue;
// $node = $xpath->query('//ul[@class="listInfoGuide"]//a')->item(0);
// echo $node->getAttribute('href');

// }

// foreach ($xpath->query('.//ul[@class="listInfoGuide]/li') as $node); {
//   $links = [];
//   foreach ($xpath->query('.//li/a/@href', $node) as $link_node) {
//     $links = $link_node->nodeValue;
//   }
// }

// 名称、住所、泉質、効能を取得



// 4つを表示

// function viewContent($links) {
//   echo "名称：" . {} ;
//   echo "住所：" . {} ;
//   echo "泉質：" . {} ;
//   echo "効能：" . {} ;
// }


?>


venderのパンサーをrequiredで撮ってあげたらバーチャルDOMでもいける
