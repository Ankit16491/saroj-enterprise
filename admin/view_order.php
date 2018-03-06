<?php

$id = (isset($_GET['id']) ? (int) $_GET['id'] : 0);

        include './dao.php';
        $v = new dao();
       $s = $v->select("order_data","order_id=$id");
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
                        <td colspan="4" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h1>Order Data</h1></strong></p></td>
                    </tr>
                    
                    <tr>
                        <td>Email ID : </td>
                        <td><b><?php echo $email_id; ?></b></td>
                    </tr>
                    <tr>
                        <td>Mobile : </td>
                        <td><b><?php echo $mobile; ?></b></td>
                    </tr>
                    <tr>
                        <td>Company Name : </td>
                        <td><b><?php echo $company_name; ?></b></td>
                    </tr>

                    //
                    <tr>
                        <td>City Name : </td>
                        <td><b><?php echo $city_name; ?></b></td>
                    </tr>
                    <tr>
                        <td>Grade : </td>
                        <td><b><?php echo $grade; ?></b></td>
                    </tr>
                    <tr>
                        <td>Section : </td>
                        <td><b><?php echo $section; ?></b></td>
                    </tr>

                    //

                    <tr>
                        <td>Make : </td>
                        <td><b><?php echo $make; ?></b></td>
                    </tr>
                    <tr>
                        <td>Size : </td>
                        <td><b><?php echo $size; ?></b></td>
                    </tr>
                   
                    <tr>
                        <td>Kgs : </td>
                        <td><b><?php echo $kgs; ?></b></td>
                    </tr>
                    <tr>
                        <td>Rate : </td>
                        <td><b><?php echo $rate; ?></b></td>
                    </tr>
                    <tr>
                        <td>Godown Name : </td>
                        <td><b><?php echo $godown_name; ?></b></td>
                    </tr>
                    
                    <tr>
                        <td>ADD Tax : </td>
                        <td><b><?php echo $addtax; ?></b></td>
                    </tr>

                      <tr>
                        <td>Note : </td>
                        <td><b><?php echo $note; ?></b></td>
                    </tr>
                                                 
                </table>
            </body>
        </html>