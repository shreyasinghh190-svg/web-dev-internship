<?php
$conn = new mysqli("localhost", "root", "", "smart_health");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM symptoms";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Symptoms</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .navbar {
            background-color: #1f6e8c;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .table-box {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        footer {
            background: #0b2e2f;
            color: white;
            padding: 15px;
            margin-top: 50px;
        }
    </style>
</head>

<body>
<?php $base="http://localhost/smart_health/"; ?>
<!-- HEADER -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="dashboard.php">Smart Health Admin</a>
        <div>
            <a href="dashboard.php" class="nav-link d-inline">Dashboard</a>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<!-- TABLE -->
<div class="container mt-5">
    <div class="table-box">

        <h2 class="mb-4">All Symptoms</h2>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Symptom ID</th>
                    <th>Symptom Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>".$row['symptom_id']."</td>
                                <td>".$row['symptom_name']."</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' class='text-center'>No Symptoms Found</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
</div>

<!-- FOOTER -->
<footer class="text-center">
    Smart Health Prediction System <br>
    © Reserved by Santosh Kumar
</footer>

</body>
</html>