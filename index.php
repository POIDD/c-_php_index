<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/css.css">
    <title>Document</title>
</head>
<body>
     <div class="container" >
      
          <div class="lbl-menu" >
                <label for="radio1">1)menor mayor</label>
                <label for="radio2">2)ecuaciones </label>
                <label for="radio3">3)calculadora</label>
                <label for="radio4">5)menor intermedio mayor</label>
                <label for="radio5">6)cantidad de digitos</label>
                <label for="radio6">7)mayor menor de cuatro #</label>
                <label for="radio7">8) kl a mtrs</label>
                <label for="radio8">11)tablas </label>
                <label for="radio9">12)binarios</label>

          </div>

          <div class="content" >

             <input type="radio" name="radio" id="radio1">
             <div class="tab1" >
                    <h2>1. menor mayor</h2>
                    <b><p>
                        <?php
                        $N1=5;
                        $N2=2;
                            if($N1<$N2)// oirganiza el caso donde el numero 1 es menor que el numero 2 
                            {
                            echo(" el numero mayor es:$N2<br>");//muestra los numeros organizados de mayor a menor 
                            echo(" el numero menor es:$N1<br>");
                            }
                            if ($N1>$N2)// oirganiza el caso donde el numero 1 es mayor que el numero 2 
                            {
                            echo(" el numero menor es:$N2<br>");//muestra los numeros organizados de mayor a menor 
                            echo ("el numero mayor es:$N1<br>");
                            }
                            if($N1==$N2)// oirganiza el caso donde los  dos numeros son iguales 
                            {
                            echo("los numeros son iguales:<br>");	//muestra que son iguales 
                            }
                            

                        ?>
                    </p></b>
             </div>

             <input type="radio" name="radio" id="radio2">
             <div class="tab2" >
                 <h2>2. ecuaciones</h2>
                 <b><p>
                      <?php
                        $v=12;
                        $e=3;
                        $r=12;
                        $i=5;
                        $t=13;
                        $m=4;
                        $b=9;
                        $x=2;
                        
                        
                            echo (" 1): y=mx+b <br>") ;
                            $y=$m*$x+$b;
                            echo("el resultado es y=$y <br>"); //ingresamos las variables para encontar y
                            
                            echo (" 2): v=e/t<br>");
                            $v=$e/$t;
                            echo"el resultado es v=$v <br>";//ingresamos las variables para encontar v
                        // -----------------------------------------
                            echo " 3): v=i.r <br>";
                            $v=$i*$r;
                            echo"el resultado es v=$v <br>";//ingresamos las variables para encontar v
                        //  ---------------------------------------
                        echo " 4): i=v/r <br>";
                            $i=$v/$r;
                            echo"el resultado es i=$i <br>";//ingresamos las variables para encontar i
                            //----------------------------------------
                            echo " 5): r=e/t <br>";
                            $r=$v/$i;
                            echo"el resultado es r=$r <br>";//ingresamos las variables para encontar r
                            
                        //------------------------------------------------
                        echo " 6): t=e/v";
                            $t=$e/$v;
                            echo"el resultado es t=$t <br>";//ingresamos las variables para encontar t
                        //----------------------------------------
                        echo " 7): e=v*t <br>";
                            $e=$v*$t;
                            echo"el resultado es e=e <br>";//ingresamos las variables para encontar e
                        
                        ?>
                 </p></b>
             </div>

             <input type="radio" name="radio" id="radio3">
             <div class="tab3" >
                 <h2>3. calculadora</h2>
                 <b><p>
                    <?php
                    $a=5;
                    $b=7;
                    
                    echo"CALCULADORA EN PHP <br><br>" ;
                    
                    echo"1.suma <br>" ;
                    echo"2.resta <br>";
                    echo"3.multiplicacion <br>";
                    echo"4.divicion <br>";
                    echo"5.modulo <br> <br>";

                    $sum=$a+$b;
                        echo"la suma es:$sum <br>";
                    //---------------------------------------------
                    $rest=$a-$b;
                    echo"la resta es:$rest <br>";
                    
                    //--------------------------------------------- 
                        $multi=$a*$b;
                        echo"la multiplicacion es: $multi <br>";
                        
                    //---------------------------------------------
                        $divi=$a/$b;
                        echo"la dividir es: $divi <br>";
                        
                    //---------------------------------------------
                    $modu=$a % $b;
                        echo"el modulo es:$modu <br>";
                        //---------------------------------------------
                        
                    ?>
                    </p></b>
             </div>

             <input type="radio" name="radio" id="radio4">
             <div class="tab4" >
                 <h2>5. menor intermedio mayor</h2>
                  <b><p>
                  <?php
  $a=2;
  $b=1;
  $c=5;
	  //este caso acomoda tres numeros cualquiera  de menor $a mallor  donde $a= al primer numero ingresado por teclado.
	
 	echo"<br><br>** PROGRAMA QUE ORDENA TRES NUMEROS** ";
 	echo"<br>---------------------------------------------------------- -------------";
 	
 	 
 	 if($a<$b & $a<$c ) /* hace el recorrido  donde ($a) es la menor */
	  {
 	 	if($b<$c){ /*hace el recorrido donde $b es menor que $c*/
		
 	 	
 	 	echo "<br> menor:$a <br>";// muestra los resultados 
 	 	echo"<br> medio:$b <br>";
 	 	echo"<br> mayor:$c <br>";;
 	 	  }
 	 	  else{
 	 	  	echo "<br> menor:$a <br>";// muestra los resultados 
 	 	    echo"<br> medio:$c <br>";
 	 	    echo"<br> mayor:$b <br>";
			}
	  }
	  
	  if($b<$a & $b<$c) /* hace el recorrido  donde ($b) es la menor  */
	  {
	  	if($a<$c) /* hace el recorrido  donde ($a) es menor que ($c) */
		  {	echo "<br> menor:$b <br>";// muestra los resultados 
 	 	    echo"<br> medio:$a <br>";
 	 	    echo"<br> mayor:$c <br>";;
		  	
		  }
		  else{
 	 	  	echo "<br> menor:$b <br>";// muestra los resultados 
 	 	    echo"<br> medio:$c <br>";
 	 	    echo"<br> mayor:$a <br>";
			}
	  }
	  
	  if($c<$a & $c<$b ) /* hace el recorrido  donde ($c) es menor que ($a) */
	  {
 	 	if($a<$b) /* hace el recorrido  donde ($a) es menor que ($b) */
		  {
 	 	echo "<br> menor:$c <br>";//muestra los resultados 
 	 	echo"<br> medio:$a <br>";
 	 	echo"<br> mayor:$b <br>";
 	 	  }
 	 	  else{
 	 	  	echo "<br> menor:$c <br>";//muestra los resultados 
 	 	    echo"<br> medio:$b <br>";
 	 	    echo"<br> mayor:$a <br>";
			}
	  } // siguen los iguales 
	  if($a==$b & $a==$c )  //donde los resultados son iguales 
	  {
 	 	if($b==$c){
 	 	echo "<br> igual:$a <br>";//muestra lis resultados 
 	 	echo"<br> igual:$b <br>";
 	 	echo"<br> igual:$c <br>";
 	 	  }
 	 	  else{
 	 	  	echo "<br> igual:$a <br>";
 	 	    echo"<br> igual:$c <br>";
 	 	    echo"<br> igual:$b <br>";
			}
	  }
	  if($a==$b & $a!=$c )
	  {
 	 	if($b==$c){
		
 	 	
 	 	echo "<br> igual: $a <br>" ;
 	 	echo"<br> igual:$b <br>";
 	 	echo"<br> diferente:$c <br>";
 	 	  }
 	 	  else{
 	 	  	echo "<br> igual:$a <br>";
 	 	    echo"<br> igual:$c <br>";
 	 	    echo"<br> diterente:$b <br>";
			}
		}
