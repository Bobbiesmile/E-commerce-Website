<?php 

include_once './db_connector.php';
    $sql = "SELECT sum(product_quantity) AS 'qty' FROM cart ORDER BY cart_id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $count = $stmt->rowCount();
    $rows = $stmt->fetchAll(); 
    ?>   

   <?php 
   foreach ($rows as $row) { ?> 
<?php echo $row->qty; ?>