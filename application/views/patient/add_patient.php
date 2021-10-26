<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<style>
    a.nav-link.active {
        color: black;
    }
    a.nav-link {
        color: white;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Patient Data Form</h1>
                    <small>Medical Records</small>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="/records/admission">Admission</a></li>
                        <li class="breadcrumb-item active">Add Patient</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-body p-0">
                            <div class="row px-2">
                                <ul class="nav nav-tabs navbar-secondary" role="tablist" style="width:100%; border-radius:5px 5px 0px 0px;">
                                    <li class="nav-item" style="width:50%">
                                        <a class="nav-link active" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Regular</a>
                                    </li>
                                    <li class="nav-item" style="width:50%">
                                        <a class="nav-link" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Express</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div id="addPatient_stepper" class="bs-stepper linear">

                                        <div class="bs-stepper-header" role="tablist">
                                            <!-- steps here -->
                                            <div class="step active" data-target="#patient_details">
                                                <button type="button" class="step-trigger" role="tab" aria-controls="patient_details" id="patient_details-trigger">
                                                    <span class="bs-stepper-circle">1</span>
                                                    <span class="bs-stepper-label">Patient Details</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>

                                            <div class="step" data-target="#contact_details">
                                                <button type="button" class="step-trigger" role="tab" aria-controls="contact_details" id="contact_details-trigger">
                                                    <span class="bs-stepper-circle">2</span>
                                                    <span class="bs-stepper-label">Contact Details</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>

                                            <div class="step" data-target="#informants">
                                                <button type="button" class="step-trigger" role="tab" aria-controls="informants" id="informants-trigger">
                                                    <span class="bs-stepper-circle">3</span>
                                                    <span class="bs-stepper-label">Informants</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>

                                            <div class="step" data-target="#source_of_payments">
                                                <button type="button" class="step-trigger" role="tab" aria-controls="source_of_payments" id="source_of_payments-trigger">
                                                    <span class="bs-stepper-circle">4</span>
                                                    <span class="bs-stepper-label">Source of payments</span>
                                                </button>
                                            </div>

                                        </div>

                                        <div class="bs-stepper-content">
                                            <!-- Patient Details -->
                                            <form id="patient_details" class="content active" role="tabpanel" aria-labelledby="patient_details-trigger">

                                                <label class="h3 mt-1">
                                                    Patient Details
                                                </label>
                                                <hr class="m-0 mb-3">

                                                <!-- Upload Photo -->
                                                <div class="row">
                                                    <div class="form-group col-md-3">

                                                        <div class="text-center mb-3">
                                                            <img id="profile_user_img" class="profile-user-img img-fluid img-circle w-75 border-info shadow" src="http://localhost:8081/assets/img/user.png" alt="Patient profile picture">
                                                        </div>

                                                        <div class="text-center mb-3"></div>


                                                        <label for="photo">Upload Photo</label>
                                                        <input img="" type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png">

                                                    </div>

                                                    <div class="col-md-9">
                                                        <div class="form-group-container mb-0">
                                                            <div class="form-row">
                                                                <!-- HEALTH RECORD NUMBER -->
                                                                <div class="form-group col-md-3">
                                                                    <label for="hpercode"><strong class="text-red">*</strong> HEALTH RECORD NUMBER</label>
                                                                    <input type="text" value="000000000000021" class="form-control mr-sm-2" id="hpercode" name="hpercode" readonly="">
                                                                </div>

                                                                <!-- OLD HEALTH RECORD NUMBER -->
                                                                <div class="form-group col-md-3">
                                                                    <label for="old_health_record_number"><strong class="text-red">*</strong> OLD HEALTH RECORD NUMBER</label>
                                                                    <input type="text" value="" class="form-control mr-sm-2" id="old_health_record_number" name="old_health_record_number" placeholder="OLD HEALTH RECORD NUMBER">
                                                                </div>

                                                                <input type="hidden" value="000056300000000000002110/12/202107:33:52" id="encounter_code" name="encounter_code" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group-container">
                                                            <label class="checkbox-label">
                                                                <strong class="text-red">*</strong>Name
                                                            </label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_name" name="unknown_name">
                                                                <label for="unknown_name">Unknown</label>
                                                            </div>

                                                            <div class="form-row">
                                                                <!-- Last Name -->
                                                                <div class="form-group col-md-4 mt-0">
                                                                    <label for="last_name"><strong class="text-red">*</strong> Last Name</label>
                                                                    <input type="text" value="" class="form-control mr-sm-2" id="last_name" name="last_name" placeholder="Last name">
                                                                </div>
                                                                <!--  First Name -->
                                                                <div class="form-group col-md-4 mt-0">
                                                                    <label for="first_name"><strong class="text-red">*</strong> First Name</label>
                                                                    <input type="text" value="" class="form-control mr-sm-2" id="first_name" name="first_name" placeholder="First name">
                                                                </div>
                                                                <!-- Middle Name -->
                                                                <div class="form-group col-md-3 mt-0">
                                                                    <label for="middle_name"><strong class="text-red">*</strong> Middle Name</label>
                                                                    <input type="text" value="" class="form-control mr-sm-2" id="middle_name" name="middle_name" placeholder="Middle name">
                                                                </div>
                                                                <!-- Suffix -->
                                                                <div class="form-group col-md-1 mt-0">
                                                                    <label for="name_suffix">Suffix</label>
                                                                    <select data-placeholder="Suffix" id="name_suffix" name="name_suffix" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                        <option disabled="" selected="" value="" data-select2-id="2"></option>
                                                                        <option value="SR">
                                                                            Sr. </option>
                                                                        <option value="JR">
                                                                            Jr. </option>
                                                                        <option value="II">
                                                                            II </option>
                                                                        <option value="III">
                                                                            III </option>
                                                                        <option value="IV">
                                                                            IV </option>
                                                                        <option value="V">
                                                                            V </option>
                                                                        <option value="VI">
                                                                            VI </option>
                                                                        <option value="VII">
                                                                            VII </option>
                                                                        <option value="VIII">
                                                                            VIII </option>
                                                                        <option value="IX">
                                                                            IX </option>
                                                                        <option value="X">
                                                                            X </option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label for="alias"><strong class="text-red">*</strong> Alias</label>
                                                                    <input value="" type="text" class="form-control" id="alias" name="alias" placeholder="Alias">
                                                                </div>

                                                                <!-- Date of Birth -->
                                                                <div class="col-md-2">
                                                                    <div class="form-group-container">
                                                                        <label class="checkbox-label">
                                                                            <strong class="text-red">*</strong>Date of Birth
                                                                        </label>
                                                                        <div class="icheck-primary d-inline">
                                                                            <input type="checkbox" id="unknown_date_of_birth" name="unknown_date_of_birth">
                                                                            <label for="unknown_date_of_birth">Unknown</label>
                                                                        </div>

                                                                        <input type="hidden" value="" id="hdob" name="hdob">

                                                                        <div class="form-group mb-3 custom-datepicker">
                                                                            <div class="input-group date" data-target-input="nearest">
                                                                                <div class="input-group-prepend" data-target="#date_of_birth" data-toggle="datetimepicker">
                                                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                                </div>
                                                                                <!-- COMMENT: get this attr value and force declare to this html tag -->
                                                                                <input type="text" class="form-control datetimepicker-input" placeholder="dd/mm/yyyy" data-target="#date_of_birth" id="date_of_birth" name="date_of_birth">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Age of Patient -->
                                                                <div class="form-group col-md-1 mb-3">
                                                                    <label for="year"><strong class="text-red">*</strong> Age</label>
                                                                    <input type="text" class="form-control" id="year" name="year" placeholder="" readonly="" value="">
                                                                </div>

                                                                <input type="hidden" class="form-control" id="month" name="month" placeholder="M" readonly="" value="9">

                                                                <input type="hidden" class="form-control" id="day" name="day" placeholder="D" readonly="" value="18">

                                                                <input type="hidden" class="form-control" id="hour" name="hour" placeholder="H" readonly="" value="10">

                                                                <!-- Place of birth -->
                                                                <div class="form-group col-md-4">
                                                                    <label for="pob_text_address"><strong class="text-red">*</strong> Place of Birth</label>
                                                                    <input value="" type="text" class="form-control mr-sm-2" id="pob_text_address" name="pob_text_address" placeholder="Place of Birth">
                                                                </div>

                                                                <!-- Sex/Gender -->
                                                                <div class="form-group col-lg-1">
                                                                    <label for="sex"><strong class="text-red">*</strong> Sex</label>
                                                                    <select data-placeholder="Sex" id="sex" name="sex" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                                        <option selected="" value="">
                                                                        </option>
                                                                        <option value="M">
                                                                            Male </option>
                                                                        <option value="F">
                                                                            Female </option>
                                                                    </select>
                                                                </div>

                                                                <!-- Religion -->
                                                                <div class="form-group col-lg-4">
                                                                    <label for="religion"><strong class="text-red">*</strong> Religion</label>
                                                                    <select data-allow-clear="true" data-placeholder="Select Religion" id="religion" name="religion" class="form-control select2bs4" style="width: 100%;">
                                                                        <option selected="" value="">
                                                                        </option>
                                                                        <option value="AGLIP">
                                                                            Aglipay </option>
                                                                        <option value="ALLY">
                                                                            Alliance </option>
                                                                        <option value="ANGLI">
                                                                            Anglican </option>
                                                                        <option value="BAPTI">
                                                                            Baptist </option>
                                                                        <option value="BRNAG">
                                                                            Born Again Christian </option>
                                                                        <option value="BUDDH">
                                                                            Buddhism </option>
                                                                        <option value="CATHO">
                                                                            Catholic </option>
                                                                        <option value="EVANG">
                                                                            Evangelical </option>
                                                                        <option value="IGNIK">
                                                                            Iglesia ni Cristo </option>
                                                                        <option value="JEWIT">
                                                                            Jehovah's Witness </option>
                                                                        <option value="LCRM">
                                                                            Life Renewal Christian Ministry </option>
                                                                        <option value="LUTHR">
                                                                            Lutheran </option>
                                                                        <option value="METOD">
                                                                            Methodist </option>
                                                                        <option value="MORMO">
                                                                            LDS-Mormons </option>
                                                                        <option value="MUSLI">
                                                                            Islam </option>
                                                                        <option value="OTHER">
                                                                            OTHERS </option>
                                                                        <option value="PENTE">
                                                                            Pentecostal </option>
                                                                        <option value="PROTE">
                                                                            Protestant </option>
                                                                        <option value="SVDAY">
                                                                            Seventh Day Adventist </option>
                                                                        <option value="UCCP">
                                                                            UCCP </option>
                                                                        <option value="UNKNO">
                                                                            Unknown </option>
                                                                        <option value="WESLY">
                                                                            Wesleyan </option>
                                                                        <option value="XTIAN">
                                                                            Christian </option>
                                                                    </select>
                                                                </div>

                                                                <!-- Nationality -->
                                                                <div class="form-group col-lg-2">
                                                                    <label for="nationality"><strong class="text-red">*</strong> Nationality</label>
                                                                    <select data-placeholder="Select Nationality" id="nationality" name="nationality" class="form-control select2bs4" style="width: 100%;">
                                                                        <option selected="" value="">
                                                                        </option>
                                                                        <option value="FILIP">
                                                                            Filipino </option>
                                                                        <option value="AMERI">
                                                                            American </option>
                                                                        <option value="SPANI">
                                                                            Spanish </option>
                                                                        <option value="CHINE">
                                                                            Chinese </option>
                                                                        <option value="JAPAN">
                                                                            Japanese </option>
                                                                        <option value="GERMN">
                                                                            German </option>
                                                                        <option value="BANGD">
                                                                            Bangladesh </option>
                                                                        <option value="BRITS">
                                                                            British </option>
                                                                        <option value="ENGLS">
                                                                            English </option>
                                                                        <option value="FRNCH">
                                                                            French </option>
                                                                        <option value="CANAD">
                                                                            Canadian </option>
                                                                        <option value="UNKNO">
                                                                            Unknown </option>
                                                                    </select>
                                                                </div>

                                                                <!-- Civil Status -->
                                                                <div class="form-group col-lg-2">
                                                                    <label for="civil_status"><strong class="text-red">*</strong> Civil Status</label>
                                                                    <select data-placeholder="Civil Status" id="civil_status" name="civil_status" class="form-control select2bs4" style="width: 100%;">
                                                                        <option selected="" value="">
                                                                        </option>
                                                                        <option value="S">
                                                                            Single </option>
                                                                        <option value="M">
                                                                            Married </option>
                                                                        <option value="D">
                                                                            Divorced </option>
                                                                        <option value="X">
                                                                            Separated </option>
                                                                        <option value="W">
                                                                            Widow/Widower </option>
                                                                        <option value="N">
                                                                            Not Applicable </option>
                                                                        <option value="C">
                                                                            Child </option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <!-- Senior Citizen ID -->
                                                                    <label for="senior_citizen_id">Senior citizen ID</label>
                                                                    <input value="" type="text" class="form-control mr-sm-2" id="senior_citizen_id" name="senior_citizen_id" placeholder="Senior Citizen ID">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <label class="h3 mt-1">
                                                    Patient Address
                                                </label>
                                                <hr class="m-0 mb-3">
                                                <!-- Current Address -->
                                                <div class="form-group-container">
                                                    <label class="checkbox-label">
                                                        <strong class="text-red">*</strong>Current Address
                                                    </label>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="checkbox" id="unknown_current_address" name="unknown_current_address">
                                                        <label for="unknown_current_address">Unknown</label>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-2">
                                                            <label for="ca_country"><strong class="text-red">*</strong> Select Country</label>
                                                            <select data-placeholder="Select Country" id="ca_country" name="ca_country" class="form-control select2bs4" style="width: 100%;">
                                                                <option value="PHILI" selected>
                                                                    PHILIPPINES </option>
                                                                <option value="AA">
                                                                    AANISTAN </option>
                                                                <option value="ALBAN">
                                                                    ALBANIA </option>
                                                                <option value="ALGER">
                                                                    ALGERIA </option>
                                                                <option value="AMERI">
                                                                    US OF AMERICA </option>
                                                                <option value="ANDOR">
                                                                    ANDORRA </option>
                                                                <option value="ANGOL">
                                                                    ANGOLA </option>
                                                                <option value="ARGEN">
                                                                    ARGENTINA </option>
                                                                <option value="ARMEN">
                                                                    ARMENIA </option>
                                                                <option value="AUSTL">
                                                                    AUSTRALIA </option>
                                                                <option value="AUSTR">
                                                                    AUSTRIA </option>
                                                                <option value="BAHAM">
                                                                    BAHAMA </option>
                                                                <option value="BAHRA">
                                                                    BAHRAIN </option>
                                                                <option value="BANGL">
                                                                    BANGLADESH </option>
                                                                <option value="BARBA">
                                                                    BARBADOS </option>
                                                                <option value="BELAR">
                                                                    BELARUS </option>
                                                                <option value="BELGI">
                                                                    BELGIUM </option>
                                                                <option value="BELIZ">
                                                                    BELIZE </option>
                                                                <option value="BRAZI">
                                                                    BRAZIL </option>
                                                                <option value="BRITA">
                                                                    UK (BRITAIN) </option>
                                                                <option value="BULGA">
                                                                    BULGARIA </option>
                                                                <option value="BURUN">
                                                                    BURUNDI </option>
                                                                <option value="CAMBO">
                                                                    CAMBODIA </option>
                                                                <option value="CAMER">
                                                                    CAMEROON </option>
                                                                <option value="CANAD">
                                                                    CANADA </option>
                                                                <option value="CHAD">
                                                                    CHAD </option>
                                                                <option value="CHILE">
                                                                    CHILE </option>
                                                                <option value="CHINA">
                                                                    CHINA </option>
                                                                <option value="COLOM">
                                                                    COLOMBIA </option>
                                                                <option value="CONGO">
                                                                    CONGO </option>
                                                                <option value="CROTI">
                                                                    CROTIA </option>
                                                                <option value="CUBA">
                                                                    CUBA </option>
                                                                <option value="CYPRU">
                                                                    CYPRUS </option>
                                                                <option value="TURKE">
                                                                    TURKEY </option>
                                                                <option value="CZECH">
                                                                    CZECH REPUBLIC </option>
                                                                <option value="DOMIN">
                                                                    DOMINICAN REPUBLIC </option>
                                                                <option value="EASTT">
                                                                    EAST TIMOR </option>
                                                                <option value="ECUAD">
                                                                    ECUADOR </option>
                                                                <option value="EGYPT">
                                                                    EGYPT </option>
                                                                <option value="UAEMI">
                                                                    UNITED ARAB EMIRATES </option>
                                                                <option value="ENGLA">
                                                                    UK (ENGLAND) </option>
                                                                <option value="ESTON">
                                                                    ESTONIA </option>
                                                                <option value="ETHIO">
                                                                    ETHIOPIA </option>
                                                                <option value="FINLA">
                                                                    FINLAND </option>
                                                                <option value="FIJI">
                                                                    FIJI </option>
                                                                <option value="FRANC">
                                                                    FRANCH </option>
                                                                <option value="GEORG">
                                                                    GEORGIA </option>
                                                                <option value="GERMA">
                                                                    GERMANY </option>
                                                                <option value="GHANA">
                                                                    GHANA </option>
                                                                <option value="GREEC">
                                                                    GREECE </option>
                                                                <option value="GRENA">
                                                                    GRENADA </option>
                                                                <option value="GUATE">
                                                                    GUATEMALA </option>
                                                                <option value="GUIAN">
                                                                    GUIANA </option>
                                                                <option value="GUYAN">
                                                                    GUYANA </option>
                                                                <option value="HAITI">
                                                                    HAITI </option>
                                                                <option value="HONDU">
                                                                    HONDURA </option>
                                                                <option value="HONGK">
                                                                    HONG KONG </option>
                                                                <option value="HUNGA">
                                                                    HUNGARY </option>
                                                                <option value="ICELA">
                                                                    ICELAND </option>
                                                                <option value="INDIA">
                                                                    INDIA </option>
                                                                <option value="INDON">
                                                                    INDONESIA </option>
                                                                <option value="IRAN">
                                                                    IRAN </option>
                                                                <option value="IRAQ">
                                                                    IRAQ </option>
                                                                <option value="IRELA">
                                                                    IRELAND </option>
                                                                <option value="ISRAE">
                                                                    ISRAEL </option>
                                                                <option value="ITALY">
                                                                    ITALY </option>
                                                                <option value="IVORY">
                                                                    IVORY COAST </option>
                                                                <option value="JAMAI">
                                                                    JAMAICA </option>
                                                                <option value="JAPAN">
                                                                    JAPAN </option>
                                                                <option value="JORDA">
                                                                    JORDAN </option>
                                                                <option value="KAZAK">
                                                                    KAZAKHSTAN </option>
                                                                <option value="KENYA">
                                                                    KENYA </option>
                                                                <option value="KOREA">
                                                                    KOREA </option>
                                                                <option value="KOSOV">
                                                                    KOSOVO </option>
                                                                <option value="KUWAI">
                                                                    KUWAIT </option>
                                                                <option value="LAOS">
                                                                    LAOS </option>
                                                                <option value="LATVI">
                                                                    LATVIA </option>
                                                                <option value="LEBAN">
                                                                    LEBANON </option>
                                                                <option value="LIBER">
                                                                    LIBERIA </option>
                                                                <option value="LIBYA">
                                                                    LIBYA </option>
                                                                <option value="LITHU">
                                                                    LITHUNIA </option>
                                                                <option value="LUXEM">
                                                                    LUXEMBOURG </option>
                                                                <option value="MACED">
                                                                    MACEDONIA </option>
                                                                <option value="MALAY">
                                                                    MALAYSIA </option>
                                                                <option value="MALAW">
                                                                    MALAWI </option>
                                                                <option value="MALDI">
                                                                    MALDIVES </option>
                                                                <option value="MALI">
                                                                    MALI </option>
                                                                <option value="MALTA">
                                                                    MALTA </option>
                                                                <option value="MAURI">
                                                                    MAURITIUS </option>
                                                                <option value="MEXIC">
                                                                    MEXICO </option>
                                                                <option value="MOROC">
                                                                    MOROCCO </option>
                                                                <option value="MONGO">
                                                                    MONGOLIA </option>
                                                                <option value="NAMIB">
                                                                    NAMIBIA </option>
                                                                <option value="NEPAL">
                                                                    NEPAL </option>
                                                                <option value="NEWZL">
                                                                    NEW ZEALAND </option>
                                                                <option value="NICAR">
                                                                    NICARAGUA </option>
                                                                <option value="NIGER">
                                                                    NIGERIA </option>
                                                                <option value="NORWA">
                                                                    NORWAY </option>
                                                                <option value="PAKIS">
                                                                    PAKISTAN </option>
                                                                <option value="PALAU">
                                                                    PALAU </option>
                                                                <option value="PALES">
                                                                    PALESTINE </option>
                                                                <option value="PANAM">
                                                                    PANAMA </option>
                                                                <option value="PAPUA">
                                                                    PAPUA NEW GUINEA </option>
                                                                <option value="PARAG">
                                                                    PARAGUAY </option>
                                                                <option value="PERU">
                                                                    PERU </option>
                                                                <option value="PORTU">
                                                                    PORTUGAL </option>
                                                                <option value="PUERT">
                                                                    PUERTO RICO </option>
                                                                <option value="ROMAN">
                                                                    ROMANIA </option>
                                                                <option value="RWAND">
                                                                    RWANDA </option>
                                                                <option value="SALVA">
                                                                    EL SALVADOR </option>
                                                                <option value="SAUDI">
                                                                    SAUDI ARABIA </option>
                                                                <option value="SENEG">
                                                                    SENEGAL </option>
                                                                <option value="SERBI">
                                                                    SERBIA </option>
                                                                <option value="SIERR">
                                                                    SIERRA LEONE </option>
                                                                <option value="SINGA">
                                                                    SINGAPORE </option>
                                                                <option value="SLOVA">
                                                                    SLOVAKIA </option>
                                                                <option value="SLOVE">
                                                                    SLOVENIA </option>
                                                                <option value="SOMAL">
                                                                    SOMALI </option>
                                                                <option value="SAFRI">
                                                                    SOUTH AFRICA </option>
                                                                <option value="SPAIN">
                                                                    SPAIN </option>
                                                                <option value="SRILA">
                                                                    SRI LANKA </option>
                                                                <option value="SUDAN">
                                                                    SUDAN </option>
                                                                <option value="SURIN">
                                                                    SURINAM </option>
                                                                <option value="SWEDE">
                                                                    SWEDEN </option>
                                                                <option value="SWITZ">
                                                                    SWITZERLAND </option>
                                                                <option value="SYRIA">
                                                                    SYRIA </option>
                                                                <option value="TAIWA">
                                                                    TAIWAN </option>
                                                                <option value="TAJIK">
                                                                    TAJIKISTAN </option>
                                                                <option value="TANZA">
                                                                    TANZANIA </option>
                                                                <option value="THAIL">
                                                                    THAILAND </option>
                                                                <option value="TIBET">
                                                                    TIBET </option>
                                                                <option value="TOBAG">
                                                                    TOBAGO </option>
                                                                <option value="TRINI">
                                                                    TRINIDAD </option>
                                                                <option value="TUNIS">
                                                                    TUNISIA </option>
                                                                <option value="TURKY">
                                                                    TURKEY </option>
                                                                <option value="UGAND">
                                                                    UGANDA </option>
                                                                <option value="UKRAI">
                                                                    UKRAINE </option>
                                                                <option value="URUGU">
                                                                    URUGUAY </option>
                                                                <option value="UZBEK">
                                                                    UZBEKISTAN </option>
                                                                <option value="VANAT">
                                                                    VANATUA </option>
                                                                <option value="VENEZ">
                                                                    VENEZUELA </option>
                                                                <option value="VIETN">
                                                                    VIETNAM </option>
                                                                <option value="YEMEN">
                                                                    YEMEN </option>
                                                                <option value="ZAMBI">
                                                                    ZAMBIA </option>
                                                                <option value="ZIMBA">
                                                                    ZIMBABWE </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="ca_region"><strong class="text-red">*</strong> Region</label>
                                                            <select data-placeholder="Select Region" id="ca_region" name="ca_region" class="form-control select2bs4" style="width: 100%;">
                                                                <option value="" selected>
                                                                    Region 1 - Ilocos Region </option>
                                                                <option value="01">
                                                                    Region 1 - Ilocos Region </option>
                                                                <option value="02">
                                                                    Region 2 - Cagayan Valley </option>
                                                                <option value="03">
                                                                    Region 3 - Central Luzon </option>
                                                                <option value="04">
                                                                    Region 4A - CALABARZON </option>
                                                                <option value="05">
                                                                    Region 5 - Bicol Region </option>
                                                                <option value="06">
                                                                    Region 6 - Western Visayas </option>
                                                                <option value="07">
                                                                    Region 7 - Central Visayas </option>
                                                                <option value="08">
                                                                    Region 8 - Eastern Visayas </option>
                                                                <option value="09">
                                                                    Region 9 - Zamboanga Peninsula </option>
                                                                <option value="10">
                                                                    Region 10 - Northern Mindanao </option>
                                                                <option value="11">
                                                                    Region 11 - Davao Region </option>
                                                                <option value="12">
                                                                    Region 12 - SOCCSKSARGEN </option>
                                                                <option value="13">
                                                                    NCR - National Capital Region </option>
                                                                <option value="14">
                                                                    CAR - Cordillera Administrative Region </option>
                                                                <option value="15">
                                                                    BARMM - Bangsamoro Autonomous Region in Muslim Min </option>
                                                                <option value="16">
                                                                    Region 13 - CARAGA </option>
                                                                <option value="17">
                                                                    Region 4B - MIMAROPA Region </option>
                                                                <option value="98">
                                                                    CAR </option>
                                                                <option value="99">
                                                                    NCR </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="ca_province"><strong class="text-red">*</strong> Province</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_ca_province" name="unknown_ca_province">
                                                                <label for="unknown_ca_province">Unknown</label>
                                                            </div>
                                                            <!-- COMMENT: get this attr value and force declare to this html tag -->
                                                            <select data-placeholder="Select Province" id="ca_province" name="ca_province" class="form-control select2bs4" style="width: 100%;">
                                                                <option value="" selected>
                                                                </option>
                                                                <option value="0410">
                                                                    BATANGAS </option>
                                                                <option value="0421">
                                                                    CAVITE </option>
                                                                <option value="0434">
                                                                    LAGUNA </option>
                                                                <option value="0440">
                                                                    MARINDUQUE </option>
                                                                <option value="0451">
                                                                    OCCIDENTAL MINDORO </option>
                                                                <option value="0452">
                                                                    ORIENTAL MINDORO </option>
                                                                <option value="0453">
                                                                    PALAWAN </option>
                                                                <option value="0456">
                                                                    QUEZON </option>
                                                                <option value="0458">
                                                                    RIZAL </option>
                                                                <option value="0459">
                                                                    ROMBLON </option>
                                                                <option value="0477">
                                                                    AURORA </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="ca_muninicipality_city"><strong class="text-red">*</strong> Municipality/City</label>
                                                            <div class="icheck-primary d-inline">
                                                                <!-- COMMENT: arrange this spelling -->
                                                                <input type="checkbox" id="unknown_ca_muninicipality_city" name="unknown_ca_muninicipality_city">
                                                                <label for="unknown_ca_muninicipality_city">Unknown</label>
                                                            </div>
                                                            <!-- COMMENT: get this attr value and force declare to this html tag -->
                                                            <select data-placeholder="Select Municipality/City" id="ca_muninicipality_city" name="ca_muninicipality_city" class="form-control select2bs4" style="width: 100%;">
                                                                <option value="" selected>

                                                                </option>
                                                                <option value="044001">
                                                                    BOAC (Capital) (61)
                                                                </option>
                                                                <option value="044002">
                                                                    BUENAVISTA (15)
                                                                </option>
                                                                <option value="044003">
                                                                    GASAN (25)
                                                                </option>
                                                                <option value="044004">
                                                                    MOGPOG (37) </option>
                                                                <option value="044005">
                                                                    SANTA CRUZ (55)
                                                                </option>
                                                                <option value="044006">
                                                                    TORRIJOS (25)
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="ca_barangay"><strong class="text-red">*</strong> Barangay</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_ca_barangay" name="unknown_ca_barangay">
                                                                <label for="unknown_ca_barangay">Unknown</label>
                                                            </div>
                                                            <select data-placeholder="Select Barangay" id="ca_barangay" name="ca_barangay" class="form-control select2bs4" style="width: 100%;">
                                                                <option value="" selected>
                                                                </option>
                                                                <option value="044004038">
                                                                    Villa Mendez (Pob.) </option>
                                                                <option value="044004037">
                                                                    Tarug </option>
                                                                <option value="044004036">
                                                                    Sumangga </option>
                                                                <option value="044004035">
                                                                    Silangan </option>
                                                                <option value="044004034">
                                                                    Sayao </option>
                                                                <option value="044004033">
                                                                    Puting Buhangin </option>
                                                                <option value="044004032">
                                                                    Pili </option>
                                                                <option value="044004030">
                                                                    Paye </option>
                                                                <option value="044004029">
                                                                    Nangka II </option>
                                                                <option value="044004028">
                                                                    Nangka I </option>
                                                                <option value="044004027">
                                                                    Mendez </option>
                                                                <option value="044004026">
                                                                    Mataas Na Bayan </option>
                                                                <option value="044004025">
                                                                    Market Site (Pob.) </option>
                                                                <option value="044004024">
                                                                    Mangyan-Mababad </option>
                                                                <option value="044004023">
                                                                    Mampaitan </option>
                                                                <option value="044004022">
                                                                    Malusak </option>
                                                                <option value="044004021">
                                                                    Malayak </option>
                                                                <option value="044004020">
                                                                    Magapua </option>
                                                                <option value="044004019">
                                                                    Laon </option>
                                                                <option value="044004018">
                                                                    Lamesa </option>
                                                                <option value="044004017">
                                                                    Janagdong </option>
                                                                <option value="044004016">
                                                                    Ino </option>
                                                                <option value="044004015">
                                                                    Hinanggayon </option>
                                                                <option value="044004014">
                                                                    Hinadharan </option>
                                                                <option value="044004013">
                                                                    Guisian </option>
                                                                <option value="044004012">
                                                                    Gitnang Bayan (Pob.) </option>
                                                                <option value="044004011">
                                                                    Dulong Bayan (Pob.) </option>
                                                                <option value="044004010">
                                                                    Danao </option>
                                                                <option value="044004009">
                                                                    Capayang </option>
                                                                <option value="044004008">
                                                                    Candahon </option>
                                                                <option value="044004007">
                                                                    Butansapa </option>
                                                                <option value="044004006">
                                                                    Bocboc </option>
                                                                <option value="044004005">
                                                                    Bintakay </option>
                                                                <option value="044004004">
                                                                    Banto </option>
                                                                <option value="044004003">
                                                                    Balanacan </option>
                                                                <option value="044004002">
                                                                    Argao </option>
                                                                <option value="044004001">
                                                                    Anapog-Sibucao </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-2">
                                                            <label for="ca_zip_code"><strong class="text-red">*</strong> Zip Code</label>
                                                            <input value="" type="text" class="form-control" id="ca_zip_code" name="ca_zip_code" placeholder="Zip Code" disabled="">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="ca_street_number"><strong class="text-red">*</strong> Address</label>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="unknown_ca_street_number" name="unknown_ca_street_number">
                                                                <label for="unknown_ca_street_number">Unknown</label>
                                                            </div>
                                                            <input value="" placeholder="House Number, Street name" type="text" class="form-control" id="ca_street_number" name="ca_street_number">
                                                        </div>

                                                        <!-- Contact Number -->
                                                        <div class="form-group col-md-6">
                                                            <label for="contact_number"><strong class="text-red">*</strong> Contact Number</label>
                                                            <input value="" type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number">
                                                        </div>
                                                        <!-- Occupation-->
                                                        <div class="form-group col-md-6">
                                                            <label for="occupation">Occupation</label>
                                                            <input value="" type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Buttons -->
                                                <button type="submit" style="width: 20%;" class="btn btn-primary float-right mb-3 shadow rounded align-middle">Next<i class="fas fa-arrow-right ml-2"></i></button>
                                            </form>

                                            <!-- Contact Details -->
                                            <form id="contact_details" class="content" role="tabpanel" aria-labelledby="contact_details-trigger">
                                                <label class="h3 mt-1">
                                                    Contact Person
                                                </label>
                                                <hr class="m-0 mb-3">

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <!-- Contact Person Lastname -->
                                                        <label class="" for="contact_last_name"><strong class="text-red">*</strong> Last Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="contact_last_name" name="contact_last_name" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <!-- Contact Person Firstname -->
                                                        <label class="" for="contact_first_name"><strong class="text-red">*</strong> First Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="contact_first_name" name="contact_first_name" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <!-- Contact Person Middlename -->
                                                        <label class="" for="contact_middle_name"><strong class="text-red">*</strong> Middle Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="contact_middle_name" name="contact_middle_name" placeholder="Middle name">
                                                    </div>

                                                    <div class="form-group col-md-4 mb-1">
                                                        <!-- Contact Person Address -->
                                                        <label class="" for="contact_address"><strong class="text-red">*</strong> Address</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="contact_address" name="contact_address" placeholder="Address" aria-invalid="false">
                                                    </div>
                                                    <div class="form-group col-md-4 mb-1">
                                                        <!-- Contact Person Telepone -->
                                                        <label class="" for="contact_telephone"><strong class="text-red">*</strong> Telephone</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="contact_telephone" name="contact_telephone" placeholder="Telephone">
                                                    </div>

                                                    <div class="form-group col-md-4 mb-1">
                                                        <!-- Relation to Patient -->
                                                        <label for="contact_relation">Relation to Patient</label>
                                                        <select data-allow-clear="true" data-placeholder="Select Relation to Patient" id="contact_relation" name="contact_relation" class="form-control select2bs4" style="width: 100%;">
                                                            <option value="" selected>
                                                            </option>
                                                            <option value="MOTHE">
                                                                Mother </option>
                                                            <option value="FATHE">
                                                                Father </option>
                                                            <option value="SISTE">
                                                                Sister </option>
                                                            <option value="BROTH">
                                                                Brother </option>
                                                            <option value="AUNT">
                                                                Aunt </option>
                                                            <option value="UNCLE">
                                                                Uncle </option>
                                                            <option value="NEPHE">
                                                                Nephew </option>
                                                            <option value="NIECE">
                                                                Niece </option>
                                                            <option value="COUSI">
                                                                Cousin </option>
                                                            <option value="SPOUS">
                                                                Spouse </option>
                                                            <option value="FHEAD">
                                                                Head of Family </option>
                                                            <option value="MOTIN">
                                                                Mother-In-Law </option>
                                                            <option value="NEIGH">
                                                                Neighbor </option>
                                                            <option value="FRIEN">
                                                                Friend </option>
                                                            <option value="DAUGH">
                                                                Daughter </option>
                                                            <option value="SON">
                                                                Son </option>
                                                            <option value="COLSP">
                                                                Common Law Spouse </option>
                                                            <option value="SISIN">
                                                                Sister-In-Law </option>
                                                            <option value="BROIN">
                                                                Brother-In-Law </option>
                                                            <option value="OTHER">
                                                                Others </option>
                                                            <option value="GNDCH">
                                                                Grandchild </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <hr class="m-0 mb-3 mt-2">

                                                <div class="form-row">

                                                    <div class="form-group col-md-2">
                                                        <!-- Father Details -->
                                                        <label class="">
                                                            Father's Details
                                                        </label>

                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <!-- Father Details Lastname -->
                                                        <label class="" for="father_last_name"><strong class="text-red">*</strong> Last Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="father_last_name" name="father_last_name" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Father Details Firstname -->
                                                        <label class="" for="father_first_name"><strong class="text-red">*</strong> First Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="father_first_name" name="father_first_name" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Father Details Middlename  -->
                                                        <label class="" for="father_middle_name"><strong class="text-red">*</strong> Middle Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="father_middle_name" name="father_middle_name" placeholder="Middle name">
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <!-- Father Address -->
                                                        <label class="" for="father_address"><strong class="text-red">*</strong> Address</label>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" id="father_same_as_patient_address" name="father_same_as_patient_address">
                                                            <label class="" for="father_same_as_patient_address">Same as patient</label>
                                                        </div>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="father_address" name="father_address" placeholder="Address">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Father Telepone -->
                                                        <label class="" for="father_telephone"><strong class="text-red">*</strong> Telephone</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="father_telephone" name="father_telephone" placeholder="Telephone">
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <!-- Mother Details -->
                                                        <label class="">
                                                            Mother's Details
                                                        </label>
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <!-- Mother Lastname -->
                                                        <label class="" for="mother_last_name"><strong class="text-red">*</strong> Last Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="mother_last_name" name="mother_last_name" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Mother Firstname -->
                                                        <label class="" for="mother_first_name"><strong class="text-red">*</strong> First Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="mother_first_name" name="mother_first_name" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Mother Middlename-->
                                                        <label class="" for="mother_middle_name"><strong class="text-red">*</strong> Middle Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="mother_middle_name" name="mother_middle_name" placeholder="Middle name">
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <!-- Mother Address -->
                                                        <label class="" for="mother_address"><strong class="text-red">*</strong> Address</label>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" id="mother_same_as_patient_address" name="mother_same_as_patient_address">
                                                            <label class="" for="mother_same_as_patient_address">Same as patient</label>
                                                        </div>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="mother_address" name="mother_address" placeholder="Address">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Mother Telepone -->
                                                        <label class="" for="mother_telephone"><strong class="text-red">*</strong> Telephone</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="mother_telephone" name="mother_telephone" placeholder="Telephone">
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <!-- Mother Details -->
                                                        <label class="">
                                                            Spouse's Details
                                                        </label>
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <!-- Spouse Lastname -->
                                                        <label class="" for="spouse_last_name">Last Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="spouse_last_name" name="spouse_last_name" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Spouse Firstname -->
                                                        <label class="" for="spouse_first_name">First Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="spouse_first_name" name="spouse_first_name" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Spouse Middlename -->
                                                        <label class="" for="spouse_middle_name">Middle Name</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="spouse_middle_name" name="spouse_middle_name" placeholder="Middle name">
                                                    </div>

                                                    <div class="form-group col-md-2">
                                                        <!-- Spouse Address -->
                                                        <label class="" for="spouse_address">Address</label>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" id="spouse_same_as_patient_address" name="spouse_same_as_patient_address">
                                                            <label class="" for="spouse_same_as_patient_address">Same as patient</label>
                                                        </div>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="spouse_address" name="spouse_address" placeholder="Address">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <!-- Spouse Telephone -->
                                                        <label class="" for="spouse_telephone">Telephone</label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="spouse_telephone" name="spouse_telephone" placeholder="Telephone">
                                                    </div>

                                                </div>

                                                <!-- Buttons -->
                                                <button type="button" style="width: 20%;" class="btn btn-danger float-left mb-3 shadow rounded align-middle" id="btn_back_to_first_form"> <i class="fas fa-arrow-left mr-2"></i>Back</button>
                                                <button type="submit" style="width: 20%;" class="btn btn-primary float-right mb-3 shadow rounded align-middle">Next<i class="fas fa-arrow-right ml-2"></i></button>
                                            </form>

                                            <!-- Informants -->
                                            <form id="informants" class="content" role="tabpanel" aria-labelledby="informants-trigger">

                                                <label class=" h3 mt-1">
                                                    Person Responsible Details
                                                </label>

                                                <hr class="m-0 mb-3">

                                                <div class="form-row">
                                                    <div class="form-group col-md-4 mb-3">
                                                        <!-- Person Responsible lastname -->
                                                        <label class="" for="person_responsible_last_name">
                                                            Last Name
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="person_responsible_last_name" name="person_responsible_last_name" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group col-md-4 mb-3">
                                                        <!-- Person Responsible firstname -->
                                                        <label class="" for="person_responsible_first_name">
                                                            First Name
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="person_responsible_first_name" name="person_responsible_first_name" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-4 mb-3">
                                                        <!-- Person Responsible middlename -->
                                                        <label class="" for="person_responsible_middle_name">
                                                            Middle Name
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="person_responsible_middle_name" name="person_responsible_middle_name" placeholder="Middle name">
                                                    </div>

                                                    <div class="form-group col-md-4 mb-1">
                                                        <!-- Person Responsible address -->
                                                        <label class="" for="person_responsible_address">
                                                            Address
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="person_responsible_address" name="person_responsible_address" placeholder="Address">
                                                    </div>
                                                    <div class="form-group col-md-4 mb-1">
                                                        <!-- Person Responsible telephone -->
                                                        <label class="" for="person_responsible_telephone">
                                                            Telephone
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="person_responsible_telephone" name="person_responsible_telephone" placeholder="Telephone">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <!-- Person Responsible Relation to Patient -->
                                                        <label for="person_responsible_relation">
                                                            Relation to Patient
                                                        </label>
                                                        <select data-allow-clear="true" data-placeholder="Select Relation to Patient" id="person_responsible_relation" name="person_responsible_relation" class="form-control select2bs4" style="width: 100%;">
                                                            <option value="" selected>
                                                            </option>
                                                            <option value="MOTHE">
                                                                Mother </option>
                                                            <option value="FATHE">
                                                                Father </option>
                                                            <option value="SISTE">
                                                                Sister </option>
                                                            <option value="BROTH">
                                                                Brother </option>
                                                            <option value="AUNT">
                                                                Aunt </option>
                                                            <option value="UNCLE">
                                                                Uncle </option>
                                                            <option value="NEPHE">
                                                                Nephew </option>
                                                            <option value="NIECE">
                                                                Niece </option>
                                                            <option value="COUSI">
                                                                Cousin </option>
                                                            <option value="SPOUS">
                                                                Spouse </option>
                                                            <option value="FHEAD">
                                                                Head of Family </option>
                                                            <option value="MOTIN">
                                                                Mother-In-Law </option>
                                                            <option value="NEIGH">
                                                                Neighbor </option>
                                                            <option value="FRIEN">
                                                                Friend </option>
                                                            <option value="DAUGH">
                                                                Daughter </option>
                                                            <option value="SON">
                                                                Son </option>
                                                            <option value="COLSP">
                                                                Common Law Spouse </option>
                                                            <option value="SISIN">
                                                                Sister-In-Law </option>
                                                            <option value="BROIN">
                                                                Brother-In-Law </option>
                                                            <option value="OTHER">
                                                                Others </option>
                                                            <option value="GNDCH">
                                                                Grandchild </option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <label class=" h3 mt-1">
                                                    Informant Details
                                                </label>

                                                <hr class="m-0 mb-3">

                                                <div class="form-row">
                                                    <div class="form-group col-md-4 mb-3">
                                                        <!-- Informant lastname -->
                                                        <label class="" for="informant_last_name">
                                                            Last Name
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="informant_last_name" name="informant_last_name" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group col-md-4 mb-3">
                                                        <!-- Informant firstname -->
                                                        <label class="" for="informant_first_name">
                                                            First Name
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="informant_first_name" name="informant_first_name" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-4 mb-3">
                                                        <!-- Informant middlename -->
                                                        <label class="" for="informant_middle_name">
                                                            Middle Name
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="informant_middle_name" name="informant_middle_name" placeholder="Middle name">
                                                    </div>

                                                    <div class="form-group col-md-4 mb-1">
                                                        <!-- Informant Address -->
                                                        <label class="" for="informant_address">
                                                            Address
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="informant_address" name="informant_address" placeholder="Address">
                                                    </div>
                                                    <div class="form-group col-md-4 mb-1">
                                                        <!-- Informant telephone -->
                                                        <label class="" for="informant_telephone">
                                                            Telephone
                                                        </label>
                                                        <input value="" type="text" class="form-control mr-sm-2" id="informant_telephone" name="informant_telephone" placeholder="Telephone">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <!-- Informant relation to patient -->
                                                        <label for="informant_relation">
                                                            Relation to Patient
                                                        </label>
                                                        <select data-allow-clear="true" data-placeholder="Select Relation to Patient" id="informant_relation" name="informant_relation" class="form-control select2bs4" style="width: 100%;">
                                                            <option value="" selected>
                                                            </option>
                                                            <option value="MOTHE">
                                                                Mother </option>
                                                            <option value="FATHE">
                                                                Father </option>
                                                            <option value="SISTE">
                                                                Sister </option>
                                                            <option value="BROTH">
                                                                Brother </option>
                                                            <option value="AUNT">
                                                                Aunt </option>
                                                            <option value="UNCLE">
                                                                Uncle </option>
                                                            <option value="NEPHE">
                                                                Nephew </option>
                                                            <option value="NIECE">
                                                                Niece </option>
                                                            <option value="COUSI">
                                                                Cousin </option>
                                                            <option value="SPOUS">
                                                                Spouse </option>
                                                            <option value="FHEAD">
                                                                Head of Family </option>
                                                            <option value="MOTIN">
                                                                Mother-In-Law </option>
                                                            <option value="NEIGH">
                                                                Neighbor </option>
                                                            <option value="FRIEN">
                                                                Friend </option>
                                                            <option value="DAUGH">
                                                                Daughter </option>
                                                            <option value="SON">
                                                                Son </option>
                                                            <option value="COLSP">
                                                                Common Law Spouse </option>
                                                            <option value="SISIN">
                                                                Sister-In-Law </option>
                                                            <option value="BROIN">
                                                                Brother-In-Law </option>
                                                            <option value="OTHER">
                                                                Others </option>
                                                            <option value="GNDCH">
                                                                Grandchild </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Buttons -->
                                                <button type="button" style="width: 20%;" class="btn btn-danger float-left mb-3 shadow rounded align-middle" id="btn_back_to_second_form"> <i class="fas fa-arrow-left mr-2"></i>Back</button>
                                                <button type="submit" style="width: 20%;" class="btn btn-primary float-right mb-3 shadow rounded align-middle">Next<i class="fas fa-arrow-right ml-2"></i></button>
                                            </form>

                                            <!-- Source of Payments -->
                                            <form id="source_of_payments" class="content" role="tabpanel" aria-labelledby="source_of_payments-trigger">

                                                <label class=" h3 mt-1">
                                                    Source of Payment
                                                </label>

                                                <hr class="m-0 mb-3">

                                                <label class="">
                                                    If referred by another health care institution.
                                                </label>

                                                <!-- Facilities -->
                                                <div class="form-group-container">
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="facility"><strong class="text-red">*</strong> Name of Facility</label>
                                                            <select data-allow-clear="true" data-placeholder="Select Facility" id="facility" name="facility" class="form-control select2bs4" style="width: 100%;">
                                                                <option value="" selected> </option>
                                                                <option value="0000958">
                                                                    A. GARCIA MATERNITY &amp; GENERAL HOSPITAL </option>
                                                                <option value="0001343">
                                                                    A. LOPEZ CLINIC </option>
                                                                <option value="0000013">
                                                                    A.N. DIAMANTE MEDICAL CLINIC </option>
                                                                <option value="0001517">
                                                                    A.O. FLOIRENDO HOSPITAL </option>
                                                                <option value="0000642">
                                                                    A.P. CRUZ COMMUNITY HOSPITAL </option>
                                                                <option value="0001583">
                                                                    A.P. DELA CERNA HOSPITAL </option>
                                                                <option value="0001507">
                                                                    ABAD MEDICAL CLINIC </option>
                                                                <option value="0001737">
                                                                    ABATAN CATHOLIC MISSION HOSPITAL </option>
                                                                <option value="0000159">
                                                                    ABRA DE ILOG MUNICIPAL HOSPITAL </option>
                                                                <option value="0000596">
                                                                    ABRA PROVINCIAL HOSPITAL </option>
                                                                <option value="0001422">
                                                                    ABRENA MEDICAL CLINIC </option>
                                                                <option value="0000403">
                                                                    ABUYOG DISTRICT HOSPITAL </option>
                                                                <option value="0000795">
                                                                    ACAS CLINIC AND HOSPITAL </option>
                                                                <option value="0001377">
                                                                    ACIS HEALTH CARE CENTER </option>
                                                                <option value="0001560">
                                                                    ACOSTA CLINIC </option>
                                                                <option value="0000796">
                                                                    ADORA CLINIC AND HOSPITAL </option>
                                                                <option value="0001003">
                                                                    AFABLE MEDICAL CENTER </option>
                                                                <option value="0000577">
                                                                    AFP MEDICAL CENTER </option>
                                                                <option value="0000107">
                                                                    AGLIPAY DISTRICT HOSPITAL </option>
                                                                <option value="0001230">
                                                                    AGO FOUNDATION HOSPITAL </option>
                                                                <option value="0001180">
                                                                    AGO GENERAL HOSPITAL </option>
                                                                <option value="0001795">
                                                                    AGOO FAMILY HOSPITAL </option>
                                                                <option value="0000799">
                                                                    AGOO MEDICAL CLINIC </option>
                                                                <option value="0001345">
                                                                    AGPALO HOSPITAL </option>
                                                                <option value="0000626">
                                                                    AGUSAN DEL NORTE PROVINCIAL HOSPITAL </option>
                                                                <option value="0000633">
                                                                    AGUSAN DEL SUR PROVINCIAL HOSPITAL </option>
                                                                <option value="0001816">
                                                                    AIR FORCE GENERAL HOSPITAL </option>
                                                                <option value="0001265">
                                                                    AKLAN BAPTIST HOSPITAL </option>
                                                                <option value="0001506">
                                                                    ALABA MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000643">
                                                                    ALABANG MEDICAL CLINIC </option>
                                                                <option value="0001841">
                                                                    ALAMADA PROVINCIAL COMMUNITY HOSPITAL </option>
                                                                <option value="0000866">
                                                                    ALBANO'S CLINIC </option>
                                                                <option value="0000247">
                                                                    ALBAY PROVINCIAL HOSPITAL </option>
                                                                <option value="0000394">
                                                                    ALBINO DURAN MEMORIAL HOSPITAL </option>
                                                                <option value="0000089">
                                                                    ALCALA MUNICIPAL HOSPITAL </option>
                                                                <option value="0001502">
                                                                    ALEGRE MEDICAL CLINIC </option>
                                                                <option value="0000318">
                                                                    ALEOSAN DISTRICT HOSPITAL </option>
                                                                <option value="0000887">
                                                                    ALFA MEDICAL CLINIC </option>
                                                                <option value="0001596">
                                                                    ALFECHE MEDICAL CLINIC </option>
                                                                <option value="0001008">
                                                                    ALFEROS HOSPITAL </option>
                                                                <option value="0000081">
                                                                    ALFONSO PONCE ENRILE MEMORIAL HOSPITAL </option>
                                                                <option value="0001284">
                                                                    ALFREDO E. MARANON SR. MEM. HOSP. </option>
                                                                <option value="0001240">
                                                                    ALI¥O HOSPITAL </option>
                                                                <option value="0000464">
                                                                    ALICIA DISTRICT HOSPITAL </option>
                                                                <option value="0000417">
                                                                    ALLEN DISTRICT HOSPITAL </option>
                                                                <option value="0001830">
                                                                    ALMORA GENERAL HOSPITAL </option>
                                                                <option value="0000293">
                                                                    ALTAVAS DISTRICT HOSPITAL </option>
                                                                <option value="0001582">
                                                                    ALTERADO GENERAL HOSPITAL </option>
                                                                <option value="0001012">
                                                                    ALZONA HOSPITAL </option>
                                                                <option value="0001848">
                                                                    AMAI PAKPAK GENERAL HOSPITAL </option>
                                                                <option value="0000565">
                                                                    AMANG RODRIGUEZ MEDICAL CENTER </option>
                                                                <option value="0001761">
                                                                    AMARILLE-DOMINOS HOSPITAL </option>
                                                                <option value="0001423">
                                                                    AMATOS MEDICAL &amp; MAT. HOSPITAL </option>
                                                                <option value="0000644">
                                                                    AMISOLA MATERNITY HOSPITAL </option>
                                                                <option value="0000623">
                                                                    AMMA JADSAC DISTRICT HOSPITAL </option>
                                                                <option value="0000931">
                                                                    AMOS GENERAL HOSPITAL </option>
                                                                <option value="0000430">
                                                                    ANAHAWAN DISTRICT HOSPITAL </option>
                                                                <option value="0000794">
                                                                    ANCHETA CLINIC AND HOSPITAL </option>
                                                                <option value="0000160">
                                                                    ANDRES BONIFACIO MEMORIAL HOSPITAL </option>
                                                                <option value="0001510">
                                                                    ANDRES MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0001844">
                                                                    ANDRES SORIANO MEMORIAL HOSPITAL COOPERATIVE </option>
                                                                <option value="0001336">
                                                                    ANDRES SORIANO SR. MEM. MED. CENTER </option>
                                                                <option value="0000308">
                                                                    ANGEL SALAZAR MEMORIAL GENERAL HOSP. </option>
                                                                <option value="0000956">
                                                                    ANGELES MEDICAL CENTER </option>
                                                                <option value="0000955">
                                                                    ANGELES UNIVERSITY FOUNDATION MEDICAL CENTER </option>
                                                                <option value="0000008">
                                                                    Angono District Hospital </option>
                                                                <option value="0001013">
                                                                    ANGONO GENERAL HOSPITAL </option>
                                                                <option value="0001291">
                                                                    ANTEQUERA COMMUNITY HOSPITAL </option>
                                                                <option value="0000007">
                                                                    Antipolo Doctor's Hospital </option>
                                                                <option value="0001847">
                                                                    ANULAO ST. MICHAEL MED. CLIINIC AND HOSP. </option>
                                                                <option value="0000163">
                                                                    APACIBLE MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0000090">
                                                                    APARRI DISTRICT HOSPITAL </option>
                                                                <option value="0001184">
                                                                    AQUINAS UNIVERSITY HOSPITAL </option>
                                                                <option value="0000977">
                                                                    AQUINO MEDICAL CLINIC </option>
                                                                <option value="0001850">
                                                                    ARCEGA`S CLINIC AND HOSPITAL </option>
                                                                <option value="0000645">
                                                                    ARNAIZ HOSPITAL </option>
                                                                <option value="0001015">
                                                                    ARNAIZ MEDICAL AND MATERNITY CLINIC </option>
                                                                <option value="0000276">
                                                                    AROROY MUNICIPAL HOSPITAL </option>
                                                                <option value="0001537">
                                                                    ARRIESGADO MATERNITY &amp; CHILDREN'S HOSP </option>
                                                                <option value="0000003">
                                                                    ARSENAL "KALUSUGAN" HOSPITAL </option>
                                                                <option value="0000393">
                                                                    ARTECHE DISTRICT HOSPITAL </option>
                                                                <option value="0001480">
                                                                    ARUELO GENERAL HOSPITAL </option>
                                                                <option value="0000969">
                                                                    ASCOM-DLSUMC FRIENDSHIP HOSPITAL </option>
                                                                <option value="0001607">
                                                                    ASILO HOSPITAL </option>
                                                                <option value="0000063">
                                                                    ASINGAN MEDICARE AND COMMUNITY HOSP. </option>
                                                                <option value="0001016">
                                                                    ASSUMPTA MEDICAL HOSPITAL </option>
                                                                <option value="0000646">
                                                                    ASTHMA RX CENTER </option>
                                                                <option value="0000599">
                                                                    ATOK DISTRICT HOSPITAL </option>
                                                                <option value="0001625">
                                                                    AUGUIS CLINIC AND HOSPITAL </option>
                                                                <option value="0000465">
                                                                    AURORA GENERAL HOSPITAL </option>
                                                                <option value="0000164">
                                                                    AURORA MEMORIAL HOSPITAL </option>
                                                                <option value="0001437">
                                                                    AZNAR MEDICAL CLINIC </option>
                                                                <option value="0000928">
                                                                    BA HOSPITAL </option>
                                                                <option value="0000832">
                                                                    BA¥EZ CLINIC </option>
                                                                <option value="0001782">
                                                                    BABARAN-ECHAVEZ MEDICAL AND PSYCHIATRIC CLINIC </option>
                                                                <option value="0001675">
                                                                    BABOL GENERAL HOSPITAL </option>
                                                                <option value="0000768">
                                                                    BACARRA GENERAL HOSPITAL </option>
                                                                <option value="01010103000030">
                                                                    BACARRA RHU </option>
                                                                <option value="0000056">
                                                                    BACNOTAN DISTRICT HOSPITAL </option>
                                                                <option value="0001275">
                                                                    BACOLOD SANITARIUM AND HOSPITAL </option>
                                                                <option value="0000360">
                                                                    BADIAN DISTRICT HOSPITAL </option>
                                                                <option value="0000647">
                                                                    BAESA ADVENT POLYCLINIC AND GENERAL HO </option>
                                                                <option value="0000001">
                                                                    BAGAC COMMUNITY and MEDICARE HOSPITAL </option>
                                                                <option value="0000648">
                                                                    BAGBAGUIN FAMILY HOSPITAL </option>
                                                                <option value="0000077">
                                                                    BAGGAO MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000078">
                                                                    BAGGAO MUNICIPAL HOSPITAL </option>
                                                                <option value="0000345">
                                                                    BAGO CITY HOSPITAL </option>
                                                                <option value="0001598">
                                                                    BAGONG LIPUNAN MEDICAL CLINIC </option>
                                                                <option value="0001542">
                                                                    BAGUIO COMMUNITY MEDICAL HOSPITAL </option>
                                                                <option value="0000600">
                                                                    BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER </option>
                                                                <option value="0001732">
                                                                    BAGUIO MEDICAL CENTER </option>
                                                                <option value="0001733">
                                                                    BAGUIO-FILIPINO-CHINESE GENERAL HOSPIT </option>
                                                                <option value="0000315">
                                                                    BAILAN DISTRICT HOSPITAL </option>
                                                                <option value="0000383">
                                                                    BAIS DISTRICT HOSPITAL </option>
                                                                <option value="0001333">
                                                                    BAKING MEDICAL CLINIC </option>
                                                                <option value="0000361">
                                                                    BALAMBAN DISTRICT HOSPITAL </option>
                                                                <option value="0001740">
                                                                    BALATOC HOSPITAL </option>
                                                                <option value="0001662">
                                                                    BALDONADO MEDICAL CLINIC </option>
                                                                <option value="0001017">
                                                                    BALIBAGO POLYCLINIC AND HOSPITAL </option>
                                                                <option value="0000144">
                                                                    BALITUCAN DISTRICT HOSPITAL </option>
                                                                <option value="0000116">
                                                                    BALIUAG DISTRICT HOSPITAL </option>
                                                                <option value="0000079">
                                                                    BALLESTEROS DISTRICT HOSPITAL </option>
                                                                <option value="0000847">
                                                                    BALLESTEROS HOSPITAL </option>
                                                                <option value="0000277">
                                                                    BALUD MUNICIPAL HOSPITAL </option>
                                                                <option value="0001526">
                                                                    BANDOLON MEDICAL CLINIC </option>
                                                                <option value="0000076">
                                                                    BANGAG MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0001721">
                                                                    BANGUED CHRISTIAN HOSPITAL </option>
                                                                <option value="0000041">
                                                                    BANGUI DISTRICT HOSPITAL </option>
                                                                <option value="0001568">
                                                                    BANSALAN MEDICAL CLINIC </option>
                                                                <option value="0000362">
                                                                    BANTAYAN DISTRICT HOSPITAL </option>
                                                                <option value="0000363">
                                                                    BARILI DISTRICT HOSPITAL </option>
                                                                <option value="0000617">
                                                                    BARLIG DISTRICT HOSPITAL </option>
                                                                <option value="0000321">
                                                                    BAROTAC VIEJO MUNICIPAL HOSPITAL </option>
                                                                <option value="0000138">
                                                                    BASA AIR BASE HOSPITAL </option>
                                                                <option value="0001509">
                                                                    BASA¥ES MEDICAL CLINIC </option>
                                                                <option value="0000424">
                                                                    BASEY DISTRICT HOSPITAL </option>
                                                                <option value="0001369">
                                                                    BASILAN COMMUNITY HOSPITAL </option>
                                                                <option value="0000439">
                                                                    BASILAN PROVINCIAL HOSPITAL </option>
                                                                <option value="0000004">
                                                                    BATAAN DOCTOR'S HOSPITAL </option>
                                                                <option value="0000112">
                                                                    BATAAN PROVINCIAL HOSPITAL </option>
                                                                <option value="0000005">
                                                                    BATAAN ST. JOSEPH HOSPITAL </option>
                                                                <option value="0000075">
                                                                    BATANES INTEGRATED PROVINCIAL HEALTH OFFICE, CLINI </option>
                                                                <option value="0000165">
                                                                    BATANGAS REGIONAL HOSPITAL </option>
                                                                <option value="0000269">
                                                                    BATO MATERNITY AND CHILDREN'S HOSPITAL </option>
                                                                <option value="0000166">
                                                                    BAUAN MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0001018">
                                                                    BAUTISTA HOSPITAL </option>
                                                                <option value="0000064">
                                                                    BAYAMBANG DISTRICT HOSPITAL </option>
                                                                <option value="0000384">
                                                                    BAYAWAN DISTRICT HOSPITAL </option>
                                                                <option value="0001002">
                                                                    BC-MCO COTO HOSPITAL </option>
                                                                <option value="0000649">
                                                                    BEATO-CAUILAN MATERNITY HOSPITAL </option>
                                                                <option value="0001019">
                                                                    BEL-CAST FAMILY HOSPITAL </option>
                                                                <option value="0000606">
                                                                    BENGUET GENERAL HOSPITAL </option>
                                                                <option value="0001202">
                                                                    BERANGO MEDICAL CLINIC </option>
                                                                <option value="0000650">
                                                                    BERNARDINO GENERAL HOSPITAL </option>
                                                                <option value="0001821">
                                                                    BERNARDINO GENERAL HOSPITAL II </option>
                                                                <option value="0001634">
                                                                    BERNARDO CLINIC </option>
                                                                <option value="0000619">
                                                                    BESAO DISTRICT HOSPITAL </option>
                                                                <option value="0000047">
                                                                    BESSANG PASS DISTRICT HOSPITAL </option>
                                                                <option value="0001355">
                                                                    BETHANY HOSPITAL </option>
                                                                <option value="0000806">
                                                                    BETHANY HOSPITAL, INC. </option>
                                                                <option value="0001433">
                                                                    BETHEL BAPTIST HOSPITAL </option>
                                                                <option value="0000263">
                                                                    BICOL MEDICAL CENTER </option>
                                                                <option value="0001836">
                                                                    BICOL REGIONAL TRAINING AND TEACHING HOSPITAL </option>
                                                                <option value="0000258">
                                                                    BICOL SANITARIUM </option>
                                                                <option value="0000438">
                                                                    BILIRAN PROVINCIAL HOSPITAL </option>
                                                                <option value="0001020">
                                                                    BIÑAN DOCTORS` HOSPITAL, INC. </option>
                                                                <option value="0000385">
                                                                    BINDOY DISTRICT HOSPITAL </option>
                                                                <option value="0000418">
                                                                    BIRI DISTRICT HOSPITAL </option>
                                                                <option value="0001539">
                                                                    BISHOP JOSEPH REGAN MEMORIAL HOSPITAL </option>
                                                                <option value="0001203">
                                                                    BITANTES MEDICAL CLINIC </option>
                                                                <option value="0001396">
                                                                    BLANCIA HOSPITAL </option>
                                                                <option value="0001332">
                                                                    BOGO-MEDELLIN MEDICAL CENTER </option>
                                                                <option value="0001308">
                                                                    BOHOL ST. JOSEPH HOSPITAL </option>
                                                                <option value="0001304">
                                                                    BOHOL ST. JUDE GENERAL HOSPITAL </option>
                                                                <option value="0001532">
                                                                    BOISER MEDICAL AND CHILDREN'S HOSPITAL </option>
                                                                <option value="0001518">
                                                                    BOISER MEDICAL CLINIC AND CHILDREN'S H </option>
                                                                <option value="0001021">
                                                                    BOLANOS HOSPITAL </option>
                                                                <option value="0000065">
                                                                    BOLINAO MEDICARE AND COMMUNITY HOSP. </option>
                                                                <option value="0000167">
                                                                    BONDOC PENINSULA DISTRICT HOSPITAL </option>
                                                                <option value="0000124">
                                                                    BONGABON DISTRICT HOSPITAL </option>
                                                                <option value="0001533">
                                                                    BONGABONG-SANICO MEDICAL CLINIC &amp; MAT. </option>
                                                                <option value="0001438">
                                                                    BONGCAS HOLY CHILD HOSPITAL </option>
                                                                <option value="0001457">
                                                                    BONIFACIO MEDICAL CLINIC </option>
                                                                <option value="0001655">
                                                                    BONTILAO`S COUNTRY CLINIC </option>
                                                                <option value="0000620">
                                                                    BONTOC GENERAL HOSPITAL </option>
                                                                <option value="0001633">
                                                                    BONTUYAN MEDICAL CLINIC </option>
                                                                <option value="0000300">
                                                                    BORACAY ISLAND MUNICIPAL HOSPITAL </option>
                                                                <option value="0001302">
                                                                    BORJA FAMILY CLINIC CORP. </option>
                                                                <option value="0001341">
                                                                    BORONGAN DOCTOR'S HOSPITAL </option>
                                                                <option value="0001409">
                                                                    BRENT HOSPITAL, INC. </option>
                                                                <option value="0001577">
                                                                    BROKENSHIRE INTEGRATED HEALTH MINISTRI </option>
                                                                <option value="0000168">
                                                                    BROOKE'S POINT DISTRICT HOSPITAL </option>
                                                                <option value="0000863">
                                                                    BUCAG'S HOSPITAL </option>
                                                                <option value="0001552">
                                                                    BUENAVENTURA MEDICAL CLINIC </option>
                                                                <option value="0000304">
                                                                    BUGASONG MEDICARE HOSPITAL </option>
                                                                <option value="0001454">
                                                                    BUKIDNON DOCTOR'S HOSPITAL, INC. </option>
                                                                <option value="0000481">
                                                                    BUKIDNON PROVINCIAL HOSPITAL </option>
                                                                <option value="0000120">
                                                                    BULACAN PROVINCIAL HOSPITAL </option>
                                                                <option value="0001254">
                                                                    BULAN GENERAL HOSPITAL </option>
                                                                <option value="0000284">
                                                                    BULAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0001562">
                                                                    BULLECER MEDICAL CLINIC </option>
                                                                <option value="0001793">
                                                                    BULUAN DISTRICT HOSPITAL </option>
                                                                <option value="0001258">
                                                                    BULUSAN FAMILY CLINIC </option>
                                                                <option value="0000407">
                                                                    BURAUEN DISTRICT HOSPITAL </option>
                                                                <option value="0000294">
                                                                    BURUANGA MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0001750">
                                                                    BUTUAN DOCTOR'S HOSPITAL, INC. </option>
                                                                <option value="0001753">
                                                                    BUTUAN PUER. CTR- ELISA OCHOA ME </option>
                                                                <option value="0000970">
                                                                    C.P. MEDICAL AND DENTAL CLINIC </option>
                                                                <option value="0001022">
                                                                    C.P. REYES HOSPITAL </option>
                                                                <option value="0000058">
                                                                    CABA MEDICARE AND COMMUNITY HOSPITAL </option>
                                                                <option value="0000627">
                                                                    CABADBARAN DISTRICT HOSPITAL </option>
                                                                <option value="0000861">
                                                                    CABATUAN FAMILY CLINIC </option>
                                                                <option value="0001200">
                                                                    CABREDO MEDICAL CLINIC </option>
                                                                <option value="0001687">
                                                                    CADULONG MEDICAL CLINIC </option>
                                                                <option value="0001489">
                                                                    CAGAYAN CAPITOL GEN. HOSP. FOUNDATION </option>
                                                                <option value="0001492">
                                                                    CAGAYAN DE ORO MATERNITY CHILDREN </option>
                                                                <option value="0001486">
                                                                    CAGAYAN DE ORO MEDICAL CENTER I </option>
                                                                <option value="0001487">
                                                                    CAGAYAN DE ORO MEDICAL CENTER II </option>
                                                                <option value="0001488">
                                                                    CAGAYAN DE ORO POLYMEDIC GEN. HOSP. </option>
                                                                <option value="0000087">
                                                                    CAGAYAN VALLEY REGIONAL HOSPITAL </option>
                                                                <option value="0000879">
                                                                    CAGAYAN VALLEY SANITARIUM AND HOSPITAL </option>
                                                                <option value="0000246">
                                                                    CAGRARAY DISTRICT HOSPITAL </option>
                                                                <option value="0001528">
                                                                    CAINGLET MEDICAL CLINIC </option>
                                                                <option value="0000014">
                                                                    Cainta Maternity and General Hospital </option>
                                                                <option value="0000651">
                                                                    CALALANG GENERAL HOSPITAL </option>
                                                                <option value="0000485">
                                                                    CALAMBA DISTRICT HOSPITAL </option>
                                                                <option value="0001023">
                                                                    CALAMBA DOCTOR'S HOSPITAL </option>
                                                                <option value="0001024">
                                                                    CALAMBA MEDICAL CENTER </option>
                                                                <option value="0001025">
                                                                    CALAPAN DOCTORS HOSPITAL </option>
                                                                <option value="0000169">
                                                                    CALATAGAN MEDICARE COMMUNITY HOSP. </option>
                                                                <option value="0000425">
                                                                    CALBAYOG DISTRICT HOSPITAL </option>
                                                                <option value="0001357">
                                                                    CALBAYOG SANITARIUM AND HOSPITAL </option>
                                                                <option value="0001547">
                                                                    CALINAN GENERAL HOSPITAL </option>
                                                                <option value="0000323">
                                                                    CALINOG DISTRICT HOSPITAL </option>
                                                                <option value="0000883">
                                                                    CALLANG PEDIATRIC CLINIC AND HOSPITAL </option>
                                                                <option value="0000652">
                                                                    CALLEJO MEDICAL CLINIC </option>
                                                                <option value="0000118">
                                                                    CALUMPIT DISTRICT HOSPITAL </option>
                                                                <option value="0001210">
                                                                    CAMARINES NORTE DOCTOR'S HOSPITAL </option>
                                                                <option value="0000256">
                                                                    CAMARINES NORTE PROVINCIAL HOSPITAL </option>
                                                                <option value="0000492">
                                                                    CAMIGUIN ISLAND HOSPITAL </option>
                                                                <option value="0000149">
                                                                    CAMILING DISTRICT HOSPITAL </option>
                                                                <option value="0001334">
                                                                    CAMOTES-LAOC MEDICAL CLINIC </option>
                                                                <option value="0000152">
                                                                    CAMP AQUINO ARMY STATION HOSPITAL </option>
                                                                <option value="0001777">
                                                                    CAMP ASTURIAS JOLO STATION HOSPITAL </option>
                                                                <option value="0000170">
                                                                    CAMP CAPINPIN STATION HOSPITAL </option>
                                                                <option value="0000494">
                                                                    CAMP EVANGELISTA STATION HOSPITAL </option>
                                                                <option value="0001771">
                                                                    CAMP GEN. EMILIO AGUINALDO STATION HOSPITAL </option>
                                                                <option value="0000367">
                                                                    CAMP LAPU-LAPU ARMY STATION HOSPITAL </option>
                                                                <option value="0000427">
                                                                    CAMP LUKBAN STATION HOSPITAL </option>
                                                                <option value="0000093">
                                                                    CAMP MELCHOR DELA CRUZ STATION HOSP. </option>
                                                                <option value="0000171">
                                                                    CAMP NAKAR STATION HOSPITAL </option>
                                                                <option value="0000474">
                                                                    CAMP NAVARRO GENERAL HOSPITAL </option>
                                                                <option value="0000311">
                                                                    CAMP PERALTA STATION HOSPITAL </option>
                                                                <option value="0001256">
                                                                    CAN MEDICAL CLINIC </option>
                                                                <option value="0000395">
                                                                    CAN-AVID COMMUNITY HOSPITAL </option>
                                                                <option value="0001626">
                                                                    CANDA MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000154">
                                                                    CANDELARIA DISTRICT HOSPITAL </option>
                                                                <option value="0001026">
                                                                    CANDELARIA GENERAL HOSPITAL </option>
                                                                <option value="0000172">
                                                                    CANDELARIA MUNICIPAL HOSPITAL </option>
                                                                <option value="0000786">
                                                                    CANDON COMMUNITY HOSPITAL </option>
                                                                <option value="0000783">
                                                                    CANDON DOCTORS HOSPITAL </option>
                                                                <option value="0000784">
                                                                    CANDON GENERAL HOSPITAL </option>
                                                                <option value="0000386">
                                                                    CANLAON CITY COMMUNITY HOSPITAL </option>
                                                                <option value="0000255">
                                                                    CAPALONGA MEDICARE COMMUNITY HOSP. </option>
                                                                <option value="0000653">
                                                                    CAPITOL MEDICAL CENTER </option>
                                                                <option value="0001783">
                                                                    CAPIZ DOCTORS HOSPITAL </option>
                                                                <option value="0001268">
                                                                    CAPIZ EMMANUEL HOSPITAL </option>
                                                                <option value="0001294">
                                                                    CAPT. RUPERTO LUZON MEMORIAL HOSP. </option>
                                                                <option value="0000419">
                                                                    CAPUL DISTRICT HOSPITAL </option>
                                                                <option value="0000259">
                                                                    CARAMOAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0000270">
                                                                    CARAMORAN MUNICIPAL HOSPITAL </option>
                                                                <option value="01010108000030">
                                                                    CARASI RHU </option>
                                                                <option value="0000654">
                                                                    CARDINAL SANTOS MEDICAL CENTER </option>
                                                                <option value="0001228">
                                                                    CARI¥O CLINIC </option>
                                                                <option value="0000409">
                                                                    CARIGARA DISTRICT HOSPITAL </option>
                                                                <option value="0000655">
                                                                    CARLOS CLINIC </option>
                                                                <option value="0001027">
                                                                    CARLOS MEDICAL AMD MATERNITY CLINIC </option>
                                                                <option value="0000358">
                                                                    CARLOS P. GARCIA MUNICIPAL HOSPITAL </option>
                                                                <option value="0000128">
                                                                    CARRANGLAN MEDICARE AND COMMUNITY HOSPITAL </option>
                                                                <option value="0000657">
                                                                    CASAUL GENERAL HOSPITAL OF LAGRO </option>
                                                                <option value="0000656">
                                                                    CASAUL GENERAL HOSPITAL, INC. </option>
                                                                <option value="0001723">
                                                                    CASIA CLINIC </option>
                                                                <option value="0000173">
                                                                    CASIGURAN DISTRICT HOSPITAL </option>
                                                                <option value="0001190">
                                                                    CASIMIRO GENERAL HOSPITAL </option>
                                                                <option value="0000658">
                                                                    CASTILLO INTERHOSPITAL SPECIALIST </option>
                                                                <option value="0000901">
                                                                    CASTRO MATERNITY AND MEDICAL CLINIC </option>
                                                                <option value="0000278">
                                                                    CATAINGAN DISTRICT HOSPITAL </option>
                                                                <option value="0001028">
                                                                    CATALAN MEDICAL HOSPITAL </option>
                                                                <option value="0001758">
                                                                    CATAMINA HOSPITAL </option>
                                                                <option value="0001393">
                                                                    CATANE MEDICAL CLINIC </option>
                                                                <option value="0001029">
                                                                    CATBAGAN GENERAL HOSPITAL </option>
                                                                <option value="0001358">
                                                                    CATBALOGAN MAT. HOUSE &amp; PUER. CENTER </option>
                                                                <option value="0000517">
                                                                    CATEEL MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000350">
                                                                    CATIGBIAN DISTRICT HOSPITAL </option>
                                                                <option value="0001554">
                                                                    CATOTAL MED. CLINIC &amp; CHILDREN'S HOSPI </option>
                                                                <option value="0000420">
                                                                    CATUBIG DISTRICT HOSPITAL </option>
                                                                <option value="0000092">
                                                                    CAUAYAN DISTRICT HOSPITAL </option>
                                                                <option value="0000336">
                                                                    CAUAYAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0001030">
                                                                    CAVITE MEDICAL CENTER </option>
                                                                <option value="0000174">
                                                                    CAVITE MUNICIPAL HOSPITAL </option>
                                                                <option value="0000279">
                                                                    CAWAYAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0000369">
                                                                    CEBU CITY MEDICAL CENTER </option>
                                                                <option value="0001313">
                                                                    CEBU DOCTORS` HOSPITAL </option>
                                                                <option value="0001324">
                                                                    CEBU FAMILY CLINIC </option>
                                                                <option value="0001320">
                                                                    CEBU PUERICULTURE CENTER &amp; MAT. HOUSE </option>
                                                                <option value="0001321">
                                                                    CEBU ST. VINCENT GENERAL HOSPITAL </option>
                                                                <option value="0001322">
                                                                    CEBU TB PAVILION </option>
                                                                <option value="0001314">
                                                                    CEBU VELEZ GENERAL HOSPITAL </option>
                                                                <option value="0001031">
                                                                    CELINO-ESTACIO MEDICAL CENTER </option>
                                                                <option value="0001449">
                                                                    CELLONA MEDICAL HOSPITAL </option>
                                                                <option value="0001765">
                                                                    CENTER FOR PSYCHOSOCIAL HEALTH CARE </option>
                                                                <option value="0001337">
                                                                    CENTRAL AZUCARERA DE BAIS HOSPITAL </option>
                                                                <option value="0001280">
                                                                    CENTRAL AZUCARERA DELA CARLOTA HOSP. </option>
                                                                <option value="0001032">
                                                                    CENTRAL AZUCARERA DON PEDRO HOSPITAL </option>
                                                                <option value="0000049">
                                                                    CENTRAL ILOCOS SUR DISTRICT HOSPITAL </option>
                                                                <option value="0000996">
                                                                    CENTRAL LUZON DOCTORS` HOSPITAL </option>
                                                                <option value="0000132">
                                                                    CENTRAL LUZON STATE UNIVERSITY HOSP. </option>
                                                                <option value="0000482">
                                                                    CENTRAL MINDANAO UNIVERSITY HOSPITAL </option>
                                                                <option value="0001611">
                                                                    CEREVILLE MEDICAL CLINIC </option>
                                                                <option value="0001033">
                                                                    CHILDREN'S MEDICAL CLINIC </option>
                                                                <option value="0000659">
                                                                    CHILDREN`S MED. CTR. PHILS. AND GEN. HOSP., INC. </option>
                                                                <option value="0000036">
                                                                    CHINESE GENERAL HOSPITAL AND MEDICAL CENTER </option>
                                                                <option value="0001315">
                                                                    CHONG HUA HOSPITAL </option>
                                                                <option value="0001801">
                                                                    CHRIST THE KING MATERNITY AND LYING-IN HOSP. </option>
                                                                <option value="0001034">
                                                                    CHRISTIAN GENERAL HOSPITAL </option>
                                                                <option value="0000625">
                                                                    CITY GENERAL HOSPITAL AND MEDICAL CENTER </option>
                                                                <option value="0001456">
                                                                    CLAIRE MEDICAL CLINIC </option>
                                                                <option value="0000280">
                                                                    CLAVERIA DISTRICT HOSPITAL </option>
                                                                <option value="0000661">
                                                                    CLINIC OF THE HOLY SPIRIT, INC. </option>
                                                                <option value="0000662">
                                                                    CLINICA ARELLANO </option>
                                                                <option value="0000782">
                                                                    CLINICA AZCUETA </option>
                                                                <option value="0001689">
                                                                    CLINICA CATOTAL </option>
                                                                <option value="0001778">
                                                                    CLINICA CENTEÑO </option>
                                                                <option value="0001363">
                                                                    CLINICA CORROMPIDO </option>
                                                                <option value="0001390">
                                                                    CLINICA CRUZ </option>
                                                                <option value="0000856">
                                                                    CLINICA DE LEON </option>
                                                                <option value="0001227">
                                                                    CLINICA ELGAR </option>
                                                                <option value="0000663">
                                                                    CLINICA ESTRERA </option>
                                                                <option value="0001551">
                                                                    CLINICA FELICIANO I </option>
                                                                <option value="0001548">
                                                                    CLINICA FELICIANO II </option>
                                                                <option value="0001225">
                                                                    CLINICA FIGURACION </option>
                                                                <option value="0001351">
                                                                    CLINICA GATCHALIAN AND HOSPITAL </option>
                                                                <option value="0000960">
                                                                    CLINICA HENSON </option>
                                                                <option value="0001549">
                                                                    CLINICA ISAGUIRRE </option>
                                                                <option value="0001756">
                                                                    CLINICA JESUS NAZARENO </option>
                                                                <option value="0001458">
                                                                    CLINICA OZARAGA </option>
                                                                <option value="0001599">
                                                                    CLINICA PINEDA </option>
                                                                <option value="0001524">
                                                                    CLINICA RIVERA </option>
                                                                <option value="0001595">
                                                                    CLINICA RUDINAS AND HOSPITAL </option>
                                                                <option value="0000850">
                                                                    CLINICA SALVACION </option>
                                                                <option value="0000778">
                                                                    CLINICA SAN PEDRO </option>
                                                                <option value="0001600">
                                                                    CLINICA STA. TERESA </option>
                                                                <option value="0001035">
                                                                    CLINICA STA. TERESITA </option>
                                                                <option value="0001602">
                                                                    CLINICA STO. ROSARIO </option>
                                                                <option value="0001618">
                                                                    CLINICA SUELA </option>
                                                                <option value="0001567">
                                                                    CLINICA TOLENTINO </option>
                                                                <option value="0001036">
                                                                    CLINICA TOLENTINO </option>
                                                                <option value="0000800">
                                                                    CLINICA VILLANUEVA </option>
                                                                <option value="0000664">
                                                                    CLINICAL TERENCIO AND HOSPITAL </option>
                                                                <option value="0000175">
                                                                    CM RECTO MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0000582">
                                                                    COL.SALVADOR T. VILLA MEMORIAL HOSPITAL </option>
                                                                <option value="0001580">
                                                                    COMMUNITY HEALTH &amp; DEVELOPMENT COOP. H </option>
                                                                <option value="0001037">
                                                                    COMMUNITY HOSP. OF SAN PABLO CITY, INC </option>
                                                                <option value="0000896">
                                                                    COMMUNITY MEDICAL CLINIC </option>
                                                                <option value="0001497">
                                                                    COMPOSTELA VALLEY HOSPITAL </option>
                                                                <option value="0000150">
                                                                    CONCEPCION DISTRICT HOSPITAL </option>
                                                                <option value="0000354">
                                                                    CONG. NATALIO P. CASTILLO SR. MEM. HOSP. </option>
                                                                <option value="0000349">
                                                                    CONG. SIMEON G. TORIBIO MEMORIAL HOSP. </option>
                                                                <option value="0001364">
                                                                    CONSUELO TAN MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0001038">
                                                                    CONTRERAS MEDICAL CLINIC </option>
                                                                <option value="0000176">
                                                                    CORON DISTRICT HOSPITAL </option>
                                                                <option value="0000790">
                                                                    CORPUZ CLINIC AND HOSPITAL </option>
                                                                <option value="0001504">
                                                                    CORPUZ MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0001718">
                                                                    COTABATO MEDICAL SPECIALISTS HOSPITAL </option>
                                                                <option value="0001791">
                                                                    COTABATO PROVINCIAL HOSPITAL </option>
                                                                <option value="0001789">
                                                                    COTABATO REGIONAL AND MEDICAL CENTER </option>
                                                                <option value="0000994">
                                                                    COUNTY MEDICAL CLINIC &amp; TRAUMA CENTER </option>
                                                                <option value="0001039">
                                                                    CRISOSTOMO LYING-IN HOSPITAL </option>
                                                                <option value="0001563">
                                                                    CRISTO REY MEDICAL CLINIC </option>
                                                                <option value="0000870">
                                                                    CRUZ MEDICAL HOSPITAL </option>
                                                                <option value="0000665">
                                                                    CRUZ-DALIDA MATERNITY HOSPITAL </option>
                                                                <option value="0000666">
                                                                    CRUZ-RABE MATERNITY &amp; GENERAL HOSPITAL </option>
                                                                <option value="0000177">
                                                                    CUENCA MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000820">
                                                                    CUISON FAMILY CLINIC </option>
                                                                <option value="0000305">
                                                                    CULASI DISTRICT HOSPITAL </option>
                                                                <option value="0000178">
                                                                    CULION SANITARIUM </option>
                                                                <option value="0000478">
                                                                    CURUAN MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000967">
                                                                    D.H. POLINTAN MEDICAL CLINIC </option>
                                                                <option value="0000667">
                                                                    D.T. PROTACIO HOSPITAL </option>
                                                                <option value="0000370">
                                                                    DAANBANTAYAN DISTRICT HOSPITAL </option>
                                                                <option value="0000352">
                                                                    DAGOHOY MUNICIPAL HOSPITAL </option>
                                                                <option value="0000814">
                                                                    DAGUPAN DOCTORS-VILLAFLOR MEM. HOSPITA </option>
                                                                <option value="0000371">
                                                                    DANAO DISTRICT HOSPITAL </option>
                                                                <option value="0001399">
                                                                    DANAO-SALE MEDICAL CLINIC </option>
                                                                <option value="0001849">
                                                                    DASOL MUNICIPAL HOSPITAL </option>
                                                                <option value="0001774">
                                                                    DATU HALUM SAKILAN MEMORIAL HOSPITAL </option>
                                                                <option value="0000508">
                                                                    DAVAO DEL SUR PROVINCIAL HOSPITAL </option>
                                                                <option value="0001574">
                                                                    DAVAO DOCTORS' HOSPITAL </option>
                                                                <option value="0000509">
                                                                    DAVAO MEDICAL CENTER </option>
                                                                <option value="0000521">
                                                                    DAVAO ORIENTAL PROVINCIAL HOSPITAL </option>
                                                                <option value="0000502">
                                                                    DAVAO REGIONAL HOSPITAL </option>
                                                                <option value="0000860">
                                                                    DAYRIT HOSPITAL </option>
                                                                <option value="0000179">
                                                                    DBB MUNICIPAL HOSPITAL </option>
                                                                <option value="0001249">
                                                                    DE CASTRO HOSP. &amp; FAMILY PLANNING CLIN </option>
                                                                <option value="0000902">
                                                                    DE CASTRO MEDICAL CLINIC </option>
                                                                <option value="0001525">
                                                                    DE GUZMAN CLINIC AND HOSPITAL </option>
                                                                <option value="0000899">
                                                                    DE JESUS GENERAL HOSPITAL </option>
                                                                <option value="0001040">
                                                                    DE LA SALLE UNIV.-DR. RODOLFO POBLETE </option>
                                                                <option value="0001041">
                                                                    DE LA SALLE UNIVERSITY MEDICAL CENTER </option>
                                                                <option value="0000668">
                                                                    DE LOS SANTOS MEDICAL CENTER </option>
                                                                <option value="0000669">
                                                                    DE OCAMPO MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0001042">
                                                                    DE SILVA'S MEDICAL AND LYING-IN HOSPIT </option>
                                                                <option value="0000880">
                                                                    DE VERA'S PEDIATRIC AND REHABILITATION </option>
                                                                <option value="0001335">
                                                                    DEIPARINE MEDICAL CLINIC </option>
                                                                <option value="0001043">
                                                                    DEL CARMEN MEDICAL CLINIC </option>
                                                                <option value="0001491">
                                                                    DEL MONTE BUGO CLINIC </option>
                                                                <option value="0001044">
                                                                    DEL ROSARIO HOSPITAL </option>
                                                                <option value="0001188">
                                                                    DEL VALLE CLINIC </option>
                                                                <option value="0001543">
                                                                    DELA CERNA MEDICAL CLINIC </option>
                                                                <option value="0001045">
                                                                    DELA CRUZ MATERNITY HOSPITAL </option>
                                                                <option value="0001679">
                                                                    DELA CRUZ MEDICAL CLINIC </option>
                                                                <option value="0001579">
                                                                    DELA ROSA PSYCHIATRIC CLINIC &amp; REHABIL </option>
                                                                <option value="0001627">
                                                                    DIAGAN CLINIC AND HOSPITAL </option>
                                                                <option value="0000109">
                                                                    DIFFUN DISTRICT HOSPITAL </option>
                                                                <option value="0001464">
                                                                    DIGNUM FOUNDATION HOSPITAL </option>
                                                                <option value="0001585">
                                                                    DIGOS DOCTORS HOSPITAL, INC. </option>
                                                                <option value="0001597">
                                                                    DIMAANDAL MEDICAL CLINIC </option>
                                                                <option value="0000042">
                                                                    DINGRAS DISTRICT HOSPITAL </option>
                                                                <option value="0001616">
                                                                    DIONES MEDICAL CLINIC </option>
                                                                <option value="0001416">
                                                                    DIPLAHAN MEDICAL CLINIC </option>
                                                                <option value="0001374">
                                                                    DIPOLOG MEDICAL CENTER, INC. </option>
                                                                <option value="0001046">
                                                                    DIVINE CARE CHILDREN'S HOSPITAL </option>
                                                                <option value="0001047">
                                                                    DIVINE GRACE HOSPITAL &amp; MATERNITY CENT </option>
                                                                <option value="0001048">
                                                                    DIVINE LOVE HOSPITAL </option>
                                                                <option value="0001384">
                                                                    DIVINE MERCY GENERAL HOSPITAL </option>
                                                                <option value="0001049">
                                                                    DIVINE MERCY HOSPITAL </option>
                                                                <option value="0001009">
                                                                    DIVINE SPIRIT HOSPITAL </option>
                                                                <option value="0001354">
                                                                    DIVINE WORD UNIVERSITY HOSPITAL </option>
                                                                <option value="0001671">
                                                                    DIZON MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000055">
                                                                    DO¥A GREGORIA MEMORIAL HOSPITAL </option>
                                                                <option value="0000045">
                                                                    DO¥A JOSEFA E. MARCOS MEMORIAL HOSP. </option>
                                                                <option value="0000491">
                                                                    DO¥A MARIA D. TAN MEMORIAL HOSPITAL </option>
                                                                <option value="0000595">
                                                                    DO¥A MARTA LYING-IN HOSPITAL </option>
                                                                <option value="0000183">
                                                                    DO¥A MARTA MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0001493">
                                                                    DOCTOR SABAL'S HOSPITAL, INC. </option>
                                                                <option value="0001050">
                                                                    DOCTOR'S HOSPITAL </option>
                                                                <option value="0000597">
                                                                    DOLORES MEDICARE AND COMMUNITY HOSP. </option>
                                                                <option value="0001342">
                                                                    DOMINGO CASANO HOSPITAL </option>
                                                                <option value="0000074">
                                                                    DON AMADEO J. PEREZ SR. MEM GEN. HOSP. </option>
                                                                <option value="0001420">
                                                                    DON CARLOS COMM. &amp; MAT. HOSPITAL </option>
                                                                <option value="0001826">
                                                                    DON JOSE S. MONFORT MED.CTR.EXT. HOSP. </option>
                                                                <option value="0000320">
                                                                    DON JOSE S. MONFORT MEMORIAL HOSPITAL </option>
                                                                <option value="0000180">
                                                                    DON JUAN MAYUGA MEMORIAL HOSPITAL </option>
                                                                <option value="0000298">
                                                                    DON LEOVIGILDO DIAPO MEMORIAL HOSPITAL </option>
                                                                <option value="0000181">
                                                                    DON MANUEL LOPEZ MEM. DISTRICT HOSPITAL </option>
                                                                <option value="0000511">
                                                                    DON MARCELINO MUNICIPAL HOSPITAL </option>
                                                                <option value="0000182">
                                                                    DON MODESTO FORMILLEZA SR. MEMORIAL HOSPITAL </option>
                                                                <option value="0000341">
                                                                    DON SALVADOR BENDICTO MEMORIAL HOSP. </option>
                                                                <option value="0000261">
                                                                    DON VICENTE URSUA MEMORIAL HOSPITAL </option>
                                                                <option value="0000286">
                                                                    DONSOL DISTRICT HOSPITAL </option>
                                                                <option value="0000184">
                                                                    DR, OLIVIA SALAMANCA MEMORIAL HOSPITAL </option>
                                                                <option value="0001426">
                                                                    DR. A.A. UY MED. CLINIC AND HOSPITAL </option>
                                                                <option value="0001442">
                                                                    DR. ALBERTO M. PASTOR HOSPITAL </option>
                                                                <option value="0001199">
                                                                    DR. AMANDO D. COPE MEM. HOSPITAL </option>
                                                                <option value="0001051">
                                                                    DR. ANILO GENERAL HOSPITAL </option>
                                                                <option value="0000772">
                                                                    DR. ANTONIO A. RANADA CLIN. AND LYING- </option>
                                                                <option value="0001460">
                                                                    DR. B.D. YAP CLINIC </option>
                                                                <option value="0001175">
                                                                    DR. CARLOS R. BAYLON FOUNDATION HOSP. </option>
                                                                <option value="0000137">
                                                                    DR. EMIGDIO G. CRUZ SR. MEMORIAL HOSP. </option>
                                                                <option value="0001183">
                                                                    DR. ESTEBAN V. ANTE MEMORIAL HOSP. </option>
                                                                <option value="0000865">
                                                                    DR. ESTER R. GARCIA GENERAL HOSPITAL </option>
                                                                <option value="0000849">
                                                                    DR. ESTRELLA FERNANDEZ CLINIC </option>
                                                                <option value="0001372">
                                                                    DR. F.P. VESAGAS CLINIC </option>
                                                                <option value="0001052">
                                                                    DR. FRANCISCO FALLER MEMORIAL HOSP. </option>
                                                                <option value="0000422">
                                                                    DR. G.B. TAN MEMORIAL HOSPITAL </option>
                                                                <option value="0001279">
                                                                    DR. GUMERSINDO GARCIA SR. MEM. HOSP. </option>
                                                                <option value="0001330">
                                                                    DR. IGNACIO M. CORTEZ GENERAL HOSP. </option>
                                                                <option value="0001327">
                                                                    DR. ILDEFONSO ALCANTARA MEM. HOSPITAL </option>
                                                                <option value="0001195">
                                                                    DR. J.A. ZAPANTA MEMORIAL HOSPITAL </option>
                                                                <option value="0000185">
                                                                    DR. J.P. RIZAL MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0000670">
                                                                    DR. JESUS C. DELGADO MEMORIAL HOSPITAL </option>
                                                                <option value="0001233">
                                                                    DR. JOHNNEL R. ZAPANTA GENERAL HOSPITA </option>
                                                                <option value="0000343">
                                                                    DR. JOSE C. LOCSIN MEM. PROVINCIAL HOSP. </option>
                                                                <option value="0000554">
                                                                    DR. JOSE FABELLA MEMORIAL HOSPITAL </option>
                                                                <option value="0001371">
                                                                    DR. JOSE MA. TORRES MEDICAL CENTER </option>
                                                                <option value="0000583">
                                                                    DR. JOSE N. RODRIGUEZ MEMORIAL HOSP. </option>
                                                                <option value="0001053">
                                                                    DR. JOSE P. RIZAL NATIONAL MED. RESEAR </option>
                                                                <option value="0000012">
                                                                    Dr. Jose Pacunayen Hospital </option>
                                                                <option value="0001811">
                                                                    DR. JOSE R. REYES MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0001498">
                                                                    DR. JULIO M. LAYUG JR. MED. CLINIC &amp; HOSPITAL </option>
                                                                <option value="0001055">
                                                                    DR. KISON'S CLINIC </option>
                                                                <option value="0000869">
                                                                    DR. LEONIDEZ P. MELENDREZ JR. HOSPITAL </option>
                                                                <option value="0001311">
                                                                    DR. LIM'S CLINIC AND HOSPITAL </option>
                                                                <option value="0001191">
                                                                    DR. MANUEL A. REBUENO MEM. HOSP. </option>
                                                                <option value="0001056">
                                                                    DR. MARIO D. BEJASA GENERAL HOSPITAL </option>
                                                                <option value="0001767">
                                                                    DR. MONTANO G. RAMOS HOSPITAL </option>
                                                                <option value="0001232">
                                                                    DR. NILO O. ROA MEM. FOUNDATION HOSPIT </option>
                                                                <option value="0001273">
                                                                    DR. PABLO O TORRE,SR. MEM. HOSPITAL </option>
                                                                <option value="0000125">
                                                                    DR. PAULINO J. GARCIA MEM. RES. AND MED. CTR. </option>
                                                                <option value="0001722">
                                                                    DR. PETRONILO SEARES SR. MEM. HOSPITAL </option>
                                                                <option value="0000296">
                                                                    DR. RAFAEL S. TUMBOKON MEMORIAL HOSP. </option>
                                                                <option value="0000329">
                                                                    DR. RICARDO LABRIDO DISTRICT HOSPITAL </option>
                                                                <option value="0001216">
                                                                    DR. ROBOSA HOSPITAL </option>
                                                                <option value="0001427">
                                                                    DR. S.J. CUERQUIS MEDICAL CLINIC AND H </option>
                                                                <option value="0000671">
                                                                    DR. SABILI HEALTH SERVICES </option>
                                                                <option value="0001412">
                                                                    DR. SALVADOR A. CABATO MEM. HOSP. </option>
                                                                <option value="0001186">
                                                                    DR. SOFRONIO B. GARCIA MEMORIAL HOSPIT </option>
                                                                <option value="0001643">
                                                                    DR. UY HOSPITAL </option>
                                                                <option value="0001057">
                                                                    DR. V.C. MARTIN HOSPITAL </option>
                                                                <option value="0000846">
                                                                    DR. VERANO CASTILLO CLINIC </option>
                                                                <option value="0001822">
                                                                    DR.VICTOR R. POTENCIANO MEDICAL CENTER </option>
                                                                <option value="0001479">
                                                                    DRAZEN MEDICAL CLINIC </option>
                                                                <option value="0001295">
                                                                    DUERO COMMUNITY HOSPITAL </option>
                                                                <option value="0000324">
                                                                    DUMANGAS DISTRICT HOSPITAL </option>
                                                                <option value="0000310">
                                                                    DUMARAO MEDICARE HOSPITAL </option>
                                                                <option value="0001312">
                                                                    DUMDUM MEDICAL CLINIC </option>
                                                                <option value="0001418">
                                                                    DUMINGAG COMMUNITY HOSPITAL </option>
                                                                <option value="0000872">
                                                                    DUMLAO'S HOSPITAL </option>
                                                                <option value="0000105">
                                                                    DUPAX DISTRICT HOSPITAL </option>
                                                                <option value="0000949">
                                                                    DUQUE'S CLINIC </option>
                                                                <option value="0001328">
                                                                    DURANO FOUNDATION MEDICAL CENTER </option>
                                                                <option value="0001819">
                                                                    E &amp; R HOSPITAL AND PHARMACY </option>
                                                                <option value="0001646">
                                                                    E &amp; R PHARMACY AND HOSPITAL </option>
                                                                <option value="0001281">
                                                                    E.R. LUMBA CLINIC </option>
                                                                <option value="0000568">
                                                                    EAST AVENUE MEDICAL CENTER </option>
                                                                <option value="0000275">
                                                                    EASTERN BICOL MEDICAL CENTER </option>
                                                                <option value="0000833">
                                                                    EASTERN MEDICAL CLINIC </option>
                                                                <option value="0000072">
                                                                    EASTERN PANGASINAN DISTRICT HOSPITAL </option>
                                                                <option value="0000415">
                                                                    EASTERN VISAYAS REGIONAL MED. CENTER </option>
                                                                <option value="0000944">
                                                                    ED AND TITA CRUZ MAT. &amp; SURGICAL HOSPI </option>
                                                                <option value="0000126">
                                                                    EDUARDO L. JOSON MEMORIAL HOSPITAL </option>
                                                                <option value="0000476">
                                                                    EDWIN ANDREW'S AIRBASE HOSPITAL </option>
                                                                <option value="0001768">
                                                                    ELIO-TORDESILLAS GENERAL HOSPITAL </option>
                                                                <option value="0000101">
                                                                    ELVIN MASIGAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0001058">
                                                                    EMIL-JOANA GENERAL HOSPITAL </option>
                                                                <option value="0000941">
                                                                    EMMANUEL HOSPITAL </option>
                                                                <option value="0001239">
                                                                    ENCARNACION CLINIC </option>
                                                                <option value="0001305">
                                                                    ENGLEWOOD HOSPITAL </option>
                                                                <option value="0001430">
                                                                    ERMAVI CLINIC </option>
                                                                <option value="0001541">
                                                                    ERUM MEDICAL CLINIC </option>
                                                                <option value="0000141">
                                                                    ESCOLASTICA ROMERO DISTRICT HOSPITAL </option>
                                                                <option value="0001530">
                                                                    ESPIRITU MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0001604">
                                                                    ESTACION MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0001193">
                                                                    ESTANISLAO CLINIC </option>
                                                                <option value="0001181">
                                                                    ESTEVEZ MEMORIAL HOSPITAL, INC. </option>
                                                                <option value="0000023">
                                                                    Estrella's Home Care </option>
                                                                <option value="0000672">
                                                                    ESTRELLAS HOME CARE </option>
                                                                <option value="0001407">
                                                                    EUSER MEDICAL CLINIC </option>
                                                                <option value="0000926">
                                                                    EVANGELISTA HOSPITAL </option>
                                                                <option value="0001060">
                                                                    EVANGELISTA MEDICAL SPECIALTY HOSPITAL </option>
                                                                <option value="0000376">
                                                                    EVERSELY CHILD SANITARIUM </option>
                                                                <option value="0000673">
                                                                    F &amp; P HERNANDEZ MATERNITY AND LYING-IN </option>
                                                                <option value="0000985">
                                                                    F-C COUNTY HOSPITAL, INC. </option>
                                                                <option value="0000029">
                                                                    F. Y. Manalo Mem. Puer, Maternity and FP Center </option>
                                                                <option value="0000838">
                                                                    F.B. ASUNCION HOSPITAL </option>
                                                                <option value="0000938">
                                                                    F.M. CRUZ ORTHOPEDIC &amp; GENERAL HOSPITA </option>
                                                                <option value="0000675">
                                                                    F.Y. MANALO MEMORIAL FOUNDATION, INC. </option>
                                                                <option value="0000024">
                                                                    Fairview General Hospital </option>
                                                                <option value="0000677">
                                                                    FAIRVIEW POLYMEDIC HOSPITAL </option>
                                                                <option value="0001469">
                                                                    FAITH HOSPITAL </option>
                                                                <option value="0001061">
                                                                    FAMILY CARE HOSPITAL </option>
                                                                <option value="0001471">
                                                                    FAMILY GENERAL HOSPITAL </option>
                                                                <option value="0001650">
                                                                    FAMILY MEDICAL CLINIC </option>
                                                                <option value="0001667">
                                                                    FAMILY MEDICAL CLINIC </option>
                                                                <option value="0001603">
                                                                    FANLO MEDICAL CLINIC </option>
                                                                <option value="0000678">
                                                                    FATIMA MEDICAL CENTER, INC. </option>
                                                                <option value="0000328">
                                                                    FEDERICO ROMAN TIRADOR, SR. MEMORIAL DISTRICT HOSP </option>
                                                                <option value="0000186">
                                                                    FERNANDO AIRBASE HOSPITAL </option>
                                                                <option value="0000679">
                                                                    FEU-NRMF HOSPITAL </option>
                                                                <option value="0000793">
                                                                    FIGUERRES CLINIC AND HOSPITAL </option>
                                                                <option value="0001289">
                                                                    FIRST FARMERS' HOSPITAL </option>
                                                                <option value="0001835">
                                                                    FIRST FILIPINO SAINT HOSPITAL (SAN LORENZO RUIZ) </option>
                                                                <option value="0000622">
                                                                    FLORA DISTRICT HOSPITAL </option>
                                                                <option value="0000881">
                                                                    FLORES CLINIC AND HOSPITAL </option>
                                                                <option value="0001511">
                                                                    FLORES MEDICAL CLINIC </option>
                                                                <option value="0001235">
                                                                    FORMALEJO CLINIC </option>
                                                                <option value="0000601">
                                                                    FORT DEL PILAR STATION HOSPITAL </option>
                                                                <option value="0000187">
                                                                    FORT SAN FELIPE NAVAL STATION HOSPITAL </option>
                                                                <option value="0001262">
                                                                    FOUNDATION AMBERG SORSOGON(FAS) HOSPIT </option>
                                                                <option value="0000842">
                                                                    FRANCISCO MATERNITY &amp; MEDICAL CLINIC </option>
                                                                <option value="0000680">
                                                                    FRANCO CLINIC </option>
                                                                <option value="0001398">
                                                                    G'MAR MEMORIAL HOSPITAL </option>
                                                                <option value="0000129">
                                                                    GABALDON MEDICARE AND COMMUNITY HOSPITAL </option>
                                                                <option value="0000054">
                                                                    GABRIELA SILANG GENERAL HOSPITAL </option>
                                                                <option value="0000681">
                                                                    GALANG MEDICAL CENTER, INC. </option>
                                                                <option value="0001499">
                                                                    GALENZOGA MEDICAL CLINIC </option>
                                                                <option value="0000421">
                                                                    GAMAY DISTRICT HOSPITAL </option>
                                                                <option value="0000428">
                                                                    GANDARA DISTRICT HOSPITAL </option>
                                                                <option value="0000840">
                                                                    GANDIA CHILDREN'S HOSPITAL </option>
                                                                <option value="0000769">
                                                                    GAOAT GENERAL HOSPITAL </option>
                                                                <option value="0000130">
                                                                    GAPAN DISTRICT HOSPITAL </option>
                                                                <option value="0000260">
                                                                    GARCHITORENA MEDICARE COMMUNITY HOSP. </option>
                                                                <option value="0000682">
                                                                    GARCIA GENERAL HOSPITAL </option>
                                                                <option value="0001062">
                                                                    GARCIA GENERAL HOSPITAL </option>
                                                                <option value="0000357">
                                                                    GARCIA MEMORIAL PROVINICAL HOSPITAL </option>
                                                                <option value="0001773">
                                                                    GARDEN VILLAGE COUNTY HOSPITAL </option>
                                                                <option value="0001179">
                                                                    GATA-GARCIA GENERAL HOSPITAL </option>
                                                                <option value="0001652">
                                                                    GATCHALIAN MEDICAL CLINIC </option>
                                                                <option value="0001417">
                                                                    GEMARINO MEDICAL CLINIC </option>
                                                                <option value="0000188">
                                                                    GEN. J. CAILLES MEMORIAL DISTRICT HOSP. </option>
                                                                <option value="0000396">
                                                                    GEN. MACARTHUR COMMUNITY HOSPITAL </option>
                                                                <option value="0000683">
                                                                    GEN. MIGUEL MALVAR MED. FOUNDATION HOS </option>
                                                                <option value="0001623">
                                                                    GEN. SANTOS DOCTOR'S HOSPITAL </option>
                                                                <option value="0000131">
                                                                    GEN. TINIO MEDICARE AND COMMUNITY HOSP. </option>
                                                                <option value="0001063">
                                                                    GEN. TRIAS MAT. &amp; PEDIATRIC HOSPITAL </option>
                                                                <option value="0000189">
                                                                    GEN. TRIAS MEDICARE HOSPITAL </option>
                                                                <option value="0000976">
                                                                    GENERALAO CLINIC </option>
                                                                <option value="0000777">
                                                                    GERTES CLINIC AND HOSPITAL </option>
                                                                <option value="0000271">
                                                                    GIGMOTO DISTRICT HOSPITAL </option>
                                                                <option value="0000864">
                                                                    GINES MAT. AND SURGICAL HOSPITAL </option>
                                                                <option value="0000497">
                                                                    GINGOOG DISTRICT HOSPITAL </option>
                                                                <option value="0001484">
                                                                    GINGOOG SANITARIUM HOSPITAL </option>
                                                                <option value="0000526">
                                                                    GLAN MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000527">
                                                                    GLAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0000952">
                                                                    GLORIA LACSON GENERAL HOSPITAL </option>
                                                                <option value="0000190">
                                                                    GMA MEDICARE HOSPITAL </option>
                                                                <option value="0001064">
                                                                    GOLDEN GATE GENERAL HOSPITAL </option>
                                                                <option value="0000852">
                                                                    GONZAGA COMMUNITY CLINIC </option>
                                                                <option value="0001728">
                                                                    GONZALES FAMILY CLINIC </option>
                                                                <option value="0000953">
                                                                    GONZALES GENERAL HOSPITAL, INC. </option>
                                                                <option value="0001589">
                                                                    GONZALES MARANAN CLINIC &amp; HOSPITAL </option>
                                                                <option value="0001065">
                                                                    GONZALES MEDICAL &amp; CHILDREN'S HOSPITAL </option>
                                                                <option value="0001206">
                                                                    GONZALES MEDICAL CLINIC </option>
                                                                <option value="0001612">
                                                                    GONZALES-ADVINCULA MEDICAL CLINIC </option>
                                                                <option value="0001743">
                                                                    GOOD NEWS CLINIC </option>
                                                                <option value="0001066">
                                                                    GOOD SAMARITAN HOSPITAL </option>
                                                                <option value="0001067">
                                                                    GOOD SHEPHERD HOSPITAL </option>
                                                                <option value="0000356">
                                                                    GOV. CELESTINO GALLARES MEMORIAL HOSP. </option>
                                                                <option value="0000518">
                                                                    GOV. GENEROSO MUNICIPAL HOSPITAL </option>
                                                                <option value="0000307">
                                                                    GOV. LEANDRO FULLON DISTRICT HOSPITAL </option>
                                                                <option value="0000306">
                                                                    GOV. MAMERTO PORTILLO DISTRICT HOSPITAL </option>
                                                                <option value="0000043">
                                                                    GOV. ROQUE ABLAN SR. MEMORIAL HOSP. </option>
                                                                <option value="0000066">
                                                                    GOV. TEOFILO SISON MEM. PROVINCIAL HOSP. </option>
                                                                <option value="0000338">
                                                                    GOV. VALERIANO GATUSLAO MEM. HOSPITAL </option>
                                                                <option value="0001760">
                                                                    GRACE CHRISTIAN CLINIC AND HOSPITAL </option>
                                                                <option value="0000895">
                                                                    GRACE MEM. MAT. AND SURGICAL CLINIC </option>
                                                                <option value="0001068">
                                                                    GRACE MISSION HOSPITAL </option>
                                                                <option value="0001069">
                                                                    GREG HOSPITAL </option>
                                                                <option value="0000117">
                                                                    GREGORIO DEL PILAR DISTRICT HOSPITAL </option>
                                                                <option value="0000513">
                                                                    GREGORIO MATAS DISTRICT HOSPITAL </option>
                                                                <option value="0001564">
                                                                    GUADALOPE MEDICAL CLINIC </option>
                                                                <option value="0000287">
                                                                    GUBAT DISTRICT HOSPITAL </option>
                                                                <option value="0000897">
                                                                    GUBATAN MEDICAL CLINIC </option>
                                                                <option value="0001594">
                                                                    GUIHING COMMUNITY HOSPITAL </option>
                                                                <option value="0000388">
                                                                    GUIHULNGAN DISTRICT HOSPITAL </option>
                                                                <option value="0000346">
                                                                    GUIMARAS DISTRICT HOSPITAL </option>
                                                                <option value="0001467">
                                                                    GUIRNELA CLINIC </option>
                                                                <option value="0000191">
                                                                    GUMACA DISTRICT HOSPITAL </option>
                                                                <option value="0001257">
                                                                    GUYSAYKO GENERAL HOSPITAL </option>
                                                                <option value="0001070">
                                                                    H.M. CORACHEA GENERAL HOSPITAL </option>
                                                                <option value="0001318">
                                                                    H.W. MILLER SANITARIUM AND HOSPITAL </option>
                                                                <option value="0001287">
                                                                    HAWAIIAN PHIL. CO. INFIRMARY </option>
                                                                <option value="0001538">
                                                                    HECHANOVA MEDICAL CLINIC </option>
                                                                <option value="0001632">
                                                                    HERAMIL'S MATERNITY AND CHILDREN'S HOS </option>
                                                                <option value="0000684">
                                                                    HERNANDEZ GENERAL HOSPITAL </option>
                                                                <option value="0001251">
                                                                    HEYROSA CLINIC </option>
                                                                <option value="0001001">
                                                                    HIDALGO HOSPITAL </option>
                                                                <option value="0001444">
                                                                    HILARIO MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000685">
                                                                    HILLSIDE GENERAL HOSPITAL </option>
                                                                <option value="0000410">
                                                                    HILONGOS DISTRICT HOSPITAL </option>
                                                                <option value="0001241">
                                                                    HINGCA-HAO MEMORIAL CLINIC </option>
                                                                <option value="0001278">
                                                                    HINIGARAN MEDICAL CLINIC </option>
                                                                <option value="0001277">
                                                                    HINOLAN CLINIC </option>
                                                                <option value="0000431">
                                                                    HINUNANGAN COMMUNITY HOSPITAL </option>
                                                                <option value="0001360">
                                                                    HINUNDAYAN COMMUNITY HOSPITAL, INC. </option>
                                                                <option value="0001404">
                                                                    HOFILE¥A CLINIC </option>
                                                                <option value="0001339">
                                                                    HOLY CHILD HOSPITAL </option>
                                                                <option value="0001223">
                                                                    HOLY CROSS HOSPITAL FOUNDATION, INC. </option>
                                                                <option value="0001071">
                                                                    HOLY FAMILY CLINIC </option>
                                                                <option value="0000959">
                                                                    HOLY FAMILY CLINIC </option>
                                                                <option value="0001381">
                                                                    HOLY FAMILY CLINIC </option>
                                                                <option value="0001468">
                                                                    HOLY FAMILY CLINIC </option>
                                                                <option value="0000894">
                                                                    HOLY FAMILY HOSPITAL </option>
                                                                <option value="0001072">
                                                                    HOLY FAMILY MEDICAL CLINIC </option>
                                                                <option value="0001609">
                                                                    HOLY FAMILY MEDICAL CLINIC </option>
                                                                <option value="0000855">
                                                                    HOLY INFANT CLINIC </option>
                                                                <option value="0001073">
                                                                    HOLY INFANT HOSPITAL </option>
                                                                <option value="0001527">
                                                                    HOLY INFANT MEDICAL CLINIC </option>
                                                                <option value="0000686">
                                                                    HOLY MARY FAMILY HOSPITAL </option>
                                                                <option value="0001197">
                                                                    HOLY ROSARY CLINIC </option>
                                                                <option value="0001074">
                                                                    HOLY ROSARY HOSPITAL </option>
                                                                <option value="0001215">
                                                                    HOLY ROSARY OF VIRGIN MARY HOSPITAL </option>
                                                                <option value="0001075">
                                                                    HOLY SPIRIT GENERAL HOSPITAL </option>
                                                                <option value="0001555">
                                                                    HOLY SPIRIT MEDICAL CLINIC </option>
                                                                <option value="0000858">
                                                                    HOLY SPIRIT MEDICAL CLINIC AND HOSPITA </option>
                                                                <option value="0001746">
                                                                    HOLY TRINITY MEDICAL CLINIC </option>
                                                                <option value="0000398">
                                                                    HOMONHON COMMUNITY HOSPITAL </option>
                                                                <option value="0001076">
                                                                    HOSPITAL DE SAN JUAN BAUTISTA </option>
                                                                <option value="0001077">
                                                                    HOSPITAL DE SOLEDAD </option>
                                                                <option value="0001078">
                                                                    HOSPITAL OF ST. GERARD </option>
                                                                <option value="0001079">
                                                                    HOSPITAL OF THE HOLY CROSS </option>
                                                                <option value="0000687">
                                                                    HOSPITAL OF THE INFANT JESUS </option>
                                                                <option value="0001631">
                                                                    HOWARD HUBBARD MEMORIAL HOSPITAL </option>
                                                                <option value="0001434">
                                                                    IBA¥EZ MED. CLINIC &amp; STERILIZATION CEN </option>
                                                                <option value="0000295">
                                                                    IBAJAY DISTRICT HOSPITAL </option>
                                                                <option value="0000607">
                                                                    IFUGAO GENERAL HOSPITAL </option>
                                                                <option value="0001802">
                                                                    IGANO COMMUNITY HOSPITAL </option>
                                                                <option value="0001644">
                                                                    ILIGAN MEDICAL CENTER </option>
                                                                <option value="0000061">
                                                                    ILOCOS REGIONAL HOSPITAL </option>
                                                                <option value="0001270">
                                                                    ILOILO DOCTOR'S HOSPITAL, INC. </option>
                                                                <option value="0000331">
                                                                    ILOILO PROVINCIAL HOSPITAL </option>
                                                                <option value="0001290">
                                                                    IMMACULATE CONCEPCION HEALTH CENTER </option>
                                                                <option value="0000688">
                                                                    IMMACULATE CONCEPCION HOSPITAL </option>
                                                                <option value="0001744">
                                                                    IMMACULATE CONCEPTION CLINIC </option>
                                                                <option value="0001344">
                                                                    IMMACULATE CONCEPTION HOSPITAL </option>
                                                                <option value="0001475">
                                                                    IMMACULATE CONCEPTION HOSPITAL </option>
                                                                <option value="0001080">
                                                                    IMMACULATE CONCEPTION HOSPITAL </option>
                                                                <option value="0001081">
                                                                    IMUS FAMILY HOSPITAL </option>
                                                                <option value="0001252">
                                                                    INFANT JESUS MEDICAL CLINIC </option>
                                                                <option value="0001204">
                                                                    INFANT JESUS MEDICAL CLINIC </option>
                                                                <option value="0001370">
                                                                    INFANTE HOSPITAL MGT. CORPORATION </option>
                                                                <option value="0000498">
                                                                    INITAO DISTRICT HOSPITAL </option>
                                                                <option value="0000466">
                                                                    IPIL DISTRICT HOSPITAL </option>
                                                                <option value="0001082">
                                                                    IRIS BING MEMORIAL HOSPITAL </option>
                                                                <option value="0000288">
                                                                    IROSIN DISTRICT HOSPITAL </option>
                                                                <option value="0000890">
                                                                    ISAAC &amp; CATALINA MULTI-SPECIALIST CENT </option>
                                                                <option value="0000339">
                                                                    ISABELA DISTRICT HOSPITAL </option>
                                                                <option value="0000095">
                                                                    ISABELA PROVINCIAL HOSPITAL </option>
                                                                <option value="0000359">
                                                                    ISIDRO C. KINTANAR MEMORIAL HOSPITAL </option>
                                                                <option value="0001196">
                                                                    ISIP GENERAL HOSPITAL </option>
                                                                <option value="0000088">
                                                                    ITBAYAT DISTRICT HOSPITAL </option>
                                                                <option value="0001739">
                                                                    ITOGON SUYOC MINES HOSPITAL </option>
                                                                <option value="0001592">
                                                                    J' HAGONOY MEDICAL CLINIC </option>
                                                                <option value="0000192">
                                                                    J.L. AMANTE EMERGENCY HOSPITAL </option>
                                                                <option value="0000689">
                                                                    J.P. SIOSON GENERAL HOSPITAL </option>
                                                                <option value="0000496">
                                                                    J.R. BORJA MEMORIAL CITY HOSPITAL </option>
                                                                <option value="0001198">
                                                                    JAIME BERCES MEMORIAL HOSPITAL </option>
                                                                <option value="0000193">
                                                                    JALA JALA MUNICIPAL HOSPITAL </option>
                                                                <option value="0001678">
                                                                    JALANDONI MEDICAL CLINIC </option>
                                                                <option value="0000031">
                                                                    JAMES L. GORDON MEMORIAL HOSPITAL </option>
                                                                <option value="0000312">
                                                                    JAMINDAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0001083">
                                                                    JANE COUNTY HOSPITAL </option>
                                                                <option value="0001621">
                                                                    JANUARIA MARCIAL MEMORIAL HOSPITAL </option>
                                                                <option value="0001770">
                                                                    JASMIR MEMORIAL HOSPITAL </option>
                                                                <option value="0001827">
                                                                    JAVELOSA MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000868">
                                                                    JAVONILLO HOSPITAL </option>
                                                                <option value="0000319">
                                                                    JESUS M. COLMENARES DISTRICT HOSPITAL </option>
                                                                <option value="0000913">
                                                                    JESUS OF NAZARETH HOSPITAL </option>
                                                                <option value="0001340">
                                                                    JESUS SAVIOUR MEDICAL CLINIC </option>
                                                                <option value="0000939">
                                                                    JESUS THE GOOD SHEPHERD HOSPITAL </option>
                                                                <option value="0001792">
                                                                    JESUS THE SAVIOUR HOSPITAL </option>
                                                                <option value="0000982">
                                                                    JIMENEZ CHILD CLINIC </option>
                                                                <option value="0000691">
                                                                    JOHN F. COTTON HOSPITAL </option>
                                                                <option value="0000690">
                                                                    JOHN-PAUL HOSPITAL </option>
                                                                <option value="0000097">
                                                                    JONES MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000030">
                                                                    JOSE B. LINGAD MEMORIAL GENERAL HOSPITAL </option>
                                                                <option value="0000113">
                                                                    JOSE C. PAYUMO JR. MEMORIAL HOSPITAL </option>
                                                                <option value="0001211">
                                                                    JOSE PANGANIBAN PRIMARY HOSPITAL </option>
                                                                <option value="0000556">
                                                                    JOSE R. REYES MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0000692">
                                                                    JOSE VIRAY MEMORIAL HOSPITAL </option>
                                                                <option value="0001084">
                                                                    JOSE YULO-FOUND.-CANLUBANG INDUSTRIAL </option>
                                                                <option value="0001637">
                                                                    JUADIONG CLINIC </option>
                                                                <option value="0000380">
                                                                    JUAN B. DOSADO MEMORIAL HOSPITAL </option>
                                                                <option value="0000614">
                                                                    JUAN M . DUYAN DISTRICT HOSPITAL </option>
                                                                <option value="0000273">
                                                                    JUAN M. ALBERTO MEM. DISTRICT HOSPITAL </option>
                                                                <option value="0001368">
                                                                    JUAN S. ALANO MEMORIAL HOSPITAL </option>
                                                                <option value="0001326">
                                                                    JULIO CARDINAL ROSALES MEM. HOSPITAL </option>
                                                                <option value="0000821">
                                                                    JVF CLINIC AND LYING-IN HOSPITAL </option>
                                                                <option value="0001664">
                                                                    KABACAN DOCTOR'S HOSPITAL </option>
                                                                <option value="0001823">
                                                                    KABACAN MEDICAL MULTI-PURPOSE COOP. HOSPITAL </option>
                                                                <option value="0000340">
                                                                    KABANKALAN DISTRICT HOSPITAL </option>
                                                                <option value="0001392">
                                                                    KABASALAN COMMUNITY HOSPITAL </option>
                                                                <option value="0000616">
                                                                    KALINGA APAYAO PROVINCIAL HOSPITAL </option>
                                                                <option value="0000613">
                                                                    KALINGA DISTRICT HOSPITAL </option>
                                                                <option value="0001803">
                                                                    KANANGA COMMUNITY HOSPITAL </option>
                                                                <option value="0000503">
                                                                    KAPALONG DISTRICT HOSPITAL </option>
                                                                <option value="0000605">
                                                                    KAPANGAN MEDICARE AND COMMUNITY HOSP. </option>
                                                                <option value="0001784">
                                                                    KAPATAGAN DISTRICT HOSPITAL </option>
                                                                <option value="0001323">
                                                                    KAUSWAGAN COMMUNITY HOSPITAL </option>
                                                                <option value="0000693">
                                                                    KAYBIGA COMMUNITY HOSPITAL </option>
                                                                <option value="0000528">
                                                                    KIAMBA DISTRICT HOSPITAL </option>
                                                                <option value="0000480">
                                                                    KIBAWE MUNICIPAL HOSPITAL </option>
                                                                <option value="0001800">
                                                                    KIDAPAWAN DOCTORS HOSPITAL, INC. </option>
                                                                <option value="0001665">
                                                                    KIDAPAWAN MEDICAL SPECIALIST CENTER, I </option>
                                                                <option value="0001797">
                                                                    KIDAPAWAN MEDICAL SPECIALIST CENTER, INC. </option>
                                                                <option value="0000628">
                                                                    KITCHARAO DISTRICT HOSPITAL </option>
                                                                <option value="0000694">
                                                                    KMI SPECIALIST HOSPITAL </option>
                                                                <option value="0001785">
                                                                    KOLAMBUGAN DISTRICT HOSPITAL </option>
                                                                <option value="0000848">
                                                                    L. RAMOS CLINIC </option>
                                                                <option value="0001309">
                                                                    L.G. CUTAMORA COMMUNITY HOSPITAL </option>
                                                                <option value="0001276">
                                                                    L.N. AGUSTIN MEMORIAL HOSPITAL </option>
                                                                <option value="0000151">
                                                                    LA PAZ MEDICARE AND COMMUNITY HOSP. </option>
                                                                <option value="0001806">
                                                                    LA UNION MEDICAL DIAGNOSTIC CENTER </option>
                                                                <option value="0000504">
                                                                    LAAK MUNICIPAL HOSPITAL </option>
                                                                <option value="0000456">
                                                                    LABASON DISRTICT HOSPITAL </option>
                                                                <option value="0000257">
                                                                    LABO DISTRICT HOSPITAL </option>
                                                                <option value="0000823">
                                                                    LABRADOR COMMUNITY HOSPITAL </option>
                                                                <option value="0000479">
                                                                    LABUAN PUBLIC HOSPITAL </option>
                                                                <option value="0000194">
                                                                    LAGUNA PROVINCIAL HOSPITAL </option>
                                                                <option value="0000792">
                                                                    LAHOZ CLINIC AND HOSPITAL </option>
                                                                <option value="0000467">
                                                                    LAKEWOOD MUNICIPAL HOSPITAL </option>
                                                                <option value="0000440">
                                                                    LAMITAN DISTRICT HOSPITAL </option>
                                                                <option value="0001636">
                                                                    LANDERO CLINIC AN HOSPITAL </option>
                                                                <option value="0001653">
                                                                    LAO MEDICAL CLINIC </option>
                                                                <option value="0000044">
                                                                    LAOAG CITY GENERAL HOSPITAL </option>
                                                                <option value="0000372">
                                                                    LAPULAPU CITY DISTRICT HOSPITAL </option>
                                                                <option value="0001635">
                                                                    LARIOSA CLINIC AND HOSPITAL </option>
                                                                <option value="0001808">
                                                                    LAS NIEVES MUNICIPAL HOSPITAL </option>
                                                                <option value="0000586">
                                                                    LAS PIÑAS DISTRICT HOSPITAL </option>
                                                                <option value="0000695">
                                                                    LAS PIÑAS DOCTORS HOSPITAL </option>
                                                                <option value="0000696">
                                                                    LAS PIÑAS MEDICAL CLINIC </option>
                                                                <option value="0000082">
                                                                    LASAM DISTRICT HOSPITAL </option>
                                                                <option value="0001553">
                                                                    LASANG MEDICAL CLINIC </option>
                                                                <option value="0000195">
                                                                    LAUREL MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0001513">
                                                                    LAYUG MEDICAL CLINIC </option>
                                                                <option value="0001085">
                                                                    LEMERY GENERAL HOSPITAL </option>
                                                                <option value="0001310">
                                                                    LEONA O. LIM MEMORIAL HOSPITAL </option>
                                                                <option value="0001365">
                                                                    LEONCIO UY MEMORIAL HOSPITAL </option>
                                                                <option value="0001741">
                                                                    LEPANTO CONSOLIDATED MINING HOSPITAL </option>
                                                                <option value="0001347">
                                                                    LEYTE BAPTIST CLINIC </option>
                                                                <option value="0001812">
                                                                    LEYTE PROVINCIAL HOSPITAL </option>
                                                                <option value="0001174">
                                                                    LIANKO'S MEDICAL CLINIC </option>
                                                                <option value="0001299">
                                                                    LIAO'S CLINIC AND HOSPITAL </option>
                                                                <option value="0000297">
                                                                    LIBACAO MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0001348">
                                                                    LIDE PASAR HOSPITAL </option>
                                                                <option value="0000432">
                                                                    LILOAN COMMUNITY HOSPITAL </option>
                                                                <option value="0000457">
                                                                    LILOY MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0001300">
                                                                    LIM COMMUNITY HOSPITAL </option>
                                                                <option value="0001544">
                                                                    LIM'S MEDICAL CLINIC </option>
                                                                <option value="0000433">
                                                                    LIMASAWA COMMUNITY HOSPITAL </option>
                                                                <option value="0000827">
                                                                    LINGAYEN SACRED HEART HOSPITAL </option>
                                                                <option value="0000196">
                                                                    LIPA CITY DISTRICT HOSPITAL </option>
                                                                <option value="0001086">
                                                                    LIPA MEDIX MEDICAL CENTER </option>
                                                                <option value="0001483">
                                                                    LIPUNAN HOSPITAL </option>
                                                                <option value="0000812">
                                                                    LITTLE HOME CLINIC </option>
                                                                <option value="0001087">
                                                                    LIWAG MEDICAL CLINIC </option>
                                                                <option value="0001686">
                                                                    LLAGUNO MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000990">
                                                                    LLAMAS CLINIC </option>
                                                                <option value="0001586">
                                                                    LLANOS MEDICAL CLINIC </option>
                                                                <option value="0000399">
                                                                    LLORENTE COMMUNITY HOSPITAL </option>
                                                                <option value="0001520">
                                                                    LOBINO MEDICAL CLINIC </option>
                                                                <option value="0000197">
                                                                    LOBO MUNICIPAL HOSPITAL </option>
                                                                <option value="0001514">
                                                                    LOCSIN MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000801">
                                                                    LOPEZ CLINIC </option>
                                                                <option value="0001283">
                                                                    LOPEZ DISTRICT FARMERS' HOSPITAL </option>
                                                                <option value="0000831">
                                                                    LOPEZ FAMILY CLINIC AND HOSPITAL </option>
                                                                <option value="0001463">
                                                                    LOPEZ JAENA COMMUNITY CLINIC </option>
                                                                <option value="0001088">
                                                                    LOPEZ ST. JUDE HOSPITAL </option>
                                                                <option value="0000804">
                                                                    LORMA MEDICAL CENTER </option>
                                                                <option value="0001089">
                                                                    LOS BA¥OS DOCTOR'S HOSPITAL </option>
                                                                <option value="0001222">
                                                                    LOURDES HOSPITAL </option>
                                                                <option value="0000927">
                                                                    LOZADA MAT. AND GENERAL HOSPITAL </option>
                                                                <option value="0001751">
                                                                    LOZADA'S HOSPITAL </option>
                                                                <option value="0000106">
                                                                    LT. TIDANG MEMORIAL HOSPITAL </option>
                                                                <option value="0001798">
                                                                    LU CLINIC AND HOSPITAL </option>
                                                                <option value="0001090">
                                                                    LUCENA UNITED DOCTORS HOSPITAL </option>
                                                                <option value="0001176">
                                                                    LUDOVICE GENERAL HOSPITAL </option>
                                                                <option value="0000618">
                                                                    LUIS HORA MEMORIAL HOSPITAL </option>
                                                                <option value="0000198">
                                                                    LUISIANA DISTRICT HOSPITAL </option>
                                                                <option value="0001478">
                                                                    LUMASAG MEDICAL CLINIC </option>
                                                                <option value="0001189">
                                                                    LUMBIS-RANCES GENERAL HOSPITAL </option>
                                                                <option value="0001091">
                                                                    LUNA-GOCO MEDICAL CENTER </option>
                                                                <option value="0000571">
                                                                    LUNG CENTER OF THE PHILIPPINES </option>
                                                                <option value="0000519">
                                                                    LUPON DISTRICT HOSPITAL </option>
                                                                <option value="0001738">
                                                                    LUTHERAN HOSPITAL </option>
                                                                <option value="0001775">
                                                                    LUUK DISTRICT HOSPITAL </option>
                                                                <option value="0000818">
                                                                    LUZON MEDICAL CENTER </option>
                                                                <option value="0000813">
                                                                    LYCEUM NORTHWESTERN GENERAL HOSPITAL </option>
                                                                <option value="0000844">
                                                                    LYCEUM OF APARRI HOSPITAL </option>
                                                                <option value="0001681">
                                                                    M' LANG DOCTOR'S HOSPITAL </option>
                                                                <option value="0001799">
                                                                    M'LANG DOCTOR'S HOSPITAL </option>
                                                                <option value="0001389">
                                                                    M. SIMON MEDICAL CLINIC </option>
                                                                <option value="0000413">
                                                                    M.B. VELOSO MEMORIAL HOSPITAL </option>
                                                                <option value="0000127">
                                                                    M.V. GALLEGO CABANATUAN CITY GENERAL HOSPITAL </option>
                                                                <option value="0000199">
                                                                    MA. AURORA MEDICARE COMMUNITY HOSP. </option>
                                                                <option value="0000924">
                                                                    MA. SANTISSIMA DELA PAZ HOSPITAL </option>
                                                                <option value="0000529">
                                                                    MAASIM MUNICIPAL HOSPITAL </option>
                                                                <option value="0000142">
                                                                    MABALACAT DISTRICT HOSPITAL </option>
                                                                <option value="0000143">
                                                                    MACABEBE DISTRICT HOSPITAL </option>
                                                                <option value="0000373">
                                                                    MACTAN AIR BASE HOSPITAL </option>
                                                                <option value="0001325">
                                                                    MACTAN COMMUNITY HOSPITAL, INC. </option>
                                                                <option value="0000110">
                                                                    MADDELA MUNICIPAL HOSPITAL </option>
                                                                <option value="0001490">
                                                                    MADONNA AND CHILD HOSPITAL </option>
                                                                <option value="0001668">
                                                                    MADONNA GENERAL HOSPITAL </option>
                                                                <option value="0001092">
                                                                    MADONNA GENERAL HOSPITAL </option>
                                                                <option value="0000289">
                                                                    MAGALLANES MEDICARE COMMUNITY HOSP. </option>
                                                                <option value="0001403">
                                                                    MAGBOO MEDICAL CLINIC </option>
                                                                <option value="0000882">
                                                                    MAGDAMO MEDICAL CLINIC </option>
                                                                <option value="0000200">
                                                                    MAGSAYSAY MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0000499">
                                                                    MAGSAYSAY MUNICIPAL HOSPITAL </option>
                                                                <option value="0000048">
                                                                    MAGSINGAL DISTRICT HOSPITAL </option>
                                                                <option value="0000468">
                                                                    MAHAYAG MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000530">
                                                                    MAITUM MUNICIPAL HOSPITAL </option>
                                                                <option value="0000037">
                                                                    MAKATI MEDICAL CENTER </option>
                                                                <option value="0000699">
                                                                    MAKATI PERPETUAL HELP MATERNITY HOUSE </option>
                                                                <option value="0000251">
                                                                    MALACBALAC DISTRICT HOSPITAL </option>
                                                                <option value="0001093">
                                                                    MALALUAN HOSPITAL </option>
                                                                <option value="0001669">
                                                                    MALALUAN MEDICAL AND MATERNITY CLINIC </option>
                                                                <option value="0001565">
                                                                    MALATE MEDICAL CLINIC </option>
                                                                <option value="0000299">
                                                                    MALAY MUNICIPAL HOSPITAL </option>
                                                                <option value="0001432">
                                                                    MALAYBALAY MEDICAL HOSPITAL </option>
                                                                <option value="0001431">
                                                                    MALAYBALAY POLYMEDIC GENERAL HOSP. </option>
                                                                <option value="0000514">
                                                                    MALITA MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0001361">
                                                                    MALITBOG MEDICAL CLINIC </option>
                                                                <option value="0000919">
                                                                    MALOLOS EENT HOSPITAL </option>
                                                                <option value="0000923">
                                                                    MALOLOS MATERNITY HOSPITAL </option>
                                                                <option value="0000921">
                                                                    MALOLOS SAN ILDEFONSO COUNTY HOSPITAL </option>
                                                                <option value="0000918">
                                                                    MALOLOS SAN VICENTE HOSPITAL </option>
                                                                <option value="0000313">
                                                                    MAMBUSAO DISTRICT HOSPITAL </option>
                                                                <option value="0000986">
                                                                    MANABAT MATERNITY AND GENERAL HOSPITAL </option>
                                                                <option value="0000877">
                                                                    MANALO MEDICAL CLINIC </option>
                                                                <option value="0000067">
                                                                    MANAOAG COMMUNITY HOSPITAL </option>
                                                                <option value="0000520">
                                                                    MANAY MUNICIPAL HOSPITAL </option>
                                                                <option value="0000564">
                                                                    MANDALUYONG MEDICAL CENTER </option>
                                                                <option value="0000281">
                                                                    MANDAON MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0001838">
                                                                    MANDAUE DISTRICT HOSPITAL </option>
                                                                <option value="0000068">
                                                                    MANGATAREM DISTRICT HOSPITAL </option>
                                                                <option value="0000641">
                                                                    MANILA CHILDREN'S &amp; LYING-IN HOSPITAL </option>
                                                                <option value="0000700">
                                                                    MANILA DOCTORS` HOSPITAL </option>
                                                                <option value="0000587">
                                                                    MANILA NAVAL HOSPITAL </option>
                                                                <option value="0000701">
                                                                    MANILA SANITARIUM AND HOSPITAL </option>
                                                                <option value="0000250">
                                                                    MANITO MUNICIPAL HOSPITAL </option>
                                                                <option value="0000099">
                                                                    MANUEL A. ROXAS DISTRICT HOSPITAL </option>
                                                                <option value="0001666">
                                                                    MANUEL HOSPITAL </option>
                                                                <option value="0001752">
                                                                    MANUEL J. SANTOS HOSPITAL </option>
                                                                <option value="0000458">
                                                                    MANUKAN MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000069">
                                                                    MAPANDAN COMMUNITY </option>
                                                                <option value="0001447">
                                                                    MARAAT MEDICAL HOSPITAL </option>
                                                                <option value="0000505">
                                                                    MARAGUSAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0001439">
                                                                    MARAMAG MEDICLINIC </option>
                                                                <option value="0001654">
                                                                    MARANDING COMMUNITY HOSPITAL </option>
                                                                <option value="0001656">
                                                                    MARANDING MEDICAL CLINIC </option>
                                                                <option value="0001094">
                                                                    MARAVILLA MEDICAL CLINIC </option>
                                                                <option value="0000898">
                                                                    MARCELO HOSPITAL </option>
                                                                <option value="0000937">
                                                                    MARCELO-PADILLA CHILDREN`S &amp; MEDICAL HOSP </option>
                                                                <option value="0001095">
                                                                    MARCOPPER MEDICAL CENTER </option>
                                                                <option value="0000469">
                                                                    MARGOSATUBIG DISTRICT HOSPITAL </option>
                                                                <option value="0001096">
                                                                    MARIA ESTRELLA MEDICAL CLINIC </option>
                                                                <option value="0000697">
                                                                    MARIA LOURDES MATERNITY HOSPITAL., </option>
                                                                <option value="0001485">
                                                                    MARIA REYNA HOSPITAL </option>
                                                                <option value="0000845">
                                                                    MARIAN CLINIC </option>
                                                                <option value="0000702">
                                                                    MARIANNE DOCTOR'S HOSPITAL </option>
                                                                <option value="0000375">
                                                                    MARIANO J. CUENCO MEMORIAL HOSPITAL </option>
                                                                <option value="0000040">
                                                                    MARIANO MARCOS MEM. HOSPITAL &amp; MED CTR </option>
                                                                <option value="0000201">
                                                                    MARINDUQUE PROVINCIAL HOSPITAL </option>
                                                                <option value="0001529">
                                                                    MARSHAN ESTATE PLANTATION, INC. HOSP. </option>
                                                                <option value="0000802">
                                                                    MARTINEZ HOSPITAL </option>
                                                                <option value="0000805">
                                                                    MARTINEZ MAT. AND LYING-IN HOSP. </option>
                                                                <option value="0000703">
                                                                    MARTINEZ MEMORIAL HOSPITAL </option>
                                                                <option value="0000704">
                                                                    MARY CHILES GENERAL HOSPITAL </option>
                                                                <option value="0000705">
                                                                    MARY IMMACULATE HOSPITAL </option>
                                                                <option value="0000706">
                                                                    MARY JOHNSTON HOSPITAL </option>
                                                                <option value="0001097">
                                                                    MARY MEDIATRIX MEDICAL CENTER </option>
                                                                <option value="0001248">
                                                                    MASBATE MAT. AND CHILD HEALTH CLINIC </option>
                                                                <option value="0000282">
                                                                    MASBATE PROVINCIAL HOSPITAL </option>
                                                                <option value="0001587">
                                                                    MASONGSONG CLINIC </option>
                                                                <option value="0001098">
                                                                    MATAASNAKAHOY COMMUNITY HOSPITAL </option>
                                                                <option value="0000515">
                                                                    MATANAO MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000945">
                                                                    MATEO'S DIAGNOSTIC CLINIC AND HOSPITAL </option>
                                                                <option value="0001619">
                                                                    MATI DOCTORS HOSPITAL </option>
                                                                <option value="0000080">
                                                                    MATILDE A. OLIVAS DISTRICT HOSPITAL </option>
                                                                <option value="0000290">
                                                                    MATNOG MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000202">
                                                                    MAUBAN DISTRICT HOSPITAL </option>
                                                                <option value="0000119">
                                                                    MAYOR E.G. PEREZ MEMORIAL DISTRICT HOSP. </option>
                                                                <option value="0000489">
                                                                    MAYOR HILARION A. RAMIRO SR. GENERAL HOSPITAL </option>
                                                                <option value="0001380">
                                                                    MAYOR JOAQUIN C. MATIAS MEM. HOSP. </option>
                                                                <option value="0000707">
                                                                    MCU-FDT MEDICAL FOUNDATION HOSPITAL </option>
                                                                <option value="0001649">
                                                                    MED. MISSION GROUP COOP. HOSPITAL-ILIG </option>
                                                                <option value="0001576">
                                                                    MED. MISSION GROUP HOSPITAL AND HEALTH </option>
                                                                <option value="0001535">
                                                                    MED. MISSION GROUP HOSPITAL AND HEALTH </option>
                                                                <option value="0001307">
                                                                    MED. MISSION GROUP HOSPITAL SERVICES </option>
                                                                <option value="0000708">
                                                                    MEDICAL CENTER MANILA </option>
                                                                <option value="0000710">
                                                                    MEDICAL CENTER PARAÑAQUE, INC. </option>
                                                                <option value="0000816">
                                                                    MEDICAL CENTRUM DAGUPAN, INC. </option>
                                                                <option value="0000912">
                                                                    MEDICAL CENTRUM SAN MIGUEL </option>
                                                                <option value="0001546">
                                                                    MEDICAL CLINIC OF ST. LUKE </option>
                                                                <option value="0001719">
                                                                    MEDICAL MISSION GROUP HOSPITAL AND HEA </option>
                                                                <option value="0001099">
                                                                    MEDICALCENTER LUCENA </option>
                                                                <option value="0000631">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000500">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000493">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000484">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000486">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000203">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000204">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000205">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000206">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000207">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000208">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000209">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000210">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000211">
                                                                    MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000348">
                                                                    MEDICARE COMMUNITY HOSPITAL OF CANDIJAY </option>
                                                                <option value="0000351">
                                                                    MEDICARE COMMUNITY HOSPITAL OF CLARIN </option>
                                                                <option value="0000391">
                                                                    MEDICARE COMMUNITY HOSPITAL OF LAZI </option>
                                                                <option value="0000389">
                                                                    MEDICARE COMMUNITY HOSPITAL OF MABINAY </option>
                                                                <option value="0000355">
                                                                    MEDICARE COMMUNITY HOSPITAL OF MARIBOHOC </option>
                                                                <option value="0001494">
                                                                    MEDINA HOSPITAL </option>
                                                                <option value="0001557">
                                                                    MEJORADA MEDICAL CLINIC </option>
                                                                <option value="0000942">
                                                                    MENDOZA GENERAL HOSPITAL </option>
                                                                <option value="0001100">
                                                                    MERCADO GENERAL HOSPITAL </option>
                                                                <option value="0001591">
                                                                    MERCADO MEDICAL CLINIC </option>
                                                                <option value="0001645">
                                                                    MERCY COMMUNITY HOSPITAL </option>
                                                                <option value="0001316">
                                                                    METRO CEBU COMMUNITY HOSPITAL </option>
                                                                <option value="0001810">
                                                                    METRO SOUTH MEDICAL CENTER </option>
                                                                <option value="0000711">
                                                                    METROPOLITAN HOSPITAL </option>
                                                                <option value="0001676">
                                                                    MIDSAYAP COMMUNITY DOCTORS HOSPITAL </option>
                                                                <option value="0001682">
                                                                    MIDWAY HOSPITAL </option>
                                                                <option value="0000992">
                                                                    MIGUEL CLINIC </option>
                                                                <option value="0000091">
                                                                    MILAGROS DISTRICT HOSPITAL </option>
                                                                <option value="0000475">
                                                                    MINDANAO CENTRAL SANITARIUM </option>
                                                                <option value="0001622">
                                                                    MINDANAO MEDICAL CENTER, INC. </option>
                                                                <option value="0001581">
                                                                    MINDANAO MEDICAL FOUNDATION COLLEGE AN </option>
                                                                <option value="0001642">
                                                                    MINDANAO SANITARIUM AND HOSPITAL </option>
                                                                <option value="0000377">
                                                                    MINGLANILLA DISTRICT HOSPITAL </option>
                                                                <option value="0000712">
                                                                    MIRACULOUS MEDAL HOSPITAL </option>
                                                                <option value="0001759">
                                                                    MIRANDA FAMILY HOSPITAL </option>
                                                                <option value="0001472">
                                                                    MISAMIS COMMUNITY HOSPITAL </option>
                                                                <option value="0000488">
                                                                    MISAMIS OCCIDENTAL PROVINCIAL HOSPITAL </option>
                                                                <option value="0001473">
                                                                    MISAMIS UNIVERSITY MEDICAL CENTER </option>
                                                                <option value="0000995">
                                                                    MODOMO'S GENERAL HOSPITAL </option>
                                                                <option value="0001512">
                                                                    MOJICA MEDICAL CLINIC </option>
                                                                <option value="0001809">
                                                                    MOLINO SOUTH MEDICAL CENTER </option>
                                                                <option value="0001448">
                                                                    MONSANTO COMM. HOSP &amp; MAT. CLINIC </option>
                                                                <option value="0000506">
                                                                    MONTEVISTA DISTRICT HOSPITAL </option>
                                                                <option value="0000973">
                                                                    MORALES MEDICAL CLINIC </option>
                                                                <option value="0001613">
                                                                    MORALES MEDICAL CLINIC </option>
                                                                <option value="0000010">
                                                                    MORONG DOCTOR'S HOSPITAL </option>
                                                                <option value="0001006">
                                                                    MOTHER AND CHILD HOSPITAL </option>
                                                                <option value="0000957">
                                                                    MOTHER OF PERPETUAL HELP HOSPITAL </option>
                                                                <option value="0001229">
                                                                    MOTHER SETON HOSPITAL </option>
                                                                <option value="0000709">
                                                                    MPI-MEDICAL CENTER MUNTINLUPA </option>
                                                                <option value="0000907">
                                                                    MT. CARMEL HOSPITAL </option>
                                                                <option value="0000981">
                                                                    MU¥OZ CLINIC </option>
                                                                <option value="0001172">
                                                                    MU¥OZ MEDICAL CLINIC </option>
                                                                <option value="0000713">
                                                                    MUNTINLUPA DOCTORS CLINIC </option>
                                                                <option value="0000591">
                                                                    MUNTINLUPA LYING-IN CENTER </option>
                                                                <option value="0001102">
                                                                    N.L. VILLA MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0001515">
                                                                    NACILLA MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000262">
                                                                    NAGA CITY HOSPITAL </option>
                                                                <option value="0000212">
                                                                    NAGCARLAN DISTRICT HOSPITAL </option>
                                                                <option value="0001727">
                                                                    NAGTALON MEDICAL CLINIC </option>
                                                                <option value="0000059">
                                                                    NAGUILIAN DISTRICT HOSPITAL </option>
                                                                <option value="0000213">
                                                                    NAIC MEDICARE HOSPITAL </option>
                                                                <option value="0001451">
                                                                    NANO-ALVAREZ GENERAL HOSPITAL </option>
                                                                <option value="0000629">
                                                                    NASIPIT DISTRICT HOSPITAL </option>
                                                                <option value="0000563">
                                                                    NATIONAL CENTER FOR MENTAL HEALTH </option>
                                                                <option value="0000579">
                                                                    NATIONAL CHILDREN`S HOSPITAL </option>
                                                                <option value="0000570">
                                                                    NATIONAL KIDNEY AND TRANSPLANT INSTITUTE </option>
                                                                <option value="0001648">
                                                                    NATIONAL STEEL CORP. INFIRMARY </option>
                                                                <option value="0001833">
                                                                    NATONIN COMMUNITY HOSPITAL </option>
                                                                <option value="0000214">
                                                                    NAUJAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0001522">
                                                                    NAVARES MEDICAL CLINIC </option>
                                                                <option value="0001178">
                                                                    NAVERA'S CLINIC </option>
                                                                <option value="0001293">
                                                                    NAZARENO CLINIC AND HOSPITAL </option>
                                                                <option value="0000929">
                                                                    NAZARENUS CLINIC AND HOSPITAL </option>
                                                                <option value="0000819">
                                                                    NAZARETH GENERAL HOSPITAL </option>
                                                                <option value="0000387">
                                                                    NEGROS ORIENTAL PROVINCIAL HOSPITAL </option>
                                                                <option value="0000714">
                                                                    NEOPOLITAN MEDICAL &amp; MATERNITY CLINIC </option>
                                                                <option value="0000590">
                                                                    NEW BILIBID RISON HOSPITAL </option>
                                                                <option value="0001103">
                                                                    NEW BINANGONAN MEDICAL CENTER </option>
                                                                <option value="0000330">
                                                                    NEW LUCENA MED. CLINIC &amp; LYING-IN HOSP. </option>
                                                                <option value="0000971">
                                                                    NEW MERCY CLINIC </option>
                                                                <option value="0001104">
                                                                    NORA GENERAL HOSPITAL </option>
                                                                <option value="0001779">
                                                                    NORALA DISTRICT HOSPITAL </option>
                                                                <option value="0001375">
                                                                    NORTH MATERNITY AND HOSPITAL </option>
                                                                <option value="0000084">
                                                                    NORTHERN CAGAYAN DISTRICT HOSPITAL </option>
                                                                <option value="0000774">
                                                                    NORTHERN DOCTORS GENERAL HOSP. </option>
                                                                <option value="0000057">
                                                                    NORTHERN LA UNION MAT. &amp; CHILDREN'S HOSPITAL </option>
                                                                <option value="0000408">
                                                                    NORTWESTERN LEYTE DISTRICT HOSPITAL </option>
                                                                <option value="0001683">
                                                                    NOTRE DAME CLINIC </option>
                                                                <option value="0001716">
                                                                    NOTRE DAME HOSP. AND SCHOOL OF MIDWIFERY, INC. </option>
                                                                <option value="0001173">
                                                                    NU¥EZ MEDICAL CLINIC </option>
                                                                <option value="0000083">
                                                                    NUESTRA SRA. DE PIAT DISTRICT HOSPITAL </option>
                                                                <option value="0001814">
                                                                    NUEVA ECIJA DOCTORS` HOSPITAL, INC. </option>
                                                                <option value="0000948">
                                                                    NUEVA ECIJA GOOD SAMARITAN GEN. HOSP., INC. </option>
                                                                <option value="0001831">
                                                                    NUEVA ECIJA GOOD SAMARITAN GEN.HOSP.,INC. </option>
                                                                <option value="0000347">
                                                                    NUEVA VALENCIA MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000264">
                                                                    OCAMPO MUNICIPAL HOSPITAL </option>
                                                                <option value="0000215">
                                                                    OCCIDENTAL MINDORO PROVINCIAL HOSPITAL </option>
                                                                <option value="0000951">
                                                                    OLANIO GENERAL HOSPITAL </option>
                                                                <option value="0001385">
                                                                    OLIVA MEDICAL CLINIC </option>
                                                                <option value="0000715">
                                                                    OLIVAREZ GENERAL HOSPITAL </option>
                                                                <option value="0000470">
                                                                    OLUTANGA MUNICIPAL HOSPITAL </option>
                                                                <option value="0001221">
                                                                    OMEABLE MEDICAL CLINIC </option>
                                                                <option value="0000115">
                                                                    ORANI DISTRICT HOSPITAL </option>
                                                                <option value="0000400">
                                                                    ORAS DISTRICT HOSPITAL </option>
                                                                <option value="0000843">
                                                                    ORDO¥EZ CLINIC </option>
                                                                <option value="0000033">
                                                                    ORIENTAL MINDORO PROVINCIAL HOSPITAL </option>
                                                                <option value="0000411">
                                                                    ORMOC DISRTICT HOSPITAL </option>
                                                                <option value="0001353">
                                                                    ORMOC MATERNITY &amp; CHILDREN'S HOSPITAL </option>
                                                                <option value="0001466">
                                                                    OROQUIETA COMMUNITY HOSPITAL </option>
                                                                <option value="0000378">
                                                                    OSLOB DISTRICT HOSPITAL </option>
                                                                <option value="0001352">
                                                                    OSPA FARMERS MEDICAL CENTER </option>
                                                                <option value="0000011">
                                                                    Ospital ng Baras </option>
                                                                <option value="0000217">
                                                                    OSPITAL NG CABUYAO </option>
                                                                <option value="0001781">
                                                                    OSPITAL NG KABATAAN NG DIPOLOG, INC. </option>
                                                                <option value="0000028">
                                                                    Ospital ng Makati </option>
                                                                <option value="0000560">
                                                                    OSPITAL NG MAYNILA MEDICAL CENTER </option>
                                                                <option value="0000561">
                                                                    OSPITAL NG SAMPALOC </option>
                                                                <option value="0000158">
                                                                    OSPITAL NG STA. CRUZ </option>
                                                                <option value="0001815">
                                                                    OSPITAL NG TAGAYTAY </option>
                                                                <option value="0001766">
                                                                    OSPITAL NG TONDO </option>
                                                                <option value="0000136">
                                                                    OSPITAL NING ANGELES </option>
                                                                <option value="0001106">
                                                                    OUR LADY OF CAYSASAY HOSPITAL </option>
                                                                <option value="0001630">
                                                                    OUR LADY OF FATIMA HOSPITAL AND FP CEN </option>
                                                                <option value="0000775">
                                                                    OUR LADY OF FATIMA MED. CLIN. &amp; HOSP. </option>
                                                                <option value="0001237">
                                                                    OUR LADY OF FATIMA MEDICAL CLINIC </option>
                                                                <option value="0000716">
                                                                    OUR LADY OF GRACE HOSPITAL </option>
                                                                <option value="0001629">
                                                                    OUR LADY OF LOURDES CLINIC AND HOSPITA </option>
                                                                <option value="0001208">
                                                                    OUR LADY OF LOURDES HOSPITAL </option>
                                                                <option value="0001247">
                                                                    OUR LADY OF LOURDES HOSPITAL </option>
                                                                <option value="0000717">
                                                                    OUR LADY OF LOURDES HOSPITAL,INC. </option>
                                                                <option value="0001236">
                                                                    OUR LADY OF MEDIATRIX HOSPITAL </option>
                                                                <option value="0001107">
                                                                    OUR LADY OF MT. CARMEL HOSPITAL </option>
                                                                <option value="0001226">
                                                                    OUR LADY OF PE¥AFRANCIA HOSPITAL </option>
                                                                <option value="0001367">
                                                                    OUR LADY OF PEACE FAMILY CLINIC </option>
                                                                <option value="0001219">
                                                                    OUR LADY OF PERPETUAL HELP CLINIC </option>
                                                                <option value="0001726">
                                                                    OUR LADY OF REMEDIOS CLINIC </option>
                                                                <option value="0000968">
                                                                    OUR LADY OF ROSARY CLINIC </option>
                                                                <option value="0000933">
                                                                    OUR LADY OF SALAMBAO HOSPITAL </option>
                                                                <option value="0001259">
                                                                    OUR LADY OF THE MOST HOLY ROSARY HOSP. </option>
                                                                <option value="0001272">
                                                                    OUR MOTHER OF PERPETUAL HELP LYING-IN </option>
                                                                <option value="0001108">
                                                                    OUR SAVIOR HOSPITAL, INC. </option>
                                                                <option value="0000718">
                                                                    P. GONZALES MEMORIAL HOSPITAL </option>
                                                                <option value="0001670">
                                                                    PACIFICO MEDICAL CLINIC </option>
                                                                <option value="0001606">
                                                                    PADADA GENERAL HOSPITAL, INC. </option>
                                                                <option value="0000435">
                                                                    PADRE BURGOS COMMUNITY HOSPITAL </option>
                                                                <option value="0000930">
                                                                    PADRIGUILAN'S MAT. AND MEDICAL CLINIC </option>
                                                                <option value="0001400">
                                                                    PAGADIAN COMMUNITY HOSPITAL </option>
                                                                <option value="0001401">
                                                                    PAGADIAN MATERNITY &amp; GENERAL CLINIC </option>
                                                                <option value="0000857">
                                                                    PAGALILAUAN CLINIC </option>
                                                                <option value="0001109">
                                                                    PAGAMUTANG PAMPAMILYA NG INA NG </option>
                                                                <option value="0000218">
                                                                    PAGAMUTANG PANGMASA NG LAGUNA </option>
                                                                <option value="0001110">
                                                                    PAGSANJAN MEDICAL CLINIC </option>
                                                                <option value="0001428">
                                                                    PAHILAN FAMILY CLINIC </option>
                                                                <option value="0001429">
                                                                    PALANGAN FAMILY AND CHILDREN'S CLINIC </option>
                                                                <option value="0001111">
                                                                    PALAWAN ADVENTIST HOSPITAL </option>
                                                                <option value="0001112">
                                                                    PALAWAN BAPTIST HOSPITAL </option>
                                                                <option value="0000133">
                                                                    PALAYAN CITY EMERGENCY HOSPITAL </option>
                                                                <option value="0000962">
                                                                    PAMANA GOLDEN CARE FOUNDATION, INC. </option>
                                                                <option value="0001113">
                                                                    PAMANA GOLDEN CARE MEDICAL FOUNDATION </option>
                                                                <option value="0000983">
                                                                    PAMPANGA ORTHOPEDIC &amp; MATERNITY CLINIC </option>
                                                                <option value="0000140">
                                                                    PAMPANGA PROVINCIAL HOSPITAL </option>
                                                                <option value="0000719">
                                                                    PAMPLONA MEDICAL CLINIC </option>
                                                                <option value="0001523">
                                                                    PANABO MEDICAL AND MATERNITY CLINIC </option>
                                                                <option value="0001519">
                                                                    PANABO POLYMEDIC HOSPITAL </option>
                                                                <option value="0000272">
                                                                    PANDAN DISTRICT HOSPITAL </option>
                                                                <option value="0001477">
                                                                    PANGANIBAN CLINIC </option>
                                                                <option value="0001440">
                                                                    PANGANTUCAN COMMUNITY CLINIC </option>
                                                                <option value="0000817">
                                                                    PANGASINAN MEDICAL CENTER, INC. </option>
                                                                <option value="0000071">
                                                                    PANGASINAN PROVINCIAL HOSPITAL </option>
                                                                <option value="0000609">
                                                                    PANOPDOPAN DISTRICT HOSPITAL </option>
                                                                <option value="0000248">
                                                                    PANTAO DISTRICT HOSPITAL </option>
                                                                <option value="0001787">
                                                                    PANTINOPLE MEDICAL CLINIC </option>
                                                                <option value="0000507">
                                                                    PANTUKAN DISTRICT HOSPITAL </option>
                                                                <option value="0000510">
                                                                    PAQUIBATO DISTRICT HOSPITAL </option>
                                                                <option value="0000592">
                                                                    PARA¥AQUE COMMUNITY HOSPITAL </option>
                                                                <option value="0000621">
                                                                    PARACELIS DISTRICT HOSPITAL </option>
                                                                <option value="0001496">
                                                                    PARRE¥AS MEDICAL CLINIC </option>
                                                                <option value="0000594">
                                                                    PASAY CITY GENERAL HOSPITAL </option>
                                                                <option value="0000720">
                                                                    PASAY-PARA¥AQUE HOSPITAL </option>
                                                                <option value="0000721">
                                                                    PASCUAL GENERAL HOSPITAL </option>
                                                                <option value="0000567">
                                                                    PASIG CITY GENERAL HOSPITAL </option>
                                                                <option value="0000722">
                                                                    PASIG MEDICAL AND MAT. CLINIC FOUNDATI </option>
                                                                <option value="0000723">
                                                                    PASOLO MATERNITY AND MEDICAL CLINIC </option>
                                                                <option value="0000332">
                                                                    PASSI DISTRICT HOSPITAL </option>
                                                                <option value="01010117000030">
                                                                    PASUQUIN RHU </option>
                                                                <option value="0000779">
                                                                    PATAO CLINIC AND HOSPITAL </option>
                                                                <option value="0001391">
                                                                    PATHFINDER ESTATE HOSPITAL </option>
                                                                <option value="0001297">
                                                                    PAULINA LIM MEMORIAL HOSPITAL </option>
                                                                <option value="0001584">
                                                                    PAULINO HOSPITAL </option>
                                                                <option value="0000884">
                                                                    PE¥AFRANCIA HOSPITAL </option>
                                                                <option value="0000303">
                                                                    PEDRO GINDAP MUNICIPAL HOSPITAL </option>
                                                                <option value="0000853">
                                                                    PENEYRA CLINIC AND HOSPITAL </option>
                                                                <option value="0001114">
                                                                    PEPRPETUAL HELP MEDICAL CENTER </option>
                                                                <option value="0001424">
                                                                    PERALTA MEDICAL CLINIC </option>
                                                                <option value="0001194">
                                                                    PERILLO GENERAL HOSPITAL </option>
                                                                <option value="0001187">
                                                                    PERPETUAL HELP CLINIC </option>
                                                                <option value="0001205">
                                                                    PERPETUAL HELP GENERAL HOSPITAL </option>
                                                                <option value="0001244">
                                                                    PERPETUAL HELP GENERAL HOSPITAL </option>
                                                                <option value="0000828">
                                                                    PERPETUAL HELP HOSPITAL </option>
                                                                <option value="0001007">
                                                                    PERPETUAL HELP HOSPITAL </option>
                                                                <option value="0000724">
                                                                    PERPETUAL HELP HOSPITAL </option>
                                                                <option value="0000038">
                                                                    PERPETUAL SUCCOR HOSPITAL &amp; MAT. INC. </option>
                                                                <option value="0001829">
                                                                    PERPETUAL SUCCOR HOSPITAL AND MATERNITY, INC. </option>
                                                                <option value="0001317">
                                                                    PERPETUAL SUCCOUR HOSPITAL </option>
                                                                <option value="0001505">
                                                                    PERPETUAL SUCCOUR MEDICAL CLINIC </option>
                                                                <option value="0000726">
                                                                    PERPTUAL SUCCOUR HOSPITAL </option>
                                                                <option value="0001115">
                                                                    PETER-PAUL PHIL. CORP. HOSPITAL </option>
                                                                <option value="0000593">
                                                                    PHILIPPINE AIR FORCE GENERAL HOSPITAL </option>
                                                                <option value="0000572">
                                                                    PHILIPPINE CHILDREN`S MEDICAL CENTER </option>
                                                                <option value="0000569">
                                                                    PHILIPPINE HEART CENTER </option>
                                                                <option value="0000581">
                                                                    PHILIPPINE ORTHOPEDIC CENTER </option>
                                                                <option value="0001435">
                                                                    PHILLIPS MEMORIAL HOSPITAL </option>
                                                                <option value="0001349">
                                                                    PHILPHOS HOSPITAL </option>
                                                                <option value="0000022">
                                                                    Physician's Diagnostic Service Center </option>
                                                                <option value="0000046">
                                                                    PIDDIG MEDICARE AND COMMUNITY HOSPITAL </option>
                                                                <option value="01010118000030">
                                                                    PIDDIG RHU </option>
                                                                <option value="0000876">
                                                                    PIEDAD MEDICAL CLINIC </option>
                                                                <option value="0001685">
                                                                    PIGCAWAYAN MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000009">
                                                                    Pilar Medical and Maternity Clinic </option>
                                                                <option value="0000314">
                                                                    PILAR MEDICARE HOSPITAL </option>
                                                                <option value="0001569">
                                                                    PIMENTEL MEDICAL CLINIC </option>
                                                                <option value="0001780">
                                                                    PIÑAN DISTRICT HOSPITAL </option>
                                                                <option value="0001731">
                                                                    PINES CITY DOCTOR'S HOSPITAL </option>
                                                                <option value="0000436">
                                                                    PINTUYAN DISTRICT HOSPITAL </option>
                                                                <option value="0000615">
                                                                    PINUKPUK DISTRICT HOSPITAL </option>
                                                                <option value="0000249">
                                                                    PIO DURAN MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0000780">
                                                                    PIRA CLINIC AND HOSPITAL </option>
                                                                <option value="0000935">
                                                                    PLARIDEL COUNTY HOSPITAL </option>
                                                                <option value="0001813">
                                                                    PLARIDEL EMERGENCY HOSPITAL </option>
                                                                <option value="0000574">
                                                                    PNP GENERAL HOSPITAL (Annex) </option>
                                                                <option value="0000573">
                                                                    PNP GENERAL HOSPITAL (Main) </option>
                                                                <option value="0000034">
                                                                    PNP GENERAL HOSPITAL CAMP CRAME </option>
                                                                <option value="0000368">
                                                                    PNP HOSPITAL </option>
                                                                <option value="0000219">
                                                                    POLILLO MEDICARE HOSPITAL </option>
                                                                <option value="0001117">
                                                                    POLYCLINIC </option>
                                                                <option value="0000145">
                                                                    PORAC DISTRICT HOSPITAL </option>
                                                                <option value="0000934">
                                                                    POSCABLO CLINIC AND HOSPITAL </option>
                                                                <option value="0000610">
                                                                    POTIA DISTRICT HOSPITAL </option>
                                                                <option value="0000070">
                                                                    POZURRUBIO COMMUNITY HOSPITAL </option>
                                                                <option value="0001820">
                                                                    PREMIERE GENERAL HOSPITAL </option>
                                                                <option value="0000155">
                                                                    PRES. RAMON MAGSAYSAY MEMORIAL HOSP. </option>
                                                                <option value="0000562">
                                                                    PRES. SECURITY GROUP STATION HOSPITAL </option>
                                                                <option value="0000291">
                                                                    PRIETO DIAZ MUNICIPAL HOSPITAL </option>
                                                                <option value="0000094">
                                                                    PRIMO GAFFUD DISTRICT HOSPITAL </option>
                                                                <option value="0000809">
                                                                    PRUDENCIO MEDICAL CLINIC </option>
                                                                <option value="0001118">
                                                                    PUC HEALTH SERVICE, INC. </option>
                                                                <option value="0001717">
                                                                    PUERICULTURE CTR. MAT. &amp; CHILDREN'S HO </option>
                                                                <option value="0000477">
                                                                    PUERICULTURE LYING-IN MATERNITY HOSP. </option>
                                                                <option value="0000220">
                                                                    PUERTO PRINCESA CITY HOSPITAL </option>
                                                                <option value="0000221">
                                                                    PUERTO PRINCESA STATION HOSPITAL </option>
                                                                <option value="0000984">
                                                                    PUNZALAN MEDICAL CLINIC </option>
                                                                <option value="0000729">
                                                                    Q. C. MEDICAL CENTER AND COLLEGES, INC. </option>
                                                                <option value="0000728">
                                                                    Q.C. ST. AGNES GENERAL HOSPITAL </option>
                                                                <option value="0001119">
                                                                    QUEEN MARY HELP OF CHRISTIAN HOSPITAL </option>
                                                                <option value="0000862">
                                                                    QUEEN OF THE VALLEY GENERAL HOSPITAL </option>
                                                                <option value="0000578">
                                                                    QUEZON CITY GENERAL HOSPITAL </option>
                                                                <option value="0000580">
                                                                    QUEZON INSTITUTE </option>
                                                                <option value="0000032">
                                                                    QUEZON MEMORIAL HOSPITAL </option>
                                                                <option value="0000401">
                                                                    QUINAPONDAN COMMUNITY HOSPITAL </option>
                                                                <option value="0000098">
                                                                    QUIRINO MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0001818">
                                                                    QUIRINO MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0000108">
                                                                    QUIRINO PROVINCIAL HOSPITAL </option>
                                                                <option value="0000789">
                                                                    QUISILAN CLINIC </option>
                                                                <option value="0000851">
                                                                    R.C. NICOLAS CLINIC </option>
                                                                <option value="0001843">
                                                                    R.O. DIAGAN COOPERATIVE HOSPITAL </option>
                                                                <option value="0000963">
                                                                    R.S. CLINIC AND HOSPITAL </option>
                                                                <option value="0001356">
                                                                    R.T.R. MATERNITY &amp; PUERICULTURE CENTER </option>
                                                                <option value="0000265">
                                                                    RAGAY DISTRICT HOSPITAL </option>
                                                                <option value="0001610">
                                                                    RALOTA-LAGRADA MEDICAL CLINIC </option>
                                                                <option value="0001301">
                                                                    RAMIRO COMMUNITY HOSPITAL </option>
                                                                <option value="0000301">
                                                                    RAMON MAZA SR. DISTRICT HOSPITAL </option>
                                                                <option value="0000871">
                                                                    RAMON MEDICAL CLINIC </option>
                                                                <option value="0000322">
                                                                    RAMON TABIANA MEMORIAL DISTRICT HOSP. </option>
                                                                <option value="0000730">
                                                                    RAMONES GENERAL HOSPITAL </option>
                                                                <option value="0000825">
                                                                    RAMOS FAMILY CLINIC </option>
                                                                <option value="0000998">
                                                                    RAMOS GENERAL HOSPITAL </option>
                                                                <option value="0001601">
                                                                    RAMOS MEDICAL CLINIC </option>
                                                                <option value="0000822">
                                                                    RAMOS NURSERY AND CHILDREN'S HOSPITAL </option>
                                                                <option value="0000773">
                                                                    RANADA HOSPITAL </option>
                                                                <option value="0000252">
                                                                    RAPU-RAPU DISTRICT HOSPITAL </option>
                                                                <option value="0000991">
                                                                    RAYOS-VALENTIN HOSPITAL </option>
                                                                <option value="0001788">
                                                                    RECEL MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0001386">
                                                                    REDOBLE MEDICAL CLINIC </option>
                                                                <option value="0001851">
                                                                    REGION I MEDICAL CENTER </option>
                                                                <option value="0001672">
                                                                    RELANO MEDICAL CLINIC </option>
                                                                <option value="0001663">
                                                                    RENIEDO MEDICAL CLINIC </option>
                                                                <option value="0000325">
                                                                    REP. PEDRO TRONO MEMORIAL HOSPITAL </option>
                                                                <option value="0001570">
                                                                    REROMA MEDICAL CLINIC </option>
                                                                <option value="0000589">
                                                                    RESEARCH INSTITUTE FOR TROPICAL MEDICINE </option>
                                                                <option value="0001177">
                                                                    RETUERMA GENERAL HOSPITAL </option>
                                                                <option value="0001394">
                                                                    REVELO COMMUNITY CLINIC </option>
                                                                <option value="0001461">
                                                                    REVELO MEDICAL CLINIC </option>
                                                                <option value="0000787">
                                                                    REYES CLINIC AND HOSPITAL </option>
                                                                <option value="0000379">
                                                                    RICARDO L. MANINGO MEMORIAL HOSPITAL </option>
                                                                <option value="0001575">
                                                                    RICARDO LIMSO GENERAL HOSPITAL </option>
                                                                <option value="0000147">
                                                                    RICARDO P. RODRIGUEZ MEMORIAL HOSPITAL </option>
                                                                <option value="0000965">
                                                                    RICARDO SONGCO MEDICAL CLINIC </option>
                                                                <option value="0001201">
                                                                    RICO'S HOSPITAL </option>
                                                                <option value="0001120">
                                                                    RIO TUBA NICKEL MINING CORP. HOSPITAL </option>
                                                                <option value="0000223">
                                                                    RIZAL COMMUNITY HOSPITAL </option>
                                                                <option value="0000566">
                                                                    RIZAL MEDICAL CENTER </option>
                                                                <option value="0000454">
                                                                    RIZAL MEMORIAL HOSPITAL </option>
                                                                <option value="0000015">
                                                                    Rizal Provincial Hospital </option>
                                                                <option value="0001495">
                                                                    ROA MEDICAL CLINIC </option>
                                                                <option value="0001450">
                                                                    RODRIGO FAMILY HOSPITAL </option>
                                                                <option value="0000123">
                                                                    ROGACIANO H. MERCADO MEMORIAL HOSP. </option>
                                                                <option value="0001684">
                                                                    ROLDAN MEDICAL CLINIC </option>
                                                                <option value="0001121">
                                                                    ROLLOQUI MATERNITY CLINIC </option>
                                                                <option value="0000139">
                                                                    ROMANA PANGAN DISTRICT HOSPITAL </option>
                                                                <option value="0000225">
                                                                    ROMBLON DISTRICT HOSPITAL </option>
                                                                <option value="0000226">
                                                                    ROMBLON PROVINCIAL HOSPITAL </option>
                                                                <option value="0000731">
                                                                    RONN-CARMEL HOSPITAL </option>
                                                                <option value="0000940">
                                                                    ROQUERO GENERAL HOSPITAL </option>
                                                                <option value="0000060">
                                                                    ROSARIO DISTRICT HOSPITAL </option>
                                                                <option value="0000974">
                                                                    ROSARIO MEMORIAL HOSPITAL </option>
                                                                <option value="0000824">
                                                                    ROSARIO-TRINIO MEDICAL CLINIC </option>
                                                                <option value="0001734">
                                                                    ROSEVILLE PARK CENTER </option>
                                                                <option value="0000227">
                                                                    ROXAS DISTRICT HOSPITAL </option>
                                                                <option value="0000316">
                                                                    ROXAS MEMORIAL PROVINCIAL HOSPITAL </option>
                                                                <option value="0001122">
                                                                    RYANN ANTHONY HOSPITAL </option>
                                                                <option value="0000732">
                                                                    SABATER HOSPITAL </option>
                                                                <option value="0000978">
                                                                    SACRED HEART CLINIC </option>
                                                                <option value="0001550">
                                                                    SACRED HEART CLINIC </option>
                                                                <option value="0001185">
                                                                    SACRED HEART CLINIC AND HOSPITAL </option>
                                                                <option value="0000917">
                                                                    SACRED HEART HOSPITAL </option>
                                                                <option value="0001846">
                                                                    SACRED HEART HOSPITAL </option>
                                                                <option value="0001238">
                                                                    SACRED HEART MEDICAL CLINIC </option>
                                                                <option value="0000900">
                                                                    SAGRADA FAMILIA HOSPITAL </option>
                                                                <option value="0001508">
                                                                    SAGULILI MEDICAL CLINIC </option>
                                                                <option value="0001593">
                                                                    SAINT ANTHONY GENERAL HOSPITAL </option>
                                                                <option value="0001842">
                                                                    SAINT PAUL HOSPITAL </option>
                                                                <option value="0001271">
                                                                    SAINT PAUL`S HOSPITAL </option>
                                                                <option value="0001298">
                                                                    SALADA COMMUNITY HOSPITAL </option>
                                                                <option value="0000961">
                                                                    SALANGAD MATERNITY &amp; GENERAL HOSPITAL </option>
                                                                <option value="0001124">
                                                                    SALAZAR POLYCLINIC </option>
                                                                <option value="0000050">
                                                                    SALCEDO MEDICARE &amp; COMMUNITY HOSPITAL </option>
                                                                <option value="0001234">
                                                                    SALVACION CLINIC </option>
                                                                <option value="0000426">
                                                                    SAMAR PROVINCIAL HOSPITAL </option>
                                                                <option value="0000228">
                                                                    SAMPALOC MEDICARE HOSPITAL </option>
                                                                <option value="0001379">
                                                                    SAMSON MEDICAL CLINIC </option>
                                                                <option value="0000914">
                                                                    SAN AGUSTIN HOSPITAL </option>
                                                                <option value="0001125">
                                                                    SAN AGUSTIN MEDICAL CLINIC </option>
                                                                <option value="0000229">
                                                                    SAN ANDRES MUNICIPAL HOSPITAL </option>
                                                                <option value="0000834">
                                                                    SAN ANTONIO DE PADUA HOSPITAL </option>
                                                                <option value="0000134">
                                                                    SAN ANTONIO DISTRICT HOSPITAL </option>
                                                                <option value="0000423">
                                                                    SAN ANTONIO DISTRICT HOSPITAL </option>
                                                                <option value="0001126">
                                                                    SAN ANTONIO GENERAL HOSPITAL </option>
                                                                <option value="0001127">
                                                                    SAN ANTONIO MEDICAL CENTER </option>
                                                                <option value="0000096">
                                                                    SAN ANTONIO MUNICIPAL HOSPITAL </option>
                                                                <option value="0000342">
                                                                    SAN CARLOS CITY HOSPITAL </option>
                                                                <option value="0001286">
                                                                    SAN CARLOS MILLING CO. HOSPITAL </option>
                                                                <option value="0001285">
                                                                    SAN CARLOS PLANTERS' &amp; LABORERS' HOSP. </option>
                                                                <option value="0000836">
                                                                    SAN CARLOS SURGICAL &amp; MED. CLINIC </option>
                                                                <option value="0000936">
                                                                    SAN DIEGO GENERAL HOSPITAL </option>
                                                                <option value="0001832">
                                                                    SAN FERNANDINO HOSPITAL </option>
                                                                <option value="0001128">
                                                                    SAN GERONIMO MED. &amp; ORTHOPEDIC CLINIC </option>
                                                                <option value="0001129">
                                                                    SAN ISIDRO HOSPITAL </option>
                                                                <option value="0001620">
                                                                    SAN ISIDRO MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000230">
                                                                    SAN JOSE DISTRICT HOSPITAL </option>
                                                                <option value="0000231">
                                                                    SAN JOSE DISTRICT HOSPITAL </option>
                                                                <option value="0000232">
                                                                    SAN JOSE DISTRICT HOSPITAL </option>
                                                                <option value="0000770">
                                                                    SAN JOSE GENERAL HOSPITAL </option>
                                                                <option value="0000266">
                                                                    SAN JOSE MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000733">
                                                                    SAN JUAN DE DIOS EDUCATIONAL FOUNDATION </option>
                                                                <option value="0000233">
                                                                    SAN JUAN DISTRICT HOSPITAL </option>
                                                                <option value="0001824">
                                                                    SAN JUAN DOCTORS HOSPITAL </option>
                                                                <option value="0001749">
                                                                    SAN JUAN MEDICAL CLINIC </option>
                                                                <option value="0001130">
                                                                    SAN JUAN- LEONGSON GENERAL HOSPITAL </option>
                                                                <option value="0000555">
                                                                    SAN LAZARO HOSPITAL </option>
                                                                <option value="0000964">
                                                                    SAN LORENZO CLINIC </option>
                                                                <option value="0000734">
                                                                    SAN LORENZO GENERAL HOSPITAL </option>
                                                                <option value="0000735">
                                                                    SAN LORENZO HOSPITAL </option>
                                                                <option value="0000909">
                                                                    SAN LORENZO RUIZ HOME CARE HOSPITAL </option>
                                                                <option value="0000148">
                                                                    SAN LUIS DISTRICT HOSPITAL </option>
                                                                <option value="0000157">
                                                                    SAN MARCELINO DISTRICT HOSPITAL </option>
                                                                <option value="0000100">
                                                                    SAN MARIANO MEDICARE COMMUNITY HOSP. </option>
                                                                <option value="0000122">
                                                                    SAN MIGUEL DISTRICT HOSPITAL </option>
                                                                <option value="0000234">
                                                                    SAN PABLO CITY DISTRICT HOSPITAL </option>
                                                                <option value="0001131">
                                                                    SAN PABLO COLLEGES MEDICAL CENTER </option>
                                                                <option value="0001132">
                                                                    SAN PABLO DOCTORS HOSPITAL </option>
                                                                <option value="0001573">
                                                                    SAN PEDRO HOSPITAL OF DAVAO CITY </option>
                                                                <option value="0001133">
                                                                    SAN PEDRO MATERNITY CLINIC </option>
                                                                <option value="0000235">
                                                                    SAN PEDRO MUNICIPAL HOSPITAL </option>
                                                                <option value="0001660">
                                                                    SAN RAFAEL MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0001805">
                                                                    SAN RAMON MUNICIPAL HOSPITAL </option>
                                                                <option value="0000920">
                                                                    SAN ROQUE HOSPITAL </option>
                                                                <option value="0000736">
                                                                    SAN ROQUE MEDICAL CLINIC </option>
                                                                <option value="0001556">
                                                                    SAN ROQUE MEDICAL CLINIC </option>
                                                                <option value="0000737">
                                                                    SANCTISSIMO ROSARIO GENERAL HOSPITAL </option>
                                                                <option value="0001730">
                                                                    SANTA MONICA HOSPITAL </option>
                                                                <option value="0000903">
                                                                    SANTIAGO HOSPITAL </option>
                                                                <option value="0001425">
                                                                    SANTIAGO MEDICAL CLINIC </option>
                                                                <option value="0000946">
                                                                    SANTIAGO PEDIATRIC HOSPITAL </option>
                                                                <option value="0001837">
                                                                    SANTISSIMA TRINIDAD HOSPITAL OF DAET </option>
                                                                <option value="0000738">
                                                                    SANTO TOMAS UNIVERSITY HOSPITAL </option>
                                                                <option value="0000916">
                                                                    SANTOS CLINIC (MALOLOS), INC. </option>
                                                                <option value="0000771">
                                                                    SANTOS CLINIC AND HOSPITAL </option>
                                                                <option value="0000915">
                                                                    SANTOS GENERAL HOSP. OF MALOLOS, INC. </option>
                                                                <option value="0000739">
                                                                    SANTOS MEDICAL CLINIC AND GENERAL HOSP </option>
                                                                <option value="0000121">
                                                                    SAPANG PALAY DISTRICT HOSPITAL </option>
                                                                <option value="0000886">
                                                                    SAQUING'S CLINIC </option>
                                                                <option value="0000333">
                                                                    SARA DISTRICT HOSPITAL </option>
                                                                <option value="0001677">
                                                                    SARA MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000516">
                                                                    SARANGANI MUNICIPAL HOSPITAL </option>
                                                                <option value="01010121000030">
                                                                    SARRAT RHU </option>
                                                                <option value="0001590">
                                                                    SAVER'S HOSPITAL </option>
                                                                <option value="0000412">
                                                                    SCHISTOSOMIASIS HOSPITAL </option>
                                                                <option value="0000988">
                                                                    SE¥OR STO. NI¥O HOSPITAL </option>
                                                                <option value="0000740">
                                                                    SEAMEN`S HOSPITAL </option>
                                                                <option value="0001266">
                                                                    SEMIRARA COAL MINES CORP. GEN. HOSP. </option>
                                                                <option value="0000309">
                                                                    SEN. GERARDO ROXAS DISTRICT HOSPITAL </option>
                                                                <option value="0000459">
                                                                    SERGIO OSME¥A SR. MUNICIPAL HOSPITAL </option>
                                                                <option value="0000364">
                                                                    SEVERO VERALLO MEMORIAL HOSPITAL </option>
                                                                <option value="0001378">
                                                                    SIASOYCO MEDICAL CLINIC </option>
                                                                <option value="0000390">
                                                                    SIATON DISTRICT HOSPITAL </option>
                                                                <option value="0000461">
                                                                    SIBUCO MUNICIPAL HOSPITAL </option>
                                                                <option value="0000462">
                                                                    SIBUTAD MUNICIPAL HOSPITAL </option>
                                                                <option value="0001134">
                                                                    SILANG GENERAL HOSPITAL </option>
                                                                <option value="0001338">
                                                                    SILLIMAN UNIVERSITY MEDICAL CENTER </option>
                                                                <option value="0001135">
                                                                    SILVA'S CLINIC </option>
                                                                <option value="0001419">
                                                                    SIMBULAN STO. NI¥O HOSPITAL </option>
                                                                <option value="0000052">
                                                                    SINAIT DISTRICT HOSPITAL </option>
                                                                <option value="0001605">
                                                                    SINAWILAN MEDICAL CLINIC </option>
                                                                <option value="0001382">
                                                                    SINDANGAN COMMUNITY CLINIC, INC. </option>
                                                                <option value="0000460">
                                                                    SINDANGAN DISTRICT HOSPITAL </option>
                                                                <option value="0000993">
                                                                    SING CLINIC AND HOSPITAL </option>
                                                                <option value="0001413">
                                                                    SINGIDAS MEDICAL CLINIC </option>
                                                                <option value="0000463">
                                                                    SIOCON DISTRICT HOSPITAL </option>
                                                                <option value="0001288">
                                                                    SIPALAY MINE HOSPITAL </option>
                                                                <option value="0000267">
                                                                    SIPOCOT DISTRICT HOSPITAL </option>
                                                                <option value="0000392">
                                                                    SIQUIJOR PROVINCIAL HOSPITAL </option>
                                                                <option value="0000490">
                                                                    SM LAO MEMORIAL CITY GENERAL HOSPITAL </option>
                                                                <option value="01010120000030">
                                                                    SN NICOLAS RHU </option>
                                                                <option value="0000437">
                                                                    SOGOD DISTRICT HOSPITAL </option>
                                                                <option value="0000873">
                                                                    SOLLER MEDICAL CLINIC </option>
                                                                <option value="0001136">
                                                                    SOLOMON'S CLINIC </option>
                                                                <option value="0001516">
                                                                    SOMOSO GENERAL HOSPITAL </option>
                                                                <option value="0001796">
                                                                    SORILLA MEDICAL &amp; MATERNITY CLINIC </option>
                                                                <option value="0001688">
                                                                    SORILLA MEDICAL AND MATERNITY CLINIC </option>
                                                                <option value="0001253">
                                                                    SORSOGON MED. MISSION GROUP HOSPITAL </option>
                                                                <option value="0000292">
                                                                    SORSOGON PROVINCIAL HOSPITAL </option>
                                                                <option value="0000035">
                                                                    SOUTH SUPERHIGHWAY MEDICAL CENTER </option>
                                                                <option value="0000741">
                                                                    SOUTH SUPERHIGHWAY MEDICAL CENTER </option>
                                                                <option value="0000053">
                                                                    SOUTHERN ILOCOS SUR DISTRICT HOSPITAL </option>
                                                                <option value="0000102">
                                                                    SOUTHERN ISABELA DISTRICT HOSPITAL </option>
                                                                <option value="0000434">
                                                                    SOUTHERN LEYTE PROVINCIAL HOSPITAL </option>
                                                                <option value="0000397">
                                                                    SOUTHERN SAMAR DISTRICT HOSPITAL </option>
                                                                <option value="0001319">
                                                                    SOUTHWESTERN UNIVERSITY MED. CENTER </option>
                                                                <option value="0000815">
                                                                    SPECIALIST GROUP HOSPITAL AND TRAUMA CENTER </option>
                                                                <option value="0001720">
                                                                    SPENCER'S FOUNDATION HOSPITAL </option>
                                                                <option value="0001397">
                                                                    SS LUMAPAS HOSPITAL </option>
                                                                <option value="0001137">
                                                                    ST. ANDREW HOSPITAL </option>
                                                                <option value="0001441">
                                                                    ST. ANN MEDICAL HOSPITAL </option>
                                                                <option value="0001755">
                                                                    ST. ANNE CLINIC </option>
                                                                <option value="0001764">
                                                                    ST. ANNE EMERGENCY HOSPITAL (MDO), INC. </option>
                                                                <option value="0001138">
                                                                    ST. ANNE GENERAL HOSPITAL, INC. </option>
                                                                <option value="0001269">
                                                                    ST. ANTHONY COLLEGE HOSPITAL </option>
                                                                <option value="0001243">
                                                                    ST. ANTHONY HOSPITAL </option>
                                                                <option value="0001651">
                                                                    ST. ANTHONY MATERNAL AND CHILD CLINIC </option>
                                                                <option value="0001139">
                                                                    ST. ANTHONY POLYMEDIC HOSPITAL </option>
                                                                <option value="0001840">
                                                                    ST. AUGUSTINE MAT. AND CHILDREN`S HOSP. AND PUER. CENTER </option>
                                                                <option value="0000837">
                                                                    ST. BLAS MATERNITY AND MEDICAL CLINIC </option>
                                                                <option value="0000966">
                                                                    ST. CATHERINE MAT. AND CHILD CARE CLIN </option>
                                                                <option value="0001140">
                                                                    ST. CECILIA'S HOSPITAL </option>
                                                                <option value="0001443">
                                                                    ST. CLAIRE HOSPITAL </option>
                                                                <option value="0001207">
                                                                    ST. CLAIRE MEDICAL CLINIC </option>
                                                                <option value="0001807">
                                                                    ST. CLARE`S MEDICAL CENTER </option>
                                                                <option value="0001141">
                                                                    ST. DOMINIC MEDICAL CENTER, INC. </option>
                                                                <option value="0001624">
                                                                    ST. ELIZABETH HOSPITAL </option>
                                                                <option value="0001406">
                                                                    ST. FRANCIS CLINIC </option>
                                                                <option value="0001224">
                                                                    ST. FRANCIS GENERAL HOSPITAL </option>
                                                                <option value="0001263">
                                                                    ST. GABRIEL HOSPITAL </option>
                                                                <option value="0000954">
                                                                    ST. ISIDORE GENERAL HOSPITAL </option>
                                                                <option value="0001724">
                                                                    ST. JAMES CLINIC </option>
                                                                <option value="0000791">
                                                                    ST. JAMES HOSPITAL </option>
                                                                <option value="0001501">
                                                                    ST. JAMES HOSPITAL AND MEDICAL CLINIC </option>
                                                                <option value="0001142">
                                                                    ST. JAMES HOSPITAL, INC. </option>
                                                                <option value="0001143">
                                                                    ST. JAMES THE GREATER HOSPITAL </option>
                                                                <option value="0001296">
                                                                    ST. JOHN COMMUNITY HOSPITAL </option>
                                                                <option value="0001383">
                                                                    ST. JOHN GENERAL HOSPITAL I </option>
                                                                <option value="0001415">
                                                                    ST. JOHN GENERAL HOSPITAL II </option>
                                                                <option value="0001559">
                                                                    ST. JOHN HOSPITAL </option>
                                                                <option value="0001220">
                                                                    ST. JOHN HOSPITAL </option>
                                                                <option value="0001231">
                                                                    ST. JOHN HOSPITAL, INC. </option>
                                                                <option value="0000950">
                                                                    ST. JOHN MEDICAL AND MATERNITY CLINIC </option>
                                                                <option value="0001250">
                                                                    ST. JOHN MEDICAL CLINIC </option>
                                                                <option value="0001213">
                                                                    ST. JOHN THE APOSTLE HOSPITAL </option>
                                                                <option value="0001144">
                                                                    ST. JOSEPH CLINIC </option>
                                                                <option value="0001414">
                                                                    ST. JOSEPH CLINIC </option>
                                                                <option value="0001145">
                                                                    ST. JOSEPH FAMILY HOSPITAL OF CABUYAO </option>
                                                                <option value="0001282">
                                                                    ST. JOSEPH HOSPITAL </option>
                                                                <option value="0000867">
                                                                    ST. JOSEPH HOSPITAL </option>
                                                                <option value="0001673">
                                                                    ST. JOSEPH HOSPITAL &amp; DIAGNOSTIC CENTE </option>
                                                                <option value="0001757">
                                                                    ST. JOSEPH MEDICAL CLINIC </option>
                                                                <option value="0001242">
                                                                    ST. JOSEPH MEDICAL CLINIC </option>
                                                                <option value="0001436">
                                                                    ST. JOSEPH SOUTHERN BUKIDNON HOSP. </option>
                                                                <option value="0001366">
                                                                    ST. JUDE CLINIC </option>
                                                                <option value="0001640">
                                                                    ST. JUDE CLINIC </option>
                                                                <option value="0001218">
                                                                    ST. JUDE CLINIC AND HOSPITAL </option>
                                                                <option value="0001421">
                                                                    ST. JUDE FAMILY CLINIC </option>
                                                                <option value="0001146">
                                                                    ST. JUDE FAMILY HOSPITAL </option>
                                                                <option value="0000742">
                                                                    ST. JUDE GENERAL HOSPITAL AND MEDICAL CENTER, INC. </option>
                                                                <option value="0001004">
                                                                    ST. JUDE HOSPITAL </option>
                                                                <option value="0001214">
                                                                    ST. JUDE HOSPITAL </option>
                                                                <option value="0000841">
                                                                    ST. JUDE MEDICAL AND CHILD CLINIC </option>
                                                                <option value="0001255">
                                                                    ST. JUDE MEDICAL CLINIC </option>
                                                                <option value="0001147">
                                                                    ST. JUDE MEDICAL CLINIC </option>
                                                                <option value="0001388">
                                                                    ST. JUDE MEDICAL CLINIC </option>
                                                                <option value="0001725">
                                                                    ST. JUDE MEDICAL CLINIC </option>
                                                                <option value="0001500">
                                                                    ST. JUDE MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0001264">
                                                                    ST. JUDE'S HOSPITAL, INC. </option>
                                                                <option value="0000743">
                                                                    ST. LOUIS GENERAL HOSPITAL </option>
                                                                <option value="0001735">
                                                                    ST. LOUIS UNIVERSITY HOSP OF THE SACRED HEART </option>
                                                                <option value="0001747">
                                                                    ST. LUKE'S EMERGENCY HOSPITAL </option>
                                                                <option value="0000744">
                                                                    ST. LUKE`S MEDICAL CENTER </option>
                                                                <option value="0001148">
                                                                    ST. MAGDALENE HOSPITAL </option>
                                                                <option value="0001149">
                                                                    ST. MARK'S HOSPITAL </option>
                                                                <option value="0001402">
                                                                    ST. MARTIN CLINIC </option>
                                                                <option value="0000745">
                                                                    ST. MARTIN DE PORRES CHARITY HOSPITAL </option>
                                                                <option value="0000785">
                                                                    ST. MARTIN DE PORRES CLINIC &amp; HOSP. </option>
                                                                <option value="0001459">
                                                                    ST. MARTIN DE PORRES GENERAL HOSP. </option>
                                                                <option value="0000999">
                                                                    ST. MARTIN DE PORRES HOSPITAL </option>
                                                                <option value="0001246">
                                                                    ST. MARTIN DE PORRES MEDICAL CLINIC </option>
                                                                <option value="0001545">
                                                                    ST. MARTIN DE PORRES MEDICAL CLINIC </option>
                                                                <option value="0001150">
                                                                    ST. MARTIN GENERAL HOSPITAL </option>
                                                                <option value="0000908">
                                                                    ST. MARTIN OF TOURS HOSPITAL </option>
                                                                <option value="0001474">
                                                                    ST. MARY GENERAL HOSPITAL </option>
                                                                <option value="0000943">
                                                                    ST. MARY'S HOSPITAL </option>
                                                                <option value="0001151">
                                                                    ST. MARY'S HOSPITAL </option>
                                                                <option value="0001647">
                                                                    ST. MARY'S HOSPITAL OF ILIGAN, INC. </option>
                                                                <option value="0001561">
                                                                    ST. MARY'S MEDICAL CLINIC AND HOSPITAL </option>
                                                                <option value="0000875">
                                                                    ST. MATTHEW'S HOSPITAL </option>
                                                                <option value="0000922">
                                                                    ST. MICHAEL CLINIC AND MAT. HOSPITAL </option>
                                                                <option value="0000925">
                                                                    ST. MICHAEL FAMILY HOSPITAL </option>
                                                                <option value="0001171">
                                                                    ST. MICHAEL GENERAL HOSPITAL </option>
                                                                <option value="0001212">
                                                                    ST. MICHAEL HOSPITAL </option>
                                                                <option value="0001531">
                                                                    ST. MICHAEL MEDICAL CLINIC &amp; PHARMACY </option>
                                                                <option value="0001661">
                                                                    ST. MICHAEL MEDICAL CLINIC AND HOSPITA </option>
                                                                <option value="0001152">
                                                                    ST. PATRICK'S HOSP. MEDICAL CENTER, IN </option>
                                                                <option value="0000854">
                                                                    ST. PAUL HOSPITAL </option>
                                                                <option value="0001834">
                                                                    ST. PAUL HOSPITAL BULACAN, INC. </option>
                                                                <option value="0001470">
                                                                    ST. PAUL MEDICAL CLINIC </option>
                                                                <option value="0000905">
                                                                    ST. PAUL'S HOSPITAL </option>
                                                                <option value="0000892">
                                                                    ST. PETER GENERAL HOSPITAL </option>
                                                                <option value="0001153">
                                                                    ST. PETER GENERAL HOSPITAL </option>
                                                                <option value="0001217">
                                                                    ST. RAPHAEL HOSPITAL </option>
                                                                <option value="0000830">
                                                                    ST. RAYMUND DE PE¥AFORT GEN. HOSP. </option>
                                                                <option value="0000987">
                                                                    ST. ROSE HOSPITAL </option>
                                                                <option value="0001748">
                                                                    ST. THEODORE'S HOSPITAL </option>
                                                                <option value="0001729">
                                                                    ST. THERESA WELLNESS CENTER </option>
                                                                <option value="0001465">
                                                                    ST. THERESE HOSPITAL </option>
                                                                <option value="0000746">
                                                                    ST. THERESE HOSPITAL, INC. </option>
                                                                <option value="0001540">
                                                                    ST. THERESE MATERNITY CLINIC </option>
                                                                <option value="0000810">
                                                                    ST. THOMAS AQUINAS HOSPITAL </option>
                                                                <option value="0000747">
                                                                    ST. VICTORIA HOSPITAL </option>
                                                                <option value="0001154">
                                                                    ST. VINCENT DE PAUL HOSPITAL </option>
                                                                <option value="0000911">
                                                                    ST. VINCENT EENT HOSPITAL </option>
                                                                <option value="0001292">
                                                                    ST. VINCENT FERRER HOSPITAL </option>
                                                                <option value="0001245">
                                                                    ST. VINCENT HOSPITAL </option>
                                                                <option value="0000748">
                                                                    ST. VINCENT HOSPITAL </option>
                                                                <option value="0001481">
                                                                    ST. VINCENT HOSPITAL </option>
                                                                <option value="0000749">
                                                                    STA. ANA MEDICAL CLINIC </option>
                                                                <option value="0001839">
                                                                    STA. CLARA DE MONTEFALCO HOSPITAL, INC. </option>
                                                                <option value="0000236">
                                                                    STA. CRUZ COMMUNITY HOSPITAL </option>
                                                                <option value="0000237">
                                                                    STA. CRUZ DISTRICT HOSPITAL </option>
                                                                <option value="0000932">
                                                                    STA. DOLOROSA COUNTY HOSPITAL </option>
                                                                <option value="0001376">
                                                                    STA. ISABEL GENERAL HOSPITAL </option>
                                                                <option value="0000051">
                                                                    STA. LUCIA DISTRICT HOSPITAL </option>
                                                                <option value="0000750">
                                                                    STA. LUCIA GENERAL HOSPITAL </option>
                                                                <option value="0000624">
                                                                    STA. MARCELA MEDICARE AND COMMUNITY HOSPITAL </option>
                                                                <option value="0001614">
                                                                    STA. MARIA MEDICAL CLINIC </option>
                                                                <option value="0001155">
                                                                    STA. MARIA VILLAGE CLINIC </option>
                                                                <option value="0000751">
                                                                    STA. MONICA HOSPITAL </option>
                                                                <option value="0000989">
                                                                    STA. RITA CLINIC </option>
                                                                <option value="0000752">
                                                                    STA. RITA DE BACLARAN HOSPITAL </option>
                                                                <option value="0000753">
                                                                    STA. RITA HOSPITAL </option>
                                                                <option value="0000374">
                                                                    STA. ROSA COMMUNITY HOSPITAL </option>
                                                                <option value="0000776">
                                                                    STA. TERESITA CLINIC </option>
                                                                <option value="0000754">
                                                                    STA. TERESITA GENERAL HOSPITAL </option>
                                                                <option value="0000755">
                                                                    STA. TERESITA GENERAL HOSPITAL </option>
                                                                <option value="0001639">
                                                                    STA. TERESITA HOSPITAL </option>
                                                                <option value="0001005">
                                                                    STA. VERONICA HOSPITAL </option>
                                                                <option value="0000811">
                                                                    STELLA MARIS HOSPITAL </option>
                                                                <option value="0000910">
                                                                    STO NIÑO HOSPITAL </option>
                                                                <option value="0001156">
                                                                    STO NIÑO MEDICAL CLINIC </option>
                                                                <option value="0000135">
                                                                    STO. DOMINGO DISTRICT HOSPITAL </option>
                                                                <option value="0000972">
                                                                    STO. NIÑO CLINIC </option>
                                                                <option value="0000756">
                                                                    STO. NIÑO DE CEBU MATERNITY CLINIC </option>
                                                                <option value="0001736">
                                                                    STO. NIÑO DE JESUS MEDICAL CENTER </option>
                                                                <option value="0001828">
                                                                    STO. NIÑO DE SAN ANTONIO AND GENERAL HOSPITAL </option>
                                                                <option value="0000757">
                                                                    STO. NIÑO DE SAN ANTONIO MAT. AND GEN. HOSPITAL </option>
                                                                <option value="0001641">
                                                                    STO. NIÑO DOCTOR'S CLINIC AND HOSPITAL </option>
                                                                <option value="0001674">
                                                                    STO. NIÑO HOSPITAL </option>
                                                                <option value="0000788">
                                                                    STO. NIÑO HOSPITAL </option>
                                                                <option value="0000826">
                                                                    STO. NIÑO HOSPITAL </option>
                                                                <option value="0001209">
                                                                    STO. NIÑO HOSPITAL </option>
                                                                <option value="0001742">
                                                                    STO. NIÑO HOSPITAL OF PHILEX MINING CORP. </option>
                                                                <option value="0001503">
                                                                    STO. NIÑO MATERNITY AND MEDICAL CLINIC </option>
                                                                <option value="0001405">
                                                                    STO. NIÑO MEDICAL CLINIC </option>
                                                                <option value="0001157">
                                                                    STO. ROSARIO HOSPITAL </option>
                                                                <option value="0000002">
                                                                    STO. ROSARIO MATERNITY and MEDICAL CLINIC </option>
                                                                <option value="0001566">
                                                                    STO. ROSARIO MEDICAL CLINIC </option>
                                                                <option value="0001158">
                                                                    STO. TOMAS GENERAL HOSPITAL </option>
                                                                <option value="0001159">
                                                                    STS. FRANCIS AND PAUL GENERAL HOSPITAL </option>
                                                                <option value="0001261">
                                                                    STS. PETER AND PAUL HOSPITAL </option>
                                                                <option value="0000238">
                                                                    SUBAY MUNICIPAL HOSPITAL </option>
                                                                <option value="0001845">
                                                                    SUBIC LEGEND HEALTH AND MEDICAL CENTER </option>
                                                                <option value="0000781">
                                                                    SUERO CLINIC AND HOSPITAL </option>
                                                                <option value="0001446">
                                                                    SUGAR INDUSTRIAL COMMUNITY HOSPITAL </option>
                                                                <option value="0001615">
                                                                    SULOP MEDICAL CLINIC </option>
                                                                <option value="0001790">
                                                                    SULTAN KUDARAT DOCTORS HOSPITAL </option>
                                                                <option value="0001794">
                                                                    SULTAN KUDARAT PROVINCIAL HOSPITAL </option>
                                                                <option value="0001776">
                                                                    SULU PROVINCIAL HOSPITAL </option>
                                                                <option value="0000483">
                                                                    SUMILAO RHU AND FP CENTER </option>
                                                                <option value="0001588">
                                                                    SUNGA HOSPITAL </option>
                                                                <option value="0000758">
                                                                    SUNRISE HILL THERAPEUTIC COMMUNITY </option>
                                                                <option value="0001762">
                                                                    SURIGAO MEDICAL CENTER </option>
                                                                <option value="0001638">
                                                                    T' BOLI EVANGELICAL CLINIC, INC. </option>
                                                                <option value="0001445">
                                                                    TABANERA MEDICAL HOSPITAL </option>
                                                                <option value="0000414">
                                                                    TABANGO COMMUNITY HOSPITAL </option>
                                                                <option value="0000239">
                                                                    TABLAS ISLAND DISTRICT HOSPITAL </option>
                                                                <option value="0001745">
                                                                    TABUK FAMILY CLINIC &amp; HOSPITAL </option>
                                                                <option value="0000416">
                                                                    TACLOBAN CITY HOSPITAL </option>
                                                                <option value="0000402">
                                                                    TAFT DISTRICT HOSPITAL </option>
                                                                <option value="0001387">
                                                                    TAGALOGUIN CLINIC </option>
                                                                <option value="0000240">
                                                                    TAGAYTAY MEDICARE HOSPITAL </option>
                                                                <option value="0001303">
                                                                    TAGBILARAN COMMUNITY HOSPITAL </option>
                                                                <option value="0001306">
                                                                    TAGBILARAN PUER. CENTER. &amp; MAT. HOUSE </option>
                                                                <option value="0000759">
                                                                    TAGIG DOCTORS HOSPITAL </option>
                                                                <option value="0000241">
                                                                    TAGKAWAYAN DISTRICT HOSPITAL </option>
                                                                <option value="0000859">
                                                                    TAGORDA'S MEDICAL CLINIC </option>
                                                                <option value="0001769">
                                                                    TAGUIG DOCTORS HOSPITAL </option>
                                                                <option value="0001534">
                                                                    TAGUM DOCTORS' HOSPITAL </option>
                                                                <option value="0001536">
                                                                    TAGUM HOLY SPIRIT HOSPITAL </option>
                                                                <option value="0001804">
                                                                    TALAKAG MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000501">
                                                                    TALISAYAN DISTRICT HOSPITAL </option>
                                                                <option value="0000997">
                                                                    TALON GENERAL HOSPITAL </option>
                                                                <option value="0000472">
                                                                    TAMBULIG MUNICIPAL HOSPITAL </option>
                                                                <option value="0001608">
                                                                    TAMONDONG-DELOS CIENTOS MEDICAL CLINIC </option>
                                                                <option value="0001160">
                                                                    TANAY COMMUNITY HOSPITAL </option>
                                                                <option value="0001161">
                                                                    TANAY GENERAL HOSPITAL </option>
                                                                <option value="0001182">
                                                                    TANCHULING HOSPITAL </option>
                                                                <option value="0001476">
                                                                    TANHO MEDICAL CLINIC </option>
                                                                <option value="0001162">
                                                                    TANZA FAMILY GENERAL HOSPITAL </option>
                                                                <option value="0000317">
                                                                    TAPAZ DISTRICT HOSPITAL </option>
                                                                <option value="0000429">
                                                                    TARANGNAN MUNICIPAL HOSPITAL </option>
                                                                <option value="0001000">
                                                                    TARLAC HOLY INFANT CLINIC </option>
                                                                <option value="0000153">
                                                                    TARLAC PROVINCIAL HOSPITAL </option>
                                                                <option value="0001680">
                                                                    TARONGOY MEDICAL CLINIC </option>
                                                                <option value="0001163">
                                                                    TAYABAS COMMUNITY HOSPITAL, INC. </option>
                                                                <option value="0000242">
                                                                    TAYTAY DISTRICT HOSPITAL </option>
                                                                <option value="0001578">
                                                                    TECARRO POLYCLINIC HOSPITAL </option>
                                                                <option value="0000797">
                                                                    TEJANO CLINIC AND HOSPITAL </option>
                                                                <option value="0000353">
                                                                    TEODORO B. GALAGAR DISTRICT HOSPITAL </option>
                                                                <option value="0001164">
                                                                    TERESA MEDICAL SERVICES COOP. HOSPITAL </option>
                                                                <option value="0000803">
                                                                    THE ASSUMPTION MEDICAL CLINIC </option>
                                                                <option value="0001628">
                                                                    THE DOCTORS' CLINIC AND HOSPITAL, INC. </option>
                                                                <option value="0001274">
                                                                    THE DOCTORS` HOSPITAL, INC. </option>
                                                                <option value="0000760">
                                                                    THE FAMILY CLINIC, INC. </option>
                                                                <option value="0000761">
                                                                    THE MEDICAL CITY </option>
                                                                <option value="0000762">
                                                                    THE POLYMEDIC GENERAL HOSPITAL, INC. </option>
                                                                <option value="0001455">
                                                                    THE R &amp; L MEDICAL CLINIC </option>
                                                                <option value="0001558">
                                                                    TIBUNGCO COMMUNITY HOSPITAL </option>
                                                                <option value="0000283">
                                                                    TICAO DISTRICT HOSPITAL </option>
                                                                <option value="0000975">
                                                                    TIGLAO'S GENERAL HOSPITAL </option>
                                                                <option value="0000268">
                                                                    TINAMBAC MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000611">
                                                                    TINOC DISTRICT HOSPITAL </option>
                                                                <option value="0001329">
                                                                    TOJONG INC. MAT. CLINIC AND GEN. HOSP. </option>
                                                                <option value="0000381">
                                                                    TOLEDO CITY GENERAL HOSPITAL </option>
                                                                <option value="0000904">
                                                                    TOLENTINO CLINIC </option>
                                                                <option value="0000512">
                                                                    TOMAS LACHICA DISTRICT HOSPITAL </option>
                                                                <option value="0000557">
                                                                    TONDO MEDICAL CENTER </option>
                                                                <option value="0001350">
                                                                    TONGONAN MEDICAL CLINIC AND INFIRMARY </option>
                                                                <option value="0000243">
                                                                    TORRIJOS MUNICIPAL HOSPITAL </option>
                                                                <option value="0000085">
                                                                    TUAO DISTRICT HOSPITAL </option>
                                                                <option value="0001763">
                                                                    TUBAJON COMMUNITY HOSPITAL </option>
                                                                <option value="0001658">
                                                                    TUBOD COMMUNITY HOSPITAL </option>
                                                                <option value="0000382">
                                                                    TUBURAN DISTRICT HOSPITAL </option>
                                                                <option value="0000487">
                                                                    TUDELA MUNICIPAL HOSPITAL </option>
                                                                <option value="0001267">
                                                                    TUGON MEDICAL CLINIC </option>
                                                                <option value="0000086">
                                                                    TUGUEGARAO PEOPLE'S EMERGENCY HOSP. </option>
                                                                <option value="0000103">
                                                                    TUMAUINI DISTRICT HOSPITAL </option>
                                                                <option value="0000885">
                                                                    TUMAUINI MEDICAL CLINIC </option>
                                                                <option value="0001772">
                                                                    TUPI MUNICIPAL HOSPITAL </option>
                                                                <option value="0001165">
                                                                    TUY GENERAL HOSPITAL </option>
                                                                <option value="0000763">
                                                                    UERM MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0000073">
                                                                    UMINGAN MEDICARE AND COMMUNITY HOSP. </option>
                                                                <option value="0000764">
                                                                    UNCIANO GENERAL HOSPITAL-MANDALUYONG </option>
                                                                <option value="0001166">
                                                                    UNCIANO MEDICAL CENTER </option>
                                                                <option value="0000244">
                                                                    UNISAN MEDICARE COMMUNITY HOSPITAL </option>
                                                                <option value="0000765">
                                                                    UNITED DOCTORS MEDICAL CENTER </option>
                                                                <option value="0000725">
                                                                    UNIV. OF PERPETUAL HELP RIZAL MED.CTR., INC. </option>
                                                                <option value="0000575">
                                                                    UP HEALTH SERVICE </option>
                                                                <option value="0000245">
                                                                    UP LOS BA¥OS UNIVERSITY HEALTH SERVICE </option>
                                                                <option value="0000559">
                                                                    UP-PHILIPPINE GENERAL HOSPITAL </option>
                                                                <option value="0000839">
                                                                    URDANETA SACRED HEART HOSPITAL </option>
                                                                <option value="0001825">
                                                                    URGENT SURGICAL AND MEDICAL CARE HOSPITAL </option>
                                                                <option value="0001462">
                                                                    UY MEDICAL CLINIC </option>
                                                                <option value="0001260">
                                                                    V. DOROTAN SR. MEMORIAL HOSPITAL </option>
                                                                <option value="0000979">
                                                                    V.L. MAKABALI MEMORIAL HOSPITAL </option>
                                                                <option value="0000285">
                                                                    V.L. PERALTA MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0000302">
                                                                    VALDERRAMA MUNICIPAL HOSPITAL </option>
                                                                <option value="0000874">
                                                                    VALDEZ FAMILY CLINIC </option>
                                                                <option value="0001452">
                                                                    VALENCIA MEDICAL HOSPITAL </option>
                                                                <option value="0001453">
                                                                    VALENCIA SANITARIUM AND HOSPITAL </option>
                                                                <option value="0000585">
                                                                    VALENZUELA DISTRICT HOSPITAL </option>
                                                                <option value="0001167">
                                                                    VALIENTES HOSPITAL </option>
                                                                <option value="0000344">
                                                                    VALLADOLID DISTRICT HOSPITAL </option>
                                                                <option value="0000878">
                                                                    VALLARTA'S CLINIC </option>
                                                                <option value="0001617">
                                                                    VELASCO CLINIC AND HOSPITAL </option>
                                                                <option value="0001168">
                                                                    VELASCO HOSPITAL </option>
                                                                <option value="0000829">
                                                                    VELASQUEZ CLINIC </option>
                                                                <option value="0000576">
                                                                    VETERANS MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0000104">
                                                                    VETERANS REGIONAL HOSPITAL </option>
                                                                <option value="0001572">
                                                                    VIACRUCIS MEDICAL CLINIC </option>
                                                                <option value="0001331">
                                                                    VICENTE GULLAS MEMORIAL HOSPITAL </option>
                                                                <option value="0000337">
                                                                    VICENTE GUSTILO MEMORIAL HOSPITAL </option>
                                                                <option value="0000365">
                                                                    VICENTE SOTTO MEMORIAL MEDICAL CENTER </option>
                                                                <option value="0000274">
                                                                    VIGA DISTRICT HOSPITAL </option>
                                                                <option value="0000798">
                                                                    VIGAN POLYCLINIC </option>
                                                                <option value="0001346">
                                                                    VILLAFLOR'S CLINIC </option>
                                                                <option value="0000253">
                                                                    VILLAHERMOSA MUNICIPAL HOSPITAL </option>
                                                                <option value="0001482">
                                                                    VILLAMOR CLINIC </option>
                                                                <option value="0000766">
                                                                    VILLAROSA HOSPITAL </option>
                                                                <option value="0000598">
                                                                    VILLAVICIOSA MEDICARE AND COMMUNITY HOSPITAL </option>
                                                                <option value="01010123000030">
                                                                    VINTAR RHU </option>
                                                                <option value="0000980">
                                                                    VIRGEN DELOS REMEDIOS MEDICAL HOSPITAL </option>
                                                                <option value="0000835">
                                                                    VIRGEN MILAGROSA MEDICAL CENTER </option>
                                                                <option value="0000405">
                                                                    VISCA-VISAYAS STATE COLLEGE OF </option>
                                                                <option value="0000767">
                                                                    WATEROUS HOSPITAL CORP. </option>
                                                                <option value="0000327">
                                                                    WEST VISAYAS STATE UNIVERSITY HOSPIITAL </option>
                                                                <option value="0000612">
                                                                    WESTERN KALINGA DISTRICT HOSPITAL </option>
                                                                <option value="0000404">
                                                                    WESTERN LEYTE PROVINCIAL HOSPITAL </option>
                                                                <option value="0001410">
                                                                    WESTERN MINDANAO MEDICAL CENTER </option>
                                                                <option value="0000062">
                                                                    WESTERN PANGASINAN DISTRICT HOSPITAL </option>
                                                                <option value="0000326">
                                                                    WESTERN VISAYAS MEDICAL CENTER </option>
                                                                <option value="0000335">
                                                                    WESTERN VISAYAS REGIONAL HOSPITAL </option>
                                                                <option value="0000334">
                                                                    WESTERN VISAYAS SANITARIUM </option>
                                                                <option value="0001395">
                                                                    WESTERN ZAMBOANGA POLYMEDIC HOSPITAL </option>
                                                                <option value="0001362">
                                                                    WHITE CROSS CLINIC </option>
                                                                <option value="0000006">
                                                                    Women's Hospital </option>
                                                                <option value="0001010">
                                                                    WOMEN'S INFIRMARY </option>
                                                                <option value="0000906">
                                                                    YANGA'S CLINIC AND HOSPITAL </option>
                                                                <option value="0001754">
                                                                    YU TIAMCO CLINIC </option>
                                                                <option value="0001657">
                                                                    YUSON GENERAL HOSPITAL </option>
                                                                <option value="0000808">
                                                                    ZABALLA- ROSARIO HOSPITAL </option>
                                                                <option value="0001411">
                                                                    ZAEC COMMUNITY MEDICAL CENTER </option>
                                                                <option value="0001521">
                                                                    ZAFRA MEDICAL CLINIC </option>
                                                                <option value="0000473">
                                                                    ZAMBOANGA CITY MEDICAL CENTER </option>
                                                                <option value="0000455">
                                                                    ZAMBOANGA DEL NORTE PROVINCIAL HOSP. </option>
                                                                <option value="0000471">
                                                                    ZAMBOANGA DEL SUR PROVINCIAL HOSPITAL </option>
                                                                <option value="0001408">
                                                                    ZAMBOANGA DOCTOR'S HOSPITAL, INC. </option>
                                                                <option value="0001192">
                                                                    ZAPANTA GENERAL HOSPITAL </option>
                                                                <option value="0001169">
                                                                    ZAPANTA MATERNITY AND GENERAL HOSP. </option>
                                                                <option value="0000807">
                                                                    ZARATAN-JIMENEZ CLINIC </option>
                                                                <option value="0001571">
                                                                    ZARSONA MEDICAL CLINIC </option>
                                                                <option value="0001359">
                                                                    ZENON LAGUMBAY MEMORIAL HOSPITAL </option>
                                                                <option value="0000254">
                                                                    ZIGA MEMORIAL DISTRICT HOSPITAL </option>
                                                                <option value="0001170">
                                                                    ZIGZAG HOSPITAL </option>
                                                            </select>
                                                        </div>
                                                        <!-- Philhealth -->
                                                        <div class="form-group col-md-4">
                                                            <label for="philhealth_accreditation_no"><strong class="text-red">*</strong> Philhealth Accreditation Number</label>
                                                            <input value="" type="text" class="form-control mr-sm-2" id="philhealth_accreditation_no" name="philhealth_accreditation_no" placeholder="Philhealth Accreditation Number">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <!-- Source of Payment 1 -->
                                                        <label for="payment_1"><strong class="text-red">*</strong> Payment 1</label>
                                                        <select data-allow-clear="true" data-placeholder="Select Payment 1" id="payment_1" name="payment_1" class="form-control select2bs4" style="width: 100%;">
                                                            <option value="" selected>
                                                            </option>
                                                            <option value="WORCO">
                                                                Worker's compensation </option>
                                                            <option value="OTHGO">
                                                                Other government payers </option>
                                                            <option value="SELPA">
                                                                Self-pay </option>
                                                            <option value="NOCHA">
                                                                No charge (free, charity, special research or teaching) </option>
                                                            <option value="INSUR">
                                                                Insurance Companies </option>
                                                            <option value="SPONS">
                                                                Sponsorship </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <!-- Source of Payment 2 -->
                                                        <label for="payment_2"><strong class="text-red">*</strong> Payment 2</label>
                                                        <select data-allow-clear="true" data-placeholder="Select Payment 2" id="payment_2" name="payment_2" class="form-control select2bs4" style="width: 100%;">
                                                            <option value="" selected>
                                                            </option>
                                                            <option value="WORCO">
                                                                Worker's compensation </option>
                                                            <option value="OTHGO">
                                                                Other government payers </option>
                                                            <option value="SELPA">
                                                                Self-pay </option>
                                                            <option value="NOCHA">
                                                                No charge (free, charity, special research or teaching) </option>
                                                            <option value="INSUR">
                                                                Insurance Companies </option>
                                                            <option value="SPONS">
                                                                Sponsorship </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <!-- Source of Payment 3 -->
                                                        <label for="payment_3"><strong class="text-red">*</strong> Payment 3</label>
                                                        <select data-allow-clear="true" data-placeholder="Select Payment 3" id="payment_3" name="payment_3" class="form-control select2bs4" style="width: 100%;">
                                                            <option value="" selected>
                                                            </option>
                                                            <option value="WORCO">
                                                                Worker's compensation </option>
                                                            <option value="OTHGO">
                                                                Other government payers </option>
                                                            <option value="SELPA">
                                                                Self-pay </option>
                                                            <option value="NOCHA">
                                                                No charge (free, charity, special research or teaching) </option>
                                                            <option value="INSUR">
                                                                Insurance Companies </option>
                                                            <option value="SPONS">
                                                                Sponsorship </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="admitting_clerk"><strong class="text-red">*</strong> Admitting Clerk </label>
                                                        <input type="text" class="form-control mr-sm-2" id="admitting_clerk" name="admitting_clerk" placeholder="Admitting Clerk" readonly="" value="Ipd Medrec ">
                                                    </div>

                                                    <div class="form-group col-md-2 mb-1">
                                                        <label class="" for="case"><strong class="text-red">*</strong> House Case/Private Case</label>
                                                        <select data-allow-clear="true" data-placeholder="Select Case Type" id="case" name="case" class="form-control select2bs4" style="width: 100%;">
                                                            <option value="" selected></option>
                                                            <option value="HC">House Case</option>
                                                            <option value="PC">Private Case</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Buttons -->
                                                <button type="button" style="width: 20%;" class="btn btn-danger float-left mb-3 shadow rounded align-middle" id="btn_back_to_third_form"> <i class="fas fa-arrow-left mr-2"></i>Back</button>
                                                <button type="submit" style="width: 20%;" class="btn btn-primary float-right mb-3 shadow rounded align-middle">Submit<i class="fas fa-arrow-right ml-2"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                    <div class="form-group-container p-3">
                                        <!-- Patient Details -->
                                        <form id="express_form" class="content active" role="tabpanel" aria-labelledby="patient_details-trigger">

                                            <label class="h3 mt-2">
                                                Patient Details
                                            </label>
                                            <hr class="m-0 mb-3">

                                            <label class="checkbox-label">
                                                <strong class="text-red">*</strong>Name
                                            </label>
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="ex_unknown_name" name="unknown_name">
                                                <label for="unknown_name">Unknown</label>
                                            </div>

                                            <div class="form-row">
                                                <!-- Last Name -->
                                                <div class="form-group col-md-4 mt-0">
                                                    <label for="ex_last_name"><strong class="text-red">*</strong> Last Name</label>
                                                    <input type="text" value="" class="form-control mr-sm-2" id="ex_last_name" name="last_name" placeholder="Last name">
                                                </div>
                                                <!--  First Name -->
                                                <div class="form-group col-md-4 mt-0">
                                                    <label for="ex_first_name"><strong class="text-red">*</strong> First Name</label>
                                                    <input type="text" value="" class="form-control mr-sm-2" id="ex_first_name" name="first_name" placeholder="First name">
                                                </div>
                                                <!-- Middle Name -->
                                                <div class="form-group col-md-3 mt-0">
                                                    <label for="ex_middle_name"><strong class="text-red">*</strong> Middle Name</label>
                                                    <input type="text" value="" class="form-control mr-sm-2" id="ex_middle_name" name="middle_name" placeholder="Middle name">
                                                </div>
                                                <!-- Suffix -->
                                                <div class="form-group col-md-1 mt-0">
                                                    <label for="ex_name_suffix">Suffix</label>
                                                    <select data-placeholder="Suffix" id="ex_name_suffix" name="name_suffix" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                        <option disabled="" selected="" value="" data-select2-id="2"></option>
                                                        <option value="SR">
                                                            Sr. </option>
                                                        <option value="JR">
                                                            Jr. </option>
                                                        <option value="II">
                                                            II </option>
                                                        <option value="III">
                                                            III </option>
                                                        <option value="IV">
                                                            IV </option>
                                                        <option value="V">
                                                            V </option>
                                                        <option value="VI">
                                                            VI </option>
                                                        <option value="VII">
                                                            VII </option>
                                                        <option value="VIII">
                                                            VIII </option>
                                                        <option value="IX">
                                                            IX </option>
                                                        <option value="X">
                                                            X </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">

                                                <div class="form-group col-md-4">
                                                    <label for="ex_alias"><strong class="text-red">*</strong> Alias</label>
                                                    <input value="" type="text" class="form-control" id="ex_alias" name="alias" placeholder="Alias">
                                                </div>

                                                <!-- Date of Birth -->
                                                <div class="col-md-2">
                                                    <div class="form-group-container">
                                                        <label class="checkbox-label">
                                                            <strong class="text-red">*</strong>Date of Birth
                                                        </label>
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" id="ex_unknown_date_of_birth" name="unknown_date_of_birth">
                                                            <label for="unknown_date_of_birth">Unknown</label>
                                                        </div>

                                                        <input type="hidden" value="" id="ex_hdob" name="hdob">

                                                        <div class="form-group mb-3 custom-datepicker">
                                                            <div class="input-group date" data-target-input="nearest">
                                                                <div class="input-group-prepend" data-target="#date_of_birth" data-toggle="datetimepicker">
                                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                </div>
                                                                <!-- COMMENT: get this attr value and force declare to this html tag -->
                                                                <input type="text" class="form-control datetimepicker-input" data-target="#date_of_birth" id="ex_date_of_birth" name="date_of_birth" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Age of Patient -->
                                                <div class="form-group col-md-1 mb-3">
                                                    <label for="ex_year"><strong class="text-red">*</strong> Age</label>
                                                    <input type="text" class="form-control" id="ex_year" name="year" placeholder="" readonly="" value="">
                                                </div>

                                                <input type="hidden" class="form-control" id="ex_month" name="month" placeholder="M" readonly="" value="9">

                                                <input type="hidden" class="form-control" id="ex_day" name="day" placeholder="D" readonly="" value="18">

                                                <input type="hidden" class="form-control" id="ex_hour" name="hour" placeholder="H" readonly="" value="10">

                                                <!-- Sex/Gender -->
                                                <div class="form-group col-lg-1">
                                                    <label for="ex_sex"><strong class="text-red">*</strong> Sex</label>
                                                    <select data-placeholder="Sex" id="ex_sex" name="sex" class="form-control select2bs4" style="width: 100%;" data-minimum-results-for-search="Infinity">
                                                        <option selected="" value="">
                                                        </option>
                                                        <option value="M">
                                                            Male </option>
                                                        <option value="F">
                                                            Female </option>
                                                    </select>
                                                </div>

                                                <!-- Religion -->
                                                <div class="form-group col-lg-4">
                                                    <label for="ex_religion"><strong class="text-red">*</strong> Religion</label>
                                                    <select data-allow-clear="true" data-placeholder="Select Religion" id="ex_religion" name="religion" class="form-control select2bs4" style="width: 100%;">
                                                        <option selected="" value="">
                                                        </option>
                                                        <option value="AGLIP">
                                                            Aglipay </option>
                                                        <option value="ALLY">
                                                            Alliance </option>
                                                        <option value="ANGLI">
                                                            Anglican </option>
                                                        <option value="BAPTI">
                                                            Baptist </option>
                                                        <option value="BRNAG">
                                                            Born Again Christian </option>
                                                        <option value="BUDDH">
                                                            Buddhism </option>
                                                        <option value="CATHO">
                                                            Catholic </option>
                                                        <option value="EVANG">
                                                            Evangelical </option>
                                                        <option value="IGNIK">
                                                            Iglesia ni Cristo </option>
                                                        <option value="JEWIT">
                                                            Jehovah's Witness </option>
                                                        <option value="LCRM">
                                                            Life Renewal Christian Ministry </option>
                                                        <option value="LUTHR">
                                                            Lutheran </option>
                                                        <option value="METOD">
                                                            Methodist </option>
                                                        <option value="MORMO">
                                                            LDS-Mormons </option>
                                                        <option value="MUSLI">
                                                            Islam </option>
                                                        <option value="OTHER">
                                                            OTHERS </option>
                                                        <option value="PENTE">
                                                            Pentecostal </option>
                                                        <option value="PROTE">
                                                            Protestant </option>
                                                        <option value="SVDAY">
                                                            Seventh Day Adventist </option>
                                                        <option value="UCCP">
                                                            UCCP </option>
                                                        <option value="UNKNO">
                                                            Unknown </option>
                                                        <option value="WESLY">
                                                            Wesleyan </option>
                                                        <option value="XTIAN">
                                                            Christian </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <!-- Contact Number -->
                                                <div class="form-group col-md-6">
                                                    <label for="ex_contact_number"><strong class="text-red">*</strong> Contact Number</label>
                                                    <input value="" type="text" class="form-control" id="ex_contact_number" name="contact_number" placeholder="Contact Number">
                                                </div>
                                            </div>

                                            <label class="h3 mt-1">
                                                Contact Person
                                            </label>
                                            <hr class="m-0 mb-3">

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <!-- Contact Person Lastname -->
                                                    <label class="" for="ex_contact_last_name"><strong class="text-red">*</strong> Last Name</label>
                                                    <input value="" type="text" class="form-control mr-sm-2" id="ex_contact_last_name" name="contact_last_name" placeholder="Last name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- Contact Person Firstname -->
                                                    <label class="" for="ex_contact_first_name"><strong class="text-red">*</strong> First Name</label>
                                                    <input value="" type="text" class="form-control mr-sm-2" id="ex_contact_first_name" name="contact_first_name" placeholder="First name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- Contact Person Middlename -->
                                                    <label class="" for="ex_contact_middle_name"><strong class="text-red">*</strong> Middle Name</label>
                                                    <input value="" type="text" class="form-control mr-sm-2" id="ex_contact_middle_name" name="contact_middle_name" placeholder="Middle name">
                                                </div>

                                            </div>
                                            <div class="form-row">

                                                <div class="form-group col-md-4 mb-1">
                                                    <!-- Contact Person Telepone -->
                                                    <label class="" for="ex_contact_telephone"><strong class="text-red">*</strong> Telephone</label>
                                                    <input value="" type="text" class="form-control mr-sm-2" id="ex_contact_telephone" name="contact_telephone" placeholder="Telephone">
                                                </div>

                                                <div class="form-group col-md-4 mb-1">
                                                    <!-- Relation to Patient -->
                                                    <label for="ex_contact_relation">Relation to Patient</label>
                                                    <select data-allow-clear="true" data-placeholder="Select Relation to Patient" id="ex_contact_relation" name="contact_relation" class="form-control select2bs4" style="width: 100%;">
                                                        <option value="" selected>
                                                        </option>
                                                        <option value="MOTHE">
                                                            Mother </option>
                                                        <option value="FATHE">
                                                            Father </option>
                                                        <option value="SISTE">
                                                            Sister </option>
                                                        <option value="BROTH">
                                                            Brother </option>
                                                        <option value="AUNT">
                                                            Aunt </option>
                                                        <option value="UNCLE">
                                                            Uncle </option>
                                                        <option value="NEPHE">
                                                            Nephew </option>
                                                        <option value="NIECE">
                                                            Niece </option>
                                                        <option value="COUSI">
                                                            Cousin </option>
                                                        <option value="SPOUS">
                                                            Spouse </option>
                                                        <option value="FHEAD">
                                                            Head of Family </option>
                                                        <option value="MOTIN">
                                                            Mother-In-Law </option>
                                                        <option value="NEIGH">
                                                            Neighbor </option>
                                                        <option value="FRIEN">
                                                            Friend </option>
                                                        <option value="DAUGH">
                                                            Daughter </option>
                                                        <option value="SON">
                                                            Son </option>
                                                        <option value="COLSP">
                                                            Common Law Spouse </option>
                                                        <option value="SISIN">
                                                            Sister-In-Law </option>
                                                        <option value="BROIN">
                                                            Brother-In-Law </option>
                                                        <option value="OTHER">
                                                            Others </option>
                                                        <option value="GNDCH">
                                                            Grandchild </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" style="width: 20%;" class="btn btn-primary float-right mb-3 shadow rounded align-middle">Submit<i class="fas fa-arrow-right ml-2"></i></button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
</div>