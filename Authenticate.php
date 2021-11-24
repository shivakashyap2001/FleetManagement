<?php
$user_id = $_POST['user_id'];
$password = $_POST['password'];
include 'connect.php';
$sql = "SELECT user_id FROM user WHERE user_id='$user_id' AND password='$password'";
$result = $con->query($sql);
if($result->num_rows>0) {
    echo "<script>window.location.href = 'Dashboard.php'</script>";
} else {
    echo "<script>alert('User Id or Password Incorrect! Please retry.')</script>";
    echo "<script>window.location.href = 'index.html'</script>";
}