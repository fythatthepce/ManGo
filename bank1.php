<!DOCTYPE html>
<html>
<body>


<?php
	if($_POST){
		if($_POST['username'] == 'Mango')
		{

			$data = array('username' =>'Mango','password'=>'mango','account_number' =>'9176914644');
			$data_json = json_encode($data);

			$url = "http://bank.route.in.th:9999/api/transferlogbusiness";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      echo $response  = curl_exec($ch);
		}
  }
?>


<form method="post">
		username: <input type="text" name="username"><br>
		<input type="submit">
</form>




</body>
</html>
