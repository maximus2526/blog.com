    <?php     

    // Display header
    include 'includes/header.php';
    // DB_MANAGER
    include_once 'includes/functions.php';
    // End includes block


    ?>  
    

    <?php 
    $post_id = (int)$_GET["post_id"];
    if (empty($PDO->get_post($post_id))):
        echo '<p class="content-text-italic">ERROR: Page is not valid</p>';
    else:
    ?>
    <div class="content">
        <h1 class="blog-topic"><?php echo $PDO->get_post($post_id)['post_title'];?></h1>
        <p class="content-text-italic"><?php echo $PDO->get_post($post_id)['post_date'];?></p>
        <img class="content-photos" src="<?php echo $PDO->get_post($post_id)['post_img_path'];?>" alt="">
        <p class="content-text"><?php echo $PDO->get_post($post_id)['post_text'];?></p> 
    </div>    


    <?php 
    // COMMENT FORM
        include 'includes/comment-form.php';
        
    ?>


    <?php 
    // FOOTER
        include 'includes/footer.php';
    endif;
    ?>
