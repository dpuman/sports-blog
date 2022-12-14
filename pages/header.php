<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sports News</title>
</head>
<body>
<!--header and navbar-->
<header>
    <section class="position-relative border-bottom bg-header-color">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav text-secondary">
                        <li class="pt-2"><i class="fa-regular fa-envelope me-3"></i>info@sportsnews.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center text-uppercase text-secondary fw-semibold pt-1">sports news</h3>
                </div>
                <div class="col-md-4">
                    <ul class="nav float-end">
                        <li class=""><a href="#signin_modal" data-bs-toggle="modal" class="text-secondary nav-link">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--modal for sign in-->
    <div class="modal fade" id="signin_modal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fw-bold text-uppercase ms-0">sign in</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center p-0">
                        <a href=""><i class="fa-brands fa-square-facebook modal-icon-f mx-2"></i></a>
                        <a href=""><i class="fa-brands fa-google-plus-g modal-icon-g "></i></a>
                    </div>
                    <div class="card card-body border-0 p-0">

                        <label class="pt-0" for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="your email">


                        <label class="pt-3" for="">Password</label>
                        <input type="password" name="password" class="form-control">

                        <div class="text-end pb-3"><span class="text-success">Forget password</span></div>

                        <button type="submit" class="btn btn-outline-primary form-control">Login</button>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <span>Not registered? To register click </span><a href="" class="nav-link text-success" > here</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

    <section class="bg-header-color shadow">
        <nav class="navbar navbar-expand-md py-0">
            <div class="container py-0">
                <a href="" class="navbar-brand">
                    <h3 class="float-end ps-1 py-3 text-secondary fw-bold text-uppercase"></h3>
                </a>
                <ul class="navbar-nav mx-auto fw-bold text-secondary ">
                    <li><a href="action.php?page=home" class="nav-link py-4 ">Home</a></li>

                    <li><a href="action.php?page=cricket" class="nav-link py-4 ">Cricket</a></li>
                    <li><a href="action.php?page=football" class="nav-link py-4 ">Football</a></li>
                    <li><a href="action.php?page=about-us" class="nav-link py-4 ">About Us</a></li>
                    <li><a href="action.php?page=contact" class="nav-link py-4 ">Contact</a></li>

                    <?php if(isset($_SESSION['id'])){ ?>
                        <li><a href="action.php?page=add-blog" class="nav-link py-4 ">Add Blogs</a></li>
                        <li><a href="action.php?page=manage-blog" class="nav-link py-4 ">Manage Blogs</a></li>
                        <li><a href="action.php?page=logout" class="nav-link py-4 ">Logout</a></li>
                    <?php } else { ?>

                    <li><a href="action.php?page=login" class="nav-link py-4 ">Login</a></li>


                    <?php } ?>

                </ul>

                <ul class="navbar-nav">
                    <li class="">

                        <button type="submit" class="btn btn-sm btn-outline-info border-0"><i class="fa-solid fw-bold fa-magnifying-glass text-secondary"></i></button>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</header>
<!-- end header and navbar-->