<?php
include("db.php");

if(isset($_POST['save_all']))
{
    for($i=0; $i<count($_POST['disease_id']); $i++)
    {
        $disease_id = $_POST['disease_id'][$i];
        $symptom_id = $_POST['symptom_id'][$i];

        if($disease_id != "" && $symptom_id != "")
        {
            mysqli_query($conn,"INSERT INTO disease_symptom 
                                (disease_id, symptom_id)
                                VALUES ('$disease_id','$symptom_id')");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>View Mapping</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
}
.box{
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    margin-bottom:40px;
}
.table input{
    width:100%;
    border:none;
    outline:none;
}
</style>
</head>
<body>

<div class="container mt-5">

<!-- Existing Mapping -->
<div class="box">
<h3 class="mb-4">Disease - Symptom Mapping List</h3>

<table class="table table-bordered">
<thead class="table-dark">
<tr>
<th>Mapping ID</th>
<th>Disease ID</th>
<th>Symptom ID</th>
</tr>
</thead>
<tbody>

<?php
$result = mysqli_query($conn,"SELECT * FROM disease_symptom");
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['mapping_id']; ?></td>
<td><?php echo $row['disease_id']; ?></td>
<td><?php echo $row['symptom_id']; ?></td>
</tr>
<?php } ?>

</tbody>
</table>
</div>


<!-- Add New Mapping -->
<div class="box">
<h3 class="mb-4">Fill Mapping Details</h3>

<form method="POST">

<table class="table table-bordered">
<thead class="table-secondary">
<tr>
<th>Disease ID</th>
<th>Symptom ID</th>
</tr>
</thead>
<tbody>

<?php for($i=0; $i<5; $i++) { ?>
<tr>
<td><input type="text" name="disease_id[]"></td>
<td><input type="text" name="symptom_id[]"></td>
</tr>
<?php } ?>

</tbody>
</table>

<button type="submit" name="save_all" class="btn btn-success">
Save All Mapping
</button>

</form>

</div>

</div>

</body>
</html>