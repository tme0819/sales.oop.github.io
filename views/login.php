<?php

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
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="card mx-auto w-25 border border-0 mt-4">
            <h1 class="card-title text-info fw-bold text-center">LOGIN</h1>

            <div class="card-body">
                <form action="../actions/login.php" method="post">
                    <div class="row mb-3">
                        <div class="col-4">
                             <label for="username" class="form-label">Username</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="col-8">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Log In" class="text-center text-white form-control btn btn-info w-50 offset-3">  
                        </div>
                    </div> 
                </form>
                <p class="text-center mt-3 w-50 mx-auto  bg-danger rounded-2"><a href="../views/register.php" class="text-decoration-none text-white">Create an Account</a></p>
            </div>
        </div>
    </div>
</body>
</html>