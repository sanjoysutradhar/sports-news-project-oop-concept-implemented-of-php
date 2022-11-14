
<?php include 'header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($footballBlogs as $footballBlog){?>
                <div class="col-md-3 pb-4">
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
</section>

<?php include 'footer.php'?>
