<?php

include_once('models/zapatillas.model.php');
include_once('views/zapatillas.view.php');

class ZapatillasController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ZapatillasModel();
        $this->view = new ZapatillasView();
    }
    public function ListarSneakers() {
        $zapatillas = $this->model->ObtenerTodasSneakers();
        $this->view-> ListarSneakers($zapatillas);
    }

    function AgregarSneakers() {
        $marca = $_REQUEST['marca'];
        $modelo = $_REQUEST['modelo'];
        $color = $_REQUEST['color'];
        $talle = $_REQUEST['talle'];
    
        $this->model->InsertarSneakers($marca, $modelo, $color, $talle);
    
        header("Location: " . BASE_URL);
    }

    function BorrarSneakers($id){
        $this->model->EliminarSneakers($id);
    
        header("Location: " . BASE_URL);
    }
}