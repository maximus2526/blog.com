<?php 
$page_num = get_page_num();
$pages_options = [
  'page_num' => $page_num,
  'entries_limit' => 4,
];

if (is_categoried()) {
  $pages_options['post_category'] = $_GET['post_category'];
}

$data = $PDO->get_pages_paginated($pages_options);
?>