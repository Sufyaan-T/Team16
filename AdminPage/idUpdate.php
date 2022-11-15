<!--Pantelis Xiourouppas - 160056307 -->
<?php
include 'connect.php';

$id = $_GET['idUpdate'];
$sql = "Select * from `users` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];


if (isset($_POST['UpdateButton'])) {

    $name = $_POST['UserName'];
    $email = $_POST['UserEmail'];
    $password = $_POST['UserPassword'];

    $sql = "update `users` set id=$id , name ='$name', email='$email', password='$password' where id=$id";
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
    <title>Fill in Details</title>
    <!--Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Fill in Details</h1>

    <div class="container my-5 ">

        <button class="btn btn-primary my-5">
            <a href="adminpage.php" class="text-light">Admin Page</a>
        </button>

        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text-box" class="form-control" name="UserName" autocomplete="off"
                    value="<?php echo $name ?> ">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control"  name="UserEmail" autocomplete="off"
                    value="<?php echo $email ?> ">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text-box" class="form-control" placeholder="Enter Password" name="UserPassword"
                    autocomplete="off" value="<?php echo $password ?> ">
            </div>
            <button type="submit" class="btn btn-primary" name="UpdateButton">Update</button>

        </form>
</body>
</div>

</html>