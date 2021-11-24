<?php
$customer_id = null;
$customer_name = null;
$gender = null;
$date_of_birth = null;
$contact_number = null;
$alternate_contact_number = null;
$email = null;
$pick_up_point = null;
$drop_point = null;

if (isset($_POST['search'])) {
    $customer_id = $_POST['customer_id_search'];
    include 'connect.php';
    $sql = "SELECT * FROM customer WHERE customer_id=$customer_id";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $customer_name = $row['customer_name'];
        $gender = $row['gender'];
        $date_of_birth = $row['date_of_birth'];
        $contact_number = $row['contact_number'];
        $alternate_contact_number = $row['alternate_contact_number'];
        $email = $row['email'];
        $pick_up_point = $row['pick_up_point'];
        $drop_point = $row['drop_point'];
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
                <h2>Edit Customer</h2>
                <form action="" method="post" class="form">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="customer_id"> Customer Id</label>
                                <input type="text" name="customer_id_search" id="customer_id_search" value="<?= $customer_id ?>">
                                <button name="search">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form" action="EditCustomerScript.php" method="POST">
                    <input type="hidden" name="customer_id" value="<?= $customer_id ?>" value="<?= $customer_id ?>">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="customer_name"> Customer Name</label>
                                <input type="text" name="customer_name" id="customer_id" value="<?= $customer_name ?>">
                            </div>
                            <div>
                                <label for="gender"> Gender</label>
                                <input type="text" name="gender" id="gender" value="<?= $gender ?>">
                            </div>
                            <div>
                                <label for="date_of_birth"> Date Of Birth</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" value="<?= $date_of_birth ?>">
                            </div>
                            <div>
                                <label for="contact_number"> Contact Number</label>
                                <input type="text" name="contact_number" id="contact_number" value="<?= $contact_number ?>">
                            </div>
                            <div>
                                <label for="alternate_contact_number"> Alternate Contact Number</label>
                                <input type="text" name="alternate_contact_number" id="alternate_contact_number" value="<?= $alternate_contact_number ?>">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="<?= $email ?>">
                            </div>
                        </div>
                        <div class="right-column">
                            <div>
                                <label for="pick_up_point"> Pick Up Point"</label>
                                <input type="text" name="pick_up_point" id="pick_up_point" value="<?= $pick_up_point ?>">
                            </div>
                            <div>
                                <label for="drop_point"> Drop Point"</label>
                                <input type="text" name="drop_point" id="drop_point" value="<?= $drop_point ?>">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button>Submit</button>
                        <button name="delete">Delete</button>
                        <button type="reset">Reset</button>
                    </div>
            </div>

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