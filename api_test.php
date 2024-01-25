<?php

$url = 'http://52.203.56.207:8081/company/query';
$data = array(
    'company' => 'Cadd centre',
    'url' => 'https://caddcentre.com/'
);

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
);

$curl = curl_init();
curl_setopt_array($curl, $options);

$response = curl_exec($curl);

if ($response === false) {
    echo 'Curl error: ' . curl_error($curl);
} else {
    // echo 'Response: <pre>' . print_r($response, true) . '</pre>';
    //echo json_encode($response);

    $phpArray = json_decode($response, true);
}

echo '<pre>';
print_r($phpArray);
echo '</pre>';

curl_close($curl);
?>
