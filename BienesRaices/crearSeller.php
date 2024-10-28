<?php
include 'includes/header.php';
require '../BienesRaices/includes/config.php/db.php';

?>
<section>
 <h2>Crear vendedor</h2>
 <div>
    <form action="showData.php" method="POST">
        <fieldset>
            <legend>Informacion personal</legend>
            <div>
            <label for="id">ID</label>
                <input type="number" id="id" name="id" placeholder="ID">
            </div>  
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
            <div>
                <label for="telefono">Telefono</label>
                <input type="number" id="telefono" name="telefono" placeholder="Telefono">
            </div>
            <div>
                <button type="submit">Crear vendedor</button>
            </div>
        </fieldset>
    </form>
 </div>
</section>  

<?php include 'includes/footer.php'; ?>
