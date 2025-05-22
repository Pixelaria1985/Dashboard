<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Pixi85</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
    
    <!-- Título general de la empresa -->
    <h1 class="mb-4 text-primary">Pixi85</h1>
    
    <div class="card shadow p-4 w-100" style="max-width: 400px;">
        <!-- Título dentro del cuadro -->
        <h4 class="mb-4 text-center">Iniciar Sesión</h4>
        
        <?php
        if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
        }
        ?>
        
        <form action="procesar-login.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
