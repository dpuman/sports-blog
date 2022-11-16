<?php

?>

<?php include "pages/header.php"?>



<section class="">
    <div id="banner-owl-demo" class="owl-carousel owl-theme">
        <div class="item col-md-12 p-0 ">
            <div class="card rounded-0 p-0 border-0">
                <div class="card-header p-0 border-0">
                    <div class="col-12 p-0 w-100" >
                        <img src="assets/images/cr7.jpg" alt="" style="height:500px;width: 100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-md-12 p-0 ">
            <div class="card rounded-0 p-0 border-0">
                <div class="card-header p-0 border-0">
                    <div class="col-12 p-0 w-100">
                        <img src="assets/images/cr7-2.jpg" alt="" style="height:500px;width: 100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="item col-md-12 p-0 ">
            <div class="card rounded-0 p-0 border-0">
                <div class="card-header p-0 border-0">
                    <div class="col-12 p-0 w-100" >
                        <img src="assets/images/crick-1.jpg" alt="" style="height:500px;width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--cricket section-->
<section class="">
    <div class="container">
        <div class="row">
<!--            Left -->
            <div class="col-md-8">
                <div class="row">
                    <div class="card card-footer border-0 rounded-0 bg-white text-center">
                        <h5>Cricket News</h5>
                    </div>
                    <?php foreach ($someCricketBlogs as $cb){?>
                        <div class="col-md-6 pb-4">
                            <div class="card pb-0 m-0">
                                <img src="<?php echo $cb['image']?>" class="rounded-top" alt="">
                                <div class="card-body pb-0">
                                    <a href="action.php?page=blog-details&&id=<?php echo $cb["id"] ?>" class="text-decoration-none pb-5"><?php echo $cb['title']?></a>
                                    <p class="text-muted small pt-2"> <?php echo $cb['author']?> </p>
                                </div>
                            </div>
                        </div>
                    <?php }?>




                </div>

                <div class="row">
                    <div class="card card-footer border-0 rounded-0 bg-white text-center">
                        <h5>Football News</h5>
                    </div>

                    <?php foreach ($someFootBallBlogs as $fb) {?>

                        <div class="col-md-6 pb-4">
                            <div class="card pb-0 m-0">
                                <img src="<?php echo $fb['image']?>" class="rounded-top" alt="">
                                <div class="card-body pb-0">
                                    <a href="action.php?page=blog-details&&id=<?php echo $fb["id"] ?>" class="text-decoration-none pb-5"><?php echo $cb['title']?></a>
                                    <p class="text-muted small pt-2"> <?php echo $fb['author']?> </p>
                                </div>
                            </div>
                        </div>

                    <?php }?>





                </div>
            </div>

<!--            Right -->
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Popular News</h5>
                    </div>
                    <div class="card-body pt-0">
                        <?php foreach($blogs as $blog) {?>
                            <div class="border-bottom py-3">
                                <p class="text-muted small"> <?php echo $blog['author']?> </p>
                                <a href="" class="text-decoration-none"><?php echo $blog['description']?></a>
                            </div>
                        <?php }?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "pages/footer.php"?>


