<?php
include_once __DIR__.'/includes.php';
db_manager();
$PDO = new Connection();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from form
    $post_id = $_GET['post_id'];
    $comment = $_POST["comment"];
    // Handle form
    if(isset($comment)){
        $PDO->post_comment($post_id, $comment);
        header("Location: /page.php?post_id=".$post_id."#comment_input");

    }
}
    
?>

