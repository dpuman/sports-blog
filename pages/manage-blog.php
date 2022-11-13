<?php
    if(!isset($_SESSION["id"])){
        header("location:action.php?page=login");
    }
?>

<?php include "header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-header  text-center text-uppercase ">All Blog Info</div>

                        <div class="card-body">


                            <table class="table table-bordered table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Blog Title</th>
                                        <th>Author Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php foreach ($blogs as $blog) { ?>
                                    <tr>
                                        <td><?php echo $blog["title"]?></td>
                                        <td><?php echo $blog["author"]?></td>
                                        <td><?php echo $blog["category"]?></td>
                                        <td><?php echo $blog["description"]?></td>
                                        <td>
                                            <img src="<?php echo $blog["image"]?>" class="card-img" alt="Image" style="object-fit: contain" height="150" width="100">
                                        </td>

                                        <td>
                                            <a href="action.php?page=edit&&id=<?php echo $blog["id"]?>" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="action.php?page=delete&&id=<?php echo $blog["id"]?>" onclick="confirm('Are you sure?')" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                <?php } ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php include "footer.php"?>