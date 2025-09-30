<?php
    // handles the create function of CRUD,
    class Post{
        private $pdo;
        public function __construct(PDO $pdo){
            $this->pdo = $pdo;
        }
        // save the new post using same names as input field names in the form
        public function create($size, $pizza_type, $toppings, $well_done, $fname, $lname, $address, $email){
            $sql = "INSERT INTO posts (size, pizza_type, toppings, well_done, fname, lname, address, email) VALUES (:size, :pizza_type, :toppings, :well_done, :fname, :lname, :address, :email)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ":size" => $size,
                ":pizza_type" => $pizza_type,
                ":toppings" => $toppings,
                ":well_done" => $well_done,
                ":fname" => $fname,
                ":lname" => $lname,
                ":address" => $address,
                ":email" => $email,
            ]);
        }
    }