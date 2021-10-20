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
                                <div class="active tab-pane" id="special_instructions">
                                    <div style="white-space: nowrap; overflow: hidden; margin: 0; padding: 0;">
                                        <div class="float-left" style="display: inline-block;">
                                            <h4>SPECIAL INSTRUCTIONS <span class="badge badge-pill badge-success center">4</span></h4>
                                        </div>
                                        <div class="float-right" style="display: inline-block;">
                                            <div class="btn btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-sm btn-default">
                                                   <input type="radio" name="options_active" id="option1" autocomplete="off">ACTIVE
                                                </label>
                                                <label class="btn btn-sm btn-default">
                                                    <input type="radio" name="options_done" id="option2" autocomplete="off">DONE
                                                </label>
                                                <label class="btn btn-sm btn-default">
                                                    <input type="radio" name="options_all" id="option3" autocomplete="off">ALL
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="button" class="dataTables_wrapper dt-bootstrap4">
                                        <table id="special_instructions_Table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="20">
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </th>
                                                    <th>Instruction</th>
                                                    <th width="140">Date/Time Instructed</th>
                                                    <th width="100">Status</th>
                                                    <th width="100">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <!-- <td><span class="badge badge-success center">ACTIVE</span></td> -->
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>
                                
                                                <tr>
                                                    <td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <<td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block bg-gradient-secondary disabled">DONE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block bg-gradient-secondary disabled">DONE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>
                                                <tfoot>
                                                    <tr>
                                                        <th width="20"></th>
                                                        <th>Instruction</th>
                                                        <th width="140">Date/Time Instructed</th>
                                                        <th width="100">Status</th>
                                                        <th width="100">Action</th>
                                                    </tr>
                                                </tfoot>
                                            </tbody>
                                        </table>
                                    </div> <!-- End of Table -->

                                    <hr>
                                    <div class="mt-3 d-flex justify-content-center">
                                        <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add-doctor-order">Add Order</button> -->
                                    </div>

                                </div> <!-- End of tab pane -->
                            </div> <!-- End of tab content -->
                        </div> <!-- End of card body -->
                    </div> <!-- /card -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<script>

    var table_alldata
    var filteredTable;

    $(function() {
    
        table_alldata = $('#special_instructions_Table').DataTable({
            language: {
                searchPlaceholder: "Search Instruction"
            },
            columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
            }],
            select: {
                style:    'os',
                selector: 'td:first-child',
            },
            "responsive": true,
            "autoWidth": false,
            order: [[ 1, 'asc' ]]
            
        });

        $('#option1').on('click', function () {

            var status = 'ACTIVE';

            var filteredData_ACTIVE = table_alldata
            .column( 3 )
            .data()
            .filter(function(value, index){

                var table_status = document.querySelectorAll("td");

                table_status.foreach(function(el){

                    if(el.textContent === status){
                        return true;
                    } else  return false;
                });

            });

            filteredTable = table_alldata;
            // filteredTable.clear();
            // filteredTable.rows.add(filteredData_ACTIVE);
            filteredTable.draw();
        });

    });

    // $('#special_instructions_Table tbody').on('click', 'tr', function () {
    //     $(this).toggleClass('selected');
    // } );
        
    // $('#button').click( function () {
    //     alert(table.rows('.selected').data().length +' row(s) selected' );
    // } );

</script>