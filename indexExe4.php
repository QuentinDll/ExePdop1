<?php
include 'model/clients1.php';
include 'controller/controller4.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/styleExo.css"/>
        <title>Exercise 4</title>
    </head>
    <body>
        <?php include 'controller/navbarController.php'; ?>
        <div class="container">
            <div id="tableTitle"><h1>Customers with a loyalty card</h1></div>
            <table class="table text-center table-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Lastname</th>
                        <th>Firstname</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientCardList as $clientCards) { ?>
                        <tr>
                            <td><?= $clientCards->lastName ?></td>
                            <td><?= $clientCards->firstName ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>