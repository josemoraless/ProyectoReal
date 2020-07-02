<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
 <link rel="shorcut icon" type="image/x-icon" href="Bushelp_Icon.ico" />

  </head>
  <body>

      <form action="conexionBaseDatos.php" class="login-form">

        <h1>Registro</h1>

        <div class="txtb">
          <input type="text" name="Nombre" required pattern="[a-zA-Záéíóú  Ññ]{2,254}" placeholder="Nombre"/>
         
        </div>

        <div class="txtb">
          <input type="text" name="Apellido" required pattern="[a-zA-Záéíóú  Ññ]{2,254}" placeholder="Apellido"/>
          
        </div>
          <div class="txtb">
          <input type="tel" name="Telefono" required pattern="[0-9]+" placeholder="Teléfono Móvil" />
          
        </div>

          <div class="txtb">
          <input type="email" name="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" placeholder="Email"/>
        
        </div>
        
        <div class="txtb">
          <label for="Tipo_Usuario">Tipo Usuario:</label>
            <select name="Tipo_Usuario">
              <option value="Admin">Admin</option>
              <option value="Entrenador">Entrenador</option>
              <option value="Arbitro">Arbitro</option>
            </select>
                    
        </div>

        <input type="submit" class="logbtn" value="Guardar y finalizar">


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
