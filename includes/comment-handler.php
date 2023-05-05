<?php
include 'functions.php';
$errors = [

];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = array();
    // Check if post_id is valid
    if (!isset($_GET['post_id']) || !ctype_digit($_GET['post_id'])) {
        $errors[] = "Invalid post_id";
    }
    $post_id = (int)$_GET['post_id'];

    // Check if comment is valid
    $comment =  htmlspecialchars(trim($_POST["comment"]));
    if (!isset($comment) || empty($comment)) {
        $errors[] = "Comment is empty";
    }

    // Handle form
    if (empty($errors))
        $PDO->post_comment($post_id, $comment);
    else{
        foreach($errors as $error){
            echo $error . "<br>";
        }
        exit;
    }


    
   
    header("Location: /page.php?post_id=".$post_id."#comment_input");
}
    
?>

