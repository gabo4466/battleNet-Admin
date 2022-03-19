<html>
<head>
<?php
    include "includes/head.php";
?>
    <link rel="stylesheet" href="styles/addProduct.css">
</head>
<body>


<?php
    include "includes/navbar.php";
?>
<section>
    <div class="formWrapper">
        <form action="controller/addProduct.controller.php" method="post" enctype="multipart/form-data">
        <h2>Ingresa la información del producto</h2>
            <div class="formInner">
                <label for="name">Nombre del producto</label>
                <input type="text" required name="name" placeholder="Nombre del producto...">
                <label for="prize">Precio</label>
                <input type="text" required name="prize" placeholder="Precio...">
                <label for="stock">Disponibilidad</label>
                <select name="stock" id="stock">
                    <option value="0">Sin existencias</option>
                    <option value="1">Disponible</option>
                </select>
                <label for="type">Tipo de producto</label>
                <select name="type" id="type">
                    <option value="1">Juego</option>
                    <option value="2">Estatuilla</option>
                    <option value="3">Póster</option>
                    <option value="4">Peluche</option>
                    <option value="5">Ropa</option>
                </select>
                <label for="desc">Descripción</label>
                <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                <label for="photo">Imagen</label>
                <input type="file" name="photo">
                <button type="submit" name="submit" value="1">Registrar</button>
            </div>
        </form>
    </div>
</section>

</body>
</html>