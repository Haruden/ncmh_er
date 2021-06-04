<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('nurse/navbar'); ?>
        <?php $this->load->view('nurse/sidebar'); ?>
        <?php $this->load->view('nurse/modals'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header" style="margin-bottom: -1%;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="m-0 text-dark">ROY O. DAHILDAHIL, 28, M</h2>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end">
                                <h1>Emergency Room</h1>
                            </div>
                            <div class="d-flex justify-content-end">
                                <p>December 22, 2020</p>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-2">                            
                            <?php $this->load->view('nurse/queue/sidemenu'); ?>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-default">
                                        <div class="card-body p-0">
                                            <div class="bs-stepper patient-form">
                                                <div class="bs-stepper-header" role="tablist">
                                                    <!-- steps here -->
                                                    <div class="step" data-target="#information-part">
                                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                                            <span class="bs-stepper-circle">1</span>
                                                            <span class="bs-stepper-label">Sociodemographic</span>
                                                        </button>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#source-of-info-part">
                                                        <button type="button" class="step-trigger" role="tab" aria-controls="source-of-info-part" id="source-of-info-part-trigger">
                                                            <span class="bs-stepper-circle">2</span>
                                                            <span class="bs-stepper-label">Source of Information</span>
                                                        </button>
                                                    </div>
                                                    <div class="line"></div>
                                                    <div class="step" data-target="#queue-part">
                                                        <button type="button" class="step-trigger" role="tab" aria-controls="queue-part" id="queue-part-trigger">
                                                            <span class="bs-stepper-circle">3</span>
                                                            <span class="bs-stepper-label">Queue</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="bs-stepper-content">
                                                    <!-- steps content here -->

                                                    <!-- Start - First form -->
                                                    <form id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                                        <div class="form-group">
                                                            <label class="checkbox-label">Sociodemographic</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_sociodemographic" name="unknown_sociodemographic">
                                                                <label class="thin-label" for="unknown_sociodemographic">Unknown</label>
                                                            </div>
                                                            <div class="alert alert-danger alert-dismissible" id="sociodemographic_alert" hidden>
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                            If you press next, you will go directly to the Source of Information Page
                                                            </div>
                                                        </div>

                                                        <!-- Name fields -->
                                                        <div class="form-group-container">
                                                            <label class="checkbox-label">
                                                                <strong class="text-red">*</strong>Name
                                                            </label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_name" name="unknown_name">
                                                                <label class="thin-label" for="unknown_name">Unknown</label>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-3 mb-3">
                                                                    <label class="thin-label" for="last_name">
                                                                        Last Name
                                                                    </label>
                                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="last_name" name="last_name" placeholder="Last name">
                                                                </div>
                                                                <div class="form-group col-md-3 mb-3">
                                                                    <label class="thin-label" for="first_name">
                                                                        First Name
                                                                    </label>
                                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="first_name" name="first_name" placeholder="First name">
                                                                </div>
                                                                <div class="form-group col-md-3 mb-3">
                                                                    <label class="thin-label" for="middle_name">Middle Name</label>
                                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="middle_name" name="middle_name" placeholder="Middle name">
                                                                </div>
                                                                <div class="form-group col-md-2 mb-3">
                                                                    <label class="thin-label" for="name_suffix">Suffix</label>
                                                                    <select id="name_suffix" name="name_suffix" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                        <?php
                                                                        foreach ($patient_suffixes as $suffix) {
                                                                            echo '<option value="' .$suffix['val'] .'">';
                                                                            echo $suffix['name'];
                                                                            echo '</option>';
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Alias -->
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="alias">Alias</label>
                                                                <input type="text" class="form-control" id="alias" name="alias" placeholder="Alias">
                                                            </div>
                                                        </div>

                                                        <!-- Contact Number -->
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="contact_number">Contact Number</label>
                                                                <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number">
                                                            </div>
                                                        </div>

                                                        <!-- Mother's maiden name fields -->
                                                        <div class="form-group-container">
                                                            <label class="checkbox-label">
                                                                <strong class="text-red">*</strong>Mother's Maiden Name
                                                            </label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_mm_name" name="unknown_mm_name">
                                                                <label class="thin-label" for="unknown_mm_name">Unknown</label>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-3 mb-3">
                                                                    <label class="thin-label" for="mm_last_name">
                                                                        Last Name
                                                                    </label>
                                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="mm_last_name" name="mm_last_name" placeholder="Last name">
                                                                </div>
                                                                <div class="form-group col-md-3 mb-3">
                                                                    <label class="thin-label" for="mm_first_name">
                                                                        First Name
                                                                    </label>
                                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="mm_first_name" name="mm_first_name" placeholder="First name">
                                                                </div>
                                                                <div class="form-group col-md-3 mb-3">
                                                                    <label class="thin-label" for="mm_middle_name">
                                                                        Middle Name
                                                                    </label>
                                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="mm_middle_name" name="mm_middle_name" placeholder="Middle name">
                                                                </div>
                                                                <div class="form-group col-md-2 mb-3">
                                                                    <label class="thin-label" for="mm_name_suffix">Suffix</label>
                                                                    <select id="mm_name_suffix" name="mm_name_suffix" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                        <?php
                                                                        foreach ($patient_suffixes as $suffix) {
                                                                            echo '<option value="' .$suffix['val'] .'">';
                                                                            echo $suffix['name'];
                                                                            echo '</option>';
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Philhealth Eligibility -->
                                                        <!--
                                                        <div class="form-group-container">
                                                            <label class="checkbox-label">
                                                                <strong class="text-red">*</strong>PhilHealth Eligibility
                                                            </label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_philhealth" name="unknown_philhealth">
                                                                <label class="thin-label" for="unknown_philhealth">Unknown</label>
                                                            </div>
                                                            <div class="form-row col-xl-12">
                                                                <div class="form-group icheck-primary d-inline">
                                                                    <input type="radio" id="philhealth_member" name="philhealth" value="member">
                                                                    <label class="thin-label checkbox-label" for="philhealth_member">
                                                                    Member
                                                                    </label>
                                                                </div>
                                                                <div class="form-group icheck-primary d-inline">
                                                                    <input type="radio" id="philhealth_not_member" name="philhealth" value="not_member">
                                                                    <label class="thin-label checkbox-label" for="philhealth_not_member">
                                                                    Not Member
                                                                    </label>
                                                                </div>
                                                                <div class="form-group icheck-primary d-inline">
                                                                    <input type="radio" id="philhealth_dependent" name="philhealth" value="dependent">
                                                                    <label class="thin-label checkbox-label" for="philhealth_dependent">
                                                                    Dependent
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row philhealth-hidden animate__animated" hidden>
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="philhealth_number">
                                                                        PhilHealth Number
                                                                    </label>
                                                                    <input type="text" class="form-control" id="philhealth_number" name="philhealth_number" placeholder="XX-XXXXXXXX-X">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        -->

                                                        <!-- Current Address -->
                                                        <div class="form-group-container">
                                                            <label class="checkbox-label">
                                                                <strong class="text-red">*</strong>Current Address
                                                            </label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_current_address" name="unknown_current_address">
                                                                <label class="thin-label" for="unknown_current_address">Unknown</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="ca_region">Region</label>
                                                                    <select id="ca_region" name="ca_region" class="form-control select2bs4" style="width: 100%;">
                                                                        <?php
                                                                        foreach ($regions as $region) {
                                                                            echo '<option value="' .$region->regcode .'">';
                                                                            echo $region->regname;
                                                                            echo '</option>';
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="ca_province">Province</label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_ca_province" name="unknown_ca_province" disabled>
                                                                        <label class="thin-label" for="unknown_ca_province">Unknown</label>
                                                                    </div>
                                                                    <select id="ca_province" name="ca_province" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="ca_muninicipality_city">Municipality/City</label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_ca_muninicipality_city" name="unknown_ca_muninicipality_city" disabled>
                                                                        <label class="thin-label" for="unknown_ca_muninicipality_city">Unknown</label>
                                                                    </div>
                                                                    <select id="ca_muninicipality_city" name="ca_muninicipality_city" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="ca_barangay">Barangay</label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_ca_barangay" name="unknown_ca_barangay" disabled>
                                                                        <label class="thin-label" for="unknown_ca_barangay">Unknown</label>
                                                                    </div>
                                                                    <select id="ca_barangay" name="ca_barangay" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="ca_street_number">Street Number</label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_ca_street_number" name="unknown_ca_street_number">
                                                                        <label class="thin-label" for="unknown_ca_street_number">Unknown</label>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="ca_street_number" name="ca_street_number" placeholder="Street Number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Permanent Address -->
                                                        <div class="form-group-container">
                                                            <label class="checkbox-label">
                                                                <strong class="text-red">*</strong>Permanent Address
                                                            </label>
                                                            <div class="icheck-primary d-inline checkbox-label">
                                                                <input type="checkbox" id="same_as_ca_address" name="same_as_ca_address">
                                                                <label class="thin-label" for="same_as_ca_address">Same as current address</label>
                                                            </div>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_permanent_address" name="unknown_permanent_address">
                                                                <label class="thin-label" for="unknown_permanent_address">Unknown</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="pa_region">Region</label>
                                                                    <select id="pa_region" name="pa_region" class="form-control select2bs4" style="width: 100%;">
                                                                        <?php
                                                                        foreach ($regions as $region) {
                                                                            echo '<option value="' .$region->regcode .'">';
                                                                            echo $region->regname;
                                                                            echo '</option>';
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="pa_province">Province</label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_pa_province" name="unknown_pa_province" disabled>
                                                                        <label class="thin-label" for="unknown_pa_province">Unknown</label>
                                                                    </div>
                                                                    <select id="pa_province" name="pa_province" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="pa_muninicipality_city">Municipality/City</label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_pa_muninicipality_city" name="unknown_pa_muninicipality_city" disabled>
                                                                        <label class="thin-label" for="unknown_pa_muninicipality_city">Unknown</label>
                                                                    </div>
                                                                    <select id="pa_muninicipality_city" name="pa_muninicipality_city" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="pa_barangay">Barangay</label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_pa_barangay" name="unknown_pa_barangay" disabled>
                                                                        <label class="thin-label" for="unknown_pa_barangay">Unknown</label>
                                                                    </div>
                                                                    <select id="pa_barangay" name="pa_barangay" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="pa_street_number">Street Number</label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_pa_street_number" name="unknown_pa_street_number">
                                                                        <label class="thin-label" for="unknown_pa_street_number">Unknown</label>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="pa_street_number" name="pa_street_number" placeholder="Street Number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- First form button -->
                                                        <button type="submit" class="btn btn-primary">Next</button>
                                                    </form>
                                                    <!-- End - First form -->

                                                    <!-- Start - Second form -->
                                                    <form id="source-of-info-part" class="content" role="tabpanel" aria-labelledby="source-of-info-part-trigger">

                                                        <!-- Date of Birth & Age -->
                                                        <div class="row">
                                                            <!-- Date of Birth -->
                                                            <div class="col-md-4 col-sm-6 mb-3">
                                                                <div class="form-group-container">
                                                                    <label class="checkbox-label">
                                                                        <strong class="text-red">*</strong>Date of Birth
                                                                    </label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="unknown_date_of_birth" name="unknown_date_of_birth">
                                                                        <label class="thin-label" for="unknown_date_of_birth">Unknown</label>
                                                                    </div>

                                                                    <div class="form-group col-md-12 mb-3">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend input-group-align">
                                                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="date_of_birth" name="date_of_birth" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Age -->
                                                            <div class="col-md-3 col-sm-6 mb-3">
                                                                <div class="form-group-container">
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <label for="age">Age</label>
                                                                            <input type="text" class="form-control" id="age" name="age" placeholder="Age" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Place of Birth -->
                                                        <div class="form-group-container">
                                                            <label class="checkbox-label">
                                                                <strong class="text-red">*</strong>Place of Birth
                                                            </label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_place_of_birth" name="unknown_place_of_birth">
                                                                <label class="thin-label" for="unknown_place_of_birth">Unknown</label>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label class="thin-label" for="pob_country">Country</label>
                                                                    <select id="pob_country" name="pob_country" class="form-control select2bs4" style="width: 100%;">
                                                                        <?php
                                                                        foreach ($countries as $country) {
                                                                            echo '<option value="' .$country->countrycode .'">';
                                                                            echo $country->country_desc;
                                                                            echo '</option>';
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="pob-ph animate__animated">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="thin-label" for="pob_region">Region</label>
                                                                        <select id="pob_region" name="pob_region" class="form-control select2bs4" style="width: 100%;">
                                                                            <?php
                                                                            foreach ($regions as $region) {
                                                                                echo '<option value="' .$region->regcode .'">';
                                                                                echo $region->regname;
                                                                                echo '</option>';
                                                                            } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="thin-label" for="pob_province">Province</label>
                                                                        <div class="icheck-primary d-inline">
                                                                            <input type="checkbox" id="unknown_pob_province" name="unknown_pob_province" disabled>
                                                                            <label class="thin-label" for="unknown_pob_province">Unknown</label>
                                                                        </div>
                                                                        <select id="pob_province" name="pob_province" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="thin-label" for="pob_muninicipality_city">Municipality/City</label>
                                                                        <div class="icheck-primary d-inline">
                                                                            <input type="checkbox" id="unknown_pob_muninicipality_city" name="unknown_pob_muninicipality_city" disabled>
                                                                            <label class="thin-label" for="unknown_pob_muninicipality_city">Unknown</label>
                                                                        </div>
                                                                        <select id="pob_muninicipality_city" name="pob_muninicipality_city" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pob-non-ph animate__animated" hidden>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="thin-label" for="pob_text_address">
                                                                            Address
                                                                        </label>
                                                                        <input type="text" class="form-control" id="pob_text_address" name="pob_text_address" placeholder="Address">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Sex/Gender -->
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="sex">Sex</label>
                                                                <select id="sex" name="sex" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                    <?php
                                                                    foreach ($genders as $gender) {
                                                                        echo '<option value="' .$gender['val'] .'">';
                                                                        echo $gender['name'];
                                                                        echo '</option>';
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Civil Status -->
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="civil_status">Civil Status</label>
                                                                <select id="civil_status" name="civil_status" class="form-control select2bs4" style="width: 100%;">
                                                                    <?php
                                                                    foreach ($civil_statuses as $civil_status) {
                                                                        echo '<option value="' .$civil_status['val'] .'">';
                                                                        echo $civil_status['name'];
                                                                        echo '</option>';
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Religion -->
                                                        <div class="form-group-container">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="religion">Religion</label>
                                                                    <select id="religion" name="religion" class="form-control select2bs4" style="width: 100%;">
                                                                        <?php
                                                                        foreach ($religions as $religion) {
                                                                            echo '<option value="' .$religion->relcode .'">';
                                                                            echo $religion->reldesc;
                                                                            echo '</option>';
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Nationality -->
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="nationality">Nationality</label>
                                                                <select id="nationality" name="nationality" class="form-control select2bs4" style="width: 100%;">
                                                                    <?php
                                                                    foreach ($nationalities as $nationality) {
                                                                        echo '<option value="' .$nationality['val'] .'">';
                                                                        echo $nationality['name'];
                                                                        echo '</option>';
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Ethnic Group -->
                                                        <div class="form-group-container">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="ethnic_group">Ethnic Group</label>
                                                                    <select id="ethnic_group" name="ethnic_group" class="form-control select2bs4" style="width: 100%;">
                                                                        <?php
                                                                        foreach ($ethnic_groups as $ethnic_group) {
                                                                            echo '<option value="' .$ethnic_group->ipcode .'">';
                                                                            echo $ethnic_group->ipdesc;
                                                                            echo '</option>';
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Citizenship -->
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="citizenship">Citizenship</label>
                                                                <select id="citizenship" name="citizenship" class="form-control select2bs4" style="width: 100%;">
                                                                    <?php
                                                                    foreach ($nationalities as $nationality) {
                                                                        echo '<option value="' .$nationality['val'] .'">';
                                                                        echo $nationality['name'];
                                                                        echo '</option>';
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Highest Educational Attainment -->
                                                        <div class="form-group-container">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="highest_ed_at">Highest Educational Attainment</label>
                                                                    <select id="highest_ed_at" name="highest_ed_at" class="form-control select2bs4" style="width: 100%;">
                                                                        <?php
                                                                        foreach ($degrees as $degree) {
                                                                            echo '<option value="' .$degree['val'] .'">';
                                                                            echo $degree['name'];
                                                                            echo '</option>';
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Literacy Rate -->
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="literacy_rate">Literacy Rate</label>
                                                                <select id="literacy_rate" name="literacy_rate" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                    <option value="literate">Literate</option>
                                                                    <option value="illiterate">Illiterate</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Upload Photo -->
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="photo">Upload Photo</label>
                                                                <input type="file" id="photo" name="photo"  accept=".jpg,.jpeg,.png" />
                                                            </div>
                                                        </div>

                                                        <!-- Second form buttons -->
                                                        <button type="button" class="btn btn-danger" id="btn_back_to_first_form">Back</button>
                                                        <button type="submit" class="btn btn-primary">Next</button>
                                                    </form>
                                                    <!-- End - Second form -->


                                                    <!-- Start - Third form -->
                                                    <form id="queue-part" class="content patient-form" role="tabpanel" aria-labelledby="queue-part-trigger">
                                                            <input type="hidden" id="patient_id"/>

                                                            <!-- Source of Information -->
                                                            <div class="form-group-container">
                                                                <label>
                                                                    <strong class="text-red">*</strong>Source of Information
                                                                </label>
                                                                <div class="form-row col-xl-12">
                                                                    <div class="form-group icheck-primary d-inline">
                                                                        <input type="radio" id="source_patient" name="source_of_info" value="patient">
                                                                        <label class="thin-label checkbox-label" for="source_patient">
                                                                            Patient
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group icheck-primary d-inline">
                                                                        <input type="radio" id="source_family_member" name="source_of_info" value="family-member">
                                                                        <label class="thin-label checkbox-label" for="source_family_member">
                                                                            Family Member
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group icheck-primary d-inline">
                                                                        <input type="radio" id="source_social_worker" name="source_of_info" value="social-worker">
                                                                        <label class="thin-label checkbox-label" for="source_social_worker">
                                                                            Social Worker
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group icheck-primary d-inline">
                                                                        <input type="radio" id="source_other" name="source_of_info" value="others">
                                                                        <label class="thin-label checkbox-label" for="source_other">
                                                                            Others
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="row other-source_other animate__animated" hidden>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="thin-label" for="other_source_of_info">
                                                                            Other
                                                                        </label>
                                                                        <input type="text" class="form-control" id="other_source_of_info" name="other_source_of_info" placeholder="Other">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Reliability of Information -->
                                                            <div class="row">
                                                                <div class="form-group-container col-lg-12">
                                                                    <div class="form-group slider-blue">
                                                                        <label for="soi_reliability_of_info">Reliability of Information</label>
                                                                        <div class="col-xl-12 form-inline">
                                                                            <input type="text" id="soi_reliability_of_info" name="soi_reliability_of_info" value="" class="slider form-control" data-slider-min="0"
                                                                                data-slider-max="100" data-slider-step="25" data-slider-value="0" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" />
                                                                            <div class="col-xl-4 col-sm-2">
                                                                                <input type="text" class="form-control soi-reliability-percent" id="soi_reliability_percent" name="soi_reliability_percent" placeholder="0%" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Alert when selecting patient as source of information -->
                                                            <div class="alert alert-warning alert-dismissible" id="soi_patient_alert" hidden>
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                                <strong>Note:</strong> The informant info will be taken from the patient sociodemographic data
                                                            </div>

                                                            <!-- Additional Forms for Source of Information -->
                                                            <div class="source-of-info-addtnl-form animate__animated" hidden>
                                                                <!--  Name fields  -->
                                                                <div class="form-group-container">
                                                                    <label>
                                                                        Name
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-3 mb-3">
                                                                            <label class="thin-label" for="soi_first_name">
                                                                                First Name
                                                                            </label>
                                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="soi_first_name" name="soi_first_name" placeholder="First name">
                                                                        </div>
                                                                        <div class="form-group col-md-3 mb-3">
                                                                            <label class="thin-label" for="soi_middle_name">Middle Name</label>
                                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="soi_middle_name" name="soi_middle_name" placeholder="Middle name">
                                                                        </div>
                                                                        <div class="form-group col-md-3 mb-3">
                                                                            <label class="thin-label" for="soi_last_name">
                                                                                Last Name
                                                                            </label>
                                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="soi_last_name" name="soi_last_name" placeholder="Last name">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Relationship -->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="soi_relationship">Relationship</label>
                                                                        <select id="soi_relationship" name="soi_relationship" class="form-control select2bs4" style="width: 100%;">
                                                                            <?php
                                                                            foreach ($relationships as $relationship) {
                                                                                echo '<option value="' .$relationship['val'] .'">';
                                                                                echo $relationship['name'];
                                                                                echo '</option>';
                                                                            } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <!-- Contact Number -->
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="soi_contact_number">Contact Number</label>
                                                                        <input type="text" class="form-control" id="soi_contact_number" name="soi_contact_number" placeholder="Contact Number">
                                                                    </div>
                                                                </div>

                                                                <!-- Address -->
                                                                <div class="form-group-container">
                                                                    <label class="checkbox-label">
                                                                        Address
                                                                    </label>
                                                                    <div class="icheck-primary d-inline">
                                                                        <input type="checkbox" id="same_as_patient_address" name="same_as_patient_address">
                                                                        <label class="thin-label" for="same_as_patient_address">Same as patient's address</label>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="thin-label" for="soi_region">Region</label>
                                                                            <select id="soi_region" name="soi_region" class="form-control select2bs4" style="width: 100%;">
                                                                                <?php
                                                                                foreach ($regions as $region) {
                                                                                    echo '<option value="' .$region->regcode .'">';
                                                                                    echo $region->regname;
                                                                                    echo '</option>';
                                                                                } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="thin-label" for="soi_province">Province</label>
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="checkbox" id="unknown_soi_province" name="unknown_soi_province" disabled>
                                                                                <label class="thin-label" for="unknown_soi_province">Unknown</label>
                                                                            </div>
                                                                            <select id="soi_province" name="soi_province" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="thin-label" for="soi_muninicipality_city">Municipality/City</label>
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="checkbox" id="unknown_soi_muninicipality_city" name="unknown_soi_muninicipality_city" disabled>
                                                                                <label class="thin-label" for="unknown_soi_muninicipality_city">Unknown</label>
                                                                            </div>
                                                                            <select id="soi_muninicipality_city" name="soi_muninicipality_city" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="thin-label" for="soi_barangay">Barangay</label>
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="checkbox" id="unknown_soi_barangay" name="unknown_soi_barangay" disabled>
                                                                                <label class="thin-label" for="unknown_soi_barangay">Unknown</label>
                                                                            </div>
                                                                            <select id="soi_barangay" name="soi_barangay" class="form-control select2bs4" style="width: 100%;" disabled>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="thin-label" for="soi_street_number">Street Number</label>
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="checkbox" id="unknown_soi_street_number" name="unknown_soi_street_number">
                                                                                <label class="thin-label" for="unknown_soi_street_number">Unknown</label>
                                                                            </div>
                                                                            <input type="text" class="form-control" id="soi_street_number" name="soi_street_number" placeholder="Street Number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Type of Payment -->
                                                            <div class="form-group-container">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="type_of_payment">
                                                                            Type of Payment
                                                                        </label>
                                                                        <select id="type_of_payment" name="type_of_payment" class="form-control select2bs4" style="width: 100%;">
                                                                            <?php
                                                                            foreach ($type_of_payments as $payment) {
                                                                                echo '<option value="' .$payment['val'] .'">';
                                                                                echo $payment['name'];
                                                                                echo '</option>';
                                                                            } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Type of Consult -->
                                                            <div class="form-group-container">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="type_of_consult">
                                                                            Type of Consultation
                                                                        </label>
                                                                        <select id="type_of_consult" name="type_of_consult" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                            <?php
                                                                            foreach ($consult_types as $consult_type) {
                                                                                echo '<option value="' .$consult_type['val'] .'">';
                                                                                echo $consult_type['name'];
                                                                                echo '</option>';
                                                                            } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Source of Referral -->
                                                            <div class="form-group-container">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="source_of_referral">
                                                                            <strong class="text-red">*</strong>SOURCE OF REFERRAL
                                                                        </label>
                                                                        <select id="source_of_referral" name="source_of_referral" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                            <option value="private-clinic">Private Clinic</option>
                                                                            <option value="private-hospital">Private Hospital</option>
                                                                            <option value="public-hospital">Public Hospital</option>
                                                                            <option value="none">None</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Place of Birth -->
                                                            <div class="form-group-container">
                                                                <label class="checkbox-label">
                                                                    <strong class="text-red">*</strong>Referred by
                                                                </label>
                                                                <div class="icheck-primary d-inline">
                                                                    <input type="checkbox" id="unknown_referred_by" name="unknown_referred_by">
                                                                    <label class="thin-label" for="unknown_referred_by">Unknown</label>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <input type="text" class="form-control" id="referred_by" name="referred_by" placeholder="Referred by">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Assign to -->
                                                            <div class="form-group-container">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="assign_to">
                                                                            <strong class="text-red">*</strong>Assign to
                                                                        </label>
                                                                        <select id="assign_to" name="assign_to" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                            <option value="dsaa">dummy</option>
                                                                            <?php
                                                                            foreach ($doctors as $doctor) {
                                                                                echo '<option value="' .$doctor->employeeid .'">';
                                                                                echo $doctor->postitle.' '.$doctor->firstname.' '.$doctor->lastname;
                                                                                echo '</option>';
                                                                            } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button type="button" class="btn btn-danger" id="btn_back_to_second_form">Back</button>
                                                            <!-- <button type="submit" id="btn_save" class="btn btn-warning">Save but don’t add patient to queue</button> -->
                                                            <button type="submit" id="btn_save_and_queue" class="btn btn-primary">Save</button>
                                                        </form>

                                                    <!-- End - Third form -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div> <!-- /.content-wrapper -->

        <!-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>

<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');

    // $(document).ready(function () {
    //     var stepper = new Stepper($('.bs-stepper')[0])
    // })
</script>

</html>
