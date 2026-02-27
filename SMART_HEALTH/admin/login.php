<!--<?php
include("admin/config/db.php");

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin 
              WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid Email or Password";
    }
}
?> -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Form Submitted";
}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Smart Health Prediction</title>



<!-- Bootstrap CSS -->

<link rel="stylesheet"

      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">



<!-- Custom CSS -->

<link rel="stylesheet" href="/smart_health/css/style.css">

</head><body><?php include '../includes/header.php'; ?><div class="container-fluid mt-4"><div class="container-fulid mt-5">

<div class="row justify-content-center">

    <div class="col-md-4">



        <div class="card shadow p-4">

            <h3 class="text-center mb-3">Admin Login</h3>



           <form method="post">

<div class="mb-3">

    <input type="text" name="username" class="form-control" placeholder="Username" required>

</div>



<div class="mb-3">

    <input type="password" name="password" class="form-control" placeholder="Password" required>

</div>



<button type="submit" name="btn_login" class="btn btn-danger w-100">Login</button>

</form><?php
  
if(isset($_POST['btn_login'])){
  
    $username = $_POST['username'];
  
    $password = $_POST['password'];
  
    include '../config/db.php';
  
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
  
    $qry = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  
    $result = mysqli_query($conn, $qry);
  
    if(mysqli_num_rows($result) > 0){
  
        header("Location: dashboard.php");
  
        exit;
  
    } else {
  
        echo "<b class='text-danger m-5'>Invalid Username & Password!!!!!</b>";
  
    }
  

  
    mysqli_close($conn);
  
}
  
?></div>



    </div>

</div>

</div></div><?php include '../includes/footer.php'; ?><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script></body></html>

        