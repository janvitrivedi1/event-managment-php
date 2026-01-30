<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<h1>Available Events</h1>

<table class="table table-bordered table-striped text-center">

<tr>
    <th>ID</th>
    <th>Event Name</th>
    <th>Date</th>
    <th>Venue</th>
    <th>Action</th>
</tr>

<?php
$q = "select * from events";
$data = mysqli_query($conn,$q);

while($row = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['event_date']; ?></td>
    <td><?php echo $row['venue']; ?></td>
           
<td>
    <a href="register_event.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Register</a>
    <br><br>
</td>

</tr>
<?php } ?>

</table>
<a href="index.php" class="btn btn-secondary"style="margin: 20px;" >Back</a>


</body>
</html>
