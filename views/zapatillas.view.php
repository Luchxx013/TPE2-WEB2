<?php

require_once('libs/Smarty.class.php');

class ZapatillasView {

    function ListarSneakers($sneakers) {
        $smarty = new Smarty();

        $smarty->display ('templates/header.tpl');
        $smarty->display ('templates/form_alta.tpl');
    
        echo '<ul class="list-group mt-5">';
        foreach($sneakers as $sneaker){
            echo "<li class='list-group-item'> Marca: $sneaker->marca Modelo: $sneaker->modelo Color: $sneaker->color Talle US: $sneaker->talle <button class='btn btn-danger'><a href='borrar/$sneaker->id'>Borrar</a></button></li>";}
        echo "</ul>";
    
        $smarty->display ('templates/footer.tpl');
    }

}