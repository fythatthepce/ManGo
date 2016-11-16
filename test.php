<!DOCTYPE html>
<html>
<body>
<?php

	$data = array('username'=>'Mango','password'=>'mango','account_number'=>'9176914644');


        $url = "http://bank.route.in.th:9999/api/transferlogbusiness";

        $options = array(
  			'http' => array(
    		'method'  => 'POST',
    		'content' => json_encode( $data ),
    		'header'=>  "Content-Type: application/json\r\n" .
              "Accept: application/json\r\n"
   			 )
			);

			$context  = stream_context_create( $options );
			$result = file_get_contents( $url, false, $context );
			$response = json_decode( $result );
			echo "$response"
?>


</body>

</html>
