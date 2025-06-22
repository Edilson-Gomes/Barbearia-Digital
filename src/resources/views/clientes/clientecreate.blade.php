@extends('layouts.layout')

@section('conteudo')


  {{-- <body class="bg-gray-100 py-10"> --}}
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
      <h2 class="text-2xl font-bold mb-6 text-center">Cadastro de Cliente</h2>

      <form action="/store" method="POST" class="space-y-5">
        @csrf
        <!-- Nome -->
        <div>
          <label for="nome" class="block font-medium mb-1">Nome</label>
          <input type="text" id="nome" name="nome" required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
        </div>

        <!-- Telefone -->
        <div>
          <label for="telefone" class="block font-medium mb-1">Telefone</label>
          <input type="tel" id="telefone" name="telefone" required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block font-medium mb-1">E-mail</label>
          <input type="email" id="email" name="email" required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
        </div>

        <!-- CPF -->
        <div>
          <label for="cpf" class="block font-medium mb-1">CPF</label>
          <input type="text" id="cpf" name="cpf" required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
        </div>

        <!-- Data de Nascimento -->
        <div>
          <label for="data_nascimento" class="block font-medium mb-1">Data de Nascimento</label>
          <input type="date" id="data_nascimento" name="data_nascimento" required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
        </div>

        <!-- Botão -->
        <div class="text-center">
          <button type="submit"
            class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition">Cadastrar</button>
        </div>
      </form>
    </div>
  {{-- </body> --}}

@endsection