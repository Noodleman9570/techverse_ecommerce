
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
	</header>
    <div class="logo-container">
        <img 
            src="./images/logo.png" 
            alt="logo" 
            class="logo_p"
        />
    </div>
    <div class="login">
        <div class="form-container">
            <form method="POST" action="{{ route('register') }}" class="form">
                @csrf
                <label for="name" class="label">
                    Nombre
                </label>
                <input 
                    name="name"
                    type="text" 
                    id="name" 
                    placeholder="Pedro" 
                    class="input input-name"
                />

                <label for="lastname" class="label">
                    Apellido
                </label>
                <input 
                    name="apellido"
                    type="text" 
                    id="apellido" 
                    placeholder="zambrano" 
                    class="input input-name"
                />
                
                <label for="email" class="label">
                    Correo
                </label>
                <input 
                    name="email"
                    type="email" 
                    id="email" 
                    placeholder="me@example.com" 
                    class="input input-email"
                />

                <label for="email" class="label">
                    Telefono
                </label>
                <input 
                    name="telefono"
                    type="text" 
                    id="telefono" 
                    placeholder="me@example.com" 
                    class="input input-email"
                />

                <label for="direccion" class="label">
                    Direccion
                </label>
                <input 
                    name="direccion"
                    type="text" 
                    id="direccion" 
                    placeholder="Centro" 
                    class="input input-email"
                />

                <label for="password" class="label">
                    Contraseña
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
                    Registrase
                </button>
            </form>
        </div>
    </div>
</body>
</html>

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="bg-[#a9ecef]">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- LastName -->
        <div class="mt-4">
            <x-input-label for="apellido" :value="__('Apellido')" />
            <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido" />
            <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email - Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="telefono" :value="__('Número Telefónico')" />
            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autocomplete="telefono" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>

        <!-- Direction -->
        <div class="mt-4">
            <x-input-label for="direccion" :value="__('Dirección')" />
            <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autocomplete="direccion" />
            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Ya está registrado?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
