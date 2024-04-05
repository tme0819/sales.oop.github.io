<?php
    require "../classes/Sales.php";

    $product = new Sales;
    $edit_product = $product->getAllSales();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <title>edit product</title>
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
    <main class="row justify-content-center gx-0">
        <h2 class="text-center mb-4">EDIT PRODUCT</h2>
        
    </main>
</body>
</html>