<?php
$access_token = 'e2MvgbAhd+dz19VPdFtOaSxPO3rb1y4rW/BiKDe8aNSrVzjaurILBQzNznraa+4ljvWYKDk2znJS7RByDcbVnVlX+PY67k6B4l2TfbAU7KsEZdfDCUFh0sdLMsgmag03m80c4InfL2ubizZCaEMYwQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
