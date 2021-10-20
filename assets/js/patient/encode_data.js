var phId = phId || '';
var has_stepper = true;
var saveAction = '';
var save_endpoint = save_endpoint || '';
var currentSelectedPhOption;
var successMessage = successMessage || 'Successfully saved patient records!';
var currentForm;
var stepper;

var formOpts = {
    first: {
        rules: {},
        messages: {}
    },
    second: {
        rules: {},
        messages: {}
    },
    third: {
        rules: {},
        messages: {}
    },
    fourth: {
        rules: {},
        messages: {}
    },
    express: {
        rules: {},
        messages: {}
    }
};

var firstFormFields = [{
        id: 'hpercode',
        label: 'HEALTH RECORD NUMBER',
        type: 'text',
        required: true
    },
    {
        id: 'old_health_record_number',
        label: 'OLD HEALTH RECORD NUMBER',
        type: 'text',
        required: false
    },
    {
        id: 'encounter_code',
        type: 'text',
    },
    {
        id: 'alias',
        label: 'Alias',
        type: 'text',
        required: false,
        maxlength: 50
    },
    {
        id: 'unknown_name',
        label: 'Name',
        type: 'unknown-checkbox',
        children: [{
                id: 'last_name',
                label: 'Last Name',
                type: 'text',
                required: true,
                maxlength: 50
            },
            {
                id: 'first_name',
                label: 'First Name',
                type: 'text',
                required: true,
                maxlength: 50
            },
            {
                id: 'middle_name',
                label: 'Middle Name',
                type: 'text',
                required: true,
                maxlength: 50
            },
            {
                id: 'name_suffix',
                label: 'Suffix',
                type: 'select',
                maxlength: 5
            }
        ]
    },
    {
        id: 'sex',
        label: 'Sex',
        type: 'select',
        required: false
    },
    {
        id: 'unknown_date_of_birth',
        label: 'Date of Birth',
        type: 'unknown-checkbox',
        children: [{
                id: 'date_of_birth',
                label: 'Date of Birth',
                type: 'text',
                required: false
            },
            {
                id: 'age',
                label: 'Age',
                type: 'text',
                required: false,
                maxlength: 30
            },
        ]
    },
    {
        id: 'year',
        label: 'Year',
        type: 'text',
        required: false,
        maxlength: 2
    },

    {
        id: 'month',
        label: 'Month',
        type: 'text',
        required: true,
        maxlength: 2
    },

    {
        id: 'day',
        label: 'Day',
        type: 'text',
        required: true,
        maxlength: 2
    },

    {
        id: 'hour',
        label: 'Hour',
        type: 'text',
        required: true,
        maxlength: 2
    },
    {
        id: 'pob_text_address',
        label: 'Place of Birth',
        type: 'text',
        required: false,
        maxlength: 50
    },
    {
        id: 'religion',
        label: 'Religion',
        type: 'select',
        required: false
    },
    {
        id: 'nationality',
        label: 'Nationality',
        type: 'select',
        required: false
    },
    {
        id: 'civil_status',
        label: 'Civil Status',
        type: 'select',
        required: false
    },
    {
        id: 'unknown_current_address',
        label: 'Current Address',
        type: 'unknown-checkbox',
        children: [{
                id: 'ca_country',
                label: 'Select Country',
                type: 'select',
                required: true
            },
            {
                id: 'ca_region',
                label: 'Region',
                type: 'select',
                required: true
            },
            {
                id: 'unknown_ca_province',
                label: 'Unknown',
                type: 'unknown-checkbox',
                disabled: true,
            },
            {
                id: 'ca_province',
                label: 'Province',
                type: 'select',
                required: true,
                disabled: true
            },
            {
                id: 'unknown_ca_muninicipality_city',
                label: 'Unknown',
                type: 'unknown-checkbox',
                disabled: true,
            },
            {
                id: 'ca_muninicipality_city',
                label: 'Municipality/City',
                type: 'select',
                required: true,
                disabled: true
            },
            {
                id: 'unknown_ca_barangay',
                label: 'Unknown',
                type: 'unknown-checkbox',
                disabled: true,
            },
            {
                id: 'ca_barangay',
                label: 'Barangay',
                type: 'select',
                required: true,
                disabled: true
            },
            {
                id: 'unknown_ca_street_number',
                label: 'Unknown',
                type: 'unknown-checkbox',
            },
            {
                id: 'ca_street_number',
                label: 'Address',
                type: 'text',
                required: true,
                maxlength: 100
            },
            {
                id: 'ca_zip_code',
                label: 'Zip Code',
                type: 'text',
                required: true,
                maxlength: 10,
                disabled: true
            },
        ]
    },
    {
        id: 'senior_citizen_id',
        label: 'Senior citizen ID',
        type: 'text',
        required: false,
        maxlength: 30
    },
    {
        id: 'contact_number',
        label: 'Contact Number',
        type: 'text',
        required: false,
        maxlength: 20
    },
    {
        id: 'occupation',
        label: 'Occupation',
        type: 'text',
        required: false,
        maxlength: 30
    },
    {
        id: 'photo',
        label: 'Upload Photo',
        type: 'file',
        required: false
    }
];

var secondFormFields = [

    {
        id: 'contact_last_name',
        label: 'Last Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'contact_middle_name',
        label: 'Middle Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'contact_first_name',
        label: 'First Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'contact_address',
        label: 'Address',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'contact_telephone',
        label: 'Telephone',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'contact_relation',
        label: 'Relation to Patient',
        type: 'select',
        required: false
    },

    {
        id: 'father_last_name',
        label: 'Last Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'father_first_name',
        label: 'First Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'father_middle_name',
        label: 'Middle Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'father_address',
        label: 'Address',
        type: 'text',
        required: false,
        maxlength: 255
    },

    {
        id: 'father_same_as_patient_address',
        label: 'Same as patient',
        type: 'checkbox'
    },

    {
        id: 'father_telephone',
        label: 'Telephone',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'mother_last_name',
        label: 'Last Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'mother_first_name',
        label: 'First Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'mother_middle_name',
        label: 'Middle Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'mother_address',
        label: 'Address',
        type: 'text',
        required: false,
        maxlength: 255
    },

    {
        id: 'mother_same_as_patient_address',
        label: 'Same as patient',
        type: 'checkbox'
    },

    {
        id: 'mother_telephone',
        label: 'Telephone',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'spouse_last_name',
        label: 'Last Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'spouse_first_name',
        label: 'First Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'spouse_middle_name',
        label: 'Middle Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'spouse_address',
        label: 'Address',
        type: 'text',
        required: false,
        maxlength: 255
    },

    {
        id: 'spouse_same_as_patient_address',
        label: 'Same as patient',
        type: 'checkbox'
    },

    {
        id: 'spouse_telephone',
        label: 'Telephone',
        type: 'text',
        required: false,
        maxlength: 30
    },

];

