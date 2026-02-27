<?php
include("db.php");

$message = "";

// Insert Mapping
if(isset($_POST['map']))
{
    $disease_id = $_POST['disease_id'];
    $symptom_id = $_POST['symptom_id'];

    $query = "INSERT INTO disease_symptom (disease_id, symptom_id)
              VALUES ('$disease_id', '$symptom_id')";

    if(mysqli_query($conn, $query))
    {
        $message = "Mapping Added Successfully !!!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Disease Symptom Mapping</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .navbar{
            background: linear-gradient(90deg,#0f6d88,#0a4f63);
        }

        .navbar-brand{
            color:white !important;
            font-weight:bold;
        }

        .form-box{
            background:white;
            padding:40px;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        .footer{
            background:#0a0f14;
            color:white;
            padding:20px;
            text-align:center;
            margin-top:60px;
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

<!-- FORM -->
<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="form-box">

            <h2 class="mb-4">Disease - Symptom Mapping</h2>

            <form method="POST">

                <!-- Disease Dropdown -->
                <div class="mb-3">
                    <label class="form-label">Select Disease</label>
                    <select name="disease_id" class="form-control" required>
                        <option value="">-- Select Disease --</option>
                        <?php
                        $disease = mysqli_query($conn,"SELECT * FROM diseases");
                        while($row = mysqli_fetch_assoc($disease))
                        {
                            echo "<option value='".$row['disease_id']."'>".$row['disease_name']."</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Symptom Dropdown -->
                <div class="mb-3">
                    <label class="form-label">Select Symptom</label>
                    <select name="symptom_id" class="form-control" required>
                        <option value="">-- Select Symptom --</option>
                        <?php
                        $symptom = mysqli_query($conn,"SELECT * FROM symptoms");
                        while($row = mysqli_fetch_assoc($symptom))
                        {
                            echo "<option value='".$row['symptom_id']."'>".$row['symptom_name']."</option>";
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" name="map" class="btn btn-info text-white">
                    Map
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