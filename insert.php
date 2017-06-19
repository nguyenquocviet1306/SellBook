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
                             $queryid = "INSERT INTO order_infomation(order_id,user_id) VALUES( ".$_SESSION["maxorder1"].",".$_SESSION["userid"].")";
                                            $resultid = pg_query($queryid);
                         $querya = "SELECT name_book,price,image,id_book FROM book_info ";
                          $resulta = pg_query($querya);
                           
                          $resultx = pg_query("SELECT MAX(item_id) FROM order_item");
                        $row2 = pg_fetch_row($resultx);
                        $highest_id = $row2[0] + 1;
                        echo $highest_id;
                          
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
                                    $query = "INSERT INTO order_item(order_id,item_id,id_book, book_amout) VALUES(  ".$_SESSION["maxorder1"].",'$highest_id','$value',2)";
                                            $result = pg_query($query);
                                    }
                          
                                        }  
                         
                         ?>
                        
                         
                         
                             
                        
                         
                         </body>
                         
                         
                         </html>
                
    
