<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar') <!-- Incluir el componente de la barra de navegación -->

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold underline">
            Bienvenidos a la Página de Inicio
        </h1>
        <!-- Más contenido aquí -->
    </div>



</body>
@include('components.footer') 
</html>
