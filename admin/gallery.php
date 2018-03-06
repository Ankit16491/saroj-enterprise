<script language="javascript" type="text/javascript">

    function changeproduct(id)
    {
        $.ajax({
            type: "POST",
            url: "dropdown.php",
            data: {id: id, change_product: '1'},
            success: function (html) {
                $('#product').html(html);
            }
        });
    }
</script>

<div class="row">
    <div class="col-lg-10" style="padding-left: 200px;">
        <section class="panel">
            <header class="panel-heading">
                <b>Gallery</b>
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="insert_control.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="image" class="control-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <input type="file" name="gallery_image">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-danger" type="submit" name="insert_gallery">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>