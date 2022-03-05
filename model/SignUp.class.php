<?php
require_once("DBConnection.class.php");
require_once("Employee.class.php");
class SignUp extends DBConnection {

    /**
     * Metodo que comprueba no exista otro usuario con el email
     * @param $email
     * @return bool|void
     */
    protected function checkEmail($email){
        $stmt = $this->connect()->prepare('SELECT id_employees FROM employees WHERE employees_email = ?;');

        if (!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

    /**
     * Metodo que inserta el usuario en la base de datos
     * @param $employee
     */
    protected function insertEmployee($employee, $pwd){
        $stmt = $this->connect()->prepare('INSERT INTO employees (employees_name, employees_nif, employees_address, employees_email, employees_password) VALUES (?, ?, ?, ?, ?);');
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($employee->getName(), $employee->getNif(), $employee->getAddress(), $employee->getEmail(), $hashedPwd))){
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }




}