var thirdFormFields = [

    {
        id: 'person_responsible_last_name',
        label: 'Last Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'person_responsible_middle_name',
        label: 'Middle Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'person_responsible_first_name',
        label: 'First Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'person_responsible_address',
        label: 'Address',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'person_responsible_telephone',
        label: 'Telephone',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'person_responsible_relation',
        label: 'Relation to Patient',
        type: 'select',
        required: false,
    },

    {
        id: 'informant_last_name',
        label: 'Last Name',
        type: 'text',
        required: false,
        maxlength: 20
    },

    {
        id: 'informant_first_name',
        label: 'First Name',
        type: 'text',
        required: false,
        maxlength: 20
    },

    {
        id: 'informant_middle_name',
        label: 'Middle Name',
        type: 'text',
        required: false,
        maxlength: 20
    },

    {
        id: 'informant_address',
        label: 'Address',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'informant_telephone',
        label: 'Telephone',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'informant_relation',
        label: 'Relation to Patient',
        type: 'select',
        required: false,
    },

];

var fourthFormFields = [

    {
        id: 'facility',
        label: 'Name of Facility',
        type: 'select',
        required: false,
    },

    {
        id: 'philhealth_accreditation_no',
        label: 'Philhealth Accreditation Number',
        type: 'text',
        required: false,
    },

    {
        id: 'payment_1',
        label: 'Payment 1',
        type: 'select',
        required: false,
    },

    {
        id: 'payment_2',
        label: 'Payment 2',
        type: 'select',
        required: false,
    },

    {
        id: 'payment_3',
        label: 'Payment 3',
        type: 'select',
        required: false,
    },

    {
        id: 'case',
        label: 'House Case/Private Case',
        type: 'select',
        required: false,
    },

    {
        id: 'admitting_clerk',
        label: 'Admitting Clerk ',
        type: 'text',
        required: false,
    },
];

var expressFormFields = [{
        id: 'ex_alias',
        label: 'Alias',
        type: 'text',
        required: false,
        maxlength: 50
    },
    {
        id: 'ex_unknown_name',
        label: 'Name',
        type: 'unknown-checkbox',
        children: [{
                id: 'ex_last_name',
                label: 'Last Name',
                type: 'text',
                required: true,
                maxlength: 50
            },
            {
                id: 'ex_first_name',
                label: 'First Name',
                type: 'text',
                required: true,
                maxlength: 50
            },
            {
                id: 'ex_middle_name',
                label: 'Middle Name',
                type: 'text',
                required: true,
                maxlength: 50
            },
            {
                id: 'ex_name_suffix',
                label: 'Suffix',
                type: 'select',
                maxlength: 5
            }
        ]
    },
    {
        id: 'ex_sex',
        label: 'Sex',
        type: 'select',
        required: false
    },
    {
        id: 'ex_unknown_date_of_birth',
        label: 'Date of Birth',
        type: 'unknown-checkbox',
        children: [{
                id: 'ex_date_of_birth',
                label: 'Date of Birth',
                type: 'text',
                required: false
            },
            {
                id: 'ex_age',
                label: 'Age',
                type: 'text',
                required: false,
                maxlength: 30
            },
        ]
    },
    {
        id: 'ex_year',
        label: 'Year',
        type: 'text',
        required: false,
        maxlength: 2
    },

    {
        id: 'ex_month',
        label: 'Month',
        type: 'text',
        required: true,
        maxlength: 2
    },

    {
        id: 'ex_day',
        label: 'Day',
        type: 'text',
        required: true,
        maxlength: 2
    },

    {
        id: 'ex_hour',
        label: 'Hour',
        type: 'text',
        required: true,
        maxlength: 2
    },
    {
        id: 'ex_religion',
        label: 'Religion',
        type: 'select',
        required: false
    },
    {
        id: 'ex_contact_number',
        label: 'Contact Number',
        type: 'text',
        required: false,
        maxlength: 20
    },

    {
        id: 'ex_contact_last_name',
        label: 'Last Name',
        type: 'text',
        required: false,
        maxlength: 30
    },

    {
        id: 'ex_contact_middle_name',
        label: 'Middle Name',
        type: 'text',
        required: false,
        maxlength: 30
    },
    {
        id: 'ex_contact_first_name',
        label: 'First Name',
        type: 'text',
        required: false,
        maxlength: 30
    },
    {
        id: 'ex_contact_telephone',
        label: 'Telephone',
        type: 'text',
        required: false,
        maxlength: 30
    },
    {
        id: 'ex_contact_relation',
        label: 'Relation to Patient',
        type: 'select',
        required: false
    },
];

var ALLFIELDS = [];

var addressParts = ['province', 'muninicipality_city', 'barangay', 'street_number', 'zip_code'];
/**
 * @function updateLabel
 * - Updates label in form when field is required or not. Adds asterisk (*) if required, else removes it in label
 * 
 * @params {Object} field
 *     @sampleParam {Object} field:
 *     {"id":"last_name","label":"Last Name","type":"text","required":true}
 * @params {Boolean} toggle
 */
function updateLabel(_field, toggle) {
    var field = _field || {};
    var required = field.required;

    // if toggle is true, this will force the field's required value instead of its predefined value from {field}
    if (toggle !== undefined) required = toggle && field.required;


    // don't update labels for radio or unknown-checkbox types
    if (['radio', 'unknown-checkbox'].includes(field.type)) return;


    var labelName = field.label;
    if (required) {
        labelName = '<strong class="text-red">*</strong> ' + field.label;
    }

    var $label = $('label[for="' + field.id + '"]');
    if ($label.length) {
        $label[0].innerHTML = labelName;
    }
}

/**
 * @function animateHideOrShow
 * - animate hide or show for a given class
 * 
 * @params {Boolean} hidden
 * @params {String} className
 */
function animateHideOrShow(hidden, className) {
    var addClass = hidden ? 'animate__fadeOut' : 'animate__fadeIn';
    var removeClass = hidden ? 'animate__fadeIn' : 'animate__fadeOut';

    // animation class
    $('.' + className).removeClass(removeClass).addClass(addClass);

    if (!hidden) {
        return $('.' + className).prop('hidden', false);
    }

    // hide after 0.5 seconds to allow the animation to finish
    setTimeout(
        function() {
            $('.' + className).prop('hidden', true)
        },
        500
    );
}


/**
 * @function handleUnkownCheckboxEvents
 * - Listens to any changes on unknown checkboxes, enables/disables child fields if ticked/unticked
 * - Resets values for child fields
 * - Updates labels and required validation for affected child fields
 * 
 * @params {Boolean} checked
 * @params {Object} field
 */
function handleUnkownCheckboxEvents(checked, field) {
    var childFields = field.children || [];

    childFields.forEach(function(childField) {
        resetFieldValue(childField);
        disableField(checked || !!childField.disabled, childField);
        // updateRequired(!checked, childField);
        updateLabel(childField, !checked);
    });
}

/**
 * @function updateRequired
 * - Updates rules for jquery validation on a field
 
 * @params {Object} field
 *     @sampleParam {Object} field:
 *     {"id":"last_name","label":"Last Name","type":"text","required":true}
 */
function updateRequired(required, field) {
    if (!field) return;

    if (required) {
        $('#' + field.id).rules('add', {
            required: field.required
        });
    } else {
        $('#' + field.id).rules('remove', 'required');
        $('#' + field.id).removeClass('is-invalid');
    }

    // key must be pulled from field's name for radio input fields 
    var key = field.type === 'radio' ? field.name : field.id;
    if (formOpts[currentForm] && formOpts[currentForm].rules[key]) {
        formOpts[currentForm].rules[key].required = required;
    }
}

