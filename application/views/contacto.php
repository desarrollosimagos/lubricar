<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mt-xs">Contactos <span>Envíenos un mensaje o llámenos para más información</span></h1>
				<ul class="breadcrumb breadcrumb-valign-mid">
					<li><a href="public">Inicio</a></li>
					<li class="active">Contactos</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container">

	<div class="row mt-lg">
		<div class="col-md-4">
			<div class="feature-box feature-box-style-2">
				<div class="feature-box-icon">
					<i class="icon-login icons"></i>
				</div>
				<div class="feature-box-info">
					<h4 class="mb-sm">Dirección</h4>
					<p class="font-size-lg">
						Edificio Torre de Las Américas <br>
						Planta Baja, local No. 19
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="feature-box feature-box-style-2">
				<div class="feature-box-icon">
					<i class="icon-phone icons"></i>
				</div>
				<div class="feature-box-info">
					<h4 class="mb-sm">Teléfono</h4>
					<p class="font-size-lg">
						123-456-7890 <br>
						123-456-7891
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="feature-box feature-box-style-2">
				<div class="feature-box-icon">
					<i class="icon-envelope icons"></i>
				</div>
				<div class="feature-box-info">
					<h4 class="mb-sm">Email</h4>
					<p class="font-size-lg">
						<a href="mailto:contacto@lubricardelivery.com" class="text-decoration-none">contacto@lubricardelivery.com</a><br>
					</p>
				</div>
			</div>
		</div>
	</div>

	<hr class="solid">

	<div class="row pt-lg mb-lg pb-xl">
		<div class="col-md-6">
			<div id="googlemaps" class="google-map m-none mb-xl"></div>
		</div>
		<div class="col-md-6">

			<h4 class="font-weight-semibold mb-xlg">Envíenos un mensaje</h4>

			<div class="alert alert-success hidden mt-lg" id="contactSuccess">
				<strong>Success!</strong> Your message has been sent to us.
			</div>

			<div class="alert alert-danger hidden mt-lg" id="contactError">
				<strong>Error!</strong> There was an error sending your message.
				<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
			</div>

			<form id="contactForm" action="php/contact-form.php" method="POST">
				<div class="row">
					<div class="form-group">
						<div class="col-md-12">
							<input type="text" placeholder="Tu nombre" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-12">
							<input type="email" placeholder="Tu Correo Electrónico" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-12">
							<input type="text" placeholder="Asunto" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-12">
							<textarea maxlength="5000" placeholder="Mensaje" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="submit" value="Enviar" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
					</div>
				</div>
			</form>

		</div>
	</div>

</div>
