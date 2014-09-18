<!DOCTYPE html>

<html lang="es">
    
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Style.css">
        
        <title></title>
 
    </head>
    <body>
           

<div id="plataforma">
        <h3>Plataforma </h3>
    <p>Seleccionar la plataforma en la que va a ejecutar el desarrollo</p>
    <form method="get" id="formavanzado" action="proceso.php">
           <input type="checkbox" name="plataforma[]" value="web" class="plata">web</input>
           <input type="checkbox" name="plataforma[]" value="escritorio" class="plata">Escritorio</input>

  </div>
 <div id="tipoAplicativo">
     <h3>Tipo de Aplicativo</h3>
     <p>Seleccione el tipo de aplicativo a desarrollar</p>
      <input type="checkbox" name="tipoapp[]" value="cliente-servidor" class="tipoa">Cliente-servidor</input><br>
      <input type="checkbox" name="tipoapp[]" value="hosting-web" class="tipoa">Hosting-Web</input>

 </div>
 <div id="lenguajes">
    <h3>Lenguaje de programacion</h3>
    <p>Seleccione el lenguaje en el cual desea programar</p>
    <input type="checkbox" name="lprog[]" value="java" class="l">Java</input><br>
    <input type="checkbox" name="lprog[]" value="php" class="l">PHP</input><br>
    <input type="checkbox" name="lprog[]" value="jsp" class="l">JSP</input><br>
    <input type="checkbox" name="lprog[]" value=".net" class="l">.NET /.ASP</input><br>
    <input type="checkbox" name="lprog[]" value="c#" class="l">C#</input><br>
    <input type="checkbox" name="lprog[]" value="Phyton" class="l">Phyton</input><br>
</div>


 <div id="basesDatos">
    <h3>Bases de Datos</h3>
    <p>Seleccione un motor de base de datos que se adapte a su desarrollo</p>
    <input type="checkbox" name="bd[]" value="mysql" class="bd"> MYSQL</input><br> 
    <input type="checkbox" name="bd[]" value="oracle"class="bd"> Oracle</input><br>
    <input type="checkbox" name="bd[]" value="db2"class="bd"> DB2</input><br>
    <input type="checkbox" name="bd[]" value="sqlserver" class="bd"> SQL Server</input><br>

</div>

   <div id="alojamiento">  
<!--      <h3>Alojamiento</h3>  
     <p>seleccione el tipo de alojamiento</p>
      <input type="checkbox" name="alojamiento[]" value="Compartido" class="aloja">Compartido</input><br> 
      <input type="checkbox" name="alojamiento[]" value="dedicado" class="aloja">Dedicado</input><br> 
      <input type="checkbox" name="alojamiento[]" value="nube" class="aloja">Nube</input><br>  -->
       <input type="submit" name="envia" value="Enviar"></input> 
        </form>
       </div>
    </body>
</html>
