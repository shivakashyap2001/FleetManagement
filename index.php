<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate yourself</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <header>
        <?php
        include 'header.html';
        include 'navigation.php';
        ?>
    </header>
    <main>
        <form action="Authenticate.php" method="post" class="form">
            <input type="text" name="user_id" id="user_id" placeholder="User Id">
            <input type="password" name="password" id="password" placeholder="Password">
            <button>Login</button>
        </form>
    </main>
    <footer>

    </footer>
    
</body>

</html>