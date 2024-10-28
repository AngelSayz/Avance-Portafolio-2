<?php include 'includes/header.html'; ?>
<body>
    <section>
        <h2>Contacto</h2>
        <img src="" alt="">
    </section>
    <section>
        <h2>Llena el formulario de contacto</h2>
        <form method="post" action="contactanos.php">
            <fieldset>
                <legend>Información personal</legend>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div>
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                </div>

            </fieldset>
            <fieldset>
                <legend>Información de la propiedad</legend>
                <div>
                    <label for="Vende Compra">Vende o compra:</label>
                    <select id="vencom" name="vencom">
                        <option value="vende">Vende</option>
                        <option value="compra">Compra</option>
                    </select>
                </div>
                <div>
                    <label for="tipo">Cantidad</label>
                    <input type="number" id="cantidad" name="cantidad" required>
                </div>
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <div>
                    <label for="telefono">Telefono</label>
                    <input type="tel" id="telefono" name="telefono" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </fieldset>
            <div>
                <button type="submit">Contactar</button>
            </div>
        </form>
    </section>
</body>

</html>
<?php include 'includes/footer.php'; ?>a