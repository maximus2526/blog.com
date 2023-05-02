<?php
include 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if post_id is valid
    if (!isset($_GET['post_id']) || !ctype_digit($_GET['post_id'])) {
        echo "Invalid post_id";
        exit;
    }
    $post_id = (int)$_GET['post_id'];

    // Check if comment is valid
    $comment =  htmlspecialchars(trim($_POST["comment"]));
    if (empty($comment)) {
        echo "Comment is empty";
        exit;
    }

    // Handle form
    $PDO->post_comment($post_id, $comment);
    header("Location: /page.php?post_id=".$post_id."#comment_input");
}
    
?>

