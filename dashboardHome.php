<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="output.css" />
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
    <div class="grid grid-cols-[1fr_3fr] h-[100vh] w-full bg-white">
      <!-- Left Navigation Bar -->
      <div class="bg-white h-full border-r shadow-sm">
        <nav class="flex flex-col items-start p-6 space-y-6">
          <a
            href="dashboardHome.php"
            class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full"
          >
            Dashboard
          </a>
          <a
            href="dashboardProduct.php"
            class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full"
          >
            Product
          </a>
          <a
            href="dashboardCategory.php"
            class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full"
          >
            Category
          </a>
          <a
            href="dashboardUser.php"
            class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full"
          >
            User
          </a>
          <a
            href="dashboardOrder.php"
            class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full"
          >
            Order
          </a>
        </nav>
      </div>

      <!-- Main Content Area -->
      <div class="bg-white h-full p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">
          Dashboard Overview
        </h1>
        <div class="grid grid-cols-2 gap-6">
          <div class="bg-blue-100 p-4 rounded-lg shadow-sm">
            <h2 class="text-lg font-medium text-gray-800">Total Products</h2>
            <p class="text-2xl font-bold text-blue-600 mt-2">120</p>
          </div>
          <div class="bg-green-100 p-4 rounded-lg shadow-sm">
            <h2 class="text-lg font-medium text-gray-800">Total Sales</h2>
            <p class="text-2xl font-bold text-green-600 mt-2">$15,230</p>
          </div>
          <div class="bg-yellow-100 p-4 rounded-lg shadow-sm">
            <h2 class="text-lg font-medium text-gray-800">Pending Orders</h2>
            <p class="text-2xl font-bold text-yellow-600 mt-2">45</p>
          </div>
          <div class="bg-purple-100 p-4 rounded-lg shadow-sm">
            <h2 class="text-lg font-medium text-gray-800">Registered Users</h2>
            <p class="text-2xl font-bold text-purple-600 mt-2">312</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
