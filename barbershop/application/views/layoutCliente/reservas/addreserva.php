<div class="wrapper">

<section id="global-header">
  <div class="container">
    <div class="row"></div>
  </div>
</section>

<section id="blog-left">
  <div class="container">
    <div class="row">

      <div class="title">
						<h2>Proceso de reserva</h2>
			</div>
      
      <div class="col-lg-4 col-md-12">

        <div id="v-cal">
          <div class="vcal-header">
            <button class="vcal-btn" data-calendar-toggle="previous"><i class="fa fa-angle-left"></i></button>
            <div class="vcal-header__label" data-calendar-label="month"> March 2017</div>
            <button class="vcal-btn" data-calendar-toggle="next"><i class="fa fa-angle-right"></i></button>
          </div>

          <div class="vcal-week">
            <span>LU</span>
            <span>MA</span>
            <span>MI</span>
            <span>JU</span>
            <span>VI</span>
            <span>SA</span>
            <span>DO</span>
          </div>
          <div class="vcal-body" data-calendar-area="month"></div>
        </div>


        <label for="potencial ">Baberos disponibles</label>
        <select name="potencial" id="potencial" class="custom-select sources" >
          <?php foreach($barbers as $barber):?>
            <option value="<?php echo $barber->id?>" role="<?php echo $barber->imagen;?>"><?php echo $barber->nombre;?></option>
          <?php endforeach;?>
        </select>

      </div>


      <div class="col-lg-8 col-md-12">
        <div class="row">
            <h4 class="text-center titulo-hora" >Horas disponibles</h4>
            <div id="horas"></div>          
        </div>
      </div>

    </div>
  </div>
</section>
</div>
