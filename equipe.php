<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/componentes.css">
    <title>Funcionarios</title>
</head>

<body>
    <h1>Nossa Equipe</h1>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="imagens/veterinarios1.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Larissa Martins</h5>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <img src="imagens/veterinarios2.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mirela Costa</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/veterinarios3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Felipe Purcell</h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="imagens/veterinarios4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carolina Lima</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>