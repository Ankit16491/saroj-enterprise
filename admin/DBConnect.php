<?php
error_reporting(0);
include 'interface2.php';

class DBConnect implements interface2
{
    function connect()
    {
        include './config.php';
        mysql_connect(SERVERNAME,USERNAME,PASSWORD);
        mysql_select_db(DATABASE);
    }
}
?>