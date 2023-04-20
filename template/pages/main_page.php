<?php include $_SERVER['DOCUMENT_ROOT'].'/mysql_manager/db_manage.php'; $conn = connect();?>

<div class="content">
    <h1 class="page-title">Blog</h1>
    
    <div class="content__wrapper">
        <?php 
        // Take number of page from buttons
        if (isset($_GET["page_num"])){
            $page_num = (int)$_GET["page_num"];
        }
        else
            $page_num = 1;

        foreach(get_array_paginated($conn, 4, $page_num ) as $row) {  
        ?>

            <div class="content__element">
                <img src="<?=get_attr($conn, "post_img_path", $row["post_id"]);?>" alt="" class="content__img">
                <p class="content_subtitles">lifestyle</p>
                <a href="template/pages/post_page.php?post_id=<?=$row['post_id']?>" class="content__titles"><?=get_attr($conn, "post_title", $row["post_id"]);?></a>
                <p class="content_preview"><?=get_attr($conn, "post_short_text", $row["post_id"]);?></p>
            </div>
        <?php 
        }
        ?>
    </div>
</div>

<div class="pagination">
    <form action="" method="get">
    <?php 
        $entries_count = get_entries_count($conn, "post")[0][0]; // Extracted value from mysqli_result
        $num_pages = ceil($entries_count  / 4);          // How many pages will there be
        for ($page_num=1; $page_num <= $num_pages; $page_num++) { 
    ?>

    <button name="page_num" value="<?=$page_num?>" type="submit" class="pagination__btn"><?=$page_num?></button>
    
    <?php }  ?> 
    </form>
</div>

<?php $conn->close(); ?>   