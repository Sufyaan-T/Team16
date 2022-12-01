<!--Pantelis Xiourouppas - 160056307 -->
<?php
session_start();
//disallows any and all access to this page UNLESS you sign in
include("connect.php");
include("functions.php");
if (!isset($_SESSION['id'])) {
    header("Location:adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <!-- This is the line you need -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Admin Page</title>

    <style>
        img {
            width: 100px;


        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="adminpage.php"><img src="images/Logo.png" class="logo"></a>
        <ul>
            
            <li><a href="adduser.php">Add User</a></li>
            <li><a href="additem.php">Add Item</a></li>
            <li><a href="adminpage.php">Database</a></li>
            <li><a href="adminlogout.php">Log Out</a></li>
        </ul>
    </div>
    <!-- USERS TABLE -->

    <div class="container">
        <h1 style="color:white;">
            User Database
        </h1>
        <table class="admin-table">
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
                     

                       <a class="button-update" title="Relevant Title" href = "userupdate.php? idUpdate= ' . $id . '">Update</a>
                       <a class="button-delete" title="Relevant Title" href = "deleteuser.php? idDelete=' . $id . '">Delete</a>

                       
                       
                      </td>
                      </tr>';
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
    <!-- END OF USERS TABLE -->

    <!-- Order Table -->
    <div class="container">
        <h1 style="color:white;">
            Order Database
        </h1>
        <table class="admin-table">
            <thead>
                <tr>
                    <th scope="col">Order Id #</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Product</th>
                    <th scope="col">Amount Payed</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * FROM `billingdetails`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $idOrder = $row['id'];
                        $name = $row['name'];
                        $email = $row['billingemail'];
                        $product = $row['product'];
                        $productprice = $row['productprice'];
                        echo '
                        <tr>
                      <th scope="row">' . $idOrder . '</th>
                      <td>' . $name . '</td>
                      <td>' . $email . '</td>
                      <td>' . $product . '</td>
                      <td>£' . $productprice . '</td>                     

                      <td>
                     

                       <a class="button-update" title="Relevant Title" href = "orderupdate.php? OrderUpdate= ' . $idOrder . '">Update</a>
                       <a class="button-delete" title="Relevant Title" href = "orderdelete.php? OrderDelete=' . $idOrder . '">Delete</a>
                       <a class="button-view" title="Relevant Title" href = "adminorders.php" >View Order</a>

                       
                       
                      </td>
                      </tr>';
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
    <!-- end of order table -->

    <!-- PRODUCT TABLE -->
    <div class="container">
        <h1 style="color:white;">Product Database</h1>
        <table class="admin-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price </th>
                    <th scope="col">Information</th>
                    <th scope="col">Operations </th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `products`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $idCart = $row['id'];
                        $image = $row['image'];
                        $name = $row['name'];
                        $price = $row['price'];
                        $information = $row['information'];
                        echo '
                        <tr>
                      <th scope="row">' . $idCart . '</th>
                      <td> <img src="images/' . $image . '"/></d>
                      <td>' . $name . '</td>
                      <td>£' . $price . '</td>  
                      <td>' . $information . '</td>

                      <td>
                      <a class="button-update" title="Relevant Title" href = "productupdate.php? idUpdateCart= ' . $idCart . '">Update</a>
                      <a class="button-delete" title="Relevant Title" href = "deleteproduct.php? idDeleteCart=' . $idCart . '" >Delete</a>
                      
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