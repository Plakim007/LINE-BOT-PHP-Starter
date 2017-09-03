<?php
echo "I am a bot";
$access_token ='k8hkSyMu4vTCrKMbHGHT7Mnr6SH0pSJTrDPDxVQlwHnaZw7WPbXnCFUE8iJ++3lJ9ZkwEDvyEfj89a87FDKGnVegGezaJCAclT+3r85iwSafB/oJAm1KUGfHEFlcUxxQS28VBGrDf5xQXAZY9Vyd/gdB04t89/1O/w1cDnyilFU=';
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$strUrl = "https://api.line.me/v2/bot/message/reply";
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$access_token}";
if($arrJson['events'][0]['message']['text'] == "สวัสดี"||$arrJson['events'][0]['message']['text'] == "ดี"||$arrJson['events'][0]['message']['text'] == "ดีจ้า"||$arrJson['events'][0]['message']['text'] == "หวัดดี"
  ||$arrJson['events'][0]['message']['text'] == "Hi"||$arrJson['events'][0]['message']['text'] == "Hello"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดีเราเอง";
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"||$arrJson['events'][0]['message']['text'] == "ชื่อ"||$arrJson['events'][0]['message']['text'] == "ชื่อไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "หนู";
}else if($arrJson['events'][0]['message']['text'] == "แมวไง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = 'https://github.com/swunews/LINE-BOT-PHP-Starter/blob/master/grief-and-loss.jpg?raw=true';
  $arrPostData['messages'][0]['previewImageUrl'] = 'https://github.com/swunews/LINE-BOT-PHP-Starter/blob/master/grief-and-loss_preview.jpg?raw=true';
}else if($arrJson['events'][0]['message']['text'] == "หิวจัง"||$arrJson['events'][0]['message']['text'] == "มีไรกิน"||$arrJson['events'][0]['message']['text'] == "หิว"||$arrJson['events'][0]['message']['text'] == "หิวแล้ว"
  ||$arrJson['events'][0]['message']['text'] == "ของกิน"||$arrJson['events'][0]['message']['text'] == "อาหาร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = 'https://github.com/swunews/LINE-BOT-PHP-Starter/blob/master/sushi.jpg?raw=true';
  $arrPostData['messages'][0]['previewImageUrl'] = 'https://github.com/swunews/LINE-BOT-PHP-Starter/blob/master/sushi_preview.jpg?raw=true';
}else if($arrJson['events'][0]['message']['text'] == "มศว"||$arrJson['events'][0]['message']['text'] == "swu" 
  ||$arrJson['events'][0]['message']['text'] == "ที่อยู่"||$arrJson['events'][0]['message']['text'] == "Location" ||$arrJson['events'][0]['message']['text'] == "location"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "location";
  $arrPostData['messages'][0]['title'] = "มหาวิทยาลัยศรีนครินทรวิโรฒ";
  $arrPostData['messages'][0]['address'] = "สุขุมวิท 23, แขวงคลองเตยเหนือ เขตวัฒนา กรุงเทพ, 10110";
  $arrPostData['messages'][0]['latitude'] = "13.745430";
  $arrPostData['messages'][0]['longitude'] = "100.565264";
/*}else if($arrJson['events'][0]['message']['text'] == "อิอิ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
 $arrPostData['messages'][0]['type'] = "confirm"; */
}else if($arrJson['events'][0]['message']['text'] == "เข้าสู่ระบบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['message'][0]['type'] = "template";
  $arrPostData['message'][0]['altText'] = "this is a confirm template";
  $arrPostData['message'][0]['template'] = { $arrPostData['message'][0]['type'] = "confirm";
                                             $arrPostData['message'][0]['text'] = "Are you sure?";
                                             $arrPostData['message'][0]['actions'] = [{$arrPostData['message'][0]['type'] = "message";
                                                                                      $arrPostData['message'][0]['label'] = "Yes";
                                                                                      $arrPostData['message'][0]['text'] = "yes";},
                                                                                      {$arrPostData['message'][0]['type'] = "message";
                                                                                      $arrPostData['message'][0]['label'] = "No";
                                                                                      $arrPostData['message'][0]['text'] = "no";}
                                                                                     ]
                                           }
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "sticker";
  $arrPostData['messages'][0]['packageId'] = "1";
  $stickerRand = rand(0,9);
  if($stickerRand == 0){
    $arrPostData['messages'][0]['stickerId'] = "3";
  }else if($stickerRand == 1){
    $arrPostData['messages'][0]['stickerId'] = "11";
  }else if($stickerRand == 2){
    $arrPostData['messages'][0]['stickerId'] = "5";
  }else if($stickerRand == 3){
   $arrPostData['messages'][0]['stickerId'] = "7";
  }else if($stickerRand == 4){
    $arrPostData['messages'][0]['stickerId'] = "2";
  }else if($stickerRand == 5){
    $arrPostData['messages'][0]['stickerId'] = "1";
  }else if($stickerRand == 6){
    $arrPostData['messages'][0]['stickerId'] = "4";
  }else if($stickerRand == 7){
    $arrPostData['messages'][0]['stickerId'] = "9";
  }else if($stickerRand == 8){
    $arrPostData['messages'][0]['stickerId'] = "5";
  }else{
    $arrPostData['messages'][0]['stickerId'] = "6";
  }
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
echo "Dee ja";
?>
