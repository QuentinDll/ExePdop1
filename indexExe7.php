<?php
include 'model/clients1.php';
include 'controller/controller7.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/styleExo.css"/>
        <title>Exercise 7</title>
    </head>
    <body>
        <?php include 'controller/navbarController.php'; ?>
        <div class="container">
            <div id="tableTitle"><h1>All customers details</h1></div>
            <table class="table text-center table-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Birthday</th>
                        <th>Loyalty cards</th>
                        <th>Cards number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientList as $clientDetail) { ?>
                        <tr>
                            <td><?= $clientDetail->lastName ?></td>
                            <td><?= $clientDetail->firstName ?></td>
                            <td><?= $clientDetail->birthDate ?></td>
                            <td><?php
                                if ($clientDetail->cardTypesId == 1) {
                                    echo 'Yes';
                                } else {
                                    echo 'No';
                                }
                                ?></td>
                            <td><?php
                                if ($clientDetail->cardTypesId == 1) {
                                    echo $clientDetail->cardNumber;
                                }
                                ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
