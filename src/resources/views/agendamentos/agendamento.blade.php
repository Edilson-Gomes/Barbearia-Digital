@extends('layouts.layout')

@section('conteudo')

<div class="bg-gray-100 min-h-screen py-12">
  <div class="max-w-3xl mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Agendar Serviço</h2>

    @if(session('success'))
      <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('agendamento_store') }}" method="POST" class="space-y-6">
      @csrf

      <!-- Serviço -->
      <div>
        <label for="servico" class="block font-medium mb-1">Serviço</label>
        <select id="servico" name="servico" required
          class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black">
          <option value="">Selecione um serviço</option>
            <option value="Corte">Corte Maculino</option>
            <option value="Barba_Sobrancelha">Barba e Sobrancelha</option>
            <option value="Hidratacao">Hidratação</option>
            <option value="Massagem_Capilar">Massagem Capilar</option>
        </select>
      </div>

      <!-- Data -->
      <div>
        <label for="data" class="block font-medium mb-1">Data</label>
        <input type="date" id="data" name="data" required
          class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
      </div>

      <!-- Horário -->
      <div>
        <label for="horario" class="block font-medium mb-1">Horário</label>
        <input type="time" id="horario" name="horario" required
          class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black" />
      </div>

      <!-- Profissional -->
      <div>
        <label for="profissional_id" class="block font-medium mb-1">Profissional</label>
        <select id="profissional_id" name="profissional_id" required
          class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-black">
          <option value="">Selecione um profissional</option>
          @foreach($profissionais as $prof)
            @if ($prof->disponivel == 1)
            <option value="{{ $prof->id }}">{{ $prof->nome }} | {{ $prof->profissao }}</option>
            @endif
          @endforeach
        </select>
      </div>

      <!-- Botão -->
      <div class="text-center">
        <button type="submit"
          class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition">Confirmar Agendamento</button>
      </div>
    </form>
  </div>
</div>

@endsection