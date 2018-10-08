<?php
include 'model/clients1.php';
include 'controller/controller1.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/styleExo.css"/>
        <title>Exercise 1</title>
    </head>
    <body>
        <?php include 'controller/navbarController.php'; ?>
        <div class="container">
            <div id="tableTitle"><h1>All customers Lastname and Firstname</h1></div>
            <table class="table text-center table-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Lastname</th>
                        <th>Firstname</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientList as $clientDetail) { ?>
                        <tr>
                            <td><?= $clientDetail->lastName ?></td>
                            <td><?= $clientDetail->firstName ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
