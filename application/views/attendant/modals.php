<!-- Add to Doctor Modal -->
<div class="modal fade" id="cancel-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cancel Admission</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-inline">
                    Date & Time:
                    <div class="input-group ml-2">
                        <input type="text" id="nurseModalDateAndTime" data-target="#nurseModalDateAndTime" data-toggle="datetimepicker" class="form-control datetimepicker-input" placeholder="Date & Time">
                        <div class="input-group-prepend" data-target="#nurseModalDateAndTime" data-toggle="datetimepicker">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
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

<!-- Cancel Patient Admission -->
<div class="modal fade" id="attendantCancelModal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="attendantCancelModalForm" method="POST">
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
        var datetime = moment().format('L LT');
        $("#nurseModalDateAndTime").attr("value", datetime);
        setTimeout(getCurrentTime, 1000);

        var currentDate = moment(new Date).format('YYYY/MM/DD');

        $('#attendantCancelModal').on('shown.bs.modal', function(){
            $('#date_').val(currentDate);
            $('#time_').val(moment(new Date).format('hh:mm a'));
            setInterval(function(){ 
                $('#time_').val(moment(new Date).format('hh:mm a'));
            }, 1000);
        });
    });

    $("#nurseModalDateAndTime").click(function() {
        $("#nurseModalDateAndTime").removeAttr("value");
        clearTimeout(getCurrentTime);
    });

    $("#nurseModalDateAndTime").focusout(function() {
        $('.bootstrap-datetimepicker-widget').hide();
    });

    $(document).ready(function() {
        $('.addNurseNotesTextArea').each(function() {
            $(this).summernote({
                placeholder: this.placeholder,
                dialogsInBody: true,
                spellCheck: true,
                minHeight: 100,
                minWidth: 430,
                maxHeight: null,
                focus: true,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font'],
                    ['fontsize', ['fontsize']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['view', ['fullscreen']],
                ]
            });

        });
    });
</script>