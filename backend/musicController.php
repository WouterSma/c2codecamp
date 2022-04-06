<?php
$action = $_POST['action'];

if($action == "create")
{
    $artist = $_POST['artist'];
    $title = $_POST['title']; 
    $songtext = $_POST['songtext'];

    if(empty($artist)){
        $errors = "Enter an artist";
    }

    if(empty($title)){
        $errors = "Enter a title!";
    }

    if(empty($songtext)){
        $errors = "Enter the songtext";
    }

    function alert($errors){
        echo "<script>alert($errors);</script>";
    }

    if(isset($errors)){
        die($errors);
    }


    require_once 'conn.php';
    $query = "  INSERT INTO music (artist, title, songtext) 
                            VALUES(:artist, :title, :songtext)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":artist"=>$artist,
        ":title"=>$title,
        ":songtext"=>$songtext
    ]);

    header("Location:../muziek/muziek.php?msg=new song saved");
}
if($action == "edit")
{
    $artist = $_POST['artist'];
    $title = $_POST['title']; 
    $songtext = $_POST['songtext'];

    if(empty($artist)){
        $errors = "Enter an artist!";
    }

    if(empty($title)){
        $errors = "Enter a title";
    }

    if(empty($songtext)){
        $errors = "Enter the songtext!";
    }

    function alert($errors){
        echo "<script>alert($errors);</script>";
    }

    if(isset($errors)){
        die($errors);
    }


    require_once 'conn.php';
    $query = "UPDATE meldingen SET author = :author, num_pages = :num_pages, title = :title WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id"=>$id,
        ":author"=>$author,
        ":num_pages"=>$num_pages,
        ":title"=>$title
    ]);

    header("Location:../books/index.php?msg=book saved");
}
if($action == "delete")
{
    $id = $_POST['id'];
    require_once 'conn.php';
    $query = "DELETE FROM books WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id"=>$id
    ]);

    header("Location:../books/index.php?msg=Book deleted");
}