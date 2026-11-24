<?php
require_once 'config.php';
requiereLogin();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil | Mi Sistema</title>
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
<main class="content narrow">
    <span class="eyebrow">Área privada</span>
    <h1>Mi perfil</h1>
    <section class="profile-card">
        <div class="avatar"><?= strtoupper(substr($_SESSION['nombre'], 0, 1)) ?></div>
        <h2><?= htmlspecialchars($_SESSION['nombre']) ?></h2>
        <p class="muted">Usuario: <?= htmlspecialchars($_SESSION['usuario']) ?></p>
        <span class="status">● Sesión iniciada</span>
    </section>
    <a class="text-link" href="dashboard.php">← Volver al panel</a>
</main>
<footer>© <?= date('Y') ?> MiSistema</footer>
</body>
</html>
