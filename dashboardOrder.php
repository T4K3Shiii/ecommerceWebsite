<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Order Page</title>
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
  <body class="bg-gray-50">
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

      <!-- Right Main Content Area -->
      <div class="bg-gray-50 h-full p-6">
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl font-bold text-gray-800">Orders</h1>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
          <table class="w-full text-left border-collapse">
            <thead class="bg-gray-100 border-b">
              <tr>
                <th class="p-4 text-gray-600 font-medium">Order ID</th>
                <th class="p-4 text-gray-600 font-medium">Customer Name</th>
                <th class="p-4 text-gray-600 font-medium">Date</th>
                <th class="p-4 text-gray-600 font-medium">Total</th>
                <th class="p-4 text-gray-600 font-medium">Status</th>
                <th class="p-4 text-gray-600 font-medium">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-gray-50 border-b">
                <td class="p-4 text-gray-800">001</td>
                <td class="p-4 text-gray-800">John Doe</td>
                <td class="p-4 text-gray-800">2024-11-20</td>
                <td class="p-4 text-gray-800">$120.00</td>
                <td class="p-4 text-gray-800">
                  <select class="border p-2 rounded-lg bg-white">
                    <option value="Pending">Pending</option>
                    <option value="Shipped">Shipped</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Cancelled">Cancelled</option>
                  </select>
                </td>
                <td class="p-4">
                  <button class="text-blue-500 hover:underline">View</button> |
                  <button class="text-yellow-500 hover:underline">Edit</button>
                </td>
              </tr>
              <tr class="hover:bg-gray-50 border-b">
                <td class="p-4 text-gray-800">002</td>
                <td class="p-4 text-gray-800">Jane Smith</td>
                <td class="p-4 text-gray-800">2024-11-19</td>
                <td class="p-4 text-gray-800">$85.00</td>
                <td class="p-4 text-gray-800">
                  <select class="border p-2 rounded-lg bg-white">
                    <option value="Pending">Pending</option>
                    <option value="Shipped">Shipped</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Cancelled">Cancelled</option>
                  </select>
                </td>
                <td class="p-4">
                  <button class="text-blue-500 hover:underline">View</button> |
                  <button class="text-yellow-500 hover:underline">Edit</button>
                </td>
              </tr>
              <tr class="hover:bg-gray-50 border-b">
                <td class="p-4 text-gray-800">003</td>
                <td class="p-4 text-gray-800">Alice Brown</td>
                <td class="p-4 text-gray-800">2024-11-18</td>
                <td class="p-4 text-gray-800">$45.50</td>
                <td class="p-4 text-gray-800">
                  <select class="border p-2 rounded-lg bg-white">
                    <option value="Pending">Pending</option>
                    <option value="Shipped">Shipped</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Cancelled">Cancelled</option>
                  </select>
                </td>
                <td class="p-4">
                  <button class="text-blue-500 hover:underline">View</button> |
                  <button class="text-yellow-500 hover:underline">Edit</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
