<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Security C.</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <?php
    if (isset($_SESSION['uploadMessage'])) {
        $message = $_SESSION['uploadMessage'];
        echo "<script>var uploadMessage = '$message';</script>";
        // Limpe a variável de sessão após usá-la
        unset($_SESSION['uploadMessage']);
    }
  ?>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <span>
              Segurança C.O.
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#who_us"> Sobre </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#we_do"> O que fazemos ? </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#articles"> Artigos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contato-info">Fale Conosco</a>
                </li>
              </ul>
              <div class="user_option">
                <a href="">
                  <img src="images/user.png" alt="">
                </a>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        Bem vindo à
                      </h2>
                      <h1>
                        Security C.O.
                      </h1>
                      <p>
                        Temos como objetivo conscientizar e alertar sobre os perigos cibernéticos
                      </p>
                      <div class="">
                        <a href="#we_do">
                          O que fazemos
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        Blog voltado para segurança
                      </h2>
                      <p>
                        Trazemos pesquisas e fontes confiáveis sobre o tema de maneira clara e coloquial, para facilitar
                        a compensão.
                      </p>
                      <div class="">
                        <a href="">
                          Fale Conosco
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Conheça nossa equipe
                      </h1>
                      <div class="">
                        <a href="#who_us">
                          Sobre nós
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- do section -->

  <section id="we_do" class="do_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Sobre o projeto
        </h2>
        <p>Para ver github do projeto: <a target="_blank" href="https://github.com/joao951951/blog-estatico-praticas-de-extensao"> Clique aqui </a></p>
          <div class="img-box">
            <img src="images/logo_unifil.png"  alt="">
          </div>
        <h4 class="text-left">
          O blog presente foi criado para o projeto de extensão apresentado a UNIFIL - Centro Universitário Filadélfia de Londrina, como um projeto de extensão busca solucionar problemas existentes, de interesse e necessidade da sociedade, ampliando a relação desta com a Universidad. O projeto consiste em criar um site que traga uma comunidade aberta, que leia e contribua com pesquisas e resumos na área de segurança da informação. Um espaço digital dedicado à busca do conhecimento compartilhado e colaborativo!
        </h4>
        <h4 class="text-left">
           Resumindo nosso projeto é uma plataforma que visa reunir pesquisas, estudantes e entusiastas de segurança para compartilhar, colaborar e expandir as fronteiras da pesquisa de maneira acessível e inclusiva, trazendo uma estrutura mais coloquial e de fácil entendimento. Em um mundo em constante evolução, o conhecimento é um ativo valioso que todos devem ter a oportunidade de contribuir e acessar, assim é disponibilizado esta plataforma com intuito de todos poderem publicar suas pesquisas e acessar as já existentes.
        </h4>
      </div>
      <div class="heading_container pt-5 mt-5">
        <h2>
          O que fazemos ?
        </h2>
        <p>
          Reunimos fontes confiáveis e pesquisas fundamentadas, com intuíto de desmistificar este conhecimento
          facilitando o entendimento
        </p>
      </div>
      <div class="do_container">
        <div class="box arrow-end arrow_bg">
          <div class="img-box">
            <img src="images/d-4.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Pesquisas
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/d-2.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Estudos <br>de casos
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/d-3.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Experiências <br> aplicadas
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/d-1.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Divulgação <br>dos resultados
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end do section -->

  <!-- who section -->

  <section id="who_us" class="who_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/who-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Quem somos?
              </h2>
            </div>
            <p>
              Estudantes de computação
            </p>
            <div class="row">
              <div class="col">
                <img class style="width: 180px; height:180px;" src="images/joao.jpg" alt="foto-joao">
                <p>João Paulo Santos</p>
              </div>
              <div class="col">
                <img style="width: 180px;height:180px;" src="images/flavio.png" alt="foto-flavio">
                <p>Flavio Granado Filho</p>
              </div>
              <div class="col">
                <img style="width: 180px;height:180px;" src="images/leonardo.png" alt="foto-leonardo">
                <p>Leonardo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end who section -->


  <!-- work section -->
  <section class="work_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Artigo sobre segurança cibernética
        </h2>
        <p>

        </p>
      </div>
      <div class="work_container layout_padding2">
        <div class="box b-1">
          <img src="images/w-1.png" alt="">
        </div>
        <div class="box b-2">
          <img src="images/w-2.png" alt="">
        </div>
        <div class="box b-3" id="articles">
          <img src="images/w-3.png" alt="">
        </div>
        <div class="box b-4">
          <img src="images/w-4.png" alt="">
        </div>

        <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
          <label for="arquivo" class="form-label">Selecione um arquivo:</label>
          <input class="form-control" type="file" name="arquivo" id="arquivo">
          <input  type="submit" value="Enviar">
        </form> -->
      </div>
    </div>
    <div id="uploadSection" class="container mt-5">
      <h1 class="text-center mb-5">Listagem de pesquisas</h1>
      <div class="row">
          <?php
          $pdfDirectory = 'uploads/';
          $pdfFiles = glob($pdfDirectory . '*.pdf');

          if (empty($pdfFiles)) {
              echo "<p class='text-center'>Nenhum PDF encontrado.</p>";
          } else {
              foreach ($pdfFiles as $pdfFile) {
                  $pdfFileName = basename($pdfFile);
                  ?>
                  <div class="col-md-4 mb-4">
                      <div class="card text-center">
                          <img style="margin:0 auto" src="images/pdf-ico.svg" class="card-img-top w-25 pt-2" alt="PDF Icon">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $pdfFileName; ?></h5>
                              <a href="<?php echo $pdfFile; ?>" class="btn btn-primary" download>Baixar</a>
                          </div>
                      </div>
                  </div>
                  <?php
              }
          }
          ?>
      </div>

      <div class="row justify-content-center mt-5">
          <div class="col text-center">
              <h2 class="pb-7">Enviar uma pesquisa</h2>
              <p class="text-danger">Máximo 15mb</p>
          </div>
      </div>
    <div class="mt-2 row justify-content-center">
      <div class="col-6">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="text-center">
          <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="arquivo">
              <label class="custom-file-label" for="customFile">Escolha um arquivo</label>
          </div>
          <button type="submit" class="btn btn-primary mt-5 mb-4">Enviar</button>
        </form>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="excluir_pdf.php" method="post">
          <label for="pdfFile">Selecione o PDF para excluir:</label>
          <select class="form-control" name="pdfFile" id="pdfFile">
              <?php
              $pdfDirectory = 'uploads/';
              $pdfFiles = glob($pdfDirectory . '*.pdf');

              foreach ($pdfFiles as $pdfFile) {
                  $pdfFileName = basename($pdfFile);
                  echo "<option value='$pdfFileName'>$pdfFileName</option>";
              }
              ?>
          </select>
      </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 mt-3">
          <input class="form-control btn-primary" type="submit" value="Excluir PDF">
        </div>
      </div>
      </form>
  </section>
  <!-- end work section -->
  <!-- client section -->
  <section class="client_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          O que os especialistas dizem sobre as ameaças cibernéticas ?
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel">
            <div class="item">
                <div class="box">
                    <div class="detail-box">
                        <h5>
                        IBM Security X-Force <br>
                        </h5>
                        <img src="images/quote.png" alt="">
                        <p>
                        Segundo o grupo de pesquisa X-Force, o tempo de disseminação dos ataques ransomware diminuiram cerca
                        de 95%, o que quer dizer que estão mais rápidos e efetivos.
                        </p>
                    </div>
                </div>  
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
      <div class="col-md-3">
          <div class="info_contact">
            <a href="https://unifil.br" target="_blank">
              <img src="images/unifil-placeholder.jpg" class="w-75" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_contact">
            <h5 id="contato-info">
              Sobre a instituição
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Av. Juscelino Kubitscheck, 1626
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +55 (43) 3375-7474
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                contato@unifil.br
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
                <div>
                    <a href="">
                    <div class="insta-box b-1">
                        <a target="_blank" href="https://www.instagram.com/unifillondrina/">
                            <img src="images/insta.png" alt="">
                        </a>
                    </div>
                    </a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->

  <!-- modal -->
  <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModalLabel">Upload de arquivos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="uploadModalBody">
          <!-- A mensagem de sucesso ou erro será inserida aqui -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  $('.custom-file-input').on('change', function() { 
      let fileName = $(this).val().split('\\').pop(); 
      $(this).next('.custom-file-label').addClass("selected").html(fileName); 
  });

  window.onload = function() {
      if (typeof uploadMessage !== 'undefined') {
          document.getElementById('uploadModalBody').textContent = uploadMessage;
          $('#uploadModal').modal('show');
      }
  };
  </script>
  <!-- end owl carousel script -->

</body>

</html>