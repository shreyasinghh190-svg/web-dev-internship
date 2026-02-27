<? include 'dp.php';?>
<?php $base="http://localhost/smart_health/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<header class="main-header">
</header>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f7fa;
        }

        .navbar {
            background: #1f6e8c;
            padding: 15px;
            color: white;
            display: flex;
            justify-content: space-between;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .heading {
            text-align: center;
            margin: 30px;
            color: #1f6e8c;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .card {
            background: white;
            width: 260px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card h3 {
            margin: 10px 0;
            color: #1f6e8c;
        }

        .card p {
            margin: 5px 0;
        }

        .footer {
            background: #0b2e2f;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<div class="navbar">
    <div><b>Smart Health</b></div>
    <div>
        <a href="<?php echo $base; ?>index.php">Home</a>
        <a href="<?php echo $base; ?>admin/config/css/doctor/include/user/login.php">Login</a>
        <a href="<?php echo $base; ?>admin/config/css/doctor/include/user/register.php">Register</a>
        <a href="<?php echo $base; ?>admin/config/css/doctor/view_doctors.php">Doctors</a>
        <a href="<?php echo $base; ?>contact.php">Contact</a>
    </div>
</div>

<h2 class="heading">Contact Our Doctors</h2>

<div class="container">

<?php
$query = "SELECT * FROM doctors";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
?>
    <div class="card">
        <img src="images/<?php echo $row['image']; ?>" alt="Doctor Image">
        <h3><?php echo $row['name']; ?></h3>
        <p><b>Specialization:</b> <?php echo $row['specialization']; ?></p>
        <p><b>Contact:</b> <?php echo $row['contact']; ?></p>
        <p><b>Email:</b> <?php echo $row['email']; ?></p>
    </div>
<?php
}
?>

</div>

<div class="footer">
    Smart Health Prediction System <br>
    © Reserved by Santosh Kumar
</div>
<?php include("admin/config/css/doctor/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
