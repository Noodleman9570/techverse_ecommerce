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
    <link rel="stylesheet" href="styles/1-articulo.css">
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
				width="200px" 
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
                        <hr class="separator"></hr>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Igresar</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">registro</a>
                    </li>
					<li>
                        <a href="./checkout-cart.html">
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
        <input 
			class="search-bar"
			type="search" 
			placeholder="Buscar..." 
			name="search"
        />
        <button class="search-btn">
			Buscar
		</button>		
	</header>
    <main>
		<!------------------Foto y descripcion del producto--------------------->
		<section>
			<article>
                <div class="product-img">
                    <h1 id="inicio">MacBook Pro 16 pulgadas (2021)</h1>
                    <img 
                        class="prod" 
                        height="750px" 
                        src="https://i.pinimg.com/originals/a3/c8/6a/a3c86a3b14e3177f11947570147c7907.jpg"
                        alt="main-product"
                    />
                </div>
				<table class="tabla-datos"> 
					<thead> 
						<tr>  
							<th colspan="2">
								<p>Carecteristicas</p>
							</th> 
						</tr>
					</thead>
					 <tbody>
						 <tr> 
							 <th>
								 <p>DIMENSIONES Y PESO</p>
							 </th> 
							 <td>
								 <p>35.5 x 24.8 x 1.68 cm<br>2,2 kilos</p> 
							 </td> 
						</tr> 
						<tr> 
							<th>
								<p>PANTALLA</p>
							</th> 
							<td> 
								<p>16,2" Liquid Retina XDR 
									3456 x 2234 píxeles
								</p> 
							</td> 
						</tr> 
						<tr>
							<th> 
								<p>PROCESADOR</p> 
							</th> 
							<td> 
								<p>Apple M1 Max</p> 
							</td> 
						</tr> 
						<tr>  
							<th> 
								<p>MEMORIA RAM</p> 
							</th> 
							<td> 
								<p>32 GB</p> 
							</td> 
						</tr> 
						<tr> 
							<th> 
								<p>ALMACENAMIENTO</p> 
							</th> 
							<td> 
								<p>1 TB SSD</p> 
							</td> 
						</tr> 
						<tr> 
							<th> 
								<p>SISTEMA OPERATIVO</p> 
							</th> 
							<td> 
								<p>MacOS</p> 
							</td> 
						</tr> 
						<tr> 
							<th> 
								<p>BATERÍA</p> 
							</th> 
							<td> 
								<p>100 Wh</p> 
							</td> 
						</tr> 
						<tr> 
							<th> 
								<p>CONECTIVIDAD</p> 
							</th> 
							<td> 
								<p>
									WiFi 6<br>
									Bluetooth 5.0
								</p>
							</td> 
						</tr> 
						<tr> 
							<th> 
								<p>PUERTOS</p> 
							</th> 
							<td> 
								<p>
									3 x USB Type-C (Thunderbolt 4)<br>
									1 x HDMI<br>
									1 x 3.5 mm<br>
									1xSDXC<br>
									Magsafe 3</p> 
							</td> 
						</tr>
						<tr> 
							<th> 
								<p>PRECIO</p> 
							</th> 
							<td> 
								<p>
									<b>$1250.99</b>
								</p> 
							</td> 
						</tr> 
					</tbody>
				</table>
				<!------------------Formulario para realizar el pedido--------------------->
				<form class="product-p" action="#" method="post">
					<table>
						<tr>
							<th>Elija el color</th>
							<td class="color-select">
                                <div class="chbx-1">
                                    <input 
										id="chbx-1" 
										checked="checked" 
										name="chbx" 
										class="chbx" 
										type="radio" 
									/>
                                    <label for="chbx-1"></label>
                                </div>
                                <div class="chbx-2">
                                    <input 
										id="chbx-2" 
										checked="checked" 
										name="chbx" 
										class="chbx" 
										type="radio" 
									/>
                                    <label for="chbx-2"></label>
                                </div>
                                <div class="chbx-3">
                                    <input 
										id="chbx-3" 
										checked="checked" 
										name="chbx" 
										class="chbx" 
										type="radio" 
									/>
                                    <label for="chbx-3"></label>
                                </div>
                                <div class="chbx-4">
                                    <input 
										id="chbx-4" 
										checked="checked" 
										name="chbx" 
										class="chbx" 
										type="radio" 
									/>
                                    <label for="chbx-4"></label>
                                </div>
							</td>
						</tr>
						<tr>
							<th>
								Cantidad a comprar
							</th>
							<td>
                                <div class="select">
                                    <select name="cant" id="cant">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
							</td>
						</tr>
						<tr>
                            <div>
                                <td>
                                    <input 
                                        type="submit" 
                                        value="Agregar al carrito" 
                                        name="car"
									/>
                                </td>
                                <td>
                                    <input 
                                        type="reset" 
                                        value="Cancelar" 
                                        name="reset"
									/>
                                </td>
                            </div>
						</tr>	
					</table>
				</form>
			</article>
		</section>
		<!------------------Section para comentar--------------------->
		<section class="comment" id="comm">
			<h2 class="title-comment">Opina del producto</h2>
			<div class="comment-desc">
				<p>
				Tus datos no será publicados.
				</p>
				<p> 
				(Los campos obligatorios estan marcados con * ).
				</p>
			</div>
			<form>
				<table>
					<tr>
						<td>
							<label for="comment">
								Comentario*
							</label>
						</td>
						<td>
							<textarea placeholder="Dános tu opinión..." required id="comment"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<label for="name">
								Nombre*
							</label>
						</td>
						<td>
							<input 
								required type="text" 
								id="name"/>
						</td>
					</tr>
					<tr>
						<td>
							<label for="email">
								Correo electrónico*
							</label>
						</td>
						<td>
							<input 
								title="correo electrónico valido" 
								placeholder="me@example.com" 
								type="e-mail" 
								id="email"
								required
								pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*
									@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*
									[.][a-zA-Z]{1,5}" 
							/>
						</td>
					</tr>
					<tr>
						<td>
							<label for="web">
							Direccion web
							</label>
						</td>
						<td>
							<input 
								type="url" 
								pattern=".+\.com"
								placeholder="https://www.example.com" 
								title="solo se admiten url" 
								id="web"
							/>
						</td>
					</tr>
					<tr>
						<td>
							<label for="phone-number">
								Numero de teléfono
							</label>
						</td>
						<td>
							<div class="phone-container">
								<select>
									<option>+1</option>
									<option>+58</option>
									<option>+57</option>
									<option>+56</option>
									<option>+55</option>
									<option>+54</option>
									<option>+53</option>
									<option>+52</option>
									<option>+51</option>
								</select>
								<input
									class="phone"								
									type="tel" 
									placeholder="416-5026559" 
									name="phone-number"
								/>
							</div>
						</td>
					</tr>
					<tr>
					<tr>
						<td colspan="2">
							<p class="com-chbx">
								Guardar mis datos para la 
								proxíma vez que comente.
								<input  
									type="checkbox" 
									id="chkbx"
								/> 
							</p>
						</td>
						<td>
							<input 
								class="submit" 
								type="submit" 
								value="Publicar" 
								name="Publicar"
							/>

						</td>
					</tr>
				</table>	
			</form>
		</section>
	</main>
	<footer>
		<a class="back" href="#inicio">
			<p>Ir al inicio de página</p>
		</a>
	<!------------------Form para cambiar confuguracion de la pagina--------------------->
		<form action="#" method="post">
			<ul>
				<li>
					<p>Idioma</p>
					<select>
						<option>
							Español-ES
						</option>
						<option>
							English-EN
						</option>
						<option>
							Deutsch-DE
						</option>
						<option>
							Portugues-PT
						</option>
					</select>
				</li>
				<li>
					<p>Moneda</p>
					<select>
						<option>
							$ ARG-pesos argentino
						</option>
						<option>
							$ USD-dólar estadaunidense
						</option>
						<option>
							Bs Bolivar venezolano
						</option>
						<option>
							$ COP-pesos colombianos
						</option>
					</select>
				</li>
				<li>
					<p>País</p>
					<select>
						<option>
							Argentina
						</option>
						<option>
							Colombia
						</option>
						<option>
							USA
						</option>
						<option>
							Venezuela
						</option>
					</select>
				</li>
				<li>
					<input 
						type="button" 
						value="Aceptar"
					/>
				</li>
			</ul>
		</form>
		<!------------------Contáctanos--------------------->
		<div class="contact">
			<h3>Contátanos en nuestras redes sociales</h3>
			<div>
                <a href="https://www.facebook.com/">
                    <img 
						src="images/facebook.png" 
						width="40px" 
						height="40px" 
						alt="Facebook"
					/>
                </a>
                <a href="https://www.twitter.com">       
                    <img 
						src="images/twitter.png" 
						width="40px" 
						height="40px" 
						alt="Twitter"
					/>
                </a>
                <a href="https://www.instagram.com">   
                    <img 
						src="images/instagram.png" 
						width="40px" 
						height="40px" 
						alt="Instagram"
					/>
                </a>                
            </div>
		</div>
		<!--------------------------------------->
		<ul>
			<li>
				<span>
					<a href="#">Ley de Cookies</a>
				</span>
			</li>
			<li>
				<span>
					<a href="#">Politica Privacidad</a>
				</span>
			</li>
			<li>
				<span>
					<a href="#">Acerca de nosotros</a>
				</span>
			</li>
		</ul>
		<span> 
			© 2022 Sell Online-shop Company. 
			Todos los derechos reservados.
		</span>
	</footer>		

</body>
</html>