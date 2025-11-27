<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>El Producto - Plataforma de Inventario</title>
    <style>
        /* Variables y Estilos Generales */
        :root {
            --color-principal: #007bff; /* Azul brillante */
            --color-secundario: #f8f9fa; /* Gris claro de fondo */
            --color-texto: #333;
            --color-blanco: #fff;
        }

        body { font-family: 'Arial', sans-serif; margin: 0; padding: 0; background-color: var(--color-secundario); color: var(--color-texto); }
        .contenedor-principal { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }

        /* Estilos de la Sección "El Producto" */
        .seccion-producto { padding: 60px 0; }
        .titulo-seccion {
            font-size: 2.8em;
            color: var(--color-principal);
            text-align: center;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .subtitulo-seccion {
            font-size: 1.4em;
            text-align: center;
            color: #555;
            margin-bottom: 50px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        
        
        /* Contenedor de Beneficios */
        .contenedor-beneficios {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            margin-bottom: 60px;
        }
        .beneficio-tarjeta {
            flex: 1;
            background-color: var(--color-blanco);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            border-top: 5px solid var(--color-principal);
        }
        .beneficio-tarjeta h3 {
            font-size: 1.5em;
            color: var(--color-principal);
            margin-bottom: 15px;
        }
        .beneficio-tarjeta p {
            color: #666;
            line-height: 1.6;
        }

        /* Sección de Características Clave (Visualmente Separada) */
        .seccion-caracteristicas {
            background-color: var(--color-principal);
            color: var(--color-blanco);
            padding: 60px 0;
            border-radius: 8px;
        }
        .seccion-caracteristicas .titulo-seccion {
            color: var(--color-blanco);
            margin-bottom: 40px;
        }
        .caracteristicas-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        .caracteristica-item {
            background-color: rgba(255, 255, 255, 0.1); /* Fondo blanco semitransparente */
            padding: 20px;
            border-radius: 6px;
            text-align: left;
        }
        .caracteristica-item strong {
            display: block;
            font-size: 1.2em;
            margin-bottom: 5px;
        }
        .caracteristica-item p {
            font-size: 0.95em;
            color: #ccc;
        }

        /* Botón de Llamada a la Acción */
        .contenedor-cta {
            text-align: center;
            margin-top: 50px;
        }
        .boton-cta {
            background-color: #ffc107; /* Amarillo para contraste */
            color: var(--color-texto);
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .boton-cta:hover {
            background-color: #e0a800;
        }

       
    </style>
</head>
<body>

    
    <div class="contenedor-principal">
        <section class="seccion-producto">
            <h2 class="titulo-seccion">Control Total de Inventario, Simplificado</h2>
            <p class="subtitulo-seccion">
                Nuestra plataforma está diseñada para transformar la gestión de tu inventario, pasando de ser un dolor de cabeza a una ventaja competitiva.
            </p>

            <div class="contenedor-beneficios">
                <div class="beneficio-tarjeta">
                    <h3>🚀 Aumenta la Eficiencia</h3>
                    <p>Automatiza el seguimiento de entradas y salidas. Reduce el tiempo dedicado a conteos manuales y dedícalo a hacer crecer tu negocio.</p>
                </div>
                <div class="beneficio-tarjeta">
                    <h3>❌ Evita el Desabasto</h3>
                    <p>Alertas de stock bajo en tiempo real. Mantente siempre aprovisionado con los productos más importantes y elimina las ventas perdidas.</p>
                </div>
                <div class="beneficio-tarjeta">
                    <h3>💰 Control de Costos</h3>
                    <p>Rastrea el costo promedio de tu inventario con precisión. Genera reportes detallados para optimizar precios y aumentar márgenes de ganancia.</p>
                </div>
            </div>

            <div class="seccion-caracteristicas">
                <h3 class="titulo-seccion">Funcionalidades Poderosas</h3>
                
                <div class="caracteristicas-grid contenedor-principal">
                    <div class="caracteristica-item">
                        <strong>Gestión Multi-Almacén</strong>
                        <p>Administra inventarios en múltiples ubicaciones desde un solo panel. Perfecto para negocios en crecimiento.</p>
                    </div>
                    <div class="caracteristica-item">
                        <strong>Escaneo Rápido (Códigos QR/Barras)</strong>
                        <p>Usa tu dispositivo móvil para escanear productos y actualizar el stock en segundos. Minimiza errores humanos.</p>
                    </div>
                    <div class="caracteristica-item">
                        <strong>Reportes Personalizados</strong>
                        <p>Accede a métricas clave como rotación de inventario, valor de existencias y rendimiento de productos más vendidos.</p>
                    </div>
                    <div class="caracteristica-item">
                        <strong>Control de Lotes y Fechas</strong>
                        <p>Ideal para productos perecederos. Gestiona lotes, fechas de caducidad y aplica la estrategia FIFO/LIFO fácilmente.</p>
                    </div>
                    <div class="caracteristica-item">
                        <strong>Integración con POS/eCommerce</strong>
                        <p>Conecta tu tienda en línea y puntos de venta para una sincronización de inventario automática y sin fricciones.</p>
                    </div>
                    <div class="caracteristica-item">
                        <strong>Roles y Permisos de Usuario</strong>
                        <p>Define quién puede ver o modificar el inventario. Asegura la trazabilidad y la seguridad de tus datos.</p>
                    </div>
                </div>

                <div class="contenedor-cta">
                    <a href="#" class="boton-cta">¡Empieza Gratis Hoy Mismo!</a>
                </div>
            </div>
        </section>
    </div>

</body>
</html>