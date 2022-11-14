<!doctype html>
<html lang="en">

<head>
<title>:: Admin Pannel ::</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
<link rel="stylesheet" href="assets/admin/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/admin/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/admin/css/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/admin/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="assets/admin/css/morris.min.css" />


<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/admin/css/main.css">
<link rel="stylesheet" href="assets/admin/css/color_skins.css">
<style>
    .icon-menu:before{display:none !important};
</style>
<style>
    body{
    background-color: #d2e1aa;
    font-family: "Ubuntu",sans-serif;
    font-size: 14px;
    color: #1c0404;
}
</style>
</head>
<body class="body">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="assets/images/light-loader.gif" alt="admin"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper" class="wrapper">
    <nav class="navbar navbar-fixed-top" style="background-color: #a4c5a9;">
        <div class="container-fluid">
            <div class="navbar-btn float-left">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand float-left">
                <a href="#" style="color: black; font-weight: bold;">Sports News Blog</a>                
            </div>
            
            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
                        </li>
                        <li>
                            <a href="#" class="icon-menu"><i class="icon-logout"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- left sidebar  -->
    <div id="left-sidebar" class="sidebar" style="background-color: #a4c5a9;">
        <div class="sidebar-scroll">
            <div class="row user-account">
                <div class="col-4 p-0">
                    <img src="assets/admin/images/man.png" class="rounded-circle user-photo" alt="Admin Picture">
                </div>
                
                <div class="col-8 p-0">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="user-name" ><strong>Shanjoy sutradhar</strong></a>
                </div>
            
            </div>

            <!-- Tab panes -->
            <div class="p-l-0 p-r-0">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        <li><a href="action.php?admin=home"><i class="icon-grid"></i><span>Dashboard</span></a></li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-picture"></i><span>Banner</span> </a>
                            <ul>
                                <li><a href="#">All Banners</a></li>
                                <li><a href="#">Add Banner</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-sitemap"></i><span>Category</span> </a>
                            <ul>
                                <li><a href="action.php?admin=category-index">All Categories</a></li>
                                <li><a href="action.php?admin=category-create">Add Category</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-briefcase"></i><span>Sports Item</span> </a>
                            <ul>
                                <li><a href="action.php?admin=sports-blog-index">All Sports item Blog</a></li>
                                <li><a href="action.php?admin=sports-blog-create">Add Sports item Blog</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-people"></i><span>User Management</span> </a>
                            <ul>
                                <li><a href="#">All Users</a></li>
                                <li><a href="#">Add Users</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-newspaper"></i><span>Comment Management</span> </a>
                            <ul>
                                <li><a href="#">All comment</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
