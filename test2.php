<?php
 
 require 'vendor/autoload.php';
 use GuzzleHttp\Client;


 $shopWORD = "渋谷駅";
 
 $PARAMS = ["key"=>'f0d3cc012ab27202', "count"=>3, "keyword"=>$shopWORD, "format"=>'json'];
 $client = new Client();
 $json_res = $client->request('GET', "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/", ['query' => $PARAMS])->getBody()->getContents(); 
 $response = json_decode($json_res,true);
    $eatInfo = [];
    $i=0;
    foreach($response['results']['shop'] as $result){
        $eatInfo[$i]=$result;
        $i=$i+1;
    };
    print_r($eatInfo);
    ?>