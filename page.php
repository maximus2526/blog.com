    <?php     
    // includes block  
    include_once __DIR__.'/includes.php';
    

    // Display header
    get_header();

    // DB_MANAGER
    db_manager();
    $PDO = new Connection();
    // End includes block


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
        include 'comment-form.php';
    ?>


    <?php 
    // FOOTER
        include 'footer.php';
    ?>
