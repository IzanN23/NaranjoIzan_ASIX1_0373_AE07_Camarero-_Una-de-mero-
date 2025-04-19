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
        <!-- Entrantes -->
        <section id="entrantes">
            <h2 class="text-center my-4">Entrantes</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Bruschetta</h5>
                            <img src="./img/bruschetta.jpg" class="img-fluid mb-3" alt="Bruschetta">
                            <p class="card-text"><strong>Descripción:</strong> Pan tostado con tomate fresco, albahaca y aceite de oliva.</p>
                            <p class="card-text"><strong>Precio:</strong> $6</p>
                            <p class="card-text"><strong>Calorías:</strong> 150 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Vegetariano</span> <span class="badge bg-secondary">Sin gluten</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Caprese</h5>
                            <img src="./img/caprese.jpg" class="img-fluid mb-3" alt="Caprese">
                            <p class="card-text"><strong>Descripción:</strong> Ensalada de tomate, mozzarella fresca y albahaca.</p>
                            <p class="card-text"><strong>Precio:</strong> $8</p>
                            <p class="card-text"><strong>Calorías:</strong> 200 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Vegetariano</span> <span class="badge bg-secondary">Sin gluten</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Platos Principales -->
        <section id="principales">
            <h2 class="text-center my-4">Platos Principales</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Lasagna</h5>
                            <img src="./img/lasagna.jpg" class="img-fluid mb-3" alt="Lasagna">
                            <p class="card-text"><strong>Descripción:</strong> Capas de pasta con carne, salsa de tomate y queso gratinado.</p>
                            <p class="card-text"><strong>Precio:</strong> $12</p>
                            <p class="card-text"><strong>Calorías:</strong> 600 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Tradicional</span> <span class="badge bg-secondary">Con gluten</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Risotto de Setas</h5>
                            <img src="./img/risotto de setas.jpg" class="img-fluid mb-3" alt="Risotto de Setas">
                            <p class="card-text"><strong>Descripción:</strong> Arroz cremoso con setas y queso parmesano.</p>
                            <p class="card-text"><strong>Precio:</strong> $14</p>
                            <p class="card-text"><strong>Calorías:</strong> 500 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Vegetariano</span> <span class="badge bg-secondary">Sin gluten</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Pizza Margherita</h5>
                            <img src="./img/pizza_margheritta.jpg" class="img-fluid mb-3" alt="Pizza Margherita">
                            <p class="card-text"><strong>Descripción:</strong> Pizza clásica con tomate, mozzarella y albahaca.</p>
                            <p class="card-text"><strong>Precio:</strong> $10</p>
                            <p class="card-text"><strong>Calorías:</strong> 700 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Vegetariano</span> <span class="badge bg-secondary">Con gluten</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Postres -->
        <section id="postres">
            <h2 class="text-center my-4">Postres</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Tiramisú</h5>
                            <img src="./img/tiramisu.jpg" class="img-fluid mb-3" alt="Tiramisú">
                            <p class="card-text"><strong>Descripción:</strong> Postre clásico italiano con café, mascarpone y cacao.</p>
                            <p class="card-text"><strong>Precio:</strong> $6</p>
                            <p class="card-text"><strong>Calorías:</strong> 400 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Tradicional</span> <span class="badge bg-secondary">Con gluten</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Panna Cotta</h5>
                            <img src="./img/Panna_Cotta.jpg" class="img-fluid mb-3" alt="Panna Cotta">
                            <p class="card-text"><strong>Descripción:</strong> Postre cremoso de nata con coulis de frutas rojas.</p>
                            <p class="card-text"><strong>Precio:</strong> $5</p>
                            <p class="card-text"><strong>Calorías:</strong> 300 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Sin gluten</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bebidas -->
        <section id="bebidas">
            <h2 class="text-center my-4">Bebidas</h2>
            <div class="row">
                <div la="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Espresso</h5>
                            <img src="./img/espresso.jpg" class="img-fluid mb-3" alt="Espresso">
                            <p class="card-text"><strong>Descripción:</strong> Café italiano corto y fuerte.</p>
                            <p class="card-text"><strong>Precio:</strong> $2</p>
                            <p class="card-text"><strong>Calorías:</strong> 5 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Vegano</span> <span class="badge bg-secondary">Sin gluten</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Limoncello</h5>
                            <img src="./img/Limoncello.jpg" class="img-fluid mb-3" alt="Limoncello">
                            <p class="card-text"><strong>Descripción:</strong> Licor de limón típico del sur de Italia.</p>
                            <p class="card-text"><strong>Precio:</strong> $4</p>
                            <p class="card-text"><strong>Calorías:</strong> 150 kcal</p>
                            <p class="card-text"><strong>Características:</strong> <span class="badge bg-secondary">Sin gluten</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 La Tavola di Alberto. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>