
<?php include 'includes/admin_header.php' ?>

<?php
if(isset($_SESSION['username'])){



}


?>

<div id="wrapper">


    <?php include 'includes/admin_navigation.php' ?>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small><?php
                            echo $_SESSION['username'];
                            ?></small>
                    </h1>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title">First Name</label>
                            <input type="text" value="<?php echo $user_firstname?>" class="form-control" name="user_firstname">
                        </div>
                        <div class="form-group">
                            <label for="post_status">Last Name</label>
                            <input type="text" value="<?php echo $user_lastname; ?>"class="form-control" name="user_lastname">
                        </div>

                        <div class="form-group">
                            <label for="user_role">Select User Role</label><br />
                            <select name="user_role" id="">
                                <option value="subscriber"><?php echo $user_role; ?></option>
                                <?php
                                if ($user_role == 'admin'){
                                    echo "<option value='subscriber'>Subscriber</option>";
                                } else {
                                    echo "<option value='admin'>Admin</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Username</label>
                            <input type="text" value="<?php echo $username?>"class="form-control" name="username">
                        </div>
                        <!--    <div class="form-group">-->
                        <!--        <label for="post_image">Post Image</label>-->
                        <!--        <input type="file" name="image">-->
                        <!--    </div>-->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo $user_email?>"class="form-control" name="user_email">
                        </div>
                        <div class="form-group">
                            <label for="user_password">Password</label>
                            <input type="password" value="<?php echo $user_password;?>" class="form-control" name="user_password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="edit_user" value="Edit User">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php include 'includes/admin_footer.php' ?>