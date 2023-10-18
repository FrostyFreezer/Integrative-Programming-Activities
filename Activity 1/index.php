<?php
include 'config.php';
error_reporting(1);
session_start();

if ($_SESSION['login']) {
    header("location:index.php");
}

$notif = $_GET['notif'];

if ($notif == "success") {
    ?>
    <script type="text/javascript">
        alert('Registration Successfully!');
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <button>Login</button>
    <a href="User-Registration.php"><button>Register</button></a>
</body>
</html>