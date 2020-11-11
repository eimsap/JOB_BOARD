$('#adlist').hide();
$('#customerlist').hide();
$('#mkclient').hide();
$('#mkad').hide();

$('#ads').click(function(){
    $('#adlist').show();
    $('#customerlist').hide();
    $('#mkclient').hide();
    $('#mkad').hide();
});

$('#customers').click(function(){
    $('#adlist').hide();
    $('#customerlist').show();
    $('#mkclient').hide();
    $('#craform').hide();
});

$('#createcust').click(function(){
    $('#adlist').hide();
    $('#customerlist').hide();
    $('#mkclient').show();
    $('#mkad').hide();
});

$('#createAD').click(function(){
    $('#adlist').hide();
    $('#customerlist').hide();
    $('#mkclient').hide();
    $('#mkad').show();
});

$('#disconnect').click(function(){
    location.replace('ApiCRUD/administration/disconnect.php');
})