
    <style>
        .navbar-nav li {
            position: relative;
            overflow: hidden;
        }

        .navbar-nav li::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #343a40; /* Color de fondo inicial */
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .navbar-nav li:hover::before {
            opacity: 1;
        }

        .navbar-nav li a {
            position: relative;
            z-index: 1;
            color: white;
            transition: color 0.3s ease;
        }

        .navbar-nav li:hover a {
            color: #17a2b8; /* Cambia el color de texto al pasar el ratón */
        }
    </style>
    <script defer src="js/app.js"></script>
</head>


    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light navbar-dark">
                <a class="navbar-brand" href="/fast-food/inicio.php">
                    <img src="img/burger.svg" alt="Fast Food Logo" class="svg-white " width="30" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/fast-food/1.php">Estadisticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fast-food/informacion.php">Informacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Salud</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

  
