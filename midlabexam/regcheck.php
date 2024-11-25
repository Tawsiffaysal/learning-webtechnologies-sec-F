<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    $department = trim($_POST['department']);
    $dob = trim($_POST['dob']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);

    
    if (isset($_SESSION['student'])) {
        $student = $_SESSION['student'];

        
        if ($student['name'] == $name && 
            $student['email'] == $email && 
            $student['gender'] == $gender &&
            $student['department'] == $department &&
            $student['dob'] == $dob &&
            $student['address'] == $address &&
            $student['phone'] == $phone) {
                
       
            header("Location: dashboard.php");
            exit(); 
        } else {
            
            echo "Invalid login credentials.";
        }
    } else {
        
        echo "No registration found. Please register first.";
    }
} else {
   
    header("Location: registration.html");
    exit();
}
?>
