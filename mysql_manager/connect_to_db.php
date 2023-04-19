<?php
    // TODO: Тут хочу підключатися/створювати таблицю/додавати данні в бд

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "blogdb";


    // Create table post if not exist
    function createTable($obj){
        $sql = "
        CREATE TABLE post (
            post_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            post_img_path varchar(255),
            post_title varchar(255),
            post_date date,
            post_short_text varchar(255),
            post_text text(1500));";
        echo $obj->query("SELECT * FROM 'test'");
        // $obj->query($sql);
    }


    function select($obj){
        $sql = "SELECT * FROM `post`;";
        return $obj->query($sql);
    }

    function add_entry($obj, $arr){
        $sql = "INSERT INTO `post` (`post_id`, `post_img_path`, `post_title`, `post_date`, `post_short_text`, `post_text`) VALUES (NULL, \'1\', \'2\', \'2023-04-04\', \'3\', \'4\');";
    }




    $conn = new mysqli();
    $conn->connect($host, $user, $pass, $db);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $result = select($conn);
    $res = $result->fetch_assoc();

    echo implode(", ", $res);






 



    $conn->close();






?>