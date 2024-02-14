
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Leave application Form</title>
    <link rel="stylesheet" href="leave.css">
    
</head>
<body>
    <div class="container">
        <h2>Employee Leave Request Form</h2>
        <form action="submit_leave.php" method="post">
            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" required><br><br>
            
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" required><br><br>
            
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" required><br><br>
            
            <label for="reason">Reason for Leave:</label><br>
            <textarea id="reason" name="reason" rows="4" cols="50" required></textarea><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

