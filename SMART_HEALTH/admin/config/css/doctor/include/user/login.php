<?php
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
?>
<!DOCTYPE html>
<html>
<head>
    <title>Smart Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base; ?>admin/config/css/style.css">
</head>
<body>
<?php $base="http://localhost/smart_health/"; ?>
<div class="navbar">
    <div class="logo"><b><h3>Smart Health</h3></b></div>
    <div class="menu">
        <a href="<?php echo $base; ?>index.php"><b>Home</b></a>
        <a href="<?php echo $base; ?>admin/config/css/doctor/include/user/register.php"><b>Register</b></a>
        <a href="<?php echo $base; ?>admin/config/css/doctor/include/user/login.php"><b>Login</b></a>
        <a href="<?php echo $base; ?>admin/config/css/doctor/view_doctors.php"><b>Doctors</b></a>
        <a href="<?php echo $base; ?>contact.php"><b>Contact</b></a>
    </div>
</div>
<style>
        body {
    margin: 0;
    font-family: Arial;
    background: #f6c893ff;
}

/* Navbar */
.navbar {
    background: #eb731def;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    color: white;
}

.navbar a {
    color: white;
    margin-left: 15px;
    text-decoration: none;
}

.navbar a:hover {
    text-decoration: underline;
}

/* Login Box */
.login-box {
    width: 350px;
    margin: 80px auto;
    background: #f3993fff;
    padding: 70px;
    border-radius: 5px;
    text-align: center;
}

.login-box input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    margin-right: 10px;
    margin-left: 5px;
    box-align: center;
}

.login-box button {
    width: 100%;
    padding: 10px;
    background: #d06f07ff;
    color: white;
    border: none;
    cursor: pointer;
    box-align: center;
}

/* Footer */
.footer {
    background: #0b2e2f;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 220px;
}
    </style>
<div class="login-box">
    <h2>User Login</h2>

    <form method="post">
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

<?php include 'footer.php'; ?>
<div class="footer">
    <p>Smart Health Prediction System</p>
    <p>© Reserved by Santosh Kumar</p>
</div>

</body>
</html>