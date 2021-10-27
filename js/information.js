function information(a)
{
    $('.information-title').hide();
    $('.information').hide();
    $('.information-highlight').hide();
    
   
    $.ajax({
        url: "process/information_process.php",
        type: "GET",
        data:{ "a":a},
        success:function(b){
            
            $('.content').html(b);

        }
    });
    $('.content').show();
}