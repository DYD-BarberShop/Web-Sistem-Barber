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
<script src="<?php echo base_url(); ?>assets/cliente/pluggins/calendar.js?v=1.1"></script>
<script src="<?php echo base_url(); ?>assets/cliente/pluggins/customselect.js?v=1.1"></script>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
<script>
$(document).ready(function(){
        
    window.addEventListener('load', function () {
        vanillaCalendar.init({
            disablePastDays: true
        });
    })
        
	// Enable pusher logging - don't include this in production
    var pusher = new Pusher('191dbef1780135573650');
    var channel = pusher.subscribe('chatglobal');

    channel.bind('my_event', function(data) {
        sendmessage(data);
    });
        	
    function sendmessage(data){
        var ses_id = <?php echo $this->session->userdata('id')?$this->session->userdata('id'):'null';?>;
        var fecha = sessionStorage.getItem("fechaselect");

        if(data.id == ses_id){
          
        }else{
            datoHoras(fecha);
        }
    }


    $(document).on("click",".hours", function() {
        idh=this.id;
        fecha=$(this).attr("fech");
        barbero =sessionStorage.getItem("barbero");
        $.ajax({
            url: "<?php echo base_url(); ?>clientes/Hora/preReserva",
            type: 'POST',
            data:{idh:idh,fecha:fecha,barbero:barbero, servicio: <?php echo $this->session->userdata("idServicio");?>},
            dataType:"json",
            success:function() { 
              location.href="<?php echo base_url(); ?>clientes/Pago";
            }    
        });

    });

});

function datoHoras(fecha){
  $.ajax({
    url:"<?php echo base_url(); ?>clientes/Hora/getData",
    type:"POST",
    data:{fecha: fecha},
    dataType:"json",
    success:function(data){

      var html=new Array();

        $.each(data, function(key, value) {
          html.push(
            '<div class="col-lg-4 col-sm-3 " >'+
            '<div class="hours" id="'+value.id+'"  fech="'+fecha+'">'+
              '<h4>'+value.inicio+'-'+value.fin+'</h4>'+
            '</div>'+
          '</div>'
          );
        });

        $("#horas").html(html);
    }
  });
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
