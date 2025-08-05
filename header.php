<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <?php
  include 'db.php'; 
  ?>
  <div class="w-full fixed shadow-md mb-10 top-0 left-0 z-50">
    <nav class="bg-white shadow-md w-full fixed mb-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          <div class="flex items-center space-x-4">
            <a href="home.php" class="text-3xl font-bold text-gray-800">T4K3Shi</a>
          </div>
          <div class="hidden md:flex items-center space-x-8">
            <a href="home.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <div class="relative">
              <button type="button" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium inline-flex items-center" id="dropdownButton">
                Category
                <span><i class="bi bi-caret-down-fill"></i></span>
              </button>
              <div class="origin-top-left absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="dropdownMenu">
                <div class="py-1">
                  <?php
                  $str = "SELECT * FROM category";
                  $rec = $con->query($str);
                  if ($rec && $rec->num_rows > 0) {
                      while ($row = $rec->fetch_assoc()) {
                          $id = $row["cate_id"];
                          $name = $row["cate_name"];
                          echo '<a href="category.php?cate_id=' . $id . '&cate_name=' . $name . '" class="block px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-100">'
                          . $row["cate_name"] . '</a>'; 
                      }
                  } else {
                      echo '<p class="px-4 py-2 text-sm text-gray-500">No categories available</p>';
                  }
                  ?>
                </div>
              </div>
            </div>
            <a href="exclusiveCollection.php" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Exclusive Collection</a>
            <input type="text" placeholder="Search" class="px-3 py-2 border border-gray-300 rounded-md h-10"/>
            <a href="register.php" class="text-gray-900 hover:text-gray-700 flex items-center">
              <i class="bi bi-person-circle h-6 w-6"></i>
            </a>
            <a href="addtocart.php" class="text-gray-900 hover:text-gray-700 flex items-center">
              <i class="bi bi-cart-fill h-6 w-6"></i>
            </a>
          </div>
          <div class="md:hidden flex items-center">
            <button id="mobileMenuButton">
              <i class="bi bi-list h-6 w-6"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="md:hidden hidden px-2 pt-2 pb-3 space-y-1" id="mobileMenu">
        <a href="home.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Home</a>
        <a href="exclusiveCollection.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Exclusive Collection</a>
        <!-- Mobile Category Button -->
        <div class="relative">
          <button type="button" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium inline-flex items-center" id="mobileDropdownButton">
            Category
            <span><i class="bi bi-caret-down-fill"></i></span>
          </button>
          <div class="origin-top-left absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="mobileDropdownMenu">
            <div class="py-1">
              <?php
              $str = "SELECT * FROM category";
              $rec = $con->query($str);
              if ($rec && $rec->num_rows > 0) {
                  while ($row = $rec->fetch_assoc()) {
                      $id = $row["cate_id"];
                      $name = $row["cate_name"];
                      echo '<a href="category.php?cate_id=' . $id . '&cate_name=' . $name . '" class="block px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-100">'
                      . $row["cate_name"] . '</a>'; 
                  }
              } else {
                  echo '<p class="px-4 py-2 text-sm text-gray-500">No categories available</p>';
              }
              ?>
            </div>
          </div>
        </div>
        <input type="text" placeholder="Search" class="block w-full px-3 py-2 border border-gray-300 rounded-md"/>
        <a href="register.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Acc</a>
        <a href="addtocart.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Cart</a>
      </div>
    </nav>
  </div>

  <script>
    // Toggle dropdown for desktop
    document.getElementById("dropdownButton").addEventListener("click", function () {
        const dropdownMenu = document.getElementById("dropdownMenu");
        dropdownMenu.classList.toggle("hidden");
    });

    // Toggle mobile menu
    document.getElementById("mobileMenuButton").addEventListener("click", function () {
        document.getElementById("mobileMenu").classList.toggle("hidden");
    });

    // Toggle dropdown for mobile
    document.getElementById("mobileDropdownButton").addEventListener("click", function () {
        const mobileDropdownMenu = document.getElementById("mobileDropdownMenu");
        mobileDropdownMenu.classList.toggle("hidden");
    });
  </script>
</body>
</html>
