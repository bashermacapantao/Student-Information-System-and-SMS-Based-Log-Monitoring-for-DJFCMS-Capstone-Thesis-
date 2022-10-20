<?php
    include('security.php');
    // session_start();
    include('database/connectdb.php');
    include('phpqrcode/qrlib.php');
   
    
    if(isset($_POST['registerBtn']))
    {
       
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $usertype   = $_POST['usertype'];
        $confirmPassword   = $_POST['confirmPassword'];
        $adviser_surname   = $_POST['adviser_surname'];
        $adviser_given_name   = $_POST['adviser_given_name'];
        $adviser_middle_name   = $_POST['adviser_middle_name'];
        $gender   = $_POST['gender'];
        // $age   = $_POST['age'];
        $email_address   = $_POST['email_address'];
        $birth_date       =$_POST['birth_date'];
        $adviser_address   = $_POST['adviser_address'];
        $phone_number   = $_POST['phone_number'];
        $images         =$_FILES["profile_images"]['name'];
        $today = date("y-m-d");
        $diff = date_diff(date_create($birth_date), date_create($today));
        $age = $_POST['age'].$diff->format('%y');

         if($password === $confirmPassword)
         {
             $query = "INSERT INTO register(username, password,  usertype) VALUES('$username', '$password',  '$usertype')";
             $query_run = mysqli_query($connection, $query);
             $last_id = mysqli_insert_id($connection);
            
             $query = "INSERT INTO adviser (adviser_surname, adviser_given_name, adviser_middle_name, gender, adviser_address, age, email_address, birth_date,  phone_number,images, register_id) VALUES('$adviser_surname', '$adviser_given_name', '$adviser_middle_name', '$gender', '$adviser_address', '$age','$email_address','$birth_date','$phone_number', '$images',$last_id)";
             $query_run = mysqli_query($connection, $query);
           
             if($query_run)
            {
                 // echo "SAVED";
                 move_uploaded_file($_FILES["profile_images"]["tmp_name"],"adviser/upload/".$_FILES["profile_images"]["name"]);
                 $_SESSION['status'] = "Users added";
                 $_SESSION['status_code'] = "success";
                 header('Location:administrator.php#section1');
            }
             else
            {
                $_SESSION['status'] = "Users NOT added";
                $_SESSION['status_code'] = "error";
                header('Location: administrator.php#section1');
             }
         }
         else
         {
            $_SESSION['status'] = "Password and Confirm password does not match";
            $_SESSION['status_code'] = "warning";
            header('Location:administrator.php#section1');
         } 
    }
    //END OF ADD USERS

    if(isset($_POST['updateBtn']))
    {
        // $register_id = $_POST['update_id'];
        // $name   = $_POST['update_name'];
        // $username   = $_POST['update_username'];
        // $password   = $_POST['update_password'];
        // $emailAddress   = $_POST['update_emailAddress'];
        // $usertype       = $_POST['usertype'];
        $register_id    = $_POST['update_regid'];
        $adviser_id    = $_POST['update_advid'];
        $adviser_surname   = $_POST['update_adviser_surname'];
        $adviser_given_name   = $_POST['update_adviser_given_name'];
        $adviser_middle_name   = $_POST['update_adviser_middle_name'];
        $username       = $_POST['update_username'];
        $password       = $_POST['update_password'];
        $usertype       = $_POST['usertype'];
        // $gender         = $_POST['update_gender'];
        // $adviser_address        = $_POST['update_adviser_address'];
        // $age            = $_POST['update_age'];
        $email_address   = $_POST['update_email_address'];
        // $birth_date       = $_POST['update_birth_date'];
        $phone_number    = $_POST['update_phone_number'];
        $images         =$_FILES["profile_images"]['name'];
        
        if( !empty($images)){
            $query = "UPDATE register SET username='$username', password='$password', usertype='$usertype' WHERE register_id = $register_id";
            mysqli_query($connection, $query);

            $query = "UPDATE adviser SET  adviser_surname='$adviser_surname',  adviser_given_name='$adviser_given_name',  adviser_middle_name='$adviser_middle_name', email_address='$email_address', phone_number='$phone_number',images='$images' WHERE adviser_id=$adviser_id";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                // echo "SAVED";
                move_uploaded_file($_FILES["profile_images"]["tmp_name"],"adviser/upload/".$_FILES["profile_images"]["name"]);
                $_SESSION['status'] = "Users is Updated";
                $_SESSION['status_code'] = "info";
                header('Location:administrator.php#section1');
            }
            else
            {
                $_SESSION['status'] = "Users is NOT Updated";
                $_SESSION['status_code'] = "warning";
                header('Location: administrator.php#section1');
            }

        }
        else{
            $query = "UPDATE register SET username='$username', password='$password', usertype='$usertype' WHERE register_id = $register_id";
            mysqli_query($connection, $query);

            $query = "UPDATE adviser SET  adviser_surname='$adviser_surname',  adviser_given_name='$adviser_given_name',  adviser_middle_name='$adviser_middle_name', email_address='$email_address', phone_number='$phone_number' WHERE adviser_id=$adviser_id";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                // echo "SAVED";
                $_SESSION['status'] = "Users is Updated";
                $_SESSION['status_code'] = "info";
                header('Location:administrator.php#section1');
            }
            else
            {
                $_SESSION['status'] = "Users is NOT Updated";
                $_SESSION['status_code'] = "warning";
                header('Location: administrator.php#section1');
            }

        }
        
    }
    // END OF EDIT USERS

    // if(isset($_POST['deleteBtn']))
    // {
    //     $register_id = $_POST['delete_id'];

    //     $query = "DELETE FROM register WHERE register_id= $register_id ";
    //     $query_run = mysqli_query($connection, $query);

    //     $query = "DELETE FROM adviser WHERE register_id= $register_id ";
    //     $query_run = mysqli_query($connection, $query);
         

    //     if($query_run)
    //     {
    //          // echo "SAVED";
    //         $_SESSION['status'] = "Users is DELETED";
    //         $_SESSION['status_code'] = "success";
    //         header('Location:administrator.php#section1');
    //     }
    //      else
    //     {
    //         $_SESSION['status'] = "Users is NOT deleted";
    //         $_SESSION['status_code'] = "error";
    //         header('Location: administrator.php#section1');
    //      }
    // }

    // END OF DELETE USERSz
    if(isset($_POST['schoolyearBtn']))
    {
    
        $schoolyear   = $_POST['schoolyear'];
     
        

            $query = "INSERT INTO schoolyear(year) VALUES('$schoolyear')";
             $query_run = mysqli_query($connection, $query);

             if($query_run)
            {
                 // echo "SAVED";
                 $_SESSION['status'] = "School Year added";
                 $_SESSION['status_code'] = "success";
                 header('Location:administrator.php#section2');
            }
             else
            {
                $_SESSION['status'] = "School Year NOT added";
                $_SESSION['status_code'] = "error";
                header('Location: administrator.php#section2');
            }
        
    }

   

    
    if(isset($_POST['gradsecBtn']))
    {
    
        $gradelevel   = $_POST['grade_level'];
        $section      = $_POST['section'];
        $adviser_id   = $_POST['adviser_id'];
        

            $query = "INSERT INTO gradsec( grade_level, section, adviser_id) VALUES('$gradelevel', '$section', '$adviser_id')";
             $query_run = mysqli_query($connection, $query);

             if($query_run)
            {
                 // echo "SAVED";
                 $_SESSION['status'] = "Grade and Section added";
                 $_SESSION['status_code'] = "success";
                 header('Location:administrator.php#section2');
            }
             else
            {
                $_SESSION['status'] = "Grade and section NOT added";
                $_SESSION['status_code'] = "error";
                header('Location: administrator.php#section2');
            }
        
    }
    //END OF ADD USERS

    if(isset($_POST['updategradsecBtn']))
    {
        $gradsec_id = $_POST['updategradsec_id'];
        $grade_level   = $_POST['update_grade_level'];
        $section   = $_POST['update_section'];
        $adviser_id   = $_POST['adviser_id'];

        $query = "UPDATE gradsec SET grade_level='$grade_level', section='$section', adviser_id=$adviser_id WHERE gradsec_id= $gradsec_id ";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
             // echo "SAVED";
            $_SESSION['status'] = "Grade and section is Updated";
            $_SESSION['status_code'] = "info";
            header('Location:administrator.php#section2');
        }
         else
        {
            $_SESSION['status'] = "Grade and section is NOT Updated";
            $_SESSION['status_code'] = "warning";
            header('Location: administrator.php#section2');
         }
    }
    // END OF EDIT USERS


    // if(isset($_POST['deletegradsecBtn']))
    // {
    //     $gradsec_id = $_POST['deletegradsec_id'];

    //     $query = "DELETE FROM gradsec WHERE gradsec_id='$gradsec_id' ";
    //     $query_run = mysqli_query($connection, $query);

    //     if($query_run)
    //     {
    //          // echo "SAVED";
    //         $_SESSION['status'] = "Grade and section is DELETED";
    //         $_SESSION['status_code'] = "success";
    //         header('Location:administrator.php#section2');
    //     }
    //      else
    //     {
    //         $_SESSION['status'] = "Grade and section is NOT deleted";
    //         $_SESSION['status_code'] = "error";
    //         header('Location: administrator.php#section2');
    //      }
    // }
      

    if(isset($_POST['addpupilBtn']))
    {
        // include('phpqrcode/qrlib.php');
        $folderTemp = 'gbrqrcode/';
        $a = $_POST['user_id'];
        $b = $_POST['user_id'];
        $c = $a;
        $d = $a.".png";
        $qual = 'H';
        $ukuran = '6';
        $padding = '0';
        QRCode :: png($c, $folderTemp.$d, $qual, $ukuran, $padding);
        
        // $user_id            = $_POST['user_id'];
        $pupil_surname   = $_POST['pupil_surname'];
        $pupil_given_name   = $_POST['pupil_given_name'];
        $pupil_middle_name   = $_POST['pupil_middle_name'];
        $pupil_gender        = $_POST['pupil_gender'];
        $guardian         = $_POST['guardian'];
        $relationship       = $_POST['relationship']; 
        $guardian_number       = $_POST['guardian_number'];
        $address            = $_POST['address'];
        $user_id            = $_POST['user_id'];
        $gradsec_id         = $_POST['gradsec_id'];
        $schoolyear_id      = $_POST['schoolyear_id'];
        $pupil_images         =$_FILES["profile_images"]['name'];
        // $last_id            = $_POST['qrcode_id'];
        // $last_id2           = $_POST['pupil_id'];


        $query = "INSERT INTO qrcode(user_id,template) VALUES($b, '$d')";
        $query_run = mysqli_query($connection, $query);
        $last_id = mysqli_insert_id($connection);

        $query = "INSERT INTO pupil(qrcode_id, pupil_surname, pupil_given_name, pupil_middle_name, pupil_gender, guardian, relationship, guardian_number,address, pupil_images) VALUES($last_id,'$pupil_surname','$pupil_given_name','$pupil_middle_name','$pupil_gender','$guardian','$relationship','$guardian_number', '$address','$pupil_images')";
        $query_run = mysqli_query($connection,$query);
        $last_id2 = mysqli_insert_id($connection);

        $query = "INSERT INTO enroll(pupil_id, gradsec_id, schoolyear_id) VALUES('$last_id2', '$gradsec_id', '$schoolyear_id')";
        $query_run = mysqli_query($connection,$query);
        if($query_run)
        {
             // echo "SAVED";
             move_uploaded_file($_FILES["profile_images"]["tmp_name"],"pupil_images/".$_FILES["profile_images"]["name"]);
            $_SESSION['status'] = "Pupil is added";
            $_SESSION['status_code'] = "success";
            header('Location:administrator.php#section3');
        }
         else
        {
            $_SESSION['status'] = "Pupil is not added";
            $_SESSION['status_code'] = "error";
            header('Location: administrator.php#section3');
         }

    }
    
    
    if(isset($_POST['updatepupilBtn']))
    {
        $folderTemp = 'gbrqrcode/';
        $a = $_POST['updateuser_id'];
        $b = $_POST['updateuser_id'];
        $c = $a;
        $d = $a.".png";
        $qual = 'H';
        $ukuran = '6';
        $padding = '0';
        QRCode :: png($c, $folderTemp.$d, $qual, $ukuran, $padding);
        
        // $pupil_id           = $_POST['updatepupil_id'];
        $qrcode_id            = $_POST['qr_id'];
        $pupil_name          = $_POST['update_pupil_name'];
        $pupil_surname   = $_POST['update_pupil_surname'];
        $pupil_given_name   = $_POST['update_pupil_given_name'];
        $pupil_middle_name   = $_POST['update_pupil_middle_name'];
        $pupil_gender        = $_POST['updatepupil_gender'];
        $guardian         = $_POST['updateguardian'];
        $relationship       = $_POST['updaterelationship']; 
        $guardian_number       = $_POST['updateguardian_number'];
        $address            = $_POST['updateaddress'];
        $pupil_images         =$_FILES["profile_images"]['name'];
      

        if( !empty($pupil_images)){
            $query = "UPDATE qrcode SET user_id=$b, template='$d' WHERE qrcode_id = $qrcode_id";
            mysqli_query($connection, $query); 
    
            $query = "UPDATE pupil SET pupil_surname='$pupil_surname', pupil_given_name='$pupil_given_name', pupil_middle_name='$pupil_middle_name', pupil_gender='$pupil_gender', guardian='$guardian', relationship='$relationship', guardian_number='$guardian_number',address='$address',pupil_images='$pupil_images' WHERE qrcode_id = $qrcode_id ";
            $query_run = mysqli_query($connection,$query);
            if($query_run)
            {
                 // echo "SAVED";
                 move_uploaded_file($_FILES["profile_images"]["tmp_name"],"pupil_images/".$_FILES["profile_images"]["name"]);
                $_SESSION['status'] = "Pupil is updated";
                $_SESSION['status_code'] = "info";
                header('Location:administrator.php#section3');
            }
             else
            {
                $_SESSION['status'] = "Pupil is not updated";
                $_SESSION['status_code'] = "error";
                header('Location: administrator.php#section3');
             }
        }
        else{
            $query = "UPDATE qrcode SET user_id=$b, template='$d' WHERE qrcode_id = $qrcode_id";
            mysqli_query($connection, $query); 
    
            $query = "UPDATE pupil SET pupil_surname='$pupil_surname', pupil_given_name='$pupil_given_name', pupil_middle_name='$pupil_middle_name',  pupil_gender='$pupil_gender', guardian='$guardian', relationship='$relationship', guardian_number='$guardian_number',address='$address' WHERE qrcode_id = $qrcode_id ";
            $query_run = mysqli_query($connection,$query);
            if($query_run)
            {
                 // echo "SAVED";
                $_SESSION['status'] = "Pupil is updated";
                $_SESSION['status_code'] = "info";
                header('Location:administrator.php#section3');
            }
             else
            {
                $_SESSION['status'] = "Pupil is not updated";
                $_SESSION['status_code'] = "error";
                header('Location: administrator.php#section3');
             }
        }
       
    }



    if(isset($_POST['deletepupilBtn']))
    {
        $pupil_id = $_POST['deletepupil_id'];

        $query = "DELETE FROM pupil WHERE pupil_id='$pupil_id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
             // echo "SAVED";
            $_SESSION['status'] = "Pupil Information is DELETED";
            $_SESSION['status_code'] = "success";
            header('Location:administrator.php#section3');
        }
         else
        {
            $_SESSION['status'] = "Pupil Information is NOT deleted";
            $_SESSION['status_code'] = "error";
            header('Location: administrator.php#section3');
         }
    }
    // date('Y', strtotime($_POST['year']));
    if(isset($_POST['moredetailsBtn']))
    {
        
        $year               = $_POST['year']; 
        $pupil_info_id      = $_POST['pupil_info_id'];
        $gradelevel_id      = $_POST['gradelevel_id'];

        $query = "INSERT INTO admission( year, pupil_info_id, gradelevel_id) VALUES( '$year','$pupil_info_id','$gradelevel_id')";
        $query_run = mysqli_query($connection,$query);
        if($query_run)
        {
             // echo "SAVED";
            $_SESSION['status'] = "Pupil is Enrolled";
            $_SESSION['status_code'] = "succes";
            header('Location:administrator.php#section3');
        }
         else
        {
            $_SESSION['status'] = "Pupil is not Enrolled";
            $_SESSION['status_code'] = "error";
            header('Location: administrator.php#section3');
         }

    }

    if(isset($_POST['attendance']))
    {
        $attendance_id      = $_POST['attendance_id'];
        $atttendpupil_id    = $_POST['atttendpupil_id'];
        $attendtime_id      = $_POST['attendtime_id'];
        $attendparent_id    = $_POST['attendparent_id'];
        $attenddate         = $_POST['attenddate'];

        $query = "INSERT INTO pupil(attendance_id, atttendpupil_id, attendtime_id, attendparent_id, attenddate) VALUES('$attendance_id','$atttendpupil_id','$attendtime_id','$attendparent_id','$attenddate')";
        $query_run = mysqli_query($connection,$query);
        if($query_run)
        {
             // echo "SAVED";
            $_SESSION['status'] = "Pupil is added";
            $_SESSION['status_code'] = "succes";
            header('Location:administrator.php#section4');
        }
         else
        {
            $_SESSION['status'] = "Pupil is not added";
            $_SESSION['status_code'] = "error";
            header('Location: administrator.php#section4');
         }

    }

    if (isset($_POST['pupil_id'])){

        $id = $_POST['pupil_id'];
        $queryValidate = "SELECT * FROM pupil p inner join enroll e on e.pupil_id = p.pupil_id inner join qrcode q on p.qrcode_id = q.qrcode_id inner join schoolyear s on e.schoolyear_id = s.schoolyear_id inner join gradsec g on e.gradsec_id = g.gradsec_id WHERE p.pupil_id = $id";
        $sqlValidate = mysqli_query($connection,$queryValidate);
        // $res = [];
        // if(mysqli_num_rows($sqlValidate) > 0){
        //     while($row = mysqli_fetch_array($sqlValidate)){

        //         $res = $row[]
        //     }

        // }
        $row = mysqli_fetch_array($sqlValidate);
        echo json_encode($row);


    }

    if (isset($_POST['savestat'])){

        $schoolyear_id = $_POST['schoolyear_id'];
        $gradsec_id = $_POST['gradsec_id'];
        $status = $_POST['status'];
        $id = $_POST['savestat'];

        $queryValidate = "INSERT into enroll(pupil_id,gradsec_id,schoolyear_id)  VALUES($id,$gradsec_id,$schoolyear_id)";
        mysqli_query($connection, $queryValidate);

        $queryValidate = "UPDATE pupil SET status = '$status' WHERE pupil_id = $id";
        mysqli_query($connection, $queryValidate);

     
        header('Location:list_pupil/mypupil_list.php');
    }

    if (isset($_POST['save_status'])){

        $schoolyear_id = $_POST['schoolyear_id'];
        $gradsec_id = $_POST['gradsec_id'];
        $status = $_POST['status'];
        $id = $_POST['save_status'];

        $queryValidate = "INSERT into enroll(pupil_id,gradsec_id,schoolyear_id)  VALUES($id,$gradsec_id,$schoolyear_id)";
        mysqli_query($connection, $queryValidate);

        $queryValidate = "UPDATE pupil SET status = '$status' WHERE pupil_id = $id";
        mysqli_query($connection, $queryValidate);

     
        header('Location:list_pupil/pupil_list.php');
    }

?>

