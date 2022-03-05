<?php
require_once("SignUpDB.class.php");
require_once("Employee.class.php");
class SignUpValidator extends SignUpDB {

    private $employee;
    private $pwd;
    private $pwdRepeat;

    public function __construct(Employee $employee ,$pwd, $pwdRepeat) {
        $this->employee = $employee;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    /**
     * Metodo que valida todos los campos y llama al metodo para guardar el usuario en base de datos
     */
    public function signUpEmployee(){
        if($this->emptyInput() == false){
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if ($this->invalidName() == false){
            header("location: ../signup.php?error=invalidname");
            exit();
        }
        if ($this->invalidEmail() == false){
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if ($this->pwdMatch() == false){
            header("location: ../signup.php?error=pwdmatch");
            exit();
        }
        if ($this->emailTaken() == false){
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        $this->insertEmployee($this->employee, $this->pwd);

    }

    /**
     * Metodo que comprueba que ningun campo este vacio
     * @return bool
     */
    public function emptyInput(){
        if (empty($this->employee->getName()) || empty($this->employee->getNif()) || empty($this->employee->getAddress()) || empty($this->employee->getEmail()) || empty($this->pwd) || empty($this->pwdRepeat)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /**
     * Comprueba que el nombre sea valido (contenga solo letras)
     * @return bool
     */
    public function invalidName(){
        if (!preg_match("/^[a-zA-Z\s]+$/", $this->employee->getName())){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /**
     * Comprueba que el email sea valido
     * @return bool
     */
    public function invalidEmail(){
        if (!filter_var($this->employee->getEmail(), FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /**
     * Comprueba que la contrasena repetida sea correcta.
     * @return bool
     */
    public function pwdMatch(){
        if ($this->pwd !== $this->pwdRepeat){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    /**
     * Metodo que verifica que el email no haya sido utilizado
     * @return bool
     */
    public function emailTaken(){
        if (!$this->checkEmail($this->employee->getEmail())){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}