    <?php     
    // HEADER
        include 'routes.php';
        include 'template/static/header.php';
        include 'mysql-manager/pdo-manager.php';
        ?>
    


    <div class="content">
        <?php 
        $post_id = $_GET["post_id"];
        ?>
        <h1><?=$PDO->get_post_data("post_title", $post_id);?></h1>
        <p class="content-text-italic"><?=$PDO->get_post_data("post_date", $post_id);?></p>
        <img class="content-photos" src="<?=$PDO->get_post_data("post_img_path", $post_id);?>" alt="">
        <p class="content-text" id="content"><?=$PDO->get_post_data("post_text", $post_id);?></p> 
    </div>    


    <?php 
    // COMMENT FORM
        include 'template/forms/comment-form.php';
    ?>


    <?php 
    // FOOTER
        include 'template/static/footer.php';
    ?>
