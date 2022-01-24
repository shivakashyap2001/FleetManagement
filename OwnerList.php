<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner List</title>
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
                <h2>Owner List</h2>
                <table>
                    <thead>
                        <tr>
                            <th>owner_id</th>
                            <th>Owner Name</th>
                            <th>Owner Type</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Contact Number</th>
                            <th>Alternate Conatct Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Id Proof No</th>
                            <th>Account Number</th>
                            <th>Account Holder Name</th>
                            <th>Ifsc Code</th>
                            <th>Upi Id </th>
                            <th>Upload Address AND iD Proof</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'connect.php';
                            $sql = "SELECT * FROM owner";
                            $result = $con->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $owner_id = $row['owner_id'];
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

                        ?>
                        <tr>
                            <td><?= $owner_id ?></td>
                            <td><?= $owner_name ?></td>
                            <td><?= $owner_type ?></td>
                            <td><?= $gender ?></td>
                            <td><?= $date_of_birth ?></td>
                            <td><?= $contact_number ?></td>
                            <td><?= $alternate_contact_number ?></td>
                            <td><?= $email ?></td>
                            <td><?= $address ?></td>
                            <td><?= $id_proof_no ?></td>
                            <td><?= $account_number ?></td>
                            <td><?= $account_holder_name ?></td>
                        
                            <td><?= $upi_id ?></td>
                            <td><?= $upload_address_and_id_proof ?></td>
                            
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