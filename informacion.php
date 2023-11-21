<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impacto de la Comida Rápida en la Salud</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
    <link rel="stylesheet" href="css/app.css">
    <script defer src="js/app.js"></script>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <!-- Carrusel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner"> 
            <div class="carousel-item active">
                <img src="img/hamburger.jpg" class="d-block carousel-img" style="max-height: 80vh; object-fit: cover;" alt="Imagen 1">
                <div class="carousel-caption d-md-block text-center custom-caption">
                    <h1 class="display-4">Impacto de la Comida Rápida en la Salud</h1>
                    <p class="lead" style="font-size: 1.5vw;">Explorando los efectos de la comida rápida en nuestra salud y bienestar.</p>
                </div>
            </div>
        </div>
       
    </div>

    <div class="container">
    <div class="row mt-5">
        <!-- Tarjetas con información sobre los impactos negativos -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/dieta.png" class="img-fluid" alt="Imagen 1">
                </div>
                <div class="col-md-6">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Evitar la comida rápida</div>
                        <div class="card-body">
                            <h5 class="card-title">Impacto en la Salud</h5>
                            <p class="card-text">El consumo frecuente de comida rápida puede contribuir a problemas de salud, como la obesidad, enfermedades cardíacas y diabetes. Está cargada de grasas saturadas, azúcares y sodio, lo cual puede tener efectos negativos a largo plazo.</p>
                            <a href="#" class="btn btn-primary">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/nutrientes.png" class="img-fluid" alt="Imagen 2">
                </div>
                <div class="col-md-6">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Nutrientes Inadecuados</div>
                        <div class="card-body">
                            <h5 class="card-title">Falta de Nutrientes Esenciales</h5>
                            <p class="card-text">La comida rápida a menudo carece de nutrientes esenciales como vitaminas, minerales y fibra. Esto puede llevar a deficiencias nutricionales y afectar negativamente la salud a largo plazo.</p>
                            <a href="#" class="btn btn-secondary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <!-- Repite la estructura para las otras tarjetas -->
        </div>

        <div class="col-md-3">
            <!-- Repite la estructura para las otras tarjetas -->
        </div>
    </div>
</div>


    <!-- Bootstrap JS (la versión 5 incluye Popper.js y no necesita jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php'; ?>

</body>

</html>
