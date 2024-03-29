<!-- ER Modal -->
<div class="modal fade" id="er-notes-add" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="erNotesModalTitle">ER Notes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <span style="color:red;">*</span>History:
                    <textarea name="editordata1" id="summernote1" class="form-control"></textarea>
                </div>

                <hr>

                <span style="color:red;">*</span>Assessment Plan:

                <div class="row">
                    <div class="form-group col-5">
                        <label>ICD Coded Psychiatric Diagnosis</label>
                        <select class="form-control">
                            <option>AF30-F39 Mood [affective] disorders</option>
                            <option>F40-F48 Anxiety, dissociative, stress-related, somatoform and other nonpsychotic mental disorders</option>
                            <option>F50-F59 Behavioral syndromes associated with physiological disturbances and physical factors</option>
                            <option>F10-F19 Mental and behavioral disorders due to psychoactive substance use</option>
                            <option>F20-F29 Schizophrenia, schizotypal, delusional, and other non-mood psychotic disorders</option>
                        </select>
                    </div>
                    <div class="form-group col-5">
                        <label>Modifier</label>
                        <select class="form-control">
                            <option>Unimproved</option>
                            <option>Improved</option>
                            <option>Manageable</option>
                            <option>Unstable</option>
                            <option>Disturbed</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label>&nbsp;</label>
                        <button type="button" class="btn btn-sm btn-block btn-success">Add &nbsp;<i class="fas fa-plus"></i></button>
                    </div>
                </div>

                <div class="form-group">
                    <label>ICD Coded Medical Diagnosis</label> <input type="checkbox" name="" id="" class="ml-2"> <label for="">None</label>
                    <select class="form-control">
                        <option>A00-B99 Certain infectious and parasitic diseases.</option>
                        <option>G00-G09 Inflammatory diseases of the central nervous system</option>
                        <option>G10-G14 Systemic atrophies primarily affecting the central nervous system</option>
                        <option>F10-F19 Mental and behavioral disorders due to psychoactive substance use</option>
                        <option>F20-F29 Schizophrenia, schizotypal, delusional, and other non-mood psychotic disorders</option>
                    </select>
                </div>

                <div>
                    Other Notes:
                    <textarea name="editordata1" id="summernote1" class="form-control"></textarea>
                </div>

                <table id="tbl_addpn" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Diagnosis</th>
                            <th>Modifier</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>F31 Bipolar Affective Disorder</td>
                            <td>Modifier</td>
                            <td>
                                <button class="btn btn-sm btn-primary">UPDATE</button>
                                <button class="btn btn-sm btn-danger">DELETE</button>
                            </td>
                        </tr>
                        <tr>
                            <td>F41 Panic Disorder</td>
                            <td>Modifier</td>
                            <td>
                                <button class="btn btn-sm btn-primary">UPDATE</button>
                                <button class="btn btn-sm btn-danger">DELETE</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div>
                    <span style="color:red;">*</span>Treatment Plan:
                    <textarea name="editordata1" id="summernote1" class="form-control"></textarea>
                </div>

                <div id="er_notes">
                </div>

                <div class="d-flex justify-content-end mt-2">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                        Add Section
                    </button>
                    <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                        <li class="dropdown-item add_er_notes_sec" id="er_notes_subj"><a href="#">Add Subjective Notes</a></li>
                        <li class="dropdown-item add_er_notes_sec" id="er_notes_obj"><a href="#">Add Objective Notes</a></li>
                        <!-- <li class="dropdown-item add_er_notes_sec" id="er_notes_assess"><a href="#">Add Assessment Notes</a></li>
                        <li class="dropdown-item add_er_notes_sec" id="er_notes_treat"><a href="#">Add Treatment Plan</a></li>
                        <li class="dropdown-item"><a href="#">Add Course in the Ward</a></li> -->
                        <li class="dropdown-item"><a data-toggle="modal" href="#mse-add">Add Mental Status Exam</a></li>
                        <li class="dropdown-item"><a data-toggle="modal" href="#pe-add">Add Physical Exam</a></li>
                        <li class="dropdown-item"><a data-toggle="modal" href="#neuro-add">Add Neurological Exam</a></li>
                    </ul>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Save</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Mental Status Exam -->
