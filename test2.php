<?php
 
 require 'vendor/autoload.php';
 use GuzzleHttp\Client;

$client = new RakutenRws_Client();
// アプリID (デベロッパーID) をセットします
$client->setApplicationId('1001393711643575856');
 
// アフィリエイトID をセットします(任意)
$client->setAffiliateId('20c8801b.9bc4906b.20c8801c.3a69e429');
 
// IchibaItem/Search API から検索します
$json_res = $client->execute('TravelKeywordHotelSearch', array(
    'format'=>'json',
    'keyword' => '北海道',
    'hits'=>3,
    'formatVersion'=>2,
    'responseType'=>'small',
    // 'elements'=>'hotelName,hotelInformationUrl,hotelImageUrl,hotelMapImageUrl,address1,reviewAverage'
));
 
// レスポンスが正しいかを isOk() で確認することができます
if ($json_res->isOk()) {
    // 配列アクセスによりレスポンスにアクセスすることができます。
    // print_r($json_res);
    $response=json_decode($json_res,true);
    print_r($response."\n");
} else {
    echo 'Error:'.$response->getMessage();
}
?>