?>
                  </p></b>
                 
             </div>

             <input type="radio" name="radio" id="radio5">
             <div class="tab5" >
                 <h2>6. cantidad de digitos</h2>
                 <b><p>
                       <?php
                        $num1=10000;
                        echo" MUESTRA LA CANTIDAD DE DIJITOS DE UN NUMERO MENOR A UN MILLON <br>";
                        echo"-------------------------------------------------------------------------------------------------------------- <br><br>";

                        if($num1>=0 and $num1<=9){ // selecciona los numeros con una cifra 
                            echo"el numero tiene una cifra<br> ";
                        }
                        else if($num1>=10 and $num1<=99){// selecciona los numeros con dos cifras 
                            echo"el numero tiene dos cifras <br>";
                        }
                        else if($num1>=100 and $num1<=999){// selecciona los numeros con tres cifras 
                            echo"el numero tiene tres cifras <br>";
                        }
                        else if($num1>=1000 and $num1<=9999){// selecciona los numeros con cuatro cifras 
                            echo"el numero tiene cuatros cifras <br>";
                        }
                        else if($num1>=10000 and $num1<=99999){// selecciona los numeros con  cinco cifras 
                            echo"el numero tiene cinco cifras <br> ";
                        }
                        else if($num1>=100000 and $num1<=999999){// selecciona los numeros con seis cifras
                            echo"el numero tiene seis cifras <br> ";
                        }
                        else if($num1>=1000000){// numero con siete cifras  dan error  
                            echo"error no se permigte numeros mayor a 1000000";
                        }
                        
                    ?>
                 </p></b>
             </div>

             <input type="radio" name="radio" id="radio6">
             <div class="tab6" >
                 <h2>7. mayor menor de cuatro #</h2>
                 <b><p>
                 <?php


                        echo" RECIBE CUATRO NUMEROS Y MUESTRA EL MAYOR Y EL MENOR <br>";
                        echo"----------------------------------------------------<br>";
                        $a =1;
                        $b=4;
                        $c=5;
                        $d=1;
                            
                            
                            if($a==$b and$b==$c and $c==$d) { // condiciones
                                echo "todos son iguales <br>";	// muestra en pantalla
                            }
                            if($a==$b and$b==$c and $c>$d) { // condiciones
                                echo "el primero, segundo y tercero son mayores $c <br>" ; // muestra en pantalla
                                echo "<br>el cuarto es el menor  $d <br>"; // muestra en pantalla	
                            }
                            if($a==$b and$b==$c and $c<$d) { // condiciones
                                echo "el cuarto es el mayor$d <br>" ; // muestra en pantalla
                                echo "<br> el primero, segundo y tercero son menores$c <br>" ; // muestra en pantalla
                            }
                            if($a==$b and$b>$c and $c==$d) { // condiciones
                                echo "el primero y segundo son iguales mayores$a<br>"; // muestra en pantalla
                                echo "<br>el tercero y cuarto son iguales menores$c <br>" ; // muestra en pantalla
                            }
                            if($a==$b and$b<$c and $c==$d){ // condiciones
                                echo "el tercero y cuarto son mayores iguales$c <br>" ; // muestra en pantalla
                                echo "<br>el primero y segundo son menores iguales$a<br>"; // muestra en pantalla
                            }
                            if($a>$b and$b==$c and $c==$d){// condiciones
                                echo "el primero es el mayor$a<br>"; // muestra en pantalla
                                echo "<br>el segundo, tercera y cuarta son menores iguales$b<br>"; // muestra en pantalla
                            }
                            if($a<$b and$b==$c and $c==$d){ // condiciones
                                echo "el segundo, tercero y cuarto son mayores$b<br>"; // muestra en pantalla
                                echo "<br> el primero es el menor$a<br>"; // muestra en pantalla
                            }
                            if($a>$b and$b>$c and $c==$d){ // condiciones
                                echo "el primero es el mayor$a<br>"; // muestra en pantalla
                                echo "<br> el segundo es$b<br>"; // muestra en pantalla
                                echo "<br> tercero y cuarto son iguales menores$c <br>" ; // muestra en pantalla
                            }
                            if($a==$b and$b>$c and $c>$d){ // condiciones
                                echo "el primero y segundo son mayores iguales$a<br>"; // muestra en pantalla
                                echo "<br>el intermedio es$c <br>" ; // muestra en pantalla
                                echo "el menor es$d <br>" ; // muestra en pantalla
                            }
                            if($a==$b and$b<$c and $c<$d){ // condiciones
                                echo "el cuarto es el mayor$d <br>" ; // muestra en pantalla
                                echo "<br>el segundo es$c <br>" ; // muestra en pantalla
                                echo "<br>el primero y segundo son menores iguales $a<br>"; // muestra en pantalla
                            }
                            if($a<$b and$b<$c and $c==$d){ // condiciones
                                echo "el tercero y cuarto son mayores $c <br>" ; // muestra en pantalla
                                echo "<br>el segundo es$b<br>"; // muestra en pantalla
                                echo "<br>el menor es $a<br>"; // muestra en pantalla
                            }
                            if($a>$d and $d>$c and $c==$b){ // condiciones
                                echo "el primero es el mayor$a<br>"; // muestra en pantalla
                                echo "<br>el intermedio  es $d <br>" ; // muestra en pantalla
                                echo "<br>el segundo y tercero son iguales menores$b<br>";// muestra en pantalla
                            }
                            if($a<$b and$b==$c and $c<$d){ // condiciones
                                echo "el cuarto es el mayor$d <br>" ;// muestra en pantalla
                                echo  "<br> el segundo y tercero son iguales menores$b<br>";// muestra en pantalla
                                echo "<br> el menor es$a<br>";// muestra en pantalla
                            }
                            if($a==$d and $d>$c and $c>$b){ // condiciones
                                echo "el primero y cuarto son iguales mayores$a<br>";// muestra en pantalla
                                echo "<br> el intermedio es$c <br>" ;// muestra en pantalla
                                echo "<br> el menor es$b<br>";// muestra en pantalla
                            }
                            if($c>$b and$b>$d and $d==$a) { // condiciones
                                echo "el tercero es mayor$c <br>" ;// muestra en pantalla
                                echo "<br> el intermedio es$b<br>"; // muestra en pantalla
                                echo "<br> el primero y el cuarto son menores iguales$d <br>" ; // muestra en pantalla
                            }
                            if($a<$c and $c<$b and$b==$d) { // condiciones
                                echo "el segundo y cuarto son mayores iguales$b<br>"; // muestra en pantalla
                                echo "<br> el intermedio es$c <br>" ; // muestra en pantalla
                                echo "<br> el menor es$a<br>"; // muestra en pantalla
                            }
                            if($a==$c and $c>$b and$b==$d){ // condiciones
                                echo "el primero y el tercero son mayores iguales$a<br>";// muestra en pantalla
                                echo "<br> el segundo y el cuarto son menores iguales$b<br>"; // muestra en pantalla
                            }
                            if($a==$c and $c<$b and$b==$d){
                                echo "el segundo y cuarto son mayores iguales$b<br>"; // muestra en pantalla
                                echo "<br> el primero y el tercero son menores iguales$a<br>"; // muestra en pantalla
                            }
                            if($a==$d and $d>$b and$b==$c){ // condiciones
                                echo "el primero y cuarto son mayores$a<br>"; // muestra en pantalla
                                echo "<br> el segundo y tercero son menores iguales$b<br>"; // muestra en pantalla
                            }
                            if($a==$d and $d<$b and$b==$c){ // condiciones
                                echo "<br> el segundo y tercero son mayores iguales$b<br>"; // muestra en pantalla
                                echo "<br> el primero y cuarto son menores iguales$a<br>"; // muestra en pantalla
                            }
                            if($a==$d and $d<$c and $c<$b){ // condiciones
                                echo "el mayor es$b<br>";
                                echo "<br> el intermedio es$c <br>" ; // muestra en pantalla
                                    echo "<br> el primero y el cuarto son menores iguales$a<br>"; // muestra en pantalla
                            }
                            if ($a==$b and$b<$d and $d<$c){ // condiciones
                                echo "el tercero es el mayor $c <br>" ; // muestra en pantalla
                                echo "<br> el intermedio es$d <br>" ; // muestra en pantalla
                                echo "<br> el primero y segundo son menores iguales$a<br>"; // muestra en pantalla
                            }
                            if($a==$b and$b>$d and $d>$c){ // condiciones
                                echo "el primero y el segundo son mayores$a<br>"; // muestra en pantalla
                                echo "<br> el intermedio es$d <br>" ; // muestra en pantalla
                                echo "<br> el menor es $c <br>" ; // muestra en pantalla
                            }
                            if($a==$b and$b==$d and $d<$c){ // condiciones
                                echo "el mayor es $c <br>" ; // muestra en pantalla
                                echo "<br> el primero, segundo y cuarto son iguales menores$a<br>"; // muestra en pantalla
                            }
                            if($a==$b and$b==$d and $d>$c){ // condiciones
                                echo "el primero, segundo y cuarto son mayores iguales$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ; // muestra en pantalla
                            }
                            if($a==$c and $c==$d and $d<$b){ // condiciones
                                echo "el mayor es$b<br>"; // muestra en pantalla
                                echo "<br> el primero, tercero y cuarto son iguales menores$a<br>"; // muestra en pantalla
                            }
                            if($a==$c and $c==$d and $d>$b){ // condiciones
                                echo "el primero, tercero y cuarto son mayores$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$b<br>"; // muestra en pantalla
                            }
                            if($c>$a and$a>$b and$b==$d){ // condiciones
                                echo "el tercero es mayor$c <br>" ; // muestra en pantalla
                                echo "<br> el intermedio es $a<br>"; // muestra en pantalla
                                echo "<br> el segundo y tercero son iguales$b<br>";// muestra en pantalla
                            }
                            if($b==$d and $d>$a and$a>$c){ // condiciones
                                echo "el segundo y cuarto son mayores iguales$b<br>"; // muestra en pantalla
                                echo "<br> el intermedio es$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ; // muestra en pantalla
                            }
                            if($b>$a and$a==$d and $d>$c){ // condiciones
                                echo "el mayor $b<br>"; // muestra en pantalla
                                echo "<br> el primero y el cuarto son iguales menores$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ; // muestra en pantalla
                            }
                            if($a>$c and $c>$b and$b==$d){ // condiciones
                                echo "el mayor es$a<br>"; // muestra en pantalla
                                echo "<br> el intermedio es$c <br>" ; // muestra en pantalla
                                echo "<br> el segundo y cuarto son menores iguales$b<br>"; // muestra en pantalla
                            }
                            if($a==$d and $d>$b and$b>$c){ // condiciones
                                echo "el primero y cuarto son mayores$a<br>"; // muestra en pantalla
                                echo "<br> el intermedio es$b<br>"; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ;	// muestra en pantalla
                            }
                            if($b>$a and $a==$c and $c>$d){ // condiciones
                                echo "el mayor $b<br>"; // muestra en pantalla
                                echo "<br> el primero y el tercero son iguales menores$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$d <br>" ; // muestra en pantalla
                            }
                            if($a==$c and $c>$d and $d>$b){ // condiciones
                                echo "el primero y tercero son mayores$a<br>"; // muestra en pantalla
                                echo "<br> el intermedio es$d <br>" ; // muestra en pantalla
                                echo "<br> el menor es$b<br>";	// muestra en pantalla
                            }
                            if($a==$c and $c>$b and $b>$d){ // condiciones
                                echo "el primero y tercero son mayores$a<br>"; // muestra en pantalla
                                echo "<br> el intermedio es$b<br>"; // muestra en pantalla
                                echo "<br> el menor es$d <br>" ;	// muestra en pantalla
                            }
                            if($d==$c and $c>$a and$a>$b){ // condiciones
                                echo "el tercero y cuarto son mayores$c <br>" ;// muestra en pantalla
                                echo "<br> el intermedio es$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$b<br>"; // muestra en pantalla
                            }
                            if($d>$b and $b>$a and $a==$c){ // condiciones
                                echo "<br> el mayor es$d <br>" ; // muestra en pantalla
                                echo "<br> el intermedio es$b<br>"; // muestra en pantalla
                                echo "<br> el primero y tercero son menores$a<br>"; // muestra en pantalla
                            }
                            if($b>$d and $d>$a and$$$a==$c){ // condiciones
                                echo "<br> el mayor es$b<br>"; // muestra en pantalla
                                echo "<br> el intermedio es$d <br>" ; // muestra en pantalla
                                echo "<br> el primero y tercero son menores$a<br>"; // muestra en pantalla
                            }
                            if($c>$a and $a==$b and$b>$d){
                                echo "<br> el mayor es$c <br>" ; // muestra en pantalla
                                echo "<br> el primero y segundo son menores iguales$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$d <br>" ; // muestra en pantalla
                            }
                            if($d>$a and$$a==$b and$b>$c){
                                echo "<br> el mayor es$d <br>" ; // muestra en pantalla
                                echo "<br> el primero y segundo son menores iguales$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ; // muestra en pantalla
                            }
                            if($d>$a and$$$a==$c and $c>$b){
                                echo "<br> el mayor es$d <br>" ; // muestra en pantalla
                                echo "<br> el primero y tercero son menores iguales$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$b<br>"; // muestra en pantalla
                            }
                            if($a>$b and$b>$c and $c>$d){ // condiciones
                                echo "el primero es el mayor $a<br>"; // muestra en pantalla
                                echo "<br> el segundo es$b<br>"; // muestra en pantalla
                                echo "<br> el tercero es $c <br>" ; // muestra en pantalla
                                echo "<br> el menor es$d <br>" ;  // muestra en pantalla
                            }
                            if($a<$b and$b<$c and $c<$d){ // condiciones
                                echo "el primero es el mayor $d <br>" ; // muestra en pantalla
                                echo "<br> el segundo es$c <br>" ; // muestra en pantalla
                                echo "<br> el tercero es $b<br>"; // muestra en pantalla
                                echo "<br> el menor es$a<br>";  // muestra en pantalla
                            }
                            if($a>$b and$b>$d and $d>$c){ // condiciones
                                echo "el mayor es$a<br>"; // muestra en pantalla
                                echo "<br> el segundo es$b<br>"; // muestra en pantalla
                                echo "<br> el tercero es$d <br>" ; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ; // muestra en pantalla
                            }
                            if($a>$c and $c>$d and $d>$b){ // condiciones
                                echo "el mayor es$a<br>"; // muestra en pantalla
                                echo "<br> el segundo es$c <br>" ; // muestra en pantalla
                                echo "<br> el tercero es$d <br>" ; // muestra en pantalla
                                echo "<br> el menor es$b<br>"; // muestra en pantalla
                            }
                            if($b>$c and $c>$d and $d>$a){ // condiciones
                                echo "el mayor es$b<br>"; // muestra en pantalla
                                echo "<br> el segundo es$c <br>" ; // muestra en pantalla
                                echo "<br> el tercero es$d <br>" ; // muestra en pantalla
                                echo "<br> el menor es$a<br>"; // muestra en pantalla
                            }
                            if($a>$d and $d>$c and $c>$b){ // condiciones
                                echo "el mayor es$a<br>"; // muestra en pantalla
                                echo "<br> el segundo es$d <br>" ; // muestra en pantalla
                                echo "<br> el tercero es$c <br>" ; // muestra en pantalla
                                echo "<br> el menor es$b<br>"; // muestra en pantalla
                            }
                            if($c>$a and $a>$d and $d>$b){ // condiciones
                                echo "el mayor es$c <br>" ; // muestra en pantalla
                                echo "<br> el segundo es$a<br>"; // muestra en pantalla
                                echo "<br> el tercero es$d <br>" ; // muestra en pantalla
                                echo "<br> el menor es$b<br>"; // muestra en pantalla
                            }
                            if($c>$d and $d>$a and $a>$b){ // condiciones
                                echo "el mayor es $c <br>" ; // muestra en pantalla
                                echo "<br> el segundo es $d <br>" ; // muestra en pantalla
                                echo "<br> el tercero es $a <br>"; // muestra en pantalla
                                echo "<br> el menor es $b <br>"; // muestra en pantalla
                            }
                            if($c>$a and$a>$b and$b>$d){ // condiciones
                                echo "el mayor es$c <br>" ; // muestra en pantalla
                                echo "<br> el segundo es$a<br>"; // muestra en pantalla
                                echo "<br> el tercero es$b<br>"; // muestra en pantalla
                                echo "<br> el menor es$d <br>" ; // muestra en pantalla
                            }
                            if($c>$b and$b>$d and $d>$a){ // condiciones
                                echo "el mayor es$c <br>" ; // muestra en pantalla
                                echo "<br> el segundo es$b<br>"; // muestra en pantalla
                                echo "<br> el tercero es$d <br>" ; // muestra en pantalla
                                echo "<br> el menor es$a<br>"; // muestra en pantalla
                            }
                            if($c>$d and $d>$b and$$b>$a){ // condiciones
                                echo "el mayor es$c <br>" ; // muestra en pantalla
                                echo "<br> el segundo es$d <br>" ; // muestra en pantalla
                                echo "<br> el tercero es$b<br>"; // muestra en pantalla
                                echo "<br> el menor es$a<br>"; // muestra en pantalla
                            }
                            if($d>$a and$a>$b and$b>$c){ // condiciones
                                echo "el mayor es$d <br>" ; // muestra en pantalla
                                echo "<br> el segundo es$a<br>"; // muestra en pantalla
                                echo "<br> el tercero es$b<br>"; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ; // muestra en pantalla
                            }
                            if($a>$c and $c>$b and$b>$d){ // condiciones
                                echo "el mayor es$a<br>"; // muestra en pantalla
                                echo "<br> el segundo es$c <br>" ; // muestra en pantalla
                                echo "<br> el tercero es$b<br>"; // muestra en pantalla
                                echo "<br> el menor es$d <br>" ; // muestra en pantalla
                            }
                            if($d>$a and$a>$c and $c>$b){ // condiciones
                                echo "el mayor es$d <br>" ; // muestra en pantalla
                                echo "<br> el segundo es$a<br>"; // muestra en pantalla
                                echo "<br> el tercero es$c <br>" ; // muestra en pantalla
                                echo "<br> el menor es$b<br>"; // muestra en pantalla
                            }
                            if($b>$d and $d>$a and$a>$c){ // condiciones
                                echo "el mayor es$b<br>"; // muestra en pantalla
                                echo "<br> el segundo es$d <br>" ; // muestra en pantalla
                                echo "<br> el tercero es$a<br>"; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ; // muestra en pantalla
                            }
                            if($d>$b and$b>$c and $c>a){ // condiciones
                                echo "el mayor es$d <br>" ; // muestra en pantalla
                                echo "<br> el segundo es$b<br>"; // muestra en pantalla
                                echo "<br> el tercero es$c <br>" ; // muestra en pantalla
                                echo "<br> el menor es$a<br>"; // muestra en pantalla
                            }
                            if($b>$a and$a>$d and $d>$c){
                                echo "el mayor es$b<br>"; // muestra en pantalla
                                echo "<br> el segundo es$a<br>"; // muestra en pantalla
                                echo "<br> el tercero es$d <br>" ; // muestra en pantalla
                                echo "<br> el menor es$c <br>" ; // muestra en pantalla
                            }
                        ?>
                 </p></b>
             </div>

             <input type="radio" name="radio" id="radio7">
             <div class="tab7" >
                 <h2>8. kl a mtrs</h2>
                 <b><p>
                 <?php
                    $a=13;
                    $x;


                        echo" HACE LAS SIGUIENTES CONVERCIONES  DE KM -> DECAMETROS Y DE DECIMETROS -> CM  <br>";
                        echo"----------------------------------------------------------------------------------<br>";
                    echo "las conversion son:<br>";// seleciona la pbcion para pasar  de km a  decametros  y  de  decametros a decimetros a cm
                    echo"1.Metros a km <br>";
                    echo"2.Metros a decametros <br>";
                    echo"3.Metros a decimetros <br>";
                    echo"4.Metros a cm <br><br>";

                        $x= $a / 1000;
                        echo"convercion en  Km es: $x kl<br>"; // formulas para las converciones 

                        $de=$a / 10;
                        echo"conversion em decametros es:$de decametros <br>";

                        $deci= $a * 10 ;
                        echo "conversion en decimetros es:$deci decimentros <br>";

                        $cm= $a * 100;
                        echo "conversion en cm es:$cm cm";
                        

                        
                    ?>
                 </p></b>
             </div>

             <input type="radio" name="radio" id="radio8">
             <div class="tab8" >
                 <h2>11. tablas</h2>
                 <b><p>
               
                    <?php	
                    $y=1;
                    $num=2;
                    for ($y=1; $y<=10; $y++){
                        $resul=$num*$y;
                        echo "$num*$y=$resul<br>" ;
                    }
                    ?>
                    
                 </p></b>
             </div>

             <input type="radio" name="radio" id="radio9">
             <div class="tab9" >
                 <h2>12.binarios</h2>
                 <b><p>
                 <?php
                $n1=01;
                $decimal=10;
                $nf;
                $resto =0;
                // que significan estos corchetes en  c++ []
                $n2=[25];
                $n3=[21];
                    echo" CONVIERTE DE BINARIO A DECIMAL O DECIMAL A BINARIO<br><br>";// muestra en pantalla lo que el codigo hace
                        echo"---------------------------------------------------- <br>";
                
                echo"1.Binario-Decimal <br>";
                echo"2.Decimal-Bimario <br><br>";
                

                //-----------------numero binario a dececimal --------------------------
                echo"1) el numero binario:$n1<br>";// en el caso uno convertimos los numeros binarios a decimal
                
                
                for( $i = 0; $i<23; $i++)
                {
                
                $n2[$i] = $n1 % 10; 
                $n1 /= 10;
                }
                
                for ($i=22; $i>=0; $i--)
                {
                    
                $nf= ($resto *2) + $n2[$i];
                $resto=$nf;
                }
                echo" RTA) El numero equivalente a decimal es:$nf<br><br>";
                
                
                //________________________________nuemero decimal a binario-------------------------
                echo"2) el numero decimal :  $decimal <br>";// aca es lo opuesto de decimal a vinario 

                
                for ($i=0; $i<23; $i++)
                {
                
                $n3[$i] = $decimal % 2;
                $decimal /= 2;
                }
                
                echo"RTA) El numero equivalente a binario es:<br>";// muestra el resultado
                
                for ($i=22; $i>=0; $i--)
                {
                
                echo $n3[$i];
                }

                

                ?>
                 </p></b>
             </div>

          </div>
     </div>
    
</body>
</html>