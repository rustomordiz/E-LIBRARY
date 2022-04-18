<?php  
	error_reporting(0);
	session_start();

    include 'header_data.php';

    $admin_access =  $_SESSION['admin_access'];

    if($_POST['open']){ 
        $_SESSION['viewcollection'] = $_POST['openid'];
        echo '<script> location.replace("../Design Page/view.php"); </script>';
    }
?>



    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Browse</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch-1-1.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch-1.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch.css">
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
    <link rel="stylesheet" href="assets/css/Toggle-Switches.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/yearlevel.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
</head>

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
                    <li class="nav-item" role="presentation"><a class="nav-link border-white" href="home.php"><i class="fas fa-home" style="color: rgb(37,20,20);"></i><span style="color: rgb(28,10,10);">Home</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link border-white" href="profile.php"><i class="fas fa-user" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Profile</span></a></li>
                    
                    <?php if($admin_access=='on'){
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/admin_list.php"><i class="fas fa-user-circle" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Admin Management</span></a></li>';
                    }?>

                    <?php if(substr($user_name,0,5)=='ADMIN'){
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/student_list.php"><i class="fas fa-users" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Student Management</span></a></li>';
                    echo'  <li class="nav-item" role="presentation"><a class="nav-link " href="../Management/collection_list.php"><i class="fas fa-book" style="color: rgb(28,10,10);"></i><span style="color: rgb(13,1,1);">Collections Management</span></a></li>';
                    }?>   

                    <li class="nav-item" role="presentation"><a class="nav-link active border-white" href="browse.php" style="color: rgb(13,0,3);"><i class="fas fa-table" style="color: rgb(13,1,1);"></i><span>Browse</span></a>
                    <a class="nav-link border-white" href="contacts.php" style="color: rgb(13,0,3);"><i class="fab fa-slack-hash" style="color: rgb(13,1,1);"></i><span>Contact</span></a>
                        <a
                            class="nav-link border-white" href="mvg.php" style="color: rgb(13,0,3);"><i class="far fa-list-alt" style="color: rgb(13,1,1);"></i><span>Mission, Vision, Goals</span></a>
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



            <div class="container-fluid">
                <div class="text-left d-sm-flex justify-content-between align-items-center mb-4" style="width: 362px;">
                    <h3 class="text-dark mb-0" style="margin: 15px;">Browse </h3>
                </div>
                <div class="border rounded-0 right-sidebar-normal" id="right-sidebar" style="height:420px;width: 190px;margin-left: 50px;background-color: #fefefe;margin-top: 30px;">
                    <h3 class="text-dark mb-0" style="margin: 21px;">Year Level</h3>
                    
                    
                        <h3 class="text-dark mb-0" style="margin: 10px 0px 0px 10px;font-size: 15px;width: 101px;margin-top: 11px;">First Year</h3>
                        <label class="switch">
                        <input type="checkbox" name="name" class="name" value="first"/>
                        <span class="slider round"></span>
                        </label>

                        <h3 class="text-dark mb-0" style="margin: 10px 0px 0px 10px;font-size: 15px;width: 101px;margin-top: 11px;">Second Year</h3>
                        <label class="switch">
                        <input type="checkbox" name="name" class="name" value="second"/>
                        <span class="slider round"></span>
                        </label>
                        
                        <h3 class="text-dark mb-0" style="margin: 10px 0px 0px 10px;font-size: 15px;width: 101px;margin-top: 11px;">Third Year</h3>
                        <label class="switch">
                        <input type="checkbox" name="name" class="name" value="third"/>
                        <span class="slider round"></span>
                        </label>

                        <h3 class="text-dark mb-0" style="margin: 10px 0px 0px 10px;font-size: 15px;width: 101px;margin-top: 11px;">Fourth Year</h3>
                        <label class="switch">
                        <input type="checkbox" name="name" class="name" value="fourth"/>
                        <span class="slider round"></span>
                        </label>
                    

                    <div class="btn-group" role="group"></div>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons"></div>
                </div>
            </div><input class="bg-light border rounded-0 border-dark search form-control" type="text" placeholder="Search by typing here.." style="width: 258px;margin-left: 827px;margin-bottom: 8px;margin-top: -14px;margin-right: 0px;background-color: #ffffff;opacity: 1;">
            <div>
                <div id="content" class="content-normal"></div>
            </div>
            <div style="width: 1024px;">
                <ul class="nav nav-tabs nav-justified" style="width: 1086px;">
                    <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-12" style="background-color: #5eace4;">Books</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-13" style="background-color: #70d557;">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-15" style="background-color: #ed5858;">Magazines</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-16" style="background-color: #dce763;">Thesis</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-14" style="background-color: rgb(202,114,234);">Video Tutorial</a></li>
                </ul>

                  <!------------------------- BOOKS  --------------------------->
                <div class="tab-content" style="width: 1044px;">
                    <div class="tab-pane active" role="tabpanel" id="tab-12">
                        <div class="table-responsive table-bordered table table-hover table-bordered results" style="width: 1075px;">
                            <table class="table table-bordered table-hover">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd" class="col-lg-2" style="width: 725px;color: rgb(239,210,106);font-size: 18px;">Cover Book</th>
                                        <th id="trs-hd" class="col-lg-1" style="width: 601px;color: rgb(239,210,106);font-size: 18px;">Title Page</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 671px;color: rgb(239,210,106);font-size: 18px;">Author</th>
                                        <th id="trs-hd" class="col-lg-3" style="color: rgb(239,210,106);font-size: 18PX;width: 365px;">Year Published</th>
                                        <th id="trs-hd" class="col-lg-3" style="width: 556px;color: rgb(239,210,106);font-size: 18px;">Subject</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 450px;color: rgb(239,210,106);font-size: 18px;"></th>
                                    </tr>
                                </thead>
                                <tbody id="booktable">
                            
                                    <?php 
                                        $sql = "SELECT * FROM collection where collection_type='book'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        $authors = $row['authors'];
                                        $summary = $row['summary'];
                                        $category = $row['category'];
                                        $categorylevel = $row['category_level'];
                                        $year = $row['year'];
                                        $cover = $row['cover'];
                                        $folder =  $row['folder'];
                                    ?>

                                    <tr>
                                        <td> <img class="border rounded-circle img-profile" style="width: 90px;height:90px; margin-left: auto; margin-right: auto; display:block;" src="<?php echo "../../collectionimage/coverimage/$folder/" . $cover ?>"> </td>
                                        <td> <?php echo $title; ?> </td>
                                        <td> <?php echo $authors; ?> </td>
                                        <td> <?php echo $year; ?> </td>
                                        <td> <?php echo $category; ?> </td>
                                  
                                        
                                        <!-- ------------VIEW BUTTON----------------->    
                                        <form method="POST">   
                                        <input type="hidden" name="openid" value="<?php echo $id; ?>">
                                        <td><input class="btn btn-success" type="submit" value="👁" name="open"> <p style="visibility: hidden;"> <?php echo $categorylevel; ?></p></td>
                                        </form>
                                        
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                                
                                
                            </table>
                        </div>
                    </div>
                     <!------------------------- ARTICLE  --------------------------->
                    <div class="tab-pane" role="tabpanel" id="tab-13">
                        <div class="table-responsive table-bordered table table-hover table-bordered results" style="width: 1075px;">
                            <table class="table table-bordered table-hover">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd" class="col-lg-2" style="width: 725px;color: rgb(239,210,106);font-size: 18px;">Cover Article</th>
                                        <th id="trs-hd" class="col-lg-1" style="width: 601px;color: rgb(239,210,106);font-size: 18px;">Title Page</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 671px;color: rgb(239,210,106);font-size: 18px;">Author</th>
                                        <th id="trs-hd" class="col-lg-3" style="color: rgb(239,210,106);font-size: 18PX;width: 385px;">Year Published</th>
                                        <th id="trs-hd" class="col-lg-3" style="width: 556px;color: rgb(239,210,106);font-size: 18px;">Subject</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 450px;color: rgb(239,210,106);font-size: 18px;"></th>
                                    </tr>
                                </thead>
                                <tbody id="booktable">
                                  
                                            
                                    <?php 
                                        $sql = "SELECT * FROM collection where collection_type='article'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        $authors = $row['authors'];
                                        $summary = $row['summary'];
                                        $category = $row['category'];
                                        $categorylevel = $row['category_level'];
                                        $year = $row['year'];
                                        $cover = $row['cover'];
                                        $folder =  $row['folder'];
                                    ?>

                                    <tr>
                                        <td> <img class="border rounded-circle img-profile" style="width: 90px;height:90px; margin-left: auto; margin-right: auto; display:block;" src="<?php echo "../../collectionimage/coverimage/$folder/" . $cover ?>"> </td>
                                        <td> <?php echo $title; ?> </td>
                                        <td> <?php echo $authors; ?> </td>
                                        <td> <?php echo $year; ?> </td>
                                        <td> <?php echo $category; ?> </td>
                                        
                                        <!-- ------------VIEW BUTTON----------------->    
                                        <form method="POST">   
                                        <input type="hidden" name="openid" value="<?php echo $id; ?>">
                                        <td><input class="btn btn-success" type="submit" value="👁" name="open"> <p style="visibility: hidden;"> <?php echo $categorylevel; ?></p></td>
                                        </form>
                                        
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                       <!------------------------- THESIS  --------------------------->
                    <div class="tab-pane" role="tabpanel" id="tab-16">
                        <div class="table-responsive table-bordered table table-hover table-bordered results" style="width: 1075px;">
                            <table class="table table-bordered table-hover">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd" class="col-lg-2" style="width: 725px;color: rgb(239,210,106);font-size: 18px;">Cover Thesis</th>
                                        <th id="trs-hd" class="col-lg-1" style="width: 601px;color: rgb(239,210,106);font-size: 18px;">Title Page</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 671px;color: rgb(239,210,106);font-size: 18px;">Author</th>
                                        <th id="trs-hd" class="col-lg-3" style="color: rgb(239,210,106);font-size: 18PX;width: 355px;">Year Published</th>
                                        <th id="trs-hd" class="col-lg-3" style="width: 556px;color: rgb(239,210,106);font-size: 18px;">Subject</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 450px;color: rgb(239,210,106);font-size: 18px;"></th>
                                    </tr>
                                </thead>
                                <tbody id="booktable">
                                  
                                            
                                    <?php 
                                        $sql = "SELECT * FROM collection where collection_type='thesis'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        $authors = $row['authors'];
                                        $summary = $row['summary'];
                                        $category = $row['category'];
                                        $categorylevel = $row['category_level'];
                                        $year = $row['year'];
                                        $cover = $row['cover'];
                                        $folder =  $row['folder'];
                                    ?>

                                    <tr>
                                        <td> <img class="border rounded-circle img-profile" style="width: 90px;height:90px; margin-left: auto; margin-right: auto; display:block;" src="<?php echo "../../collectionimage/coverimage/$folder/" . $cover ?>"> </td>
                                        <td> <?php echo $title; ?> </td>
                                        <td> <?php echo $authors; ?> </td>
                                        <td> <?php echo $year; ?> </td>
                                        <td> <?php echo $category; ?> </td>
                                        
                                        <!--------------VIEW BUTTON----------------->    
                                        <form method="POST">   
                                        <input type="hidden" name="openid" value="<?php echo $id; ?>">
                                        <td><input class="btn btn-success" type="submit" value="👁" name="open"> <p style="visibility: hidden;"> <?php echo $categorylevel; ?></p></td>
                                        </form>
                                        
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                    <!------------------------- MAGAZINE  --------------------------->
                    <div class="tab-pane" role="tabpanel" id="tab-15">
                        <div class="table-responsive table-bordered table table-hover table-bordered results" style="width: 1078px;">
                            <table class="table table-bordered table-hover">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd" class="col-lg-2" style="width: 725px;color: rgb(239,210,106);font-size: 18px;">Cover Magazine</th>
                                        <th id="trs-hd" class="col-lg-1" style="width: 601px;color: rgb(239,210,106);font-size: 18px;">Title Page</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 671px;color: rgb(239,210,106);font-size: 18px;">Author</th>
                                        <th id="trs-hd" class="col-lg-3" style="color: rgb(239,210,106);font-size: 18PX;width: 365px;">Year Published</th>
                                        <th id="trs-hd" class="col-lg-3" style="width: 556px;color: rgb(239,210,106);font-size: 18px;">Subject</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 450px;color: rgb(239,210,106);font-size: 18px;"></th>
                                       
                                    </tr>
                                </thead>
                                <tbody id="booktable">
                                    
                                            
                                    <?php 
                                        $sql = "SELECT * FROM collection where collection_type='magazine'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        $authors = $row['authors'];
                                        $summary = $row['summary'];
                                        $category = $row['category'];
                                        $categorylevel = $row['category_level'];
                                        $year = $row['year'];
                                        $cover = $row['cover'];
                                        $folder =  $row['folder'];
                                    ?>

                                    <tr>
                                        <td> <img class="border rounded-circle img-profile" style="width: 90px;height:90px; margin-left: auto; margin-right: auto; display:block;" src="<?php echo "../../collectionimage/coverimage/$folder/" . $cover ?>"> </td>
                                        <td> <?php echo $title; ?> </td>
                                        <td> <?php echo $authors; ?> </td>
                                        <td> <?php echo $year; ?> </td>
                                        <td> <?php echo $category; ?> </td>
                                        
                                        <!--------------VIEW BUTTON----------------->    
                                        <form method="POST">   
                                        <input type="hidden" name="openid" value="<?php echo $id; ?>">
                                        <td><input class="btn btn-success" type="submit" value="👁" name="open"> <p style="visibility: hidden;"> <?php echo $categorylevel; ?></p></td>
                                        </form>

                                    </tr>
                                    <?php }} ?>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                       <!------------------------- VIDEO TUTORIAL  --------------------------->
                    <div class="tab-pane" role="tabpanel" id="tab-14">
                        <div class="table-responsive table-bordered table table-hover table-bordered results" style="width: 1075px;">
                            <table class="table table-bordered table-hover">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd" class="col-lg-1" style="width: 601px;color: rgb(239,210,106);font-size: 18px;">Video Title</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 671px;color: rgb(239,210,106);font-size: 18px;">Author</th>
                                        <th id="trs-hd" class="col-lg-3" style="width: 556px;color: rgb(239,210,106);font-size: 18px;">Year Uploaded</th>
                                        <th id="trs-hd" class="col-lg-3" style="width: 556px;color: rgb(239,210,106);font-size: 18px;">Subject</th>
                                        <th id="trs-hd" class="col-lg-2" style="width: 725px;color: rgb(239,210,106);font-size: 18px;">Video Link</th>
                                    </tr>
                                </thead>
                                <tbody id="booktable">
                                  
                                            
                                    <?php 
                                        $sql = "SELECT * FROM collection where collection_type='video tutorial'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        $authors = $row['authors'];
                                        $summary = $row['summary'];
                                        $category = $row['category'];
                                        $categorylevel = $row['category_level'];
                                        $year = $row['year'];
                                        $cover = $row['cover'];
                                        $folder =  $row['folder'];
                                        $link =  $row['link'];
                                    ?>

                                    <tr>
                                        <td> <?php echo $title; ?> </td>
                                        <td> <?php echo $authors; ?> </td>
                                        <td> <?php echo $year; ?> </td>
                                        <td> <?php echo $category; ?> </td>
                                        <td> <a href="<?php echo $link; ?>"><?php echo $link; ?></a> <p style="visibility: hidden;"> <?php echo $categorylevel; ?></p></td>
                                            
                              
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                  
                </div>
            </div>
            <ul class="list-inline text-right" style="background-color: #f7f2f2;width: 1078px;">
                <li class="list-inline-item"><a href="#"> <span class="border rounded-0" style="background-color: #eff3f5;color: rgb(2,5,14);">Previous </span></a></li>
                <li class="list-inline-item"><a class="active" href="#"> <span class="border rounded-0" style="background-color: #e8eef2;color: rgb(9,12,19);">1 </span></a></li>
                <li class="list-inline-item"><a href="#"> <span class="border rounded-0" style="background-color: #e0eef8;color: rgb(5,8,19);">2 </span></a></li>
                <li class="list-inline-item"><a href="#"> <span class="border rounded-0" style="background-color: #f4f6f8;color: rgb(4,6,12);">3</span></a></li>
                <li class="list-inline-item"><a href="#"> <span class="border rounded-0" style="background-color: #f0f3f5;color: rgb(6,8,16);">Next </span></a></li>
            </ul>
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