<?php
session_start();

require_once 'vendor\autoload.php';

use App\classes\Auth;
use App\classes\Blog;
use App\classes\Category;
use App\classes\Comment;
use App\classes\Message;


$result="";

if(isset($_GET["page"])){
    if($_GET["page"]=="home"){
        $category=new Category();
        $cricketCat_id=$category->getCategoryByCricket();
        $footballCat_id=$category->getCategoryByFootball();
        $blog= new Blog();
        $cricketBlogs=$blog->getAllBlogByCricket($cricketCat_id);
        $footballBlogs=$blog->getAllBlogByFootball($footballCat_id);
        $recentBlogs=$blog->getAllBlogByRecent();
        include 'pages/home.php';
    }
    elseif($_GET["page"]=="cricket"){
        $category=new Category();
        $cricketCat_id=$category->getCategoryByCricket();
        $blog= new Blog();
        $cricketBlogs=$blog->getAllBlogOfCricket($cricketCat_id);
        include 'pages/cricket.php';
    }
    elseif($_GET["page"]=="football"){
        $category=new Category();
        $footballCat_id=$category->getCategoryByFootball();
        $blog= new Blog();
        $footballBlogs=$blog->getAllBlogOfFootball($footballCat_id);
        include 'pages/football.php';
    }
    elseif($_GET["page"]=="news-details"){
        $id=$_GET['id'];
        $blog=new Blog();
        $singleBlog=$blog->getBlogById($id);
        include 'pages/news-details.php';
    }
    elseif($_GET["page"]=="about-us"){
        include 'pages/about-us.php';
    }
    elseif($_GET["page"]=="contact-us"){
        include 'pages/contact-us.php';
    }
    elseif ($_GET['page']=='registration'){
        include 'pages/registration.php';
    }
    elseif ($_GET['page']=='logout'){
        $auth=new Auth();
        $auth->logout();
    }

    elseif ($_GET['page']=='dashboard'){
        $auth=new Auth();
        $singleUser=$auth->getUserById($_SESSION['id']);
        include 'pages/dashboard.php';
    }
    elseif ($_GET['page']=='edit_profile'){
        $id=$_GET['id'];
        $auth=new Auth();
        $singleUser=$auth->getUserById($id);
        include 'pages/edit_profile.php';
    }

}
elseif(isset($_GET["admin"])){
    if($_GET["admin"]=="home"){
        $message=new Message();
        $messages=$message->getAllMessage();
        include 'pages/admin/home.php';
    }
    elseif($_GET["admin"]=="category-index"){
        $category=new Category();
        $categories=$category->getAllCategory();
        include 'pages/admin/category-index.php';
    }
    elseif($_GET["admin"]=="category-create"){
        include 'pages/admin/category-create.php';
    }
    elseif($_GET["admin"]=="category-edit"){
        $id=$_GET['cat_id'];
        $category=new Category();
        $singleCategory=$category->getCategoryById($id);
        include 'pages/admin/category-edit.php';
    }
    elseif($_GET["admin"]=="category-delete"){
        $id=$_GET['delete_id'];
        $category=new Category();
        $category->deleteCategoryById($id);
    }
    elseif($_GET["admin"]=="sports-blog-index"){
        $blog=new Blog();
        $blogs=$blog->getAllBlog();
        include 'pages/admin/sports-blog-index.php';
    }
    elseif($_GET["admin"]=="sports-blog-create"){
        $category=new Category();
        $categories=$category->getAllCategoryByStatus();
        include 'pages/admin/sports-blog-create.php';
    }
    elseif($_GET["admin"]=="sports-blog-edit"){
        $id=$_GET['id'];
        $blog=new Blog();
        $singleBlog=$blog->getBlogById($id);
        $category=new Category();
        $categories=$category->getAllCategoryByStatus();
        include 'pages/admin/sports-blog-edit.php';
    }
    elseif($_GET["admin"]=="sports-blog-delete"){
        $id=$_GET['id'];
        $blog=new Blog();
        $blog->deleteBlogById($id);
    }
    
}
elseif(isset($_POST['categoryBtn'])){
    $category=new Category($_POST,$_FILES);
    $result=$category->newCategory();
    include 'pages/admin/category-create.php';
}
elseif(isset($_POST['catUpdateBtn'])){
    $category=new Category($_POST,$_FILES);
    $category->updateCategory();
}
elseif(isset($_POST['sportsBlogBtn'])){
    $blog=new Blog($_POST,$_FILES);
    $result=$blog->newBlog();
    $category=new Category();
    $categories=$category->getAllCategoryByStatus();
    include 'pages/admin/sports-blog-create.php';
}
elseif(isset($_POST['blogUpdateBtn'])){
    $blog=new Blog($_POST,$_FILES);
    $blog->updateBlog();
}
elseif(isset($_POST['registrationBtn'])){
    $registration=new Auth($_POST,$_FILES);
    $result=$registration->newUser();
    include 'pages/registration.php';
}
elseif(isset($_POST['loginBtn'])){
    $login=new Auth($_POST);
    $singleUser=$login->login();

    include 'pages/dashboard.php';
}
elseif(isset($_POST['commentBtn'])){
    $comment=new Comment($_POST);
    $comment->newComment();
    $id=$_POST['product_id'];
    $blog=new Blog();
    $singleBlog=$blog->getBlogById($id);
    include 'pages/news-details.php';
}
elseif (isset($_POST['commentDeleteBtn'])){

    $id=$_POST['id'];
    $comment=new Comment();
    $comment->commentDelete($id);
    $pro_id=$_POST['product_id'];
    $blog=new Blog();
    $singleBlog=$blog->getBlogById($pro_id);
    include 'pages/news-details.php';
}
elseif (isset($_POST['profileUpdateBtn'])){
    $auth=new Auth($_POST,$_FILES);
    $singleUser=$auth->updateAuthByID();
    include 'pages/dashboard.php';

}
elseif (isset($_POST['contactBtn'])){
//    echo "<pre>";
//    print_r($_POST);
//    exit();
    $message=new Message($_POST);
    $result=$message->newMessage();
    include 'pages/contact-us.php';
}
