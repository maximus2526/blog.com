<?php
include_once 'pdo_manager.php';

function validate_img($image_obj){
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if ($image_obj['error'] == UPLOAD_ERR_OK) {
          $image_path ='/img/blog-img/' . $image_obj['name'];
          $full_image_path = get_file_path() . $image_path;
          if (move_uploaded_file($_FILES['image']['tmp_name'], $full_image_path)) {
              echo "Image uploaded successfully!";
          } else 
              return var_dump($_FILES)."Error uploading image! ";
        } else 
            return 'Error of sending img'; 
        }
}

?>