<?php
    require "Database.php";

    class Sales extends Database{
        function store($request){
            $first_name = $request['first_name'];
            $last_name = $request['last_name'];
            $username = $request['username'];
            $password = $request['password'];

            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO Users(`first_name`, `last_name`, `username`, `password`) VALUES ('$first_name', '$last_name', '$username', '$password')";

            if($this->conn->query($sql)){
                header('location:  ../views');
            }else{
                die('Error in registration: ' .$this->conn->error);
            }
        }

        function login($request){
            $username = $request['username'];
            $password = $request['password'];

            $sql = "SELECT * FROM Users WHERE `username` = '$username'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $user = $result->fetch_assoc();

                if(password_verify($password, $user['password'])){
                    session_start();
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['full_name'] = $user['first_name'] ." " .$user['last_name'];

                    header("location: ../views/dashboard.php");
                }else{
                    die("Password is incorrect");
                }
            }else{
                die("User not found");
            }
        }

        function getAllSales(){
            $sql = "SELECT `id`, `product_name`, `price`, `quantity` FROM Products";

            if($result = $this->conn->query($sql)){
                return $result;
            }else{
                die("Error retrieving all products" .$this->conn->error);
            }
        }

        function Add($request){
            $product_name = $request['name'];
            $price = $request['price'];
            $quantity = $request['quantity'];

            $sql = "INSERT INTO Products(`product_name`, `price`, `quantity`) VALUES ('$product_name', '$price', '$quantity')";

            if($this->conn->query($sql)){
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Error in adding products" .$this->conn->error);
            }
        }
            
    }

?>