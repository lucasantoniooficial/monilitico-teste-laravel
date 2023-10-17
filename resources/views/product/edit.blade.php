<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="lg:px-8 py-2 w-full bg-white shadow-sm sm:rounded-lg">
            <form action="{{route('products.update', $product->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="grid gap-2 grid-cols-1 md:grid-cols-2">
                    <x-input type="text" value="{{$product->name}}" col-span="col-span-2" label="Nome" id="name" name="name" />
                    <x-textarea label="Descrição" col-span="col-span-2" id="description" name="description">
                        {{$product->description}}
                    </x-textarea>
                    <x-input type="text" value="{{$product->price}}" label="Preço" id="price" name="price" />
                    <x-input type="number" label="Quantidade em estoque" value="{{$product->stock_quantity}}" id="stock_quantity" name="stock_quantity" />
                </div>
                <div class="flex gap-2 mt-2 items-center">
                    <x-primary-button class="w-fit">Salvar</x-primary-button>
                    <a href="{{route('products.index')}}" class="inline-flex items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
