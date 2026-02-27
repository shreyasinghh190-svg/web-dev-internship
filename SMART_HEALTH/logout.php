<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f8e8d5;
}

.navbar{
    background:#d97706;
}

.navbar a{
    color:white !important;
    font-weight:500;
}

.logout-box{
    background:linear-gradient(135deg,#f59e0b,#f97316);
    padding:40px;
    border-radius:15px;
    width:400px;
    margin:100px auto;
    text-align:center;
    color:white;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.btn-custom{
    background:white;
    color:#d97706;
    font-weight:bold;
    border-radius:8px;
}
</style>
</head>

<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand text-white" href="">Smart Health</a>
<?php $base="http://localhost/smart_health/"; ?>
        <nav class="main-header">
            <nav>
               <a href="<?php echo $base; ?>index.php"><b>Home</b></a>
               <a href="<?php echo $base; ?>admin/config/css/doctor/include/user/register.php"><b>Register</b></a>
               <a href="<?php echo $base; ?>admin/config/css/doctor/include/user/login.php"><b>Login</b></a>
               <a href="<?php echo $base; ?>admin/config/css/doctor/view_doctors.php"><b>Doctors</b></a>
               <a href="<?php echo $base; ?>contact.php"><b>Contact</b></a>
            </nav>
        </nav> 
</div>
</nav>

<!-- LOGOUT MESSAGE -->
<div class="logout-box">
<h3>You have been Logged Out</h3>
<p class="mt-3">Thank you for using Smart Health</p>

<a href="<?php echo $base; ?>admin/config/css/doctor/include/user/login.php" class="btn btn-custom mt-3">
Login Again
</a>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3 mt-5">
Smart Health Prediction System <br>
© Reserved by Santosh Kumar
</footer>

</body>
</html>