<?php
include_once 'form_handlers/SearchFormHandler.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payroll</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/public/app.css">
</head>
<body>
    <nav>
        <div class="topnav">
            <a class="active" href="view.php">Payrolls</a>
            <a href="create.php">Create</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <table style="width:80%" class="position-center">
                <caption><h2>Your Search Results</h2></caption>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Produced Products</th>
                    <th>Department</th>
                    <th>Salary</th>
                </tr>
                <?php
                $query = $_GET['search'];
                foreach (SearchFormHandler::query($query) as $value) { ?>
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
<script type="text/javascript" src="public/app.js"></script>
</html>
