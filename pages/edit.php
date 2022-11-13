<?php
if(!isset($_SESSION["id"])){
    header("location:action.php?page=login");
}
?>
<?php include 'header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="card border-0 shadow rounded-0">
                        <div class="card-header bg-dark text-white text-uppercase text-center display-6">Update Blog</div>
                        <form class="p-5 row " action="action.php" enctype="multipart/form-data" method="post">
                            <div class="mb-3 col-12 ">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="<?php echo $singleBlog['title']?>">
                                <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $singleBlog['id']?>">
                            </div>

                            <div class="mb-3 col-md-6 ">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" name="author" class="form-control" id="author" value="<?php echo $singleBlog['author']?>">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select " name="category" id="category" >

                                    <?php if($singleBlog['category'] == "cricket"){ ?>
0                                    <option selected value="cricket">Cricket</option>
                                    <?php } else{?>
                                        <option selected value="football">Football</option>
                                    <?php }?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="image" >
                                <img src="<?php echo $singleBlog['image']?>" alt="Image" height="150" width="150" style="object-fit: contain" >
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3" ><?php echo $singleBlog['description']?></textarea>
                            </div>

                            <div class="">
                                <button type="submit" class="btn btn-success px-5" name="btn_update">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'?>