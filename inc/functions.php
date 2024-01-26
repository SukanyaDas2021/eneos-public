<?php 

function getCompanyData($name, $siteurl) {
    
    $url = "http://52.203.56.207:8081/company/query";
    $data = array(
        'company' => "$name",
        'url' => "$siteurl"
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
        $result = "Error: " . curl_error($curl);
    } else {
        $result = json_decode($response, true);
    }
    
    curl_close($curl);

    return $result;

}

function dataFormating($data){
    return (is_array($data)) ? implode(', ', $data) : $data;
}

function ensureHttpScheme($url) {
    $parsedUrl = parse_url($url);

    // If the URL doesn't have a scheme, add "http://"
    if (!isset($parsedUrl['scheme'])) {
        $url = 'http://' . $url;
    }

    return $url;
}

?>