<?php
$con = new mysqli('localhost', 'shiva', 'shiva', 'fleet_management');
if($con->connect_error) {
    die($con->error);
}
