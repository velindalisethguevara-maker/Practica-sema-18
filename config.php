<?php
// Configuración y control de sesiones
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Usuarios de demostración.
// Usuario: estudiante | Contraseña: 123456
$usuarios = [
    'estudiante' => [
        'nombre' => 'Estudiante',
        'password' => password_hash('123456', PASSWORD_DEFAULT)
    ],
    'admin' => [
        'nombre' => 'Administrador',
        'password' => password_hash('admin123', PASSWORD_DEFAULT)
    ]
];

function estaAutenticado(): bool {
    return isset($_SESSION['usuario']);
}

function requiereLogin(): void {
    if (!estaAutenticado()) {
        header('Location: login.php');
        exit;
    }
}
