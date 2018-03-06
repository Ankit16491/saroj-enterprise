<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style=" padding-bottom: 20px;">
                <b>Product</b>
                <a href="index.php?p=product"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Category</th>
                        <th>Product Title</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './dao.php';
                    $d = new dao();
                    $i = 0;
                    $qu = $d->select("product,category", "product.active_flag=0 and product.category_id=category.category_id");
                    while ($fet = mysql_fetch_array($qu)) {
                        ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><img src="product/<?php echo $fet['product_image']; ?>" style="height: 100px; width: 100px;"></td>
                            <td><?php echo $fet['category_name']; ?></td>
                            <td><?php echo $fet['product_title']; ?></td>
                            <td>
                                <a class="various" data-fancybox-type="iframe" href="view_product.php?id=<?php echo $fet['product_id']; ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                <a href="delete_control.php?product=<?php echo $fet['product_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
        <br>
        
    </div>
</div>
