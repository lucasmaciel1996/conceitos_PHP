<html>
   <head>
	<title> Get e post </title>
   </head>
   <body>
     <div>
       <?php
           //codigo
           //http://forum.tiexpert.net/viewtopic.php?f=15&t=5
            //Medotos POST
           //echo " " .$_POST['campo1'];
           //echo " " .$_POST['campo2'];

            //Medotos GET
           //echo " ".$_GET['campo1'];
           //echo " ".$_GET['campo2'];

           //Medotos REQUEST obs:serve para o get e post
           echo " ".$_REQUEST['campo1'];
           echo " ".$_REQUEST['campo2'];
        ?>

         <!-- chama pagina Get_Post_Resquest.php seta valores -->
        <form name="form" method="post" action="Get_Post_Resquest.php">
            <input type="text" name="campo1">
            <input type="text" name="campo2">

            <input type="submit" name="Enviar">
        </fomr>
     </div>
   </body>
</html>
