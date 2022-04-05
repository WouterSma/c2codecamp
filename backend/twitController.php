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

    header("Location:../tweeter/index.php?msg=twit saved");
}

if($action == "comment")
{
    $id = $_GET['id'];
    $user = $_POST['user'];
    $comment = $_POST['comment']; 

    if(empty($comment)){
        $errors = "You cant send empty comments!";
    }
    require_once 'conn.php';
    $query = "  INSERT INTO comments (user, comment, twit_id) 
                            VALUES(:user, :comment, :twit_id)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":comment"=>$comment,
        ":user"=>$user,
        ":twit_id"=>$id
    ]);
    header("Location:../tweeter/index.php?msg=comment opgeslagen");

}