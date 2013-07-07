$('#main_modal').on('hidden', function(){
    $(this).removeData('modal');
});

$('.status').each(function(index){
    if ( $(this).text() == 1)
       $(this).html('<span class="badge badge-success">On</span>'); 
    else
       $(this).html('<span class="badge">Off</span>'); 
});
