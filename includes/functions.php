<?php
    function get_file_path(){
            return __DIR__;
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


