/**
 * @function logout
 * - logging out the current user
 * 
 */
function logoutCurrentUser() {
    var template = logoutTemplate();
    $('#logout').click(function() {
        Swal.fire({
            title: '<strong>Log Out</strong>',
            html: template || 'Empty Template',
            buttonsStyling: false,
            cancelButtonText: 'Cancel',
            showCancelButton: true,
            confirmButtonText: 'Log Out',
            reverseButtons: true,
            allowOutsideClick: false,
            customClass: {
                cancelButton: 'btn btn-danger bg-gradient-light border-0 mr-2 text-secondary shadow-sm',
                confirmButton: 'btn btn-danger bg-gradient-danger border-0 shadow-sm',
                title: 'text-lg font-weight-normal d-flex justify-content-start',
                actions: 'd-flex justify-content-end pr-4',
                container: 'rounded shadow',
                popup: 'shadow rounded border-0',
            }
        }).then(function(response) {
            if (!response.isConfirmed) return
            window.location = '/ncmh_er/auth/logout';
        });
    });

    $('#logout').hover(function() {
        $(this).addClass('text-white shadow-sm');
    }, function() {
        $(this).removeClass('shadow-sm');
    });
}

/**
 * @function admitModalTemplate
 * - returns template of the Admit Patient Modal
 * 
 */
function logoutTemplate() {
    var content = document.createElement('div');
    content.innerHTML = `
        <div class="form-group mb-1 mt-1 m-0">
            <legend class="font-weight-light" style="font-size: 23px;">Are you sure you want to logout?</legend>
        </div>
    `;
    return content;
}


$(document).ready(function() {
    logoutCurrentUser();
});




















































// /**
//  * @function admissionActionAdmit
//  * - View modal for Admitting a patient
//  * 
// */
// function admissionActionAdmit(recordsAdmissionTable) {
//     $('#recordsAdmissionTable tbody').on('click', 'tr #recordAdmissionAdmit', function () {
//         var code = $(this).attr('data-code') || {}
//         var name = $(this).attr('data-name') ||'This is an error message -> name!!!';
//         var consent = parseInt($(this).attr('data-consent')) || false;

//         var template = admitModalTemplate(name, code, consent);

//         Swal.fire({
//             html: template || 'Empty Template',
//             icon: 'info',
//             buttonsStyling: false,
//             cancelButtonText: 'Close',
//             showCancelButton: true,
//             confirmButtonText: consent && false ? 'Admit Now' : false,
//             showConfirmButton: consent && false,
//             reverseButtons: true,
//             allowOutsideClick: false,
//             customClass: {
//                 cancelButton: 'btn btn-danger bg-gradient-light border-0 mr-2 btn-sm text-secondary shadow-sm',
//                 confirmButton: consent && false ? 'btn btn-primary bg-gradient-primary border-0 btn-sm shadow-sm' : null,
//                 title: 'text-lg font-weight-normal',
//                 actions: 'd-flex justify-content-end pr-4 m-0',
//                 container: 'rounded shadow',
//                 popup: 'shadow rounded border-0',
//             }
//         }).then(function (response) {
//             console.log('response')
//         });

//         // if (Swal.isVisible()) {
//         //     $.ajax({
//         //         url: '/record/admit/requirement-validation',
//         //         type: 'POST',
//         //         data: {},
//         //         dataType: 'json',
//         //         success: function (data) {

//         //         },
//         //         error: function (err) {
//         //             if (!err) return;
//         //         }
//         //     });
//         // }
//     });
// }

// /**
//  * @function admitModalTemplate
//  * - returns template of the Admit Patient Modal
//  * 
// */
// function admitModalTemplate(name, code, consent) {
//     var patient_code = code || 'This is an error message -> code!!!';

//     var consent_requirement = consent ? 'text-success' : 'text-danger'
//     var consent_done = consent ? '<i class="far fa-check-circle text-success"></i>' : '<i class="far fa-times-circle text-danger"></i>'

//     var ed_requirement = false ? 'text-success' : 'text-danger';
//     var ed_done = false ? '<i class="far fa-check-circle text-success"></i>' : '<i class="far fa-times-circle text-danger"></i>';

//     var content = document.createElement('div');
//     content.innerHTML = `
//         <div class="form-group m-0 mb-3">
//             <legend id="patient_name" class="m-0" style="font-size: 28px;">${name}</legend>
//             <label for="patient_name" class="m-0">
//                 <small>Patient # ${patient_code}</small>
//             </label>
//         </div>
//         <div class="text-secondary text-left rounded border-0 mt-4 m-0" >
//             <dl>
//                 <small>The following requirements for you to proceed:</small>
//                 <dt class="ml-3 mt-2">
//                     <small>${ed_done}</small>
//                     <small class="ml-2 ${ed_requirement}">You must fill up the Encode Data form.</small>
//                 </dt>
//                 <dt class="ml-3">
//                     <small>${consent_done}</small>
//                     <small class="ml-2 ${consent_requirement}">You need to confirm that this patient has signed Consent form.</small>
//                 </dt>
//             </dl>
//         </div>
//     `;
//     return content;
// }