<?php


$data = array('username'=>'Mango','password'=>'mango','account_number'=>'9176914644');
$data_string = json_encode($data);

    $url = "http://bank.route.in.th:9999/api/transferlogbusiness";
    $ch = curl_init(); // initiate curl
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, true); // tell curl you want to post something
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); // define what you want to post
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );

    $output = curl_exec ($ch); // execute   curl_close ($ch); // close curl handle
    echo $output;//*** var_dump($output); // show output


?>
