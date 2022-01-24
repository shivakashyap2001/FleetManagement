<?php
include 'connect.php';

$customer_id = $_POST['customer_id'];
echo "<script>alert('$customer_id')</script>";
$customer_name = $_POST['customer_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$contact_number = $_POST['contact_number'];
$alternate_contact_number = $_POST['alternate_contact_number'];
$email = $_POST['email'];

$sql = "UPDATE customer SET customer_name='$customer_name', gender='$gender', date_of_birth='$date_of_birth', contact_number='$contact_number', alternate_contact_number='$alternate_contact_number', email='$email' WHERE customer_id='$customer_id'";

if ($con->query($sql) === true) {
    echo "<script>alert('Customer Updated!')</script>";
    echo "<script>window.location.href = 'EditCustomer.php'</script>";
} else {
    echo $con->error;
}
        