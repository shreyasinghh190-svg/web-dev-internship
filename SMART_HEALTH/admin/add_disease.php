
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config/db.php");

if(isset($_POST['add_disease'])){

    $name = $_POST['disease_name'];
    $symptoms = $_POST['symptoms'];
    $treatment = $_POST['treatment'];

    $query = "INSERT INTO diseases (disease_name, symptoms, treatment)
              VALUES ('$name', '$symptoms', '$treatment')";

    if(mysqli_query($conn, $query)){
        echo "Disease Added Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Disease</title>

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
            padding:50px;
            border-radius:5px 40px 5px 40px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        .footer{
            background:#0a0f14;
            color:white;
            padding:20px;
            text-align:center;
            margin-top:280px;
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

            <h2 class="mb-4">Add Disease</h2>

            <form method="POST" action="">

                <div class="mb-3">
                    <input type="text" name="disease_name" class="form-control" placeholder="Disease Name" required>

                </div>
                <div class="mb-3">
                    <textarea name="symptoms" class="form-control" 
                              placeholder="Symptoms" rows="4" required></textarea>
                <!--<div class="mb-3">
                    <textarea name="treatment" class="form-control" 
                              placeholder="Treatment" rows="4" required></textarea>
                </div>-->

                <button type="submit" name="add_disease" class="btn btn-success">
                    Add Disease
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