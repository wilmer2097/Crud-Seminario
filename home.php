

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="Barra de navegación adaptable con Media Queries y JS" />
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/estilos_nav.css" />
    <link rel="stylesheet" href="./css/home.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />

    <title>Principal</title>
</head>

<body>

    

    <!-- BARRA DE NAVEGACION -->
    <?php include("nav.php"); ?>


    <div class="contenedor_t">
        <h2 class="AD_US">Bienvenido "administrador" </h2>
    </div>

    <div class="contenedor">
        <h2 class="sub">Sistema de control de Inventario</h2>
    </div>

    <!-- cuadro Usuarios-->
    <div class="cuadros">
        <!--  cuadro Usuarios-->
        <div class="cuadros_1">

            <div class="icono">
                <a href="usuarios.php">
                    <img src="./images/usuarios.png"></img>
                </a>
            </div>

            <div class="cuadros_secundario">
                <p>Users</p>
            </div>
        </div>

        <!--  cuadro categoria-->
        <div class="cuadros_1">

            <div class="icono">
                <a href="agregar_categorias.php">
                    <img src="./images/categorias.jpg"></img>
                </a>
            </div>

            <div class="cuadros_secundario">
                <p>Categoria</p>
            </div>
        </div>

        <!--  cuadro productos-->
        <div class="cuadros_1">

            <div class="icono">
                <a href="#">
                    <img src="./images/productos.png"></img>
                </a>
            </div>
            <div class="cuadros_secundario">

                <p>Productos</p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <span>&copy; Senati-Almacen</span>
    </footer>



</body>

</html>