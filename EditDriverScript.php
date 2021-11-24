<?php
include 'connect.php';

$driver_id = $_POST['driver_id'];
echo "<script>alert('$driver_id')</script>";
$driver_name = $_POST['driver_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$contact_number = $_POST['contact_number'];
$alternate_contact_number = $_POST['alternate_contact_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$id_proof_no = $_POST['id_proof_no'];
$upload_address_and_id_proof = $_POST['upload_address_and_id_proof'];

$sql = "UPDATE driver SET driver_name='$driver_name', gender='$gender', date_of_birth='$date_of_birth', contact_number='$contact_number', alternate_contact_number='$alternate_contact_number', email='$email', address='$address', id_proof_no='$id_proof_no', upload_address_and_id_proof='$upload_address_and_id_proof' WHERE driver_id='$driver_id'";

if ($con->query($sql) === true) {
    echo "<script>alert('Driver Updated!')</script>";
    echo "<script>window.location.href = 'EditDriver.php'</script>";
} else {
    echo $con->error;
}
        