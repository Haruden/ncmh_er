/**
 * APP - Forms
 * - Generic listeners related to user inputs/forms
 */
var APP = APP || {};
var _ALLFIELDS = [];

(function() {
    APP.Forms = {
        defaultOpts: {
            rules: null,
            messages: null,
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                // $(element.form).find("label[for=" + element.id + "] .required").empty();
                // $(element.form).find("label[for=" + element.id + "]").append('<span class="required text-danger"> *</span>');
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                // $(element.form).find("label[for=" + element.id + "] .required").empty();
                $(element).removeClass('is-invalid');
            },
            normalizer: function(value) {
                return $.trim(value);
            }
        },

        init: function() {
            APP.Forms.trimInputs();
        },

        /**
         * @function APP.Forms.trimInputs
         * - Trims all input field values on blur
         *
         */
        trimInputs: function() {
            $(document).on('blur', ':input[type="text"]', function(e) {
                $(this).val(($(this).val() || '').trim());
            });
        },

        /**
         * @function getRequiredMessage
         * - Builds an error message for a required field
         * 
         * @params {String} fieldName
         * @return {String} constructed required message
         */
        getRequiredMessage: function(fieldName) {
            if (!fieldName || typeof fieldName !== 'string') {
                return '';
            }

            return fieldName.charAt(0).toUpperCase() + fieldName.slice(1).toLowerCase() + ' is required';
        },

        /**
         * @function getMaxLengthMessage
         * - Builds an error message for a field with maxlength limit
         * 
         * @params {Object} _field
         *     @sampleParam {Object} field:
         *     {"id":"last_name","label":"Last Name","type":"text","required":true, maxlength: 10 }
         * @return {String} constructed error message for maxlength
         */
        getMaxLengthMessage: function(_field) {
            var field = _field || {};
            var fieldName = field.label;
            var maxlength = field.maxlength;

            if (!fieldName || typeof fieldName !== 'string' || !maxlength) {
                return '';
            }

            var fieldLabel = fieldName.charAt(0).toUpperCase() + fieldName.slice(1).toLowerCase();
            return fieldLabel + ' field cannot exceed ' + maxlength + ' characters.';
        },

        /**
         * @function getDateBeforeMessage
         * - Builds an error message for a field with date before validation
         * 
         * @params {Object} _field
         *     @sampleParam {Object} field:
         *     {"id":"start_date","label":"Start Date","type":"text","beforeDate":"#end_date", "beforeDateLabel":"end date" }
         * @return {String} constructed error message for date before
         */
        getDateBeforeMessage: function(_field) {
            var field = _field || {};
            var fieldName = field.label;
            var dateBefore = field.dateBefore;
            var dateBeforeLabel = field.dateBeforeLabel;

            if (!fieldName || typeof fieldName !== 'string' || !dateBefore || !dateBeforeLabel) {
                return '';
            }

            var fieldLabel = fieldName.charAt(0).toUpperCase() + fieldName.slice(1).toLowerCase();
            return fieldLabel + ' must be before ' + dateBeforeLabel + '.';
        },

        /**
         * @function getDateAfterMessage
         * - Builds an error message for a field with date before validation
         * 
         * @params {Object} _field
         *     @sampleParam {Object} field:
         *     {"id":"end_date","label":"End Date","type":"text","afterDate":"#start_date", "afterDateLabel":"start date" }
         * @return {String} constructed error message for date before
         */
        getDateAfterMessage: function(_field) {
            var field = _field || {};
            var fieldName = field.label;
            var dateAfter = field.dateAfter;
            var dateAfterLabel = field.dateAfterLabel;

            if (!fieldName || typeof fieldName !== 'string' || !dateAfter || !dateAfterLabel) {
                return '';
            }

            var fieldLabel = fieldName.charAt(0).toUpperCase() + fieldName.slice(1).toLowerCase();
            return fieldLabel + ' must be after ' + dateAfterLabel + '.';
        },

        /**
         * @function getExtensionMessage
         * - Builds an error message for a field with extension validation
         * 
         * @params {Object} _field
         *     @sampleParam {Object} field:
         *     {"id":"end_date","label":"End Date","type":"file","extension":"pdf|jpg|jpeg" }
         * @return {String} constructed error message for date before
         */
        getExtensionMessage: function(_field) {
            var field = _field || {};
            var fieldName = field.label;
            var extension = field.extension;

            if (!fieldName || typeof fieldName !== 'string' || !extension) {
                return '';
            }

            var fieldLabel = fieldName.charAt(0).toUpperCase() + fieldName.slice(1).toLowerCase();
            return fieldLabel + ' must be ' + extension + ' file.';
        },


        /**
         * @function initFormValidations
         * - Intantiates form validations rules for jquery validation
         * 
         * @params {Array} _forms
         *     @sampleParam {Array} _forms:
         *     [{"id":"first_name","label":"First Name","type":"text","required":true, maxlength: 10 },
         *     [{"id":"last_name","label":"Last Name","type":"text","required":true, maxlength: 10 }]
         * @returns {Object} formOpts form option rules
         */
        initFormValidations: function(_forms, _formOpts) {
            var forms = _forms || [];
            var formOpts = _formOpts || {};
            if (!forms.length) {
                return;
            }

            forms.forEach(function(field) {
                if (['text', 'textarea', 'radio', 'select', 'file', 'checkbox'].includes(field.type)) {
                    var name = (field.type === 'radio') ? field.name : field.id;

                    formOpts.rules[name] = { required: field.required || false };
                    formOpts.messages[name] = {};

                    if (field.required) {
                        formOpts.messages[name].required = APP.Forms.getRequiredMessage(field.label);
                    }

                    if (field.maxlength) {
                        formOpts.rules[name].maxlength = field.maxlength;
                        formOpts.messages[name].maxlength = APP.Forms.getMaxLengthMessage(field);
                    }

                    if (field.dateBefore) {
                        formOpts.rules[name].lessThan = field.dateBefore;
                        formOpts.messages[name].lessThan = APP.Forms.getDateBeforeMessage(field);
                    }

                    if (field.dateAfter) {
                        formOpts.rules[name].greaterThan = field.dateAfter;
                        formOpts.messages[name].greaterThan = APP.Forms.getDateAfterMessage(field);
                    }

                    if (field.extension) {
                        formOpts.rules[name].extension = field.extension;
                        formOpts.messages[name].extension = APP.Forms.getExtensionMessage(field);
                    }

                    if (field.customValidator) {
                        formOpts.rules[name][field.customValidator] = true;
                        formOpts.messages[name][field.customValidator] = field.customValidatorMsg || 'Input is invalid.';
                    }
                }
            });

            return formOpts;
        },

        /**
         * @function bindPageValidation
         * - Instantiates form validations using jquery validation
         * 
         * @params {String} formId - form id
         * @params {Object} formOpts form option rules
         */
        bindPageValidation: function(formId, _formOpts) {
            var formOpts = _formOpts || {};

            if (!formId) {
                return;
            }

            // To use jquery validation, we need to set an object for rules and messages,
            // in this format: 
            // rules: { <element name> : { required: true } }, messages: { <element name>: "Error message for this element" }
            // 
            var options = $.extend(APP.Forms.defaultOpts, {
                rules: formOpts.rules,
                messages: formOpts.messages
            });

            if (formOpts.errorPlacement) {
                options.errorPlacement = formOpts.errorPlacement;
            }

            if (typeof formOpts.submitHandler === 'function') {
                options.submitHandler = formOpts.submitHandler;
            }

            $(formId).validate(options);
        },

        /**
         * @function getAllFields
         * - Defines and flattens all fields in a form
         * 
         * @params {Array} _fields - form id
         *     @sampleParam {Array} _fields:
         *     [{"id":"first_name","label":"First Name","type":"text","required":true, maxlength: 10 },
         *     [{"id":"last_name","label":"Last Name","type":"text","required":true, maxlength: 10 }]
         * @returns {Array} _ALLFIELDS all form fields
         */
        getAllFields: function(_fields) {
            var fields = _fields || [];

            fields.forEach(function(currentField) {
                var fieldExists = _ALLFIELDS.find(function(field) {
                    return field.id === currentField.id;
                });

                if (!fieldExists) {
                    _ALLFIELDS.push(currentField);

                    if (currentField.others) {
                        _ALLFIELDS.push(currentField.others);
                    }
                }

                // loop over the field's children to flatten data 
                if (currentField.children && currentField.children.length) {
                    APP.Forms.getAllFields(currentField.children);
                }
            });

            return _ALLFIELDS;
        },

        /**
         * @function getAllFieldValues
         * - Extracts/gets all field values, usually called before executing ajax POST form submission  
         * 
         * @params {Array} _allFields - all fields in form
         *     @sampleParam {Array} _allFields:
         *     [{"id":"first_name","label":"First Name","type":"text","required":true, maxlength: 10 },
         *     [{"id":"last_name","label":"Last Name","type":"text","required":true, maxlength: 10 }]
         * @returns {Object} _form - collected each form values
         */
        getAllFieldValues: function(_allFields) {
            var ALLFIELDS = _allFields || [];
            var _form = {};

            ALLFIELDS.forEach(function(field) {
                _form[field.id] = $('#' + field.id).val();
                if (['unknown-checkbox', 'checkbox'].includes(field.type)) {
                    _form[field.id] = $('#' + field.id).is(':checked');
                }

                if (field.type === 'radio') {
                    _form[field.name] = $('input[name="' + field.name + '"]:checked').val();
                }

                if (field.type === 'file' && $('#' + field.id)[0]) {
                    _form[field.id] = $('#' + field.id)[0].files[0];
                }
            });

            return _form;
        },

        /**
         * @function save
         * - Performs an ajax POST call and prompts alerts if success or not  
         * 
         * @params {String} endpoint - URL of the POST endpoint
         * @params {Object} form - POST body
         * @params {Object} _opts - options like success or error messages, etc
         */
        save: function(endpoint, form, _opts, callback) {
            var opts = _opts || {};
            var formIsEmpty = (!opts.acceptEmptyForm && _.isEmpty(form));
            if (!endpoint || formIsEmpty) {
                return;
            }

            var processingMsg = opts.processingMsg || 'Saving';
            var successMsg = opts.successMsg || 'Everything went well.';
            var errorMsg = opts.errorMsg || 'There was a problem while processing your request.';

            if (opts.modal) {
                $('#' + opts.modal + ' .close').click();
                // $('#' + opts.modal).remove();
            }

            APP.UI.showLoader(processingMsg);

            var requestOpts = {
                method: 'POST',
                url: endpoint,
                data: form,
            };

            if (opts.noProcessData) {
                requestOpts.processData = false;
            }

            if (opts.noContentType) {
                requestOpts.contentType = false;
            }

            $.ajax(requestOpts).then(function(_response) {
                if (typeof callback === 'function') {
                    return callback(null, _response);
                }

                var successMsgAlert = { type: 'success', msg: successMsg };

                if (!_response) {
                    return APP.UI.alert(successMsgAlert);
                }

                var response;

                try {
                    response = (typeof _response === 'string') ? JSON.parse(_response) : _response;
                    APP.UI.setSessionAlert(JSON.stringify(successMsgAlert));
                } catch (error) {
                    return APP.UI.alert(successMsgAlert);
                }

                if (response.success && !response.redirect) {
                    successMsgAlert.msg = response.success
                    APP.UI.alert(successMsgAlert);
                }

                if (response.redirect) {
                    // success flash message is set within the save endpoint
                    window.location = response.redirect;
                }
            }).catch(function(xhr) {
                if (typeof callback === 'function') {
                    return callback(xhr);
                }

                APP.UI.hideLoader();
                var response = {};

                try {
                    response = (typeof xhr.responseText === 'string') ? JSON.parse(xhr.responseText) : xhr.responseText;
                } catch (error) {
                    return APP.UI.alert({ type: 'error', msg: errorMsg });
                }

                errorMsg = response.error || errorMsg;
                if (xhr.status === 400 && response.errors && response.errors.length) {
                    APP.UI.showErrorMessages(response.errors, 'Please see error messages below');
                }

                APP.UI.alert({ type: 'error', msg: errorMsg });
            });
        },

        /**
         * @function resetAllFields
         * - Resets global all fields array  
         * 
         */
        resetAllFields: function() {
            _ALLFIELDS = [];
        },

        /**
         * @function resetForm
         * - Resets form
         * 
         * @params {String} formId - form id 
         */
        resetForm: function(formId) {
            if (!formId) {
                return;
            }
            var $form = $('#' + formId);

            $form.trigger('reset').validate().resetForm();
            // $form.find('input[type="text"]').val('');
            // $form.find(':checkbox, :radio').prop('checked', false);
            // $form.find(':checkbox[data-default], :radio[data-default]').prop('checked', true);
            // $form.find('textarea').val('');
            // $('.modal select').val(null).trigger('change');
            $('.is-invalid').removeClass('is-invalid');
        },

        /**
         * @function updateRequired
         * - Updates rules for jquery validation on a field
         
        * @params {Object} field
        *     @sampleParam {Array} _formOpts:
        *         [{"id":"first_name","label":"First Name","type":"text","required":true, maxlength: 10 },
        *       @sampleParam {bool} required:
        *        true
        *     @sampleParam {Object} field:
        *         {"id":"last_name","label":"Last Name","type":"text","required":true}
        */
        updateRequired: function(_formOpts, required, field) {
            var formOpts = _formOpts || {};

            if (!field) {
                return;
            }

            if (required) {
                $('#' + field.id).rules('add', { required: field.required });
            } else {
                $('#' + field.id).rules('remove', 'required');
                $('#' + field.id).removeClass('is-invalid');
            }

            // key must be pulled from field's name for radio input fields 
            var key = field.type === 'radio' ? field.name : field.id;
            if (formOpts && formOpts.rules[key]) {
                formOpts.rules[key].required = required;
            }
        },

        /**
         * @function bindMonthUpdates
         * - Updates options for a day field, depending on year and month value
         
        * @params {String} yearSelectId - id of year select field
        * @params {String} monthSelectId - id of month select field
        * @params {String} daySelectId - id of day select field
        * NOTE: parameters should include "#" as indicator for id selector
        */
        bindMonthUpdates: function(yearSelectId, monthSelectId, daySelectId) {
            if (!yearSelectId || !monthSelectId || !daySelectId) return;

            $(monthSelectId + ',' + yearSelectId).on('change', function() {
                var year = $(yearSelectId).val();
                var month = $(monthSelectId).val();
                if (!year || !month) return;

                $(daySelectId).empty();

                var daysInMonth = moment(year + '-' + month).daysInMonth();
                for (var day = 1; day <= daysInMonth; day++) {
                    var dayStr = day;
                    if (day < 10) {
                        dayStr = '0' + dayStr;
                    }

                    $(daySelectId).append('<option value="' + dayStr + '">' + dayStr + '</option>');
                }

                $(daySelectId).val(null).trigger('change');
            });
        },

        /**
         * @function bindUnknownFields
         * - Generic form listener for fields with unknown checkboxes
         * - Disables child fields and resets its value
         * 
         * @params {Array} _fields - fields in a form
         *     @sampleParam {Array} _fields:
         *     [{ id: 'unknown_notes', label: 'Unknown', type: 'unknown-checkbox', 
         *        children: [ { id: 'notes', label: 'Notes', type: 'textarea', required: true } ] }]
         */
        bindUnknownFields: function(_fields) {
            if (!Array.isArray(_fields)) return;

            var unknownCheckboxes = _fields.filter(function(field) {
                return field.type === 'unknown-checkbox';
            });

            unknownCheckboxes.forEach(function(field) {
                $('#' + field.id).on('change', function() {
                    var checked = this.checked;
                    var children = field.children || [];

                    children.forEach(function(child) {
                        $('#' + child.id).prop('disabled', checked);

                        if (!checked) return;

                        if (['checkbox', 'radio'].includes(child.type)) {
                            $('#' + child.id).prop('checked', false);
                        }

                        if (['text', 'textarea', 'select', 'file'].includes(child.type)) {
                            $('#' + child.id).val(null).change();
                        }
                    });
                });
            });
        }
    };

    $(document).ready(function() {
        APP.Forms.init();
    });
})();