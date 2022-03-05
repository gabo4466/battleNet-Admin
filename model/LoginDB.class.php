<?php
require_once ("DBConnection.class.php");
require_once("Employee.class.php");
class LoginDB extends DBConnection {

    /**
     * Metodo que realiza el login, en caso de que este sea correcto inicia la sesion
     * @param $email
     * @param $pwd
     */
    protected function getEmployee($email, $pwd){
        $stmt = $this->connect()->prepare('SELECT employees_password FROM employees WHERE employees_email = ?;');

        if (!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() == 0){
            header("location: ../index.php?error=employeenotfound");
            exit();
        }

        $hashedPwd = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $checkPwd = password_verify($pwd, $hashedPwd[0]["employees_password"]);
        if ($checkPwd == false){
            header("location: ../index.php?error=employeenotfound");
            exit();
        }else if($checkPwd == true){
            $stmt = $this->connect()->prepare('SELECT * FROM employees WHERE employees_email = ?;');
            if (!$stmt->execute(array($email))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0){
                header("location: ../index.php?error=employeenotfound");
                exit();
            }
            session_start();
            $employeeAux = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $employee = new Employee($employeeAux[0]["employees_name"], $employeeAux[0]["employees_nif"], $employeeAux[0]["employees_address"], $employeeAux[0]["employees_email"], $employeeAux[0]["id_employees"]);
            $_SESSION["employeeId"] = $employee->getId();
            $_SESSION["employeeName"] = $employee->getName();
            $_SESSION["employeeEmail"] = $employee->getEmail();

        }

        $stmt = null;
    }
}