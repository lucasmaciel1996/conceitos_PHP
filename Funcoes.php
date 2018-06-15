<html>
   <head>
	<title> Funcoes</title>
   </head>
   <body>
     <div>
       <?php

           //Funcao sem retorno
           function Ola()
           {
             echo ("Bem Vindo ao Sistema");
           }

           //funcao com retorno
           function Ola_name($name)
           {
             echo ("Bem Vindo ao Sistema ".$name);
           }
           //Funcao para somar 2
           function Somar($valor1,$valor2,$operacao)
           {
               switch($operacao)
               {
                 case '+':
                     echo ("Resultado e: ".($valor1 + $valor2));
                   break;

                 case '*':
                     echo ("Resultado e: ".($valor1 * $valor2));
                   break;

                 case '-':
                    echo ("Resultado e: ".($valor1 - $valor2));
                   break;

                 case '/':
                    echo ("Resultado e: ".($valor1 / $valor2));
                   break;

                 default :
                     echo ("Operacao invalida");
                    break;
               }
           }
           echo 'Chamando Funções <br>';
           //chama  funcao
           Ola();
           echo '<br>';
          //chama  funcao passa nome como parametro
          Ola_name('Lucas Maciel');
          echo '<br>';
          //chama funcao passa parametros necessarios
          Somar(20,2,'/');
        ?>
     </div>
 </body>
</html>
