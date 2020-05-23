/**
 * Created by parichay on 3/15/18.
 */


$(document).ready(function() {

    $('#add_designation').on('click', function (s) {
        console.log('ok');
        var ur = $('#url').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: ur,
            data: {
                '_token': $('input[name=_token]').val(),
                'designation': $("#des").val(),

            },
            success: function (data) {


                $('#designation').append("<p>" + data.designation + '</p>');
                $('#des').val('');

                $('#des').load();


            }
        });
    });
    
    // $('#save').on('click',function (s) {
    //     console.log('ok');
    //     var ur = $('#url').val();
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $.ajax({
    //         type: 'post',
    //         url: ur,
    //         data: {
    //             '_token': $('input[name=_token]').val(),
    //             'designation': $("#des").val(),
    //
    //         },
    //         success: function (data) {
    //
    //
    //             $('#designation').append("<p>" + data.designation + '</p>');
    //             $('#des').val('');
    //
    //             $('#des').load();
    //
    //
    //         }
    //     });
    // });

});