

<?php 

    include_once __DIR__.'/includes/pdo-manager.php';
    include_once __DIR__.'/includes/functions.php';
?>
<link rel="stylesheet" href="<?php get_file_path() ?>css/admin.css">

<h1>Admin panel</h1>

<div class="add-btn-container">
    <button class="add-btn" onclick="location.href='add-post.php'">Add Post</button>
  </div>
  <div class="table">
  <div class="names">
    <div class="cell">post_id</div>
    <div class="cell">post_img_path</div>
    <div class="cell">post_title</div>
    <div class="cell">post_date</div>
    <div class="cell">post_short_text</div>
    <div class="cell">post_text</div>
    <div class="cell">actions</div>
  </div>

  <?php foreach ($PDO->get_data("post") as $col): ?>
    <div class="row">
      <div class="cell"><?php echo $col["post_id"]; ?></div>
      <div class="cell"><?php echo $col["post_img_path"]; ?></div>
      <div class="cell"><?php echo $col["post_title"]; ?></div>
      <div class="cell"><?php echo $col["post_date"]; ?></div>
      <div class="cell scrollable"><?php echo $col["post_short_text"]; ?></div>
      <div class="cell scrollable"><?php echo $col["post_text"]; ?></div>
      <div class="cell actions">
        <button onclick="location.href='delete-post.php?post_id=<?php echo $col["post_id"]; ?>'" class="delete-btn">Delete</button>
        <button onclick="location.href='edit-post.php?post_id=<?php echo $col["post_id"]; ?>'" class="edit-btn">Edit</button>
      </div>
    </div>
    
  <?php endforeach ?>
</div>
