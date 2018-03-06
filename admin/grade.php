<div class="row">
    <div class="col-lg-10" style="padding-left: 200px;">
        <section class="panel">
            <header class="panel-heading">
                <b>Grade Information</b>
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="insert_control.php">
                        
                        <div class="form-group ">
                            <label for="grade_name" class="control-label col-lg-2">Grade Name</label>
                            <div class="col-lg-10">
                                <input class=" form-control" name="grade_name" type="text" required/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-danger" type="submit" name="insert_grade">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>