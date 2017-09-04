curl -X GET \
-H 'Authorization: Bearer {ENTER_ACCESS_TOKEN}' \
https://api.line.me/v1/oauth/verify

{
  "channelId":1350031035,
  "mid":"ub00b9ac609e51f4707cd86d8e797491b"
}

<?php
$access_token = '1OiFBTnqZXbgr2ve3DDNpm0txSkoO+j/1IQEwRuB0ISj8QI2xgvDGsRMaA7aj0XqgZ0vGhuGsAuc8MTmBnjhLr3tAYNVtsMfsavMOjQhzXwidI3Z3/fG9vLVcmRTx/1Uwh0g8taHhZpXgfe0+idoAgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
