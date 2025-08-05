<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex flex-col">
  <!-- Header -->
  <?php include 'header.php'; ?>
  <br>
  <br>
  
  <?php
$con = new mysqli("localhost", "root", "", "clothing");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST['customer_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO customer (customer_id, name, phone, address) VALUES ('$customer_id', '$name', '$phone', '$address')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Error: " . $con->error . "'); window.history.back();</script>";
    }
}

$con->close();
?>
<?php
$con = new mysqli("localhost", "root", "", "clothing");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "SELECT * FROM customer WHERE name = '$name' AND phone = '$phone'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        header("Location: home.php");
    } else {
        echo "<script>alert('Invalid Name or Phone Number!'); window.history.back();</script>";
    }
}

$con->close();
?>

  <!-- Main Container -->
  <div class="flex-grow flex items-center justify-center">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-8">
      <!-- Tabs -->
      <div class="flex justify-around mb-6 border-b-2 border-gray-200">
        <button id="register-tab" class="text-gray-600 font-bold py-2 px-6 border-b-4 border-blue-500 focus:outline-none">
          Register
        </button>
        <button id="login-tab" class="text-gray-600 font-bold py-2 px-6 focus:outline-none">
          Login
        </button>
      </div>

      <!-- Registration Form -->
      <div id="register-form">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Customer Registration</h2>
        <form action="register.php" method="POST">
          
          
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600 mb-1">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter Name"
              required
            />
          </div>
          <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-600 mb-1">Phone</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter Phone Number"
              required
            />
          </div>
          <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-600 mb-1">Address</label>
            <textarea
              id="address"
              name="address"
              rows="3"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter Address"
              required
            ></textarea>
          </div>
          <div class="mb-6">
            <button
              type="submit"
              class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 rounded-lg"
            >
              Register
            </button>
          </div>
        </form>
      </div>

      <!-- Login Form -->
      <div id="login-form" class="hidden">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Customer Login</h2>
        <form action="home.php" method="POST">
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600 mb-1">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter Name"
              required
            />
          </div>
          <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-600 mb-1">Phone</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter Phone Number"
              required
            />
          </div>
          <div class="mb-6">
            <button
              type="submit"
              class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 rounded-lg"
            >
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script>
    const registerTab = document.getElementById('register-tab');
    const loginTab = document.getElementById('login-tab');
    const registerForm = document.getElementById('register-form');
    const loginForm = document.getElementById('login-form');

    registerTab.addEventListener('click', () => {
      registerForm.classList.remove('hidden');
      loginForm.classList.add('hidden');
      registerTab.classList.add('border-blue-500');
      loginTab.classList.remove('border-blue-500');
    });

    loginTab.addEventListener('click', () => {
      loginForm.classList.remove('hidden');
      registerForm.classList.add('hidden');
      loginTab.classList.add('border-blue-500');
      registerTab.classList.remove('border-blue-500');
    });
  </script>
</body>
</html>
