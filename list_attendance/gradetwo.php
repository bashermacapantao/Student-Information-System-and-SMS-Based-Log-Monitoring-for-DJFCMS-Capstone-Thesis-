<div id="gradeII" class="container tab-pane fade active">


      <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="text-center"> <b>Grade - II | Attendance List</b></h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Grade - II </label>
                            </div>
                            <select class="custom-select" id="select_gradetwosection">
                                <option value="">Choose Section ...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">School year</label>
                            </div>
                            <select class="custom-select" id="select_gradetwoyear">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>
                </div>

<div class="row">
<div class="col-md-6">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">FROM </label>
            </div>
            <input type="date" class="form-control" id="gradetwo_from-date">
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">TO</label>
            </div>
            <input type="date" class="form-control" id="gradetwo_to-date">
        </div>
    </div>
</div>
<div class="row">
                <div class="col-md-10">
                    <button id="gradetwofilter" class="btn btn-sm btn-default">Filter</button>
                    <button id="reset_gradetwosection" class="btn btn-sm btn-default">Reset section</button>
                    <button id="reset_gradetwoyear" class="btn btn-sm btn-default">Reset year</button>
                    <button id="gradetworeset" class="btn btn-sm btn-basher">Reset</button>
                    </div>
                    <div class="col-md-2">
                    <button type="button" class="btn btn-md btn-dark" data-toggle="modal" data-target="#gradetwo">Print Result </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
          
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover" id="record_gradetwo">
                    <thead  class="thead-dark">
                                    <tr>
                                    <!-- <th>#</th> -->
                                <th>Pupil Name</th>
                                 <th>Grade</th>
                                 <th>Section</th>
                                 <th>A.M. Time IN</th> 
                                 <th>A.M. Time OUT</th>
                                 <th>P.M. Time IN</th>
                                 <th>P.M. Time OUT</th>
                                 <th>LOGDATE</th>
                                 <th>School Year</th>
                                    </tr>
                                </thead>
                         <tbody>  
                         </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
      

    </div>