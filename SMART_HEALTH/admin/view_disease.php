
<?php
include("config/db.php");

$query = "SELECT * FROM diseases";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['disease_name'] . "<br>";
    }
} else {
    echo "No Disease Found";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Diseases</title>

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

        .table-box{
            background:white;
            padding:30px;
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

<!-- TABLE -->
<div class="container mt-5">
    <div class="table-box">
        <!--Table-->
        <div class="container mt-4">
            <div class="table-responsive">
                <!--ADD BUTTON -->
                <div class="d-flex justify-content-between mb-3">
                <h2>All Diseases </h2>
    </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>disease_name</th>
                    <th>symptoms</th>
                </tr>
            </thead>

            <tbody>
               <?php
                $result = mysqli_query($conn,"SELECT * FROM diseases");

                while($row = mysqli_fetch_assoc($result))
                { 
                ?>
                <tr>
                    <td><?php echo $row['disease_name']; ?></td>
                    <td><?php echo $row['symptoms']; ?></td>
                    <td>
                        <a href="view_disease.php?delete=<?php echo $row['disease_id']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure?')">
                           Delete
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    Smart Health Prediction System <br>
    © Reserved by Santosh Kumar
</div>

</body>
</html>