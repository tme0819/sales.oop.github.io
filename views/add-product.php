<?php
    require "../classes/Sales.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add product</title>
</head>
<body>
    <div class="container-fluid">
        <div class="card w-50 mx-auto mt-3 border border-0">
            <div class="card-title">
                <h1 class="text-info fw-bold text-center">Add Product</h1>
            </div>

            <div class="card-body mt-3">
                <form action="../views/dashboard.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="price" class="form-label">Price</label>
                                <div class="input-group">
                                    <div class="input-group-text bg-light">$</div>
                                    <input type="number" name="price" id="price" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <lable for="quantity" class="form-label">Quantity</lable>
                                <input type="number" name="quantity" id="quantity" class="form-control">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="btn_add" value="Add" class="form-control btn btn-info w-100">
                </form>
            </div>
        </div>
    </div>
</body>
</html>