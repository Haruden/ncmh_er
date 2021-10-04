<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// # Authetication Routes
$route['login'] = 'auth/login';
$route['auth/login'] = 'auth/login/authenticate';
$route['auth/logout'] = 'auth/login/logout';

// Attendant Routes
$route['attendant'] = 'attendant/queue';

// Nurse Routes
$route['nurse'] = 'nurse/queue';
$route['nurse/patient-details'] = 'nurse/content/patient_details';
$route['nurse/patient-id-marks'] = 'nurse/content/patient_marks';
$route['nurse/vital-signs'] = 'nurse/content/vital_signs';
$route['nurse/nurse-notes'] = 'nurse/content/nurse_notes';
$route['nurse/er-notes'] = 'nurse/content/er_notes';
$route['nurse/plan'] = 'nurse/content/plan';
$route['nurse/disposition'] = 'nurse/content/disposition';

// Doctor Routes
$route['doctor'] = 'doctor/queue';
$route['doctor/patient-details'] = 'doctor/content/patient_details';
$route['doctor/patient-id-marks'] = 'doctor/content/patient_marks';
$route['doctor/vital-signs'] = 'doctor/content/vital_signs';
$route['doctor/nurse-notes'] = 'doctor/content/nurse_notes';
$route['doctor/er-notes'] = 'doctor/content/er_notes';
$route['doctor/plan'] = 'doctor/content/plan';
$route['doctor/disposition'] = 'doctor/content/disposition';

$route['doctor/plan/add-gen-order'] = 'doctor/content/plan/add_gen_order';
$route['doctor/plan/gen-or-table'] = 'doctor/content/plan/gen_or_table';
$route['doctor/plan/add-med-order'] = 'doctor/content/plan/add_med_order';
$route['doctor/plan/med-or-table'] = 'doctor/content/plan/med_or_table';
$route['doctor/plan/add-diagproc-order'] = 'doctor/content/plan/add_diagproc_order';
$route['doctor/plan/diagproc-or-table'] = 'doctor/content/plan/diagproc_or_table';
$route['doctor/plan/finalize'] = 'doctor/content/plan/finalize';

$route['doctor/plan/update-gen-order'] = 'doctor/content/plan/update_gen_order';
$route['doctor/plan/delete-gen-order'] = 'doctor/content/plan/delete_gen_order';
$route['doctor/plan/update-med-order'] = 'doctor/content/plan/update_med_order';
$route['doctor/plan/delete-med-order'] = 'doctor/content/plan/delete_med_order';
$route['doctor/plan/update-diagproc-order'] = 'doctor/content/plan/update_diagproc_order';
$route['doctor/plan/delete-diagproc-order'] = 'doctor/content/plan/delete_diagproc_order';

// # Doctor Routes
// $route['doctor/queue'] = 'doctor/queue';
// $route['doctor/patient-list'] = 'doctor/patient_list';

// // Doctor -> Patient Information
// $route['doctor/patient-information'] = 'doctor/content/patient_info';

// // Doctor -> Vital Signs
// $route['doctor/vital-signs'] = 'doctor/content/vital_sign';

// // Doctor -> Doctors Notes
// $route['doctor/doctor-notes'] = 'doctor/content/doctor_note';

// // Doctor -> Medication
// $route['doctor/medication'] = 'doctor/content/medication';

// // Doctor -> Discharge
// $route['doctor/discharge'] = 'doctor/content/discharge';


// # Nurse Routes
// $route['nurse/queue'] = 'nurse/queue';
// $route['nurse/patient-list'] = 'nurse/patient_list';

// // Nurse -> Queue Datatables 
// $route['nurse/queue/draw']['POST'] = 'nurse/queue/datatable'; 

// // Nurse Datatables
// $route['nurse/patient-list/draw']['POST'] = 'nurse/patient_list/datatable';

// // Nurse -> Patient Information
// $route['nurse/patient-information'] = 'nurse/content/patient_info';

// // Nurse -> Vital Signs
// $route['nurse/vital-signs'] = 'nurse/content/vital_sign';

// // Nurse -> Nurse Notes
// $route['nurse/nurse-notes'] = 'nurse/content/nurse_note';


// # Record Routes
// $route['record/admission'] = 'record/admission';
// $route['record/patient-list'] = 'record/patient_list';

// // Record -> Nurse Notes
// $route['record/admission/draw']['POST'] = 'record/admission/datatable'; 

// // Records Datatables
// $route['record/queue/draw']['POST'] = 'record/patient_list/datatable';

// // Record -> Nurse Notes
// $route['record/admit/patient']['POST'] = 'record/content/admit/admit_patient'; 

// // Record -> Nurse Notes
// $route['record/consent/approval']['POST'] = 'record/content/fill_out_consent/check_patient_consent'; 


