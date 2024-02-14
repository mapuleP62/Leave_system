<?php
// Include the database connection
include 'db_connection.php';

// Collect form data
$employee_name = $_POST['employee_name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$reason = $_POST['reason'];

// Insert data into the database
$sql = "INSERT INTO leave_requests (employee_name, start_date, end_date, reason)
        VALUES ('$employee_name', '$start_date', '$end_date', '$reason')";

if (mysqli_query($conn, $sql)) {
    echo "Leave request submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
