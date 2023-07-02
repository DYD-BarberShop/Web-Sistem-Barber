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
<script src="<?php echo base_url(); ?>assets/cliente/pluggins/customselect.js"></script>
<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
</body>
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
</html>
