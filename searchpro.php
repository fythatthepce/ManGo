<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="mangog.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>ManGo</title>
<style>
  @import "global-order.css";
	body {
		margin: 0px;
		background: "white" fixed;
	}
	body > * {
		font-family: tahoma;
	}
	#fixed-container {
		position: fixed;
		width: 100%;
		height: 80px;
		z-index: 1000;
	}
	table {
		margin: auto;
		border-collapse: collapse;
		min-width: 1000px;
	}
	#table-top {
		margin: auto;
		background: #CCD462;
	}
	#table-top td {
		border-bottom: solid 1px gray;
	}
	#table-bottom {
		position: relative;
		top: 60px;
		margin-bottom: 30px;
	}
	#table-bottom td {
		padding-top: 2px;
	}
	td {
		vertical-align: top;
	}
	#table-top tr {
		border-left: solid 1px powderblue;
		border-right: solid 1px powderblue;
	}
	#td-logo, #td-aside-left, #td-cart, #td-aside-right {
		width: 150px;
	}
	#td-logo {
		background: url('') center center no-repeat;
		border-left: solid 1px gray;
	}
	#td-toolbar, #td-content {
		width: 650px;
	}
	#td-cart {
		text-align: center;
		vertical-align: top;
		font-size: 16px;
		color: brown;
		padding-top: 5px;
		border-bottom: solid 1px gray;
		border-right: solid 1px gray;
	}
	#td-aside-left {
		background: #555;
		border-left: solid 1px gray;
	}



	#td-aside-right {
		background: lavender;
		border-right: solid 1px gray;
	}
	#td-footer {
		border-top: solid 1px gray;
		padding: 5px;
		text-align: center;
		color: navy;
		font-size: 12px;
	}
	a {
		color: blue;
		text-decoration: none;
	}
	a:hover {
		color: red;
	}

	.div-img {
		float: left;
		width: 100px;
	}
	.div-summary {
		float: left;
		width: 200px;
		text-align: left;
		font-size: 14px;
	}
	a.pro-name, span.pro-name {
		font-size: 16px;
		font-weight: bold;
		text-decoration: none;
	}
	.div-summary span.price {
		display: inline-block;
		margin: 5px 10px 0px 0px;
		color: green;
	}
	.div-summary a.more-detail {
		float: right;
		margin-right: 3px;
		text-decoration: none;
		margin-top: 5px;
		color: brown;
	}
	.div-summary a.more-detail:hover {
		color:red;
	}
	#td-toolbar a {
		display: inline-block;
		text-align: center;
		padding: 5px 10px 2px 5px;
		text-decoration: none;
		border: solid 1px inherit;
	}
	#td-toolbar a:hover {
		background: #B09E9E;
	}
	#td-toolbar a img {
		height: 32px;
		width: 32px;
		border: none;
	}
	#img-cart {
		float: left;
		height: 48px;
		vertical-align: top;
		margin: 5px 0px 0px 5px;
	}
	button#order {
		margin-top: 3px;
		padding: 3px 10px;
		background: salmon;
		font-size: 16px;
		border-radius: 5px;
		border: solid 1px gold;
		color: cyan;
		width: auto;
		cursor: pointer;
	}
	button#order:hover {
		background: #ffc;
		color: red;
	}
	form {
		float: right;
		padding-right: 10px;
		margin-bottom: 5px;
	}
	br.clear {
		clear: both;
	}
	.div-img img {
		max-width: 60px;
		max-height: 60px;
	}
  div#pagenum {
		width: 100%;
		text-align: center;
		margin-top: 60px;
    margin-bottom: 20px;
    color: white;
  }
	div#dialog {
		display: none;
	}
	.ui-dialog {
		z-index: 5000 !important;
	}
	.ui-widget-overlay {
		z-index: 4000 !important;
	}
	#dialog-content {
		width: 500px;
		text-align: left;
		font-size: 14px;
	}
	#dialog-content img {
		max-width: 60px;
		max-height: 60px;
		margin: 10px 10px;
		border: solid 1px white;
	}
	#dialog-content img:hover {
		border: solid 1px blue;
	}
	#dialog span {
		display: block;
		margin-bottom: 15px;
	}
	#dialog-pro-name {
		font-size: 16px;
		font-weight: bold;
		color: green;
		display: block;
		margin-top: 10px;
	}
	#dialog-pro-detail {

	}
	#dialog-cat, #dialog-add-cart {
		float: right;
		margin-right: 1px;
	}
	#dialog-quantity {
		width: 50px;
	}
	#dialog-add-cart {

	}
	#dialog-form {
		border: solid 1px gray;
		background: powderblue;
		margin-bottom: 5px;
		display: block;
		width: 98%;
		padding: 5px;
	}
	span#cat-name {
		display: block;
		padding: 10px 3px 5px 10px;
		color: yellow;
		font-size: 18px;
		font-weight: bold;
		width: auto;
		border-bottom: dotted 1px silver;
	}
	span#cat-name > img {
		width: 20px;
		vertical-align: middle;
		margin-right: 3px;
	}


  span#bra-name {
		display: block;
		padding: 10px 3px 5px 10px;
		color: yellow;
		font-size: 18px;
		font-weight: bold;
		width: auto;
		border-bottom: dotted 1px silver;
	}
	span#bra-name > img {
		width: 20px;
		vertical-align: middle;
		margin-right: 3px;
	}

	a.category {
		display: block;
		border-bottom: dotted 1px silver;
		color: white;
	}
	a.category:hover {
		background: #ECD2DD;
    color: red;
	}
	a.category > li {
		padding: 5px 2px 5px 15px;
	}
	a.category li {
		list-style-position: inside;
	}

  a.brand {
		display: block;
		border-bottom: dotted 1px silver;
		color: white;
	}
	a.brand:hover {
		background: #ECD2DD;
		color: red;
	}
	a.brand > li {
		padding: 5px 2px 5px 15px;
	}
	a.brand li {
		list-style-position: inside;
	}
	span#pop {
		display: block;
		padding: 10px 3px 5px 10px;
		color: green;
		font-size: 16px;
		font-weight: bold;
		width: auto;
	}
	span#pop > img {
		width: 18px;
		vertical-align: middle;
		margin-right: 1px;
	}

	#out-of-stock {
		color:red;
		text-align:center;
		display: block;
	}


	#td-content {
		width: 10000px;
		text-align: center;
		background: #47C0B0;
	}

	.section-pro {
		float: left;
		width: 350px;
		height: 180px;
		margin: 15px 20px;
		border-style: solid;
		border-width: 8px;
		border-color: #F8FE3B;
		background: lavender;
	}

  .section-brands{
 	 width: 250px;
 	 height: 85px;
 	 border-style: solid;
 	 border-width: 8px;
 	 border-color: #7B0964;
 	 background: #FAC365;
	}



