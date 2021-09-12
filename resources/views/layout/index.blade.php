<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="flex flex-col h-screen text-white justify-between">

    @include('includes.header')
    <main class="p-4 flex-grow bg-gray-700">
        <section class="relative main-h-screen flex items-center">
            <div class="container mx-auto  mb-auto text-center p-4">

                <p class="text-7xl">Welcome to <span class="text-purple-500">Social Event</span></p>
                <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded m-8" onclick="window.location='/invite'">
                    Button
                </button>
            </div>
        </section>
    </main>
    @include('includes.footer')
</body>
</html>
