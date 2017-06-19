<?php

     $db = pg_connect("user=postgres dbname=banhang host=localhost port=5433 password=13061996 ");
                        if(!$db){
                         echo "Error : Unable to open db";
                            } 
                         ?>
                         <html>
                         <header>
                         <link  rel="stylesheet" type="text/css" href="css/top.css"/>
        <link  rel="stylesheet" type="text/css" href="css/header.css"/>
         <link  rel="stylesheet" type="text/css" href="css/menutab.css"/>
          <link  rel="stylesheet" type="text/css" href="css/navigation.css"/>
           <link  rel="stylesheet" type="text/css" href="css/leftcontent.css"/>
           <link  rel="stylesheet" type="text/css" href="css/centercontent.css"/>
           <link  rel="stylesheet" type="text/css" href="css/rightcontent.css"/>
             <link  rel="stylesheet" type="text/css" href="css/footer.css"/>
           <script type="text/javascript" src="js/boxOver.js"></script>
                         </header>
                         <body>
                         <div class="center_content">
                          <div class="center_title_bar">Sách mới nhất</div>
                         
                           
                            
                             <?php
                         $querya = "SELECT name_book,price,image,id_book FROM book_info ";
                          $resulta = pg_query($querya);
                           
                          $resultx = pg_query("SELECT MAX(item_id) FROM order_item");
                        $row2 = pg_fetch_row($resultx);
                        $highest_id = $row2[0] + 1;
                        echo $highest_id;
                          
                
                          while($row = pg_fetch_row($resulta)){
                            
                                 $i = $row[3];
                                 echo $i;
                                 echo 'sau';
                                echo   "<div class="\prod_box\">
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
                              
                            
                           
                            if(isset($_POST['submit']))
                                    {
                                    $query = "INSERT INTO order_item(order_id,item_id,id_book, book_amout) VALUES( '1','$highest_id','$row[3]','2')";
                                            $result = pg_query($query);
                                    }
                          }
                            
                          
                          
                         
                         ?>
                        
                         
                         
                             
                        
                         
                         </body>
                         
                         
                         </html>
                
    
