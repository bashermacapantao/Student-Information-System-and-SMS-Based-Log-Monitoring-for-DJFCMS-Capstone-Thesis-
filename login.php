<?php
session_start();
include('database/connectdb.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | user</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <link rel="stylesheet" href="dependecies/bootstrap/3.3.6/css/bootstrap.min.css">
         <link rel= "stylesheet" type="text/css" href= "css_files/login.css">

        <script src="dependecies/jquery/1.12.0/jquery.min.js"></script>
        <script src="dependecies/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="dependecies/sweetalert.min.js"></script>
</head>
<body>
     <div id="wrapper">
         <div id="left">
             <div id="signin">
                 <div class="logo">
                     <img src="css_files\img\logo.png" alt="logo" >
                 </div>
      
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="">Username:</label>
                        <input type="text" class="text-input" id="username" name="username" placeholder="Username or Email Address">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="text-input" name="password" placeholder="Password">
                    </div>
                        <button name="loginBtn" type="submit" class="btn btn-primary btn-sm">Log In</button>
                </form>
                
                <div class="or">
                    <hr class="bar">
                    <hr class="bar">
                </div>
                
                <footer id="main-footer">
                    <p>Copyright &copy; 2021, All Rights Reserved</p>
                   
                </footer>
             </div>
         </div>
         <div id="right">
  <?php
    include('includes/carousel.php')
  ?>
  
                
            </div>
     </div> 

    <script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    $(".item5").click(function(){
        $("#myCarousel").carousel(4);
    });

    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});

<?php
            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
              ?>
            
                swal({
                 title: "<?php echo $_SESSION['status']; ?>",
                  //text: "You clicked the button!",
                  icon: "<?php echo $_SESSION['status_code']; ?>",
                  button: "ok DONE!",
                  });
                 

                <?php
                unset($_SESSION['status']);
            }
          
         ?>


</script>

</body>
</html>
 
