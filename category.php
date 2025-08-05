<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Category</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements@1.0.0/dist/js/index.min.js"></script>
  </head>
  <body class="bg-gray-100">
    <?php

    include 'header.php';
    ?>
    
    <!-- Product -->
    <?php
$cate_id = 1; 
$cate_name = "Tee";

if (isset($_GET['cate_id']) && isset($_GET['cate_name'])) {
    $cate_id = $_GET['cate_id'];
    $cate_name = $_GET['cate_name'];
}
?>



    <div class="w-full flex flex-col mt-16">
      <div
        class="w-full py-12 flex items-center justify-center mb-5 text-white"
        style="background-color: #c2b280"
      >
        <h2 class="text-3xl"><?php echo $cate_name; ?></h2>
      </div>
      <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-1  px-4">
  <?php
      $str = "select * from product where cate_id=$cate_id";
      $ans = $con->query($str);
      while ($row = mysqli_fetch_assoc($ans)) {
          $product_id = $row["product_id"];
          $product_name = $row["product_name"];
          $price = $row["price"];
          $product_image = $row["product_image"];
          $description = $row["description"];
  ?>  <form action="detail.php" method="get">
      <div class="w-full flex flex-col transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg shadow-xl">
        <div class="w-full h-[400px] shadow-lg">
          <div class="w-full h-[320px] flex items-center justify-center">
            <img src="image/<?php echo $product_image; ?>" alt="" class="h-[300px]" />
          </div>
          <div class="flex item-center justify-between px-10">
            <span class="text-xl font-semibold"><?php echo $product_name; ?></span>
            <span class="text-xl font-semibold"><?php echo $price; ?>$</span>
          </div>
          <div class="w-full flex justify-end px-5 py-2">
            <a href="detail.php?product_id=<?php echo $product_id; ?>">
              <button
                type="button"
                class="text-white bg-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
              >
                View Detail
              </button>
            </a>
          </div>
        </div>
      </div>
      </form>
  <?php } ?>
</div>
</div>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>


    
  </body>
</html>
