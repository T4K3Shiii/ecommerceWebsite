<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements@1.0.0/dist/js/index.min.js"></script>
  </head>
  <body class="bg-gray-100">
    <?php include 'header.php'; ?>

    <div class="container mt-[100px] py-8 px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
        <?php
          if(isset($_GET['id'])) {
            $detailId = $_GET['id']; // Fetch the product ID from the URL
            $str = "SELECT * FROM exclusive_collection WHERE id = $detailId"; // Query for specific product by ID
            $ans = $con->query($str);
            while($row = mysqli_fetch_assoc($ans)) {
              $product_image = $row['image_name']; // Get the image name from the database
              $product_name = $row['name']; // Get the name from the database
              $price = $row['price']; // Get the price from the database
              $description = $row['description']; // Get the description from the database
        ?>

        <div class="relative overflow-hidden rounded-lg bg-white shadow-md">
          <!-- Image of the product -->
          <img
            src="image/<?php echo $product_image; ?>"
            alt="<?php echo $product_name; ?>"
            class="w-full h-[650px] object-fit object-contain transition-transform duration-300 hover:scale-105"
          />
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mt-[100px]">
          <h1 class="text-2xl font-bold text-gray-800 mb-4">
            <?php echo $product_name; ?>
          </h1>
          <h2 class="text-xl text-gray-600 mb-4">
            <?php echo number_format($price, 2); ?> Ks
          </h2>
          <p class="text-gray-700 mb-6">
            <?php echo $description; ?>
          </p>

          <!-- Size Selection -->
          <div class="mb-4">
            <label for="size" class="block text-gray-700 font-medium mb-2">Select Size:</label>
            <select
              id="size"
              name="size"
              class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
            >
              <option value="large">Small</option>
              <option value="medium">Medium</option>
              <option value="large">Large</option>
             
            </select>
          </div>

          <!-- Color Selection -->
          <div class="mb-6">
            <label for="color" class="block text-gray-700 font-medium mb-2">Select Color:</label>
            <select
              id="color"
              name="color"
              class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
            >
              <option value="red">Red</option>
              <option value="black">Black</option>
              <option value="white">White</option>
              <option value="grey">Grey</option>
            </select>
          </div>

          <!-- Add to Cart Button -->
          <button
            id="addToCartButton"
            class="w-full bg-black text-white py-3 rounded-md hover:bg-gray-800 transition-colors"
          >
            Add to Cart
          </button>
        </div>

        <?php
            }
          }
        ?>
      </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
      document.getElementById("addToCartButton")?.addEventListener("click", function () {
        const productName = document.querySelector("h1").textContent.trim();
        const productPrice = document.querySelector("h2").textContent.trim();
        const productSize = document.getElementById("size").value;
        const productColor = document.getElementById("color").value;

        const cartItem = {
          name: productName,
          price: productPrice,
          size: productSize,
          color: productColor,
        };

        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.push(cartItem);
        localStorage.setItem("cart", JSON.stringify(cart));

        alert(`${productName} added to your cart!`);
      });
    </script>
  </body>
</html>
