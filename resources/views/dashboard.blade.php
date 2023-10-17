<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="sm:px-6 gap-2 lg:px-8 grid grid-cols-1 md:grid-cols-4">
            @foreach($products as $product)
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="font-bold">{{$product->name}}</h1>
                        <hr class="my-2">
                        <p>{{$product->description}}</p>
                        <hr class="my-2">
                        <p class="font-medium">{{$product->price_parse}}</p>
                    </div>
                </div>
            @endforeach
            {{$products->links()}}
        </div>
    </div>
</x-app-layout>
