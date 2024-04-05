<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Register</title>
</head>
<body>
    <div class="container-fluid">
        <div class="card w-50 mx-auto border border-0">
            <h1 class="fw-bold text-danger text-center mx-auto mt-4">Registeration</h1>

            <div class="card-body">
                <form action="../actions/register.php" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control">
                        </div>
                        <div class="col">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id ="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-lael">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <input type="submit" value="REGISTER" class="form-control btn btn-danger text-white text-center">
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>