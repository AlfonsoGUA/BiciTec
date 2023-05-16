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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <link href=" ../css/estilosIndex.css" rel="stylesheet">

</head>

<body>
  <header style= "background-image: url('../img/BiciHead.jpg');">
    
<br>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html"> <strong></strong> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <h1 style="color:black">ⒷⓘⓒⓘⓉⓔⓒ</h1>

          
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            
          </div>
        </div>
      </nav>
  </header>


  <main style="background-color:#D6DBDF">
    
  <?php
include_once "FuncionesCarrito.php";
$productos = obtenerProductos();
?>


<div class="columns">
    <div class="column">
        <h2 class="is-size-2" style="text-align:center; font-family:monaco">Productos existentes</h2>
        <br>
        <a  class="button is-success" href="../registrarCategoria.php">Nuevo&nbsp;<i class="fa fa-plus"></i></a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto->nombre ?></td>
                        <td><?php echo $producto->descripcion ?></td>
                        <td>$<?php echo number_format($producto->precio, 2) ?></td>
                        <td>
                            <form action="./eliminarRegistro.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button class="button is-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
      
<br>

  </main>
  <footer style="background-color: #D6DBDF; color: black;">  
                <br>
                <div >
                   <a href="../indexAdmin.php"><b>Regresar al menu principal</b></a>
                    <br>
                    <br>
                    <b>BiciTec S.A. de C.V.</b>
                    <br>
                    <br>
                </div>
                   
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
