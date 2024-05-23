<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dhruv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $fromdt = $_POST['fromdt'];
    $till = $_POST['till'];
    
    // cheack if there is any existing date are booked.
    $sql = "SELECT * FROM book WHERE (fromdt <= ? AND till >= ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $till, $fromdt);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        header('Location: unsuccess.php');
    } else {
        
        $sql = "INSERT INTO book (fname, email, num, fromdt, till) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $fname, $email, $num, $fromdt, $till);
        
        if ($stmt->execute()) {
            header('Location: success.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $stmt->close();
}

$conn->close();
?>


<!-- Check for Existing Bookings:


This SQL query checks if there are any existing that overlap with the requested booking dates (fromdt to till).
prepare is used to create a prepared statement, which is more secure against SQL injection.
bind_param binds the input parameters ($till, $fromdt) to the query. "ss" indicates that both parameters are strings.
execute runs the query.
get_result fetches the result set from the prepared statement. -->
