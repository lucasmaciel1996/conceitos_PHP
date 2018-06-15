<html>
   <head>
	<title> 1 pagina em php </title>
   </head>
   <body>
     <div >
       <?php
              //Atribuicao direta
           echo 'Resultado é <br>';

               $valor1 =5 * 5;
               $valor2=$valor1+5;

            echo ' Valor 1 :'.$valor1 .' +'.($valor2-25) .'  = '.$valor2 .'<br>';

          //Atribuicao por varivel
          echo 'Resultado é <br>';
            $a=3;
            $b=$a+10;

            echo ' Valor 1 :'.$a .' +'.($b-3) .'  = '.$b;
            //atribuicao por referencia de variavel
            echo 'Resultado é <br>';
              $a=3;
              $b=&$a;
              $c=&$b;
              //C recebe valor automaticamente B recebe valor A automaticamente fica com mesmo valor
              $c=85;

            echo ' Valor A : '.$a .' Valor de B: '.$b .'C'.$c;

        ?>
     </div>

   </body>
</html>
