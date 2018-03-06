<?php

$id = (isset($_GET['id']) ? (int) $_GET['id'] : 0);

        include './dao.php';
        $v = new dao();
       $s = $v->select("product,category","product.product_id=$id and product.category_id=category.category_id");
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
                        <td colspan="4" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h1>Product Details</h1></strong></p></td>
                    </tr>
                    <tr>
                        <td>Image : </td>
                        <td><b><img src="product/<?php echo $product_image;?>" height="200" width="300"/></b>
                        </td>
                    </tr>
                    <tr>
                        <td>Category : </td>
                        <td><b><?php echo $category_name; ?></b></td>
                    </tr>
                    <tr>
                        <td>Title : </td>
                        <td><b><?php echo $product_title; ?></b></td>
                    </tr>
                    <tr>
                        <td>Description : </td>
                        <td><b><?php echo $product_description; ?></b></td>
                    </tr>
                                                 
                </table>
            </body>
        </html>