<?php require_once $_SERVER['DOCUMENT_ROOT'].'/mysql_manager/db_manage.php'; 
$conn = connect();
$post_id = $_GET['post_id']
?>


<div class="comments">
<link rel="stylesheet" href="\template\css\comment\comments.css">
            <?php
            // Hundle input
            if(isset($_POST["comment"])){
                post_comment($conn, $post_id);
                header("Location: " . $_SERVER['PHP_SELF']."?post_id=$post_id");
            }
        ?>
    <form action="" method="post">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        <!-- Get count of comments for each post -->
        <p class="comment-count"><?=get_entries_count($conn, "comments", $post_id)[0][0]?> COMMENTS</p> 
        
        <?php
        // Get data from db and display in the form
        foreach(get_comment_data($conn) as $row) {  
            if ($row["post_id"] === $post_id){      
        ?>
        <div class="comment-container">
            <img class="comment-img" src="\template\img\comment\profile_picture.png" alt=""> 
            <div class="comment-block">
                <span class="comment-name"><?= $row["name"] ?></span>
                <p class="comment-text"><?= $row["comment_text"] ?></p>
                <a class="comment-reply" href="">REPLY</a>
            </div>
        </div>

        <?php
             }
         }  
        ?>

        <div class="comment-form">
            <img class="comment-img" src="\template\img\comment\profile_picture.png" alt=""> 
            <input placeholder="Join the discussion" type="text" class="comment-input"  name="comment">
        </div>

    </form>
    
</div>