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
                        <h2><?php echo replace_vocales_voculeshtml("Registro");?></h2>
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
                                        <h2><?php echo replace_vocales_voculeshtml("Formulario de Registro");?></h2>
                                    </header>
                                    <div class="height-50"></div>
                                        <form action="#" method="POST" class="contact-formm">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label>Usuario</label>
                                        <input id="username" type="text" name="name">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                        <label>Nombres</label>
                                        <input id="name" type="text" name="name">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                        <label>Apellidos</label>
                                        <input id="email" type="text" name="email">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                          <label><?php echo replace_vocales_voculeshtml("Contraseña");?></label>
                                        <input id="name" type="text" name="name">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("Repetir Contraseña");?></label>
                                        <input id="email" type="text" name="email">
                                      </div>
                                    </div> 
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("Dirección");?></label>
                                        <input id="subject" type="text" name="subject">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("Teléfono");?></label>
                                        <input id="subject" type="text" name="subject">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("DNI");?></label>
                                        <input id="subject" type="text" name="subject">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("Correo Electrónico");?></label>
                                        <input id="subject" type="text" name="subject">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("Fecha de Nacimiento");?></label>
                                        <select  name="dia" id="dia">
                                            <option value=""><?php echo replace_vocales_voculeshtml("Día")?></option>
                                                <?php  for ($x = 1; $x <= 31; $x++) {  ?>
                                                    <option value="<?php echo $x?>"><?php echo $x;?></option>
                                                <?php } ?>
                                        </select>
                                    
                                        <select id="subject" name="mes" id="mes">
                                            <option value="">Mes</option>
                                                    <option value="01">Enero</option>
                                                    <option value="02">Febrero</option>
                                                    <option value="03">Marzo</option>
                                                    <option value="04">Abril</option>
                                                    <option value="05">Mayo</option>
                                                    <option value="06">Junio</option>
                                                    <option value="07">Julio</option>
                                                    <option value="08">Agosto</option>
                                                    <option value="09">Setiembre</option>
                                                    <option value="10">Octubre</option>
                                                    <option value="11">Noviembre</option>
                                                    <option value="12">Diciembre</option>
                                        </select>
                                        <select  name="ano" id="ano" class="password_text" >
                                                    <option selected="selected" value="">A&ntilde;o</option>
                                                        <?php  for ($x = 1950; $x <= 2016; $x++) {  ?>
                                                            <option value="<?php echo $x?>"><?php echo $x;?></option>
                                                        <?php } ?>
                                        </select> 
                                      </div>
                                    </div>  
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("País");?></label>
                                         <select class="password_text" onchange="validate_region(this.value);" name="pais" id="pais" class="ui dropdown">
                                            <option  selected value=""><?php echo replace_vocales_voculeshtml("País");?></option>
                                                <?php  foreach ($obj_paises as $key => $value) { ?>
                                                       <option  value="<?php echo $value->id;?>"><?php echo $value->nombre;?></option>
                                                <?php } ?>
                                        </select>
                                        <select  name="region" id="region" class="password_text">
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label><?php echo replace_vocales_voculeshtml("Ciudad");?></label>
                                        <input id="subject" type="text" name="subject">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <button onclick="crear_registro();" class="btn btn-default hvr-bounce-to-right" type="submit">Crear Cuenta</button>
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
            <?php $this->load->view("footer");?>
        <!--END FOOTER SECTION-->
	</body>
</html>
