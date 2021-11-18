<?php


class ZapatillasView {

    function ListarSneakers($sneakers) {
        include './templates/header.php';
        include './templates/form_alta.php';
    
        
        echo '<ul class="list-group mt-5">';
        foreach($sneakers as $sneaker){
            echo "<li class='list-group-item'> Marca: $sneaker->marca Modelo: $sneaker->modelo Color: $sneaker->color Talle US: $sneaker->talle <button class='btn btn-danger'><a href='borrar/$sneaker->id'>Borrar</a></button></li>";}
        echo "</ul>";
    
        include './templates/footer.php';
    }

}