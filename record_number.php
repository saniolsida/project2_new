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
    <script>
        var name = [];
        var number = [];
        var gender = [];
        var birthday = [];
        var group = [];
        var message = [];
        if(name){
            name.push(<?= $name?>);
            number.push(<?= $number?>);
            gender.push(<?= $gender?>);
            birthday.push(<?= $birthday?>);
            group.push(<?= $group?>);
            message.push(<?= $message?>);
        }
    </script>
</head>
<body>
    <div><?= $name?></div>
</body>
</html>