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




<!--                Comments-->
                <div class="col-md-12 border-top pt-3">
                    <h3>Comments</h3>

                    <?php foreach($comments as $com){?>

                    <div class="row rounded-1 pb-2 mb-3" style="background-color: #cdfbc9; border: 2px">
                        <div class="col-md-6 pt-2">
                            <img src="assets/images/author.jpg" alt="" class="" style="border-radius: 100%" height="70" width="70">
                            <span class="fw-semibole pt-2"><?php echo $com['name']?></span>
                        </div>
                        <div class="col-md-6 pt-2">
                            <a href="" class="text-decoration-none float-end">Reply</a>
                        </div>
                        <div class="pt-2">
                            <p class="small text-muted"><?php echo $com['comment']?></p>
                        </div>
                    </div>
                    <?php }?>

                </div>



                <!--            comment submit-->


                <div class="col-md-12 bg-info rounded-1">
                    <h4>Leave a Comment</h4>
                    <div class="row">
                        <form action="action.php" method="post">
                            <div class="col-md-6">
                                <label for="" class="">Your Name</label>
                                <input type="text" class="form-control" name="name">
                                <input type="hidden" name="block_id" value="<?php echo $singleBlog['id']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="">Your Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="col-md-12">
                                <label for="" class="">Your Comment</label>
                                <textarea name="comment" id="" class="form-control" cols="30" rows="5"></textarea>
                            </div>

                            <div class="col-md-12 py-3">
                                <input type="submit" name="comment_btn" class="btn btn-success form-control-sm" value="Submit"/>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </section>
<?php include "pages/footer.php"?>