<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentmsdb";

// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_addr = $_POST['email_addr'];
    $phone_input = $_POST['phone_input'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO contact (first_name,last_name,email_addr,phone_input,message) VALUES (?,?,?,?,?)");

    // Bind parameters and execute the statement
    $stmt->bind_param("sssds",$first_name,$last_name,$email_addr,$phone_input, $message);

    if ($stmt->execute()) {
        // Registration completed
        echo "Your Response Recoeded!";

        // Redirect to login page after a delay
        header("refresh:0.3; url=\Student_Management_old\studentms\ourpages\AdiExtra.html");
        exit;
    } else {
        // An error occurred while storing credentials
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>