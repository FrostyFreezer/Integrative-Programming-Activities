<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=D, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <title>Dashboard Page</title>

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
    <a href="{{route('Register')}}">Register Page</a><br>
    <a href="{{route('Login')}}">Login Page</a><br><br><br>
    <p class="display-1">DASHBOARD</p>
  </div>
</body>
</html>