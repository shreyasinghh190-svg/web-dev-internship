<?php
include("db.php"); // database connection

$message = "";

if(isset($_POST['add_symptom']))
{
    $symptom_name = $_POST['symptom_name'];

    $query = "INSERT INTO symptoms (symptom_name) 
              VALUES ('$symptom_name')";

    if(mysqli_query($conn, $query))
    {
        $message = "Symptom Added Successfully !!!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Symptom</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f6c893ff;
        }

        .navbar{
            background: linear-gradient(90deg,#d06f07ff,#d06f07ff);
        }

        .navbar-brand{
            color:white !important;
            font-weight:bold;
        }

        .form-box{
            background:white;
            padding:40px;
            border-radius:5px 40px 5px 40px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        .footer{
            background:#0a0f14;
            color:white;
            padding:20px;
            text-align:center;
            margin-top:420px;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">Smart Health Admin</a>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<!-- FORM SECTION -->
<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="form-box">

            <h2 class="mb-4">Add Symptom</h2>

            <form method="POST">

                <div class="mb-3">
                    <input type="text" name="symptom_name" class="form-control" placeholder="Symptom Name" required>
                </div>

                <button type="submit" name="add_symptom" class="btn btn-primary">
                    Add Symptom
                </button>

            </form>

            <?php
            if($message != "")
            {
                echo "<p class='text-success mt-3 fw-bold'>$message</p>";
            }
            ?>

        </div>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    Smart Health Prediction System <br>
    © Reserved by Santosh Kumar
</div>

</body>
</html>