<?php
$DB = new SQLite3('number_table.db');
if($DB->lastErrorCode() != 0)
    echo "Data connection failed"

    $name = $_POST['name'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $group = $_POST['group'];
    $DB->exec("INSERT INTO 'number_index' (name) VALUES ($name)");
    $DB->exec("INSERT INTO 'number_index' (number) VALUES ($number)");
    $DB->exec("INSERT INTO 'number_index' (gender) VALUES ($gender)");
    $DB->exec("INSERT INTO 'number_index' (birthday) VALUES ($birthday)");
    $DB->exec("INSERT INTO 'number_index' (group) VALUES ($group)");
    $DB->exec("INSERT INTO 'number_index' (massage) VALUES ($message)");
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
