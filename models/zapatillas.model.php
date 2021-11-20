<?php

class ZapatillasModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_sneakergame;charset=utf8', 'root', '');
    }

    function ObtenerTodasSneakers() {
        $query = $this->db->prepare('SELECT * FROM sneakers');
        $query->execute();
    
        $sneakers = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $sneakers;
    
    }

    function ObtenerSneakers($id) {
        $query = $this->db->prepare('SELECT * FROM sneakers WHERE id = ?');
        $query->execute(array($id));
    
        $sneakers = $query->fetch(PDO::FETCH_OBJ);
        
        return $sneakers;
    }

    function InsertarSneakers($marca, $modelo, $color, $talle){
    
        $query = $this->db->prepare('INSERT INTO sneakers (marca, modelo, color, talle) VALUES (?, ?, ?, ?)');
        $query->execute([$marca, $modelo, $color, $talle]);
    
        return $this->db->lastInsertId();
    
    }

    function EliminarSneakers($id){
        $query = $this->db->prepare('DELETE FROM sneakers WHERE id=?');
        $query->execute([$id]);
    
    }

    function ModificarSneakers($marca, $modelo, $color, $talle, $id) {
        $query = $this->db->prepare('UPDATE sneakers SET marca = ?, modelo = ?, color = ?, talle = ? WHERE id = ?');
        $query->execute([$marca, $modelo, $color, $talle, $id]);
    }
}