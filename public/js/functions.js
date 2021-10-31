$(() => {

    leerTablaProductos();

    $("form").submit((event)=>{
        event.preventDefault();
    });

    $("#boton_crear").click(()=>{

        let data={  nombre : $("#crear_nombre").val(),
                    stock : $("#crear_stock").val(),
                    precio : $("#crear_precio").val() };

        console.log(data);
        crearProducto(data);
        leerTablaProductos();        
    });

    $("#boton_actualizar").click(()=>{

        let data={  nombre : $("#actualizar_nombre").val(),
                    stock : $("#actualizar_stock").val(),
                    precio : $("#actualizar_precio").val() ,
                    id : $("#actualizar_id").val() 
                };

        console.log(data);
        actualizarProducto(data);
        leerTablaProductos();        
    });

    $("#boton_borrar").click(()=>{

        let data={  id : $("#input_borrar_id").val() };

        borrarProducto(data);
        leerTablaProductos();        
    });

});


function leerTablaProductos() {
    
    $.ajax({
        url: "api/productos",
        type: "GET",
        dataType: "json",
        cache: false,
        beforeSend: function () {            
        },
    })
        .done(function (res) {
            $("#productos_table tbody").empty();
            //console.log(res);
            res.forEach(elemento => {
                row=    "<tr>"+
                            "<td>" + elemento.id + "</td>"+
                            "<td>" + elemento.nombre + "</td>"+
                            "<td>" + elemento.precio + "</td>"+
                            "<td>" + elemento.stock + "</td>"+
                        "</tr>";
                $("#productos_table tbody").append(row);
                //console.log(row);
            });       
        })
        .fail(function (res) {
           // console.log(res);
        });
}

function crearProducto(data){

    $.ajax({
        url: "api/producto",
        type: "POST",
        dataType: "json",
        data: JSON.stringify(data),
        cache: false,
        contentType : "application/json",
        beforeSend: function () {    
        },
    })  .done(function (res) {
        leerTablaProductos();
    })
    .fail(function (res) {
        console.log(res);
    });

}

function actualizarProducto(data){

    $.ajax({
        url: "api/producto/"+data.id,
        type: "PUT",
        dataType: "json",
        data: JSON.stringify(data),
        cache: false,
        contentType : "application/json",
        beforeSend: function () {    
            
        },
    })  .done(function (res) {
        console.log(res);
        leerTablaProductos();
    })
    .fail(function (res) {
        console.log(res);
    });

}

function borrarProducto(data){

    $.ajax({
        url: "api/producto/"+data.id,
        type: "DELETE",
        dataType: "json",        
        cache: false,
        contentType : "application/json",
        beforeSend: function () {    
            console.log("hola");
        },
    })  .done(function (res) {
        leerTablaProductos();
    })
    .fail(function (res) {
        console.log(res);
    });

}