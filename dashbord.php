<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    nav {
      display: flex;
      background-color: #444;
      padding: 10px;
      justify-content: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
      margin: 5px;
      border-radius: 5px;
    }

    nav a:hover {
      background-color: #555;
    }

    .dashboard-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .profile, .orders, .cart, .avatar {
      background-color: #fff;
      padding: 20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      flex: 1;
      min-width: 300px;
    }

    .avatar img {
      max-width: 100%;
      border-radius: 50%;
    }

    .login-logout {
      text-align: center;
      margin-top: 20px;
    }

    button {
      padding: 10px;
      cursor: pointer;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <header>
    <h1>My Dashboard</h1>
  </header>

  <nav>
    <a href="#profile">Profile</a>
    <a href="#orders">Orders</a>
    <a href="#cart">Cart</a>
    <a href="#avatar">Avatar</a>
  </nav>

  <div class="dashboard-container">
    <div class="profile">
      <h2>Profile</h2>
      <!-- Add your profile content here -->
    </div>

    <div class="orders">
      <h2>Orders</h2>
      <!-- Add your orders content here -->
    </div>

    <div class="cart">
      <h2>Cart</h2>
      <!-- Add your cart content here -->
    </div>

    <div class="avatar">
      <h2>Avatar</h2>
      <img src="path/to/your/avatar-image.jpg" alt="Avatar">
    </div>
  </div>

  <div class="login-logout">
    <button onclick="toggleLogin()">Login</button>
  </div>

  <script>
    let isLoggedIn = false;

    function toggleLogin() {
      isLoggedIn = !isLoggedIn;
      const loginButton = document.querySelector('button');
      loginButton.textContent = isLoggedIn ? 'Logout' : 'Login';
    }
  </script>

</body>
</html>
