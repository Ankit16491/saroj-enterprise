<?php

$id = (isset($_GET['id']) ? (int) $_GET['id'] : 0);

        include './dao.php';
        $v = new dao();
       $s = $v->select("stock_master,grade_master","stock_master.stock_id=$id and stock_master.grade_id=grade_master.grade_id");
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
                        <td colspan="4" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h1>Stock Details</h1></strong></p></td>
                    </tr>
                   
                    <tr>
                        <td>Grade Name : </td>
                        <td><b><?php echo $grade_name; ?></b></td>
                    </tr>
                    <tr>
                        <td>Section : </td>
                        <td><b><?php echo $section; ?></b></td>
                    </tr>
                    <tr>
                        <td>Make : </td>
                        <td><b><?php echo $make; ?></b></td>
                    </tr>

                     <tr>
                        <td>Quantity : </td>
                        <td><b><?php echo $quantity; ?></b></td>
                    </tr>

                     <tr>
                        <td>Deliver From Godown  : </td>
                        <td><b><?php echo $deliver_from_godown; ?></b></td>
                    </tr>
                                                 
                </table>
            </body>
        </html>