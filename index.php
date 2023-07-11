<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="logo_1.png" rel="shortcut icon" type="image">

    <title>fouanicongo_accueil</title>

    <!-- Bootstrap core CSS -->
   
    <link href="carousel.css" rel="stylesheet">
  </head>
  <style>
     #navbarCollapse{
      margin-left: 40px;
     }
    #myCarousel{
      margin-top: 40px;
    }
    #logo{
      margin-left: 40px;
    }
    #nav{
    background: #3e3e3f;
    }

    
    .ms-3{
      padding: 8px;
    }

    .feature-icon {
  width: 4rem;
  height: 4rem;
  border-radius: .75rem;
}

.icon-square {
  width: 3rem;
  height: 3rem;
  border-radius: .75rem;
}

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.feature-icon-small {
  width: 3rem;
  height: 3rem;
}

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }




  </style>
  <body>
<?php include('header.php')
?>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/l67.webp" width="100%" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <a class="btn btn-lg btn-danger" href="lg_tv.php" role="button">voir article</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/l29.webp"  width="100%" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                
                <p><a class="btn btn-lg btn-danger" href="lg_machine.php" role="button">voir article</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/l19.webp"  width="100%"  alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                
                <p><a class="btn btn-lg btn-danger" href="lg_audio.php" role="button">voir article</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


        <main role="main">

      <section class="jumbotron text-center">
        <div class="container reveal">
          <h1 class="jumbotron-heading reveal">LG CATALOGUE</h1>
          <p class="lead text-muted reveal">la société fouani Congo est le premier distributeur des produits LG en République Démocratique du Congo</p>
          <p>
            <a href="lg_tv.php" class="btn btn-danger my-2">TV </a>
            <a href="lg_audio.php" class="btn btn-dark my-2">Audio </a>
            <a href="lg_refrigerateur.php" class="btn btn-dark my-2">Refrigerateur </a>
            <a href="lg_micro.php" class="btn btn-dark my-2">Split </a>
            <a href="lg_cuisiniere.php" class="btn btn-dark my-2">Cuisiniere </a>
            <a href="lg_machine.php" class="btn btn-dark my-2">Machine à Laver </a>
            <a href="lg_micro.php" class="btn btn-dark my-2">Micro-onde </a>


          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="tele_images/LM500.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="lg_tv.php" class="btn btn-outline-danger my-2">TV LG</a></p>
                  
                </div>
              </div>
            </div>
              <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="audio_images/cl87.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="lg_audio.php" class="btn btn-outline-danger my-2">AUDIO LG</a></p>
                </div>  
              </div>
            </div>
              <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="refrigerateur_images/BOTTOM.png
" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="lg_refrigerateur.php" class="btn btn-outline-danger my-2">REFFRIGERATEUR LG</a></p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="split_images/1800BTU.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="lg_split.php" class="btn btn-outline-danger my-2">SPLIT LG </a></p>
                  
                </div>
              </div>
            </div>
          

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="cuisiniere_images/lg_1.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="lg_cuisiniere.php" class="btn btn-outline-danger my-2">CUISINIERE LG</a></p>
                 
                    
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="machine_images/dryer.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="lg_machine.php" class="btn btn-outline-danger my-2">MACHINE A LAVER LG</a></p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="micro_images/NEOCHEF.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="lg_micro.php" class="btn btn-outline-danger my-2">MICRO-ONDE LG</a></p>
                  
                </div>
              </div>
            </div>
          

        
          </div>
        </div>
      </div>

    </main>




      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading reveal ">HISENSE CATALOGUE</h1>
          <p class="lead text-muted reveal">la société fouani Congo est le premier distributeur des produits Hisense en République Démocratique du Congo</p>
          <p>
            <a href="hisense_tv.php" class="btn btn-info my-2">TV </a>
            <a href="hisense_audio.php" class="btn btn-dark my-2">Audio </a>
            <a href="hisense_refrigerateur.php" class="btn btn-dark my-2">Refrigerateur </a>
            <a href="hisense_split.php" class="btn btn-dark my-2">Split </a>
            <a href="hisense_cuisiniere.php" class="btn btn-dark my-2">Cuisiniere </a>
            <a href="hisense_machine.php" class="btn btn-dark my-2">Machine à Laver </a>
            <a href="hisense_micro.php" class="btn btn-dark my-2">Micro-onde </a>

          </p>
        </div>
      </section>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/h1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/h2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/h3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    



            <main role="main">

     

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="tele_images/65ubg.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="hisense_tv.php" class="btn btn-outline-info my-2">TV HISENSE</a></p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="audio_images/HP120.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="hisense_audio.php" class="btn btn-outline-info my-2">AUDIO HISENSE</a></p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="refrigerateur_images/RC67.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="hisense_refrigerateur.php" class="btn btn-outline-info my-2">REFRIGERATEUR HISENSE</a></p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="split_images/hisense_split_2.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="hisense_split.php" class="btn btn-outline-info my-2">SPLIT HISENSE</a></p>
                  
                </div>
              </div>
            </div>
           
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="machine_images/wtct.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="hisense_machine.php" class="btn btn-outline-info my-2">MACHINE A LAVER HISENSE</a></p>
                  
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img src="micro_images/hisense_micro_4.png" class="card-img-top reveal" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><a href="hisense_micro.php" class="btn btn-outline-info my-2">MICRO-ONDE HISENSE</a></p>
                  
                </div>
              </div>
            </div>
            
            

            
  
          </div>
        </div>
      </div>

    </main>




<?php include('footer.php')
?>
      <!-- FOOTER -->

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="jquery-slim.min.js" defer></script>
     <script src="js/bootstrap.min.js" defer></script>
     <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
     <script src="js/scrollreveal.js" defer></script>
  </body>
</html>