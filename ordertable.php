<?php

                            $db = pg_connect("user=postgres dbname=banhang host=localhost port=5433 password=13061996 ");
                            session_start();
                         ?>
                         
<html>
    <head>
    <meta charset="UTF-8" />
	   <meta http-equiv="content-type" content="text/html" />
	   <meta name="author" content="GallerySoft.info" />

	   <title>Book Store </title>
       <link  rel="stylesheet" type="text/css" href="css/top.css"/>
        <link  rel="stylesheet" type="text/css" href="css/header.css"/>
         <link  rel="stylesheet" type="text/css" href="css/menutab.css"/>
          <link  rel="stylesheet" type="text/css" href="css/navigation.css"/>
           <link  rel="stylesheet" type="text/css" href="css/leftcontent.css"/>
           <link  rel="stylesheet" type="text/css" href="css/centercontent.css"/>
           <link  rel="stylesheet" type="text/css" href="css/rightcontent.css"/>
             <link  rel="stylesheet" type="text/css" href="css/footer.css"/>
              <link  rel="stylesheet" type="text/css" href="css/contact.css"/>
           <script type="text/javascript" src="js/boxOver.js"></script>
    </head>

    <body>
        <div class="main">
                <!-- TOP : START -->
            <div class="top">
                <div class="languages">
                    <div>Languages : </div>
                    <a href="#"><img src="images/icon_en.png"  alt="EN"/></a>
                     <a href="#"><img src="images/icon_vi.png"  alt="VN"/></a>
                </div>
                 <div class="search">
                    <div class="search_text"><a href="#">Advance Search</a></div>
                    <input  type="text" class="search_input" name="search"/>
                    <input type="image" src="images/icon_search.png" class="search_bt"/>
                 </div>
            </div>
                 <!-- TOP : END -->
                 
                 <!-- TOP : START -->
            <div class="header">
            <!--<div id="logo"><img src="images/logo4.png" alt="images" /></div>
                <div class="slider">
                    <div class="top_divider"><img src="images/divider.png" alt="images" /></div>
                    <div class="slide_content">
                        <div class="content">
                            <img src="images/icon.jpeg" alt="images" class="slide_img" />
                            <div class="slide_details">
                                <div class="slide_title">Ngồi khóc trên cây</div>
                                <div class="slide_text">
                                Một cuốn sách viết cho thiếu nhi, mang những sắc màu tuổi học trò, những yêu thương hồn nhiên thưở thần tiên
                                </div>
                                <a href="#" class="details">details</a>
                            </div>
                        </div>
                        <div class="clr"></div>
                        <div class="pagination">
                            <span class="current">1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                        </div>
                    </div>
                    <div class="top_divider"><img src="images/divider.png" alt="images" /></div>
                </div> -->
                
            
            </div>
                <!-- TOP : END -->
                <div class="clr"></div>
            <div class="content">
            <!--tab -->
                <div id="menu_tab">
                    <div class="left_menu_corner"></div>
                    <ul class="menu">
                        <li><a href="home.html" id="nav_home">Trang chủ</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="nav_pro">Thể loại</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="nav_spec">Sản phẩm mới</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="nav_acc">Đăng nhập</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="nav_sig">Đăng kí</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="nav_ship">Phí ship</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="nav_cont">Hỗ trợ</a></li>
                        <li class="divider"></li>
                        <li class="currencies">Thanh toán
                            <select>
                                <option>Tiền mặt</option>
                                <option>ATM</option>
                            </select>
                        </li>
                    </ul>
                    
                    <div class="right_menu_corner"></div>
                </div>
                <!-----Navigation-----!>
                
                     <!-----Left Content-----!>
                     <div class="left_content">
                     
                      <!--List book-->
                     <div class="title_box">Thể loại</div>
                     <ul class="left_menu">
                        <li class="odd"><a href="#">Khoa Học</a></li>
                        <li class="even"><a href="#">Thiếu Nhi</a></li>
                        <li class="odd"><a href="#">Trinh Thám</a></li>
                        <li class="even"><a href="#">Đời Sống</a></li>
                        <li class="odd"><a href="#">Thể Thao</a></li>
                        <li class="even"><a href="#">Tự Truyện</a></li>
                        <li class="odd"><a href="#">Tâm Lý</a></li>
                        <li class="even"><a href="#">Nâu Ăn</a></li>
                        <li class="odd"><a href="#">Ngoại Ngữ</a></li>
                        <li class="even"><a href="#">Danh Nhân</a></li>
                        <li class="odd"><a href="#">Văn Thơ</a></li>
                        <li class="even"><a href="#">Khác</a></li>
                         
                     
                     </ul>
                     <!---Special Book ---!>
                      <div class="title_box">Sách ưa chuộng</div>
                      <div class="border_box">
                        <div class="product_title"><a href="#">John đi tìm Hùng</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung2.jpg" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">70 000Đ</span>
                            <span class="price">60 000Đ</span>
                        </div>
                      </div>
                      
                       <!---Newletter ---!>
                      <div class="title_box">Nhận sản phẩm mới</div>
                      <div class="border_box">
                        <input  type="text" name="newletter" class="newletter_input" value="your email"/>
                        <a href="#" class="join">Join</a>
                        
                      </div>
                      
                      <!---Banner ---!>
                      <div class="banner_adds">
                        <a href="#"><img src="images/fyt1.jpg" alt="Banner" /></a>
                      </div>
                     
                     </div>
                    
                      
                    
                    
                     <!---Center Content ---!>
                       <div class="center_content">
                       <div class="center_title_bar">Hóa đơn thanh toán </div>
                        
                        
                        <?php
                            
