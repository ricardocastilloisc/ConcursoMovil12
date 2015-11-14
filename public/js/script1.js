
//este js son sirve para redireccionar 
//la paginacion
$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route = "/ConcursoMovil12/public/raza";
    
    $.ajax({
        url: route,
        data: {page: page},
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $(".razas").html(data);
        }
    });
});
