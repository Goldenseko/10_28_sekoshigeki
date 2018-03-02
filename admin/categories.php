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

                      <?php
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
                  <?php  //Finding All categories Query
                  $query = "SELECT * FROM categories LIMIT 20";
                  $select_categories = mysqli_query($connection,$query);

                  while($row = mysqli_fetch_assoc($select_categories)){
                  $cat_id = $row['cat_id'];
                  $cat_title = $row['cat_title'];
                  echo "<tr>";
                  echo "<td>{$cat_id}</td>";
                  echo "<td>{$cat_title}</td>";
                  echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                  echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                  echo "</tr>";
                  }
                  ?>

                  <?php  //DELETE QUERY
                  if(isset($_GET['delete'])){

                    $the_cat_id = $_GET['delete'];

                    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
                    $delete_query = mysqli_query($connection,$query);

                    header("Location: categories.php");
                  }



                   ?>


                            <tr>
                              <td>BaseBall Category</td>
                              <td>Basket Ball Category</td>
                            </tr>
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
