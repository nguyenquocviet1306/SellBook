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
   $query = "SELECT * FROM drink WHERE category='Rượu'";
   $result = pg_query($query);
   if(!$result) {
    echo "Problem with query". $query . "<br>";
    echo pg_last_error();
    exit();
   }
   echo "<button class='button' style='float:right'><a href='drink_add.php'>Thêm sản phẩm</a></button><br><br>";
   //echo "<section>";
   echo "<font size='6' color='blue'><br>----------WINE----------</font><br><br>";
   while($row = pg_fetch_row($result)) {
   echo "<div id='box'>";
   echo "<img src='drinks/$row[7].jpg' style='width:150px;height:150px'>";
   echo "<p><strong>$row[0]</strong></p>";
   echo "Giá: "."$row[1]".".000 vnđ"."<br>";
   echo "Xuất xứ: "."$row[2]"."<br>";
   echo "$row[3]<br>";
   echo "Còn hàng: "."$row[4]"."<br><br>";

   echo "<button class='btn-primary'>Thay đổi</button>";
   

   if(isset($_POST['change'])) {

   }
   echo "</div>";
   }
   //echo "</section>";
   
   $query1 = "SELECT * FROM drink WHERE category='Bia'";
   $result1 = pg_query($query1);
   if(!$result1) {
    echo "Problem with query". $query1 . "<br>";
    echo pg_last_error();
    exit();
   }
   
   //echo "<section>";
   //echo "<br><font size='6' color='blue'><br>----------BEER----------</font>";
   while($row1 = pg_fetch_row($result1)) {
   echo "<div id='box'>";
   echo "<img src='drinks/$row1[7].jpg' style='width:150px;height:150px'>";
   echo "<p><strong>$row1[0]</strong></p>";
   echo "Giá: "."$row1[1]".".000 vnđ"."<br>";
   echo "Xuất xứ: "."$row1[2]"."<br>";
   echo "$row1[3]<br>";
   echo "Còn hàng: "."$row1[4]<br><br>";
   echo "<button class='btn-primary'>Thay đổi</button>";
   echo "</div>";
 }
 //echo "</section>";

   $query2 = "SELECT * FROM drink WHERE category='Cocktail'";
   $result2 = pg_query($query2);
   if(!$result2) {
    echo "Problem with query". $query2 . "<br>";
    echo pg_last_error();
    exit();
   }
   
   echo "<section>";
   //echo "<br><font size='6' color='blue'><br>----------COCKTAIL----------</font>";
   while($row2 = pg_fetch_row($result2)) {
   echo "<div id='box'>";
   echo "<img src='drinks/$row2[7].jpg' style='width:150px;height:150px'>";
   echo "<p><strong>$row2[0]</strong></p>";
   echo "Giá: "."$row2[1]".".000 vnđ"."<br>";
   echo "Xuất xứ: "."$row2[2]"."<br>";
   echo "$row2[3]<br>";
   echo "Còn hàng: "."$row2[4]<br><br>";
   echo "<button class='btn-primary'>Thay đổi</button>";
   echo "</div>";
 }
 echo "</section>";

   $query3 = "SELECT * FROM drink WHERE category='Nước Detox'";
   $result3 = pg_query($query3);
   if(!$result3) {
    echo "Problem with query". $query3 . "<br>";
    echo pg_last_error();
    exit();
   }
   
   echo "<section>";
   //echo "<br><font size='6' color='blue'><br>----------DETOX----------</font>";
   while($row3 = pg_fetch_row($result3)) {
   echo "<div id='box'>";
   echo "<img src='drinks/$row3[7].jpg' style='width:150px;height:150px'>";
   echo "<p><strong>$row3[0]</strong></p>";
   echo "Giá: "."$row3[1]".".000 vnđ"."<br>";
   echo "Xuất xứ: "."$row3[2]"."<br>";
   echo "$row3[3]<br>";
   echo "Còn hàng: "."$row3[4]<br><br>";
   echo "<button class='btn-primary'>Thay đổi</button>";
   echo "</div>";
 }
 echo "</section>";
 ?>
</div>
</body>    
</html>
