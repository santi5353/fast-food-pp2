<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast-Food</title>
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
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block carousel-img" style="max-height: 80vh; object-fit: cover;" alt="Imagen 1">
            <div class="carousel-caption d-md-block text-center custom-caption">
                <h1 class="display-4">Impacto de la Comida Rápida</h1>
                <p class="lead" style="font-size: 1.5vw;">"La comida rápida a menudo es alta en grasas saturadas y calorías vacías, contribuyendo al aumento de peso y problemas de salud."</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/4.jpg" class="d-block carousel-img" alt="Imagen 2" style="max-height: 80vh; object-fit: cover;">
            <div class="carousel-caption d-md-block text-center custom-caption" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h1 class="display-4">Nutrientes Inadecuados</h1>
                <p class="lead" style="font-size: 1.5vw;">"La comida rápida a menudo carece de nutrientes esenciales como vitaminas, minerales y fibra. Esta falta de nutrientes puede llevar a deficiencias nutricionales y afectar negativamente la salud a largo plazo."</p>
            </div>
            
        </div>
        <div class="carousel-item">
            <img src="img/3.jpg" class="d-block carousel-img" alt="Imagen 3" style="max-height: 80vh; object-fit: cover;">
            <div class="carousel-caption d-md-block text-center custom-caption">
            <h1 class="display-4">Impacto Ambiental</h1>
                <p class="lead" style="font-size: 1.5vw;">"La producción de comida rápida a menudo tiene un impacto negativo en el medio ambiente. El uso excesivo de envases desechables y la generación de residuos contribuyen a la contaminación y la degradación ambiental."</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>


    <div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card shadow-lg text-center" style="width: 18rem;">
        <img src="img/11.png" class="card-img-top img-fluid mx-auto mt-3" style="max-width: 60%;"  alt="...">
        <div class="card-body text-center">
          <a href="http://localhost/fast-food/1.php" class="btn btn-info">Estadisticas</a>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card shadow-lg text-center" style="width: 18rem;">
      <img src="img/12.png" class="card-img-top img-fluid mx-auto mt-3" style="max-width: 60%;"  alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <a href="#" class="btn btn-info">Informacion</a>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card shadow-lg text-center" style="width: 18rem;">
      <img src="img/13.png" class="card-img-top img-fluid mx-auto mt-3" style="max-width: 60%;"  alt="...">
        <div class="card-body">
          <a href="#" class="btn btn-info">Salud</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
<div class="row mt-5">
    <div class="col-md-3">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Evitar la comida rápida</div>
            <div class="card-body">
                <h5 class="card-title">Impacto en la Salud</h5>
                <p class="card-text">El consumo frecuente de comida rápida puede contribuir a problemas de salud, como la obesidad, enfermedades cardíacas y diabetes. Está cargada de grasas saturadas, azúcares y sodio, lo cual puede tener efectos negativos a largo plazo.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Nutrientes Inadecuados</div>
            <div class="card-body">
                <h5 class="card-title">Falta de Nutrientes Esenciales</h5>
                <p class="card-text">La comida rápida a menudo carece de nutrientes esenciales como vitaminas, minerales y fibra. Esto puede llevar a deficiencias nutricionales y afectar negativamente la salud a largo plazo.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Impacto Ambiental</div>
            <div class="card-body">
                <h5 class="card-title">Sostenibilidad</h5>
                <p class="card-text">La producción de comida rápida a menudo tiene un impacto negativo en el medio ambiente. El uso excesivo de envases desechables y la generación de residuos contribuyen a la contaminación y la degradación ambiental.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Adicción a Ingredientes Adictivos</div>
            <div class="card-body">
                <h5 class="card-title">Adicción y Comportamiento Alimentario</h5>
                <p class="card-text">Los ingredientes utilizados en la comida rápida, como azúcares y grasas procesadas, pueden ser adictivos. Esto puede contribuir a patrones alimentarios poco saludables y dificultar la adopción de hábitos alimenticios equilibrados.</p>
            </div>
        </div>
    </div>

</div>
</div>
    <!-- Bootstrap JS (la versión 5 incluye Popper.js y no necesita jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php'; ?>

</body>

</html>
