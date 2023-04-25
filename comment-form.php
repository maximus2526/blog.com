<?php
    $post_id = $_GET['post_id']; 

?>


<div class="comments">
    <form action=<?php echo "comment-handler.php?post_id={$post_id}" ?> method="post">
        <!-- Get count of comments for each post -->
        <p class="comment-count"><?=$PDO_obj->get_comments_count($post_id)?> COMMENTS</p> 
        
        <?php
        // Get data from db and display in the form
        $comments = $PDO_obj->get_comments($post_id);
        if(!$comments):
            echo "<p class='content-text-italic'>There are no comments here. You can be the first!</p><br>";      
        else:
            foreach($comments as $comment):
        ?>
        <div class="comment-container">
            <img class="comment-img" src="/img/comment/profile_picture.png" alt=""> 
            <div class="comment-block">
                <span class="comment-name"><?php echo $comment["name"] ?></span>
                <p class="comment-text"><?php echo $comment["comment_text"] ?></p>
                <a class="comment-reply" href="">REPLY</a>
                
            </div>
        </div>

        <?php
                endforeach;
            endif; 
        ?>

        <div class="comment-form" id="comment_input">
            <img class="comment-img" src="/img/comment/profile_picture.png" alt=""> 
            
            <input placeholder="Join the discussion" type="text"  class="comment-input"  name="comment">
        </div>

    </form>
    
</div>