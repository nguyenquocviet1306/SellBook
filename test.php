<?php

/**
 * @author GallerySoft.info
 * @copyright 2016
 */

                        
                    $db = pg_connect("user=postgres dbname=quanly host=localhost port=5433 password=13061996 ");
                        if(!$db){
                         echo "Error : Unable to open db";
                            } 
                    $query1 = "SELECT name FROM  catalog ";
                    
                    $result1 = pg_query($query1);
                    
   

                 $arr= pg_fetch_assoc($result1);
                   
                        
                        echo   $arr[1]."<br/>" ;
                        
                       
                        
    

    

?>