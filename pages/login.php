<?php
if(isset($_SESSION["id"])){
    header("location:action.php?page=home");
}
?>
<?php include "header.php"?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card border-0 shadow rounded-0">
                    <div class="card-header bg-dark text-white text-uppercase text-center display-6">Login</div>
                    <h2 class="text-success text-center py-3"><?php echo $result?></h2>
                    <form class="p-5 row " action="action.php"  method="post">
                        <div class="mb-3 col-12 ">
                            <label for="email" class="form-label">email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="sample@mail.com">
                        </div>

                        <div class="mb-3 col-md-6 ">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="********">
                        </div>


                        <div class="">
                            <button type="submit" class="btn btn-success px-5" name="login_btn">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>
