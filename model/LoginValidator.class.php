<?php
require_once("LoginDB.class.php");
class LoginValidator extends LoginDB {
    private $email;
    private $pwd;

    /**
     * @param $email
     * @param $pwd
     */
    public function __construct($email, $pwd) {
        $this->email = $email;
        $this->pwd = $pwd;
    }

    /**
     * Metodo que realiza el login del usuario
     */
    public function loginEmployee(){
        if($this->emptyInput() == false){
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        $this->getEmployee($this->email, $this->pwd);

    }

    /**
     * Metodo que comprueba que ningun campo este vacio
     * @return bool
     */
    public function emptyInput(){
        if (empty($this->email) || empty($this->pwd)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}