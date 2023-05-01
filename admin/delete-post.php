<?php 
include_once '../includes/header.php';
include_once '../includes/pdo-manager.php';

$post_id = $_GET['post_id'];
$PDO->del_post($post_id);
$url = get_url();
header("Location: ". $url . "admin/admin.php");

?>