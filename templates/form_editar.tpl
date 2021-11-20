<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Modo Edición
			</h3>
		</div>
	</div>
</div>

<form action="{BASE_URL}editar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Marca:</label>
                <input name="marca" type="text" class="form-control" value="{$marca}">
            </div>
        </div>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Modelo:</label>
                <input name="modelo" type="text" class="form-control" value="{$modelo}">
            </div>
        </div>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Color:</label>
                <input name="color" type="text" class="form-control" value="{$color}">
            </div>
        </div>
    <div class="col-3">
        <div class="form-group">
            <label>Talle:</label>
                <select name="talle" class="form-control">
                    <option value="6" {if $talle eq 6}selected{/if}>6us</option>
                    <option value="7" {if $talle eq 7}selected{/if}>7us</option>
                    <option value="8" {if $talle eq 8}selected{/if}>8us</option>
                    <option value="9" {if $talle eq 9}selected{/if}>9us</option>
                    <option value="10" {if $talle eq 10}selected{/if}>10us</option>
                    <option value="11" {if $talle eq 11}selected{/if}>11us</option>
                </select>
            </div>
        </div>
    </div>
<input name="id" type="hidden" value="{$id}">
<button type="submit" class="btn btn-primary mt-2">Editar</button>
</form>
    
