
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading"style=" padding-bottom: 20px;">
                <b>Career</b>
                <a href="index.php?p=career"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Applying Position</th>
                        <th>Expected CTC</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './dao.php';
                    $d = new dao();
                    $i = 0;
                    $qu = $d->select("career", "active_flag=0");
                    while ($fet = mysql_fetch_array($qu)) {
                        ?>
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><img src="career/<?php echo $fet['candidate_photo']; ?>" style="height: 100px; width: 100px;"></td>
                            <td><?php echo $fet['candidate_name']; ?></td>
                            <td><?php echo $fet['position_applying']; ?></td>
                            <td><?php echo $fet['expected_ctc']; ?></td>
                            <td>
                                <a class="various" data-fancybox-type="iframe" href="view_career.php?id=<?php echo $fet['career_id']; ?>"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                                <a href="delete_control.php?career=<?php echo $fet['career_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
        <br>
        
    </div>
</div>
