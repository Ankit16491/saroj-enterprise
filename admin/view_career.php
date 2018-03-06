<?php

$id = (isset($_GET['id']) ? (int) $_GET['id'] : 0);

        include './dao.php';
        $v = new dao();
       $s = $v->select("career","career_id=$id");
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
                        <td colspan="4" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h1>Candidates Details</h1></strong></p></td>
                    </tr>
                    <tr>
                        <td>Image : </td>
                        <td><b><img src="career/<?php echo $candidate_photo;?>" height="200" width="300"/></b>
                        </td>
                    </tr>
                    <tr>
                        <td>Name : </td>
                        <td><b><?php echo $candidate_name; ?></b></td>
                    </tr>
                    <tr>
                        <td>Age : </td>
                        <td><b><?php echo $candidate_age; ?></b></td>
                    </tr>
                    <tr>
                        <td>Gender : </td>
                        <td><b><?php echo $candidate_gender; ?></b></td>
                    </tr>
                    <tr>
                        <td>Address : </td>
                        <td><b><?php echo $candidate_address; ?></b></td>
                    </tr>
                    <tr>
                        <td>Position Applying : </td>
                        <td><b><?php echo $position_applying; ?></b></td>
                    </tr>
                    <tr>
                        <td>Expected CTC : </td>
                        <td><b><?php echo $expected_ctc; ?></b></td>
                    </tr>
                    <tr>
                        <td>Contact : </td>
                        <td><b><?php echo $candidate_contact; ?></b></td>
                    </tr>
                                                 
                </table>
            </body>
        </html>