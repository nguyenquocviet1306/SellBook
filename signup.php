<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Đăng ký tài khoản Thành viên</title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td bgcolor="#005FA3" class="white">
		<div><p align="justify" class="mem_acc">Member Account</p></div>
		<div><p align="right" class="login_text"><a href="login.php" class="hrlink">Đăng Nhập</a></div>
		</td>
	</tr>
	<tr>
		<td>
		<p align="justify" style="margin: 12px 22px; margin-left: 252px;"><b><span style="font-size: 16px;">Vui lòng điền thông tin đăng ký tài khoản</span></font></b></p>
<form action="signup.php?act=do" method="POST">

			<div class="row2">
				<div class="val">
                    <div class="text">Họ và tên: <span id="ctl00_cphMain_ctl00_RequiredFieldValidator2" class="NormalFooter" style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="name" type="text" maxlength="30" id="fullname" class="textbox" tabindex="3" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Tên đăng nhập: <span id="ctl00_cphMain_ctl00_RequiredFieldValidator2" class="NormalFooter" style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="user" type="text" maxlength="30" id="user" class="textbox" tabindex="4" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Mật khẩu: <span id="ctl00_cphMain_ctl00_RequiredFieldValidator2" class="NormalFooter" style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="password" type="password" maxlength="30" id="pass" class="textbox" tabindex="5" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Xác nhận mật khẩu: <span id="ctl00_cphMain_ctl00_RequiredFieldValidator2" class="NormalFooter" style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="verify_pass" type="password" maxlength="30" id="verify_pass" class="textbox" tabindex="6" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Email: <span id="ctl00_cphMain_ctl00_RequiredFieldValidator2" class="NormalFooter" style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="email" type="text" maxlength="30" id="email" class="textbox" tabindex="7" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
                    <div class="text">Ngày sinh: <span id="ctl00_cphMain_ctl00_RequiredFieldValidator2" class="NormalFooter" style="color:Red;display:show;">(*)</span></div>
					<div class="tb_container tb_textbox_container">    
					<div><input name="birthday" type="text" maxlength="30" id="birthday" class="textbox" tabindex="9" /></div>
					</div>
                 </div>
			</div>
			<div class="row2">
				<div class="val">
					<div><input type="submit" name="submit" value="Đăng ký tài khoản" tabindex="9" /></div>
                </div>
			</div>
			<div class="row2">
				<div class="val" style="margin-top: -34px; margin-left: 130px;">
					<div>
						<input type="reset" name="Reset" value="Hủy bỏ" tabindex="10" /></div>
                </div>
			</div>

</form>
		</td>
	</tr>
</table>
    <?php
        $db = pg_connect("user=postgres dbname=banhang host=localhost port=5433 password=13061996 ");
                        if(!$db){
                         echo "Error : Unable to open db";
                            } 
                             $resultx = pg_query("SELECT MAX(user_id) FROM order_infomation");
                        $row2 = pg_fetch_row($resultx);
                        $highest_id = $row2[0] + 1;
                            $name = pg_escape_string($_POST['name']); 
                            $email = pg_escape_string($_POST['email']); 
                            $password = pg_escape_string($_POST['password']); 
                            if (!empty($name) && !empty($email) && !empty($password)) {
                                $query = "INSERT INTO user_infomation(user_id,user_name, user_email,user_pass) VALUES( '" . $highest_id . "','" . $name . "', '" . $email . "', '" . $password . "')";
        $result = pg_query($query); 
                            } else {
                                echo "Bạn nhập chưa đầy đủ thông tin";
                            }
                            
        if (!$result) { 
            $errormessage = pg_last_error(); 
            
            exit(); 
        } 
        printf ("These values were inserted into the database - %s %s %s", $name, $email, $password); 
        pg_close(); 
                            
    ?>

</body>

</html>