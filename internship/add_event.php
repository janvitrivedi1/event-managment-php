<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Event</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<h1>Add Event</h1>

<form method="post">
    <p><input type="text" name="title" class="form-control" placeholder="Event Name" required></p>
    <p><input type="text" name="event_date" class="form-control" placeholder="Event Date" required></p>
    <p><input type="text" name="venue" class="form-control" placeholder="Venue" required></p>
    <input type="submit" name="submit" value="Add Event" class="btn btn-success">

</form>




<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $date = $_POST['event_date'];
    $venue = $_POST['venue'];

    $q = "insert into events(title,event_date,venue)
          values('$title','$date','$venue')";
    mysqli_query($conn,$q);

    echo "Event Added Successfully";
}
?>
<a href="index.php" class="btn btn-secondary" style="margin: 10px;">Back</a>

</body>
</html>
