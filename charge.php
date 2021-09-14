<?php
require_once('vendor/autoload.php');
$stripe = new \Stripe\StripeClient('sk_test_51JZTG7JJ8742NYJtt0Gapkts0C7Y6ER3sHkLhw7zvI05GCUgSCAkyROiQZBBmXhhneUJA2bG9EW3jHyz24ebxQLM00sJVb8RuA');
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
