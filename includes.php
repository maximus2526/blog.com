<?php 
// Get header block
function get_header(){
    include_once 'header.php';
}

// Get footer  block
function get_footer(){
    include_once 'footer.php';
}

// Get access to functions 
function get_functions(){
    include_once 'functions.php';
}

// Create instance for PDO
function db_manager(){
    include_once 'mysql-manager/pdo-manager.php';
}
?>