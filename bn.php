<!DOCTYPE html>
<html>
<body>
<?php

      $data = array('username' =>'Mango','password'=>'mango','account_number' =>'9176914644');
      $data_string = json_encode($data);

      $ch = curl_init();                    // initiate curl
      $url = "http://bank.route.in.th:9999/api/transferlogbusiness"; // where you want to post data
      curl_setopt($ch, CURLOPT_URL,$url);
      curl_setopt($ch, CURLOPT_POST, true);  // tell curl you want to post something
      curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string); // define what you want to post
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
      $output = curl_exec ($ch); // execute

      curl_close ($ch); // close curl handle

      var_dump($output); // show output

?>

</body>

</html>
