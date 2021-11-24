<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle List</title>
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
                <h2>Vehicle List</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Vehicle Id</th>
                            <th>Registration Number</th>
                            <th>Engine Number</th>
                            <th>Chassis Number</th>
                            <th>Colour</th>
                            <th>Seating_Capacity</th>
                            <th>Model Number</th>
                            <th>Owner name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'connect.php';
                            $sql = "SELECT * FROM vehicle";
                            $result = $con->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $vehicle_id = $row['vehicle_id'];
                                $registration_number = $row['registration_number'];
                                $engine_number = $row['engine_number'];
                                $chassis_number = $row['chassic_number'];
                                $colour = $row['colour'];
                                $seating_capacity = $row['seating_capacity'];
                                $model_number = $row['model_number'];
                                $owner_name = $row['owner_name'];

                        ?>
                        <tr>
                            <td><?= $vehicle_id ?></td>
                            <td><?= $registration_number ?></td>
                            <td><?= $engine_number ?></td>
                            <td><?= $chassis_number ?></td>
                            <td><?=$colour ?></td>
                            <td><?=$seating_capacity ?></td>
                            <td><?=$model_number ?></td>
                            <td><?=$owner_name ?></td>
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