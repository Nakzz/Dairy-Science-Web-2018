$("#contact-form").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#Full_Name").val();
    var email = $("#Email_Address").val();
    var subject = $("#subject").val();
    var message = $("#Your_Message").val();

    $.ajax({
        type: "POST",
        url: "includes/mailer/php/form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message +"&subject=" + subject,
        success: function (text) {
            if (text == "success") {
                formSuccess();
            }
        }
    });
}

function formSuccess(){
    $("#contact-form")[0].reset();
    submitMSG(true, "Message Submitted!")
    alert("Message Submitted!");
}

function formError(){
    $("#contact-form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
    alert("Error!");
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}