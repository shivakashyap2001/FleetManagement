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
            <h2>New Owner</h2>
                <form class="form" action="NewVehicleScript.php" method="POST">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="owner_name"> Owner Name</labe.l>
                                    <input type="text" name="owner-name" id="Owner Name">
                            </div>
                            <div>
                                <label for="company_name"> Company Name</label>
                                <input type="text" name="Company Name" id="company_name">
                            </div>
                            <div>
                                <label for="type_of_vehicle"> Type Of Vehicle</label>
                                <input type="text" name="type of vehicle" id="Type_Of_Vehicle">
                            </div>
                            <div>
                                <label for="industry"> Industry</label>
                                <input type="text" name="industry" id="Industry">
                            </div>
                            <div>
                                <label for="founded"> Founded</label>
                                <input type="text" name="founded" id="Founded">
                            </div>
                            <div>
                                <label for="founder"> Founder</label>
                                <input type="text" name="Founder" id="founder">
                            </div>
                            <div>
                                <label for="headquarter">Headquarter</label>
                                <input type="text" name="Headquarters" id="headquarter">
                            </div>
                            <div>
                                <label for="field1">Field 1</label>
                                <input type="text" name="" id="field1">
                            </div>
                            <div>
                                <label for="field1">Field 1</label>
                                <input type="text" name="" id="field1">
                            </div>
                        </div>
                        <div class="right-column">
                            <div>
                                <label for="field2">Field 2</label>
                                <input type="text" name="" id="field2">
                            </div>
                            <div>
                                <label for="field1">Field 1</label>
                                <input type="text" name="" id="field1">
                            </div>
                            <div>
                                <label for="field1">Field 1</label>
                                <input type="text" name="" id="field1">
                            </div>
                            <div>
                                <label for="field1">Field 1</label>
                                <input type="text" name="" id="field1">
                            </div>
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
    </div>`
</body>

</html>