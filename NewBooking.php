<?php
// ------------------------------------- Search Customer -------------------------------------
$customer_id= null;
$customer_name=null;
if(isset($_POST['search'])) {
    include "connect.php";
    $search_data = $_POST['search_data'];
    $sql = "SELECT * FROM customer WHERE customer_id='$search_data' OR contact_number='$search_data'";
    $result = $con->query($sql);
    if($result->num_rows>0) {
        $row = $result->fetch_assoc();
        $customer_id = $row['customer_id'];
        $customer_name = $row['customer_name'];
    }
    $con->close();
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
                <h2>New Booking</h2>
                <form class="form" action="" method="POST">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="customer_id_address"> Customer Id / Contact Number</label>
                                <input type="text" name="search_data" id="search_data">
                            </div>
                            <div>
                                <button type="submit" name="search">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="form" action="NewBookingScript.php" method="POST">
                    <div class="form-container">
                        <div class="left-column">
                            <div>
                                <label for="customer_id"> Customer Id</label>
                                <input type="text" name="customer_id" id="customer_id" value="<?= $customer_id?>" readonly>
                            </div>
                            <div>
                                <label for="name"> Name </label>
                                <input type="text" name="name" id="name" value="<?= $customer_name?>" readonly>
                            </div>
                            <div>
                                <label for="gender"> Gender</label>
                                <input type="text" name="gender" id="gender">
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
                                <label for="time"> Time</label>
                                <input type="time" name="time" id="time">
                            </div>
                            <div>
                                <label for="date"> Date</label>
                                <input type="date" name="date" id="date">
                            </div>
                            <div>
                               
                                <label for="source"> Source</label>
                                <input type="text" name="source" id="source" list="station">
                                <datalist id="station">
                                <?php
                                    include 'connect.php';
                                    $sql = "SELECT Station from Station";
                                    $result = $con->query($sql);
                                    while($row=$result->fetch_assoc())
                                    {
                                        echo "<option value=" .  $row['Station'] . ">";
                                    }
                                ?>
                                </datalist>
                            </div>
                            <div>
                                <label for="destination"> Destination</label>
                                <input type="text" name="destination" id="destination" list="station">
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