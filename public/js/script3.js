//igual es para paginar
$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route = "/ConcursoMovil12/public/nacimiento";
    
    $.ajax({
        url: route,
        data: {page: page},
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $(".nacimientos").html(data);
        }
    });
});
