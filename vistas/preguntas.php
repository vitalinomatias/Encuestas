<div class="container">
    <h1>Encuesta</h1>
    <div class="row">
        <div class="form-group">
        <label>1. Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label>2. Genero</label>
        <select name="genero" class="form-control">
            <option value="mujer">Mujer</option>
            <option value="hombre">Hombre</option>
        </select>
    </div>
    <div class="form-group">
        <label>3. ¿Tienes algún hobby?</label>
        <select name="hobby" id="hobby" class="form-control">
            <option value="ninguno">Ninguno</option>
            <option value="deporte">Deporte</option>
            <option value="musical">Musical</option>
            <option value="cocina">Cocina</option>
            <option value="literario">Literario</option>
            <option value="manualidades">Manualidades</option>
            <option value="juegos">Juegos</option>
            <option value="modelismo">Modelismo</option>
            <option value="baile">Baile</option>
            <option value="cine">Cine</option>
            <option value="otro">Otro</option>
        </select>
    </div>
    <div class="form-group">
        <label>¿Cuánto tiempo le dedicas al mes? (expresar en minutos)</label>
        <input type="text" name="tiempo" id="tiempo" disabled class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="votar" value="Votar" class="btn btn-sm btn-primary">
        <input type="submit" name="siguiente" value="Siguiente" class="btn btn-sm btn-primary">
    </div>
    </div>
</div>

