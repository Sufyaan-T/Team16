<!--Pantelis Xiourouppas - 160056307 -->
<?php
include 'connect.php';

$idCart = $_GET['idUpdateCart'];
$sql = "Select * from `cart` where id=$idCart";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$price  = $row['price'];


if (isset($_POST['UpdateButton'])) {

    $name = $_POST['ItemName'];
    $price  = $_POST['ItemPrice'];

    $sql = "update `cart` set id=$idCart , name ='$name', price='$price ' where id=$idCart";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:adminpage.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item Update</title>
    <!--Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Item Update</h1>

    <div class="container my-5 ">

        <button class="btn btn-primary my-5">
            <a href="adminpage.php" class="text-light">Admin Page</a>
        </button>

        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text-box" class="form-control" name="ItemName" autocomplete="off"
                    value="<?php echo $name?> ">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text-box" class="form-control" name="ItemPrice" autocomplete="off"
                    value="<?php echo $price?> ">
            </div>
            <button type="submit" class="btn btn-primary" name="UpdateButton">Update</button>

        </form>
</body>
</div>

</html>