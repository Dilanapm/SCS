<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Web</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sadmin.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Hola Administrador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.html">cerrar sesion <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Generar Reportes</a>
                </li>
               
            </ul>
        </div>
</nav>
<div class="d-flex">
        <div class="sidebar bg-light p-3">
            <div class="profile mb-4">
                <img src="https://via.placeholder.com/80" alt="Foto de perfil">
                <h5>Linda Miller</h5>
                <p class="text-muted">Front-end Developer</p>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link active" href="#">
                    <i class="bi bi-house"></i> Dashboards
                </a>
                <nav class="nav flex-column ms-3">
                    <a class="nav-link" href="#">Default</a>
                    <a class="nav-link" href="#">Analyasdasdasdasdtics</a>
                    <a class="nav-link" href="#">E-commeasdasdasdasdrce</a>
                    <a class="nav-link" href="#">E-commeasdasdasdasafdaddrce</a>
                </nav>
                <a class="nav-link" href="#">
                    <i class="bi bi-file-earmark"></i> Pages
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-box-arrow-in-right"></i> Auth
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-palette"></i> User Interface
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-bar-chart"></i> Charts <span class="badge bg-primary">New</span>
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-check-square"></i> Forms
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-table"></i> Tables
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-grid"></i> DataTables
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-heart"></i> Icons
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-calendar"></i> Calendar
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-geo-alt"></i> Maps
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-book"></i> Documentation
                </a>
            </nav>
        </div>
        <div class="content p-4">
         <!-- Contenido principal aquí -->
        </div>
    </div>
 
    

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>