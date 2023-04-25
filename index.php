<?php 
// includes   
include_once 'includes.php';

// Get functions

get_functions();

// Display header

get_header();

// DB_MANAGER

db_manager();
$PDO = new Connection();

?>   


<!-- CONTENT -->
    <div class="content">
    <h1 class="page-title">Blog</h1>

    <div class="content-wrapper">
        <?php 
        // Take number of page from buttons
        if (isset($_GET["page_num"])){
            $page_num = (int)$_GET["page_num"];
        }
        else
            $page_num = 1;

        foreach($PDO->get_array_paginated(4, $page_num) as $data):  
        ?>
            
            <div class="content-element">
                <img src="<?=$PDO->get_post_data("post_img_path", $data["post_id"]);?>" alt="" class="content-img">
                <p class="content-subtitles">lifestyle</p>
                <!-- Each post has been assigned a unique post_id -->
                <a href="page.php?post_id=<?=$data['post_id']?>" class="content-titles"><?=$PDO->get_post_data("post_title", $data["post_id"]);?></a>
                <p class="content-preview"><?=$PDO->get_post_data("post_short_text", $data["post_id"]);?></p>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

    <div class="pagination">
    <form action="" method="get">
    <?php 
        $entries_count = $PDO->get_entries_count("post"); // Extracted value from mysqli_result
        $num_pages = ceil($entries_count / 4);      // How many pages will there be
        for ($page_num=1; $page_num <= $num_pages; $page_num++):
            // Select active button for custom styles
            $btn_class = 'pagination-btn-active';
            if ($page_num != $_GET['page_num'])
                $btn_class = 'pagination-btn';   
    ?>

    <button name="page_num" value="<?php echo $page_num ?>" type="submit" class="<?php echo $btn_class ?>"><?php echo $page_num?></button>

    <?php endfor;  ?> 
    </form>
    </div>


<?php

    // Display footer
    get_footer();

    
?>
  
