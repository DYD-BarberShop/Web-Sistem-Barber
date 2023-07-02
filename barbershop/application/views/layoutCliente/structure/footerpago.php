<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <div class="media-link">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

<script src="<?php echo base_url(); ?>assets/cliente/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/lightbox.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/html5lightbox.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/jquery.mixitup.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/jquery.scrollUp.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/jquery.sticky.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/jquery.nav.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/pluggins/calendar.js"></script>
<script src="<?php echo base_url(); ?>assets/cliente/pluggins/customselect.js"></script>
<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
<script>
   
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        time=minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }

        if (time=="00:00") {
          alert("Se agotó su tiempo de reserva");
          eliminarPrereserva();
        }
        
    }, 1000);
}

window.onload = function () {
  var fiveMinutes = 60 * 5,
  display = document.querySelector('#tiempopago');
  startTimer(fiveMinutes, display);
};

if (window.performance) {
  console.info("window.performance works fine on this browser");
}

if (performance.navigation.type == 1) {
  alert("No puede actualizar la página o reservar en varias ventanas mientras realiza la reserva, gracias");
  eliminarPrereserva();
} 

function eliminarPrereserva(){
    location.href="<?php echo  base_url(); ?>clientes/Pago/eliminar";
}
</script>
<script>
  function onLoad() {
    gapi.load('auth2', function() {
      gapi.auth2.init();
    });
  }

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.disconnect ();
    window.location.href="<?php echo base_url(); ?>clientes/Login/logout";
  }
</script>
</body>
</html>
