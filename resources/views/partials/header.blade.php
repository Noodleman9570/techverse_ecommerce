<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rezzl="shortcut icon" href="./logos/favicon_bota_fora.svg" type="img">
    <script src="https://kit.fontawesome.com/ababcc1d5a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('styles') }}/index.css">
    <link rel="stylesheet" href="{{ asset('styles') }}/login.css">
    <title>Document</title>
</head>
<body id="body">
    <img 
        class="wall" 
        src="{{ asset('images') }}/back.jpg" 
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
                        <a href="./index.html">All</a>
                    </li>
                    <li>
                        <hr class="separator"></hr>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Igresar</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">registro</a>
                    </li>
                    <li>
                        <a href="{{ route('carrito') }}">
                            <div class="navbar-shopping-cart">
                                <img 
                                    src="./icons/icon_shopping_cart.svg" 
                                    alt="ahopping-cart"
                                />
                                <p>8</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            
		</nav>