$(function() {

    $('#disposition').on('change', function() {
        console.log($(this).val());
        $('.option-div').each(function() {
            $(this).hide();
        });
        if ($(this).val() == "Discharge") {
            $('.discharge-option').each(function() {
                $(this).show();
            })
        } else if ($(this).val() == "HAMA") {
            $('.discharge-option').each(function() {
                $(this).show();
            })
        } else if ($(this).val() == "Absconded") {
            $('.absconded-option').each(function() {
                $(this).show();
            })
        } else if ($(this).val() == "Admit") {
            $('.admit-option').each(function() {
                $(this).show();
            })
        } else if ($(this).val() == "Transfer") {
            $('.transfer-option').each(function() {
                $(this).show();
            })
        } else if ($(this).val() == "Expired") {
            $('.expired-option').each(function() {
                $(this).show();
            })
            const now = new Date();
            now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
            $('#expired_tod').val(now.toISOString().slice(0, -8));
            $('#expired_ton').val(now.toISOString().slice(0, -8));
        }
    });

    $('#dispo_loc').on('change', function() {
        console.log($(this).val());
        if ($(this).val() == "Specify") {
            $('#dispo_loc_specify').show();
        } else {
            $('#dispo_loc_specify').hide();
        }
    });

    $('.dispo-summernote').each(function() {
        $(this).summernote({
            placeholder: this.placeholder,
            dialogsInBody: true,
            spellCheck: true,
            minHeight: 100,
            minWidth: 100,
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

    $('input[name="ffup_duration"]').change(function() {
        if (this.id === "durationNum") {
            $("#ffupNumDiv").show();
            $("#ffupRangeDiv").hide();
        } else {
            $("#ffupNumDiv").hide();
            $("#ffupRangeDiv").show();
        }
    });

    $('.diagnosis-card-header').on('click', function() {
        $(this).find(".btn-tool")[0].click();
    });

    $('.meds-card-header').on('click', function() {
        $(this).find(".btn-tool")[0].click();
    });

    $('.select2bs4').select2({
        theme: 'bootstrap4',
        width: 'resolve'
    });

    // $('#psychDischargeTable').DataTable();

    $('.end-consult-btn').on('click', function() {

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success ml-3',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'End Consult?',
            // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // swalWithBootstrapButtons.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
                window.location.href = 'queue';
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // swalWithBootstrapButtons.fire(
                //     'Cancelled',
                //     'Your imaginary file is safe :)',
                //     'error'
                // )
            }
        })
    });
});