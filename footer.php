<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Footer</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    />
  </head>
  <body class="bg-white">
    <footer class="mt-10 flex flex-col bg-gray-50">
      <!-- Brand Section -->
      <div class="w-full flex justify-center py-6">
        <h2 class="text-3xl md:text-5xl font-bold text-gray-800 text-center">
          T4K3Shi <span class="block text-sm md:text-base text-black">Elevate Your Style</span>
        </h2>
      </div>

      <!-- Navigation, Products, Contact Us, Location -->
      <div class="flex flex-wrap justify-evenly gap-5 md:gap-10 m-5">
        <!-- Navigation -->
        <div class="text-center md:text-left">
          <h3 class="font-bold text-lg mb-3">Navigation</h3>
          <ul class="space-y-2 text-sm text-gray-700">
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Category</a></li>
            <li><a href="#" class="hover:underline">Profile</a></li>
            <li><a href="#" class="hover:underline">Cart</a></li>
          </ul>
        </div>

        <!-- Products -->
        <div class="text-center md:text-left">
          <h3 class="font-bold text-lg mb-3">Products</h3>
          <ul class="space-y-2 text-sm text-gray-700">
            <li><a href="#" class="hover:underline">Outwear</a></li>
            <li><a href="#" class="hover:underline">Topwear</a></li>
            <li><a href="#" class="hover:underline">Pants</a></li>
          </ul>
        </div>

        <!-- Contact Us -->
        <div class="text-center md:text-left">
          <h3 class="font-bold text-lg mb-3">Contact Us</h3>
          <ul class="space-y-2 text-sm text-gray-700">
            <li><a href="#" class="hover:underline">Facebook</a></li>
            <li><a href="#" class="hover:underline">Telegram</a></li>
            <li><a href="#" class="hover:underline">Phone</a></li>
            <li><a href="#" class="hover:underline">Email</a></li>
          </ul>
        </div>

        <!-- Location -->
        <div class="text-center md:text-left">
          <h3 class="font-bold text-lg mb-3">Location</h3>
          <ul class="space-y-2 text-sm text-gray-700">
            <li>Mingalar Mandalay Unit 5 Block 10</li>
            <li>73 Street, 107-106 Street</li>
          </ul>
        </div>
      </div>

      <!-- Copyright -->
      <div class="flex justify-center m-5 pb-5">
        <span class="text-sm text-gray-500">© T4K3Shi 2024-2045. All Rights Reserved.</span>
      </div>
    </footer>
  </body>
</html>