</style>

<style>
      @import "loginwindowcss.css";
</style>


<link href="js/jquery-ui.min.css" rel="stylesheet">
<script src="js/jquery-2.1.1.min.js"> </script>
<script src="js/jquery-ui.min.js"> </script>
<script src="js/jquery.form.min.js"> </script>
<script src="js/jquery.blockUI.js"> </script>

<script>
$(function() {

	$('a.more-detail, a.pro-name, a.pro-name-bestseller').click(function() {
		var id = $(this).attr('data-id');
		$.ajax({
			type: 'post',
			url: 'product-load.php',
			data: {'id': id},
			dataType: 'html',
			beforeSend: function() {
				$.blockUI({message:'<h3>กำลังโหลดข้อมูล...</h3>'});
			},
			success: function(result) {
				$.unblockUI();
				$('#dialog').html(result);
				$('#dialog').dialog({
					title: 'รายละเอียดสินค้า',
					modal: true,
					width: 'auto',
					position: { my: "center top", at: "center top+70px", of: window}
				});
				$('.ui-dialog-titlebar-close').focus();
			},
			complete: function() {
				$.unblockUI();
			}
		});
	});

	//ใช้ on() เพราะปุ่มในไดอะล็อกถูกโหลดมาทีหลังเพจ
	$(document).on('click', 'button#dialog-add-cart', function() {
		if(!$.isNumeric($('#dialog-quantity').val())) {
			alert('กรุณาใส่จำนวนสินค้าเป็นตัวเลข');
			return false;
		}
		var err = false;
		$('#dialog select').each(function(index, value) {
			if($(this).children('option:selected').index()==0) {  //ถ้าไม่ได้เลือกคุณลักษณะ
				alert('กรุณาเลือก: ' + $(this).val());
				err = true;
				return false;
			}
		});

		if(err) {
			return;
		}

		$.ajax({
			type: 'post',
			url: 'cart-add.php',
			data: $('#dialog-form').serializeArray(),
			dataType: 'html',
			beforeSend: function() {
				$('#dialog').block({message:'<h3>กำลังหยิบใส่รถเข็น...</h3>'});
			},
			success: function(result) {
				if(result.length > 0) {
					$('#dialog').unblock();
					alert(result);
				}
				else {
				cartCount();
				$('#dialog').block({message:'<h3>เพิ่มสินค้าในรถเข็นแล้ว...</h3>', timeout:2000, showOverlay:false,
				 							css: {padding:'2px 20px', background:'#ffc', color:'green', width: 'auto'}});
				}
			}
		});
	});

	$('button#order').click(function() {  //เมื่อคลิกปุ่มสั่งซื้อที่อยู่ตรงรถเข็น
		location.href = "order-cart.php";
	});

	cartCount(); //ให้อ่านข้อมูลในรถเข็นมาแสดงทันทีที่เปิดเพจ (อาจเปิดไปเพจอื่นแล้วกลับมาที่หน้าหลักอีก)

});

