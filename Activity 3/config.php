<?php
$host='localhost';
$username='root';
$password='';
$db='user-reg';

$strconn = mysqli_connect($host, $username, $password, $db);

if($strconn -> connect_error){
die("Connection Failed: " . $strconn -> connect_error);
}

if (isset($_POST["submit"])) {
    $usr = $_POST['usn'];
    $pass = $_POST['pw'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];

    mysqli_query($strconn, "INSERT INTO `registered`(`usn`, `pass`, `email`, `fname`, `lname`, `gender`) 
    VALUES ('$usr','$pass','$email','$fname','$lname','$gender')");
        header("location:index.php?notif=success");
}


// $sql = ("INSERT INTO `registered`(`usn`, `pass`, `email`, `fname`, `lname`, `gender`) 
//         VALUES ('$usr','$pass','$email','$fname','$lname','$gender')");

//     if ($strconn->query($sql) === TRUE) {
//         header('location:index.php');
//     }else {
//         echo "Error: ".$sql."<br>".$connect_error;
//     }
//     $strconn->close();

// }else {
//     header('location:User-Registration.php');
// }

// $sql = "INSERT INTO registered(usn, pass, email, fname, lname, gender) 
//         VALUES ('".$_POST['usn']."','".$_POST['pw']."','".$_POST['email']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['gender']."')";

//     if ($strconn->query($sql) === TRUE) {
//         echo "
//         <script type='text/javascript'>
//         alert('Registration Successfully!');
//         </script>
//         ";
//     }else {
//         echo "
//         <script type='text/javascript'>
//         alert('Error: ".$sql."<br>".$strconn->error."');
//         </script>
//         ";
//     }
//     $strconn->close();
// }
?>