<?php
    include('../security.php');
    // session_start();
    include('../database/connectdb.php');

if(isset($_POST['updateBtn']))
    {
        $register_id     = $_POST['update_id']; 
        $username       = $_POST['update_username'];
        $password       = $_POST['update_password'];
        $adviser_surname   = $_POST['update_adviser_surname'];
        $adviser_given_name   = $_POST['update_adviser_given_name'];
        $adviser_middle_name   = $_POST['update_adviser_middle_name'];
        $gender         = $_POST['update_gender'];
        $rank            = $_POST['update_rank'];
        $email_address   = $_POST['update_email_address'];
        $adviser_address        =$_POST['update_adviser_address'];
        $birth_date       =$_POST['update_birth_date'];
        $phone_number    =$_POST['update_phone_number'];
        $images         =$_FILES["profile_images"]['name'];
        $today = date("y-m-d");
        $diff = date_diff(date_create($birth_date), date_create($today));
        $age = $_POST['age'].$diff->format('%y');

        // if(file_exists("upload/".$_FILES["profile_images"]["name"]))
        // {
        //     $store = $_FILES["profile_images"]['name'];
        //     $_SESSION['status'] = "Image already exist. '$store'";
        //     header('Location:../login.php');

        // }
        //  else
        // {

        if( !empty($images)){

            $query = "UPDATE register SET username='$username', password='$password' WHERE register_id = $register_id";
            $query_run = mysqli_query($connection, $query);
    
            $query = "UPDATE adviser SET adviser_surname='$adviser_surname',  adviser_given_name='$adviser_given_name',  adviser_middle_name='$adviser_middle_name', gender='$gender', rank='$rank', email_address='$email_address', birth_date='$birth_date', age='$age', phone_number='$phone_number', adviser_address='$adviser_address', images='$images' WHERE register_id=$register_id ";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                 // echo "SAVED";
            move_uploaded_file($_FILES["profile_images"]["tmp_name"],"upload/".$_FILES["profile_images"]["name"]);
                $_SESSION['status'] = "Users is Updated";
                $_SESSION['status_code'] = "info";
                header('Location:../login.php');
            }
             else
            {
                $_SESSION['status'] = "Users is NOT Updated";
                $_SESSION['status_code'] = "warning";
                header('Location: adviserprof.php');
             }
            
        }
      
       else{

        $query = "UPDATE register SET username='$username', password='$password' WHERE register_id = $register_id";
        $query_run = mysqli_query($connection, $query);

        $query = "UPDATE adviser SET adviser_surname='$adviser_surname',  adviser_given_name='$adviser_given_name',  adviser_middle_name='$adviser_middle_name', gender='$gender', rank='$rank', email_address='$email_address', birth_date='$birth_date', phone_number='$phone_number',  age='$age',adviser_address='$adviser_address' WHERE register_id=$register_id ";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            $_SESSION['status'] = "Users is Updated";
            $_SESSION['status_code'] = "info";
            header('Location:../login.php');
        }
         else
        {
            $_SESSION['status'] = "Users is NOT Updated";
            $_SESSION['status_code'] = "warning";
            header('Location: adviserprof.php');
         }

       }


    }

?>