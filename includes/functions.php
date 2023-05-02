<?php
include_once 'pdo-manager.php';
// Created pdo object
$PDO = new Connection;

function validate_img($image_obj, $img_path){
    $max_file_size = 1024*3; // 3 mb
    $file_path = get_file_path().$img_path;
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if ($image_obj['error'] === UPLOAD_ERR_OK and (filesize($file_path) < $max_file_size)) { 
          if (move_uploaded_file($_FILES['image']['tmp_name'],  $file_path)) {
              return "Image uploaded successfully!";
          } else 
              return "Error uploading image! ";
        } else 
            return "Error of sending img. Don't use img bigger then 3mb!"; 
        }
}

function post_adding_msg($options, $PDO){
    // Sending and validating post
    try {
        $result = $PDO->add_post($options);
        if ($result) 
            return "Post added successfully!";
        else
            return "Post add failed!";
    } catch (PDOException $e) {
        return "Error adding post: " . $e->getMessage();
    }
  }

function post_updating_msg($options, $PDO){
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