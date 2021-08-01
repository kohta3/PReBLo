<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$freeword='fvkldfzmbkljdzfnfbjklzdfnbjkfncb';

    try{
        // リクエスト送信
        $json_res = $client->request('GET','https://app.rakuten.co.jp/services/api/Travel/KeywordHotelSearch/20170426?',['query' =>[
            'applicationId'=>'1001393711643575856',    
            'format'=>'json',
            'affiliateId'=>'20c8801b.9bc4906b.20c8801c.3a69e429',
            'keyword'=>$freeword,
            'hits'=>3,
            'elements'=>'hotelName,hotelInformationUrl,hotelImageUrl,hotelMapImageUrl,address1,address2,reviewAverage'
            ]]
            )->getBody()->getContents();
        }catch(Exception $e){       
            return print("エラーが発生しました。APIのURLを確認してください。");
                }
            $response = json_decode($json_res,true);
            $hotelInfo = [];
            $i=0;
            foreach($response['hotels'] as $result){
                $hotelInfo[$i]=$result['hotel'][0]['hotelBasicInfo'];
                $i=$i+1;
            };
            print_r($hotelInfo);
            
?>