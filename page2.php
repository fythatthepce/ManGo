<?php
///Deocde Json

$result=getdata("http://mango.servehttp.com:8080/bank2.php");
$data = json_decode($result,true);
///Count
          $total=count($data);
          $Str='<h1>Total : '.$total.'';
          echo $Str;
//You Can Also Make In Table:
          foreach ($data as $key => $value)
           {
              echo '  <td><font  face="calibri"color="red">'.$value[type].'   </font></td><td><font  face="calibri"color="blue">'.$value[category].'   </font></td><td><font  face="calibri"color="green">'.$value[amount].'   </font></tr><tr>';
           }
?>
