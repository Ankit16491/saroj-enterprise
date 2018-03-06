<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style=" padding-bottom: 20px;">
                <b>Order Data</b>
                <!--<a href="index.php?p=product"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>-->
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email ID</th>
                        <th>Mobile</th>
                        <th>Company Name</th>
                        <th>City Name</th>
                        <th>Grade</th>
                        <th>Section</th>
                        <th>Make</th>
                        <th>Size</th>
                        <th>Kg</th>
                        <th>Rate</th>
                        <th>Godown Name</th>
                        <th>Add Tax</th>
                        <th>Note</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './dao.php';
                    $d = new dao();
                    $i = 0;
                    $qu = $d->select("order_data", "order_data.active_flag=0");
                    while ($fet = mysql_fetch_array($qu)) {
                        ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            
                            <td><?php echo $fet['email_id']; ?></td>
                            <td><?php echo $fet['mobile']; ?></td>
                            <td><?php echo $fet['company_name']; ?></td>
                            <td><?php echo $fet['city_name']; ?></td>
                            <td><?php echo $fet['grade']; ?></td>
                            <td><?php echo $fet['section']; ?></td>
                            <td><?php echo $fet['make']; ?></td>
                            <td><?php echo $fet['size']; ?></td>
                            <td><?php echo $fet['kgs']; ?></td>
                            <td><?php echo $fet['rate']; ?></td>
                            <td><?php echo $fet['godown_name']; ?></td>
                            <td><?php echo $fet['addtax']; ?></td>
                            <td><?php echo $fet['note']; ?></td>
                            


                            <td>
                                <a class="various" data-fancybox-type="iframe" href="view_order.php?id=<?php echo $fet['order_id']; ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                <a href="delete_control.php?order=<?php echo $fet['order_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
        <br>
        
    </div>
</div>
