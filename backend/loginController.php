<?php
session_start();
$action = $_POST['action'];
if($action == "login"){

    $username = $_POST['name'];
    $password = $_POST['password'];
    
    require_once 'conn.php';
    $query = "SELECT * FROM users WHERE name = :name";
    $statement = $conn->prepare($query);
    $statement->execute([":name" => $username]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    
    if($statement->rowCount() <1)
    {
        die("Error: account bestaat niet");
    }
    
    if(!password_verify($password, $user['password']))
    {
        die("Error: wachtwoord niet juist!");
    }
    
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['name'];

    header("Location:../index.php");
}


if($action == "create"){
    $username = $_POST['name'];
    $password = $_POST['password'];

    if(empty($password)){
        die("Error: Enter a password!");
    }
    if(empty($username)){
        die("Error: Enter a username!");
    }

    $hashedP = password_hash($password, 1);

    require_once 'conn.php';
    $query = "SELECT * FROM users WHERE name = :name";
    $statement = $conn->prepare($query);
    $statement->execute([":name" => $username]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty($user)){
        die("Error: account bestaat al");
    }

    require_once 'conn.php';
    $query = "  INSERT INTO users (name, password)
                        VALUES(:name, :password)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":name" => $username,
        ":password" => $hashedP
    ]);
    header("Location:../login.php?msg=account created!");
}