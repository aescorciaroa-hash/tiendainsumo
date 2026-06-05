<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Iniciar sesión en AgroStock PRO - Sistema inteligente de control y ventas de insumos agrícolas.">
    <title>Iniciar Sesión - AgroStock PRO</title>
    
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
                        El futuro del control agrícola inteligente
                    </h1>
                    <p class="fs-6 text-white opacity-75 mb-4" style="font-family: 'Inter', sans-serif; font-weight: 300;">
                        Gestione de forma integral sus existencias de semillas, agroquímicos y herramientas. Automatice cotizaciones para productores locales y mantenga el control financiero de su negocio en tiempo real.
                    </p>
                </div>
                
                <!-- Tarjeta Flotante Glassmorphism -->
                <div class="auth-stat-glass">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper bg-success-subtle text-success me-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold text-white fs-7">Control de Caducidades & Stock</h6>
                            <small class="text-white opacity-50">Monitoreo activo local</small>
                        </div>
                    </div>
                    <p class="fs-8 text-white opacity-75 mb-0">
                        "La tecnología aplicada al campo incrementa la rentabilidad y previene pérdidas críticas de insumos."
                    </p>
                    <div class="d-flex gap-3 mt-3 border-top border-white-10 pt-3 text-center">
                        <div class="flex-fill">
                            <div class="fw-bold text-success fs-7">98%</div>
                            <div class="text-white opacity-50" style="font-size: 0.65rem;">Precisión de Stock</div>
                        </div>
                        <div class="flex-fill border-start border-white-10">
                            <div class="fw-bold text-success fs-7">POS</div>
                            <div class="text-white opacity-50" style="font-size: 0.65rem;">Facturación Veloz</div>
                        </div>
                        <div class="flex-fill border-start border-white-10">
                            <div class="fw-bold text-success fs-7">24/7</div>
                            <div class="text-white opacity-50" style="font-size: 0.65rem;">Acceso Local</div>
                        </div>
                    </div>
                </div>

                <div class="auth-banner-footer">
                    <span>Desarrollado para Tiendas de Insumos y Cooperativas &copy; 2026.</span>
                </div>
            </div>
        </div>

        <!-- Lado Derecho: Formulario (Desktop & Mobile) -->
        <div class="auth-form-side">
            <div class="auth-form-wrapper">
                
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
                    <h2 class="fw-bold text-dark mb-1" style="font-family: 'Outfit', sans-serif;">¡Hola de nuevo!</h2>
                    <p class="text-muted fs-7">Ingresa tus credenciales para acceder al sistema.</p>
                </div>

                <!-- Formulario -->
                <form action="../../public/index.php" method="POST" id="loginForm">
                    
                    <!-- Campo Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fs-8 fw-semibold text-dark">Correo Electrónico o Usuario</label>
                        <div class="form-icon-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required autocomplete="username">
                            <i class="bi bi-envelope-at input-icon"></i>
                        </div>
                    </div>

                    <!-- Campo Contraseña -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="password" class="form-label fs-8 fw-semibold text-dark mb-0">Contraseña</label>
                            <a href="#" class="text-decoration-none text-success fs-8 fw-medium">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="form-icon-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required autocomplete="current-password">
                            <i class="bi bi-shield-lock input-icon"></i>
                            <button class="password-toggle-btn" type="button" id="togglePasswordBtn" aria-label="Mostrar contraseña">
                                <i class="bi bi-eye-slash" id="toggleIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Recordarme -->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input form-check-input-custom me-2" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label fs-8 text-muted" for="remember">
                                Recordar sesión por 30 días
                            </label>
                        </div>
                    </div>

                    <!-- Botón de Ingreso -->
                    <button type="submit" class="btn btn-primary-custom w-100 py-2.5 d-flex align-items-center justify-content-center gap-2 mb-4">
                        <i class="bi bi-box-arrow-in-right fs-5"></i>
                        <span>Ingresar a la Plataforma</span>
                    </button>
                    
                    <!-- Enlace a Registro -->
                    <div class="text-center">
                        <p class="fs-8 text-muted mb-0">
                            ¿No tienes una cuenta aún? 
                            <a href="register.php" class="text-decoration-none text-success fw-bold ms-1">Crea una cuenta</a>
                        </p>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script de Interactividad del Login -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const togglePasswordBtn = document.getElementById('togglePasswordBtn');
            const toggleIcon = document.getElementById('toggleIcon');

            // Mostrar/Ocultar Contraseña
            togglePasswordBtn.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // Cambiar ícono
                if (type === 'text') {
                    toggleIcon.classList.remove('bi-eye-slash');
                    toggleIcon.classList.add('bi-eye');
                    togglePasswordBtn.setAttribute('aria-label', 'Ocultar contraseña');
                } else {
                    toggleIcon.classList.remove('bi-eye');
                    toggleIcon.classList.add('bi-eye-slash');
                    togglePasswordBtn.setAttribute('aria-label', 'Mostrar contraseña');
                }
            });

            // Animación de envío de formulario (Simulación)
            const loginForm = document.getElementById('loginForm');
            loginForm.addEventListener('submit', function(e) {
                const btn = loginForm.querySelector('button[type="submit"]');
                const btnText = btn.querySelector('span');
                const btnIcon = btn.querySelector('i');
                
                // Deshabilitar botón y mostrar estado de carga
                btn.disabled = true;
                btnText.textContent = 'Autenticando...';
                btnIcon.className = 'spinner-border spinner-border-sm';
            });
        });
    </script>
</body>
</html>
