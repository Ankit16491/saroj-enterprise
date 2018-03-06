<div class="row">
    <div class="col-lg-10" style="padding-left: 200px;">
        <section class="panel">
            <header class="panel-heading">
                <b>Stock Master</b>
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="insert_control.php" enctype="multipart/form-data">

                        <div class="form-group ">
                            <label for="grade" class="control-label col-lg-2">Grade</label>
                            <div class="col-lg-10">
                                <select class="form-control m-bot15" name="grade_id">
                                    <option>Select Grade</option>
                                    <?php
                                    include './dao.php';
                                    $d=new dao();
                                    $qu=$d->select("grade_master", "active_flag=0");
                                    while($fet= mysql_fetch_array($qu)){
                                    ?>
                                    <option value="<?php echo $fet['grade_id']; ?>"><?php echo $fet['grade_name']; ?></option>
                                   <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="section" class="control-label col-lg-2">Section</label>
                            <div class="col-lg-10">
                                <input type="text" name="section" class="form-control">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="make" class="control-label col-lg-2">Make</label>
                            <div class="col-lg-10">
                                <input type="text" name="make" class="form-control">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="quantity" class="control-label col-lg-2">Quantity</label>
                            <div class="col-lg-10">
                                <input type="text" name="quantity" class="form-control">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="deliver_from_godown" class="control-label col-lg-2">Delivery From Godown</label>
                            <div class="col-lg-10">
                                <textarea rows="2" cols="60" name="deliver_from_godown" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-danger" type="submit" name="insert_stock">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>