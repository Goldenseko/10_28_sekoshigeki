<?php include "includes/admin_header.php"; ?>
    <div id="wrapper">

        <!-- Navigation -->
<?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>
                    </div>

                    <div class="col-xs-6">

                      <?php insert_categories();  ?>


                      <form class="" action="" method="post">
                        <div class="form-group">
                          <label for="cat-title">Add Category</label>
                        </div>
                        <div class="form-group">
                          <input class="form control" type="text" name="cat_title" value="">
                        </div>
                        <div class="form-group">
                          <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                        </div>
                      </form>

                      <?php //UPDATE and INCLUDE
                      if(isset($_GET['edit'])){

                        $cat_id = $_GET['edit'];

                        include "includes/update_categories.php";


                      }
                      ?>
                    </div> //Add Edit Category Form

                    <div class="col-xs-6">

                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Category Title</th>
                          </tr>
                          </thead>
                          <tbody>

                  <?php  findAllCategories();  ?>


                  <?php deleteCategories(); ?>



                          </tbody>
                        </table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/admin_footer.php"; ?>
