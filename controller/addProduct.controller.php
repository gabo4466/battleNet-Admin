<?php

// Comprobar que el usuario venga por la ruta correcta (submit del formulario de login)
if (isset($_POST["submit"])){

    // Recoger Data
    foreach ($_POST as $key => $value){
        $$key = addslashes($value);
    }

    if(move_uploaded_file($_FILES['photo']['tmp_name'],  "../assets/img/". $_FILES['photo']['name'])){
    }else{
        header("location: ../addProduct.php?error=404");
        exit();
    }

    $img = $_FILES['photo']['name'];
    // Instancia de objetos para validar la entrada
    require_once "../model/ProductValidator.class.php";
    require_once "../model/Product.class.php";
    $product = new Product($name, $desc, $prize, $stock, $img, $type);
    $validator = new ProductValidator($product);

    // Controlar errores
    $validator->addProduct();
    header("location: ../addProduct.php?error=none");

}else{
    header("location: ../addProduct.php");
    exit();
}

