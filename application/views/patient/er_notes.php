<div class="content-wrapper">

    <?= view(auth('role') . '/modals'); ?>
    <?= view('patient/components/content_header'); ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2">
                    <?= view('patient/components/sub_sidebar', $title); ?>
                </div>

                <div class="col-md-10">
                    <div class="card">

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Table row -->
                                    <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="erNotesTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date/Time</th>
                                                    <th>Status</th>
                                                    <th>History Notes</th>
                                                    <th>Assessment Plan</th>
                                                    <th>Others</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                                                    <td>Status</td>
                                                    <td>History Notes of the patient will be reflected here.</td>
                                                    <td>Assessment Plan for the patient will be reflected here.</td>
                                                    <td>
                                                        <ul>
                                                            <li> <a href="#">View Subjective Notes</a></li>
                                                            <li> <a href="#">View Objective Notes</a></li>
                                                            <li><a data-toggle="modal" href="#modal-MSE">View Mental Status Exam</a></li>
                                                            <li><a href="#">View Physical Exam</a></li>
                                                            <li><a href="#">View Neurological Exam</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 10, 2021 <br> 12:10PM <br> <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada <br> Updated by: <br> Dr. Argamosa<br> Jan 24, 2021 (4:56pm) </i></small> </td>
                                                    <td>Status</td>
                                                    <td>History Notes of the patient will be reflected here.</td>
                                                    <td>Assessment Plan for the patient will be reflected here.</td>
                                                    <td>
                                                        <ul>
                                                            <li> <a href="#">View Subjective Notes</a></li>
                                                            <li> <a href="#">View Objective Notes</a></li>
                                                            <li> <a href="#">View Treatment Plan</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                                                    <td>Status</td>
                                                    <td>History Notes of the patient will be reflected here.</td>
                                                    <td>Assessment Plan for the patient will be reflected here.</td>
                                                    <td>
                                                        <ul>
                                                            <li> <a href="#">View Subjective Notes</a></li>
                                                            <li> <a href="#">View Objective Notes</a></li>
                                                            <li><a data-toggle="modal" href="#modal-MSE">View Mental Status Exam</a></li>
                                                            <li><a href="#">View Physical Exam</a></li>
                                                            <li><a href="#">View Neurological Exam</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jan 10, 2021 <br> 12:10PM <br> <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada <br> Updated by: <br> Dr. Argamosa<br> Jan 24, 2021 (4:56pm) </i></small> </td>
                                                    <td>Status</td>
                                                    <td>History Notes of the patient will be reflected here.</td>
                                                    <td>Assessment Plan for the patient will be reflected here.</td>
                                                    <td>
                                                        <ul>
                                                            <li> <a href="#">View Subjective Notes</a></li>
                                                            <li> <a href="#">View Objective Notes</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Date/Time</th>
                                                    <th>Status</th>
                                                    <th>History Notes</th>
                                                    <th>Assessment Plan</th>
                                                    <th>Others</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- /.row -->
                                    <hr>
                                    <div class="d-flex justify-content-center">
                                        <!-- <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#trans-add">Add Notes</button> -->
                                    </div>

                                </div>
                                <!-- /.tab-pane -->

                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>



<script>
    $(function() {
        $("#erNotesTable").DataTable({
            language: {
                searchPlaceholder: "Search notes"
            },
            "responsive": true,
            "autoWidth": false,
        });

        <?php if (auth('role') == 'doctor') { ?>
            $("#erNotesTable_length").find('label').after('<button class="btn btn-sm btn-success ml-3" data-toggle="modal" data-target="#er-notes-add">Add ER Notes <i class="ml-1 fas fa-plus"></i></button>');
        <?php } ?>

    });

    var transfer_counter = 0;

    $("#add_trans_btn").on('click', function() {
        transfer_counter++;
        var html = '<div class="row mt-2 ml-1" id="transfer_no' + transfer_counter + '">';
        html += '<label class="" for="">Transfer: </label>';
        html += '<select name="" id="" class="form-control ml-2 mr-3">';
        html += '<option value="">In</option>';
        html += '<option value="">Out</option>';
        html += '</select>';
        html += '<label class="" for="">What Pavilion? </label>';
        html += '<select name="" id="" class="form-control ml-2 mr-3">';
        html += '<option value="">Pavilion 1</option>';
        html += '<option value="">Pavilion 2</option>';
        html += '</select></div>';
        $("#transfer_div").append(html);
    });

    $("#remove_trans_btn").on('click', function() {
        $('#transfer_no' + transfer_counter).remove();
        transfer_counter--;
    });

    var er_notes_sec = {
        "er_notes_subj": 0,
        "er_notes_obj": 0
    };

    $(".add_er_notes_sec").on('click', function() {
        console.log(er_notes_sec[this.id]);
        if (er_notes_sec[this.id] == 0) {
            er_notes_sec[this.id] = +1;

            var html = '<div id="' + this.id + '_div' + '">';
            html += '<div class="d-flex justify-content-between mb-1">';
            var label;
            switch (this.id) {
                case "er_notes_subj":
                    label = 'Subjective Notes';
                    break;
                case "er_notes_obj":
                    label = 'Objective Notes';
                    break;
            }
            html += '<span>' + label + '</span>';
            html += '<button class="btn btn-sm btn-danger" onclick="rm_er_notes_sec(\'' + this.id + '\')">Remove ' + label + '</button>';
            html += '</div>';
            html += '<textarea id="' + this.id + '_ta' + '" class="form-control summernote"></textarea>';
            html += '</div>';
            $("#er_notes").append(html);

            $('#' + this.id + '_ta').summernote({
                placeholder: this.placeholder,
                dialogsInBody: true,
                spellCheck: true,
                minHeight: 90,
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
        }
    });

    function rm_er_notes_sec(input) {
        document.getElementById(input + '_div').remove();
        er_notes_sec[input] = er_notes_sec[input] - 1;
    }

    $('#summernote1, #summernote').each(function() {
        $(this).summernote({
            placeholder: this.placeholder,
            dialogsInBody: true,
            spellCheck: true,
            minHeight: 90,
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

    $('.tabNext').click(function() {
        $('.nav-tabs > .active').next('a').trigger('click');
    });

    $('.tabPrevious').click(function() {
        $('.nav-tabs > .active').prev('a').trigger('click');
    });

    function change(radio) {
        if (radio.checked && radio.id === "durationNum") {
            +
            $("#durNumDiv").removeClass("d-none");
            $("#durRangeDiv").hide();
        } else {
            $("#durNumDiv").addClass("d-none");
            $("#durRangeDiv").show();
        }
    }
</script>