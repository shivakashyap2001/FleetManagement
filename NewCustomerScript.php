<?php
include 'connect.php';

$customer_name = $_POST['customer_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$contact_number = $_POST['contact_number'];
$alternate_contact_number =$_POST['alternate_contact_number'];
$email = $_POST['email'];

$sql = "INSERT INTO customer(customer_name, gender, date_of_birth,contact_number,alternate_contact_number,email) VALUES('$customer_name','$gender','$date_of_birth','$contact_number','$alternate_contact_number','$email','$source','$destination')";

if ($con->query($sql) == true) {
    echo "<script>alert('Customer Registered!')</script>";
    echo "<script>window.location.href = 'NewCustomer.php'</script>";
} else {
    echo $con->error;
}
