<?php include_once 'assets/includes/header.html' ?>
  <?php include_once 'assets/includes/navbar-collapse.html'?>
  <?php include_once 'assets/includes/navbar-expanded.html'?>
  <?php include_once 'assets/includes/navbar-scroll.html'?>


  <!-- Banner -->
  <div style="width: 100vw;height: calc(100vh - 110px);position: relative;display: block;background-image: url('assets/images/caroussel07.jpg');background-size: cover;background-position: center;"></div>
  <!-- Banner -->

  <!-- Middle Bar -->
  <?php include_once 'assets/includes/middlebar.html' ?>
  <!-- Middle Bar -->


  <div class="section empreendimentos" id="empreendimentos">
    <div style="margin-top: 4%;">
      <h4>Residencial Antônio Menezes</h4>
      <div class="row">
        <div class="col-sm-6" style="width: 100%; padding: 0px;">
          <img style="width: 100%;" src="images/antonio-menezes-fachada.png" alt="">
        </div>
        <div class="col-sm-6" style="width: 100%; padding: 0px;">
          <img style="width: 100%;" src="assets/images/antonio-menezes-decorado.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div id="desc" style="background-color: #efefef; padding-top: 10%; padding-bottom: 5%;">
    <div class="section">
      <div style="background-color: #e6e6e6; width: 50%;" class="content container">
        <img src="images/icon-geo.png" alt="">
        <dl>
          <dd>- Localizado na quadra 317 de Samambaia</dd>
          <dd>- Próximo ao metrô </dd>
          <dd>- Próximo ao Centro Olímpico de Samambaia </dd>
        </dl>
      </div>
    </div>

    <div class="section" style="margin-top: 7%;">
      <div style="background-color: #e6e6e6;width: 50%;" class="content container">
        <img id="desc2" src="images/icon-build.png" alt="">
        <dl>
          <dd>- Prédio de 9 andares e garagem no subsolo </dd>
          <dd>- Todos os apartamentos com varanda</dd>
          <dd>- 2 elevadores</dd>
          <dd>- Apartamentos de 02 quartos</dd>
          <dd>- 54 apartamentos</dd>
          <dd>- Condomínio fechado</dd>
          <dd>- Guarita</dd>
          <dd>- Sistema de reaproveitamento da água pluvial </dd>
          <dd>- Hidrômetros individualizados </dd>
        </dl>
      </div>
    </div>
    <?php include_once 'assets/includes/desc3.html' ?>
  </div>

  <!-- Conheça Mais -->
  <?php include_once 'assets/includes/conheca-mais.html' ?>
  <!-- Conheça Mais -->

  <!-- Footer -->
  <?php include_once 'assets/includes/footer.php' ?>
  <!-- Footer -->

  <!-- Footer Whatsapp -->
  <?php include_once 'assets/includes/footer-whatsapp.html' ?>
  <!-- Footer Whatsapp -->



  <!-- Modal -->
  <div class="modal fade" id="modalFabio" tabindex="-1" role="dialog" aria-labelledby="modalFabioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalFabioLabel">Plantas do empreendimento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="owl-carousel carousel1 banner-carousel owl-theme">
            <img src="images/1.png" />
            <img src="images/2.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once 'assets/includes/downside.html' ?>
