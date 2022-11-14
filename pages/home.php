<?php include 'header.php'?>
<?php echo $result; ?>
<section class="">
    <div class="row">
        <div id="banner-owl-demo" class="owl-carousel owl-theme">
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100" >
                            <img src="assets/images/cr7.jpg" alt="" style="height:500px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100">
                            <img src="assets/images/cr7-2.jpg" alt="" style="height:500px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100" >
                            <img src="assets/images/crick-1.jpg" alt="" style="height:500px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="card card-footer border-0 rounded-0 bg-white text-center">
                        <h5>Cricket News</h5>
                    </div>
                    <?php foreach ($cricketBlogs as $cricketBlog){?>
                        <div class="col-md-6 pb-4">
                            <div class="card pb-0 m-0 h-100">
                                <img src="<?php echo $cricketBlog['image']?>" class="rounded-top" height="200" alt="">
                                <div class="card-body pb-0">
                                    <a href="action.php?page=news-details&&id=<?php echo $cricketBlog['id']?>" class="text-decoration-none pb-5"><?php echo $cricketBlog['title']?></a>
                                    <p class="text-muted small pt-2"><?php echo $cricketBlog['created_date']?></p>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>

                <div class="row">
                    <div class="card card-footer border-0 rounded-0 bg-white text-center">
                        <h5>Football News</h5>
                    </div>
                    <?php foreach ($footballBlogs as $footballBlog){?>
                        <div class="col-md-6 pb-4">
                            <div class="card pb-0 m-0 h-100">
                                <img src="<?php echo $footballBlog['image']?>" class="rounded-top" height="200" alt="">
                                <div class="card-body pb-0">
                                    <a href="action.php?page=news-details&&id=<?php echo $footballBlog['id']?>" class="text-decoration-none pb-5"><?php echo $footballBlog['title']?></a>
                                    <p class="text-muted small pt-2"><?php echo $footballBlog['created_date']?></p>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Recent News</h5>
                    </div>
                    <div class="card-body pt-0">
                        <?php foreach ($recentBlogs as $recentBlog){?>
                            <div class="border-bottom py-3">
                                <p class="text-muted small"> <?php echo $recentBlog['created_date']?> </p>
                                <a href="action.php?page=news-details&&id=<?php echo $footballBlog['id']?>" class="text-decoration-none"><?php echo $recentBlog['title']?></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>



