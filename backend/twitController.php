<?php
$action = $_POST['action'];

if($action == "create")
{
    $user = $_POST['user'];
    $twit = $_POST['twit']; 
    $title = $_POST['title'];

    if(empty($user)){
        $errors[] = "Vul de user in!";
    }

    if(empty($twit)){
        $errors[] = "You cant send empty twits!";
    }

    if(empty($title)){
        $errors[] = "Enter a title!";
    }

    function alert($errors){
        echo "<script>alert($errors);</script>";
    }

    if(isset($errors)){
        var_dump($errors);
        die();
    }

    //1. Verbinding
    require_once 'conn.php';

    //2. Query
    $query = "INSERT INTO twits (user, message, title) 
                VALUES(:user, :message, :title)";
    //3. Prepare
    $statement = $conn->prepare($query);
    //4. Execute
    $statement->execute([
        ":message"=>$twit,
        ":user"=>$user,
        ":title"=>$title
    ]);

    header("Location:../tweeter/index.php?msg=twitopgeslagen");
}