<?php
include("config/db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Doctors</title>
</head>
<body>

<h2>View Doctors</h2>

<table border="1" width="100%" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Specialization</th>
        <th>Contact</th>
        <th>Action</th>
    </tr>

<?php
$query = "SELECT * FROM doctors";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Specialization']; ?></td>
        <td><?php echo $row['Contact']; ?></td>
        <td>
            <a href="#">Edit</a> | 
            <a href="#">Delete</a>
        </td>
    </tr>
<?php
    }
}else{
?>
    <tr>
        <td colspan="5">No doctors found</td>
    </tr>
<?php
}
?>

</table>

</body>
</html>