<?php
// Comprobar que el usuario venga por la ruta correcta (submit del formulario de registro)
if (isset($_POST["submit"])){

    // Recoger Data
    foreach ($_POST as $key => $value){
        $$key = addslashes($value);
    }
    // Instancia de objetos para validar la entrada
    require_once "../model/SignUpValidator.class.php";
    require_once "../model/Employee.class.php";

    $employee = new Employee($name, $nif, $address, $email);
    $validator = new SignUpValidator($employee, $pwd, $pwdRepeat);

    // Controlar errores
    $validator->signUpEmployee();
    header("location: ../signup.php?error=none");

}else{
    header("location: ../signup.php");
    exit();
}