/**
 * @function resetFieldValue
 * - Resets value for a field
 *
 * @params {Object} field
 *     @sampleParam {Object} field:
 *     {"id":"ca_region","label":"Region","type":"selectize","required":true}
 */
function resetFieldValue(field) {
    if (!field) return;

    // a special case for selectize inputs since we are using select2 plugin
    if (field.type === 'select') {
        $('#' + field.id).val(null).trigger('change');
    }
}

/**
 * @function disableField
 * - Disable a field
 *
 * @params {Object} field
 *     @sampleParam {Object} field:
 *     {"id":"ca_region","label":"Region","type":"selectize","required":true}
 */
function disableField(disabled, field) {
    if (!field) return;

    $('#' + field.id).prop('disabled', disabled);
}

/**
 * @function getAllFields
 * - Builds the whole content values from form 1 to 5
 * - ALLFIELDS variable will be sent to POST endpoint so all data for this form are fully collected
 *
 * @params {Object} _fields - a field's children array will be looped over to flatten the fields
 *
 */
function getAllFields(_fields) {
    var allFields = _fields || firstFormFields.concat(secondFormFields).concat(thirdFormFields).concat(fourthFormFields);
    ALLFIELDS = APP.Forms.getAllFields(allFields);
}

/**
 * @function updateValidationFields
 * - Loops over fields and sets validation rules per field
 *
 * @params {Object} _field
 * @params {Object} _opts
 * - {Boolean}  - _opts.disableAll forces all fields to be disabled
 * - {Array}    - _opts.requiredFields array of fields to be exempted for disabling
 * - {Boolean}  - _opts.overrideRequired this will determine the field's required value, if it will base value from requiredFields or actual field value
 */
function updateValidationFields(_fields, _opts) {
    var fields = _.cloneDeep(_fields) || []; // do a deep clone of this object to retain original value 
    var opts = _opts || {};
    var disableAll = opts.disableAll || false;
    var requiredFields = opts.requiredFields || [];
    var overrideRequired = opts.overrideRequired || false;

    // loop here all the fields and set validations stated in each fields
    fields.forEach(function(field) {

        // if this call is to disable all fields,
        // then set required to all fields except when field exists in requiredFields ['alias']
        if (disableAll) {
            var exemptedField = requiredFields.includes(field.id);

            if (overrideRequired) {
                field.required = exemptedField;
            }

            updateRequired(field.required, field);
            disableField(overrideRequired && !exemptedField, field);

            // if this is not a required field or not an exempted field, reset its value
            if (!field.required && !exemptedField) {
                resetFieldValue(field);
            }
        }

        if (['text', 'radio', 'select', 'file'].includes(field.type)) {
            var name = (field.type === 'radio') ? field.name : field.id;

            formOpts[currentForm].rules[name] = {
                required: field.required || false
            };
            formOpts[currentForm].messages[name] = {};

            if (field.required) {
                formOpts[currentForm].messages[name].required = APP.Forms.getRequiredMessage(field.label);
            }

            if (field.maxlength) {
                formOpts[currentForm].rules[name].maxlength = field.maxlength;
                formOpts[currentForm].messages[name].maxlength = APP.Forms.getMaxLengthMessage(field);
            }
        }

        updateLabel(field);

        var children = field.children;
        // if children in this field exists, loop over them and set validation fields
        if (children && children.length) {
            return updateValidationFields(children, _opts);
        }
    });
}

/**
 * @function bindPageValidation
 * - Defines the jquery validation for form parts - on page load
 * 
 * @param {Array} fields array of form fields
 * @param {String} form ['first' or 'second', or 'third']
 * @param {String} formId ID of the form
 */
function bindPageValidation(fields, form, formId) {
    updateValidationFields(_.clone(fields));
    APP.Forms.bindPageValidation(formId, formOpts[form]);
}

/**
 * @function getAddressFields
 * - Gets address fields for a given address name ['Current Address' or 'Permanent Address']
 *
 * @params {String} address
 * @returns {Array} address.children
 */
function getAddressFields(address, formFields) {
    var address = formFields.find(function(field) {
        return field.label === address;
    });

    if (!address) return [];


    return address.children || [];
}

/**
 * @function triggerValidationUpdates
 * - Custom jquery validation trigger
 *
 * @params {String} required
 * @params {String} fieldId
 * @params {String} fieldName
 */
function triggerValidationUpdates(required, fieldId, fieldName) {
    var errorMessage = APP.Forms.getRequiredMessage(fieldName);

    if (required) {
        $('#' + fieldId).rules('add', {
            required: false
        });
        $('#' + fieldId).addClass('is-invalid');

        var $fieldError = $('#' + fieldId + '-error');
        if ($fieldError.length) {
            $fieldError.removeAttr('style');
            $fieldError.html(errorMessage);
        }
    } else {
        $('#' + fieldId).rules('remove', 'required');
        $('#' + fieldId).removeClass('is-invalid');
    }
}

/**
 * @function uncheckUnknownAddresses
 * - Unchecks unknown addresses when entire block is unknown
 *
 */
function uncheckUnknownAddresses(prefix) {
    addressParts.forEach(function(address) {
        $('#unknown_' + prefix + '_' + address).prop('checked', false);
    });
}

/**
 * @function resetAddressField
 * - Resets the child address parts when parent field is set to "unknown"
 *
 */
function resetAddressField(selector, originalSelector, disabled) {
    var $selector = $('#' + selector);

    if ($selector.val() && $('#encounter_code').val() == "") {
        $selector.val(null).trigger('change');
    } else {
        $selector.val(null).trigger('change');
    }

    if (!$selector.val() && ($selector.is(':disabled') !== disabled)) {
        $selector.prop('disabled', disabled);
    }

    if (selector !== originalSelector) {
        $('#unknown_' + selector).prop('disabled', false);
    }

    // for jquery validation, if this is disabled then remove class "is-invalid"
    if (disabled) {
        $selector.removeClass('is-invalid');
    }
}

/**
 * @function bindUnknownAddressParts
 * - Listens to unknown address part events (MHIS-159)
 *
 */
function bindUnknownAddressParts() {
    // pa = permanent address, ca = current, pob = place of birth, soi = source of information
    var sections = ['pa', 'ca', 'pob', 'soi'];
    sections.forEach(function(section) {
        addressParts.forEach(function(address) {
            $('#unknown_' + section + '_' + address).on('change', function() {
                var selector = _.replace(this.id, 'unknown_', '');
                var originalSelector = selector;

                resetAddressField(selector, originalSelector, this.checked);

                if (!this.checked) return;

                if (selector.includes('province')) {
                    selector = selector.replace('province', 'muninicipality_city');
                    resetAddressField(selector, originalSelector, this.checked);
                }

                if (selector.includes('muninicipality_city')) {
                    selector = selector.replace('muninicipality_city', 'barangay');
                    resetAddressField(selector, originalSelector, this.checked);
                }
            });
        });
    });
}

/**
 * @function bindAddressEvents
 * - Listens to any ticked checkboxes for addresses
 * - ^ ['same as current address' or 'unknown permanent address' or 'unknown curren address']
 * - If same as current address is ticked, it will populate all values from current address to permanent address
 * - ^ It will also listen to any changes from current address to populate values to permanent address section
 * - Disables unknown permanent address checkbox when same as current address checkbox is ticked
 * - Disables same as current address checkbox when uknown permanent address checkbox is ticked
 *
 */
