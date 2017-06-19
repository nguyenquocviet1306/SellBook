<!DOCTYPE HTML>
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
           <script type="text/javascript" src="js/boxOver.js"></script>
    </head>
 

    <body>
    <div class="info">
        
   </div>
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
                        <li><a href="home.html" id="nav_home" target="_blank">Trang chủ</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="nav_pro" target="_blank">Thể loại</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="nav_spec" target="_blank">Sách mới</a></li>
                        <li class="divider"></li>
                        <li><a href="login.php" id="nav_acc" target="_blank">Đăng nhập</a></li>
                        <li class="divider"></li>
                        <li><a href="signup.php" id="nav_sig" target="_blank">Đăng kí</a></li>
                        <li class="divider"></li>
                        <li><a href="ordertable.php" id="nav_ship" target="_blank">Hóa đơn</a></li>
                        <li class="divider"></li>
                        <li><a href="contact.html" id="nav_cont" target="_blank">Hỗ Trợ</a></li>
                        <li class="divider"></li>
                        <li class="currencies">Thanh Toán
                            <select>
                                <option>Tiền mặt</option>
                                <option>ATM</option>
                            </select>
                        </li>
                    </ul>
                    
                    <div class="right_menu_corner"></div>
                </div>
                <!-----Navigation-----!>
                <?php
                echo '<div class="navigation"> ';
                echo "Xin chào: " .$_SESSION["username"];
                echo "</div>";
                
                ?>
               
                     <!-----Left Content-----!>
                     <div class="left_content">
                     
                      <!--List book-->
                     <div class="title_box">Thể loại</div>
                     <ul class="left_menu">
                     <li class="odd"><a href="#">
                     <?php
                        
                   
                    $query = "SELECT category_name FROM category WHERE category_id = 1  ";
                    $result = pg_query($query);
   

                    while($row = pg_fetch_row($result))
                        {
                        echo   $row[0]."<br/>" ; 
                        }
    
        ?>
        </a></li>
                        <li class="even"><a href="#">Khiêu dâm</a></li>
                        <li class="odd"><a href="#"></a></li>
                        <li class="even"><a href="#"></a></li>
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
                    
                        <div class="product_title"><a href="#">
                         <?php
                         $query1 = "SELECT name_book FROM book_info WHERE id_book = 1 ";
                          $result1 = pg_query($query1);
                          $row = pg_fetch_row($result1);
                           echo   $row[0]."<br/>" ; 
                         ?>
                        </a></div>
                        <div class="product_image"><a href="#"><img src="images/hung2.jpg" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">70 000Đ</span>
                            <span class="price">
                             <?php
                            $query2 = "SELECT price FROM book_info WHERE id_book = 1 ";
                          $result2 = pg_query($query2);
                          $row2 = pg_fetch_row($result2);
                           echo   $row2[0]."<br/>" ; 
                         ?>
                            </span>
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
                        <div class="center_title_bar">Sách mới nhất</div>
                        <!---San pham book---!>
                        
                        
                           <?php
                                       
                         $querya = "SELECT name_book,price,image,id_book FROM book_info ";
                          $resulta = pg_query($querya);
                          
                          $resultid2 = pg_query("SELECT MAX(order_id) FROM order_infomation");
                        $row2id = pg_fetch_row($resultid2);
                         $b = $row2id[0];
                            
                          $resultx = pg_query("SELECT MAX(item_id) FROM order_item");
                        $row2 = pg_fetch_row($resultx);
                        $highest_id = $row2[0] + 1;
                        //echo $highest_id;
                        
                          
                            $i = 0;
                          echo "<form method='GET'>";
                          while($row = pg_fetch_row($resulta)){
                            $a[$i] = $row[3];
                            
                                echo '<div class="prod_box">';
                            echo '<div class="top_prod_box"></div>';
                            echo'<div class="center_prod_box">';
                             echo'<div class="product_title">';
                             echo "$row[0]";
                             echo '</a>';
                             echo '</div>';
                        echo '<div class="product_image">';
                        echo"<img src='pic/$row[2].jpg' style='width:100px;height:100px;padding: 20px' >";
                        echo '</a>';
                        echo '</div>';
                        echo "Giá:"."$row[1]";
                        echo '</div>';
                            echo '<div class="bottom_prod_box"></div>'; 
                            echo '<div class="prod_details_tab">';
                           echo"<button  value='$row[3]' name='submit[]'>Add to cart</button>"." ";
                            echo '</div>';
                         echo '</div>';
         
                         $i ++;
                          }
                          echo "</form>";
                          if(isset($_GET['submit']))
                                    {
                                        foreach($_GET['submit'] as $key => $value) {
                                           echo 'OK';
                                    $query = "INSERT INTO order_item(order_id,item_id,id_book, book_amout) VALUES( '$b','$highest_id','$value',2)";
                                            $result = pg_query($query);
                                    }
                          
                                        }  
                         
                         ?>
                        
                         
                         
                          <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Hành tinh thứ ba</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung3.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">100 000Đ</span>
                            <span class="price">50 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                          <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Colorless Tsukur</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung4.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">200 000Đ</span>
                            <span class="price">120 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                         <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Suspendisse Vel</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung5.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">300 000Đ</span>
                            <span class="price">210 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                          <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Loving Kitchen 2</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung6.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">80 000Đ</span>
                            <span class="price">40 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                          <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Câu chuyện kinh dị</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung7.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">100 000Đ</span>
                            <span class="price">60 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                          <div class="center_title_bar">Sách giảm giá sâu</div>
                      <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">John đi tìm Hùng</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung2.jpg" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">70 000Đ</span>
                            <span class="price">60 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                                                   <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Hành tinh thứ ba</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung3.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">100 000Đ</span>
                            <span class="price">50 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                          <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Colorless Tsukur</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung4.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">200 000Đ</span>
                            <span class="price">120 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                         <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Suspendisse Vel</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung5.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">300 000Đ</span>
                            <span class="price">210 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                          <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Loving Kitchen 2</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung6.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">80 000Đ</span>
                            <span class="price">40 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
                         </div>
                         
                          <!---San pham book---!>
                         <div class="prod_box">
                            <div class="top_prod_box"></div>
                            <div class="center_prod_box">
                             <div class="product_title"><a href="#">Câu chuyện kinh dị</a></div>
                        <div class="product_image"><a href="#"><img src="images/hung7.png" width="100" height="100" style="padding: 20px;" alt="book"/></a></div>
                        <div class="product_price">
                            <span class="reduce">100 000Đ</span>
                            <span class="price">60 000Đ</span>
                        </div></div>
                            <div class="bottom_prod_box"></div>
                            <div class="prod_details_tab">
                        
                                <a href="#" title="header=[Add to cart] body=[&nbsp;]"><img src="images/cart.gif" alt="cart" class="left_bt" /></a>
                                 <a href="#" title="header=[Specials] body=[&nbsp;]"><img src="images/favs.gif" alt="Specials" class="left_bt" /></a>
                                 <a href="#" title="header=[Gift] body=[&nbsp;]"><img src="images/favorites.gif" alt="gift" class="left_bt" /></a>
                                  <a href="#" class="prod_details" >Details</a>
                            </div>
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
                        <a href="#"><img src="images/citea2.jpg" alt="Banner" /></a>
                      </div>
                     
                      
                      </div>
                     <!---Clear ---!> 
                    <div class="clr"></div>
                      <!---FOOTER ---!> 
            <div class="footer">
                <div class="left_footer"> 
                <img src="images/jerry.png" alt="ImageFooter" />
                
                </div>
                <div class="center_footer"> 
                     All Rights Reserved 2016 <br />
                     <a href="#"><img src="images/payment.gif" alt="Payment" /></a>
                
                </div>
                <div class="right_footer">
                    <img src="images/jerry2.png" alt="ImageFooter" />
                
                </div>
            </div>
        </div>



    </body>
</html>