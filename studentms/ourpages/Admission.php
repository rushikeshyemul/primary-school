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
    $parent_name = $_POST['parent_name'];
    $email = $_POST['email'];
    $student_name = $_POST['student_name'];
    $mobile_no = $_POST['mobile_no'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $admission_for = $_POST['admission_for'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO admition (parent_name,email,student_name,mobile_no,state,address,city,admission_for) VALUES (?,?,?,?,?,?,?,?)");

    // Bind parameters and execute the statement
    $stmt->bind_param("sssdssss",$parent_name,$email,$student_name,$mobile_no, $state,$address ,$city ,$admission_for);

    if ($stmt->execute()) {
        // Registration completed
        echo "Adimission completed successfully!";

        // Redirect to login page after a delay
        header("refresh:0.3; url=AdiExtra.html");
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