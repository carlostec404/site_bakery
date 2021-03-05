<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="response.css">
  <title>Ba Bakery</title>
</head>

<body>

  <!-- cabeçalho//menu -->
  <div class="jumbotron jumbotron-fluid">
    <div class="menu col-4">
      <nav class="nav">
        <a class="nav-link active" href="#history">quem somos</a>
        <a class="nav-link" href="#">equipe</a>
        <a class="nav-link" href="#contato">contato</a>
      </nav>
    </div>
    <div class="logo">
      <a class="img-nav nav-link active" href="#"><img src="../portal/img/Grupo 232.svg" alt="" srcset=""></a>
    </div>
    <div class="col-4">
      <nav class="nav">
        <a class="nav-link active" href="#"><img src="../portal/img/XMLID_834_.svg" alt="" srcset=""></a>
        <a class="nav-link" href="#"><img src="../portal/img/instagram-logo.svg" alt="" srcset=""></a>
        <a class="nav-link" href="#"><img src="../portal/img/twitter.svg" alt="" srcset=""></a>
        <a class="nav-link" href="#"><img src="../portal/img/Caminho 227.svg" alt="" srcset=""></a>
      </nav>
    </div>
  </div>

  <header>
    <h1>Sabor em </h1>
    <span>Cada pedaço.</span>
    <a href="#produt">nossos produtos</a>
    <img src="../portal/img/Imagem 1.png" alt="" srcset="">
  </header>
  <a id="subir" href=""><img src="img/Grupo 238 (1).svg" alt="" srcset=""></a>
  <!--seções// historia -->
  <section id="history">
    <div class="col-5"><img src="../portal/img/Grupo de máscara 1.png" alt="" srcset=""></div>
    <div class="texto col-5">
      <span>História da Ba Bakery</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    </div>
  </section>
  <!-- produtos// cards -->
  <section id="produt">
    <span>produtos</span>
   
      <div class="area-card">
        <div class="prod-card">
          <img class="prod-img" src="img/serghei-savchiuc-Qaruw62_kmM-unsplash.png" alt="Card image cap">
          <div class="prod-text">
          <h1>Macarons Diversos 90g</h1>
          <p>R$9,00</p>
          </div>
        </div> 
        <div class="prod-card">
          <img class="prod-img" src="img/kim-daniels-OrkEasJeY74-unsplash.png" alt="Card image cap">
          <div class="prod-text">
          <h1>Tortilette de Laranja Lima com Amora</h1>
          <p>R$12,00</p>
          </div>
        </div>
        <div class="prod-card">
          <img class="prod-img" src="img/anthony-espinosa-6iqpLKqeaE0-unsplash.png" alt="Card image cap">
          <div class="prod-text">
          <h1>Fatia de Torta Gelada de Café com Chocolate Amargo</h1>
          <p>R$14,00</p>
          </div>
        </div>
    </div>
<article>
    <div class="area-card ar-dois d-none">
        <div class="prod-card">
          <img class="prod-img" src="img/anthony-espinosa-6iqpLKqeaE0-unsplash.png" alt="Card image cap">
          <div class="prod-text">
          <h1>Cupcake de Morango Glaceado</h1>
          <p>R$11,00</p>
          </div>
        </div> 
        <div class="prod-card">
          <img class="prod-img" src="img/anthony-espinosa-6iqpLKqeaE0-unsplash.png" alt="Card image cap">
          <div class="prod-text">
          <h1>Rosquinha de Morango com Coco</h1>
          <p>R$6,00</p>
          </div>
        </div>
        <div class="prod-card">
          <img class="prod-img" src="img/anthony-espinosa-6iqpLKqeaE0-unsplash.png" alt="Card image cap">
          <div class="prod-text">
          <h1>Fatia de Torta Gelada de Frutas Vermelhas</h1>
          <p>R$14,00</p>
          </div>
        </div>
    </div>
</article>
    <button type="button" id="vermais" class="btn btn-warning">VER MAIS</button>
  </section>

  <section id="contato">
    <div class="formulario">
      <span>Se interessou pelos nossos serviços? Manda uma mensagem pra gente. :)</span>
      <form>
        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-2 col-form-label">NOME</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="" placeholder="Ex.:Renato Lopes">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-2 col-form-label">TELEFONE</label>
          <div class="col-sm-9">
            <input type="tel" class="form-control" id="telefone" placeholder="(xx) x xxxx.xxxx">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-2 col-form-label">EMAIL</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="" placeholder="exemplo@exemplo.com.br">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-2 col-form-label">MENSAGEM</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite sua mensagem aqui"></textarea>
          </div>
        </div>
        <input class="btn" type="submit" value="ENVIAR">
      </form>
    </div>
    <div class="mapa">
      <span>você também pode nos fazer uma visita.</span>
      <img src="img/Grupo de máscara 2.png" alt="" sizes="" srcset="">
      <img class="ic" src="img/pin (1).svg" alt="" srcset="">
      <p>R. Hermílio Arantes, 1040 - Vila dos Coqueiros. Graças, Recife - PE.</p> 
      <input class="btn" type="submit" value="TRAÇAR ROTA">
    </div>
  </section>
  <section id="footer">
    <ul class="list-group">
        <li class="list-group-item"><img src="img/logo.svg" alt="" srcset=""></li>
      </ul>
      <ul class="list-group gr-text">
        <li class="list-group-item contact"><img src="img/Telefone - Filled 01.svg" alt="" srcset="">+55 (87) 3312.4057</li>
        <li class="list-group-item contact eft"><img src="img/Email - Filled 01.svg" alt="" srcset=""> contato@babakery.com.br</li>
        <li class="list-group-item ender"><img src="img/Location Pin - Filled 01.svg" alt="" srcset=""> R. Hermílio Arantes, 1040 - Vila dos Coqueiros. Graças, Recife - PE.</li>
    </ul>
  </section>
  <footer>
    <p>Ba Bakery - Copyright 2020 © Todos os direitos reservados.</p>
  </footer>



  
  <script type="text/javascript">
      // jQuery(document).ready(function(){

      //           jQuery("#subir").hide();

      //           jQuery('a#subir').click(function () {
      //                   jQuery('body,html').animate({
      //                     scrollTop: 0
      //                   }, 800);
      //                   return false;
      //       });

      //     jQuery(window).scroll(function () {
      //             if (jQuery(this).scrollTop() > 100) {
      //                 jQuery('#subir').fadeIn();
      //             } else {
      //                 jQuery('#subir').fadeOut();
      //             }
      //         });
      // });


      $("#vermaiss").click(mostraMais);

        function mostraMais() {
              $(".ar-dois").toggle();
        };

</script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>

</html>