<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Payroll</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/public/app.css">

    </head>
    <body>
    <div class="background-dark">
            <nav>
                <div class="topnav">
                    <a class="active" href="view.php">Payrolls</a>
                </div>
            </nav>
            <div class="container">
                <h2>Create form</h2>
                <form action="view.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="last_name" name="last_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="first_name" name="first_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="produced_products_amount">Amount of Produced Items</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="produced_products_amount" name="produced_products_amount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="department">Department</label>
                        </div>
                        <div class="col-75">
                            <select id="department" name="department">
                                <option value="tv sets">TV Sets Department</option>
                                <option value="computers">Computers Department</option>
                                <option value="mobile phones">Mobile Phones Department</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
