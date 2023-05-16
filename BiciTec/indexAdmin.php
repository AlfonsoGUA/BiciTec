<!doctype html>
<html lang="en" style="background-color:#D6DBDF">

<head>
  <title>Index</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href=" ./css/estilosIndex.css" rel="stylesheet">

</head>

<body>
  <header style= "background-image: url('./img/BiciHead.jpg');">
    
<br>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html"> <strong></strong> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <h1 style="color:black">ⒷⓘⓒⓘⓉⓔⓒ</h1>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
                <a class="nav-link active" href="./php/tienda.php">Tienda</a>
              </li>
              <div class="container-fluid">
    <form class="d-flex" name="busqueda" method="POST" action="php/busqueda.php">
      <input class="form-control me-2" type="text" placeholder="Busqueda de producto" name="IdAlu" style="width:300px">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</ul>
</div>
          
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a  class="nav-link active " href="./AcercaDeA.html"  aria-disabled="true">Acerca de ...</a>
              </li>
            <li class="nav-item">
                <a class="nav-link active" href="./registrarCategoria.php">Registrar Bicicleta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./modCategoria.php">Modificar Bicicleta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./php/productos.php">Productos</a>
              </li>
              <li class="nav-fill">
                <a  class="nav-link active" href="./php/cerrarSesion.php"  aria-disabled="true">Log Out</a>
              </li>


            </ul>
          </div>
        </div>
      </nav>
  </header>


  <main style="background-color:#D6DBDF">
      
  <div class="contenedor" >
<section>
    <h2> <b>Los mas populares </b></h2>
</section>
<div>
<div class="card" style="width: 18rem;">
  <img src="img/biciM.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Montaña</h5>
    <p class="card-text">Están diseñadas para usarse en terrenos de tierra irregulares, desde senderos a caminos de montaña menos transitados. Su geometría y sus neumáticos gruesos les permiten comportarse bien en caminos llenos de baches y obstáculos.</p>
  </div>
</div>
</div>

<div>
<div class="card" style="width: 18rem;">
  <img src="img/biciU.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Urbanas</h5>
    <p class="card-text">Permitir el desplazamiento por la ciudad, por lo tanto, son cómodas y funcionales, con una geometría que ofrece una postura cómoda, neumáticos de tipo mixto para adaptarse a un terreno que es cambiante en la ciudad y una posición del manillar elevada.</p>
  </div>
</div>
</div>

<div>
<div class="card" style="width: 18rem;">
  <img src="img/biciI.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Infantiles</h5>
    <p class="card-text">Pensadas para adaptarse a la estatura de los niños. Las encuadramos en su propio grupo por este motivo y porque también hay modelos con características peculiares enfocadas a usuarios que aún se están desarrollando.</p>
  </div>
</div>
</div>

</div>
     
  </main>
  <footer style="background-color: #D6DBDF; color: black;">
    <h5>BiciTec SA de CV.</h5>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

