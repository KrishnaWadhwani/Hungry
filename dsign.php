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

    <title>Signup Hungry</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="insert3.php">
      <center><h1 class="hungry">Hungry</h1></center>
      <br>
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <label class="sr-only">Username</label>
      <input type="text" id="inputText" name="drivename" class="form-control" placeholder="Username" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="drivermail" class="form-control" placeholder="Email address" required >
      <label for="inputcontact" class="sr-only">Contact No.</label>
      <input type="number" id="inputEmail" name="drivercno" class="form-control" placeholder="Contact Number" required >
      <label for="inputcontact" class="sr-only">Pincode</label>
      <input type="number" id="inputNumber" name="pincode" class="form-control" placeholder="Your Pincode" required>
      <label for="inputcontact" class="sr-only">Address</label>
      <input type="text" id="inputAddress" name="driveraddr" class="form-control" placeholder="Your Address" required>
      <label for="inputcontact" class="sr-only">Driver TPG</label>
      <input type="text" id="inputAddress" name="drivertpg" class="form-control" value="0" READONLY HIDDEN required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
    </form>
  </body>
</html>
