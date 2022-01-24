<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver List</title>
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
                <h2>Driver List</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Driver Id</th>
                            <th>Driver Name</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Contact Number</th>
                            <th>Alternate Contact Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Id Proof No</th>
                            <th>Driving Licence Number</th>
                            <th>Upload Address And Id Proof</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'connect.php';
                            $sql = "SELECT * FROM driver";
                            $result = $con->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $driver_id = $row['driver_id'];
                                $driver_name = $row['driver_name'];
                                $gender = $row['gender'];
                                $date_of_birth = $row['date_of_birth'];
                                $contact_number = $row['contact_number'];
                                $alternate_contact_number = $row['alternate_contact_number'];
                                $email = $row['email'];
                                $address = $row['address'];
                                $id_proof_no = $row['id_proof_no'];
                                $driving_licence_number = $row['driving_licence_number'];
                                $upload_address_and_id_proof = $row['upload_address_and_id_proof'];

                        ?>
                        <tr>
                            <td><?= $driver_id?></td>
                            <td><?= $driver_name?></td>
                            <td><?= $gender?></td>
                            <td><?= $date_of_birth?></td>
                            <td><?= $contact_number?></td>
                            <td><?= $alternate_contact_number?></td>
                            <td><?= $email?></td>
                            <td><?= $address?></td>
                            <td><?= $id_proof_no?></td>
                            <td><?= $driving_licence_number?></td>
                            <td><?= $upload_address_and_id_proof?></td>
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