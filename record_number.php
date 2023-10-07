<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $group = $_POST['group'];
    $message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      * {
        font-size: 16px;
        font-family: Consolas, sans-serif;
      }
    </style>
</head>
<body>
    <p>Name is <?php echo $name ?>.</p>
</body>
</html>
