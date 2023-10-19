<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
<link rel="stylesheet" href="../Getting_Started/reg.style.css">
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #container{
        background-color: yellow;
        margin-top: 30px;
        margin-bottom: 30px;
        width: 30%;
        height: 100%;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
        border-radius: 30px;
    }
</style>
<body>
    <form id="container" action="config.php" method="POST">
    
    <div class="title-container">
        <h1>Registration Form</h1>
    </div>
        <div class="top-container">
            <label for=""><b>Username</b></label>
                <input type="text" name="usn" placeholder="Username">
            <label for=""><b>Password</b></label>
                <input type="password" name="pw" placeholder="Password">
            <label for=""><b>Email</b></label>
                <input type="text" name="email" placeholder="Email">
        </div>
        <div class="middle-container">
            
        <h2>Personal Information</h2>

            <label for=""><b>First Name</b></label>
                <input type="text" name="fname" placeholder="First Name">
            <label for=""><b>Last Name</b></label>
                <input type="text" name="lname" placeholder="Last Name">
        </div>
        <div class="bottom-container">
        <h3>Gender</h3>

        <div class="grid-container">
            <label for=""><b>Male</b></label>
                <input type="radio" name="gender" value="Male">
            <label for=""><b>Female</b></label>
                <input type="radio" name="gender" value="Female">
            <label for=""><b>Others</b></label>
                <input type="radio" name="gender" value="Others">
        </div>
        </div>
        <p>By creating this account, You're Gay!</p>
            <button type="submit" class="registerbtn" name="submit"><b>Register</b></button>
    </form>
</body>
</html>