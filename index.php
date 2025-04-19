<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/carta.css">
    <title>La Tavola di Alberto</title>
</head>
<body>
    <header class="bg-dark text-white text-center py-3">
        <h1>La Tavola di Alberto</h1>
    </header>

    <?php
    $rutaXml = './xml/menu.xml';
    if (file_exists($rutaXml)) {
        $menu = simplexml_load_file($rutaXml);
    } else {
        echo '<div class="alert alert-danger text-center">Error: El archivo XML no existe.</div>';
        exit;
    }
    ?>

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
                    <li class="nav-item"><a class="nav-link" href="#postres">Postres</a></li>
                    <li class="nav-item"><a class="nav-link" href="#bebidas">Bebidas</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-4">
        <?php
        $categorias = ['entrante' => 'Entrantes', 'principal' => 'Platos Principales', 'postre' => 'Postres', 'bebida' => 'Bebidas'];

        foreach ($categorias as $tipo => $titulo) {
            echo '<section id="' . $tipo . '">';
            echo '<h2 class="text-center my-4">' . $titulo . '</h2>';
            echo '<div class="row">';

            foreach ($menu->plato as $plato) {
                if ($plato['tipo'] == $tipo) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $plato->nombre . '</h5>';
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

            echo '</div>';
            echo '</section>';
        }
        ?>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Restaurante Italiano. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>