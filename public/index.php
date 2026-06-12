<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AgroStock PRO es un sistema inteligente de gestión de inventarios y ventas para insumos agrícolas, diseñado para optimizar el control de semillas, fertilizantes y herramientas.">
    <title>AgroStock PRO - Sistema de Inventario y Ventas de Insumos Agrícolas</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom CSS Styles with cache-busting -->
    <link href="css/style.css?v=2.7" rel="stylesheet">
</head>
<body class="landing-body">

    <!-- 1. BARRA DE NAVEGACIÓN CAPSULAR FLOTANTE (Inspirado en CopiwayPRO) -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-capsule">
        <div class="container-fluid px-2">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <i class="bi bi-leaf-fill brand-icon me-2" style="color: var(--primary-neon);"></i>
                <span class="text-white">Agro<span style="color: var(--primary-neon);">Stock</span> <span class="badge-pro">PRO</span></span>
            </a>
            
            <button class="navbar-toggler border-0 shadow-none text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link-custom active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-custom" href="#caracteristicas">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-custom" href="#nosotros">Nosotros</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3">
                    <a href="../views/auth/login.php" class="btn btn-primary-custom rounded-pill px-4 py-2 d-flex align-items-center gap-2">
                        <span>Ingresar</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- 2. CONTENIDO PRINCIPAL (LANDING PAGE DE ALTO PRESTIGIO) -->
    <main class="container-fluid px-0">

        <!-- SECCIÓN HERO (Banner Principal) -->
        <section class="hero-section-landing text-center text-white">
            <div class="container">
                <span class="badge mb-3 px-3 py-2 fs-7 rounded-pill text-uppercase font-monospace" style="background: rgba(16, 185, 129, 0.1); color: var(--primary-neon); border: 1px solid rgba(16, 185, 129, 0.25);">
                    ● LA PLATAFORMA AGRÍCOLA DEL FUTURO
                </span>
                
                <h1 class="display-3 fw-bold text-white mb-3 hero-title-landing">
                    Gestión Agrícola <br>
                    <span class="brand-neon-gradient">Simplificada e Inteligente</span>
                </h1>
                
                <p class="fs-5 text-slate-300 mb-5 mx-auto hero-desc-landing">
                    Optimice tus operaciones de inventario, reduzca pérdidas de stock y aumente la rentabilidad de tu cooperativa con herramientas diseñadas por expertos del sector.
                </p>
                
                <div class="d-flex justify-content-center gap-3 mb-5">
                    <a href="../views/auth/register.php" class="btn btn-primary-custom px-4 py-3 rounded-pill shadow-lg d-flex align-items-center gap-2">
                        <span>Comenzar Ahora</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="#caracteristicas" class="btn btn-secondary-custom px-4 py-3 rounded-pill border-white-20 bg-white-5 d-flex align-items-center gap-2 text-white">
                        <span>Ver Demo</span>
                    </a>
                </div>

                <!-- Mockup de Navegador con Badges Flotantes -->
                <div class="mockup-browser-landing mt-5">
                    <div class="mockup-header-landing">
                        <div class="mockup-dots-landing">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <div class="mockup-address-landing">app.agrostockpro.com</div>
                    </div>
                    <div class="mockup-body-landing">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=1200&h=600" alt="AgroStock PRO Dashboard Preview">
                        
                        <!-- Badge Flotante 1: Insumos -->
                        <div class="floating-badge-landing badge-1 d-flex align-items-center gap-3">
                            <div class="icon-circle" style="background-color: rgba(255, 107, 0, 0.15); color: var(--primary-neon);">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <div class="text-start">
                                <div class="badge-lbl">Insumos Activos</div>
                                <div class="badge-val">248</div>
                            </div>
                        </div>

                        <!-- Badge Flotante 2: Ventas -->
                        <div class="floating-badge-landing badge-2 d-flex align-items-center gap-3">
                            <div class="icon-circle" style="background-color: rgba(14, 165, 233, 0.15); color: var(--info-color);">
                                <i class="bi bi-receipt-cutoff"></i>
                            </div>
                            <div class="text-start">
                                <div class="badge-lbl">Ventas Diarias</div>
                                <div class="badge-val">$1,820.50</div>
                            </div>
                        </div>

                        <!-- Badge Flotante 3: Alertas -->
                        <div class="floating-badge-landing badge-3 d-flex align-items-center gap-3">
                            <div class="icon-circle" style="background-color: rgba(244, 63, 94, 0.15); color: var(--danger-color);">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                            </div>
                            <div class="text-start">
                                <div class="badge-lbl">Alertas Críticas</div>
                                <div class="badge-val">3 Activas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN CARACTERÍSTICAS (Grid de 3 Columnas) -->
        <section id="caracteristicas" class="features-section-landing py-5">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold text-white mb-3">Todo lo que necesitas para operar al más alto nivel.</h2>
                    <p class="text-muted fs-6">Unifica almacén, punto de venta y reportes en un solo ecosistema.</p>
                </div>
                
                <div class="row g-4 justify-content-center mt-3">
                    <!-- Card 1: Sincronización Inmediata -->
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-landing p-4 h-100 text-start">
                            <div class="feature-icon-circle-landing">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                            <h4 class="fw-bold text-white mt-4 mb-2">Sincronización Inmediata</h4>
                            <p class="text-muted fs-8 mb-0">Establece un enlace instantáneo entre el almacén y el punto de venta. Cero papel, cero retrasos y cero confusiones en tus entregas.</p>
                        </div>
                    </div>

                    <!-- Card 2: Métricas en Tiempo Real -->
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-landing p-4 h-100 text-start">
                            <div class="feature-icon-circle-landing">
                                <i class="bi bi-bar-chart-fill"></i>
                            </div>
                            <h4 class="fw-bold text-white mt-4 mb-2">Métricas en Tiempo Real</h4>
                            <p class="text-muted fs-8 mb-0">Visualice los reportes de ventas, insumos de mayor rotación y alertas de reorden directamente en un panel interactivo.</p>
                        </div>
                    </div>

                    <!-- Card 3: Auditoría Total (Estilo Destacado con Fondo Naranja) -->
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-landing p-4 h-100 filled-card-landing text-start">
                            <div class="feature-icon-circle-landing">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h4 class="fw-bold text-white mt-4 mb-2">Auditoría Total</h4>
                            <p class="text-white opacity-75 fs-8 mb-0">Control estricto de caja diaria, niveles de acceso modular seguros para personal y trazabilidad completa de cada movimiento de stock.</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="#nosotros" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-2" style="color: var(--primary-neon);">
                        <span>Explorar características</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- SECCIÓN SPLIT "Diseñado para el campo" (Nuestro ADN) -->
        <section id="nosotros" class="split-section-landing py-5 text-white">
            <div class="container py-5">
                <div class="row align-items-center g-5">
                    <!-- Lado Izquierdo: Imagen del Almacén con Badge de Cristal -->
                    <div class="col-lg-6">
                        <div class="split-img-wrapper-landing">
                            <img src="https://images.unsplash.com/photo-1595855759920-86582396756a?auto=format&fit=crop&q=80&w=800&h=600" alt="Bodega Agrícola" class="img-fluid rounded-4">
                            <div class="split-overlay-badge-landing text-start">
                                <div class="badge-num">+500</div>
                                <div class="badge-txt text-uppercase">Cooperativas <br>Gestionadas</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Lado Derecho: Contenido y Bullets -->
                    <div class="col-lg-6 text-start">
                        <span class="font-monospace text-uppercase mb-2 d-inline-block fw-bold fs-7" style="color: var(--primary-neon);">NUESTRO ADN</span>
                        <h2 class="display-4 fw-bold text-white mb-4">Diseñado en la <span style="color: var(--primary-neon);">trinchera.</span></h2>
                        <p class="text-slate-300 fs-6 mb-5">
                            No somos solo desarrolladores. Somos operadores agrícolas y consultores que construyeron la herramienta que siempre soñaron durante una jornada completa en un almacén de insumos.
                        </p>
                        
                        <!-- Bullet 1: Implementación -->
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="split-icon-circle-landing">
                                <i class="bi bi-lightning-fill" style="color: var(--primary-neon);"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-white mb-1">Implementación en 24h</h5>
                                <p class="text-slate-400 fs-7 mb-0">Estructura lista para usar localmente. Instalación sin interrupciones ni cables visibles en tu oficina central.</p>
                            </div>
                        </div>

                        <!-- Bullet 2: Soporte -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="split-icon-circle-landing">
                                <i class="bi bi-clock-fill" style="color: var(--primary-neon);"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-white mb-1">Soporte Operativo 24/7</h5>
                                <p class="text-slate-400 fs-7 mb-0">Mientras tu bodega esté trabajando o despachando insumos agrícolas a los productores locales, nosotros estamos alerta.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN LLAMADO A LA ACCIÓN (CTA) -->
        <section class="py-5">
            <div class="container">
                <div class="cta-banner-landing text-center text-md-start p-5 rounded-5 d-md-flex align-items-center justify-content-between">
                    <div class="mb-4 mb-md-0">
                        <h2 class="display-5 fw-bold text-white mb-2">Transforma el caos en <br>precisión milimétrica.</h2>
                        <p class="text-white opacity-75 fs-6 mb-0">Optimice el control de su tienda de insumos o cooperativa hoy mismo.</p>
                    </div>
                    <div>
                        <a href="../views/auth/register.php" class="btn btn-dark-custom rounded-pill px-5 py-3 fs-6 fw-bold">
                            Comenzar Gratis
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- 3. PIE DE PÁGINA CORPORATIVO -->
    <footer class="bg-dark text-white py-5">
        <div class="container text-center">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center border-bottom border-secondary pb-4 mb-4 gap-3">
                <a class="navbar-brand d-flex align-items-center text-white" href="index.php">
                    <i class="bi bi-leaf-fill brand-icon me-2" style="color: var(--primary-neon);"></i>
                    <span>Agro<span style="color: var(--primary-neon);">Stock</span> <span class="badge-pro">PRO</span></span>
                </a>
                <ul class="list-unstyled d-flex gap-4 mb-0 fs-7">
                    <li><a href="#" class="text-secondary text-decoration-none">Inicio</a></li>
                    <li><a href="#caracteristicas" class="text-secondary text-decoration-none">Características</a></li>
                    <li><a href="#nosotros" class="text-secondary text-decoration-none">Nosotros</a></li>
                    <li><a href="#" class="text-secondary text-decoration-none">Soporte</a></li>
                </ul>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center fs-8 text-secondary gap-3">
                <span>&copy; 2026 AgroStock PRO. Todos los derechos reservados. Desarrollado para Tiendas de Insumos y Cooperativas.</span>
                <div class="system-status-indicator text-secondary d-flex align-items-center gap-2">
                    <span class="system-status-dot bg-success" style="width: 8px; height: 8px; border-radius: 50%;"></span>
                    <span>Sistema local en línea | Versión 2.4.1</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
