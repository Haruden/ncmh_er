var phId = phId || "";
var has_stepper = true; //default: var has_stepper = has_stepper || false;
var saveAction = "";
var save_endpoint = "details/save";
// var save_endpoint = save_endpoint || ""; 
var currentSelectedPhOption;
var soiAddressValues = {};
var $slider;
var successMessage = successMessage || "Successfully saved patient records!";

var formOpts = {
    first: { rules: {}, messages: {} },
    second: { rules: {}, messages: {} },
    third: { rules: {}, messages: {} },
};

var soiAddressFields = [{
        id: "soi_region",
        label: "Region",
        type: "select",
    },
    {
        id: "unknown_soi_province",
        label: "Unknown",
        type: "unknown-checkbox",
        disabled: true,
    },
    {
        id: "soi_province",
        label: "Province",
        type: "select",
        disabled: true,
    },
    {
        id: "unknown_soi_muninicipality_city",
        label: "Unknown",
        type: "unknown-checkbox",
        disabled: true,
    },
    {
        id: "soi_muninicipality_city",
        label: "Municipality/City",
        type: "select",
        disabled: true,
    },
    {
        id: "unknown_soi_barangay",
        label: "Unknown",
        type: "unknown-checkbox",
        disabled: true,
    },
    {
        id: "soi_barangay",
        label: "Barangay",
        type: "select",
        disabled: true,
    },
    {
        id: "unknown_soi_street_number",
        label: "Unknown",
        type: "unknown-checkbox",
        disabled: true,
    },
    {
        id: "soi_street_number",
        label: "Street Number",
        type: "text",
    },
];

var sourceOfInformationFields = [{
        id: "soi_first_name",
        label: "First Name",
        type: "text",
        maxlength: 20,
    },
    {
        id: "soi_middle_name",
        label: "Middle Name",
        type: "text",
        maxlength: 20,
    },
    {
        id: "soi_last_name",
        label: "Last Name",
        type: "text",
        maxlength: 20,
    },
    {
        id: "soi_relationship",
        label: "Relationship",
        type: "select",
        required: true,
    },
    {
        id: "soi_contact_number",
        label: "Contact Number",
        type: "text",
        maxlength: 20,
    },
].concat(soiAddressFields);

var firstFormFields = [{
        id: "unknown_name",
        label: "Name",
        type: "unknown-checkbox",
        children: [{
                id: "last_name",
                label: "Last Name",
                type: "text",
                required: true,
                maxlength: 50,
            },
            {
                id: "first_name",
                label: "First Name",
                type: "text",
                required: true,
                maxlength: 50,
            },
            {
                id: "middle_name",
                label: "Middle Name",
                type: "text",
                maxlength: 50,
            },
            {
                id: "name_suffix",
                label: "Suffix",
                type: "select",
                maxlength: 5,
            },
        ],
    },
    {
        id: "alias",
        label: "Alias",
        type: "text",
        maxlength: 60,
    },
    {
        id: "contact_number",
        label: "Contact Number",
        type: "text",
        maxlength: 15,
    },
    {
        id: "unknown_mm_name",
        label: "Mother's Maiden Name",
        type: "unknown-checkbox",
        children: [{
                id: "mm_last_name",
                label: "Last Name",
                type: "text",
                required: true,
                maxlength: 50,
            },
            {
                id: "mm_first_name",
                label: "First Name",
                type: "text",
                required: true,
                maxlength: 50,
            },
            {
                id: "mm_middle_name",
                label: "Middle Name",
                required: true,
                type: "text",
                maxlength: 50,
            },
            {
                id: "mm_name_suffix",
                label: "Suffix",
                type: "select",
                maxlength: 5,
            },
        ],
    },
    // {
    //     id: 'unknown_philhealth',
    //     label: 'PhilHealth Eligibility',
    //     type: 'unknown-checkbox',
    //     child_type: 'radio',
    //     radio_name: 'philhealth',
    //     children: [
    //         {
    //             id: 'philhealth_member',
    //             label: 'PhilHealth eligibility status',
    //             type: 'radio',
    //             required: true,
    //             name: 'philhealth',
    //             container_class: 'philhealth-number',
    //             children: [
    //                 {
    //                     id: 'philhealth_number',
    //                     label: 'PhilHealth Number',
    //                     type: 'text',
    //                     required: true
    //                 }
    //             ]
    //         },
    //         {
    //             id: 'philhealth_not_member',
    //             label: 'PhilHealth eligibility status',
    //             type: 'radio',
    //             required: true,
    //             name: 'philhealth',
    //             container_class: 'philhealth-number'
    //         },
    //         {
    //             id: 'philhealth_dependent',
    //             label: 'PhilHealth eligibility status',
    //             type: 'radio',
    //             required: true,
    //             name: 'philhealth',
    //             container_class: 'philhealth-number',
    //             children: [
    //                 {
    //                     id: 'philhealth_number',
    //                     label: 'PhilHealth Number',
    //                     type: 'text',
    //                     required: true
    //                 }
    //             ]
    //         }
    //     ]
    // },
    {
        id: "unknown_current_address",
        label: "Current Address",
        type: "unknown-checkbox",
        children: [{
                id: "ca_region",
                label: "Region",
                type: "select",
                required: true,
            },
            {
                id: "unknown_ca_province",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "ca_province",
                label: "Province",
                type: "select",
                required: true,
                disabled: true,
            },
            {
                id: "unknown_ca_muninicipality_city",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "ca_muninicipality_city",
                label: "Municipality/City",
                type: "select",
                required: true,
                disabled: true,
            },
            {
                id: "unknown_ca_barangay",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "ca_barangay",
                label: "Barangay",
                type: "select",
                required: true,
                disabled: true,
            },
            {
                id: "unknown_ca_street_number",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "ca_street_number",
                label: "Street Number",
                type: "text",
                required: true,
                maxlength: 100,
            },
        ],
    },
    {
        id: "unknown_permanent_address",
        label: "Permanent Address",
        type: "unknown-checkbox",
        children: [{
                id: "pa_region",
                label: "Region",
                type: "select",
                required: true,
            },
            {
                id: "unknown_pa_province",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "pa_province",
                label: "Province",
                type: "select",
                required: true,
                disabled: true,
            },
            {
                id: "unknown_pa_muninicipality_city",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "pa_muninicipality_city",
                label: "Municipality/City",
                type: "select",
                required: true,
                disabled: true,
            },
            {
                id: "unknown_pa_barangay",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "pa_barangay",
                label: "Barangay",
                type: "select",
                required: true,
                disabled: true,
            },
            {
                id: "unknown_pa_street_number",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "pa_street_number",
                label: "Street Number",
                type: "text",
                required: true,
            },
        ],
    },
];