function convert_number_to_words($number) {
 
$hyphen      = ' ';
$conjunction = '  ';
$separator   = ' ';
$negative    = 'âm ';
$decimal     = ' phẩy ';
$dictionary  = array(
0                   => 'không',
1                   => 'một',
2                   => 'hai',
3                   => 'ba',
4                   => 'bốn',
5                   => 'năm',
6                   => 'sáu',
7                   => 'bảy',
8                   => 'tám',
9                   => 'chín',
10                  => 'mười',
11                  => 'mười một',
12                  => 'mười hai',
13                  => 'mười ba',
14                  => 'mười bốn',
15                  => 'mười năm',
16                  => 'mười sáu',
17                  => 'mười bảy',
18                  => 'mười tám',
19                  => 'mười chín',
20                  => 'hai mươi',
30                  => 'ba mươi',
40                  => 'bốn mươi',
50                  => 'năm mươi',
60                  => 'sáu mươi',
70                  => 'bảy mươi',
80                  => 'tám mươi',
90                  => 'chín mươi',
100                 => 'trăm',
1000                => 'ngàn',
1000000             => 'triệu',
1000000000          => 'tỷ',
1000000000000       => 'nghìn tỷ',
1000000000000000    => 'ngàn triệu triệu',
1000000000000000000 => 'tỷ tỷ'
);
 
if (!is_numeric($number)) {
return false;
}
 
if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
// overflow
trigger_error(
'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
E_USER_WARNING
);
return false;
}
 
if ($number < 0) {
return $negative . convert_number_to_words(abs($number));
}
 
$string = $fraction = null;
 
if (strpos($number, '.') !== false) {
list($number, $fraction) = explode('.', $number);
}
 
switch (true) {
case $number < 21:
$string = $dictionary[$number];
break;
case $number < 100:
$tens   = ((int) ($number / 10)) * 10;
$units  = $number % 10;
$string = $dictionary[$tens];
if ($units) {
$string .= $hyphen . $dictionary[$units];
}
break;
case $number < 1000:
$hundreds  = $number / 100;
$remainder = $number % 100;
$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
if ($remainder) {
$string .= $conjunction . convert_number_to_words($remainder);
}
break;
default:
$baseUnit = pow(1000, floor(log($number, 1000)));
$numBaseUnits = (int) ($number / $baseUnit);
$remainder = $number % $baseUnit;
$string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
if ($remainder) {
$string .= $remainder < 100 ? $conjunction : $separator;
$string .= convert_number_to_words($remainder);
}
break;
}
 
if (null !== $fraction && is_numeric($fraction)) {
$string .= $decimal;
$words = array();
foreach (str_split((string) $fraction) as $number) {
$words[] = $dictionary[$number];
}
$string .= implode(' ', $words);
}
 
