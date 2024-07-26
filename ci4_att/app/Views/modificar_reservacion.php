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

                <form action="modificar_reservacion" method="post">
                    <div class="mb-3">
                        <label for="txtReservarId" class="form-label"></label>
                        <input type="text" id="txtReservarId" name="txtReservarId" class="form-control"
                            placeholder="Ingrese Reserva" value="<?= $datos['reservacion_id']?> " readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtFecha" class="form-label"></label>
                        <input type="text" id="txtFecha" name="txtFecha" class="form-control"
                            placeholder="Ingrese su Nombre" value="<?= $datos['fecha']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label"></label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control" placeholder="Ingrese Pago mensual"
                            value="<?= $datos['cliente_id']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtHotelId" class="form-label"></label>
                        <input type="text" id="txtHotelId" name="txtHotelId" class="form-control" placeholder="Ingrese Cantidad Minutos"
                            value="<?= $datos['hotel_id']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="form-label"></label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['descripcion']?>">
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