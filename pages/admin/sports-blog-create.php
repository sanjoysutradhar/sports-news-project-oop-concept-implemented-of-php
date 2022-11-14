<?php include 'header.php'?>
<!-- main content  -->
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                            <i class="fa fa-arrow-left"></i></a>Add Sports blogs</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="action.php?admin=home"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Sports blog</li>
                            <li class="breadcrumb-item active">Sports blogs</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="text-center">
                <h4 class="text-success"><?php echo $result; ?></h4>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Author<span class="text-danger">*</span></label>
                                            <input type="text" name="author" class="form-control" value="" placeholder="Author" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title<span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control" value="" placeholder="title" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                                        <label for="category">Category Name *</label>
                                        <select name="category_id" class="form-control show-tick" required>
                                            <option value="">-- Category Name--</option>
                                            <?php foreach ($categories as $category){?>
                                                <option value="<?php echo $category['id']?>"> <?php echo $category['name']?> </option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Image:<span class="text-danger">*</span></label>
                                            <input type="file" name="image" class="form-control" value="" placeholder="Image" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea id="description" name="description" class="form-control" placeholder="Write some text...." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                                        <label for="status">status</label>                               
                                        <select name="status" class="form-control show-tick" required>
                                            <option value="">-- status --</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-primary" name="sportsBlogBtn" value="Submit">
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