<?php
$mysqli = new mysqli("localhost", "root", "", "shop_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    if (!empty($name) && !empty($contact_no) && !empty($username) && !empty($password)) {
        $stmt = $mysqli->prepare("INSERT INTO employees (name, contact_no, username, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $contact_no, $username, $password);
        $stmt->execute();
        echo "Employee registered successfully!";
    } else {
        echo "All fields are required!";
    }
    
}
?>