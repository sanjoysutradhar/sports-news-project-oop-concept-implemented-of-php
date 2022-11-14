<?php include 'header.php'?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row col-md-10 bg-white rounded-1 py-5">
                    <div class="col-md-3 border-end border-dark text-center ">
                        <img src="<?php echo $singleUser['image']?>" alt="" class="" style="border-radius: 100%" height="200" width="200">

                        <h4><?php echo $singleUser['fName'].' '.$singleUser['lName']?></h4>
                        <a href="action.php?page=edit_profile&&id=<?php echo $singleUser['id']?>" class="text-center">Profile Edit</a>
                    </div>
                    <div class="col-md-9 text-center pt-5">
                        <p class="text-center"><?php echo $singleUser['fName'].' '.$singleUser['lName']?></p>
                        <p class="text-center"><?php echo $singleUser['phone']?></p>
                        <p class="text-center"><?php echo $singleUser['email']?></p>
                    </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
