<?php
include "../customerdatabase/cust_db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect data from form submission
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $billing_address = $_POST['billing_address'];
    $service_plan = $_POST['service_plan'];
    $payment_method = $_POST['payment_method'];
    $installation_address = $_POST['installation_address'];
    $installation_date = $_POST['installation_date'];

    // Insert query to add the customer to the database
    $stmt = $conn->prepare("INSERT INTO customer (name, email, phone, password, billing_address, service_plan, payment_method, installation_address, installation_date) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $full_name, $email, $phone, $password, $billing_address, $service_plan, $payment_method, $installation_address, $installation_date);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
