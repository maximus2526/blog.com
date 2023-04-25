<?php
    $post_id = $_GET['post_id'];
    
    
?>


<div class="comments">
<link rel="stylesheet" href="/template/css/comment/comments.css">
    <form action="template/forms/form-handler.php" method="post">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        <!-- Get count of comments for each post -->
        <p class="comment-count"><?=$PDO->get_comments_count($post_id)?> COMMENTS</p> 
        
        <?php
        // Get data from db and display in the form
        $comments = $PDO->get_comments($post_id);
        if(!$comments){
            echo "<p class='content-text-italic'>There are no comments here. You can be the first!</p><br>";
            
            }
        else{
            foreach($comments as $comment) {  
        ?>
        <div class="comment-container">
            <img class="comment-img" src="/template/img/comment/profile_picture.png" alt=""> 
            <div class="comment-block">
                <span class="comment-name"><?= $comment["name"] ?></span>
                <p class="comment-text"><?= $comment["comment_text"] ?></p>
                <a class="comment-reply" href="">REPLY</a>
            </div>
        </div>

        <?php
                }
             } 
        ?>

        <div class="comment-form">
            <img class="comment-img" src="/template/img/comment/profile_picture.png" alt=""> 
            <input placeholder="Join the discussion" type="text" class="comment-input"  name="comment">
        </div>

    </form>
    
</div>