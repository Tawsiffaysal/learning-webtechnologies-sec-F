<?php
$mysqli = new mysqli("localhost", "root", "", "shop_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $stmt = $mysqli->prepare("DELETE FROM employees WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    echo "Employee deleted successfully!";
}
?>