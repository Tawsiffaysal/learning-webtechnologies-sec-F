<?php
session_start(); // Start the session to access session data

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the login details entered by the user
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    $department = trim($_POST['department']);
    $dob = trim($_POST['dob']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);

    // Check if session data is available (from registration)
    if (isset($_SESSION['student'])) {
        $student = $_SESSION['student'];

        // Validate the input data by comparing it with session data
        if ($student['name'] == $name && 
            $student['email'] == $email && 
            $student['gender'] == $gender &&
            $student['department'] == $department &&
            $student['dob'] == $dob &&
            $student['address'] == $address &&
            $student['phone'] == $phone) {
                
            // Successful login, redirect to the student's dashboard
            header("Location: dashboard.php");
            exit(); // Stop further script execution after redirection
        } else {
            // Invalid credentials
            echo "Invalid login credentials.";
        }
    } else {
        // If session is not set, prompt for registration first
        echo "No registration found. Please register first.";
    }
} else {
    // If the form wasn't submitted correctly, redirect to the registration form
    header("Location: registration.html");
    exit();
}
?>
