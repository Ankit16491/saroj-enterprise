<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style=" padding-bottom: 20px;">
                <b>Contact</b>
                <!--<a href="index.php?p=product"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>-->
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email Id</th>
                        <th>Subject</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './dao.php';
                    $d = new dao();
                    $i = 0;
                    $qu = $d->select("contact_us", "active_flag=0");
                    while ($fet = mysql_fetch_array($qu)) {
                        ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $fet['contact_name']; ?></td>
                            <td><?php echo $fet['contact_mail']; ?></td>
                            <td><?php echo $fet['subject']; ?></td>
                            <td>
                                <a class="various" data-fancybox-type="iframe" href="view_contact.php?id=<?php echo $fet['contact_id']; ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                <a href="delete_control.php?contact=<?php echo $fet['contact_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
        <br>
        
    </div>
</div>
