<?php 
include_once $_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR .'includes' . DIRECTORY_SEPARATOR . 'functions.php';
include_once $_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR .'includes' . DIRECTORY_SEPARATOR . 'pdo-manager.php';

$post_id = $_GET['post_id'];
$PDO->del_post($post_id);
$url = get_url();
header("Location: ". $url . "admin/admin.php");

?>