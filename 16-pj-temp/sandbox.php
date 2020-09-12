<?php
    if(isset($_POST['submit'])) {

        session_start();

        $_SESSION['name'] = $_POST['name'];

        // echo $_SESSION['name'];

        header('Location: index.php');

    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" />
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>