<?php 
// Get header block
function get_header(){
    include 'header.php';
}

// Get footer  block
function get_footer(){
    include 'footer.php';
}

// Get access to functions 
function get_functions(){
    include 'functions.php';
}

// Get comment form
function get_comments($PDO){
    $PDO_obj = $PDO;
    include 'comment-form.php';
}

// Create instance for PDO
function db_manager(){
    include 'mysql-manager/pdo-manager.php';
}
?>