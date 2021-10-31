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
        url: "api/producto?",
        type: "POST",
        dataType: "json",
        data: JSON.stringify(data),
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