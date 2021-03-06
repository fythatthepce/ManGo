<?php
include "check-login.php";
 ?>
<!doctype html>
<html>
<head>

<title>ManGo</title>
<link rel="shortcut icon" href="mangog.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	@import "global-order2.css";

	table {
		width: auto;
		border-collapse: collapse;
		margin: auto;
		margin-top: 5px;
	}
	caption {
		color:black;
		text-align: left;
		padding-bottom: 3px;
	}
	caption button {
		float: right;
	}
	#c1 {
		width: 100px;
	}
	#c2 {
		width: 350px;
	}
	#c3 {
		width: 150px;
	}
	table th {
		background: black;
		color: white;
		padding: 5px;
		border-right: solid 1px white;
		font-size:12px;
	}
	tr:nth-of-type(odd) {
		background: white;
	}
	tr:nth-of-type(even) {
		background: whitesmoke;
	}
	td {
		vertical-align: middle;
		padding: 3px 0px 3px 10px;
		border-right: solid 1px white;
	}
	td:nth-child(odd) {
		text-align: center;
	}
	p#pagenum {
		width: 90%;
		text-align: center;
		margin: 5px;
	}
</style>
<script src="js/jquery-2.1.1.min.js"> </script>
<script src="js/jquery.blockUI.js"> </script>
<script>
$(function() {
	$('#add-bra').click(function() {
		var bra = prompt("กรุณากำหนดชื่อแบรนด์", "");
		if(bra) {
		 	ajaxSend({'action': 'add', 'bra':bra});
		}
	});

	$('button.edit').click(function() {
		var bra = prompt("กรุณากำหนดชื่อใหม่สำหรับหมวดนี้", "");
		if(bra) {
			var id = $(this).attr('data-id');
			ajaxSend({'action': 'edit', 'bra':bra, 'bra_id': id});
		}
	});

	$('button.del').click(function() {
		if(confirm("ยืนยันที่ัจะลบหมวดนี้")) {
			var id = $(this).attr('data-id');
			ajaxSend({'action': 'del', 'bra_id': id});
		}
	});

});
function ajaxSend(dataJSON) {
	$.ajax({
		url: 'brand-action.php',
		data: dataJSON,
		type: 'post',
		dataType:"html",
		beforeSend: function() {
			$.blockUI({message:'<h3>กำลังส่งข้อมูล...</h3>'});
		},
		success: function(result) {

		},
		complete: function() {
			$.unblockUI();
			location.reload();
		}
	});
}
</script>
</head>

<body><?php include "top.php"; ?>

<br><br><br><br>
<article>
<?php
include "dblink.php";
include "lib/pagination.php";

$sql = "SELECT * FROM brands";
$result = page_query($link, $sql, 20);
$first = page_start_row();
$last = page_stop_row();
$total = page_total_rows();
if($total == 0) {
	$first = 0;
}
?>
<table>
<caption>
	<?php 	echo "หมวดหมู่ลำดับที่  $first - $last จากทั้งหมด $total"; ?>
	<button id="add-bra" type="button" class="btn btn-success">เพิ่มแบรนด์สินค้า</button>
</caption>
<colgroup><col id="c1"><col id="c2"><col id="c3"></colgroup>
<tr><th>รหัส</th><th>ชื่อแบรนด์สินค้า</th></tr>
<?php
while($bra = mysqli_fetch_array($result)) {
?>
<tr>
 	<td><?php echo $bra['bra_id']; ?></td>
    <td><?php echo $bra['bra_name']; ?></td>
</tr>
<?php
}
?>
</table>
<?php
if(page_total() > 1) { 	 //ให้แสดงหมายเลขเพจเฉพาะเมื่อมีมากกว่า 1 เพจ
	echo '<p id="pagenum">';
	page_echo_pagenums();
	echo '</p>';
}
?>
</article>
</body>
</html>
