<!DOCTYPE html>
<html lang="spa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ciudad alternativa</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Ciudad Alternativa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Registro.php">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Subir publicación</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <!--CONTENIDO -->

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/a.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/b.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/c.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previo</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>

<!-- FOOTER -->


<div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Inicio</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sobre el proyecto</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Registrarse</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ingresar</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Escribinos</a></li>
          </ul>
        </div>
  
        <div class="col-2">
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Categorías</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Buscador</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Términos y condiciones</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacidad</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Comunidad</a></li>
          </ul>
        </div>
    
        <div class="col-4 offset-1">
          <form>
            <h5>Suscribite a nuestro newsletter</h5>
            <div class="d-flex w-100 gap-2">
              <input id="newsletter1" type="text" class="form-control" placeholder="Ingresa tu email">
              <button class="btn btn-primary" type="button">Subscribirse</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>&copy; 2021 Ciudad Alternativa</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-facebook"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-twitter"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-instagram"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-snapchat"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-youtube"></i></a></li>
        </ul>
      </div>
    </footer>
  </div>
  



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>