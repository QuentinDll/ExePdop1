<?php
include 'model/showTypes.php';
include 'controller/controller2.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/styleExo.css"/>
        <title>Exercise 2</title>
    </head>
    <body>
        <?php include 'controller/navbarController.php'; ?>
        <div class="container">
            <div id="tableTitle"><h1>All types of show</h1></div>
            <table class="table text-center table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Show Types</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($showTypesList as $showType) { ?>
                        <tr>
                            <td><?= $showType->type ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
