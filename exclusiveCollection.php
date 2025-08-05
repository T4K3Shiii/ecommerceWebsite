<?php
include 'db.php';

// Query to get all products from the exclusive_collection table
$sql = "SELECT * FROM exclusive_collection";
$result = mysqli_query($con, $sql);

// Check if the query was successful and fetch the products
if ($result) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "Error: " . mysqli_error($con);
}

include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exclusive Collection</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements@1.0.0/dist/js/index.min.js"></script>
</head>
<body class="bg-gray-100">

<!-- Header Section -->
<div class="bg-blue-600 flex items-center justify-center py-5 text-white text-3xl font-semibold mt-[60px]">
    Exclusive Collection & Limited Edition
</div>

<!-- Products Section -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 p-5">
    <?php foreach ($products as $product): ?>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Product Image -->
            <div class="w-full h-60 flex items-center justify-center bg-gray-100">
                <?php if (file_exists("image/" . $product['image_name'])): ?>
                    <img src="image/<?php echo htmlspecialchars($product['image_name']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="w-full h-full object-cover" />
                <?php else: ?>
                    <img src="image/default.jpg" alt="Default Image" class="w-full h-full object-cover" />
                <?php endif; ?>
            </div>

            <!-- Product Info -->
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800"><?php echo htmlspecialchars($product['name']); ?></h3>
                <p class="text-sm text-gray-600 mb-3"><?php echo htmlspecialchars($product['description']); ?></p>
                <div class="flex justify-between items-center mb-3">
                    <span class="text-xl font-semibold text-gray-800">$<?php echo number_format($product['price'], 2); ?></span>
                    
                </div>
                <div class="flex justify-end">
                    <a href="detailForExclusive.php?id=<?php echo $product['id']; ?>">
                        <button class="px-5 py-2 bg-gradient-to-r from-red-400 via-red-500 to-red-600 text-white rounded-md hover:bg-gradient-to-br focus:outline-none focus:ring-4 focus:ring-red-300">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
include 'footer.php';
?>

</body>
</html>
