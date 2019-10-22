<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="topnav">
        <a href="persona.html">Persona</a>
        <a class="active" href="empresa.html">Empresa</a>
        <!-- <a href="#nosotros">Nosotros</a> -->
        <div class="dropdown">
            <button onclick="navegar()" class="dropbtn">Nosotros
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="politica-datos.html">Politica de tratamiento de datos</a>
                <a href="pqrs.html">PRQS</a>
            </div>
        </div>

        <div class="search-container">
            <form action="/action_page.php">
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" placeholder="Buscar..." name="search">
            </form>
        </div>
    </div>
    <div id="navbar">
        <span href="#default" id="logo">OrizonMobile<br><span
                style="font-size: 14px;margin-top: -12px;text-align: center" id="logo-subtext">The Unlimited
                Network</span></span>
        <div id="navbar-right">
            <a href="internet.html">Internet</a>
            <a href="telefonia.html">Telefonia</a>
            <a href="productos.html">Productos</a>
            <a href="servicios.html">Servicios</a>
            <a href="contactenos.html">Soporte</a>
        </div>
    </div>
    <ul class="breadcrumb">
        <li><a href="index.html" target="_blank">Inicio</a></li>
        <li>Cotizacion</li>
    </ul>
   
    <!-- <section>
        <div class="container-imagen">
            <div class="hero-imagen10">
                <div class="hero-text-left">
                    <span>Prepago</span>
                    <h2>Servicios acorde a sus necesidades</h2>
                     <button>Mas información</button>
                </div>
            </div>
        </div>
    </section> -->
     <section>
 

<button class="tablink" onclick="openCity('Internet', this, '#D1DBBD')" id="defaultOpen">Internet</button>
<button class="tablink" onclick="openCity('Telefonia', this, '#D1DBBD')">Telefonia</button>
<button class="tablink" onclick="openCity('ProductoEmpresariales', this, '#D1DBBD')">Productos Empresariales</button>
<!-- <button class="tablink" onclick="openCity('Oslo', this, 'orange')">Oslo</button>
<button class="tablink" onclick="openCity('Oslo', this, 'orange')">Oslo</button> -->

       <div id="Internet" class="tabcontent">
  <h1>London</h1>
  <p>London is the capital city of England.</p>
  <div class="content">
      hola
  </div>
</div>

<div id="Telefonia" class="tabcontent">
  <h1>Paris</h1>
  <p>Paris is the capital of France.</p> 
</div>

<div id="ProductoEmpresariales" class="tabcontent">
  <h1>Tokyo</h1>
  <p>Tokyo is the capital of Japan.</p>
</div>

<!-- <div id="Oslo" class="tabcontent">
  <h1>Oslo</h1>
  <p>Oslo is the capital of Norway.</p>
</div> -->
    </section>
    <section>
        <div class="container-form ">
            <h1 class="title-price">Plan Prepago</h1>
            <hr style="width: 70%">
            <p style="text-align:center">Nos gusta ser parte de ti</p>
            
            <br>
            <div class="row-form">
                <div class="column-three">
                    <div class="column-team4">
                        <div class="card">
                            <img src="./imagenes/mobile-phone-2198770_1280.png" alt="Jane" style="width:100%">
                        </div>
                    </div>
                </div>
                <div class="container-info-datos">
                    <!-- <h2>Jane Doe</h2> -->
                    <p class="title">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint voluptatem fugiat architecto id, iusto excepturi commodi ab distinctio. Sed eaque modi dicta illum vel eveniet illo! Perspiciatis at perferendis aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio numquam adipisci commodi deserunt eius? Dolor tempore soluta, dolorum molestias excepturi laboriosam, omnis dolores cum corrupti eveniet odio maiores necessitatibus ducimus.
                            <br> <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem officia quam, dignissimos, saepe magni illo necessitatibus qui consequatur, assumenda nobis ab inventore iusto nemo voluptatum reprehenderit delectus quos quibusdam dolorum!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit impedit, nulla et repudiandae optio eius nostrum quae accusamus exercitationem possimus adipisci, in tempore quam fugiat iste, assumenda accusantium pariatur voluptate?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus officia, officiis, consectetur quibusdam et dicta modi sed suscipit excepturi repellendus magnam, ea in itaque architecto. Quia velit rem nesciunt eum!
                            <br> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorum distinctio, suscipit repellat pariatur porro earum quos rem voluptatibus adipisci aliquam, cum cumque nesciunt. Id tempore provident eveniet possimus repellendus!. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam necessitatibus consectetur nostrum, voluptates omnis cupiditate reprehenderit dignissimos ullam deserunt architecto a doloribus recusandae illo ducimus veniam vitae, quod, expedita inventore.</p>
                    </p>

                </div>
    </section>
