<?php
session_start();

if (isset($_POST['submit'])) {

    
    $student_id = trim($_REQUEST['student_id']);
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    
    if (empty($student_id) || empty($username) || empty($password)) {
        echo "Please fill in all fields!";
    } else {
       
        $stored_student_id = "12345";  
        $stored_username = "student1"; 
        $stored_password = "password123";  

        
        if ($student_id == $stored_student_id && $username == $stored_username && $password == $stored_password) {
            
            $_SESSION['flag'] = true;
            $_SESSION['student_id'] = $student_id;
            $_SESSION['username'] = $username;

           
            header('Location: home.php');
            exit();
        } else {
           
            echo "Invalid login credentials. Please try again.";
        }
    }
} else {
   
    header('Location: login.html');
    exit();
}
?>
