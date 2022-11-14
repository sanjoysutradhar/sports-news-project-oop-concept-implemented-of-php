<?php
use App\classes\Category;
?>
<?php include 'header.php'?>

<!-- main content  -->
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Sports blog</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="action.php?admin=home"><i class="icon-home"></i></a></li>
                        </ul>
                        <p class="float-right">Total Sports blog: </p>
                    </div>
                </div>
            </div>
    
            <div class="row clearfix">
                <div class="col-lg-12">
                    <!-- /notification -->
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Photo</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($blogs as $blog){?>
                                            <tr>
                                            <td><?php echo $blog['author'];?></td>
                                            <td><?php echo substr($blog['title'],0,20).'...';?></td>
                                            <td>
                                            <?php
                                            $id=$blog['category_id'];
                                            $category=new Category();
                                            $singleCategory=$category->getCategoryById($id);

                                            echo $singleCategory['name'];
                                            ?>
                                            </td>
                                            <td><?php echo substr($blog['description'],0,20).'...';?></td>
                                            <td><img src="<?php echo $blog['image'];?>" width="120" alt=""></td>
                                            <td><?php echo $blog['status'];?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="" title="view"
                                                    class="float-left btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>
                                                <a href="action.php?admin=sports-blog-edit&&id=<?php echo $blog['id'];?>" title="edit" class="float-left btn btn-sm btn-outline-warning" ><i class="fas fa-edit"></i></a>
                                                <a href="action.php?admin=sports-blog-delete&&id=<?php echo $blog['id']?>" onclick="return confirm('Are you Sure to Delete this..')" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    
<?php include 'footer.php'?>