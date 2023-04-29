<?php 
        
    class Connection{
        protected $pdo;
        protected $dsn;
        protected $username;
        protected $password;
        protected $options;

        public function __construct($configFile='config.php') {
            $config = include($configFile);
            $this->dsn = $config['dsn'];
            $this->username = $config['username'];
            $this->password = $config['password'];
            $this->options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                // Auto print errors
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                // For every time not type-in FETCH_ASSOC
                PDO::ATTR_EMULATE_PREPARES   => false,
                // Handle queries for security
            ];
        }
    
        protected function connect() {
            // "Lazy" connect to db, connect only when need
            if (!$this->pdo) {
                $this->pdo = new PDO($this->dsn, $this->username, $this->password, $this->options);
            }

        }
        protected function query($query, $params = []) {
            // Query handler for other methods
            $this->connect();
            $statement = $this->pdo->prepare($query);
            $statement->execute($params);
            if($statement->errorInfo()[0] !== '00000'){
                throw new Exception($statement->errorInfo()[2]);
            }
            return $statement;
        }
        
        public function get_entries_count($table) {
            // Get count data in the table
            $result = $this->query("SELECT COUNT(*) FROM $table");
            return $result->fetchColumn();
        }
        public function add_post(array $options) {
            $sql = "INSERT INTO `post` (`post_id`, `post_img_path`,  `post_category`, `post_title`, `post_short_text`, `post_text`, `post_date` ) 
            VALUES (NULL, :post_img_path, :post_category, :post_title, :post_short_text, :post_text, :post_date)";
            
            $this->query($sql, $options);
            return $this->pdo->lastInsertId();
        }

        public function del_post(int $post_id){
            $this->query("DELETE FROM `comments` WHERE `post_id` = $post_id");
            $sql = "DELETE FROM `post` WHERE `post`.`post_id` = $post_id";
            $this->query($sql);
        }
    
        public function edit_post(int $post_id, string $image_path, string $post_title, string $post_short_text, string $post_text, string $post_category){
            $params = [
                'post_id' => $post_id,
                'post_img_path' => $image_path,
                'post_category' => $post_category,
                'post_title' => $post_title,
                'post_short_text' => $post_short_text,
                'post_text' => $post_text,
                'post_date' => date('Y-m-d')

            ];
            $sql = "UPDATE `post` SET post_img_path = :post_img_path, post_title = :post_title, post_short_text = :post_short_text, post_text = :post_text, post_date = :post_date, post_category = :post_category
            WHERE `post`.`post_id` = :post_id";
            $stmt = $this->query($sql, $params);
            if ($stmt->rowCount() > 0) {
                return true; // Обновление прошло успешно
            } else {
                return false; // Обновление не удалось
            }
        }
        public function get_data($table, $value = NULL, $post_id = NULL) {
            // Get all data from the table
            $sql =  "SELECT * FROM $table";
            if(isset($post_id) and isset($value)){
                // Get only one post info
                $sql =  "SELECT $value FROM $table where `post_id` = $post_id";
                $result = $this->query($sql);
                return $result->fetchColumn();
            }

            return $this->query($sql)->fetchAll();
        }


        public function get_comments_count($post_id) {
            // Get count comments in the post
            $sql = "SELECT COUNT(*) FROM `blogdb`.`comments` WHERE `post_id` = {$post_id} ORDER BY `post_id` ASC;";
            $result = $this->query($sql);
            return $result->fetchColumn();
        }

        public function post_comment($post_id, $comment) {
            $params = [
                'post_id' => $post_id,
                'comment' => $comment,
                'user' => 'admin',
                'date_time' => date('Y-m-d')

            ];
            $sql = "INSERT INTO `comments` (`comment_id`, `post_id`, `name`, `comment_text`, `comment_data`) 
            VALUES (NULL, :post_id, :user, :comment, :date_time)";
            $this->query($sql, $params);
        }


        public function get_comments($post_id){
            $sql = "SELECT * FROM `comments` where `post_id` = $post_id;";
            $result = $this->query($sql);
            return $result->fetchAll();
        }

        public function get_array_paginated($options){
            // Pagination realization
            $offset = ($options['page_num'] - 1)*$options['entries_limit'] ;
            $sql = "SELECT * FROM `post` ORDER BY `post`.`post_id` ASC LIMIT {$options['entries_limit']} OFFSET {$offset};";
            if ($options['post_category']){
                $post_category = strtoupper($options['post_category']);
                $sql = "SELECT * FROM `post` WHERE `post`.`post_category` = '{$post_category}' ORDER BY `post`.`post_id` ASC LIMIT {$options['entries_limit']} OFFSET {$offset};";
            }
               
            return $this->query($sql)->fetchAll();
        }
        



    }
    
    $PDO = new Connection;

    ?>

