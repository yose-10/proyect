<?php

include 'conec.php';

class rols extends Connect{
    public $id;
    public $rol;
    public $description;
    public $state;
    
    public function create(){
        $stmt = mysqli_prepare(
            $this->conn,
            "INSERT INTO rols (rol, description, state) VALUES (?, ?, ?)"
        );
        $stmt->bind_param(
            "ssi",
            $this->rol,
            $this->description,
            $this->state
        );
        $stmt->execute();
        $stmt->close();
    }

    public function getAll() {
        $stmt = mysqli_prepare(
            $this->conn,
            "SELECT * FROM RolsList"
        );
        $stmt->execute();
        $result = $stmt->get_result();
        $rols = [];

        while ($row = $result->fetch_assoc()) {
            $rols[] = $row;
        }
        return $rols;
    }

    public function getFirst($id){
        $stmt = mysqli_prepare(
            $this->conn,
            "SELECT * FROM rols WHERE id = ?"
        );
        $stmt->bind_param(
            "i",
            $id
        );
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function update($id){
        $stmt = mysqli_prepare(
            $this->conn,
            "UPDATE rols SET rol = ?, description = ?, state = ? WHERE id = ?"
        );
        $stmt->bind_param(
            "ssii",
            $this->rol,
            $this->description,
            $this->state,
            $id
        );
        $stmt->execute();
        $stmt->close();
    }

    public function delete($id){
        $stmt = mysqli_prepare(
            $this->conn,
            "DELETE FROM rols WHERE id = ?"
        );
        $stmt->bind_param(
            "i",
            $id
        );
        $stmt->execute();
        $stmt->close();
    }
}
