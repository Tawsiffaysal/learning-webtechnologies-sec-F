<?php
include "../customerdatabase/cust_db.php";

// Validation query to check if the `customer` table has entries
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Customer data found in the table:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "Customer ID: " . $row['customer_Id'] . ", Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No customer data found in the table.";
}

$conn->close();
?>
