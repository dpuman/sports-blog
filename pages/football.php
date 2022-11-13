<?php include "header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">

            <?php foreach ($footballBlogs as $fb){?>
                <div class="col-md-3 pb-3">
                    <div class="card pb-0 m-0">
                        <img src="<?php echo $fb["image"] ?>" class="rounded-top" alt="">
                        <div class="card-body pb-0">
                            <a href="action.php?page=blog-details&&id=<?php echo $fb["id"] ?>" class="text-decoration-none pb-5"><?php echo $fb["description"] ?></a>
                            <p class="text-muted small pt-2"> <?php echo $fb["author"] ?></p>
                        </div>
                    </div>
                </div>

            <?php }?>




        </div>
    </div>
</section>

<?php include "footer.php"?>
