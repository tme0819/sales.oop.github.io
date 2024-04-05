<?php
    session_start();
    include "../classes/Sales.php";

    $sales = new Sales;
    $all_sales = $sales->getAllSales();
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
    <title>dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand"><i class="fa-solid fa-house"></i></a>

            <div class="navbar-nav">
                <span class="navbar-text">Welcome, <?=$_SESSION['full_name']?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        
                
            <div class="card mx-auto w-75 border border-0">
                <div class="card-header w-100">
                    <div class="row">
                        <div class="col"><h1>Product list</h1></div>
                        <div class="col text-end h1"><i class="fa-solid fa-plus text-info" data-bs-toggle="modal" data-bs-target="#add-product-modal"></i></div>
                    <?php
                    include "modals/add-products-modal.php";
                    ?>
                    </div>
                </div>
                <div class="card-body w-100">
                    <table class="table mx-auto table-striped">
                        <tr class="table-dark text-white fw-bold">
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <t-body>
                            <?php
                            while($sales = $all_sales->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?=$sales['id']?></td>
                                <td><?=$sales['product_name']?></td>
                                <td><?=$sales['price']?></td>
                                <td><?=$sales['quantity']?></td>
                                <td>
                                    <a href="edit-product.php"></a>
                                    <i class="btn btn-warning text-dark rounded fa-solid fa-pencil"></i>
                                    <i class="btn btn-danger text-white rounded fa-solid fa-trash"></i>
                                </td>
                                <td>
                                <i class="btn btn-success text-white fa-regular fa-square-plus"></i>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tr>
                        </t-body>
                    </table>
            </div>      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>