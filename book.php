<?php
// リンク取得

function getBookLinks(): array
{
  libxml_use_internal_errors(true);
  $dom = new DOMDocument();
  $html = file_get_contents("https://www.nippan.co.jp/ranking/annual/?post_id=&ranking_cat=89#single");
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);

  // 空の配列を作成している
  $links = [];
  // 対象となるリンク分繰り返し処理をしている
  foreach ($xpath->query('//td//a[contains(@class, "c-single03__table-link")]/@href') as $link) {
    // 画面に表示させている
    // echo $link->nodeValue;
    // からの配列にデータを詰めていく
    array_push($links, $link->nodeValue);
  }
  // 配列を呼び出し元に戻している
  return $links;
}

$links = getBookLinks();
print_r($links);

// タイトルを取得
function getBookTitles(): array
{
  $dom = new DOMDocument();
  $html = file_get_contents("https://www.nippan.co.jp/ranking/annual/?post_id=&ranking_cat=89#single");
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);

  $titles = [];
  foreach ($xpath->query('//a[contains(@class, "c-single03__table-link")]') as $title) {
    array_push($titles, $title->nodeValue);
  }
  return $titles;
}

$titles = getBookTitles();
print_r($titles);

// 著者を取得
function getAuthor(): array
{
  $dom = new DOMDocument();
  $html = file_get_contents("https://www.nippan.co.jp/ranking/annual/?post_id=&ranking_cat=89#single");
  @$dom->loadHTML($html);
  $xpath = new DOMXpath($dom);

  $authors = [];
  foreach ($xpath->query('.//a[@class="c-single03__table-link"]/parent::td/following-sibling::td[1]') as $author) {
    array_push($authors, $author->nodeValue);
  }
  return $authors;
}

$authors = getAuthor();
print_r($authors);

// 金額を取得
function getPrice(): array {
  $dom = new DOMDocument();
  $html =file_get_contents('https://www.nippan.co.jp/ranking/annual/?post_id=&ranking_cat=89#single');
  @$dom->loadHTML($html);
  $xpath = new DOMXpath($dom);

  $prices = [];
  foreach ($xpath->query('.//a[@class="c-single03__table-link"]/parent::td/following-sibling::td[2]') as $price) {
    array_push($prices, $price->nodeValue);
}
  return $prices;
}

$prices = getPrice();
print_r($prices);


// ＼ここから表示させる／　ᕦ(ò_óˇ)ᕤ
echo "🔽年間ベストセラー(2025年)";
echo "\n";

$infos = array_map(null, $titles, $authors, $prices);
print_r($infos);
