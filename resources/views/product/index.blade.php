<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between align-items">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Produtos') }}
            </h2>
            <a href="{{route('products.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Cadastrar</a>
        </div>
    </x-slot>
    <div class="py-12">
        @if(session()->has('status'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 shadow-md" role="alert">
                <span class="font-medium">{{session('status')}}</span>
            </div>
            @php
                session()->forget('status')
            @endphp
        @endif
        <div class="lg:px-8 relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nome</th>
                        <th scope="col" class="px-6 py-3">Preço</th>
                        <th scope="col" class="px-6 py-3">Quantidade em estoque</th>
                        <th scope="col" class="px-6 py-3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">{{$product->name}}</td>
                            <td class="px-6 py-4">{{$product->price_parse}}</td>
                            <td class="px-6 py-4">{{$product->stock_quantity}}</td>
                            <td class="px-6 py-4">
                                <a href="{{route('products.edit', $product->id)}}" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Editar</a>
                                <a href="{{route('products.destroy', $product->id)}}" onclick="event.preventDefault(); document.getElementById('form-delete-{{$product->id}}').submit()" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Excluir</a>
                                <form action="{{route('products.destroy', $product->id)}}" id="form-delete-{{$product->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$products->links()}}
        </div>
    </div>
</x-app-layout>
