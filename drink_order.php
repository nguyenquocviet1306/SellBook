<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CUA HANG DO UONG H2KSHOP</title>
    <link rel="stylesheet" type="text/css" href="preview.css"/>
    <link rel="stylesheet" type="text/css" href="h2kshop.css"/>
	<link rel="stylesheet" type="text/css" href="wt-rotator.css"/>
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>
	<script type="text/javascript" src="js/preview.js"></script>    
</head>
<body bgcolor="white">
<div class="header">
		<div class="searchDiv">
			<form>
				<input class="search1" type="text" name="search" placeholder="Tìm Kiếm">
                <input type="submit" value="search">
			</form>
		</div>
		<div class="login">
            <form>
                <a href="javascript:phFunction();"> <img src="images/order.png"> </a>
                <a href="javascript:phFunction();"> <img src="images/acc.png"></a>
                <a href="javascript:phFunction();"> <img src="images/sms.png"></a>

                <a href="\" style="color: white;"><img src="images/register.png">Admin</a>
            </form>
        </div>
</div>
<div class="cover">
		<img src="logo3.jpg" width="100px" height="100px" class="logo">
		<img src="logo2.jpg" height="100px" width="1049px" class="logo2"> 
		
</div>
<div class="menu" style="background-color: rgb(128,128,128);">
		<div class="submenu">
			<a href="drink_mng.php" class="a1" style="color:white"> <img src="images/home.png">Quản lý đồ uống</a>
			<a href="http://localhost/btl/home_guest.php" class="a1" style="color:white"> Thông tin khách hàng</a>
			<a href="https://google.com.vn" class="a1" style="color:white">Cửa hàng offline</a>
			<a href="https://google.com.vn" class="a1" style="color:white">Event khuyến mại</a>
			<a href="https://google.com.vn" class="a1" style="color:white">Phản hồi khách hàng</a>
            <a href="drink_order.php" class="a1" style="color:white">Danh sách đặt hàng</a>
</div>
</div>
<style>
table,th,td {
    border: 1px solid black;
    border-collapse: collapse;
}
th,td {
    padding: 15px;
}
th {
    text-align: left;
}
table {
    background-color: #f1f1c1;
}
</style>
<div class="info">
<?php
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=btl";
   $credentials = "user=postgres password=Earth1610";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open db";
   } 

   session_start();
   $name="admin";
   $query = "SELECT acc_name,total_cost,o_date,o_time,shiped FROM order_product";
   $result = pg_query($query);
   if(!$result) {
    echo "Problem with query". $query . "<br>";
    echo pg_last_error();
    exit();
   }

   echo "<table style = 'width:90%'>";
   echo "<caption><h2 align='center'>Danh sách đặt hàng</h2><br></caption>";
   echo "<tr><th>Tên tài khoản</th><th>Tổng tiền</th><th>Ngày mua</th><th>Giờ mua</th><th>Shiped</th></tr>";
   while($row = pg_fetch_row($result)) {
   	echo "<tr>";
   	echo "<td><a href='drink_order.php'>$row[0]</a></td>";
   	echo "<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
   	if($row[4]) {
   		echo "<td>Đã giao</td>";
   	}
   	else {
   		echo "<td>Chưa giao</td>";
   	}
   	echo "</tr>";
   }
   echo "</table>";
   ?>
</div>