function bindAddressEvents() {
    var caFields = getAddressFields('Current Address', firstFormFields);
    var $unknown_current_address = $('#unknown_current_address');

    $unknown_current_address.on('change', function() {
        if (this.checked) {
            uncheckUnknownAddresses('ca');
        }

    });

    // define listeners for current address form
    caFields.forEach(function(caField) {
        var paFieldId = caField.id.replace('ca_', 'pa_');
        var caFieldValue = $('#' + caField.id).val();
        var listener = caField.type === 'text' ? 'keyup' : 'change';

        $('#' + caField.id).on(listener, function() {
            caFieldValue = $('#' + caField.id).val();

            if (caField.type === 'select') {
                $('#' + paFieldId).trigger('change');
            }

        });
    })


}

/**
 * @function bindContactAddressEvents
 * - Contact addresses
 *
 */
function bindContactAddressEvents() {

    var $father_same_as_patient_address = $('#father_same_as_patient_address');
    var $father_address = $('#father_address');

    var $mother_same_as_patient_address = $('#mother_same_as_patient_address');
    var $mother_address = $('#mother_address');

    var $spouse_same_as_patient_address = $('#spouse_same_as_patient_address');
    var $spouse_address = $('#spouse_address');

    var $ca_street_number = $('#ca_street_number').val();
    var $ca_country = $('#ca_country option:selected').text();
    var $ca_region = $('#ca_region option:selected').text();
    var $ca_province = $('#ca_province option:selected').text();
    var $ca_muninicipality_city = $('#ca_muninicipality_city option:selected').text();
    var $ca_barangay = $('#ca_barangay option:selected').text();
    var $ca_zip_code = $('#ca_zip_code').val();

    var $complete_address = $ca_street_number.trim() + ", " + $ca_barangay.trim() + ", " + $ca_muninicipality_city.trim() + ", " + $ca_province.trim() + ", " + $ca_region.trim() + ", " + $ca_country.trim() + ", " + $ca_zip_code.trim();



    $father_same_as_patient_address.on('change', function() {
        if (!this.checked) {
            $father_address.val("");
            return;
        }
        $father_address.val($complete_address);

    });

    $mother_same_as_patient_address.on('change', function() {
        if (!this.checked) {
            $mother_address.val("");
            return;
        }
        $mother_address.val($complete_address);

    });

    $spouse_same_as_patient_address.on('change', function() {
        if (!this.checked) {
            $spouse_address.val("");
            return;
        }
        $spouse_address.val($complete_address);

    });

}

/**
 * @function bindUnknownNameCheckbox
 * - Listens to change event from unknown_name checkbox
 * - Makes alias input text field required when unknown name checkbox is ticked
 *
 */
function bindUnknownNameCheckbox() {
    var _aliasField = firstFormFields.find(function(field) {
        return field.id === 'alias';
    }) || {};

    var aliasField;

    $('#unknown_name').on('change', function() {
        aliasField = _.cloneDeep(_aliasField);
        aliasField.required = this.checked;

        updateRequired(this.checked, aliasField);
        updateLabel(aliasField, this.checked);
    });
}

/**
 * @function bindPreviousButtonEvents
 * - Listens to click events for previous buttons
 * - Sets the currentForm value depending on the button clicked
 *
 */
function bindPreviousButtonEvents() {
    $('#btn_back_to_first_form').click(function() {
        currentForm = 'first';

        stepper.previous();
    });

    $('#btn_back_to_second_form').click(function() {
        currentForm = 'second';

        stepper.previous();
    });

    $('#btn_back_to_third_form').click(function() {
        currentForm = 'third';

        stepper.previous();
    });

    $('#btn_back_to_fourth_form').click(function() {
        currentForm = 'fourth';

        stepper.previous();
    });


}

/**
 * @function selectTriggerChanges
 * - Bind all events related to first form
 *
 */
function selectTriggerChanges(formFields) {
    // filters all the select options
    var selectFields = formFields.filter(function(field) {
        return field.type === 'select';
    });

    // set the values if exists
    selectFields.forEach(function(field) {
        $('#' + field.id);
    });

}

/**
 * @function bindAllEventFormEvents
 * - Bind all events related to express form
 *
 */
function bindAllExpressFormEvents() {
    // get all unknown checkboxes from first form
    var unknownCheckboxFields = expressFormFields.filter(function(field) {
        return field.type === 'unknown-checkbox';
    });

    // define listeners for all unknown checkboxes on first form
    unknownCheckboxFields.forEach(function(field) {
        $('#' + field.id).change(function() {
            handleUnkownCheckboxEvents(this.checked, field);
        });
    });

    // listen to date of birth updates
    bindDateOfBirthEvents();

    // define jquery validation for first page
    bindPageValidation(expressFormFields, 'express', '#express_form');

    // define listener for unknown name checkbox
    bindUnknownNameCheckbox();

    var $date_of_birth_hidden = $('#hdob').val();
    // $dateOfBirth.val($date_of_birth_hidden);

    var datex = moment($date_of_birth_hidden, 'DD/MM/YYYY')
    var a = moment(new Date());
    var b = moment(datex);
    var years = a.diff(b, 'year');
    b.add(years, 'years');
    if (!isNaN(years)) {
        $('#year').val(years);
    }
    var months = a.diff(b, 'months');
    b.add(months, 'months');
    $('#month').val(months);
    var days = a.diff(b, 'days');
    b.add(days, 'days');
    $('#day').val(days);
    var hours = a.diff(b, 'hours');
    $('#hour').val(hours);

    selectTriggerChanges(expressFormFields);
}

/**
 * @function bindAllFirstFormEvents
 * - Bind all events related to first form
 *
 */
function bindAllFirstFormEvents() {
    // get all unknown checkboxes from first form
    var unknownCheckboxFields = firstFormFields.filter(function(field) {
        return field.type === 'unknown-checkbox';
    });

    // define listeners for all unknown checkboxes on first form
    unknownCheckboxFields.forEach(function(field) {
        $('#' + field.id).change(function() {
            handleUnkownCheckboxEvents(this.checked, field);
        });
    });

    // define listener for address events/changes
    bindAddressEvents();

    // Bind select fields with ajax call triggers (regions, provinces, cities)
    // bindRegionUpdates();
    // bindProvinceUpdates();
    // bindCityUpdates();

    // Bind all events for country - place of birth
    bindCountryEvents();

    // listen to date of birth updates
    bindDateOfBirthEvents();

    // listen to admission date and time updates
    bindAdmissionDateAndTimeEvents();

    // listen to sex updates
    bindSexEvents();

    // define jquery validation for first page
    bindPageValidation(firstFormFields, 'first', '#patient_details');

    // define listener for unknown name checkbox
    bindUnknownNameCheckbox();

    // define listener for image upload
    bindUploadEvent();

    var $date_of_birth_hidden = $('#hdob').val();

    // $dateOfBirth.val($date_of_birth_hidden);

    var datex = moment($date_of_birth_hidden, 'DD/MM/YYYY')

    var a = moment(new Date());
    var b = moment(datex);

    var years = a.diff(b, 'year');

    b.add(years, 'years');

    if (!isNaN(years)) {
        $('#year').val(years);
    }

    var months = a.diff(b, 'months');
    b.add(months, 'months');

    $('#month').val(months);

    var days = a.diff(b, 'days');
    b.add(days, 'days');

    $('#day').val(days);

    var hours = a.diff(b, 'hours');

    $('#hour').val(hours);

    var $photo = $('#photo');
    var validFormats = 'jpg|jpeg|png';
    $photo.rules('add', {
        extension: validFormats,
        accept: 'image/*'
    });
    $photo.rules('messages', {
        extension: 'Files must be in ' + validFormats + ' formats.',
        accept: 'File must be an image'
    });

    selectTriggerChanges(firstFormFields);

    $('#ca_zip_code').prop('disabled', true);
}


