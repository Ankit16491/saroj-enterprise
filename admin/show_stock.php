<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style=" padding-bottom: 20px;">
                <b>Stock Information</b>
                <a href="index.php?p=stock"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Grade Name</th>
                        <th>Section</th>
                        <th>Make</th>
                        <th>Quantity</th>
                        <th>Deliver From Godown</th>
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './dao.php';
                    $d = new dao();
                    $i = 0;
                    $qu = $d->select("stock_master,grade_master", "stock_master.active_flag=0 and stock_master.grade_id=grade_master.grade_id");
                    while ($fet = mysql_fetch_array($qu)) {
                        ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <!--<td><img src="product/<?php // echo $fet['product_image']; ?>" style="height: 100px; width: 100px;"></td> -->
                            <td><?php echo $fet['grade_name']; ?></td>
                            <td><?php echo $fet['section']; ?></td>
                            <td><?php echo $fet['make']; ?></td>
                            <td><?php echo $fet['quantity']; ?></td>
                            <td><?php echo $fet['deliver_from_godown']; ?></td>
                            <td>
                                <a class="various" data-fancybox-type="iframe" href="view_stock.php?id=<?php echo $fet['stock_id']; ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                <a href="delete_control.php?stock=<?php echo $fet['stock_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
        <br>
        
    </div>
</div>
