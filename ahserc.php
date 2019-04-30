<?php include_once 'assets/includes/header.html' ?>
  <?php include_once 'assets/includes/navbar-collapse.html'?>
  <?php include_once 'assets/includes/navbar-expanded.html'?>
  <?php include_once 'assets/includes/navbar-scroll.html'?>

  <!-- Banner -->
  <div style="width: 100vw;height: calc(100vh - 110px);position: relative;display: block;background-image: url('assets/images/caroussel05.jpg');background-size: cover;background-position: center;"></div>
  <!-- Banner -->

  <?php include_once 'assets/includes/middlebar.html' ?>

  <div class="section empreendimentos" id="empreendimentos">
    <div style="margin-top: 4%;">
      <h4>Residencial Ahserc</h4>
      <div class="row">
        <div class="col-sm-6" style="width: 100%; padding: 0px;">
          <img style="width: 100%;" src="assets/images/ahserc-fachada.png" alt="">
        </div>
        <div class="col-sm-6" style="width: 100%; padding: 0px;">
          <img style="width: 100%;" src="assets/images/ahserc-decorado.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div id="desc" style="background-color: #efefef; padding-top: 10%; padding-bottom: 5%;">
    <div class="section">
      <div style="background-color: #e6e6e6; width: 50%;" class="content container">
        <img src="assets/images/icon-geo.png" alt="">
        <dl>
          <dd>- Localizado na quadra 614 de samambaia</dd>
          <dd>- Atrás do hospital regional de samambaia </dd>
          <dd>- Ao lado da via de ligação com taguatinga </dd>
          <dd>- Vista livre para área verde d setor em chácaras de samambaia</dd>
          <dd>- Localização privilegiada. Em uma das quadras mais valorizadas de Samambaia</dd>
        </dl>
      </div>
    </div>

    <div class="section" style="margin-top: 7%;">
      <div style="background-color: #e6e6e6;width: 50%;" class="content container">
        <img id="desc2" src="assets/images/icon-build.png" alt="">
        <dl>
          <dd>- Prédio de 12 andares e garagem no subsolo</dd>
          <dd>- 2 elevadores</dd>
          <dd>- 1 vaga de garagem por unidade (apartamento)</dd>
          <dd>- 46 apartamentos de 02 quartos com varanda</dd>
          <dd>- 46 apartamentos de 02 quartos sem varanda</dd>
          <dd>- Metragem aproximada de 57 m²</dd>
          <dd>- Condomínio fechado</dd>
          <dd>- Guarita</dd>
          <dd>- Espaço no terraço (12º andar) destinado a área de lazer</dd>
          <dd>- Sistema de reaproveitamento de água pluvial </dd>
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
            <img src="assets/images/ahserc1.jpg" alt="Planta 1 quarto" />
            <img src="assets/images/ahserc2.jpg" alt="Planta 2 quartos" />
            <img src="assets/images/ahserc3.jpg" alt="Planta 2 quartos" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Downside HTML -->
  <?php include_once 'assets/includes/downside.html' ?>
