<?php
$mysqli = new mysqli("localhost", "root", "", "shop_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];

    $stmt = $mysqli->prepare("UPDATE employees SET name=?, contact_no=?, username=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $contact_no, $username, $id);
    $stmt->execute();

    echo "Employee information updated!";
}
?>