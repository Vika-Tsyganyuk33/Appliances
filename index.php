<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <?php include("modules/header.php")?>
    </header>
    <main class="container mt-3">
        <section>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="../img/banner1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../img/banner1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../img/banner1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        </section>
        <section>
             <div class="container text-center mt-3">
                <div class="row align-items-center">
                    <div class="col-8">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa aspernatur suscipit autem doloribus quaerat ea alias nam, iusto eius assumenda quo nemo, sit perferendis corporis dolorum. Dicta a provident at ea, reiciendis natus perferendis ad ab officiis optio ut dolorem animi suscipit dolor hic officia exercitationem? Cum dolorem dignissimos deleniti.<br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa aspernatur suscipit autem doloribus quaerat ea alias nam, iusto eius assumenda quo nemo, sit perferendis corporis dolorum.
                    </div>
                    <div class="col-4">
                        <img src="../img/adver.webp" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="new">
            <h4 class="mt-4 mb-3">Наши новинки</h4>
            <div class="prod">
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/new1.webp" class="card-img-top mt-2 text-center mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/new2.webp" class="card-img-top mt-2 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/new3.webp" class="card-img-top mt-2 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/new4.webp" class="card-img-top mt-2 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="mt-5">
        <div  class="container">
            <?php include("modules/footer.php")?>
        </div>
    </footer>
</body>
</html>