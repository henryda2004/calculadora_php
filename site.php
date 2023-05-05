<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <label for="add">Sumar</label>
        <input type="radio" id="add" name="operator" value="add">
        <label for="subtract">Restar</label>
        <input type="radio" id="subtract" name="operator" value="subtract">
        <label for="multiply">Multiplicar</label>
        <input type="radio" id="multiply" name="operator" value="multiply">
        <label for="divide">Dividir</label>
        <input type="radio" id="divide" name="operator" value="divide">
        <br>
        <input type="submit">
    </form>

    <?php
      if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operator"])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operator = $_GET["operator"];

        switch($operator){
          case "add":
            $result = $num1 + $num2;
            break;
          case "subtract":
            $result = $num1 - $num2;
            break;
          case "multiply":
            $result = $num1 * $num2;
            break;
          case "divide":
            if($num2 != 0){
              $result = $num1 / $num2;
            } else {
              $result = "Error: no se puede dividir entre cero.";
            }
            break;
          default:
            $result = "Error: operador no válido.";
            break;
        }

        echo "Resultado: $result";
      }
    ?>
  </body>
</html>