/**
 * @function bindAllSecondFormEvents
 * - Bind all events related to second form
 *
 */
function bindAllSecondFormEvents() {

    // get all unknown checkboxes from second form
    var unknownCheckboxFields = secondFormFields.filter(function(field) {
        return field.type === 'unknown-checkbox';
    });

    // define listeners for all unknown checkboxes on second form
    unknownCheckboxFields.forEach(function(field) {
        $('#' + field.id).change(function() {
            handleUnkownCheckboxEvents(this.checked, field);
        });
    });

    //bindContactAddressEvents
    bindContactAddressEvents();

    // define jquery validation for second page
    bindPageValidation(secondFormFields, 'second', '#contact_details');

    selectTriggerChanges(secondFormFields);

}

/**
 * @function bindAllThirdFormEvents
 * - Bind all events related to third form
 *
 */
function bindAllThirdFormEvents() {

    // get all unknown checkboxes from third form
    var unknownCheckboxFields = thirdFormFields.filter(function(field) {
        return field.type === 'unknown-checkbox';
    });

    // define listeners for all unknown checkboxes on third form
    unknownCheckboxFields.forEach(function(field) {
        $('#' + field.id).change(function() {
            handleUnkownCheckboxEvents(this.checked, field);
        });
    });

    // define jquery validation for third page
    bindPageValidation(thirdFormFields, 'third', '#informants');

    selectTriggerChanges(thirdFormFields);

}


/**
 * @function bindAllFourthFormEvents
 * - Bind all events related to fourth form
 *
 */
function bindAllFourthFormEvents() {

    // get all unknown checkboxes from fourth form
    var unknownCheckboxFields = fourthFormFields.filter(function(field) {
        return field.type === 'unknown-checkbox';
    });

    // define listeners for all unknown checkboxes on fourth form
    unknownCheckboxFields.forEach(function(field) {
        $('#' + field.id).change(function() {
            handleUnkownCheckboxEvents(this.checked, field);
        });
    });

    // define jquery validation for fourth page
    bindPageValidation(fourthFormFields, 'fourth', '#source_of_payments');

    selectTriggerChanges(fourthFormFields);

}

/**
 * @function bindOtherOptionEvents
 * - Bind all events in select option when other option is available
 *
 */
function bindOtherOptionEvents() {
    var allForms = firstFormFields;
    var formsWithOtherOptions = allForms.filter(function(field) {
        // prettier-ignore
        return (typeof field.others === 'object');
    });

    formsWithOtherOptions.forEach(function(option) {
        // listen to any fields with "Others (Please specify)"

        var selector = '#' + option.id;
        var isRadioField = (option.type === 'radio');
        if (isRadioField) {
            selector = 'input[type="radio"][name="' + option.name + '"]';
        }

        $(selector).on('change', function() {
            var otherField = option.others;
            var required = option.required;
            var hidden = ($('#' + option.id).val() !== 'others');

            if (isRadioField) {
                var isRadioSelected = ($('input[name="' + option.name + '"]:checked').attr('id') === option.id);
                required = (option.required && isRadioSelected);
                hidden = !isRadioSelected;
            }

            animateHideOrShow(hidden, 'other-' + option.id);
            updateRequired(required, otherField);
            updateLabel(otherField);

        });
    });
}


/**
 * @function asd
 * - Bind all events for date of birth field
 * - Updates age field as the date of birth updates
 */
function bindSexEvents() {
    var $sex = $('#sex');

    $sex.on('change', function() {
        if (this.value == 'F') {
            $('#pregnancy_status').val(null).trigger('change');
            $('#pregnancy_status').prop('disabled', false);
        } else {
            $('#pregnancy_status').val(null).trigger('change');
            $('#pregnancy_status').prop('disabled', true);
        }
    });

}



/**
 * @function bindAdmissionDateAndTimeEvents
 * - Bind all events for admission date and time field
 */
function bindAdmissionDateAndTimeEvents() {
    var $admission_date = $('#admission_date');
    var $admission_time = $('#admission_time');

    var day = new Date()
    var dayWrapper = moment(day);
    var dayString = dayWrapper.format("D/MM/YYYY");
    var timeString = dayWrapper.format("H:mm:ss");


    $admission_date.datetimepicker({
        format: 'DD/MM/YYYY',
        maxDate: moment(),
        defaultDate: new Date(),
        autoclose: 1,
        todayHighlight: 1,
        showOnFocus: true,
    });

    $admission_date.val(dayString);

    $admission_time.datetimepicker({
        format: 'HH:mm:ss',
        maxDate: moment(),
        defaultDate: new Date(),
        autoclose: 1,
        todayHighlight: 1,
        showOnFocus: true,
    });

    $admission_time.val(timeString);

}

/**
 * @function bindDateOfBirthEvents
 * - Bind all events for date of birth field
 * - Updates age field as the date of birth updates
 */
function bindDateOfBirthEvents() {
    var $dateOfBirth = $('#date_of_birth');
    var $date_of_birth_hidden = $('#hdob').val();

    if ($date_of_birth_hidden != "") {
        $dateOfBirth.datetimepicker({
            format: 'DD/MM/YYYY',
            defaultDate: moment($date_of_birth_hidden, 'DD/MM/YYYY'),
            maxDate: moment(),
        });

    } else {

        $dateOfBirth.datetimepicker({
            format: 'DD/MM/YYYY',
            maxDate: moment(),
        });

    }

    $dateOfBirth.on('change.datetimepicker', function(current) {

        var $age = moment().diff(current.date, 'years');
        $('#age').val($age);

        var a = moment(new Date());
        var b = moment(current.date);

        var years = a.diff(b, 'year');
        b.add(years, 'years');

        $('#year').val(years);

        var months = a.diff(b, 'months');
        b.add(months, 'months');

        $('#month').val(months);

        var days = a.diff(b, 'days');
        b.add(days, 'days');

        $('#day').val(days);

        var hours = a.diff(b, 'hours');

        $('#hour').val(hours);

    });

    $('#unknown_date_of_birth').on('change', function() {
        $('#date_of_birth').val('');
        $('#year').val('');
        $('#months').val('');
        $('#days').val('');
        $('#hours').val('');
    });
}

/**
 * @function bindSourceOfInfoEvents
 * - Bind all source of information events
 * - Hides or shows the additional forms for source of information when "patient" radio option is selected
 * - When same as patient checkbox is clicked, current address of patient should be populated
 *
 */
