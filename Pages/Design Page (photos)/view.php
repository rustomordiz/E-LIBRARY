<?php
    error_reporting(0);
    session_start();

    include '../Home and Profile Page/header_data.php';
    include 'header_data.php';

    $admin_access =  $_SESSION['admin_access'];

    /// INSERT/UPDATE PHOTO ///
    if($_POST['addcollection']){

        $collectionrefer = $_POST['idreference'];
        $folderrefer = $_POST['folderreference'];

        $img = $_FILES['img'];
        $imagecounter = count($img['name']);

        for ($i=0; $i<$imagecounter; $i++){
            $imgname = $img['name'][$i];
            $tmpname = $img['tmp_name'][$i];
            $error = $img['error'][$i];

            if ($error === 0){

                $fileType = pathinfo($imgname, PATHINFO_EXTENSION);
                $allowTypes = array('jpg','png','jpeg','gif','JPG','PNG','JPEG');


                if(in_array($fileType, $allowTypes)){
                    $newimgname = uniqid('IMG-',true).'-'.$imgname;

                    $target = "../../collectionimage/coverimage/$folderrefer/".basename($newimgname);

                    $sqlcollectioninsert = mysqli_query($conn,"INSERT into test (img,collection_id) values('$newimgname','$collectionrefer')");
                        move_uploaded_file($tmpname, $target);

                        header('Location: view.php');



                }else{
                    echo "<div class='alert alert-danger' role='alert' style='margin-bottom:-8px;'>
                         Only accepts jpg, png, jpeg and gif image files only
                    </div>";

                }


            }else{
                echo "<div class='alert alert-danger' role='alert' style='margin-bottom:-8px;'>
                Something went wrong. Try again";
            }
        }


    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Della+Respira">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-CSS-Image-Slider.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Image-Caption-Hover-Effect-5.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Tabs-with-Arrows.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="assets/css/Content-Slide-2-With-Images-1.css">
    <link rel="stylesheet" href="assets/css/Content-Slide-2-With-Images.css">
    <link rel="stylesheet" href="assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/GradeJS-the-preview-image-do-not-reflect-the-effect.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Image-slider-carousel-With-arrow-buttons-1.css">
    <link rel="stylesheet" href="assets/css/Image-slider-carousel-With-arrow-buttons.css">
    <link rel="stylesheet" href="assets/css/lev-box-1.css">
    <link rel="stylesheet" href="assets/css/lev-box.css">
    <link rel="stylesheet" href="assets/css/LinkedIn-like-Profile-Box.css">
    <link rel="stylesheet" href="assets/css/Minimal-tabs-1.css">
    <link rel="stylesheet" href="assets/css/Minimal-tabs.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Right-Sidebar.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/tabs-Menu.css">


</head>

<style>
div.gallery {
  margin: 20px 20px 20px 100px;
  background: linear-gradient(to right, #808080, #ffffff);
  padding: 15px;
  border: 1px solid #ccc;
  overflow: auto;
  width: auto;
  height: auto;
  display:grid;
  grid-template-columns: auto auto auto auto;
  grid-template-rows: auto auto auto auto;
  grid-gap: 25px;
  justify-items: center;
  align-items: center;
  object-fit:cover;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
  border-style:solid;
  border-width:3px;
  border-color: black;

}
</style>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark navbar-expand float-right align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-image: url(&quot;none&quot;);background-color: rgb(239,210,106);">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="../Home and Profile Page/home.php">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span style="color: rgb(22,168,231);">E-LIBRARY</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link border-white" href="../Home and Profile Page/home.php"><i class="fas fa-home" style="color: rgb(37,20,20);"></i><span style="color: rgb(28,10,10);">Home</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link border-white" href="../Home and Profile Page/profile.php"><i class="fas fa-user" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Profile</span></a></li>

                    <?php if($admin_access=='on'){
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/admin_list.php"><i class="fas fa-user-circle" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Admin Management</span></a></li>';
                    }?>

                    <?php if(substr($user_name,0,5)=='ADMIN'){
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/student_list.php"><i class="fas fa-users" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Student Management</span></a></li>';
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/collection_list.php"><i class="fas fa-book" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Collections Management</span></a></li>';
                    }?>

                    <li class="nav-item" role="presentation"><a class="nav-link active border-white" href="../Home and Profile Page/browse.php" style="color: rgb(13,0,3);"><i class="fas fa-table" style="color: rgb(13,1,1);"></i><span>Browse</span></a>
                    <a class="nav-link border-white" href="../Home and Profile Page/contacts.php" style="color: rgb(13,0,3);"><i class="fab fa-slack-hash" style="color: rgb(13,1,1);"></i><span>Contact</span></a>
                        <a
                            class="nav-link border-white" href="../Home and Profile Page/mvg.php" style="color: rgb(13,0,3);"><i class="far fa-list-alt" style="color: rgb(13,1,1);"></i><span>Mission, Vision, Goals</span></a>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="background-color: rgb(78,115,223);"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background-image: url(&quot;assets/img/orange.png&quot;);">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><img style="width: 73px;height: 67px;margin: 5px;" src="assets/img/coe%20logo.png">

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

            <!-- GETTING THE COLLECTION TO VIEW -->

            <?php
                $idcollection = $_SESSION['viewcollection'];

                $sql = "SELECT * FROM collection where id='$idcollection'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $title = $row['title'];
                $authors = $row['authors'];
                $summary = $row['summary'];
                $category = $row['category'];
                $year = $row['year'];
                $cover = $row['cover'];
                $folder =  $row['folder'];

            ?>

            <div class="container-fluid">
                <div class="text-left d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0" style="margin: 21px;">Description</h3>
                </div>
            </div>
            <div class="profile-card" style="width: 901px;margin-left: 287px;margin-top: 45px;">
                <div class="profile-back"></div>
                <img class="rounded-circle profile-pic"  src="<?php echo "../../collectionimage/coverimage/$folder/" . $cover ?>">
                <h3 class="profile-name"><?php echo  $title; ?></h3>
                <div style="height: 80px;">
                    <p style="font-size: 12px;color: rgb(14,17,38);">Author: <?php echo  $authors; ?></p>
                    <p style="font-size: 12px;margin-bottom: 18px;margin-top: -13px;color: rgb(9,11,24);">Year Published : <?php echo  $year; ?></p>
                </div>
                <p class="profile-bio" style="margin-top: -29px;color: rgb(35,38,55);width: 743px;">  <?php echo  $summary; ?> </p>
            </div>
            <div class="container-fluid">

                <h3 class="text-dark mb-0" style="margin: 21px;">Photos</h3>

                <?php if(substr($user_name,0,5)=='ADMIN'){
                  echo" <br><button class='btn btn-outline-primary text-truncate float-none float-sm-none add-another-btn' data-bs-hover-animate='pulse'
                   data-toggle='modal' data-target='#editphoto' type='button' style='margin: 4px;'>Edit Photos<i class='fas fa-pen edit-icon'></i></button>";
                }?>


                <!---------- EDIT PHOTO ---------->

                <div class="row">
                    <div class="col">
                        <form method="POST" enctype="multipart/form-data">

                        <div class="modal fade centro" role="dialog"
                            tabindex="-1" id="editphoto">

                            <div class="modal-dialog" role="document">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Edit Photos</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="idreference" value="<?php echo $id; ?>">
                                        <input type="hidden" name="folderreference" value="<?php echo $folder; ?>">

                                        <label id="new_imagelabel" class="btn btn-info "style="display:block;">Upload all the Photos</label>
                                        <input id="new_imgupload" type="file" name="img[]" required  onchange="readURL(this);" multiple="multiple" class="form-control border-0" style="display:block;" ><br>



                                    </div>
                                    <div class="modal-footer"><input class="btn btn-primary" type="submit" value="Submit" name="addcollection"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


               <!----------- -----------    DISPLAY PICTURES------------------------------->

               <div class='gallery' style="center">
                    <?php

                    $selectimage = "SELECT * FROM test where collection_id='$id'";

                    $results = $conn->query($selectimage);
                    if ($results->num_rows > 0) {
                    // output data of each row
                        while($imgrow = $results->fetch_assoc()) {
                        $id = $imgrow['id'];
                        $img = $imgrow['img'];
                        $colid = $imgrow['collection_id'];
                        echo "<img src='../../collectionimage/coverimage/$folder/$img'> ";
                        }
                    }

                    ?>
               </div>



    <?php }}?>
    </div>
</div><!-- slideshow --></div>
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
