$(document).ready(function(){

    $("#submitButton").click(function() {
        $('#submitButton').attr('disabled','true');
        $.ajax({
            url: '/register',
            type: 'post',
            dataType: 'json',
            data: $('form#myForm').serialize(),
            success: function(data) {
                $('#submitButton').removeAttr('disabled');
                window.location = '/verify';
            },
            error: function(data) {
                let errors = data.responseJSON.errors;
                let duplicate = data.responseJSON.duplicate;
                $('#myForm input').removeClass('is-invalid');
                for (var key of Object.keys(errors)) {
                    $("#"+key).addClass('is-invalid');
                    $("#"+key+'-error').text(errors[key]);
                }

                for (var key of Object.keys(duplicate)) {
                    $("#"+key).addClass('is-invalid');
                    $("#"+key+'-error').text(duplicate[key]);
                }
                $('#submitButton').removeAttr('disabled');
            }
        });
    });


});