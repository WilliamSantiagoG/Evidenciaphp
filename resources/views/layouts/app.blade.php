<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnomantenimiento - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap">
    <style>
        :root {
            --color-barra-lateral: rgb(44, 45, 49);
            --color-texto: rgb(255, 255, 255);
            --color-texto-menu: rgb(110, 110, 117);
            --color-menu-hover: rgb(0, 0, 0);
            --color-menu-hover-texto: rgb(238, 238, 238);
            --color-boton: rgb(255, 255, 255);
            --color-boton-texto: rgb(0, 0, 0);
            --color-linea: rgb(90, 90, 90);
            --color-switch-base: rgb(39, 205, 64);
            --color-switch-circulo: rgb(255, 255, 255);
            --color-scroll: rgb(68, 69, 74);
            --color-scroll-hover: rgb(85, 85, 85);
            --color-icono: rgb(255, 255, 255);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }
        body {
            height: 100vh;
            width: 100%;
            background-color: #808080;
        }
        .menu {
            position: fixed;
            width: 50px;
            height: 50px;
            font-size: 30px;
            display: none;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            cursor: pointer;
            background-color: var(--color-boton);
            color: var(--color-boton-texto);
            right: 15px;
            top: 15px;
            z-index: 100;
        }
        .barra-lateral {
            position: fixed;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 250px;
            height: 100%;
            overflow: hidden;
            padding: 20px 15px;
            background-color: var(--color-barra-lateral);
            transition: width 0.5s ease, background-color 0.3s ease, left 0.5s ease;
            z-index: 50;
            transition: width 0.5s ease, background-color 0.3s ease, left 0.5s ease, box-shadow 0.3s ease;
        }
        .mini-barra-lateral {
            width: 80px;
        }
        .barra-lateral span {
            width: 100px;
            white-space: nowrap;
            font-size: 18px;
            text-align: left;
            opacity: 1;
            transition: opacity 0.5s ease, width 0.5s ease;
            transition: margin-left 0.5s ease, padding 0.3s ease;
        }
        .barra-lateral span.oculto {
            opacity: 0;
            width: 0;
        }
        .barra-lateral .nombre-pagina {
            width: 100%;
            height: 45px;
            color: var(--color-texto);
            margin-bottom: 40px;
            display: flex;
            align-items: center;
        }
        .barra-lateral .nombre-pagina ion-icon {
            min-width: 50px;
            font-size: 40px;
            cursor: pointer;
        }
        .barra-lateral .nombre-pagina span {
            margin-left: 5px;
            font-size: 18px;
        }
        .barra-lateral .boton {
            width: 100%;
            height: 45px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            border-radius: 10px;
            background-color: var(--color-boton);
            color: var(--color-boton-texto);
        }
        .barra-lateral .boton ion-icon {
            min-width: 50px;
            font-size: 25px;
        }
        .barra-lateral .navegacion {
            display: flex;
            flex-direction: column;
            height: 100%;
            overflow-y: auto;
            overflow-x: hidden;
            margin-top: 20px;
            padding-left: 1px;
        }
        .barra-lateral .navegacion::-webkit-scrollbar {
            width: 5px;
        }
        .barra-lateral .navegacion::-webkit-scrollbar-thumb {
            background-color: var(--color-scroll);
            border-radius: 5px;
        }
        .barra-lateral .navegacion::-webkit-scrollbar-thumb:hover {
            background-color: var(--color-scroll-hover);
        }
        .barra-lateral .navegacion li {
            list-style: none;
            width: 100%;
        }
        .barra-lateral .navegacion a {
            width: 100%;
            height: 45px;
            display: flex;
            align-items: center;
            text-decoration: none;
            border-radius: 10px;
            color: var(--color-texto-menu);
            padding-left: 10px;
        }
        .barra-lateral .navegacion a:hover {
            background-color: var(--color-menu-hover);
            color: var(--color-menu-hover-texto);
        }
        .barra-lateral .navegacion ion-icon {
            min-width: 50px;
            font-size: 20px;
        }
        .barra-lateral .linea {
            width: 100%;
            height: 1px;
            margin-top: 15px;
            background-color: var(--color-linea);
        }
        .barra-lateral ion-icon {
            color: var(--color-icono);
        }
        .contenido {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.5s ease;
        }
        .contenido.mini-barra {
            margin-left: 80px;
        }
        .card {
            position: relative;
            z-index: 1;
        }
        .barra-lateral.mini-barra-lateral .navegacion a {
            padding-left: 0;
            justify-content: center;
        }
        .barra-lateral.mini-barra-lateral .navegacion span {
            display: none;
        }
        .barra-lateral.mini-barra-lateral .navegacion ion-icon {
            font-size: 25px;
        }
    </style>
</head>
<body class="dark-mode">
    <div class="menu" onclick="toggleSidebar()">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
    <div class="barra-lateral" id="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon name="construct" onclick="toggleSidebar()"></ion-icon>
                <span>Tecnomantenimiento</span>
            </div>
            <div class="linea"></div>
            <ul class="navegacion">
                <li><a href="{{ route('notas.index') }}" id="ver-usuarios"><ion-icon name="person"></ion-icon><span>Usuarios</span></a></li>
                <li><a href="{{ route('notas.create') }}"><ion-icon name="person-add"></ion-icon><span>Añadir Usuarios</span></a></li>
                <!-- <li><a href="#"><ion-icon name="documents"></ion-icon><span>Reportes</span></a></li> -->
                <!--  <li><a href="#"><ion-icon name="settings"></ion-icon><span>Configuración</span></a></li> -->
            </ul>
        </div>
    </div>
    <div class="contenido" id="contenido">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@ionic/core@5.9.0/dist/ionic/ionic.js"></script>
    <script>
        const sidebar = document.getElementById('barra-lateral');
        const contenido = document.getElementById('contenido');

        function toggleSidebar() {
            sidebar.classList.toggle('mini-barra-lateral');
            contenido.classList.toggle('mini-barra');
            const spans = sidebar.querySelectorAll('span');
            spans.forEach(span => span.classList.toggle('oculto'));
        }
    </script>
</body>
</html>
