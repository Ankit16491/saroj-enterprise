<div class="row">
    <div class="col-lg-10" style="padding-left: 200px;">
        <section class="panel">
            <header class="panel-heading">
                <b>Carrer</b>
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="insert_control.php" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Name</label>
                            <div class="col-lg-10">
                                <input class=" form-control" name="candidate_name" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="age" class="control-label col-lg-2">Age</label>
                            <div class="col-lg-10">
                                <input class=" form-control" name="candidate_age" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="gender" class="control-label col-lg-2">Gender</label>
                            <div class="col-lg-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="candidate_gender" id="optionsRadios1" value="male">Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="candidate_gender" id="optionsRadios1" value="female">Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Address</label>
                            <div class="col-lg-10">
                                <textarea name="candidate_address" rows="3" cols="81" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-2">Email Id</label>
                            <div class="col-lg-10">
                                <input class="form-control " name="candidate_mail" type="email" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="position" class="control-label col-lg-2">Position Applying For</label>
                            <div class="col-lg-10">
                                <input class="form-control " name="position_applying" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="ctc" class="control-label col-lg-2">Expected CTC</label>
                            <div class="col-lg-10">
                                <input class="form-control " name="expected_ctc" type="text" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="resume" class="control-label col-lg-2 col-sm-3">Attach Resume file</label>
                            <div class="col-lg-10 col-sm-9">
                                <input  type="file" name="candidate_resume" required/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="photo" class="control-label col-lg-2 col-sm-3">Attach Recent Photograph</label>
                            <div class="col-lg-10 col-sm-9">
                                <input  type="file" name="candidate_photo" required/>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label for="contact" class="control-label col-lg-2 col-sm-3">Contact No</label>
                            <div class="col-lg-10 col-sm-9">
                                <input  type="text" name="candidate_contact" class="form-control" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-danger" type="submit" name="insert_career">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>