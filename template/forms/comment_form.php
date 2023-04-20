<?php require_once $_SERVER['DOCUMENT_ROOT'].'/mysql_manager/db_manage.php'; 
$conn = connect();
?>


<div class="comments">
<link rel="stylesheet" href="\template\css\comment\comments.css">
    <form action="" method="get">
        <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>">
        <p class="comment__count"><?=get_entries_count($conn, "comments", $post_id)[0][0]?> COMMENTS</p> 
        
        <?php
        $post_id = $_GET['post_id'];
        foreach(get_comment_data($conn) as $row) {  
            if ($row["post_id"] === $post_id){      
        ?>
        <div class="comment__container">
            <img class="comment__img" src="\template\img\comment\profile_picture.png" alt=""> 
            <div class="comment__block">
                <span class="comment__name"><?= $row["name"] ?></span>
                <p class="comment__text"><?= $row["comment_text"] ?></p>
                <a class="comment__reply" href="">REPLY</a>
            </div>
        </div>

        <?php
             }
         }  
        ?>
        <?php
            // Hundle input
            
            if(isset($_GET["comment"])){
                post_comment($conn, $post_id);
            }
        ?>
        <div class="comment__form">
            <img class="comment__img" src="\template\img\comment\profile_picture.png" alt=""> 
            <input placeholder="Join the discussion" type="text" class="comment__input" name="comment">
            
        </div>
    </form>
    
</div>