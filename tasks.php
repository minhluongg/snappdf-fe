<?php


$data = json_encode($_POST);

if ($_POST["task"]) {
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://34.143.135.203:8000/api/v1/tasks',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
        'Content-Type:  application/json'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

}


