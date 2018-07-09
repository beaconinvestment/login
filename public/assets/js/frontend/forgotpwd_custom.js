$(".omb_loginForm").bootstrapValidator({
    fields: {
        // email: {
        //     validators: {
        //         notEmpty: {
        //             message: 'The email address is required'
        //         },
        //         emailAddress: {
        //             message: 'The input is not a valid email address'
        //         }
        //     }
        // }
        cnic: {
            validators: {
                notEmpty: {
                    message: 'CNIC number required'
                }, // notEmpty
                regexp: {
                    // regexp: /^[1-9][0-9]{0,11}$/,
                    regexp: /^\d{13}$/,
                    message: "Invalid CNIC Number"
                }
            } // validators
        }
    }
});
$(function() {
    setTimeout(function () {
        $("#notific").remove();
    }, 5000);
});