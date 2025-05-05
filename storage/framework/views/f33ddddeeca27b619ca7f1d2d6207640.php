<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 <title>Product List - Tutorial CRUD Laravel 12 @ qadrlabs.com</title>
 <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
<div class="container mx-auto mt-10 mb-10 px-10">
 <div class="grid grid-cols-8 gap-4 mb-4 p-5">
 <div class="col-span-4 mt-2">
 <h1 class="text-3xl font-bold">
 DAFTAR PRODUCT
 </h1>
 </div>
 <div class="col-span-4">
 <div class="flex justify-end">
 <a href="<?php echo e(route('product.create')); ?>"
 class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs
leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg
focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800
active:shadow-lg transition duration-150 ease-in-out"
 id="add-product-btn">Add Product</a>
 </div>
 </div>
 </div>
 <div class="bg-white p-5 rounded shadow-sm">
 <!-- Notifikasi menggunakan flash session data -->
 <?php if(session('success')): ?>
 <div class="p-3 rounded bg-green-500 text-green-100 mb-4">
 <?php echo e(session('success')); ?>

 </div>
 <?php endif; ?>
 <div class="relative overflow-x-auto">
 <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
 <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700
dark:text-gray-400">
 <tr>
 <th scope="col" class="px-6 py-3">
 No
 </th>
 <th scope="col" class="px-6 py-3">
 Product name
 </th>
 <th scope="col" class="px-6 py-3">
 Code
 </th>
 <th scope="col" class="px-6 py-3">
 Stock
 </th>
 <th scope="col" class="px-6 py-3">
 Price
 </th>
 <th scope="col" class="px-6 py-3">
 Action
 </th>
 </tr>
 </thead>
 <tbody>
 <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 bordergray-200">
 <td class="px-6 py-4">
 <?php echo e($loop->iteration); ?>

 </td>
 <td class="px-6 py-4">
 <?php echo e($product->name); ?>

 </td>
 <td class="px-6 py-4">
 <?php echo e($product->code); ?>

 </td>
 <td class="px-6 py-4">
 <?php echo e($product->stock); ?>

 </td>
 <td class="px-6 py-4">
 <?php echo e($product->price); ?>

 </td>
 <td class="px-6 py-4">
 <form onsubmit="return confirm('Apakah Anda Yakin ?');"
 action="<?php echo e(route('product.destroy', $product)); ?>" method="POST">
 <?php echo csrf_field(); ?>
 <?php echo method_field('DELETE'); ?>
 <a href="<?php echo e(route('product.show', $product)); ?>" id="<?php echo e($product->id); ?>-
edit-btn"
 class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium
text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg
focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600
active:shadow-lg transition duration-150 ease-in-out">View</a>
 <a href="<?php echo e(route('product.edit', $product)); ?>" id="<?php echo e($product->id); ?>-
edit-btn"
 class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium
text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-500 hover:shadow-lg 
focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600
active:shadow-lg transition duration-150 ease-in-out">Edit</a>
 <button type="submit"
 class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium
text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg
focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800
active:shadow-lg transition duration-150 ease-in-out"
 id="<?php echo e($product->id); ?>-delete-btn">Delete
 </button>
 </form>
 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
 <tr>
 <td class="text-center text-sm text-gray-900 px-6 py-4 whitespace-nowrap"
colspan="6">
 Data Empty
 </td>
 </tr>
 <?php endif; ?>
 </tbody>
 </table>
 </div>
 </div>
 <div class="mt-3">
 <?php echo e($products->links()); ?>

 </div>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sample-app\resources\views/products/index.blade.php ENDPATH**/ ?>