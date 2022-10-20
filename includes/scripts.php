<script>
    
    function openSlideMenu(){
         document.getElementById("side-menu").style.display = "block";
         document.getElementById("side-menu").style.width='250px';
    }
    function closeSlideMenu(){
        document.getElementById("side-menu").style.display = "none";
        document.getElementById("side-menu").style.width='0';
    }
$(document).ready(function(){
$("#logoutBtn").click(function(){
$("#logoutModal").modal();
 });
});
    
    $(document).ready(function(){
  $("#add_adviserBtn").on('click',function(){
    $("#add_adviserModal").modal('show');
  });
});

$(document).ready(function(){
  $("#add_gradsecBtn").on('click',function(){
    $("#add_gradsecModal").modal('show');
  });
});
$(document).ready(function(){
  $("#add_schoolyearBtn").on('click',function(){
    $("#add_schoolyearModal").modal('show');
  });
});

$(document).ready(function(){
  $("#printBtn").on('click',function(){
    $("#print_id_Modal").modal('show');
  });
});
$(document).ready(function(){
  $("#qrcodeBtn").on('click',function(){
    $("#qrcodeModal").modal('show');
  });
});
$(document).ready(function(){
  $("#addpupilBtn").on('click',function(){
    $("#addpupilModal").modal('show');
  });
});

$(document).ready(function(){
  $("#moredetailsBtn").on('click',function(){
    $("#moredetailsModal").modal('show');
  });
});

$(document).ready(function(){
  $("#add_user_Btn").on('click',function(){
    $("#add_user_Modal").modal('show');
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


    // $(document).ready(function(){
    //      $("#add_user_Btn").click(function(){
    //         $("#add_user_Modal").modal();
    //     });
    // });


    
//datatable in adviserlist
$(document).ready(function() {
    $('#datatableid').DataTable({
    //    "pagingType": "full_numbers",
        "lengthMenu": [
            [5, 10, 20, -1],
            [5, 10, 20, "ALL"]
        ],
        responsive: true,
        language:{
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });
});

$(document).ready(function() {
    $('#datatableid2').DataTable({
    //    "pagingType": "full_numbers",
        "lengthMenu": [
            [7, 10, 20, -1],
            [7, 10, 20, "ALL"]
        ],
        responsive: true,
        language:{
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });
});

$(document).ready(function() {
    $('#datatableid3').DataTable({
    //    "pagingType": "full_numbers",
        "lengthMenu": [
            [5, 10, 20, -1],
            [5, 10, 20, "ALL"]
        ],
        responsive: true,
        language:{
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });
});

$(document).ready(function() {
    $('#datatableid4').DataTable({
    //    "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 15, 20, -1],
            [10, 15, 20, "ALL"]
        ],
        responsive: true,
        language:{
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });
});



    // $(document).ready(function(){
    //     $("#edit_user_Btn").on('click',function(){
    //         $("#edit_user_Modal").modal('show');
                
    //             $tr = $(this).closest('tr');

    //             var data =  $tr.children("td").map(function(){
    //                 return $(this).text();
    //             }).get();
    //             console.log(data);
    //             $('#update_id').val(data[0]);
    //             $('#name').val(data[1]);
    //             $('#username').val(data[2]);
    //             $('#password').val(data[3]);
    //             $('#emailAddress').val(data[4]);
    //     });
    // });

      //       $(document).ready(function()
      // {
      //   setTimeout(function()
      //   {
      //     $('#message').hide();
      //   },4000);
      // })
</script>    
</body>
</html>