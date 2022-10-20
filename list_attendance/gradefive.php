<div id="gradeV" class="container tab-pane fade active">
  

      <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="text-center"> <b>Grade - V | Attendance List</b></h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Grade - V </label>
                            </div>
                            <select class="custom-select" id="select_gradefivesection">
                                <option value="">Choose Section ...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">School year</label>
                            </div>
                            <select class="custom-select" id="select_gradefiveyear">
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
            <input type="date" class="form-control" id="gradefive_from-date">
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">TO</label>
            </div>
            <input type="date" class="form-control" id="gradefive_to-date">
        </div>
    </div>
</div>
<div class="row">
                <div class="col-md-10">
                    <button id="gradefivefilter" class="btn btn-sm btn-default">Filter</button>
                    <button id="reset_gradefivesection" class="btn btn-sm btn-default">Reset section</button>
                    <button id="reset_gradefiveyear" class="btn btn-sm btn-default">Reset year</button>
                    <button id="gradefivereset" class="btn btn-sm btn-basher">Reset</button>
                    </div>
                    <div class="col-md-2">
                    <button type="button" class="btn btn-md btn-dark" data-toggle="modal" data-target="#gradefive">Print Result </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover" id="record_gradefive">
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
                


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
      

    </div>