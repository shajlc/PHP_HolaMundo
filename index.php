<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //phpinfo();
        echo 'Hola Mundo <h1>Hola Caracola</h1>';/*sirve para mostrar por pantalla en php sin embargo sino la
        pusiese tambien lo pondria puesto que estamos en html y es texto plano*/
        echo '<h1>El viernes 4 nos vamos a la \'Madrid Games Week\'</h1>';
        ?>
        <br/>
        <h1>
            <?php 
                    define(miConstante, 'El viernes 4 nos vamos a la \'Madrid Games Week\'');
                    echo miConstante;
                    $var1 = '25cetys';
                    $var2 = 'dam10';
                    $var3 = '5';
                    //$total = $var1 + $var2 + $var3;
                    $total = $var1 . $var2 . $var3;
                    echo  $total;
                    
            ?>
        </h1>  
            
        <h1>
            <?php
            
                    define("EurPta",166.386);
                    define("PtaEur",1/166.386);
                    define("Cadena", "12Esta constante es una cadena");
                    define("Cadena2","12.54Constante con punto decimal");
                    
                    echo "Valor de la constante EurPta: ", EurPta,"<br/>";
                    echo "Valor de la constante PtaEur: ". PtaEur."<br/>";
            ?>
        </h1>
        
        
        <h1>
            <?php
                        error_reporting(E_ERROR | E_NOTICE | E_WARNING);// tambien podemos poner E_ALL y sustituira a todos los anteriores
                        VAR1;
                        echo __FILE__. '<br/>';
                        echo __LINE__. '<br/>';
                        echo PHP_VERSION. '<br/>';
                        echo PHP_OS. '<br/>';
            ?>
        </h1>
        
        <h1>
            <?php
                        error_reporting(E_ERROR );
                        $nota = 10;
                        $Nota = 7;
                        echo $nota." ".$Nota."<br/>";
                        echo $nota+$Nota;
            ?>
        </h1>
        
        <h1>
            <?php
                        error_reporting(E_ERROR );
                        $nota = "10hola";
                        $Nota = "7adios ";
                        echo $nota+$Nota;
            ?>
        </h1>
        
        <h1>
            <?php
                        error_reporting(E_ERROR );
                        $nota = "Bases de datos";
                        $ref = &$nota;
                        echo $nota." ".$ref."<br/>";
                        $nota = "Programación";
                        echo $nota." ".$ref."<br/>";
            ?>
        </h1>
        
        <h1>
            <?php
                        error_reporting(E_ERROR );
                        $nota = "Bases de datos";
                        static  $asignatura = 'Programación';
                        echo $asignatura."<br/>";
                        $asignatura = "PSP";
                        echo $asignatura."<br/>";
            ?>
        </h1>
        
        <h1>
            <?php
                        function sinEstaticas(){
                            $a = 0;
                            $b = 0;
                            echo 'El valor inicial de $a:',$a,'<br/>';
                            echo 'El valor inicial de $b:',$b,'<br/>';
                            $a += 5;
                            $b -= 7;
                            echo 'El nuevo valor de $a:',$a,'<br/>';
                            echo 'El nuevo valor de $b:',$b,'<br/>';
                        }
                        function conEstaticas(){
                            $a = 0;
                            static $b = 0;
                            echo 'El valor inicial de $a:',$a,'<br/>';
                            echo 'El valor inicial de $b:',$b,'<br/>';
                            $a += 5;
                            $b -= 7;
                            echo 'El nuevo valor de $a:',$a,'<br/>';
                            echo 'El nuevo valor de $b:',$b,'<br/>';
                        }
                        print("Esta es la primera llamada a sinEstaticas()<br/>");
                        sinEstaticas();
                        print("Estabes la segunda llamada sinEstaticas()<br/>");
                        print("Debe dar el mismo resultado que la llamada anterior<br/>");
                        sinEstaticas();
                        print("Esta es la primera llamada a conEstaticas()<br/>");
                        conEstaticas();
                        print("Estabes la segunda llamada conEstaticas()<br/>");
                        print("Debe dar el mismo resultado que la llamada anterior<br/>");
                        conEstaticas();
                        
            ?>
        </h1>
        
        <h1>
            <?php
