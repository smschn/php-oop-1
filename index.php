<?php
require_once __DIR__ . '/movie_class.php';

$movie1 = new Movie('Memento', 2000, 'Christopher Nolan', 'Thriller');
$movie1_plot = "A man with short-term memory loss attempts to track down his wife's murderer.";
$movie1->setPlot($movie1_plot);
$movie2 = new Movie('The Hangover', 2009, 'Todd Phillips', 'Comedy');
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
        <li>Plot: <?php echo $movie1->getPlot() ?></li>
    </ul>
    <h1>Second movie:</h1>
    <ul>
        <li>Title: <?php echo $movie2->getTitle() ?></li>
        <li>Year: <?php echo $movie2->getYear() ?></li>
        <li>Director: <?php echo $movie2->getDirector() ?></li>
        <li>Genre: <?php echo $movie2->getGenre() ?></li>
        <li>Original Language: <?php echo $movie2->getOriginalLanguage() ?></li>
        <li>Plot: <?php echo $movie2->getPlot() ?></li>
    </ul>
</body>
</html>