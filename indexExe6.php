<?php
include 'model/shows.php';
include 'controller/controller6.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/styleExo.css"/>
        <title>Exercice 6</title>
    </head>
    <body>
        <?php include 'controller/navbarController.php'; ?>
        <div class="container">
            <h1>All the shows</h1>
            <?php foreach ($showsDetails as $show) { ?>
                <p><?= $show->title ?> from <?= $show->performer ?>, live the <?= $show->date ?> at <?= $show->startTime ?></p>
            <?php } ?>
        </div>
    </body>
</html>
