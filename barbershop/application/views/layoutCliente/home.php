<div class="wrapper">
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h1>Bienvenido a D&D BARBERSHOP</h1>
							<div class="buttons">
								<a href="<?php echo base_url(); ?>clientes/Login"  class="btn btn-learn">Comenzar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="scrolldown">
	            <a id="scroll" href="#features" class="scroll"></a>
	        </div>
		</section>

		<section id="promocion">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2>Promociones</h2>
						<p>Estos son nuestras promociones</p>
					</div>
					<?php if(!empty($promociones)):?>
					<?php foreach ($promociones as $promocion):?>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="block wow fadeInLeft" data-wow-delay=".3s">
							<img src="<?php echo base_url(); ?>assets/cliente/img/promocion/<?php echo $promocion->imagen?>" alt="" style="width:300px;height:400px; border-radius:5%;"class="img-responsive">
							<div class="promocion-overlay">
								<h3><?php echo $promocion->nombre?><span>descuento :<?php echo $promocion->descuento?> %</span></h3>
								<span class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></span>
								<p><?php echo $promocion->descripcion?></p>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			<?php endif; ?>
				</div>
			</div>
		</section>

		<section id="play-video">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h2 class="wow fadeInUp" data-wow-delay=".3s">ElIGE TU STILO</h2>
							<i class="fa fa-address-book-o" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="corte">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2 style="color:#ffffff;">Cortes de la Semana</h2>
							<p style="color:#ffffff;">Reserva uno de nuestros cortes</p>
						</div>
						<div id="corte-post" class="owl-carousel">
							<?php foreach ($servicios as $servicio): ?>
							<div>
								<div class="block">
									<img src="<?php echo base_url(); ?>assets/cliente/img/cortesMes/<?php echo $servicio->imagen;?>" alt="" style="width:500px;height:600px;"  class="img-responsive">
									<div class="content">
										<h3><?php echo $servicio->stilo; ?></h3>
										<small><?php echo $servicio->nombre; ?></small>
										<br>
										<br>
										<h2>$ <?php echo $servicio->precio; ?></h2>
										<br>
										<p>
										<?php echo $servicio->descripcion; ?>
										</p>
										<?php if (!empty($this->session->userdata("logincliente"))): ?>
											<form action="<?php echo base_url();?>clientes/Reserva/addreserva" method="POST">
												<a href="<?php echo base_url();?>clientes/Reserva/addreserva/<?php echo $servicio->id; ?>" id="reservar" class="btn btn-read" >Reservar</a>
											</form>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section id="barber">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2>Barbers</h2>
						<p>Te presentamos a nuestro mejores barberos<br> </p>
					</div>
					<?php if (!empty($barbers)): ?>
					<?php foreach ($barbers as $barber): ?>
					<div class="col col-md-6">
						<div class="media wow fadeInLeft" data-wow-delay=".3s">
						  <div class="media-left">
						    <a href="#">
						      <img src="<?php echo base_url(); ?>assets/cliente/img/barber/<?php echo $barber->imagen; ?>" style="width:100px;height:100px; border-radius:50%;" alt="">
						    </a>
						  </div>
						  <div class="media-body">
						    <a href="#"><h4 class="media-heading"><?php echo $barber->nombre; ?></h4></a>
						    <p><?php echo $barber->descripcion; ?></p>
						  </div>
						</div>
					</div>
				<?php endforeach; ?>
				<?php endif; ?>

				</div>
			</div>
		</section>

 <section id="contacto" >

        <div class="container">

            <div class="row">
                <div class="col-md-6 margintop-sm contactobarberia">
                
                 
                <h2>INFORMACION DE LA BARBERIA</h2>
				</br>
			   	<li><a><i   class="fa fa-whatsapp"></i>+51 916467397</a></li>
				<li><a  href="https://www.facebook.com/DD-Barbershop-180426252769800"><i class="fa fa-facebook"></i> D&D BarberShop</a></li>
				<li><a><i class="fa fa-google"></i>D&D BarberShop@gmail.com</a></li>
			
                  <p>PON TU ESTILO DE VIDA EN MANOS PROFESIONALES</p>
			  </div>
					  </br>
					  </br>
                    <div class="col-md-6 margintop-sm">
                    <div class="col-md-6">
                        <div class="col-md-6">
                        <div class="form-group">
                  			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.059598989967!2d-76.9574701!3d-12.039418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c68230f73dcb%3A0xa0222e7adf1bd619!2sBarber+Shop+D%26D!5e0!3m2!1ses!2spe!4v1563054405282!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                		</div>
                 </div>               
                </div>
            </div>
        </div>
    </section>
		
	</div>
</html>

