<?php $conn = connect();?>

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

        foreach(get_array_paginated($conn, 4, $page_num ) as $row) {  
        ?>

            <div class="content-element">
                <img src="<?=get_attr($conn, "post_img_path", $row["post_id"]);?>" alt="" class="content-img">
                <p class="content-subtitles">lifestyle</p>
                <!-- Each post has been assigned a unique post_id -->
                <a href="post-page.php?post_id=<?=$row['post_id']?>" class="content-titles"><?=get_attr($conn, "post_title", $row["post_id"]);?></a>
                <p class="content-preview"><?=get_attr($conn, "post_short_text", $row["post_id"]);?></p>
            </div>
        <?php 
        }
        ?>
    </div>
</div>

<div class="pagination">
    <form action="" method="get">
    <?php 
        $entries_count = get_entries_count($conn, "post"); // Extracted value from mysqli_result
        $num_pages = ceil($entries_count[0][0]  / 4);      // How many pages will there be
        for ($page_num=1; $page_num <= $num_pages; $page_num++) { 
    ?>

    <button name="page_num" value="<?=$page_num?>" type="submit" class="pagination-btn"><?php echo $page_num?></button>
    
    <?php }  ?> 
    </form>
</div>

<?php $conn->close(); ?>   