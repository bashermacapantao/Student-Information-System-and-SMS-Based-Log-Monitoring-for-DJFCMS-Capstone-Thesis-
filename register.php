<?php
// session_start();
include('security.php');
include('database/connectdb.php'); 

   if(isset($_POST['loginBtn']))
   {
       $username_login = $_POST['username'];
    
       $password_login = $_POST['password'];

       // QUERY TO CHECK IF USERNAME AND PASSWORD IS ADVISER
    //    $query = "SELECT * FROM register r inner join adviser a on r.register_id = a.register_id inner join gradsec g on a.gradsec_id= g.gradsec_id WHERE username='$username_login' AND password='$password_login' ";
       $query = "SELECT * FROM register r inner join adviser a on r.register_id = a.register_id 
       inner join gradsec g on a.adviser_id = g.adviser_id WHERE username='$username_login' AND password='$password_login' ";
        $query_run = mysqli_query($connection, $query);
       

      // QUERY TO CHECK IF USERNAME AND PASSWORD IS FOR ADMIN
       $queryAdmin = "SELECT * FROM register WHERE username='$username_login' AND password='$password_login' ";
       $query_run_admin = mysqli_query($connection, $queryAdmin); 
      
       // IF ACCOUNT IS ADVISER
       if(mysqli_num_rows($query_run) > 0){
           
            $usertype = mysqli_fetch_assoc($query_run);

            $_SESSION['username'] =  $username_login;
            $_SESSION['user_log'] = [
            'register_id'   => $usertype['register_id'], 
            'images'        => $usertype['images'],  
            'rank'          => $usertype['rank'],
            'username'      => $usertype['username'],
            'password'      => $usertype['password'],
            'adviser_surname'  => $usertype['adviser_surname'],
            'adviser_given_name'  => $usertype['adviser_given_name'],
            'adviser_middle_name'  => $usertype['adviser_middle_name'],
            'gender'        => $usertype['gender'],
            'age'           => $usertype['age'],
            'birth_date'      => $usertype['birth_date'],
            'adviser_address'       => $usertype['adviser_address'],
            'email_address' => $usertype['email_address'],
            'phone_number'  => $usertype['phone_number'],
            'adviser_id'    => $usertype['adviser_id'],
            'grade_level'   => $usertype['grade_level'],
            'section'       => $usertype['section'],
            'gradsec_id'    => $usertype['gradsec_id']
            ];
        
            header('Location: adviser/adviserprof.php');



            
       }
       // IF ACCOUNT IS ADMIN
       else if (mysqli_num_rows($query_run_admin) > 0){

            $_SESSION['username'] =  $username_login;
            header('Location:administrator.php');
       }

       else
       {
           $_SESSION['status'] = "Username and password is Invalid";
           $_SESSION['status_code'] = "error";
           header('Location: login.php');
       }
   }



   ?>