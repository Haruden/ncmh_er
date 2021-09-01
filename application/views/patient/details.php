<!-- Content Wrapper. Contains page content -->
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
                    <div class="card card-info card-tabs socio-demog-card">
                        <div class="card-body p-0">
                            <div class="tab-content" id="tab_content">
                                <div class="tab-pane fade show active not-editable" id="socio-demog-tab" role="tabpanel">
                                    <div id="patient-socio-demog-content">
                                        <div class="card-body">
                                            <ul class="nav nav-tabs" id="socio-demog-tab-list" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="primary-information" data-toggle="pill" href="#primary-information-tab" role="tab">Socio Demographic Data</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="more-information" data-toggle="pill" href="#more-information-tab" role="tab">More</a>
                                                </li>
                                            </ul>
                                            <br />
                                            <div class="tab-content" id="socio-demog-tab-content">
                                                <div class="tab-pane fade show active" id="primary-information-tab" role="tabpanel">
                                                    <form>
                                                        <!-- Name - if view mode -->
                                                        <div class="form-group col-12 mb-3">
                                                            <label for="patient_name_inc">
                                                                Name
                                                            </label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="patient_name_inc" name="patient_name_inc" value="Monica Latte" disabled>
                                                        </div>

                                                        <!-- Alias -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="alias">
                                                                Alias
                                                            </label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="alias" name="alias" value="Mollatte" disabled>
                                                        </div>

                                                        <!-- Contact Number -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="contact_number">
                                                                Contact Number
                                                            </label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="contact_number" name="contact_number" value="4444" disabled>
                                                        </div>

                                                        <!-- Mother's Maiden Name - if view mode -->
                                                        <div class="form-group col-12 mb-3">
                                                            <label for="mm_name">
                                                                Mother's Maiden Name
                                                            </label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="mm_name" name="mm_name" value="Carla Salem Coffee" disabled>
                                                        </div>

                                                        <hr />

                                                        <!-- Addresses -->
                                                        <div class="row">
                                                            <div class="col-12 display-flex">

                                                                <!-- Current Address -->
                                                                <div class="col-sm-6">
                                                                    <label class="checkbox-label">
                                                                        Current Address
                                                                    </label>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="ca_region">Region</label>
                                                                        <select id="ca_region" name="ca_region" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            <option selected value>CAR</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="ca_province">Province</label>
                                                                        <select id="ca_province" name="ca_province" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            <option selected value>Benguet</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="ca_muninicipality_city">Municipality/City</label>
                                                                        <select id="ca_muninicipality_city" name="ca_muninicipality_city" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            <option selected value>Baguio</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="ca_barangay">Barangay</label>
                                                                        <select id="ca_barangay" name="ca_barangay" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            <option selected value>Ambiong</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="ca_street_number">Street Number</label>
                                                                        <input type="text" class="form-control" id="ca_street_number" name="ca_street_number" value="4040" disabled>
                                                                    </div>
                                                                </div>

                                                                <!-- Permanent Address -->
                                                                <div class="col-sm-6 vertical-rule">
                                                                    <label class="checkbox-label">
                                                                        Permanent Address
                                                                    </label>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="pa_region">Region</label>
                                                                        <select id="pa_region" name="pa_region" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            <option selected value>CAR</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="pa_province">Province</label>
                                                                        <select id="pa_province" name="pa_province" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            <option selected value>Benguet</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="pa_muninicipality_city">Municipality/City</label>
                                                                        <select id="pa_muninicipality_city" name="pa_muninicipality_city" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            <option selected value>Baguio</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="pa_barangay">Barangay</label>
                                                                        <select id="pa_barangay" name="pa_barangay" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            <option selected value>Ambiong</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-xs-12">
                                                                        <label class="label-90" for="pa_street_number">Street Number</label>
                                                                        <input type="text" class="form-control" id="pa_street_number" name="pa_street_number" value="4040" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr />

                                                        <!-- Date of Birth -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="date_of_birth">
                                                                Date of Birth
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend input-group-align" hidden>
                                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control mb-2 mr-sm-2" id="date_of_birth" name="date_of_birth" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask value="04/04/1950" disabled>
                                                            </div>
                                                        </div>

                                                        <!-- Place of Birth -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="place_of_birth">
                                                                Place of Birth
                                                            </label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="place_of_birth" name="place_of_birth" value="Baguio City" disabled>
                                                        </div>

                                                        <!-- Age -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="age">
                                                                Age
                                                            </label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="age" name="age" value="71" disabled>
                                                        </div>

                                                        <!-- Sex -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="sex">Sex</label>
                                                            <select id="sex" name="sex" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity" disabled>
                                                                <option selected value>Female</option>
                                                            </select>
                                                        </div>

                                                        <!-- Civil Status -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="civil_status">Civil Status</label>
                                                            <select id="civil_status" name="civil_status" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity" disabled>
                                                                <option selected value>Married</option>
                                                            </select>
                                                        </div>

                                                        <!-- Religion -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="religion">Religion</label>
                                                            <select id="religion" name="religion" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity" disabled>
                                                                <option selected value>Catholic</option>
                                                            </select>
                                                        </div>

                                                        <!-- Nationality -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="nationality">Nationality</label>
                                                            <select id="nationality" name="nationality" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity" disabled>
                                                                <option selected value>Filipino</option>
                                                            </select>
                                                        </div>

                                                        <!-- Ethnic Group -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="ethnic_group">Ethnic Group</label>
                                                            <select id="ethnic_group" name="ethnic_group" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity" disabled>
                                                                <option selected value>Igorot</option>
                                                            </select>
                                                        </div>

                                                        <!-- Citizenship -->
                                                        <div class="form-group col-sm-6 mb-3">
                                                            <label for="citizenship">Citizenship</label>
                                                            <select id="citizenship" name="citizenship" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity" disabled>
                                                                <option selected value>Filipino</option>
                                                            </select>
                                                        </div>

                                                        <!-- Highest Educational Attainment -->
                                                        <div class="form-group col-md-6 mb-3">
                                                            <label for="highest_ed_at">Highest Educational Attainment</label>
                                                            <select id="highest_ed_at" name="highest_ed_at" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity" disabled>
                                                                <option selected value>College Graduate</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="more-information-tab" role="tabpanel">
                                                    <div class="form-group col-12 mb-3">
                                                        <label for="source_patient">
                                                            Source of Information Details
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card -->


                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>


                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>