function bindSourceOfInfoEvents() {
    var isPatientSource;

    $('input[type="radio"][name="source_of_info"]').on('change', function() {
        isPatientSource = (this.id === 'source_patient');
        animateHideOrShow(isPatientSource, 'source-of-info-addtnl-form');
        $('#soi_patient_alert').prop('hidden', !isPatientSource);


    });

    var caFields = getAddressFields('Current Address', firstFormFields);
    var soiFields = _.get(soiAddressFields, '0.children');
    var checked;

}

/**
 * @function updateSelectOptions
 * - Updates options for a select field
 * - Triggered when api calls are made against a select field that resets options (provinces, cities, barangays)
 *
 *  * @params {Array} data - array of data returned from an api call
 *  * @params {String} elementId - select id target
 *  * @params {String} name - attribute reference in each data object to get the option name
 *  * @params {String} val - attribute reference in each data object to get the option value
 */
function updateSelectOptions(data, elementId, name, val) {
    if (!data || !data.length) {
        return;
    }

    if (!elementId || !name || !val) {
        console.log('Missing parameters passed in updateSelectOptions');
        console.log('elementId =', elementId);
        console.log('data attribute name =', name);
        console.log('data attribute val =', val);
        return;
    }

    data.forEach(function(option) {
        $('<option/>', {
            value: option[val],
            text: option[name]
        }).appendTo('#' + elementId);
    });

    $('#' + elementId).val(null).trigger('change');
    $('#' + elementId).prop('disabled', false);

    $('#unknown_' + elementId).prop('disabled', false);

    var caFieldId = elementId;

    if (elementId.includes('pa_')) {
        caFieldId = elementId.replace('pa_', 'ca_');
    }

    if (elementId.includes('soi_')) {
        caFieldId = elementId.replace('soi_', 'ca_');
    }

    var caFieldValue = $('#' + caFieldId).val();
    var isFieldCurrentAddress = (caFieldId === elementId);

    if (isFieldCurrentAddress) {
        $('#' + elementId).prop('disabled', false);
    }

    // if soiAddressValues object has values, set its value from it
    // object values were initiated from assets/js/patient/search.js
    if (elementId.includes('soi_')) {
        if (soiAddressValues[elementId]) {
            $('#' + elementId).val(soiAddressValues[elementId]).trigger('change');
        }
        if (!isSameAsPatientAddress) {
            $('#' + elementId).prop('disabled', false);
            $('#unknown_' + elementId).prop('disabled', false);
        }
    }


}

/**
 * @function resetSelectOptions
 * - Resets/empties and disables select options once an API call is triggered againts its new options
 *
 *  * @params {String} elementId - select id target
 */
function resetSelectOptions(elementId) {
    if (!elementId) return;

    // we should also disable the city dropdown when resetting selections for province
    if (elementId.includes('province')) {
        var cityId = elementId.replace('province', 'muninicipality_city');
        $('#' + cityId).empty();
        $('#' + cityId).prop('disabled', true);

        var barangayId = elementId.replace('province', 'barangay');
        $('#' + barangayId).empty();
        $('#' + barangayId).prop('disabled', true);
    }

    // we should also disable the branagay dropdown when resetting selections for cities
    if (elementId.includes('muninicipality_city')) {
        var barangayId = elementId.replace('muninicipality_city', 'barangay');
        $('#' + barangayId).empty();
        $('#' + barangayId).prop('disabled', true);
    }


    $('#' + elementId).empty();
    $('#' + elementId).prop('disabled', true);
}

/**
 * @function resetAccomodationSelectOptions
 * - Resets/empties and disables select options once an API call is triggered againts its new options
 *
 *  * @params {String} elementId - select id target
 */
function resetAccomodationSelectOptions(elementId) {
    if (!elementId) return;

    // we should also disable the city dropdown when resetting selections for province
    if (elementId.includes('room')) {
        var bedId = elementId.replace('room', 'bed');
        $('#' + bedId).empty();
        $('#' + bedId).prop('disabled', true);
    }

    $('#' + elementId).empty();
    $('#' + elementId).prop('disabled', true);
}

/**
 * @function getRooms
 * - Execute an ajax call to retrieve rooms by ward id
 *
 *  * @params {String} wardId - ward id
 *  * @params {String} roomId - room element id to reset options
 */
function getRooms(wardId, roomId) {
    if (!wardId) return;

    resetAccomodationSelectOptions(roomId);

    $.ajax({
        method: 'GET',
        url: '/api/accomodations/rooms/' + wardId
    }).then(function(data) {
        var nameKey = 'rmname';
        var valKey = 'rmintkey';

        updateSelectOptions(data || [], roomId, nameKey, valKey);
    }).catch(function(error) {
        console.log(error);
        APP.UI.alert({
            msg: 'Unable to load room options. Please try again.'
        });
    });
}


/**
 * @function getBeds
 * - Execute an ajax call to retrieve beds by room id
 *
 *  * @params {String} roomId - room id
 *  * @params {String} bedId - bed element id to reset options
 */
function getBeds(roomId, bedId) {
    if (!roomId) return;

    $.ajax({
        method: 'GET',
        url: '/api/accomodations/beds/' + roomId
    }).then(function(data) {
        var nameKey = 'bdname';
        var valKey = 'bdintkey';
        updateSelectOptions(data || [], bedId, nameKey, valKey);
    }).catch(function(error) {
        console.log(error);
        APP.UI.alert({
            msg: 'Unable to load bed options. Please try again.'
        });
    });
}

/**
 * @function getProvinces
 * - Execute an ajax call to retrieve provinces by region id
 *
 *  * @params {String} regionId - region id
 *  * @params {String} provinceId - province element id to reset options
 */
function getProvinces(regionId, provinceId) {

    if (!regionId) return;

    resetSelectOptions(provinceId);

    $.ajax({
        method: 'GET',
        url: '/api/provinces/region/' + regionId
    }).then(function(data) {
        var nameKey = 'provname';
        var valKey = 'provcode';
        updateSelectOptions(data || [], provinceId, nameKey, valKey);
    }).catch(function(error) {
        console.log(error);
        APP.UI.alert({
            msg: 'Unable to load province options. Please try again.'
        });
    });
}

/**
 * @function getCities
 * - Execute an ajax call to retrieve cities by province id
 *
 *  * @params {String} provinceId - province id
 *  * @params {String} cityId - city element id to reset options
 */
function getCities(provinceId, cityId) {
    if (!provinceId) return;

    resetSelectOptions(cityId);

    $.ajax({
        method: 'GET',
        url: '/api/cities/province/' + provinceId
    }).then(function(data) {
        var nameKey = 'ctyname';
        var valKey = 'ctycode';
        updateSelectOptions(data || [], cityId, nameKey, valKey);
    }).catch(function(error) {
        console.log(error);
        APP.UI.alert({
            msg: 'Unable to load municipality/city options. Please try again.'
        });
    });
}


/**
 * @function getZipcodes
 * - Execute an ajax call to retrieve zipcodes by city/municipality id
 *
 *  * @params {String} cityId - city/municipality id
 */
