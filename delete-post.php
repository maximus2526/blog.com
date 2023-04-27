<?php 
include __DIR__.'/includes/pdo-manager.php';

$post_id = $_GET['post_id'];
$PDO->del_post($post_id);
header("Location: /admin.php");

?>