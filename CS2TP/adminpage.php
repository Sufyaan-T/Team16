<!--Pantelis Xiourouppas - 160056307 -->
<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Admin Page</title>
</head>

<body>
    <!-- USERS TABLE -->
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add User</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>


                <?php
                $sql = "Select * from `users`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        echo '
                        <tr>
                      <th scope="row">' . $id . '</th>
                      <td>' . $name . '</td>
                      <td>' . $email . '</td>
                      <td>' . $password . '</td>

                      <td>
                       <button class="btn btn-primary" >
                        <a href = "idUpdate.php? idUpdate= ' . $id . '" class="text-light"> Update 
                        </a>
                       </button>
                       <button class="btn btn-danger" >
                        <a href = "delete.php? idDelete=' . $id . '" class="text-light"> Delete 
                        </a>
                       </button>
                      </td>
                      </tr>';
                    }

                }

                ?>


            </tbody>
        </table>
    </div>
    <!-- END OF USERS TABLE -->

    <!-- CART TABLE -->
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="additem.php" class="text-light">Add Item</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price £</th>
                    <th scope="col">Operations </th>

                </tr>
            </thead>
            <tbody>


                <?php
                $sql = "Select * from `cart`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $idCart = $row['id'];
                        $name = $row['name'];
                        $price = $row['price'];
                        echo '
                        <tr>
                      <th scope="row">' . $idCart . '</th>
                      <td>' . $name . '</td>
                      <td>' . $price . '</td>  

                      <td>
                       <button class="btn btn-primary" >
                        <a href = "itemUpdate.php? idUpdateCart= ' . $idCart . '" class="text-light"> Update 
                        </a>
                       </button>
                       <button class="btn btn-danger" >
                        <a href = "deleteCart.php? idDeleteCart=' . $idCart . '" class="text-light"> Delete 
                        </a>
                       </button>
                      </td>
                      </tr>';
                    }

                }

                ?>


            </tbody>
        </table>
    </div>
    <!-- END OF CART TABLE -->

</body>

</html>