function getZipcodes(cityId) {
    if (!cityId) return;

    $.ajax({
        method: 'GET',
        url: '/api/zipcode/' + cityId
    }).then(function(data) {
        $('#ca_zip_code').val(data[0].ctyzipcode);
    }).catch(function(error) {
        console.log(error);
        APP.UI.alert({
            msg: 'Unable to load zipcode options. Please try again.'
        });
    });
}

/**
 * @function getBarangays
 * - Execute an ajax call to retrieve barangays by city/municipality id
 *
 *  * @params {String} cityId - city/municipality id
 *  * @params {String} barangayId - barangay element id to reset options
 */
function getBarangays(cityId, barangayId) {
    if (!cityId) return;

    resetSelectOptions(barangayId);

    $.ajax({
        method: 'GET',
        url: '/api/barangays/city/' + cityId
    }).then(function(data) {
        var nameKey = 'bgyname';
        var valKey = 'bgycode';
        updateSelectOptions(data || [], barangayId, nameKey, valKey);
    }).catch(function(error) {
        console.log(error);
        APP.UI.alert({
            msg: 'Unable to load barangay options. Please try again.'
        });
    });
}

/**
 * @function bindRegionUpdates
 * - Binds all listeners for each region select fields
 * - Calls API for retrieving provinces as it changes
 *
 */
function bindRegionUpdates() {


    var allRegionInputs = ALLFIELDS.filter(function(select) {
        return select.label === 'Region';
    });


    allRegionInputs.forEach(function(select) {
        var provinceId = select.id.replace('region', 'province');
        var $select = $('#' + select.id);
        $select.on('change', function() {
            getProvinces($select.val(), provinceId);
        });
    });
}

/**
 * @function bindProvinceUpdates
 * - Binds all listeners for each province select fields
 * - Calls API for retrieving cities/municipalities as it changes
 *
 */
function bindProvinceUpdates() {
    var allProvinceInputs = ALLFIELDS.filter(function(select) {
        return select.label === 'Province';
    });

    allProvinceInputs.forEach(function(select) {
        var cityId = select.id.replace('province', 'muninicipality_city');
        var $select = $('#' + select.id);
        $select.on('change', function() {
            getCities($select.val(), cityId);
        });
    });
}

/**
 * @function bindCityUpdates
 * - Binds all listeners for each city/municipality select fields
 * - Calls API for retrieving barangays as it changes
 *
 */
function bindCityUpdates() {
    // excluding place of birth select, since barangay is not in the form for this
    var allCityInputs = ALLFIELDS.filter(function(select) {
        return select.label === 'Municipality/City' && select.id !== 'pob_muninicipality_city';
    });

    allCityInputs.forEach(function(select) {
        var barangayId = select.id.replace('muninicipality_city', 'barangay');
        var $select = $('#' + select.id);
        $select.on('change', function() {
            getZipcodes($select.val());
            getBarangays($select.val(), barangayId);
        });
    });
}

/**
 * @function bindWardUpdates
 * - Binds all listeners for each ward select fields
 * - Calls API for retrieving rooms as it changes
 *
 */
function bindWardUpdates() {
    var allWardInputs = ALLFIELDS.filter(function(select) {
        return select.label === 'Ward';
    });

    allWardInputs.forEach(function(select) {
        var roomId = select.id.replace('ward', 'room');
        var $select = $('#' + select.id);
        $select.on('change', function() {
            getRooms($select.val(), roomId);
        });
    });
}

/**
 * @function bindRoomUpdates
 * - Binds all listeners for each room select fields
 * - Calls API for retrieving rooms as it changes
 *
 */
function bindRoomUpdates() {
    var allRoomInputs = ALLFIELDS.filter(function(select) {
        return select.label === 'Room';
    });

    allRoomInputs.forEach(function(select) {
        var roomId = select.id.replace('room', 'bed');
        var $select = $('#' + select.id);
        $select.on('change', function() {
            getBeds($select.val(), roomId);
        });
    });
}

/**
 * @function bindCountryEvents
 * - Binds listerner for a country field (Place of Birth section)
 * - Hides/shows fields for selected country
 * - If PH is selected, it shows the region, province and city options and hides textbox "Address"
 * - If PH is not selected, it hides the region, province and city options and shows a free textbox "Address"
 *
 */
function bindCountryEvents() {
    var $pob_country = $('#pob_country');
    $pob_country.val(phId).trigger('change');
    var isPh = true;

    $pob_country.on('change', function() {
        isPh = $pob_country.val() === phId;
        animateHideOrShow(!isPh, 'pob-ph');
        animateHideOrShow(isPh, 'pob-non-ph');

        if (isPh) {
            $('#pob_province').prop('disabled', true);
            $('#pob_muninicipality_city').prop('disabled', true);
        }
    });

    var $ca_country = $('#ca_country');
    $ca_country.val(phId).trigger('change');
    var isPh = true;

    $ca_country.on('change', function() {
        isPh = $ca_country.val() === phId;
        animateHideOrShow(!isPh, 'ca-ph');
        animateHideOrShow(isPh, 'ca-non-ph');

        if (isPh) {
            // use this for Hifi
            // $('#ca_region').prop('disabled', false);
            // $('#ca_province').prop('disabled', true);
            // $('#ca_muninicipality_city').prop('disabled', true);
            // $('#ca_barangay').prop('disabled', true);
            // $('#ca_zip_code').prop('disabled', true);

            // Just for midfi
            $('#ca_region').prop('disabled', false);
            $('#ca_province').prop('disabled', false);
            $('#ca_muninicipality_city').prop('disabled', false);
            $('#ca_barangay').prop('disabled', false);
            $('#ca_zip_code').prop('disabled', false);
        } else {
            $('#ca_region').prop('disabled', true);
            $('#ca_province').prop('disabled', true);
            $('#ca_muninicipality_city').prop('disabled', true);
            $('#ca_barangay').prop('disabled', true);
            $('#ca_zip_code').prop('disabled', true);


            $('#ca_region').val(null);
            $('#ca_province').val(null);
            $('#ca_muninicipality_city').val(null);
            $('#ca_barangay').val(null);
            $('#ca_zip_code').val(null);
        }
    });
}

/**
 * @function bindRequiredSelectEvents
 * - Removes invalid class whenever a change is triggered against a required select field
 * - This is to fix the jquery validation not recognizing updates from hidden fields because
 * - we are using select2 library for our select element styling
 *
 */
function bindRequiredSelectEvents() {
    var allRequiredSelect = ALLFIELDS.filter(function(field) {
        return field.type === 'select' && field.required;
    });

    allRequiredSelect.forEach(function(field) {
        var $select = $('#' + field.id);
        $select.on('change', function() {
            if ($select.val()) {
                $select.removeClass('is-invalid');
            }
        });
    });
}

/**
 * @function getPlaceOfBirthValue
 * - Get concatenated place of birth value
 *
 * @returns {String} concatenated place of birth values
 */
function getPlaceOfBirthValue() {
    var place_of_birth = '';

    if (!$('#unknown_place_of_birth').is(':checked')) {
        var selectedCountry = $('#pob_country').val();
        if (selectedCountry === phId) {
            place_of_birth = $('#pob_muninicipality_city option:selected').text();
            place_of_birth += ', ' + $('#pob_province option:selected').text();
        } else {
            place_of_birth = $('#pob_text_address').val();
            place_of_birth += ', ' + $('#pob_country option:selected').text();
        }
    }

    return place_of_birth;
}

