
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div col>
                <h1>Modificar reservacion</h1>

                <form action="modificar_hoteles" method="post">
                    <div class="mb-3">
                        <label for="txtHotelId" class="form-label"></label>
                        <input type="text" id="txtHotelId" name="txtHotelId" class="form-control"
                            placeholder="Ingrese Reserva" value="<?= $datos['hotel_id']?> " readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label"></label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese su Nombre" value="<?= $datos['nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCorreoElec" class="form-label"></label>
                        <input type="text" id="txtCorreoElec" name="txtCorreoElec" class="form-control" placeholder="Ingrese Pago mensual"
                            value="<?= $datos['correoelectronico']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelefono" class="form-label"></label>
                        <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Ingrese Cantidad Minutos"
                            value="<?= $datos['telefono']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion" class="form-label"></label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['direccion']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCiudad" class="form-label"></label>
                        <input type="text" id="txtCiudad" name="txtCiudad" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['ciudad_id']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCategoriaId" class="form-label"></label>
                        <input type="text" id="txtCategoriaId" name="txtCategoriaId" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['categoria_id']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtUsuario" class="form-label"></label>
                        <input type="text" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['usuario_id']?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success form-control" value="Guardar Cambios">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>