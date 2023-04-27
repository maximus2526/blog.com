
<?php 


include __DIR__.'/header.php';

include __DIR__.'/includes/pdo-manager.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $post_title = $_POST['post_title'];
    $post_short_text = $_POST['post_short_text'];
    $post_text = $_POST['post_text'];
  
    // img handle
    $image_path = '';
    if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
      $image_name = $_FILES['image']['name'];
      $image_path = 'img/blog-img/' . $image_name;
    }

    $PDO->add_post($image_path, $post_title, $post_short_text, $post_text);
}
?>

<form class="form" action="" method="post">
  <div>
    <label for="post_title">Post Title:</label>
    <input type="text" id="post_title" name="post_title">
  </div>
  <div>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*">
  </div>
  <div>
    <label for="post_short_text">Short Text:</label>
    <input type="text" id="post_short_text" name="post_short_text">
  </div>
  <div>
    <label for="post_text">Text:</label>
    <textarea id="post_text" name="post_text"></textarea>
  </div>
  <button type="submit">Submit</button>
</form>





