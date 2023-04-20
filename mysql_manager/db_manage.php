<?php
 // TODO: Перевірки всього зроби

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "blogdb";

    function connect(){
        $conn = new mysqli();
        $conn->connect($host = "localhost", $user = "root", $pass = "", $db = "blogdb");
        return $conn;
    }

    //  Create table post if not exist
    // function createTable($obj = $conn){
    //     $sql = "
    //     CREATE TABLE post (
    //         post_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //         post_img_path varchar(255),
    //         post_title varchar(255),
    //         post_date date,
    //         post_short_text varchar(255),
    //         post_text text(1500));";
    //      $obj->query($sql);
    // }



    function get_attr($db_obj, $attr, $post_id){
        $sql = "SELECT * FROM `post`;";
        $entry = "";
        if($result = $db_obj->query($sql))
            foreach($result as $row){
                if(!isset($row)){
                    die("Error in query parsing");
                }elseif($row["post_id"] == $post_id)
                    $entry =  $row[$attr];
                } 
        return $entry;
    }

    function get_array_paginated($db_obj, $page_num=4, $active_page=1){
        $formula = ceil(($active_page-1)*$page_num);
        $sql = "SELECT * FROM post ORDER BY `post`.`post_id` ASC LIMIT {$page_num} OFFSET {$formula};";
        $arr = $db_obj->query($sql);
        return $arr;
    };

    function get_entries_count($db_obj, $table, $post_id=NULL){
        if ($table=="post")
            $sql = "SELECT COUNT(*) FROM $table;";
        else
            $sql = "SELECT COUNT(*) FROM `blogdb`.`comments` WHERE `post_id` = {$post_id} ORDER BY `post_id` ASC;";

        
        
        $item = $db_obj->query($sql);

        if($item === false){
            // обработка ошибки
            printf("Error: %s\n", $db_obj->error);
            return 0;
        }else{
            return $item->fetch_all();
        }
    }

    function get_post_id($db_obj){
        $sql = "SELECT `post_id` FROM `post`;";
        if($result = $db_obj->query($sql))
            foreach($result as $row){
                $post_id[] =  $row["post_id"];
            }
        return $post_id;
    }


    function get_comment_data($db_obj){
        $sql = "SELECT * FROM `comments`;";
        $result = $db_obj->query($sql);
        if($result = $db_obj->query($sql))
            return $result;
        else
            printf("Error: %s\n", $db_obj->error);
       
    }

    function post_comment($db_obj, $post_id){
        $post_id = (int)$post_id; 
        $comment = htmlspecialchars($_POST['comment']);
        $sql = "INSERT INTO `comments` (`comment_id`, `post_id`, `name`, `comment_text`, `comment_data`) VALUES (NULL, $post_id, 'admin', '$comment', '".date('Y-m-d')."')";

        $result = $db_obj->query($sql);
        if(!$result){
            printf("Error: %s\n", $db_obj->error);
        } 
        
        
    }
    


    

   

    






 



  






?>