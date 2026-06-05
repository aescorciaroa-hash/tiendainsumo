// JavaScript Logic for AgroStock PRO Dashboard & Sales Simulator

document.addEventListener('DOMContentLoaded', function () {
    // ----------------------------------------------------
    // 1. CHART INITIALIZATIONS
    // ----------------------------------------------------
    
    // Line Chart - Sales Performance
    const salesCtx = document.getElementById('salesChart');
    if (salesCtx) {
        // Gradient background for line chart
        const ctx = salesCtx.getContext('2d');
        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(16, 185, 129, 0.25)');
        gradient.addColorStop(1, 'rgba(16, 185, 129, 0.0)');

        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [{
                    label: 'Ventas de Insumos ($)',
                    data: [8200, 9400, 11200, 10500, 14200, 12450],
                    borderColor: '#10b981',
                    borderWidth: 3,
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#10b981',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#090d16',
                        titleFont: { family: 'Outfit', size: 13, weight: 'bold' },
                        bodyFont: { family: 'Inter', size: 12 },
                        padding: 10,
                        cornerRadius: 8,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return ' Ventas: $' + context.raw.toLocaleString('es-CO');
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        grid: {
                            color: '#e2e8f0'
                        },
                        ticks: {
                            font: { family: 'Inter', size: 11 },
                            color: '#475569',
                            callback: function(value) {
                                return '$' + value;
                            }
                        },
                        border: { dash: [5, 5] }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: { family: 'Inter', size: 11 },
                            color: '#475569'
                        }
                    }
                }
            }
        });
    }

    // Doughnut Chart - Inventory Distribution
    const inventoryCtx = document.getElementById('inventoryChart');
    if (inventoryCtx) {
        new Chart(inventoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Fertilizantes', 'Semillas', 'Plaguicidas', 'Herramientas', 'Veterinaria'],
                datasets: [{
                    data: [35, 25, 20, 12, 8],
                    backgroundColor: [
                        '#10b981', // Cyber Mint
                        '#0ea5e9', // Sky Blue
                        '#f43f5e', // Rose Red
                        '#f59e0b', // Amber Orange
                        '#8b5cf6'  // Electric Violet
                    ],
                    borderWidth: 4,
                    borderColor: '#ffffff',
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12,
                            padding: 15,
                            font: { family: 'Inter', size: 11 },
                            color: '#475569'
                        }
                    },
                    tooltip: {
                        backgroundColor: '#090d16',
                        titleFont: { family: 'Outfit', size: 13, weight: 'bold' },
                        bodyFont: { family: 'Inter', size: 12 },
                        padding: 10,
                        cornerRadius: 8,
                        callbacks: {
                            label: function(context) {
                                return ' ' + context.label + ': ' + context.raw + '% del Stock';
                            }
                        }
                    }
                }
            }
        });
    }

    // ----------------------------------------------------
    // 2. POS SALES SIMULATOR LOGIC
    // ----------------------------------------------------
    
    // In-memory catalog of products
    const catalog = {
        '1': { name: 'Urea Granulada 50kg', category: 'Fertilizante', price: 45.00, stock: 8 },
        '2': { name: 'Semilla Maíz Híbrido 1kg', category: 'Semillas', price: 18.50, stock: 25 },
        '3': { name: 'Glifosato Concentrado 1L', category: 'Plaguicidas', price: 22.00, stock: 4 },
        '4': { name: 'Manguera Goteo 100m', category: 'Herramientas', price: 75.00, stock: 15 },
        '5': { name: 'Complejo B Vet 250ml', category: 'Veterinaria', price: 14.90, stock: 12 }
    };

    let selectedProductId = null;
    let cart = [];
    const taxRate = 0.19; // 19% IVA standard

    const productElements = document.querySelectorAll('.sales-product-item');
    const selectedProdText = document.getElementById('selected-product-text');
    const selectedProdPrice = document.getElementById('selected-product-price');
    const quantityInput = document.getElementById('sale-quantity');
    const addToCartBtn = document.getElementById('btn-add-to-cart');
    const cartTableBody = document.getElementById('cart-table-body');
    const cartEmptyMessage = document.getElementById('cart-empty-message');
    
    // Summary Fields
    const sumSubtotal = document.getElementById('sim-subtotal');
    const sumIVA = document.getElementById('sim-iva');
    const sumTotal = document.getElementById('sim-total');
    const generateReceiptBtn = document.getElementById('btn-generate-receipt');
    
    // Receipt Elements
    const receiptContainer = document.getElementById('receipt-container');
    const receiptBody = document.getElementById('receipt-body');
    const printReceiptBtn = document.getElementById('btn-print-receipt');

    // Product Selection handler
    productElements.forEach(item => {
        item.addEventListener('click', function() {
            productElements.forEach(p => p.classList.remove('active'));
            this.classList.add('active');
            
            selectedProductId = this.getAttribute('data-id');
            const product = catalog[selectedProductId];
            
            selectedProdText.value = product.name;
            selectedProdPrice.textContent = `$${product.price.toFixed(2)}`;
            quantityInput.value = 1;
            addToCartBtn.disabled = false;
        });
    });

    // Add to Cart handler
    addToCartBtn.addEventListener('click', function() {
        if (!selectedProductId) return;
        
        const qty = parseInt(quantityInput.value) || 0;
        if (qty <= 0) {
            alert('Por favor ingrese una cantidad válida.');
            return;
        }

        const product = catalog[selectedProductId];
        
        // Check local stock limits
        if (qty > product.stock) {
            alert(`Stock insuficiente. Stock disponible: ${product.stock} unidades.`);
            return;
        }

        // Check if item already in cart
        const existingCartItem = cart.find(item => item.id === selectedProductId);
        if (existingCartItem) {
            if (existingCartItem.quantity + qty > product.stock) {
                alert(`No se puede agregar esa cantidad. Stock disponible: ${product.stock}. Cantidad en carrito: ${existingCartItem.quantity}`);
                return;
            }
            existingCartItem.quantity += qty;
            existingCartItem.total = existingCartItem.quantity * product.price;
        } else {
            cart.push({
                id: selectedProductId,
                name: product.name,
                price: product.price,
                quantity: qty,
                total: qty * product.price
            });
        }

        updateCartUI();
        
        // Reset selections
        productElements.forEach(p => p.classList.remove('active'));
        selectedProductId = null;
        selectedProdText.value = '';
        selectedProdPrice.textContent = '$0.00';
        quantityInput.value = 1;
        addToCartBtn.disabled = true;
    });

    // Update Cart Table and Calculations
    function updateCartUI() {
        cartTableBody.innerHTML = '';
        
        if (cart.length === 0) {
            cartEmptyMessage.style.display = 'table-row';
            generateReceiptBtn.disabled = true;
            
            sumSubtotal.textContent = '$0.00';
            sumIVA.textContent = '$0.00';
            sumTotal.textContent = '$0.00';
            return;
        }

        cartEmptyMessage.style.display = 'none';
        generateReceiptBtn.disabled = false;

        let subtotal = 0;
        cart.forEach((item, index) => {
            subtotal += item.total;
            
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${item.name}</td>
                <td>$${item.price.toFixed(2)}</td>
                <td>${item.quantity}</td>
                <td>$${item.total.toFixed(2)}</td>
                <td class="text-end">
                    <button class="btn btn-sm btn-outline-danger p-1 border-0 btn-remove-item" data-index="${index}">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            `;
            cartTableBody.appendChild(tr);
        });

        // Event listener for removing items
        document.querySelectorAll('.btn-remove-item').forEach(btn => {
            btn.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                cart.splice(index, 1);
                updateCartUI();
            });
        });

        // Calculate totals
        const iva = subtotal * taxRate;
        const total = subtotal + iva;

        sumSubtotal.textContent = `$${subtotal.toFixed(2)}`;
        sumIVA.textContent = `$${iva.toFixed(2)}`;
        sumTotal.textContent = `$${total.toFixed(2)}`;
    }

    // Generate Invoice/Receipt Event
    generateReceiptBtn.addEventListener('click', function() {
        if (cart.length === 0) return;

        const date = new Date();
        const dateStr = date.toLocaleDateString() + ' ' + date.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
        const invoiceNum = 'FAC-' + Math.floor(100000 + Math.random() * 900000);

        let subtotal = 0;
        let itemsHTML = '';

        cart.forEach(item => {
            subtotal += item.total;
            itemsHTML += `
                <div class="receipt-item">
                    <span>${item.quantity}x ${item.name.substring(0, 18)}</span>
                    <span>$${item.total.toFixed(2)}</span>
                </div>
            `;
        });

        const iva = subtotal * taxRate;
        const total = subtotal + iva;

        const receiptHTML = `
            <div class="receipt-title">AGROSTOCK PRO</div>
            <div class="receipt-subtitle">NIT: 901.423.881-2 | COMPROBANTE DIGITAL<br>Calle 45 #12-80, Zona Agrícola<br>Tel: 320-456-7890</div>
            <div class="receipt-divider"></div>
            <div class="receipt-item"><span>Factura:</span><strong>${invoiceNum}</strong></div>
            <div class="receipt-item"><span>Fecha:</span><strong>${dateStr}</strong></div>
            <div class="receipt-item"><span>Operador:</span><strong>Administrador</strong></div>
            <div class="receipt-divider"></div>
            <div style="font-weight: 700; display: flex; justify-content: space-between; font-size: 0.82rem;" class="mb-2">
                <span>CONCEPTO</span>
                <span>TOTAL</span>
            </div>
            ${itemsHTML}
            <div class="receipt-divider"></div>
            <div class="receipt-item">
                <span>Subtotal:</span>
                <span>$${subtotal.toFixed(2)}</span>
            </div>
            <div class="receipt-item">
                <span>IVA (19%):</span>
                <span>$${iva.toFixed(2)}</span>
            </div>
            <div class="receipt-total">
                <span>TOTAL A PAGAR:</span>
                <span>$${total.toFixed(2)}</span>
            </div>
            <div class="receipt-divider"></div>
            <div class="receipt-barcode">||| |||| | |||| ||</div>
            <div class="receipt-footer-text">
                Transacción segura en nube.<br>
                Conserve este comprobante digital.<br>
                AgroStock SaaS Platform
            </div>
        `;

        receiptBody.innerHTML = receiptHTML;
        receiptContainer.classList.remove('d-none');
        
        // Scroll receipt into view smoothly
        receiptContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    });

    // Simulated Print Action
    printReceiptBtn.addEventListener('click', function() {
        alert('Enviando ticket a impresora térmica simulada...');
        // Optionally we could reset cart after sale completion
        cart = [];
        updateCartUI();
        receiptContainer.classList.add('d-none');
    });

    // ----------------------------------------------------
    // 3. WIDGET INTERACTIONS & FILTER ALERTS
    // ----------------------------------------------------
    const alertSearchInput = document.getElementById('alertSearch');
    const alertRows = document.querySelectorAll('.alert-item-row');

    if (alertSearchInput) {
        alertSearchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            alertRows.forEach(row => {
                const productName = row.querySelector('.product-name').textContent.toLowerCase();
                const category = row.querySelector('.product-cat').textContent.toLowerCase();
                
                if (productName.includes(query) || category.includes(query)) {
                    row.style.setProperty('display', 'table-row', 'important');
                } else {
                    row.style.setProperty('display', 'none', 'important');
                }
            });
        });
    }
});
