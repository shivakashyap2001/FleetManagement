<html>

<head>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <h2>New Vehicle</h2>
                <form class="form" action="NewVehicleScript.php" method="POST">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="vehicle_registration_number">Vehicle Registration Number</label>
                                <input type="text" name="vehicle_registration_number" id="vehicle_registration_number">
                            </div>
                            <div>
                                <label for="engine_number">Engine Number</label>
                                <input type="text" name="engine_number" id="engine_number">
                            </div>
                            <div>
                                <label for="chassic_number">Chassic Number</label>
                                <input type="text" name="chassic_number" id="chassic_number">
                            </div>
                            <div>
                                <label for="colour">Colour</label>
                                <input type="text" name="colour" id="colour">
                            </div>
                            <div>
                                <label for="seating_capaity"> Seating capacity</label>
                                <input type="text" name="seating_capacity" id="seating_capacity">
                            </div>
                            <div>
                                <label for="model_number"> Model Number</label>
                                <input type="text" name="model_number" id="model_nummber">
                            </div>
                            <div>
                                <label for="owner_name">Owner Name</label>
                                <input type="text" name="owner_name" id="owner_name">
                            </div>

                        </div>
                        <div class="right-column">

                        </div>

                    </div>
                    <div>
                        <button>Submit</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </main>
        <hr>
        <footer>
            <?php include 'footer.html' ?>
        </footer>
    </div>
</body>

</html>