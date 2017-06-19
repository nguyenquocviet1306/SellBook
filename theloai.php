<!DOCTYPE HTML>
<html>
    <head>
    
    <meta charset="UTF-8" />
	   <meta http-equiv="content-type" content="text/html" />
	   <meta name="author" content="GallerySoft.info" />

	   <title>Book Store </title>
       <link  rel="stylesheet" type="text/css" href="css/top.css"/>
        <link  rel="stylesheet" type="text/css" href="css/header.css"/>
         <link  rel="stylesheet" type="text/css" href="css/menutab.css"/>
         
      <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
             <link  rel="stylesheet" type="text/css" href="css/leftcontent.css"/>
           <link  rel="stylesheet" type="text/css" href="css/centercontent.css"/>
           <link  rel="stylesheet" type="text/css" href="css/rightcontent.css"/>
            <link  rel="stylesheet" type="text/css" href="css/footer.css"/> 
          
    </head>


 <body>
        <div class="main">
                
                 
                 <!-- TOP : START -->
                 <div class="header">
                <div id="logo"><img src="images/logo4.png" alt="images" /></div>
                <div class="slider">
                   
                    <div class="slide_content">
                        <div class="content">
                            
                          
                        </div>
                        <div class="clr"></div>
                       
                    </div>
                    <div class="top_divider"><img src="images/divider.png" alt="images" /></div>
                </div>
            
            </div>
            
                <!-- TOP : END -->
                <div class="clr"></div>
            <div class="content">
            <!--tab -->
                <div id="menu_tab">
                    <div class="left_menu_corner"></div>
                    <ul class="menu">
                        <li style="font-family:'Comic Sans MS', cursive" ><a href="#" style="color:#000"  id="trangchu">Trang Chu</a>   <a href="#"></a>    </li>
                        
                        <li class="divider"></li>
                        <li style="font-family:'Comic Sans MS', cursive"><a href="#" style="color:#000" id ="gioithieu">Gioi Thieu</a>   <a href="#"></a>   </li>
                        <li class="divider"></li>
                        <li style="font-family:'Comic Sans MS', cursive"><a href="#" style="color:#000"  id="lienhe">Lien He</a>  <a href="#"></a>   </li>
                        <li class="divider"></li>
                        <li style="font-family:'Comic Sans MS', cursive" ><a href="#" style="color:#000"  id="trogiup">Tro Giup</a>  <a href="#"></a>   </li>
                        <li class="divider"></li>
                        <li style="font-family:'Comic Sans MS', cursive" ><a href="#" style="color:#000"  id="web">Xem Website</a> <a href="#"></a>     </li>
                        <li class="divider"></li>
              
                       
                    </ul>
                    
                    <div class="right_menu_corner"></div>
                </div>
                
                     <!-----Left Content-----!>
                     <div class="left_content">
                     
                          <!--List book-->
                         <div class="title_box">Quan ly</div>
                         <ul class="left_menu">
                            <li class="odd" style=""><a href="admin.html" style="color:#000">Trang Chu</a></li>
                            <li class="even" style="font-family:'Comic Sans MS', cursive"><a href="theloai.php" style="color:#000">Quan Ly The Loai</a></li>
                           
                            <li class="even" style="font-family:'Comic Sans MS', cursive"><a href="sanpham.php" style="color:#000">Quan Ly San Pham</a></li>
                            <li class="odd" style="font-family:'Comic Sans MS', cursive"><a href="nguoidung.php" style="color:#000">Quan Ly Nguoi Dung</a></li>
                          </ul>
                       
                          <div class="">
                              <!-- Trigger the modal with a button -->
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">THEM THE LOAI MOI</button>
                            
                            
                            
                                <!-- Add Form Modal -->
                            	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            	  <div class="modal-dialog" role="document">
                            	    <div class="modal-content">
                            	    <form action="theloai.php" method="post">
                            		      <div class="modal-header">
                            		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            		        <h4>Them </h4>
                            		      </div>
                            		      <div class="modal-body">
                            			     ID THE LOAI: <input type="number" name="id_theloai" />  <br><br>
                                             TEN THE LOAI: <input type="text" name="ten_theloai"/><br><br>
                            		      </div>
                            		      <div class="modal-footer">
                            		        <button type="button" class="btn btn-default" data-dismiss="modal">Dong</button>
                            		        <button type="submit" class="btn btn-primary" value="Save">Luu</button>
                            		      </div>
                            	     </form>
                            	    </div>
                            	  </div>
                            	</div>
                          
                            </div>
                            
                           
                            
                 </div>
                 
                
           
                      <table border="1" class="theloai">
                      <th colspan="3" class="text-center">DANH SACH THE LOAI</th>
                      <tr>
                        <th class="text-center"> STT</th>
                        <th  class="text-center"> TEN THE LOAI</th>
                        <th class="text-center">QUAN TRI</th>
                      </tr>
                       <?php
                       
                          $db = pg_connect("user=postgres dbname=banhang host=localhost port=5433 password=13061996 ");
                        if(!$db){
                         echo "Error : Unable to open db";
                             } 
                       ?>
                   
                           <?php
                       $query = "SELECT * FROM category ";
                      $result = pg_query($query);     
                      while($row= pg_fetch_row($result))
                        {
                        echo "<tr>";
                        echo   "<td class='theloai1'> $row[0] </td>"; 
                         echo   "<td class='theloai1'> $row[1] </td>";
                         echo "<td class='chinhsua'><button class='buttonedit'>Edit</button><br/><button class='buttondelete'>Delete</button></td>";
                         echo "</tr>" ;
                         
                        }
    
                          ?>       
                      </table>         


                      </div>

                      <div class="center_footer"> 
                     
                     <a href="#"><img src="images/depend.jpg" alt="Payment" /></a>
                
                </div>
          </div>
             <?php
                            
                                  $db = pg_connect("user=postgres dbname=banhang host=localhost port=5433 password=13061996 ");
                                 if(!$db){
                                           echo "Error : Unable to open db";
                                          } 
                                 $id= (int)$_POST['id_theloai']; 
                                 $tentheloai = pg_escape_string($_POST['ten_theloai']); 
                                 if (!empty($id) && !empty($tentheloai)) {
                                $query = "INSERT INTO category(category_id,category_name) VALUES($id,'$tentheloai')";
                                $result = pg_query($query); 
                                } else {
                                echo "Ban chua nhap day du thong tin";
                            }
                            
                          if (!$result) { 
                             $errormessage = pg_last_error(); 
            
                               exit(); 
                                } 
              ?>
            
             

    </body>
</html>