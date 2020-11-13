<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Role</th>
        <th>Date</th>
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
        echo "<td><a href='comments.php?approve={$user_id}'>Approve</a></td>";
        echo "<td><a href='comments.php?unapprove={$user_id}'>Unapprove</a></td>";
        echo "<td><a href='posts.php?source=edit_post&p_id={$user_id}'>Edit</a></td>";
        echo "<td><a href='comments.php?delete={$user_id}'>Delete</a></td>";

        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<?php
//unapprove

if(isset($_GET['unapprove'])){
//ob_start();
    $the_comment_id = $_GET['unapprove'];
    $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id=$the_comment_id";
    $unapprove_comment_query = mysqli_query($connection, $query);
    header("Location: comments.php");
}

//approve
if(isset($_GET['approve'])){
//ob_start();
    $the_comment_id = $_GET['approve'];
    $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id=$the_comment_id";
    $approve_comment_query = mysqli_query($connection, $query);
    header("Location: comments.php");
}
//delete
if(isset($_GET['delete'])){
//ob_start();
    $the_comment_id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id} ";
    $delete_post_query = mysqli_query($connection, $query);
    header("Location: comments.php");
}
?>