<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div>
        <h1 class="text-4xl">PDF to JPG Convertor Tool</h1>
        <div>
            <form action="{{url('/convert')}}" method="POST">
                @csrf
                <input type="file" name="file">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 p-2 rounded-md ">Convert into Image</button>
            </form>
        </div>

    </div>
</body>
</html>