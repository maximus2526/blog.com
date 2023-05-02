
<?php 
include_once '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  // img handle
  $img_path = get_img_path($_FILES['image']);
  $img_err_message = validate_img($_FILES['image'], $img_path);
  
  $params = [
    'post_img_path' => htmlspecialchars($img_path),
    'post_title' => htmlspecialchars($_POST['post_title']),
    'post_short_text' => htmlspecialchars($_POST['post_short_text']),
    'post_text' => htmlspecialchars($_POST['post_text']),
    'post_category' => htmlspecialchars($_POST['post_category']),
    'post_date' => date('Y-m-d'),
    'post_id' => (int)$_GET['post_id'],
  ];

  
  $message = post_updating_msg($params, $PDO);
}
?>

<link rel="stylesheet" href="<?php get_file_path(); ?>/css/admin.css">

<form class="form" action="" method="post" enctype="multipart/form-data">
  <div>
    <label for="post_title">Post Title:</label>
    <input type="text" id="post_title" name="post_title" value="<?php echo $PDO->get_post($_GET['post_id'])['post_title']  ?>" required>
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
    <input type="file" id="image" name="image" accept="image/*">
  </div>
  <div>
    <label for="post_short_text">Short Text:</label>
    <input type="text" id="post_short_text" name="post_short_text" value="<?php echo $PDO->get_post($_GET['post_id'])['post_short_text']?>" required>
  </div>
  <div>
    
    <label for="post_text">Text:</label>
    <textarea id="post_text" name="post_text" required><?php echo $PDO->get_post($_GET['post_id'])['post_text'] ?></textarea>
  </div>
  <button type="submit">Update</button>
  <div class='error'>
    <?php 
      if ($_SERVER['REQUEST_METHOD'] === 'POST')
        echo $message.' '.$img_err_message;
    ?>
  </div>
</form>
