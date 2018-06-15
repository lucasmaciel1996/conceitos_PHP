<html>
   <head>
	<title> Arrays</title>
   </head>
   <body>
      <div>
        	<?php
              //Array exemple1
              $vetor = array('Lucas ','Marina','joao','Maria','Ricardo');

              //Array exemple2
              $vetor2D = array('Lucas' =>array('cpf'=>'123.122.122-00','phone'=>'3232-3232'),
                               'Maria'=>array('cpf'=>'212.212.222-21','phone'=>'2121-21212'),
                               'Carlos'=>array('cpf'=>'212.120.255.244-78','phone'=>'2144-4545'),
                               'joao'=>array('cpf'=>'212.120.255.244-78','phone'=>'2144-4545'),
                               'Eduardo'=>array('cpf'=>'012.180.255.244-78','phone'=>'2344-4845'),
                               'Paulo'=>array('cpf'=>'212.170.855.244-88','phone'=>'1148-4545')
                           );

              echo 'Percorrendo Vetor FOR COUNT<br>';
              //percoorendo array com for "count"
              for($contador=0; $contador<count($vetor);$contador++)
              {
                echo '<br/>' .$contador." $vetor[$contador]". " ";
              }

             echo '<br>Percorrendo Vetor FOREARCH <br>';
             //percoorendo vetor com forech
             foreach($vetor as $vetor2)
             {
               echo '<br>' .$vetor2 ;
             }

            echo '<br>Percorrendo Vetor FOREARCH <br/>';
            //precorendo array com forech pegando apenas 'cpf', 'phone'
            foreach ($vetor2D as $values) {
              echo '<br>' .$values ." CPF  " .$values[cpf]. " PHONE  ".$values[phone];
            }

           ?>
      </div>
   </body>
</html>
