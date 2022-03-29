<?php
$action = $_POST['action'];

if($action == "create")
{
    $user = $_POST['user'];
    $twit = $_POST['twit']; 
    $title = $_POST['title'];

    if(empty($twit)){
        $errors = "You cant send empty twits!";
    }

    if(empty($title)){
        $errors = "Enter a title!";
    }

    function alert($errors){
        echo "<script>alert($errors);</script>";
    }

    if(isset($errors)){
        die($errors);
    }


    require_once 'conn.php';
    $query = "  INSERT INTO twits (user, message, title) 
                            VALUES(:user, :message, :title)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":message"=>$twit,
        ":user"=>$user,
        ":title"=>$title
    ]);

    header("Location:../tweeter/index.php?msg=twitopgeslagen");
}