<?php

// Definición de los paquetes de la plataforma de control de inventario
$paquetes = [
    [
        'nombre' => 'PAQUETE BÁSICO',
        'precio' => '$0',
        'caracteristicas' => [
            'Acceso a Módulo de Inventario Básico',
            'Gestión de hasta 50 productos',
            'Soporte por correo electrónico',
            'Un usuario administrador'
        ],
        'estilo' => 'paquete-basico'
    ],
    [
        'nombre' => 'PAQUETE PYME',
        'precio' => '$49',
        'caracteristicas' => [
            'Acceso Completo a Módulos (Inventario, Proveedores, Clientes)',
            'Gestión ilimitada de productos',
            'Reportes avanzados y exportación de datos',
            'Hasta 5 usuarios'
        ],
        'estilo' => 'paquete-pyme'
    ],
    [
        'nombre' => 'PAQUETE EMPRESARIAL',
        'precio' => '$199',
        'caracteristicas' => [
            'Todas las características del Paquete PYME',
            'Módulo de Multi-Almacén',
            'Integración con sistemas de punto de venta (POS)',
            'Soporte prioritario 24/7 y capacitaciones personalizadas',
            'Usuarios ilimitados'
        ],
        'estilo' => 'paquete-empresarial'
    ]
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Paquetes de Plataforma de Inventario</title>
    <style>
        /* Estilos CSS para simular la presentación */
        body { font-family: sans-serif; margin: 0; padding: 20px; background-color: #f4f4f9; }
        .contenedor-principal { max-width: 1200px; margin: 0 auto; text-align: center; }
        .titulo-seccion { font-size: 2.5em; margin-bottom: 10px; }
        .subtitulo-seccion { font-size: 1.2em; color: #555; margin-bottom: 40px; }
        .contenedor-paquetes { display: flex; justify-content: space-around; gap: 20px; }
        .paquete {
            flex: 1;
            border: 1px solid #ddd;
            padding: 30px 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .paquete:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .nombre-paquete { font-size: 1.5em; font-weight: bold; margin-bottom: 20px; color: #333; }
        .precio { font-size: 3em; font-weight: bold; color: #007bff; margin-bottom: 30px; }
        .caracteristicas { list-style: none; padding: 0; text-align: left; }
        .caracteristicas li { margin-bottom: 10px; font-size: 1em; color: #555; border-bottom: 1px dashed #eee; padding-bottom: 5px; }
        .caracteristicas li:last-child { border-bottom: none; }

        /* Estilos específicos basados en los precios del ejemplo original */
        .paquete-empresarial .precio { color: #007bff; }
        .paquete-pyme .precio { color: #007bff; }
        .paquete-basico .precio { color: #007bff; }
    </style>
</head>
<body>

    <div class="contenedor-principal">
        <h1 class="titulo-seccion">Paquetes Control de Inventario</h1>
        <p class="subtitulo-seccion">Elige el plan que mejor se adapte a tu negocio</p>

        <div class="contenedor-paquetes">
            <?php foreach ($paquetes as $paquete): ?>
                <div class="paquete <?= $paquete['estilo'] ?>">
                    <h2 class="nombre-paquete"><?= $paquete['nombre'] ?></h2>

                    <div class="caracteristicas">
                        <?php foreach ($paquete['caracteristicas'] as $caracteristica): ?>
                            <li><?= $caracteristica ?></li>
                        <?php endforeach; ?>
                    </div>

                    <p class="precio"><?= $paquete['precio'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>