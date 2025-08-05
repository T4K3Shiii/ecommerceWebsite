<?php
// Include the database connection file
include 'db.php';

// Fetch products from the database
$sql = "SELECT * FROM product";
$result = $con->query($sql);
$products = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Handle form submission for adding new product
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $cate_id = $_POST['cate_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO product (product_name, product_image, cate_id, description, price)
            VALUES ('$product_name', '$product_image', '$cate_id', '$description', '$price')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('New product added successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $con->error . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Product Page</title>
    <link rel="stylesheet" href="output.css" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
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
                <a href="dashboardHome.php" class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full">Dashboard</a>
                <a href="dashboardProduct.php" class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full">Product</a>
                <a href="dashboardCategory.php" class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full">Category</a>
                <a href="dashboardUser.php" class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full">User</a>
                <a href="dashboardOrder.php" class="text-gray-700 text-lg font-medium hover:text-blue-500 w-full">Order</a>
            </nav>
        </div>

        <!-- Right Main Content Area -->
       

        <div class="bg-gray-50 h-full p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Product Listings</h1>
                <button onclick="document.getElementById('addProductModal').classList.remove('hidden')" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">Add New Product</button>
            </div>

            <!-- Product Table -->
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-100 border-b">
                        <tr>
                            
                            <th class="p-4 text-gray-600 font-medium">Name</th>
                            <th class="p-4 text-gray-600 font-medium">Price</th>
                            
                            <th class="p-4 text-gray-600 font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr class="hover:bg-gray-50 border-b">
                           
                            <td class="p-4 text-gray-800"><?php echo $product['product_name']; ?></td>
                            <td class="p-4 text-gray-800">$<?php echo $product['price']; ?></td>
                            
                            <td class="p-4">
                                <button class="text-blue-500 hover:underline">Edit</button>
                                <button class="text-red-500 hover:underline ml-2">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div id="addProductModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Add New Product</h3>
                <form action="" method="POST" class="mt-2">
                    <input type="text" name="product_name" placeholder="Product Name" class="mb-2 p-2 border rounded w-full" required>
                    <input type="text" name="product_image" placeholder="Product Image URL" class="mb-2 p-2 border rounded w-full" required>
                    <input type="number" name="cate_id" placeholder="Category ID" class="mb-2 p-2 border rounded w-full" required>
                    <textarea name="description" placeholder="Description" class="mb-2 p-2 border rounded w-full" required></textarea>
                    <input type="number" step="0.01" name="price" placeholder="Price" class="mb-2 p-2 border rounded w-full" required>
                    <div class="items-center px-4 py-3">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Add Product</button>
                        <button type="button" onclick="document.getElementById('addProductModal').classList.add('hidden')" class="ml-2 px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>