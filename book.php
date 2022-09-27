<?php

require_once('connection.php');

$id = $_GET['id'];

echo $id;

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

var_dump($book);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$book['title'];?></title>
</head>
<body>
    <h1><?=$book['title'];?></h1>
    <img src="<?=$book['cover_path']?>" alt="">
    <p>Release date: <?=$book['release_date']?></p>
    <p>Language: <?=$book['language']?></p>
    <p>Description: <?=$book['summary']?></p>
    <p>Price: <?=$book['price']?></p>
    <p>Type: <?=$book['type']?></p>
</body>
</html>
