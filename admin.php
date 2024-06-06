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
  <!-- Main Content -->
  <div class="container mt-8">
        <div class="row"> 
            <!-- Left Column -->
            <div class="col-md-4">
                <h2>Contenido Principal</h2>
                <p>Aquí va el contenido principal de la columna izquierda.</p>
            </div>
            <!-- Right Column -->
            <div class="col-md-8">
                <div class="card">
                    <img src="ruta/a/tu/foto.jpg" class="card-img-top" alt="Foto del Administrador">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Administrador</h5>
                        <p class="card-text">Dirección: Calle Ejemplo 123</p>
                        <p class="card-text">Departamento: Desarrollo Web</p>
                        <p class="card-text">Cargo: Administrador</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>