<div class="modal fade" id="mse-add" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add MENTAL STATUS EXAMINATION</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <!-- <h3>MENTAL STATUS EXAMINATION &nbsp;  -->
                    <button class="btn btn-default">Import Previous Data</button></h3>

                    <hr>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>General Appearance</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Weight:</label>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Obese </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Underweight </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Emaciated </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Grooming:</label>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Well-kempt </span>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Kempt </span>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Poorly-kempt </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Behavior/Motor</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Repetition </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Overactivity </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Agitated </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Catatonia </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Attitude</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Cooperative </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Attentive </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Evasive </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Hostile </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Mood</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Euphoric </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Expansive </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Depressed </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Euthymic </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Labile </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Affect</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Quality/Tone:</label>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Euthymic </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Happy </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Irritable </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Expansive </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Labile </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Depressed </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Agitated </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Quantity:</label>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Mild </span>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Moderate </span>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Severe </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Range:</label>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Restricted </span>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Flat </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Appropriateness:</label>
                                    <input type="radio" name="appropriateness" class="form-control mr-1"> <span class="mr-3"> Appropriate </span>
                                    <input type="radio" name="appropriateness" class="form-control mr-1"> <span class="mr-3"> Inappropriate </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Congruence:</label>
                                    <input type="radio" name="congruence" class="form-control mr-1"> <span class="mr-3"> Congruent </span>
                                    <input type="radio" name="congruence" class="form-control mr-1"> <span class="mr-3"> Incongruent </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Speech</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Fluency:</label>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Paraphasia </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Slurred </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Stuttering </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Amount:</label>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Normoproductive </span>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Hyperproductive </span>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Hypoproductive </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Rate:</label>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Slowed </span>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Rapid </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Tone:</label>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Childlike </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Anxious </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Irritable </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Timid </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Volume:</label>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Audible </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Soft </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Loud </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Mumbled </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Thought Process</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Goal-directed </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Flight of Ideas </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Circumstantiality </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Looseness of Association </span>
                                </div>
                                <div class="form-inline">
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Tangentiality </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Thought Blocking </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Neologism </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Perseveration </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Thought Content</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2 pt-2">

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Obsession:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Preoccupations:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Compulsions:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Suicidality:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="radio" name="suicidality" class="form-control mr-1"> <span class="mr-2"> Suicide ideations </span>
                                        <input type="radio" name="suicidality" class="form-control mr-1"> <span class="mr-2"> Suicide behavior </span>
                                        <input type="text" name="suicidality" class="form-control mr-1" style="width:60%">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Homocidality:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Delusions:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Bizzare </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Non-bizzare </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Mood-congruent </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Mood-incongruent </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Grandiose </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Persecutory </span>
                                        </br>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Erotomania </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Paranoid </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Jealousy </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Somatic </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Referential </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Nihilistic </span>
                                        </br>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Withdrawal </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Broadcasting </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Insertion </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Control </span>
                                    </div>
                                </div>

                                <div class="form-inline">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-10 row m-0">
                                        <div class="form-inline col-md-1 m-0 p-0">
                                            <label>Details:</label>
                                        </div>
                                        <div class="col-md-11 m-0 p-0">
                                            <textarea class="form-control mb-2" style="width:100%"></textarea>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Other Findings:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Perception</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Auditory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Visual </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Tactile </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Gustatory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Olfactory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Derealization </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Depersonalization </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Notes:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Other Findings:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Sensorium/Cognition</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Consciousness:</label>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Awake </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Asleep </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Lethargic </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Obtunded </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Stuporous </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Coma </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Orientation:</label>
                                    <input type="checkbox" name="orientation" class="form-control mr-1"> <span class="mr-3"> Person </span>
                                    <input type="checkbox" name="orientation" class="form-control mr-1"> <span class="mr-3"> Place </span>
                                    <input type="checkbox" name="orientation" class="form-control mr-1"> <span class="mr-3"> Time </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Attention Span:</label>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Calculation:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Abstract Thinking:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Fund of Knowledge:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Memory:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Impulse:</label>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Judgement:</label>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Insight:</label>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Reliability:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <input type="hidden" value="submitted" name="ope_submitted" /> -->
                    <!-- <button type="submit" class="btn btn-primary float-right" name="ope_submit">Submit</button> -->
                    <!-- <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button> -->
                </form>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Physical Examination -->
