<?php
require_once('config/db.php');
require_once('model/Customer.php');
require_once('model/Transaction.php');
require_once('lib/pdo_db.php');
$customer= new  Customer();

$customers=$customer->getCustomers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>View Customers</title>
</head>
<body>
  <div class="container mt-4">
      <div class="btn-group" role="group">
      <a href="customers.php" class="btn btn-primary">Customers</a>
      <a href="transaction.php" class="btn btn-secondary">Transactions</a>
    </div>
   <h2>Customers</h2>
   <table class="tabel tabel-striped">
       <thead>
       <tr>
           <th>Customer Id</th>
           <th> First Name</th>
           <th >Last Name</th>

           <th>Email</th>
           <th>Date</th>
           
       </tr>
       </thead>
       <tbody>
           <?php foreach($customers as $c):
           ?>
<tr>
    <td><?php  echo $c->id?></td>
    <td><?php  echo $c->first_name?></td>
    <td><?php  echo $c->last_name?></td>
    <td><?php  echo $c->email?></td>
    <td><?php  echo $c->created_at?></td>
</tr>
<?php endforeach; ?>
</tbody>
   </table>
  </div>
</body>
</html>