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
                <form class="form" action="NewCustomerScript.php" method="POST">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="customer_name"> customer Name</label>
                                <input type="text" name="customer_name" id="customer_name">
                            </div>
                            <div>
                                <label for="gender"> Gender</label>
                                <input type="text" name="gender" id="gender">
                            </div>
                            <div>
                                <label for="date_of_birth"> Date Of Birth</label>
                                <input type="date" name="date_of_birth" id="date_of_birth">
                            </div>
                            <div>
                                <label for="contact_number"> Contact Number</label>
                                <input type="text" name="contact_number" id="contact_number">
                            </div>
                            <div>
                                <label for="alternate_contact_number"> Alternate Contact Number</label>
                                <input type="text" name="alternate_contact_number" id="alternate_contact_number">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email">
                            </div>
                            <div>
                                <label for="pick_up_point">Pick Up Point</label>
                                <input type="text" name="pick_up_point" id="pick_up_point">
                            </div>
                            <div>
                                <label for="drop_point">Drop_point</label>
                                <input type="text" name="drop_point" id="drop_point">
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
    </div>`
</body>

</html>