<!doctype html>
<html lang="en">
  <head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        .hungry{
          font-family: 'Pacifico', cursive;
          color: #FF5E5E;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Login Hungry</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="driverlog.php">
      <center><h1 class="hungry">Hungry</h1></center>
      <br>
      <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>
      <label class="sr-only">Username</label>
      <input type="text" id="inputText" name="drivename" class="form-control" placeholder="Username" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="drivermail" class="form-control" placeholder="Email address" required >
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name = "submit" type="submit">Log in</button>
      <br>
      <a href="dsign.php">Signup</a>
    </form>
  </body>
</html>
