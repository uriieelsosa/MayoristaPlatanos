<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayorista platanos</title>
    
<link rel="icon" type="favicon" href="img/icono.jpg">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php
include 'nav.php';

?>

<main>
<div class="container-fluid px-0">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carru1.png" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="/img/carru2.jpg" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="/img/carru3.jpg" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="/img/carru4.jpg" class="d-block w-100" alt="">
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>



<div class="container my-5">
  <div class="row text-center">

    <div class="container my-5">
  <div class="row text-center">

    <!-- Categoría 1: Bebidas -->
    <div class="col-md-4">
      <div class="card border-0">
        <a href="bebidas.html">
          <img src="img/tarjeta/gaseosa" class="rounded-circle mx-auto d-block"
               alt="Bebidas"
               style="width:200px; height:200px; object-fit:cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Bebidas</h5>
        </div>
      </div>
    </div>

    <!-- Categoría 2: Almacén -->
    <div class="col-md-4">
      <div class="card border-0">
        <a href="almacen.html">
          <img src="img/tarjeta/almacen" class="rounded-circle mx-auto d-block"
               alt="Almacén"
               style="width:200px; height:200px; object-fit:cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Almacén</h5>
        </div>
      </div>
    </div>

    <!-- Categoría 3: Limpieza -->
    <div class="col-md-4">
      <div class="card border-0">
        <a href="limpieza.html">
          <img src="img/tarjeta/limpieza" class="rounded-circle mx-auto d-block"
               alt="Limpieza"
               style="width:200px; height:200px; object-fit:cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Limpieza</h5>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container my-5">
  <div class="row text-center">

    <div class="container my-5">
  <div class="row text-center">

    <!-- Categoría 1: Bebidas -->
    <div class="col-md-4">
      <div class="card border-0">
        <a href="bebidas.html">
          <img src="img/tarjeta/gaseosa" class="rounded-circle mx-auto d-block"
               alt="Bebidas"
               style="width:200px; height:200px; object-fit:cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Bebidas</h5>
        </div>
      </div>
    </div>

    <!-- Categoría 2: Almacén -->
    <div class="col-md-4">
      <div class="card border-0">
        <a href="almacen.html">
          <img src="img/tarjeta/almacen" class="rounded-circle mx-auto d-block"
               alt="Almacén"
               style="width:200px; height:200px; object-fit:cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Almacén</h5>
        </div>
      </div>
    </div>

    <!-- Categoría 3: Limpieza -->
    <div class="col-md-4">
      <div class="card border-0">
        <a href="limpieza.html">
          <img src="img/tarjeta/limpieza" class="rounded-circle mx-auto d-block"
               alt="Limpieza"
               style="width:200px; height:200px; object-fit:cover;">
        </a>
        <div class="card-body">
          <h5 class="card-title">Limpieza</h5>
        </div>
      </div>
    </div>

  </div>
</div>

       
</main>

    
 <!-- Contacto -->
  <section id="contacto" class="bg-dark text-white py-5">
    <div class="container text-center">
      <h2>Contacto</h2>
      <p>📍 Calle Falsa 123, Berazategui</p>
      <p>📞 11-1234-5678</p>
      <p>✉️ contacto@distribuidora.com</p>
      <a href="https://wa.me/541112345678" target="_blank" class="btn btn-success">WhatsApp</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-secondary text-white text-center py-3">
    <p>&copy; 2025 U.Sosa - Todos los derechos reservados</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html>