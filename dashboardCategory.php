<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Category Page</title>
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
          <h1 class="text-2xl font-bold text-gray-800">Categories</h1>
          <button
            class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600"
          >
            Add New Category
          </button>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
          <table class="w-full text-left border-collapse">
            <thead class="bg-gray-100 border-b">
              <tr>
                <th class="p-4 text-gray-600 font-medium">Category Name</th>
                <th class="p-4 text-gray-600 font-medium">Subcategories</th>
                <th class="p-4 text-gray-600 font-medium">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-gray-50 border-b">
                <td class="p-4 text-gray-800">Topwear</td>
                <td class="p-4 text-gray-800">Tee, Polo, Shirt</td>
                <td class="p-4">
                  <button class="text-blue-500 hover:underline">Edit</button>
                </td>
              </tr>
              <tr class="hover:bg-gray-50 border-b">
                <td class="p-4 text-gray-800">Outwear</td>
                <td class="p-4 text-gray-800">Jacket, Hoodie</td>
                <td class="p-4">
                  <button class="text-blue-500 hover:underline">Edit</button>
                </td>
              </tr>
              <tr class="hover:bg-gray-50 border-b">
                <td class="p-4 text-gray-800">Pants</td>
                <td class="p-4 text-gray-800">
                  Short Pants, Jean Pants, Cargo Pants
                </td>
                <td class="p-4">
                  <button class="text-blue-500 hover:underline">Edit</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
