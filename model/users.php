<?php

include 'conec.php';

class user extends Connect{
    public $ci;
    public $names;
    public $lastnames;
    public $age;
    public $mail;
    public $phone;
    public $rol;
    
    public function create(){
        $id_rol = $this->getRolID($this->rol);

        $stmt = mysqli_prepare(
            $this->conn,
            "INSERT INTO users (ci, names, lastnames, age, mail, phone, id_rol) VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param(
            "sssisii",
            $this->ci,
            $this->names,
            $this->lastnames,
            $this->age,
            $this->mail,
            $this->phone,
            $id_rol
        );
        $stmt->execute();
        $stmt->close();
    }

    public function getAll() {
        $stmt = mysqli_prepare(
            $this->conn,
            "SELECT * FROM UserList"
        );
        $stmt->execute();
        $result = $stmt->get_result();
        $users = [];

        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }

    public function getFirst($ci){
        $stmt = mysqli_prepare(
            $this->conn,
            "SELECT * FROM UserList WHERE ci = ?"
        );
        $stmt->bind_param(
            "s",
            $ci
        );
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function update($ci){
        $id_rol = $this->getRolID($this->rol);
        
        $stmt = mysqli_prepare(
            $this->conn,
            "UPDATE users SET ci = ?, names = ?, lastnames = ?, age = ?, mail = ?, phone = ?, id_rol = ? WHERE ci = ?"
        );
        $stmt->bind_param(
            "sssisiis",
            $this->ci,
            $this->names,
            $this->lastnames,
            $this->age,
            $this->mail,
            $this->phone,
            $id_rol,
            $ci
        );
        $stmt->execute();
        $stmt->close();
    }

    public function delete($ci){
        $stmt = mysqli_prepare(
            $this->conn,
            "DELETE FROM users WHERE ci = ?"
        );
        $stmt->bind_param(
            "s",
            $ci
        );
        $stmt->execute();
        $stmt->close();
    }

    public function getRolID($rol){
        $stmt = mysqli_prepare(
            $this->conn,
            "SELECT id FROM rols WHERE rol = ?"
        );
        $stmt->bind_param(
            "s",
            $rol
        );
        $stmt->execute();
        $result = $stmt->get_result();

        if($row = $result->fetch_assoc()) {
            $stmt->close();
            return $row['id'];
        } else {
            $stmt->close();
            throw new Exception("El rol '{$rol} no existe.");
        }
    }

    public function getRol(){
        $stmt = mysqli_prepare(
            $this->conn,
            "SELECT rol FROM rols"
        );
        $stmt->execute();
        $result = $stmt->get_result();
        $rols = [];

        while ($row = $result->fetch_assoc()) {
            $rols[] = $row;
        }
        return $rols;
    }
}
