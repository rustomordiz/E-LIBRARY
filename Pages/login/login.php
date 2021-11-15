<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean" style="background-color: #f8c25e;margin: 0px;padding: 63px;">
        <form method="post" style="padding: 50px;opacity: 1;">
            <div class="illustration"><img src="assets/img/cpe%20logo.png">
                <h1 style="font-size: 33px;color: rgb(246,136,6);">E-LIBRARY</h1>
            </div>
            <div class="form-group"><input class="form-control" type="text" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(246,136,6);">Log In</button></div><a class="forgot" href="#">Forgot your username or password?</a></form>
    </div>
    <div class="footer-basic" style="background-color: rgb(10,8,5);height: 183px;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram" style="color: rgb(164,10,237);"></i></a><a href="#"><i class="icon ion-social-twitter" style="color: rgb(5,127,249);"></i></a><a href="#"><i class="icon ion-social-facebook" style="color: rgb(2,124,247);"></i></a></div>
            <ul
                class="list-inline">
                <li class="list-inline-item"><a href="#" style="color: rgb(241,244,246);">CpE Mission</a></li>
                <li class="list-inline-item"><a href="#" style="color: rgb(249,251,252);">CpE Vision</a></li>
                <li class="list-inline-item"><a href="#" style="color: rgb(252,253,253);">CpE Goals</a></li>
                <li class="list-inline-item"></li>
                <li class="list-inline-item"></li>
                </ul>
                <p class="copyright">This E-library is exclusive for BSCpE Students of Polytechnic University of the Philippines</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>


                    <!-------------------DATABASE OPERATION---------------------->

<?php
        $con= mysqli_connect('localhost','root','','studynihongo_nihongo');
        if (mysqli_connect_errno())
?>