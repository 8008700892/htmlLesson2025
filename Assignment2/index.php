<?php
    require_once "config.php";
    require_once "Database.php";
    require_once "Post.php";

    $success = false;
    $error = "";

    include "templates/header.php";
    ?>
    <main>
        <?php
    include "form.php";
    ?>
    </main>
<?php
    include "templates/footer.php";
    ?>
<?php

    $db = new Database();
    $pdo = $db->getConnection();
    $postModel = new Post($pdo);


    // check if its a post on form submission
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sizeArray = $_POST["size"] ?? [];
        $size = implode(",", $sizeArray);
        $pizza_typeArray = $_POST["pizza_type"] ?? [];
        $pizza_type = implode(",", $pizza_typeArray);
        $toppingsArray = $_POST["toppings"] ?? [];
        $toppings = implode(",", $toppingsArray);
        $well_done = $_POST["well_done"] ?? null;
        $fname = trim($_POST["fname"] ?? "");
        $lname = trim($_POST["lname"] ?? "");
        $address = trim($_POST["address"] ?? "");
        $email = trim($_POST["email"] ?? "");

        try{
            $postModel->create($size, $pizza_type, $toppings, $well_done, $fname, $lname, $address, $email);
            $success = true;
        }catch (Exception $e){
            $error = "Could not submit order" . $e->getMessage();
        }
    }
