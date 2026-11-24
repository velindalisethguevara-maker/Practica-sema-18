<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Mi Sistema</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header class="navbar">
    <a class="logo" href="index.php">MiSistema</a>
    <nav>
        <a href="index.php">Inicio</a>
        <?php if (estaAutenticado()): ?>
            <a href="dashboard.php">Panel</a>
            <a href="logout.php" class="nav-button">Cerrar sesión</a>
        <?php else: ?>
            <a href="login.php" class="nav-button">Iniciar sesión</a>
        <?php endif; ?>
    </nav>
</header>

<main class="hero">
    <section class="hero-content">
        <span class="eyebrow">Práctica · Semana 18</span>
        <h1>Bienvenido a nuestro sistema</h1>
        <p>Esta es la página principal. Puedes verla sin iniciar sesión.
           Para acceder al panel y a las demás secciones, primero debes autenticarte.</p>
        <?php if (estaAutenticado()): ?>
            <a class="button" href="dashboard.php">Ir al panel</a>
        <?php else: ?>
            <a class="button" href="login.php">Ingresar a mi cuenta</a>
        <?php endif; ?>
    </section>
    <section class="hero-card">
        <div class="lock-icon">✓</div>
        <h2>Acceso protegido</h2>
        <p>Las páginas privadas verifican tu sesión antes de mostrar su contenido.</p>
    </section>
</main>

<footer>© <?= date('Y') ?> MiSistema · Práctica de desarrollo web</footer>
</body>
</html>
