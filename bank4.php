<?php

      $url = "http://bank.route.in.th:9999/api/transferlogbusiness"; // กำหนด URl ของเว็บไวต์ B
      //$request = 'username=guest&password=guest'; // กำหนด HTTP Request โดยระบุ username=guest และ password=เguest (รูปแบบเหมือนการส่งค่า $_GET แต่ข้างหน้าข้อความไม่มีเครื่องหมาย ?)
      $request = array('username'=>'Mango','password'=>'mango','account_number'=>'9176914644');
      $ch = curl_init(); // เริ่มต้นใช้งาน cURL

      curl_setopt($ch, CURLOPT_URL, $url); // กำหนดค่า URL
      curl_setopt($ch, CURLOPT_POST, 1); // กำหนดรูปแบบการส่งข้อมูลเป็นแบบ $_POST
      curl_setopt($ch, CURLOPT_POSTFIELDS, $request); // กำหนดค่า HTTP Request
      curl_setopt($ch, CURLOPT_HEADER, 0); // กำให้ cURL ไม่มีการตั้งค่า Header
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // กำหนดให้ cURL คืนค่าผลลัพท์

      $response = curl_exec($ch); // ประมวลผล cURL
      curl_close($ch); // ปิดการใช้งาน cURL
      echo $response

?>
