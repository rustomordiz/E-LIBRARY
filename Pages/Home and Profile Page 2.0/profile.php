<?php  
	error_reporting(0);
	session_start();

    include 'header_data.php';

    $admin_access =  $_SESSION['admin_access'];
    
    //CHANGE PROFILE PHOTO
    if($_POST['profilechange']){
        $image = $_FILES['profileimg']['name'];     
        $imgerror = $_FILES['profileimg']['error'];       
        $fileType = pathinfo($image, PATHINFO_EXTENSION); 
      
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif','JPG','PNG','JPEG'); 
        if(in_array($fileType, $allowTypes)){
            $imagename = uniqid('profile-',true).'.'.$image;
            $target = "../../profileimages/".basename($imagename);
           
            $sqlstudent = "update students set profileimg ='$imagename' where student_id = '$user_name'  ";
            $sqladmin = "update admin set profileimg ='$imagename' where username = '$user_name'  ";
            if($conn->query($sqlstudent)){
                if (move_uploaded_file($_FILES['profileimg']['tmp_name'], $target)) {

                    header("location: profile.php"); 
            
                }else{
                    echo "Updating Profile Image Failed ";
                }            
            }
             if($conn->query($sqladmin)){

                if (move_uploaded_file($_FILES['profileimg']['tmp_name'], $target)) {

                    header("location: profile.php"); 
            
                }else{
                    echo "Updating Profile Image Failed ";
                }           
             }
            
        }
        else{
            echo "<div class='alert alert-danger' role='alert' style='margin-bottom:-8px;'>
            Only accepts jpg, png, jpeg and gif image files only 
            </div>";
        }
    }
    

    //CHANGE PASSWORD
    if($_POST['changepass']){

        $npw = $_POST['newpass'];
        $opw = $_POST['oldpass'];

      
        if($opw!=$password){
            echo "<div class='alert alert-danger' role='alert' style='margin-bottom:-8px;'>
                Your current password does not match!
            </div>";
       }else{

         if(strlen($npw)<7)
         {
            echo "<div class='alert alert-danger' role='alert'  style='margin-bottom:-8px;'>
                Password should be at least 8 characters!
            </div>";
         }else{
  
            //UPDATE Statement
            $sqlUpdatestudent = mysqli_query($conn,"update students set password = '$npw' where student_id = '$user_name' ");
            $sqlUpdateadmin = mysqli_query($conn,"update admin set password = '$npw' where username = '$user_name' ");

            if($sqlUpdatestudent){
                echo "<script>alert('You have successfully changed your password! ')</script>";
                header('Location: profile.php');
            }else{
                if($sqlUpdateadmin){
                    echo "<script>alert('You have successfully changed your password! ')</script>";
                    header('Location: profile.php');
                }else
                    echo "<script>alert('There was an error in changing your password')</script>";
                }
           }
         }
    }

    //UPDATE USER INFORMATION

     if($_POST['updateinfo']){
        $upfname = strtoupper($_POST['fname']);
        $uplname = strtoupper($_POST['lname']);
        $upemail = $_POST['mail'];
        $upcontact = $_POST['contact'];


        $sqlupdateprofilestudent = mysqli_query($conn,"update students set last_name = '$uplname', first_name = '$upfname', email = '$upemail', contact = '$upcontact' where student_id = '$user_name' ");
        $sqlupdateprofileadmin = mysqli_query($conn,"update admin set  last_name = '$uplname', first_name = '$upfname', email = '$upemail', contact = '$upcontact' where username = '$user_name' ");

        if($sqlupdateprofilestudent){
            echo "<script>alert('You have successfully updated your profile information! ')</script>";
            header('Location: profile.php');
        }else{
            if($sqlupdateprofileadmin){
                echo "<script>alert('You have successfully updated your profile information! ')</script>";
                header('Location: profile.php');
            }else{
                echo "<script>alert('There was an error in updating your profile information')</script>";
            }
        }
     }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Tabs-with-Arrows.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Image-Uploader.css">
    <link rel="stylesheet" href="assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Minimal-tabs-1.css">
    <link rel="stylesheet" href="assets/css/Minimal-tabs.css">
    <link rel="stylesheet" href="assets/css/MUSA_button-label-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_button-label.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/Pretty-Table-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Table.css">
    <link rel="stylesheet" href="assets/css/Right-Sidebar.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/tabs-Menu.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch-1-1.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch-1.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switches.css">
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="profile.php"><i class="fas fa-user" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Profile</span></a></li>

                    <?php if($admin_access=='on'){
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/admin_list.php"><i class="fas fa-user-circle" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Admin Management</span></a></li>';
                    }?>

                    <?php if(substr($user_name,0,5)=='ADMIN'){

                    echo' <li class="nav-item" role="presentation"><a class="nav-link" href="../Management/student_list.php"><i class="fas fa-users" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Student Management</span></a></li>';
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link" href="../Management/collection_list.php"><i class="fas fa-book" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Collections Management</span></a></li>';
                    
                    }?>

                    <li class="nav-item" role="presentation"><a class="nav-link" href="browse.php" style="color: rgb(13,0,3);"><i class="fas fa-table" style="color: rgb(13,1,1);"></i><span>Browse</span></a><a class="nav-link" href="contacts.php" style="color: rgb(13,0,3);"><i class="fab fa-slack-hash" style="color: rgb(13,1,1);"></i><span>Contact</span></a>
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
           
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Profile</h3>
                <div class="row mb-3">
                    <div class="col-lg-4" style="height: 298px;">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow" style="height: 292px;"><img class="rounded-circle mb-3 mt-4"  src="<?php echo "../../profileimages/" . $profile ?>" width="160" height="160">
                                <div class="mb-3"></div>
                                <div><a class="btn btn-primary btn-lg" role="button" data-toggle="modal" href="#myModal" style="width: 138px;height: 37px;font-size: 14px;"><strong>Change Photo</strong></a>
                                    <div class="modal fade" role="dialog" tabindex="-1"
                                        id="myModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #ffd580;font-size: 17px;height: 633px;margin-left: 0px;width: 498px;"><div class="bootstrap_img_upload">
