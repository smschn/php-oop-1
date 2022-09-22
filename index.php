<?php
require_once __DIR__ . '/movie_class.php';

$movie1 = new Movie('Memento', 2000, 'Christopher Nolan', 'Thriller');
$movie1_plot = "A man with short-term memory loss attempts to track down his wife's murderer.";
$movie1->setPlot($movie1_plot);

$movie2 = new Movie('The Hangover', 2009, 'Todd Phillips', 'Comedy');

$movie3 = new Movie('The Matrix', 1998, 'Lana Wachowski, Lilly Wachowski', 'Action');
$movie3_plot = 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.';
$movie3->setPlot($movie3_plot);
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
        <li>Title: <?php echo $movie2->title ?></li>
        <li>Year: <?php echo $movie2->year ?></li>
        <li>Director: <?php echo $movie2->director ?></li>
        <li>Genre: <?php echo $movie2->genre ?></li>
        <li>Original Language: <?php echo $movie2->getOriginalLanguage() ?></li>
        <li>Plot: <?php echo $movie2->getPlot() ?></li>
    </ul>
    <h1>Third movie:</h1>
    <ul>
        <?php echo $movie3->getMovieDetails() ?>
    </ul>
</body>
</html>