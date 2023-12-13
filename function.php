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
function select($tbl,$where = array())
{
    $conn = get_conn();
    $wh = '';
    foreach ($where as $k=> $v)
    {
        if(!$wh)
        {
            $wh = $wh." ".$k." = '".$v."'";
        }
        else
        {
            $wh = $wh." AND ".$k." = '".$v."'";
        }
    }
    $sql = "SELECT * FROM ".$tbl;
    if($wh)
    $sql = "SELECT * FROM ".$tbl." where ".$wh;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return  $data;
} else {
    return array();
}
}
function khawar_sum($a, $b)
{
    return $a+$b;
}
?>