<section>
        <hr style="width:34%">
        <h1 class="title-price">Cotizacion</h1>
        <hr style="width:34%">
        <p style="text-align:center">
        <div class="container-cotizacion">
            <form action="cotizar.php" method="post">
            Persona Natural<input type="radio" checked name="opcion" value="persona">
            Empresa<input type="radio" name="opcion" value="empresa">
            <input type="submit" value="Seleccionar">
        </form>
        </div>
        
        <?php
        if(isset($_POST['opcion'])){
        echo $_POST['opcion'];
        }
        ?>
        </p>
        <br>
        <!-- Fila 1 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/apple-casing-close-up-163096.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>NOKIA</b></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum excepturi odio minus explicabo, dolor maxime hic nam? Eligendi, ab eveniet expedita at iure voluptatum quasi dolorum asperiores quae officiis?</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/communication-ipad-mockup-40739.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>Wifi en la Nube</b></h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem perferendis fugit nesciunt? Nesciunt, impedit porro? Ipsam, animi quasi. Inventore itaque deserunt doloribus molestiae iusto sequi libero rem deleniti optio distinctio.</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/cellphone-close-up-electronics-341523.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>Troncal SIP</b></h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas expedita ipsum possimus eos beatae illum sapiente ut aliquid quidem quisquam. Atque impedit dolor blanditiis, facere ad libero repellat adipisci iure!</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/apple-cell-phone-cellphone-607812.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1>M2M</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias aut qui dolore voluptatum quasi, minima, mollitia sapiente esse ratione perspiciatis nostrum? Reiciendis accusamus, sit fugit quos nobis dolores a eum!</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
         <!-- Fin  Fila 1 -->
        <hr style="width:34%">
         <!-- Fila 2 -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/apple-casing-close-up-163096.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>Cross-connexion</b></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum excepturi odio minus explicabo, dolor maxime hic nam? Eligendi, ab eveniet expedita at iure voluptatum quasi dolorum asperiores quae officiis?</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/apple-base-clean-56904.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>Wifi en la Nube</b></h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem perferendis fugit nesciunt? Nesciunt, impedit porro? Ipsam, animi quasi. Inventore itaque deserunt doloribus molestiae iusto sequi libero rem deleniti optio distinctio.</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/cellphone-close-up-electronics-341523.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>Troncal SIP</b></h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas expedita ipsum possimus eos beatae illum sapiente ut aliquid quidem quisquam. Atque impedit dolor blanditiis, facere ad libero repellat adipisci iure!</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/apple-cell-phone-cellphone-607812.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1>M2M</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias aut qui dolore voluptatum quasi, minima, mollitia sapiente esse ratione perspiciatis nostrum? Reiciendis accusamus, sit fugit quos nobis dolores a eum!</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
         <!-- Fin Fila 2 -->
          <!-- Fila 3 -->
        <hr style="width:34%">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/koby-kelsey-CrE4LzakN8Y-unsplash.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>Cross-connexion</b></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum illum excepturi odio minus explicabo, dolor maxime hic nam? Eligendi, ab eveniet expedita at iure voluptatum quasi dolorum asperiores quae officiis?</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/communication-ipad-mockup-40739.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>Wifi en la Nube</b></h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem perferendis fugit nesciunt? Nesciunt, impedit porro? Ipsam, animi quasi. Inventore itaque deserunt doloribus molestiae iusto sequi libero rem deleniti optio distinctio.</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/mark-solarski-wkKMBFAbj04-unsplash.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1><b>Troncal SIP</b></h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas expedita ipsum possimus eos beatae illum sapiente ut aliquid quidem quisquam. Atque impedit dolor blanditiis, facere ad libero repellat adipisci iure!</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="./imagenes/apple-cell-phone-cellphone-607812.jpg" alt="Avatar" style="width: 288px;
                    height: 232px;">
                </div>
                <div class="flip-card-back">
                    <h1>M2M</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias aut qui dolore voluptatum quasi, minima, mollitia sapiente esse ratione perspiciatis nostrum? Reiciendis accusamus, sit fugit quos nobis dolores a eum!</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
         <!-- Fin Fila 3 -->
        <hr style="width:34%">
    </section>
    <section>
        <div class="container-form ">
            
            <br>
            <div class="row-form">
                <div class="container-info-datos">
                    <!-- <h2>Jane Doe</h2> -->
                    <p class="title">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint voluptatem fugiat architecto id, iusto excepturi commodi ab distinctio. Sed eaque modi dicta illum vel eveniet illo! Perspiciatis at perferendis aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio numquam adipisci commodi deserunt eius? Dolor tempore soluta, dolorum molestias excepturi laboriosam, omnis dolores cum corrupti eveniet odio maiores necessitatibus ducimus.
                            <br> <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem officia quam, dignissimos, saepe magni illo necessitatibus qui consequatur, assumenda nobis ab inventore iusto nemo voluptatum reprehenderit delectus quos quibusdam dolorum!. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit impedit, nulla et repudiandae optio eius nostrum quae accusamus exercitationem possimus adipisci, in tempore quam fugiat iste, assumenda accusantium pariatur voluptate?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus officia, officiis, consectetur quibusdam et dicta modi sed suscipit excepturi repellendus magnam, ea in itaque architecto. Quia velit rem nesciunt eum!
                            <br> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorum distinctio, suscipit repellat pariatur porro earum quos rem voluptatibus adipisci aliquam, cum cumque nesciunt. Id tempore provident eveniet possimus repellendus!. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam necessitatibus consectetur nostrum, voluptates omnis cupiditate reprehenderit dignissimos ullam deserunt architecto a doloribus recusandae illo ducimus veniam vitae, quod, expedita inventore.</p>
                    </p>

                </div>
                <div class="column-rigth">
                    <div class="column-team4">
                        <div class="card">
                            <img src="./imagenes/digitization-2118531_1920.jpg" alt="Jane" style="width:100%">
                        </div>
                    </div>
                </div>
    </section>
    
    <section>

        <div class="container-textimagen">
            <img src="./imagenes/mobile-phone-1419274_1920.jpg" alt="Notebook" style="width:100%;">
            <div class="content-textimagen">
                <h1>Telefonía fija: Planes nacionales e internacionales</h1>
                <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
            </div>
        </div>
    </section>





    <section>
        <div class="footer">
            <div class="row-footer">
                <div class="column-footer">
                    <h2><b>Lo que tenemos para ti</b></h2>
                    <ul class="menu-footer">
                        <li>Inicio</li>
                        <li>Telefonia</li>
                        <li>Productos</li>
                        <li>Servicios</li>
                        <li>Internet</li>
                    </ul>
                </div>
                <div class="column-footer">
                    <h2><b>Nosotros</b></h2>
                    <ul class="menu-footer">
                        <li>Empresa</li>
                        <li>Legal</li>
                    </ul>
                    <br>
                    <h2><b>Servicios</b></h2>
                    <ul class="menu-footer">
                        <li>Persona</li>
                        <li>Empresa</li>
                    </ul>
                </div>
                <div class="column-footer">
                    <ul class="social-medias">
                        <li><i class="fa fa-facebook fa-3x"></i></li>
                        <li><i class="fa fa-twitter fa-3x"></i></li>
                        <li><i class="fa fa-instagram fa-3x"></i></li>
                    </ul>
                    <form id="form-newsletter" action="/action_page.php">


                        <div>
                            <input type="text" placeholder="Email address" name="mail" required>
                        </div>

                        <div class="container">
                            <input type="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <form action="formpost.php" method="post">
    Numero Planes: <input type="text" name="numero_planes"><br>
    <input type="submit" value="Enviar">
</form>
    <?php
include('dbphp/personadescuento.php');

while ($columna = mysqli_fetch_array( $resultado ))
{
    if ($columna['aplicadescuentosi']) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "a es igual que b";
} else {
    echo "a es menor que b";
}
 echo "<p>" . $columna['nombre_plan'] . "</td><td>" . $columna['descuento'] ."%". "</p>";
}
?>
    <script src="js/app.js"></script>
</body>


</html>