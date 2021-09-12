@extends('layout.index')

{{-- @include('includes.header') --}}

<div class="w-1/3 bg-gray-500 rounded-lg shadow mx-auto text-center">
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
</div>

{{-- @include('includes.footer') --}}
