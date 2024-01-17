<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Page</title>

  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      background-color: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #checkout-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      text-align: center;
      height: 100%; /* Set height to 100% */
    }
  </style>
</head>
<body>

  <div class="container" id="checkout-container">
    <h2 class="mb-4">Checkout</h2>

    <!-- Address Form -->
    <form id="address-form">
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
      </div>
    </form>

    <!-- Payment Method Selection -->
    <div class="form-group">
      <label for="payment-method">Select Payment Method:</label>
      <select class="form-control" id="payment-method" name="payment-method" required>
        <option value="bkash">bKash</option>
        <option value="nagad">Nagad</option>
        <option value="rocket">Rocket</option>
      </select>
    </div>

    <!-- Mobile Number and Transaction Number -->
    <form id="payment-info">
      <div class="form-group">
        <label for="mobile-number">Mobile Number:</label>
        <input type="tel" class="form-control" id="mobile-number" name="mobile-number" pattern="[0-9]{11}" required>
      </div>

      <div class="form-group">
        <label for="transaction-number">Transaction Number:</label>
        <input type="text" class="form-control" id="transaction-number" name="transaction-number" required>
      </div>
    </form>

    <!-- Checkout Button -->
    <button class="btn btn-primary" onclick="processCheckout()">Proceed to Checkout</button>
  </div>

  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Your custom JavaScript logic -->
  <script>
    function processCheckout() {
      // Add your logic to send data to the backend for processing
      // You may use AJAX or Fetch API to communicate with the server
      // Ensure that user data is handled securely on the server side

      // Redirect to final.php after processing checkout
      window.location.href = 'final.php';
    }
  </script>

</body>
</html>
