<?php include "pages/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">

           <?php foreach ($cricketBlogs as $cb){?>
               <div class="col-md-3 pb-3">
                   <div class="card pb-0 m-0">
                       <img src="<?php echo $cb["image"] ?>" class="rounded-top" alt="">
                       <div class="card-body pb-0">
                           <a href="action.php?page=blog-details&&id=<?php echo $cb["id"] ?>" class="text-decoration-none pb-5"><?php echo $cb["description"] ?></a>
                           <p class="text-muted small pt-2"> <?php echo $cb["author"] ?></p>
                       </div>
                   </div>
               </div>

            <?php }?>




        </div>
    </div>
</section>

<?php include "pages/footer.php"?>


