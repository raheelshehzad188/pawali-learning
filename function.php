<?php
include 'config.php';
function get_conn()
{

// Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
    if ($conn->connect_error) {
        return 0;
    }
    return $conn;
}
function admin_login($email,$pass)
{
    $conn = get_conn();
    $sql = "SELECT * FROM admins where email = '$email' AND pass= '$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    return $row = $result->fetch_assoc();
} else {
    return false;
}
}
?>