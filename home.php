<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
<body class="bg-gray-100">
  <?php
  include  'header.php';
  ?>
    

   <!-- Promotion Banner -->
<div class="w-full h-[100vh] bg-red-500 flex flex-col lg:flex-row">
  <!-- Text Section -->
  <div
    class="w-full lg:w-[55%] h-[50vh] lg:h-full bg-[#f1f1f1] flex flex-col items-center justify-center p-5"
  >
    <h2 class="text-black text-[4rem] lg:text-[7rem] font-bold leading-none">BIG</h2>
    <h2 class="text-black text-[4rem] lg:text-[7rem] font-bold leading-none">SALE</h2>
    <h2 class="text-[2rem] lg:text-[3rem]">
      <span class="text-[3rem] lg:text-[5rem] text-red-700 font-extrabold">10%</span> Off
    </h2>
    <button
      type="button"
      class="bg-black text-white hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-6 py-3 mt-5"
    >
      Shop Now
    </button>
  </div>

  <!-- Image Section -->
  <div class="w-full lg:w-[45%] h-[50vh] lg:h-full">
    <img
      src="image/banner.jpg"
      alt="Promotion Banner"
      class="w-full h-full object-cover"
    />
  </div>
</div>


    <!-- New Product-->
<!-- New Product Section -->

<div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800" style="color:rgb(8, 8, 7);">New Products</h2>
    </div>
<div class="container py-12 flex item-center justify-center">
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php
        include 'db.php'; // Include the database connection file

        // Fetch last 4 products from the database
        $sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT 4";
        $result = mysqli_query($con, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Display each product in a card layout
                echo '
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="image/'.$row['product_image'].'" alt="'.$row['product_name'].'" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold text-gray-800">'.$row['product_name'].'</h5>
                            <p class="text-sm text-gray-600 mt-2">'.$row['description'].'</p>
                            <p class="text-lg text-blue-600 mt-2">$'.$row['price'].'</p>
                            <a href="detail.php?product_id='.$row['product_id'].'" class="mt-4 inline-block px-6 py-2 bg-black text-white rounded-lg text-sm hover:bg-gray-800">View Detail</a>
                        </div>
                    </div>';
            }
        } else {
            echo '<p>No products found.</p>';
        }
        ?>
    </div>
</div>



<div class="w-full flex flex-col">
  <div
    class="w-full py-12 flex items-center justify-center mb-5 text-white"
    style="background-color: #c2b280"
  >
    <h2 class="text-3xl">Best Seller</h2>
  </div>
  <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 px-5">
    <div class="flex flex-col shadow-lg">
      <div class="w-full h-[400px]">
        <div class="w-full h-[320px] flex items-center justify-center">
          <img src="image/shirt1.jpg" alt="Polo Shirt" class="h-[300px]" />
        </div>
        <div class="flex items-center justify-between px-5">
          <span class="text-lg font-semibold">Polo Shirt</span>
          <span class="text-lg font-semibold">$40</span>
        </div>
        <div class="w-full flex justify-end px-5 py-2">
          <a href="detail.php">
            <button
              type="button"
              class="text-white bg-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
              View Detail
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="flex flex-col shadow-lg">
      <div class="w-full h-[400px]">
        <div class="w-full h-[320px] flex items-center justify-center">
          <img src="image/hoodie1.jpg" alt="Hoodie" class="h-[300px]" />
        </div>
        <div class="flex items-center justify-between px-5">
          <span class="text-lg font-semibold">Hoodie</span>
          <span class="text-lg font-semibold">$45</span>
        </div>
        <div class="w-full flex justify-end px-5 py-2">
          <a href="detail.php">
            <button
              type="button"
              class="text-white bg-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
              View Detail
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="flex flex-col shadow-lg">
      <div class="w-full h-[400px]">
        <div class="w-full h-[320px] flex items-center justify-center">
          <img src="image/jacket4.jpg" alt="Jacket" class="h-[300px]" />
        </div>
        <div class="flex items-center justify-between px-5">
          <span class="text-lg font-semibold">Jacket</span>
          <span class="text-lg font-semibold">$60</span>
        </div>
        <div class="w-full flex justify-end px-5 py-2">
          <a href="detail.php">
            <button
              type="button"
              class="text-white bg-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
              View Detail
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="flex flex-col shadow-lg">
      <div class="w-full h-[400px]">
        <div class="w-full h-[320px] flex items-center justify-center">
          <img src="image/jean3.jpg" alt="Jeans" class="h-[300px]" />
        </div>
        <div class="flex items-center justify-between px-5">
          <span class="text-lg font-semibold">Jeans</span>
          <span class="text-lg font-semibold">$50</span>
        </div>
        <div class="w-full flex justify-end px-5 py-2">
          <a href="detail.php">
            <button
              type="button"
              class="text-white bg-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
              View Detail
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

   <?php
    include 'footer.php';
   ?>

    
</body>
</html>