<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-image: url('/images/event-management.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .section-title {
            margin-top: 50px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .section-content {
            margin-bottom: 50px;
        }
        .navbar-nav .nav-item + .nav-item {
            margin-left: 15px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        body {
            margin-bottom: 80px; /* espacio para el footer fijo */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestión de Eventos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#event-management">Gestión de eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#participant-management">Gestión de participantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ticket-management">Gestión de entradas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#location-management">Gestión de locaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#event-search">Búsqueda de eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ticket-availability">Disponibilidad de entradas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="additionalFeaturesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Funcionalidades adicionales
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="additionalFeaturesDropdown">
                            <li><a class="dropdown-item" href="#sponsors-management">Gestión de patrocinadores</a></li>
                            <li><a class="dropdown-item" href="#attendance-reports">Reportes de asistencia</a></li>
                            <li><a class="dropdown-item" href="#satisfaction-surveys">Encuestas de satisfacción</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Bienvenido a la Gestión de Eventos</h1>
            <p class="lead">Administra todos tus eventos, participantes, entradas y más en un solo lugar.</p>
        </div>
    </div>

    <div class="container">
        <!-- Aquí van tus secciones -->
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="mb-0">Proyecto realizado por:</p>
            <p class="mb-0">
            Joshua Alvarez 👨‍💻<br>
                Melany Azofeifa 👩‍💻<br>
                Jason Madrigal 👨‍💻<br>
                Adriana Ortiz 👩‍💻<br>
                Edgar Amador 👨‍💻
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
