<?php
    require_once "Models/empleadoModel.php";
    class EmpleadoController {
        private $empleadoModel;
    public function __construct() {
        $this->empleadoModel = new Empleado();
    }
    public function index() {
        $videojuegos = $this->empleadoModel->getAll();
        require "Views/listar.php";
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $telefono = $_POST['telefono'];
            $cargo = $_POST['cargo'];
            $avatar = $_POST['avatar'];
            $this->empleadoModel->save($nombre, $edad, $telefono, $cargo, $avatar);
            header("Location: index.php");
        } else {
            require "Views/create.php";
        }
    }
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $telefono = $_POST['telefono'];
            $cargo = $_POST['cargo'];
            $avatar = $_POST['avatar'];
            $this->empleadoModel->update($id, $nombre, $edad, $telefono, $cargo, $avatar)
            ;
            header("Location: index.php");
        } else {
            $videojuego = $this->empleadoModel->getById($id);
            require "Views/edit.php";
        }
    }
    public function delete($id) {
        $this->empleadoModel->delete($id);
        header("Location: index.php");
    }
}