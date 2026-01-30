<?php
include "db.php";

$event_id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

<h1>Event Registration</h1>

<form method="post">
    <div class="mb-3">
        <input type="text" name="user_name" class="form-control"
        placeholder="Enter Your Name" required>
    </div>

    <div class="mb-3">
        <input type="email" name="user_email" class="form-control"
        placeholder="Enter Your Email" required>
    </div>

    <input type="submit" name="submit" value="Register" class="btn btn-success">
</form>

<?php
if(isset($_POST['submit'])){

    $name = $_POST['user_name'];
    $email = $_POST['user_email'];

    $q = "insert into registrations(event_id,user_name,user_email)
          values('$event_id','$name','$email')";

    mysqli_query($conn,$q);

    echo "<p class='mt-3 text-success'>Registration Successful</p>";
}
?>

<br>
<a href="events.php" class="btn btn-secondary">Back</a>

</div>

</body>
</html>
