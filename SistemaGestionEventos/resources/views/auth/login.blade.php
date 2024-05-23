<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-login {
            background-image: url('/images/login.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-login flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white bg-opacity-90 p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Iniciar Sesión</h2>
        
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Correo Electrónico</label>
                <input id="email" type="email" class="mt-2 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña</label>
                <input id="password" type="password" class="mt-2 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="ml-2 text-gray-700">Recordarme</label>
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Iniciar Sesión</button>
            </div>

            @if (Route::has('password.request'))
                <div class="text-center mb-4">
                    <a class="text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                </div>
            @endif

            @if (Route::has('register'))
                <div class="text-center">
                    <a class="text-sm text-blue-600 hover:underline" href="{{ route('register') }}">¿No tienes una cuenta? Regístrate</a>
                </div>
            @endif
        </form>
    </div>
</body>
</html>
