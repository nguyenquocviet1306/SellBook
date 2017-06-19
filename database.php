<?php 
	session_start();
	$db = pg_connect("user=postgres dbname=banhang host=localhost port=5433 password=13061996 ");
 ?>
 <?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Đăng Nhập Thành Viên</title>
  
        <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
    <link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
    echo "<form method='POST'>";

    echo '<script type="text/javascript">
        var $j = jQuery.noConflict()';
    echo'</script>';
    echo '<div style="width: 100%; margin: 0 auto;">
        <div class="content">
            <div style="width: 100%; margin: 0 auto;">';
                    
    echo '<div id="ctl00_cphMain_Content">';

echo '<div style="width:100%;">';
	
    echo '<table id="box" cellpadding="0" cellspacing="0" class="" style="">';
        echo '<tr>';
            echo '<td style="width: 345px; text-align: center;">';
                echo '<div class="banner">
                    <img src="images/banner.png" />
                </div>
                <h1>
                    TRANG HỆ THỐNG ĐĂNG NHẬP</h1>
            </td>';
           echo ' <td style="width: 400px; vertical-align: top; height: 380px;">';
            
                echo '<div style="text-align: right; color: #F00;">';
                    echo '<span id="ctl00_cphMain_ctl00_Message" class="NormalRed"></span>';
                echo '</div>';
                echo '<div class="sub_login">';
                    echo '<div class="row">';
                       echo ' <div class="val">';
                            echo '<div class="tb_container tb_username_container">';
                                echo '<div>';
                                    echo '<input name="user" type="text" maxlength="50" id="user" class="textbox" tabindex="3" /></div>';
                            echo '</div>';
                            echo'<span id="ctl00_cphMain_ctl00_RequiredFieldValidator1" class="NormalFooter" style="color:Red;display:none;">(*)</span>';
                        echo '</div>';
                        echo '<div class="key">
                            Tên đăng nhập:
                        </div>';
                    echo '</div>';
                    echo '<div class="row">
                        <div class="val">
                            <div class="tb_container tb_password_container">    
                                <div>
                                    <input name="pass" type="password" maxlength="30" id="pass" class="textbox" tabindex="4" /></div>
                            </div>
                            <span id="ctl00_cphMain_ctl00_RequiredFieldValidator2" class="NormalFooter" style="color:Red;display:none;">(*)</span>
                        </div>
                        <div class="key">
                            Mật khẩu:
                        </div>
                    </div>
                    <div class="row" style="height: 30px;">
                        <div class="val">
                             <span class="Normal"><input id="RememberCheckbox" type="checkbox" name="RememberCheckbox" /><label for="RememberCheckbox" tabindex="5">Nhớ mật khẩu</label></span>
                        </div>

                        <div class="key">&nbsp;</div>

                    </div>
                    <div class="row">
                        <div class="val">
                            <input type="submit" name="submit" value="" class="login_btn" tabindex="6" />
                          
                            <a href="./signup.php">Đăng ký thành viên</a> 
                        </div>
                        <div class="key">&nbsp;</div>
                    </div>

                </div>
            </td>
        </tr>
    </table>

</div>
</div>
            </div>
        </div>
    </div>';
echo "</form>";
                           if(isset($_POST['submit']))
                                            {
                                            
                                                $user = pg_escape_string($_POST['user']);
                                                
                                                $pass = pg_escape_string($_POST['pass']); 
                                                 
                                                $query = "SELECT * FROM user_infomation WHERE user_name = '" . $user . "' and user_pass = '" . $pass . "'";
                                                $result = pg_query($query);
                                                $row2 = pg_fetch_array($result);
                                                
                                                $query3 = "SELECT * FROM admin WHERE name_acc_admin = '" . $user . "' and password_admin = '" . $pass . "'";
                                                $result3 = pg_query($query3);
                                                $row3 = pg_fetch_array($result3);
                                                
                                                if (!ctype_digit(strval($row2[0]))&& !ctype_digit(strval($row3[0])) ){
                                                    echo 'Bạn đăng nhập không thành công. Hãy kiểm tra lại !';
                                                } else  {
                                                     if (ctype_digit(strval($row3[0]))) {
                                                        header("location: http://localhost/hocphp/site2/admin.php");
                                                     } else {
                                                        printf ("Bạn đã đăng nhập thành công với tài khoản user :  - %s ", $user);
                                                    header("location: http://localhost/hocphp/site2/index.php");  
                                                     }  
                                                }
   
                                            
                                            } 
                                         
        
                                    

                            
                           
                           ?>

                             
                                      

</body>
</html>
