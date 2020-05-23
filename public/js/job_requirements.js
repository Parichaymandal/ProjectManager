/**
 * Created by parichay on 2/27/18.
 */
$(document).ready(function(){


    $('#add_requirement').on('click',function(s){


        $("#requirements").append(
        '<input type="hidden" class="form-control" name="requirement'+$("#req_count").val()+'" value="'+$("#requirement").val()+'">'

        );

        $('#para').append("* " + $('#requirement').val() + '<br>');
                $('#requirement').val('');

                $('#requirement').load();

        $("#req_count").val(parseInt($("#req_count").val())+1);
    });

    $('#add_milestone').on('click',function(s){


        $("#milestones").append(
            '<input type="hidden" class="form-control" name="milestone'+$("#mile_count").val()+'" value="'+$("#milestone").val()+'">'+
            '<input type="hidden" class="form-control" name="deadline'+$("#mile_count").val()+'" value="'+$("#deadline").val()+'">'


        );

                $('#para1').append("* " + $("#milestone").val() +"         "+$("#deadline").val()+ '<br>');
                $('#milestone').val('');

                $('#milestone').load();
                $('#deadline').val('');

                $('#deadline').load();

        $("#mile_count").val(parseInt($("#mile_count").val())+1);


    });




});