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
            return $statement;
        }

        public function get_entries_count($table) {
            // Get count data in the table
            $result = $this->query("SELECT COUNT(*) FROM $table");
            return $result->fetchColumn();
        }

        public function get_all_data($table) {
            // Get all data from the table
            $result = $this->query("SELECT * FROM $table");
            return $result->fetchAll();
        }


        public function get_post_data($value, $post_id) {
            // Get count data in the table
            $result = $this->query("SELECT `$value` FROM `post` where `post_id` = $post_id" );
            return $result->fetchColumn();
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
            var_dump($params);
            $sql = "INSERT INTO `comments` (`comment_id`, `post_id`, `name`, `comment_text`, `comment_data`) VALUES (NULL, :post_id, :user, :comment, :date_time)";
            $this->query($sql, $params);
        }

        public function get_comments($post_id){
            $sql = "SELECT * FROM `comments` where `post_id` = $post_id;";
            $result = $this->query($sql);
            return $result->fetchAll();
        }

        public function get_array_paginated($page_num,  $active_page){
            // Pagination realization
            $formula = ceil(($active_page-1)*$page_num);
            $sql = "SELECT * FROM post ORDER BY `post`.`post_id` ASC LIMIT {$page_num} OFFSET {$formula};";
            $result = $this->query($sql);
            return $result->fetchAll();
        }


    }
    

    ?>

