<?php 
// DB_MANAGER
include_once 'includes/functions.php';
// Display header
include_once 'includes/header.php';
?>   


<!-- CONTENT -->
<div class="content">
  <h1 class="page-title">Blog</h1>
  <div class="content-wrapper">
    <?php include 'includes/pagination-call.php'; ?>
    <?php foreach ($data as $post): ?>
      <div class="content-element">
        <img src="<?= $post["post_img_path"] ?>" alt="" class="content-img">
        <p class="content-subtitles"><?= $post["post_category"] ?></p>
        <!-- Each post has been assigned a unique post_id -->
        <a href="page.php?post_id=<?= $post['post_id'] ?>" class="content-titles"><?= $post["post_title"] ?></a>
        <p class="content-preview"><?= $post["post_short_text"] ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="pagination">
  <?php 
  $how_many_pages = 4; // Following to pagination.php
  include 'includes/pagination.php'; 
  ?>
</div>


<?php

    // Display footer
    include 'includes/footer.php';

    
?>
  
