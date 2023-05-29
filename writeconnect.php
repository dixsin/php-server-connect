<?php
public function writeconnect($data){
  $options = [
    CURLOPT_RETURNTRANSFER => false,
    CURLOPT_GET => true,
    CURLOPT_POSTFIELDS => http_build_query($data)
  ];
  $curl = curl_init($url);
  return base64_encode($curl->data);
}
?>
