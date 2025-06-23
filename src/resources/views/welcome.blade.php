@extends('layouts.layout')

@section('conteudo')

{{-- <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barbearia Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head> --}}

  <body class="bg-gray-100 text-gray-800">
    

    <!-- Hero -->
    <section class="bg-gray-200 py-20">
      <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">Estilo é confiança</h2>
        <p class="text-lg text-gray-700 mb-6">Agende seu horário com os melhores profissionais da região.</p>
        @cliente
        <a href="agendar" class="bg-black text-white px-6 py-3 rounded hover:bg-gray-800">Agendar agora</a>
        @else
        <a href="/login" class="bg-black text-white px-6 py-3 rounded hover:bg-gray-800">Agendar agora</a>
        @endauth
      </div>
    </section>

    <!-- Serviços -->
    <section class="py-16 bg-white">
      <div class="max-w-6xl mx-auto px-4">
        <h3 class="text-3xl font-bold text-center mb-12">Nossos Serviços</h3>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-gray-50 p-6 rounded shadow hover:shadow-lg transition">
            <h4 class="text-xl font-semibold mb-2">Corte Masculino</h4>
            <p class="text-gray-600">Estilos modernos ou clássicos, com acabamento profissional.</p>
          </div>
          <div class="bg-gray-50 p-6 rounded shadow hover:shadow-lg transition">
            <h4 class="text-xl font-semibold mb-2">Barba e Sobrancelha</h4>
            <p class="text-gray-600">Cuidado completo para um visual impecável.</p>
          </div>
          <div class="bg-gray-50 p-6 rounded shadow hover:shadow-lg transition">
            <h4 class="text-xl font-semibold mb-2">Tratamentos</h4>
            <p class="text-gray-600">Hidratação, massagem capilar e outros tratamentos premium.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-black text-white py-6 mt-10">
      <div class="max-w-6xl mx-auto px-4 text-center">
        <p>© 2025 Barbearia Digital. Todos os direitos reservados.</p>
      </div>
    </footer>
  </body>
</html>

@endsection