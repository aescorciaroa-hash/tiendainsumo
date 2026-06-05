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
    <!-- Custom CSS Styles -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <!-- 1. BARRA DE NAVEGACIÓN PRINCIPAL -->
    <nav class="navbar navbar-expand-lg navbar-light glass-panel sticky-top shadow-sm border-bottom border-light">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <i class="bi bi-leaf-fill brand-green brand-icon me-2"></i>
                <span>Agro<span class="brand-green">Stock</span> <span class="badge-pro">PRO</span></span>
            </a>
            
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Buscador rápido en el Header -->
                <form class="d-none d-lg-flex ms-auto me-4 search-wrapper" style="width: 350px;">
                    <input class="form-control search-input" type="search" placeholder="Buscar insumos, lotes, proveedores..." aria-label="Search">
                    <i class="bi bi-search search-icon position-absolute top-50 translate-middle-y"></i>
                </form>
                
                <ul class="navbar-nav mb-2 mb-lg-0 me-3 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link-custom active d-flex align-items-center" href="index.php">
                            <i class="bi bi-grid-1x2-fill me-2"></i>Inicio
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-custom dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-box-seam-fill me-2"></i>Inventario
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg dropdown-menu-end mt-2" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item py-2" href="#"><i class="bi bi-list-nested me-2"></i>Lista de Insumos</a></li>
                            <li><a class="dropdown-item py-2" href="#"><i class="bi bi-patch-plus me-2"></i>Agregar Producto</a></li>
                            <li><a class="dropdown-item py-2" href="#"><i class="bi bi-tags me-2"></i>Categorías</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-custom dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-cart-fill me-2"></i>Ventas
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg dropdown-menu-end mt-2" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item py-2" href="#"><i class="bi bi-receipt-cutoff me-2"></i>Punto de Venta (POS)</a></li>
                            <li><a class="dropdown-item py-2" href="#"><i class="bi bi-journal-text me-2"></i>Registro de Facturas</a></li>
                            <li><a class="dropdown-item py-2" href="#"><i class="bi bi-arrow-counterclockwise me-2"></i>Devoluciones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-custom d-flex align-items-center" href="#">
                            <i class="bi bi-people-fill me-2"></i>Productores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-custom d-flex align-items-center" href="#">
                            <i class="bi bi-graph-up-arrow me-2"></i>Reportes
                        </a>
                    </li>
                </ul>

                <!-- Divisor en móvil -->
                <hr class="d-lg-none text-muted">

                <!-- Usuario del sistema -->
                <div class="dropdown">
                    <a href="#" class="profile-dropdown-btn d-flex align-items-center text-decoration-none" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=120&h=120" alt="Profile" class="profile-avatar me-2">
                        <div class="d-none d-sm-block text-start me-2">
                            <div class="profile-name">Ing. Carlos Ruiz</div>
                            <span class="profile-role">Admin General</span>
                        </div>
                        <i class="bi bi-chevron-down text-muted fs-8 ms-1"></i>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg dropdown-menu-end mt-2" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item py-2" href="#"><i class="bi bi-person me-2"></i>Mi Perfil</a></li>
                        <li><a class="dropdown-item py-2" href="#"><i class="bi bi-gear me-2"></i>Configuración</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item py-2 text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- 2. CONTENIDO PRINCIPAL -->
    <main class="container-fluid px-4 py-4">
        
        <!-- SECCIÓN DE BIENVENIDA / HERO BANNER -->
        <section class="row mb-4">
            <div class="col-12">
                <div class="hero-section p-4 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-4 mb-lg-0 text-start">
                            <span class="badge bg-success-subtle text-success border border-success-subtle mb-3 px-3 py-2 fs-7 rounded-pill"><i class="bi bi-sprout-fill me-1"></i> Control Tecnológico del Agro</span>
                            <h1 class="hero-title text-white mb-3">Control Inteligente de Stock y Ventas de Insumos</h1>
                            <p class="fs-6 text-slate-300 mb-4 opacity-85">
                                Gestione semillas, fertilizantes, herramientas y agroquímicos con precisión milimétrica. AgroStock PRO integra bases de datos de productores locales, control de rotación de insumos y reportes contables listos para la toma de decisiones.
                            </p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="#simulador-caja" class="btn btn-primary-custom d-flex align-items-center">
                                    <i class="bi bi-wallet2 me-2"></i>Simulador de Ventas
                                </a>
                                <a href="#" class="btn btn-secondary-custom text-white border-white-50 hover-bg-light-10 d-flex align-items-center">
                                    <i class="bi bi-book me-2"></i>Ver Documentación
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="hero-image-container">
                                <img src="img/hero.png" alt="Concepto de Software Agrícola" class="hero-image" onerror="this.src='https://images.unsplash.com/photo-1589923188900-85dae523342b?auto=format&fit=crop&q=80&w=600'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN DE TARJETAS METRICAS (KPIs) -->
        <section class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="metric-card border-primary-green p-4 h-100 d-flex align-items-center">
                    <div class="icon-wrapper bg-success-subtle text-success me-3">
                        <i class="bi bi-box-seam-fill"></i>
                    </div>
                    <div>
                        <span class="text-muted fs-7 d-block mb-1">Insumos Registrados</span>
                        <h3 class="fw-bold mb-0">248</h3>
                        <span class="text-success fs-8"><i class="bi bi-arrow-up-short"></i> +12 nuevos este mes</span>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-xl-3">
                <div class="metric-card border-info-blue p-4 h-100 d-flex align-items-center">
                    <div class="icon-wrapper bg-info-subtle text-info me-3">
                        <i class="bi bi-receipt-cutoff"></i>
                    </div>
                    <div>
                        <span class="text-muted fs-7 d-block mb-1">Ventas del Día</span>
                        <h3 class="fw-bold mb-0">$1,820.50</h3>
                        <span class="text-info fs-8"><i class="bi bi-cart-check"></i> 42 transacciones</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="metric-card border-danger-red p-4 h-100 d-flex align-items-center">
                    <div class="icon-wrapper bg-danger-subtle text-danger me-3">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                    </div>
                    <div>
                        <span class="text-muted fs-7 d-block mb-1">Alertas de Stock</span>
                        <h3 class="fw-bold mb-0 text-danger d-flex align-items-center">
                            3 Críticas <span class="pulse-indicator pulse-danger ms-2"></span>
                        </h3>
                        <span class="text-danger fs-8"><i class="bi bi-arrow-down-short"></i> Requieren reorden inmediato</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="metric-card border-warning-gold p-4 h-100 d-flex align-items-center">
                    <div class="icon-wrapper bg-warning-subtle text-warning me-3">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div>
                        <span class="text-muted fs-7 d-block mb-1">Agricultores (Clientes)</span>
                        <h3 class="fw-bold mb-0">1,152</h3>
                        <span class="text-warning fs-8"><i class="bi bi-award"></i> 98% con crédito activo</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN DE CUADRO DE MANDO E INTERACTIVIDAD (GRAFICOS Y ALERTAS) -->
        <section class="row g-4 mb-4">
            <!-- Gráfico de Ventas Mensuales -->
            <div class="col-xl-8">
                <div class="card border-0 rounded-4 shadow-sm p-4 h-100 bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h5 class="fw-bold mb-0 text-dark">Rendimiento de Ventas de Insumos</h5>
                            <span class="text-muted fs-7">Evolución de facturación del primer semestre (miles $)</span>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="chartPeriodDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Semestre Activo
                            </button>
                            <ul class="dropdown-menu border-0 shadow-lg dropdown-menu-end" aria-labelledby="chartPeriodDropdown">
                                <li><a class="dropdown-item fs-7 py-2" href="#">Último Año</a></li>
                                <li><a class="dropdown-item fs-7 py-2" href="#">Trimestre</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div style="position: relative; height: 320px;">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Gráfico Doughnut e Inventario por Categoría -->
            <div class="col-xl-4">
                <div class="card border-0 rounded-4 shadow-sm p-4 h-100 bg-white">
                    <h5 class="fw-bold mb-2 text-dark">Categorías en Inventario</h5>
                    <p class="text-muted fs-7 mb-4">Distribución porcentual de lotes de insumos almacenados</p>
                    
                    <div style="position: relative; height: 220px;" class="mb-3">
                        <canvas id="inventoryChart"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN: SIMULADOR DE PUNTO DE VENTA Y ALERTAS DE INVENTARIO -->
        <section class="row g-4 mb-4">
            
            <!-- Simulador POS Interactiva -->
            <div class="col-xl-8" id="simulador-caja">
                <div class="card border-0 rounded-4 shadow-sm p-4 bg-white h-100">
                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-wrapper bg-success-subtle text-success me-2" style="width: 36px; height: 36px; border-radius: 8px;">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0 text-dark">Simulador de Caja / POS</h5>
                                <span class="text-muted fs-7">Realice una cotización o venta simulada en tiempo real</span>
                            </div>
                        </div>
                        <span class="badge bg-success-subtle text-success border border-success rounded-pill px-3 py-1 fs-8">Listo para Operar</span>
                    </div>

                    <div class="row g-3">
                        <!-- Selector de Insumos -->
                        <div class="col-md-6">
                            <h6 class="fw-bold fs-7 mb-2 text-muted">1. Seleccione un Insumo Agrícola:</h6>
                            <div class="d-flex flex-column gap-2" style="max-height: 250px; overflow-y: auto; padding-right: 5px;">
                                
                                <div class="sales-product-item d-flex align-items-center justify-content-between shadow-xs" data-id="1">
                                    <div>
                                        <h6 class="mb-0 fw-semibold fs-7">Urea Granulada 50kg</h6>
                                        <small class="text-muted fs-8">Fertilizantes | Stock: 8 sacos</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold text-success fs-7">$45.00</div>
                                        <span class="badge bg-warning-subtle text-warning fs-9">Stock Bajo</span>
                                    </div>
                                </div>

                                <div class="sales-product-item d-flex align-items-center justify-content-between shadow-xs" data-id="2">
                                    <div>
                                        <h6 class="mb-0 fw-semibold fs-7">Semilla Maíz Híbrido 1kg</h6>
                                        <small class="text-muted fs-8">Semillas | Stock: 25 bolsas</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold text-success fs-7">$18.50</div>
                                        <span class="badge bg-success-subtle text-success fs-9">Abundante</span>
                                    </div>
                                </div>

                                <div class="sales-product-item d-flex align-items-center justify-content-between shadow-xs" data-id="3">
                                    <div>
                                        <h6 class="mb-0 fw-semibold fs-7">Glifosato Concentrado 1L</h6>
                                        <small class="text-muted fs-8">Plaguicidas | Stock: 4 envases</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold text-success fs-7">$22.00</div>
                                        <span class="badge bg-danger-subtle text-danger fs-9">Crítico</span>
                                    </div>
                                </div>

                                <div class="sales-product-item d-flex align-items-center justify-content-between shadow-xs" data-id="4">
                                    <div>
                                        <h6 class="mb-0 fw-semibold fs-7">Manguera Goteo 100m</h6>
                                        <small class="text-muted fs-8">Herramientas | Stock: 15 rollos</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold text-success fs-7">$75.00</div>
                                        <span class="badge bg-success-subtle text-success fs-9">Estable</span>
                                    </div>
                                </div>

                                <div class="sales-product-item d-flex align-items-center justify-content-between shadow-xs" data-id="5">
                                    <div>
                                        <h6 class="mb-0 fw-semibold fs-7">Complejo B Vet 250ml</h6>
                                        <small class="text-muted fs-8">Veterinaria | Stock: 12 frascos</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold text-success fs-7">$14.90</div>
                                        <span class="badge bg-success-subtle text-success fs-9">Estable</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Panel de Cantidad e Incorporación al Carrito -->
                        <div class="col-md-6 border-start ps-md-4">
                            <h6 class="fw-bold fs-7 mb-3 text-muted">2. Detalle de Adición:</h6>
                            <div class="mb-3">
                                <label for="selected-product-text" class="form-label fs-8 fw-semibold text-dark">Producto Elegido</label>
                                <input type="text" class="form-control bg-light border-0" id="selected-product-text" placeholder="Seleccione un insumo..." readonly>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <label class="form-label fs-8 fw-semibold text-dark">Precio Unitario</label>
                                    <div class="form-control-plaintext fw-bold text-success fs-6" id="selected-product-price">$0.00</div>
                                </div>
                                <div class="col-6">
                                    <label for="sale-quantity" class="form-label fs-8 fw-semibold text-dark">Cantidad</label>
                                    <input type="number" class="form-control" id="sale-quantity" min="1" value="1">
                                </div>
                            </div>
                            
                            <button id="btn-add-to-cart" class="btn btn-primary-custom w-100 d-flex align-items-center justify-content-center py-2" disabled>
                                <i class="bi bi-cart-plus-fill me-2"></i>Agregar Insumo
                            </button>
                        </div>
                    </div>

                    <!-- Carrito de Compras Temporal -->
                    <div class="mt-4 pt-3 border-top">
                        <h6 class="fw-bold fs-7 text-muted mb-2">3. Carrito de Ventas Simuladas:</h6>
                        <div class="table-responsive">
                            <table class="table table-hover custom-table align-middle">
                                <thead class="table-light fs-8">
                                    <tr>
                                        <th>Insumo</th>
                                        <th>P. Unitario</th>
                                        <th>Cant.</th>
                                        <th>Total</th>
                                        <th class="text-end">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-7" id="cart-table-body">
                                    <tr id="cart-empty-message">
                                        <td colspan="5" class="text-center text-muted py-3">No hay productos agregados en esta venta simulada.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Resultados Financieros -->
                        <div class="row justify-content-end text-end mt-2">
                            <div class="col-md-5">
                                <div class="d-flex justify-content-between fs-8 text-muted mb-1">
                                    <span>Subtotal:</span>
                                    <span id="sim-subtotal">$0.00</span>
                                </div>
                                <div class="d-flex justify-content-between fs-8 text-muted mb-1">
                                    <span>Impuestos (19% IVA):</span>
                                    <span id="sim-iva">$0.00</span>
                                </div>
                                <div class="d-flex justify-content-between fw-bold text-dark fs-6 mt-1 border-top pt-2">
                                    <span>TOTAL:</span>
                                    <span id="sim-total" class="text-success">$0.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Botones de Acción de Venta -->
                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <button class="btn btn-success d-flex align-items-center justify-content-center px-4 py-2" id="btn-generate-receipt" disabled>
                                <i class="bi bi-file-earmark-bar-graph-fill me-2"></i>Simular Facturación
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Previsualizador de Recibo Térmico (FAC-SIMULADA) -->
            <div class="col-xl-4">
                <div class="receipt-wrapper h-100 d-flex flex-column">
                    <h5 class="fw-bold text-dark mb-3">Impresión de Ticket</h5>
                    <p class="text-muted fs-7 mb-4">Previsualice cómo se generará la factura física térmica para el productor.</p>
                    
                    <div id="receipt-container" class="my-auto d-none">
                        <div class="receipt-paper" id="receipt-body">
                            <!-- JS will inject the ticket structure here -->
                        </div>
                        <button class="btn btn-outline-custom w-100 mt-4 d-flex align-items-center justify-content-center" id="btn-print-receipt">
                            <i class="bi bi-printer me-2"></i>Simular Impresión
                        </button>
                    </div>

                    <div id="receipt-placeholder" class="text-center py-5 my-auto border border-2 border-dashed rounded-3 text-muted">
                        <i class="bi bi-receipt fs-1 d-block mb-2 text-slate-300"></i>
                        <span class="fs-8">Genere una venta en el simulador para visualizar el ticket de venta térmica.</span>
                    </div>
                </div>
            </div>

        </section>

        <!-- SECCIÓN DE DETALLE DE ALERTAS DE INVENTARIO -->
        <section class="row mb-4">
            <div class="col-12">
                <div class="card border-0 rounded-4 shadow-sm p-4 bg-white">
                    <div class="d-md-flex justify-content-between align-items-center mb-3">
                        <div class="mb-2 mb-md-0">
                            <h5 class="fw-bold mb-0 text-dark">Monitoreo de Alertas del Almacén</h5>
                            <span class="text-muted fs-7">Control de caducidades, bajas de stock y almacenamiento</span>
                        </div>
                        <!-- Filtro interactivo de alertas -->
                        <div class="position-relative" style="width: 250px;">
                            <input class="form-control form-control-sm ps-4 bg-light border-0 rounded-pill" type="text" id="alertSearch" placeholder="Filtrar por insumo...">
                            <i class="bi bi-funnel text-muted position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);"></i>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover custom-table align-middle">
                            <thead>
                                <tr>
                                    <th>Insumo</th>
                                    <th>Categoría</th>
                                    <th>Ubicación</th>
                                    <th>Stock Actual</th>
                                    <th>Límite Reorden</th>
                                    <th>Estado / Alerta</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="alert-item-row">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="pulse-indicator pulse-danger me-2"></span>
                                            <span class="fw-bold text-dark product-name">Glifosato Concentrado 1L</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light text-dark border product-cat">Plaguicidas</span></td>
                                    <td>Estantería B-3</td>
                                    <td class="text-danger fw-bold">4 envases</td>
                                    <td>10 envases</td>
                                    <td><span class="badge bg-danger-subtle text-danger border border-danger badge-pill-custom">Crítico</span></td>
                                    <td><button class="btn btn-sm btn-primary-custom py-1 px-2 fs-8"><i class="bi bi-cart-plus me-1"></i>Reordenar</button></td>
                                </tr>
                                <tr class="alert-item-row">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="pulse-indicator pulse-warning me-2"></span>
                                            <span class="fw-bold text-dark product-name">Urea Granulada 50kg</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light text-dark border product-cat">Fertilizantes</span></td>
                                    <td>Bodega Principal Lote 2</td>
                                    <td class="text-warning fw-bold">8 sacos</td>
                                    <td>15 sacos</td>
                                    <td><span class="badge bg-warning-subtle text-warning border border-warning badge-pill-custom">Stock Bajo</span></td>
                                    <td><button class="btn btn-sm btn-primary-custom py-1 px-2 fs-8"><i class="bi bi-cart-plus me-1"></i>Reordenar</button></td>
                                </tr>
                                <tr class="alert-item-row">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="pulse-indicator pulse-warning me-2"></span>
                                            <span class="fw-bold text-dark product-name">Insecticida Cipermetrina</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light text-dark border product-cat">Plaguicidas</span></td>
                                    <td>Góndola C-1</td>
                                    <td>14 unidades</td>
                                    <td>10 unidades</td>
                                    <td><span class="badge bg-warning-subtle text-warning border border-warning badge-pill-custom">Vence en 7 días</span></td>
                                    <td><button class="btn btn-sm btn-outline-warning py-1 px-2 fs-8"><i class="bi bi-percent me-1"></i>Aplicar Descto</button></td>
                                </tr>
                                <tr class="alert-item-row">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="pulse-indicator pulse-green me-2"></span>
                                            <span class="fw-bold text-dark product-name">Semilla Maíz Híbrido 1kg</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light text-dark border product-cat">Semillas</span></td>
                                    <td>Nevera Lotes Secos</td>
                                    <td class="text-success">25 bolsas</td>
                                    <td>10 bolsas</td>
                                    <td><span class="badge bg-success-subtle text-success border border-success badge-pill-custom">Óptimo</span></td>
                                    <td><button class="btn btn-sm btn-outline-secondary py-1 px-2 fs-8" disabled><i class="bi bi-check2-circle me-1"></i>Al Día</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN: ACCESO A LOS MÓDULOS DEL SISTEMA -->
        <section class="mb-4">
            <h5 class="fw-bold mb-3 text-dark">Gestión Completa de Módulos</h5>
            <div class="row g-4">
                
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="module-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="module-icon me-3">
                                <i class="bi bi-archive-fill"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Módulo de Inventario</h5>
                        </div>
                        <p class="text-muted fs-7 mb-0">Gestione existencias de semillas, fertilizantes, herramientas y controle lotes e ingresos en bodega de proveedores.</p>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="#" class="module-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="module-icon me-3">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Punto de Venta / Facturación</h5>
                        </div>
                        <p class="text-muted fs-7 mb-0">Registre transacciones de forma fluida, genere facturas electrónicas e imprima tickets térmicos para agricultores.</p>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="#" class="module-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="module-icon me-3">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Base de Productores</h5>
                        </div>
                        <p class="text-muted fs-7 mb-0">Organice fichas técnicas de agricultores locales, controle líneas de crédito agrícola y supervise deudas activas.</p>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="#" class="module-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="module-icon me-3">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Proveedores y Pedidos</h5>
                        </div>
                        <p class="text-muted fs-7 mb-0">Planifique órdenes de abastecimiento al por mayor, mantenga contacto con laboratorios y controle plazos de entrega.</p>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="#" class="module-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="module-icon me-3">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Estadísticas y Reportes</h5>
                        </div>
                        <p class="text-muted fs-7 mb-0">Grafique rentabilidad de insumos, exporte balances contables (PDF/Excel) y calcule márgenes brutos de ganancia.</p>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="#" class="module-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="module-icon me-3">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Ajustes y Seguridad</h5>
                        </div>
                        <p class="text-muted fs-7 mb-0">Configure permisos por rol (cajeros, bodegueros, directores), asocie impuestos e configure resoluciones de facturación.</p>
                    </a>
                </div>

            </div>
        </section>

    </main>

    <!-- 3. PIE DE PÁGINA CORPORATIVO -->
    <footer class="bg-white border-top border-light py-4 mt-5">
        <div class="container-fluid px-4">
            <div class="d-md-flex justify-content-between align-items-center text-center text-md-start">
                <div class="mb-3 mb-md-0">
                    <span class="fs-8 text-muted">&copy; 2026 AgroStock PRO. Todos los derechos reservados. Desarrollado para Tiendas de Insumos y Cooperativas.</span>
                </div>
                <div class="d-flex flex-wrap justify-content-center gap-3 align-items-center fs-8">
                    <div class="system-status-indicator">
                        <span class="system-status-dot"></span>
                        <span>Sistema local (Laragon) en línea</span>
                    </div>
                    <span class="text-muted">|</span>
                    <span class="text-muted">Versión 2.4.1</span>
                    <span class="text-muted">|</span>
                    <a href="#" class="text-decoration-none text-muted">Soporte Técnico</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom JS Logic -->
    <script src="js/main.js"></script>
</body>
</html>
