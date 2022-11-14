<?php include 'header.php'?>
 <!-- main content  -->
 <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                            <i class="fa fa-arrow-left"></i></a>Update Categories</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="action.php?admin=home"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Category</li>
                            <li class="breadcrumb-item active">Update Categories</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="number" name="id" value="<?php echo $singleCategory['id'];?>" hidden>
                                        <label for="name">Category</label>
                                        <select name="name" class="form-control show-tick">
                                            <option value="">-- Category --</option>
                                            <option value="cricket" <?php echo $singleCategory['name']=='cricket'?'selected':''?> >Cricket</option>
                                            <option value="football" <?php echo $singleCategory['name']=='football'?'selected':''?>>Football</option>
                                            <option value="tennis" <?php echo $singleCategory['name']=='tennis'?'selected':''?>>Tennis</option>
                                            <option value="basketball" <?php echo $singleCategory['name']=='basketball'?'selected':''?>>Basketball</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Image:<span class="text-danger">*</span></label>
                                            <input type="file" name="image" class="form-control" value="" placeholder="Image">
                                            <img src="<?php echo $singleCategory['image'];?>" alt="" width="150">
                                        </div>
                                    </div>
        
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea id="description" name="description" class="form-control" placeholder="Write some text...."><?php echo $singleCategory['description'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                                        <label for="status">status</label>                               
                                        <select name="status" class="form-control show-tick">
                                            <option value="">-- status --</option>
                                            <option value="active" <?php echo $singleCategory['status']=='active'?'selected':''?> >Active</option>
                                            <option value="inactive" <?php echo $singleCategory['status']=='inactive'?'selected':''?> >Inactive</option>
                                        </select>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <input type="submit" name="catUpdateBtn" class="btn btn-primary" value="Update">
                                    <a href="action.php?admin=home" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
 
<?php include 'footer.php'?>