<?php
    class Database{
        // Storing the database information, already defined in config.php
        private $host = DB_HOST;
        private $db = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASS;

        // this private property holds the PHP data objects (PDO)
        private $pdo;

        // method to return the SQL database connection
        public function getConnection(){
            // check the data source name (dsn) string with host and charset
            if($this->pdo == null){
                try{
                    $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
                    // create new PDO object with DSN, username, and password
                    $this->pdo = new PDO($dsn, $this->user, $this->pass);
                    // set the PDO to throw exception when an error occurs
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    // if an error occurs stop the script and display error message
                    die("Connection failed: " . $e->getMessage());
                }
            }
            // makes the database connection usable
            return $this->pdo;
        }

    }