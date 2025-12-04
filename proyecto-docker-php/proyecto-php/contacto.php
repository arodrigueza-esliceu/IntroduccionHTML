<?php
$pageTitle = "Contacto";
require __DIR__ . "/includes/header.php";
?>


<h1>Contacta Con Nosotros</h1>

<main>
  <h1>Contacto</h1>
  <form action="create-contact.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

    <button type="submit">Enviar</button>
  </form>
</main>


<?php
require __DIR__ . "/includes/footer.php";