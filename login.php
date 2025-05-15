<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Your Account</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" action="login.php" method="post">
    <a href="index.php"><img class="mb-4" src="images/logo/WPHSlogo.png" width="190" ></a>
    <h3 class="h3 mb-3 font-weight-normal">Login Your Account</h3>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" id="inputEmail" name="input_email" class="form-control" placeholder="Email address" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="input_password" class="form-control" placeholder="Password" required>

    <div class="checkbox mb-1">
        <label>
            <input type="checkbox" value="remember-me" name="remember"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-success btn-block" type="submit" name="login">Login</button>
</form>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $('.your-checkbox').prop('indeterminate', true);
</script>
</body>
</html>
