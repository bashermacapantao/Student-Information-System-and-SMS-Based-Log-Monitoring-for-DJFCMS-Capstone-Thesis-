<?php
include('../security.php');
include('includes/header_admin.php');
include('includes/navbar.php');
?>

  <div class="tab-content">
    <!-- <div id="home" class="container tab-pane active">
      <h2> <b>Grade & Section List</b></h2>
    <div class="container">  
          
                 </div>

    </div> -->
    <!-- ########################################### -->
   
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="text-center"> <b>Grade - I | Pupil List</b></h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Grade - I </label>
                            </div>
                            <select class="custom-select" id="select_gradeonesection">
                                <option value="">Choose Section ...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">School year</label>
                            </div>
                            <select class="custom-select" id="select_gradeoneyear">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="gradeonefilter" class="btn btn-sm btn-outline-info">Filter</button>
                    <button id="reset_gradeonesection" class="btn btn-sm btn-outline-info">Reset section</button>
                    <button id="reset_gradeoneyear" class="btn btn-sm btn-outline-info">Reset year</button>
                    <button id="gradeonereset" class="btn btn-sm btn-warning">Reset</button>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover" id="record_gradeone">
                    <thead  class="thead-dark">
                                    <tr>
                                    <!-- <th>#</th> -->
                                 <th>Picture</th>
                                 <th>LRN #.</th>
                                 <th>Pupil Name</th>
                                 <th>Gender</th>
                                 <th>Guardian</th>
                                 <th>Relation</th>
                                 <th>Guardian #</th>
                                 <th>Grade</th>
                                 <th>Section</th>
                                 <th>Adviser Name</th>
                                 <th>School Year</th>
                                 <th>QR Code</th>
                                 <th>ACTION</th>
                                    </tr>
                                </thead>
                         <tbody>  
                


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







<!-- <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script> -->

    <!-- Moment Js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
    
