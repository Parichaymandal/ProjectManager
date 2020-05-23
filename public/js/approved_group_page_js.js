/**
 * Created by Parichay on 7/12/2017.
 */
var postSection = document.getElementById('postSection');
var chatBoxSection = document.getElementById('chatBoxSection');

function coverImgAdjust() {
    var size = {
        width: window.innerWidth || document.body.clientWidth,
        height: window.innerHeight || document.body.clientHeight
    }

    var imgResponsive = document.getElementsByClassName('img-responsive');

    imgResponsive[0].style.width = size.width + 'px';
    imgResponsive[0].style.height = ((size.height/100) * 70) + 'px';
    
    postSection.style.display = 'block';
    chatBoxSection.style.display = 'none';

}

function getChatBox(id) {

    postSection.style.display = 'none';
    chatBoxSection.style.display = 'block';

    var member_id = document.getElementById('chaterMember');
    member_id.setAttribute('value',id);
    $('#chatBox').val('');

    console.log(id);


}

function exitWindow() {
    postSection.style.display = 'block';
    chatBoxSection.style.display = 'none';
}