<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Registrations</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

<h1>Event Registrations</h1>

<table class="table table-bordered text-center">
<tr>
    <th>ID</th>
    <th>Event ID</th>
    <th>Name</th>
    <th>Email</th>
</tr>

<?php
$q = "select * from registrations";
$data = mysqli_query($conn,$q);

while($row = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['event_id']; ?></td>
    <td><?php echo $row['user_name']; ?></td>
    <td><?php echo $row['user_email']; ?></td>
</tr>
<?php } ?>

</table>

<a href="index.php" class="btn btn-secondary">Back</a>

</div>

</body>
</html>
