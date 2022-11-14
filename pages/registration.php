<?php
    session_start();
    if(isset($_SESSION['id'])){
        header('Location: action.php?page=home');
    }
?>
<?php include "header.php";?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Registration Form</div>
                    <div class="card-body">
                        <?php
                        $word = "This Email is exist!";
                        if(strpos($result, $word) !== false){?>
                            <h4 class="text-center text-danger "><?php echo $result?></h4>
                        <?php } else{ ?>
                            <h4 class="text-center text-success "><?php echo $result?></h4>
                        <?php } ?>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="fName" class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="fName" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lName" class="col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lName" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="registrationBtn" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php";?>
