function product(m)
{
    
    $.ajax({
        url: "process/product_process.php",
        type: "GET",
        data:{ "m":m},
        success:function(n){
            
            $('.product-content').html(n);

        }
    });
    $('.product1-content').hide();
    
}