function cartCount() {  //ฟังก์ชั่นสำหรับอ่านข้อมูลในรถเข็น
	$.ajax({
		type: 'post',
		url: 'cart-count.php',
		dataType: 'html',
		success: function(result) {
			$('#cart-count').html(result);
		}
	});
}
</script>


</head>

<body>


<?php
session_start();
ob_start();
?>

<?php
include "dblink.php";
include "topbar.php";
?>


<?php ob_end_flush(); ?>


<?php
include "dblink.php";
include "lib/pagination.php";
$sql = "SELECT * FROM categories LIMIT 20";
$r = mysqli_query($link, $sql);
$self = $_SERVER['PHP_SELF'];
$h = $self . "?catid=";
//echo "<a href=\"$h\" class=\"category\"><li>ทั้งหมด</li></a>";
while($cat = mysqli_fetch_array($r)) {
	$h = $self . "?catid=" . $cat['cat_id'] . "&catname=" . $cat['cat_name'];
	//echo "<a href=\"$h\" class=\"category\"><li>". $cat['cat_name'] . "</li></a>";
}
?>

<?php
$sql = "SELECT * FROM brands LIMIT 20";
$rb = mysqli_query($link, $sql);
$self2 = $_SERVER['PHP_SELF'];
$h2 = $self2 . "?braid=";
while($bra = mysqli_fetch_array($rb)) {
	$h2 = $self2 . "?braid=" . $bra['bra_id'] . "&braname=" . $bra['bra_name'];
	//echo "<a href=\"$h2\" class=\"brand\"><li>". $bra['bra_name'] . "</li></a>";
}
?>


<?php
 //show search result
 include "search.php";
?>
<br>
<br>

<br class="clear">
<?php
  if(page_total() > 0.1) { 	 //ให้แสดงหมายเลขเพจเฉพาะเมื่อมีมากกว่า 1 เพจ
    echo '<div id="pagenum">';

    page_link_border("solid", "2px", "white");
    page_link_bg_color("white", "pink");
    page_link_color("red");
    page_cur_border("solid", "2px", "white");
    page_cur_bg_color("red");
    page_cur_color("white");
    page_link_font("15px");


    page_echo_pagenums(6, true);

    echo '</div>';
  }
?>

</td>
</tr>
<tr>

	<!--footer-->
	<?php
	    include "foot.php";
	 ?>
	<!--end footer-->
</tr>
</table>
<div id="dialog"></div>

<?php
    include "loginwindow.php"
 ?>

</body>
</html>
<?php mysqli_close($link);  ?>
