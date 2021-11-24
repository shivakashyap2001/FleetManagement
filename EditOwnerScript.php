<?php
include 'connect.php';

$owner_id = $_POST['owner_id'];
$owner_name = $_POST['owner_name'];
$owner_type = $_POST['owner_type'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$contact_number = $_POST['contact_number'];
$alternate_contact_number = $_POST['alternate_contact_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$id_proof_no = $_POST['id_proof_no'];
$account_number = $_POST['account_number'];
$account_holder_name = $_POST['account_holder_name'];
$ifsc_code = $_POST['ifsc_code'];
$upi_id = $_POST['upi_id'];
$upload_address_and_id_proof = $_POST['upload_address_and_id_proof'];

$sql = "UPDATE owner SET owner_name='$owner_name', owner_type='$owner_type', gender='$gender', date_of_birth='$date_of_birth', contact_number='$contact_number', alternate_contact_number='$alternate_contact_number', email='$email', address='$address', id_proof_no='$id_proof_no', account_number='$account_number', account_holder_name='$account_holder_name',upi_id='$upi_id', upload_address_and_id_proof='$upload_address_and_id_proof' WHERE owner_id='$owner_id'";

if ($con->query($sql) === true) {
    echo "<script>alert('Owner Updated!')</script>";
    echo "<script>window.location.href = 'EditOwner.php'</script>";
} else {
    echo $con->error;
}
        