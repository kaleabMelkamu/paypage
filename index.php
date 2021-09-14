<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pay page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
    <body>
    <div class="container">
<h2 class="my 4">HTU digital</h2>
    <form action="./charge.php" method="post" id="payment-form">
    <label for="card-element">
     pay with Credit or debit card
    </label>
  <div class="form-row">
    <input type="text" name=first_name class="form-control mb-3 StripeElement StripeElement--empty" placeholder="first name">
    <input type="text" name=last_name class="form-control mb-3 StripeElement StripeElement--empty" placeholder="last name">
    <input type="text" name=email class="form-control mb-3 StripeElement StripeElement--empty" placeholder="email">
    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>
    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Apply Payment</button>
</form>
</div>
<scrip
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
    </body>
</html>