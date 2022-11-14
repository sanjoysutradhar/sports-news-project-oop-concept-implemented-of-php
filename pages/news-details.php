<?php
//if(!isset($_SESSION['id'])){
//    header('Location: action.php?page=header');
//}
//?>
<?php include 'header.php'?>
<section class="py-5 bg-light">
    <div class="container w-75">
        <div class="row">

            <div class="col-md-4">
                <img src="assets/images/author.jpg" alt="" class="" style="border-radius: 100%" height="70" width="70">
                <span>By</span> <span class="fw-semibole"><?php echo $singleBlog['author']?></span>
            </div>
            <div class="col-md-8">
                <p class="fw-semibold"><?php echo $singleBlog['title']?></p>
                <p class="small"><?php echo substr($singleBlog['description'],0,90)?></p>

            </div>
            <div class="col-md-12">
                <div>
                    <img src="<?php echo $singleBlog['image']?>" style="width: 100%" height="500" alt="">
                </div>


                <p class="small pt-3"><?php echo substr($singleBlog['description'],90)?></p>
            </div>

            <div class="col-md-12">
                <h3>Comments</h3>
                <?php
                $comment=new \App\classes\Comment();
//                $comments=[];
                $comments=$comment->getAllCommentByProduct($singleBlog['id']);
//                print_r($comments);
                if(isset($comments)){
                foreach ($comments as $singleComment){
                    $user=new \App\classes\Auth();
//                    $singleUser=[];
//                    print_r($singleComment);
                    $singleUser=$user->getUserById($singleComment['user_id']);

                ?>
                <div class="row rounded-1 pb-2 mb-3" style="background-color: #cdfbc9; border: 2px">
                    <?php if(isset($singleUser)){?>
                    <div class="col-md-6 pt-2">
                        <img src="<?php echo $singleUser['image']?>" alt="" class="" style="border-radius: 100%" height="40" width="40">
                        <span class="fw-semibole pt-2"><?php echo $singleUser['fName'].' '.$singleUser['lName']?></span>
                    </div>
                    <?php } ?>
                    <div class="col-md-6 pt-2">
                        <ul class="nav float-end">
                            <?php if(isset($_SESSION['id']) and $singleComment['user_id']==$_SESSION['id'] ){
                                ?>
                                <form action="action.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $singleComment['id']?>">
                                    <input type="hidden" name="product_id" value="<?php echo $singleBlog['id']?>">
                                <li class="">
                                    <input type="submit" name="commentDeleteBtn" class="text-dark" value="Delete">
<!--                                    <a href="action.php?page=commentDelete&&id=--><?php //echo $singleComment['id']?><!--"class="text-dark btn nav-link">Delete</a></li>-->
                                </form>
<!--                                    <li class=""><a href="action.php?page=commentReply&&id=--><?php //echo $singleComment['id']?><!--"class="text-dark btn nav-link">Reply</a></li>-->

                            <?php } else {?>
<!--                                <li class=""><a href="#"class="text-dark nav-link">Delete</a></li>-->
<!--                                <li class=""><a href="#"class="text-dark nav-link">Reply</a></li>-->
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="pt-2">
                        <p class="small text-muted"><?php echo $singleComment['comment']?></p>
                    </div>
                </div>
                <?php }}?>
            </div>

<!--            comment submit-->
            <div class="col-md-12 bg-info rounded-1">
                <h4>Leave a Comment</h4>
                <div class="row">
                    <div class="col-md-6">
<!--                        <label for="" class="">Your Name</label>-->
<!--                        <input type="text" class="form-control">-->
                    </div>
                    <div class="col-md-6">
<!--                        <label for="" class="">Your Email</label>-->
<!--                        <input type="email" class="form-control">-->
                    </div>
                    <form action="action.php" method="POST">
                        <div class="col-md-12">
                            <label for="" class="">Your Comment</label>
                            <textarea name="comment" id="" class="form-control" cols="30" rows="5"></textarea>
                            <?php if(isset($_SESSION['id'])){?>
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']?>">
                            <?php } ?>
                            <input type="hidden" name="product_id" value="<?php echo $singleBlog['id']?>">
                        </div>
                        <div class="col-md-12 py-3">
                            <?php if(isset($_SESSION['id'])){?>
                                <input type="submit" class="btn btn-success form-control-sm" name="commentBtn" value="Submit"/>
                            <?php } else { ?>
                                <a href="#" class="btn btn-success form-control-sm">Submit</a>
                            <?php }?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
