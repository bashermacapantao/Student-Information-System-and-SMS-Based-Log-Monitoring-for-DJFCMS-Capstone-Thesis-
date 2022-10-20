<div id="gradeI" class="container tab-pane active">
  

      <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="text-center"> <b>Grade - I | Attendance List</b></h2>
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
                <div class="row">

                <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">FROM </label>
                            </div>
                            <input type="date" class="form-control" id="from-date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">TO</label>
                            </div>
                            <input type="date" class="form-control" id="to-date">
                        </div>
                    </div>

                </div>
                <div class="row">
                <div class="col-md-10">
                    <button id="gradeonefilter" class="btn btn-sm btn-default">Filter</button>
                    <button id="reset_gradeonesection" class="btn btn-sm btn-default">Reset section</button>
                    <button id="reset_gradeoneyear" class="btn btn-sm btn-default">Reset year</button>
                    <button id="gradeonereset" class="btn btn-sm btn-basher">Reset</button>
                    </div>
                    <div class="col-md-2">
                    <button type="button" class="btn btn-md btn-dark " data-toggle="modal" data-target="#gradeone">Print Result </button>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="table-responsive" id=" examplegradeone">
                            <table class="table-bordered table table-hover"  id="record_gradeone">
                    <thead  class="thead-dark">
                                    <tr>
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

     