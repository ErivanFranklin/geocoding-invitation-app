@extends('layout.app')
@section('title', 'Home')

@section('content')
    <main class="p-4 flex-grow bg-gray-700">
        <section>
            <div class="container mx-auto  mb-auto text-center p-4">
                <p class="text-7xl">Welcome to the <span class="text-purple-500">Social Event</span></p>
                <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded m-8"
                    onclick="window.location='/invite'">
                    Invite People
                </button>
            </div>
        </section>
    </main>
@endsection
