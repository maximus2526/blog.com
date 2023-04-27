
<?php 
include __DIR__.'/header.php';
include __DIR__.'/includes/pdo-manager.php';
ini_set('display_errors', 1);
error_reporting(E_ALL); 
$post_id = $_GET['post_id'];
$PDO->edit_post($post_id, $image_path, $post_title, $post_short_text, $post_text);
    
?>

<link rel="stylesheet" href="<?php get_file_path(); ?>/css/admin.css">

<form class="form" action="" method="post" enctype="multipart/form-data">
  <div>
    <label for="post_title">Post Title:</label>
    <input type="text" id="post_title" name="post_title" required>
  </div>
  <div>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required>
  </div>
  <div>
    <label for="post_short_text">Short Text:</label>
    <input type="text" id="post_short_text" name="post_short_text" required>
  </div>
  <div>
    <label for="post_text">Text:</label>
    <textarea id="post_text" name="post_text" required></textarea>
  </div>
  <button type="submit">Update</button>
  <div class='error'>
    <?php 
      if ($_SERVER['REQUEST_METHOD'] === 'POST')
        echo $result;
    ?>
  </div>
</form>
