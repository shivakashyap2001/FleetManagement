<?php

include('common.php');

// --------- Fetching form data
$vehicle_registration_number = $_POST['vehicle_registration_number'];
$engine_number = $_POST['engine_number'];

if (check_vehicle_registration('BR06AC4567') == true)
    echo 'Vehicle already registered!';
else {
    include('connect.php');
    $sql = "INSERT INTO vehicle(registration_number) VALUES('$vehicle_registration_number')";
    if ($con->query($sql) == true)
        echo "Vehicle Registered!";
    else
        echo $con->error;

    $con->close();
}
