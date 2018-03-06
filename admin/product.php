<div class="row">
    <div class="col-lg-10" style="padding-left: 200px;">
        <section class="panel">
            <header class="panel-heading">
                <b>Product</b>
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="insert_control.php" enctype="multipart/form-data">

                        <div class="form-group ">
                            <label for="category" class="control-label col-lg-2">Category</label>
                            <div class="col-lg-10">
                                <select class="form-control m-bot15" name="category_id">
                                    <option>Select Category</option>
                                    <?php
                                    include './dao.php';
                                    $d=new dao();
                                    $qu=$d->select("category", "active_flag=0");
                                    while($fet= mysql_fetch_array($qu)){
                                    ?>
                                    <option value="<?php echo $fet['category_id']; ?>"><?php echo $fet['category_name']; ?></option>
                                   <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="title" class="control-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input type="text" name="product_title" class="form-control">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="description" class="control-label col-lg-2">Description</label>
                            <div class="col-lg-10">
                                <textarea rows="2" cols="60" name="product_description" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <input type="file" name="product_image">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-danger" type="submit" name="insert_product">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>