$str = <<<aaa
Ejemplo de cadena <br/>
Expandiendo múltiples líneas <br/>
Usando sintaxis de documento incrustado.<br/>
aaa;
            echo $str;
            ?>
        </h1>
        
        <h1>
            <?php
                        $a = 12;
                        $b = '15.25abc';
                        $c = $a +$b;
                        echo 'La variable $c es de tipo '.gettype($c);
            ?>
        </h1>
        
        <h1>
            <?php
                        
                        $b = '15.25abc';
                        echo 'La variable $b tiene '. strlen($c).' caracteres';
            ?>
        </h1>
        
        <h1>
            <?php
                  error_reporting(E_ERROR );
                  $a = 1;
                  $b = 2;
                  Function Sum(){
                      global $a, $b;
                      $b = $a + $b;
                      echo "$b vale =  $b <br/>";
                  }
                  Sum();
                  echo $b;
            ?>
        </h1>
        
        
        <h1>
            <?php
                //Introduccion de arrays que en ellos puede haber variables de distintos tipos
                  error_reporting(E_ERROR );
                  $ciudad[] = 25;
                  $ciudad[] = "México";
                  $ciudad[] = "Roma";
                  $ciudad[] = "Sevilla";
                  $ciudad[] = "Londres";
                  echo $ciudad[2];
                  echo gettype($ciudad[0]);//Esta función te da el tipo de variable que hay en esa posición del array
            ?>
        </h1>
        
        <h1>
            <?php
                //Introduccion de for y arrays
                  error_reporting(E_ERROR );
                  $ciudad["España"] = "Madrid";
                  $ciudad["Francia"] = "Paris";
                  $ciudad["Italia"] = "Roma";
                 echo "La ciudad es ".$ciudad["España"];
            ?>
        </h1>
        
        <h1>
            <?php
                //Introduccion de for y arrays
                  error_reporting(E_ERROR );
                  $calendario[] = array(1, "enero", 31, 2019);
                  $calendario[] = array(2, "febrero", 28, 2019);
                  $calendario[] = array(3, "marzo", 31, 2019);
                  $calendario[] = array(4, "abril", 30, 2019);
                  $calendario[] = array(5, "mayo", 31, 2019);
                  
                  while (list($clave, $valor) = each($calendario)){
                      $cadena = $valor [1];
                      $cadena .= " es el mes número " . $valor[0];
                      $cadena .= " y tiene " . $valor[2] . " días<BR>";
                      echo $cadena;
                  }
            ?>
        </h1>
        
<!--        <h1>
            <?php
                //Introduccion de for y arrays
//                  error_reporting(E_ERROR );
//                  $nota["Luis"]["Acceso a datos"] = 10;
//                  $nota["Irene"]["LOL"] = "MH";
//                  $nota["Irene"]["Acceso a datos"] = 2;
//                  
//                  while (list($clave, $valor) = each($nota)){
//                      
//                  }
            ?>
        </h1>-->
        
        <h1>
            <?php
                
                  error_reporting(E_ERROR );
                  $semana = array("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo");
                  echo count($semana)."<br/>"; //7
                  //situamos el puntero en el primer elemento
                  reset($semana);
                  echo current($semana)."<br/>"; //lunes
                  next($semana);
                  echo pos($semana)."<br/>"; //martes
                  end($semana);
                  echo pos($semana)."<br/>"; //domingo
                  prev($semana);
                  echo current($semana)."<br/>"; //sábado
            ?>
        </h1>



    <h2>---------------------11 de Octubre de 2019-------------------------</h2>
            <?php
                
                  error_reporting(E_ERROR );
                  $dato1= 20;
                  $dato2= 50;
//                  if ($dato1 > $dato2){
//                      echo 'dato 1 es mayor que dato 2';
//                  }
//                    else {
//                      echo 'Dato 2 mayor que dato 1';
//                     }
            ?>
               

                <h1> Metiendo HTML entre medias </h1>
                <?php
                    if ($dato1 > $dato2){
                 ?>
                     <h1> Dato 1 mayor al dato 2 </h1>

                 <?php
                     }else{
                 ?>   
                     <h1> Dato 2 mayor al dato 1 </h1>
                 <?php
                 }
                 ?> 
      
        
        
    </body>
</html>
