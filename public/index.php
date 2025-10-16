<?php
    // Di masa depan, di sini kita akan menempatkan logika, routing, dll.
    $pageTitle = "Welcome to Antarixa";

    // Memanggil komponen tampilan
    include '../views/header.php';

    // Konten spesifik halaman ini
    echo '<main class="container mx-auto mt-10 px-6">';
    echo '<h1 class="text-4xl font-bold text-white">Main Content Area</h1>';
    echo '<p class="text-gray-400 mt-2">This is the main entry point of our application.</p>';
    echo '</main>';

    include '../views/footer.php';
?>
