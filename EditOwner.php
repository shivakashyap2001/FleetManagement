<?php
    $owner_id = null;
    $owner_name = null;
    $owner_type = null;
    $gender = null;
    $date_of_birth = null;
    $contact_number = null;
    $alternate_contact_number = null;
    $email = null;
    $address = null;
    $id_proof_no = null;
    $account_number = null;
    $account_holder_name = null;
    $ifsc_code = null;
    $upi_id = null;
    $upload_address_and_id_proof = null;

    if(isset($_POST['search'])) {
        $owner_id = $_POST['owner_id_search'];
        include 'connect.php';
        $sql = "SELECT * FROM owner WHERE owner_id=$owner_id";
        $result = $con->query($sql);
        if($result->num_rows>0) {
            $row = $result->fetch_assoc();
            $owner_name = $row['owner_name'];
            $owner_type = $row['owner_type'];
            $gender = $row['gender'];
            $date_of_birth = $row['date_of_birth'];
            $contact_number = $row['contact_number'];
            $alternate_contact_number = $row['alternate_contact_number'];
            $email = $row['email'];
            $address = $row['address'];
            $id_proof_no = $row['id_proof_no'];
            $account_number = $row['account_number'];
            $account_holder_name = $row['account_holder_name'];
            $ifsc_code = $row['ifsc_code'];
            $upi_id = $row['upi_id'];
            $upload_address_and_id_proof = $row['upload_address_and_id_proof'];

            
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
            <h2>Edit Owner</h2>
                <form action="" method="post" class="form">
                <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="owner_id"> Owner Id</label>
                                    <input type="text" name="owner_id_search" id="owner_id_search" value="<?= $owner_id?>">
                                    <button name="search">Search</button>
                            </div>
                        </div>
                </div>
                </form>
                <form class="form" action="EditOwnerScript.php" method="POST">
                    <input type="hidden" name="owner_id" value="<?= $owner_id?>">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="owner_name"> Owner Name</label>
                                    <input type="text" name="owner_name" id="owner_id" value="<?= $owner_name?>">
                            </div>
                            <div>
                                <label for="owner_type"> Owner Type</label>
                                <input type="text" name="owner_type" id="owner_type" value="<?= $owner_type?>">
                            </div>
                            <div>
                                <label for="gender"> Gender</label>
                                <input type="text" name="gender" id="gender" value="<?= $gender?>">
                            </div>
                            <div>
                                <label for="date_of_birth"> Date Of Birth</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" value="<?= $date_of_birth?>">
                            </div>
                            <div>
                                <label for="contact_number"> Contact Number</label>
                                <input type="text" name="contact_number" id="contact_number" value="<?= $contact_number?>">
                            </div>
                            <div>
                                <label for="alternate_contact_number"> Alternate Contact Number</label>
                                <input type="text" name="alternate_contact_number" id="alternate_contact_number" value="<?= $alternate_contact_number?>">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="<?= $email?>">
                            </div>
                            <div>
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" value="<?= $address?>">
                            </div>
                            <div>
                                <label for="id_proof_no">Id Proof No</label>
                                <input type="text" name="id_proof_no" id="id_proof_no" value="<?= $id_proof_no?>">
                            </div>
                        </div>
                        <div class="right-column">
                            <div>
                                <label for="account_number">Account Number</label>
                                <input type="text" name="account_number" id="account_number" value="<?= $account_number?>">
                            </div>
                            <div>
                                <label for="account_holder_name">Account Holder Name</label>
                                <input type="text" name="account_holder_name" id="account_holder_name" value="<?= $account_holder_name?>">
                            </div>
                            <div>
                                <label for="ifsc_code">Ifsc Code</label>
                                <input type="text" name="ifsc_code" id="ifsc_code" value="<?= $ifsc_code?>">
                            </div>

                            <div>
                                <label for="upi_id">Upi Id</label>
                                <input type="text" name="upi_id" id="upi_id" value="<?= $upi_id?>">
                            </div>
                            <div>
                                <label for="upload_address_and_id_proof">Upload Address And Id Proof</label>
                                <input type="text" name="upload_address_and_id_proof" id="upload_address_and_id_proof" value="<?= $upload_address_and_id_proof?>">
                            </div>
                        </div>

                    </div>
                    <div>
                        <button>Submit</button>
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