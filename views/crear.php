<!DOCTYPE html>
<html>
<!-- ...-->
<!-- FORMULARIO CREAR -->
<h2>Crear</h2>

<form method="POST" action="index.php?accion=crear"> <!-- Aquí está la clave de recoger por GET la acción -->

    <label for="nombre">Nombre</label><br>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="especie">Especie</label><br>
    <input type="text" id="especie" name="especie" required><br>

    <label for="peligrosidad">Peligrosidad</label><br>
    <select id="peligrosidad" name="peligrosidad" required>
        <option value="alto">Alto</option>
        <option value="medio">Medio</option>
        <option value="bajo">Bajo</option>
    </select><br><br>

    <label for="salud">Salud</label><br>
    <input type="number" id="salud" name="salud"><br>

    <label for="tipo">Tipo de criatura</label><br>
    <select id="tipo" name="tipo" required>
        <option value="">--Selecciona--</option>
        <option value="marina">Marina</option>
        <option value="terrestre">Terrestre</option>
        <option value="voladora">Voladora</option>
    </select><br><br>

    <label for="profundidad">Profundidad (si marina)</label><br>
    <input type="number" id="profundidad" name="profundidad" min="0"><br><br>

    <label for="terreno">Terreno (si terrestre)</label><br>
    <input type="text" id="terreno" name="terreno"><br><br>

    <label for="envergadura">Envergadura alas (si voladora)</label><br>
    <input type="number" id="envergadura" name="envergadura"><br><br>

    <input type="submit" value="Guardar">
</form>


</body>
</html>

