<?php

    session_start();
    error_reporting(0);

    $admin_access =  $_SESSION['admin_access'];

    include 'header_data.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mission, Vission, Goals</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home.php"><i class="fas fa-home" style="color: rgb(37,20,20);"></i><span style="color: rgb(28,10,10);">Home</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-user" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Profile</span></a></li>

                    <?php if($admin_access=='on'){
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/admin_list.php"><i class="fas fa-user-circle" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Admin Management</span></a></li>';
                    }?>

                    <?php if(substr($user_name,0,5)=='ADMIN'){

                    echo' <li class="nav-item" role="presentation"><a class="nav-link" href="../Management/student_list.php"><i class="fas fa-users" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Student Management</span></a></li>';
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link" href="../Management/collection_list.php"><i class="fas fa-book" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Collections Management</span></a></li>';

                    }?>

                    <li class="nav-item" role="presentation"><a class="nav-link" href="browse.php" style="color: rgb(13,0,3);"><i class="fas fa-table" style="color: rgb(13,1,1);"></i><span>Browse</span></a><a class="nav-link" href="contacts.php" style="color: rgb(13,0,3);"><i class="fab fa-slack-hash" style="color: rgb(13,1,1);"></i><span>Contact</span></a>
                        <a
                            class="nav-link active" href="mvg.php" style="color: rgb(13,0,3);"><i class="far fa-list-alt" style="color: rgb(13,1,1);"></i><span>Mission, Vision, Goals</span></a>
                    </li>
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
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-family: Nunito, sans-serif;"><?php echo $last_name; ?>, <?php echo  $first_name; ?></span><img class="border rounded-circle img-profile" src="<?php echo "../../profileimages/" . $profile ?>"></a>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                                    <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container"><img src="assets/img/cea2.jpg" style="width: 996px;height: 465px;" height="1080" width="1980"></div>
            <div class="container-fluid">
                <div class="text-left d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0" style="margin: 21px;">Mission, Vision, and Objectives</h3>
                </div>
            </div>
            <div class="col-md-10 col-lg-8">
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title" style="color: rgb(217,29,29);"> Mission</h2>
                    </a>
                </div>
                <p>Reflective of the great emphasis being given by the
                  country's leadership aimed at providing appropriate attention
                  to the alleviation of the plight of the poor, the development of
                  the citizens, and of the national economy to become globally
                  competitive, the University shall commit its academic
                  resources and manpower to achieve its goals through:
                  <br>
                  1. Provision of undergraduate and graduate education which
                  meet international standards of quality and excellence
                  <br>
                  2. Generation and transmission of knowledge in the broad
                  range of disciplines relevant and responsive to the
                  dynamically changing domestic and international
                  environment;
                  <br>
                  3. Provision of more equitable access to higher education
                  opportunities to deserving and qualified Filipinos; and
                  <br>
                  4. Optimization, through efficiency and effectiveness, of
                  social, institutional, and individual returns and benefits
                  derived from the utilization of higher education resources.
                </p>
                <hr>
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title" style="color: rgb(217,29,29);"> Vision</h2>
                    </a>
                </div>
                <p>Clearing the paths while laying new foundations
                  to transform the Polytechnic University of the
                  Philippines into an epistemic community</p>
                <hr>
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title" style="color: rgb(217,29,29);">CpE Objectives</h2>
                    </a>
                </div>
                <p>1. Strengthen the Computer Engineering program
                  consistent with global trends;
                  <br>
                  2. Develop critical thinking and communication skills of
                  students, giving emphasis to research and extension
                  services;
                  <br>
                  3. Create a conducive teaching and learning atmosphere
                  with emphasis to faculty and students’ growth and
                  academic freedom;
                  <br>
                  4. Enhance the competencies of students to evaluate, assess, design
                  and operate safe, effective, economically-efficient and environmental
                  friendly computer-based system;
                  <br>
                  5. Establish network with educational institution industry, GO’s and
                  NGO’s, local and international which could serve as:<br>
                  a) funding sources and/or partners of researches;<br>
                  b) sources of new techniques;<br>
                  c) centers for faculty and student exchange program and On the
                  Job Training, and;<br>
                  d) grantees of scholarship/additional facilities.
                  6. Continuously conduct action researches on the needs of laboratory and other facilities that could be locally produce or innovated using
                  local materials and adapted technology;<br>
                  7. Equip graduates with appropriate knowledge and technical skills,
                  imbued with desirable work attitude and moral values through
                  enhanced teaching/learning process by using multi-media facilities on top of traditional methods;<br>
                  8. Develop faculty as competent mentors and quality researchers,
                  through advanced study and other facets of continuing professional
                  education;<br>
                </p>
                <div class="post-preview"><a href="#"></a></div>
                <div class="clearfix"></div>
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
