<!-- contacto.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="stylescrumb.css">
  <title>Formulario de Contacto</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

  <!-- Importar el Navbar -->
  <div class="navbar-container">
    <?php include 'navbar.php'; ?>
  </div>

  <!-- Contenido principal (formulario de contacto) -->
  <div class="container">
    <h2>Contacto</h2>
    <form class="contact-form" action="procesar_formulario.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" required>

      <label for="telefono">Teléfono:</label>
      <input type="number" pattern="[0-9]{10}" name="telefono" required>

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" required></textarea>
      <div class="g-recaptcha" data-sitekey="6Lfz_WopAAAAABgOqghJDZdyk_etpjacTDlie70P"></div>


      <input type="submit" value="Enviar">
    </form>
  </div>

  <!-- Importar el Footer -->
  <div class="footer-container">
    <?php include 'footer.php'; ?>
  </div>

</body>
</html>
