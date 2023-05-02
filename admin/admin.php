<?php 
include_once '../includes/header.php';


?>
<link rel="stylesheet" href="<?php get_url() ?>css/admin.css">

<h1>Admin panel</h1>

<div class="add-btn-container">
    <button class="add-btn" onclick="location.href='<?php echo get_url() ?>admin/add-post.php'">Add Post</button>
  </div>
  <div class="table">
  <div class="names">
    <div class="cell">post_id</div>
    <div class="cell">post_category</div>
    <div class="cell">post_img_path</div>
    <div class="cell">post_title</div>
    <div class="cell">post_date</div>
    <div class="cell">post_short_text</div>
    <div class="cell">post_text</div>
    <div class="cell">actions</div>
  </div>
  <?php 
    $page_num = get_page_num();
    $pages_options = [
    'page_num' => $page_num,
    'entries_limit' => 10,
    ];
  ?>
  <?php foreach ($PDO->get_pages_paginated($pages_options) as $col): ?>
    <div class="row">
      <div class="cell"><?php echo $col["post_id"]; ?></div>
      <div class="cell"><?php echo $col["post_category"]; ?></div>
      <div class="cell"><?php echo $col["post_img_path"]; ?></div>
      <div class="cell"><?php echo $col["post_title"]; ?></div>
      <div class="cell"><?php echo $col["post_date"]; ?></div>
      <div class="cell scrollable"><?php echo $col["post_short_text"]; ?></div>
      <div class="cell scrollable"><?php echo $col["post_text"]; ?></div>
      <div class="cell actions">
        <button onclick="location.href='<?php echo get_url() ?>admin/delete-post.php?post_id=<?php echo $col["post_id"]; ?>'" class="delete-btn">Delete</button>
        <button onclick="location.href='<?php echo get_url() ?>admin/edit-post.php?post_id=<?php echo $col["post_id"]; ?>'" class="edit-btn">Edit</button>
      </div>
    </div>
    
  <?php endforeach ?>
  <div class="pagination">
    
    <?php 
    $how_many_pages = 10; // Following to pagination.php
    include '../includes/pagination.php'; 
    ?>
  </div>;
</div>