<script src="dependecies/jquery/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="dependecies/popper/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="dependecies/bootstrap/js/4.4.1/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="dependecies/datatables/datatables.min.js"></script>

    <!-- Moment Js -->
    <script src="dependecies/momentJS/moment.min.js"></script>

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
             $(".nav-tabs a").click(function(){
             $(this).tab('show');
           });
        });

    // Fetch Standard

    function fetch_section() {
        $.ajax({
            url: "fetch_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_section").append(sectionBody);
            }
        });
    }
    fetch_section();

    // Fetch Result

    function fetch_year() {
        $.ajax({
            url: "fetch_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_year").append(yearBody);
            }
        });
    }
    fetch_year();

    // Fetch Records

    function fetch(section, year) {
        $.ajax({
            url: "records.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_table').DataTable({
                    "data": data,
                    "responsive": true,
                    "columns": [
                        // {
                        //     "data": "enroll_id",
                        //     "render": function(data, type, row, meta) {
                        //         return i++;
                        //     }
                        // },
                        {
                            "data": "pupil_name"
                        },
                        {
                            "data": "pupil_gender"
                        },
                        {
                            "data": "grade_level"
                        //     "render": function(data, type, row, meta) {
                        //         return `${row.standard}th Standard`;
                        //     }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "adviser_name"
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "guardian_number"
                        },
                        {
                            "data": "relationship"
                        },
                        {
                            "data": "guardian"
                        }
                    ]
                });
            }
        });
    }
    fetch();

    // Filter

    $(document).on("click", "#filter", function(e) {
        e.preventDefault();

        var section = $("#select_section").val();
        var year = $("#select_year").val();

        if (section !== "" && year !== "") {
            $('#record_table').DataTable().destroy();
            fetch(section, year);
        } else if (section !== "" && year == "") {
            $('#record_table').DataTable().destroy();
            fetch(section, '');
        } else if (section == "" && year !== "") {
            $('#record_table').DataTable().destroy();
            fetch('', year);
        } else {
            $('#record_table').DataTable().destroy();
            fetch();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_section", function(e) {
        e.preventDefault();

        $("#select_section").html(`<option value="">Choose...</option>`);

        var year = $("#select_year").val();

        if (year == "") {
            $('#record_table').DataTable().destroy();
            fetch();
            fetch_section();
        } else {
            $('#record_table').DataTable().destroy();
            fetch('', year);
            fetch_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_year", function(e) {
        e.preventDefault();

        $("#select_year").html(`<option value="">Choose...</option>`);

        var section = $("#select_section").val();

        if (section == "") {
            $('#record_table').DataTable().destroy();
            fetch();
            fetch_year();
        } else {
            $('#record_table').DataTable().destroy();
            fetch(section, '');
            fetch_year();
        }
    });

    // Reset

    $(document).on("click", "#reset", function(e) {
        e.preventDefault();

        $("#select_section").html(`<option value="">Choose...</option>`);
        $("#select_year").html(`<option value="">Choose...</option>`);

        $('#record_table').DataTable().destroy();
        fetch();
        fetch_section();
        fetch_year();
    });

    // ##########################################################################################

// Grade One           Grade One               Grade One

    // Fetch Section
    function fetchgradeone_section() {
        $.ajax({
            url: "fetchgradeone_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradeonesection").append(sectionBody);
            }
        });
    }
    fetchgradeone_section();

    // Fetch year

    function fetchgradeone_year() {
        $.ajax({
            url: "fetchgradeone_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradeoneyear").append(yearBody);
            }
        });
    }
    fetchgradeone_year();

    // Fetch Records

    function fetchgradeone(section, year) {
        $.ajax({
            url: "recordsgradeone.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradeone').DataTable({
                    "data": data,
                    "responsive": true,
                    "columns": [
                        // {
                        //     "data": "enroll_id",
                        //     "render": function(data, type, row, meta) {
                        //         return i++;
                        //     }
                        // },
                        {
                            "data": "pupil_images"
                        },
                        {
                            "data": "user_id"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.user_id}th`;
                            // }
                        },
                        {
                            "data": "pupil_name"
                        },
                        {
                            "data": "pupil_gender"
                        },
                        {
                            "data": "guardian"
                        },
                        {
                            "data": "relationship"
                        },
                        {
                            "data": "guardian_number"
                        },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "adviser_name"
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<img src="../gbrqrcode/'+data+'" />';
                            }
                        },
                        {
                            "data": "pupil_id",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<button class="btn btn-primary" value="'+data+'"  >DETAILS</button>';
                            }
                        }
                    ]
                });
            }
        });
    }
    fetchgradeone();

    // Filter

    $(document).on("click", "#gradeonefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradeonesection").val();
        var year = $("#select_gradeoneyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone('', year);
        } else {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradeonesection", function(e) {
        e.preventDefault();

        $("#select_gradeonesection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradeoneyear").val();

        if (year == "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone();
            fetchgradeone_section();
        } else {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone('', year);
            fetchgradeone_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradeoneyear", function(e) {
        e.preventDefault();

        $("#select_gradeoneyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradeonesection").val();

        if (section == "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone();
            fetchgradeone_year();
        } else {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, '');
            fetchgradeone_year();
        }
    });

    // Reset

    $(document).on("click", "#gradeonereset", function(e) {
        e.preventDefault();

        $("#select_gradeonesection").html(`<option value="">Choose...</option>`);
        $("#select_gradeoneyear").html(`<option value="">Choose...</option>`);

        $('#record_gradeone').DataTable().destroy();
        fetchgradeone();
        fetchgradeone_section();
        fetchgradeone_year();
    });


   // ##########################################################################################

// Grade Two           Grade Two               Two

    // Fetch Section
    function fetchgradetwo_section() {
        $.ajax({
            url: "fetchgradetwo_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradetwosection").append(sectionBody);
            }
        });
    }
    fetchgradetwo_section();

    // Fetch year

    function fetchgradetwo_year() {
        $.ajax({
            url: "fetchgradetwo_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradetwoyear").append(yearBody);
            }
        });
    }
    fetchgradetwo_year();

    // Fetch Records

    function fetchgradetwo(section, year) {
        $.ajax({
            url: "recordsgradetwo.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradetwo').DataTable({
                    "data": data,
                    "responsive": true,
                    "columns": [
                        // {
                        //     "data": "enroll_id",
                        //     "render": function(data, type, row, meta) {
                        //         return i++;
                        //     }
                        // },
                        {
                            "data": "pupil_images"
                        },
                        {
                            "data": "user_id"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.user_id}th`;
                            // }
                        },
                        {
                            "data": "pupil_name"
                        },
                        {
                            "data": "pupil_gender"
                        },
                        {
                            "data": "guardian"
                        },
                        {
                            "data": "relationship"
                        },
                        {
                            "data": "guardian_number"
                        },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "adviser_name"
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.template);
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradetwo();

    // Filter

    $(document).on("click", "#gradetwofilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradetwosection").val();
        var year = $("#select_gradetwoyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo('', year);
        } else {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradetwosection", function(e) {
        e.preventDefault();

        $("#select_gradetwosection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradetwoyear").val();

        if (year == "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo();
            fetchgradetwo_section();
        } else {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo('', year);
            fetchgradetwo_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradetwoyear", function(e) {
        e.preventDefault();

        $("#select_gradetwoyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradetwosection").val();

        if (section == "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo();
            fetchgradetwo_year();
        } else {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, '');
            fetchgradetwo_year();
        }
    });

    // Reset

    $(document).on("click", "#gradetworeset", function(e) {
        e.preventDefault();

        $("#select_gradetwosection").html(`<option value="">Choose...</option>`);
        $("#select_gradetwoyear").html(`<option value="">Choose...</option>`);

        $('#record_gradetwo').DataTable().destroy();
        fetchgradetwo();
        fetchgradetwo_section();
        fetchgradetwo_year();
    });



// ##########################################################################################

// Gradeethree           Gradeethree               Gradeethree

    // Fetch Section
    function fetchgradethree_section() {
        $.ajax({
            url: "fetchgradethree_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradethreesection").append(sectionBody);
            }
        });
    }
    fetchgradethree_section();

    // Fetch year

    function fetchgradethree_year() {
        $.ajax({
            url: "fetchgradethree_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradethreeyear").append(yearBody);
            }
        });
    }
    fetchgradethree_year();

    // Fetch Records

    function fetchgradethree(section, year) {
        $.ajax({
            url: "recordsgradethree.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradethree').DataTable({
                    "data": data,
                    "responsive": true,
                    "columns": [
                        // {
                        //     "data": "enroll_id",
                        //     "render": function(data, type, row, meta) {
                        //         return i++;
                        //     }
                        // },
                        {
                            "data": "pupil_images"
                        },
                        {
                            "data": "user_id"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.user_id}th`;
                            // }
                        },
                        {
                            "data": "pupil_name"
                        },
                        {
                            "data": "pupil_gender"
                        },
                        {
                            "data": "guardian"
                        },
                        {
                            "data": "relationship"
                        },
                        {
                            "data": "guardian_number"
                        },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "adviser_name"
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.template);
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradethree();

    // Filter

    $(document).on("click", "#gradethreefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradethreesection").val();
        var year = $("#select_gradethreeyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree('', year);
        } else {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradethreesection", function(e) {
        e.preventDefault();

        $("#select_gradethreesection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradethreeyear").val();

        if (year == "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree();
            fetchgradethree_section();
        } else {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree('', year);
            fetchgradethree_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradethreeyear", function(e) {
        e.preventDefault();

        $("#select_gradethreeyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradethreesection").val();

        if (section == "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree();
            fetchgradethree_year();
        } else {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, '');
            fetchgradethree_year();
        }
    });

    // Reset

    $(document).on("click", "#gradethreereset", function(e) {
        e.preventDefault();

        $("#select_gradethreesection").html(`<option value="">Choose...</option>`);
        $("#select_gradethreeyear").html(`<option value="">Choose...</option>`);

        $('#record_gradethree').DataTable().destroy();
        fetchgradethree();
        fetchgradethree_section();
        fetchgradethree_year();
    });

// ##########################################################################################

// Gradeefour           Gradeefour               Gradeefour

    // Fetch Section
    function fetchgradefour_section() {
        $.ajax({
            url: "fetchgradefour_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradefoursection").append(sectionBody);
            }
        });
    }
    fetchgradefour_section();

    // Fetch year

    function fetchgradefour_year() {
        $.ajax({
            url: "fetchgradefour_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradefouryear").append(yearBody);
            }
        });
    }
    fetchgradefour_year();

    // Fetch Records

    function fetchgradefour(section, year) {
        $.ajax({
            url: "recordsgradefour.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradefour').DataTable({
                    "data": data,
                    "responsive": true,
                    "columns": [
                        // {
                        //     "data": "enroll_id",
                        //     "render": function(data, type, row, meta) {
                        //         return i++;
                        //     }
                        // },
                        {
                            "data": "pupil_images"
                        },
                        {
                            "data": "user_id"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.user_id}th`;
                            // }
                        },
                        {
                            "data": "pupil_name"
                        },
                        {
                            "data": "pupil_gender"
                        },
                        {
                            "data": "guardian"
                        },
                        {
                            "data": "relationship"
                        },
                        {
                            "data": "guardian_number"
                        },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "adviser_name"
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.template);
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradefour();

    // Filter

    $(document).on("click", "#gradefourfilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradefoursection").val();
        var year = $("#select_gradefouryear").val();

        if (section !== "" && year !== "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour('', year);
        } else {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradefoursection", function(e) {
        e.preventDefault();

        $("#select_gradefoursection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradefouryear").val();

        if (year == "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour();
            fetchgradefour_section();
        } else {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour('', year);
            fetchgradefour_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradefouryear", function(e) {
        e.preventDefault();

        $("#select_gradefouryear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradefoursection").val();

        if (section == "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour();
            fetchgradefour_year();
        } else {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, '');
            fetchgradefour_year();
        }
    });

    // Reset

    $(document).on("click", "#gradefourreset", function(e) {
        e.preventDefault();

        $("#select_gradefoursection").html(`<option value="">Choose...</option>`);
        $("#select_gradefouryear").html(`<option value="">Choose...</option>`);

        $('#record_gradefour').DataTable().destroy();
        fetchgradefour();
        fetchgradefour_section();
        fetchgradefour_year();
    });


// ##########################################################################################

// Gradeefive           Gradeefive               Gradeefive

    // Fetch Section
    function fetchgradefive_section() {
        $.ajax({
            url: "fetchgradefive_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradefivesection").append(sectionBody);
            }
        });
    }
    fetchgradefive_section();

    // Fetch year

    function fetchgradefive_year() {
        $.ajax({
            url: "fetchgradefive_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradefiveyear").append(yearBody);
            }
        });
    }
    fetchgradefive_year();

    // Fetch Records

    function fetchgradefive(section, year) {
        $.ajax({
            url: "recordsgradefive.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradefive').DataTable({
                    "data": data,
                    "responsive": true,
                    "columns": [
                        // {
                        //     "data": "enroll_id",
                        //     "render": function(data, type, row, meta) {
                        //         return i++;
                        //     }
                        // },
                        {
                            "data": "pupil_images"
                        },
                        {
                            "data": "user_id"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.user_id}th`;
                            // }
                        },
                        {
                            "data": "pupil_name"
                        },
                        {
                            "data": "pupil_gender"
                        },
                        {
                            "data": "guardian"
                        },
                        {
                            "data": "relationship"
                        },
                        {
                            "data": "guardian_number"
                        },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "adviser_name"
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.template);
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradefive();

    // Filter

    $(document).on("click", "#gradefivefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradefivesection").val();
        var year = $("#select_gradefiveyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive('', year);
        } else {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradefivesection", function(e) {
        e.preventDefault();

        $("#select_gradefivesection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradefiveyear").val();

        if (year == "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive();
            fetchgradefive_section();
        } else {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive('', year);
            fetchgradefive_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradefiveyear", function(e) {
        e.preventDefault();

        $("#select_gradefiveyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradefivesection").val();

        if (section == "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive();
            fetchgradefive_year();
        } else {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, '');
            fetchgradefive_year();
        }
    });

    // Reset

    $(document).on("click", "#gradefivereset", function(e) {
        e.preventDefault();

        $("#select_gradefivesection").html(`<option value="">Choose...</option>`);
        $("#select_gradefiveyear").html(`<option value="">Choose...</option>`);

        $('#record_gradefive').DataTable().destroy();
        fetchgradefive();
        fetchgradefive_section();
        fetchgradefive_year();
    });



// ##########################################################################################

// Gradeesix           Gradeesix               Gradeesix

    // Fetch Section
    function fetchgradesix_section() {
        $.ajax({
            url: "fetchgradesix_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradesixsection").append(sectionBody);
            }
        });
    }
    fetchgradesix_section();

    // Fetch year

    function fetchgradesix_year() {
        $.ajax({
            url: "fetchgradesix_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradesixyear").append(yearBody);
            }
        });
    }
    fetchgradesix_year();

    // Fetch Records

    function fetchgradesix(section, year) {
        $.ajax({
            url: "recordsgradesix.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradesix').DataTable({
                    "data": data,
                    "responsive": true,
                    "columns": [
                        // {
                        //     "data": "enroll_id",
                        //     "render": function(data, type, row, meta) {
                        //         return i++;
                        //     }
                        // },
                        {
                            "data": "pupil_images"
                        },
                        {
                            "data": "user_id"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.user_id}th`;
                            // }
                        },
                        {
                            "data": "pupil_name"
                        },
                        {
                            "data": "pupil_gender"
                        },
                        {
                            "data": "guardian"
                        },
                        {
                            "data": "relationship"
                        },
                        {
                            "data": "guardian_number"
                        },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "adviser_name"
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.template);
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradesix();

    // Filter

    $(document).on("click", "#gradesixfilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradesixsection").val();
        var year = $("#select_gradesixyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix('', year);
        } else {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradesixsection", function(e) {
        e.preventDefault();

        $("#select_gradesixsection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradesixyear").val();

        if (year == "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix();
            fetchgradesix_section();
        } else {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix('', year);
            fetchgradesix_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradesixyear", function(e) {
        e.preventDefault();

        $("#select_gradesixyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradesixsection").val();

        if (section == "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix();
            fetchgradesix_year();
        } else {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, '');
            fetchgradesix_year();
        }
    });

    // Reset

    $(document).on("click", "#gradesixreset", function(e) {
        e.preventDefault();

        $("#select_gradesixsection").html(`<option value="">Choose...</option>`);
        $("#select_gradesixyear").html(`<option value="">Choose...</option>`);

        $('#record_gradesix').DataTable().destroy();
        fetchgradesix();
        fetchgradesix_section();
        fetchgradesix_year();
    });
 




    </script>
</body>

</html>