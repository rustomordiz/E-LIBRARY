<?php  
	error_reporting(0);
	session_start();

    include 'header_data.php';

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark navbar-expand float-right align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-image: url(&quot;none&quot;);background-color: rgb(239,210,106);">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span style="color: rgb(22,168,231);">E-LIBRARY</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home.php"><i class="fas fa-home" style="color: rgb(37,20,20);"></i><span style="color: rgb(28,10,10);">Home</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="profile.php"><i class="fas fa-user" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Profile</span></a></li>

                    <?php if(substr($user_name,0,5)=='admin'){

                    echo' <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-users" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Student Management</span></a></li>';
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-book" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Collections Management</span></a></li>';
                    
                    }?>

                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.html" style="color: rgb(13,0,3);"><i class="fas fa-table" style="color: rgb(13,1,1);"></i><span>Browse</span></a><a class="nav-link" href="contacts.php" style="color: rgb(13,0,3);"><i class="fab fa-slack-hash" style="color: rgb(13,1,1);"></i><span>Contact</span></a>
                        <a
                            class="nav-link" href="mvg.php" style="color: rgb(13,0,3);"><i class="far fa-list-alt" style="color: rgb(13,1,1);"></i><span>Mission, Vision, Goals</span></a>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="register.html"></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="background-color: rgb(78,115,223);"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background-image: url(&quot;assets/img/orange.png&quot;);margin: 0px;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><img style="width: 73px;height: 67px;margin: 22px;"  src="assets/img/coe%20logo.png">
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation"></li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
     
                                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-family: Nunito, sans-serif;"><?php echo $_SESSION['lname']; ?>, <?php echo $_SESSION['fname']; ?></span><img class="border rounded-circle img-profile" src="<?php echo "../../profileimages/" . $profile ?>"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Profile</h3>
                <div class="row mb-3">
                    <div class="col-lg-4" style="height: 298px;">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="<?php echo "../../profileimages/" . $profile ?>" width="160" height="160">
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" style="width: 632px;">
                                <div class="card shadow mb-3" style="width: 1050px;">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Account Information</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" value="<?php echo $username?>"  readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Password</strong></label><input class="form-control" type="text" value="<?php echo $password?>"  readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><input class="btn btn-primary btn-sm" type="submit" name="btnpassword" value="Change Password"></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card shadow" style="width: 1050px;">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">User Information</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group"><label for="address"><strong>Email</strong></label><input class="form-control" type="text" value="<?php echo $email?>"  readonly></div>
                                            <div class="form-group"><label for="address"><strong>Contact Number</strong></label><input class="form-control" type="text" value="<?php echo $contact?>"  readonly></div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="city"><strong>First Name</strong></label><input class="form-control" type="text" value="<?php echo $first_name?>"  readonly></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="country"><strong>Last Name</strong></label><input class="form-control" type="text" value="<?php echo $last_name?>"  readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Update User Information</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div class="footer-basic" style="color: rgb(21,131,241);background-color: rgb(4,2,2);">
        <footer>
            <div class="social"><a href="#" style="color: rgb(141,7,203);"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <p class="copyright">This E-Library is exclusive only to BSCpE Students of Polytechnic University of the Philippines</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>