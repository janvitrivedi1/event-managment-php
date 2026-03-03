<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Available Events</h2>

    <table class="table table-bordered text-center">
        <tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Venue</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

<?php
$q = "SELECT * FROM events";
$result = mysqli_query($conn, $q);

$today = date("Y-m-d");

while($row = mysqli_fetch_assoc($result)) {

    $eventDate = DateTime::createFromFormat('d/m/Y', $row['event_date']);
    $formattedDate = $eventDate ? $eventDate->format('Y-m-d') : '';

    if($formattedDate < $today) {
        $status = "Completed";
    } else {
        $status = "Upcoming";
    }
?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['event_date']; ?></td>
            <td><?php echo $row['venue']; ?></td>

            <td>
                <?php if($status == "Completed") { ?>
                    <span class="text-danger fw-bold">Completed</span>
                <?php } else { ?>
                    <span class="text-success fw-bold">Upcoming</span>
                <?php } ?>
            </td>

            <td>
                <?php if($status == "Upcoming") { ?>
                    <a href="register_event.php?id=<?php echo $row['id']; ?>" 
                       class="btn btn-success btn-sm">
                       Register
                    </a>
                <?php } else { ?>
                    <button class="btn btn-danger btn-sm" disabled>
                        Completed
                    </button>
                <?php } ?>
            </td>
        </tr>

<?php
}  // ← while loop properly closed
?>

    </table>

    <div class="text-center mt-3">
        <a href="dashboard.php" class="btn btn-dark">Back</a>
    </div>

</div>

</body