<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Role</th>
    </tr>
    </thead>
    <?php

    $query = "SELECT * FROM users ";
    $select_users = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_users)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lasname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_role = $row['user_role'];
        $user_image = $row['user_image'];



        echo "<tr>";
        echo "<td>{$user_id}</td>";
        echo "<td>{$username}</td>";
        echo "<td>{$user_firstname}</td>";

//        $query = "SELECT * FROM categories WHERE cat_id = {$post_category} ";
//        $select_categories_id = mysqli_query($connection, $query);
//        while ($row = mysqli_fetch_assoc($select_categories_id)) {
//            $cat_id = $row['cat_id'];
//            $cat_title = $row['cat_title'];
//
//
//            echo "<td>{$cat_title}</td>";
//        }


        echo "<td>{$user_lasname}</td>";
        echo "<td>{$user_email}</td>";
        echo "<td>{$user_role}</td>";
//        $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
//        $select_post_id_query = mysqli_query($connection,$query);
//        while($row = mysqli_fetch_assoc($select_post_id_query)){
//            $post_id = $row['post_id'];
//            $post_title = $row['post_title'];
//            echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
//        }
        echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
        echo "<td><a href='users.php?change_to_subscriber={$user_id}'>Subscriber</a></td>";
        echo "<td><a href='users.php?source=edit_user&p_id={$user_id}'>Edit</a></td>";
        echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<?php
//unapprove

if(isset($_GET['change_to_subscriber'])){
//ob_start();
    $the_user_id = $_GET['change_to_subscriber'];
    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id=$the_user_id";
    $change_subscriber_query = mysqli_query($connection, $query);
    header("Location: users.php");
}

//approve
if(isset($_GET['change_to_admin'])){
//ob_start();
    $the_user_id = $_GET['change_to_admin'];
    $query = "UPDATE users SET user_role = 'admin' WHERE user_id=$the_user_id";
    $change_admin_query = mysqli_query($connection, $query);
    header("Location: users.php");
}
//delete
if(isset($_GET['delete'])){
//ob_start();
    $the_user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
    $delete_user_query = mysqli_query($connection, $query);
    header("Location: users.php");
}
?>