<?php
require_once('config/db.php');
require_once('model/Customer.php');
require_once('model/Transaction.php');
require_once('lib/pdo_db.php');
$transaction= new  Transaction();

$transaction=$transaction->getTransaction();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>View Transaction</title>
</head>
<body>
  <div class="container mt-4">
      <div class="btn-group" role="group">
      <a href="customers.php" class="btn btn-secondary">Customers</a>
      <a href="transaction.php" class="btn btn-primary">Transactions</a>
    </div>
   <h2>Transaction</h2>
   <table class="tabel tabel-striped">
       <thead>
       <tr>
           <th>Transaction Id</th>
           <th>customer</th>
           <th >product</th>
           <th>Amount</th>
           <th>Date</th>
           
       </tr>
       </thead>
       <tbody>
           <?php foreach($transaction as $t):
           ?>
<tr>
    <td><?php  echo $t->id?></td>
    <td><?php  echo $t->customer_id?></td>
    <td><?php  echo $t->product?></td>
    <td><?php  echo  sprintf('%.2f' , $t->amount/100)?> <?php echo strtoupper($t->currency); ?></td>
    <td><?php  echo $t->created_at?></td>
</tr>
<?php endforeach; ?>
</tbody>
   </table>
   <br>
    <p><a href="index.php">Goto PayPage</a></p>
  </div>
</body>
</html>