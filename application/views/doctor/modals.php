<!-- Add to Doctor Modal -->
<div class="modal fade" id="ATD-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add to Doctor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-inline">
                    <label>Are the documents complete?</label>
                    <select class="form-control ml-2">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>                
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Add Vitals -->
<div class="modal fade" id="addVitalsModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Vitals</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

            <div class="row">

                <div class="col-12">

                    <!-- Date dd/mm/yyyy -->
                    <div class="form-group">

                        <label>Date/Time:</label>

                        <div class="input-group mb-2">
                            <input type="text"  id="addVitalsDatePicker" data-target="#addVitalsDatePicker" data-toggle="datetimepicker" class="form-control datetimepicker-input" placeholder="Date & Time">
                                <div class="input-group-prepend" data-target="#addVitalsDatePicker" data-toggle="datetimepicker">
                                    <div class="input-group-text" >
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                        </div>
                        
                        <!-- /.input group -->
                    </div>

                </div>

                    <div class="col-6 border-right rounded">

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Blood Pressure:</label>
                                <div class = "row">
                                    <div class = "col-6 border-right rounded ">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class = "col-6 ">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control">
                                        </div>

                                    </div>
                                </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Repository rate:</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control">
                                </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Pulse Rate:</label>
                                <div class="input-group mb-3">

                                    <input type="number" class="form-control">

                                </div>
                        </div>
                        <!-- /.form group -->

                    </div>

                    <div class="col-6">

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Temperature:</label>
                                <div class="input-group mb-3">

                                    <input type="number" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">°C</span>
                                    </div>

                                </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>O2 Stat:</label>
                                <div class="input-group mb-3">

                                    <input type="number" class="form-control">

                                </div>
                        </div>
                        <!-- /.form group -->

                    </div>

                    <div class="col-12 border-top mt-3">
                    
                        <!-- /.form group -->
                        <div class="form-group mt-2">
                            <label>Others:</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control">

                                </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Taken By:</label>
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control">

                                </div>
                        </div>
                        <!-- /.form group -->

                    </div>

                </div>
 
            </div>
            <div class="modal-footer justify-content-between">                
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->