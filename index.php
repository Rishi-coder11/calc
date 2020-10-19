<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calcuator</title>
    <link rel="shortcut icon" href="shorcut icon.png">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form>
      <h1>Enter the first number: <input type="text" name="num1" placeholder="Number 1"></h1>
        <h1>Enter the second number:<input type="text" name="num2" placeholder="Number 2"> <br>
    <h1>Choose your operator:</h1>  <select class="" name="operator" style="margin-left: 270px;">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <button type="submit" value="submit" name="submit" style="margin-bottom: 20px;">Calculate</button>
    </form>
    <p>The answer is:</p>
    <?php
    if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
      case "None":
      echo "You need to select a method";
      break;
      case "Add":
      echo $result1 + $result2;
      break;
      case "Subtract":
      echo $result1 - $result2;
      break;
      case "Multiply":
      echo $result1 * $result2;
      break;
      case "Divide":
      echo $result1 / $result2;
      break;
      }
    }

     ?>
  </body>
</html>
