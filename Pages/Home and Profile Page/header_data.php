<?php
    include 'config.php';
    $user_name = $_SESSION['user_name'];

    $sql = mysqli_query($conn,"SELECT * FROM students WHERE student_id = '$user_name'");
    $results = mysqli_fetch_object($sql);
    $sqlselectresult= mysqli_num_rows($sql);

    if($sqlselectresult > 0){

        $id = $results->id;
        $username = $results->student_id;
        $password = $results->password;
        $first_name = $results->first_name;
        $last_name = $results->last_name;
        $email = $results->email;
        $contact = $results->contact;
        $profile = $results->profileimg;

    }else{

        $sql = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$user_name'");
        $results = mysqli_fetch_object($sql);
        
        $id = $results->id;
        $username = $results->username;
        $password = $results->password;
        $first_name = $results->first_name;
        $last_name = $results->last_name;
        $email = $results->email;
        $contact = $results->contact;
        $profile = $results->profileimg;

    }
    ?>