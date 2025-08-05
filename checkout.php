<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
    <?php include 'header.php'; ?>

    <h1 class="text-3xl font-bold mt-20 flex items-center justify-center mb-5">Checkout</h1>

    <div class="container mx-auto px-4">
      <!-- Shipping Details Form -->
      <form id="checkoutForm" class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
        <h2 class="text-xl font-bold mb-4">Shipping Details</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="name" class="block font-medium mb-1">Full Name</label>
            <input
              type="text"
              id="name"
              name="name"
              class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500"
              required
            />
          </div>
          <div>
            <label for="email" class="block font-medium mb-1">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500"
              required
            />
          </div>
          <div>
            <label for="phone" class="block font-medium mb-1">Phone</label>
            <input
              type="text"
              id="phone"
              name="phone"
              class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500"
              required
            />
          </div>
          <div>
            <label for="address" class="block font-medium mb-1">Shipping Address</label>
            <textarea
              id="address"
              name="address"
              class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500"
              rows="3"
              required
            ></textarea>
          </div>
        </div>

        <div class="mt-4">
          <label class="inline-flex items-center">
            <input
              type="radio"
              name="paymentMethod"
              value="COD"
              class="form-radio text-green-500"
              checked
            />
            <span class="ml-2">Cash on Delivery</span>
          </label>
        </div>
      </form>

      <!-- Cart Items -->
      <h2 class="text-xl font-bold mb-4">Order Summary</h2>
      <table class="w-full border-collapse border border-gray-300 mb-5">
        <thead>
          <tr>
            <th class="border border-gray-300 px-4 py-2">Product Name</th>
            <th class="border border-gray-300 px-4 py-2">Price</th>
            <th class="border border-gray-300 px-4 py-2">Size</th>
            <th class="border border-gray-300 px-4 py-2">Color</th>
          </tr>
        </thead>
        <tbody id="cartItems">
        </tbody>
      </table>

      <!-- Place Order Button -->
      <div class="flex justify-end">
        <button
          type="submit"
          id="placeOrderButton"
          class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-500 transition-colors"
        >
          Place Order
        </button>
      </div>
    </div>

    <script>
      // Load cart from localStorage
      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      const cartItemsContainer = document.getElementById("cartItems");

      // Populate cart table
      cart.forEach((item) => {
        const row = document.createElement("tr");
        row.innerHTML = `
          <td class="border border-gray-300 px-4 py-2">${item.name}</td>
          <td class="border border-gray-300 px-4 py-2">${item.price}</td>
          <td class="border border-gray-300 px-4 py-2">${item.size}</td>
          <td class="border border-gray-300 px-4 py-2">${item.color}</td>
        `;
        cartItemsContainer.appendChild(row);
      });

      // Handle Place Order button
      const placeOrderButton = document.getElementById("placeOrderButton");
      const checkoutForm = document.getElementById("checkoutForm");

      placeOrderButton.addEventListener("click", (event) => {
        event.preventDefault();

        if (cart.length === 0) {
          alert("Your cart is empty. Please add items to proceed.");
          return;
        }

        const formData = new FormData(checkoutForm);
        const orderDetails = {
          name: formData.get("name"),
          email: formData.get("email"),
          phone: formData.get("phone"),
          address: formData.get("address"),
          paymentMethod: formData.get("paymentMethod"),
          cart: cart,
        };

        console.log("Order Details:", orderDetails); // Replace with server-side order handling
        alert("Order placed successfully!");
        localStorage.removeItem("cart"); // Clear the cart
        window.location.href = "home.php"; // Redirect to a thank you page
      });
    </script>
  </body>
</html>
