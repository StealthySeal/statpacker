
<?php
include 'resources/env.php';

$sql = "SELECT * FROM `categories`";

$data = $pdo->query("SELECT * FROM categories")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
  $name = $row['Name'];
  echo("<a href=statpage.php?name=$name>$name</a> <br> ");


    
}
?>
</html>