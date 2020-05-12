<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Process</title>
  <!-- Styles for body, header and footer -->
  <style>
    body { 
      color: #962709;
      font-family: fantasy, serif;
      background-color:#DBC28F;
      padding-left: 150px;
      padding-right: 150px;
    }
    .pageName{
      font-size: 26px;
      margin-top: 50px;
      margin-bottom: 20px;
    }
    .footer{
      margin-top: 20px;
      font-size:.75em;
      background-color:#000;
      color:#FFFFFF;
      text-align:center;
    }
  </style>
</head>
<body>
  <!-- Header for Order Process Page: Order Received -->
    <div class="pageName">
      <?php
        $pagename = "Order Received";
        include '/home/MAIN/nrd8504/Sites/646/HW7/modularSiteStart/phpFormsStart/assets/inc/header.php';
      ?>
    </div>
    <div class="content">
      <?php
        // The pizza size and pizza topping cost is dependent on the user's selection
        $pizzaPrice = 16.99;
        $toppingCost = (float)$_POST['pizzaTopping'];

        // Calculating tax amount
        $tax = round((($pizzaPrice + $toppingCost) * 0.08),2);
        $total = $pizzaPrice + $toppingCost + $tax;

        // Displaying order details: pizza price, topping price based on the number of toppings, tax amount, total order cost.
        echo('Pizza Price: $' .$pizzaPrice .'<br>');
        echo('Topping Price: $' .$toppingCost .'<br>');
        echo('Tax: $' .$tax .'<br><br>');
        echo('Total Order Cost: $' .$total);
      ?>
    </div>
    <!-- Footer -->
    <div class="footer">
      <?php
        include '/home/MAIN/nrd8504/Sites/646/HW7/modularSiteStart/phpFormsStart/assets/inc/footer.php';
      ?>
    </div>
</body>
</html>