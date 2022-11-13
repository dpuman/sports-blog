<?php
    if(!isset($_SESSION["id"])){
        header("location:action.php?page=login");
    }
?>

<?php include "header.php"?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card border-0 shadow rounded-0">
                    <div class="card-header bg-dark text-white text-uppercase text-center display-6">Add Blogs</div>
                    <h2 class="text-success text-center py-3"><?php echo $result?></h2>
                    <form class="p-5 row " action="action.php" enctype="multipart/form-data" method="post">
                        <div class="mb-3 col-12 ">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Give A TITLE">
                        </div>

                        <div class="mb-3 col-md-6 ">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" id="author" placeholder="Author Name">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select " name="category" id="category">
                                <option selected>Select Category</option>
                                <option value="cricket">Cricket</option>
                                <option value="football">Football</option>
                            </select>
                        </div>



                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Give some descriptions"></textarea>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-success px-5" name="btn">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>
