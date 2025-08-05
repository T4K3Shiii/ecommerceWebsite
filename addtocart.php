<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements@1.0.0/dist/js/index.min.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>

    <h1 class="text-3xl font-bold mt-20 flex items-center justify-center mb-5">Shopping Cart</h1>
    <div class="container mx-auto px-4">
      <table class="w-full border-collapse border border-gray-300 mb-5">
        <thead>
          <tr>
            <th class="border border-gray-300 px-4 py-2">Product Name</th>
            <th class="border border-gray-300 px-4 py-2">Price</th>
            <th class="border border-gray-300 px-4 py-2">Size</th>
            <th class="border border-gray-300 px-4 py-2">Color</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody id="cartItems">
        </tbody>
      </table>

      <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg shadow-md">
        <p class="text-lg font-bold">
          Total Amount: <span id="totalAmount" class="text-green-600">0 Ks</span>
        </p>
        <button
          id="orderNowButton"
          class="bg-black text-white px-6 py-2 rounded-md hover:bg-gray-800 transition-colors"
        >
          Order Now
        </button>
      </div>
    </div>

    <script>
      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      const cartItemsContainer = document.getElementById("cartItems");
      const totalAmountElement = document.getElementById("totalAmount");
      const orderNowButton = document.getElementById("orderNowButton");

      let totalAmount = 0;

      // Populate the cart table and calculate the total amount
      cart.forEach((item, index) => {
        const price = parseFloat(item.price.replace('Ks', '').trim()); // Extract price value
        totalAmount += price;

        const row = document.createElement("tr");
        row.innerHTML = `
          <td class="border border-gray-300 px-4 py-2">${item.name}</td>
          <td class="border border-gray-300 px-4 py-2">${item.price}</td>
          <td class="border border-gray-300 px-4 py-2">${item.size}</td>
          <td class="border border-gray-300 px-4 py-2">${item.color}</td>
          <td class="border border-gray-300 px-4 py-2">
            <button onclick="removeItem(${index})" class="text-red-600">Remove</button>
          </td>
        `;
        cartItemsContainer.appendChild(row);
      });

      // Display the total amount
      totalAmountElement.textContent = `${totalAmount} Ks`;

      // Remove an item from the cart
      function removeItem(index) {
        const price = parseFloat(cart[index].price.replace('Ks', '').trim());
        totalAmount -= price; // Adjust the total
        cart.splice(index, 1); // Remove the item from the cart
        localStorage.setItem("cart", JSON.stringify(cart));
        location.reload(); // Reload the page to update the UI
      }

      // Handle the "Order Now" and "Checkout" button functionality
      orderNowButton.addEventListener("click", () => {
        if (cart.length === 0) {
          alert("Your cart is empty! Please add items before proceeding.");
        } else if (orderNowButton.textContent === "Order Now") {
          orderNowButton.textContent = "Checkout"; // Change button text to "Checkout"
          orderNowButton.classList.remove("bg-black");
          orderNowButton.classList.add("bg-green-600");
        } else {
          // Redirect to the checkout page
          window.location.href = "checkout.php";
        }
      });
    </script>
  </body>
</html>
