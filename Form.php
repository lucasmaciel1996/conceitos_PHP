<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <div>
       <?php
           //atribui os valores as variavel
           $var = $_POST['num1'];
           $var2 = $_POST['num2'];
           $op = $_POST['op'];

           //Funcao para Somar
           function Somar($num1, $num2, $op)
           {
             switch ($op) {
               case 'X':
                 echo 'Resultado :'. $num1 .' '.$op .' '.$num2 .' = ' .($num1*$num2);
                 break;
              case '+':
                echo 'Resultado :'. $num1 .' '.$op .' '.$num2 .' = ' .($num1+$num2);
                break;
              case '-':
                echo 'Resultado :'. $num1 .' '.$op .' '.$num2 .' = ' .($num1-$num2);
                break;
              case '/':
                echo 'Resultado :'. $num1 .' '.$op .' '.$num2 .' = ' .($num1/$num2);
                break;
              default:
                 echo 'Operação Invalida :(!!';
                 break;
             }

           }
          /* #teste
             echo 'Formulario.. <br>';
           */
            Somar($var,$var2,$op);

       ?>
       <form name="form" action="Form.php" method="post">
         <label for="num1">Valor 1</label>
         <input type="number" id="num1" name="num1" value="">
          <br/>
          <select name="op">
            <option value="">opção </option>
            <option value="+">+ </option>
            <option value='-'>- </option>
            <option value='/'>/ </option>
            <option value='X'>X </option>

          </select>
          <br/>
         <label for="num2">Valor 2</label>
         <input type="number" id="num2" name="num2"  value="">
         <br/>
         <br/>

         <button type="submit" name="button">Calcular</button>
       </form>
    </div>
  </body>
</html>
