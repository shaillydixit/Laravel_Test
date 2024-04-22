

$(document).ready(function () {
    "use strict";
    var pageForm = $("#registerForm");
    if (pageForm.length) {
        if (typeof pageForm.validate === "function") {            
            pageForm.validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                    },
                    mobile: {
                        required: true,
                    },
                    dob: {
                        required: true,
                        date: true,
                        max: function() {
                            var today = new Date();
                            var maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
                            return maxDate.toISOString().split('T')[0]; 
                        }
                    },
                    confirmPassword: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Enter User Name",
                    },
                    email: {
                        required: "Enter User Email",
                    },
                    password: {
                        required: "Enter User Password",
                    },
                    mobile: {
                        required: "Enter User Mobile No",
                    },
                    dob: {
                        required: "Select User Date of Birth",
                    },
                    confirmPassword: {
                        required: "Confirm your password",
                    }
                },
            });
        }
    } else {
        console.error("jQuery Validation Plugin is not loaded");
    }

    $("#submit_button").on("click", function (e) {
        e.preventDefault();
        if (!pageForm.valid()) {
            return false;
        }
        var formData = new FormData(pageForm[0]);
        $.ajax({
            url: "/register",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success: function (response) {
                if (response.res === 1) { 
                    pageForm.trigger("reset");
                    show_toastr("success", "Data Added Successfully.", "User");
                } else if (response.res === 3) {
                    show_toastr("warning", "User Email Already Exist", "User");
                } else if (response.res === 0)  {
                    show_toastr("error", "Something is wrong.", "User");
                } else if (response.res === 2)  {
                    show_toastr("error", "Password does not match", "User");
                }
            },
        });
    });
});


$(document).ready(function () {
    "use strict";
    var pageForm = $("#loginForm");
    if (pageForm.length) {
        if (typeof pageForm.validate === "function") {            
            pageForm.validate({
                rules: {
                   
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                    },
                   
                },
                messages: {
                  
                    email: {
                        required: "Enter User Email",
                    },
                    password: {
                        required: "Enter User Password",
                    },
                   
                },
            });
        }
    } else {
        console.error("jQuery Validation Plugin is not loaded");
    }

    $("#login_button").on("click", function (e) {
        e.preventDefault();
        if (!pageForm.valid()) {
            return false;
        }
        var formData = new FormData(pageForm[0]);
        $.ajax({
            url: "/login",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success: function (response) {
                if (response.res === 1) { 
                    pageForm.trigger("reset");
                    show_toastr("success", "Data Login Successful.", "User");
                } else if (response.res === 0)  {
                    show_toastr("error", "Something is wrong.", "User");
                }else if (response.res === 2)  {
                    show_toastr("error", "Enter Valid Password", "User");
                }
            },
        });
    });
});
