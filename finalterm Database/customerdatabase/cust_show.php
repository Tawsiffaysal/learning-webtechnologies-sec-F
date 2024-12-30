<?php
include "../customerdatabase/cust_db.php";

// Query to fetch all customers from the `customer` table
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Customer Information</h1>";
    echo "<table border='1'>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Billing Address</th>
                <th>Service Plan</th>
                <th>Payment Method</th>
                <th>Installation Address</th>
                <th>Installation Date</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['customer_Id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['billing_address'] . "</td>
                <td>" . $row['service_plan'] . "</td>
                <td>" . $row['payment_method'] . "</td>
                <td>" . $row['installation_address'] . "</td>
                <td>" . $row['installation_date'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No customer data found.";
}

$conn->close();
?>
