<html>
   <head>
      <title>Loop  </title>
   </head>
   <body>
     <div>
       <?php
           echo 'Loop WHILE <br>';
           //loop
           $value=0;
           while($value<=10)
           {
              echo("<br> ".$value);
              $value++;
           }

           echo 'Loop DO WHILE <br>';
           ///loop2
           $value2=10;
           do
           {
              echo(" <br>".$value2);
            $value2--;
           }while($value2!=0);

           echo 'Loop FOR <br>';
           //loop3
           for($value3=0; $value3<=10; $value3++)
           {
              echo(" <br>".$value3);
           }
         ?>
     </div>
   </body>
</html>
