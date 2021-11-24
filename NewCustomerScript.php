<?php
include 'connect.php';

$customer_name = $_POST['customer_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$contact_number = $_POST['contact_number'];
$alternate_contact_number =$_POST['alternate_contact_number'];
$email = $_POST['email'];
$pick_up_point = $_POST['pick_up_point'];
$drop_point = $_POST['drop_point'];

$sql = "INSERT INTO customer(customer_name, gender, date_of_birth,contact_number,alternate_contact_number,email,pick_up_point,drop_point) VALUES('$customer_name','$gender','$date_of_birth','$contact_number','$alternate_contact_number','$email','$pick_up_point','$drop_point')";

if ($con->query($sql) == true) {
    echo "<script>alert('Customer Registered!')</script>";
    echo "<script>window.location.href = 'NewCustomer.php'</script>";
} else {
    echo $con->error;
}
