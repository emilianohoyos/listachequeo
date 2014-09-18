       <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
        <link rel="stylesheet" href="Style.css">
        </head>
<?php
if(!empty($_GET['plataforma'] )) {
    foreach($_GET['plataforma'] as $check) {
            // echo $check;
            $plataform = $check;

    }
}
if(!empty($_GET['tipoapp'] )) {
    foreach($_GET['tipoapp'] as $check) {
            // echo $check; 
            $tipoapli = $check;
}
}
if(!empty($_GET['lprog'] )) {
    foreach($_GET['lprog'] as $check) {
            // echo $check;
            $lengpr = $check;
    }
}
if(!empty($_GET['bd'] )) {
    foreach($_GET['bd'] as $check) {
            // echo $check; 
            $basedatos = $check;
    }
}
echo "<h1>Su seleccion</h1>";
echo "<div id='contenedor'><ul><li><h2>Plataforma</h2></li><li><h2>Tipo de aplicación</h2></li><li><h2>Lenguaje de Programación</h2></li><li><h2>Base de datos</h2></li></ul> ";
echo "<ul><li>".$plataform."</li></p>";
echo "<li>".$tipoapli."</li>";
echo "<li>".$lengpr."</li>";
echo "<li>".$basedatos."</li></ul></div>";
if ($plataform == "" || $tipoapli == "" || $lengpr == "" || $basedatos == "")  {
    echo "Verifique su selecci髇";
}else{

 if ($plataform == "escritorio" && $tipoapli == "cliente-servidor" && $lengpr == "java" && $basedatos == "mysql") { 
    echo "<h1>La arquitectura recomendada para su aplicativo es:</h1>";
    echo "<p>Servidor Local dedicado</p>";
    echo "<p>Disco duro: 250Gbs</p>"; 
    echo "<p>Memoria Ram : 6Gbs\n<7p>";
    echo "<p>Licencia: GNU Linux CentOS x86|x64</p>";
   }
 else if ($plataform == "web" && $tipoapli == "hosting-web" && $lengpr == "php" && $basedatos == "mysql") { 
    echo "<h1>La arquitectura recomendada para su aplicativo es:</h1>";   
    echo "<p>Hosting Compartido</p>";
    echo "<p>Almacenamiento min: 50Gbs</p>"; 
    echo "<p>Transferencia: 1000Gbs min ó Ilimitado</p>";
    echo "<p>Licencia: GNU Linux CentOS</p>";
    echo "<p>Servidor Apache</p>";
   }
    else if ($plataform == "escritorio" && $tipoapli == "cliente-servidor" && $lengpr == "Phyton" && $basedatos == "oracle") { 
    echo "<h1>La arquitectura recomendada para su aplicativo es:</h1>";    
    echo "<p>Servidor Dedicado ó VPS</p>";
    echo "<p>Disco duro: 150Gbs</p>"; 
    echo "<p>Memoria Ram : 6Gbs</p>";
    echo "<p>Licencia: GNU Linux CentOS - x86|x64</p>";
    echo "<p>Licencia motor Oracle apartir de 60GB</p>";
   }
    else if ($plataform == "escritorio" && $tipoapli == "cliente-servidor" && $lengpr == "c#" && $basedatos == "sqlserver") { 
    echo "<h1>La arquitectura recomendada para su aplicativo es:</h1>";    
    echo "<p>Servidor Local Dedicado ó VPS</p>";
    echo "<p>Disco duro: 150Gb Min</p>"; 
    echo "<p>Memoria Ram : 6Gbs Min</p>";
    echo "<p>Licencia: Windows Server 2012 R2 x86|x64</p>";
    echo "<p>Licencia motor SQLSERVER 2012</P>";

   }   else{
   echo "<div id='noDisp'><div id='error'>!</div>En este momento no tenemos una arquitectura recomendada para su seleccion</div>";
   }
   }
   echo "<div id='ctrBtn'><div class='button'><a href='index.php'>Volver a la seleccion</a></div></div>";
?>