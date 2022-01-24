<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>
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
                <h2>Booking List</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Booking Id</th>
                            <th>Customer Name</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                            <th>Alternate Contact Number</th>
                            <th>Email</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Source</th>
                            <th>Destination</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM booking";
                        $result = $con->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $customer_id = $row['customer_id'];
                            $time = $row['time'];
                            $date = $row['date'];
                            $source = $row['source'];
                            $destination = $row['destination'];
                            $sql2 = "SELECT * FROM customer WHERE customer_id='$customer_id'";
                            $result2 = $con->query($sql2);
                            $row2 = $result2->fetch_assoc();

                            $customer_name = $row2['customer_name'];
                            $gender = $row2['gender'];
                            $contact_number = $row2['contact_number'];
                            $alternate_contact_number = $row2['alternate_contact_number'];
                            $email = $row2['email'];
                        ?>
                            <tr>
                                <td><?= $customer_id ?></td>
                                <td><?= $customer_name ?></td>
                                <td><?= $gender ?></td>
                                <td><?= $contact_number ?></td>
                                <td><?= $alternate_contact_number ?></td>
                                <td><?= $email ?></td>
                                <td><?= $time ?></td>
                                <td><?= $date ?></td>
                                <td><?= $source ?></td>
                                <td><?= $destination ?></td>
                    
                                
                                
                            </tr>
                        <?php
                        }
                        ?>
                    </body>
                </table>
            </div>
        </main>
        <hr>
        <footer>
            <?php include 'footer.html' ?>
        </footer>
    </div>
</body>

</html>