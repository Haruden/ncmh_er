<!-- Identifying Marks Modal -->
<div class="modal fade" id="modal-marks">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Identifying Marks</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body p-2">

                <div class="row">
                    <div class="col-sm-1">

                        <div class="row mt-2 mb-5">
                            <div class="colorButtons col-sm-2">
                                <span class="mr-1">Color: </span>
                                <input type="color" id="colorpicker" value="#c81464" class="colorpicker">
                            </div>
                        </div>

                        <div class="row">
                            <div class="toolsButtons col-sm-2">
                                <span class="mr-1">Tools:</span>
                                <button id="eraser" class="btn btn-sm btn-default mb-1"><i class="fas fa-eraser"></i></button>
                                <button id="clear" class="btn btn-sm btn-danger">Clear</button>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-sm-11" style="margin-left: -50px;">
                        <div id="marks-body" style="width:1050px; height:500px;"></div>
                    </div>
                </div>
                
                <div id="canvas_controls" class="row d-flex justify-content-center" style="display:none;">

                    <!-- For centering controls -->
                    <!-- <div class="col-sm-3"></div> -->                    

                    <div class="buttonSize form-inline" style="display:none;">
                        Size (<span id="showSize">1</span>): &nbsp;
                        <input type="range" min="1" max="50" value="1" step="1" id="controlSize">
                    </div>

                    <!-- For centering controls -->
                    <div class="col-sm-4"></div>

                    <div class="colorButtons" style="display:none;">
                        <h3>Bg Color</h3>
                        <input type="color" value="#ffffff" id="bgcolorpicker" class="colorpicker">
                    </div>

                    <div class="canvasSize" style="display:none;">
                        <h3>Canvas</h3>
                        <div class="input-group">
                            <span class="input-group-addon">X</span>
                            <input type="number" id="sizeX" class="form-control" placeholder="sizeX" value="1050" class="size">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Y</span>
                            <input type="number" id="sizeY" class="form-control" placeholder="sizeY" value="500" class="size">
                        </div>
                        <input type="button" class="updateSize btn btn-success" value="Update" id="canvasUpdate">
                    </div>

                    <div class="Storage" style="display:none;">
                        <h3>Storage</h3>
                        <input type="button" value="Save" class="btn btn-warning" id="save">
                        <input type="button" value="Load" class="btn btn-warning" id="load">
                        <input type="button" value="Clear" class="btn btn-warning" id="clearCache">
                    </div>
                    <div class="extra" style="display:none;">
                        <h3>Extra</h3>
                        <a id="saveToImage" class="btn btn-warning">Download</a>
                    </div>

                </div>

                <!-- <div class="row mt-4 px-4">
                    <button class="btn btn-default btn-sm" style="width: 50%;">Scan Left Thumb</button>
                    <button class="btn btn-default btn-sm" style="width: 50%;">Scan Right Thumb</button>
                </div> -->

                <div class="row mt-4 px-4">
                    <span class="mr-2">Notes:</span> 
                    <textarea name="" id="id_marks_notes" rows="5"></textarea>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

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
                                <input type="text" id="addVitalsDatePicker" data-target="#addVitalsDatePicker" data-toggle="datetimepicker" class="form-control datetimepicker-input" placeholder="Date & Time">
                                <div class="input-group-prepend" data-target="#addVitalsDatePicker" data-toggle="datetimepicker">
                                    <div class="input-group-text">
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
                            <div class="row">
                                <div class="col-6 border-right rounded ">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Respiratory rate:</label>
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

<div class="modal fade" id="nurse-add-notes-modal" data-backdrop="static">
    <div class="modal-dialog" style="max-width: 60%;">
        <div class="modal-content">
            <div class="modal-header" data-dismiss="datetimepicker">
                <h4 class="modal-title">Add Nurse's Notes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group form-inline">
                    <label for="nurseModalDateAndTime">Date & Time:</label>
                    <div class="input-group ml-2">
                        <input type="text" id="nurseModalDateAndTime" data-target="#nurseModalDateAndTime" data-toggle="datetimepicker" class="form-control datetimepicker-input" placeholder="Date & Time">
                        <div class="input-group-prepend" data-target="#nurseModalDateAndTime" data-toggle="datetimepicker">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label for="choose-pavilion">Pavilion:</label>
                    <select class="form-control ml-2" id="choose-pavilion" disabled>
                        <option value="" selected>Emergency Room</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="focus">Focus:</label>
                            <textarea name="focus" placeholder="Add your focus here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="data">Data:</label>
                            <textarea name="data" placeholder="Add your data here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="action">Action:</label>
                            <textarea name="action" placeholder="Add your action here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="response">Response:</label>
                            <textarea name="response" placeholder="Add your response here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Small Modal -->
<div class="modal fade" id="modal-do_status">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Change Status?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <select class="form-control">
                        <option>Carried</option>
                        <option>Administered</option>
                        <option>Request Made</option>
                        <option>Endorsed</option>
                        <option>Discontinued</option>
                    </select>
                </div>

            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Cancel Patient Admission -->
<div class="modal fade" id="nurseCancelModal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="nurseCancelModalForm" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cancel ER Visit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Code (hidden) -->
                    <input type="hidden" id="code" name="code">

                    <!-- Date_ -->
                    <div class="form-group mb-3">
                        <label for="date_">
                            <strong class="text-red">*</strong>Date
                        </label>
                        <div class="input-group date" data-target-input="nearest">
                            <input type="text" readonly id="date_" name="date_" class="form-control">
                        </div>
                    </div>

                    <!-- Time_ -->
                    <div class="form-group mb-3">
                        <label for="time_">
                            <strong class="text-red">*</strong>Time
                        </label>
                        <div class="input-group date" data-target-input="nearest">
                            <input type="text" id="time_" readonly name="time_" class="form-control datetimepicker-input">
                        </div>
                    </div>

                    <!--Details -->
                    <div class="form-group mb-3">
                        <label for="details">
                            <strong class="text-red">*</strong>Details
                        </label>
                        <textarea class="form-control mb-2 mr-sm-2" id="details" name="details"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(function getCurrentTime() {

        var currentDate = moment(new Date).format('YYYY/MM/DD');

        $('#nurseCancelModal').on('shown.bs.modal', function(){
            $('#date_').val(currentDate);
            $('#time_').val(moment(new Date).format('hh:mm a'));
            setInterval(function(){ 
                $('#time_').val(moment(new Date).format('hh:mm a'));
            }, 1000);
        });
    });
</script>