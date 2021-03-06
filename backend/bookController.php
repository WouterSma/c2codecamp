<?php
$action = $_POST['action'];

if($action == "create")
{
    $author = $_POST['author'];
    $num_pages = $_POST['num_pages']; 
    $title = $_POST['title'];

    if(empty($author)){
        $errors = "Enter a author!";
    }

    if(empty($title)){
        $errors = "Enter a title!";
    }

    if(empty($num_pages)){
        $errors = "Enter the amount of pages!";
    }

    function alert($errors){
        echo "<script>alert($errors);</script>";
    }

    if(isset($errors)){
        die($errors);
    }


    require_once 'conn.php';
    $query = "  INSERT INTO books (author, num_pages, title) 
                            VALUES(:author, :num_pages, :title)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":author"=>$author,
        ":num_pages"=>$num_pages,
        ":title"=>$title
    ]);

    header("Location:../books/index.php?msg=book saved");
}
if($action == "edit_price")
{
    $id = $_POST['id'];
    $price = $_POST['price'];

    if($_SESSION['role'] == "sales manager"){
        die("You have to be a sales manager too edit the price!");
    }

    if(empty($price)){
        $errors = "Enter a price!";
    }

    function alert($errors){
        echo "<script>alert($errors);</script>";
    }

    if(isset($errors)){
        die($errors);
    }

    require_once 'conn.php';
    $query = "UPDATE books SET price = :price WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id"=>$id,
        "price"=>$price
    ]);

    header("Location:../books/index.php?msg=book saved");
}

if($action == "edit")
{
    $id = $_POST['id'];
    $author = $_POST['author'];
    $num_pages = $_POST['num_pages']; 
    $title = $_POST['title'];

    if(empty($author)){
        $errors = "Enter a author!";
    }

    if(empty($title)){
        $errors = "Enter a title!";
    }

    if(empty($num_pages)){
        $errors = "Enter the amount of pages!";
    }

    function alert($errors){
        echo "<script>alert($errors);</script>";
    }

    if(isset($errors)){
        die($errors);
    }


    require_once 'conn.php';
    $query = "UPDATE books SET author = :author, num_pages = :num_pages, title = :title WHERE id = :id";
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
if($action == "like")
{
    $book_id = $_POST['book_id'];
    $user_id = $_POST['user_id'];

    require_once 'conn.php';
    $query = "  INSERT INTO liked_books (book_id, user_id) 
                            VALUES(:book_id, :user_id)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":book_id"=>$book_id,
        ":user_id"=>$user_id
    ]);

    header("Location:../books/index.php?msg=book liked!");
}
if($action == "unlike")
{
    $book_id = $_POST['book_id'];
    $user_id = $_POST['user_id'];

    require_once 'conn.php';
    $query = "  DELETE FROM liked_books WHERE (book_id = :book_id AND user_id = :user_id)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":book_id"=>$book_id,
        ":user_id"=>$user_id
    ]);

    header("Location:../books/index.php?msg=book unliked!");
}