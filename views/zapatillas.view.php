<?php

require_once('libs/Smarty.class.php');

class ZapatillasView {

    function ListarSneakers($sneakers) {
        $smarty = new Smarty();

        $smarty->display ('templates/header.tpl');
        $smarty->display ('templates/form_alta.tpl');
    
        echo '<ul class="list-group mt-5">';
        foreach($sneakers as $sneaker) {
            echo "<li class='list-group-item'> Marca: $sneaker->marca Modelo: $sneaker->modelo Color: $sneaker->color Talle US: $sneaker->talle <a href='borrar/$sneaker->id'><button type='button' class='btn btn-danger'>Borrar</button></a><a href='editar_sneaker/$sneaker->id'><button type='button' class='btn btn-info'>Editar</button></a></li>";}
        echo "</ul>";
    
        $smarty->display ('templates/footer.tpl');
    }

    function EditarSneakers($id, $marca, $modelo, $color, $talle) {
        $smarty = new Smarty();

        $smarty->assign('id', $id);
        $smarty->assign('marca', $marca);
        $smarty->assign('modelo', $modelo);
        $smarty->assign('color', $color);
        $smarty->assign('talle', $talle);

        $smarty->display ('templates/header.tpl');
        $smarty->display ('templates/form_editar.tpl');
        $smarty->display ('templates/footer.tpl');
    }

}