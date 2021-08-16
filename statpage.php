
<html>
<head>
  <meta charset="utf-8" />
  <title>Valuable gear statistics</title>
  <link rel="stylesheet" type="text/css" href="./resources/css/styles.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

</head>


<?php
include './components/getColumns.php';
$CategoryName=$_GET['name']; 



?>


<header>
<?php
include './resources/env.php';
    echo '<h1> <a href="index.php">Statpacker.com</a><br>' .  $CategoryName . " " . 'statpage</h1>';
?>
  

  
<div class="dropdown">
  <button class="dropbtn">Order</button>
  <div class="dropdown-content">
    <?php 

$data = $pdo->query("SELECT  * FROM $CategoryName")->fetchAll();
$columns = getColumns($CategoryName);
foreach($columns as $column){
echo "<a href=statpage.php?name=$CategoryName&order=$column>$column</a><br>";
}
    ?>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Filter</button>
  <div class="dropdown-content">
    <?php 
$data = $pdo->query("SELECT  * FROM $CategoryName")->fetchAll();
$columns = getColumns($CategoryName);
foreach($columns as $column){
echo "<input type ='checkbox' id='$column' name='filter' value='$column'> <label for'$column>$column</label><br>";}
    ?>
  </div>
</div>


</header>
<hr><br>


<?php

$orderBy="brand";
if (isset($_GET['order'])){ $orderBy = $_GET['order'];}
$data = $pdo->query("SELECT  * FROM $CategoryName")->fetchAll();
echo '<table><tr>';
echo '<tr>';
foreach($columns as $column){ 
  echo "<th> $column </th>";
}
  echo '<tr>';
foreach ($data as $row) {
foreach($columns as $column){
  echo "<td> $row[$column] </td>"; 
}
echo "</tr>";
}
echo '</table> <br>';
?>



</html>
