<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barbearia-Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
<!-- Header -->
    <header class="bg-black text-white py-6 shadow-md">
      <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
        <h1 class="text-3xl font-bold">Barbearia Digital</h1>
        <nav class="space-x-4 flex">
          <a href="/" class="hover:text-gray-400">Início</a>
          @cliente
          <a href="agendamentos" class="hover:text-gray-400">Meus Agendamentos</a>
          @else
          <a href="#" class="hover:text-gray-400">Serviços</a>
          @endcliente
          <a href="#" class="hover:text-gray-400">Sobre</a>
          @cliente
          <details class="text-end">
          <summary class="hover:text-gray-400">{{Auth::guard('cliente')->user()->nome}}</summary>
          <ul>
            <li>
                <a class="hover:text-gray-400" href="/cliente">Perfil</a>
            </li>
            <li>
                <form action="{{ route('logout')}}" method="POST" class="text-end">
                @csrf
                <button type="submit" class="hover:text-gray-400">Sair</button>
                </form>
            </li>
          </ul>
          </details>
          @else
          <a href="/login" class="hover:text-gray-400">Entrar</a>
          @endcliente
        </nav>
      </div>
    </header>
    @yield('conteudo')

</body>
</html>