var secondFormFields = [{
        id: "unknown_date_of_birth",
        label: "Date of Birth",
        type: "unknown-checkbox",
        children: [{
            id: "date_of_birth",
            label: "Date of Birth",
            type: "text",
            required: true,
        }, ],
    },
    {
        id: "unknown_place_of_birth",
        label: "Place of Birth",
        type: "unknown-checkbox",
        children: [{
                id: "pob_country",
                label: "Country",
                type: "select",
                required: true,
            },
            {
                id: "pob_region",
                label: "Region",
                type: "select",
                required: true,
            },
            {
                id: "unknown_pob_province",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "pob_province",
                label: "Province",
                type: "select",
                required: true,
                disabled: true,
            },
            {
                id: "unknown_pob_muninicipality_city",
                label: "Unknown",
                type: "unknown-checkbox",
                disabled: true,
            },
            {
                id: "pob_muninicipality_city",
                label: "Municipality/City",
                type: "select",
                required: true,
                disabled: true,
            },
            {
                id: "pob_text_address",
                label: "Address",
                type: "text",
                required: true,
            },
        ],
    },
    {
        id: "sex",
        label: "Sex",
        type: "select",
        required: true,
    },
    {
        id: "civil_status",
        label: "Civil Status",
        type: "select",
        required: true,
    },
    {
        id: "religion",
        label: "Religion",
        type: "select",
    },
    {
        id: "nationality",
        label: "Nationality",
        type: "select",
        required: true,
    },
    {
        id: "ethnic_group",
        label: "Ethnic Group",
        type: "select",
    },
    {
        id: "citizenship",
        label: "Citizenship",
        type: "select",
    },
    {
        id: "highest_ed_at",
        label: "Highest Educational Attainment",
        type: "select",
        required: true,
    },
    {
        id: "literacy_rate",
        label: "Literacy Rate",
        type: "select",
    },
    {
        id: "photo",
        label: "Photo",
        type: "file",
        required: false,
    },
];

var thirdFormFields = [{
        id: "patient_id",
        label: "Patient ID",
        description: "This is a hidden field",
        type: "text",
    },
    {
        id: "source_patient",
        label: "Source of Information",
        type: "radio",
        required: true,
        name: "source_of_info",
        container_class: "source-of-info-addtnl-form",
    },
    {
        id: "source_family_member",
        label: "Source of Information",
        type: "radio",
        required: true,
        name: "source_of_info",
        container_class: "source-of-info-addtnl-form",
        children: sourceOfInformationFields,
    },
    {
        id: "source_social_worker",
        label: "Source of Information",
        type: "radio",
        required: true,
        name: "source_of_info",
        container_class: "source-of-info-addtnl-form",
        children: sourceOfInformationFields,
    },
    {
        id: "source_other",
        label: "Source of Information",
        type: "radio",
        required: true,
        name: "source_of_info",
        container_class: "source-of-info-addtnl-form",
        children: sourceOfInformationFields,
        others: {
            id: "other_source_of_info",
            label: "Other",
            type: "text",
            required: true,
        },
    },
    {
        id: "soi_reliability_of_info",
        label: "Reliability of Information",
        type: "text",
    },
    {
        id: "type_of_payment",
        label: "Type of Payment",
        type: "select",
        required: true,
    },
    {
        id: "type_of_consult",
        label: "Type of Consult",
        type: "select",
    },
    {
        id: "source_of_referral",
        label: "SOURCE OF REFERRAL",
        type: "select",
        required: true,
    },
    {
        id: "unknown_referred_by",
        label: "Referred by",
        type: "unknown-checkbox",
        children: [{
            id: "referred_by",
            label: "Referred by",
            type: "text",
            required: true,
        }, ],
    },
    {
        id: "assign_to",
        label: "Assign to",
        type: "select",
        required: true,
    },
];

