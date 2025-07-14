@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold text-black">Estoque</h2>
    <a href="{{ route('produtos.create') }}" class="text-green-600 ">
      + Adicionar Produto
    </a>
  </div>

  <div class="grid md:grid-cols-2 lg:grid-cols-1 gap-5">
    @foreach ($produtos as $produto)
      <div class="bg-gray-200 p-5" >
        <h3 class="text-xl font-semibold text-black mb-1">{{ $produto->nome }}</h3>
        <p class="text-black">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>

        <div class="mt-4 flex gap-2">
          <a href="{{ route('produtos.edit', $produto->id) }}" class=" bg-black text-white font-medium px-4 py-2 rounded-lg text-center">
            Editar
          </a>

          <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="flex-1">
            @csrf
            @method('DELETE')
            <button type="submit" class=" bg-red-500 text-white font-medium px-4 py-2 rounded-lg">
              Remover
            </button>
          </form>
        </div>
      </div>
    @endforeach
  </div>

  
@endsection
