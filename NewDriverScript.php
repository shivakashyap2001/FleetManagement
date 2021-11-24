<?php
include 'connect.php';

$driver_name = $_POST['driver_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$contact_number = $_POST['contact_number'];
$alternate_contact_number =$_POST['alternate_contact_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$id_proof_no = $_POST['id_proof_no'];
$driving_licence_number = $_POST['driving_licence_number'];
$upload_address_and_id_proof = $_POST['upload_address_and_id_proof'];

$sql = "INSERT INTO driver(driver_name, gender, date_of_birth, contact_number,alternate_contact_number,email,address,id_proof_no,driving_licence_number,upload_address_and_id_proof ) VALUES('$driver_name','$gender','$date_of_birth','$contact_number','$alternate_contact_number','$email','$address','$id_proof_no','$driving_licence_number','$upload_address_and_id_proof')";

if ($con->query($sql) == true) {
    echo "<script>alert('Driver Registered!')</script>";
    echo "<script>window.location.href = 'NewDriver.php'</script>";
} else {
    echo $con->error;
}
