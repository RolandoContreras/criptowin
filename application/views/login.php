<!DOCTYPE html>
<html lang="en">
 <!--HEAD-->
 <?php $this->load->view("head");?>
 <!--END HEAD-->
    <body>
 <!----NAV-->
 <?php $this->load->view("nav");?>
 <!--END NAVS-->
        <section class="contact_header top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo replace_vocales_voculeshtml("Inicio de Sesión");?></h2>
                    </div>
                </div>
            </div>
        </section>
            <div class="height-50"></div>
                   <section class="contact_us-second">
                       <div class="container">
                           <div class="row">
                		<div class="col-md-12 col-sm-12 col-xs-12">
                                    <header>
                                        <h2><?php echo replace_vocales_voculeshtml("Bienvenido a CRIPTOWIN");?></h2>
                                    </header>
                                    <div class="height-50"></div>
                               <form class="contact-formm">
                                   <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                        <label>Usuario</label>
                                        <input id="name" type="text" name="name">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("Contraseña");?></label>
                                        <input id="last_name" type="password" name="email">
                                      </div>
                                    </div>
                                        <div class="col-md-12">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("¿Olvidaste tu contraseña? ");?></label>
                                      </div>
                                    </div>
                                       
                                       <div class="col-md-12">
                                      <div class="form-grp">
                                          <input class="btn btn-default hvr-bounce-to-right" disabled="disabled" onclick="crear_registro();" value="<?php echo replace_vocales_voculeshtml("Iniciar Sesión");?>" />
                                      </div>
                                      
                                        <div id="success">
                                        </div>
                                    </div>
                                   </div>
                                </form>
                            </div>
                    </div>
                </div>
        </section>
        <br><br>
        <script src="<?php echo site_url().'static/page_front/js/register.js';?>"></script>
        <script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>
            <?php $this->load->view("footer");?>
        <!--END FOOTER SECTION-->
	</body>
</html>
