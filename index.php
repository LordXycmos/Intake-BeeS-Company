<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intake Assignment</title>
</head>
<body>
  <!-- hier maak ik een form zodat ik de values naar PHP kan overbrengen door de POST method te gebruiken -->
  <form action="" method="post">
    <!-- hier kan je in de web browser het eerste getal invullen -->
    <label>value 1:</label>
    <input name="value1" type="number" />
    <!-- hier kan je in de web browser het tweede getal invullen -->
    <label>value 2:</label>
    <input name="value2" type="number" />
    <!-- wanneer je de getallen heb ingevuld kan je op de knop in je web browser klikken om de values naar PHP te sturen -->
    <input name="submit" type="submit" />
  </form>
</body>
</html>

<!-- PHP -->
<?php 
// hier kijkt de PHP code of je op de submit knop heb gedrukt
if(isset($_POST['submit'])){
  // hier zoekt de PHP code de eerste en tweede values op
  $value1 = $_POST['value1'];
  $value2 = $_POST['value2'];
  // hier kijkt de PHP code of beide values nummers zijn
  if(is_numeric($value1) && is_numeric($value2)){
    // hier telt de PHP code beide values bij elkaar op
    $result = $value1 + $value2;
    // hier print de PHP code de uiteindelijke resultaat uit in je web browser
    echo $result;
  } else {
    // hier print de PHP code een fout melding uit als je iets anders dan alleen nummers heb gebruikt
    echo "Error: zorg er voor dat je alleen nummers gebruikt";
  }
}
?>