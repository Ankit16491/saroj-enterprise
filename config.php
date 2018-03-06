<?php
 $databaseHost = "localhost"; 
 $databaseUser = "root";
 $databasePassword = "";
 $databaseName = "saroj_enterprise";
        
      $con=mysql_connect($databaseHost ,$databaseUser ,$databasePassword )or die ('Connection Error');
      mysql_select_db("saroj_enterprise",$con) or die ('Database Error');
 ?>