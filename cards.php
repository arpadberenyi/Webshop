<?php
require_once 'db_connect.php';

if(isset($_GET['start'])){
    $start = $_GET['start'];
}else{
      $start = 0;
}

// ha jó a lekérdezés akkor 1-est ad vissza ami azt jelenti, hogy beléphetünk ebbe az if-be
// különben 0-át ad vissza és else ágban tudjuk kezelni a hibát
$darab = 6; 
if ($result = $db->query("SELECT * FROM products LIMIT ".$start.",".$darab)){
//Objektum
if  ($result->num_rows){ // ha a num_rows nullától különböző akkor lépünk be ide
 //echo '<pre>';
 $products = array();
 while ($row = $result->fetch_object()){ // amig van sorunk addig egy row nevű változónak ad értékül egy objektumot amibe a sorokat menti le
    //  echo $row->name.' '.$row->price.'<br>';
       array_push($products,$row);
  }
  

 }

 $result ->free(); //result változó felszabadítása a memóriáából
}

$db ->close();
  echo json_encode($products);
?>