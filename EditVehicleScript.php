<?php
include 'connect.php';
$vehicle_id = $_POST['vehicle_id'];
if(isset($_POST['update'])){
$vehicle_registration_number = $_POST['vehicle_registration_number'];
$engine_number = $_POST['engine_number'];
$chassic_number = $_POST['chassic_number'];
$colour = $_POST['colour'];
$seating_capacity = $_POST['seating_capacity'];
$model_number = $_POST['model_number'];
$owner_name = $_POST['owner_name'];

$sql = "UPDATE vehicle SET registration_number='$vehicle_registration_number', engine_number='$engine_number', chassic_number='$chassic_number', colour='$colour', seating_capacity='$seating_capacity', model_number='$model_number', owner_name='$owner_name' WHERE vehicle_id='$vehicle_id'";

if ($con->query($sql) === true) {
    echo "<script>alert('Vehicle Updated!')</script>";
    echo "<script>window.location.href = 'EditVehicle.php'</script>";
} else {
    echo $con->error;
}
} else {
    $sql = "DELETE FROM vehicle WHERE vehicle_id='$vehicle_id'";
    if ($con->query($sql) == true){
    echo "<script>alert('Vehicle Deleted!')</script>";
    echo "<script>window.location.href = 'EditVehicle.php'</script>";
} else {
    echo $con->error;
}
}
        