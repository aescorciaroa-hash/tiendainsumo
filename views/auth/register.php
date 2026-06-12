<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Regístrate en AgroStock PRO - Sistema inteligente de control y ventas de insumos agrícolas.">
    <title>Crear Cuenta - AgroStock PRO</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom CSS Styles -->
    <link href="../../public/css/style.css" rel="stylesheet">
</head>
<body class="auth-body">

    <div class="auth-container">
        <!-- Lado Izquierdo: Visual & Branding (Desktop) -->
        <div class="auth-side-banner">
            <div class="auth-banner-content">
                <div>
                    <!-- Logo -->
                    <a class="navbar-brand d-flex align-items-center text-white text-decoration-none mb-5" href="../../public/index.php">
                        <i class="bi bi-leaf-fill brand-green brand-icon me-2"></i>
                        <span class="fs-3 fw-bold">Agro<span class="brand-green">Stock</span> <span class="badge-pro">PRO</span></span>
                    </a>
                    
                    <h1 class="display-5 fw-bold text-white mb-4" style="line-height: 1.25; font-family: 'Outfit', sans-serif;">
                        Gestión agrícola en la palma de tu mano
                    </h1>
                    <p class="fs-6 text-white opacity-75 mb-4" style="font-family: 'Inter', sans-serif; font-weight: 300;">
                        Registre su cooperativa o tienda de insumos. Permita que su equipo trabaje de manera coordinada bajo roles de seguridad específicos para cajeros, directores de ventas y encargados de almacén.
                    </p>
                </div>
                
                <!-- Tarjeta Flotante Glassmorphism -->
                <div class="auth-stat-glass">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper bg-success-subtle text-success me-3">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold text-white fs-7">Roles y Permisos Centralizados</h6>
                            <small class="text-white opacity-50">Acceso modular seguro</small>
                        </div>
                    </div>
                    
                    <ul class="list-unstyled mb-0 fs-8 text-white opacity-80" style="line-height: 1.6;">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Administrador:</strong> Control global de inventario y finanzas.</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Cajero POS:</strong> Emisión de tickets y cotizaciones veloces.</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Bodeguero:</strong> Control de lotes, marcas y alertas críticas.</li>
                    </ul>
                </div>

                <div class="auth-banner-footer">
                    <span>Monitoreo inteligente local &copy; 2026.</span>
                </div>
            </div>
        </div>

        <!-- Lado Derecho: Formulario (Desktop & Mobile) -->
        <div class="auth-form-side">
            <div class="auth-form-wrapper" style="max-width: 480px;">
                
                <!-- Logo visible solo en Mobile -->
                <div class="d-lg-none text-center mb-4">
                    <div class="d-inline-flex align-items-center mb-2">
                        <i class="bi bi-leaf-fill brand-green fs-2 me-2"></i>
                        <span class="fs-3 fw-bold text-dark">Agro<span class="brand-green">Stock</span> <span class="badge-pro">PRO</span></span>
                    </div>
                    <p class="text-muted fs-8">Control Inteligente de Insumos</p>
                </div>
                
                <!-- Encabezado del Formulario -->
                <div class="mb-4 text-center text-lg-start">
                    <h2 class="fw-bold text-dark mb-1" style="font-family: 'Outfit', sans-serif;">Crear Cuenta</h2>
                    <p class="text-muted fs-7">Regístrate para comenzar a gestionar tu negocio.</p>
                </div>



                <!-- Formulario -->
                <form action="../../controllers/auth/registerController.php" method="POST" id="registerForm">
                    
                    <!-- Campo Nombre -->
                    <div class="mb-3">
                        <label for="name" class="form-label fs-8 fw-semibold text-dark">Nombre Completo</label>
                        <div class="form-icon-group">
                            <input type="text" class="form-control" id="name" name="usuario" placeholder="Ingresa tu nombre y apellido" required>
                            <i class="bi bi-person input-icon"></i>
                        </div>
                    </div>

                    <!-- Campo Correo -->
                    <div class="mb-3">
                        <label for="email" class="form-label fs-8 fw-semibold text-dark">Correo Electrónico</label>
                        <div class="form-icon-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required autocomplete="email">
                            <i class="bi bi-envelope-at input-icon"></i>
                        </div>
                    </div>



                    <!-- Campo Contraseña -->
                    <div class="mb-3">
                        <label for="password" class="form-label fs-8 fw-semibold text-dark mb-1">Contraseña</label>
                        <div class="form-icon-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mínimo 6 caracteres" required minlength="6" autocomplete="new-password">
                            <i class="bi bi-shield-lock input-icon"></i>
                            <button class="password-toggle-btn" type="button" id="togglePasswordBtn1" aria-label="Mostrar contraseña">
                                <i class="bi bi-eye-slash" id="toggleIcon1"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Campo Confirmar Contraseña -->
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label fs-8 fw-semibold text-dark mb-1">Confirmar Contraseña</label>
                        <div class="form-icon-group">
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Repite la contraseña" required autocomplete="new-password">
                            <i class="bi bi-shield-lock-fill input-icon"></i>
                            <button class="password-toggle-btn" type="button" id="togglePasswordBtn2" aria-label="Mostrar contraseña">
                                <i class="bi bi-eye-slash" id="toggleIcon2"></i>
                            </button>
                        </div>
                        <div id="matchMessage" class="fs-9 mt-1 d-none"></div>
                    </div>

                    <!-- Términos y Condiciones -->
                    <div class="mb-4">
                        <div class="form-check d-flex align-items-start">
                            <input class="form-check-input form-check-input-custom me-2 mt-1" type="checkbox" id="terms" name="terminos" required>
                            <label class="form-check-label fs-8 text-muted" for="terms">
                                Acepto los <a href="#" class="text-success text-decoration-none fw-medium">Términos de Servicio</a> y la <a href="#" class="text-success text-decoration-none fw-medium">Política de Privacidad</a> de AgroStock PRO.
                            </label>
                        </div>
                    </div>

                    <!-- Botón de Registro -->
                    <button type="submit" class="btn btn-primary-custom w-100 py-2.5 d-flex align-items-center justify-content-center gap-2 mb-4" id="submitBtn">
                        <i class="bi bi-person-plus-fill fs-5"></i>
                        <span>Registrarse en el Sistema</span>
                    </button>
                    
                    <!-- Enlace a Login -->
                    <div class="text-center">
                        <p class="fs-8 text-muted mb-0">
                            ¿Ya tienes una cuenta registrada? 
                            <a href="login.php" class="text-decoration-none text-success fw-bold ms-1">Inicia sesión aquí</a>
                        </p>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Client-Side Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const confirmInput = document.getElementById('confirm_password');
            const toggleBtn1 = document.getElementById('togglePasswordBtn1');
            const toggleIcon1 = document.getElementById('toggleIcon1');
            const toggleBtn2 = document.getElementById('togglePasswordBtn2');
            const toggleIcon2 = document.getElementById('toggleIcon2');
            const matchMessage = document.getElementById('matchMessage');
            const form = document.getElementById('registerForm');

            // Alternar visibilidad de contraseña 1
            if (toggleBtn1) {
                toggleBtn1.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    toggleIcon1.classList.toggle('bi-eye');
                    toggleIcon1.classList.toggle('bi-eye-slash');
                });
            }

            // Alternar visibilidad de contraseña 2
            if (toggleBtn2) {
                toggleBtn2.addEventListener('click', function() {
                    const type = confirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    confirmInput.setAttribute('type', type);
                    toggleIcon2.classList.toggle('bi-eye');
                    toggleIcon2.classList.toggle('bi-eye-slash');
                });
            }

            // Validar si las contraseñas coinciden en tiempo real
            function checkPasswords() {
                const psw = passwordInput.value;
                const confirmPsw = confirmInput.value;

                if (confirmPsw === '') {
                    matchMessage.classList.add('d-none');
                    return;
                }

                matchMessage.classList.remove('d-none');
                if (psw === confirmPsw) {
                    matchMessage.textContent = 'Las contraseñas coinciden.';
                    matchMessage.className = 'fs-9 mt-1 text-success';
                } else {
                    matchMessage.textContent = 'Las contraseñas no coinciden.';
                    matchMessage.className = 'fs-9 mt-1 text-danger';
                }
            }

            if (passwordInput && confirmInput) {
                passwordInput.addEventListener('input', checkPasswords);
                confirmInput.addEventListener('input', checkPasswords);
            }

            // Evitar envío del formulario si no coinciden
            if (form) {
                form.addEventListener('submit', function(e) {
                    if (passwordInput.value !== confirmInput.value) {
                        e.preventDefault();
                        Swal.fire({
                            icon: 'error',
                            title: 'Contraseñas no coinciden',
                            text: 'Asegúrate de que ambas contraseñas sean idénticas antes de registrarte.',
                            confirmButtonColor: '#10b981',
                            background: '#1e293b',
                            color: '#fff',
                            customClass: {
                                popup: 'rounded-4 border border-secondary'
                            }
                        });
                    }
                });
            }
        });
    </script>

    <!-- SweetAlert2 Server-Side PHP Alert Trigger -->
    <?php if (isset($_SESSION['swal'])): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: '<?php echo $_SESSION['swal']['icon']; ?>',
                    title: '<?php echo $_SESSION['swal']['title']; ?>',
                    text: '<?php echo $_SESSION['swal']['text']; ?>',
                    confirmButtonColor: '#10b981',
                    background: '#1e293b',
                    color: '#fff',
                    customClass: {
                        popup: 'rounded-4 border border-secondary'
                    }
                });
            });
        </script>
        <?php unset($_SESSION['swal']); ?>
    <?php endif; ?>

</body>
</html>
