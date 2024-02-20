<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>

    <ul>
        @foreach ($productos as $producto)
            <li>{{ $producto->nombre }}</li>
        @endforeach
    </ul>
</body>
</html>
