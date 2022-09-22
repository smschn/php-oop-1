<?php

require_once __DIR__ . '/movie_class.php';

$movie1 = new Movie('Memento', 2000, 'Christopher Nolan', 'Thriller');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP: Class.</title>
</head>
<body>
    <h1>First movie:</h1>
    <ul>
        <li>Title: <?php echo $movie1->getTitle() ?></li>
        <li>Year: <?php echo $movie1->getYear() ?></li>
        <li>Director: <?php echo $movie1->getDirector() ?></li>
        <li>Genre: <?php echo $movie1->getGenre() ?></li>
        <li>Original Language: <?php echo $movie1->getOriginalLanguage() ?></li>
    </ul>
</body>
</html>