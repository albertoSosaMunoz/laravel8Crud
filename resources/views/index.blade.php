@include('header')

<div class="row text-center" id="content">
    <div class="col-md-3">
        <div class="row">
            <div class="col-12">
                <img src="images/leer.jpg" />
            </div>
            <div class="col-12">
                <table class="table table-striped" id="productos_table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-12">
                <img src="images/crear.jpg" />
            </div>
            <div class="col-12">
                <form id="formulario_crear_producto">
                    <div><input type="text" placeholder="Nombre" name="nombre" id="crear_nombre"></div>
                    <div><input type="text" placeholder="Stock" name="stock" id="crear_stock"></div>
                    <div><input type="text" placeholder="Precio" name="precio" id="crear_precio"></div>
                    <div><input type="submit" value="Crear Producto" name="crear" id="boton_crear"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-12">
                <img src="images/actualizar.jpg" />
            </div>
            <div class="col-12">
                <div class="col-12">
                    <form id="formulario_actualizar_producto">
                        <div><input type="text" placeholder="id" name="id" id="actualizar_id"></div>
                        <div><input type="text" placeholder="Nombre" name="nombre" id="actualizar_nombre"></div>
                        <div><input type="text" placeholder="Stock" name="stock" id="actualizar_stock"></div>
                        <div><input type="text" placeholder="Precio" name="precio" id="actualizar_precio"></div>
                        <div><input type="submit" value="Actualizar Producto" name="actualizar" id="boton_actualizar"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-12">
                <img src="images/borrar.jpg" />
            </div>
            <div class="col-12">
                <div class="col-12">
                    <form id="formulario_borrar_producto">
                        <div><input type="text" placeholder="ID" name="id" id="input_borrar_id"></div>                        
                        <div><input type="submit" value="Borrar Producto" name="borrar" id="boton_borrar"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
</div>

@include('footer')
