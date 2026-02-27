<?php $base="http://localhost/smart_health/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART HEALTH REGISTER</title>
    <link rel="stylesheet" href="<?php echo $base; ?>admin/config/css/style.css">
<header class="main-header">
</header>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f6c893ff;
        }

        /* Header */
        .header {
            background-color: #d06f07ff;
            padding: 15px 40px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            margin: 0;
            font-weight: normal;
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        .nav a:hover {
            text-decoration: underline;
        }

        /* Registration Box */
        .register-container {
            width: 400px;
            margin: 60px auto;
            margin-left: 500px;
            background: white;
            padding: 25px;
            border-radius: 6px;
            box-shadow: 0px 0px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        .register-container h3 {
            margin-bottom: 10px;
        }

        .register-container input,
        .register-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0px;
            margin-right: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .register-container button {
            width: 100%;
            padding: 10px;
            background-color: #c84a0bff;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 5px;
        }

        .register-container button:hover {
            background-color: #c8810eff;
        }

        /* Footer */
        .footer {
            background-color: #1c2833;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
</div>
<?php include 'smart_health/admin/config/css/doctor/include/header.php'; ?>
    <!-- Header -->
   <div class="header">
        <h2>Smart Health</h2>
        <div class="nav">
            <a href="<?php echo $base; ?>index.php"><b>HOME</b></a>
            <a href="<?php echo $base; ?>admin/config/css/doctor/include/user/register.php"><b>REGISTER</b></a>
            <a href="<?php echo $base; ?>admin/config/css/doctor/include/user/login.php"><b>LOGIN</b></a>
            <a href="<?php echo $base; ?>admin/config/css/doctor/view_doctors.php"><b>DOCTORS</b></a>
            <a href="<?php echo $base; ?>contact.php"><b>CONTACT</b></a>
        </div>
    </div>

    <!-- Registration Form -->
    <div class="register-container">
        <h3>User Registration</h3>
        <form method="post">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>

            <select name="gender" required>
                <option value="">Choose Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>

            <input type="text" name="mobile" placeholder="Mobile Number" required>

            <button type="submit">Register</button>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        Smart Health Prediction System <br>
        © Reserved By Santosh Kumar
    </div>

</body>

<div class="footer mt-auto" style="background-color: Black; color: white; text-align: center; padding: 6px;">Smart Health Prediction System <br>

© Reserved by  ......

</div>
</html>