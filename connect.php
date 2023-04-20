<?php
public function connect($url, $data){
  $options = [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data)
  ];
  $curl = curl_init($url);
}
?>
