<?php 


// Display header

include __DIR__.'/header.php';

// DB_MANAGER

include __DIR__.'/includes/pdo-manager.php';


?>   


<!-- CONTENT -->
    <div class="content">
    <h1 class="page-title">Blog</h1>

    <div class="content-wrapper">
        <?php 

        $page_num = get_page_num();
        $pages_options = [
            'page_num' => $page_num,
            'entries_limit' => 4,
        ];
        
        if(is_categoried()){
            $pages_options['post_category'] = $_GET['post_category'];
        }
        foreach($PDO->get_array_paginated($pages_options) as $data):  
        ?>
            <div class="content-element">
                <img src="<?=$data["post_img_path"]?>" alt="" class="content-img">
                <p class="content-subtitles"><?=$data["post_category"]?></p>
                <!-- Each post has been assigned a unique post_id -->
                <a href="page.php?post_id=<?=$data['post_id']?>" class="content-titles"><?=$data["post_title"]?></a>
                <p class="content-preview"><?=$data["post_short_text"]?></p>
            </div>
        <?php 
        endforeach; 
        ?>
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
    include __DIR__.'/footer.php';

    
?>
  
