<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/restaurante.svg">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="./css/carta.css">
    <title>La Tavola di Alberto</title>
</head>
<body>
<?php
// Cargar el archivo XML
if (file_exists('./xml/menu.xml')) {
    $menu = simplexml_load_file('./xml/menu.xml');
} else {
    echo '<p>Error: El archivo XML no existe.</p>';
    exit;
}
?>

<header class="bg-dark text-white text-center py-3">
    <h1>La Tavola di Alberto</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Menú</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#entrantes">Entrantes</a></li>
                <li class="nav-item"><a class="nav-link" href="#principales">Platos Principales</a></li>
                <li class="nav-item"><a class="nav-link" href="#pizzas">Pizzas</a></li>
                <li class="nav-item"><a class="nav-link" href="#postres">Postres</a></li>
                <li class="nav-item"><a class="nav-link" href="#bebidas">Bebidas</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container my-4">
    <!-- Entrantes -->
    <section id="entrantes">
        <h2 class="text-center my-4">Entrantes</h2>
        <div class="row">
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'entrante') {
                    $imagen = './img/' . strtolower(str_replace(' ', '_', $plato->nombre)) . '.jpg';
                    if (!file_exists($imagen)) {
                        $imagen = './img/imagen_no_disponible.jpg'; // Imagen genérica si no existe la específica
                    }
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $plato->nombre . '</h5>';
                    echo '<img src="' . $imagen . '" class="img-fluid mb-3" alt="' . $plato->nombre . '">';
                    echo '<p class="card-text"><strong>Descripción:</strong> ' . $plato->descripcion . '</p>';
                    echo '<p class="card-text"><strong>Precio:</strong> $' . $plato->precio . '</p>';
                    echo '<p class="card-text"><strong>Calorías:</strong> ' . $plato->calorias . ' kcal</p>';
                    echo '<p class="card-text"><strong>Características:</strong> ';
                    foreach ($plato->caracteristicas->categoria as $categoria) {
                        echo '<span class="badge bg-secondary me-1">' . $categoria . '</span>';
                    }
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>

    <!-- Platos Principales -->
    <section id="principales">
        <h2 class="text-center my-4">Platos Principales</h2>
        <div class="row">
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'principal') {
                    $imagen = './img/' . strtolower(str_replace(' ', '_', $plato->nombre)) . '.jpg';
                    if (!file_exists($imagen)) {
                        $imagen = './img/imagen_no_disponible.jpg'; // Imagen genérica si no existe la específica
                    }
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $plato->nombre . '</h5>';
                    echo '<img src="' . $imagen . '" class="img-fluid mb-3" alt="' . $plato->nombre . '">';
                    echo '<p class="card-text"><strong>Descripción:</strong> ' . $plato->descripcion . '</p>';
                    echo '<p class="card-text"><strong>Precio:</strong> $' . $plato->precio . '</p>';
                    echo '<p class="card-text"><strong>Calorías:</strong> ' . $plato->calorias . ' kcal</p>';
                    echo '<p class="card-text"><strong>Características:</strong> ';
                    foreach ($plato->caracteristicas->categoria as $categoria) {
                        echo '<span class="badge bg-secondary me-1">' . $categoria . '</span>';
                    }
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>

    <!-- Pizzas -->
    <section id="pizzas">
        <h2 class="text-center my-4">Pizzas</h2>
        <div class="row">
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'pizza') {
                    $imagen = './img/' . strtolower(str_replace(' ', '_', $plato->nombre)) . '.jpg';
                    if (!file_exists($imagen)) {
                        $imagen = './img/imagen_no_disponible.jpg'; // Imagen genérica si no existe la específica
                    }
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $plato->nombre . '</h5>';
                    echo '<img src="' . $imagen . '" class="img-fluid mb-3" alt="' . $plato->nombre . '">';
                    echo '<p class="card-text"><strong>Descripción:</strong> ' . $plato->descripcion . '</p>';
                    echo '<p class="card-text"><strong>Precio:</strong> $' . $plato->precio . '</p>';
                    echo '<p class="card-text"><strong>Calorías:</strong> ' . $plato->calorias . ' kcal</p>';
                    echo '<p class="card-text"><strong>Características:</strong> ';
                    foreach ($plato->caracteristicas->categoria as $categoria) {
                        echo '<span class="badge bg-secondary me-1">' . $categoria . '</span>';
                    }
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>

    <!-- Postres -->
    <section id="postres">
        <h2 class="text-center my-4">Postres</h2>
        <div class="row">
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'postre') {
                    $imagen = './img/' . strtolower(str_replace(' ', '_', $plato->nombre)) . '.jpg';
                    if (!file_exists($imagen)) {
                        $imagen = './img/imagen_no_disponible.jpg'; // Imagen genérica si no existe la específica
                    }
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $plato->nombre . '</h5>';
                    echo '<img src="' . $imagen . '" class="img-fluid mb-3" alt="' . $plato->nombre . '">';
                    echo '<p class="card-text"><strong>Descripción:</strong> ' . $plato->descripcion . '</p>';
                    echo '<p class="card-text"><strong>Precio:</strong> $' . $plato->precio . '</p>';
                    echo '<p class="card-text"><strong>Calorías:</strong> ' . $plato->calorias . ' kcal</p>';
                    echo '<p class="card-text"><strong>Características:</strong> ';
                    foreach ($plato->caracteristicas->categoria as $categoria) {
                        echo '<span class="badge bg-secondary me-1">' . $categoria . '</span>';
                    }
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>

    <!-- Bebidas -->
    <section id="bebidas">
        <h2 class="text-center my-4">Bebidas</h2>
        <div class="row">
            <?php
            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == 'bebida') {
                    $imagen = './img/' . strtolower(str_replace(' ', '_', $plato->nombre)) . '.jpg';
                    if (!file_exists($imagen)) {
                        $imagen = './img/imagen_no_disponible.jpg'; // Imagen genérica si no existe la específica
                    }
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $plato->nombre . '</h5>';
                    echo '<img src="' . $imagen . '" class="img-fluid mb-3" alt="' . $plato->nombre . '">';
                    echo '<p class="card-text"><strong>Descripción:</strong> ' . $plato->descripcion . '</p>';
                    echo '<p class="card-text"><strong>Precio:</strong> $' . $plato->precio . '</p>';
                    echo '<p class="card-text"><strong>Calorías:</strong> ' . $plato->calorias . ' kcal</p>';
                    echo '<p class="card-text"><strong>Características:</strong> ';
                    foreach ($plato->caracteristicas->categoria as $categoria) {
                        echo '<span class="badge bg-secondary me-1">' . $categoria . '</span>';
                    }
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>
</main>

<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 La Tavola di Alberto. Todos los derechos reservados.</p>
</footer>

</body>
</html>