<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="aseets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="aseets/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
    <link href="aseets/css/bootstrap-reboot.css" rel="stylesheet" type="text/css">
    <script src="aseets/js/bootstrap.min.js" rel="script" type="application/javascript"></script>
    <script src="aseets/js/popper.js" rel="script" type="application/javascript"></script>
    <script src="aseets/js/tooltip.js" rel="script" type="application/javascript"></script>
    <title>Index</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <ul class="navbar-brand pull-right">
                    <a href="index.php" class="navbar-brand">Home</a>
                </ul>
            </div>
            <ul class="nav navbar-nav pull-right">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Logout</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </nav>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>User Login</h3>
            <div class="panel-body">
                <div style="max-width: 400px;margin: 0 auto">
                    <form action="login_action.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" required="">
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="form-control" type="email" name="username" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" required="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required="">
                        </div>
                        <div class="form-group">
                            <label>Retype Password</label>
                            <input class="form-control" type="password" name="retyp_password" required="">
                        </div>
                        <button class="btn btn-success pull-right">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="well">
        <h3>Online Shop.com</h3>
        <span class="pull-right">Online shop.com</span>
    </div>
</div>
</body>
</html>