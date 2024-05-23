<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Registro</h2>
        
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nombre</label>
                <input id="name" type="text" class="mt-2 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo Electrónico</label>
                <input id="email" type="email" class="mt-2 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña</label>
                <input id="password" type="password" class="mt-2 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" class="mt-2 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Registrarse</button>
            </div>

            <div class="text-center">
                <a class="text-sm text-blue-600 hover:underline" href="{{ route('login') }}">¿Ya tienes una cuenta? Iniciar Sesión</a>
            </div>
        </form>
    </div>
</body>
</html>
