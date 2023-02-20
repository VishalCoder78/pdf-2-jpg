<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="flex-row items-center justify-center h-52 w-36 " >
            <img src="/storage/<?php echo $echo ?>.png" alt="image" class="h-44 w-36">
            <a href="/storage/<?php echo $echo ?>.png" class="btn bg-indigo-600 hover:bg-indigo-800 text-white pt-1 pb-2.5">Download Image</a>
        </div>
        <a  href="/storage/<?php echo $echo ?>.png"  target="_blank" download  >Download image</a>
    
        <div>
        </div>
    </div>
</body>
</html>