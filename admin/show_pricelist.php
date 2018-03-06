<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style=" padding-bottom: 20px;">
                <b>Price List Information</b>
                <a href="index.php?p=pricelist"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Grade Name</th>
                        <th>Section</th>
                        <th>Make</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        <th>Additional Rate</th>
                        <th>Deliver From Godown</th>
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './dao.php';
                    $d = new dao();
                    $i = 0;
                    $qu = $d->select("pricelist,grade_master", "pricelist.active_flag=0 and pricelist.grade_id=grade_master.grade_id");
                    while ($fet = mysql_fetch_array($qu)) {
                        ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <!--<td><img src="product/<?php // echo $fet['product_image']; ?>" style="height: 100px; width: 100px;"></td> -->
                            <td><?php echo $fet['grade_name']; ?></td>
                            <td><?php echo $fet['section']; ?></td>
                            <td><?php echo $fet['make']; ?></td>
                            <td><?php echo $fet['quantity']; ?></td>
                            <td><?php echo $fet['rate']; ?></td>
                            <td><?php echo $fet['additionalrate']; ?></td>
                            <td><?php echo $fet['godown_name']; ?></td>
                            <td>
                                <a class="various" data-fancybox-type="iframe" href="view_pricelist.php?id=<?php echo $fet['price_id']; ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                <a href="delete_control.php?pricelist=<?php echo $fet['price_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
        <br>
        
    </div>
</div>
