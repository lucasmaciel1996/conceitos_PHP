<html>
   <head>
	<title> Break e Continue </title>
   </head>
   <body>
      <div>
        	<?php
              echo 'Perconrendo FOR até comando BREAK <br>';
              //break quando numero foi divisivel por 10 para loop
              for($valor=2; $valor<=100; $valor+=2)
              {
                echo ('<br> '.$valor);

                //divisão de valor fou igual =0
                if($valor%13 == 0)
                {
                  //echo 'Entrou if BREAK com valor :'.$valor;
                     break;
                }

              }
              echo '<br>Perconrendo FOR até comando CONTINUE </br>';
              //perconrendo for com continue
              for($valor1=0; $valor1<=10; $valor1++)
                {
                  //divisão for igual = 0, retona numero pares
                   if($valor1 % 2)
                   {
                     continue;
                   }
                  echo ('<br>'.$valor1);

              }
           ?>
     </div>
   </body>
</html>
