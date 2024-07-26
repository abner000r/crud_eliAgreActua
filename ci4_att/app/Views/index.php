<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres Tarjetas Centradas con Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .card {
        width: 100%;
        margin-bottom: 20px;
    }

    .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .row {
        width: 100%;
    }

    body {
        width: 100%;
        height: 100%;
        background: radial-gradient(rgba(255, 255, 255, 0) 0,
                rgba(255, 255, 255, 0.15) 30%,
                rgba(255, 255, 255, 0.3) 32%,
                rgba(255, 255, 255, 0) 33%) 0 0,
            radial-gradient(rgba(255, 255, 255, 0) 0,
                rgba(255, 255, 255, 0.1) 11%,
                rgba(255, 255, 255, 0.3) 13%,
                rgba(255, 255, 255, 0) 14%) 0 0,
            radial-gradient(rgba(255, 255, 255, 0) 0,
                rgba(255, 255, 255, 0.2) 17%,
                rgba(255, 255, 255, 0.43) 19%,
                rgba(255, 255, 255, 0) 20%) 0 110px,
            radial-gradient(rgba(255, 255, 255, 0) 0,
                rgba(255, 255, 255, 0.2) 11%,
                rgba(255, 255, 255, 0.4) 13%,
                rgba(255, 255, 255, 0) 14%) -130px -170px,
            radial-gradient(rgba(255, 255, 255, 0) 0,
                rgba(255, 255, 255, 0.2) 11%,
                rgba(255, 255, 255, 0.4) 13%,
                rgba(255, 255, 255, 0) 14%) 130px 370px,
            radial-gradient(rgba(255, 255, 255, 0) 0,
                rgba(255, 255, 255, 0.1) 11%,
                rgba(255, 255, 255, 0.2) 13%,
                rgba(255, 255, 255, 0) 14%) 0 0,
            linear-gradient(45deg,
                #343702 0%,
                #184500 20%,
                #187546 30%,
                #006782 40%,
                #0b1284 50%,
                #760ea1 60%,
                #83096e 70%,
                #840b2a 80%,
                #b13e12 90%,
                #e27412 100%);
        background-size: 470px 470px, 970px 970px, 410px 410px, 610px 610px,
            530px 530px, 730px 730px, 100% 100%;
        background-color: #840b2a;
    }
    .imagen1{
        width:200px;
    }
    </style>
</head>

<body>
    <h1 class="text-center text-dark">Base de datos</h1>
    <br>
    <h2 class="text-center">Hoteles</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 imagen1">
                <div class="card text-center">
                    <img src="https://tecnosoluciones.com/wp-content/uploads/2022/10/comercio-electronico-por-reservaciones.png"
                        class="card-img-top " alt="Imagen 1" >
                    <div class="card-body">
                        <h5 class="card-title">Reservaciones</h5>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="reservacion" class="btn btn-primary"> ver</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 imagen1">
                <div class="card text-center">
                    <img src="https://blog.ida.cl/wp-content/uploads/sites/5/2019/06/clientesnosabenquequieren.png"
                        class="card-img-top" alt="Imagen 2" >
                    <div class="card-body">
                        <h5 class="card-title">Clientes</h5>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="clientes" class="btn btn-primary">Clientes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card text-center imagen1">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/39/5f/7e/hotel-camino-real.jpg"
                        class="card-img-top" alt="Imagen 3" >
                    <div class="card-body">
                        <h5 class="card-title">Hoteles</h5>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="hoteles" class="btn btn-primary"> Hoteles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>