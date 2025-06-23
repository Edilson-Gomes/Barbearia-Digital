@extends('layouts.layout')

@section('conteudo')

@if (session('msg'))
  <div class="mb-4 text-green-600 text-sm text-center">
    {{ session('msg') }}
  </div>
@endif

<div class="bg-gray-100 min-h-screen py-12">
  <div class="max-w-4xl mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Meus Agendamentos</h2>

    @if ($agendamentos->isEmpty())
      <p class="text-center text-gray-600">Você ainda não tem agendamentos registrados.</p>
    <br><br>
    <div class="text-center">
      <a href="agendamento" class="text-center bg-black text-white px-6 py-3 rounded hover:bg-gray-800">Agendar agora</a>
    </div>
    @else
      <ul class="space-y-4">
        @foreach ($agendamentos as $agendamento)
          <li class="bg-gray-50 p-4 rounded shadow-sm flex justify-between items-center">
            <div>
              <p class="font-medium text-lg">{{ $agendamento->servico }}</p>
              <p class="text-sm text-gray-500">
                {{ \Carbon\Carbon::parse($agendamento->data)->format('d/m/Y') }} às {{ \Carbon\Carbon::parse($agendamento->horario)->format('H:i') }}
                com <span class="font-semibold">{{ $agendamento->profissional->nome ?? 'Profissional não encontrado' }} | {{ $agendamento->profissional->profissao }}</span>
              </p>
            </div>
            <form action="{{ route('agendamento_destroy', $agendamento->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                Cancelar
              </button>
            </form>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
</div>

@endsection