var currentForm;

var ALLFIELDS = [];

var addressParts = [
    "province",
    "muninicipality_city",
    "barangay",
    "street_number",
];
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
    if (toggle !== undefined) {
        required = toggle && field.required;
    }

    // don't update labels for radio or unknown-checkbox types
    if (["radio", "unknown-checkbox"].includes(field.type)) {
        return;
    }

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
    var addClass = hidden ? "animate__fadeOut" : "animate__fadeIn";
    var removeClass = hidden ? "animate__fadeIn" : "animate__fadeOut";

    // animation class
    $("." + className)
        .removeClass(removeClass)
        .addClass(addClass);

    if (!hidden) {
        return $("." + className).prop("hidden", false);
    }

    // hide after 0.5 seconds to allow the animation to finish
    setTimeout(function() {
        $("." + className).prop("hidden", true);
    }, 500);
}

/**
 * @function triggerPhilHealthOptionFields
 * - will trigger updates on the fields for philhealth eligibility options [members, not-member, dependent]
 *
 * @params {Object} _option - if null,this will hide philhealth number field
 */
function triggerPhilHealthOptionFields(_option) {
    var option = _option || {};
    var containerClass = "philhealth-hidden";
    var children = option ? option.children || [] : [];
    var hidden = !option || !children.length;

    animateHideOrShow(hidden, containerClass);
}

/**
 * @function bindPhilHealthOptionEvents
 * - Listens to any field changes [radio options] for philhealth eligibility [members, not-member, dependent]
 * - Shows/hides child fields for any of these options when triggered
 *
 * @params {Object} field
 */
