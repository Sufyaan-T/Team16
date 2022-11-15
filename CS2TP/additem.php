<!--Pantelis Xiourouppas - 160056307 -->
<?php
include 'connect.php';

if (isset($_POST['SubmitButton'])) {

    $name = $_POST['ItemName'];
    $price = $_POST['ItemPrice'];

    $sql = "insert into `cart` (name, price) 
    values('$name','$price')";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Item</title>
    <!--Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Add Item</h1>

    <div class="container my-5 ">

    <button class="btn btn-primary my-5">
            <a href="adminpage.php" class="text-light">Admin Page</a>
        </button>

        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text-box" class="form-control" placeholder="Enter Name" name="ItemName" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text-box" class="form-control" placeholder="Enter Price" name="ItemPrice" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="SubmitButton">Submit</button>
            
        </form>
</body>
</div>

</html>