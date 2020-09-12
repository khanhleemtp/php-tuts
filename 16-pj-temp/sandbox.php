<!-- Forward page : -->
<!-- Session: save in server -->
<!-- Cookies: save in client => increase user experience 
    // Ex: save amount of products in ecommerce
-->

<?php
    if(isset($_POST['submit'])) {

        // set cookies

        setcookie('gender', $_POST['gender'], time() + 86400 );
        
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
        <select name="gender">
            <option>Male</option>
            <option>Female</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>