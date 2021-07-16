
<?php
include 'resources/env.php';

$sql = "SELECT * FROM `category`";

$data = $pdo->query("SELECT * FROM category")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
  $cID = $row['cID'];
  $name = $row['CName']."<br />\n";
  echo("<a href=statpage.php?cID=$cID>$name</a>");


    
}
?>
</html>