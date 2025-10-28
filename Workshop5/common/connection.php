<?php
$conn = mysqli_connect('localhost', 'root', '', 'workshop5');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>