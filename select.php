

<?php
include('config.php');
session_start();
// Create connection

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$final0 = array(9, 10, 11);
$final0 = join(', ', $final0);
$query = "SELECT * FROM product2 WHERE id IN ($final0)";



$result = $con->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"];
    }
} else {
    echo "0 results";
}
$con->close();
?>