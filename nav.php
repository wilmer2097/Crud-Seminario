<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estilos_nav.css" />
    <!-- FONTAWESOME -->
    <!-- <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" /> -->
    <title>Principal</title>
</head>

<body>
    <!-- BARRA DE NAVEGACION -->
    <header>
        <nav class="nav__container">
            <a href="home.php" class="logo__link">
                <img src="./images/logo-senati.png" class="logo__img" />
            </a>

            <ul class="nav__menu">
                <li class="nav__menu__item nav__menu__item--show">
                    <a href="#" class="nav__menu__link">Productos 
                        <i class="fa-solid fa-angle-down menu__arrow"></i>
                    </a>

                    <ul class="nav__submenu">
                        <li class="nav__submenu__inside">
                            <a href="#" class="nav__menu__link nav__menu__link--inside">Propios</a>
                        </li>
                        <li class="nav__submenu__inside">
                            <a href="#" class="nav__menu__link nav__menu__link--inside">Ventas</a>
                        </li>
                    </ul>
                </li>
                <li class="nav__menu__item">
                    <a href="#" class="nav__menu__link">Categorias</a>
                </li>
                <li class="nav__menu__item">
                    <a href="#" class="nav__menu__link">Empleados</a>
                </li>

                <li class="nav__menu__item">
                    <a href="#" class="nav__menu__link nav__menu__link--ocultar">Perfil</a>
                </li>

                <li class="nav__menu__item">
                    <a href="" class="nav__menu__link nav__menu__link--ocultar">Cerrar Sesión</a>
                </li>
            </ul>

            <div class="cerrarSesion">
                <a href="#" class="perfil__container">
                </a>

                <a href="cerrar-sesion.php" class="cerrarSesion__container">
                    <i class="ico__off fa-solid fa-power-off"></i>
                </a>
            </div>
            
            <button class="nav-toggle">
                <i class="ico fa-solid fa-bars"></i>
            </button>
        </nav>
    </header>
    
    <script src="../js/nav.js"></script>
</body>

</html>