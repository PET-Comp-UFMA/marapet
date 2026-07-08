<?php
require_once('html_header.php');
require_once('header.php');
?>

<body>
<main id="main">
    <!--==========================
            Intro Section
        ============================-->

    <div id="carouselExampleControls" class="carousel" data-ride="carousel">
        
        <div class="carousel-inner">
            <div id="intro" class="carousel-item active">
                <div class="slider-banner">
                    <div class="intro-container wow fadeIn">
                        <h1>V MARAPET</h1>

                        <!-- <h2 style="color: white;">Temática</h2> -->
                        
                        <a href="#about-event" class="about-btn text-decoration-none">
                          <b>Sobre o evento</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==========================
            About Section
        ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <center>
                    <div class="col-lg-12">
                        <h2>Temática</h2>
                        <p>
                          PET Maranhão: Ciência que se faz terra, gente e cultura.
                        </p>
                    </div>
                </center>
            </div>
        </div>
    </section>


    <section id="about-event" class="wow fadeInUp section-with-bg" style="visibility: visible; animation-name: fadeInUp;">

      <div class="container ">
        <div class="section-header">
          <h1 class="black">Sobre o Evento</h1>
        </div>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="black">Objetivo</h2>
            <p>
              O MARAPET é um evento acadêmico vinculado e organizado pelos Grupos PET do estado do Maranhão, que tem por objetivo promover uma maior interação entre os grupos PET existentes no referido estado. 
            </p>
          </div>
        </div>
      </div>

      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="black">Histórico ou Destaques do Evento</h2>
            <p>
              A primeira edição, realizada na UFMA, em 2014, contou com a participação de aproximadamente 250 petianos, além da maciça presença da comunidade acadêmica.
            </p>
            <p>
              O “Ensino, pesquisa e extensão: dilemas e possibilidades da educação pública no Maranhão” foi o tema da segunda edição do MARAPET, que aconteceu de 05 a 07 de outubro de 2016, no Centro Pedagógico Paulo Freire, na Cidade Universitária Dom Delgado. O evento propos reunir os grupos PET do Maranhão e dar visibilidade ao programa no Estado. Na segunda edição, o principal objetivo era discutir os dilemas da educação pública superior no Maranhão e as possíveis soluções por meio das práticas de ensino, pesquisa e extensão na perspectiva do Programa de Educação Tutorial PET.
            </p>
            <p>
              No III Encontro Maranhense dos Grupos de Programa de Educação Tutorial - MARAPET. A edição veio com uma novidade especial: foi aberto a todos os acadêmicos, das Universidades Federal, Estadual e Faculdades Particulares de Imperatriz e Região. O evento contou com Apresentação de Trabalhos na forma (Oral/Pôster); Oficinas; Mesas Redondas; Mini-Cursos; Palestras e Certificados. O III MARAPET foi realizado nos dias 16, 17 e 18 de Novembro de 2017, na Universidade Federal do Maranhão, Campus Imperatriz.
            </p>
            <p>
              Na IV edição do Encontro Maranhense dos Grupos de Educação Tutorial (Marapet), realizado entre os dias 20 e 22 de março de 2019, tinha como tema “Educação, inclusão e inovação: desafios contemporâneos para o ensino superior no Maranhão”.
            </p>
            <p>
              A programação foi constituída de mesa de discussão sobre o tema principal do evento.  Oficinas “Como Preencher o Currículo Lattes”; “Tecnologia Ambientalmente Saudável e de Baixo Custo (Produção de Tinta de Terra)”; “Culinária Vegana para Iniciantes”, “Metodologias para o Gerenciamento de Projetos”, “Introdução ao Balé Clássico: História, Nomenclaturas e Sequência Coreográficas”, “Técnicas Circenses — Aéreo”; “Fotografia” e “Massoterapia”, também estavam inseridas no evento, apresentações de curtas e documentários como: “Ciclovida”, “Veganismo — Além do prato”; “Absorvendo o Tabu”; “Maio de 68: o início dos movimentos universitários”, “Ovelha negra”, “Se essa rua fosse minha” e “Preto no branco”.
            </p>

          </div>
        </div>
      </div>
    </section>

    <!-- Sobre o evento -->
    <!--====================
            Organização
        ======================-->
    <section id="supporters" class="wow fadeInUp section-with-bg">
        <div class="container ">
            <div class="section-header">
                <h2 class="color: black">REALIZAÇÃO</h2>
            </div>
            <div class="supporter-logo2">
              <a href="#" target="_blank">
                <img src="../img/supporters/logo-ufma2.png" class="img-fluid" alt="">
              </a>
            </div>

            <div class="section-header">
                <h2 class="color: black" style="margin-top: 20px;">PATROCÍNIO</h2>
            </div>
            <div class="patrocinio-container">
            <div class="supporter-logo3">
              <a href="https://www.gov.br/mec/pt-br" target="_blank">
                <img src="../img/supporters/MEC.png" class="img-fluid" alt="">
              </a>
              <a href="https://www.gov.br/fnde/pt-br" target="_blank">
                <img src="../img/supporters/fnde.png" class="img-fluid" alt="">
              </a>
            </div>
            </div>
    </section>

</main>

<?php
require_once('footer.php');
require_once('html_footer.php');
?>
</body>