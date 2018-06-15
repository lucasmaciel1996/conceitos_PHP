<html>
   <head>
	<title> Referencia String</title>
   </head>
   <body>
     <div >
       <?php
           //codigo
           $minhastr1='';
           $minhastr2='Lucas Maciel';
           $codigo='adnandka-1212';
           $codigo_convertido='';
           $texto='MEU TEXTO MAIUCULO';
           $texto_convertido='';

           //converte para minusculo
           $codigo_convertido=strtoupper($codigo);
           //converte para maiuculo
           $texto_convertido=strtolower($texto);

           echo 'Texto  ' .$codigo;
           echo '<br>';
           echo 'Valor trasformado em maiusculo'  .$codigo_convertido;
           echo '<br>';

           echo ' Texto ' .$texto;
           echo '<br>';
           echo ' Valor trasformado em minusculo '  .$texto_convertido;
           echo '<br>';

           //strlen conta quantidade de caracter
           echo 'Quatidade de caracter  na String - '.strlen($minhastr1);
           echo '<br>';
           echo 'Quatidade de caracter  na String - '.strlen($minhastr2);
           echo '<br>';
        ?>

     </div>

   </body>
</html>
