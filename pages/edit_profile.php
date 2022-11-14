<?php include 'header.php'?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row col-md-10 bg-white rounded-1 py-4">
                <div class="col-md-3 border-end border-dark text-center ">
                    <img src="<?php echo $singleUser['image']?>" alt="" class="" style="border-radius: 100%" height="200" width="200">

                    <h4><?php echo $singleUser['fName'].' '.$singleUser['lName']?></h4>
                    <a href="action.php?page=edit_profile&&id=<?php echo $singleUser['id']?>" class="text-center">Profile Edit</a>
                </div>
                <div class="col-md-9 ">
                    <div class="card">
                        <div class="card-header text-center">Edit profile</div>
                        <div class="card-body">
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="fName" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="fName" value="<?php echo $singleUser['fName']?>" required>
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $singleUser['id']?>" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="lName" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lName" value="<?php echo $singleUser['lName']?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phone" class="col-md-3">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone" value="<?php echo $singleUser['phone']?>" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="<?php echo $singleUser['image']?>" alt="" width="200">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="<?php echo $singleUser['email']?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="profileUpdateBtn" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
