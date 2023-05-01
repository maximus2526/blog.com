    <?php     

    // Display header
    include 'includes/header.php';
    // DB_MANAGER
    include_once 'includes/pdo-manager.php';
    // End includes block


    ?>  
    


    <div class="content">
        <?php 
        $post_id = $_GET["post_id"];
        ?>
        <h1 class="blog-topic"><?=$PDO->get_data("post", "post_title", $post_id);?></h1>
        <p class="content-text-italic"><?=$PDO->get_data("post", "post_date", $post_id);?></p>
        <img class="content-photos" src="<?=$PDO->get_data("post", "post_img_path", $post_id);?>" alt="">
        <p class="content-text"><?=$PDO->get_data("post", "post_text", $post_id);?></p> 
    </div>    


    <?php 
    // COMMENT FORM
        include 'includes/comment-form.php';
    ?>


    <?php 
    // FOOTER
        include 'includes/footer.php';
    ?>
