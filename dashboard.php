<?php
require_once 'config.php';
requiereLogin();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel | Mi Sistema</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header class="navbar">
    <a class="logo" href="index.php">MiSistema</a>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="dashboard.php">Panel</a>
        <a href="perfil.php">Mi perfil</a>
        <a href="logout.php" class="nav-button">Cerrar sesión</a>
    </nav>
</header>
<main class="content">
    <span class="eyebrow">Área privada</span>
    <h1>¡Bienvenido, <?= htmlspecialchars($_SESSION['nombre']) ?>!</h1>
    <p class="muted">Has iniciado sesión correctamente. Esta página solo está disponible para usuarios autenticados.</p>
    <div class="cards">
        <a class="info-card" href="perfil.php">
            <div class="card-symbol">◎</div>
            <h2>Mi perfil</h2>
            <p>Consulta la información de tu cuenta.</p>
            <span>Ver perfil →</span>
        </a>
        <div class="info-card">
            <div class="card-symbol">✓</div>
            <h2>Sesión activa</h2>
            <p>Tu acceso está verificado y protegido.</p>
            <span>Autenticado</span>
        </div>
    </div>
</main>
<footer>© <?= date('Y') ?> MiSistema</footer>
</body>
</html>
