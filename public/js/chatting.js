/**
 * Created by kaushik on 8/20/17.
 */

$(document).ready(function() {
    $('.chatMember').on('click',function(e){
        var member_id = $('#chaterMember').val();
        // var member_id = e.target.value;

        // $('#message').val('');


        // var chatBox = document.getElementById('chatBox');
        // chatBox.val('');
        console.log(member_id);

        //console.log(match_id);
        //ajax
        $.get('/chatting?member_id='+ member_id,function(messages){
            //success data
            // console.log(data);
            $('#chatBox').val('');
            $('#chatBox').load();
            // $('#message').load();


            var chatbox =  $('#chatBox').empty();



            console.log(messages);

            $.each(messages[0],function(index, message){
                console.log('dekhi');


                // var teamfirst = team1Obj[0];

                console.log(message['message']);

                // var option = $('<option/>', {id:user, value:teamfirst});
                chatbox.val(chatbox.val()+'\n'+ messages[1][index]+':'+message.message);
            });





        });



        setTimeout(arguments.callee, 2000)

    });


    $('#send').on('click',function(e){

        // var member_id = e.target.value;


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: 'send',
            data: {
                '_token': $('input[name=_token]').val(),
                'reciever_id': $('#chaterMember').val(),
                'message': $('#message').val()

                },
            success: function(data) {

                $('#message').val('');
                $('#message').load();


                var chatbox =  $('#chatBox');

                chatbox.val(chatbox.val()+'\n'+ data[0]+':'+data[1]);
                console.log(data);

            }


        });


    });




});