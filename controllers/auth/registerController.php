<?php
session_start();
require_once __DIR__ . '/../../models/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_str = $_POST['usuario'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $terminos = $_POST['terminos'] ?? '';

    if (empty($usuario_str) || empty($email) || empty($password)) {
        $_SESSION['swal'] = [
            'icon' => 'error',
            'title' => 'Campos Incompletos',
            'text' => 'Todos los campos son obligatorios.'
        ];
        header('Location: ../../views/auth/register.php');
        exit();
    }

    if ($password !== $confirm_password) {
        $_SESSION['swal'] = [
            'icon' => 'error',
            'title' => 'Contraseñas no coinciden',
            'text' => 'Las contraseñas ingresadas no son iguales.'
        ];
        header('Location: ../../views/auth/register.php');
        exit();
    }

    if (empty($terminos)) {
        $_SESSION['swal'] = [
            'icon' => 'warning',
            'title' => 'Términos y Condiciones',
            'text' => 'Debes aceptar los términos y condiciones de uso para registrarte.'
        ];
        header('Location: ../../views/auth/register.php');
        exit();
    }

    $usuarioModel = new Usuario();

    if ($usuarioModel->emailExiste($email)) {
        $_SESSION['swal'] = [
            'icon' => 'error',
            'title' => 'Correo registrado',
            'text' => 'El correo electrónico ya está registrado.'
        ];
        header('Location: ../../views/auth/register.php');
        exit();
    }

    // 3 = Cliente
    $registrado = $usuarioModel->registrar($usuario_str, $email, $password, 3);

    if ($registrado) {
        $_SESSION['swal'] = [
            'icon' => 'success',
            'title' => '¡Registro Exitoso!',
            'text' => 'Tu cuenta ha sido creada con éxito. Ahora puedes iniciar sesión.'
        ];
        header('Location: ../../views/auth/login.php');
        exit();
    } else {
        $_SESSION['swal'] = [
            'icon' => 'error',
            'title' => 'Error de Registro',
            'text' => 'Hubo un error al registrar. Verifica tu conexión o intenta más tarde.'
        ];
        header('Location: ../../views/auth/register.php');
        exit();
    }
} else {
    header('Location: ../../views/auth/register.php');
    exit();
}
?>