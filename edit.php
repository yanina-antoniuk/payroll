<?php
require_once (__DIR__.'/Model.php');
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
        <div class="background-dark">
            <nav>
                <div class="topnav">
                    <a class="active" href="view.php">Payrolls</a>
                    <a href="create.php">Create</a>
                </div>
            </nav>
            <div class="container">
                <h2>Edit</h2>
                <form name="editForm" action="view.php" method="POST">
                    <?php
                    $model = new Model();
                    foreach ($model->selectId(strip_tags($_SERVER['QUERY_STRING'])) as $edit) { ?>
                        <input type="hidden" name="id" value="<?= $edit['id']?>">
                    <div class="row">
                        <div class="col-25">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="last_name" name="last_name" value="<?= $edit['last_name'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="first_name" name="first_name" value="<?= $edit['first_name'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="produced_products_amount">Amount of Produced Items</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="produced_products_amount" name="produced_products_amount"
                                   value="<?= $edit['produced_products_amount'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="salary">Salary</label>
                        </div>
                        <div class="col-75">
                            <input oninput="return validateSalary()" type="text" id="salary" name="salary"
                                   value="<?= $edit['salary'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="department">Department</label>
                        </div>
                        <div class="col-75">
                            <select id="department" name="department">
                                <option value="tv sets" <?= in_array('tv sets', $edit) ? "selected" : "" ?>>
                                    TV Sets Department
                                </option>
                                <option value="computers" <?= in_array('computers', $edit) ? "selected" : "" ?>>
                                    Computers Department
                                </option>
                                <option value="mobile phones" <?= in_array('computers', $edit) ? "selected" : "" ?>>
                                    Mobile Phones Department
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit">Edit</button>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </body>
</html>
