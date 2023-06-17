@include('partials/header')
        <input 
            class="search-bar"
            type="search" 
            placeholder="Buscar..." 
            name="search"
        />
        <button class="search-btn">Buscar</button>		
	</header>
    <main class="main-container">
        <div class="cards-container">
            <h2>Electronics</h2>
            <div class="wrapper">
                <section id="section1">
                    <a href="#section2" class="arrow__btn">
                        ‹
                    </a>
                    <div class="item item-pro">
                        <a href="{{ route('article') }}">
                            <img 
                                src="https://i.pinimg.com/originals/a3/c8/6a/a3c86a3b14e3177f11947570147c7907.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$1250.99</p>
                                <p>PC Desktop</p>
                            </div>
                            <figure>
                                <a href="/1-articulo.html">
                                    <img 
                                        class="fig" 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item item-pro">
                        <a href="./2-articulo.html">
                            <img 
                                src="https://i.pinimg.com/564x/06/3d/3f/063d3fb5819c202450ad7397f3386345.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$85.00</p>
                                <p>Headset</p>
                            </div>
                            <figure>
                                <a href="./2-articulo.html">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>

                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://images.pexels.com/photos/3945667/pexels-photo-3945667.jpeg?cs=srgb&dl=pexels-cottonbro-3945667.jpg&fm=jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$85.00</p>
                                <p>Headset</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>

                    <div class="item">
                        <a href="">
                            <img 
                                src="https://i.pinimg.com/564x/ea/93/e7/ea93e7964cfd91be38563d0c42200fc6.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$242.70</p>
                                <p>Keyboard</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://cdn.shopify.com/s/files/1/0605/3943/7292/products/product-image-1850601670_grande.jpg?v=1635672771" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$17.99</p>
                                <p>Shockproof</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
                    
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://www.slashgear.com/wp-content/uploads/2020/01/Alienware-25-Gaming-Monitor_back-side-view.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$14.50</p>
                                <p>Monitor</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>

                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/originals/da/88/22/da88226e7cffed04311f44a1d0b01407.png" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$600.99</p>
                                <p>PlayStation 5</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
        
                    </div>
                    <a href="#section2" class="arrow__btn">
                        ›
                    </a>
                </section>   
                <section id="section2">
                    <a href="#section1" class="arrow__btn">
                        ‹
                    </a>
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/originals/a3/c8/6a/a3c86a3b14e3177f11947570147c7907.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$1250.99</p>
                                <p>PC Desktop</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/06/3d/3f/063d3fb5819c202450ad7397f3386345.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$85.00</p>
                                <p>Headset</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://images.pexels.com/photos/3945667/pexels-photo-3945667.jpeg?cs=srgb&dl=pexels-cottonbro-3945667.jpg&fm=jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$85.00</p>
                                <p>Headset</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
                 
                    
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/ea/93/e7/ea93e7964cfd91be38563d0c42200fc6.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$242.70</p>
                                <p>Keyboard</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://cdn.shopify.com/s/files/1/0605/3943/7292/products/product-image-1850601670_grande.jpg?v=1635672771" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$17.99</p>
                                <p>Shockproof</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
                    
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://www.slashgear.com/wp-content/uploads/2020/01/Alienware-25-Gaming-Monitor_back-side-view.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$14.50</p>
                                <p>Monitor</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>

                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/originals/da/88/22/da88226e7cffed04311f44a1d0b01407.png" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$600.99</p>
                                <p>PlayStation 5</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
        
                    </div>
                    <a href="#section1" class="arrow__btn">
                        ›
                    </a>
                </section>                             
            </div>
            <h2>Hogar</h2>
            <div class="wrapper">
                <section id="section4">
                    <a href="#section5" class="arrow__btn">
                        ‹
                    </a>
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/originals/7c/86/43/7c864348509d2adceb53446029e9c4d3.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$250.99</p>
                                <p>Comedor</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://s3.img-b.com/image/private/t_base,c_pad,f_auto,dpr_2,w_450,h_450/product/maxim/maxim_10307bkasb.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$85.00</p>
                                <p>Lamparas</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png"
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/53/da/16/53da1659066aa6abc5d46410813035ff.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$456.00</p>
                                <p>Muebles</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
                 
                    
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/9c/18/53/9c1853e6714b5be42b7dbae5e0a48bc6.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$70.70</p>
                                <p>Espejos</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/68/bd/f5/68bdf5e48b733824d2643f24cbc82256.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$1000.99</p>
                                <p>Smart TV</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
                    
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/f3/b3/3b/f3b33b780bf06240b359614c9237b227.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$650.50</p>
                                <p>Refrigerador</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
        
                    </div>
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/dc/d5/a8/dcd5a8472241d74c9ffe25709afa20eb.jpg" 
                                alt="product-img"
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$10.99</p>
                                <p>Plantas</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
        
                    </div>
                    <a href="#section5" class="arrow__btn">
                        ›
                    </a>
                </section>   
                <section id="section5">
                    <a href="#section4" class="arrow__btn">‹</a>
                   <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/originals/7c/86/43/7c864348509d2adceb53446029e9c4d3.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$250.99</p>
                                <p>Comedor</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://s3.img-b.com/image/private/t_base,c_pad,f_auto,dpr_2,w_450,h_450/product/maxim/maxim_10307bkasb.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$85.00</p>
                                <p>Lamparas</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
        
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/53/da/16/53da1659066aa6abc5d46410813035ff.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$456.00</p>
                                <p>Muebles</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>            
                    
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/9c/18/53/9c1853e6714b5be42b7dbae5e0a48bc6.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$70.70</p>
                                <p>Espejos</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
        
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/68/bd/f5/68bdf5e48b733824d2643f24cbc82256.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$1000.99</p>
                                <p>Smart TV</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>
                    
                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/f3/b3/3b/f3b33b780bf06240b359614c9237b227.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$650.50</p>
                                <p>Refrigerador</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>

                    <div class="item">
                        <a href="#">
                            <img 
                                src="https://i.pinimg.com/564x/dc/d5/a8/dcd5a8472241d74c9ffe25709afa20eb.jpg" 
                                alt="product-img" 
                                class="product"
                            />
                        </a>
                        <div class="product-info">
                            <div>
                                <p>$10.99</p>
                                <p>Plantas</p>
                            </div>
                            <figure>
                                <a href="#">
                                    <img 
                                        src="./icons/up-cart.png" 
                                        alt="product-img"
                                    />
                                </a>
                            </figure>
                        </div>
                    </div>

                    <a href="#section4" class="arrow__btn">
                        ›
                    </a>
                </section>                            
            </div>
        </div>
    </main>        
@include('partials/footer')