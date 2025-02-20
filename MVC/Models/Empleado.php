<?php
require_once "Config/Conexion.php";
class Empleado{
    private $pdo;
    public function __construct() {
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }
    // a partir de aquí iran todas los métodos CRUD
    public function getAll(){
        try{
            $query = "SELECT * FROM tbl_empleados";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function getById($id){
        try{
            $query = "SELECT * FROM tbl_empleados WHERE id = $id";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetch();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function delete($d){
        try{
            $insercion = $this->pdo->prepare("delete from tbl_empleados whereid=:id");
            $insercion->bindParam(':id', $d);
            return $insercion->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function edit($i,$n,$e,$t,$c,$a){
        try{
            $insercion = $this->pdo->prepare("update empleados set nombre=:nombre, edad=:edad, telefono=:telefono, cargo=:cargo, avatar=:avatar where id=:id");
            $insercion->bindParam(':id', $i);
            $insercion->bindParam(':nombre', $n);
            $insercion->bindParam(':edad', $e);
            $insercion->bindParam(':telefono', $t);
            $insercion->bindParam(':cargo', $c);
            $insercion->bindParam(':avatar', $a);
            $insercion->execute();
            return true;
        }catch (PDOException $error){
            die($error->getMessage());
        }
    }
    public function save($n,$e,$t,$c,$a){
        try{
            $insercion = $this->pdo->prepare("INSERT INTO empleados(nombre,edad,telefono,cargo,avatar) VALUES(:nombre, :edad, :telefono, :cargo, :avatar)");
            $insercion->bindParam(':nombre', $n);
            $insercion->bindParam(':edad', $e);
            $insercion->bindParam(':telefono', $t);
            $insercion->bindParam(':cargo', $c);
            $insercion->bindParam(':avatar', $a);
            return $insercion->execute();
        }catch (PDOException $error){
            die($error->getMessage());
        }
    }
    public function update($id, $nombre, $edad, $telefono, $cargo, $avatar) {
        $query = "UPDATE empleados SET nombre = :nombre, edad = :edad, telefono = :telefono, cargo = :cargo, avatar = :avatar WHERE id = :id";
        $insercion = $this->pdo->prepare($query);
        $insercion->bindParam(":id", $id);
        $insercion->bindParam(":nombre", $nombre);
        $insercion->bindParam(":edad", $edad);
        $insercion->bindParam(":telefono", $telefono);
        $insercion->bindParam(":cargo", $cargo);
        $insercion->bindParam(":avatar", $avatar);
        return $insercion->execute();
    }
}