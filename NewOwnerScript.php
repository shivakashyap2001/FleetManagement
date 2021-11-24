<?php
include 'connect.php';

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


$sql = "INSERT INTO owner(owner_name, owner_type, gender ,date_of_birth ,contact_number ,alternate_contact_number ,email, address ,id_proof_no ,account_number ,account_holder_name ,ifsc_code ,upi_id ,upload_address_and_id_proof) VALUES('$owner_name','$owner_type','$gender','$date_of_birth','$contact_number','$alternate_contact_number','$email','$address','$id_proof_no','$account_number','$account_holder_name','$ifsc_code','$upi_id','$upload_address_and_id_proof' )";

if ($con->query($sql) == true) {
    echo "Owner Registered!";
} else {
    $con->error;
}
        