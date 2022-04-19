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
    $_SESSION['role'] = $user['role'];

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
    $query = "  INSERT INTO users (name, password, role)
                        VALUES(:name, :password, :role)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":name" => $username,
        ":password" => $hashedP,
        ":role" => "user"
    ]);
    header("Location:../login.php?msg=account created!");
}
if($action == "edit")
{
    if(!isset($_SESSION['role']) || $_SESSION['role'] != "admin")
    {
        die("Only admins may edit roles!");
    }
    
    $id = $_POST['id'];
    $role = $_POST['role'];

    require_once 'conn.php';
    $query = "UPDATE users SET role = :role WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id"=>$id,
        ":role"=>$role
    ]);
    header("Location:../admin/index.php?msg=user saved!");
}
if($action == "delete")
{
    $id = $_POST['id'];

    require_once 'conn.php';
    $query = "DELETE FROM users WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id"=>$id
    ]);

    header("Location:../admin/index.php?msg=user deleted");
}