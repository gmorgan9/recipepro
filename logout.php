<!-- WORKING -->
<?php
session_start();
require_once "app/database/connection.php";
require_once "path.php";

$user_id = $_SESSION['user_id'];
$sql = "UPDATE users SET loggedin='0' WHERE user_id='$user_id'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

session_unset();
session_destroy();
header('location:' . BASE_URL . '/');

?>