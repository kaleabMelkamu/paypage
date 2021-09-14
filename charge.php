<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('model/Customer.php');
require_once('model/Transaction.php');
\Stripe\Stripe::setApiKey("sk_test_51JZTG7JJ8742NYJtt0Gapkts0C7Y6ER3sHkLhw7zvI05GCUgSCAkyROiQZBBmXhhneUJA2bG9EW3jHyz24ebxQLM00sJVb8RuA");
$_POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$token=$_POST['stripeToken'];

//create customer in stripe 
$customer=\Stripe\Customer::create(array(
    "email"=> $email,
    "source" =>$token
));

//charge customer
$charge=\Stripe\Charge::create(array(
"amount" => 899,
"currency" => "USD",
"description" => "HtU digital",
"customer"=> $customer->id
));
//customerData

$customerData=[
    'id'=>$charge->customer,
    'first_name'=>$first_name,
    'last_name'=>$last_name,
    'email'=>$email
];


//instantiate customer
$customer= new Customer();
$customer->addCustomer($customerData);

//transaction Data
$TransactionData=[
    'id'=>$charge->id,
    'customer_id'=>$charge->customer,
    'product'=>$charge->description,
    'amount'=>$charge->amount,
    'currency'=>$charge->currency,
    'status'=>$charge->status
];


//instantiate Transaction
$transaction= new Transaction();
$transaction->addTransaction($TransactionData);