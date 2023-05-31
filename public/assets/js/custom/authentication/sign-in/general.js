"use strict";

// Class definition
var KTSigninGeneral = function() {
    // Elements
    var form;
    var submitButton;
    var validator;

    // Handle form
    var handleValidation = function(e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form, {
                fields: {
                    'email': {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: 'The value is not a valid email address',
                            },
                            notEmpty: {
                                message: 'Email address is required'
                            }
                        }
                    },
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '', // comment to enable invalid state icons
                        eleValidClass: '' // comment to enable valid state icons
                    })
                }
            }
        );
    }

    var handleSubmitAjax = function(e) {
        // Handle form submit
        submitButton.addEventListener('click', function(e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function(status) {
                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Check axios library docs: https://axios-http.com/docs/intro
                    var formData = new FormData(form);
                    // iterate through entries...
                    const val = [];
                    for (var pair of formData.entries()) {
                        val.push(pair[1]);
                    }


                    try {
                        var url = "https://workout.americanathleticsco.com/auth/login";
                        var param = {
                            'username': val[0],
                            'password': val[1],
                        }
                        $.ajax({
                            type: 'POST',
                            data: param,
                            url: url,
                            success: function(res) {
                                form.reset();

                                const redirectUrl = form.getAttribute('data-kt-redirect-url');

                                if (redirectUrl) {
                                    location.href = redirectUrl;
                                }
                                localStorage.setItem('JWTTKN', res.token);
                            },
                            error: function(err) {

                                Swal.fire({
                                    text: "Sorry, the email or password is incorrect, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });


                            }

                        });
                    } catch (err) {

                    }




                    // console.log(val[0]);
                    // axios.post(submitButton.closest('form').getAttribute('action'), new FormData(form)).then(function(response) {
                    //     console.log(axios.post(submitButton.closest('form').getAttribute('action'), new FormData(form)));
                    //     if (response) {
                    //         console.log(response);
                    //         exit();
                    //         form.reset();

                    //         const redirectUrl = form.getAttribute('data-kt-redirect-url');

                    //         if (redirectUrl) {
                    //             location.href = redirectUrl;
                    //         }
                    //     } else {
                    //         // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    //         Swal.fire({
                    //             text: "Sorry, the email or password is incorrect, please try again.",
                    //             icon: "error",
                    //             buttonsStyling: false,
                    //             confirmButtonText: "Ok, got it!",
                    //             customClass: {
                    //                 confirmButton: "btn btn-primary"
                    //             }
                    //         });
                    //     }
                    // }).catch(function(error) {
                    //     Swal.fire({
                    //         text: "Sorry, looks like there are some errors detected, please try again.",
                    //         icon: "error",
                    //         buttonsStyling: false,
                    //         confirmButtonText: "Ok, got it!",
                    //         customClass: {
                    //             confirmButton: "btn btn-primary"
                    //         }
                    //     });
                    // }).then(() => {
                    //     // Hide loading indication
                    //     submitButton.removeAttribute('data-kt-indicator');

                    //     // Enable button
                    //     submitButton.disabled = false;
                    // });
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    }

    // Public functions
    return {
        // Initialization
        init: function() {
            form = document.querySelector('#kt_sign_in_form');
            submitButton = document.querySelector('#kt_sign_in_submit');

            handleValidation();
            handleSubmitAjax(); // use for ajax submit
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTSigninGeneral.init();
});