<div class="modal fade" id="pe-add" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Physical Examination</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="form-group form-inline">
                        <label>General Survey:</label>
                        <select class="form-control mx-2" name="pe_general_survey">
                            <option value="">Ambulatory</option>
                            <option value="">Ambulatory with assistance</option>
                            <option value="">Wheelchair-borne</option>
                            <option value="">Stretcher-borne</option>
                        </select>
                    </div>

                    <hr>
                    <h5>Body Measurements</h5>

                    <div class="form-group form-inline">
                        <label>Height:</label>
                        <input type="number" class="form-control mx-2" id="height" style="width: 100px;" value=0>cm &emsp;

                        <label>Weight:</label>
                        <input type="number" class="form-control mx-2" id="weight" style="width: 100px;" value=0>kg &emsp;

                        <label>BMI:</label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="bmi" readonly> &emsp;

                        <label>Abdominal Girth:</label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="">in &emsp;
                    </div>

                    <div class="form-group form-inline">
                        <label>Level of Consciousness:</label>
                        <select name="pe_general_survey" class="form-control mx-2">
                            <option value="">Alert</option>
                            <option value="">Drowsy</option>
                            <option value="">Stuporous</option>
                            <option value="">Lethargic</option>
                        </select>
                    </div>

                    <hr>
                    <h5>Vital Signs</h5>
                    <div class="form-group form-inline">
                        <label> BP (SBP/DBP): </label>
                        <input type="number" class="form-control mx-2" style="width: 80px;" id="">/
                        <input type="number" class="form-control mx-2" style="width: 80px;" id="">mmHg &emsp;

                        <label> Heart Rate: </label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id="">bpm &emsp;

                        <label> O2 Saturation: </label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id="">
                    </div>

                    <div class="form-group form-inline">
                        <label>Respiratory Rate:</label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id=""> &emsp;

                        <label> Temperature: </label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="">C
                    </div>

                    <hr>
                    <h5>Other Physical Examination</h5>

                    <div class="form-group">
                        <input type="checkbox" id="normal_phyex" class="form-group mx-2" name="normal_phyex" /> Essentially Normal, No Significant Findings
                        <table class="table" id="other_phyex_form">
                            <tr>
                                <td><label>Skin</label></td>
                                <td><input type="radio" name="skin" value="normal">Normal</td>
                                <td><input type="radio" name="skin" value="abnormal">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>HEENT</label></td>
                                <td><input type="radio" name="heent">Normal</td>
                                <td><input type="radio" name="heent">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>Chest and Lungs</label></td>
                                <td><input type="radio" name="cl">Normal</td>
                                <td><input type="radio" name="cl">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>Heart</label></td>
                                <td><input type="radio" name="heart">Normal</td>
                                <td><input type="radio" name="heart">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>Abdomen</label></td>
                                <td><input type="radio" name="ab">Normal</td>
                                <td><input type="radio" name="ab">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>Extremities</label></td>
                                <td><input type="radio" name="ex">Normal</td>
                                <td><input type="radio" name="ex">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                        </table>
                        <label for="hn_ope_findings">Other Relevant Findings:</label>
                        <textarea class="form-control"></textarea>
                    </div>

                </form>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Neurological Exam -->
