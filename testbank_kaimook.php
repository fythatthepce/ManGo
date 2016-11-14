<!DOCTYPE html>
<html>
<body>
<?php
            $data = array('key'=>'M819UI0jIg','Account'=>'1327100011');
            $data_json = json_encode($data);

            $url = "http://161.246.70.75:8080/cesebank/api/checkbalance.php";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            curl_close($ch);
            echo $response;
?>

</body>
</html>
