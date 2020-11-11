$('#adlist').hide();
$('#msglist').hide();
$('#postad').hide();

$('#view-job').click(function () {
    $('#adlist').show();
    $('#msglist').hide();
    $('#postad').hide();
});

$('#messages').click(function () {
    $('#adlist').hide();
    $('#msglist').show();
    $('#postad').hide();
});

$('#post-job').click(function () {
    $('#adlist').hide();
    $('#msglist').hide();
    $('#postad').show();
});