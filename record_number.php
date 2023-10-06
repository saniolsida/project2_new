<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $group = $_POST['group'];
    $url = 'index.html' . '?name=' . urlencode($name) . '&number=' . urlencode($number) . 
    '&gender=' . urlencode($gender) . '&birthday=' . urlencode($birthday) . '&group=' . urlencode($group);
    // Redirect to the index.html page with the parameters
    header('Location: ' . $url);
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
