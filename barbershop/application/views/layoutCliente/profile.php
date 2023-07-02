<div class="wrapper">
  <section id="global-header">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </section>

<section id="blog-left">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-1 col-sm-4">
        <div class="widget">
          <div class="widget-body">
            <form action="<?php echo base_url();?>clientes/usuario/changeImage" method="POST" enctype="multipart/form-data">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/template/clienteTemplate/img/usuario/<?php echo $this->session->userdata("imagen") ?>" style="width:300px;height:300px; border-radius:50%;" alt=""/>
            <br>
            <div class="input-file-container form-group">
              <input class="input-file" id="my-file" type="file" name="imagen" >
              <label tabindex="0" for="my-file" class="input-file-trigger">Select a file...</label>
            </div>
            <button class="btn btn-primary col-md-12" type="submit">Guardar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-1 ">
      </div>
      <div class="col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1">

        <div class="addcomment">
          <span>Profile</span>
          <div class="blog-comment-form">

            <form action="<?php echo base_url();?>clientes/usuario/update" method="POST">

                <input type="text"  name="nombres" class="form-control" placeholder="Nombre" value="<?php echo $this->session->userdata("nombres") ?>">
                <input type="text"  name="email"   class="form-control" placeholder="Email"  value="<?php echo $this->session->userdata("email") ?>">
                <button class="btn btn-default" type="submit">Actualizar</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
</div>
