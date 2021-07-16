
<!doctype HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Valuable gear statistics</title>
  <link rel="stylesheet" type="text/css" href="/statpacker/resources/css/styles.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

</head>


<?php
include '/components/getColumns.php';
$cID=$_GET['cID']; //get selected category ID 
$columns1 = getColumns('item');
$columns2 = getColumns('attribute');
$columns = array_merge($columns1, $columns2);

?>


<header>
<?php
include '/resources/env.php';

$categoryNameData = $pdo->query("SELECT `CName` FROM `category` WHERE `cID` = $cID")->fetchAll();
foreach ($categoryNameData as $row) {
    echo '<h1> <a href="index.php">Statpacker.com</a><br>' .  $row['CName'] . " " . 'statpage</h1>';}
?>

<div class="dropdown">
  <button class="dropbtn">Order</button>
  <div class="dropdown-content">
    <?php 

$data = $pdo->query("SELECT  attribute.*, item.* FROM item INNER JOIN attribute ON item.iID = attribute.iID WHERE item.cID = $cID")->fetchAll();
foreach($columns as $column){
echo "<a href=statpage.php?cID=$cID&order=$column>$column</a><br>";
}

    ?>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Filter</button>
  <div class="dropdown-content">
    <?php 
$data = $pdo->query("SELECT  attribute.*, item.* FROM item INNER JOIN attribute ON item.iID = attribute.iID WHERE item.cID = $cID ")->fetchAll();
foreach($columns as $column){
echo " <input type='checkbox' id='$column' name='order' value='$column'> <label for='$column'>$column</label><br>";
}
    ?>
  </div>
</div>


</header>
<hr><br>


<?php

$orderBy="brand";
if (isset($_GET['order'])){ $orderBy = $_GET['order'];}
$data = $pdo->query("SELECT  attribute.*, item.* FROM item INNER JOIN attribute ON item.iID = attribute.iID WHERE item.cID = $cID ORDER BY $orderBy")->fetchAll();
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
