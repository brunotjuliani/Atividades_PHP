<html>

  <head>

    <title>reCAPTCHA demo: Simple page</title>

     <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </head>

  <body>

    <form action="cadastrar.php" method="POST">

      <!-- essa div eh onde vai aparecer -->

      <div class="g-recaptcha" data-sitekey="6Lcj5hQdAAAAAIJbkt3qNk_hvhSED6b-GzfIxLeF"></div>

      <br/>

      <input type="email" name="inputEmail">

      <button type="submit">Enviar</button>

    </form>

  </body>

</html>