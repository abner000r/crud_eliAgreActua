
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
                <h1>Modificar Clientes</h1>

                <form action="modificar_clientes" method="post">
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label"></label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="Ingrese Reserva" value="<?= $datos['cliente_id']?> " readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label"></label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese su Nombre" value="<?= $datos['nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label"></label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese Pago mensual"
                            value="<?= $datos['apellido']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtNit" class="form-label"></label>
                        <input type="text" id="txtNit" name="txtNit" class="form-control" placeholder="Ingrese Cantidad Minutos"
                            value="<?= $datos['nit']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelefono" class="form-label"></label>
                        <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['telefono']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCorreo" class="form-label"></label>
                        <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['correo_electronico']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion" class="form-label"></label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['direccion']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCOntrasenia" class="form-label"></label>
                        <input type="text" id="txtCOntrasenia" name="txtCOntrasenia" class="form-control" placeholder="Ingrese Cnatidad Mensajes"
                            value="<?= $datos['contrasenia']?>">
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