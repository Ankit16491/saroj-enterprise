<?php

$id = (isset($_GET['id']) ? (int) $_GET['id'] : 0);

        include './dao.php';
        $v = new dao();
       $s = $v->select("contact_us","contact_id=$id");
       $ary = mysql_fetch_array($s);
        extract($ary);
?>

        <html>
            <body>
                <style>
                    body{margin:0;padding:50px;}
                    td,th{padding:8px;}
                    span{font-weight:bold; display:block; text-align:left;}
                    
                </style>
         
                <table border="1" align="center" width="800px">
                    <tr>
                        <td colspan="4" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h1>Contact Details</h1></strong></p></td>
                    </tr>
                    <tr>
                        <td>Name : </td>
                        <td><b><?php echo $contact_name;?></b>
                        </td>
                    </tr>
                    <tr>
                        <td>Email Id : </td>
                        <td><b><?php echo $contact_mail; ?></b></td>
                    </tr>
                    <tr>
                        <td>Subject : </td>
                        <td><b><?php echo $subject; ?></b></td>
                    </tr>
                    <tr>
                        <td>Message : </td>
                        <td><b><?php echo $message; ?></b></td>
                    </tr>
                                                 
                </table>
            </body>
        </html>