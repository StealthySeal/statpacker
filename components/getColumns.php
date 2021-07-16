
<?php


//Get Columns
function getColumns($tablenames) {
  include 'env.php';

  try {
  

  // get column names
  $query = $pdo->prepare("DESCRIBE $tablenames");
  $query->execute();
  $table_names = $query->fetchAll(PDO::FETCH_COLUMN);
  return $table_names;
  
  //Close connection
  $condb = null;
  
  } catch(PDOExcepetion $e) {
  echo $e->getMessage();
  }
  }

/* Get and print columns of item

  $columns = getColumns('item');
  foreach($columns as $column) { echo($column); }

  

*/



?>
</html>