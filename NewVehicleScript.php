<?php

include('common.php');

// --------- Fetching form data
$vehicle_registration_number = $_POST['vehicle_registration_number'];
$engine_number = $_POST['engine_number'];
$chassis_number = $_POST['chassic_number'];
$colour = $_POST['colour'];
$seating_capacity = $_POST['seating_capacity'];
$model_number = $_POST['model_number'];
$owner_name = $_POST['owner_name'];

if (check_vehicle_registration($vehicle_registration_number) == true){
echo "<script>alert('Vehicle Already Registered!')</script>";
echo "<script>window.location.href = 'NewVehicle.php'</script>";
}
else {
    include('connect.php');
    $sql = "INSERT INTO vehicle(registration_number,engine_number,chassic_number,colour,seating_capacity,model_number,owner_name) VALUES('$vehicle_registration_number','$engine_number','$chassis_number','$colour','$seating_capacity','$model_number','$owner_name')";
    if ($con->query($sql) == true) {
        echo "<script>alert('Vehicle Registered!')</script>";
        echo "<script>window.location.href = 'NewVehicle.php'</script>";
    }
    else
        echo $con->error;

    $con->close();
}
