<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script data-ad-client="ca-pub-3040020896206532" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <title>Inicio</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
   <link rel="shorcut icon" type="image/x-icon" href="Bushelp_Icon.ico" />
  </head>
  <body>

      <form action="validarLogin.php" class="login-form">
        <h1>Login</h1>

        <div class="txtb">
          <input type="email" name="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" placeholder="Email"/>
        
        </div>

        <div class="txtb">
          <input type="password" name="Contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Debe contener al menos un número,una letra mayúscula, una letra minúscula y 5 o más caracteres " placeholder="Contraseña">
        
        </div>

        <input type="submit" class="logbtn" value="Login">
        <div class="bottom-text">
          Entrar como,<a href="usuarioAnónimo.php"> Usuario Anónimo</a>
        </div> 
      </form>

      <form class="handball-form">
        
        <h1> HANDBALLMANAGER </h1>

        <div class="txtb"> 
          <label> Trabajo realizado por: Jose Manuel Morales Palomo </label>
        </div>
        <div class="txtb">
          <label> Proyecto final del colegio San José </label>
        </div>
      </form>
      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
  </body>
</html>
