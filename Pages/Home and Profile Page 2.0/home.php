<?php
                                //ACCOUNT NAME HEADER
	error_reporting(0);
	session_start();

    include 'header_data.php';

    $admin_access =  $_SESSION['admin_access'];

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
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
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="home.php">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span style="color: rgb(22,168,231);">E-LIBRARY</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="home.php"><i class="fas fa-home" style="color: rgb(37,20,20);"></i><span style="color: rgb(28,10,10);">Home</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-user" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Profile</span></a></li>

                    <?php if($admin_access=='on'){
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/admin_list.php"><i class="fas fa-user-circle" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Admin Management</span></a></li>';
                    }?>

                    <?php if(substr($user_name,0,5)=='ADMIN'){

                        echo' <li class="nav-item" role="presentation"><a class="nav-link" href="../Management/student_list.php"><i class="fas fa-users" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Student Management</span></a></li>';
                        echo'  <li class="nav-item" role="presentation"><a class="nav-link" href="../Management/collection_list.php"><i class="fas fa-book" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Collections Management</span></a></li>';
                    }?>

                    <li class="nav-item" role="presentation"><a class="nav-link" href="browse.php" style="color: rgb(13,0,3);"><i class="fas fa-table" style="color: rgb(13,1,1);"></i><span>Browse</span></a>
                    <a class="nav-link" href="browse.php" style="color: rgb(13,0,3);"><i class="fab fa-slack-hash" style="color: rgb(13,1,1);"></i><span>Contact</span></a>
                    <a class="nav-link" href="mvg.php" style="color: rgb(13,0,3);"><i class="far fa-list-alt" style="color: rgb(13,1,1);"></i><span>Mission, Vision, Goals</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="register.html"></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="background-color: rgb(78,115,223);"></button></div>
            </div>
        </nav>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="background-color: #fdfcf9;filter: blur(0px);">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background-image: url(&quot;assets/img/orange.png&quot;);margin: 0px;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><img style="width: 73px;height: 67px;margin: 22px;" src="assets/img/coe%20logo.png">

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
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-family: Nunito, sans-serif;"><?php echo $last_name; ?>, <?php echo  $first_name; ?></span><img class="border rounded-circle img-profile"  src="<?php echo "../../profileimages/" . $profile ?>"></a>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                                    <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container"><img src="assets/img/cea.jpg" style="width: 1063px;height: 534px;" height="1080" width="1980"></div>
            <div class="container-fluid">
                <div class="text-left d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0" style="margin: 21px;">News and Announcements</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4"><img src="assets/img/specialization.jpg" style="font-size: 31px;margin: 71px;padding: -11px; height:220px; width:230px; border-radius:75px;"></div>
                    <div class="col">
                        <div class="p-5" style="margin: 14px;">
                            <h2 class="display-4" style="font-size: 26px;">Specialization Tracks</h2>
                            <p>Good Evening CPE Students!!! As they continue learning under their chosen specialization track, here are the class lists of the reshuffled sections for your persual <a href="https://www.facebook.com/PUPCpEOfficial/">Click here!!!</a>. your new section is already tagged in the SIS account and your elective subjects will depend on your track. To see the available subjects
                            offering and electives: <a href="https://www.facebook.com/100420361703582/posts/490121199400161/">Click here!!!</a>. Thank you and have a nice evening CPE!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4"><img src="assets/img/cpe%20logo.png" style="font-size: 31px;margin: 73px;padding: -14px;"></div>
                    <div class="col">
                        <div class="p-5">
                            <h2 class="display-4" style="font-size: 26px;">Schedule for Enrollment</h2>
                            <p>Tomorrow, March 7, is the start of our Online Registration for Second Semester ( AY 2021-2022). Here is the schedule per year level and the subjects that you will take in the upcoming semester. <br>𝗦𝗰𝗵𝗲𝗱𝘂𝗹𝗲 𝗼𝗳 𝗢𝗻𝗹𝗶𝗻𝗲 𝗥𝗲𝗴𝗶𝘀𝘁𝗿𝗮𝘁𝗶𝗼𝗻
<br>March 7 & 16 - First Year
<br>March 8 & 17 - Second Year
<br>March 9 & 18 - Third Year
<br>March 10 & 19 - Fourth and Fifth Years
<br>Thank you CpE! For any concerns, you may contact our official Facebook page <a href="https://www.facebook.com/PUPCpEOfficial/">Click here!!!</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div class="footer-basic" style="color: rgb(21,131,241);background-color: rgb(4,2,2);">
        <footer>
        <div class="social"><a href="https://www.pup.edu.ph/ce/BSCOE"><i class="fa fa-globe" style="color: rgb(164,10,237);"></i></a>
            <a href="https://twitter.com/ThePUPOfficial"><i class="icon ion-social-twitter" style="color: rgb(5,127,249);"></i></a>
            <a href="https://www.facebook.com/PUPCpEOfficial/"><i class="icon ion-social-facebook" style="color: rgb(2,124,247);"></i></a></div>
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
