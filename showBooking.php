<?php
session_start();
include ("dbh.php");

$sql_showBooking = "SELECT tid, ticket, bk_email, price FROM ticket_purchase";
$result = $conn->query($sql_showBooking);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Ticket</th><th>Email</th><th>Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["tid"]."</td><td>".$row["ticket"]."</td><td>".$row["bk_email"]."</td><td>".$row["price"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>