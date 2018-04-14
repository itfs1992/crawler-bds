<?php 
require_once 'curl_class.php';
require_once 'simple_html_dom.php';
$curl = curlClass::getInstance(TRUE);
$html = $curl->fetchURL('https://batdongsan.com.vn/nha-dat-ban-tp-hcm',0);
$html = str_get_html($html);
// echo $html;

foreach ($html->find('.search-productItem') as $item) {
	$data[]['title'] = $item->find('.p-title h3',0)->plaintext;
}
echo '<pre>';
var_dump($data);
echo '</pre>';

// echo $html->find('.search-productItem',0);