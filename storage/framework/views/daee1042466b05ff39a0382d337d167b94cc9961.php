<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Laravello')); ?></title>
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
</head>

<body class="h-screen text-gray-800">
    <div id="app"></div>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/laravello/resources/views/welcome.blade.php ENDPATH**/ ?>