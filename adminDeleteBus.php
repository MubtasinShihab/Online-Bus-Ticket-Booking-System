<?php
include('connection.php');

// Check if bus_code is set
if (isset($_GET['id'])) {
    $bus_code = $_GET['id'];

    // Delete the bus record
    $delete_query = "DELETE FROM bus WHERE bus_code = '$bus_code'";

    if ($conn->query($delete_query)) {
        // Redirect back to the bus list
        header("Location: adminAllBusInfo.php");
        exit();
    } else {
        echo "Error deleting bus: " . $conn->error;
    }
}
