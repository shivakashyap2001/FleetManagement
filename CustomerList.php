<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
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
                <h2>Customer List</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Customer Id</th>
                            <th>Customer Name</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Contact Number</th>
                            <th>Alternate Contact Number</th>
                            <th>Email</th>
                            <th>Pick Up Point</th>
                            <th>Drop Point</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM customer";
                        $result = $con->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $customer_id = $row['customer_id'];
                            $customer_name = $row['customer_name'];
                            $gender = $row['gender'];
                            $date_of_birth = $row['date_of_birth'];
                            $contact_number = $row['contact_number'];
                            $alternate_contact_number = $row['alternate_contact_number'];
                            $email = $row['email'];
                            //$pick_up_point = $row['pick_up_point'];
                           // $drop_point = $row['drop_point'];

                        ?>
                            <tr>
                                <td><?= $customer_id ?></td>
                                <td><?= $customer_name ?></td>
                                <td><?= $gender ?></td>
                                <td><?= $date_of_birth ?></td>
                                <td><?= $contact_number ?></td>
                                <td><?= $alternate_contact_number ?></td>
                                <td><?= $email ?></td>
                                
                                
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
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