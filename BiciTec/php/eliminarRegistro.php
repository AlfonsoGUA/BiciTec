<?php
if (!isset($_POST["id_producto"])) {
    exit("No hay datos");
}

include_once "FuncionesCarrito.php";
eliminarProducto($_POST["id_producto"]);
header("Location: productos.php");
