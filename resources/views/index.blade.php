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
<body class="bg-gray-700 flex flex-col h-screen text-white justify-between">
    <header class="h-10">
         <div class="container max-auto flex justify-between p-4">
             <h1 class="text-xl font-black">Geolocation APP</h1>
         </div>
    </header>
    <main class="mb-auto h-10 p-10">
        <section class="relative main-h-screen flex items-center">
            <div class="container mx-auto text-center p-4">
                <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="{{App\Http\Controllers\InviteController::invite();}}">
                    Button
                </button>
                {{-- <div class="w-1/3 bg-gray-500 rounded-lg shadow mx-auto text-center">
                    <ul class="divide-y-2 divide-gray-100">
                        @foreach($invite as $item)
                           <li class="p-3 flex flex-row justify-between">
                               <div class="flex flex-col">
                                    <div class="text-left">{{$item['name']}}</div>
                                    <div class="flex justify-between">
                                        <div class="text-gray-700">Id: {{$item['affiliate_id']}} - {{$item['kilometers']}} Km</div>
                                    </div>
                               </div>
                               <div class="flex">
                                    <img style="width: 50px;" src="https://img.icons8.com/ios-filled/50/000000/world-map--v1.png"/>
                               </div>
                           </li>
                        @endforeach
                    </ul>
                </div> --}}
            </div>
        </section>
    </main>
    <footer class="h-10">
        <div class="container mx-auto text-center">
            <p>&copy; Erivan Franklin da Silva | laravel demo</p>
        </div>
    </footer>
</body>
</html>
