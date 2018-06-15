<html>
   <head>
	<title> Explode e Implode</title>
   </head>
   <body>
     <div>
       <?php
           //Array para Explode
           $explode='valor:valor1:valor2:valor3';
           //Array para Implode
           $vetor = array('Lucas','Cirineu','Maciel','Ricardo','Luiz');

            echo 'Valores de Explode e Implode <br>';

            print_r(explode(':',$explode));
            //$vetor_uniao=join('.',$vetor);
            echo '<br>';
            print_r(implode($vetor));
            echo '<br>';

            //Variavel recebendo Implode, e mostrando na tela valor posicao [2]
            $var = explode(':',$explode);
            print_r($var[2]);

        ?>
     </div>
   </body>
</html>
