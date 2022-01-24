<?php
$driver_id = null;
$driver_name = null;
$gender = null;
$date_of_birth = null;
$contact_number = null;
$alternate_contact_number = null;
$email = null;
$address = null;
$id_proof_no = null;
$upload_address_and_id_proof = null;

if (isset($_POST['search'])) {
    $driver_id = $_POST['driver_id_search'];
    include 'connect.php';
    $sql = "SELECT * FROM driver WHERE driver_id=$driver_id";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $driver_name = $row['driver_name'];
        $gender = $row['gender'];
        $date_of_birth = $row['date_of_birth'];
        $contact_number = $row['contact_number'];
        $alternate_contact_number = $row['alternate_contact_number'];
        $email = $row['email'];
        $address = $row['address'];
        $id_proof_no = $row['id_proof_no'];
        $upload_address_and_id_proof = $row['upload_address_and_id_proof'];
    } else {
        echo "<script>alert('No Records Found!')</script>";
    }
}
?>
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
                <h2>Edit Driver</h2>
                <form action="" method="post" class="form">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="driver_id"> Driver Id</label>
                                <input type="text" name="driver_id_search" id="driver_id_search" value="<?= $driver_id ?>">
                                <button name="search">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form" action="EditDriverScript.php" method="POST">
                    <input type="hidden" name="driver_id" value="<?= $driver_id ?>">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="driver_name"> Driver Name</label>
                                <input type="text" name="driver_name" id="driver_id" value="<?= $driver_name ?>">
                            </div>
                            <div>
                                <label for="gender"> Gender</label>
                                <input type="text" name="gender" id="gender" value="<?= $gender ?>">
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
                                <label for="upload_address_and_id_proof">Upload Address And Id Proof</label>
                                <input type="text" name="upload_address_and_id_proof" id="upload_address_and_id_proof">
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