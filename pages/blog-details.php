<?php include "pages/header.php"?>

    <section class="py-5 bg-light">
        <div class="container w-75">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/images/author.jpg" alt="" class="" style="border-radius: 100%" height="70" width="70">
                    <span>By</span> <span class="fw-semibole"><?php echo $singleBlog['author']?></span>
                </div>
                <div class="col-md-8">
                    <p class="fw-semibold"><?php echo $singleBlog['title']?></p>
                    <p class="small"><?php echo $singleBlog['category']?></p>

                </div>
                <div class="col-md-12">
                    <div>
                        <img src="<?php echo $singleBlog['image']?>" style="width: 100%" height="500" alt="">
                    </div>


                    <p class="small pt-3"><?php echo $singleBlog['description']?></p>

                </div>



                <!--            comment submit-->

            </div>


        </div>
    </section>
<?php include "pages/footer.php"?>