<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo INC_PATH_ASSETS . 'css/styles.css'; ?>">

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-gray-900 p-2">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-center space-x-8">
                <!-- Links da Navbar -->
                <a href="<?php echo INC_PATH . 'home' ?>" class="text-white hover:text-gray-200">Home</a>
            </div>
        </div>
    </nav>