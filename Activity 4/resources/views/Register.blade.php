<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <title>Register Page</title>

    <style>
        * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    },

    body{
      display: flex;
      justify-content: center;
      align-items: center;
    },

    #container{
      margin-top: 80px;
      margin-bottom: 80px;
      width: 50%;
      height: 100%;
      text-align: center;
      padding-left: 30px;
      padding-right: 30px;
      padding-bottom: 30px;
      border-radius: 30px;
    }
    </style>

</head>
<body>

<div class="container">
<form action="" method="POST">
    <p class="display-4">Registration</p>
    <div class="input-group mb-3">
        <div class="mb-3">
            <input class="form-control" name="" type="text" placeholder="Username">
        <div class="mb-3">
            <input class="form-control" name="" type="text" placeholder="Password">
        <div class="mb-3">
            <input class="form-control" name="" type="text" placeholder="Email Account">
        </div>
            <button type="submit" name="" class="btn btn-outline-warning">Sign Up</button>
        </div>
    </div>
</form>
</div>

    <p>Already have an Account? <a href="{{route('Login')}}">Login Here</a></p>
    <p>Back to  <a href="{{route('Dashboard')}}">Dashboard</a><p>
        
</body>
</html>