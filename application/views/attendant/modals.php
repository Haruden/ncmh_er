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

<script>
    $(function getCurrentTime() {
        var datetime = moment().format('L LT');
        $("#nurseModalDateAndTime").attr("value", datetime);
        setTimeout(getCurrentTime, 1000);
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