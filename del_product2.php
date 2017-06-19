<?php
 include ('connect.php');
 session_start();

 $_SESSION[idsp] = (int) $_POST[idsp];
 $query1 = "SELECT * FROM san_pham WHERE idsp = '".$_POST[idsp]."'";
 $result1 = pg_query($query1);
 $row1 = pg_fetch_row($result1);

 if(!$row1) {
   echo "There is no product '".$_POST[idsp]."'";
 } else {
	 echo "The data: <br />";
	 echo "$row1[0] -- $row1[1] -- $row1[2] <br />";
   echo "Do you want to delete ?";
	 echo '<form action = "del_product3.php">
          <input type="submit" value="Yes" />
         </form>';
 }
 
 ?>
 <form action = "del_product1.php">
  <input type="submit" value="Back" />
 </form>
