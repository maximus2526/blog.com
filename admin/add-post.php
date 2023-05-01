
<?php 
include_once '../includes/header.php';
include_once '../includes/pdo-manager.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST'){

  // img handle
  if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
      $image_name = $_FILES['image']['name'];
      $image_path = '/img/blog-img/' . $image_name;
      $full_image_path = get_file_path() . $image_path;
      if (!move_uploaded_file($_FILES['image']['tmp_name'], $full_image_path)) {
          die(var_dump($_FILES)."Error uploading image!".$image_name.$full_image_path);
      }
  } else {
      die('Error of sending img');
  }
    $options = [
    'post_img_path' => $image_path,
    'post_category' => $_POST['post_category'],
    'post_title' =>  $_POST['post_title'],
    'post_short_text' =>  $_POST['post_short_text'],
    'post_text' =>  $_POST['post_text'],
    'post_date' => date('Y-m-d')

  ];
  try {
      $result = $PDO->add_post($options);
      if ($result) {
          $message = "Post added successfully!";
      } else {
          $message = "Post add failed!";
      }
  } catch (PDOException $e) {
      $message = "Error adding post: " . $e->getMessage();
  }
}
?>

<link rel="stylesheet" href="<?php get_file_path(); ?>/css/admin.css">

<form class="form" action="" method="post" enctype="multipart/form-data">
  <div>
    <label for="post_title">Post Title:</label>
    <input type="text" id="post_title" name="post_title" required>
  </div>
  <div>
    <label for="post_category">Category:</label>
    <select name="post_category">
      <option value="LIFESTYLE">LIFESTYLE</option>
      <option value="PHOTODIARY">PHOTODIARY</option>
      <option value="MUSIC">MUSIC</option>
      <option value="TRAVEL">TRAVEL</option>
    </select>
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
  <button type="submit">Submit</button>
  <div class='error'>
    <?php 
      if ($_SERVER['REQUEST_METHOD'] === 'POST')
        echo $message;
    ?>
  </div>
</form>





