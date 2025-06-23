@extends('layouts.layout')

@section('conteudo')

@if (session('msg'))
    <div class="mb-4 text-red-600 text-sm text-center">
      {{ session('msg') }}
    </div>
@endif

  <body class="bg-gray-100 text-gray-800">

    <!-- Boas-vindas -->
    <section class="bg-white py-16">
      <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-2">Bem-vindo, {{ Auth::guard('cliente')->user()->nome }}!</h2>
        <p class="text-gray-600">Aqui você pode acompanhar seus agendamentos, editar seu perfil e muito mais.</p>
      </div>
    </section>

    <!-- Próximo agendamento -->
    <section class="py-12 bg-gray-50">
      <div class="max-w-4xl mx-auto px-4">
        <h3 class="text-2xl font-semibold mb-6">Próximo Agendamento</h3>
        <div class="bg-white rounded shadow p-6 flex items-center justify-between">
          <div>
            <p class="text-lg font-medium">Corte + Barba</p>
            <p class="text-gray-600">Quarta-feira, 25 de Junho às 15:00</p>
          </div>
          <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancelar</a>
        </div>
      </div>
    </section>

    <!-- Histórico de serviços -->
    <section class="py-12 bg-white">
      <div class="max-w-4xl mx-auto px-4">
        <h3 class="text-2xl font-semibold mb-6">Histórico de Serviços</h3>
        <ul class="space-y-4">
          <li class="bg-gray-50 p-4 rounded shadow-sm">
            <div class="flex justify-between">
              <span>Corte Masculino</span>
              <span class="text-sm text-gray-500">10 de Junho, 2025</span>
            </div>
          </li>
          <li class="bg-gray-50 p-4 rounded shadow-sm">
            <div class="flex justify-between">
              <span>Barba</span>
              <span class="text-sm text-gray-500">27 de Maio, 2025</span>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-black text-white py-6 mt-10">
      <div class="max-w-6xl mx-auto px-4 text-center">
        <p>© 2025 Barbearia Digital. Feito com estilo.</p>
      </div>
    </footer>
  </body>
</html>

@endsection