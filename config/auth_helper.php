<?php
// auth_helper.php - Gestor de Almacenamiento Local (JSON) para AgroStock PRO
// Administra credenciales y sesiones locales en un archivo de texto para simular autenticación.

define('USERS_FILE', __DIR__ . '/users.json');

/**
 * Obtiene la lista completa de usuarios desde el archivo JSON.
 */
function getUsers() {
    if (!file_exists(USERS_FILE)) {
        // Inicializar archivo vacío si no existe
        file_put_contents(USERS_FILE, json_encode([], JSON_PRETTY_PRINT));
        return [];
    }
    $content = file_get_contents(USERS_FILE);
    return json_decode($content, true) ?: [];
}

/**
 * Guarda la lista de usuarios en el archivo JSON.
 */
function saveUsers($users) {
    file_put_contents(USERS_FILE, json_encode($users, JSON_PRETTY_PRINT));
}

/**
 * Busca un usuario por su correo electrónico.
 */
function findUserByEmail($email) {
    $users = getUsers();
    foreach ($users as $user) {
        if (isset($user['email']) && strtolower(trim($user['email'])) === strtolower(trim($email))) {
            return $user;
        }
    }
    return null;
}

/**
 * Crea y almacena un nuevo usuario.
 */
function createUser($name, $email, $role, $password) {
    $users = getUsers();
    
    // Validar si el usuario ya existe
    if (findUserByEmail($email) !== null) {
        return false;
    }
    
    $newUser = [
        'id' => uniqid('usr_', true),
        'name' => trim($name),
        'email' => trim($email),
        'role' => $role,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'created_at' => date('Y-m-d H:i:s')
    ];
    
    $users[] = $newUser;
    saveUsers($users);
    return $newUser;
}