return $string;
}
                        echo 'Xin chào Anh/Chị : '. $_SESSION["username"];
                        echo '<div class="prod_box_big">';
                           echo' <div class="top_prod_box_big"></div>';
                            echo '<div class="center_prod_box_big">';
                            echo '<div class="contact_form">
                                <table border=2 cellpadding = 10px >
                        <tr>
	                       <td>STT</td>
                            <td>Tên sách</td>
	                           <td>Số lượng </td>
	                           <td>Đơn giá</td>
	                           <td>Thành tiền</td>
                        </tr>';
                        
                        $sum = 0;
                            $querya = "SELECT name_book,price,book_amout FROM book_info natural join order_item  where order_id=". $_SESSION["maxorder1"]."";
                            $resulta = pg_query($querya);
                        while($row = pg_fetch_row($resulta)){
                            echo "<tr>";
                            echo "<td>1</td>";
                        echo   "<td > $row[0] </td>"; 
                         echo   "<td > $row[2] </td>";
                         echo   "<td > $row[1] </td>";
                          $x = $row[1]*$row[2];
                          $sum +=$x;
                         echo "<td >  $x  </td>";
                            echo "</tr>" ;
                            
                            }
                           echo '</table>';
                            echo'</div>';
                                
                            echo'</div>';
                            echo '<div class="bottom_prod_box_big"></div>';
                            echo 'Tổng số tiền là : '.$sum;
                            echo "Bằng chữ :".'<b>'.convert_number_to_words($sum)." đồng".'</b>';
                        
                        
                        ?>
                        
                            
                        </div>
                      </div>
                        
                      
                       

                        
                     
                     <!---Right Content ---!>
                      <div class="right_content">
                        <!---Shopping cart ---!>
                        <div class="shopping_cart">
                            <div class="cart_title">Shopping cart</div>
                             <div class="cart_details">
                                4 items <br />
                                <span class="border_cart"></span>
                                Total : <span class="price">300.000Đ</span>
                             </div>
                            <div class="cart_icon">
                                <a href="#" title="header=[Checkout] body=[&nbsp;] "><img src="images/shoppingcart.png" alt="Checkout" /></a>
                            </div>
                        </div>
                        <!---- ----!>
                         <!---Sách mới ---!>
                      <div class="title_box">Sách mới về</div>
                      <div class="border_box">
                        <div class="product_title"><a href="#">John đi tìm Hùng</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung2.jpg" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">70 000Đ</span>
                            <span class="price">60 000Đ</span>
                        </div>
                      </div>
                      
                       <!--List book-->
                     <div class="title_box">Tác Giả</div>
                     <ul class="left_menu">
                        <li class="odd"><a href="#">Nguyễn Nhật Ánh</a></li>
                        <li class="even"><a href="#">Văn Cao</a></li>
                        <li class="odd"><a href="#">Nguyễn Đình Thi</a></li>
                        <li class="even"><a href="#">Trang Hạ</a></li>
                        <li class="odd"><a href="#">John Hùng</a></li>
                        <li class="even"><a href="#">Alan Phan</a></li>
                        <li class="odd"><a href="#">Huyền Linh</a></li>
                        <li class="even"><a href="#">Việt Nguyễn</a></li>
                        
                     </ul>
                     
                     <!---Banner ---!>
                      <div class="banner_adds">
                        <a href="#"><img src="images/fyt1.jpg" alt="Banner" /></a>
                      </div>
                     
                      
                      </div>
                     <!---Clear ---!> 
                    <div class="clr"></div>
                      <!---FOOTER ---!> 
            <div class="footer">
                <div class="left_footer"> 
                <img src="images/logo4.png" alt="ImageFooter" />
                
                </div>
                <div class="center_footer"> 
                     All Rights Reserved 2016 <br />
                     <a href="#"><img src="images/payment.gif" alt="Payment" /></a>
                
                </div>
                <div class="right_footer">
                    <img src="images/logo4.png" alt="ImageFooter" />
                
                </div>
            </div>
        </div>



    </body>
<?php




?>