<div class="container py-5">

    <header class="text-white text-center">
        <h5 class="display-4" style="color:black; font-size:50px;">Choose Photos</h5>
        <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" width="75" class="mb-4" align="center">
    </header>


    <div class="row py-6">
        <div class="col-lg-6 mx-auto">
            
            <form method="POST" enctype="multipart/form-data">
            <!-- Upload image input-->
            <div>
                <input id="upload" type="file" name="profileimg" required onchange="readURL(this);" class="form-control border-0" >
                <div class="input-group-append"  style="padding:0px 20px 10px 30px;">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted align-center">Choose file</small></label>
                </div>
            </div>
            
            <br>

            <!-- Uploaded image area-->
            <p class="font-italic text-grey text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

        </div>
    </div>
</div>
</div><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
    <div class="modal-footer"><button class="btn btn-light" data-dismiss="modal" type="button">Close</button>
    <input class="btn btn-primary" type="submit" value="Submit" name="profilechange"></div></form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  

                    <div class="col"></div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col" style="width: 632px;"> <br>
                                <div class="card shadow mb-3" style="width: 1050px;">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Account Information</p>
                                    </div>
                                    <div class="card-body">
                                    <form method="POST">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" value="<?php echo $username?>"  readonly></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>Password</strong></label><input class="form-control" id="userpass" type="password" value="<?php echo $password?>"  readonly></div>
                                                        &nbsp;&nbsp;<input type="checkbox" onclick="showPassword()"/> Show Password 
                                                        <script>
                                                        function showPassword() {
                                                            let x = document.getElementById("userpass");
                                                            if (x.type == "password") {
                                                            x.type = "text";
                                                            } else {
                                                            x.type = "password";
                                                            }
                                                        }
                                                        </script>
                                                </div>
                                            </div><br>
                             

                       <!-- ---------------MODAL CODE--------------------->

                                <div id="modal-open">
                                    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Change Password</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                <div class="modal-body">
                                                    CURRENT PASSWORD<input id="curpass" type="password" name="oldpass"  class="form-control border-2" ><br>
                                                    NEW PASSWORD<input id="newpass" type="password" name="newpass"  class="form-control border-2" > <br>

                                                        &nbsp;&nbsp;<input type="checkbox" onclick="showPasswords()"/> Show Password 
                                                        <script>
                                                        function showPasswords() {
                                                            let x = document.getElementById("curpass");
                                                            let y = document.getElementById("newpass");

                                                            if (x.type == "password") {
                                                            x.type = "text";
                                                            } else {
                                                            x.type = "password";
                                                            }

                                                            if (y.type == "password") {
                                                            y.type = "text";
                                                            } else {
                                                            y.type = "password";
                                                            }
                                                        }
                                                        </script>
                                                </div>
                                                <div class="modal-footer"><input class="btn btn-primary" type="submit" value="Change Password" name="changepass"></div>
                                            </div>
                                        </div>
                                    </div><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" type="button" style="background-color: rgb(78,115,223);">Change Password</button></div>
                                    
                                <div><div role="dialog" tabindex="-1" class="modal fade" id="myModal"></div></div>
                            </div>
                        </div>
                    </div>


                       <!-- ------------------------------------>

                                        </form>
                                    </div>
                                </div>
                                <div class="card shadow" style="width: 1050px;">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">User Information</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">
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

                                            <!-- ---------------MODAL CODE--------------------->


                                            <div>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4>Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                <div class="modal-body">
                                                    <p class="text-center text-muted">Description </p>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-light" data-dismiss="modal" type="button">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="modal-open">
                                    <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal2" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Update User Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                <div class="modal-body">
                                                    FIRST NAME<input id="pass" type="text" name="fname"  value="<?php echo $first_name?>"  style="text-transform:uppercase" class="form-control border-2"><br>
                                                    LAST NAME<input id="pass" type="text" name="lname"  value="<?php echo $last_name?>"  style="text-transform:uppercase" class="form-control border-2"><br>
                                                    EMAIL<input id="pass" type="email" name="mail"   value="<?php echo $email?>" class="form-control border-2" ><br>
                                                    CONTACT NUMBER<input id="pass" type="text" name="contact"  maxlength="11" pattern="[0]{1}[9]{1}[0-9]{9}"  title="Valid contact number only" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1'); " placeholder="Ex. 09123456789" value="<?php echo $contact?>" class="form-control border-2"><br>

                                                </div>
                                                <div class="modal-footer"><input class="btn btn-primary" type="submit" value="Update User Information" name="updateinfo"></div>
                                            </div>
                                        </div>
                                    </div><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" type="button" style="background-color: rgb(78,115,223);">Update User Information</button></div>
                                    
                                <div><div role="dialog" tabindex="-1" class="modal fade" id="myModal"></div></div>
                            </div>
                        </div>
                    </div>


                       <!-- ------------------------------------>
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
    <script src="assets/js/Bootstrap-Image-Uploader.js"></script>
    <script src="assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Right-Sidebar.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>