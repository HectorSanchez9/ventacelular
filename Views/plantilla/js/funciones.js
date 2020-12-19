$(document).ready(function(){
    $(document).on('click','.editBoton',function(){
        let datos = JSON.parse($(this).attr("data-p"));
        $("#existencia").val(datos['existencia']);
        $("#precio").val(datos['precio']);
        $("#id").val(datos['codigo']);
    })

    //eliminar producto
    $(document).on('click','.elimBoton',function(){
        let id = $(this).attr('data-elim');
        let base = $("#base").val();
        
        $.ajax({
            url: base + 'productos/delete',
            type: 'POST',
            data: {id},
            success: function(response){
                alert("Se elimino el registro correctamente");
                $('.datosProductos tbody').html(response);
            }
        })

    })
    $(".actpro").on('submit',function(e){
        e.preventDefault();

        let id = $("#id").val();
        let existencia=$("#existencia").val();
        let precio=$("#precio").val();
        let base = $("#base").val();

        $.ajax({
            url: base + 'productos/update',
            type: 'POST',
            data: {id,existencia,precio},
            success: function(response){
                swal.fire("Se Actualiz el registro",'correctamente','success');
                $('#modalEditar').modal('hide');
                $(".actpro")[0].reset();
                $('.datosProductos tbody').html(response);
            }
        })
    })

    $('.filtros').isotope();

    $(document).on('click','.categoria',function(){
        let fil = $(this).attr('data-filter');

        $('.filtros').isotope({
            filter: fil
        });
    })
});