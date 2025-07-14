@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
  <div>
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold text-black">Editar</h2>
      <a href="{{ route('produtos.index') }}"
         class="text-sm text-black">
         ← Voltar
      </a>
    </div>

    <form action="{{ route('produtos.update', $produto) }}" method="POST" class="space-y-4">
      @csrf
      @method('PUT')

      <div>
        <label class="block text-sm text-black">Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}" class="w-full px-4 py-2 rounded bg-gray-300 text-black" required>
      </div>

      <div>
        <label class="block text-sm  text-black">Preço:</label>
        <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}" class="w-full px-4 py-2 rounded bg-gray-300 text-black" required>
      </div>

      <div>
        <label class="block text-sm text-black">Estoque:</label>
        <input type="number" name="estoque" value="{{ $produto->estoque }}" class="w-full px-4 py-2 rounded bg-gray-300 text-black"required>
      </div>

      <button type="submit"
              class="bg-black text-white px-6 py-2 rounded-md shadow-md">
        Atualizar
      </button>
    </form>
  </div>
@endsection
