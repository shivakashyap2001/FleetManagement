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
                <form class="form" action="NewOwnerScript.php" method="POST">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="owner_name"> Owner Name</label>
                                    <input type="text" name="owner_name" id="Owner">
                            </div>
                            <div>
                                <label for="owner_type"> Owner Type</label>
                                <input type="text" name="owner_type" id="company_name">
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
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address">
                            </div>
                            <div>
                                <label for="id_proof_no">Id Proof No</label>
                                <input type="text" name="id_proof_no" id="id_proof_no">
                            </div>
                        </div>
                        <div class="right-column">
                            <div>
                                <label for="account_number">Account Number</label>
                                <input type="text" name="account_number" id="account_number">
                            </div>
                            <div>
                                <label for="account_holder_name">Account Holder Name</label>
                                <input type="text" name="account_holder_name" id="account_holder_name">
                            </div>
                            <div>
                                <label for="ifsc_code">Ifsc Code</label>
                                <input type="text" name="ifsc_code" id="ifsc_code">
                            </div>

                            <div>
                                <label for="upi_id">Upi Id</label>
                                <input type="text" name="upi_id" id="upi_id">
                            </div>
                            <div>
                                <label for="upload_address_and_id_proof">Upload Address And Id Proof</label>
                                <input type="text" name="upload_address_and_id_proof" id="upload_address_and_id_proof">
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