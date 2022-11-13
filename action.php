<?php
    session_start();
    require_once "vendor/autoload.php";
    use App\classes\Blog;
    use App\classes\Auth;

    $result ="";
    $someCricketBlogs=[];
$someFootBallBlogs=[];
    if(isset($_GET["page"])){
        if($_GET["page"]=="home"){
            $blog = new Blog();
            $blogs = $blog->getAllBlog();

            $allCricketBlogs= $blog->getAllCricketBlogs();
            $someCricketBlogs = array_slice($allCricketBlogs,0,4);

            $allFootBallBlogs= $blog->getAllFootBallBlogs();
            $someFootBallBlogs = array_slice($allFootBallBlogs,0,4);

            include "pages/home.php";
        }
        elseif($_GET["page"]=="cricket"){

            $blog =new Blog();
            $cricketBlogs = $blog->getAllCricketBlogs();

            include "pages/cricket.php";
        }
        elseif($_GET["page"]=="football"){
            $blog = new Blog();
            $footballBlogs = $blog->getAllFootBallBlogs();
            include "pages/football.php";
        }
        elseif($_GET["page"]=="blog-details"){
            $blog = new Blog();
            $singleBlog = $blog->getBlogById($_GET["id"]);
            include "pages/blog-details.php";
        }
        elseif($_GET["page"]=="about-us"){
            include "pages/about-us.php";
        }
        elseif($_GET["page"]=="contact"){
            include "pages/contact.php";
        }
        elseif($_GET["page"]=="add-blog"){
            include "pages/add-blog.php";
        }
        elseif($_GET["page"]=="manage-blog"){
            $blog = new Blog();
            $blogs = $blog->getAllBlog();
            include "pages/manage-blog.php";
        }
        elseif($_GET["page"]=="edit"){
            $blog= new Blog();
            $singleBlog=$blog->getBlogById($_GET["id"]);

            include "pages/edit.php";
        }
        elseif($_GET["page"]=="delete"){
            $blog= new Blog();
            $blog->deleteBlog($_GET['id']);
        }
        elseif($_GET["page"]=="login"){
            include "pages/login.php";
        }
        elseif($_GET["page"]=="logout"){
            $auth = new Auth();
            $auth->logout();
        }
    }elseif (isset($_POST["btn"])){
        $blog = new Blog($_POST,$_FILES);
        $result = $blog->newBlog();
        include "pages/add-blog.php";

    }elseif (isset($_POST["btn_update"])){
        $blog = new Blog($_POST,$_FILES);
        $blog->updateBlog();
    }
    elseif (isset($_POST["login_btn"])){

        $auth= new Auth($_POST);
        $result = $auth->login();
        include "pages/login.php";

    }

