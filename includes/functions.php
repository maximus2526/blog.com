<?php
include_once 'pdo-manager.php';
// Created pdo object
$PDO = new Connection;

function validate_img(array $image_obj, string $img_path){
    $max_file_size = 1024*1024*3; // 3 MB in bytes
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $file_path = get_file_path().$img_path;

    if (!isset($image_obj['error']) || is_array($image_obj['error'])) {
        return "Invalid parameters.";
    }

    if ($image_obj['error'] !== UPLOAD_ERR_OK) {
        return "Error uploading image.";
    }

    $file_size = filesize($_FILES['image']['tmp_name']);
    if ($file_size > $max_file_size) {
        return "File size exceeds maximum allowed limit.";
    }

    $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_extensions)) {
        return "Invalid file type.";
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'],  $file_path)) {
        return "Image uploaded successfully!";
    } else {
        return "Error uploading image!";
    }
}



function post_updating_msg(array $options, Connection $PDO){
    // Updating and validating post
    try {
        $result = $PDO->edit_post($options);
        if ($result) 
            return "Post updated successfully!";
        else
            return "Post update failed!";
    } catch (PDOException $e) {
        return "Error updating post: " . $e->getMessage();
    }
  }

function get_img_path($image_obj){
    $image_path ='/img/blog-img/' . $image_obj['name'];
    return $image_path;
}

function get_file_path(){
    return $_SERVER['DOCUMENT_ROOT'];
}

function get_url(){
return 'http://'.$_SERVER['HTTP_HOST'].'/';
}
function get_page_num(){
// Take number of page from buttons
if (isset($_GET["page_num"]))
    $page_num = (int)$_GET["page_num"];
else
    $page_num = 1;
return $page_num;
}
function is_categoried(){
return isset($_GET['post_category']);

}


?>