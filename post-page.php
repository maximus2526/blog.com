    <?php     
    // HEADER
        include 'routes.php';
        include 'template/static/header.php';
        ?>
    
    <?php  
        include 'mysql-manager/db-manage.php';
        include 'mysql-manager/pdo-manager.php';

        $conn = connect();
    ?>

    <div class="content">
        <?php 
        $post_id = $_GET["post_id"];
        ?>
        <h1><?=get_attr($conn, "post_title", $post_id);?></h1>
        <p class="content-text-italic"><?=get_attr($conn, "post_date", $post_id);?></p>
        <img class="content-photos" src="<?=get_attr($conn, "post_img_path", $post_id);?>" alt="">
        <p class="content-text" id="content"><?=get_attr($conn, "post_text", $post_id);?></p> 
    </div>    


    <?php
    $conn->close();
    ?>   

    <?php 
    // COMMENT FORM
        include 'template/forms/comment-form.php';
    ?>


    <?php 
    // FOOTER
        include 'template/static/footer.php';
    ?>
