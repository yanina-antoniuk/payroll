<?php
require_once (__DIR__.'/Model.php');
require_once (__DIR__.'/form_handlers/CreateFormHandler.php');
require_once (__DIR__.'/form_handlers/EditFormHandler.php');
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Payroll</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/public/app.css">
        <script type="text/javascript" src="public/app.js"></script>
    </head>
    <body>
    <nav>
        <div class="topnav">
            <div class="row">
                <a class="active" href="view.php">Payrolls</a>
                <a href="create.php">Create</a>
                <div class="search-container">

                    <form  action="search.php" method="GET">
                        <input id="search" type="text" placeholder="Search Employee.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <table style="width:80%" class="position-center">
                <caption><h2>All Payrolls</h2></caption>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Produced Products</th>
                    <th>Department</th>
                    <th>Salary</th>
                </tr>
                <?php
                //Passing post array to corresponding form handlers
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST) && !(array_key_exists('salary', $_POST))) {
                    CreateFormHandler::createHandle($_POST);
                } else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {
                    EditFormHandler::editHandle($_POST);
                }
                //Selecting values from database
                $model = new Model();
                foreach ($model->select() as $value) { ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['last_name'] ?></td>
                    <td><?= $value['first_name'] ?></td>
                    <td><?= $value['produced_products_amount'] ?></td>
                    <td><?= $value['department'] ?></td>
                    <td><?= $value['salary'] ?>$
                    <a href="edit.php?<?= $value['id'] ?>">Edit</a>
                    </td>
                </tr>
               <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>
