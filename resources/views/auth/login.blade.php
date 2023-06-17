{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email - Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center " >
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-[#20acb8]" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Iniciar sesión') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./logos/favicon_bota_fora.svg" type="img">
	<link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/login.css">
    <title>Document</title>
</head>
<body>
    <img 
        class="wall" 
        src="./images/back.jpg" 
        alt="wallpaper"
    />
    <header>
		<a href="{{ route('home') }}">
			<img
                class="logo" 
				width="300px" 
				src="images/logo.png" 
				alt="logo-sale"
			/>
		</a> 
		<nav class="nav-bar">
            <div class="navbar-left">        
                <ul>
                    <li>
                        <a href="{{ route('home') }}">All</a>
                    </li>
                    <li>
                        <a href="/">Electronics</a>
                    </li>
                    <li>
                        <a href="/">Hogar</a>
                    </li>
                </ul>
            </div>
            
		</nav>		
	</header>
    <div class="logo-container">
        <img 
            src="./images/logo.png" 
            alt="logo" 
            class="logo_p"
        />
    </div>
    <main class="login">
        <div class="form-container">
            <form method="POST" class="form" action="{{ route('login') }}">
                @csrf
                <label for="email" class="label">
                    Email address
                </label>
                <input 
                    type="email" 
                    name="email"
                    id="email" 
                    placeholder="me@example.com" 
                    class="input input-email"
                />

                <label for="password" class="label">
                    contraseña
                </label>
                <input 
                    name="password"
                    type="password" 
                    id="password" 
                    placeholder="******" 
                    class="input input-password"
                />
                <button 
                type="submit"
                class="primary-button login-button">
                    Log in
                </button>
              
                <a href="change-password.html">Olvide mi contraseña</a>
            </form>
            <a href="{{ route('register') }}">
                <button class="primary-button secondary-button">
                    Registrarse
                </button>
            </a>
        </div>
    </main>
</body>
</html>