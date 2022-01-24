<?php
include 'connect.php';

$customer_id = $_POST['customer_id'];
$time = $_POST['time'];
$date =$_POST['date'];
$source = $_POST['source'];
$destination = $_POST['destination'];

$sql = "INSERT INTO booking(customer_id,date, time,source,destination) VALUES('$customer_id','$date','$time','$source','$destination')";

if ($con->query($sql) == true) {
    echo "<script>alert('Booking Registered!')</script>";
    echo "<script>window.location.href = 'Booking.php'</script>";
} else {
    echo $con->error;
}
