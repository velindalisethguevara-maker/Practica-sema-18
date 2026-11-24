<?php
require_once 'config.php';

if (estaAutenticado()) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $password = $_POST['password'] ?? '';

    if (isset($usuarios[$usuario]) && password_verify($password, $usuarios[$usuario]['password'])) {
        session_regenerate_id(true);
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nombre'] = $usuarios[$usuario]['nombre'];
        header('Location: dashboard.php');
        exit;
    }
    $error = 'Usuario o contraseña incorrectos. Inténtalo de nuevo.';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | Mi Sistema</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="login-page">
<header class="navbar">
    <a class="logo" href="index.php">MiSistema</a>
    <nav><a href="index.php">Volver al inicio</a></nav>
</header>

<main class="login-wrap">
    <form class="login-card" method="POST" action="login.php">
        <div class="lock-icon">↗</div>
        <span class="eyebrow">Acceso de usuarios</span>
        <h1>¡Qué bueno verte!</h1>
        <p class="muted">Ingresa tus datos para continuar.</p>

        <?php if ($error): ?>
            <div class="alert"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <label for="usuario">Nombre de usuario</label>
        <input id="usuario" name="usuario" type="text" placeholder="Ej. estudiante" required autofocus>

        <label for="password">Contraseña</label>
        <input id="password" name="password" type="password" placeholder="Tu contraseña" required>

        <button class="button full" type="submit">Iniciar sesión</button>
        <p class="login-help">Demo: <strong>estudiante</strong> / <strong>123456</strong></p>
    </form>
</main>
<footer>© <?= date('Y') ?> MiSistema</footer>
</body>
</html>