<div class="modal fade" id="neuro-add" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Neurological Exam </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="needs-validation" method="POST" novalidate>

                    <div class="form-group">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><label>Cerebral/Cognitive Function</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Cranial Nerves</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Motor Strength</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Cerebellar Function</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Reflexes</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Sensory Exam</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Meningeal Sign/s</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Gait</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                        </table>
                    </div>

                    <!-- <input type="hidden" value="submitted" name="ope_submitted" /> -->
                    <!-- <button type="submit" class="btn btn-primary float-right" name="ope_submit">Submit</button> -->
                    <!-- <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button> -->
                </form>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- VIEW MSE -->
<div class="modal fade" id="modal-MSE" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mental Status Examination</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date/Time</th>
                            <th>Findings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted"><br>Encoded by: <br> Dr. Cruzada </i></small></td>
                            <td>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>General Appearance:</b><br>
                                            </td>
                                            <td>
                                                <b>Weight:</b> Obese &emsp; <b>Grooming:</b> Well-kempt &emsp; <b>Other Findings:</b> Notes on other findings.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Behavior/Motor:</b></td>
                                            <td>Repetition &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Attitude:</b></td>
                                            <td>Cooperative &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Mood:</b></td>
                                            <td>Euphoric &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Affect:</b></td>
                                            <td><b>Quality/Tone:</b> Eutymic &emsp; <b>Quantity:</b> Mild &emsp; <b>Range:</b> Normal &emsp; <b>Appropriateness:</b> Appropriate &emsp;<b>Congruence:</b> Congruent</td>
                                        </tr>
                                        <tr>
                                            <td><b>Speech:</b></td>
                                            <td><b>Fluency:</b> Normal &emsp; <b>Amount:</b> Normoproductive &emsp; <b>Rate:</b> Normal &emsp; <b>Tone:</b> Normal &emsp; <b>Volume:</b> Congruent </td>
                                        </tr>
                                        <tr>
                                            <td><b>Thought Process:</b></td>
                                            <td><b>Quality/Tone:</b> Goal-directed</td>
                                        </tr>
                                        <tr>
                                            <td><b>Thought Content:</b></td>
                                            <td><b>Obsession:</b> Notes here about px obsessions.<br>
                                                <b>Preoccupations:</b> Notes here about px preoccupations.<br>
                                                <b>Compulsions:</b> Notes here about px compulsions.<br>
                                                <b>Suicidality:</b> Suicide ideations notes<br>
                                                <b>Homicidality:</b> Notes here about px homicidality.<br>
                                                <b>Delusions:</b> Bizarre, mood-congruent<br>
                                                <b>Description:</b> Notes here about thought content.<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Perception:</b></td>
                                            <td>Auditory, Derealization, Gustatory, Olfactory<br><b>Notes:</b> Additional notes on perception.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Sensorium/Cognition:</b></td>
                                            <td><b>Consciousness:</b> Awake </br>
                                                <b>Orientation:</b> Person </br>
                                                <b>Attention span:</b> Good </br>
                                                <b>Abstract Thinking:</b> Good </br>
                                                <b>Calculation:</b> Good </br>
                                                <b>Abstract Thinking:</b> Good </br>
                                                <b>Fund of Knowledge:</b> Good </br>
                                                <b>Memory:</b> Good </br>
                                                <b>Impulse:</b> Good </br>
                                                <b>Judgement:</b> Good </br>
                                                <b>Insight:</b> Good </br>
                                                <b>Reliability:</b> Good </br>
                                                <b>Others:</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add Notes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>

    var er_notes_sec = {
        "er_notes_subj": 0,
        "er_notes_obj": 0
    };

    function rm_er_notes_sec(input) {
        document.getElementById(input + '_div').remove();
        er_notes_sec[input] = er_notes_sec[input] - 1;
    };

    $(function(){

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
    });
</script>