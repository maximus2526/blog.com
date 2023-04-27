    <?php     

    // Display header
    include __DIR__.'/header.php';
    // DB_MANAGER
    include __DIR__.'/includes/pdo-manager.php';
    $PDO = new Connection();
    // End includes block


    ?>  
    


    <div class="content">
        <?php 
        $post_id = $_GET["post_id"];
        ?>
        <h1 class="blog-topic"><?=$PDO->get_data("post", "post_title", $post_id);?></h1>
        <p class="content-text-italic"><?=$PDO->get_data("post", "post_date", $post_id);?></p>
        <img class="content-photos" src="<?=$PDO->get_data("post", "post_img_path", $post_id);?>" alt="">
        <p class="content-text" id="content"><?=$PDO->get_data("post", "post_text", $post_id);?></p> 
    </div>    


    <?php 
    // COMMENT FORM
        include __DIR__.'/comment-form.php';
    ?>


    <?php 
    // FOOTER
        include __DIR__.'/footer.php';
    ?>