/**
 * @function getSoiAddress
 * - Get concatenated source of information address
 *
 * @returns {String} concatenated address values
 */
function getSoiAddress() {
    var soi_address = '';
    var delimiter = '';

    if ($('input[name="source_of_info"]:checked').val() !== 'patient') {
        if ($('#soi_street_number').val()) {
            soi_address += delimiter + $('#soi_street_number').val();
            delimiter = ' ';
        }

        if ($('#soi_barangay').val()) {
            soi_address += delimiter + $('#soi_barangay option:selected').text();
            delimiter = ' ';
        }

        if ($('#soi_muninicipality_city').val()) {
            soi_address += delimiter + $('#soi_muninicipality_city option:selected').text();
            delimiter = ', ';
        }

        if ($('#soi_province').val()) {
            soi_address += delimiter + $('#soi_province option:selected').text();
        }
    }

    return soi_address;
}

/**
 * @function getAllFieldValues
 * - Get all field values
 * - Triggered before submitting form to collect final values from 3 forms
 *
 * @returns {Object} complete form data from 3 forms
 */
function getAllFieldValues() {
    var _form = APP.Forms.getAllFieldValues(ALLFIELDS);

    _form.soi_address = getSoiAddress();
    _form.place_of_birth = getPlaceOfBirthValue();
    _form.save_action = saveAction;
    return _form;
}

/**
 * @function savePatientInformation
 * - Performs an ajax call to save patient information
 *
 */
function savePatientInformation() {

    // save endpoint varies when adding patient record or adding to queue,
    // this variable is declared on php page route [patient - Add.php/Search.php]
    if (!save_endpoint) {
        return APP.UI.alert({
            msg: 'Unable to save patient record, endpoint not found for this form!'
        });
    }

    var _form = getAllFieldValues();

    var formData = new FormData();

    //** modify the common ajax to handle file upload **/
    $.each(_form, function(key, value) {
        formData.append(key, value);
    });

    // for midfi use only
    APP.UI.showLoader('Saving...');
    var successMsg = {
        type: 'success',
        msg: successMessage
    };
    setTimeout(APP.UI.alert(successMsg), 3000);
    setTimeout(redirect('queue'), 3000);

    // use this for hifi
    // $.ajax({
    //     method: 'POST',
    //     url: save_endpoint,
    //     enctype: 'multipart/form-data',
    //     processData: false,
    //     contentType: false,
    //     data: formData
    // }).then(function(_response) {
    //     var successMsg = {
    //         type: 'success',
    //         msg: successMessage
    //     };

    //     if (!_response) return APP.UI.alert(successMsg);

    //     var response;

    //     try {
    //         response = JSON.parse(_response);
    //     } catch (error) {
    //         return APP.UI.alert(successMsg);
    //     }

    //     if (response.redirect) {
    //         // success flash message is set within the save endpoint
    //         window.location = response.redirect;
    //     }
    // }).catch(function(xhr) {
    //     var errorMsg = 'There was an error while saving patient records.';

    //     APP.UI.hideLoader();
    //     var response = {};

    //     try {
    //         response = JSON.parse(xhr.responseText);
    //     } catch (error) {
    //         return APP.UI.alert({
    //             msg: errorMsg
    //         });
    //     }

    //     errorMsg = response.error_msg || errorMsg;

    //     if (xhr.status === 400 && response.errors && response.errors.length) {
    //         APP.UI.showErrorMessages(response.errors, 'Please see error messages below');
    //     }

    //     APP.UI.alert({
    //         msg: errorMsg
    //     });
    // });
}

/**
 * @function redirect
 * - redirect user to queue page
 *
 */
function redirect(page) {
    window.location = page;
}

/**
 * @function bindSaveButtonEvents
 * - Watch on click events when saving patient
 * - Determines if button action is to save patient in queue or just save patient record
 *
 */

function bindSaveButtonEvents() {
    $('#btn_save').on('click', function() {
        saveAction = 'save';
    });

    $('#btn_save_and_queue').on('click', function() {
        saveAction = 'save-and-queue';
    });
}

/**
 * @function bindAlertOnCloseEvent
 * - Watch on close event for alerts
 * - Hides the alert instead of closing/removing the element from document
 *
 */
function bindAlertOnCloseEvent() {
    $(document).on('close.bs.alert', '.alert', function(e) {
        $(this).prop('hidden', true);
        return false;
    });
}

/**
 * @function bindUploadEvent
 * - Watch on upload event
 * - Displays thumbnail of uploaded image
 *
 */
function bindUploadEvent() {
    $('#photo').on('change', function() {
        var [file] = this.files;
        if (file) {
            console.log(URL.createObjectURL(file));
            $('#profile_user_img').attr('src', URL.createObjectURL(file));
        }
    })
}

/**
 * @function initSpecialElements
 * - Initialise special elements that use 3rd party libraries for UI display
 *
 */
function initSpecialElements() {
    //Initialize Select2 Elements

    $('.select2').select2();
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });

    // first option usually gets pre selected - reset select inputs on load 

    // if($('#encounter_code').val() == ""){
    //     $('.patient-form select').val(null).trigger('change');
    // }

}

// document on ready listener - jquery
$(function() {
    currentForm = 'first';

    stepper = new Stepper(document.getElementById('addPatient_stepper'));

    // init elements in form that use 3rd party libraries
    initSpecialElements();

    $.validator.setDefaults({
        submitHandler: function(e) {
            if ($(e).attr('id') === 'patient_details') {
                currentForm = 'second';

                // Bind all events related to second form
                bindAllSecondFormEvents();
            }

            if ($(e).attr('id') === 'contact_details') {
                currentForm = 'third';

                // Bind all events related to third form
                bindAllThirdFormEvents();
            }

            if ($(e).attr('id') === 'informants') {
                currentForm = 'fourth';

                // Bind all events related to fourth form
                bindAllFourthFormEvents();
            }

            if ($(e).attr('id') === 'source_of_payments') {
                savePatientInformation();
            }

            if (has_stepper) {
                stepper.next();
            }

            if ($(e).attr('id') === 'express_form') {
                savePatientInformation();
            }
        }
    });

    // Get all fields from 1st to last
    getAllFields();

    // Bind all events related to first form
    bindAllExpressFormEvents();

    // Bind all events related to first form
    bindAllFirstFormEvents();

    // Bind all events for previous buttons
    bindPreviousButtonEvents();

    // Bind all other option ("Please specify") in select events for all forms
    bindOtherOptionEvents();

    // Binds all events for required select fields
    bindRequiredSelectEvents();

    // Bind all save button events (form 3)
    bindSaveButtonEvents();

    // Bind alert on close event
    bindAlertOnCloseEvent();

    // Bind unknown address checkbox events
    bindUnknownAddressParts();

});

// bind stepper plugin, only if the page has stepper initialized in document
// add to queue modal doesn't have stepper so this shouldn't be initialized
// if (has_stepper) {
//     document.addEventListener('DOMContentLoaded', function() {
//         window.stepper = new Stepper(document.getElementById('addPatient_stepper'));
//     });
// }