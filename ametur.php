<?php include_once 'assets/includes/header.html' ?>
<?php include_once 'assets/includes/navbar-collapse.html'?>
<?php include_once 'assets/includes/navbar-expanded.html'?>
<?php include_once 'assets/includes/navbar-scroll.html'?>

<!-- Banner -->
<div style="width: 100vw;height: calc(100vh - 110px);position: relative;display: block;background-image: url('assets/images/caroussel06.jpg');background-size: cover;background-position: center;"></div>
<!-- Banner -->

<!-- Middle Bar -->
<?php include_once 'assets/includes/middlebar.html' ?>
<!-- Middle Bar -->

<div class="section empreendimentos" id="empreendimentos">
  <div style="margin-top: 4%;">
    <h4>Residencial Ametur</h4>
    <div class="row">
      <div class="col-sm-6" style="width: 100%; padding: 0px 0px;">
        <img style="width: 100%; height: 100%;" src="assets/images/ametur-fachada.jpg" alt="">
      </div>
      <div class="col-sm-6" style="width: 100%; padding: 0px;">
        <img style="width: 100%;" src="assets/images/ametur-decorado.png" alt="">
      </div>
    </div>
  </div>
</div>

<div id="desc" style="background-color: #efefef; padding-top: 10%; padding-bottom: 5%;">
  <div class="section">
    <div style="background-color: #e6e6e6; width: 50%;" class="content container">
      <img src="assets/images/icon-geo.png" alt="">
      <dl>
        <dd>- Localização privilegiada, na Quadra 307 de Samambaia </dd>
        <dd>- Próximo à Administração Regional de Samambaia </dd>
        <dd>- Próximo ao Fórum </dd>
      </dl>
    </div>
  </div>

  <div class="section" style="margin-top: 7%;">
    <div style="background-color: #e6e6e6;width: 50%;" class="content container">
      <img id="desc2" src="assets/images/icon-build.png" alt="">
      <dl>
        <dd>- Prédio de 8 andares e garagem no subsolo </dd>
        <dd>- 2 elevadores</dd>
        <dd>- Apartamentos de 2 quartos</dd>
        <dd>- 52 apartamentos, todos com garagem</dd>
        <dd>- Condomínio fechado </dd>
        <dd>- Guarita</dd>
        <dd>- Espaço no terraço destinado a área de lazer</dd>
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
        <h5 class="modal-title" id="modalFabioLabel">Plantas do Empreendimento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="owl-carousel carousel1 banner-carousel owl-theme">
          <img src="assets/images/ametur1.jpg" />
          <img src="assets/images/ametur2.jpg" />
          <img src="assets/images/ametur3.jpg" />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<?php include_once 'assets/includes/downside.html' ?>
