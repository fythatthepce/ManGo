<!DOCTYPE html>
<html>
<body>
<?php
  $data = array("username" => 'Mango',"password" => 'mango',"account_number" => '9176914644',);

            $data_json = json_encode($data);

            $url = "http://bank.route.in.th:9999/api/transferlogbusiness";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);// set post data to true
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($ch);
            $error = curl_error($ch);

            echo '<pre>';print_r($error);die;

            $response  = curl_exec($ch);
            curl_close($ch);
            echo $response;
?>


</body>

</html>
