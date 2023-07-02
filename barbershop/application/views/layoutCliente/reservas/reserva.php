
<div class="wrapper">
  <section id="global-header">
  </section>

  <section id="reserva">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2 style="color:#ffffff;">Tu Historial de reservas</h2>
            <p style="color:#ffffff;">Estas son todas tus reservas</p>
          </div>
          <div id="reserva-post" class="owl-carousel">
            <?php if (!empty($reservas)): ?>
            <?php foreach ($reservas as $reserva): ?>
            <div>
              <div class="block">
                <br>
                <div class="col-md-1">
                </div>
                <img src="<?php echo base_url(); ?>assets/cliente/img/cortesMes/<?php echo $reserva->imagen;?>"  class="img-responsive imgreserva">
                <div class="content">
                  <h3><?php echo $reserva->nombre; ?></h3>
                  <small><?php echo $reserva ->stilo; ?></small>
                  <br>
                  <br>
                  <h3><?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); $fecha = strftime("%d de %B de %Y", strtotime("$reserva->fecha")); echo $fecha;?></h3>
                  <h4><?php echo date("g:i a",strtotime("$reserva->inicio"));?> - <?php echo date("g:i a",strtotime("$reserva->fin"));?></h4>
                  <br>
                  <p>
                  <?php echo $reserva->descripcion; ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
