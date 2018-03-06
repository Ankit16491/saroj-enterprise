<div class="row">
    <div class="col-lg-12">
<section class="panel">
    <header class="panel-heading" style=" padding-bottom: 20px;">
        <b>Image Gallery</b>
        <a href="index.php?p=gallery"><button type="button" class="btn btn-round btn-info" style="float: right;">Add New</button></a>
</header>
    <div class="panel-body">
        <ul class="grid cs-style-3">
            <?php
            include './dao.php';
            $d = new dao();
            $qu = $d->select("gallery", "active_flag=0");
            while ($fet = mysql_fetch_array($qu)) {
                ?>
                <li>
                    <figure>
                        <img src="gallery/<?php echo $fet['gallery_image']; ?>" style="height: 250px; width: 350px;" alt="">
                        <figcaption>
                            <!--<h3><?php echo $fet['product_title']; ?></h3>-->
                            <!--<span>At vero eos</span>-->
                            <a class="fancybox" rel="group" href="gallery/<?php echo $fet['gallery_image']; ?>">Take a look</a>
                            <!--<a href="delete_control.php?gallery=<?php echo $fet['gallery_id']; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>-->
                        </figcaption>
                    </figure>
                </li>
            <?php } ?>          
        </ul>

    </div>
</section>
    </div>
</div>