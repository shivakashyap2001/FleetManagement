<?php

function check_vehicle_registration($vehicle_registration_number)
{
    include('connect.php');
    $sql = "SELECT registration_number FROM vehicle WHERE registration_number='$vehicle_registration_number'";
    $result = $con->query($sql);
    $con->close();
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}