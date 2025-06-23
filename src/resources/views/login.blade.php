@extends('layouts.layout')

@section('conteudo')

<div class="max-w-md mx-auto bg-white p-8 rounded shadow mt-20">
  <h2 class="text-2xl font-bold mb-6 text-center">Login do Cliente</h2>

  @if ($errors->any())
    <div class="mb-4 text-red-600 text-sm text-center">
      {{ $errors->first() }}
    </div>
  @endif

  <form action="{{ route('login') }}" method="POST" class="space-y-5">
    @csrf

    <!-- Email -->
    <div>
      <label for="email" class="block font-medium mb-1">E-mail</label>
      <input type="email" id="email" name="email" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
    </div>

    <!-- Senha -->
    <div>
      <label for="senha" class="block font-medium mb-1">Senha</label>
      <input type="password" id="senha" name="senha" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
    </div>

    <!-- Botão -->
    <div class="text-center">
      <button type="submit"
        class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition">Entrar</button>
    </div>
  </form>
  <div class="text-end hover:underline">
    <a href="cadastrar/cliente">Cadastrar-se</a>
  </div>
</div>

@endsection