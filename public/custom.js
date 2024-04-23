function show_toastr(type, message, title) {
    toastr.options = {
        closeButton: false,
        debug: false,
        newestOnTop: true,
        progressBar: false,
        positionClass: "toast-top-center",
        preventDuplicates: false,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: "2000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
    };
    if (type == "success") {
        toastr.success(message, title);
    } else if (type == "error") {
        toastr.error(message, title);
    } else if (type == "info") {
        toastr.info(message, title);
    }else if (type == "warning") {
        toastr.warning(message, title);
    }
}

$("input.alphanumeric").keypress(function (event) {
    var regex = new RegExp("^[a-zA-Z0-9 ]+$");
    var key = String.fromCharCode(
        !event.charCode ? event.which : event.charCode
    );
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$("input.mobile").keypress(function(event) {
    var regex = /^[0-9]{0,10}$/;
    var key = String.fromCharCode(
        !event.charCode ? event.which : event.charCode
    );
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
    var inputValue = $(this).val() + key;
    if (inputValue.length === 1 && /[0-5]/.test(key)) {
        event.preventDefault();
        return false;
    }
    if (inputValue.length > 10) {
        event.preventDefault();
        return false;
    }
});

function updateTime() {
    var currentTime = new Date().toLocaleString("en-US", {timeZone: "Asia/Kolkata"});
    document.getElementById("clock").textContent = "Current Time: " + currentTime;
}
setInterval(updateTime, 1000);