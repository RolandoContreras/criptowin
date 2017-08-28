<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view("head");?>
	<body>
            <!--START NAV-->
		<?php $this->load->view("nav");?>
            <!--END START NAV-->
		<section class="contact_header top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                                            <h2><?php echo replace_vocales_voculeshtml("Plan de Inversión");?></h2>
					</div>
				</div>
			</div>
		</section>
		<section class="service1-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<aside>
							<div class="list-group">
                                                            <a href="<?php echo site_url().'plan';?>" class="list-group-item active disabled"><?php echo replace_vocales_voculeshtml("Rentabilidad por Inversión");?></a>
								<a href="<?php echo site_url().'plan';?>"  class="list-group-item"><?php echo replace_vocales_voculeshtml("Bono por Referidos");?></a>
								<a href="<?php echo site_url().'';?>"  class="list-group-item"><?php echo replace_vocales_voculeshtml("Bono Binario");?></a>
								<a href="<?php echo site_url().'';?>"  class="list-group-item"><?php echo replace_vocales_voculeshtml("Apuesta en Vivo");?></a>
							</div>

							<div class="brochures-download">
                                                            <h3><?php echo replace_vocales_voculeshtml("Descargar Plan de Compensación");?></h3>
								<div class="list-group">
									<a href="#"  class="list-group-item download-pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Plan de Pagos CW</a>
								</div>
							</div>

							<div class="request-quote">
								<h4><?php echo replace_vocales_voculeshtml("Obtén un Paquete");?></h4>
                                                                <p><?php echo replace_vocales_voculeshtml("Obtenga orientación profesional para crear y administrar su negocio.");?></p>
                                                                <a class="btn btn-default hvr-bounce-to-right" href="<?php echo site_url().'contact';?>" role="button"><?php echo replace_vocales_voculeshtml("Contáctenos");?></a>
							</div>
						</aside>
					</div>
					<div class="col-md-8">
						<div class="service-right-content">
							<div class="service-first">
								<div class="img-box">
                                                                    <img src="<?php echo site_url().'static/page_front/images/plan/business_plan.jpg';?>" alt=""/>
								</div>
                                                            <h2><?php echo replace_vocales_voculeshtml("Planificación Financiera")?></h2>
								<p>
									Ruis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo. nim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu. Ruis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur?

									Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo. nim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu.
								</p>
								<blockquote>
									Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.
								</blockquote>

							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="image">
										<img src="img/Leadership.png" alt="" />
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<h3>How strategy works</h3>
									<p>
										Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo.
									</p>
									<ul>
										<li>
											<i class="fa fa-star" aria-hidden="true"></i>Nec sagittis sem nibh id elit
										</li>
										<li>
											<i class="fa fa-star" aria-hidden="true"></i>Ruis nostrum exercitationem ullam
										</li>
										<li>
											<i class="fa fa-star" aria-hidden="true"></i>Corporis suscipit laboriosam
										</li>
									</ul>
								</div>
							</div>
							<div class="height-50"></div>
							<div class="row">
								<div class="col-md-4">
									<div class="service-business">
										<i class="fa fa-diamond" aria-hidden="true"></i>
										<h4>Manufacturing</h4>
										<p>
											Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="service-business">
										<i class="fa fa-globe" aria-hidden="true"></i>
										<h4>Business Strategy</h4>
										<p>
											Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="service-business">
										<i class="fa fa-users" aria-hidden="true"></i>
										<h4>Advice consulting</h4>
										<p>
											Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur
										</p>
									</div>
								</div>
							</div>
							<div class="height-50"></div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- last section -->
		<section class="get-quote">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<h3>We Always Try to make a Difference</h3>
						<p>
							Nunc ac sapien lobortis, eleifend orci eu, vulputate mauris.  Quisque sed pharetra justo, a dictum eros.
						</p>
					</div>
					<div class="col-lg-3">
						<a class="btn btn-default hvr-bounce-to-right-reverse" href="#" data-text="read-more">GET A QUOTE</a>
					</div>
				</div>
			</div>

		</section>
		<!-- FOOTER SECTION -->
               <?php $this->load->view("footer");?>
		<!--END FOOTER SECTION-->
	</body>
</html>