function bindPhilHealthOptionEvents(field) {
    if (!field || !field.radio_name) {
        return;
    }

    var children = field.children || [];
    var selectedOption;

    $('input[type="radio"][name="' + field.radio_name + '"]').on(
        "change",
        function() {
            var optionId = this.id;
            selectedOption = children.find(function(phOption) {
                return phOption.id === optionId;
            });

            triggerPhilHealthOptionFields(selectedOption);
        }
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
        // for unknown philhealth fields
        // if (field.child_type === 'radio') {
        //     $('#' + childField.id).prop('checked', false);
        //     triggerPhilHealthOptionFields();
        // }

        resetFieldValue(childField);
        disableField(checked || !!childField.disabled, childField);
        updateRequired(!checked, childField);
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
    if (!field) {
        return;
    }

    if (required) {
        $("#" + field.id).rules("add", { required: field.required });
    } else {
        $("#" + field.id).rules("remove", "required");
        $("#" + field.id).removeClass("is-invalid");
    }

    // key must be pulled from field's name for radio input fields
    var key = field.type === "radio" ? field.name : field.id;
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
    if (!field) {
        return;
    }

    $("#" + field.id).val(null);

    // a special case for selectize inputs since we are using select2 plugin
    if (field.type === "select") {
        $("#" + field.id)
            .val(null)
            .trigger("change");
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
    if (!field) {
        return;
    }

    $("#" + field.id).prop("disabled", disabled);
}

/**
 * @function getAllFields
 * - Builds the whole content values from form 1 to 3
 * - ALLFIELDS variable will be sent to POST endpoint so all data for this form are fully collected
 *
 * @params {Object} _fields - a field's children array will be looped over to flatten the fields
 *
 */
function getAllFields(_fields) {
    var allFields =
        _fields || firstFormFields.concat(secondFormFields).concat(thirdFormFields);
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

        if (["text", "radio", "select", "file"].includes(field.type)) {
            var name = field.type === "radio" ? field.name : field.id;

            formOpts[currentForm].rules[name] = { required: field.required || false };
            formOpts[currentForm].messages[name] = {};

            if (field.required) {
                formOpts[currentForm].messages[name].required =
                    APP.Forms.getRequiredMessage(field.label);
            }

            if (field.maxlength) {
                formOpts[currentForm].rules[name].maxlength = field.maxlength;
                formOpts[currentForm].messages[name].maxlength =
                    APP.Forms.getMaxLengthMessage(field);
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

    if (!address) {
        return [];
    }

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
        $("#" + fieldId).rules("add", { required: true });
        $("#" + fieldId).addClass("is-invalid");

        var $fieldError = $("#" + fieldId + "-error");
        if ($fieldError.length) {
            $fieldError.removeAttr("style");
            $fieldError.html(errorMessage);
        }
    } else {
        $("#" + fieldId).rules("remove", "required");
        $("#" + fieldId).removeClass("is-invalid");
    }
}

/**
 * @function uncheckUnknownAddresses
 * - Unchecks unknown addresses when entire block is unknown
 *
 */
function uncheckUnknownAddresses(prefix) {
    addressParts.forEach(function(address) {
        $("#unknown_" + prefix + "_" + address).prop("checked", false);
    });
}

/**
 * @function resetAddressField
 * - Resets the child address parts when parent field is set to "unknown"
 *
 */
function resetAddressField(selector, originalSelector, disabled) {
    var $selector = $("#" + selector);

    if ($selector.val()) {
        $selector.val(null).trigger("change");
    }

    if (!$selector.val() && $selector.is(":disabled") !== disabled) {
        $selector.prop("disabled", disabled);
    }

    if (selector !== originalSelector) {
        $("#unknown_" + selector).prop("disabled", true);
    }

    // for jquery validation, if this is disabled then remove class "is-invalid"
    if (disabled) {
        $selector.removeClass("is-invalid");
    }
}

/**
 * @function bindUnknownAddressParts
 * - Listens to unknown address part events (MHIS-159)
 *
 */
function bindUnknownAddressParts() {
    // pa = permanent address, ca = current, pob = place of birth, soi = source of information
    var sections = ["pa", "ca", "pob", "soi"];
    sections.forEach(function(section) {
        addressParts.forEach(function(address) {
            $("#unknown_" + section + "_" + address).on("change", function() {
                var selector = _.replace(this.id, "unknown_", "");
                var originalSelector = selector;

                resetAddressField(selector, originalSelector, this.checked);

                if (!this.checked) return;

                if (selector.includes("province")) {
                    selector = selector.replace("province", "muninicipality_city");
                    resetAddressField(selector, originalSelector, this.checked);
                }

                if (selector.includes("muninicipality_city")) {
                    selector = selector.replace("muninicipality_city", "barangay");
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
    var caFields = getAddressFields("Current Address", firstFormFields);
    var paFields = getAddressFields("Permanent Address", firstFormFields);
    var $same_as_ca_address = $("#same_as_ca_address");
    var $same_as_patient_address = $("#same_as_patient_address");
    var $unknown_permanent_address = $("#unknown_permanent_address");
    var $unknown_current_address = $("#unknown_current_address");

    var isUnknownPermanentAddress;
    $same_as_ca_address.on("change", function() {
        var checked = this.checked;
        isUnknownPermanentAddress = $unknown_permanent_address.is(":checked");

        paFields.forEach(function(paField) {
            var caFieldId = paField.id.replace("pa_", "ca_");
            var caFieldVal = $("#" + caFieldId).val();
            var fieldValue = checked ? caFieldVal : "";

            $("#" + paField.id).val(fieldValue);
            if (paField.type === "select") {
                $("#" + paField.id).trigger("change");
            }

            $("#" + paField.id).prop(
                "disabled",
                checked || !!paField.disabled || isUnknownPermanentAddress
            );
            $("#unknown_" + paField.id).prop(
                "disabled",
                checked || !!paField.disabled || isUnknownPermanentAddress
            );
        });

        if (checked) {
            $unknown_permanent_address.prop("checked", false);
        }

        $unknown_permanent_address.prop("disabled", checked);
    });

    var isUnknownCurrentAddress;
    $unknown_permanent_address.on("change", function() {
        isUnknownCurrentAddress = $unknown_current_address.is(":checked");
        if (this.checked) {
            $same_as_ca_address.prop("checked", false);
            uncheckUnknownAddresses("pa");
        }

        $same_as_ca_address.prop(
            "disabled",
            this.checked || isUnknownCurrentAddress
        );
    });

    $unknown_current_address.on("change", function() {
        if (this.checked) {
            $same_as_ca_address.prop("checked", false).trigger("change");
            uncheckUnknownAddresses("ca");
        }

        $same_as_ca_address.prop("disabled", this.checked).trigger("change");
    });

    // define listeners for current address form
    caFields.forEach(function(caField) {
        var paFieldId = caField.id.replace("ca_", "pa_");
        var soiFieldId = caField.id.replace("ca_", "soi_");
        var caFieldValue = $("#" + caField.id).val();
        var listener = caField.type === "text" ? "keyup" : "change";

        $("#" + caField.id).on(listener, function() {
            caFieldValue = $("#" + caField.id).val();

            if ($same_as_ca_address.is(":checked")) {
                $("#" + paFieldId).val(caFieldValue);

                if (caField.type === "select") {
                    $("#" + paFieldId).trigger("change");
                }
            }

            if ($same_as_patient_address.is(":checked")) {
                $("#" + soiFieldId).val(caFieldValue);

                if (caField.type === "select") {
                    $("#" + soiFieldId).trigger("change");
                }
            }
        });
    });
}

/**
 * @function bindUnknownSociodemographicCheckbox
 * - Listens to change event from unknown_sociodemographic checkbox
 * - Disables and resets all fields except alias
 * - Makes alias input text the only field required
 *
 */
function bindUnknownSociodemographicCheckbox() {
    $("#unknown_sociodemographic").on("change", function() {
        var checked = this.checked;
        var opts = {
            overrideRequired: checked,
            disableAll: true,
            requiredFields: ["alias"],
        };
        updateValidationFields(_.cloneDeep(firstFormFields), opts);

        // update all elements below according to this checkbox's value
        var elements = [
            $("#unknown_name"),
            $("#unknown_mm_name"),
            // $('#unknown_philhealth'),
            $("#unknown_current_address"),
            $("#unknown_permanent_address"),
            $("#same_as_ca_address"),
            // $('input[type="radio"][name="philhealth"]')
        ];

        elements.forEach(function(element) {
            $(element).prop("disabled", checked);
            if (checked) {
                $(element).prop("checked", false);
            }
        });

        $("#sociodemographic_alert").prop("hidden", !checked);

        // triggerPhilHealthOptionFields();
    });
}

/**
 * @function bindUnknownNameCheckbox
 * - Listens to change event from unknown_name checkbox
 * - Makes alias input text field required when unknown name checkbox is ticked
 *
 */
function bindUnknownNameCheckbox() {
    var _aliasField =
        firstFormFields.find(function(field) {
            return field.id === "alias";
        }) || {};

    var aliasField;

    $("#unknown_name").on("change", function() {
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
    $("#btn_back_to_first_form").click(function() {
        currentForm = "first";
        // bindPageValidation(firstFormFields, 'first', 'information-part');
        stepper.previous();
    });

    $("#btn_back_to_second_form").click(function() {
        currentForm = "second";
        // bindPageValidation(secondFormFields, 'second', 'source-of-info-part');
        stepper.previous();
    });
}

/**
 * @function bindAllFirstFormEvents
 * - Bind all events related to first form
 *
 */
function bindAllFirstFormEvents() {
    // get all unknown checkboxes from first form
    var unknownCheckboxFields = firstFormFields.filter(function(field) {
        return field.type === "unknown-checkbox";
    });

    // define listeners for all unknown checkboxes on first form
    unknownCheckboxFields.forEach(function(field) {
        $("#" + field.id).change(function() {
            handleUnkownCheckboxEvents(this.checked, field);
        });
    });

    // philhealth options are now hidden, commenting this bind function
    // find field for philhealth eligibility section
    // var philhealthOptions = firstFormFields.find(function(field) {
    //     return field.radio_name === 'philhealth';
    // });

    // bind philhealth eligibility radio button events
    // bindPhilHealthOptionEvents(philhealthOptions);

    // define jquery validation for first page
    bindPageValidation(firstFormFields, "first", "#information-part");

    // define listener for address events/changes
    bindAddressEvents();

    // define listener for unknown sociodemographic checkbox
    bindUnknownSociodemographicCheckbox();

    // define listener for unknown name checkbox
    bindUnknownNameCheckbox();
}

/**
 * @function bindOtherOptionEvents
 * - Bind all events in select option when other option is available
 *
 */
function bindOtherOptionEvents() {
    var allForms = firstFormFields
        .concat(secondFormFields)
        .concat(thirdFormFields);
    var formsWithOtherOptions = allForms.filter(function(field) {
        // prettier-ignore
        return (typeof field.others === 'object');
    });

    formsWithOtherOptions.forEach(function(option) {
        // listen to any fields with "Others (Please specify)"

        var selector = "#" + option.id;
        var isRadioField = option.type === "radio";
        if (isRadioField) {
            selector = 'input[type="radio"][name="' + option.name + '"]';
        }

        $(selector).on("change", function() {
            var otherField = option.others;
            var required = option.required;
            var hidden = $("#" + option.id).val() !== "others";

            if (isRadioField) {
                var isRadioSelected =
                    $('input[name="' + option.name + '"]:checked').attr("id") ===
                    option.id;
                required = option.required && isRadioSelected;
                hidden = !isRadioSelected;
            }

            animateHideOrShow(hidden, "other-" + option.id);
            updateRequired(required, otherField);
            updateLabel(otherField);
        });
    });
}

/**
 * @function bindDateOfBirthEvents
 * - Bind all events for date of birth field
 * - Updates age field as the date of birth updates
 *
 */
function bindDateOfBirthEvents() {
    var $date_of_birth = $("#date_of_birth");
    var $age = $("#age");
    var age;
    var birthDate;

    $date_of_birth.on("keyup", function() {
        if (!$date_of_birth.inputmask("isComplete")) {
            return $age.val("");
        }

        // user able to set complete birth of date value, compute age and set to age field
        birthDate = moment($date_of_birth.val(), "DD/MM/YYYY").format("YYYY-MM-DD");
        age = moment().diff(birthDate, "years");
        $age.val(age);
    });

    $("#unknown_date_of_birth").on("change", function() {
        $age.val("");
    });
}

/**
 * @function bindAllSecondFormEvents
 * - Bind all events related to second form
 *
 */
function bindAllSecondFormEvents() {
    // get all unknown checkboxes from second form
    var unknownCheckboxFields = secondFormFields.filter(function(field) {
        return field.type === "unknown-checkbox";
    });

    // define listeners for all unknown checkboxes on second form
    unknownCheckboxFields.forEach(function(field) {
        $("#" + field.id).change(function() {
            handleUnkownCheckboxEvents(this.checked, field);
        });
    });

    // define jquery validation for second page
    bindPageValidation(secondFormFields, "second", "#source-of-info-part");

    // listen to date of birth updates
    bindDateOfBirthEvents();

    // add custom rules for photo upload
    var $photo = $("#photo");
    var validFormats = "jpg|jpeg|png";
    $photo.rules("add", { extension: validFormats, accept: "image/*" });
    $photo.rules("messages", {
        extension: "Files must be in " + validFormats + " formats.",
        accept: "File must be an image",
    });
}

/**
 * @function resetSourceOfInfoFields
 * - Reset additional source of information fields
 * - Triggers when source of information radio buttons updates
 *
 */
function resetSourceOfInfoFields() {
    sourceOfInformationFields.forEach(function(field) {
        $("#" + field.id)
            .val(null)
            .trigger("change");
    });
}

/**
 * @function bindSourceOfInfoEvents
 * - Bind all souce of information events
 * - Hides or shows the additional forms for source of information when "patient" radio option is selected
 * - When same as patient checkbox is clicked, current address of patient should be populated
 *
 */
function bindSourceOfInfoEvents() {
    var isPatientSource;

    $('input[type="radio"][name="source_of_info"]').on("change", function() {
        isPatientSource = this.id === "source_patient";
        animateHideOrShow(isPatientSource, "source-of-info-addtnl-form");
        $("#soi_patient_alert").prop("hidden", !isPatientSource);

        // source "patient" don't require additional soi fields, reset values
        if (isPatientSource) {
            resetSourceOfInfoFields();
        }
    });

    var caFields = getAddressFields("Current Address", firstFormFields);
    var soiFields = soiAddressFields;
    var checked;

    $("#same_as_patient_address").on("change", function() {
        checked = this.checked;

        soiFields.forEach(function(soiField) {
            var caFieldId = soiField.id.replace("soi_", "ca_");
            var fieldValue = checked ? $("#" + caFieldId).val() : null;

            $("#" + soiField.id).val(fieldValue);
            if (soiField.type === "select") {
                $("#" + soiField.id).trigger("change");
            }

            $("#" + soiField.id).prop("disabled", checked || !!soiField.disabled);
            triggerValidationUpdates(soiField.required, soiField.id, soiField.label);
        });
    });

    var $soi_reliability_of_info = $("#soi_reliability_of_info");
    $soi_reliability_of_info.on("change", function() {
        $("#soi_reliability_percent").val($soi_reliability_of_info.val() + "%");
    });
}

/**
 * @function bindAllThirdFormEvents
 * - Bind all events related to third form
 *
 */
function bindAllThirdFormEvents() {
    // get all unknown checkboxes from third form
    var unknownCheckboxFields = thirdFormFields.filter(function(field) {
        return field.type === "unknown-checkbox";
    });

    // define listeners for all unknown checkboxes on second form
    unknownCheckboxFields.forEach(function(field) {
        $("#" + field.id).change(function() {
            handleUnkownCheckboxEvents(this.checked, field);
        });
    });

    // define jquery validation for third page
    bindPageValidation(thirdFormFields, "third", "#queue-part");

    // source of information events
    bindSourceOfInfoEvents();
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
        console.log("Missing parameters passed in updateSelectOptions");
        console.log("elementId =", elementId);
        console.log("data attribute name =", name);
        console.log("data attribute val =", val);
        return;
    }

    data.forEach(function(option) {
        $("<option/>", {
            value: option[val],
            text: option[name],
        }).appendTo("#" + elementId);
    });

    $("#" + elementId)
        .val(null)
        .trigger("change");
    $("#" + elementId).prop("disabled", false);

    $("#unknown_" + elementId).prop("disabled", false);

    var caFieldId = elementId;

    if (elementId.includes("pa_")) {
        caFieldId = elementId.replace("pa_", "ca_");
    }

    if (elementId.includes("soi_")) {
        caFieldId = elementId.replace("soi_", "ca_");
    }

    var caFieldValue = $("#" + caFieldId).val();
    var isSameAsCurrentAddress = $("#same_as_ca_address").is(":checked");
    var isSameAsPatientAddress = $("#same_as_patient_address").is(":checked");
    var isFieldCurrentAddress = caFieldId === elementId;

    // if same_as_ca_address or same_as_patient_address is ticked
    // and the select id is not for current address fields
    // permanent address id or soi (source of information) address should stay disabled
    if (
        (isSameAsCurrentAddress || isSameAsPatientAddress) &&
        !isFieldCurrentAddress
    ) {
        $("#" + elementId)
            .val(caFieldValue)
            .trigger("change");
        $("#" + elementId).prop("disabled", true);
        $("#unknown_" + elementId).prop("disabled", true);
    }

    if (isFieldCurrentAddress) {
        $("#" + elementId).prop("disabled", false);
    }

    // if soiAddressValues object has values, set its value from it
    // object values were initiated from assets/js/patient/search.js
    if (elementId.includes("soi_") && soiAddressValues[elementId]) {
        $("#" + elementId)
            .val(soiAddressValues[elementId])
            .trigger("change");
    }
}

/**
 * @function resetSelectOptions
 * - Resets/empties and disables select options once an API call is triggered againts its new options
 *
 *  * @params {String} elementId - select id target
 */
function resetSelectOptions(elementId) {
    if (!elementId) {
        return;
    }

    // we should also disable the city dropdown when resetting selections for province
    if (elementId.includes("province")) {
        var cityId = elementId.replace("province", "muninicipality_city");
        $("#" + cityId).empty();
        $("#" + cityId).prop("disabled", true);
    }

    // we should also disable the branagay dropdown when resetting selections for cities
    if (elementId.includes("muninicipality_city")) {
        var barangayId = elementId.replace("muninicipality_city", "barangay");
        $("#" + barangayId).empty();
        $("#" + barangayId).prop("disabled", true);
    }

    $("#" + elementId).empty();
    $("#" + elementId).prop("disabled", true);
}

/**
 * @function getProvinces
 * - Execute an ajax call to retrieve provinces by region id
 *
 *  * @params {String} regionId - region id
 *  * @params {String} provinceId - province element id to reset options
 */
function getProvinces(regionId, provinceId) {
    if (!regionId) {
        return;
    }

    resetSelectOptions(provinceId);

    $.ajax({
            method: "GET",
            url: "/api/provinces/region/" + regionId,
        })
        .then(function(data) {
            var nameKey = "provname";
            var valKey = "provcode";
            updateSelectOptions(data || [], provinceId, nameKey, valKey);
        })
        .catch(function(error) {
            console.log(error);
            APP.UI.alert({
                msg: "Unable to load province options. Please try again.",
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
    if (!provinceId) {
        return;
    }

    resetSelectOptions(cityId);

    $.ajax({
            method: "GET",
            url: "/api/cities/province/" + provinceId,
        })
        .then(function(data) {
            var nameKey = "ctyname";
            var valKey = "ctycode";
            updateSelectOptions(data || [], cityId, nameKey, valKey);
        })
        .catch(function(error) {
            console.log(error);
            APP.UI.alert({
                msg: "Unable to load municipality/city options. Please try again.",
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
    if (!cityId) {
        return;
    }

    resetSelectOptions(barangayId);

    $.ajax({
            method: "GET",
            url: "/api/barangays/city/" + cityId,
        })
        .then(function(data) {
            var nameKey = "bgyname";
            var valKey = "bgycode";
            updateSelectOptions(data || [], barangayId, nameKey, valKey);
        })
        .catch(function(error) {
            console.log(error);
            APP.UI.alert({
                msg: "Unable to load barangay options. Please try again.",
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
        return select.label === "Region";
    });

    allRegionInputs.forEach(function(select) {
        var provinceId = select.id.replace("region", "province");
        var $select = $("#" + select.id);
        $select.on("change", function() {
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
        return select.label === "Province";
    });

    allProvinceInputs.forEach(function(select) {
        var cityId = select.id.replace("province", "muninicipality_city");
        var $select = $("#" + select.id);
        $select.on("change", function() {
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
        return (
            select.label === "Municipality/City" &&
            select.id !== "pob_muninicipality_city"
        );
    });

    allCityInputs.forEach(function(select) {
        var barangayId = select.id.replace("muninicipality_city", "barangay");
        var $select = $("#" + select.id);
        $select.on("change", function() {
            getBarangays($select.val(), barangayId);
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
    var $pob_country = $("#pob_country");
    $pob_country.val(phId).trigger("change");
    var isPh = true;

    $pob_country.on("change", function() {
        isPh = $pob_country.val() === phId;
        animateHideOrShow(!isPh, "pob-ph");
        animateHideOrShow(isPh, "pob-non-ph");

        if (isPh) {
            $("#pob_province").prop("disabled", true);
            $("#pob_muninicipality_city").prop("disabled", true);
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
        return field.type === "select" && field.required;
    });

    allRequiredSelect.forEach(function(field) {
        var $select = $("#" + field.id);
        $select.on("change", function() {
            if ($select.val()) {
                $select.removeClass("is-invalid");
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
    var place_of_birth = "";

    if (!$("#unknown_place_of_birth").is(":checked")) {
        var selectedCountry = $("#pob_country").val();
        if (selectedCountry === phId) {
            place_of_birth = $("#pob_muninicipality_city option:selected").text();
            place_of_birth += ", " + $("#pob_province option:selected").text();
        } else {
            place_of_birth = $("#pob_text_address").val();
            place_of_birth += ", " + $("#pob_country option:selected").text();
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
    var soi_address = "";
    var delimiter = "";

    if ($('input[name="source_of_info"]:checked').val() !== "patient") {
        if ($("#soi_street_number").val()) {
            soi_address += delimiter + $("#soi_street_number").val();
            delimiter = " ";
        }

        if ($("#soi_barangay").val()) {
            soi_address += delimiter + $("#soi_barangay option:selected").text();
            delimiter = " ";
        }

        if ($("#soi_muninicipality_city").val()) {
            soi_address +=
                delimiter + $("#soi_muninicipality_city option:selected").text();
            delimiter = ", ";
        }

        if ($("#soi_province").val()) {
            soi_address += delimiter + $("#soi_province option:selected").text();
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
    _form.unknown_sociodemographic = $("#unknown_sociodemographic").is(
        ":checked"
    );
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
            msg: "Unable to save patient record, endpoint not found for this form!",
        });
    }

    var _form = getAllFieldValues();

    APP.UI.showLoader("Saving...");

    $.ajax({
            method: "POST",
            url: save_endpoint,
            data: _form,
        })
        .then(function(_response) {
            var successMsg = { type: "success", msg: successMessage };

            if (!_response) {
                return APP.UI.alert(successMsg);
            }
            var response;

            try {
                response = JSON.parse(_response);
            } catch (error) {
                return APP.UI.alert(successMsg);
            }

            if (response.redirect) {
                // success flash message is set within the save endpoint
                window.location = response.redirect; // default: response.redirect;
            }
        })
        .catch(function(xhr) {
            var errorMsg = "There was an error while saving patient records.";
            console.log(xhr);
            APP.UI.hideLoader();
            var response = {};

            try {
                response = JSON.parse(xhr.responseText);
            } catch (error) {
                return APP.UI.alert({ msg: errorMsg });
            }

            errorMsg = response.error_msg || errorMsg;

            if (xhr.status === 400 && response.errors && response.errors.length) {
                APP.UI.showErrorMessages(
                    response.errors,
                    "Please see error messages below"
                );
            }

            APP.UI.alert({ msg: errorMsg });
        });
}

/**
 * @function bindSaveButtonEvents
 * - Watch on click events when saving patient
 * - Determines if button action is to save patient in queue or just save patient record
 *
 */
function bindSaveButtonEvents() {
    $("#btn_save").on("click", function() {
        saveAction = "save";
    });

    $("#btn_save_and_queue").on("click", function() {
        saveAction = "save-and-queue";
    });
}

/**
 * @function bindAlertOnCloseEvent
 * - Watch on close event for alerts
 * - Hides the alert instead of closing/removing the element from document
 *
 */
function bindAlertOnCloseEvent() {
    $(document).on("close.bs.alert", ".alert", function(e) {
        $(this).prop("hidden", true);
        return false;
    });
}

/**
 * @function initSpecialElements
 * - Initialise special elements that use 3rd party libraries for UI display
 *
 */
function initSpecialElements() {
    //Initialize Select2 Elements
    $(".select2").select2();
    $(".select2bs4").select2({
        theme: "bootstrap4",
    });

    // first option usually gets pre selected - reset select inputs on load
    $(".patient-form select").val(null).trigger("change");

    // BOOTSTRAP SLIDER
    $slider = $(".slider").bootstrapSlider();

    // Input masks
    $("#date_of_birth").inputmask("dd/mm/yyyy", {
        placeholder: "dd/mm/yyyy",
        clearIncomplete: true,
    });
}

// document on ready listener - jquery
$(function() {
    $('[data-widget="pushmenu"]').PushMenu('collapse');

    currentForm = "first";

    // init elements in form that use 3rd party libraries
    initSpecialElements();

    $.validator.setDefaults({
        submitHandler: function(e) {
            if ($(e).attr("id") === "information-part") {
                currentForm = "second";

                // Bind all events related to second form
                bindAllSecondFormEvents();
            }

            if ($(e).attr("id") === "source-of-info-part") {
                currentForm = "third";

                // Bind all events related to third form
                bindAllThirdFormEvents();
            }

            if ($(e).attr("id") === "queue-part") {
                savePatientInformation();
            }

            if (has_stepper) {
                stepper.next();
            }
        },
    });

    // Bind all events related to first form
    bindAllFirstFormEvents();

    // Bind all events for previous buttons
    bindPreviousButtonEvents();

    // Bind all other option ("Please specify") in select events for all forms
    bindOtherOptionEvents();

    // Get all fields from 1st to last
    getAllFields();

    // Bind select fields with ajax call triggers (regions, provinces, cities)
    bindRegionUpdates();
    bindProvinceUpdates();
    bindCityUpdates();

    // Binds all events for required select fields
    bindRequiredSelectEvents();

    // Bind all events for country - place of birth
    bindCountryEvents();

    // Bind all save button events (form 3)
    bindSaveButtonEvents();

    // Bind alert on close event
    bindAlertOnCloseEvent();

    // Bind unknown address checkbox events
    bindUnknownAddressParts();
});

// bind stepper plugin, only if the page has stepper initialized in document
// add to queue modal doesn't have stepper so this shouldn't be initialized
if (has_stepper) {
    document.addEventListener("DOMContentLoaded", function() {
        window.stepper = new Stepper(document.querySelector(".bs-stepper"));
    });
}