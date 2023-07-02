<section id="features">
			<div class="container">
				<div class="row">
                    <div class="title">
			        </div>
                    
					<div class="col-md-12">
						<div class="title">
							<h2>Detalles de rerva </h2>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-6 col-xs-6 col-sm-6">
                        <img class="imgpago" src="<?php echo base_url(); ?>assets/cliente/img/cortesMes/untitled.png">
					</div>
					<div class="col-md-6 col-xs-6 col-sm-6">
                        <div class="pago">

                        	<div id="tiempopago"></div>
							<h3><?php echo $prereserva->nombre; ?></h3>
							<hr>
							<h4>$ <?php echo $prereserva->precio; ?></h4>
							<hr>
							<div class="detalle"><?php echo $prereserva->inicio?>-<?php echo $prereserva->fin?></div>
							<p>Fecha: <?php echo strftime("%d de %B de %Y", strtotime(" $prereserva->fecha")); ?></p>
						
							<form action="<?php echo base_url() ?>clientes/Pago/pay" method="post">
								<input type="hidden" name="idservicio" value="<?php echo $prereserva->idservicio; ?>"/>
								<button type="submit" name="id" class="btn btn-read" value="1">Reserva ahora</button>
							</form>

							<div class="text-right">
							<a class="btn btn-read" href="<?php echo base_url(); ?>clientes/Reserva/addreserva/<?php echo $prereserva->idservicio; ?>">Cancelar</a>
							</div>
							
                        </div>
					</div>
				</div>
			</div>
		</section>