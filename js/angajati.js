/**
 * Created by virgil on 6/9/2016.
 */

$(function() {
//twitter bootstrap script
    $("input#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "<?php echo WEB_ROOT.'nomenclatoare/angajati'; ?>",
            data: $('form.form-horizontal').serialize(),
            success: function(msg){
                $("#new-angajat").modal('hide');
                alert('ok');
            },
            error: function(){
                alert("failure");
            }
        });
    });
});
