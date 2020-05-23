/**
 * Created by parichay on 3/18/18.
 */

$(document).ready(function(){


    $("#req").on('click',function (s) {

        var count = $("#count").val();
        console.log(count);

        for(var i = 0; i <= count; i++){
            if(document.getElementById('requirement'+i).checked){
                $("#complete").val($("#complete").val() + document.getElementById('requirement'+i).value + ', ');

            }
            console.log($("#complete").val());

        }

    });

    $("#close").on('click',function (s) {

        console.log('closed');
        $('#complete').val('');
        $("#complete").load();
    });


});