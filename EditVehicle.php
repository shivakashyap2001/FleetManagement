<?php
$vehicle_id = null;
$vehicle_registration_number = null;
$engine_number = null;
$chassic_number = null;
$colour = null;
$seating_capacity = null;
$model_number = null;
$owner_name = null;


if (isset($_POST['search'])) {
    $vehicle_id = $_POST['vehicle_id_search'];
    include 'connect.php';
    $sql = "SELECT * FROM vehicle WHERE vehicle_id=$vehicle_id";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $vehicle_registration_number = $row['registration_number'];
        $engine_number = $row['engine_number'];
        $chassic_number = $row['chassic_number'];
        $colour = $row['colour'];
        $seating_capacity = $row['seating_capacity'];
        $model_number = $row['model_number'];
        $owner_name = $row['owner_name'];
    } else {
        
        echo "<script>alert('No Records Found!')</script>";
    }
}
?>
<html>

<head>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div>
        <header>
            <?php include 'header.html' ?>
        </header>
        <hr>
        <main class="main-container">
            <aside class="aside">
                <?php include 'aside.html' ?>
            </aside>
            <div class="main-content">
                <h2>Edit Vehicle</h2>
                <form action="" method="post" class="form">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="vehicle_id"> Vehicle Id</label>
                                <input type="text" name="vehicle_id_search" id="vehicle_id_search" value="<?= $vehicle_id?>">
                                <button name="search">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form" action="EditVehicleScript.php" method="POST">
                    <input type="hidden" name="vehicle_id" value="<?= $vehicle_id ?>">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="vehicle_registration_number"> Vehicle Registration Number</label>
                                <input type="text" name="vehicle_registration_number" id="vehicle_registration_number" value="<?= $vehicle_registration_number ?>">
                            </div>
                            <div>
                                <label for="engine_number"> Engine Number</label>
                                <input type="text" name="engine_number" id="engine_number" value="<?= $engine_number ?>">
                            </div>
                            <div>
                                <label for="chassic_number"> Chassic Number</label>
                                <input type="text" name="chassic_number" id="chassic_number" value="<?= $chassic_number ?>">
                            </div>
                            <div>
                                <label for="colour"> Colourh</label>
                                <input type="text" name="colour" id="colour" value="<?= $colour?>">
                            </div>
                            <div>
                                <label for="seating_capacity"> Seating Capacity</label>
                                <input type="text" name="seating_capacity" id="seating_capacity" value="<?= $seating_capacity?>">
                            </div>
                            <div>
                                <label for="model_number"> Model Number</label>
                                <input type="text" name="model_number" id="model_number" value="<?= $model_number?>">
                            </div>
                            <div>
                                <label for="owner_name">Owner Name</label>
                                <input type="text" name="owner_name" id="owner_name" value="<?= $owner_name?>">
                            </div>
                        </div>

                    </div>
                    <div>
                        <button name="update">Update</button>
                        <button name="delete">Delete</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </main>
        <hr>
        <footer>
            <?php include 'footer.html' ?>
        </footer>
    </div>`
</body>

</html>