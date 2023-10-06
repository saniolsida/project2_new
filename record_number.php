<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $group = $_POST['group'];

    // Store the form data in a PHP session or a database as needed
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['number'] = $number;
    $_SESSION['gender'] = $gender;
    $_SESSION['birthday'] = $birthday;
    $_SESSION['group'] = $group;

    // Redirect to index.html
    header("Location: index.html");
    exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
