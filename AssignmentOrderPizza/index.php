<!--NAME : Pranav Bhavsar-->
<!--200545944-->
<!--online pizza website-->



<!DOCTYPE html>
<html lang="en">

<head>
  <!--meta tags-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Order</title>
  <meta name="description" content="Order your Pizza online">
  <meta name="robots" content="noindex, nofollow">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">

  <!--CSS LINK !-->
  <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve personal details
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Retrieve pizza details
    $size = $_POST["size"];
    $crust = $_POST["crust"];
    $sauces = $_POST["sauces"];
    $toppings = isset($_POST["toppings"]) ? $_POST["toppings"] : [];

    // Display order confirmation
    echo "<h1>Order Confirmation</h1>";
    echo "<h2>Personal Details:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Password: $password</p>";

    echo "<h2>Pizza Details:</h2>";
    echo "<p>Size: $size</p>";
    echo "<p>Crust: $crust</p>";
    echo "<p>Sauce(s): $sauces</p>";
    echo "<p>Toppings:</p>";
    if (!empty($toppings)) {
      echo "<ul>";
      foreach ($toppings as $topping) {
        echo "<li>$topping</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>No toppings selected.</p>";
    }
  }
  ?>

  <!--pizza logo-->
  <div class="logo">
    <img src="./pizzalogo.jpg" alt="logo">

    <!--heading-->
    <h1>The D Pizza</h1>
    <h2>We're happy to serve you</h2>
    <h2>Skip the line and order your favorite pizza online</h2>
    <!--form starts here-->
    <form method="post">
      <!--div 1-->
      <div>
        <label>Personal Details:</label>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <!--End of div 1-->

      <!--section 1 Pizza options-->

      <section>
        <label>Pizza Details:</label>

        <!--Pizza 1-->
        <div class="pizza-option">
          <button type="button">add</button>
          <img src="./pizza1.jpg" alt="Pizza 1">
          <h3>Pepperoni Pizza</h3>
          <p>Tomato sauce, mozzarella cheese, pepperoni</p><!--description of pizza 1-->
        </div>

        <!--Pizza 2-->
        <div class="pizza-option">
          <button type="button">add</button>
          <img src="./pizza2.jpg" alt="Pizza 2">
          <h3>Margherita Pizza</h3>
          <p>Tomato sauce, mozzarella cheese, fresh basil</p><!--description of pizza 2-->
        </div>

        <!--Pizza 3-->
        <div class="pizza-option">
          <button type="button">add</button>
          <img src="./pizza3.jpg" alt="Pizza 3">
          <h3>Hawaiian Pizza</h3>
          <p>Tomato sauce,mozzarella cheese,</p><!--description of pizza 3-->
          <p>ham,pineapple</p>
        </div>

        <!--Pizza 4-->
        <div class="pizza-option">
          <button type="button">add</button>
          <img src="./pizza4.jpg" alt="Pizza 4">
          <h3>Mix Cheesy pizza </h3>
          <p>chadder cheese,shredded cheese</p><!--description of pizza 4-->
          <p>,canadian chadder,swizz cheese</p>
        </div>

        <!--Pizza 5-->
        <div class="pizza-option">
          <button type="button">add</button>
          <img src="./pizza5.jpg" alt="Pizza 5">
          <h3>Meat Lovers Pizza</h3>
          <p>Tomato sauce,mozzarella cheese</p><!--description of pizza 5-->
          <p>,pepperoni,sausage,bacon</p>
        </div>
      </section>

      <!--Pizza 6-->
      <div class="pizza-option">
        <button type="button">add</button>
        <img src="./pizza6.jpg" alt="Pizza 6">
        <h3>Supreme Pizza</h3>
        <p>Tomato sauce,mozzarella cheese</p> <!--description of pizza 6-->
        <p>,pepperoni,sausage,mushrooms,</p>
        <p>peppers,onions</p>
        <!--description of pizza 6-->
      </div>

      <!--End of section 1-->

      <!--div 2-->
      <div>
        <label>Pizza Details:</label>
        <label for="size">Size:</label>

        <!--size selection-->
        <select id="size" name="size" required>
          <option value="">Select Size</option>
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
        </select>

        <!--pizza type-->
        <label for="crust">Crust:</label>
        <select id="crust" name="crust" required>
          <option value="">Select Crust</option>
          <option value="thin">Thin</option>
          <option value="thick">Thick</option>
          <option value="stuffed">Stuffed</option>
        </select>

        <!--Sauce selection-->
        <label for="Sauces">Sauces:</label>
        <select id="Sauces" name="Sauces" required>
          <option value="">Select sauce/s</option>
          <option value="green goddess">Green goddess</option>
          <option value="ranch">ranch</option>
          <option value="mayonnaise">Mayonnaise</option>
          <option value="bbq sweet sauce">BBQ sweet sauce</option>
          <option value="hot sauce">Hot sauce</option>
        </select>

        <!--button on's-->
        <p>Toppings:</p>
        <input type="checkbox" id="pepperoni" name="pepperoni" value="Pepperoni">
        <label for="pepperoni">Pepperoni</label>
        <input type="checkbox" id="mushrooms" name="mushrooms" value="Mushrooms">
        <label for="mushrooms">Mushrooms</label>
        <input type="checkbox" id="onions" name="onions" value="Onions">
        <label for="onions">Onions</label>
        <input type="checkbox" id="sausage" name="sausage" value="Sausage">
        <label for="sausage">Sausage</label>
        <input type="checkbox" id="cheese" name="cheese" value="Cheese">
        <label for="cheese">Cheese</label>
      </div>
      <!--End of div 2-->

      <button type="submit">Submit order</button>
    </form>
  </div>
  <!--Company's copyright policy-->
  <footer>
    <p>&copy; 2023 Pizza Place Name. All rights reserved.</p>
  </footer>
</body>

</html>