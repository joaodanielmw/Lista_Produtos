@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')
  <div>
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold text-black">Novo Produto</h2>
      <a href="{{ route('produtos.index') }}"
         class="text-sm text-black">
         ← Voltar
      </a>
    </div>

    <form action="{{ route('produtos.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm text-black">Nome:</label>
        <input type="text" name="nome" class="w-full px-4 py-2 rounded bg-gray-300  text-black" required>
      </div>

      <div>
        <label class="block text-sm text-black">Preço:</label>
        <input type="number" step="0.01" name="preco" class="w-full px-4 py-2 rounded bg-gray-300 text-black" required>
      </div>

      <div>
        <label class="block text-sm text-black">Estoque:</label>
        <input type="number" name="estoque" class="w-full px-4 py-2 rounded bg-gray-300 text-black" required>
      </div>

      <div>
        <label class="block text-sm text-black">Categoria:</label>
        <select name="categoria_id" class="w-full px-4 py-2 rounded bg-gray-300 required text-black" required>
          <option value="">Selecione uma categoria</option>
          @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="bg-black text-white px-6 py-2 rounded-md">
        Salvar
      </button>
    </form>
  </div>
@endsection
